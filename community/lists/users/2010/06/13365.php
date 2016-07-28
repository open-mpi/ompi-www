<?
$subject_val = "Re: [OMPI users] Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 22 02:06:05 2010" -->
<!-- isoreceived="20100622060605" -->
<!-- sent="Tue, 22 Jun 2010 00:05:53 -0600" -->
<!-- isosent="20100622060553" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2" -->
<!-- id="A7A38E07-86BF-4975-A85D-F590A8920E05_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTiliUXTldUhJff5uRlDiyezrIPdSbYx8Yt4Ldvxb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-22 02:05:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13366.php">Ralph Castain: "Re: [OMPI users] problem with -npernode"</a>
<li><strong>Previous message:</strong> <a href="13364.php">Riccardo Murri: "[OMPI users] Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2"</a>
<li><strong>In reply to:</strong> <a href="13364.php">Riccardo Murri: "[OMPI users] Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the problem - the issue is a bug in the handling of the pernode option in 1.4.2. This has been fixed and awaits release in 1.4.3.
<br>
<p><p>On Jun 21, 2010, at 5:27 PM, Riccardo Murri wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI 1.4.2 on a Rocks 5.2 cluster.  I compiled it on my
</span><br>
<span class="quotelev1">&gt; own to have a thread-enabled MPI (the OMPI coming with Rocks 5.2
</span><br>
<span class="quotelev1">&gt; apparently only supports MPI_THREAD_SINGLE), and installed into ~/sw.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To test the newly installed library I compiled a simple &quot;hello world&quot;
</span><br>
<span class="quotelev1">&gt; that comes with Rocks::
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  [murri_at_idgc3grid01 hello_mpi.d]$ cat hello_mpi.c
</span><br>
<span class="quotelev1">&gt;  #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;  #include &lt;sys/utsname.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;    int myrank;
</span><br>
<span class="quotelev1">&gt;    struct utsname unam;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    uname(&amp;unam);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank);
</span><br>
<span class="quotelev1">&gt;    printf(&quot;Hello from rank %d on host %s\n&quot;, myrank, unam.nodename);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program runs fine as long as it only uses ranks on localhost::
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  [murri_at_idgc3grid01 hello_mpi.d]$ mpirun --host localhost -np 2 hello_mpi
</span><br>
<span class="quotelev1">&gt;  Hello from rank 1 on host idgc3grid01.uzh.ch
</span><br>
<span class="quotelev1">&gt;  Hello from rank 0 on host idgc3grid01.uzh.ch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, as soon as I try to run on more than one host, I get a
</span><br>
<span class="quotelev1">&gt; segfault::
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  [murri_at_idgc3grid01 hello_mpi.d]$ mpirun --host
</span><br>
<span class="quotelev1">&gt; idgc3grid01,compute-0-11 --pernode hello_mpi
</span><br>
<span class="quotelev1">&gt;  [idgc3grid01:13006] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;  [idgc3grid01:13006] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;  [idgc3grid01:13006] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;  [idgc3grid01:13006] Failing at address: 0x50
</span><br>
<span class="quotelev1">&gt;  [idgc3grid01:13006] [ 0] /lib64/libpthread.so.0 [0x359420e4c0]
</span><br>
<span class="quotelev1">&gt;  [idgc3grid01:13006] [ 1]
</span><br>
<span class="quotelev1">&gt; /home/oci/murri/sw/lib/libopen-rte.so.0(orte_util_encode_pidmap+0xdb)
</span><br>
<span class="quotelev1">&gt; [0x2b352d00265b]
</span><br>
<span class="quotelev1">&gt;  [idgc3grid01:13006] [ 2]
</span><br>
<span class="quotelev1">&gt; /home/oci/murri/sw/lib/libopen-rte.so.0(orte_odls_base_default_get_add_procs_data+0x676)
</span><br>
<span class="quotelev1">&gt; [0x2b352d00e0e6]
</span><br>
<span class="quotelev1">&gt;  [idgc3grid01:13006] [ 3]
</span><br>
<span class="quotelev1">&gt; /home/oci/murri/sw/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0xb8)
</span><br>
<span class="quotelev1">&gt; [0x2b352d015358]
</span><br>
<span class="quotelev1">&gt;  [idgc3grid01:13006] [ 4]
</span><br>
<span class="quotelev1">&gt; /home/oci/murri/sw/lib/openmpi/mca_plm_rsh.so [0x2b352dcb9a80]
</span><br>
<span class="quotelev1">&gt;  [idgc3grid01:13006] [ 5] mpirun [0x40345a]
</span><br>
<span class="quotelev1">&gt;  [idgc3grid01:13006] [ 6] mpirun [0x402af3]
</span><br>
<span class="quotelev1">&gt;  [idgc3grid01:13006] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x359361d974]
</span><br>
<span class="quotelev1">&gt;  [idgc3grid01:13006] [ 8] mpirun [0x402a29]
</span><br>
<span class="quotelev1">&gt;  [idgc3grid01:13006] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;  Segmentation fault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've already tried the suggestions posted to similar messages on the
</span><br>
<span class="quotelev1">&gt; list: &quot;ldd&quot; reports that the executable is linked with the libraries
</span><br>
<span class="quotelev1">&gt; in my home, not the system-wide OMPI::
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  [murri_at_idgc3grid01 hello_mpi.d]$ ldd hello_mpi
</span><br>
<span class="quotelev1">&gt;          libmpi.so.0 =&gt; /home/oci/murri/sw/lib/libmpi.so.0 (0x00002ad2bd6f2000)
</span><br>
<span class="quotelev1">&gt;          libopen-rte.so.0 =&gt; /home/oci/murri/sw/lib/libopen-rte.so.0
</span><br>
<span class="quotelev1">&gt; (0x00002ad2bd997000)
</span><br>
<span class="quotelev1">&gt;          libopen-pal.so.0 =&gt; /home/oci/murri/sw/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; (0x00002ad2bdbe3000)
</span><br>
<span class="quotelev1">&gt;          libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000003593e00000)
</span><br>
<span class="quotelev1">&gt;          libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003596a00000)
</span><br>
<span class="quotelev1">&gt;          libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00000035a1000000)
</span><br>
<span class="quotelev1">&gt;          libm.so.6 =&gt; /lib64/libm.so.6 (0x0000003593a00000)
</span><br>
<span class="quotelev1">&gt;          libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x0000003594200000)
</span><br>
<span class="quotelev1">&gt;          libc.so.6 =&gt; /lib64/libc.so.6 (0x0000003593600000)
</span><br>
<span class="quotelev1">&gt;          /lib64/ld-linux-x86-64.so.2 (0x0000003593200000)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've also checked with &quot;strace&quot; that the &quot;mpi.h&quot; file used during
</span><br>
<span class="quotelev1">&gt; compile is the one in ~/sw/include and that all &quot;.so&quot; files being
</span><br>
<span class="quotelev1">&gt; loaded from OMPI are the ones in ~/sw/lib.  I can ssh without password
</span><br>
<span class="quotelev1">&gt; to the target compute node. The &quot;mpirun&quot; and &quot;mpicc&quot; are the correct ones:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  [murri_at_idgc3grid01 hello_mpi.d]$ which mpirun
</span><br>
<span class="quotelev1">&gt;  ~/sw/bin/mpirun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  [murri_at_idgc3grid01 hello_mpi.d]$ which mpicc
</span><br>
<span class="quotelev1">&gt;  ~/sw/bin/mpicc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm pretty stuck now; can anybody give me a hint?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot for any help!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Riccardo
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13366.php">Ralph Castain: "Re: [OMPI users] problem with -npernode"</a>
<li><strong>Previous message:</strong> <a href="13364.php">Riccardo Murri: "[OMPI users] Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2"</a>
<li><strong>In reply to:</strong> <a href="13364.php">Riccardo Murri: "[OMPI users] Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2"</a>
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
