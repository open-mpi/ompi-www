<?
$subject_val = "Re: [hwloc-devel] [open-mpi/hwloc] f21cd7: linux/mic: add a MICSerialNumber info	attribute wh...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 17 13:21:19 2013" -->
<!-- isoreceived="20131017172119" -->
<!-- sent="Thu, 17 Oct 2013 17:20:59 +0000" -->
<!-- isosent="20131017172059" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [open-mpi/hwloc] f21cd7: linux/mic: add a MICSerialNumber info	attribute wh..." -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F979F2E_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20131017171713.GQ25380_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [open-mpi/hwloc] f21cd7: linux/mic: add a MICSerialNumber info	attribute wh...<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-17 13:20:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3941.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-10-gf21cd78)"</a>
<li><strong>Previous message:</strong> <a href="3939.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.7.2-9-gb7693fa)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah; we're working on it.
<br>
<p>Github's emails kinda suck.  Brice sent me his openmx git email script today; I'm going to try to get that hosted at IU.
<br>
<p><p>On Oct 17, 2013, at 1:17 PM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Brice Goglin, le Thu 17 Oct 2013 19:10:05 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;  Branch: refs/heads/master
</span><br>
<span class="quotelev2">&gt;&gt;  Home:   <a href="https://github.com/open-mpi/hwloc">https://github.com/open-mpi/hwloc</a>
</span><br>
<span class="quotelev2">&gt;&gt;  Commit: f21cd78ae135e7ded8c61f7f29d4c4109f0b1a71
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="https://github.com/open-mpi/hwloc/commit/f21cd78ae135e7ded8c61f7f29d4c4109f0b1a71">https://github.com/open-mpi/hwloc/commit/f21cd78ae135e7ded8c61f7f29d4c4109f0b1a71</a>
</span><br>
<span class="quotelev2">&gt;&gt;  Author: Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Date:   2013-10-17 (Thu, 17 Oct 2013)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Changed paths:
</span><br>
<span class="quotelev2">&gt;&gt;    M NEWS
</span><br>
<span class="quotelev2">&gt;&gt;    M doc/hwloc.doxy
</span><br>
<span class="quotelev2">&gt;&gt;    M src/topology-linux.c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Log Message:
</span><br>
<span class="quotelev2">&gt;&gt;  -----------
</span><br>
<span class="quotelev2">&gt;&gt;  linux/mic: add a MICSerialNumber info attribute when running inside the MIC
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI people want an easy way to recognize MICs and nodes using hwloc.
</span><br>
<span class="quotelev2">&gt;&gt; We already have MICSerialNumber inside OS devices in the host topology,
</span><br>
<span class="quotelev2">&gt;&gt; add the same to the root object of MIC topologies.
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, we couldn't find anything better than parsing /proc/elog
</span><br>
<span class="quotelev2">&gt;&gt; to find that number.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mmm, we don't have the commit diff any more?  I found that useful, to be
</span><br>
<span class="quotelev1">&gt; able to quickly see what happened exactly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3941.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-10-gf21cd78)"</a>
<li><strong>Previous message:</strong> <a href="3939.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.7.2-9-gb7693fa)"</a>
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
