<?
$subject_val = "Re: [hwloc-users] hwloc-ls graphical output";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 19:31:22 2014" -->
<!-- isoreceived="20140924233122" -->
<!-- sent="Thu, 25 Sep 2014 01:31:21 +0200" -->
<!-- isosent="20140924233121" -->
<!-- name="Dennis Jacobfeuerborn" -->
<!-- email="dennisml_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc-ls graphical output" -->
<!-- id="54235449.8040705_at_conversis.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="d51992d7-238c-40d8-a27d-9398dcebf768_at_email.android.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc-ls graphical output<br>
<strong>From:</strong> Dennis Jacobfeuerborn (<em>dennisml_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-24 19:31:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1091.php">Samuel Thibault: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<li><strong>Previous message:</strong> <a href="1089.php">Brice Goglin: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<li><strong>In reply to:</strong> <a href="1089.php">Brice Goglin: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1091.php">Samuel Thibault: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<li><strong>Reply:</strong> <a href="1091.php">Samuel Thibault: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I'm not sure why it would draw to an x11 window? I ran this on a server
<br>
so x11 is not installed.
<br>
X11/Xlib.h and X11/Xutil.h are both available under /usr/include on the
<br>
build system.
<br>
<p>Regards,
<br>
&nbsp;&nbsp;Dennis
<br>
<p>On 24.09.2014 18:15, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there any graphical formats in lstopo -h ? If so maybe Cairo can export to png etc but it cant draw a x11 window?
</span><br>
<span class="quotelev1">&gt; Check whether X11/Xlib.h and X11/Xutil.h are available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 24 septembre 2014 18:08:31 UTC+02:00, Dennis Jacobfeuerborn &lt;dennisml_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I just compiled hwloc for CentOS 6 and while text output for example
</span><br>
<span class="quotelev2">&gt;&gt; works fine hwloc-ls tells me that the graphical output formats are not
</span><br>
<span class="quotelev2">&gt;&gt; available an I'm not sure why that is. During compilation I got the
</span><br>
<span class="quotelev2">&gt;&gt; following output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Hwloc optional build support status (more details can be found above):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Probe / display I/O devices: PCI(linux)
</span><br>
<span class="quotelev2">&gt;&gt; Graphical output (Cairo):    yes
</span><br>
<span class="quotelev2">&gt;&gt; XML input / output:          full
</span><br>
<span class="quotelev2">&gt;&gt; libnuma memory support:      yes
</span><br>
<span class="quotelev2">&gt;&gt; Plugin support:              no
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there something specific required to really enable the graphical
</span><br>
<span class="quotelev2">&gt;&gt; output modes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;  Dennis
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1088.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/09/1088.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1091.php">Samuel Thibault: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<li><strong>Previous message:</strong> <a href="1089.php">Brice Goglin: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<li><strong>In reply to:</strong> <a href="1089.php">Brice Goglin: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1091.php">Samuel Thibault: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<li><strong>Reply:</strong> <a href="1091.php">Samuel Thibault: "Re: [hwloc-users] hwloc-ls graphical output"</a>
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
