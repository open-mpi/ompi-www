<?
$subject_val = "Re: [OMPI users] Some Newbie questions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 01:00:20 2009" -->
<!-- isoreceived="20090629050020" -->
<!-- sent="Mon, 29 Jun 2009 14:00:11 +0900" -->
<!-- isosent="20090629050011" -->
<!-- name="Ashika Umanga Umagiliya" -->
<!-- email="aumanga_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Some Newbie questions" -->
<!-- id="4A484A5B.7000608_at_biggjapan.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="fa4af8200906282144i2f8d5c5dodb8ae8e6e1fd5d11_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Some Newbie questions<br>
<strong>From:</strong> Ashika Umanga Umagiliya (<em>aumanga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-29 01:00:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9751.php">vipin kumar: "[OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="9749.php">vipin kumar: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>In reply to:</strong> <a href="9749.php">vipin kumar: "Re: [OMPI users] Some Newbie questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9752.php">jody: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Reply:</strong> <a href="9752.php">jody: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Reply:</strong> <a href="9753.php">vipin kumar: "Re: [OMPI users] Some Newbie questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Vipin ,
<br>
Thanks alot for the reply.
<br>
I went through the FAQ and it also answered some of my questions.
<br>
<p>But my problem is, since I am using TCP/Ethernet  I guess that MPI uses 
<br>
SSH/RSH to communicate between peers.
<br>
And for that, each peer should have the copy of the application right?
<br>
<p>I use 1.2.7rc2 (from Debian/Lenny repo) , and I didn't see the option 
<br>
&quot;--preload-binary&quot; , is it because the lower version?
<br>
<p>Bets regards,
<br>
umanga.
<br>
<p><p><p>vipin kumar wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am not expert, I am user like you but I think I can help you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Q. After installing OpenMPI on each machine ,do i need to run a 
</span><br>
<span class="quotelev1">&gt; service/daemon on each machine?
</span><br>
<span class="quotelev1">&gt; Ans. No, not at all, Open MPI takes care of that for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Q. How does peers in MPI environment communicate ?
</span><br>
<span class="quotelev1">&gt; Ans. Using Communicator(name of the group of processes to whom it 
</span><br>
<span class="quotelev1">&gt; belongs, technically handle) and rank of the process in that Communicator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Q. After implementing parallel program , do I have to install the 
</span><br>
<span class="quotelev1">&gt; application on every machine ?
</span><br>
<span class="quotelev1">&gt; Ans. Not necessary. Use &quot;--preload-binary&quot; option while launching the 
</span><br>
<span class="quotelev1">&gt; application through mpirun or mpiexec.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Useful links:
</span><br>
<span class="quotelev1">&gt; 1. <a href="http://www.open-mpi.org/faq/?category=running#simple-spmd-run">http://www.open-mpi.org/faq/?category=running#simple-spmd-run</a>
</span><br>
<span class="quotelev1">&gt; 2. <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
</span><br>
<span class="quotelev1">&gt; 3. man page for mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Vipin K.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 29, 2009 at 8:21 AM, Ashika Umanga Umagiliya 
</span><br>
<span class="quotelev1">&gt; &lt;aumanga_at_[hidden] &lt;mailto:aumanga_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Greeting all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I am new to Open MPI and I have some newbie questions. I have
</span><br>
<span class="quotelev1">&gt;     given 4 machines at our laboratory to set up Open MPI.Our net work
</span><br>
<span class="quotelev1">&gt;     is simply TCP/Ethernet running Debian Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     1) After installing OpenMPI on each machine ,do i need to run a
</span><br>
<span class="quotelev1">&gt;     service/daemon on each machine? (How does peers in MPI environment
</span><br>
<span class="quotelev1">&gt;     communicate ?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     2) After implementing parallel program , do I have to install the
</span><br>
<span class="quotelev1">&gt;     application on every machine ? (I thought the program
</span><br>
<span class="quotelev1">&gt;     automatically propagated to other peers , like in RMI applications? )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks in advance,
</span><br>
<span class="quotelev1">&gt;     Umanga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Vipin K.
</span><br>
<span class="quotelev1">&gt; Research Engineer,
</span><br>
<span class="quotelev1">&gt; C-Dot, Bangalore, India
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9750/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9751.php">vipin kumar: "[OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="9749.php">vipin kumar: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>In reply to:</strong> <a href="9749.php">vipin kumar: "Re: [OMPI users] Some Newbie questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9752.php">jody: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Reply:</strong> <a href="9752.php">jody: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Reply:</strong> <a href="9753.php">vipin kumar: "Re: [OMPI users] Some Newbie questions"</a>
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
