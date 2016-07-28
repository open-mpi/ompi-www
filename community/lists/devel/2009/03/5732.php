<?
$subject_val = "[OMPI devel] Seg fault running OpenMPI-1.3.1rc4";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 29 14:00:48 2009" -->
<!-- isoreceived="20090329180048" -->
<!-- sent="Sun, 29 Mar 2009 13:00:41 -0500" -->
<!-- isosent="20090329180041" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="[OMPI devel] Seg fault running OpenMPI-1.3.1rc4" -->
<!-- id="49CFB749.50202_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> [OMPI devel] Seg fault running OpenMPI-1.3.1rc4<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-29 14:00:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5733.php">Steve Wise: "Re: [OMPI devel] [ewg] Seg fault running OpenMPI-1.3.1rc4"</a>
<li><strong>Previous message:</strong> <a href="5731.php">Thomas Ropars: "[OMPI devel] segmentation fault when trying to connect processes from different jobs (r20888 of the trunk)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5733.php">Steve Wise: "Re: [OMPI devel] [ewg] Seg fault running OpenMPI-1.3.1rc4"</a>
<li><strong>Reply:</strong> <a href="5733.php">Steve Wise: "Re: [OMPI devel] [ewg] Seg fault running OpenMPI-1.3.1rc4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Jeff,
<br>
<p>Have you seen this?  I'm hitting this regularly running on ofed-1.4.1-rc2.
<br>
<p>Test:
<br>
[ompi_at_vic12 ~]$ cat doit-ompi
<br>
#!/bin/sh
<br>
while : ; do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 16 --host vic12-10g,vic20-10g,vic9-10g,vic21-10g 
<br>
--mca btl openib,self,sm  --mca btl_openib_max_btls 1 
<br>
/usr/mpi/gcc/openmpi-1.3.1rc4/tests/IMB-3.1/IMB-MPI1 -npmin 16  bcast 
<br>
scatter sendrecv exchange &lt;/dev/null
<br>
done
<br>
<p><p>Seg Fault output:
<br>
<p>[vic21:04047] *** Process received signal ***
<br>
[vic21:04047] Signal: Segmentation fault (11)
<br>
[vic21:04047] Signal code: Address not mapped (1)
<br>
[vic21:04047] Failing at address: 0x18
<br>
[vic21:04047] [ 0] /lib64/libpthread.so.0 [0x3dde20e4c0]
<br>
[vic21:04047] [ 1] 
<br>
/usr/mpi/gcc/openmpi-1.3.1rc4/lib64/openmpi/mca_btl_openib.so 
<br>
[0x2b911bc33800]
<br>
[vic21:04047] [ 2] 
<br>
/usr/mpi/gcc/openmpi-1.3.1rc4/lib64/openmpi/mca_btl_openib.so 
<br>
[0x2b911bc38c2d]
<br>
[vic21:04047] [ 3] 
<br>
/usr/mpi/gcc/openmpi-1.3.1rc4/lib64/openmpi/mca_btl_openib.so 
<br>
[0x2b911bc33fcb]
<br>
[vic21:04047] [ 4] 
<br>
/usr/mpi/gcc/openmpi-1.3.1rc4/lib64/openmpi/mca_btl_openib.so 
<br>
[0x2b911bc22af8]
<br>
[vic21:04047] [ 5] 
<br>
/usr/mpi/gcc/openmpi-1.3.1rc4/lib64/libopen-pal.so.0(mca_base_components_close+0x83) 
<br>
[0x2b911933da33]
<br>
[vic21:04047] [ 6] 
<br>
/usr/mpi/gcc/openmpi-1.3.1rc4/lib64/libmpi.so.0(mca_btl_base_close+0xe0) 
<br>
[0x2b9118ea3fb0]
<br>
[vic21:04047] [ 7] 
<br>
/usr/mpi/gcc/openmpi-1.3.1rc4/lib64/openmpi/mca_bml_r2.so [0x2b911ba1938f]
<br>
[vic21:04047] [ 8] 
<br>
/usr/mpi/gcc/openmpi-1.3.1rc4/lib64/openmpi/mca_pml_ob1.so [0x2b911b601cde]
<br>
[vic21:04047] [ 9] /usr/mpi/gcc/openmpi-1.3.1rc4/lib64/libmpi.so.0 
<br>
[0x2b9118e7241b]
<br>
[vic21:04047] [10] 
<br>
/usr/mpi/gcc/openmpi-1.3.1rc4/tests/IMB-3.1/IMB-MPI1(main+0x178) [0x403498]
<br>
[vic21:04047] [11] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3ddd61d974]
<br>
[vic21:04047] [12] /usr/mpi/gcc/openmpi-1.3.1rc4/tests/IMB-3.1/IMB-MPI1 
<br>
[0x403269]
<br>
[vic21:04047] *** End of error message ***
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5733.php">Steve Wise: "Re: [OMPI devel] [ewg] Seg fault running OpenMPI-1.3.1rc4"</a>
<li><strong>Previous message:</strong> <a href="5731.php">Thomas Ropars: "[OMPI devel] segmentation fault when trying to connect processes from different jobs (r20888 of the trunk)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5733.php">Steve Wise: "Re: [OMPI devel] [ewg] Seg fault running OpenMPI-1.3.1rc4"</a>
<li><strong>Reply:</strong> <a href="5733.php">Steve Wise: "Re: [OMPI devel] [ewg] Seg fault running OpenMPI-1.3.1rc4"</a>
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
