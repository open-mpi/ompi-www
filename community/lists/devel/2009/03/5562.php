<?
$subject_val = "Re: [OMPI devel] calling sendi earlier in the PML";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 15:32:07 2009" -->
<!-- isoreceived="20090303203207" -->
<!-- sent="Tue, 03 Mar 2009 12:31:39 -0800" -->
<!-- isosent="20090303203139" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] calling sendi earlier in the PML" -->
<!-- id="49AD93AB.5000602_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FD4EE8D8-5DE1-49AE-889B-A6ADCEB9B156_at_cisco.com" -->
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
<strong>Date:</strong> 2009-03-03 15:31:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5563.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5561.php">Brian W. Barrett: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="5558.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5563.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5563.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5564.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; How about a compromise...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Keep a separate list somewhere of the sendi-enabled BTLs (this avoids  
</span><br>
<span class="quotelev1">&gt; looping over all the btl's and testing -- you can just loop over the  
</span><br>
<span class="quotelev1">&gt; btl's that you *know* have a sendi).  Put that at the top of the PML  
</span><br>
<span class="quotelev1">&gt; and avoid the costly overhead, yadda yadda yadda.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But instead of having a static list of sendi-enabled BTLs, rotate 
</span><br>
<span class="quotelev1">&gt; them  if there's &gt;1.  For example, say I have 3 sendi-enabled BTL 
</span><br>
<span class="quotelev1">&gt; modules:  A, B, C.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the first send, A-&gt;sendi() is used and it succeeds, so we shuffle  
</span><br>
<span class="quotelev1">&gt; the list and return.
</span><br>
<span class="quotelev1">&gt; In the next send, B-&gt;sendi() is used and it succeeds, so we shuffle  
</span><br>
<span class="quotelev1">&gt; the list and return.
</span><br>
<span class="quotelev1">&gt; In the next send, C-&gt;sendi() is used but it fails, so we shuffle the  
</span><br>
<span class="quotelev1">&gt; list and fall through to normal -&gt;send() processing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;shuffle the list&quot; can be as simple as opal_list_remove_first() and  
</span><br>
<span class="quotelev1">&gt; opal_list_append() -- both of which should be O(1).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This should distribute the load across sendi-enabled BTLs, and if  
</span><br>
<span class="quotelev1">&gt; those ever get &quot;overloaded&quot; (such that sendi fails), we fall through  
</span><br>
<span class="quotelev1">&gt; to normal load-balanced PML sending.
</span><br>
<p>First, this behavior is basically what I was proposing and what George 
<br>
didn't feel comfortable with.  It is arguably no compromise at all.  
<br>
(Uggh, why must I be so honest?)  For eager messages, it favors BTLs 
<br>
with sendi functions, which could lead to those BTLs becoming 
<br>
overloaded.  I think favoring BTLs with sendi for short messages is 
<br>
good.  George thinks that load balancing BTLs is good.
<br>
<p>Second, the implementation can be simpler than you suggest:
<br>
<p>*) You don't need a separate list since testing for a sendi-enabled BTL 
<br>
is relatively cheap (I think... could verify).
<br>
*) You don't need to shuffle the list.  The mechanism used by ob1 just 
<br>
resumes the BTL search from the last BTL used.  E.g., check 
<br>
<a href="https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.h#mca_pml_ob1_send_request_start">https://svn.open-mpi.org/source/xref/ompi_1.3/ompi/mca/pml/ob1/pml_ob1_sendreq.h#mca_pml_ob1_send_request_start</a> 
<br>
.  You use mca_bml_base_btl_array_get_next(&amp;btl_eager) to roundrobin 
<br>
over BTLs in a totally fair manner (remembering where the last loop left 
<br>
off), and using mca_bml_base_btl_array_get_size(&amp;btl_eager) to make sure 
<br>
you don't loop endlessly.
<br>
<p>I've been toying with two implementations.  The one I described in San 
<br>
Jose was called FAST, so let's still call it that.  It tests for sendi 
<br>
early in the PML, calling traditional send only if no sendi is found for 
<br>
any BTL.  To preserve the BTL ordering George favors (always 
<br>
roundrobinning over BTLs, looking only secondarily for sendi), I tried 
<br>
another implementation I'll call FAIR.  It attempts to initialize the 
<br>
send request only very minimally.  One still makes a number of function 
<br>
calls and goes &quot;deep&quot; into the PML, but defers as much send-request 
<br>
initialization as late as possible.  I can't promise that both 
<br>
implementations FAST and FAIR are equally rock solid or optimized, but 
<br>
this is where I am so far.  The differences are:
<br>
<p>*) FAST involves far fewer code changes.
<br>
*) FAST produces faster latencies.  E.g., for 0-byte OSU latencies, FAST 
<br>
is 8-10% better than OMPI while FAIR is only 1-3% (or 2-3%... something 
<br>
like that).  (The improvements I showed in San Jose for FAST were more 
<br>
dramatic than 8-10%, but that's because there were optimizations on the 
<br>
receive side and in the data convertors as well.  For the e-mail you're 
<br>
reading right now, I'm talking just about send-request optimizations.)
<br>
*) Theoretically, FAIR is broader reaching.  E.g., if persistent sends 
<br>
can always use a sendi path, they will all potentially benefit.  (This 
<br>
is theory.  I haven't actually observed such a speed-up yet and it might 
<br>
just end up getting lost in the noise.)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5563.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5561.php">Brian W. Barrett: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="5558.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5563.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5563.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5564.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
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
