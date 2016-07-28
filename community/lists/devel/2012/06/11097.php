<?
$subject_val = "[OMPI devel] RFC: hide btl segment keys within btl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 13 12:58:25 2012" -->
<!-- isoreceived="20120613165825" -->
<!-- sent="Wed, 13 Jun 2012 10:58:09 -0600 (MDT)" -->
<!-- isosent="20120613165809" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: hide btl segment keys within btl" -->
<!-- id="alpine.OSX.2.00.1206131044410.1211_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: hide btl segment keys within btl<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-13 12:58:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11098.php">Richard Graham: "Re: [OMPI devel] Modex"</a>
<li><strong>Previous message:</strong> <a href="11096.php">Shamis, Pavel: "Re: [OMPI devel] Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11099.php">Jeff Squyres: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<li><strong>Reply:</strong> <a href="11099.php">Jeff Squyres: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: hide btl segment keys from PML/OSC code.
<br>
<p>Why: As it stands new BTLs with larger segment keys (smcuda for example) require changes in both OSC/rdma as well as the PMLs. This RFC makes will make changes in segment keys transparent to all btl users.
<br>
<p>When: The changes are very straight-forward so I am setting the timeout for this to June 22, 2012
<br>
<p>Where: See the attached patch or check out the bitbucket <a href="http://bitbucket.org/hjelmn/ompi-btl-interface-update">http://bitbucket.org/hjelmn/ompi-btl-interface-update</a>
<br>
<p>All the relevant PMLs/BTLs + OSC/rdma have been updated with the exception of btl/wv. I have also tested the following components:
<br>
&nbsp;&nbsp;- ob1
<br>
&nbsp;&nbsp;- csum
<br>
&nbsp;&nbsp;- bfo
<br>
&nbsp;&nbsp;- ugni (now works with MPI one-sides)
<br>
&nbsp;&nbsp;- sm
<br>
&nbsp;&nbsp;- vader
<br>
&nbsp;&nbsp;- openib (in progress)
<br>
<p>Brian and Rolf, please take a look at your components and let me know if I screwed anything up.
<br>
<p>-Nathan Hjelm
<br>
HPC-3, LANL
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11098.php">Richard Graham: "Re: [OMPI devel] Modex"</a>
<li><strong>Previous message:</strong> <a href="11096.php">Shamis, Pavel: "Re: [OMPI devel] Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11099.php">Jeff Squyres: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<li><strong>Reply:</strong> <a href="11099.php">Jeff Squyres: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
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
