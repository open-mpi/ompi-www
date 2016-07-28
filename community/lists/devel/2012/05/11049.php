<?
$subject_val = "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 30 05:06:09 2012" -->
<!-- isoreceived="20120530090609" -->
<!-- sent="Wed, 30 May 2012 12:05:43 +0300" -->
<!-- isosent="20120530090543" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST" -->
<!-- id="CAL3GGtr2a8pAJEMHXKMdETWY+OzcoVeW=5FYe-ejGga+7yLK5g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D7803EE5-DB3C-463D-B8B9-39337960F8A9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-30 05:05:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11050.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Previous message:</strong> <a href="11048.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11044.php">Jeff Squyres: "[OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11050.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Reply:</strong> <a href="11050.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not good:
<br>
<p><p><p>/labhome/alexm/workspace/openmpi-1.6.1a1hge06c2f2a0859/inst/bin/mpirun
<br>
--host
<br>
h-qa-017,h-qa-017,h-qa-017,h-qa-017,h-qa-018,h-qa-018,h-qa-018,h-qa-018 -np
<br>
8 --bind-to-core -bynode -display-map
<br>
/usr/mpi/gcc/mlnx-openmpi-1.6rc4/tests/osu_benchmarks-3.1.1/osu_alltoall
<br>
<p><p><p>&nbsp;========================   JOB MAP   ========================
<br>
<p><p><p>&nbsp;Data for node: h-qa-017               Num procs: 4
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [36855,1] Process rank: 0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [36855,1] Process rank: 2
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [36855,1] Process rank: 4
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [36855,1] Process rank: 6
<br>
<p><p><p>&nbsp;Data for node: h-qa-018               Num procs: 4
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [36855,1] Process rank: 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [36855,1] Process rank: 3
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [36855,1] Process rank: 5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Process OMPI jobid: [36855,1] Process rank: 7
<br>
<p><p><p>&nbsp;=============================================================
<br>
<p>--------------------------------------------------------------------------
<br>
<p>An invalid physical processor ID was returned when attempting to bind
<br>
<p>an MPI process to a unique processor.
<br>
<p><p><p>This usually means that you requested binding to more processors than
<br>
<p>exist (e.g., trying to bind N MPI processes to M processors, where N &gt;
<br>
<p>M).  Double check that you have enough unique processors for all the
<br>
<p>MPI processes that you are launching on this host.
<br>
<p><p><p><p><p>$hwloc-ls --of console
<br>
Machine (32GB)
<br>
&nbsp;&nbsp;NUMANode L#0 (P#0 16GB) + Socket L#0 + L3 L#0 (20MB) + L2 L#0 (256KB) +
<br>
L1 L#0 (32KB) + Core L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#1 (P#2)
<br>
&nbsp;&nbsp;NUMANode L#1 (P#1 16GB) + Socket L#1 + L3 L#1 (20MB) + L2 L#1 (256KB) +
<br>
L1 L#1 (32KB) + Core L#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#2 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PU L#3 (P#3)
<br>
<p><p>On Tue, May 29, 2012 at 11:00 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Per ticket #3108, there were still some unfortunate bugs in the affinity
</span><br>
<span class="quotelev1">&gt; code in 1.6.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These have now been fixed.  ...but since is the 2nd or 3rd time we have
</span><br>
<span class="quotelev1">&gt; &quot;fixed&quot; the 1.5/1.6 series w.r.t. processor affinity, I'd really like
</span><br>
<span class="quotelev1">&gt; people to test this stuff before it's committed and we ship 1.6.1.  I've
</span><br>
<span class="quotelev1">&gt; put tarballs containing the fixes here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/~jsquyres/unofficial/">http://www.open-mpi.org/~jsquyres/unofficial/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you please try mpirun options like --bind-to-core and --bind-to-socket
</span><br>
<span class="quotelev1">&gt; and ensure that they still work for you?  (even on machines with
</span><br>
<span class="quotelev1">&gt; hyperthreading enabled, if you have access to such things)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IBM: I'd particularly like to hear that we haven't made anything worse on
</span><br>
<span class="quotelev1">&gt; POWER systems.  Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11049/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11050.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Previous message:</strong> <a href="11048.php">Jeff Squyres: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>In reply to:</strong> <a href="11044.php">Jeff Squyres: "[OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11050.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
<li><strong>Reply:</strong> <a href="11050.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.6 affinity fixes: PLEASE TEST"</a>
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
