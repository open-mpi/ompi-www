<?
$subject_val = "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 10:43:32 2009" -->
<!-- isoreceived="20090224154332" -->
<!-- sent="Tue, 24 Feb 2009 10:43:27 -0500" -->
<!-- isosent="20090224154327" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: eliminating &amp;quot;descriptor&amp;quot; argument from sendi function" -->
<!-- id="5E26C5D4-9378-42E3-9EC5-B196E046671D_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49A32C32.5030507_at_sun.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-24 10:43:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5521.php">Brian W. Barrett: "Re: [OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers"</a>
<li><strong>Previous message:</strong> <a href="5519.php">Mike Dubman: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<li><strong>In reply to:</strong> <a href="5518.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5522.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5522.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is another way to write the code without having to pay the  
<br>
expensive initialization of sendreq.
<br>
&nbsp;&nbsp;&nbsp;first_time = 0;
<br>
&nbsp;&nbsp;&nbsp;for ( btl = ... ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( SUCCESS == sendi() ) return SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( 0 == first_time++)  set_up_expensive_send_request(&amp;sendreq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( SUCCESS == send(&amp;sendreq) ) return SUCESS;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>Anyway, the main problem is not in this code. The main problem is in  
<br>
the fact that now instead of sharing the load over all available BTL  
<br>
in a round-robin fashion, you overload the BTL(s) providing the sendi  
<br>
function with small (and eager) messages, and you completely ignore  
<br>
all the others until something goes wrong.
<br>
<p>However, I can see one interesting point in your approach. As the BTLs  
<br>
are indexed in increasing order of their published latency in the  
<br>
eager array, we might benefit from the smallest latency for several  
<br>
small messages before taking the most expensive path. But this is not  
<br>
something we should tackle allegedly, as it modify the most  
<br>
performance related parts of the PML.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 23, 2009, at 18:07 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, there may be a more important issue here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currently, the PML chooses the BTL first.  Once the BTL choice is  
</span><br>
<span class="quotelev2">&gt;&gt; established, only then does the PML choose between sendi and send.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currently, it's also the case that we're spending a lot of time in  
</span><br>
<span class="quotelev2">&gt;&gt; the PML doing a bunch of stuff that's totally unnecessary if the  
</span><br>
<span class="quotelev2">&gt;&gt; sendi succeeds.  So, we're neutralizing much of the advantage sendi  
</span><br>
<span class="quotelev2">&gt;&gt; is supposed to provide.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, I'm changing the PML to invoke sendi much sooner.  The way I'm  
</span><br>
<span class="quotelev2">&gt;&gt; doing this is to loop over BTLs, looking for a sendi that exists  
</span><br>
<span class="quotelev2">&gt;&gt; and succeeds.  If I find one, I'm done.  If I don't, I have to go  
</span><br>
<span class="quotelev2">&gt;&gt; with the standard send code path.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The logic, as I just described it, allows that multiple sendi  
</span><br>
<span class="quotelev2">&gt;&gt; functions could fail and that the send that is ultimately used  
</span><br>
<span class="quotelev2">&gt;&gt; might be for a different BTL than for any of the failing sendi's.   
</span><br>
<span class="quotelev2">&gt;&gt; This would suggest that I do NOT want failing sendi's leaving any  
</span><br>
<span class="quotelev2">&gt;&gt; side effects (like allocated descriptors).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is my proposed logic bad?  Should I implement things another way?   
</span><br>
<span class="quotelev2">&gt;&gt; E.g., if I find a sendi function, use that BTL even if the sendi  
</span><br>
<span class="quotelev2">&gt;&gt; failed and another BTL might have a sendi that could succeed?  Or,  
</span><br>
<span class="quotelev2">&gt;&gt; does my proposed change provide the justification for my pulling  
</span><br>
<span class="quotelev2">&gt;&gt; descriptor allocations out of the sendi functions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's another way of looking at it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The current PML send code does this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   set_up_expensive_send_request(&amp;sendreq);
</span><br>
<span class="quotelev1">&gt;   for ( btl = ... ) {
</span><br>
<span class="quotelev1">&gt;       if ( SUCCESS == sendi() ) return SUCCESS;
</span><br>
<span class="quotelev1">&gt;       if ( SUCCESS == send(&amp;sendreq) ) return SUCESS;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is, we try one BTL after another.  For each one, we try sendi  
</span><br>
<span class="quotelev1">&gt; first.  So, each sendi() that fails is immediately followed by a  
</span><br>
<span class="quotelev1">&gt; send() of the same BTL.  It's okay for a sendi() to do prep work for  
</span><br>
<span class="quotelev1">&gt; the send() of the same BTL.  This scheme does a bunch of expensive  
</span><br>
<span class="quotelev1">&gt; send-request initialization that is unnecessary if the sendi(),  
</span><br>
<span class="quotelev1">&gt; which doesn't need the send request, succeeds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My proposed PML send logic is this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   for ( btl = ... ) {
</span><br>
<span class="quotelev1">&gt;       if ( SUCCESS == sendi() ) return SUCCESS;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   set_up_expensive_send_request(&amp;sendreq);
</span><br>
<span class="quotelev1">&gt;   for ( btl = ... ) {
</span><br>
<span class="quotelev1">&gt;       if ( SUCCESS == send(&amp;sendreq) ) return SUCCESS;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is, if I can find a sendi() function, I use it.  Only if I  
</span><br>
<span class="quotelev1">&gt; can't find any sendi() do I set up the send request and call send()  
</span><br>
<span class="quotelev1">&gt; functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is why I would like sendi() functions to have no side  
</span><br>
<span class="quotelev1">&gt; effects... e.g., no allocated descriptors.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5521.php">Brian W. Barrett: "Re: [OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers"</a>
<li><strong>Previous message:</strong> <a href="5519.php">Mike Dubman: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<li><strong>In reply to:</strong> <a href="5518.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5522.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5522.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
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
