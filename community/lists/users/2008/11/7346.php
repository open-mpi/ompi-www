<?
$subject_val = "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 19 14:00:04 2008" -->
<!-- isoreceived="20081119190004" -->
<!-- sent="Wed, 19 Nov 2008 19:59:57 +0100" -->
<!-- isosent="20081119185957" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)" -->
<!-- id="4924622D.2080305_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="14048A45-76CD-4D30-8DA4-43B4754750CC_at_eecs.utk.edu" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-19 13:59:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7347.php">Audet, Martin: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Previous message:</strong> <a href="7345.php">George Bosilca: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>In reply to:</strong> <a href="7345.php">George Bosilca: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7347.php">Audet, Martin: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Reply:</strong> <a href="7347.php">Audet, Martin: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p><span class="quotelev3">&gt;&gt;&gt; 4)  Well, this sounds reasonable, but according to the MPI-1 standard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (see page 40 for non-blocking send/recv, a more detailed explanation in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; page 30):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;A nonblocking send call indicates that the system may start copying
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data out of the send buffer. The sender should */not access*/ any part
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the send buffer after a nonblocking send operation is called, until
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the send completes.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So before calling MPI_Wait to complete an isend operation, any 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; access to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the send buffer is illegal. It might be a little strict, but we have to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do what the standard says.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This have been changed in the new version of the MPI standard (2.1). 
</span><br>
<span class="quotelev1">&gt; There is no restriction anymore regarding the read operations on the 
</span><br>
<span class="quotelev1">&gt; buffers used for non-blocking sends.
</span><br>
Do you mean the next coming version of MPI standard? Because checking 
<br>
again standard 2.1 , I didn't see any changes of those paragraphs. See 
<br>
MPI Standard 2.1 (PDF version), page 52, and page 41.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We should modify the memchecker accordingly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7347.php">Audet, Martin: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Previous message:</strong> <a href="7345.php">George Bosilca: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>In reply to:</strong> <a href="7345.php">George Bosilca: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7347.php">Audet, Martin: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
<li><strong>Reply:</strong> <a href="7347.php">Audet, Martin: "Re: [OMPI users] Memchecker report on v1.3b2 (includes potential bug	reports)"</a>
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
