<?
$subject_val = "[hwloc-devel] parent vs father";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 16 06:54:19 2010" -->
<!-- isoreceived="20100116115419" -->
<!-- sent="Sat, 16 Jan 2010 12:53:59 +0100" -->
<!-- isosent="20100116115359" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] parent vs father" -->
<!-- id="4B51A8D7.6030505_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6A9DE529-B591-4B7D-A9F6-DBB215665260_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] parent vs father<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-16 06:53:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0608.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0606.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1647)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/12/0474.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0609.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] parent vs father"</a>
<li><strong>Maybe reply:</strong> <a href="0609.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] parent vs father"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
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
<p>Since we modified quite a lot of things in the API between 0.9 and 1.0,
<br>
we probably could fix this as well, ie:
<br>
* use parent instead of father everything
<br>
* use ancestor instead of parent when not talking about the immediate
<br>
ancestor
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0608.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0606.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1647)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/12/0474.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0609.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] parent vs father"</a>
<li><strong>Maybe reply:</strong> <a href="0609.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] parent vs father"</a>
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
