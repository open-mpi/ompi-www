<?
$subject_val = "Re: [hwloc-users] How do I access CPUModel info string";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 27 05:47:48 2012" -->
<!-- isoreceived="20121027094748" -->
<!-- sent="Sat, 27 Oct 2012 11:47:42 +0200" -->
<!-- isosent="20121027094742" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] How do I access CPUModel info string" -->
<!-- id="508BADBE.6060300_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1351330621.19923.10.camel_at_iliana.magic" -->
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
<strong>Date:</strong> 2012-10-27 05:47:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0755.php">Olivier Cessenat: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Previous message:</strong> <a href="0753.php">Olivier Cessenat: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>In reply to:</strong> <a href="0753.php">Olivier Cessenat: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0755.php">Olivier Cessenat: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send your lstopo output?
<br>
preferably with latest trunk tarball
<br>
&nbsp;&nbsp;&nbsp;
<br>
<a href="http://www.open-mpi.org/software/hwloc/nightly/trunk/hwloc-1.6a1r4928.tar.gz">http://www.open-mpi.org/software/hwloc/nightly/trunk/hwloc-1.6a1r4928.tar.gz</a>
<br>
<p>One way to solve this problem (which may also occur on old Linux
<br>
distribs) would be to store the CPU model in the machine object. But
<br>
we'll have to make sure all processors in the machine are indeed of the
<br>
same model. On MacOSX, it looks like sysctl reports a single socket
<br>
description anyway, so no problem.
<br>
<p>Brice
<br>
<p><p><p><p>Le 27/10/2012 11:37, Olivier Cessenat a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Robin Scher indicated how to get the info on a Mac.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At least on mine (OSX 10.4) with darwin 8.11.1
</span><br>
<span class="quotelev1">&gt; where
</span><br>
<span class="quotelev1">&gt; $ sysctl -a machdep.cpu.brand_string
</span><br>
<span class="quotelev1">&gt; machdep.cpu.brand_string: Intel(R) Core(TM)2 CPU         T7400  @
</span><br>
<span class="quotelev1">&gt; 2.16GHz
</span><br>
<span class="quotelev1">&gt; I unfortunately have no socket:
</span><br>
<span class="quotelev1">&gt; *** The number of sockets is unknown
</span><br>
<span class="quotelev1">&gt; [ from Third example: Print the number of sockets. of
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/projects/hwloc/doc/v1.5.1/">http://www.open-mpi.org/projects/hwloc/doc/v1.5.1/</a>
</span><br>
<span class="quotelev1">&gt; ]
</span><br>
<span class="quotelev1">&gt; I see objects type 1,2,4 and 6 only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, will there be another (non socket hwloc object based) way to get
</span><br>
<span class="quotelev1">&gt; CPUModel or will it find sockets as on Linux ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Olivier Cessenat.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le jeudi 25 octobre 2012 &#195;&#160; 23:42 +0200, Brice Goglin a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Assuming you found the socket hwloc object whose name you want, do
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc_obj_get_info_by_name(obj, &quot;CPUModel&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; you'll get const char * pointing to what you want.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, this info is only available on Linux and Solaris for now. If
</span><br>
<span class="quotelev2">&gt;&gt; you have any idea of to discover such info on other OS, please let us
</span><br>
<span class="quotelev2">&gt;&gt; know.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 25/10/2012 23:39, Robin Scher a &#195;&#169;crit : 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a way to get this string (e.g. &quot;Intel(R) Core(TM) i7 CPU M
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 620 @ 2.67GHz&quot;) consistently on Windows, Linux, OS-X and Solaris?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -robin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Robin Scher Uberware
</span><br>
<span class="quotelev3">&gt;&gt;&gt; robin_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +1 (213) 448-0443 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
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
<li><strong>Next message:</strong> <a href="0755.php">Olivier Cessenat: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>Previous message:</strong> <a href="0753.php">Olivier Cessenat: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<li><strong>In reply to:</strong> <a href="0753.php">Olivier Cessenat: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0755.php">Olivier Cessenat: "Re: [hwloc-users] How do I access CPUModel info string"</a>
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
