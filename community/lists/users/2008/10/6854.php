<?
$subject_val = "Re: [OMPI users] segfault issue - possible bug in openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 17:30:24 2008" -->
<!-- isoreceived="20081003213024" -->
<!-- sent="Fri, 3 Oct 2008 15:30:20 -0600" -->
<!-- isosent="20081003213020" -->
<!-- name="Daniel Hansen" -->
<!-- email="dhansen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault issue - possible bug in openmpi" -->
<!-- id="f50c46db0810031430h49ca9dd5jd8411929280cecb_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f50c46db0810031420j5f8da32fj9e74d32e7f5a45eb_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] segfault issue - possible bug in openmpi<br>
<strong>From:</strong> Daniel Hansen (<em>dhansen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-03 17:30:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6855.php">Doug Reeder: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>Previous message:</strong> <a href="6853.php">Matt Burgess: "[OMPI users] OpenMPI with openib partitions"</a>
<li><strong>In reply to:</strong> <a href="6852.php">Daniel Hansen: "[OMPI users] segfault issue - possible bug in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6855.php">Doug Reeder: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>Reply:</strong> <a href="6855.php">Doug Reeder: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh, by the way, here is the segfault:
<br>
<p>[m4b-1-8:11481] *** Process received signal ***
<br>
[m4b-1-8:11481] Signal: Segmentation fault (11)
<br>
[m4b-1-8:11481] Signal code: Address not mapped (1)
<br>
[m4b-1-8:11481] Failing at address: 0x2b91c69eed
<br>
[m4b-1-8:11483] [ 0] /lib64/libpthread.so.0 [0x33e8c0de70]
<br>
[m4b-1-8:11483] [ 1] /fslhome/dhansen7/openmpi/lib/libmpi.so.0
<br>
[0x2aaaaabea7c0]
<br>
[m4b-1-8:11483] [ 2] /fslhome/dhansen7/openmpi/lib/libmpi.so.0
<br>
[0x2aaaaabea675]
<br>
[m4b-1-8:11483] [ 3]
<br>
/fslhome/dhansen7/openmpi/lib/libmpi.so.0(mca_pml_ob1_send+0x2da)
<br>
[0x2aaaaabeaf55]
<br>
[m4b-1-8:11483] [ 4]
<br>
/fslhome/dhansen7/openmpi/lib/libmpi.so.0(MPI_Send+0x28e) [0x2aaaaab52c5a]
<br>
[m4b-1-8:11483] [ 5]
<br>
/fslhome/dhansen7/compute/for_DanielHansen/replica_mpi_marylou2/Openmpi_md_twham(twham_init+0x708)
<br>
[0x42a8a8]
<br>
[m4b-1-8:11483] [ 6]
<br>
/fslhome/dhansen7/compute/for_DanielHansen/replica_mpi_marylou2/Openmpi_md_twham(repexch+0x73c)
<br>
[0x425d5c]
<br>
[m4b-1-8:11483] [ 7]
<br>
/fslhome/dhansen7/compute/for_DanielHansen/replica_mpi_marylou2/Openmpi_md_twham(main+0x855)
<br>
[0x4133a5]
<br>
[m4b-1-8:11483] [ 8] /lib64/libc.so.6(__libc_start_main+0xf4) [0x33e841d8a4]
<br>
[m4b-1-8:11483] [ 9]
<br>
/fslhome/dhansen7/compute/for_DanielHansen/replica_mpi_marylou2/Openmpi_md_twham
<br>
[0x4040b9]
<br>
[m4b-1-8:11483] *** End of error message ***
<br>
<p><p><p>On Fri, Oct 3, 2008 at 3:20 PM, Daniel Hansen &lt;dhansen_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have been testing some code against openmpi lately that always causes it
</span><br>
<span class="quotelev1">&gt; to crash during certain mpi function calls.  The code does not seem to be
</span><br>
<span class="quotelev1">&gt; the problem, as it runs just fine against mpich.  I have tested it against
</span><br>
<span class="quotelev1">&gt; openmpi 1.2.5, 1.2.6, and 1.2.7 and they all exhibit the same problem.
</span><br>
<span class="quotelev1">&gt; Also, the problem only occurs in openmpi when running more than 16
</span><br>
<span class="quotelev1">&gt; processes.  I have posted this stack trace to the list before, but I am
</span><br>
<span class="quotelev1">&gt; submitting it now as a potential bug report.  I need some help debugging it
</span><br>
<span class="quotelev1">&gt; and finding out exactly what is going on in openmpi when the segfault
</span><br>
<span class="quotelev1">&gt; occurs.  Are there any suggestions on how best to do this?  Is there an easy
</span><br>
<span class="quotelev1">&gt; way to attach gdb to one of the processes or something??  I have already
</span><br>
<span class="quotelev1">&gt; compiled openmpi with debugging, memory profiling, etc.  How can I best take
</span><br>
<span class="quotelev1">&gt; advantage of these features?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Daniel Hansen
</span><br>
<span class="quotelev1">&gt; Systems Administrator
</span><br>
<span class="quotelev1">&gt; BYU Fulton Supercomputing Lab
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6854/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6855.php">Doug Reeder: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>Previous message:</strong> <a href="6853.php">Matt Burgess: "[OMPI users] OpenMPI with openib partitions"</a>
<li><strong>In reply to:</strong> <a href="6852.php">Daniel Hansen: "[OMPI users] segfault issue - possible bug in openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6855.php">Doug Reeder: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
<li><strong>Reply:</strong> <a href="6855.php">Doug Reeder: "Re: [OMPI users] segfault issue - possible bug in openmpi"</a>
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
