<?
$subject_val = "Re: [hwloc-users] How do I access CPUModel info string";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 25 18:03:59 2012" -->
<!-- isoreceived="20121025220359" -->
<!-- sent="Fri, 26 Oct 2012 00:03:54 +0200" -->
<!-- isosent="20121025220354" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] How do I access CPUModel info string" -->
<!-- id="5089B74A.3030303_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5089B5AD.5070203_at_uberware.net" -->
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
<strong>Subject:</strong> Re: [hwloc-users] How do I access CPUModel info string<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-25 18:03:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0750.php">Samuel Thibault: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Previous message:</strong> <a href="0748.php">Brice Goglin: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>In reply to:</strong> <a href="0747.php">Robin Scher: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0750.php">Samuel Thibault: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 25/10/2012 23:57, Robin Scher a &#233;crit :
<br>
<span class="quotelev1">&gt; On OS-X, you can get this string from the sysctlbyname() call:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     const char *name = &quot;machdep.cpu.brand_string&quot;;
</span><br>
<span class="quotelev1">&gt;     char buffer[ 64 ];
</span><br>
<span class="quotelev1">&gt;     size_t size = 64;
</span><br>
<span class="quotelev1">&gt;     if( !sysctlbyname( name, buffer, &amp;size, NULL, 0 ) )
</span><br>
<span class="quotelev1">&gt;         memcpy( cpu_model, buffer, 12 * sizeof( int ) );
</span><br>
<p>Thanks.
<br>
<p><span class="quotelev1">&gt; if That doesn't work, you can get it from calling system_profiler and
</span><br>
<span class="quotelev1">&gt; parsing the output.
</span><br>
<p>I'd rather not do that from inside the hwloc library :)
<br>
<p><span class="quotelev1">&gt; On Widows (32 bit), the only way I've found is to actually use the
</span><br>
<span class="quotelev1">&gt; cpuid assembly call:
</span><br>
<p>Good to know, that's likely similar to the Linux code I cited in my
<br>
other mail.
<br>
I'll see if I can put that in some sort of common code.
<br>
<p><span class="quotelev1">&gt; I don't know if that would work on Win64, though. Do you think those
</span><br>
<span class="quotelev1">&gt; could be added to hwloc?
</span><br>
<p>If we can make this work without too much pain, sure.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0749/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0750.php">Samuel Thibault: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Previous message:</strong> <a href="0748.php">Brice Goglin: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>In reply to:</strong> <a href="0747.php">Robin Scher: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0750.php">Samuel Thibault: "Re: [hwloc-users] How do I access CPUModel info string"</a>
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
