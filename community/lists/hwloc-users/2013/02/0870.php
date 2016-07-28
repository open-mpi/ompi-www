<?
$subject_val = "Re: [hwloc-users] OpenGL GPU detection code";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 14 17:13:44 2013" -->
<!-- isoreceived="20130214221344" -->
<!-- sent="Thu, 14 Feb 2013 23:13:38 +0100" -->
<!-- isosent="20130214221338" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] OpenGL GPU detection code" -->
<!-- id="511D6192.1020200_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C16B7E38-4705-4570-A332-960EA1558269_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] OpenGL GPU detection code<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-14 17:13:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0871.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0869.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0869.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0871.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0871.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 14/02/2013 20:44, Stefan Eilemann a &#195;&#169;crit :
<br>
<span class="quotelev2">&gt;&gt; Isn't it possible to have a single X server with a NVIDIA
</span><br>
<span class="quotelev2">&gt;&gt; board driving :0.0 and a non-NVIDIA board driving :0.1 ?
</span><br>
<span class="quotelev1">&gt; Good question. I haven't seen this, so I've got no clue if one would get the union or intersection of extensions. Maybe it's not even possible?
</span><br>
<p>On our server with 3 NVIDIA GPUs, I tried enabling the embedded matrox
<br>
board with the vesa driver. I get a single server with all NVIDIA
<br>
extensions (likely the union, then). Everything works fine as long as I
<br>
ignore this additional screen.
<br>
<p>But your code (and the current SVN one) aborts saying this when
<br>
XNVCTRLQueryTargetBinaryData is called on the vesa screen:
<br>
<p>X Error of failed request:  BadMatch (invalid parameter attributes)
<br>
&nbsp;&nbsp;Major opcode of failed request:  139 (NV-CONTROL)
<br>
&nbsp;&nbsp;Minor opcode of failed request:  20 ()
<br>
&nbsp;&nbsp;Serial number of failed request:  57
<br>
&nbsp;&nbsp;Current serial number in output stream:  57
<br>
<p><p><p>Fortunately, NVCtrl offers a function to check whether a given screen is
<br>
managed by the NVIDIA driver. Adding this before the Query call fixes
<br>
the problem.
<br>
<p>if (!XNVCTRLIsNvScreen(display, screen))
<br>
&nbsp;&nbsp;continue
<br>
<p><p>(and this also works if the vesa screen isn't the last one).
<br>
<p>So I think we're good here? I am going to commit things tomorrow.
<br>
<p><p>By the way, did you check hwloc/gl.h to see if it offers what you need?
<br>
Still no idea if we should call all this &quot;gl&quot; or &quot;display&quot; or &quot;X11&quot; or
<br>
something else?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0871.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0869.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0869.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0871.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0871.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
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
