<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 22 11:19:54 2013" -->
<!-- isoreceived="20130722151954" -->
<!-- sent="Mon, 22 Jul 2013 15:19:47 +0000" -->
<!-- isosent="20130722151947" -->
<!-- name="David Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup" -->
<!-- id="8E25A938F00ED34D90F8C49322FDF1928C9954_at_xmb-rcd-x09.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CE105FD8.12B1C%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup<br>
<strong>From:</strong> David Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-22 11:19:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12672.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Previous message:</strong> <a href="12670.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>In reply to:</strong> <a href="12670.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12672.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Reply:</strong> <a href="12672.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 20, 2013, at 4:42 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 7/20/13 3:33 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - In terms of memory this solution provide an approach where there will never be an extra overhead. The ompi_proc_t is not changed, and the extra array of endpoints is only created if the components that share it, are all loaded and enabled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree.  Jeff and I talked about a similar concept, but the dependent load was an idea crusher to me.
</span><br>
<p>I'm not really familiar with the code being discussed here, but could you insert a small fixed-size cache in front of this in order to mitigate this second load in the most common cases?
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12672.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Previous message:</strong> <a href="12670.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>In reply to:</strong> <a href="12670.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12672.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>Reply:</strong> <a href="12672.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
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
