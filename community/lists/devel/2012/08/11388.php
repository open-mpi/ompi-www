<?
$subject_val = "Re: [OMPI devel] 1.6.1rc1 posted";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  7 12:51:07 2012" -->
<!-- isoreceived="20120807165107" -->
<!-- sent="Tue, 7 Aug 2012 12:51:01 -0400" -->
<!-- isosent="20120807165101" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.1rc1 posted" -->
<!-- id="46C45800-8363-4294-A433-D22B42F6A07F_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="501C4F8F.40902_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.1rc1 posted<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-07 12:51:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11389.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Previous message:</strong> <a href="11387.php">Paul Kapinos: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>In reply to:</strong> <a href="11370.php">Paul Kapinos: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11396.php">Paul Kapinos: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>Reply:</strong> <a href="11396.php">Paul Kapinos: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 3, 2012, at 6:24 PM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; testing our well-known example of the registered memory problem (see <a href="http://www.open-mpi.org/community/lists/users/2012/02/18565.php">http://www.open-mpi.org/community/lists/users/2012/02/18565.php</a>) on freshly-installed 1.6.1rc2, found out that &quot;Fall back to send/receive semantics&quot; did not work always it. However the behaviour has changed:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.5.3. and older: MPI processes hang and block the IB interface(s) forever
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.6.1rc2: a) MPI processes run through (if the chunk size is less than 8Gb) with or without a warning; or
</span><br>
<span class="quotelev1">&gt;          b) MPI processes die  (if the chunk size is more than 8Gb)
</span><br>
<p>We talked about this mail today on our weekly teleconference.
<br>
<p>That's odd.  Looking at your output files, I see that they when trying to create a queue pair.  Let me explain...
<br>
<p>Our newest stop-gap scheme on the 1.6 branch is as follows:
<br>
<p>- figure out how much physical RAM is on the machine
<br>
- take 85% of that number
<br>
- M = (85% of physical_memory / num_mpi_procs_on_machine)
<br>
- don't let any individual MPI process register more than M bytes of memory
<br>
<p>This is a heuristic.  The idea is that we leave 15% of memory available to the OS and other OpenFabrics services running on the machine (IPoIB, subnet management, ...etc.).  However, there is a variable OMPI doesn't count -- the amount of registered memory consumed by the meta data consumed by a queue pair.  
<br>
<p>When you take into account the fact that OMPI creates queue pairs lazily (in an attempt to reduce registered memory consumption, which is fairly ironic here ;-) ), we could still run out of registered memory and then try to create a new QP later (e.g., the first time MPI process A sends to B).  This QP could fail to be created if there is no more registered memory.
<br>
<p>That's the type of error that I see in your log files (QP creation fail).
<br>
<p>But with 15% of RAM left, we're greatly surprised to see this kind of error.  Perhaps registering 8+GB buffers does something in the OpenFabrics registration system that we're unaware of (to make overall available registered memory deplete faster).  Huh.
<br>
<p>More below.
<br>
<p><span class="quotelev1">&gt; Note that the same program which die in (b) run fine over IPoIB (-mca btl ^openib). However, the performance is very bad in this case... some 1100 sec. instead of about a minute.
</span><br>
<p>Yep, that makes sense. IPoIB is quite inefficient.  
<br>
<p><span class="quotelev1">&gt; Reproducing: compile attached file and let it run on nodes with &gt;=24GB with
</span><br>
<span class="quotelev1">&gt;    log_num_mtt     : 20
</span><br>
<span class="quotelev1">&gt;    log_mtts_per_seg: 3
</span><br>
<span class="quotelev1">&gt; (=32Gb, our default values):
</span><br>
<span class="quotelev1">&gt; $ mpiexec ....&lt;one proc per node&gt; .... a.out 1080000000 1080000001
</span><br>
<p>So I'm not 100% clear on what you mean here: when you set the OFED params to allow registration of more memory than you have physically, does the problem go away?
<br>
<p><span class="quotelev1">&gt;From your log messages, the warning messages were from machines with nearly 100GB RAM but only 32GB register-able.  But only one of those was the same as one that showed QP creation failures.  So I'm not clear which was which.
</span><br>
<p>Regardless: can you pump the MTT params up to allow registering all of physical memory on those machines, and see if you get any failures?
<br>
<p>To be clear: we're trying to determine if we should spend more effort on making OMPI work properly in low-registered-memory-availabile scenarios, or whether we should just emphasize &quot;go reset your MTT parameters to allow registering all of physical memory.&quot;
<br>
<p><span class="quotelev1">&gt; Well, we know about the need to raise the values of one of these parameters, but I wanted to let you to know that your workaround for the problem is still not 100% perfect but only 99%.
</span><br>
<p>Ok, good.  Many thanks for your patience with all of this.
<br>
<p><span class="quotelev1">&gt; P.S: A note about the informative warning:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: It appears that your OpenFabrics subsystem is configured to only
</span><br>
<span class="quotelev1">&gt; allow registering part of your physical memory.
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt;  Registerable memory:     32768 MiB
</span><br>
<span class="quotelev1">&gt;  Total memory:            98293 MiB
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; On node with 24 GB this warning did not came around, although the max. size of registered memory (32GB) is only 1.5x of RAM, but in
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>
</span><br>
<span class="quotelev1">&gt; at least the 2x RAM size is recommended.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should this warning not came out in all cases when registered memory &lt; 2x RAM?
</span><br>
<p><p>You're correct -- perhaps this is bad wording in the FAQ.  As far as I understand it, it's only necessary to be able to register all of physical memory.  Although Mellanox did recommend being able to register at least 2x physical memory.
<br>
<p>...that being said, I have never gotten a clear explanation of what exactly those two parameters are.  I.e., why you would adjust one and not the other, etc.  Mellanox advised us (the OMPI developers) to adjust log_num_mtt, but I never found out why.
<br>
<p>We'll continue to pester Mellanox to try to get a good answer as to why 2x is recommended.  :-)  If we get a good answer, we'll update the FAQ wording and/or the limits at which that warning is displayed.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11389.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>Previous message:</strong> <a href="11387.php">Paul Kapinos: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>In reply to:</strong> <a href="11370.php">Paul Kapinos: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11396.php">Paul Kapinos: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>Reply:</strong> <a href="11396.php">Paul Kapinos: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
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
