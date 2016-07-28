<?
$subject_val = "[OMPI devel] Bull Vendor ID disappeared from IB ini file";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  7 08:57:06 2011" -->
<!-- isoreceived="20110907125706" -->
<!-- sent="Wed, 7 Sep 2011 14:56:58 +0200 (CEST)" -->
<!-- isosent="20110907125658" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="[OMPI devel] Bull Vendor ID disappeared from IB ini file" -->
<!-- id="alpine.DEB.2.00.1109071429410.27340_at_jeaugeys" -->
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
<strong>Subject:</strong> [OMPI devel] Bull Vendor ID disappeared from IB ini file<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-07 08:56:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9750.php">Rolf vandeVaart: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>Previous message:</strong> <a href="9748.php">Jeff Squyres: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9750.php">Rolf vandeVaart: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>Reply:</strong> <a href="9750.php">Rolf vandeVaart: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I just realized that Bull Vendor IDs for Infiniband cards disappeared from 
<br>
the trunk. Actually, they were removed shortly after we included them in 
<br>
last September.
<br>
<p>The original commit was :
<br>
r23715 | derbeyn | 2010-09-03 16:13:19 +0200 (Fri, 03 Sep 2010) | 1 line
<br>
Added Bull vendor id for ConnectX card
<br>
<p>An here is the commit that undid Nadia's patch :
<br>
r23791 | swise | 2010-09-22 20:16:53 +0200 (Wed, 22 Sep 2010) | 2 lines
<br>
Add T4 device IDs to openib btl params ini file.
<br>
<p>It does indeed add some T4 device IDs and removes our vendor ID. The other 
<br>
thing that bugs me is that unlike the commit message suggests, this patch 
<br>
does a lot more than adding T4 device ids. So, It looks like something 
<br>
went wrong on this commit (something like : I forgot to update and forced 
<br>
the commit) and it may be worth checking nothing else were reverted with 
<br>
this commit ...
<br>
<p>Sylvain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9750.php">Rolf vandeVaart: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>Previous message:</strong> <a href="9748.php">Jeff Squyres: "Re: [OMPI devel] Regarding Connection establishment in OpenMPI (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9750.php">Rolf vandeVaart: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
<li><strong>Reply:</strong> <a href="9750.php">Rolf vandeVaart: "Re: [OMPI devel] Bull Vendor ID disappeared from IB ini file"</a>
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
