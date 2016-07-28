<?
$subject_val = "[OMPI users] Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 21 19:27:53 2010" -->
<!-- isoreceived="20100621232753" -->
<!-- sent="Tue, 22 Jun 2010 01:27:48 +0200" -->
<!-- isosent="20100621232748" -->
<!-- name="Riccardo Murri" -->
<!-- email="riccardo.murri_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2" -->
<!-- id="AANLkTiliUXTldUhJff5uRlDiyezrIPdSbYx8Yt4Ldvxb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2<br>
<strong>From:</strong> Riccardo Murri (<em>riccardo.murri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-21 19:27:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13365.php">Ralph Castain: "Re: [OMPI users] Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2"</a>
<li><strong>Previous message:</strong> <a href="13363.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13365.php">Ralph Castain: "Re: [OMPI users] Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2"</a>
<li><strong>Reply:</strong> <a href="13365.php">Ralph Castain: "Re: [OMPI users] Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm using OpenMPI 1.4.2 on a Rocks 5.2 cluster.  I compiled it on my
<br>
own to have a thread-enabled MPI (the OMPI coming with Rocks 5.2
<br>
apparently only supports MPI_THREAD_SINGLE), and installed into ~/sw.
<br>
<p>To test the newly installed library I compiled a simple &quot;hello world&quot;
<br>
that comes with Rocks::
<br>
<p>&nbsp;&nbsp;[murri_at_idgc3grid01 hello_mpi.d]$ cat hello_mpi.c
<br>
&nbsp;&nbsp;#include &lt;stdio.h&gt;
<br>
&nbsp;&nbsp;#include &lt;sys/utsname.h&gt;
<br>
<p>&nbsp;&nbsp;#include &lt;mpi.h&gt;
<br>
<p>&nbsp;&nbsp;int main(int argc, char **argv) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int myrank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct utsname unam;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;uname(&amp;unam);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello from rank %d on host %s\n&quot;, myrank, unam.nodename);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;}
<br>
<p>The program runs fine as long as it only uses ranks on localhost::
<br>
<p>&nbsp;&nbsp;[murri_at_idgc3grid01 hello_mpi.d]$ mpirun --host localhost -np 2 hello_mpi
<br>
&nbsp;&nbsp;Hello from rank 1 on host idgc3grid01.uzh.ch
<br>
&nbsp;&nbsp;Hello from rank 0 on host idgc3grid01.uzh.ch
<br>
<p>However, as soon as I try to run on more than one host, I get a
<br>
segfault::
<br>
<p>&nbsp;&nbsp;[murri_at_idgc3grid01 hello_mpi.d]$ mpirun --host
<br>
idgc3grid01,compute-0-11 --pernode hello_mpi
<br>
&nbsp;&nbsp;[idgc3grid01:13006] *** Process received signal ***
<br>
&nbsp;&nbsp;[idgc3grid01:13006] Signal: Segmentation fault (11)
<br>
&nbsp;&nbsp;[idgc3grid01:13006] Signal code: Address not mapped (1)
<br>
&nbsp;&nbsp;[idgc3grid01:13006] Failing at address: 0x50
<br>
&nbsp;&nbsp;[idgc3grid01:13006] [ 0] /lib64/libpthread.so.0 [0x359420e4c0]
<br>
&nbsp;&nbsp;[idgc3grid01:13006] [ 1]
<br>
/home/oci/murri/sw/lib/libopen-rte.so.0(orte_util_encode_pidmap+0xdb)
<br>
[0x2b352d00265b]
<br>
&nbsp;&nbsp;[idgc3grid01:13006] [ 2]
<br>
/home/oci/murri/sw/lib/libopen-rte.so.0(orte_odls_base_default_get_add_procs_data+0x676)
<br>
[0x2b352d00e0e6]
<br>
&nbsp;&nbsp;[idgc3grid01:13006] [ 3]
<br>
/home/oci/murri/sw/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0xb8)
<br>
[0x2b352d015358]
<br>
&nbsp;&nbsp;[idgc3grid01:13006] [ 4]
<br>
/home/oci/murri/sw/lib/openmpi/mca_plm_rsh.so [0x2b352dcb9a80]
<br>
&nbsp;&nbsp;[idgc3grid01:13006] [ 5] mpirun [0x40345a]
<br>
&nbsp;&nbsp;[idgc3grid01:13006] [ 6] mpirun [0x402af3]
<br>
&nbsp;&nbsp;[idgc3grid01:13006] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4)
<br>
[0x359361d974]
<br>
&nbsp;&nbsp;[idgc3grid01:13006] [ 8] mpirun [0x402a29]
<br>
&nbsp;&nbsp;[idgc3grid01:13006] *** End of error message ***
<br>
&nbsp;&nbsp;Segmentation fault
<br>
<p>I've already tried the suggestions posted to similar messages on the
<br>
list: &quot;ldd&quot; reports that the executable is linked with the libraries
<br>
in my home, not the system-wide OMPI::
<br>
<p>&nbsp;&nbsp;[murri_at_idgc3grid01 hello_mpi.d]$ ldd hello_mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /home/oci/murri/sw/lib/libmpi.so.0 (0x00002ad2bd6f2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /home/oci/murri/sw/lib/libopen-rte.so.0
<br>
(0x00002ad2bd997000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /home/oci/murri/sw/lib/libopen-pal.so.0
<br>
(0x00002ad2bdbe3000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000003593e00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003596a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00000035a1000000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x0000003593a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x0000003594200000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x0000003593600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x0000003593200000)
<br>
<p>I've also checked with &quot;strace&quot; that the &quot;mpi.h&quot; file used during
<br>
compile is the one in ~/sw/include and that all &quot;.so&quot; files being
<br>
loaded from OMPI are the ones in ~/sw/lib.  I can ssh without password
<br>
to the target compute node. The &quot;mpirun&quot; and &quot;mpicc&quot; are the correct ones:
<br>
<p>&nbsp;&nbsp;[murri_at_idgc3grid01 hello_mpi.d]$ which mpirun
<br>
&nbsp;&nbsp;~/sw/bin/mpirun
<br>
<p>&nbsp;&nbsp;[murri_at_idgc3grid01 hello_mpi.d]$ which mpicc
<br>
&nbsp;&nbsp;~/sw/bin/mpicc
<br>
<p><p>I'm pretty stuck now; can anybody give me a hint?
<br>
<p>Thanks a lot for any help!
<br>
<p>Best regards,
<br>
Riccardo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13365.php">Ralph Castain: "Re: [OMPI users] Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2"</a>
<li><strong>Previous message:</strong> <a href="13363.php">Shiqing Fan: "Re: [OMPI users] ompi-ps failure on WinXP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13365.php">Ralph Castain: "Re: [OMPI users] Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2"</a>
<li><strong>Reply:</strong> <a href="13365.php">Ralph Castain: "Re: [OMPI users] Segmentation fault / Address not mapped (1) with 2-node job on Rocks 5.2"</a>
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
