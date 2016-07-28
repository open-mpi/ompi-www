<?
$subject_val = "Re: [OMPI users] intermittent segfaults with openib on ring_c.c";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  3 23:54:13 2014" -->
<!-- isoreceived="20140604035413" -->
<!-- sent="Tue, 3 Jun 2014 20:54:09 -0700" -->
<!-- isosent="20140604035409" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] intermittent segfaults with openib on ring_c.c" -->
<!-- id="9F46BDAD-559A-4826-A326-EF460C57E071_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C86C7F6037A63C44BCCD0D77E9D59BFE159EC1051B_at_SWEC9985.w-intra.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] intermittent segfaults with openib on ring_c.c<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-03 23:54:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24530.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Previous message:</strong> <a href="24528.php">Ralph Castain: "Re: [OMPI users] can't preload binary to remote machine"</a>
<li><strong>In reply to:</strong> <a href="24527.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24530.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Reply:</strong> <a href="24530.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Reply:</strong> <a href="24531.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds odd - can you configure OMPI --enable-debug and run it again? If it fails and you can get a core dump, could you tell us the line number where it is failing?
<br>
<p><p>On Jun 3, 2014, at 9:58 AM, Fischer, Greg A. &lt;fischega_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Apologies &#150; I forgot to add some of the information requested by the FAQ:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 1.       OpenFabrics is provided by the Linux distribution:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [binf102:fischega] $ rpm -qa | grep ofed
</span><br>
<span class="quotelev1">&gt; ofed-kmp-default-1.5.4.1_3.0.76_0.11-0.11.5
</span><br>
<span class="quotelev1">&gt; ofed-1.5.4.1-0.11.5
</span><br>
<span class="quotelev1">&gt; ofed-doc-1.5.4.1-0.11.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2.       Linux Distro / Kernel:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [binf102:fischega] $ cat /etc/SuSE-release
</span><br>
<span class="quotelev1">&gt; SUSE Linux Enterprise Server 11 (x86_64)
</span><br>
<span class="quotelev1">&gt; VERSION = 11
</span><br>
<span class="quotelev1">&gt; PATCHLEVEL = 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [binf102:fischega] $ uname &#150;a
</span><br>
<span class="quotelev1">&gt; Linux casl102 3.0.76-0.11-default #1 SMP Fri Jun 14 08:21:43 UTC 2013 (ccab990) x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3.       Not sure which subnet manger is being used &#150; I think OpenSM, but I&#146;ll need to check with my administrators.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4.       Output of ibv_devinfo is attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 5.       Ifconfig output is attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 6.       Ulimit &#150;l output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [binf102:fischega] $ ulimit &#150;l
</span><br>
<span class="quotelev1">&gt; unlimited
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Fischer, Greg A. 
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 03, 2014 12:38 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc: Fischer, Greg A.
</span><br>
<span class="quotelev1">&gt; Subject: intermittent segfaults with openib on ring_c.c
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hello openmpi-users,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#146;m running into a perplexing problem on a new system, whereby I&#146;m experiencing intermittent segmentation faults when I run the ring_c.c example and use the openib BTL. See an example below. Approximately 50% of the time it provides the expected output, but the other 50% of the time, it segfaults. LD_LIBRARY_PATH is set correctly, and the version of &#147;mpirun&#148; being invoked is correct. The output of ompi_info &#150;all is attached.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; One potential problem may be that the system that OpenMPI was compiled on is mostly the same as the system where it is being executed, but there are some differences in the installed packages. I&#146;ve checked the critical ones (libibverbs, librdmacm, libmlx4-rdmav2, etc.), and they appear to be the same.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Can anyone suggest how I might start tracking this problem down?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [binf102:fischega] $ mpirun -np 2 --mca btl openib,self ring_c
</span><br>
<span class="quotelev1">&gt; [binf102:31268] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [binf102:31268] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [binf102:31268] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [binf102:31268] Failing at address: 0x10
</span><br>
<span class="quotelev1">&gt; [binf102:31268] [ 0] /lib64/libpthread.so.0(+0xf7c0) [0x2b42213f57c0]
</span><br>
<span class="quotelev1">&gt; [binf102:31268] [ 1] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/libmpi.so.1(opal_memory_ptmalloc2_int_malloc+0x4b3) [0x2b42203fd7e3]
</span><br>
<span class="quotelev1">&gt; [binf102:31268] [ 2] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/libmpi.so.1(opal_memory_ptmalloc2_int_memalign+0x8b) [0x2b4220400d3b]
</span><br>
<span class="quotelev1">&gt; [binf102:31268] [ 3] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/libmpi.so.1(opal_memory_ptmalloc2_memalign+0x6f) [0x2b42204008ef]
</span><br>
<span class="quotelev1">&gt; [binf102:31268] [ 4] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/libmpi.so.1(+0x117876) [0x2b4220400876]
</span><br>
<span class="quotelev1">&gt; [binf102:31268] [ 5] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/openmpi/mca_btl_openib.so(+0xc34c) [0x2b422572334c]
</span><br>
<span class="quotelev1">&gt; [binf102:31268] [ 6] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/libmpi.so.1(opal_class_initialize+0xaa) [0x2b422041d64a]
</span><br>
<span class="quotelev1">&gt; [binf102:31268] [ 7] /xxxx/yyyy_ib/intel-12.1.0.233/toolset/openmpi-1.6.5/lib/openmpi/mca_btl_openib.so(+0x1f12f) [0x2b422573612f]
</span><br>
<span class="quotelev1">&gt; [binf102:31268] [ 8] /lib64/libpthread.so.0(+0x77b6) [0x2b42213ed7b6]
</span><br>
<span class="quotelev1">&gt; [binf102:31268] [ 9] /lib64/libc.so.6(clone+0x6d) [0x2b42216dcd6d]
</span><br>
<span class="quotelev1">&gt; [binf102:31268] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 31268 on node xxxx102 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &lt;ibv_devinfo.txt&gt;&lt;ifconfig.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24529/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24530.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Previous message:</strong> <a href="24528.php">Ralph Castain: "Re: [OMPI users] can't preload binary to remote machine"</a>
<li><strong>In reply to:</strong> <a href="24527.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24530.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Reply:</strong> <a href="24530.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Reply:</strong> <a href="24531.php">Fischer, Greg A.: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
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
