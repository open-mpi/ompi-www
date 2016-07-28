<?
$subject_val = "Re: [OMPI devel] Comm_spawn limits";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 17:52:35 2008" -->
<!-- isoreceived="20081027215235" -->
<!-- sent="Mon, 27 Oct 2008 22:52:29 +0100" -->
<!-- isosent="20081027215229" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Comm_spawn limits" -->
<!-- id="20081027215229.GA14815_at_wintermute" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="B4ADB859-56ED-47C0-8DD5-0109E1CCCBA7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Comm_spawn limits<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-27 17:52:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4815.php">Jeff Squyres: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Previous message:</strong> <a href="4813.php">Jeff Squyres: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>In reply to:</strong> <a href="4813.php">Jeff Squyres: "Re: [OMPI devel] Comm_spawn limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4815.php">Jeff Squyres: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Reply:</strong> <a href="4815.php">Jeff Squyres: "Re: [OMPI devel] Comm_spawn limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know any implementation details, but is making a 16-bit
<br>
counter a 32-bit counter really so much harder than this fancy
<br>
(overengineered? ;-) ) table construction? The way I see it, this
<br>
table which might become a real mess if there are multiple
<br>
MPI_Comm_spawn issued simultaneously in different communicators. (Would
<br>
that be legal MPI?)
<br>
<p>Anyway, just my $0.01 (we don't get so many dollars for our euros
<br>
anymore...)
<br>
-Andreas
<br>
<p><p>On 17:02 Mon 27 Oct     , Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; How about a variation on that idea: keep a global bitmap or some other kind 
</span><br>
<span class="quotelev1">&gt; of &quot;this ID is in use&quot; table.  Hence, if the launch counter rolls over, you 
</span><br>
<span class="quotelev1">&gt; can simply check the table to find a free value.  That way, you can be sure 
</span><br>
<span class="quotelev1">&gt; to never re-use a value that is still being used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So we'd have 16 bits to express this counter, but we could introduce a 
</span><br>
<span class="quotelev1">&gt; limit of how many concurrent spawns we support.  Hence, the IDs can be 
</span><br>
<span class="quotelev1">&gt; large, but we only allow having N distinct values at any one time (quite 
</span><br>
<span class="quotelev1">&gt; similar to PIDs and an OS process table).  We can specify the value of N 
</span><br>
<span class="quotelev1">&gt; via configure, an MCA parameter, ...whatever.  If the MPI job tries to have 
</span><br>
<span class="quotelev1">&gt; more than N concurrent spawned jobs, it's an error.  But for a job that 
</span><br>
<span class="quotelev1">&gt; continuously spawns jobs that each die off in short finite time, it'll be 
</span><br>
<span class="quotelev1">&gt; no problem.  The counter will likely cycle around, but won't run into any 
</span><br>
<span class="quotelev1">&gt; problems as long as there are &lt;N total spawns still running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;waving hands a bit&gt;  There's probably some off-by-one errors in the above 
</span><br>
<span class="quotelev1">&gt; paragraph, but you get the idea.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 22, 2008, at 2:59 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can't swear to this because I haven't fully grokked it yet, but I
</span><br>
<span class="quotelev2">&gt;&gt; believe the answer is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. if child jobs have completed, it won't hurt. I think the various
</span><br>
<span class="quotelev2">&gt;&gt; subsystem cleanup their bookkeeping when a job completes, so we could
</span><br>
<span class="quotelev2">&gt;&gt; possibly reuse the number. Might be some race conditions we would have
</span><br>
<span class="quotelev2">&gt;&gt; to resolve.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. if child jobs haven't completed (which is the  situation this
</span><br>
<span class="quotelev2">&gt;&gt; particular user was attempting), then we would have a problem with
</span><br>
<span class="quotelev2">&gt;&gt; jobid confusion. Once we get the procs launched, though, I'm not sure
</span><br>
<span class="quotelev2">&gt;&gt; how much of a problem there is - would have to investigate. Could
</span><br>
<span class="quotelev2">&gt;&gt; cause some bookkeeping problems for job completion.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Interesting possibility, though...consider it another option for now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 22, 2008, at 12:53 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; What's happened if we roll around with the counter ?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  george.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Oct 22, 2008, at 2:49 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; There recently was activity on the mailing lists where someone was
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; attempting to call comm_spawn 100,000 times. Setting aside the
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; threading issues that were the focus of that exchange, the fact is
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; that OMPI currently cannot handle that many comm_spawns.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; The ORTE jobid is composed of two elements:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 1. the top 16-bits is an &quot;identifier&quot; for that mpirun
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; 2. the lower 16-bits is a running counter identifying the specific
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; job/launch for those procs.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thus, we are limited to 64k comm_spawns.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Expanding this would require either revamping the entire way we
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; handle jobs (e.g., removing the mpirun identifier - major effort),
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; or expanding the orte_jobid_t from its current 32-bits to 64-bits.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Is this a problem we want to address?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
============================================
Andreas Sch&#228;fer
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
0049/3641-9-46376
PGP/GPG key via keyserver
I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
============================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your 
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4814/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4815.php">Jeff Squyres: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Previous message:</strong> <a href="4813.php">Jeff Squyres: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>In reply to:</strong> <a href="4813.php">Jeff Squyres: "Re: [OMPI devel] Comm_spawn limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4815.php">Jeff Squyres: "Re: [OMPI devel] Comm_spawn limits"</a>
<li><strong>Reply:</strong> <a href="4815.php">Jeff Squyres: "Re: [OMPI devel] Comm_spawn limits"</a>
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
