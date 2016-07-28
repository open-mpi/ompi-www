<?
$subject_val = "Re: [hwloc-devel] parent vs father";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 16 07:46:23 2010" -->
<!-- isoreceived="20100116124623" -->
<!-- sent="Sat, 16 Jan 2010 06:46:17 -0600" -->
<!-- isosent="20100116124617" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] parent vs father" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA1705669C_at_XMB-RCD-205.cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[hwloc-devel] parent vs father" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] parent vs father<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-16 07:46:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0610.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0608.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Maybe in reply to:</strong> <a href="0607.php">Brice Goglin: "[hwloc-devel] parent vs father"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds good to me. 
<br>

<br>
-jms
<br>
Sent from my PDA.  No type good.
<br>

<br>
----- Original Message -----
<br>
From: hwloc-devel-bounces_at_[hidden] &lt;hwloc-devel-bounces_at_[hidden]&gt;
<br>
To: Hardware locality development list &lt;hwloc-devel_at_[hidden]&gt;
<br>
Sent: Sat Jan 16 06:53:59 2010
<br>
Subject: [hwloc-devel] parent vs father
<br>

<br>
Jeff Squyres wrote:
<br>
<span class="quotelev2">&gt;&gt; I am not sure. The object structure contains a father pointer. We use
</span><br>
<span class="quotelev2">&gt;&gt; parent in the API, but it might refer to different things, like father,
</span><br>
<span class="quotelev2">&gt;&gt; grandfather, ...
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, the english word &quot;parent&quot; definitely refers to the immediate ancestor.  It does *not* refer to grandparents or great-grandparents, etc.
</span><br>
<span class="quotelev1">&gt;   
</span><br>

<br>
Since we modified quite a lot of things in the API between 0.9 and 1.0,
<br>
we probably could fix this as well, ie:
<br>
* use parent instead of father everything
<br>
* use ancestor instead of parent when not talking about the immediate
<br>
ancestor
<br>

<br>
Brice
<br>

<br>
_______________________________________________
<br>
hwloc-devel mailing list
<br>
hwloc-devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0609/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0610.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0608.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Maybe in reply to:</strong> <a href="0607.php">Brice Goglin: "[hwloc-devel] parent vs father"</a>
<!-- nextthread="start" -->
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
