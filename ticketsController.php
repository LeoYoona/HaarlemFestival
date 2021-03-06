<?php

require_once "ticketsService.php";

class ticketsController
{
    private $ticketsService = NULL; 

	public function __construct()	
	{
		$this->ticketsService = new ticketsService();
    }

	public function getTickets($t_id){  //get ticket id from view as pram. and returns ticket data
		return $this->ticketsService->getTickets($t_id);
	}
	
	public function getDanceJazzTickets($t_id){  
		return $this->ticketsService->getDanceJazzTickets($t_id);
	}

	public function getJazzTicketInfo($t_id){  
		return $this->ticketsService->getJazzTicketInfo($t_id);
	}
}

?>