<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.3 build without BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 10:29:04 2014" -->
<!-- isoreceived="20140930142904" -->
<!-- sent="Tue, 30 Sep 2014 14:29:02 +0000" -->
<!-- isosent="20140930142902" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.3 build without BTL" -->
<!-- id="4FDF4806-7569-496A-AEE7-F0BA35E564A6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D5B6D881-97A9-41C1-A6DD-D58761084303_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-30 10:29:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25417.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>Previous message:</strong> <a href="25415.php">Siegmar Gross: "[OMPI users] still SIGSEGV for Java in openmpi-1.9a1r32807 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25414.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25417.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>Reply:</strong> <a href="25417.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How can you run MPI jobs at all without any BTLs?  That sounds weird -- this is not a case for which we designed the code base.
<br>
<p>All that being said, you're getting compile errors in the OMPI build because of two things:
<br>
<p>- you selected to build static
<br>
- you didn't disable enough stuff
<br>
<p>Specifically, statically building verbs-based code is not for the meek (see the FAQ).  We have verbs-based code in a few places: the BTLs, and also in the &quot;common&quot; framework.  Hence, the linker errors you are getting are because the &quot;common&quot; verbs component was still built (because it wasn't disabled), and because building statically with verbs is... tricky (see the FAQ).
<br>
<p>You might have better luck with:
<br>
<p>./configure --enable-mca-no-build=btl,common-verbs ...
<br>
<p>Or, better yet:
<br>
<p>./configure --enable-mca-no-build=btl --without-verbs ...
<br>
<p>But again, I'm not sure how well OMPI will function without any BTLs.
<br>
<p><p><p>On Sep 29, 2014, at 11:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; ompi_info is just the first time when an executable is built, and so it always is the place where we find missing library issues. It looks like someone has left incorrect configure logic in the system such that we always attempt to build Infiniband-related code, but without linking against the library.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We'll have to try and track it down.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 29, 2014, at 5:08 PM, Lee-Ping Wang &lt;leeping_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gus,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.  I did start from a completely clean directory tree every time (I deleted the whole folder and re-extracted the tarball).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I noticed that disabling any of the BTL components resulted in the same error, so my solution was to build everything and disable certain components at runtime.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Lee-Ping
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 29, 2014, at 6:03 AM, Gustavo Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Lee-Ping 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you cleanup the old build, to start fresh?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make distclean 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure --disable-vt ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 29, 2014, at 8:47 AM, Lee-Ping Wang wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hmm, the build doesn't finish - it breaks when trying to create the man page.  I guess I'll disable only a few specific BTL components that have given me issues in the past. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Creating ompi_info.1 man page...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CCLD     ompi_info
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_free_device_list'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_alloc_pd'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_close_device'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_dealloc_pd'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_destroy_qp'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_create_cq'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_get_sysfs_path'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_open_device'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_create_qp'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_query_device'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_get_device_list'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_get_device_name'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_destroy_cq'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Lee-Ping
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 29, 2014, at 5:27 AM, Lee-Ping Wang &lt;leeping_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi there,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm building OpenMPI 1.8.3 on a system where I explicitly don't want any of the BTL components (they tend to break my single node jobs).  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure CC=gcc CXX=g++ F77=gfortran FC=gfortran --prefix=$QC_EXT_LIBS/openmpi --enable-static --enable-mca-no-build=btl
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Building gives me this error in the vt component - it appears to be expecting some Infiniband stuff:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CCLD     otfmerge-mpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_free_device_list'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_alloc_pd'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_close_device'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_dealloc_pd'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_destroy_qp'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_create_cq'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_get_sysfs_path'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_open_device'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_create_qp'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_query_device'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_get_device_list'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_get_device_name'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_destroy_cq'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make[10]: *** [otfmerge-mpi] Error 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've decided to disable the vt component since I doubt I'm using it, but this could be good to know.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - Lee-Ping
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25399.php">http://www.open-mpi.org/community/lists/users/2014/09/25399.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25400.php">http://www.open-mpi.org/community/lists/users/2014/09/25400.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25409.php">http://www.open-mpi.org/community/lists/users/2014/09/25409.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25414.php">http://www.open-mpi.org/community/lists/users/2014/09/25414.php</a>
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
<li><strong>Next message:</strong> <a href="25417.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>Previous message:</strong> <a href="25415.php">Siegmar Gross: "[OMPI users] still SIGSEGV for Java in openmpi-1.9a1r32807 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25414.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25417.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>Reply:</strong> <a href="25417.php">Lee-Ping Wang: "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
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
