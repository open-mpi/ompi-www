<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 24 08:17:31 2007" -->
<!-- isoreceived="20071024121731" -->
<!-- sent="Wed, 24 Oct 2007 14:17:20 +0200" -->
<!-- isosent="20071024121720" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in common_mx.c (1.2.5a0r16522)" -->
<!-- id="1193228240.2424.17.camel_at_y-boda.ydc.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1193209231.2424.8.camel_at_y-boda.ydc.se" -->
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
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-24 08:17:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4295.php">George Bosilca: "Re: [OMPI users] Bug in common_mx.c (1.2.5a0r16522)"</a>
<li><strong>Previous message:</strong> <a href="4293.php">Amit Kumar Saha: "Re: [OMPI users] Parallel Genetic Algorithms - Open MPI Implementation"</a>
<li><strong>In reply to:</strong> <a href="4292.php">&#197;ke Sandgren: "[OMPI users] Bug in common_mx.c (1.2.5a0r16522)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4295.php">George Bosilca: "Re: [OMPI users] Bug in common_mx.c (1.2.5a0r16522)"</a>
<li><strong>Reply:</strong> <a href="4295.php">George Bosilca: "Re: [OMPI users] Bug in common_mx.c (1.2.5a0r16522)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2007-10-24 at 09:00 +0200, &#197;ke Sandgren wrote:
<br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; In common_mx.c the following looks wrong.
</span><br>
<span class="quotelev1">&gt; ompi_common_mx_finalize(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     mx_return_t mx_return;
</span><br>
<span class="quotelev1">&gt;     ompi_common_mx_initialize_ref_cnt--;
</span><br>
<span class="quotelev1">&gt;     if(ompi_common_mx_initialize == 0) {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That should be
</span><br>
<span class="quotelev1">&gt; if(ompi_common_mx_initialize_ref_cnt == 0)
</span><br>
<span class="quotelev1">&gt; right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>And there was a missing return too.
<br>
Complete ompi_common_mx_finalize should be
<br>
int
<br>
ompi_common_mx_finalize(void)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mx_return_t mx_return;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi_common_mx_initialize_ref_cnt--;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(ompi_common_mx_initialize_ref_cnt == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mx_return = mx_finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(mx_return != MX_SUCCESS){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;Error in mx_finalize (error %s)\n&quot;,
<br>
mx_strerror(mx_return));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4295.php">George Bosilca: "Re: [OMPI users] Bug in common_mx.c (1.2.5a0r16522)"</a>
<li><strong>Previous message:</strong> <a href="4293.php">Amit Kumar Saha: "Re: [OMPI users] Parallel Genetic Algorithms - Open MPI Implementation"</a>
<li><strong>In reply to:</strong> <a href="4292.php">&#197;ke Sandgren: "[OMPI users] Bug in common_mx.c (1.2.5a0r16522)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4295.php">George Bosilca: "Re: [OMPI users] Bug in common_mx.c (1.2.5a0r16522)"</a>
<li><strong>Reply:</strong> <a href="4295.php">George Bosilca: "Re: [OMPI users] Bug in common_mx.c (1.2.5a0r16522)"</a>
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
