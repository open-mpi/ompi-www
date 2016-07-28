<?
$subject_val = "Re: [OMPI users] Openmpi setup with intel compiler.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 02:17:04 2009" -->
<!-- isoreceived="20091001061704" -->
<!-- sent="Thu, 1 Oct 2009 11:41:06 +0530 (IST)" -->
<!-- isosent="20091001061106" -->
<!-- name="vighnesh_at_[hidden]" -->
<!-- email="vighnesh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi setup with intel compiler." -->
<!-- id="35718.10.101.11.77.1254377466.squirrel_at_www.aero.iitb.ac.in" -->
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
<strong>Date:</strong> 2009-10-01 02:11:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10840.php">Mallikarjuna Shastry: "[OMPI users] error in checkpointing an mpi application"</a>
<li><strong>Previous message:</strong> <a href="10838.php">vighnesh_at_[hidden]: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10829.php">vighnesh_at_[hidden]: "[OMPI users] Openmpi setup with intel compiler."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Peter,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I got info from the net that OPenmpi requires F77 bindings for F90
<br>
support. Thats where I was making mistake, i didnt configured for F77
<br>
bindings during openmpi setup. I rectified my mistake and after that
<br>
openmpi
<br>
was installed successfully for both PGI and INTEL compiler.
<br>
<p>It was great help from you.  :-)
<br>
<p>Thanks and Regards,
<br>
Vighnesh
<br>
<p><p><p><p><p><span class="quotelev1">&gt;Dear Peter,
</span><br>
<span class="quotelev1">&gt;    Your suggestions did worked, it didnt showed any error during make and
</span><br>
<span class="quotelev1">&gt;make install. But it didnt got installed with mpif90 support. I tried to
</span><br>
<span class="quotelev1">&gt;compile my mpi code, but it gave following error.
</span><br>
<p><p><p><span class="quotelev1">&gt;[vighnesh_at_test_node SIVA]$ /share/apps/mpi/openmpi/intel/bin/mpif90
</span><br>
code.f &gt;-o code.exe
<br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;Unfortunately, this installation of Open MPI was not compiled with
</span><br>
Fortran &gt;90 support.  As such, the mpif90 compiler is non-functional.
<br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<p><span class="quotelev1">&gt; My configure script line is:
</span><br>
<span class="quotelev1">&gt;[root_at_test_node vighnesh]# ./configure
</span><br>
<span class="quotelev1">&gt;--prefix=/share/apps/mpi/openmpi/intel FC=ifort --with-tm=/opt/torque
</span><br>
<p><span class="quotelev1">&gt;Please help me.
</span><br>
<p><span class="quotelev1">&gt;Thanks and Regards,
</span><br>
<span class="quotelev1">&gt;Vighnesh
</span><br>
<p><p><p><span class="quotelev1">&gt; On Wednesday 30 September 2009, vighnesh_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; during
</span><br>
<span class="quotelev2">&gt;&gt; configuring with Intel 9.0 compiler the installation gives following
</span><br>
error.
<br>
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
not ending in /share/apps/mpi/openmpi/pgi/lib
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The line above indicates that you've somehow attempted this from a dirty
</span><br>
tree
<br>
<span class="quotelev1">&gt; and/or environment (dirty from the previous pgi installation...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try a clean environment, clean build tree. Source the icc/ifort-vars.sh
</span><br>
files
<br>
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
<li><strong>Next message:</strong> <a href="10840.php">Mallikarjuna Shastry: "[OMPI users] error in checkpointing an mpi application"</a>
<li><strong>Previous message:</strong> <a href="10838.php">vighnesh_at_[hidden]: "Re: [OMPI users] Openmpi setup with intel compiler."</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10829.php">vighnesh_at_[hidden]: "[OMPI users] Openmpi setup with intel compiler."</a>
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
