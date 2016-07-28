<?
$subject_val = "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  8 09:48:47 2011" -->
<!-- isoreceived="20111208144847" -->
<!-- sent="Thu, 8 Dec 2011 09:48:42 -0500" -->
<!-- isosent="20111208144842" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'" -->
<!-- id="CAHwLALPUk_2UPKfAd4ZF-FNEP4aDiCr-XKTFZGaHT4JsKH2CpQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EE0BAB4.2040606_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-08 09:48:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2578.php">Brice Goglin: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="2576.php">Brice Goglin: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>In reply to:</strong> <a href="2576.php">Brice Goglin: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2578.php">Brice Goglin: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="2578.php">Brice Goglin: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot, Brice.
<br>
<p>I hacked something similar for 1.2.2 last night, but your patch is
<br>
more complete (I didn't modify hwloc_internal.m4 to include the help
<br>
message). I will probably wait for the next 1.2.x hwloc release, and
<br>
then refresh Open Grid Scheduler/Grid Engine with that version.
<br>
<p>Thanks again!
<br>
<p>Rayson
<br>
<p>=================================
<br>
Open Grid Scheduler / Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<p>Scalable Grid Engine Support Program
<br>
<a href="http://www.scalablelogic.com/">http://www.scalablelogic.com/</a>
<br>
<p><p>On Thu, Dec 8, 2011 at 8:25 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Le 07/12/2011 23:12, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So my question is, are there plans to add a configure switch in hwloc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to disable libnuma??
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; There's no plan, but that's certainly possible if multiple people keep
</span><br>
<span class="quotelev2">&gt;&gt; facing this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's a patch that implements --disable-libnuma. Unless somebody
</span><br>
<span class="quotelev1">&gt; doesn't like it, I'll push this to trunk later today and provide some
</span><br>
<span class="quotelev1">&gt; backport patches. Not sure we would want this in 1.3.1 too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2578.php">Brice Goglin: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Previous message:</strong> <a href="2576.php">Brice Goglin: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>In reply to:</strong> <a href="2576.php">Brice Goglin: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2578.php">Brice Goglin: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>Reply:</strong> <a href="2578.php">Brice Goglin: "Re: [hwloc-devel] [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
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
