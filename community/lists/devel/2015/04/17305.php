<?
$subject_val = "[OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 10:56:09 2015" -->
<!-- isoreceived="20150422145609" -->
<!-- sent="Wed, 22 Apr 2015 16:55:57 +0200" -->
<!-- isosent="20150422145557" -->
<!-- name="Rapha&#195;&#171;l Fouassier" -->
<!-- email="raphael.fouassier_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low" -->
<!-- id="5537B67D.1070701_at_bull.net" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5537B540.3050600_at_bull.net" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low<br>
<strong>From:</strong> Rapha&#195;&#171;l Fouassier (<em>raphael.fouassier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-22 10:55:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17306.php">Howard Pritchard: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Previous message:</strong> <a href="17304.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17306.php">Howard Pritchard: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Reply:</strong> <a href="17306.php">Howard Pritchard: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Reply:</strong> <a href="17311.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Reply:</strong> <a href="17318.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are experiencing a bug in OpenMPI in 1.8.4 which happens also on
<br>
master: if locked memory limits are too low, a segfault happens
<br>
in openib/udcm because some memory is not correctly deallocated.
<br>
<p>To reproduce it, modify /etc/security/limits.conf with:
<br>
* soft memlock 64
<br>
* hard memlock 64
<br>
and launch with mpirun (not in a slurm allocation).
<br>
<p><p>I propose 2 patches for 1.8.4 and master (because of the btl move to
<br>
opal) which:
<br>
- free all allocated ressources
<br>
- print the limits error
<br>
<p><p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17305/patch-1.8.4">patch-1.8.4</a>
</ul>
<!-- attachment="patch-1.8.4" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17305/patch-master">patch-master</a>
</ul>
<!-- attachment="patch-master" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17306.php">Howard Pritchard: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Previous message:</strong> <a href="17304.php">Marco Atzeri: "Re: [OMPI devel] 1.8.5rc2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17306.php">Howard Pritchard: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Reply:</strong> <a href="17306.php">Howard Pritchard: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Reply:</strong> <a href="17311.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
<li><strong>Reply:</strong> <a href="17318.php">Nathan Hjelm: "Re: [OMPI devel] Fwd: OpenIB module initialisation causes segmentation fault when locked memory limit too low"</a>
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
