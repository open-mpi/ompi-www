<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 21 11:45:55 2007" -->
<!-- isoreceived="20070321154555" -->
<!-- sent="Wed, 21 Mar 2007 16:45:32 +0100" -->
<!-- isosent="20070321154532" -->
<!-- name="Nicolas Niclausse" -->
<!-- email="Nicolas.Niclausse_at_[hidden]" -->
<!-- subject="[OMPI users] segfault with netpipe &amp;amp; ompi 1.2 + MX (32bit only)" -->
<!-- id="4601531C.6010508_at_sophia.inria.fr" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Nicolas Niclausse (<em>Nicolas.Niclausse_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-21 11:45:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2858.php">Sam Adams: "[OMPI users] threading"</a>
<li><strong>Previous message:</strong> <a href="2856.php">Weikuan Yu: "[OMPI users] HotI 2007 Call for Papers -- 4th call. Deadline March 31st is approaching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2899.php">Nicolas Niclausse: "Re: [OMPI users] segfault with netpipe &amp; ompi 1.2 + MX (32bit only)"</a>
<li><strong>Reply:</strong> <a href="2899.php">Nicolas Niclausse: "Re: [OMPI users] segfault with netpipe &amp; ompi 1.2 + MX (32bit only)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hello,
<br>
<p>I'm trying to use netpipe with openmpi on my system (rhel 3, dual opteron,
<br>
myrinet 2G with MX drivers).
<br>
<p>Everything is fine when i use a 64bit binary, but it segfaults when i use a
<br>
32 bit binary :
<br>
<p>nniclausse# mpirun  -machinefile ./machines  ./NPmpi
<br>
[helios38:15657] *** Process received signal ***
<br>
[helios38:15657] Signal: Segmentation fault (11)
<br>
[helios38:15657] Signal code: Address not mapped (1)
<br>
[helios38:15657] Failing at address: 0x215b
<br>
[helios38:15657] [ 0] /lib/libpthread.so.0 [0x40508688]
<br>
[helios38:15657] [ 1] /lib/libc.so.6 [0x40575160]
<br>
[helios38:15657] [ 2]
<br>
/opt/openmpi/1.2/lib/openmpi/mca_mtl_mx.so(ompi_mtl_mx_module_init+0x124)
<br>
[0x4084a0f4]
<br>
[helios38:15657] [ 3] /opt/openmpi/1.2/lib/openmpi/mca_mtl_mx.so [0x4084e108]
<br>
[helios38:15657] [ 4]
<br>
/opt/openmpi/1.2/lib/libmpi.so.0(ompi_mtl_base_select+0xe1) [0x402ddd11]
<br>
[helios38:15657] [ 5] /opt/openmpi/1.2/lib/openmpi/mca_pml_cm.so [0x407fd83f]
<br>
[helios38:15657] [ 6]
<br>
/opt/openmpi/1.2/lib/libmpi.so.0(mca_pml_base_select+0x209) [0x402ef569]
<br>
[helios38:15657] [ 7] /opt/openmpi/1.2/lib/libmpi.so.0(ompi_mpi_init+0x3cf)
<br>
[0x4006beef]
<br>
[helios38:15657] [ 8] /opt/openmpi/1.2/lib/libmpi.so.0(MPI_Init+0x109)
<br>
[0x401cb5d9]
<br>
[helios38:15657] [ 9] ./NPmpi(Init+0x22) [0x804adb2]
<br>
[helios38:15657] [10] ./NPmpi(main+0xb3) [0x80492d3]
<br>
[helios38:15657] [11] /lib/libc.so.6(__libc_start_main+0x9e) [0x40563bd2]
<br>
[helios38:15657] [12] ./NPmpi(free+0x45) [0x8049171]
<br>
[helios38:15657] *** End of error message ***
<br>
mpirun noticed that job rank 0 with PID 15657 on node helios38 exited on
<br>
signal 11 (Segmentation fault).
<br>
1 additional process aborted (not shown)
<br>
<p>nniclausse#gdb ./NPmpi core.7834
<br>
<p>#0  mx_decompose_endpoint_addr (endpoint_addr={stuff =
<br>
{4611686018427396095, 0}},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nic_id=0x1fff, endpoint_id=0x40858490) at
<br>
../mx_decompose_endpoint_addr.c:32
<br>
32        *nic_id = x.partner-&gt;nic_id;
<br>
(gdb) bt
<br>
#0  mx_decompose_endpoint_addr (endpoint_addr={stuff =
<br>
{4611686018427396095, 0}},
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nic_id=0x1fff, endpoint_id=0x40858490) at
<br>
../mx_decompose_endpoint_addr.c:32
<br>
#1  0x4084a0f4 in ompi_mtl_mx_module_init () at mtl_mx.c:90
<br>
#2  0x4084e108 in ompi_mtl_mx_component_init (enable_progress_threads=0 '\0',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;enable_mpi_threads=0 '\0') at mtl_mx_component.c:124
<br>
#3  0x402ddd11 in ompi_mtl_base_select (enable_progress_threads=0 '\0',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;enable_mpi_threads=0 '\0') at base/mtl_base_component.c:104
<br>
#4  0x407fd83f in mca_pml_cm_component_init (priority=0xfffbb6d4,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;enable_progress_threads=0 '\0', enable_mpi_threads=0 '\0')
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at pml_cm_component.c:128
<br>
#5  0x402ef569 in mca_pml_base_select (enable_progress_threads=0 '\0',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;enable_mpi_threads=0 '\0') at base/pml_base_select.c:96
<br>
#6  0x4006beef in ompi_mpi_init (argc=1, argv=0xffffa4b4, requested=0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;provided=0xfffbb7b8) at runtime/ompi_mpi_init.c:398
<br>
#7  0x401cb5d9 in PMPI_Init (argc=0xffffa460, argv=0xffffa464) at pinit.c:70
<br>
#8  0x0804adb2 in Init ()
<br>
#9  0x080492d3 in main ()
<br>
<p>(OpenMPI is compiled with PGI 6.0 )
<br>
<p>nniclausse# /opt/mx/bin/mx_info | head
<br>
MX Version: 1.1.6
<br>
MX Build: nniclausse_at_helios38:/scratch/rpmbuild/BUILD/mx-1.1.6 Wed Mar 21
<br>
14:45:21 CET 2007
<br>
1 Myrinet board installed.
<br>
The MX driver is configured to support up to 4 instances and 1024 nodes.
<br>
===================================================================
<br>
Instance #0:  333.2 MHz LANai, 133.1 MHz PCI bus, 2 MB SRAM
<br>
<p>Any idea ?
<br>
<p><pre>
-- 
Nicolas NICLAUSSE                          Service DREAM
INRIA Sophia Antipolis                     <a href="http://www-sop.inria.fr/">http://www-sop.inria.fr/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2858.php">Sam Adams: "[OMPI users] threading"</a>
<li><strong>Previous message:</strong> <a href="2856.php">Weikuan Yu: "[OMPI users] HotI 2007 Call for Papers -- 4th call. Deadline March 31st is approaching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2899.php">Nicolas Niclausse: "Re: [OMPI users] segfault with netpipe &amp; ompi 1.2 + MX (32bit only)"</a>
<li><strong>Reply:</strong> <a href="2899.php">Nicolas Niclausse: "Re: [OMPI users] segfault with netpipe &amp; ompi 1.2 + MX (32bit only)"</a>
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
