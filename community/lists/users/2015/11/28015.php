<?
$subject_val = "Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat	EL7";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 18:02:47 2015" -->
<!-- isoreceived="20151106230247" -->
<!-- sent="Fri, 6 Nov 2015 23:02:42 +0000" -->
<!-- isosent="20151106230242" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat	EL7" -->
<!-- id="6FDCEEC9-4223-4630-BADF-510CBA23911A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DUB123-W277E10D68105F9CF37EE35B1280_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat	EL7<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-06 18:02:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28016.php">Saurabh T: "Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7"</a>
<li><strong>Previous message:</strong> <a href="28014.php">Saurabh T: "[OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7"</a>
<li><strong>In reply to:</strong> <a href="28014.php">Saurabh T: "[OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28016.php">Saurabh T: "Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Both of these seem to be issues with libnl, which is a dependent library that Open MPI uses.
<br>
<p>Can you send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p><span class="quotelev1">&gt; On Nov 6, 2015, at 5:44 PM, Saurabh T &lt;saurabh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Redhat Enterprise Linux 7, I am facing the following problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. With OpenMPI 1.8.8, everything builds, but the following error appears on running:
</span><br>
<span class="quotelev1">&gt; orterun -np 2 hello_cxx
</span><br>
<span class="quotelev1">&gt; hello_cxx: route/tc.c:973: rtnl_tc_register: Assertion `0' failed.
</span><br>
<span class="quotelev1">&gt; hello_cxx: route/tc.c:973: rtnl_tc_register: Assertion `0' failed.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; orterun noticed that process rank 0 with PID 18229 on node sim18 exited on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. With OpenMPI 1.10.1, there is a failure to compile oshmem_info:
</span><br>
<span class="quotelev1">&gt; /bin/ld: ../../../oshmem/.libs/liboshmem.a(memheap_base_static.o): undefined reference to symbol '_end'
</span><br>
<span class="quotelev1">&gt; /bin/ld: note: '_end' is defined in DSO /lib64/libnl-route-3.so.200 so try adding it to the linker command line
</span><br>
<span class="quotelev1">&gt; /lib64/libnl-route-3.so.200: could not read symbols: Invalid operation
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [oshmem_info] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is rhel7 not supported with OpenMPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; saurabh
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28014.php">http://www.open-mpi.org/community/lists/users/2015/11/28014.php</a>
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
<li><strong>Next message:</strong> <a href="28016.php">Saurabh T: "Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7"</a>
<li><strong>Previous message:</strong> <a href="28014.php">Saurabh T: "[OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7"</a>
<li><strong>In reply to:</strong> <a href="28014.php">Saurabh T: "[OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28016.php">Saurabh T: "Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7"</a>
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
