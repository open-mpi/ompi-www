<?
$subject_val = "Re: [hwloc-users] OpenGL GPU detection code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 15 15:57:09 2013" -->
<!-- isoreceived="20130215205709" -->
<!-- sent="Fri, 15 Feb 2013 13:55:43 -0700" -->
<!-- isosent="20130215205543" -->
<!-- name="Kenneth A. Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] OpenGL GPU detection code" -->
<!-- id="017901ce0bbe$d29f4c70$77dde550$_at_wattsys.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D7222E36-FBC6-405A-BF10-DEE7B7165A93_at_gmail.com" -->
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
<strong>From:</strong> Kenneth A. Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-15 15:55:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0874.php">Aulwes, Rob: "[hwloc-users] rebind subarray"</a>
<li><strong>Previous message:</strong> <a href="0872.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>In reply to:</strong> <a href="0871.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p>-----Original Message-----
<br>
From: hwloc-users-bounces_at_[hidden]
<br>
[mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Stefan Eilemann
<br>
Sent: Friday, February 15, 2013 12:55 AM
<br>
To: Brice Goglin
<br>
Cc: Hardware locality user list
<br>
Subject: Re: [hwloc-users] OpenGL GPU detection code
<br>
<p><p>On 14. Feb 2013, at 23:13, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; if (!XNVCTRLIsNvScreen(display, screen))  continue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (and this also works if the vesa screen isn't the last one).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I think we're good here? I am going to commit things tomorrow.
</span><br>
<p>Yes, with this addition it looks watertight. Thanks for your effort and
<br>
support.
<br>
<p><span class="quotelev1">&gt; By the way, did you check hwloc/gl.h to see if it offers what you need?
</span><br>
<p>Yes, we've integrated it into Equalizer and things look peachy.
<br>
<p><span class="quotelev1">&gt; Still no idea if we should call all this &quot;gl&quot; or &quot;display&quot; or &quot;X11&quot; or 
</span><br>
<span class="quotelev1">&gt; something else?
</span><br>
<p>I would still vote for GL, with possible extensions for WGL_NV_gpu_affinity
<br>
and WGL_AMD_gpu_association devices on Windows, as well as CGL renderer IDs
<br>
on OS X.
<br>
<p><p>My 2c,
<br>
<p>Stefan.
<br>
<pre>
--
<a href="http://www.eyescale.ch">http://www.eyescale.ch</a>
<a href="https://github.com/Eyescale/">https://github.com/Eyescale/</a>
<a href="http://www.linkedin.com/in/eilemann">http://www.linkedin.com/in/eilemann</a>
_______________________________________________
hwloc-users mailing list
hwloc-users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0874.php">Aulwes, Rob: "[hwloc-users] rebind subarray"</a>
<li><strong>Previous message:</strong> <a href="0872.php">Erik Schnetter: "Re: [hwloc-users] hwloc on Blue Gene/Q?"</a>
<li><strong>In reply to:</strong> <a href="0871.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
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
