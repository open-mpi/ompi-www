<?
$subject_val = "Re: [hwloc-users] OpenGL GPU detection code";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 11:07:32 2013" -->
<!-- isoreceived="20130129160732" -->
<!-- sent="Tue, 29 Jan 2013 17:07:26 +0100" -->
<!-- isosent="20130129160726" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] OpenGL GPU detection code" -->
<!-- id="5107F3BE.2020704_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="013a01cdfe39$3725fd80$a571f880$_at_wattsys.com" -->
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
<strong>Date:</strong> 2013-01-29 11:07:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0840.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0838.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0838.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0840.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0840.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As far as I know, neither OpenCL nor OpenGL have a standard way to query
<br>
GPU affinity.
<br>
There is a AMD OpenCL extension and there are some NVIDIA specific
<br>
libraries (nvml, cuda and nvctrl) that can query GPU affinity but
<br>
nothing is portable.
<br>
<p>The current plan is to have some OpenCL device info and some OpenGL
<br>
device info appear inside GPU PCI devices. That said, I am still not
<br>
confident about the current OpenGL thing. The current branch manipulates
<br>
what I usually call a display (&quot;:0.0&quot;) which seem rather X than OpenGL
<br>
related, but I am not familiar with all this at all anyway.
<br>
<p>Since both OpenCL and OpenCL (and maybe CUDA at some point) may end up
<br>
containing attributes describing the capabilities of the (same) GPU,
<br>
we'll need to think about displaying them only once in a common place,
<br>
but we're not there yet.
<br>
<p>Brice
<br>
<p><p><p><p>Le 29/01/2013 16:56, Kenneth A. Lloyd a &#233;crit :
<br>
<span class="quotelev1">&gt; As OpenGL and OpenCL are both under the umbrella of the Khronos Group, is
</span><br>
<span class="quotelev1">&gt; the endeavor to inspect GPUs common to both?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ken Lloyd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: hwloc-users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; [mailto:hwloc-users-bounces_at_[hidden]] On Behalf Of Stefan Eilemann
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, January 29, 2013 7:46 AM
</span><br>
<span class="quotelev1">&gt; To: Brice Goglin
</span><br>
<span class="quotelev1">&gt; Cc: Hardware locality user list
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-users] OpenGL GPU detection code
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 29. Jan 2013, at 15:25, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, I finally managed to run the code on our machines (we only have 
</span><br>
<span class="quotelev2">&gt;&gt; remote rack servers withour display, so playing with displays isn't 
</span><br>
<span class="quotelev2">&gt;&gt; easy :) I am getting things to work for real now, and I am seeing 
</span><br>
<span class="quotelev2">&gt;&gt; several things to fix before this can work. Shouldn't be too hard, but 
</span><br>
<span class="quotelev2">&gt;&gt; I won't touch the SVN branch until you send your patch.
</span><br>
<span class="quotelev1">&gt; Please go ahead and modify your display svn branch. I'll merge it in using
</span><br>
<span class="quotelev1">&gt; our git-svn clone, that should be very easy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Stefan.
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; <a href="http://www.eyescale.ch">http://www.eyescale.ch</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/Eyescale/">https://github.com/Eyescale/</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.linkedin.com/in/eilemann">http://www.linkedin.com/in/eilemann</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0840.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0838.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>In reply to:</strong> <a href="0838.php">Kenneth A. Lloyd: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0840.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Reply:</strong> <a href="0840.php">Stefan Eilemann: "Re: [hwloc-users] OpenGL GPU detection code"</a>
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
