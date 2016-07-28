<?
$subject_val = "Re: [hwloc-devel] pgi 11.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  7 04:54:06 2011" -->
<!-- isoreceived="20110307095406" -->
<!-- sent="Mon, 07 Mar 2011 10:54:00 +0100" -->
<!-- isosent="20110307095400" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] pgi 11.1" -->
<!-- id="4D74AB38.2040407_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D6CEDD4.80304_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] pgi 11.1<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-07 04:54:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2040.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3246"</a>
<li><strong>Previous message:</strong> <a href="2038.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3244)"</a>
<li><strong>In reply to:</strong> <a href="2030.php">Brice Goglin: "[hwloc-devel] pgi 11.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 01/03/2011 14:00, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; I just tried a PGI compiler 11.1 and couldn't compile hwloc trunk, v1.1
</span><br>
<span class="quotelev1">&gt; or even v1.0. All of them fail in the libxml headers.
</span><br>
<p>This is a problem with libxml2 2.7.1 (SLES11). Rebuilding a libxml2
<br>
2.7.8 fixes the problem.
<br>
<p><span class="quotelev1">&gt; If I disable XML, it fails during link:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: link: /opt/cluster/compiler/pgi/linux86-64/latest/bin/pgcc -shared  -fpic -DPIC  .libs/topology.o .libs/traversal.o .libs/topology-synthetic.o .libs/bind.o .libs/cpuset.o .libs/misc.o .libs/topology-linux.o .libs/topology-x86.o   -lc    -Wl,-soname -Wl,libhwloc.so.0 -o .libs/libhwloc.so.0.2.0
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: /opt/cluster/compiler/pgi/shared/11.1/lib64/libpgbind.a(bindsa.o): relocation R_X86_64_PC32 against undefined symbol `syscall@@GLIBC_2.2.5' can not be used when making a shared object; recompile with -fPIC
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: final link failed: Bad value
</span><br>
<span class="quotelev1">&gt; make[1]: *** [libhwloc.la] Error 2
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>This is solved in PGI 11.2.
<br>
<p>hwloc trunk compiles fine now.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2040.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3246"</a>
<li><strong>Previous message:</strong> <a href="2038.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3244)"</a>
<li><strong>In reply to:</strong> <a href="2030.php">Brice Goglin: "[hwloc-devel] pgi 11.1"</a>
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
