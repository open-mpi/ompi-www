<?
$subject_val = "[OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 09:02:59 2009" -->
<!-- isoreceived="20090326130259" -->
<!-- sent="Thu, 26 Mar 2009 07:02:50 -0600" -->
<!-- isosent="20090326130250" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] SM init failures" -->
<!-- id="29ED446C-7456-41DC-BE4E-DF0394B895D3_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] SM init failures<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-26 09:02:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5706.php">Lenny Verkhovsky: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Previous message:</strong> <a href="5704.php">Aur&#233;lien Bouteiller: "[OMPI devel] MCA component dependency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5708.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5708.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5709.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>It looks like the SM revisions we inserted into 1.3.2 are a great  
<br>
detector for shared memory init failures - it segfaulted 143 times  
<br>
last night on IU's sif computer, 34 times on Sun/Linux, and 3 times on  
<br>
Sun/SunOS...almost every single time due to &quot;Address not mapped&quot;  
<br>
errors in the sm btl during init.
<br>
<p>Might be worth someone looking at the MTT output stack traces -this is  
<br>
something that now appears to be reproducible, and should be addressed  
<br>
before we release 1.3.2 as it seems far more likely to happen than in  
<br>
the past.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5706.php">Lenny Verkhovsky: "Re: [OMPI devel] Infinite Loop: ompi_free_list_wait"</a>
<li><strong>Previous message:</strong> <a href="5704.php">Aur&#233;lien Bouteiller: "[OMPI devel] MCA component dependency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5708.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5708.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Reply:</strong> <a href="5709.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
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
