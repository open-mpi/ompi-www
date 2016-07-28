<?
$subject_val = "Re: [OMPI users] Openmpi setup with intel compiler.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 01:31:20 2009" -->
<!-- isoreceived="20091001053120" -->
<!-- sent="Thu, 1 Oct 2009 10:55:16 +0530 (IST)" -->
<!-- isosent="20091001052516" -->
<!-- name="vighnesh_at_[hidden]" -->
<!-- email="vighnesh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi setup with intel compiler." -->
<!-- id="45615.10.101.11.77.1254374716.squirrel_at_www.aero.iitb.ac.in" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Openmpi setup with intel compiler." -->
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
<strong>From:</strong> <a href="mailto:vighnesh_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Openmpi%20setup%20with%20intel%20compiler."><em>vighnesh_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-10-01 01:25:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10839.php">vighnesh_at_[hidden]: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10837.php">Peter Kjellstrom: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10829.php">vighnesh_at_[hidden]: "[OMPI users] Openmpi setup with intel compiler."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10839.php">vighnesh_at_[hidden]: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Peter,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Your suggestions did worked, it didnt showed any error during make and
<br>
make install. But it didnt got installed with mpif90 support. I tried to
<br>
compile my mpi code, but it gave following error.
<br>
<p><p><p>[vighnesh_at_test_node SIVA]$ /share/apps/mpi/openmpi/intel/bin/mpif90 code.f
<br>
-o code.exe
<br>
--------------------------------------------------------------------------
<br>
Unfortunately, this installation of Open MPI was not compiled with
<br>
Fortran 90 support.  As such, the mpif90 compiler is non-functional.
<br>
--------------------------------------------------------------------------
<br>
<p>&nbsp;My configure script line is:
<br>
[root_at_test_node vighnesh]# ./configure
<br>
--prefix=/share/apps/mpi/openmpi/intel FC=ifort --with-tm=/opt/torque
<br>
<p>Please help me.
<br>
<p>Thanks and Regards,
<br>
Vighnesh
<br>
<p><p><p><span class="quotelev1">&gt; On Wednesday 30 September 2009, vighnesh_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; during
</span><br>
<span class="quotelev2">&gt;&gt; configuring with Intel 9.0 compiler the installation gives following
</span><br>
<span class="quotelev2">&gt;&gt; error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_test_node openmpi-1.3.3]# make all install
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: Entering directory `/tmp/openmpi-1.3.3/orte'
</span><br>
<span class="quotelev2">&gt;&gt; test -z &quot;/share/apps/mpi/openmpi/intel/lib&quot; || /bin/mkdir -p
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/share/apps/mpi/openmpi/intel/lib&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  /bin/sh ../libtool   --mode=install /usr/bin/install -c
</span><br>
<span class="quotelev2">&gt;&gt; 'libopen-rte.la'
</span><br>
<span class="quotelev2">&gt;&gt; '/share/apps/mpi/openmpi/intel/lib/libopen-rte.la'
</span><br>
<span class="quotelev2">&gt;&gt; libtool: install: error: cannot install `libopen-rte.la' to a directory
</span><br>
<span class="quotelev2">&gt;&gt; not ending in /share/apps/mpi/openmpi/pgi/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The line above indicates that you've somehow attempted this from a dirty
</span><br>
<span class="quotelev1">&gt; tree
</span><br>
<span class="quotelev1">&gt; and/or environment (dirty from the previous pgi installation...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try a clean environment, clean build tree. Source the icc/ifort-vars.sh
</span><br>
<span class="quotelev1">&gt; files
</span><br>
<span class="quotelev1">&gt; from your intel install dir, set CC, CXX, FC, F77 and do:
</span><br>
<span class="quotelev1">&gt;  &quot;./configure --prefix=... &amp;&amp; make &amp;&amp; make install&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /Peter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10839.php">vighnesh_at_[hidden]: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10837.php">Peter Kjellstrom: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10829.php">vighnesh_at_[hidden]: "[OMPI users] Openmpi setup with intel compiler."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10839.php">vighnesh_at_[hidden]: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
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
