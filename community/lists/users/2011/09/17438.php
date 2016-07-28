<?
$subject_val = "Re: [OMPI users] Segfault on any MPI communication on head node";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 26 17:09:57 2011" -->
<!-- isoreceived="20110926210957" -->
<!-- sent="Mon, 26 Sep 2011 17:09:51 -0400" -->
<!-- isosent="20110926210951" -->
<!-- name="Phillip Vassenkov" -->
<!-- email="phillip.vassenkov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault on any MPI communication on head node" -->
<!-- id="4E80EA1F.4050501_at_gtri.gatech.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="7EEFE945-EA80-4779-AD88-EC8672475EA9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfault on any MPI communication on head node<br>
<strong>From:</strong> Phillip Vassenkov (<em>phillip.vassenkov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-26 17:09:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17439.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<li><strong>Previous message:</strong> <a href="17437.php">Rocky Dunlap: "[OMPI users] VampirTrace integration with VT_GNU_NMFILE environment variable"</a>
<li><strong>In reply to:</strong> <a href="17421.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17442.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Reply:</strong> <a href="17442.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep, Fedora Core 14 and OpenMPI 1.4.3
<br>
<p>On 9/24/11 7:02 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Are you running the same OS version and Open MPI version between the head node and regular nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 23, 2011, at 5:27 PM, Vassenkov, Phillip wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hey all,
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;ve been racking my brains over this for several days and was hoping anyone could enlighten me. I&#146;ll describe only the relevant parts of the network/computer systems. There is one head node and a multitude of regular nodes. The regular nodes are all identical to each other. If I run an mpi program from one of the regular nodes to any other regular nodes, everything works. If I include the head node in the hosts file, I get segfaults which I&#146;ll paste below along with sample code. The machines are all networked via infiniband and Ethernet. The issue only arises when mpi communication occurs. By this I mean, MPi_Init might succeed but the segfault always occurs on MPI_Barrier or MPI_send/recv. I found a work around by disabling the openib btl and enforcing that communications go over infiniband(if I don&#146;t force infiniband, it&#146;ll go over Ethernet). This command works when the head node is included in the hosts file:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --hostfile hostfile --mca btl ^openib --mca btl_tcp_if_include ib0  -np 2 ./b.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sample Code:
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include&lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     int rank, nprocs;
</span><br>
<span class="quotelev2">&gt;&gt;      char* name[20];
</span><br>
<span class="quotelev2">&gt;&gt;      int maxlen = 20;
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Comm_size(MPI_COMM_WORLD,&amp;nprocs);
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;      gethostname(name,maxlen);
</span><br>
<span class="quotelev2">&gt;&gt;      printf(&quot;Hello, world.  I am %d of %d and host %s \n&quot;, rank, nprocs,name);
</span><br>
<span class="quotelev2">&gt;&gt;      fflush(stdout);
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;      return 0;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Segfault:
</span><br>
<span class="quotelev2">&gt;&gt; [pastec:19917] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [pastec:19917] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [pastec:19917] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [pastec:19917] Failing at address: 0x8
</span><br>
<span class="quotelev2">&gt;&gt; [pastec:19917] [ 0] /lib64/libpthread.so.0() [0x34a880eeb0]
</span><br>
<span class="quotelev2">&gt;&gt; [pastec:19917] [ 1] /usr/lib64/libmthca-rdmav2.so(+0x36aa) [0x7eff6430b6aa]
</span><br>
<span class="quotelev2">&gt;&gt; [pastec:19917] [ 2] /usr/lib64/openmpi/lib/openmpi/mca_btl_openib.so(+0x133c9) [0x7eff66a163c9]
</span><br>
<span class="quotelev2">&gt;&gt; [pastec:19917] [ 3] /usr/lib64/openmpi/lib/openmpi/mca_btl_openib.so(+0x1eb70) [0x7eff66a21b70]
</span><br>
<span class="quotelev2">&gt;&gt; [pastec:19917] [ 4] /usr/lib64/openmpi/lib/openmpi/mca_btl_openib.so(+0x1ec89) [0x7eff66a21c89]
</span><br>
<span class="quotelev2">&gt;&gt; [pastec:19917] [ 5] /usr/lib64/openmpi/lib/openmpi/mca_btl_openib.so(+0x1403d) [0x7eff66a1703d]
</span><br>
<span class="quotelev2">&gt;&gt; [pastec:19917] [ 6] /usr/lib64/openmpi/lib/openmpi/mca_pml_ob1.so(+0x120e6) [0x7eff676670e6]
</span><br>
<span class="quotelev2">&gt;&gt; [pastec:19917] [ 7] /usr/lib64/openmpi/lib/openmpi/mca_pml_ob1.so(+0x6273) [0x7eff6765b273]
</span><br>
<span class="quotelev2">&gt;&gt; [pastec:19917] [ 8] /usr/lib64/openmpi/lib/openmpi/mca_coll_tuned.so(+0x1b2f) [0x7eff65539b2f]
</span><br>
<span class="quotelev2">&gt;&gt; [pastec:19917] [ 9] /usr/lib64/openmpi/lib/openmpi/mca_coll_tuned.so(+0xa5cf) [0x7eff655425cf]
</span><br>
<span class="quotelev2">&gt;&gt; [pastec:19917] [10] /usr/lib64/openmpi/lib/libmpi.so.0(MPI_Barrier+0x9e) [0x3a54c4c94e]
</span><br>
<span class="quotelev2">&gt;&gt; [pastec:19917] [11] ./b.out(main+0x6e) [0x400a42]
</span><br>
<span class="quotelev2">&gt;&gt; [pastec:19917] [12] /lib64/libc.so.6(__libc_start_main+0xfd) [0x34a841ee5d]
</span><br>
<span class="quotelev2">&gt;&gt; [pastec:19917] [13] ./b.out() [0x400919]
</span><br>
<span class="quotelev2">&gt;&gt; [pastec:19917] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; [pastec.gtri.gatech.edu:19913] [[18526,0],0]-[[18526,1],1] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 1 with PID 19917 on node pastec.gtri.gatech.edu exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17439.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Trouble compiling 1.4.3 with PGI 10.9 compilers"</a>
<li><strong>Previous message:</strong> <a href="17437.php">Rocky Dunlap: "[OMPI users] VampirTrace integration with VT_GNU_NMFILE environment variable"</a>
<li><strong>In reply to:</strong> <a href="17421.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17442.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Reply:</strong> <a href="17442.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
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
