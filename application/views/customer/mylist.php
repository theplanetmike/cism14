<?php
//customer/mylist.php
	$this->load->view($this->config->item('theme') . 'header');
	
	echo '<h1>List of Customers</h1>';
	
	if($query->num_rows()>0)
	{//loop through data
		foreach($query->result() as $customer)
		{
			echo '<div>';
			echo '<h3>CustomerID: ' . $customer->CustomerID . '</h3>';
			echo '<p>FirstName: ' . $customer->FirstName . '</p>';
			echo '<p>LastName: ' . $customer->LastName . '</p>';
			echo '<p>Email: ' . $customer->Email . '</p>';
			echo anchor('customer/view/' . $customer->CustomerID, 'View Customer Details');
			echo '</div>';
		}
	}else
	{//sorry no customers
		echo '<p>Sorry, no customers.</p>';
	}
	$this->load->view($this->config->item('theme') . 'footer');
?>