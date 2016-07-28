<?
$subject_val = "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in the	SRQs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 23 09:59:42 2010" -->
<!-- isoreceived="20100623135942" -->
<!-- sent="Wed, 23 Jun 2010 09:59:33 -0400" -->
<!-- isosent="20100623135933" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in the	SRQs" -->
<!-- id="DC5CDB2F-1278-4D59-A584-314B082F466C_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1276873849.1825.253.camel_at_B014522" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in the	SRQs<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-23 09:59:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8118.php">Sylvain Jeaugey: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<li><strong>Previous message:</strong> <a href="8116.php">Jeff Squyres: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<li><strong>In reply to:</strong> <a href="8110.php">nadia.derbey: "[OMPI devel] v1.5: sigsegv in case of extremely low settings in the SRQs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good catch. The patch looks ok for me.
<br>
<p><p>Regards
<br>
<pre>
---
Pavel Shamis (Pasha)
shamisp_at_[hidden]
On Jun 18, 2010, at 11:10 AM, nadia.derbey wrote:
&gt; Hi,
&gt; 
&gt; Reference is the v1.5 branch
&gt; 
&gt; If an SRQ has the following settings: S,&lt;size&gt;,4,2,1
&gt; 
&gt; 1) setup_qps() sets the following:
&gt; mca_btl_openib_component.qp_infos[qp].u.srq_qp.rd_num=4
&gt; mca_btl_openib_component.qp_infos[qp].u.srq_qp.rd_init=rd_num/4=1
&gt; 
&gt; 2) create_srq() sets the following:
&gt; openib_btl-&gt;qps[qp].u.srq_qp.rd_curr_num = 1 (rd_init value)
&gt; openib_btl-&gt;qps[qp].u.srq_qp.rd_low_local = rd_curr_num - (rd_curr_num
&gt;&gt;&gt; 2) = rd_curr_num = 1
&gt; 
&gt; 3) if mca_btl_openib_post_srr() is called with rd_posted=1:
&gt; rd_posted &gt; rd_low_local is false
&gt; num_post=rd_curr_num-rd_posted=0
&gt; the loop is not executed
&gt; wr is never initialized (remains NULL)
&gt; wr-&gt;next: address not mapped
&gt;         ==&gt; SIGSEGV
&gt; 
&gt; The attached patch solves the problem by ensuring that we'll actually
&gt; enter the loop and leave otherwise.
&gt; Can someone have a look please: the patch solves the problem with my
&gt; reproducer, but I'm not sure the fix covers all the situations.
&gt; 
&gt; Regards,
&gt; Nadia
&gt; &lt;001_openib_low_rd_num.patch&gt;&lt;ATT00001..txt&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8118.php">Sylvain Jeaugey: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<li><strong>Previous message:</strong> <a href="8116.php">Jeff Squyres: "Re: [OMPI devel] v1.5: sigsegv in case of extremely low settings in theSRQs"</a>
<li><strong>In reply to:</strong> <a href="8110.php">nadia.derbey: "[OMPI devel] v1.5: sigsegv in case of extremely low settings in the SRQs"</a>
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
