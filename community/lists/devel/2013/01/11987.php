<?
$subject_val = "[OMPI devel] openib unloaded before last mem dereg";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 13:19:54 2013" -->
<!-- isoreceived="20130125181954" -->
<!-- sent="Fri, 25 Jan 2013 12:19:57 -0600" -->
<!-- isosent="20130125181957" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="[OMPI devel] openib unloaded before last mem dereg" -->
<!-- id="5102CCCD.4090506_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] openib unloaded before last mem dereg<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-25 13:19:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11988.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="11986.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12018.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Reply:</strong> <a href="12018.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm tracking an issue I see in openmpi-1.6.3.  Running this command on 
<br>
my chelsio iwarp/rdma setup causes a seg fault every time:
<br>
<p>/usr/mpi/gcc/openmpi-1.6.3-dbg/bin/mpirun --np 2 --host hpc-hn1,hpc-cn2 
<br>
--mca btl openib,sm,self --mca btl_openib_ipaddr_include 
<br>
&quot;192.168.170.0/24&quot; /usr/mpi/gcc/openmpi-1.6.3/tests/IMB-3.2/IMB-MPI1 
<br>
pingpong
<br>
<p>The segfault is during finalization, and I've debugged this to the point 
<br>
were I see a call to dereg_mem() after the openib blt is unloaded via 
<br>
dlclose().  dereg_mem() dereferences a function pointer to call the 
<br>
btl-specific dereg function, in this case it is openib_dereg_mr().  
<br>
However, since that btl has already been unloaded, the deref causes a 
<br>
seg fault.  Happens every time with the above mpi job.
<br>
<p>Now, I tried this same experiment with openmpi-1.7rc6 and I don't see 
<br>
the seg fault, and I don't see a call to dereg_mem() after the openib 
<br>
btl is unloaded.  That's all well good. :)  But I'd like to get this fix 
<br>
pushed into 1.6 since that is the current stable release.
<br>
<p>Question:  Can someone point me to the fix in 1.7?
<br>
<p>Thanks,
<br>
<p>Steve.
<br>
<p><p><p>The gory details:
<br>
<p>Program terminated with signal 11, Segmentation fault.
<br>
#0  0x000000343140f807 in ?? () from /lib64/libgcc_s.so.1
<br>
Missing separate debuginfos, use: debuginfo-install glibc-2.12-1.7.el6.x86_64
<br>
li                                                  bcxgb4-2.3.0.0-1.el6.x86_64
<br>
libgcc-4.4.4-13.el6.x86_64
<br>
(gdb) bt
<br>
#0  0x000000343140f807 in ?? () from /lib64/libgcc_s.so.1
<br>
#1  0x00000034314100b9 in _Unwind_Backtrace () from /lib64/libgcc_s.so.1
<br>
#2  0x000000342e4f76ee in backtrace () from /lib64/libc.so.6
<br>
#3  0x00007f304d2233ce in opal_backtrace_buffer (message_out=0x7fff4364a0f0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;len_out=0x7fff4364a0fc) at backtrace_execinfo.c:57
<br>
#4  0x00007f304d2757ac in show_stackframe (signo=&lt;value optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;info=&lt;value optimized out&gt;, p=&lt;value optimized out&gt;) at stacktrace.c:347
<br>
#5  &lt;signal handler called&gt;
<br>
#6  0x00007f304a1c9240 in ?? ()
<br>
#7  0x00007f304b48c315 in dereg_mem (mpool=0x233ade0) at mpool_rdma_module.c:87
<br>
#8  do_unregistration_gc (mpool=0x233ade0) at mpool_rdma_module.c:140
<br>
#9  0x00007f304b48c6cf in mca_mpool_rdma_finalize (mpool=0x233ade0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpool_rdma_module.c:500
<br>
#10 0x00007f304d1b4e30 in mca_mpool_base_close () at base/mpool_base_close.c:56
<br>
#11 0x00007f304d169705 in ompi_mpi_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at runtime/ompi_mpi_finalize.c:402
<br>
#12 0x0000000000403802 in main ()
<br>
(gdb)
<br>
<p><p>Here's a snipit of stdout with debug printfs in vm_open(), vm_close(), 
<br>
openib_dereg_mr(), and dereg_mr() showing the btl getting unloaded 
<br>
before the last dereg call:
<br>
<p>dlopen /usr/mpi/gcc/openmpi-1.6.3-dbg/lib/openmpi/mca_btl_openib.so 
<br>
0x2465b60
<br>
<p>...&lt;snip&gt;...
<br>
<p># All processes entering MPI_Finalize
<br>
<p>dereg_mem 0x2487f80
<br>
openib_dereg_mr 0x24b3d80
<br>
dlclose 0x2465b60
<br>
dlclose 0x2456030
<br>
dlclose 0x2456550
<br>
dlclose 0x2467cd0
<br>
dlclose 0x24d90e0
<br>
dlclose 0x24d7740
<br>
dlclose 0x2410680
<br>
dlclose 0x2410ef0
<br>
dlclose 0x2411610
<br>
dlclose 0x248b1d0
<br>
dlclose 0x248bf00
<br>
dlclose 0x248c8f0
<br>
dereg_mem 0x2487f80
<br>
[hpc-hn1:05570] *** Process received signal ***
<br>
[hpc-hn1:05570] Signal: Segmentation fault (11)
<br>
[hpc-hn1:05570] Signal code: Address not mapped (1)
<br>
[hpc-hn1:05570] Failing at address: 0x7f335e5f9280
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11988.php">Paul Hargrove: "Re: [OMPI devel] Open MPI (not quite) on Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="11986.php">Leif Lindholm: "Re: [OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12018.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Reply:</strong> <a href="12018.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
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
