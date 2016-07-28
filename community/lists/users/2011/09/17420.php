<?
$subject_val = "[OMPI users] Segfault on any MPI communication on head node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 17:27:32 2011" -->
<!-- isoreceived="20110923212732" -->
<!-- sent="Fri, 23 Sep 2011 21:27:26 +0000" -->
<!-- isosent="20110923212726" -->
<!-- name="Vassenkov, Phillip" -->
<!-- email="Phillip.Vassenkov_at_[hidden]" -->
<!-- subject="[OMPI users] Segfault on any MPI communication on head node" -->
<!-- id="DB6A3A9C051AE04BA39490DBF594B04268A167ED_at_apatlisdmbx02" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Segfault on any MPI communication on head node<br>
<strong>From:</strong> Vassenkov, Phillip (<em>Phillip.Vassenkov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-23 17:27:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17421.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17419.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant with openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17421.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Reply:</strong> <a href="17421.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey all,
<br>
I've been racking my brains over this for several days and was hoping anyone could enlighten me. I'll describe only the relevant parts of the network/computer systems. There is one head node and a multitude of regular nodes. The regular nodes are all identical to each other. If I run an mpi program from one of the regular nodes to any other regular nodes, everything works. If I include the head node in the hosts file, I get segfaults which I'll paste below along with sample code. The machines are all networked via infiniband and Ethernet. The issue only arises when mpi communication occurs. By this I mean, MPi_Init might succeed but the segfault always occurs on MPI_Barrier or MPI_send/recv. I found a work around by disabling the openib btl and enforcing that communications go over infiniband(if I don't force infiniband, it'll go over Ethernet). This command works when the head node is included in the hosts file:
<br>
mpirun --hostfile hostfile --mca btl ^openib --mca btl_tcp_if_include ib0  -np 2 ./b.out
<br>
<p>Sample Code:
<br>
#include &quot;mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int rank, nprocs;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char* name[20];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int maxlen = 20;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;nprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gethostname(name,maxlen);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello, world.  I am %d of %d and host %s \n&quot;, rank, nprocs,name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
<p>}
<br>
<p>Segfault:
<br>
[pastec:19917] *** Process received signal ***
<br>
[pastec:19917] Signal: Segmentation fault (11)
<br>
[pastec:19917] Signal code: Address not mapped (1)
<br>
[pastec:19917] Failing at address: 0x8
<br>
[pastec:19917] [ 0] /lib64/libpthread.so.0() [0x34a880eeb0]
<br>
[pastec:19917] [ 1] /usr/lib64/libmthca-rdmav2.so(+0x36aa) [0x7eff6430b6aa]
<br>
[pastec:19917] [ 2] /usr/lib64/openmpi/lib/openmpi/mca_btl_openib.so(+0x133c9) [0x7eff66a163c9]
<br>
[pastec:19917] [ 3] /usr/lib64/openmpi/lib/openmpi/mca_btl_openib.so(+0x1eb70) [0x7eff66a21b70]
<br>
[pastec:19917] [ 4] /usr/lib64/openmpi/lib/openmpi/mca_btl_openib.so(+0x1ec89) [0x7eff66a21c89]
<br>
[pastec:19917] [ 5] /usr/lib64/openmpi/lib/openmpi/mca_btl_openib.so(+0x1403d) [0x7eff66a1703d]
<br>
[pastec:19917] [ 6] /usr/lib64/openmpi/lib/openmpi/mca_pml_ob1.so(+0x120e6) [0x7eff676670e6]
<br>
[pastec:19917] [ 7] /usr/lib64/openmpi/lib/openmpi/mca_pml_ob1.so(+0x6273) [0x7eff6765b273]
<br>
[pastec:19917] [ 8] /usr/lib64/openmpi/lib/openmpi/mca_coll_tuned.so(+0x1b2f) [0x7eff65539b2f]
<br>
[pastec:19917] [ 9] /usr/lib64/openmpi/lib/openmpi/mca_coll_tuned.so(+0xa5cf) [0x7eff655425cf]
<br>
[pastec:19917] [10] /usr/lib64/openmpi/lib/libmpi.so.0(MPI_Barrier+0x9e) [0x3a54c4c94e]
<br>
[pastec:19917] [11] ./b.out(main+0x6e) [0x400a42]
<br>
[pastec:19917] [12] /lib64/libc.so.6(__libc_start_main+0xfd) [0x34a841ee5d]
<br>
[pastec:19917] [13] ./b.out() [0x400919]
<br>
[pastec:19917] *** End of error message ***
<br>
[pastec.gtri.gatech.edu:19913] [[18526,0],0]-[[18526,1],1] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 19917 on node pastec.gtri.gatech.edu exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17420/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17421.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17419.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant with openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17421.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Reply:</strong> <a href="17421.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
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
