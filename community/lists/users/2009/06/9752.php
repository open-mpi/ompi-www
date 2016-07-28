<?
$subject_val = "Re: [OMPI users] Some Newbie questions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 02:08:37 2009" -->
<!-- isoreceived="20090629060837" -->
<!-- sent="Mon, 29 Jun 2009 08:08:32 +0200" -->
<!-- isosent="20090629060832" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Some Newbie questions" -->
<!-- id="9b0da5ce0906282308q149c64f7m4a34613c89ad01b7_at_mail.gmail.com" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-29 02:08:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9753.php">vipin kumar: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Previous message:</strong> <a href="9751.php">vipin kumar: "[OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="9750.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Some Newbie questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9754.php">Reuti: "Re: [OMPI users] Some Newbie questions / ssh_known_hosts"</a>
<li><strong>Reply:</strong> <a href="9754.php">Reuti: "Re: [OMPI users] Some Newbie questions / ssh_known_hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Umanga
<br>
<p>Yes, ssh (or rsh) should be configured on every machine, and it must
<br>
be configured
<br>
in such a way that no passwords are needed to make a connection. For example,
<br>
for passwordless connection using ssh i place every node's public key into
<br>
the file ~/.ssh/authorized_keys of every node.
<br>
<p>And, yes, 1.2.7 is a rather old version - the current one is 1.3.2. It
<br>
would be good
<br>
if you could update your version to a newer one.
<br>
<p>Jody
<br>
<p>On Mon, Jun 29, 2009 at 7:00 AM, Ashika Umanga
<br>
Umagiliya&lt;aumanga_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi Vipin ,
</span><br>
<span class="quotelev1">&gt; Thanks alot for the reply.
</span><br>
<span class="quotelev1">&gt; I went through the FAQ and it also answered some of my questions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But my problem is, since I am using TCP/Ethernet&#160; I guess that MPI uses
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
<span class="quotelev1">&gt; On Mon, Jun 29, 2009 at 8:21 AM, Ashika Umanga Umagiliya
</span><br>
<span class="quotelev1">&gt; &lt;aumanga_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; ________________________________
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9753.php">vipin kumar: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Previous message:</strong> <a href="9751.php">vipin kumar: "[OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="9750.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Some Newbie questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9754.php">Reuti: "Re: [OMPI users] Some Newbie questions / ssh_known_hosts"</a>
<li><strong>Reply:</strong> <a href="9754.php">Reuti: "Re: [OMPI users] Some Newbie questions / ssh_known_hosts"</a>
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
