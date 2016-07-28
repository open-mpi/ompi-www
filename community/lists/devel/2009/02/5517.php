<?
$subject_val = "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 17:34:03 2009" -->
<!-- isoreceived="20090223223403" -->
<!-- sent="Mon, 23 Feb 2009 14:33:26 -0800" -->
<!-- isosent="20090223223326" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: eliminating &amp;quot;descriptor&amp;quot; argument from sendi function" -->
<!-- id="49A32436.6000804_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="74B09838-7E38-4DDF-BCE6-CEE5D19BD1BE_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2009-02-23 17:33:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5518.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Previous message:</strong> <a href="5516.php">George Bosilca: "Re: [OMPI devel] Failure to make progress"</a>
<li><strong>In reply to:</strong> <a href="5514.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5518.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5518.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, there may be a more important issue here.
<br>
<p>Currently, the PML chooses the BTL first.  Once the BTL choice is 
<br>
established, only then does the PML choose between sendi and send.
<br>
<p>Currently, it's also the case that we're spending a lot of time in the 
<br>
PML doing a bunch of stuff that's totally unnecessary if the sendi 
<br>
succeeds.  So, we're neutralizing much of the advantage sendi is 
<br>
supposed to provide.
<br>
<p>So, I'm changing the PML to invoke sendi much sooner.  The way I'm doing 
<br>
this is to loop over BTLs, looking for a sendi that exists and 
<br>
succeeds.  If I find one, I'm done.  If I don't, I have to go with the 
<br>
standard send code path.
<br>
<p>The logic, as I just described it, allows that multiple sendi functions 
<br>
could fail and that the send that is ultimately used might be for a 
<br>
different BTL than for any of the failing sendi's.  This would suggest 
<br>
that I do NOT want failing sendi's leaving any side effects (like 
<br>
allocated descriptors).
<br>
<p>Is my proposed logic bad?  Should I implement things another way?  E.g., 
<br>
if I find a sendi function, use that BTL even if the sendi failed and 
<br>
another BTL might have a sendi that could succeed?  Or, does my proposed 
<br>
change provide the justification for my pulling descriptor allocations 
<br>
out of the sendi functions?
<br>
<p>Further comments (of less importance) below:
<br>
<p>George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 23, 2009, at 12:14 , Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It doesn't sound reasonable to me. There is a reason for this, and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I  think it's a good reason. The sendi function work for some  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devices as  a fast path for sending data, when the network is not  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flooded.  However, in the case sendi cannot do the job we expect,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the fact that  it return the descriptor save us a call (we don't  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have to do the alloc  call later).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This does not make any sense to me.  In what sense are we &quot;saving a  
</span><br>
<span class="quotelev2">&gt;&gt; call&quot;?  Not in the sense of run-time performance since the BTL is  
</span><br>
<span class="quotelev2">&gt;&gt; now having to allocate a descriptor it did not otherwise need.  The  
</span><br>
<span class="quotelev2">&gt;&gt; amount of work is the same (one descriptor allocation either way),  
</span><br>
<span class="quotelev2">&gt;&gt; but you're just pushing that work into the BTLs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The descriptor is a BTL resource. If the sendi doesn't return one, 
</span><br>
<span class="quotelev1">&gt; the  PML will have to call the BTL alloc function from the BTL again 
</span><br>
<span class="quotelev1">&gt; (in  this case the calls will look like this: btl_sendi followed by  
</span><br>
<span class="quotelev1">&gt; btl_alloc followed by btl_send). I'm not looking only at SM, I want  
</span><br>
<span class="quotelev1">&gt; all of the BTL to have the opportunity to get good performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If sendi return a descriptor when it fails to send the data the call  
</span><br>
<span class="quotelev1">&gt; list will be shorter: btl_sendi followed by btl_send. I'm trying to  
</span><br>
<span class="quotelev1">&gt; decrease the number of jumps between the layers (PML/BTL), not the  
</span><br>
<span class="quotelev1">&gt; number of lines of code in the BTL.
</span><br>
<p>I think architectural streamlining -- even if just a little bit -- is a 
<br>
good thing.  And, in this particular case, replicating code into each 
<br>
BTL sendi function just doesn't buy us anything.  When the PML allocates 
<br>
the descriptor, it simply calls mca_bml_base_alloc(), which is an 
<br>
*inlined* function that immediately calls the BTL alloc function.  No 
<br>
big deal.
<br>
<p>Further, having the sendi allocate the descriptor only makes a 
<br>
difference when the BTL has provided a sendi function *AND* when that 
<br>
function failed.  That's an edge case.  It's much more likely that the 
<br>
BTL doesn't have a sendi function (e.g., openib) *OR* that function sent 
<br>
the message successfully.
<br>
<p>I could try comparing performance, but that's a lot of work just to 
<br>
measure &quot;noise&quot;.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5518.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Previous message:</strong> <a href="5516.php">George Bosilca: "Re: [OMPI devel] Failure to make progress"</a>
<li><strong>In reply to:</strong> <a href="5514.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5518.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Reply:</strong> <a href="5518.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
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
