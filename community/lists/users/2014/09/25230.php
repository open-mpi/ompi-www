<?
$subject_val = "Re: [OMPI users] Open MPI 1.6.5 or 1.8.1 Please respond to	swamyk@us.ibm.com";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  2 17:00:53 2014" -->
<!-- isoreceived="20140902210053" -->
<!-- sent="Tue, 2 Sep 2014 21:00:52 +0000" -->
<!-- isosent="20140902210052" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.6.5 or 1.8.1 Please respond to	swamyk@us.ibm.com" -->
<!-- id="68BD40FD-E10C-4C38-9295-41FE8C9B0FD8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF838296A0.2BF6D207-ON85257D47.0063AA60-85257D47.0063E16C_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.6.5 or 1.8.1 Please respond to	swamyk@us.ibm.com<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-02 17:00:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25231.php">Ralph Castain: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt;	28	slots	(updated findings)"</a>
<li><strong>Previous message:</strong> <a href="25229.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt;	28	slots	(updated findings)"</a>
<li><strong>In reply to:</strong> <a href="25227.php">Swamy Kandadai: "[OMPI users] Open MPI 1.6.5 or 1.8.1 Please respond to swamyk@us.ibm.com"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please send the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Sep 2, 2014, at 2:10 PM, Swamy Kandadai &lt;swamyk_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi:
</span><br>
<span class="quotelev1">&gt; While building OpenMPI (1.6.5 or 1.8.1) using openib on our power8 cluster with Mellanox IB (FDR) I get the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure: WARNING: infiniband/verbs.h: present but cannot be compiled
</span><br>
<span class="quotelev1">&gt; configure: WARNING: infiniband/verbs.h:     check for missing prerequisite headers?
</span><br>
<span class="quotelev1">&gt; configure: WARNING: infiniband/verbs.h: see the Autoconf documentation
</span><br>
<span class="quotelev1">&gt; configure: WARNING: infiniband/verbs.h:     section &quot;Present But Cannot Be Compiled&quot;
</span><br>
<span class="quotelev1">&gt; configure: WARNING: infiniband/verbs.h: proceeding with the compiler's result
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you see this issue while building OpenMPI? Here is my configure command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export CC=xlc_r
</span><br>
<span class="quotelev1">&gt; export CXX=xlC_r
</span><br>
<span class="quotelev1">&gt; export FC=xlf90_r
</span><br>
<span class="quotelev1">&gt; export F77=xlf_r
</span><br>
<span class="quotelev1">&gt; export FFLAGS=&quot;-O3 -q64 -qarch=pwr8 -qtune=pwr8 -qthreaded&quot;
</span><br>
<span class="quotelev1">&gt; export FCFLAGS=&quot;-O3 -q64 -qarch=pwr8 -qtune=pwr8  -qthreaded&quot;
</span><br>
<span class="quotelev1">&gt; export CFLAGS=&quot;-O3 -q64 -qarch=pwr8 -qtune=pwr8 -qthreaded&quot;
</span><br>
<span class="quotelev1">&gt; export CXXFLAGS=&quot;-O2 -q64 -qarch=pwr8 -qtune=pwr8 -qthreaded&quot;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/bench2/swamy/ompi_165 \
</span><br>
<span class="quotelev1">&gt; --with-openib --includedir=/opt/ibm/xlC/13.1.0/include  \
</span><br>
<span class="quotelev1">&gt; --disable-vt --disable-libompitrace
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are the SW level:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rpm -qa |grep ofed
</span><br>
<span class="quotelev1">&gt; mlnxofed-docs-2.3-0.0.9.noarch
</span><br>
<span class="quotelev1">&gt; ofed-scripts-2.3-OFED.2.3.0.0.9.ppc64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the OS is RedHat 7.0
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25227.php">http://www.open-mpi.org/community/lists/users/2014/09/25227.php</a>
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
<li><strong>Next message:</strong> <a href="25231.php">Ralph Castain: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt;	28	slots	(updated findings)"</a>
<li><strong>Previous message:</strong> <a href="25229.php">Lane, William: "Re: [OMPI users] Mpirun 1.5.4 problems when request &gt;	28	slots	(updated findings)"</a>
<li><strong>In reply to:</strong> <a href="25227.php">Swamy Kandadai: "[OMPI users] Open MPI 1.6.5 or 1.8.1 Please respond to swamyk@us.ibm.com"</a>
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
