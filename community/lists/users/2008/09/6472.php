<?
$subject_val = "Re: [OMPI users] Warnings in Ubuntu Hardy";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  6 21:34:34 2008" -->
<!-- isoreceived="20080907013434" -->
<!-- sent="Sat, 6 Sep 2008 20:34:29 -0500" -->
<!-- isosent="20080907013429" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Warnings in Ubuntu Hardy" -->
<!-- id="18627.12197.85659.480045_at_ron.nulle.part" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="dd4eed670809061813q24e55bbexe754b81cc8dfbfcd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Warnings in Ubuntu Hardy<br>
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-06 21:34:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6473.php">Davi Vercillo C. Garcia (デビッド): "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<li><strong>Previous message:</strong> <a href="6471.php">Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;): "[OMPI users] Warnings in Ubuntu Hardy"</a>
<li><strong>In reply to:</strong> <a href="6471.php">Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;): "[OMPI users] Warnings in Ubuntu Hardy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6473.php">Davi Vercillo C. Garcia (デビッド): "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<li><strong>Reply:</strong> <a href="6473.php">Davi Vercillo C. Garcia (デビッド): "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<li><strong>Reply:</strong> <a href="6476.php">Eugene Loh: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6 September 2008 at 22:13, Davi Vercillo C. Garcia (    ) wrote:
<br>
| I'm trying to execute some programs in my notebook (Ubuntu 8.04) using
<br>
| OpenMPI, and I always get a warning message like:
<br>
| 
<br>
| libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
| --------------------------------------------------------------------------
<br>
| [0,0,0]: OpenIB on host juliana was unable to find any HCAs.
<br>
| Another transport will be used instead, although this may result in
<br>
| lower performance.
<br>
| --------------------------------------------------------------------------
<br>
| 
<br>
| What is this ?!
<br>
<p>Uncomment this in /etc/openmpi/openmpi-mca-params.conf:
<br>
<p>&nbsp;&nbsp;# Disable the use of InfiniBand
<br>
&nbsp;&nbsp;btl = ^openib
<br>
<p>which is the default in newer packages.
<br>
<p>Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6473.php">Davi Vercillo C. Garcia (デビッド): "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<li><strong>Previous message:</strong> <a href="6471.php">Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;): "[OMPI users] Warnings in Ubuntu Hardy"</a>
<li><strong>In reply to:</strong> <a href="6471.php">Davi Vercillo C. Garcia (&#227;&#131;&#135;&#227;&#131;&#147;&#227;&#131;&#131;&#227;&#131;&#137;): "[OMPI users] Warnings in Ubuntu Hardy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6473.php">Davi Vercillo C. Garcia (デビッド): "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<li><strong>Reply:</strong> <a href="6473.php">Davi Vercillo C. Garcia (デビッド): "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
<li><strong>Reply:</strong> <a href="6476.php">Eugene Loh: "Re: [OMPI users] Warnings in Ubuntu Hardy"</a>
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
