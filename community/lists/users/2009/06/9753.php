<?
$subject_val = "Re: [OMPI users] Some Newbie questions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 02:19:09 2009" -->
<!-- isoreceived="20090629061909" -->
<!-- sent="Mon, 29 Jun 2009 11:49:05 +0530" -->
<!-- isosent="20090629061905" -->
<!-- name="vipin kumar" -->
<!-- email="vipinkumar41_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Some Newbie questions" -->
<!-- id="fa4af8200906282319j49a1f569u9beda7990944e071_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A484A5B.7000608_at_biggjapan.com" -->
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
<strong>From:</strong> vipin kumar (<em>vipinkumar41_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-29 02:19:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9754.php">Reuti: "Re: [OMPI users] Some Newbie questions / ssh_known_hosts"</a>
<li><strong>Previous message:</strong> <a href="9752.php">jody: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>In reply to:</strong> <a href="9750.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Some Newbie questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9755.php">Jeff Squyres: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Reply:</strong> <a href="9755.php">Jeff Squyres: "Re: [OMPI users] Some Newbie questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ashika,
<br>
<p>Q. Since I am using TCP/Ethernet  I guess that MPI uses SSH/RSH to
<br>
communicate between peers.
<br>
Ans. May be you are right. I don't know exactly how peers communicate in MPI
<br>
environment, but I can say for sure that OpenMPI uses rsh/ssh as one of the
<br>
available launchers.
<br>
<p>Q. And for that, each peer should have the copy of the application right?
<br>
Ans. Absolutely correct. But If you don't want to copy binaries manually you
<br>
should use &quot;--preload-binary&quot; option. OpenMPI will copy the executables in
<br>
remote nodes before launching processes, and will delete when job gets done.
<br>
<p>It is almost always good to use latest version. &quot;--preload-binary&quot; option
<br>
may be absent in old versions.
<br>
<p>Regards,
<br>
<p><p>On Mon, Jun 29, 2009 at 10:30 AM, Ashika Umanga Umagiliya &lt;
<br>
aumanga_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi Vipin ,
</span><br>
<span class="quotelev1">&gt; Thanks alot for the reply.
</span><br>
<span class="quotelev1">&gt; I went through the FAQ and it also answered some of my questions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But my problem is, since I am using TCP/Ethernet  I guess that MPI uses
</span><br>
<span class="quotelev1">&gt; SSH/RSH to communicate between peers.
</span><br>
<span class="quotelev1">&gt; And for that, each peer should have the copy of the application right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use 1.2.7rc2 (from Debian/Lenny repo) , and I didn't see the option
</span><br>
<span class="quotelev1">&gt; &quot;--preload-binary&quot; , is it because the lower version?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bets regards,
</span><br>
<span class="quotelev1">&gt; umanga.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; vipin kumar wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt; Ans. Using Communicator(name of the group of processes to whom it belongs,
</span><br>
<span class="quotelev1">&gt; technically handle) and rank of the process in that Communicator.
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
<span class="quotelev1">&gt; On Mon, Jun 29, 2009 at 8:21 AM, Ashika Umanga Umagiliya &lt;
</span><br>
<span class="quotelev1">&gt; aumanga_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greeting all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am new to Open MPI and I have some newbie questions. I have given 4
</span><br>
<span class="quotelev2">&gt;&gt; machines at our laboratory to set up Open MPI.Our net work is simply
</span><br>
<span class="quotelev2">&gt;&gt; TCP/Ethernet running Debian Linux.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) After installing OpenMPI on each machine ,do i need to run a
</span><br>
<span class="quotelev2">&gt;&gt; service/daemon on each machine? (How does peers in MPI environment
</span><br>
<span class="quotelev2">&gt;&gt; communicate ?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) After implementing parallel program , do I have to install the
</span><br>
<span class="quotelev2">&gt;&gt; application on every machine ? (I thought the program automatically
</span><br>
<span class="quotelev2">&gt;&gt; propagated to other peers , like in RMI applications? )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; Umanga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Vipin K.
Research Engineer,
C-Dot, Bangalore, India
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9753/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9754.php">Reuti: "Re: [OMPI users] Some Newbie questions / ssh_known_hosts"</a>
<li><strong>Previous message:</strong> <a href="9752.php">jody: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>In reply to:</strong> <a href="9750.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Some Newbie questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9755.php">Jeff Squyres: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Reply:</strong> <a href="9755.php">Jeff Squyres: "Re: [OMPI users] Some Newbie questions"</a>
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
