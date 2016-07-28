<?
$subject_val = "Re: [OMPI users] Segfault on any MPI communication on head node";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 24 07:02:34 2011" -->
<!-- isoreceived="20110924110234" -->
<!-- sent="Sat, 24 Sep 2011 07:02:26 -0400" -->
<!-- isosent="20110924110226" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault on any MPI communication on head node" -->
<!-- id="7EEFE945-EA80-4779-AD88-EC8672475EA9_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="DB6A3A9C051AE04BA39490DBF594B04268A167ED_at_apatlisdmbx02" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-24 07:02:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17422.php">Jeff Squyres: "Re: [OMPI users] PATH settings"</a>
<li><strong>Previous message:</strong> <a href="17420.php">Vassenkov, Phillip: "[OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>In reply to:</strong> <a href="17420.php">Vassenkov, Phillip: "[OMPI users] Segfault on any MPI communication on head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17438.php">Phillip Vassenkov: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Reply:</strong> <a href="17438.php">Phillip Vassenkov: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you running the same OS version and Open MPI version between the head node and regular nodes?
<br>
<p>On Sep 23, 2011, at 5:27 PM, Vassenkov, Phillip wrote:
<br>
<p><span class="quotelev1">&gt; Hey all,
</span><br>
<span class="quotelev1">&gt; I&#146;ve been racking my brains over this for several days and was hoping anyone could enlighten me. I&#146;ll describe only the relevant parts of the network/computer systems. There is one head node and a multitude of regular nodes. The regular nodes are all identical to each other. If I run an mpi program from one of the regular nodes to any other regular nodes, everything works. If I include the head node in the hosts file, I get segfaults which I&#146;ll paste below along with sample code. The machines are all networked via infiniband and Ethernet. The issue only arises when mpi communication occurs. By this I mean, MPi_Init might succeed but the segfault always occurs on MPI_Barrier or MPI_send/recv. I found a work around by disabling the openib btl and enforcing that communications go over infiniband(if I don&#146;t force infiniband, it&#146;ll go over Ethernet). This command works when the head node is included in the hosts file:
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile hostfile --mca btl ^openib --mca btl_tcp_if_include ib0  -np 2 ./b.out
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Sample Code:
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int rank, nprocs;
</span><br>
<span class="quotelev1">&gt;     char* name[20];
</span><br>
<span class="quotelev1">&gt;     int maxlen = 20;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD,&amp;nprocs);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;     MPI_Barrier(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     gethostname(name,maxlen);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;Hello, world.  I am %d of %d and host %s \n&quot;, rank, nprocs,name);
</span><br>
<span class="quotelev1">&gt;     fflush(stdout);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Segfault:
</span><br>
<span class="quotelev1">&gt; [pastec:19917] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [pastec:19917] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [pastec:19917] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [pastec:19917] Failing at address: 0x8
</span><br>
<span class="quotelev1">&gt; [pastec:19917] [ 0] /lib64/libpthread.so.0() [0x34a880eeb0]
</span><br>
<span class="quotelev1">&gt; [pastec:19917] [ 1] /usr/lib64/libmthca-rdmav2.so(+0x36aa) [0x7eff6430b6aa]
</span><br>
<span class="quotelev1">&gt; [pastec:19917] [ 2] /usr/lib64/openmpi/lib/openmpi/mca_btl_openib.so(+0x133c9) [0x7eff66a163c9]
</span><br>
<span class="quotelev1">&gt; [pastec:19917] [ 3] /usr/lib64/openmpi/lib/openmpi/mca_btl_openib.so(+0x1eb70) [0x7eff66a21b70]
</span><br>
<span class="quotelev1">&gt; [pastec:19917] [ 4] /usr/lib64/openmpi/lib/openmpi/mca_btl_openib.so(+0x1ec89) [0x7eff66a21c89]
</span><br>
<span class="quotelev1">&gt; [pastec:19917] [ 5] /usr/lib64/openmpi/lib/openmpi/mca_btl_openib.so(+0x1403d) [0x7eff66a1703d]
</span><br>
<span class="quotelev1">&gt; [pastec:19917] [ 6] /usr/lib64/openmpi/lib/openmpi/mca_pml_ob1.so(+0x120e6) [0x7eff676670e6]
</span><br>
<span class="quotelev1">&gt; [pastec:19917] [ 7] /usr/lib64/openmpi/lib/openmpi/mca_pml_ob1.so(+0x6273) [0x7eff6765b273]
</span><br>
<span class="quotelev1">&gt; [pastec:19917] [ 8] /usr/lib64/openmpi/lib/openmpi/mca_coll_tuned.so(+0x1b2f) [0x7eff65539b2f]
</span><br>
<span class="quotelev1">&gt; [pastec:19917] [ 9] /usr/lib64/openmpi/lib/openmpi/mca_coll_tuned.so(+0xa5cf) [0x7eff655425cf]
</span><br>
<span class="quotelev1">&gt; [pastec:19917] [10] /usr/lib64/openmpi/lib/libmpi.so.0(MPI_Barrier+0x9e) [0x3a54c4c94e]
</span><br>
<span class="quotelev1">&gt; [pastec:19917] [11] ./b.out(main+0x6e) [0x400a42]
</span><br>
<span class="quotelev1">&gt; [pastec:19917] [12] /lib64/libc.so.6(__libc_start_main+0xfd) [0x34a841ee5d]
</span><br>
<span class="quotelev1">&gt; [pastec:19917] [13] ./b.out() [0x400919]
</span><br>
<span class="quotelev1">&gt; [pastec:19917] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [pastec.gtri.gatech.edu:19913] [[18526,0],0]-[[18526,1],1] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 19917 on node pastec.gtri.gatech.edu exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17422.php">Jeff Squyres: "Re: [OMPI users] PATH settings"</a>
<li><strong>Previous message:</strong> <a href="17420.php">Vassenkov, Phillip: "[OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>In reply to:</strong> <a href="17420.php">Vassenkov, Phillip: "[OMPI users] Segfault on any MPI communication on head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17438.php">Phillip Vassenkov: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Reply:</strong> <a href="17438.php">Phillip Vassenkov: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
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
