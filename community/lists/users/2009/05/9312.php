<?
$subject_val = "Re: [OMPI users] mpirun fails on remote applications";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 10:22:38 2009" -->
<!-- isoreceived="20090512142238" -->
<!-- sent="Tue, 12 May 2009 10:22:28 -0400" -->
<!-- isosent="20090512142228" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun fails on remote applications" -->
<!-- id="B0D0EB85-3BD1-4EA0-BFA2-F30286C0A105_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="763277.79428.qm_at_web53602.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun fails on remote applications<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-12 10:22:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9313.php">Edgar Gabriel: "Re: [OMPI users] strange bug"</a>
<li><strong>Previous message:</strong> <a href="9311.php">Jeff Squyres: "Re: [OMPI users] strange bug"</a>
<li><strong>In reply to:</strong> <a href="9300.php">feng chen: "Re: [OMPI users] mpirun fails on remote applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9316.php">Micha Feigin: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>Reply:</strong> <a href="9316.php">Micha Feigin: "Re: [OMPI users] mpirun fails on remote applications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI requires that each MPI process be able to connect to any  
<br>
other MPI process in the same job with random TCP ports.  It is  
<br>
usually easiest to leave the firewall off, or setup trust  
<br>
relationships between your cluster nodes.
<br>
<p><p>On May 12, 2009, at 6:04 AM, feng chen wrote:
<br>
<p><span class="quotelev1">&gt; thanks a lot. firewall it is.. It works with firewall's off, while  
</span><br>
<span class="quotelev1">&gt; that brings another questions from me. Is there anyway we can run  
</span><br>
<span class="quotelev1">&gt; mpirun while firwall 's on? If yes, how do we setup firewall or  
</span><br>
<span class="quotelev1">&gt; iptables?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thank you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Micha Feigin &lt;michf_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, May 12, 2009 4:30:30 AM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] mpirun fails on remote applications
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 12 May 2009 11:54:57 +0300
</span><br>
<span class="quotelev1">&gt; Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; sounds like firewall problems to or from anfield04.
</span><br>
<span class="quotelev2">&gt; &gt; Lenny,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, May 12, 2009 at 8:18 AM, feng chen &lt;fch6699_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm having a similar problem, not sure if it's related (gave up for  
</span><br>
<span class="quotelev1">&gt; the moment
</span><br>
<span class="quotelev1">&gt; on 1.3+ openmpi, 1.2.8 works fine nothing above that).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Try taking down the firewall and see if it works
</span><br>
<span class="quotelev1">&gt; 2. Make sure that passwordless ssh is working (not sure if it's  
</span><br>
<span class="quotelev1">&gt; needed for all
</span><br>
<span class="quotelev1">&gt; things but still ...)
</span><br>
<span class="quotelev1">&gt; 3. can you test it maybe with openmpi 1.2.8?
</span><br>
<span class="quotelev1">&gt; 4. also, does posting the job in the other direction work? (4 -&gt; 5  
</span><br>
<span class="quotelev1">&gt; instead of 5 -&gt; 4)
</span><br>
<span class="quotelev1">&gt; [fch6699_at_anfield04 test]$ mpirun -host anfield05 -np 4 ./hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;From what it seems on my cluster for my specific problem is that  
</span><br>
<span class="quotelev1">&gt; machines have
</span><br>
<span class="quotelev1">&gt; different addresses based on which machine you are connecting from  
</span><br>
<span class="quotelev1">&gt; (they are
</span><br>
<span class="quotelev1">&gt; connected directly to each other, not through a switch with a  
</span><br>
<span class="quotelev1">&gt; central name
</span><br>
<span class="quotelev1">&gt; server), and name lookup seems to happen on the master instead of  
</span><br>
<span class="quotelev1">&gt; the client
</span><br>
<span class="quotelev1">&gt; node so it is getting the wrong address.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  hi all,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; First of all,i'm new to openmpi. So i don't know much about mpi  
</span><br>
<span class="quotelev1">&gt; setting.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; That's why i'm following manual and FAQ suggestions from the  
</span><br>
<span class="quotelev1">&gt; beginning.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Everything went well untile i try to run a pllication on a  
</span><br>
<span class="quotelev1">&gt; remote node by
</span><br>
<span class="quotelev3">&gt; &gt; &gt; using 'mpirun -np' command. It just hanging there without doing  
</span><br>
<span class="quotelev1">&gt; anything, no
</span><br>
<span class="quotelev3">&gt; &gt; &gt; error messanges, no
</span><br>
<span class="quotelev3">&gt; &gt; &gt; complaining or whatsoever. What confused me is that i can run  
</span><br>
<span class="quotelev1">&gt; application
</span><br>
<span class="quotelev3">&gt; &gt; &gt; over ssh with no problem, while it comes to mpirun, just stuck  
</span><br>
<span class="quotelev1">&gt; in there does
</span><br>
<span class="quotelev3">&gt; &gt; &gt; nothing.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm pretty sure i got everyting setup in the right way manner,  
</span><br>
<span class="quotelev1">&gt; including no
</span><br>
<span class="quotelev3">&gt; &gt; &gt; password signin over ssh, environment variables for bot  
</span><br>
<span class="quotelev1">&gt; interactive and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; non-interactive logons.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; A sample list of commands been used list as following:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  [fch6699_at_anfield05 test]$ mpicc -o hello hello.f
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [fch6699_at_anfield05 test]$ ssh anfield04 ./hello
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 0 of 1: Hello world!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [fch6699_at_anfield05 test]$ mpirun -host anfield05 -np 4 ./hello
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 0 of 4: Hello world!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2 of 4: Hello world!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 3 of 4: Hello world!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1 of 4: Hello world!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [fch6699_at_anfield05 test]$ mpirun -host anfield04 -np 4 ./hello
</span><br>
<span class="quotelev3">&gt; &gt; &gt; just hanging there for years!!!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; need help to fix this !!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; if u try it in another way
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [fch6699_at_anfield05 test]$ mpirun -hostfile my_hostfile -np 4 ./ 
</span><br>
<span class="quotelev1">&gt; hell
</span><br>
<span class="quotelev3">&gt; &gt; &gt; still nothing happened, no warnnings, no complains, no error  
</span><br>
<span class="quotelev1">&gt; messages.. !!
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; All other files related to this issue can be found in  
</span><br>
<span class="quotelev1">&gt; my_files.tar.gz in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; attachment.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; .cshrc
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The output of the &quot;ompi_info --all&quot; command.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; my_hostfile
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hello.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; output of iptables
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The only thing i've noticed is that the port of our ssh has been  
</span><br>
<span class="quotelev1">&gt; changed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; from 22 to other number for security issues.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Don't know will that have anything to with it or not.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Any help will be highly appreciated!!
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; thanks in advance!
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Kevin
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9313.php">Edgar Gabriel: "Re: [OMPI users] strange bug"</a>
<li><strong>Previous message:</strong> <a href="9311.php">Jeff Squyres: "Re: [OMPI users] strange bug"</a>
<li><strong>In reply to:</strong> <a href="9300.php">feng chen: "Re: [OMPI users] mpirun fails on remote applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9316.php">Micha Feigin: "Re: [OMPI users] mpirun fails on remote applications"</a>
<li><strong>Reply:</strong> <a href="9316.php">Micha Feigin: "Re: [OMPI users] mpirun fails on remote applications"</a>
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
