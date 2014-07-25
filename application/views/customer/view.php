<?php
//customer/mylist.php
	$this->load->view($this->config->item('theme') . 'header');
	
	echo '<h1>Customer Details</h1>';
	
	if($query->num_rows()>0)
	{//loop through data
		foreach($query->result() as $customer)
		{
			echo '<div>';
			echo '<h3>CustomerID: ' . $customer->CustomerID . '</h3>';
			echo '<p>FirstName: ' . $customer->FirstName . '</p>';
			echo '<p>LastName: ' . $customer->LastName . '</p>';
			echo '<p>Email: ' . $customer->Email . '</p>';
			echo '</div>';
		}
	}else
	{//sorry no such customer
		echo '<p>Sorry, no customers.</p>';
	}
	$this->load->view($this->config->item('theme') . 'footer');
?>