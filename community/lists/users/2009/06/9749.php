<?
$subject_val = "Re: [OMPI users] Some Newbie questions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 00:45:05 2009" -->
<!-- isoreceived="20090629044505" -->
<!-- sent="Mon, 29 Jun 2009 10:14:59 +0530" -->
<!-- isosent="20090629044459" -->
<!-- name="vipin kumar" -->
<!-- email="vipinkumar41_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Some Newbie questions" -->
<!-- id="fa4af8200906282144i2f8d5c5dodb8ae8e6e1fd5d11_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A482C45.6050903_at_biggjapan.com" -->
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
<strong>Date:</strong> 2009-06-29 00:44:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9750.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Previous message:</strong> <a href="9748.php">Ashika Umanga Umagiliya: "[OMPI users] Some Newbie questions"</a>
<li><strong>In reply to:</strong> <a href="9748.php">Ashika Umanga Umagiliya: "[OMPI users] Some Newbie questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9750.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Reply:</strong> <a href="9750.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Some Newbie questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am not expert, I am user like you but I think I can help you,
<br>
<p>Q. After installing OpenMPI on each machine ,do i need to run a
<br>
service/daemon on each machine?
<br>
Ans. No, not at all, Open MPI takes care of that for you.
<br>
<p>Q. How does peers in MPI environment communicate ?
<br>
Ans. Using Communicator(name of the group of processes to whom it belongs,
<br>
technically handle) and rank of the process in that Communicator.
<br>
<p>Q. After implementing parallel program , do I have to install the
<br>
application on every machine ?
<br>
Ans. Not necessary. Use &quot;--preload-binary&quot; option while launching the
<br>
application through mpirun or mpiexec.
<br>
<p>Useful links:
<br>
1. <a href="http://www.open-mpi.org/faq/?category=running#simple-spmd-run">http://www.open-mpi.org/faq/?category=running#simple-spmd-run</a>
<br>
2. <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
<br>
3. man page for mpirun
<br>
<p>Regards,
<br>
Vipin K.
<br>
<p>On Mon, Jun 29, 2009 at 8:21 AM, Ashika Umanga Umagiliya &lt;
<br>
aumanga_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Greeting all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new to Open MPI and I have some newbie questions. I have given 4
</span><br>
<span class="quotelev1">&gt; machines at our laboratory to set up Open MPI.Our net work is simply
</span><br>
<span class="quotelev1">&gt; TCP/Ethernet running Debian Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) After installing OpenMPI on each machine ,do i need to run a
</span><br>
<span class="quotelev1">&gt; service/daemon on each machine? (How does peers in MPI environment
</span><br>
<span class="quotelev1">&gt; communicate ?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) After implementing parallel program , do I have to install the
</span><br>
<span class="quotelev1">&gt; application on every machine ? (I thought the program automatically
</span><br>
<span class="quotelev1">&gt; propagated to other peers , like in RMI applications? )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Umanga
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9749/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9750.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Previous message:</strong> <a href="9748.php">Ashika Umanga Umagiliya: "[OMPI users] Some Newbie questions"</a>
<li><strong>In reply to:</strong> <a href="9748.php">Ashika Umanga Umagiliya: "[OMPI users] Some Newbie questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9750.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Reply:</strong> <a href="9750.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Some Newbie questions"</a>
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
