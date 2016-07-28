<?
$subject_val = "[OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 04:18:30 2009" -->
<!-- isoreceived="20090309081830" -->
<!-- sent="Mon, 9 Mar 2009 16:18:23 +0800 (SGT)" -->
<!-- isosent="20090309081823" -->
<!-- name="Tee Wen Kai" -->
<!-- email="teewenkai_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with MPI_Comm_spawn_multiple &amp;amp; MPI_Info_free" -->
<!-- id="345107.74527.qm_at_web76212.mail.sg1.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free<br>
<strong>From:</strong> Tee Wen Kai (<em>teewenkai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 04:18:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8357.php">Ralph Castain: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<li><strong>Previous message:</strong> <a href="8355.php">Gabriele Fatigati: "Re: [OMPI users] Strange problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8357.php">Ralph Castain: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<li><strong>Reply:</strong> <a href="8357.php">Ralph Castain: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<li><strong>Maybe reply:</strong> <a href="8373.php">Tee Wen Kai: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&#160;
<br>
I have a program that allow user to enter their choice of operation. For example, when the user enter '4', the program will enter a function which will spawn some other programs stored in the same directory. When the user enter '5', the program will enter another function to request all spawned processes to exit. Therefore, initially only one process which act as the controller is spawned.
<br>
&#160;
<br>
My MPI_Info_create and MPI_Comm_spawn_multiple are called in&#160;a function. Everything is working fine except when I tried to free the MPI_Info in the function by calling MPI_Info_free, I have segmentation fault error. The second problem is when i do the spawning once and exit the controller program with MPI_Finalize, the program exited normally. But when spawning is done more than once and exit the controller program with MPI_Finalize, there is segmentation fault. I also realize that when the spawed processes exit, the 'orted' process is still running. Thus, when multiple MPI_Comm_spawn_multiple are called, there will be multiple 'orted' processes.
<br>
&#160;
<br>
Thank you and hope someone has a solution to my problem.
<br>
&#160;
<br>
Regards,
<br>
Wenkai


      New Email names for you! 
Get the Email name you&amp;#39;ve always wanted on the new @ymail and @rocketmail. 
Hurry before someone else does!
<a href="http://mail.promotions.yahoo.com/newdomains/sg/">http://mail.promotions.yahoo.com/newdomains/sg/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8356/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8357.php">Ralph Castain: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<li><strong>Previous message:</strong> <a href="8355.php">Gabriele Fatigati: "Re: [OMPI users] Strange problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8357.php">Ralph Castain: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<li><strong>Reply:</strong> <a href="8357.php">Ralph Castain: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<li><strong>Maybe reply:</strong> <a href="8373.php">Tee Wen Kai: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
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
