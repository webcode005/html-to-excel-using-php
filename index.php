<?php
   $fileName="export";

    header("Content-Type: application/vnd.ms-excel; name='excel'");
    header("Content-type: application/octet-stream");
    header("Content-Disposition: attachment; filename=".$fileName.".xls");
    header("Pragma: no-cache");
    header("Expires: 0");

?>
<table class="wp-list-table widefat fixed striped posts" border="1">
   <thead>
      <tr style="background:yellow;color:black;">
         <th>
            Canidate / Option Name
         </th>
         <th>
            Total Votes
         </th>
         <th>
            Votes in (x/x)
         </th>
         <th>
            Live Result
         </th>
         <th>
            Voter Details
         </th>
      </tr>
      <tr>
         <th>
            Ramaa Shanker-Hidden Treasure Tales(The Write Order)			
         </th>
         <th>
            24			
         </th>
         <th>
            24/6023			
         </th>
         <th>
            <span class="it_epoll_leading_result_badge">Participated</span>
         </th>
         <th>
            <a href="https://autherawards.in/wp-admin/admin.php?page=it_epoll_system&amp;view=voter_details&amp;id=39377&amp;option=418765" class="button button-secondary">View</a>		
         </th>
      </tr>
      <tr>
         <th>
            Dr Nisha Sharma-The Aryavrat - God Glory Gold(Self Published)			
         </th>
         <th>
            78			
         </th>
         <th>
            78/6023			
         </th>
         <th>
            <span class="it_epoll_leading_result_badge">Participated</span>
         </th>
         <th>
            <a href="https://autherawards.in/wp-admin/admin.php?page=it_epoll_system&amp;view=voter_details&amp;id=39377&amp;option=280214" class="button button-secondary">View</a>		
         </th>
      </tr>
      
   </thead>
</table>
