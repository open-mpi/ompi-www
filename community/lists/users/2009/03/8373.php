<?
$subject_val = "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  9 22:30:55 2009" -->
<!-- isoreceived="20090310023055" -->
<!-- sent="Tue, 10 Mar 2009 10:30:48 +0800 (SGT)" -->
<!-- isosent="20090310023048" -->
<!-- name="Tee Wen Kai" -->
<!-- email="teewenkai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp;amp; MPI_Info_free" -->
<!-- id="479445.52411.qm_at_web76214.mail.sg1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Problem with MPI_Comm_spawn_multiple &amp;amp; MPI_Info_free" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free<br>
<strong>From:</strong> Tee Wen Kai (<em>teewenkai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-09 22:30:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8374.php">Sangamesh B: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<li><strong>Previous message:</strong> <a href="8372.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="8356.php">Tee Wen Kai: "[OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8377.php">Lenny Verkhovsky: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<li><strong>Reply:</strong> <a href="8377.php">Lenny Verkhovsky: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&#160;
<br>
I am using version 1.2.8.
<br>
&#160;
<br>
Thank you.
<br>
&#160;
<br>
Regards,
<br>
Wenkai
<br>
<p>--- On Mon, 9/3/09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><p>From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Monday, 9 March, 2009, 7:42 PM
<br>
<p><p>Could you tell us what version of Open MPI you are using? It would help us to provide you with advice.
<br>
<p><p>Thanks
<br>
Ralph
<br>
<p><p><p>On Mar 9, 2009, at 2:18 AM, Tee Wen Kai wrote:
<br>
<p><p><p><p><p><p>Hi,
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
<br>
<p><p>New Email names for you! 
<br>
Get the Email name you've always wanted on the new @ymail and @rocketmail.
<br>
Hurry before someone else does!_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>-----Inline Attachment Follows-----
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


      Get your new Email address!
Grab the Email name you&amp;#39;ve always wanted before someone else does!
<a href="http://mail.promotions.yahoo.com/newdomains/sg/">http://mail.promotions.yahoo.com/newdomains/sg/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8373/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8374.php">Sangamesh B: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<li><strong>Previous message:</strong> <a href="8372.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="8356.php">Tee Wen Kai: "[OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8377.php">Lenny Verkhovsky: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<li><strong>Reply:</strong> <a href="8377.php">Lenny Verkhovsky: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
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
