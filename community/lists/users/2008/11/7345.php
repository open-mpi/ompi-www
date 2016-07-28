<?
$subject_val = "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 19 13:21:05 2008" -->
<!-- isoreceived="20081119182105" -->
<!-- sent="Wed, 19 Nov 2008 12:20:54 -0600" -->
<!-- isosent="20081119182054" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)" -->
<!-- id="14048A45-76CD-4D30-8DA4-43B4754750CC_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49243C51.8050102_at_labri.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-19 13:20:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7346.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Previous message:</strong> <a href="7344.php">Fran&#231;ois PELLEGRINI: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>In reply to:</strong> <a href="7344.php">Fran&#231;ois PELLEGRINI: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7346.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Reply:</strong> <a href="7346.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 19, 2008, at 10:18 , Fran&#231;ois PELLEGRINI wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 4)  Well, this sounds reasonable, but according to the MPI-1 standard
</span><br>
<span class="quotelev2">&gt;&gt; (see page 40 for non-blocking send/recv, a more detailed  
</span><br>
<span class="quotelev2">&gt;&gt; explanation in
</span><br>
<span class="quotelev2">&gt;&gt; page 30):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;A nonblocking send call indicates that the system may start copying
</span><br>
<span class="quotelev2">&gt;&gt; data out of the send buffer. The sender should */not access*/ any  
</span><br>
<span class="quotelev2">&gt;&gt; part
</span><br>
<span class="quotelev2">&gt;&gt; of the send buffer after a nonblocking send operation is called,  
</span><br>
<span class="quotelev2">&gt;&gt; until
</span><br>
<span class="quotelev2">&gt;&gt; the send completes.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So before calling MPI_Wait to complete an isend operation, any  
</span><br>
<span class="quotelev2">&gt;&gt; access to
</span><br>
<span class="quotelev2">&gt;&gt; the send buffer is illegal. It might be a little strict, but we  
</span><br>
<span class="quotelev2">&gt;&gt; have to
</span><br>
<span class="quotelev2">&gt;&gt; do what the standard says.
</span><br>
<p>This have been changed in the new version of the MPI standard (2.1).  
<br>
There is no restriction anymore regarding the read operations on the  
<br>
buffers used for non-blocking sends.
<br>
<p>We should modify the memchecker accordingly.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7346.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Previous message:</strong> <a href="7344.php">Fran&#231;ois PELLEGRINI: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>In reply to:</strong> <a href="7344.php">Fran&#231;ois PELLEGRINI: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7346.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Reply:</strong> <a href="7346.php">Shiqing Fan: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
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
