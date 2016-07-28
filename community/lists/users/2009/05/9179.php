<?
$subject_val = "[OMPI users] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 09:06:31 2009" -->
<!-- isoreceived="20090504130631" -->
<!-- sent="Mon, 4 May 2009 06:06:27 -0700 (PDT)" -->
<!-- isosent="20090504130627" -->
<!-- name="Kritiraj Sajadah" -->
<!-- email="ksajadah_at_[hidden]" -->
<!-- subject="[OMPI users] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)" -->
<!-- id="575212.74299.qm_at_web31003.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)<br>
<strong>From:</strong> Kritiraj Sajadah (<em>ksajadah_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-04 09:06:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9180.php">Jeff Squyres: "Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<li><strong>Previous message:</strong> <a href="9178.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9180.php">Jeff Squyres: "Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<li><strong>Reply:</strong> <a href="9180.php">Jeff Squyres: "Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Josh and Yaakoub, i was able to configure my openmpi as follows:
<br>
<p>raj_at_raj:./configure --prefix=/usr/local --with-ft=cr --enable-ft-thread --enable-mpi-threads --with-blcr=/usr/local.
<br>
<p>raj_at_raj:make all install
<br>
<p>I try to checkppoint an mpi application using the following command running on a single node:
<br>
<p>raj_at_raj:mpirun -np 1 -am ft-enable-cr mpisleep
<br>
<p>I got the following with no checkpointing performed:
<br>
raj_at_raj:mca: base: component_find: unable to open /usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)
<br>
<p>Please help.
<br>
<p>Regards,
<br>
<p>Raj
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9180.php">Jeff Squyres: "Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<li><strong>Previous message:</strong> <a href="9178.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9180.php">Jeff Squyres: "Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<li><strong>Reply:</strong> <a href="9180.php">Jeff Squyres: "Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
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
