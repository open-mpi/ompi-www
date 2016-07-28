<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.3 build without BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 08:47:24 2014" -->
<!-- isoreceived="20140929124724" -->
<!-- sent="Mon, 29 Sep 2014 05:47:16 -0700" -->
<!-- isosent="20140929124716" -->
<!-- name="Lee-Ping Wang" -->
<!-- email="leeping_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.3 build without BTL" -->
<!-- id="3A470BBD-E99E-4CE0-90ED-03604833D3AC_at_stanford.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1BF116EE-8E52-4BD6-B3EE-B86DFBFA3C7A_at_stanford.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8.3 build without BTL<br>
<strong>From:</strong> Lee-Ping Wang (<em>leeping_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-29 08:47:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25400.php">Gustavo Correa: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>Previous message:</strong> <a href="25398.php">Lee-Ping Wang: "[OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>In reply to:</strong> <a href="25398.php">Lee-Ping Wang: "[OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25400.php">Gustavo Correa: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>Reply:</strong> <a href="25400.php">Gustavo Correa: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, the build doesn't finish - it breaks when trying to create the man page.  I guess I'll disable only a few specific BTL components that have given me issues in the past. 
<br>
<p>Creating ompi_info.1 man page...
<br>
&nbsp;&nbsp;CCLD     ompi_info
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ibv_free_device_list'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ibv_alloc_pd'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ibv_close_device'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ibv_dealloc_pd'
<br>
./../../ompi/.libs/libmpi.so: undefined reference to `ibv_destroy_qp'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ibv_create_cq'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ibv_get_sysfs_path'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ibv_open_device'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ibv_create_qp'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ibv_query_device'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ibv_get_device_list'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ibv_get_device_name'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to `ibv_destroy_cq'
<br>
collect2: error: ld returned 1 exit status
<br>
<p>Thanks,
<br>
<p>- Lee-Ping
<br>
<p>On Sep 29, 2014, at 5:27 AM, Lee-Ping Wang &lt;leeping_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm building OpenMPI 1.8.3 on a system where I explicitly don't want any of the BTL components (they tend to break my single node jobs).  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure CC=gcc CXX=g++ F77=gfortran FC=gfortran --prefix=$QC_EXT_LIBS/openmpi --enable-static --enable-mca-no-build=btl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Building gives me this error in the vt component - it appears to be expecting some Infiniband stuff:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   CCLD     otfmerge-mpi
</span><br>
<span class="quotelev1">&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_free_device_list'
</span><br>
<span class="quotelev1">&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_alloc_pd'
</span><br>
<span class="quotelev1">&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_close_device'
</span><br>
<span class="quotelev1">&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_dealloc_pd'
</span><br>
<span class="quotelev1">&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_destroy_qp'
</span><br>
<span class="quotelev1">&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_create_cq'
</span><br>
<span class="quotelev1">&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_get_sysfs_path'
</span><br>
<span class="quotelev1">&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_open_device'
</span><br>
<span class="quotelev1">&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_create_qp'
</span><br>
<span class="quotelev1">&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_query_device'
</span><br>
<span class="quotelev1">&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_get_device_list'
</span><br>
<span class="quotelev1">&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_get_device_name'
</span><br>
<span class="quotelev1">&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_destroy_cq'
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[10]: *** [otfmerge-mpi] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've decided to disable the vt component since I doubt I'm using it, but this could be good to know.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Lee-Ping
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25399/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25400.php">Gustavo Correa: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>Previous message:</strong> <a href="25398.php">Lee-Ping Wang: "[OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>In reply to:</strong> <a href="25398.php">Lee-Ping Wang: "[OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25400.php">Gustavo Correa: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>Reply:</strong> <a href="25400.php">Gustavo Correa: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
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
