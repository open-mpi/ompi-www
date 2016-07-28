<?
$subject_val = "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  8 11:03:23 2010" -->
<!-- isoreceived="20100908150323" -->
<!-- sent="Wed, 08 Sep 2010 11:02:19 -0400" -->
<!-- isosent="20100908150219" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rolf.vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] fix mx btl_bandwidth" -->
<!-- id="4C87A57B.2090004_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EE8B4FC8-86E0-4F0F-83D2-338016C93ADB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] fix mx btl_bandwidth<br>
<strong>From:</strong> Rolf vandeVaart (<em>rolf.vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-08 11:02:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8469.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably	broken by switch to OAUTH"</a>
<li><strong>Previous message:</strong> <a href="8467.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>In reply to:</strong> <a href="8467.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8470.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8470.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;On 9/8/2010 10:41 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 8, 2010, at 2:09 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Was the *real* problem that Brice's OpenFabrics bandwidth was auto-detected incorrectly somehow?
</span><br>
<span class="quotelev2">&gt;&gt; The first problem came from IB not autodetecting at all by default and
</span><br>
<span class="quotelev2">&gt;&gt; using 800Mbit/s instead.
</span><br>
<span class="quotelev1">&gt; That shouldn't be the case.  Was it autodetecting incorrectly, or just not autodetecting at all and using 800Mbit/s?
</span><br>
<span class="quotelev1">&gt;
</span><br>
The way the code is currently written, it does not run the autodetect by 
<br>
default.  What happens is it takes a look at
<br>
the bandwidth value.  If the bandwidth value is 0, it will run the 
<br>
autodetect code.  If the bandwidth is non-zero, it
<br>
does not.  The bandwidth value is initially set to 800, so the 
<br>
autodetect is never run.  If you want the autodetect
<br>
to run, then you have to give it an mca parameter.  There are actually 
<br>
several you can choose.  Here is an
<br>
example on my machines.
<br>
<p>--mca btl_openib_bandwidth_mlx4_0 0
<br>
<p>This will then trigger the autodetect to run.  Presumably, we need to 
<br>
figure out what we want to happen
<br>
and adjust the code accordingly.
<br>
<p>Rolf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8469.php">Christopher Samuel: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably	broken by switch to OAUTH"</a>
<li><strong>Previous message:</strong> <a href="8467.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>In reply to:</strong> <a href="8467.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8470.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
<li><strong>Reply:</strong> <a href="8470.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] fix mx btl_bandwidth"</a>
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
