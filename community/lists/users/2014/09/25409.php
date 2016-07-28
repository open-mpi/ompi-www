<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.3 build without BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 20:08:23 2014" -->
<!-- isoreceived="20140930000823" -->
<!-- sent="Mon, 29 Sep 2014 17:08:16 -0700" -->
<!-- isosent="20140930000816" -->
<!-- name="Lee-Ping Wang" -->
<!-- email="leeping_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.3 build without BTL" -->
<!-- id="6B508A21-85AE-44E0-8A00-FA14BC9ED542_at_stanford.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7A51B255-3FBF-46AD-85D3-945015728DE1_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2014-09-29 20:08:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25410.php">Lee-Ping Wang: "[OMPI users] General question about running single-node jobs."</a>
<li><strong>Previous message:</strong> <a href="25408.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
<li><strong>In reply to:</strong> <a href="25400.php">Gustavo Correa: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25414.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>Reply:</strong> <a href="25414.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
<p>Thank you.  I did start from a completely clean directory tree every time (I deleted the whole folder and re-extracted the tarball).
<br>
<p>I noticed that disabling any of the BTL components resulted in the same error, so my solution was to build everything and disable certain components at runtime.
<br>
<p>- Lee-Ping
<br>
<p>On Sep 29, 2014, at 6:03 AM, Gustavo Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Lee-Ping 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you cleanup the old build, to start fresh?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make distclean 
</span><br>
<span class="quotelev1">&gt; configure --disable-vt ...
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 29, 2014, at 8:47 AM, Lee-Ping Wang wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmm, the build doesn't finish - it breaks when trying to create the man page.  I guess I'll disable only a few specific BTL components that have given me issues in the past. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Creating ompi_info.1 man page...
</span><br>
<span class="quotelev2">&gt;&gt;  CCLD     ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_free_device_list'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_alloc_pd'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_close_device'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_dealloc_pd'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_destroy_qp'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_create_cq'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_get_sysfs_path'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_open_device'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_create_qp'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_query_device'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_get_device_list'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_get_device_name'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_destroy_cq'
</span><br>
<span class="quotelev2">&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Lee-Ping
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 29, 2014, at 5:27 AM, Lee-Ping Wang &lt;leeping_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi there,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm building OpenMPI 1.8.3 on a system where I explicitly don't want any of the BTL components (they tend to break my single node jobs).  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure CC=gcc CXX=g++ F77=gfortran FC=gfortran --prefix=$QC_EXT_LIBS/openmpi --enable-static --enable-mca-no-build=btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Building gives me this error in the vt component - it appears to be expecting some Infiniband stuff:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  CCLD     otfmerge-mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_free_device_list'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_alloc_pd'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_close_device'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_dealloc_pd'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_destroy_qp'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_create_cq'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_get_sysfs_path'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_open_device'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_create_qp'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_query_device'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_get_device_list'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_get_device_name'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_destroy_cq'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[10]: *** [otfmerge-mpi] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've decided to disable the vt component since I doubt I'm using it, but this could be good to know.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Lee-Ping
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25399.php">http://www.open-mpi.org/community/lists/users/2014/09/25399.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25400.php">http://www.open-mpi.org/community/lists/users/2014/09/25400.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25410.php">Lee-Ping Wang: "[OMPI users] General question about running single-node jobs."</a>
<li><strong>Previous message:</strong> <a href="25408.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 segfaults while 1.6.5 works?"</a>
<li><strong>In reply to:</strong> <a href="25400.php">Gustavo Correa: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25414.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>Reply:</strong> <a href="25414.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
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
