<?
$subject_val = "Re: [OMPI users] mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 15:09:18 2009" -->
<!-- isoreceived="20090304200918" -->
<!-- sent="Wed, 4 Mar 2009 15:09:11 -0500" -->
<!-- isosent="20090304200911" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun problem" -->
<!-- id="57D90852-A880-4998-BA96-FB030691AA30_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9d13e50c0902240352g26a0622fm33a244bbfbf1109f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 15:09:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8296.php">Ralph Castain: "Re: [OMPI users] mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="8294.php">Jeff Squyres: "Re: [OMPI users] threading bug?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/8176.php">Jovana Knezevic: "[OMPI users] mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8296.php">Ralph Castain: "Re: [OMPI users] mpirun problem"</a>
<li><strong>Reply:</strong> <a href="8296.php">Ralph Castain: "Re: [OMPI users] mpirun problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying; the usual INBOX deluge keeps me from  
<br>
being timely in replying to all mails...  More below.
<br>
<p>On Feb 24, 2009, at 6:52 AM, Jovana Knezevic wrote:
<br>
<p><span class="quotelev1">&gt; I'm new to MPI, so I'm going to explain my problem in detail
</span><br>
<span class="quotelev1">&gt; I'm trying to compile a simple application using mpicc (on SUSE 10.0)
</span><br>
<span class="quotelev1">&gt; and run it - compilation passes well, but mpirun is the problem.
</span><br>
<span class="quotelev1">&gt; So, let's say the program is called 1.c, I tried the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc -o 1 1.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (and, just for the case, after problems with mpirun, I tried the  
</span><br>
<span class="quotelev1">&gt; following, too)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc --showme:compile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc --showme:link
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc -I/include -pthread 1.c -pthread -I/lib -lmpi -lopen-rte
</span><br>
<span class="quotelev1">&gt; -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl -o 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both versions (wih or without flags) produced executables as expected
</span><br>
<span class="quotelev1">&gt; (so, when I write: ./1 it executes in expected manner),
</span><br>
<p>Good.
<br>
<p><span class="quotelev1">&gt; but when I try this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 ./1,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it terminates giving the following message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ssh: (none): Name or service not known
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 6877) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<p>That's fun; it seems like OMPI is not recognizing localhost properly.
<br>
<p>Can you use the --debug-daemons and --leave-session-attached options  
<br>
to mpirun and see what output you get?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8296.php">Ralph Castain: "Re: [OMPI users] mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="8294.php">Jeff Squyres: "Re: [OMPI users] threading bug?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/8176.php">Jovana Knezevic: "[OMPI users] mpirun problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8296.php">Ralph Castain: "Re: [OMPI users] mpirun problem"</a>
<li><strong>Reply:</strong> <a href="8296.php">Ralph Castain: "Re: [OMPI users] mpirun problem"</a>
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
