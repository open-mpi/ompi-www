<?
$subject_val = "[OMPI devel] pmi2 slurm/openmpi patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 05:03:17 2013" -->
<!-- isoreceived="20130718090317" -->
<!-- sent="Thu, 18 Jul 2013 11:02:39 +0200" -->
<!-- isosent="20130718090239" -->
<!-- name="Piotr Lesnicki" -->
<!-- email="piotr.lesnicki_at_[hidden]" -->
<!-- subject="[OMPI devel] pmi2 slurm/openmpi patch" -->
<!-- id="51E7AF2F.6060901_at_ext.bull.net" -->
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
<strong>Subject:</strong> [OMPI devel] pmi2 slurm/openmpi patch<br>
<strong>From:</strong> Piotr Lesnicki (<em>piotr.lesnicki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-18 05:02:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12643.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12641.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12645.php">Ralph Castain: "Re: [OMPI devel] pmi2 slurm/openmpi patch"</a>
<li><strong>Reply:</strong> <a href="12645.php">Ralph Castain: "Re: [OMPI devel] pmi2 slurm/openmpi patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I think there a few things still missing in openmpi pmi2 to make it work 
<br>
with slurm. We are the ones at Bull who integrated the pmi2 code from 
<br>
mpich2 to slurm. The attached patch should fix the issue (call slurm 
<br>
with --mpi=pmi2). This still needs to be checked with other pmi2 
<br>
implemenations (we use pmi2.h but some use pmi.h ? constants are 
<br>
prefixed with PMI2_ but some use PMI_ ?).
<br>
<p>Piotr Lesnicki
<br>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12642/pmi2.patch">pmi2.patch</a>
</ul>
<!-- attachment="pmi2.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12643.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12641.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12645.php">Ralph Castain: "Re: [OMPI devel] pmi2 slurm/openmpi patch"</a>
<li><strong>Reply:</strong> <a href="12645.php">Ralph Castain: "Re: [OMPI devel] pmi2 slurm/openmpi patch"</a>
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
