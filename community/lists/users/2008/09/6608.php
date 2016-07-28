<?
$subject_val = "[OMPI users] MPI_Win_unlock error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 00:28:10 2008" -->
<!-- isoreceived="20080919042810" -->
<!-- sent="Fri, 19 Sep 2008 00:26:35 -0400" -->
<!-- isosent="20080919042635" -->
<!-- name="Robert Kubrick" -->
<!-- email="robertkubrick_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Win_unlock error" -->
<!-- id="1FB12B76-CAAA-4FBA-813A-D75048FDE050_at_gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Win_unlock error<br>
<strong>From:</strong> Robert Kubrick (<em>robertkubrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-19 00:26:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6609.php">Neeraj Chourasia: "[OMPI users] Re :Re: Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>Previous message:</strong> <a href="6607.php">Alex Wolfe: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a crash on a call to PMPI_Win_unlock(). My program runs with  
<br>
openmpi 1.2.7 on Ubuntu.
<br>
Are there any known issues in 1.2.7 with RMA window calls?
<br>
<p>Linux local 2.6.24-19-generic #1 SMP Wed Jun 18 14:43:41 UTC 2008  
<br>
i686 GNU/Linux
<br>
<p>[local:27767] *** Process received signal ***
<br>
[local:27767] Signal: Segmentation fault (11)
<br>
[local:27767] Signal code: Address not mapped (1)
<br>
[local:27767] Failing at address: 0x20
<br>
[local:27767] [ 0] [0xb7fb1440]
<br>
[local:27767] [ 1] /usr/local/openmpi-1.2.7/lib/openmpi/ 
<br>
mca_osc_pt2pt.so [0xb5e20d5f]
<br>
[local:27767] [ 2] /usr/local/openmpi-1.2.7/lib/openmpi/ 
<br>
mca_osc_pt2pt.so(ompi_osc_pt2pt_progress+0x103) [0xb5e20743]
<br>
[local:27767] [ 3] /usr/local/openmpi/lib/libopen-pal.so.0 
<br>
(opal_progress+0x6a) [0xb6b295ca]
<br>
[local:27767] [ 4] /usr/local/openmpi-1.2.7/lib/openmpi/ 
<br>
mca_osc_pt2pt.so(ompi_osc_pt2pt_passive_unlock+0xb5) [0xb5e25c75]
<br>
[local:27767] [ 5] /usr/local/openmpi-1.2.7/lib/openmpi/ 
<br>
mca_osc_pt2pt.so [0xb5e20f7c]
<br>
[local:27767] [ 6] /usr/local/openmpi-1.2.7/lib/openmpi/ 
<br>
mca_osc_pt2pt.so(ompi_osc_pt2pt_progress+0x103) [0xb5e20743]
<br>
[local:27767] [ 7] /usr/local/openmpi/lib/libopen-pal.so.0 
<br>
(opal_progress+0x6a) [0xb6b295ca]
<br>
[local:27767] [ 8] /usr/local/openmpi-1.2.7/lib/openmpi/ 
<br>
mca_osc_pt2pt.so(ompi_osc_pt2pt_module_unlock+0x2c5) [0xb5e26095]
<br>
[local:27767] [ 9] /usr/local/openmpi/lib/libmpi.so.0(PMPI_Win_unlock 
<br>
+0x11a) [0xb6c2a2aa]
<br>
[local:27767] [10] myprog(_ZNK3MPI3Win6UnlockEi+0x1b) [0x81023f7]
<br>
[local:27767] [11] myprog 
<br>
(_ZN8RMAQueueIN3NS3DST5QuoteEE13__put_elementEjRKS2_+0x94) [0x81331ac]
<br>
[local:27767] [12] myprog(_ZN8RMAQueueIN3NS3DST5QuoteEE3putERKS2_ 
<br>
+0xca) [0x8138bda]
<br>
[local:27767] [13] myprog 
<br>
(_ZN3NS6Master13_processEventERKNS_3DST5QuoteE+0x16e) [0x812b9bc]
<br>
[local:27767] [14] myprog(_ZN3NS6Master3runEv+0x836) [0x812cb9a]
<br>
[local:27767] [15] myprog(main+0xefa) [0x80f3bda]
<br>
[local:27767] [16] /lib/tls/i686/cmov/libc.so.6(__libc_start_main 
<br>
+0xe0) [0xb6887450]
<br>
[local:27767] [17] myprog(_ZN9wxAppBase8MainLoopEv+0x49) [0x80f2ae1]
<br>
[local:27767] *** End of error message ***
<br>
<p>(gdb) frame 10
<br>
#10 0x081023f7 in MPI::Win::Unlock (this=0xbfbc44d4, rank=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at /usr/local/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/ 
<br>
win_inln.h:163
<br>
163       (void) MPI_Win_unlock(rank, mpi_win);
<br>
Current language:  auto; currently c++
<br>
(gdb) print rank
<br>
$1 = 0
<br>
(gdb) print mpi_win
<br>
$2 = (MPI_Win) 0x83bf498
<br>
(gdb) print *mpi_win
<br>
$3 = {w_base = {obj_class = 0xb6c3d0e0, obj_reference_count = 1},  
<br>
w_lock = {super = {obj_class = 0xb6b50d00,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obj_reference_count = 1}, m_lock_pthread = {__data = {__lock =  
<br>
0, __count = 0, __owner = 0, __kind = 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__nusers = 0, {__spins = 0, __list = {__next = 0x0}}},  
<br>
__size = '\0' &lt;repeats 23 times&gt;, __align = 0},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m_lock_atomic = {u = {lock = 0, sparc_lock = 0 '\0', padding =  
<br>
&quot;\000\000\000&quot;}}},
<br>
&nbsp;&nbsp;&nbsp;w_name = &quot;quoteQ&quot;, '\0' &lt;repeats 57 times&gt;, w_group = 0x83a61d8,  
<br>
w_flags = 0, w_keyhash = 0x83bf538, w_f_to_c_index = 6,
<br>
&nbsp;&nbsp;&nbsp;error_handler = 0xb6c430a0, errhandler_type =  
<br>
OMPI_ERRHANDLER_TYPE_WIN, w_disp_unit = 53, w_baseptr = 0x83b2090,
<br>
&nbsp;&nbsp;&nbsp;w_size = 54272, w_mode = 131, w_osc_module = 0x83bf7b8}
<br>
(gdb)
<br>
$4 = {w_base = {obj_class = 0xb6c3d0e0, obj_reference_count = 1},  
<br>
w_lock = {super = {obj_class = 0xb6b50d00,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obj_reference_count = 1}, m_lock_pthread = {__data = {__lock =  
<br>
0, __count = 0, __owner = 0, __kind = 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__nusers = 0, {__spins = 0, __list = {__next = 0x0}}},  
<br>
__size = '\0' &lt;repeats 23 times&gt;, __align = 0},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;m_lock_atomic = {u = {lock = 0, sparc_lock = 0 '\0', padding =  
<br>
&quot;\000\000\000&quot;}}},
<br>
&nbsp;&nbsp;&nbsp;w_name = &quot;quoteQ&quot;, '\0' &lt;repeats 57 times&gt;, w_group = 0x83a61d8,  
<br>
w_flags = 0, w_keyhash = 0x83bf538, w_f_to_c_index = 6,
<br>
&nbsp;&nbsp;&nbsp;error_handler = 0xb6c430a0, errhandler_type =  
<br>
OMPI_ERRHANDLER_TYPE_WIN, w_disp_unit = 53, w_baseptr = 0x83b2090,
<br>
&nbsp;&nbsp;&nbsp;w_size = 54272, w_mode = 131, w_osc_module = 0x83bf7b8}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6609.php">Neeraj Chourasia: "[OMPI users] Re :Re: Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>Previous message:</strong> <a href="6607.php">Alex Wolfe: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
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
