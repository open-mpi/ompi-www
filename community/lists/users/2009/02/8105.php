<?
$subject_val = "[OMPI users] open mpi 1.3 RDMA_CM_EVENT_CONNECT_ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 09:54:23 2009" -->
<!-- isoreceived="20090219145423" -->
<!-- sent="Thu, 19 Feb 2009 20:18:51 +0530 (IST)" -->
<!-- isosent="20090219144851" -->
<!-- name="viral.mehta_at_[hidden]" -->
<!-- email="viral.mehta_at_[hidden]" -->
<!-- subject="[OMPI users] open mpi 1.3 RDMA_CM_EVENT_CONNECT_ERROR" -->
<!-- id="4086.192.168.14.9.1235054931.squirrel_at_india.einfochips.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] open mpi 1.3 RDMA_CM_EVENT_CONNECT_ERROR<br>
<strong>From:</strong> <a href="mailto:viral.mehta_at_[hidden]?Subject=Re:%20[OMPI%20users]%20open%20mpi%201.3%20RDMA_CM_EVENT_CONNECT_ERROR"><em>viral.mehta_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-02-19 09:48:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8106.php">Jeff Squyres: "Re: [OMPI users] open mpi 1.3 RDMA_CM_EVENT_CONNECT_ERROR"</a>
<li><strong>Previous message:</strong> <a href="8104.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8106.php">Jeff Squyres: "Re: [OMPI users] open mpi 1.3 RDMA_CM_EVENT_CONNECT_ERROR"</a>
<li><strong>Reply:</strong> <a href="8106.php">Jeff Squyres: "Re: [OMPI users] open mpi 1.3 RDMA_CM_EVENT_CONNECT_ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
I successfully installed OpenMPI-1.3. I am trying to run OpenMPI over iWARP.
<br>
But I am getting error
<br>
<p>RDMA_CM_EVENT_CONNECT_ERROR
<br>
<p>I tried to run with more debug messages
<br>
mpirun --mca orte_base_help_aggregate 0 -np 2 -display-map -v -host
<br>
100.168.54.49,100.168.54.50
<br>
/usr/mpi/gcc/openmpi-1.3/tests/osu_benchmarks-3.0/osu_bw
<br>
<p>And I got
<br>
[qa49:06449] *** Process received signal ***
<br>
[qa49:06449] Signal: Segmentation fault (11)
<br>
[qa49:06449] Signal code: Address not mapped (1)
<br>
[qa49:06449] Failing at address: 0x1c
<br>
[qa49:06449] [ 0] /lib64/tls/libpthread.so.0 [0x3c4d80c5b0]
<br>
[qa49:06449] [ 1] /usr/mpi/gcc/openmpi-1.3/lib64/libopen-pal.so.0 [0x2a95868604]
<br>
[qa49:06449] [ 2]
<br>
/usr/mpi/gcc/openmpi-1.3/lib64/libopen-pal.so.0(opal_show_help_vstring+0xd5)
<br>
[0x2a95867215]
<br>
[qa49:06449] [ 3]
<br>
/usr/mpi/gcc/openmpi-1.3/lib64/libopen-rte.so.0(orte_show_help+0xaf)
<br>
[0x2a9570d36f]
<br>
[qa49:06449] [ 4] /usr/mpi/gcc/openmpi-1.3/lib64/openmpi/mca_btl_openib.so
<br>
[0x2a970a8e64]
<br>
[qa49:06449] [ 5] /usr/mpi/gcc/openmpi-1.3/lib64/openmpi/mca_btl_openib.so
<br>
[0x2a970a2d0b]
<br>
[qa49:06449] [ 6] /usr/mpi/gcc/openmpi-1.3/lib64/libopen-pal.so.0 [0x2a958557b8]
<br>
[qa49:06449] [ 7]
<br>
/usr/mpi/gcc/openmpi-1.3/lib64/libopen-pal.so.0(opal_progress+0xac)
<br>
[0x2a9584a80c]
<br>
[qa49:06449] [ 8] /usr/mpi/gcc/openmpi-1.3/lib64/libmpi.so.0 [0x2a9558aa15]
<br>
[qa49:06449] [ 9] /usr/mpi/gcc/openmpi-1.3/lib64/libmpi.so.0(PMPI_Waitall+0x8a)
<br>
[0x2a955b756a]
<br>
[qa49:06449] [10]
<br>
/usr/mpi/gcc/openmpi-1.3/tests/osu_benchmarks-3.0/osu_bw(main+0x29d) [0x401135]
<br>
[qa49:06449] [11] /lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x3c4cf1c3fb]
<br>
[qa49:06449] [12] /usr/mpi/gcc/openmpi-1.3/tests/osu_benchmarks-3.0/osu_bw
<br>
[0x400e0a]
<br>
[qa49:06449] *** End of error message ***
<br>
<p>Am I doing something wrong ??
<br>
<p>Surprisingly,
<br>
mpirun --mca orte_base_help_aggregate 0 -np 2 -display-map -v -host
<br>
100.168.54.50,100.168.54.49
<br>
/usr/mpi/gcc/openmpi-1.3/tests/osu_benchmarks-3.0/osu_bw
<br>
is working fine (notice just host arguments are swapped)
<br>
<p><p>Thanks,
<br>
Viral
<br>
<p><pre>
-- 
_____________________________________________________________________
Disclaimer: This e-mail message and all attachments transmitted with it
are intended solely for the use of the addressee and may contain legally
privileged and confidential information. If the reader of this message
is not the intended recipient, or an employee or agent responsible for
delivering this message to the intended recipient, you are hereby
notified that any dissemination, distribution, copying, or other use of
this message or its attachments is strictly prohibited. If you have
received this message in error, please notify the sender immediately by
replying to this message and please delete it from your computer. Any
views expressed in this message are those of the individual sender
unless otherwise stated.Company has taken enough precautions to prevent
the spread of viruses. However the company accepts no liability for any
damage caused by any virus transmitted by this email.
__________________________________________________________________________
 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8106.php">Jeff Squyres: "Re: [OMPI users] open mpi 1.3 RDMA_CM_EVENT_CONNECT_ERROR"</a>
<li><strong>Previous message:</strong> <a href="8104.php">Jeff Squyres: "Re: [OMPI users] ptrdiff_t undefined error on intel 64bit machine with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8106.php">Jeff Squyres: "Re: [OMPI users] open mpi 1.3 RDMA_CM_EVENT_CONNECT_ERROR"</a>
<li><strong>Reply:</strong> <a href="8106.php">Jeff Squyres: "Re: [OMPI users] open mpi 1.3 RDMA_CM_EVENT_CONNECT_ERROR"</a>
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
