<?
$subject_val = "Re: [hwloc-users] removing old cpuset API?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 16:30:20 2012" -->
<!-- isoreceived="20120119213020" -->
<!-- sent="Thu, 19 Jan 2012 23:30:15 +0200" -->
<!-- isosent="20120119213015" -->
<!-- name="&#193;&#235;&#221;&#238;&#225;&#237;&#228;&#241;&#239;&#242; &#208;&#225;&#240;&#225;&#228;&#239;&#227;&#233;&#225;&#237;&#237;&#220;&#234;&#231;&#242;" -->
<!-- email="psxlover_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] removing old cpuset API?" -->
<!-- id="COL124-W13C491A85F2E36B0EA5702D6860_at_phx.gbl" -->
<!-- charset="iso-8859-7" -->
<!-- inreplyto="4F188AEE.1070702_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] removing old cpuset API?<br>
<strong>From:</strong> &#193;&#235;&#221;&#238;&#225;&#237;&#228;&#241;&#239;&#242; &#208;&#225;&#240;&#225;&#228;&#239;&#227;&#233;&#225;&#237;&#237;&#220;&#234;&#231;&#242; (<em>psxlover_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 16:30:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0525.php">Hartmut Kaiser: "[hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<li><strong>Previous message:</strong> <a href="0523.php">Brice Goglin: "[hwloc-users] removing old cpuset API?"</a>
<li><strong>In reply to:</strong> <a href="0523.php">Brice Goglin: "[hwloc-users] removing old cpuset API?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ermm localhost?
<br>
<p>--------------------------
<br>
Alexandros Papadogiannakis
<br>
<p><p><span class="quotelev1">&gt; Date: Thu, 19 Jan 2012 22:28:14 +0100
</span><br>
<span class="quotelev1">&gt; From: Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [hwloc-users] removing old cpuset API?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear hwloc users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The cpuset API (hwloc_cpuset_*) was replaced by the bitmap API
</span><br>
<span class="quotelev1">&gt; (hwloc_bitmap_*) in v1.1.0, back in december 2010. We kept backward
</span><br>
<span class="quotelev1">&gt; compatibility by #defin'ing the old API on top of the new one. So you
</span><br>
<span class="quotelev1">&gt; may stil use the old API in your application (but you would get
</span><br>
<span class="quotelev1">&gt; &quot;deprecated&quot; warning).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, we're thinking of removing this compatiblity layer one day or
</span><br>
<span class="quotelev1">&gt; another. You would have to upgrade your application to the new API. If
</span><br>
<span class="quotelev1">&gt; your application must still work with old hwloc too, you may support
</span><br>
<span class="quotelev1">&gt; both API by #defin'ing the new API on top of the old one as explained at
</span><br>
<span class="quotelev1">&gt; the end of <a href="http://localhost/hwloc/projects/hwloc/doc/v1.3.1/a00010.php">http://localhost/hwloc/projects/hwloc/doc/v1.3.1/a00010.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, is anybody against removing the hwloc/cpuset.h compatibility layer
</span><br>
<span class="quotelev1">&gt; in the near future (not before v1.5, which may mean Spring 2012) and
</span><br>
<span class="quotelev1">&gt; letting application deal with this if they really need it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0524/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0525.php">Hartmut Kaiser: "[hwloc-users] Bogus files in 64bit Windows binary distribution (1.4rc1)"</a>
<li><strong>Previous message:</strong> <a href="0523.php">Brice Goglin: "[hwloc-users] removing old cpuset API?"</a>
<li><strong>In reply to:</strong> <a href="0523.php">Brice Goglin: "[hwloc-users] removing old cpuset API?"</a>
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
