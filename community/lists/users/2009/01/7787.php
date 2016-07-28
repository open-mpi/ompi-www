<?
$subject_val = "Re: [OMPI users] Handling output of processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 07:29:51 2009" -->
<!-- isoreceived="20090123122951" -->
<!-- sent="Fri, 23 Jan 2009 07:29:44 -0500" -->
<!-- isosent="20090123122944" -->
<!-- name="Allen Barnett" -->
<!-- email="allen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Handling output of processes" -->
<!-- id="1232713784.734.31.camel_at_localhost6.localdomain6" -->
<!-- inreplyto="BB04B9F1-0C97-458D-BD10-678A280160C5_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Handling output of processes<br>
<strong>From:</strong> Allen Barnett (<em>allen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 07:29:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7788.php">Gabriele Fatigati: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7786.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>In reply to:</strong> <a href="7759.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7806.php">Gijsbert Wiesenekker: "Re: [OMPI users] Handling output of processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2009-01-22 at 06:33 -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; If you need to do this with a prior release....well, I'm afraid it  
</span><br>
<span class="quotelev1">&gt; won't work. :-)
</span><br>
<p>As a quick hack for 1.2.x, I sometimes use this script to wrap my
<br>
executable:
<br>
---------------------------------------------------------------
<br>
#!/bin/sh
<br>
# sompi.sh: Send each rank's output to a separate file.
<br>
# Note use of undocumented OMPI 1.2.x environment variables!
<br>
exec &quot;$*&quot; &gt; &quot;listing.$OMPI_MCA_ns_nds_num_procs.$OMP_MCA_ns_nds_vpid&quot;
<br>
---------------------------------------------------------------
<br>
<p>Then do:
<br>
<p>$ mpirun -np 3 ~allen/bin/sompi.sh parallel_program
<br>
<p>As the processes run, you can &quot;tail&quot; the individual listing files to see
<br>
what's happening. Of course, the working directory has to be writable
<br>
and you have to find the machine and directory where the output is being
<br>
redirected to, and so on...
<br>
<p>Allen
<br>
<p><span class="quotelev1">&gt; On Jan 22, 2009, at 1:58 AM, jody wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt; I have a small cluster consisting of 9 computers (8x2 CPUs, 1x4 CPUs).
</span><br>
<span class="quotelev2">&gt; &gt; I would like to be able to observe the output of the processes
</span><br>
<span class="quotelev2">&gt; &gt; separately during an mpirun.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What i currently do is to apply the mpirun to a shell script which
</span><br>
<span class="quotelev2">&gt; &gt; opens a xterm for each process,
</span><br>
<span class="quotelev2">&gt; &gt; which then starts the actual application.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This works, but is a bit complicated, e.g. finding the window you're
</span><br>
<span class="quotelev2">&gt; &gt; interested in among 19 others.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So i was wondering is there a possibility to capture the processes'
</span><br>
<span class="quotelev2">&gt; &gt; outputs separately, so
</span><br>
<span class="quotelev2">&gt; &gt; i can make an application in which i can switch between the different
</span><br>
<span class="quotelev2">&gt; &gt; processor outputs?
</span><br>
<span class="quotelev2">&gt; &gt; I could imagine that could be done by wrapper applications which
</span><br>
<span class="quotelev2">&gt; &gt; redirect the output over a TCP
</span><br>
<span class="quotelev2">&gt; &gt; socket to a server application.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But perhaps there is an easier way, or something like this alread  
</span><br>
<span class="quotelev2">&gt; &gt; does exist?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank You
</span><br>
<span class="quotelev2">&gt; &gt;  Jody
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
<pre>
-- 
Allen Barnett
E-Mail: allen_at_[hidden]
Skype:  allenbarnett
Ph:     518-887-2930
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7788.php">Gabriele Fatigati: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7786.php">jody: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<li><strong>In reply to:</strong> <a href="7759.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7806.php">Gijsbert Wiesenekker: "Re: [OMPI users] Handling output of processes"</a>
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
