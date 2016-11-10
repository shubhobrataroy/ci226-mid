<h2>Transaction</h2>

<?php echo 'Current Balance :' .$current_balance. "<br>Last updated :".$last_updated ?>

<h4>Select one option from below</h4>
<ul>
    <li><a href="http://localhost/ci226/transaction/transaction_history">Transaction History</a></li>
    <li><a href="http://localhost/ci226/transaction/transaction_view">Transaction</a></li>
</ul>

<div>
    <?php if(isset($history))

    {
        echo "
          <h4>Transiction History</h4>  
          <table border='1'>
             <tr>
                <th>Transaction To</th>
                <th>Amount</th> 
                <th>Recieved By</th>
                <th>Description</th>
              </tr>
          ";

        foreach ($history as $row)
        {
            echo "<tr>";
            echo "<td>".$row['transaction_to']."</td>";
            echo "<td>".$row['amount']."</td>";
            echo "<td>".$row['recieved_by']."</td>";
            echo "<td>".$row['description']."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

    else if(isset($transaction))
    {
        echo
        "
        <form action='initiate_transaction' method='post'>
        <table>
           <tr>
                <th>Transaction To</th>
                <th>Amount</th> 
                <th>Recieved By</th>
                <th>Description</th>
           </tr>
           
           <tr>
             <td><input name='transaction_to'/></td>
             <td><input name='amount'/></td>
             <td><input name='recieved_by'/></td>
             <td><input name='description'/></td>
           </tr>
        </table>
        <input type='submit' value='Done'>
        </form>
        ";
    }

    ?>
</div>
    <?php if($message!="") echo $message?>