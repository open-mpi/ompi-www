<?
$subject_val = "Re: [hwloc-users] How do I access CPUModel info string";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 25 17:42:19 2012" -->
<!-- isoreceived="20121025214219" -->
<!-- sent="Thu, 25 Oct 2012 23:42:14 +0200" -->
<!-- isosent="20121025214214" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] How do I access CPUModel info string" -->
<!-- id="5089B236.6080304_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5089B17C.1040809_at_uberware.net" -->
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
<strong>Date:</strong> 2012-10-25 17:42:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0746.php">Samuel Thibault: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Previous message:</strong> <a href="0744.php">Robin Scher: "[hwloc-users] How do I access CPUModel info string"</a>
<li><strong>In reply to:</strong> <a href="0744.php">Robin Scher: "[hwloc-users] How do I access CPUModel info string"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0747.php">Robin Scher: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Reply:</strong> <a href="0747.php">Robin Scher: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Reply:</strong> <a href="0753.php">Olivier Cessenat: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Assuming you found the socket hwloc object whose name you want, do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_obj_get_info_by_name(obj, &quot;CPUModel&quot;);
<br>
you'll get const char * pointing to what you want.
<br>
<p>However, this info is only available on Linux and Solaris for now. If
<br>
you have any idea of to discover such info on other OS, please let us know.
<br>
<p>Brice
<br>
<p><p><p>Le 25/10/2012 23:39, Robin Scher a &#233;crit :
<br>
<span class="quotelev1">&gt; Is there a way to get this string (e.g. &quot;Intel(R) Core(TM) i7 CPU M
</span><br>
<span class="quotelev1">&gt; 620 @ 2.67GHz&quot;) consistently on Windows, Linux, OS-X and Solaris?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -robin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; *Robin Scher* Uberware
</span><br>
<span class="quotelev1">&gt; robin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; +1 (213) 448-0443
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0745/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0746.php">Samuel Thibault: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Previous message:</strong> <a href="0744.php">Robin Scher: "[hwloc-users] How do I access CPUModel info string"</a>
<li><strong>In reply to:</strong> <a href="0744.php">Robin Scher: "[hwloc-users] How do I access CPUModel info string"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0747.php">Robin Scher: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Reply:</strong> <a href="0747.php">Robin Scher: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Reply:</strong> <a href="0753.php">Olivier Cessenat: "Re: [hwloc-users] How do I access CPUModel info string"</a>
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
