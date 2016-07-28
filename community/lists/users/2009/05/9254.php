<?
$subject_val = "Re: [OMPI users] LSF launch with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 09:51:20 2009" -->
<!-- isoreceived="20090507135120" -->
<!-- sent="Thu, 7 May 2009 09:50:43 -0400" -->
<!-- isosent="20090507135043" -->
<!-- name="Mehdi Bozzo-Rey" -->
<!-- email="mbozzore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LSF launch with OpenMPI" -->
<!-- id="531893A968B34D40B36C7A6445BC828A025C5820_at_catoexm06.noam.corp.platform.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="704F2244-AF2D-4923-9748-49C62307D22D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] LSF launch with OpenMPI<br>
<strong>From:</strong> Mehdi Bozzo-Rey (<em>mbozzore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-07 09:50:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9255.php">pat.o'bryant_at_[hidden]: "[OMPI users] OpenMPI 1.3.X Configuration for OFED"</a>
<li><strong>Previous message:</strong> <a href="9253.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>In reply to:</strong> <a href="9240.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9261.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9261.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>I tried several combinations and:
<br>
<p>- LIBS=... does not work for OpenMPI 1.2.3 / LSF 7.0.5
<br>
- the winner for now is LSF 7.0.4 / OpenMPI 1.2.3
<br>
<p>Cheers,
<br>
<p>Mehdi
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: May-06-09 3:12 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] LSF launch with OpenMPI
<br>
<p>On May 5, 2009, at 10:01 AM, Matthieu Brucher wrote:
<br>
<p><span class="quotelev2">&gt; &gt; What Terry said is correct.  It means that &quot;mpirun&quot; will use,  
</span><br>
<span class="quotelev1">&gt; under the
</span><br>
<span class="quotelev2">&gt; &gt; covers, the &quot;native&quot; launching mechanism of LSF to launch jobs  
</span><br>
<span class="quotelev1">&gt; (vs., say,
</span><br>
<span class="quotelev2">&gt; &gt; rsh or ssh).  It'll also discover the hosts to use for this job  
</span><br>
<span class="quotelev1">&gt; without the
</span><br>
<span class="quotelev2">&gt; &gt; use of a hostfile -- it'll query LSF directly to see what hosts it  
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev2">&gt; &gt; use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, so I have to do something like:
</span><br>
<span class="quotelev1">&gt; bsub -n ${CPUS} mpirun myapplication
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it what I think?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I don't know what you think.  ;-)  But I think that your above command  
<br>
might be correct.  You want *1* copy of mpirun to execute.  Hence, if
<br>
<p>bsub -n ${CPUS} uptime
<br>
<p>launches ${CPUS} copies of uptime, then the above command is not  
<br>
correct.  You want to submit an ${CPUS} processor job to LSF and have  
<br>
*one* copy of &quot;mpirun myapplication&quot; run -- mpirun will then invoke  
<br>
the underlying stuff to launch ${CPUS} copies of myapplication and  
<br>
join them together into a single MPI job.
<br>
<p><span class="quotelev1">&gt; I've enclosed the configure output as well as the config.log. The
</span><br>
<span class="quotelev1">&gt; problem is that my LSF (I didn't install it) 7.0.3 need libbat to be
</span><br>
<span class="quotelev1">&gt; linked against llsbstream (I modified the configure script to add
</span><br>
<span class="quotelev1">&gt; -llsbstream, and it compiled).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Huh!  Odd -- we didn't need that before.  Let me check with Platform...
<br>
<p>FWIW, you should be able to run like this without modifying configure:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure LIBS=-llsbstream ....etc....
<br>
<p>That should add -llsbstream in the Right places.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9255.php">pat.o'bryant_at_[hidden]: "[OMPI users] OpenMPI 1.3.X Configuration for OFED"</a>
<li><strong>Previous message:</strong> <a href="9253.php">Ken Cain: "Re: [OMPI users] OMPI-1.3.2, openib/iWARP(cxgb3) problem: PML add procs failed (Unreachable)"</a>
<li><strong>In reply to:</strong> <a href="9240.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9261.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9261.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
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
