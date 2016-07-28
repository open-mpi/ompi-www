<?
$subject_val = "Re: [OMPI devel] Pallas fails";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 12 02:42:23 2008" -->
<!-- isoreceived="20080612064223" -->
<!-- sent="Thu, 12 Jun 2008 09:36:42 +0300" -->
<!-- isosent="20080612063642" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Pallas fails" -->
<!-- id="4850C3FA.3060201_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48464247.3050306_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Pallas fails<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-12 02:36:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4123.php">Rolf vandeVaart: "Re: [OMPI devel] Pallas fails"</a>
<li><strong>Previous message:</strong> <a href="4121.php">Brad Benton: "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>In reply to:</strong> <a href="4087.php">Pavel Shamis (Pasha): "[OMPI devel] Pallas fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4123.php">Rolf vandeVaart: "Re: [OMPI devel] Pallas fails"</a>
<li><strong>Reply:</strong> <a href="4123.php">Rolf vandeVaart: "Re: [OMPI devel] Pallas fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With 1.3a1r18643 Pallas tests pass on my machine.
<br>
But I see new failures (assertion) in Intel-Test 
<br>
<a href="http://www.open-mpi.org/mtt/index.php?do_redir=733">http://www.open-mpi.org/mtt/index.php?do_redir=733</a>
<br>
<p>PI_Type_struct_types_c: btl_sm.c:684: mca_btl_sm_sendi: Assertion `max_data == payload_size'
<br>
failed.
<br>
[sw216:32013] *** Process received signal ***
<br>
[sw216:32013] Signal: Aborted (6)
<br>
[sw216:32013] Signal code:  (-6)
<br>
[sw216:32013] [ 0] /lib64/libpthread.so.0 [0x2aba5e51ec10]
<br>
[sw216:32013] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x2aba5e657b95]
<br>
[sw216:32013] [ 2] /lib64/libc.so.6(abort+0x110) [0x2aba5e658f90]
<br>
[sw216:32013] [ 3] /lib64/libc.so.6(__assert_fail+0xf6) [0x2aba5e651256]
<br>
[sw216:32013] [ 4]
<br>
<p><p><p><p>Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; Last conf. call Jeff mentioned that he see some collectives failures.
</span><br>
<span class="quotelev1">&gt; In my MTT testing I also see that Pallas collectives failed - <a href="http://www.open-mpi.org/mtt/index.php?do_redir=682">http://www.open-mpi.org/mtt/index.php?do_redir=682</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Alltoall
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Benchmarking Alltoall 
</span><br>
<span class="quotelev1">&gt; # #processes = 20 
</span><br>
<span class="quotelev1">&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;             0         1000         0.03         0.05         0.04
</span><br>
<span class="quotelev1">&gt;             1         1000       179.15       179.22       179.18
</span><br>
<span class="quotelev1">&gt;             2         1000       155.96       156.02       155.98
</span><br>
<span class="quotelev1">&gt;             4         1000       156.93       156.98       156.95
</span><br>
<span class="quotelev1">&gt;             8         1000       163.63       163.67       163.65
</span><br>
<span class="quotelev1">&gt;            16         1000       115.04       115.08       115.07
</span><br>
<span class="quotelev1">&gt;            32         1000       123.57       123.62       123.59
</span><br>
<span class="quotelev1">&gt;            64         1000       129.78       129.82       129.80
</span><br>
<span class="quotelev1">&gt;           128         1000       141.45       141.49       141.48
</span><br>
<span class="quotelev1">&gt;           256         1000       960.11       960.24       960.20
</span><br>
<span class="quotelev1">&gt;           512         1000       900.95       901.11       901.04
</span><br>
<span class="quotelev1">&gt;          1024         1000       921.95       922.05       922.00
</span><br>
<span class="quotelev1">&gt;          2048         1000       862.50       862.72       862.60
</span><br>
<span class="quotelev1">&gt;          4096         1000      1044.90      1044.95      1044.92
</span><br>
<span class="quotelev1">&gt;          8192         1000      1458.59      1458.77      1458.69
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Alltoall
</span><br>
<span class="quotelev1">&gt; *** on communicator MPI COMMUNICATOR 4 SPLIT FROM 0
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Alltoall
</span><br>
<span class="quotelev1">&gt; *** on communicator MPI COMMUNICATOR 4 SPLIT FROM 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4123.php">Rolf vandeVaart: "Re: [OMPI devel] Pallas fails"</a>
<li><strong>Previous message:</strong> <a href="4121.php">Brad Benton: "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>In reply to:</strong> <a href="4087.php">Pavel Shamis (Pasha): "[OMPI devel] Pallas fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4123.php">Rolf vandeVaart: "Re: [OMPI devel] Pallas fails"</a>
<li><strong>Reply:</strong> <a href="4123.php">Rolf vandeVaart: "Re: [OMPI devel] Pallas fails"</a>
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
