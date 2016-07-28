<?
$subject_val = "Re: [hwloc-users] How do I access CPUModel info string";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 27 05:37:07 2012" -->
<!-- isoreceived="20121027093707" -->
<!-- sent="Sat, 27 Oct 2012 11:37:01 +0200" -->
<!-- isosent="20121027093701" -->
<!-- name="Olivier Cessenat" -->
<!-- email="cessenat_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] How do I access CPUModel info string" -->
<!-- id="1351330621.19923.10.camel_at_iliana.magic" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5089B236.6080304_at_inria.fr" -->
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
<strong>From:</strong> Olivier Cessenat (<em>cessenat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-27 05:37:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0754.php">Brice Goglin: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Previous message:</strong> <a href="0752.php">Brice Goglin: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>In reply to:</strong> <a href="0745.php">Brice Goglin: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0754.php">Brice Goglin: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Reply:</strong> <a href="0754.php">Brice Goglin: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Reply:</strong> <a href="0755.php">Olivier Cessenat: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Robin Scher indicated how to get the info on a Mac.
<br>
<p>At least on mine (OSX 10.4) with darwin 8.11.1
<br>
where
<br>
$ sysctl -a machdep.cpu.brand_string
<br>
machdep.cpu.brand_string: Intel(R) Core(TM)2 CPU         T7400  @
<br>
2.16GHz
<br>
I unfortunately have no socket:
<br>
*** The number of sockets is unknown
<br>
[ from Third example: Print the number of sockets. of
<br>
<a href="http://www.open-mpi.org/projects/hwloc/doc/v1.5.1/">http://www.open-mpi.org/projects/hwloc/doc/v1.5.1/</a>
<br>
]
<br>
I see objects type 1,2,4 and 6 only.
<br>
<p>So, will there be another (non socket hwloc object based) way to get
<br>
CPUModel or will it find sockets as on Linux ?
<br>
<p>Thanks.
<br>
<p>Olivier Cessenat.
<br>
<p><p>Le jeudi 25 octobre 2012 &#195;&#160; 23:42 +0200, Brice Goglin a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Assuming you found the socket hwloc object whose name you want, do
</span><br>
<span class="quotelev1">&gt;     hwloc_obj_get_info_by_name(obj, &quot;CPUModel&quot;);
</span><br>
<span class="quotelev1">&gt; you'll get const char * pointing to what you want.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, this info is only available on Linux and Solaris for now. If
</span><br>
<span class="quotelev1">&gt; you have any idea of to discover such info on other OS, please let us
</span><br>
<span class="quotelev1">&gt; know.
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
<span class="quotelev1">&gt; Le 25/10/2012 23:39, Robin Scher a &#195;&#169;crit : 
</span><br>
<span class="quotelev2">&gt; &gt; Is there a way to get this string (e.g. &quot;Intel(R) Core(TM) i7 CPU M
</span><br>
<span class="quotelev2">&gt; &gt; 620 @ 2.67GHz&quot;) consistently on Windows, Linux, OS-X and Solaris?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; -robin
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Robin Scher Uberware
</span><br>
<span class="quotelev2">&gt; &gt; robin_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; +1 (213) 448-0443 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
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
<li><strong>Next message:</strong> <a href="0754.php">Brice Goglin: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Previous message:</strong> <a href="0752.php">Brice Goglin: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>In reply to:</strong> <a href="0745.php">Brice Goglin: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0754.php">Brice Goglin: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Reply:</strong> <a href="0754.php">Brice Goglin: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Reply:</strong> <a href="0755.php">Olivier Cessenat: "Re: [hwloc-users] How do I access CPUModel info string"</a>
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
