<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 22 12:27:21 2013" -->
<!-- isoreceived="20130722162721" -->
<!-- sent="Mon, 22 Jul 2013 16:22:51 +0000" -->
<!-- isosent="20130722162251" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup" -->
<!-- id="CE12B7F9.12420%bwbarre_at_sandia.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8E25A938F00ED34D90F8C49322FDF1928C9954_at_xmb-rcd-x09.cisco.com" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-22 12:22:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12673.php">Barrett, Brian W: "[OMPI devel] v1.7 RTE testing / changes"</a>
<li><strong>Previous message:</strong> <a href="12671.php">David Goodell (dgoodell): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>In reply to:</strong> <a href="12671.php">David Goodell (dgoodell): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/22/13 9:19 AM, &quot;David Goodell (dgoodell)&quot; &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;On Jul 20, 2013, at 4:42 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 7/20/13 3:33 PM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - In terms of memory this solution provide an approach where there
</span><br>
<span class="quotelev3">&gt;&gt;&gt;will never be an extra overhead. The ompi_proc_t is not changed, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;the extra array of endpoints is only created if the components that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;share it, are all loaded and enabled.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I agree.  Jeff and I talked about a similar concept, but the dependent
</span><br>
<span class="quotelev2">&gt;&gt;load was an idea crusher to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm not really familiar with the code being discussed here, but could you
</span><br>
<span class="quotelev1">&gt;insert a small fixed-size cache in front of this in order to mitigate
</span><br>
<span class="quotelev1">&gt;this second load in the most common cases
</span><br>
<p>That's essentially what I was proposing, except that the size of the cache
<br>
would be based on how many components claim they need a cache entry during
<br>
configure time.  George seems to think that number will blow up.  I think
<br>
that since we're adding a dynamic interface, we can use the RFC process
<br>
that's already in place to make sure it stays small.
<br>
<p><p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories

</pre>
<p>
<p><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12672/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12673.php">Barrett, Brian W: "[OMPI devel] v1.7 RTE testing / changes"</a>
<li><strong>Previous message:</strong> <a href="12671.php">David Goodell (dgoodell): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
<li><strong>In reply to:</strong> <a href="12671.php">David Goodell (dgoodell): "Re: [OMPI devel] [EXTERNAL] Re: RFC: Change ompi_proc_t endpoint data lookup"</a>
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
