<?
$subject_val = "[OMPI devel] the dangers of configure probing argument counts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 14 19:23:56 2012" -->
<!-- isoreceived="20120215002356" -->
<!-- sent="Tue, 14 Feb 2012 16:23:43 -0800" -->
<!-- isosent="20120215002343" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] the dangers of configure probing argument counts" -->
<!-- id="4F3AFB0F.10500_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] the dangers of configure probing argument counts<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-14 19:23:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10414.php">Paul H. Hargrove: "[OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<li><strong>Previous message:</strong> <a href="10412.php">Rolf vandeVaart: "Re: [OMPI devel] MVAPICH2 vs Open-MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There was recently a fair amount of work done in hwloc to get configure 
<br>
to work correctly for a probe that was intended to determine how many 
<br>
arguments appear in a specific function prototype.  The &quot;issue&quot; was that 
<br>
the C spec doesn't require that the C compiler issue an error for either 
<br>
too-many or too-few arguments.  While gcc and most other compilers make 
<br>
both cases an error, there are two compilers of non-trivial importance 
<br>
which do NOT:
<br>
+  By default the IBM (xlc) C compiler warns for the case of too many 
<br>
argument.
<br>
+  By default the Intel (icc) C compiler warns for the case of too few 
<br>
arguments.
<br>
<p>This renders configure-time tests that want to check argument counts 
<br>
unreliable unless one takes special care to add something &quot;special&quot; to 
<br>
CFLAGS.  While hacking on hwloc we determined that is was NOT safe for 
<br>
configure to add to CFLAGS in general, nor to ask the user to do so.  It 
<br>
was only safe to /temporarily/ add to CFLAGS for the duration of the 
<br>
argument count probe.
<br>
<p>So, WHY am I tell you all this?
<br>
Because of the following in 
<br>
openmpi-1.7a1r25865/ompi/config/ompi_check_openib.m4:
<br>
<span class="quotelev1">&gt;           [AC_CACHE_CHECK(
</span><br>
<span class="quotelev1">&gt;               [number of arguments to ibv_create_cq],
</span><br>
which performs exactly the sort of test I am warning against.
<br>
<p>So, I would encourage somebody to make the effort to reuse the configure 
<br>
logic Jeff and I developed for hwloc.
<br>
In particular look for setting and use of HWLOC_STRICT_ARGS_CFLAGS in 
<br>
config/hwloc.m4
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10414.php">Paul H. Hargrove: "[OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<li><strong>Previous message:</strong> <a href="10412.php">Rolf vandeVaart: "Re: [OMPI devel] MVAPICH2 vs Open-MPI"</a>
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
