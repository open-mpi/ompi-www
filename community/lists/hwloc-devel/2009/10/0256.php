<?
$subject_val = "Re: [hwloc-devel] 0.9.1rc2 failures";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 23 08:46:15 2009" -->
<!-- isoreceived="20091023124615" -->
<!-- sent="Fri, 23 Oct 2009 14:46:04 +0200" -->
<!-- isosent="20091023124604" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 0.9.1rc2 failures" -->
<!-- id="20091023124604.GK4686_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AE072DA.8020202_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 0.9.1rc2 failures<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-23 08:46:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0257.php">Brice Goglin: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Previous message:</strong> <a href="0255.php">Jeff Squyres: "Re: [hwloc-devel] automake silent-rules"</a>
<li><strong>In reply to:</strong> <a href="0244.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0257.php">Brice Goglin: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Reply:</strong> <a href="0257.php">Brice Goglin: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Reply:</strong> <a href="0258.php">Jeff Squyres: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Thanks for the logs.
<br>
<p>Pavan Balaji, le Thu 22 Oct 2009 09:57:30 -0500, a &#233;crit :
<br>
<span class="quotelev1">&gt; topology.c(74): remark #869: parameter &quot;objs&quot; was never referenced
</span><br>
<span class="quotelev1">&gt; topology.c(452): remark #981: operands are evaluated in unspecified order
</span><br>
<p>Such remarks are ok. (Google says 981 is really pedantism)
<br>
<p><span class="quotelev1">&gt; topology-linux.c(839): (col. 7) remark: LOOP WAS VECTORIZED.
</span><br>
Such remarks are really ok :)
<br>
<p><span class="quotelev1">&gt; traversal.c(24): warning #188: enumerated type mixed with another type
</span><br>
<p>This is because we do not include HWLOC_OBJ_TYPE_MAX and UNKNOWN in
<br>
the enumeration. One problem with adding them (MAX, in particular) is
<br>
that then the compiler will warn if one doesn't handle these cases in a
<br>
switch, even if we know they can never happen. From the application
<br>
point of view there should always be a default: case anyway since we may
<br>
introduce other types of objects, so maybe we should include them and
<br>
add cases that just assert(false);
<br>
<p><span class="quotelev1">&gt; topology-linux.c(787): remark #593: variable &quot;proc_oscoreids&quot; was set but never used
</span><br>
<span class="quotelev1">&gt;     unsigned proc_oscoreids[] = { [0 ... HWLOC_NBMAXCPUS-1] = -1 };
</span><br>
<p>Heh, good catch.  We indeed do not need it any more to manage the
<br>
computation. Brice, do you think we could just get rid of it?
<br>
<p><span class="quotelev1">&gt; PGC-W-0095-Type cast required for this conversion (topology.c: 627)
</span><br>
<span class="quotelev1">&gt; PGC-W-0155-Pointer value created from a nonlong integral type  (topology.c: 627)
</span><br>
<p>Should be fixed now.
<br>
<p><span class="quotelev1">&gt; PGC-W-0155-Long value is passed to a nonprototyped function - argument #1 (cpuset.c: 453)
</span><br>
<p>I hope r1235/1236 will fix it.
<br>
<p><span class="quotelev1">&gt; PGC-W-0006-Empty translation unit (lstopo-cairo.c: 6)
</span><br>
<span class="quotelev1">&gt; PGC-W-0006-Empty translation unit (lstopo-xml.c: 6)
</span><br>
<p>These are expected.
<br>
<p><span class="quotelev1">&gt; PGC-W-0221-Redefinition of symbol CPU_SET (/radix-homes/software/com/packages/pgi-9.0-4/linux86-64/9.0-4/include-gcc40/sched.h: 20)
</span><br>
<p>This is the probable culprit of the final link failure. It's odd that
<br>
pgcc provides its own copy of sched.h, isn't it supposed to just use
<br>
glibc's?  I'm not surprised bugs may appear, I'd tend to think that the
<br>
bug is rather in pgcc.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0257.php">Brice Goglin: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Previous message:</strong> <a href="0255.php">Jeff Squyres: "Re: [hwloc-devel] automake silent-rules"</a>
<li><strong>In reply to:</strong> <a href="0244.php">Pavan Balaji: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0257.php">Brice Goglin: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Reply:</strong> <a href="0257.php">Brice Goglin: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
<li><strong>Reply:</strong> <a href="0258.php">Jeff Squyres: "Re: [hwloc-devel] 0.9.1rc2 failures"</a>
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
