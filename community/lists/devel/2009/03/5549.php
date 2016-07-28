<?
$subject_val = "Re: [OMPI devel] calling sendi earlier in the PML";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 06:26:15 2009" -->
<!-- isoreceived="20090303112615" -->
<!-- sent="Tue, 03 Mar 2009 06:26:08 -0500" -->
<!-- isosent="20090303112608" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] calling sendi earlier in the PML" -->
<!-- id="49AD13D0.8010200_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-03 06:26:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5550.php">Jeff Squyres: "[OMPI devel] 1.3.1rc3 escapes"</a>
<li><strong>Previous message:</strong> <a href="5548.php">Lenny Verkhovsky: "Re: [OMPI devel] PML/ob1 problem"</a>
<li><strong>In reply to:</strong> <a href="5541.php">Eugene Loh: "[OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5565.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5565.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; I'm on the verge of giving up moving the sendi call in the PML.  I 
</span><br>
<span class="quotelev1">&gt; will try one or two last things, including this e-mail asking for 
</span><br>
<span class="quotelev1">&gt; feedback.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The idea is that when a BTL goes over a very low-latency interconnect 
</span><br>
<span class="quotelev1">&gt; (like sm), we really want to shave off whatever we can from the 
</span><br>
<span class="quotelev1">&gt; software stack.  One way of doing so is to use a &quot;send-immediate&quot; 
</span><br>
<span class="quotelev1">&gt; function, which a few BTLs (like sm) provide.  The problem is avoiding 
</span><br>
<span class="quotelev1">&gt; a bunch of overhead introduced by the PML before checking for a 
</span><br>
<span class="quotelev1">&gt; &quot;sendi()&quot; call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently, the PML does something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    for ( btl = ... ) {
</span><br>
<span class="quotelev1">&gt;        if ( SUCCESS == btl-&gt;sendi() ) return SUCCESS;
</span><br>
<span class="quotelev1">&gt;        if ( SUCCESS == btl-&gt;send() ) return SUCCESS;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    return ERROR;
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
<span class="quotelev1">&gt; The problem is that this loop is buried several functioncalls deep in 
</span><br>
<span class="quotelev1">&gt; the PML.  Before it reaches this far, the PML has initialized a large 
</span><br>
<span class="quotelev1">&gt; &quot;send request&quot; data structure while traversing some (to me) 
</span><br>
<span class="quotelev1">&gt; complicated call graph of functions.  This introduces a lot of 
</span><br>
<span class="quotelev1">&gt; overhead that mitigates much of the speedup we might hope to see with 
</span><br>
<span class="quotelev1">&gt; the sendi function.  That overhead is unnecessary for a sendi call, 
</span><br>
<span class="quotelev1">&gt; but necessary for a send call.  I've tried reorganizing the code to 
</span><br>
<span class="quotelev1">&gt; defer as much of that work as possible -- performing that overhead 
</span><br>
<span class="quotelev1">&gt; only if it's need to perform a send call -- but I've gotten braincramp 
</span><br>
<span class="quotelev1">&gt; every time I've tried this reorganization.
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
<span class="quotelev1">&gt; before any of them is tried for a send.  The code would look like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    for ( BTL = ... ) if ( SUCCESS == btl_sendi() ) return SUCCESS;
</span><br>
<span class="quotelev1">&gt;    for ( BTL = ... ) if ( SUCCESS == btl_send() ) return SUCCESS;
</span><br>
<span class="quotelev1">&gt;    return ERROR;
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
<span class="quotelev1">&gt; loop structure because he thinks round robin selection of BTLs is most 
</span><br>
<span class="quotelev1">&gt; fair and distributes the load over BTLs as evenly as possible.  (In 
</span><br>
<span class="quotelev1">&gt; contrast, the proposed loop would favor BTLs with sendi functions.)  
</span><br>
<span class="quotelev1">&gt; It seems to me, however, that favoring BTLs that have sendi functions 
</span><br>
<span class="quotelev1">&gt; is exactly the right thing to do!  I'm not even convinced that the 
</span><br>
<span class="quotelev1">&gt; conditions he's worried about are that common:  multiple eager BTLs to 
</span><br>
<span class="quotelev1">&gt; poll, one has a sendi, and that sendi is not very good or that BTL is 
</span><br>
<span class="quotelev1">&gt; getting overloaded.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I guess I agree with Eugene's points above.  Since we are dealing mainly 
<br>
with latency bound messages and not bandwidth spreading the messages 
<br>
among btls really shouldn't provide much/any advantage.   Maybe there is 
<br>
a range of sizes that could provide more bandwidth with striped IB or 
<br>
RNIC  connections.  But with the OpenIB multi-frags is there a way to 
<br>
section out that message size such that it wouldn't be considered for sendi?
<br>
<p>So lets say we are still inclined to write fastpath messages to BTLs 
<br>
evenly.  Maybe one modification to the above is check to see if the 
<br>
connection we are writing does only have one BTL and try the btl_sendi 
<br>
for that case higher in the stack.  This would help with the SM BTL but 
<br>
certainly striped OpenIB connections would not gain.  I don't believe 
<br>
other BTLs like TCP would matter either way.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Anyhow, I like Option D, but George does not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Option E) Go to a strategy in which the next BTL is tested for a sendi 
</span><br>
<span class="quotelev1">&gt; function.  If there is one, use it.  If not, just continue with the 
</span><br>
<span class="quotelev1">&gt; usual heavyweight PML procedure.  This feels a little hackish to me, 
</span><br>
<span class="quotelev1">&gt; but it'll mean that most of the time that sendi can be called, the 
</span><br>
<span class="quotelev1">&gt; heavyweight PML overhead will be avoided, while at the same time 
</span><br>
<span class="quotelev1">&gt; &quot;fair&quot; roundrobin polling over the BTLs is maintained.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5550.php">Jeff Squyres: "[OMPI devel] 1.3.1rc3 escapes"</a>
<li><strong>Previous message:</strong> <a href="5548.php">Lenny Verkhovsky: "Re: [OMPI devel] PML/ob1 problem"</a>
<li><strong>In reply to:</strong> <a href="5541.php">Eugene Loh: "[OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5565.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5565.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
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
