<?
$subject_val = "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 18:08:19 2009" -->
<!-- isoreceived="20090223230819" -->
<!-- sent="Mon, 23 Feb 2009 15:07:30 -0800" -->
<!-- isosent="20090223230730" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: eliminating &amp;quot;descriptor&amp;quot; argument from sendi function" -->
<!-- id="49A32C32.5030507_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49A32436.6000804_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-23 18:07:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5519.php">Mike Dubman: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<li><strong>Previous message:</strong> <a href="5517.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>In reply to:</strong> <a href="5517.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5520.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5520.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Actually, there may be a more important issue here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently, the PML chooses the BTL first.  Once the BTL choice is 
</span><br>
<span class="quotelev1">&gt; established, only then does the PML choose between sendi and send.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently, it's also the case that we're spending a lot of time in the 
</span><br>
<span class="quotelev1">&gt; PML doing a bunch of stuff that's totally unnecessary if the sendi 
</span><br>
<span class="quotelev1">&gt; succeeds.  So, we're neutralizing much of the advantage sendi is 
</span><br>
<span class="quotelev1">&gt; supposed to provide.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I'm changing the PML to invoke sendi much sooner.  The way I'm 
</span><br>
<span class="quotelev1">&gt; doing this is to loop over BTLs, looking for a sendi that exists and 
</span><br>
<span class="quotelev1">&gt; succeeds.  If I find one, I'm done.  If I don't, I have to go with the 
</span><br>
<span class="quotelev1">&gt; standard send code path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The logic, as I just described it, allows that multiple sendi 
</span><br>
<span class="quotelev1">&gt; functions could fail and that the send that is ultimately used might 
</span><br>
<span class="quotelev1">&gt; be for a different BTL than for any of the failing sendi's.  This 
</span><br>
<span class="quotelev1">&gt; would suggest that I do NOT want failing sendi's leaving any side 
</span><br>
<span class="quotelev1">&gt; effects (like allocated descriptors).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is my proposed logic bad?  Should I implement things another way?  
</span><br>
<span class="quotelev1">&gt; E.g., if I find a sendi function, use that BTL even if the sendi 
</span><br>
<span class="quotelev1">&gt; failed and another BTL might have a sendi that could succeed?  Or, 
</span><br>
<span class="quotelev1">&gt; does my proposed change provide the justification for my pulling 
</span><br>
<span class="quotelev1">&gt; descriptor allocations out of the sendi functions?
</span><br>
<p>Here's another way of looking at it.
<br>
<p>The current PML send code does this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;set_up_expensive_send_request(&amp;sendreq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for ( btl = ... ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( SUCCESS == sendi() ) return SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( SUCCESS == send(&amp;sendreq) ) return SUCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>That is, we try one BTL after another.  For each one, we try sendi 
<br>
first.  So, each sendi() that fails is immediately followed by a send() 
<br>
of the same BTL.  It's okay for a sendi() to do prep work for the send() 
<br>
of the same BTL.  This scheme does a bunch of expensive send-request 
<br>
initialization that is unnecessary if the sendi(), which doesn't need 
<br>
the send request, succeeds.
<br>
<p>My proposed PML send logic is this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for ( btl = ... ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( SUCCESS == sendi() ) return SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;set_up_expensive_send_request(&amp;sendreq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for ( btl = ... ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( SUCCESS == send(&amp;sendreq) ) return SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>That is, if I can find a sendi() function, I use it.  Only if I can't 
<br>
find any sendi() do I set up the send request and call send() functions.
<br>
<p>This is why I would like sendi() functions to have no side effects... 
<br>
e.g., no allocated descriptors.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5519.php">Mike Dubman: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<li><strong>Previous message:</strong> <a href="5517.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>In reply to:</strong> <a href="5517.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5520.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5520.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
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
