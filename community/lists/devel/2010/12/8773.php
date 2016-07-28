<?
$subject_val = "Re: [OMPI devel] memory binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 13 16:22:40 2010" -->
<!-- isoreceived="20101213212240" -->
<!-- sent="Tue, 14 Dec 2010 08:22:33 +1100" -->
<!-- isosent="20101213212233" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] memory binding" -->
<!-- id="4D068E99.7070902_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8864390B-CEEF-4A96-A8DD-BF275D8CCF80_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] memory binding<br>
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-13 16:22:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8774.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<li><strong>Previous message:</strong> <a href="8772.php">Jeff Squyres: "[OMPI devel] Open MPI 1.5.1rc3"</a>
<li><strong>In reply to:</strong> <a href="8771.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8774.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<li><strong>Reply:</strong> <a href="8774.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<li><strong>Reply:</strong> <a href="8784.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/14/2010 01:29 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Dec 10, 2010, at 4:56 PM, David Singleton wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any plan to support NUMA memory binding for tasks?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For some details on what we're planning for affinity, see the BOF slides that I presented at SC'10 on the OMPI web site (under &quot;publications&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I didnt see memory binding in their explicitly.
<br>
<p><span class="quotelev2">&gt;&gt; Even with bind-to-core and memory affinity in 1.4.3 we were seeing 15-20%
</span><br>
<span class="quotelev2">&gt;&gt; variation in run times on a Nehalem cluster.  This turned out to be mostly due
</span><br>
<span class="quotelev2">&gt;&gt; to bad page placement.  Residual pagecache pages from the last job on a node (or
</span><br>
<span class="quotelev2">&gt;&gt; the memory of a suspended job in the case of preemption) could occasionally cause
</span><br>
<span class="quotelev2">&gt;&gt; a lot of non-local page placement.  We hacked the libnuma module to MPOL_BIND
</span><br>
<span class="quotelev2">&gt;&gt; tasks to their local memory and eliminated the majority of this variability.
</span><br>
<span class="quotelev2">&gt;&gt; We are currently running with this as default behaviour since its &quot;the right
</span><br>
<span class="quotelev2">&gt;&gt; thing&quot; for 99% of jobs (we have an environment variable to back off to affinity
</span><br>
<span class="quotelev2">&gt;&gt; for the rest).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What OS and libnuma version are you running?  It has been my experience that libnuma can lie on RHEL 5 and earlier.  My (possibly flawed) understanding is that this is because of lack of proper kernel support; such &quot;proper&quot; kernel support was only added fairly recently (2.6.30something).
</span><br>
<p>That's interesting.  By &quot;lie&quot;, do you mean processes are not really memory bound?
<br>
We're running 2.6.27.55 (and numactl 0.9.8-11.el5) and I've done quite a bit of
<br>
testing that always looks correct.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That aside, it's somewhat disappointing that MPOL_PREFERRED is not working well and that you had to switch to MPOL_BIND.  :-(
</span><br>
<p>I'm not sure its disappointing - I think it's just to be expected.  For sites that
<br>
drop caches or run a whole node memhog or reboot nodes between jobs, MPOL_PREFERRED
<br>
will do the right thing.  For sites that are not so careful or use suspend/resume
<br>
scheduling, memory overcommits and some amount of page reclaim or paging on job
<br>
startup will happen occasionally.  Paying the extra cost of making sure that page
<br>
reclaim or paging results in ideal locality is definitely a big win for a job
<br>
overall.  (Paging suspended jobs back in after they are resumed can undo some of
<br>
their ideal placement but that can be handled.)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should we add an MCA parameter to switch between BIND and PREFERRED, and perhaps default to BIND?
</span><br>
<p>I'm not sure BIND should be the default for everyone - memory imbalanced jobs might
<br>
page badly in this case.  But, yes, we would like an MCA to choose and allow sites
<br>
to select BIND as their default if they wish.  An mpirun option like --bind-to-mem
<br>
would need a preferred/affinity alternative and I'm not sure how of a nice notation/
<br>
syntax for that.
<br>
<p>Cheers,
<br>
David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8774.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<li><strong>Previous message:</strong> <a href="8772.php">Jeff Squyres: "[OMPI devel] Open MPI 1.5.1rc3"</a>
<li><strong>In reply to:</strong> <a href="8771.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8774.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<li><strong>Reply:</strong> <a href="8774.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<li><strong>Reply:</strong> <a href="8784.php">Suraj Prabhakaran: "Re: [OMPI devel] Parent terminates when child crashes/terminates (without finalizing)"</a>
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
