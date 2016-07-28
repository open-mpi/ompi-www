<?
$subject_val = "Re: [OMPI users] MPi Abort verbosity";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 11:04:56 2010" -->
<!-- isoreceived="20100224160456" -->
<!-- sent="Wed, 24 Feb 2010 08:04:50 -0800 (PST)" -->
<!-- isosent="20100224160450" -->
<!-- name="Rodolfo Chua" -->
<!-- email="rodolfo.chua_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPi Abort verbosity" -->
<!-- id="950178.24927.qm_at_web46201.mail.sp1.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1267022644.2597.23.camel_at_frecb014522.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPi Abort verbosity<br>
<strong>From:</strong> Rodolfo Chua (<em>rodolfo.chua_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-24 11:04:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12138.php">Jeff Squyres: "[OMPI users] mpicc failure"</a>
<li><strong>Previous message:</strong> <a href="12136.php">Nadia Derbey: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>In reply to:</strong> <a href="12136.php">Nadia Derbey: "Re: [OMPI users] MPi Abort verbosity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12138.php">Jeff Squyres: "[OMPI users] mpicc failure"</a>
<li><strong>Reply:</strong> <a href="12138.php">Jeff Squyres: "[OMPI users] mpicc failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've successfully installed openMPI on other PC. But when I tried to install it
<br>
on  my laptop and typed 'mpicc' , the response was:
<br>
&nbsp;
<br>
The program 'mpicc' can be found in the following packages:
<br>
&nbsp;* lam4-dev
<br>
&nbsp;* libmpich-mpd1.0-dev
<br>
&nbsp;* libmpich-shmem1.0-dev
<br>
&nbsp;* libmpich1.0-dev
<br>
&nbsp;* libopenmpi-dev
<br>
&nbsp;* mpich2
<br>
Try: sudo apt-get install &lt;selected package&gt;
<br>
mpicc: command not found
<br>
chao_at_ubuntu:~$ sudo apt-get install libopenmpi-dev
<br>
[sudo] password for chao: 
<br>
Reading package lists... Done
<br>
Building dependency tree       
<br>
Reading state information... Done
<br>
E: Couldn't find package liopenmpi-dev
<br>
<p>Of course I'm connected to the internet. Please help..
<br>
<p><p><p><p>________________________________
<br>
From: Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Sent: Wed, February 24, 2010 10:44:04 PM
<br>
Subject: Re: [OMPI users] MPi Abort verbosity
<br>
<p>On Wed, 2010-02-24 at 07:36 -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I'm afraid not. We are working on alternative error response
</span><br>
<span class="quotelev1">&gt; mechanisms, but nothing is released at this time.
</span><br>
<p>Don't know if this would work, but why not doing what follows:
<br>
1. set a signal handler in your application. This where you would do
<br>
your cleanup.
<br>
2. call your application with an mpi_abort_delay set to a value &gt; 0 (0
<br>
is the default value). This should delay the actual procs abort.
<br>
3. During that delay, and after you see the message about process going
<br>
to abort, send the signal that should be caught in #1.
<br>
<p>But may be I'm wrong, as I told you I've never tested that...
<br>
<p>Regards,
<br>
Nadia
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 24, 2010, at 7:17 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Mm,
</span><br>
<span class="quotelev2">&gt; &gt; i'm trying to explain better.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My target is, when a MPI process dead for some reason, after
</span><br>
<span class="quotelev2">&gt; &gt; launched MPI_Abort i would like to control this behaviour. Example:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; rank 0 died and launc MPI_Abort
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; i would like to do something before other process died. So i want to
</span><br>
<span class="quotelev2">&gt; &gt; control shutdown of my MPI application. Is it possible?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2010/2/24 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;         I don't believe the error handler will help suppress the
</span><br>
<span class="quotelev2">&gt; &gt;         messages you are trying to avoid as they don't originate in
</span><br>
<span class="quotelev2">&gt; &gt;         the MPI layer. They are actually generated in the RTE layer
</span><br>
<span class="quotelev2">&gt; &gt;         as mpirun is exiting.
</span><br>
<span class="quotelev2">&gt; &gt;        
</span><br>
<span class="quotelev2">&gt; &gt;         You could try adding the --quiet option to your mpirun cmd
</span><br>
<span class="quotelev2">&gt; &gt;         line. This will help eliminate some (maybe not all) of the
</span><br>
<span class="quotelev2">&gt; &gt;         verbage.
</span><br>
<span class="quotelev2">&gt; &gt;        
</span><br>
<span class="quotelev2">&gt; &gt;        
</span><br>
<span class="quotelev2">&gt; &gt;        
</span><br>
<span class="quotelev2">&gt; &gt;         On Feb 24, 2010, at 6:36 AM, Jed Brown wrote:
</span><br>
<span class="quotelev2">&gt; &gt;        
</span><br>
<span class="quotelev3">&gt; &gt;         &gt; On Wed, 24 Feb 2010 14:21:02 +0100, Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt; &gt;         &lt;g.fatigati_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;         &gt;&gt; Yes, of course,
</span><br>
<span class="quotelev4">&gt; &gt;         &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;         &gt;&gt; but i would like to know if there is any way to do that
</span><br>
<span class="quotelev2">&gt; &gt;         with openmpi
</span><br>
<span class="quotelev3">&gt; &gt;         &gt;
</span><br>
<span class="quotelev3">&gt; &gt;         &gt; See the error handler docs, e.g. MPI_Comm_set_errhandler.
</span><br>
<span class="quotelev3">&gt; &gt;         &gt;
</span><br>
<span class="quotelev3">&gt; &gt;         &gt; Jed
</span><br>
<span class="quotelev2">&gt; &gt;        
</span><br>
<span class="quotelev2">&gt; &gt;        
</span><br>
<span class="quotelev3">&gt; &gt;         &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;         &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;         &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;         &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;        
</span><br>
<span class="quotelev2">&gt; &gt;        
</span><br>
<span class="quotelev2">&gt; &gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;         users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;        users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;        
</span><br>
<span class="quotelev2">&gt; &gt;        
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Parallel programmer
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Supercomputing Group
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; g.fatigati [AT] cineca.it          
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<pre>
-- 
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
      
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12137/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12138.php">Jeff Squyres: "[OMPI users] mpicc failure"</a>
<li><strong>Previous message:</strong> <a href="12136.php">Nadia Derbey: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>In reply to:</strong> <a href="12136.php">Nadia Derbey: "Re: [OMPI users] MPi Abort verbosity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12138.php">Jeff Squyres: "[OMPI users] mpicc failure"</a>
<li><strong>Reply:</strong> <a href="12138.php">Jeff Squyres: "[OMPI users] mpicc failure"</a>
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
