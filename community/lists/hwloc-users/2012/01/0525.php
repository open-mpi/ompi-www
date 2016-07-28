<?
$subject_val = "[hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 16:48:17 2012" -->
<!-- isoreceived="20120119214817" -->
<!-- sent="Thu, 19 Jan 2012 15:48:01 -0600" -->
<!-- isosent="20120119214801" -->
<!-- name="Hartmut Kaiser" -->
<!-- email="hartmut.kaiser_at_[hidden]" -->
<!-- subject="[hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)" -->
<!-- id="005a01ccd6f4$04e0d6f0$0ea284d0$_at_gmail.com" -->
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
<strong>Subject:</strong> [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)<br>
<strong>From:</strong> Hartmut Kaiser (<em>hartmut.kaiser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 16:48:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0526.php">Samuel Thibault: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<li><strong>Previous message:</strong> <a href="0524.php">&#193;&#235;&#221;&#238;&#225;&#237;&#228;&#241;&#239;&#242; &#208;&#225;&#240;&#225;&#228;&#239;&#227;&#233;&#225;&#237;&#237;&#220;&#234;&#231;&#242;: "Re: [hwloc-users] removing old cpuset API?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0526.php">Samuel Thibault: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<li><strong>Maybe reply:</strong> <a href="0526.php">Samuel Thibault: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<li><strong>Maybe reply:</strong> <a href="0528.php">Samuel Thibault: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are using hwloc with VS2010 and were happy to realize that after the (for
<br>
us) totally broken Windows binary distribution in V1.3 the files in V1.4rc1
<br>
(64bit) at least allow to compile our code. However, linking of our modules
<br>
still fails. 
<br>
<p>Some investigation showed that the file libhwloc.lib was compiled for 32bit
<br>
and therefore causes trouble in 64bit builds. We have not checked the other
<br>
libraries as the import library is all we need.
<br>
<p>While it is trivial to regenerate the corresponding 64bit import library
<br>
from the supplied definition file, it would be nice to be able to directly
<br>
use the distributive from your site.
<br>
<p>Thanks!
<br>
Regards Hartmut
<br>
---------------
<br>
<a href="http://boost-spirit.com">http://boost-spirit.com</a>
<br>
<a href="http://stellar.cct.lsu.edu">http://stellar.cct.lsu.edu</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0526.php">Samuel Thibault: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<li><strong>Previous message:</strong> <a href="0524.php">&#193;&#235;&#221;&#238;&#225;&#237;&#228;&#241;&#239;&#242; &#208;&#225;&#240;&#225;&#228;&#239;&#227;&#233;&#225;&#237;&#237;&#220;&#234;&#231;&#242;: "Re: [hwloc-users] removing old cpuset API?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0526.php">Samuel Thibault: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<li><strong>Maybe reply:</strong> <a href="0526.php">Samuel Thibault: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<li><strong>Maybe reply:</strong> <a href="0528.php">Samuel Thibault: "Re: [hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
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
