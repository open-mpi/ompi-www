<?
$subject_val = "[OMPI users] New libmpi.so dependency on libibverbs.so?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  1 12:52:10 2016" -->
<!-- isoreceived="20160201175210" -->
<!-- sent="Mon, 01 Feb 2016 17:52:07 +0000" -->
<!-- isosent="20160201175207" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="[OMPI users] New libmpi.so dependency on libibverbs.so?" -->
<!-- id="56AF9B47.4080204_at_ntlworld.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] New libmpi.so dependency on libibverbs.so?<br>
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-01 12:52:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28425.php">CUDENNEC Loic: "[OMPI users] Last CfP: 4th Alchemy Workshop on Manycore programming"</a>
<li><strong>Previous message:</strong> <a href="28423.php">William Law: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28427.php">Gilles Gouaillardet: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Reply:</strong> <a href="28427.php">Gilles Gouaillardet: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Reply:</strong> <a href="28434.php">Dave Love: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Having compiled various recent Open MPI sources with the same 
<br>
&quot;configure&quot; options, I've noticed that the &quot;libmpi.so&quot; shared library 
<br>
from 1.10.1 now depends itself directly on libibverbs.so.1. Previously, 
<br>
1.10.0 for example, only plugins such as mca_btl_openib.so depended on it.
<br>
<p>E.g.
<br>
<p>readelf -d ../ompi_install4/lib/libmpi.so.12.0.0:
<br>
<p>&nbsp;&nbsp;0x0000000000000001 (NEEDED)             Shared library: 
<br>
[libopen-rte.so.12]
<br>
&nbsp;&nbsp;0x0000000000000001 (NEEDED)             Shared library: 
<br>
[libopen-pal.so.13]
<br>
&nbsp;&nbsp;0x0000000000000001 (NEEDED)             Shared library: [libdl.so.2]
<br>
&nbsp;&nbsp;0x0000000000000001 (NEEDED)             Shared library: [librt.so.1]
<br>
&nbsp;&nbsp;0x0000000000000001 (NEEDED)             Shared library: [libm.so.6]
<br>
&nbsp;&nbsp;0x0000000000000001 (NEEDED)             Shared library: [libutil.so.1]
<br>
&nbsp;&nbsp;0x0000000000000001 (NEEDED)             Shared library: [libpthread.so.0]
<br>
&nbsp;&nbsp;0x0000000000000001 (NEEDED)             Shared library: [libc.so.6]
<br>
&nbsp;&nbsp;0x000000000000000e (SONAME)             Library soname: [libmpi.so.12]
<br>
<p>readelf -d ../ompi_install4/lib/libmpi.so.12.0.1
<br>
<p>&nbsp;&nbsp;0x0000000000000001 (NEEDED)             Shared library: [libibverbs.so.1]
<br>
&nbsp;&nbsp;0x0000000000000001 (NEEDED)             Shared library: 
<br>
[libopen-rte.so.12]
<br>
&nbsp;&nbsp;0x0000000000000001 (NEEDED)             Shared library: 
<br>
[libopen-pal.so.13]
<br>
&nbsp;&nbsp;0x0000000000000001 (NEEDED)             Shared library: [libdl.so.2]
<br>
&nbsp;&nbsp;0x0000000000000001 (NEEDED)             Shared library: [librt.so.1]
<br>
&nbsp;&nbsp;0x0000000000000001 (NEEDED)             Shared library: [libm.so.6]
<br>
&nbsp;&nbsp;0x0000000000000001 (NEEDED)             Shared library: [libutil.so.1]
<br>
&nbsp;&nbsp;0x0000000000000001 (NEEDED)             Shared library: [libpthread.so.0]
<br>
&nbsp;&nbsp;0x0000000000000001 (NEEDED)             Shared library: [libc.so.6]
<br>
&nbsp;&nbsp;0x000000000000000e (SONAME)             Library soname: [libmpi.so.12]
<br>
<p>This could make it difficult to share an install between machines. Is 
<br>
this intended?
<br>
<p>Thanks,
<br>
Simon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28425.php">CUDENNEC Loic: "[OMPI users] Last CfP: 4th Alchemy Workshop on Manycore programming"</a>
<li><strong>Previous message:</strong> <a href="28423.php">William Law: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28427.php">Gilles Gouaillardet: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Reply:</strong> <a href="28427.php">Gilles Gouaillardet: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Reply:</strong> <a href="28434.php">Dave Love: "Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
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
