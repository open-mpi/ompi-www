<?
$subject_val = "Re: [OMPI users] Openmpi setup with intel compiler.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 16:24:19 2009" -->
<!-- isoreceived="20090930202419" -->
<!-- sent="Wed, 30 Sep 2009 22:24:17 +0200" -->
<!-- isosent="20090930202417" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi setup with intel compiler." -->
<!-- id="200909302224.17400.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="47996.10.101.11.77.1254304464.squirrel_at_www.aero.iitb.ac.in" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi setup with intel compiler.<br>
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-30 16:24:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10838.php">vighnesh_at_[hidden]: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
<li><strong>Previous message:</strong> <a href="10836.php">Peter Kjellstrom: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>In reply to:</strong> <a href="10829.php">vighnesh_at_[hidden]: "[OMPI users] Openmpi setup with intel compiler."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10838.php">vighnesh_at_[hidden]: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wednesday 30 September 2009, vighnesh_at_[hidden] wrote:
<br>
...
<br>
<span class="quotelev1">&gt; during
</span><br>
<span class="quotelev1">&gt; configuring with Intel 9.0 compiler the installation gives following
</span><br>
<span class="quotelev1">&gt; error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_test_node openmpi-1.3.3]# make all install
</span><br>
...
<br>
<span class="quotelev1">&gt; make[3]: Entering directory `/tmp/openmpi-1.3.3/orte'
</span><br>
<span class="quotelev1">&gt; test -z &quot;/share/apps/mpi/openmpi/intel/lib&quot; || /bin/mkdir -p
</span><br>
<span class="quotelev1">&gt; &quot;/share/apps/mpi/openmpi/intel/lib&quot;
</span><br>
<span class="quotelev1">&gt;  /bin/sh ../libtool   --mode=install /usr/bin/install -c  'libopen-rte.la'
</span><br>
<span class="quotelev1">&gt; '/share/apps/mpi/openmpi/intel/lib/libopen-rte.la'
</span><br>
<span class="quotelev1">&gt; libtool: install: error: cannot install `libopen-rte.la' to a directory
</span><br>
<span class="quotelev1">&gt; not ending in /share/apps/mpi/openmpi/pgi/lib
</span><br>
<p>The line above indicates that you've somehow attempted this from a dirty tree 
<br>
and/or environment (dirty from the previous pgi installation...).
<br>
<p>Try a clean environment, clean build tree. Source the icc/ifort-vars.sh files 
<br>
from your intel install dir, set CC, CXX, FC, F77 and do:
<br>
&nbsp;&quot;./configure --prefix=... &amp;&amp; make &amp;&amp; make install&quot;
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10837/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10838.php">vighnesh_at_[hidden]: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
<li><strong>Previous message:</strong> <a href="10836.php">Peter Kjellstrom: "Re: [OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>In reply to:</strong> <a href="10829.php">vighnesh_at_[hidden]: "[OMPI users] Openmpi setup with intel compiler."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/10/10838.php">vighnesh_at_[hidden]: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
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
