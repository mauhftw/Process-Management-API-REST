<?php

class ProcessesController extends BaseController {


/*List all processes*/

public function index() {												
	$processes = Process::all();
	return Response::json(array('Processes' => $processes));
	}

/*Delete a process*/

public function destroy($pid) {											
			$status = Process::find($pid);
			if ($status == '404'){
				return Response::json(array('status' => '404', 'descr' => 'not found'));
			} else {
				$process = Process::deleteproc($pid);
				return Response::json(array('status' => '200', 'descr' => 'OK','result' => $process));
				
		}
	}

/*Repriorize a process*/

public function update($pid) {
	$process = new Process;
	$process->pid = $pid;									
	$process->prio = Input::get('prio');
	$status = Process::find($process->pid);

	if ($status == '404'){
		return Response::json(array('status' => '404', 'descr' => 'not found'));
	} else {											
		$process = Process::repriorize($process->pid, $process->prio);
		return Response::json(array('status' => '200', 'result' => $process));
		}
	}

/*Execute a process*/

public function store() {
	$process = new Process;
	$process->cmd = Input::get('cmd');									
	$process = Process::launch($process->cmd);
	return Response::json(array('status' => '200', 'result' => $process));
	}

}
