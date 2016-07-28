<?
$subject_val = "[OMPI devel] sendi sm BTL function";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 10 18:01:16 2008" -->
<!-- isoreceived="20081010220116" -->
<!-- sent="Fri, 10 Oct 2008 15:03:58 -0700" -->
<!-- isosent="20081010220358" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] sendi sm BTL function" -->
<!-- id="48EFD14E.2060205_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] sendi sm BTL function<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-10 18:03:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4756.php">George Bosilca: "Re: [OMPI devel] sendi sm BTL function"</a>
<li><strong>Previous message:</strong> <a href="4754.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.8rc1 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4756.php">George Bosilca: "Re: [OMPI devel] sendi sm BTL function"</a>
<li><strong>Reply:</strong> <a href="4756.php">George Bosilca: "Re: [OMPI devel] sendi sm BTL function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can someone tell me about mca_btl_sm_sendi()?  In btl_sm.c, I see that 
<br>
it's commented out of the structure &quot;mca_btl_sm&quot;.
<br>
<p>It seems to me that pingpong latency over shared memory in OMPI isn't as 
<br>
fast as certain &quot;competitors&quot;.  If I put mca_btl_sm_sendi back in, it 
<br>
seems to improve the pingpong latency a little.  For some pingpong test 
<br>
and some hardware and some compiler, etc., etc., I get 953 nsec out of 
<br>
the box and 902 nsec if I use mca_btl_sm_sendi.  So, it seems to improve 
<br>
latency.
<br>
<p>Why is it commented out?  E.g., look at btl_sm.c and search for the 
<br>
first occurrence of &quot;sendi&quot;:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_sm_t mca_btl_sm = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;mca_btl_sm_component.super,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL /*mca_btl_sm_sendi*/,  /* send immediate */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;};
<br>
<p>(I'm just about to leave for a week, but I look forward to reading 
<br>
everyone's insightful comments and lively discussion upon my return.)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4756.php">George Bosilca: "Re: [OMPI devel] sendi sm BTL function"</a>
<li><strong>Previous message:</strong> <a href="4754.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.8rc1 has been posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4756.php">George Bosilca: "Re: [OMPI devel] sendi sm BTL function"</a>
<li><strong>Reply:</strong> <a href="4756.php">George Bosilca: "Re: [OMPI devel] sendi sm BTL function"</a>
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
