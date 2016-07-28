<?
$subject_val = "Re: [OMPI users] Some Newbie questions / ssh_known_hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 29 07:17:33 2009" -->
<!-- isoreceived="20090629111733" -->
<!-- sent="Mon, 29 Jun 2009 13:17:21 +0200" -->
<!-- isosent="20090629111721" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Some Newbie questions / ssh_known_hosts" -->
<!-- id="9CC3E996-7AC5-467F-B372-6D4AAD973E45_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0906282308q149c64f7m4a34613c89ad01b7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Some Newbie questions / ssh_known_hosts<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-29 07:17:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9755.php">Jeff Squyres: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Previous message:</strong> <a href="9753.php">vipin kumar: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>In reply to:</strong> <a href="9752.php">jody: "Re: [OMPI users] Some Newbie questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9753.php">vipin kumar: "Re: [OMPI users] Some Newbie questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 29.06.2009 um 08:08 schrieb jody:
<br>
<p><span class="quotelev1">&gt; Hi Umanga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, ssh (or rsh) should be configured on every machine, and it must
</span><br>
<span class="quotelev1">&gt; be configured
</span><br>
<span class="quotelev1">&gt; in such a way that no passwords are needed to make a connection.  
</span><br>
<span class="quotelev1">&gt; For example,
</span><br>
<span class="quotelev1">&gt; for passwordless connection using ssh i place every node's public  
</span><br>
<span class="quotelev1">&gt; key into
</span><br>
<span class="quotelev1">&gt; the file ~/.ssh/authorized_keys of every node.
</span><br>
<p>this is the common approach. But instead of preparing these keys for  
<br>
everyone, you can also adjust /etc/ssh/ssh_known_hosts on all of the  
<br>
machines one time and supply there the keys from the other machines  
<br>
and have there three names per entry for a) the hostname, b) TCP/IP  
<br>
address and c) FQDN. This file will then be used twice: on the target  
<br>
machine to allow the source machine to connect, and on the source  
<br>
machine to avoid the cluttering of the user's ~/.ssh/known_hosts file.
<br>
<p>There is a program called ssh-keyscan to collect the hostkeys from  
<br>
all the machines.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; And, yes, 1.2.7 is a rather old version - the current one is 1.3.2. It
</span><br>
<span class="quotelev1">&gt; would be good
</span><br>
<span class="quotelev1">&gt; if you could update your version to a newer one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jun 29, 2009 at 7:00 AM, Ashika Umanga
</span><br>
<span class="quotelev1">&gt; Umagiliya&lt;aumanga_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Vipin ,
</span><br>
<span class="quotelev2">&gt;&gt; Thanks alot for the reply.
</span><br>
<span class="quotelev2">&gt;&gt; I went through the FAQ and it also answered some of my questions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But my problem is, since I am using TCP/Ethernet  I guess that MPI  
</span><br>
<span class="quotelev2">&gt;&gt; uses
</span><br>
<span class="quotelev2">&gt;&gt; SSH/RSH to communicate between peers.
</span><br>
<span class="quotelev2">&gt;&gt; And for that, each peer should have the copy of the application  
</span><br>
<span class="quotelev2">&gt;&gt; right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I use 1.2.7rc2 (from Debian/Lenny repo) , and I didn't see the option
</span><br>
<span class="quotelev2">&gt;&gt; &quot;--preload-binary&quot; , is it because the lower version?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bets regards,
</span><br>
<span class="quotelev2">&gt;&gt; umanga.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; vipin kumar wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I am not expert, I am user like you but I think I can help you,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Q. After installing OpenMPI on each machine ,do i need to run a
</span><br>
<span class="quotelev2">&gt;&gt; service/daemon on each machine?
</span><br>
<span class="quotelev2">&gt;&gt; Ans. No, not at all, Open MPI takes care of that for you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Q. How does peers in MPI environment communicate ?
</span><br>
<span class="quotelev2">&gt;&gt; Ans. Using Communicator(name of the group of processes to whom it  
</span><br>
<span class="quotelev2">&gt;&gt; belongs,
</span><br>
<span class="quotelev2">&gt;&gt; technically handle) and rank of the process in that Communicator.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Q. After implementing parallel program , do I have to install the
</span><br>
<span class="quotelev2">&gt;&gt; application on every machine ?
</span><br>
<span class="quotelev2">&gt;&gt; Ans. Not necessary. Use &quot;--preload-binary&quot; option while launching the
</span><br>
<span class="quotelev2">&gt;&gt; application through mpirun or mpiexec.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Useful links:
</span><br>
<span class="quotelev2">&gt;&gt; 1. <a href="http://www.open-mpi.org/faq/?category=running#simple-spmd-run">http://www.open-mpi.org/faq/?category=running#simple-spmd-run</a>
</span><br>
<span class="quotelev2">&gt;&gt; 2. <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 3. man page for mpirun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Vipin K.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Jun 29, 2009 at 8:21 AM, Ashika Umanga Umagiliya
</span><br>
<span class="quotelev2">&gt;&gt; &lt;aumanga_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greeting all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am new to Open MPI and I have some newbie questions. I have  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; given 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machines at our laboratory to set up Open MPI.Our net work is simply
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TCP/Ethernet running Debian Linux.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) After installing OpenMPI on each machine ,do i need to run a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; service/daemon on each machine? (How does peers in MPI environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicate ?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) After implementing parallel program , do I have to install the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; application on every machine ? (I thought the program automatically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; propagated to other peers , like in RMI applications? )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Umanga
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Vipin K.
</span><br>
<span class="quotelev2">&gt;&gt; Research Engineer,
</span><br>
<span class="quotelev2">&gt;&gt; C-Dot, Bangalore, India
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________
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
<li><strong>Next message:</strong> <a href="9755.php">Jeff Squyres: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>Previous message:</strong> <a href="9753.php">vipin kumar: "Re: [OMPI users] Some Newbie questions"</a>
<li><strong>In reply to:</strong> <a href="9752.php">jody: "Re: [OMPI users] Some Newbie questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9753.php">vipin kumar: "Re: [OMPI users] Some Newbie questions"</a>
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
