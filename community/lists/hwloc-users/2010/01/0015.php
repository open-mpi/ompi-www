<?
$subject_val = "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 12:55:15 2010" -->
<!-- isoreceived="20100128175515" -->
<!-- sent="Thu, 28 Jan 2010 18:55:10 +0100" -->
<!-- isosent="20100128175510" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8" -->
<!-- id="20100128175510.GS4873_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AD3E5D661CED404A842D89A45C87D56629708271D2_at_axe-post.Acceleware.local" -->
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
<strong>Subject:</strong> Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 12:55:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0016.php">Norman Lo: "[hwloc-users] Istopo question"</a>
<li><strong>Previous message:</strong> <a href="0014.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>In reply to:</strong> <a href="0014.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0017.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0017.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dan Eaton, le Thu 28 Jan 2010 10:32:46 -0700, a &#233;crit :
<br>
<span class="quotelev1">&gt; I just meant without resorting to CPUID, because it is so unportable
</span><br>
<span class="quotelev1">&gt; (to consider implementing directly into our library).
</span><br>
<p>Ok.  Unfortunately, when the information reported by the OS is bogus (as
<br>
it seems to be the case here), there is no other way than just asking
<br>
the hardware directly, or fixing the lstopo xml output and using it.
<br>
<p><span class="quotelev1">&gt; I've attached the output of x86info.
</span><br>
<p>Ah, that's an old x86info, could you try building a newer one? (Like
<br>
Debian's 1.25 available on 
<br>
<a href="http://ftp.debian.org/debian/pool/main/x/x86info/x86info_1.25.orig.tar.gz">http://ftp.debian.org/debian/pool/main/x/x86info/x86info_1.25.orig.tar.gz</a>
<br>
)
<br>
<p><span class="quotelev1">&gt; Is it possible to get at your CPUID backend now?
</span><br>
<p>The quick &amp; dirty way is the attached patch, to be applied on top of
<br>
the svn trunk, which forces x86 cpuid detection on Linux.  Please pass
<br>
--enable-debug to ./configure so we get precise debugging output from
<br>
lstopo.
<br>
<p>Samuel
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0015/patch">patch</a>
</ul>
<!-- attachment="patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0016.php">Norman Lo: "[hwloc-users] Istopo question"</a>
<li><strong>Previous message:</strong> <a href="0014.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>In reply to:</strong> <a href="0014.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0017.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
<li><strong>Reply:</strong> <a href="0017.php">Dan Eaton: "Re: [hwloc-users] No caches or hiearchy on RHEL 4.7 or 4.8"</a>
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
