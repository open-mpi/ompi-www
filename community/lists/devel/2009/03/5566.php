<?
$subject_val = "Re: [OMPI devel] calling sendi earlier in the PML";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 15:59:25 2009" -->
<!-- isoreceived="20090303205925" -->
<!-- sent="Tue, 3 Mar 2009 15:59:21 -0500 (EST)" -->
<!-- isosent="20090303205921" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] calling sendi earlier in the PML" -->
<!-- id="alpine.DEB.1.10.0903031553060.20458_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2442F1A-E205-45EE-B1EC-0D6E041EB687_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] calling sendi earlier in the PML<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-03 15:59:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5567.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5565.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5564.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5568.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 3 Mar 2009, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 3, 2009, at 3:31 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First, this behavior is basically what I was proposing and what George 
</span><br>
<span class="quotelev2">&gt;&gt; didn't feel comfortable with.  It is arguably no compromise at all.  (Uggh, 
</span><br>
<span class="quotelev2">&gt;&gt; why must I be so honest?)  For eager messages, it favors BTLs with sendi 
</span><br>
<span class="quotelev2">&gt;&gt; functions, which could lead to those BTLs becoming overloaded.  I think 
</span><br>
<span class="quotelev2">&gt;&gt; favoring BTLs with sendi for short messages is good.  George thinks that 
</span><br>
<span class="quotelev2">&gt;&gt; load balancing BTLs is good.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Second, the implementation can be simpler than you suggest:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *) You don't need a separate list since testing for a sendi-enabled BTL is 
</span><br>
<span class="quotelev2">&gt;&gt; relatively cheap (I think... could verify).
</span><br>
<span class="quotelev2">&gt;&gt; *) You don't need to shuffle the list.  The mechanism used by ob1 just 
</span><br>
<span class="quotelev2">&gt;&gt; resumes the BTL search from the last BTL used.  E.g., check 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.h#mca_pml_ob1_send_request_start">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.h#mca_pml_ob1_send_request_start</a> 
</span><br>
<span class="quotelev2">&gt;&gt; .  You use mca_bml_base_btl_array_get_next(&amp;btl_eager) to roundrobin over 
</span><br>
<span class="quotelev2">&gt;&gt; BTLs in a totally fair manner (remembering where the last loop left off), 
</span><br>
<span class="quotelev2">&gt;&gt; and using mca_bml_base_btl_array_get_size(&amp;btl_eager) to make sure you 
</span><br>
<span class="quotelev2">&gt;&gt; don't loop endlessly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cool / fair enough.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about an MCA parameter to switch between this mechanism (early sendi) and 
</span><br>
<span class="quotelev1">&gt; the original behavior (late sendi)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the usual way that we resolve &quot;I want to do X / I want to do Y&quot; 
</span><br>
<span class="quotelev1">&gt; disputes.  :-)
</span><br>
<p>Of all the options presented, this is the one I dislike most :).
<br>
<p>This is *THE* critical path of the OB1 PML.  It's already horribly complex 
<br>
and hard to follow (as Eugene is finding out the hard way).  Making it 
<br>
more complex as a way to settle this argument is pain and suffering just 
<br>
to avoid conflict.
<br>
<p>However, one possible option that just occurred to me.  I propose yet 
<br>
another option.  If (AND ONLY IF) ob1/r2 detects that there are at least 
<br>
two BTLs to the same peer at the same priority and at least one has a 
<br>
sendi and at least one does not have a sendi, what about an MCA parameter 
<br>
to disable all sendi functions to that peer?
<br>
<p>There's only a 1% gain in the FAIR protocol Euegene proposed, so we'd lose 
<br>
that 1% in the heterogeneous multi-nic case (the least common case). 
<br>
There would be a much bigger gain for the sendi homogeneous multi-nic / 
<br>
all single-nic cases (much more common), because the FAST protocol would 
<br>
be used.
<br>
<p>That way, we get the FAST protocol in all cases for sm, which is what I 
<br>
really want ;).
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5567.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5565.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5564.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5568.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
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
