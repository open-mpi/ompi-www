<?
$subject_val = "[OMPI devel] bug in odls_base_default_fns.c";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 09:21:35 2009" -->
<!-- isoreceived="20090122142135" -->
<!-- sent="Thu, 22 Jan 2009 15:21:24 +0100" -->
<!-- isosent="20090122142124" -->
<!-- name="Thomas Ropars" -->
<!-- email="tropars_at_[hidden]" -->
<!-- subject="[OMPI devel] bug in odls_base_default_fns.c" -->
<!-- id="497880E4.1060109_at_irisa.fr" -->
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
<strong>Subject:</strong> [OMPI devel] bug in odls_base_default_fns.c<br>
<strong>From:</strong> Thomas Ropars (<em>tropars_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-22 09:21:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5274.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5272.php">Bogdan Costescu: "[OMPI devel] Still troubles with 1.3 and MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5275.php">Ralph Castain: "Re: [OMPI devel] bug in odls_base_default_fns.c"</a>
<li><strong>Reply:</strong> <a href="5275.php">Ralph Castain: "Re: [OMPI devel] bug in odls_base_default_fns.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I don't manage to run any application with r20318 of the trunk :(
<br>
I always get the following message:
<br>
[[24867,0],0] ORTE_ERROR_LOG: Value out of bounds in file 
<br>
base/odls_base_default_fns.c at line 1223
<br>
<p>It seems that the modification of odls_base_default_fns.c in r20312 
<br>
introduces some problems because I don't have any problem with r20311.
<br>
<p>Regards,
<br>
<p>Thomas
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5274.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5272.php">Bogdan Costescu: "[OMPI devel] Still troubles with 1.3 and MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5275.php">Ralph Castain: "Re: [OMPI devel] bug in odls_base_default_fns.c"</a>
<li><strong>Reply:</strong> <a href="5275.php">Ralph Castain: "Re: [OMPI devel] bug in odls_base_default_fns.c"</a>
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
