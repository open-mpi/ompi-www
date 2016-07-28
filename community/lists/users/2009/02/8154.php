<?
$subject_val = "[OMPI users] How to quit asynchronous processes";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 22 22:49:29 2009" -->
<!-- isoreceived="20090223034929" -->
<!-- sent="Mon, 23 Feb 2009 11:49:27 +0800 (SGT)" -->
<!-- isosent="20090223034927" -->
<!-- name="Tee Wen Kai" -->
<!-- email="teewenkai_at_[hidden]" -->
<!-- subject="[OMPI users] How to quit asynchronous processes" -->
<!-- id="180492.84803.qm_at_web76201.mail.sg1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] How to quit asynchronous processes<br>
<strong>From:</strong> Tee Wen Kai (<em>teewenkai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-22 22:49:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8155.php">jody: "[OMPI users] MPI_Gatherv and 0 size?"</a>
<li><strong>Previous message:</strong> <a href="8153.php">Michael Alexander: "[OMPI users] CfP 4th Workshop on Virtualization in High-Performance Cloud Computing (VHPC'09)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8159.php">Ralph Castain: "Re: [OMPI users] How to quit asynchronous processes"</a>
<li><strong>Reply:</strong> <a href="8159.php">Ralph Castain: "Re: [OMPI users] How to quit asynchronous processes"</a>
<li><strong>Reply:</strong> <a href="8162.php">Richard Treumann: "Re: [OMPI users] How to quit asynchronous processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&#160;
<br>
I have three processes A,B &amp; C. A will receive some data and process and after that will pass results to B. Thereafter, A will go back to get data and process and prepare to send them to B again. Same goes for B to C where C will provide the final output. As all the processes are running asynchronously, I can't find a method to quit all processes gracefully. I have tried to use C to issue MPI_Abort when quit command is received with processes A and B entering the SIGTERM handler to free all the allocated memories. However, the processes may be in the midst of a communication when SIGTERM signal is raise, resulting in some error msg like &quot;remote connection close&quot; etc. To prevent such error messages from displaying, I couldn't use MPI_Finalize. 
<br>
&#160;
<br>
I seek your advice on methods to quit asynchonous processes properly without all these error messages. And I would also like to find out what will be the outcome eventually if I don't close the processes with an MPI_Finalize command, will it lead to eventual memory leak etc?
<br>
&#160;
<br>
Thank you very much.
<br>
&#160;
<br>
Regards
<br>
Wenkai
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8154/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8155.php">jody: "[OMPI users] MPI_Gatherv and 0 size?"</a>
<li><strong>Previous message:</strong> <a href="8153.php">Michael Alexander: "[OMPI users] CfP 4th Workshop on Virtualization in High-Performance Cloud Computing (VHPC'09)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8159.php">Ralph Castain: "Re: [OMPI users] How to quit asynchronous processes"</a>
<li><strong>Reply:</strong> <a href="8159.php">Ralph Castain: "Re: [OMPI users] How to quit asynchronous processes"</a>
<li><strong>Reply:</strong> <a href="8162.php">Richard Treumann: "Re: [OMPI users] How to quit asynchronous processes"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
