<?
$subject_val = "[OMPI users] OpenMPI 1.8.3 build without BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 08:27:32 2014" -->
<!-- isoreceived="20140929122732" -->
<!-- sent="Mon, 29 Sep 2014 05:27:27 -0700" -->
<!-- isosent="20140929122727" -->
<!-- name="Lee-Ping Wang" -->
<!-- email="leeping_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.8.3 build without BTL" -->
<!-- id="1BF116EE-8E52-4BD6-B3EE-B86DFBFA3C7A_at_stanford.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.8.3 build without BTL<br>
<strong>From:</strong> Lee-Ping Wang (<em>leeping_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-29 08:27:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25399.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>Previous message:</strong> <a href="25397.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Application hangs in 1.8.1 related to collective operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25399.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>Reply:</strong> <a href="25399.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>I'm building OpenMPI 1.8.3 on a system where I explicitly don't want any of the BTL components (they tend to break my single node jobs).  
<br>
<p>./configure CC=gcc CXX=g++ F77=gfortran FC=gfortran --prefix=$QC_EXT_LIBS/openmpi --enable-static --enable-mca-no-build=btl
<br>
<p>Building gives me this error in the vt component - it appears to be expecting some Infiniband stuff:
<br>
<p>&nbsp;&nbsp;CCLD     otfmerge-mpi
<br>
/u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_free_device_list'
<br>
/u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_alloc_pd'
<br>
/u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_close_device'
<br>
/u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_dealloc_pd'
<br>
/u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_destroy_qp'
<br>
/u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_create_cq'
<br>
/u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_get_sysfs_path'
<br>
/u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_open_device'
<br>
/u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_create_qp'
<br>
/u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_query_device'
<br>
/u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_get_device_list'
<br>
/u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_get_device_name'
<br>
/u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_destroy_cq'
<br>
collect2: error: ld returned 1 exit status
<br>
make[10]: *** [otfmerge-mpi] Error 1
<br>
<p>I've decided to disable the vt component since I doubt I'm using it, but this could be good to know.
<br>
<p>Thanks,
<br>
<p>- Lee-Ping
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25398/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25399.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>Previous message:</strong> <a href="25397.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Application hangs in 1.8.1 related to collective operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25399.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>Reply:</strong> <a href="25399.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
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
