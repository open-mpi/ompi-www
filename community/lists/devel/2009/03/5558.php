<?
$subject_val = "Re: [OMPI devel] calling sendi earlier in the PML";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 13:09:38 2009" -->
<!-- isoreceived="20090303180938" -->
<!-- sent="Tue, 3 Mar 2009 13:09:16 -0500" -->
<!-- isosent="20090303180916" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] calling sendi earlier in the PML" -->
<!-- id="FD4EE8D8-5DE1-49AE-889B-A6ADCEB9B156_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49AC2754.9080308_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-03 13:09:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5559.php">Jeff Squyres: "Re: [OMPI devel] How to configure Open MPI on multi-port IB HCA cluster"</a>
<li><strong>Previous message:</strong> <a href="5557.php">Jeff Squyres: "[OMPI devel] Writeup of new release methodology"</a>
<li><strong>In reply to:</strong> <a href="5541.php">Eugene Loh: "[OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5562.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5562.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How about a compromise...
<br>
<p>Keep a separate list somewhere of the sendi-enabled BTLs (this avoids  
<br>
looping over all the btl's and testing -- you can just loop over the  
<br>
btl's that you *know* have a sendi).  Put that at the top of the PML  
<br>
and avoid the costly overhead, yadda yadda yadda.
<br>
<p>But instead of having a static list of sendi-enabled BTLs, rotate them  
<br>
if there's &gt;1.  For example, say I have 3 sendi-enabled BTL modules:  
<br>
A, B, C.
<br>
<p>In the first send, A-&gt;sendi() is used and it succeeds, so we shuffle  
<br>
the list and return.
<br>
In the next send, B-&gt;sendi() is used and it succeeds, so we shuffle  
<br>
the list and return.
<br>
In the next send, C-&gt;sendi() is used but it fails, so we shuffle the  
<br>
list and fall through to normal -&gt;send() processing.
<br>
<p>&quot;shuffle the list&quot; can be as simple as opal_list_remove_first() and  
<br>
opal_list_append() -- both of which should be O(1).
<br>
<p>This should distribute the load across sendi-enabled BTLs, and if  
<br>
those ever get &quot;overloaded&quot; (such that sendi fails), we fall through  
<br>
to normal load-balanced PML sending.
<br>
<p>Howzat?
<br>
<p><p><p>On Mar 2, 2009, at 1:37 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I'm on the verge of giving up moving the sendi call in the PML.  I  
</span><br>
<span class="quotelev1">&gt; will try one or two last things, including this e-mail asking for  
</span><br>
<span class="quotelev1">&gt; feedback.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The idea is that when a BTL goes over a very low-latency  
</span><br>
<span class="quotelev1">&gt; interconnect (like sm), we really want to shave off whatever we can  
</span><br>
<span class="quotelev1">&gt; from the software stack.  One way of doing so is to use a &quot;send- 
</span><br>
<span class="quotelev1">&gt; immediate&quot; function, which a few BTLs (like sm) provide.  The  
</span><br>
<span class="quotelev1">&gt; problem is avoiding a bunch of overhead introduced by the PML before  
</span><br>
<span class="quotelev1">&gt; checking for a &quot;sendi()&quot; call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently, the PML does something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   for ( btl = ... ) {
</span><br>
<span class="quotelev1">&gt;       if ( SUCCESS == btl-&gt;sendi() ) return SUCCESS;
</span><br>
<span class="quotelev1">&gt;       if ( SUCCESS == btl-&gt;send() ) return SUCCESS;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   return ERROR;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is, it roundrobins over all available BTLs, for each one trying  
</span><br>
<span class="quotelev1">&gt; sendi() and then send().  If ever a sendi or send completes  
</span><br>
<span class="quotelev1">&gt; successfully, we exit the loop successfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that this loop is buried several functioncalls deep  
</span><br>
<span class="quotelev1">&gt; in the PML.  Before it reaches this far, the PML has initialized a  
</span><br>
<span class="quotelev1">&gt; large &quot;send request&quot; data structure while traversing some (to me)  
</span><br>
<span class="quotelev1">&gt; complicated call graph of functions.  This introduces a lot of  
</span><br>
<span class="quotelev1">&gt; overhead that mitigates much of the speedup we might hope to see  
</span><br>
<span class="quotelev1">&gt; with the sendi function.  That overhead is unnecessary for a sendi  
</span><br>
<span class="quotelev1">&gt; call, but necessary for a send call.  I've tried reorganizing the  
</span><br>
<span class="quotelev1">&gt; code to defer as much of that work as possible -- performing that  
</span><br>
<span class="quotelev1">&gt; overhead only if it's need to perform a send call -- but I've gotten  
</span><br>
<span class="quotelev1">&gt; braincramp every time I've tried this reorganization.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think these are the options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Option A) Punt!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Option B) Have someone more familiar with the PML make these changes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Option C) Have Eugene keep working at this because he'll learn more  
</span><br>
<span class="quotelev1">&gt; about the PML and it's good for his character.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Option D) Go to a strategy in which all BTLs are tried for sendi  
</span><br>
<span class="quotelev1">&gt; before any of them is tried for a send.  The code would look like  
</span><br>
<span class="quotelev1">&gt; this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   for ( BTL = ... ) if ( SUCCESS == btl_sendi() ) return SUCCESS;
</span><br>
<span class="quotelev1">&gt;   for ( BTL = ... ) if ( SUCCESS == btl_send() ) return SUCCESS;
</span><br>
<span class="quotelev1">&gt;   return ERROR;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason this is so much easier to achieve is that we can put that  
</span><br>
<span class="quotelev1">&gt; first loop way up high in the PML (as soon as a send enters the PML,  
</span><br>
<span class="quotelev1">&gt; avoiding all that expensive overhead) and leave the second loop  
</span><br>
<span class="quotelev1">&gt; several layers down, where it is today.  George is against this new  
</span><br>
<span class="quotelev1">&gt; loop structure because he thinks round robin selection of BTLs is  
</span><br>
<span class="quotelev1">&gt; most fair and distributes the load over BTLs as evenly as possible.   
</span><br>
<span class="quotelev1">&gt; (In contrast, the proposed loop would favor BTLs with sendi  
</span><br>
<span class="quotelev1">&gt; functions.)  It seems to me, however, that favoring BTLs that have  
</span><br>
<span class="quotelev1">&gt; sendi functions is exactly the right thing to do!  I'm not even  
</span><br>
<span class="quotelev1">&gt; convinced that the conditions he's worried about are that common:   
</span><br>
<span class="quotelev1">&gt; multiple eager BTLs to poll, one has a sendi, and that sendi is not  
</span><br>
<span class="quotelev1">&gt; very good or that BTL is getting overloaded.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyhow, I like Option D, but George does not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Option E) Go to a strategy in which the next BTL is tested for a  
</span><br>
<span class="quotelev1">&gt; sendi function.  If there is one, use it.  If not, just continue  
</span><br>
<span class="quotelev1">&gt; with the usual heavyweight PML procedure.  This feels a little  
</span><br>
<span class="quotelev1">&gt; hackish to me, but it'll mean that most of the time that sendi can  
</span><br>
<span class="quotelev1">&gt; be called, the heavyweight PML overhead will be avoided, while at  
</span><br>
<span class="quotelev1">&gt; the same time &quot;fair&quot; roundrobin polling over the BTLs is maintained.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll proceed with Option C for the time being.  If I don't announce  
</span><br>
<span class="quotelev1">&gt; success or surrender in the next few days, please write to me at the  
</span><br>
<span class="quotelev1">&gt; insane asylum.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5559.php">Jeff Squyres: "Re: [OMPI devel] How to configure Open MPI on multi-port IB HCA cluster"</a>
<li><strong>Previous message:</strong> <a href="5557.php">Jeff Squyres: "[OMPI devel] Writeup of new release methodology"</a>
<li><strong>In reply to:</strong> <a href="5541.php">Eugene Loh: "[OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5562.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5562.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
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
