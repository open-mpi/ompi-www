<?
$subject_val = "Re: [OMPI devel] calling sendi earlier in the PML";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 14:44:46 2009" -->
<!-- isoreceived="20090304194446" -->
<!-- sent="Wed, 04 Mar 2009 11:44:15 -0800" -->
<!-- isosent="20090304194415" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] calling sendi earlier in the PML" -->
<!-- id="49AEDA0F.3040700_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5E54A940-9688-4B0B-BD1F-ED984BEC687C_at_cisco.com" -->
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
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 14:44:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5574.php">Eugene Loh: "[OMPI devel] trunk problem for large-SMP startup?"</a>
<li><strong>Previous message:</strong> <a href="5572.php">Ralph H. Castain: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="5571.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5577.php">George Bosilca: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5577.php">George Bosilca: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 3, 2009, at 4:04 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How about an MCA parameter to switch between this mechanism (early   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sendi) and the original behavior (late sendi)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is the usual way that we resolve &quot;I want to do X / I want to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do  Y&quot; disputes.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I see the smiley face, but am unsure how much of the message to  
</span><br>
<span class="quotelev2">&gt;&gt; apply it to.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It applied to that sentence only -- the proposal was genuine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Assuming the MCA proposal is genuine (easy for implementor  
</span><br>
<span class="quotelev2">&gt;&gt; consensus? or easy for the user?  gee, lemme see, that's a tough  
</span><br>
<span class="quotelev2">&gt;&gt; choice...), I'll note that it's easy enough to do.  I've implemented  
</span><br>
<span class="quotelev2">&gt;&gt; the early-sendi-check by adding a function to ob1 to do the right  
</span><br>
<span class="quotelev2">&gt;&gt; thing.  So, I can call that function as soon as one enters the PML  
</span><br>
<span class="quotelev2">&gt;&gt; send.  The &quot;late sendi&quot; call is at a different call site.  So, one  
</span><br>
<span class="quotelev2">&gt;&gt; call site for &quot;early sendi&quot; and another for &quot;late sendi&quot;.  Easy to  
</span><br>
<span class="quotelev2">&gt;&gt; turn on/off.  We're not talking about many small codes changes  
</span><br>
<span class="quotelev2">&gt;&gt; pervading the source base.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; True, but Brian hated it.  :-)
</span><br>
<p>I guess, but *I* didn't hate it.  I thought you were trying to be 
<br>
funny.  Brian just needs to get a sense of humor.
<br>
<p><span class="quotelev1">&gt; How about Brian's proposal?
</span><br>
<p>Um, how to put it politely?  With your proposal, I didn't like the idea 
<br>
of exposing more MCA knobs.  With his proposal, I didn't like the idea 
<br>
of exposing more MCA knobs whose meaning is hard to decipher.
<br>
<p>Let me try another thought here.  Why do we have BTL sendi functions at 
<br>
all?  I'll make an assertion and would appreciate feedback:  a BTL sendi 
<br>
function contributes nothing to optimizing send latency.  To optimize 
<br>
send latency in the &quot;immediate&quot; case, we need *ONLY* PML work.
<br>
<p>I'm churning a lot and not making much progress, but I'll try chewing on 
<br>
that idea (unless someone points out it's utterly ridiculous).  I'll 
<br>
look into having PML ignore sendi functions altogether and just make the 
<br>
&quot;send-immediate&quot; path work fast with normal send functions.  If that 
<br>
works, then we can get rid of sendi functions and hopefully have a 
<br>
solution that makes sense for everyone.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5574.php">Eugene Loh: "[OMPI devel] trunk problem for large-SMP startup?"</a>
<li><strong>Previous message:</strong> <a href="5572.php">Ralph H. Castain: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="5571.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5577.php">George Bosilca: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5577.php">George Bosilca: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
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
