<?
$subject_val = "Re: [OMPI users] mpirun problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 15:16:59 2009" -->
<!-- isoreceived="20090304201659" -->
<!-- sent="Wed, 4 Mar 2009 13:16:47 -0700" -->
<!-- isosent="20090304201647" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun problem" -->
<!-- id="F6F82E79-D5C8-4BD0-984A-53AFE52F3EE1_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="57D90852-A880-4998-BA96-FB030691AA30_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 15:16:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8297.php">Jan Lindheim: "[OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8295.php">Jeff Squyres: "Re: [OMPI users] mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="8295.php">Jeff Squyres: "Re: [OMPI users] mpirun problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I suppose one initial question is: what version of Open MPI are you  
<br>
running? OMPI 1.3 should not be attempting to ssh a daemon on a local  
<br>
job like this - OMPI 1.2 -will-, so it is important to know which one  
<br>
we are talking about.
<br>
<p>Just do &quot;mpirun --version&quot; and it should tell you.
<br>
<p>Ralph
<br>
<p><p>On Mar 4, 2009, at 1:09 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for the delay in replying; the usual INBOX deluge keeps me  
</span><br>
<span class="quotelev1">&gt; from being timely in replying to all mails...  More below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 24, 2009, at 6:52 AM, Jovana Knezevic wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm new to MPI, so I'm going to explain my problem in detail
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to compile a simple application using mpicc (on SUSE 10.0)
</span><br>
<span class="quotelev2">&gt;&gt; and run it - compilation passes well, but mpirun is the problem.
</span><br>
<span class="quotelev2">&gt;&gt; So, let's say the program is called 1.c, I tried the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpicc -o 1 1.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (and, just for the case, after problems with mpirun, I tried the  
</span><br>
<span class="quotelev2">&gt;&gt; following, too)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpicc --showme:compile
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpicc --showme:link
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpicc -I/include -pthread 1.c -pthread -I/lib -lmpi -lopen-rte
</span><br>
<span class="quotelev2">&gt;&gt; -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl -o 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Both versions (wih or without flags) produced executables as expected
</span><br>
<span class="quotelev2">&gt;&gt; (so, when I write: ./1 it executes in expected manner),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but when I try this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 4 ./1,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it terminates giving the following message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ssh: (none): Name or service not known
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; A daemon (pid 6877) died unexpectedly with status 255 while  
</span><br>
<span class="quotelev2">&gt;&gt; attempting
</span><br>
<span class="quotelev2">&gt;&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's fun; it seems like OMPI is not recognizing localhost properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you use the --debug-daemons and --leave-session-attached options  
</span><br>
<span class="quotelev1">&gt; to mpirun and see what output you get?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8297.php">Jan Lindheim: "[OMPI users] RETRY EXCEEDED ERROR"</a>
<li><strong>Previous message:</strong> <a href="8295.php">Jeff Squyres: "Re: [OMPI users] mpirun problem"</a>
<li><strong>In reply to:</strong> <a href="8295.php">Jeff Squyres: "Re: [OMPI users] mpirun problem"</a>
<!-- nextthread="start" -->
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
