<?
$subject_val = "Re: [OMPI devel] [ewg] Seg fault running OpenMPI-1.3.1rc4";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 29 14:03:07 2009" -->
<!-- isoreceived="20090329180307" -->
<!-- sent="Sun, 29 Mar 2009 13:03:00 -0500" -->
<!-- isosent="20090329180300" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [ewg] Seg fault running OpenMPI-1.3.1rc4" -->
<!-- id="49CFB7D4.6060901_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49CFB749.50202_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [ewg] Seg fault running OpenMPI-1.3.1rc4<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-29 14:03:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5734.php">Christian Siebert: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5732.php">Steve Wise: "[OMPI devel] Seg fault running OpenMPI-1.3.1rc4"</a>
<li><strong>In reply to:</strong> <a href="5732.php">Steve Wise: "[OMPI devel] Seg fault running OpenMPI-1.3.1rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5737.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [ewg] Seg fault running OpenMPI-1.3.1rc4"</a>
<li><strong>Reply:</strong> <a href="5737.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [ewg] Seg fault running OpenMPI-1.3.1rc4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When this happens, that node logs this type of message also in 
<br>
/var/log/messages:
<br>
<p>IMB-MPI1[8859]: segfault at 0000000000000018 rip 00002b7bfc880800 rsp 
<br>
00007fffb1021330 error 4
<br>
<p>Steve Wise wrote:
<br>
<span class="quotelev1">&gt; Hey Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you seen this?  I'm hitting this regularly running on 
</span><br>
<span class="quotelev1">&gt; ofed-1.4.1-rc2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Test:
</span><br>
<span class="quotelev1">&gt; [ompi_at_vic12 ~]$ cat doit-ompi
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; while : ; do
</span><br>
<span class="quotelev1">&gt;        mpirun -np 16 --host vic12-10g,vic20-10g,vic9-10g,vic21-10g 
</span><br>
<span class="quotelev1">&gt; --mca btl openib,self,sm  --mca btl_openib_max_btls 1 
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/tests/IMB-3.1/IMB-MPI1 -npmin 16  bcast 
</span><br>
<span class="quotelev1">&gt; scatter sendrecv exchange &lt;/dev/null
</span><br>
<span class="quotelev1">&gt; done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seg Fault output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [vic21:04047] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [vic21:04047] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [vic21:04047] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [vic21:04047] Failing at address: 0x18
</span><br>
<span class="quotelev1">&gt; [vic21:04047] [ 0] /lib64/libpthread.so.0 [0x3dde20e4c0]
</span><br>
<span class="quotelev1">&gt; [vic21:04047] [ 1] 
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/lib64/openmpi/mca_btl_openib.so 
</span><br>
<span class="quotelev1">&gt; [0x2b911bc33800]
</span><br>
<span class="quotelev1">&gt; [vic21:04047] [ 2] 
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/lib64/openmpi/mca_btl_openib.so 
</span><br>
<span class="quotelev1">&gt; [0x2b911bc38c2d]
</span><br>
<span class="quotelev1">&gt; [vic21:04047] [ 3] 
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/lib64/openmpi/mca_btl_openib.so 
</span><br>
<span class="quotelev1">&gt; [0x2b911bc33fcb]
</span><br>
<span class="quotelev1">&gt; [vic21:04047] [ 4] 
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/lib64/openmpi/mca_btl_openib.so 
</span><br>
<span class="quotelev1">&gt; [0x2b911bc22af8]
</span><br>
<span class="quotelev1">&gt; [vic21:04047] [ 5] 
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/lib64/libopen-pal.so.0(mca_base_components_close+0x83) 
</span><br>
<span class="quotelev1">&gt; [0x2b911933da33]
</span><br>
<span class="quotelev1">&gt; [vic21:04047] [ 6] 
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/lib64/libmpi.so.0(mca_btl_base_close+0xe0) 
</span><br>
<span class="quotelev1">&gt; [0x2b9118ea3fb0]
</span><br>
<span class="quotelev1">&gt; [vic21:04047] [ 7] 
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/lib64/openmpi/mca_bml_r2.so 
</span><br>
<span class="quotelev1">&gt; [0x2b911ba1938f]
</span><br>
<span class="quotelev1">&gt; [vic21:04047] [ 8] 
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/lib64/openmpi/mca_pml_ob1.so 
</span><br>
<span class="quotelev1">&gt; [0x2b911b601cde]
</span><br>
<span class="quotelev1">&gt; [vic21:04047] [ 9] /usr/mpi/gcc/openmpi-1.3.1rc4/lib64/libmpi.so.0 
</span><br>
<span class="quotelev1">&gt; [0x2b9118e7241b]
</span><br>
<span class="quotelev1">&gt; [vic21:04047] [10] 
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/tests/IMB-3.1/IMB-MPI1(main+0x178) 
</span><br>
<span class="quotelev1">&gt; [0x403498]
</span><br>
<span class="quotelev1">&gt; [vic21:04047] [11] /lib64/libc.so.6(__libc_start_main+0xf4) 
</span><br>
<span class="quotelev1">&gt; [0x3ddd61d974]
</span><br>
<span class="quotelev1">&gt; [vic21:04047] [12] 
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-1.3.1rc4/tests/IMB-3.1/IMB-MPI1 [0x403269]
</span><br>
<span class="quotelev1">&gt; [vic21:04047] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; ewg mailing list
</span><br>
<span class="quotelev1">&gt; ewg_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://lists.openfabrics.org/cgi-bin/mailman/listinfo/ewg">http://lists.openfabrics.org/cgi-bin/mailman/listinfo/ewg</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5734.php">Christian Siebert: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5732.php">Steve Wise: "[OMPI devel] Seg fault running OpenMPI-1.3.1rc4"</a>
<li><strong>In reply to:</strong> <a href="5732.php">Steve Wise: "[OMPI devel] Seg fault running OpenMPI-1.3.1rc4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5737.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [ewg] Seg fault running OpenMPI-1.3.1rc4"</a>
<li><strong>Reply:</strong> <a href="5737.php">Pavel Shamis (Pasha): "Re: [OMPI devel] [ewg] Seg fault running OpenMPI-1.3.1rc4"</a>
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
