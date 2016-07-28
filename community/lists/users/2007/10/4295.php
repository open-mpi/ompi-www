<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 09:38:40 2007" -->
<!-- isoreceived="20071024133840" -->
<!-- sent="Wed, 24 Oct 2007 09:38:27 -0400" -->
<!-- isosent="20071024133827" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in common_mx.c (1.2.5a0r16522)" -->
<!-- id="4E02FCD2-C00A-4F81-AA36-B7AC41C7D79F_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1193228240.2424.17.camel_at_y-boda.ydc.se" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-24 09:38:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4296.php">Dirk Eddelbuettel: "[OMPI users] Cannot suppress openib error message"</a>
<li><strong>Previous message:</strong> <a href="4294.php">&#197;ke Sandgren: "Re: [OMPI users] Bug in common_mx.c (1.2.5a0r16522)"</a>
<li><strong>In reply to:</strong> <a href="4294.php">&#197;ke Sandgren: "Re: [OMPI users] Bug in common_mx.c (1.2.5a0r16522)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're absolutely right. Thanks for the patch, I applied it on the  
<br>
trunk (revision 16560).
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 24, 2007, at 8:17 AM, &#197;ke Sandgren wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 2007-10-24 at 09:00 +0200, &#197;ke Sandgren wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In common_mx.c the following looks wrong.
</span><br>
<span class="quotelev2">&gt;&gt; ompi_common_mx_finalize(void)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     mx_return_t mx_return;
</span><br>
<span class="quotelev2">&gt;&gt;     ompi_common_mx_initialize_ref_cnt--;
</span><br>
<span class="quotelev2">&gt;&gt;     if(ompi_common_mx_initialize == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That should be
</span><br>
<span class="quotelev2">&gt;&gt; if(ompi_common_mx_initialize_ref_cnt == 0)
</span><br>
<span class="quotelev2">&gt;&gt; right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And there was a missing return too.
</span><br>
<span class="quotelev1">&gt; Complete ompi_common_mx_finalize should be
</span><br>
<span class="quotelev1">&gt; int
</span><br>
<span class="quotelev1">&gt; ompi_common_mx_finalize(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     mx_return_t mx_return;
</span><br>
<span class="quotelev1">&gt;     ompi_common_mx_initialize_ref_cnt--;
</span><br>
<span class="quotelev1">&gt;     if(ompi_common_mx_initialize_ref_cnt == 0) {
</span><br>
<span class="quotelev1">&gt;         mx_return = mx_finalize();
</span><br>
<span class="quotelev1">&gt;         if(mx_return != MX_SUCCESS){
</span><br>
<span class="quotelev1">&gt;             opal_output(0, &quot;Error in mx_finalize (error %s)\n&quot;,
</span><br>
<span class="quotelev1">&gt; mx_strerror(mx_return));
</span><br>
<span class="quotelev1">&gt;             return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4295/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4296.php">Dirk Eddelbuettel: "[OMPI users] Cannot suppress openib error message"</a>
<li><strong>Previous message:</strong> <a href="4294.php">&#197;ke Sandgren: "Re: [OMPI users] Bug in common_mx.c (1.2.5a0r16522)"</a>
<li><strong>In reply to:</strong> <a href="4294.php">&#197;ke Sandgren: "Re: [OMPI users] Bug in common_mx.c (1.2.5a0r16522)"</a>
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
