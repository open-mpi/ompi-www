<?
$subject_val = "[OMPI users] boost + openmpi link errors: missing openmpi libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 19 14:40:50 2010" -->
<!-- isoreceived="20101119194050" -->
<!-- sent="Fri, 19 Nov 2010 14:40:42 -0500" -->
<!-- isosent="20101119194042" -->
<!-- name="Hicham Mouline" -->
<!-- email="hicham_at_[hidden]" -->
<!-- subject="[OMPI users] boost + openmpi link errors: missing openmpi libraries" -->
<!-- id="20101119144042.20401_at_web005.roc2.bluetie.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] boost + openmpi link errors: missing openmpi libraries<br>
<strong>From:</strong> Hicham Mouline (<em>hicham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-19 14:40:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14840.php">Nehemiah Dacres: "[OMPI users] sun compilers"</a>
<li><strong>Previous message:</strong> <a href="14838.php">Addepalli, Srirangam V: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14862.php">Jeff Squyres: "Re: [OMPI users] boost + openmpi link errors: missing openmpi libraries"</a>
<li><strong>Reply:</strong> <a href="14862.php">Jeff Squyres: "Re: [OMPI users] boost + openmpi link errors: missing openmpi libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hello,sorry for cross posting. I've built openmpi 1.4.3 on win32 and generated only 4 release libs:
<br>
3,677,712 libmpi.lib
<br>
&#194;&#160;&#194;&#160;336,466 libmpi_cxx.lib
<br>
&#194;&#160;&#194;&#160;758,686 libopen-pal.lib
<br>
1,307,592 libopen-rte.lib
<br>
<p><p><p>I've installed the boostPro 1.44 mpi library with the installer. But I have link errors:
<br>
<p><p>1&gt;libboost_mpi-vc90-mt-1_44.lib(broadcast.obj) : error LNK2001: unresolved external symbol _MPI_Bcast_at_20
<br>
<p><p>is boostpro's mpi lib against openmpi or another MPI implementation?
<br>
<p><p>regards,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14840.php">Nehemiah Dacres: "[OMPI users] sun compilers"</a>
<li><strong>Previous message:</strong> <a href="14838.php">Addepalli, Srirangam V: "Re: [OMPI users] Unable to find the following executable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14862.php">Jeff Squyres: "Re: [OMPI users] boost + openmpi link errors: missing openmpi libraries"</a>
<li><strong>Reply:</strong> <a href="14862.php">Jeff Squyres: "Re: [OMPI users] boost + openmpi link errors: missing openmpi libraries"</a>
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
