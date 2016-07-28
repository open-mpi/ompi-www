<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.3 build without BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 12:26:52 2014" -->
<!-- isoreceived="20140930162652" -->
<!-- sent="Tue, 30 Sep 2014 09:26:43 -0700" -->
<!-- isosent="20140930162643" -->
<!-- name="Lee-Ping Wang" -->
<!-- email="leeping_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.3 build without BTL" -->
<!-- id="DCFC6FAB-61F3-46EB-9FD4-4053C7C41340_at_stanford.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FDF4806-7569-496A-AEE7-F0BA35E564A6_at_cisco.com" -->
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
<strong>Date:</strong> 2014-09-30 12:26:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25418.php">Ralph Castain: "Re: [OMPI users] still SIGSEGV for Java in openmpi-1.9a1r32807 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25416.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>In reply to:</strong> <a href="25416.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff and Ralph,
<br>
<p>Thanks.  I'm really a novice user - and in cases like this one I don't really know what I'm doing.  In this case, I just wanted to get my application to run without throwing strange error messages and quitting. :)  That said, I would much rather learn about the components of MPI rather than taking shots in the dark.
<br>
<p>On different clusters where I was getting error messages related to a component, the advice from this mailing list was to disable that component.  Currently I'm building OpenMPI with all components, and my environment variables disable the components at runtime: I have OMPI_MCA_ras=^tm and OMPI_MCA_btl=self,sm,tcp.  
<br>
<p>The latter seems to disable the advanced networking-related components that were throwing the errors.  I am not sure how a BTL works for MPI ranks that are running on the same node.  Do the different MPI ranks (processes) on a node still use a BTL to communicate with each other?  And which one does it prefer to use (sm, tcp or something else?)
<br>
<p>Thanks,
<br>
<p>- Lee-Ping
<br>
<p>On Sep 30, 2014, at 7:29 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; How can you run MPI jobs at all without any BTLs?  That sounds weird -- this is not a case for which we designed the code base.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All that being said, you're getting compile errors in the OMPI build because of two things:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - you selected to build static
</span><br>
<span class="quotelev1">&gt; - you didn't disable enough stuff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically, statically building verbs-based code is not for the meek (see the FAQ).  We have verbs-based code in a few places: the BTLs, and also in the &quot;common&quot; framework.  Hence, the linker errors you are getting are because the &quot;common&quot; verbs component was still built (because it wasn't disabled), and because building statically with verbs is... tricky (see the FAQ).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You might have better luck with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --enable-mca-no-build=btl,common-verbs ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or, better yet:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --enable-mca-no-build=btl --without-verbs ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But again, I'm not sure how well OMPI will function without any BTLs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 29, 2014, at 11:47 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info is just the first time when an executable is built, and so it always is the place where we find missing library issues. It looks like someone has left incorrect configure logic in the system such that we always attempt to build Infiniband-related code, but without linking against the library.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We'll have to try and track it down.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 29, 2014, at 5:08 PM, Lee-Ping Wang &lt;leeping_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Gus,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you.  I did start from a completely clean directory tree every time (I deleted the whole folder and re-extracted the tarball).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I noticed that disabling any of the BTL components resulted in the same error, so my solution was to build everything and disable certain components at runtime.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Lee-Ping
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 29, 2014, at 6:03 AM, Gustavo Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Lee-Ping 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Did you cleanup the old build, to start fresh?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make distclean 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure --disable-vt ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I hope this helps,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 29, 2014, at 8:47 AM, Lee-Ping Wang wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hmm, the build doesn't finish - it breaks when trying to create the man page.  I guess I'll disable only a few specific BTL components that have given me issues in the past. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Creating ompi_info.1 man page...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CCLD     ompi_info
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_free_device_list'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_alloc_pd'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_close_device'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_dealloc_pd'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_destroy_qp'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_create_cq'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_get_sysfs_path'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_open_device'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_create_qp'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_query_device'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_get_device_list'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_get_device_name'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ../../../ompi/.libs/libmpi.so: undefined reference to `ibv_destroy_cq'
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - Lee-Ping
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sep 29, 2014, at 5:27 AM, Lee-Ping Wang &lt;leeping_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi there,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm building OpenMPI 1.8.3 on a system where I explicitly don't want any of the BTL components (they tend to break my single node jobs).  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./configure CC=gcc CXX=g++ F77=gfortran FC=gfortran --prefix=$QC_EXT_LIBS/openmpi --enable-static --enable-mca-no-build=btl
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Building gives me this error in the vt component - it appears to be expecting some Infiniband stuff:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CCLD     otfmerge-mpi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_free_device_list'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_alloc_pd'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_close_device'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_dealloc_pd'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_destroy_qp'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_create_cq'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_get_sysfs_path'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_open_device'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_create_qp'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_query_device'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_get_device_list'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_get_device_name'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /u/sciteam/leeping/opt/qchem-4.2/ext-libs/openmpi-1.8.3/ompi/contrib/vt/vt/../../../.libs/libmpi.so: undefined reference to `ibv_destroy_cq'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[10]: *** [otfmerge-mpi] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I've decided to disable the vt component since I doubt I'm using it, but this could be good to know.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - Lee-Ping
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25399.php">http://www.open-mpi.org/community/lists/users/2014/09/25399.php</a>
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
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25400.php">http://www.open-mpi.org/community/lists/users/2014/09/25400.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25409.php">http://www.open-mpi.org/community/lists/users/2014/09/25409.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25414.php">http://www.open-mpi.org/community/lists/users/2014/09/25414.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25416.php">http://www.open-mpi.org/community/lists/users/2014/09/25416.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25418.php">Ralph Castain: "Re: [OMPI users] still SIGSEGV for Java in openmpi-1.9a1r32807 on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25416.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
<li><strong>In reply to:</strong> <a href="25416.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.8.3 build without BTL"</a>
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
