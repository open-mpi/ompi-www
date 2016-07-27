<?
$subject_val = "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 22 22:29:33 2011" -->
<!-- isoreceived="20110223032933" -->
<!-- sent="Wed, 23 Feb 2011 04:29:28 +0100" -->
<!-- isosent="20110223032928" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1" -->
<!-- id="20110223032928.GC5240_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1882724615.175673.1298429297086.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-22 22:29:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1994.php">Brad Benton: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="1992.php">Brad Benton: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="1985.php">Jeff Squyres: "[hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1994.php">Brad Benton: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Reply:</strong> <a href="1994.php">Brad Benton: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Brad Benton, le Wed 23 Feb 2011 03:48:17 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; Attached are two sets of info...one for the case when SMT&#160;
</span><br>
<span class="quotelev1">&gt; (Simultaneous MultiThreading) is off, and the other for when it is on.
</span><br>
<p>Ok, found the issue, which is that the device tree also reports the
<br>
thread information for the disabled threads, I have commited the
<br>
attached fix.
<br>
<p>Is it OK for you that we integrate your hwloc-gather-topo-smtoff.tar.bz2
<br>
tarball in our series of regression tests?
<br>
<p>Samuel
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1993/patch">patch</a>
</ul>
<!-- attachment="patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1994.php">Brad Benton: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Previous message:</strong> <a href="1992.php">Brad Benton: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Maybe in reply to:</strong> <a href="1985.php">Jeff Squyres: "[hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1994.php">Brad Benton: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
<li><strong>Reply:</strong> <a href="1994.php">Brad Benton: "Re: [hwloc-devel] PPC64 problem with hwloc 1.1.1"</a>
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
