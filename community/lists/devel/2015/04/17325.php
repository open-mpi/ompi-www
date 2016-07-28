<?
$subject_val = "[OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 17:22:05 2015" -->
<!-- isoreceived="20150422212205" -->
<!-- sent="Wed, 22 Apr 2015 21:22:04 +0000" -->
<!-- isosent="20150422212204" -->
<!-- name="Tom Wurgler" -->
<!-- email="twurgl_at_[hidden]" -->
<!-- subject="[OMPI devel] Compile &amp;quot;remark&amp;quot; for Openmpi 1.8.4" -->
<!-- id="1429737723913.37518_at_goodyear.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20150422192902.GE68930_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4<br>
<strong>From:</strong> Tom Wurgler (<em>twurgl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 17:22:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17326.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>Previous message:</strong> <a href="17324.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>In reply to:</strong> <a href="17318.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Compilation of OpenMPI 1.8.4 using Intel compiler version 14.0.4.211 results in usable code but has the following &quot;remarks&quot;:....
<br>
thanks
<br>
tom
<br>
<p><p>make[2]: Entering directory `/home02/tom/src/openmpi-1.8.4_intel_1404211/ompi/mpi/fortran/use-mpi-f08'
<br>
&nbsp;&nbsp;PPFC     mpi-f08-types.lo
<br>
&nbsp;&nbsp;GENERATE sizeof_f08.h
<br>
&nbsp;&nbsp;CC       constants.lo
<br>
&nbsp;&nbsp;GENERATE sizeof_f08.f90
<br>
&nbsp;&nbsp;GENERATE profile/psizeof_f08.f90
<br>
&nbsp;&nbsp;FC       sizeof_f08.lo
<br>
&nbsp;&nbsp;FC       profile/psizeof_f08.lo
<br>
&nbsp;&nbsp;PPFC     mpi-f08-interfaces-callbacks.lo
<br>
&nbsp;&nbsp;PPFC     mpi-f08-interfaces.lo
<br>
&nbsp;&nbsp;PPFC     pmpi-f08-interfaces.lo
<br>
pmpi-f08-interfaces.F90(28): remark #5140: Unrecognized directive
<br>
!DIR$ IGNORE_TKR buf
<br>
--------------------^
<br>
pmpi-f08-interfaces.F90(45): remark #5140: Unrecognized directive
<br>
!DIR$ IGNORE_TKR buf
<br>
--------------------^
<br>
pmpi-f08-interfaces.F90(62): remark #5140: Unrecognized directive
<br>
!DIR$ IGNORE_TKR buffer
<br>
-----------------------^
<br>
pmpi-f08-interfaces.F90(76): remark #5140: Unrecognized directive
<br>
!DIR$ IGNORE_TKR buffer_addr
<br>
----------------------------^
<br>
pmpi-f08-interfaces.F90(111): remark #5140: Unrecognized directive
<br>
!DIR$ IGNORE_TKR buf
<br>
--------------------^
<br>
[lots more of same, so truncated here]<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17326.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] powerpc64le support [1-line patch]"</a>
<li><strong>Previous message:</strong> <a href="17324.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc2 released"</a>
<li><strong>In reply to:</strong> <a href="17318.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Compile &quot;remark&quot; for Openmpi 1.8.4"</a>
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
