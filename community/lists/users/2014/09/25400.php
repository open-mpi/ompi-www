<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.3 build without BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 09:03:41 2014" -->
<!-- isoreceived="20140929130341" -->
<!-- sent="Mon, 29 Sep 2014 09:03:29 -0400" -->
<!-- isosent="20140929130329" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.3 build without BTL" -->
<!-- id="7A51B255-3FBF-46AD-85D3-945015728DE1_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3A470BBD-E99E-4CE0-90ED-03604833D3AC_at_stanford.edu" -->
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
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-29 09:03:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25401.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
<li><strong>Previous message:</strong> <a href="25399.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>In reply to:</strong> <a href="25399.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25409.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>Reply:</strong> <a href="25409.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Lee-Ping 
<br>
<p>Did you cleanup the old build, to start fresh?
<br>
<p>make distclean 
<br>
configure --disable-vt ...
<br>
...
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On Sep 29, 2014, at 8:47 AM, Lee-Ping Wang wrote:
<br>
<p><span class="quotelev1">&gt; Hmm, the build doesn't finish - it breaks when trying to create the man page.  I guess I'll disable only a few specific BTL components that have given me issues in the past. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Creating ompi_info.1 man page...
</span><br>
<span class="quotelev1">&gt;   CCLD     ompi_info
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_free_device_list'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_alloc_pd'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_close_device'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_dealloc_pd'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_destroy_qp'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_create_cq'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_get_sysfs_path'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_open_device'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_create_qp'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_query_device'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_get_device_list'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_get_device_name'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_destroy_cq'
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Lee-Ping
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 29, 2014, at 5:27 AM, Lee-Ping Wang &lt;leeping_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi there,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm building OpenMPI 1.8.3 on a system where I explicitly don't want any of the BTL components (they tend to break my single node jobs).  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure CC=gcc CXX=g++ F77=gfortran FC=gfortran --prefix=$QC_EXT_LIBS/openmpi --enable-static --enable-mca-no-build=btl
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Building gives me this error in the vt component - it appears to be expecting some Infiniband stuff:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   CCLD     otfmerge-mpi
</span><br>
<span class="quotelev2">&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_free_device_list'
</span><br>
<span class="quotelev2">&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_alloc_pd'
</span><br>
<span class="quotelev2">&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_close_device'
</span><br>
<span class="quotelev2">&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_dealloc_pd'
</span><br>
<span class="quotelev2">&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_destroy_qp'
</span><br>
<span class="quotelev2">&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_create_cq'
</span><br>
<span class="quotelev2">&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_get_sysfs_path'
</span><br>
<span class="quotelev2">&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_open_device'
</span><br>
<span class="quotelev2">&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_create_qp'
</span><br>
<span class="quotelev2">&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_query_device'
</span><br>
<span class="quotelev2">&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_get_device_list'
</span><br>
<span class="quotelev2">&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_get_device_name'
</span><br>
<span class="quotelev2">&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_destroy_cq'
</span><br>
<span class="quotelev2">&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make[10]: *** [otfmerge-mpi] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've decided to disable the vt component since I doubt I'm using it, but this could be good to know.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Lee-Ping
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25399.php">http://www.open-mpi.org/community/lists/users/2014/09/25399.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25401.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
<li><strong>Previous message:</strong> <a href="25399.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>In reply to:</strong> <a href="25399.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25409.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>Reply:</strong> <a href="25409.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
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
