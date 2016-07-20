<?
$subject_val = "Re: [hwloc-users] Compiling Hwloc-1.1 on Windows 7 x64 Editiono";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  9 21:58:40 2010" -->
<!-- isoreceived="20101210025840" -->
<!-- sent="Fri, 10 Dec 2010 10:58:30 +0800" -->
<!-- isosent="20101210025830" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Compiling Hwloc-1.1 on Windows 7 x64 Editiono" -->
<!-- id="20101210025830.GB5795_at_const" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20101210001236.GW5601_at_const" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Compiling Hwloc-1.1 on Windows 7 x64 Editiono<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-09 21:58:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0253.php">S.A.Saktheesh: "[hwloc-users] Identifying NIC in a topology using HWLOC"</a>
<li><strong>Previous message:</strong> <a href="0251.php">Samuel Thibault: "Re: [hwloc-users] Compiling Hwloc-1.1 on Windows 7 x64 Editiono"</a>
<li><strong>In reply to:</strong> <a href="0251.php">Samuel Thibault: "Re: [hwloc-users] Compiling Hwloc-1.1 on Windows 7 x64 Editiono"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault, le Fri 10 Dec 2010 08:12:36 +0800, a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Amna Aslam, le Thu 09 Dec 2010 19:08:21 +0100, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; can you tell me the steps for compiling hwloc using this mingw64.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same as usual: ./configure &amp;&amp; make
</span><br>
<p>Apparently the mingw64 website does not provide a 64bit version of msys,
<br>
so configure will only build a 32bit version. You need to make sure the
<br>
minw64 compiler (e.g. x86_64-w64-mingw32-gcc.exe) is in the PATH, and pass
<br>
--host=x86_64-w64-mingw32 to ./configure
<br>
<p>Just to make sure: do you really need a 64bit version of hwloc for use
<br>
in a 64bit application, or just hwloc tools which can run on a 64bit
<br>
windows? (in the latter case a 32bit build should be just fine)
<br>
<p><span class="quotelev2">&gt; &gt; i am getting this error, when i type make it says.
</span><br>
<span class="quotelev2">&gt; &gt; &quot;fatal error: sys/mman.h&#194;&#160; no such file or directory&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So there's a bug, please post the output of
</span><br>
<p>Mmm, maybe you are using rc3?  IIRC there was a mingw32 bug there
<br>
(that's why I didn't provide a windows build of it).
<br>
<p>I've also tried mingw64 myself, and there's a problem with its
<br>
definition of LOGICAL_PROCESSOR_RELATIONSHIP which I've just
<br>
fixed in the svn, so please try tomorrow's nightly snapshot from
<br>
<a href="http://www.open-mpi.org/software/hwloc/nightly/v1.1/">http://www.open-mpi.org/software/hwloc/nightly/v1.1/</a> instead.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0253.php">S.A.Saktheesh: "[hwloc-users] Identifying NIC in a topology using HWLOC"</a>
<li><strong>Previous message:</strong> <a href="0251.php">Samuel Thibault: "Re: [hwloc-users] Compiling Hwloc-1.1 on Windows 7 x64 Editiono"</a>
<li><strong>In reply to:</strong> <a href="0251.php">Samuel Thibault: "Re: [hwloc-users] Compiling Hwloc-1.1 on Windows 7 x64 Editiono"</a>
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
