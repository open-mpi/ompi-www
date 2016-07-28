<?
$subject_val = "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  4 18:17:34 2011" -->
<!-- isoreceived="20110104231734" -->
<!-- sent="Wed, 5 Jan 2011 00:17:29 +0100" -->
<!-- isosent="20110104231729" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?" -->
<!-- id="20110104231729.GM5670_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1397347999.2016326.1294181541983.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-04 18:17:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1776.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3017)"</a>
<li><strong>Previous message:</strong> <a href="1774.php">Jiri Hladky: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1764.php">Jiri Hladky: "[hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1781.php">Jeff Squyres: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<li><strong>Reply:</strong> <a href="1781.php">Jeff Squyres: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Jiri Hladky, le Tue 04 Jan 2011 23:52:21 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; I got a crash course on s390.
</span><br>
<p>(Not sure about the english meaning here: it does not mean hwloc
<br>
crashed, right?)
<br>
<p><span class="quotelev1">&gt; They have an access to mainfraim with 18 CPUs and 128 GB of RAM. However, the
</span><br>
<span class="quotelev1">&gt; mainframe is usually divided into the smaller partitions ( LPAR) on which
</span><br>
<span class="quotelev1">&gt; virtual machines are running.
</span><br>
<p>That's what I've understood from echoes from Debian s390 porters indeed.
<br>
<p><span class="quotelev1">&gt; In this particular case they have tested hwloc on the virtual machine running
</span><br>
<span class="quotelev1">&gt; on partition with 2GB of RAM and 4 CPUs of which only 1 was online. This is
</span><br>
<span class="quotelev1">&gt; certainly not a typical use-case for hwloc. Nevertheless, great news is that
</span><br>
<span class="quotelev1">&gt; hwloc is running just fine on this box! :-)
</span><br>
<p>Indeed:
<br>
<p><span class="quotelev1">&gt; Machine (P#0 local=2048132KB total=2048132KB Backend=Linux)
</span><br>
<span class="quotelev1">&gt;   Socket L#0
</span><br>
<span class="quotelev1">&gt;     Core L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;       PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt; depth 0:	1 Machine (type #1)
</span><br>
<span class="quotelev1">&gt;  depth 1:	1 Socket (type #3)
</span><br>
<span class="quotelev1">&gt;   depth 2:	1 Core (type #5)
</span><br>
<span class="quotelev1">&gt;    depth 3:	1 PU (type #6)
</span><br>
<span class="quotelev1">&gt; 63 processors not represented in topology: 0xffffffff,0xfffffffe
</span><br>
<span class="quotelev1">&gt; 3 processors offline: 0x0000000e
</span><br>
<span class="quotelev1">&gt; 3 processors allowed but not online: 0x0000000e
</span><br>
<p>So sockets and cores were detected, as well as the off-line processors,
<br>
that's good!
<br>
<p>(cache are apparently not in the tar, and I can't find code about them
<br>
in linux/arch/s390 anyway)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1776.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3017)"</a>
<li><strong>Previous message:</strong> <a href="1774.php">Jiri Hladky: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1764.php">Jiri Hladky: "[hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1781.php">Jeff Squyres: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
<li><strong>Reply:</strong> <a href="1781.php">Jeff Squyres: "Re: [hwloc-devel] Is hwloc supposed to work on s390 and s390x architecture?"</a>
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
