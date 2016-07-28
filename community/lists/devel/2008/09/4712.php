<?
$subject_val = "Re: [OMPI devel] OMPI &amp; SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 26 08:22:46 2008" -->
<!-- isoreceived="20080926122246" -->
<!-- sent="Fri, 26 Sep 2008 08:22:37 -0400" -->
<!-- isosent="20080926122237" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI &amp;amp; SLURM" -->
<!-- id="BD5216BB-D256-4081-8405-5D98DD589FF7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9DF52465-27A4-47FC-A5D2-2515A19A7F22_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI &amp; SLURM<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-26 08:22:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4713.php">Jeff Squyres: "[OMPI devel] HG OMPI mirror is back"</a>
<li><strong>Previous message:</strong> <a href="4711.php">Ralph Castain: "[OMPI devel] OMPI &amp; SLURM"</a>
<li><strong>In reply to:</strong> <a href="4711.php">Ralph Castain: "[OMPI devel] OMPI &amp; SLURM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds perfectly reasonable to me.  Thanks for staying on top of this!
<br>
<p><p>On Sep 25, 2008, at 7:18 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Yo all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Over the last few days, we at LANL have been working with our LLNL
</span><br>
<span class="quotelev1">&gt; counterparts on some OMPI/SLURM integration issues. In the course of
</span><br>
<span class="quotelev1">&gt; this work, we have learned that the meaning/use of the
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE environmental variable used by OMPI (and LAM-MPI
</span><br>
<span class="quotelev1">&gt; as well as others) to extract required allocation information was
</span><br>
<span class="quotelev1">&gt; changed beginning with SLURM 1.2, and the info we are seeking was
</span><br>
<span class="quotelev1">&gt; shifted to SLURM_JOB_CPUS_PER_NODE. Since SLURM is now on release
</span><br>
<span class="quotelev1">&gt; 1.3.7 and above, this clearly occurred some time ago.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I propose to do (per LLNL's recommendation) is modify the SLURM
</span><br>
<span class="quotelev1">&gt; ras module to check for SLURM_JOB_CPUS_PER_NODE first and use that
</span><br>
<span class="quotelev1">&gt; value if found - if not found, then fall back to using
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE. This will make us fully compatible with more
</span><br>
<span class="quotelev1">&gt; recent SLURM releases while retaining backward compatibility with pre-
</span><br>
<span class="quotelev1">&gt; SLURM 1.2 versions (assuming anyone out there is running something
</span><br>
<span class="quotelev1">&gt; that old).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given that 1.2.8 and 1.3.0 have not yet been released, we (LANL) would
</span><br>
<span class="quotelev1">&gt; like to get this change into those releases. It is a minor code change
</span><br>
<span class="quotelev1">&gt; (I will insert it into trunk so people can see) and easily tested on
</span><br>
<span class="quotelev1">&gt; any SLURM machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there any objections/comments?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="4713.php">Jeff Squyres: "[OMPI devel] HG OMPI mirror is back"</a>
<li><strong>Previous message:</strong> <a href="4711.php">Ralph Castain: "[OMPI devel] OMPI &amp; SLURM"</a>
<li><strong>In reply to:</strong> <a href="4711.php">Ralph Castain: "[OMPI devel] OMPI &amp; SLURM"</a>
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
