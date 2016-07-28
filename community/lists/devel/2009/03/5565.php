<?
$subject_val = "Re: [OMPI devel] calling sendi earlier in the PML";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 15:54:33 2009" -->
<!-- isoreceived="20090303205433" -->
<!-- sent="Tue, 03 Mar 2009 12:53:53 -0800" -->
<!-- isosent="20090303205353" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] calling sendi earlier in the PML" -->
<!-- id="49AD98E1.90002_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49AD13D0.8010200_at_sun.com" -->
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
<strong>Date:</strong> 2009-03-03 15:53:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5566.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5564.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5549.php">Terry Dontje: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5570.php">Terry Dontje: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5570.php">Terry Dontje: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm on the verge of giving up moving the sendi call in the PML.  I 
</span><br>
<span class="quotelev2">&gt;&gt; will try one or two last things, including this e-mail asking for 
</span><br>
<span class="quotelev2">&gt;&gt; feedback.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The idea is that when a BTL goes over a very low-latency interconnect 
</span><br>
<span class="quotelev2">&gt;&gt; (like sm), we really want to shave off whatever we can from the 
</span><br>
<span class="quotelev2">&gt;&gt; software stack.  One way of doing so is to use a &quot;send-immediate&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; function, which a few BTLs (like sm) provide.  The problem is 
</span><br>
<span class="quotelev2">&gt;&gt; avoiding a bunch of overhead introduced by the PML before checking 
</span><br>
<span class="quotelev2">&gt;&gt; for a &quot;sendi()&quot; call.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currently, the PML does something like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    for ( btl = ... ) {
</span><br>
<span class="quotelev2">&gt;&gt;        if ( SUCCESS == btl-&gt;sendi() ) return SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;        if ( SUCCESS == btl-&gt;send() ) return SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;    return ERROR;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That is, it roundrobins over all available BTLs, for each one trying 
</span><br>
<span class="quotelev2">&gt;&gt; sendi() and then send().  If ever a sendi or send completes 
</span><br>
<span class="quotelev2">&gt;&gt; successfully, we exit the loop successfully.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that this loop is buried several functioncalls deep in 
</span><br>
<span class="quotelev2">&gt;&gt; the PML.  Before it reaches this far, the PML has initialized a large 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;send request&quot; data structure while traversing some (to me) 
</span><br>
<span class="quotelev2">&gt;&gt; complicated call graph of functions.  This introduces a lot of 
</span><br>
<span class="quotelev2">&gt;&gt; overhead that mitigates much of the speedup we might hope to see with 
</span><br>
<span class="quotelev2">&gt;&gt; the sendi function.  That overhead is unnecessary for a sendi call, 
</span><br>
<span class="quotelev2">&gt;&gt; but necessary for a send call.  I've tried reorganizing the code to 
</span><br>
<span class="quotelev2">&gt;&gt; defer as much of that work as possible -- performing that overhead 
</span><br>
<span class="quotelev2">&gt;&gt; only if it's need to perform a send call -- but I've gotten 
</span><br>
<span class="quotelev2">&gt;&gt; braincramp every time I've tried this reorganization.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think these are the options:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Option A) Punt!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Option B) Have someone more familiar with the PML make these changes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Option C) Have Eugene keep working at this because he'll learn more 
</span><br>
<span class="quotelev2">&gt;&gt; about the PML and it's good for his character.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Option D) Go to a strategy in which all BTLs are tried for sendi 
</span><br>
<span class="quotelev2">&gt;&gt; before any of them is tried for a send.  The code would look like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    for ( BTL = ... ) if ( SUCCESS == btl_sendi() ) return SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;    for ( BTL = ... ) if ( SUCCESS == btl_send() ) return SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;    return ERROR;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The reason this is so much easier to achieve is that we can put that 
</span><br>
<span class="quotelev2">&gt;&gt; first loop way up high in the PML (as soon as a send enters the PML, 
</span><br>
<span class="quotelev2">&gt;&gt; avoiding all that expensive overhead) and leave the second loop 
</span><br>
<span class="quotelev2">&gt;&gt; several layers down, where it is today.  George is against this new 
</span><br>
<span class="quotelev2">&gt;&gt; loop structure because he thinks round robin selection of BTLs is 
</span><br>
<span class="quotelev2">&gt;&gt; most fair and distributes the load over BTLs as evenly as possible.  
</span><br>
<span class="quotelev2">&gt;&gt; (In contrast, the proposed loop would favor BTLs with sendi 
</span><br>
<span class="quotelev2">&gt;&gt; functions.)  It seems to me, however, that favoring BTLs that have 
</span><br>
<span class="quotelev2">&gt;&gt; sendi functions is exactly the right thing to do!  I'm not even 
</span><br>
<span class="quotelev2">&gt;&gt; convinced that the conditions he's worried about are that common:  
</span><br>
<span class="quotelev2">&gt;&gt; multiple eager BTLs to poll, one has a sendi, and that sendi is not 
</span><br>
<span class="quotelev2">&gt;&gt; very good or that BTL is getting overloaded.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I guess I agree with Eugene's points above.  Since we are dealing 
</span><br>
<span class="quotelev1">&gt; mainly with latency bound messages and not bandwidth spreading the 
</span><br>
<span class="quotelev1">&gt; messages among btls really shouldn't provide much/any advantage.
</span><br>
<p>I think that's right, but to be fair to George, I think his point is 
<br>
that even short messages can congest a BTL.
<br>
<p><span class="quotelev1">&gt; Maybe there is a range of sizes that could provide more bandwidth with 
</span><br>
<span class="quotelev1">&gt; striped IB or RNIC  connections.  But with the OpenIB multi-frags is 
</span><br>
<span class="quotelev1">&gt; there a way to section out that message size such that it wouldn't be 
</span><br>
<span class="quotelev1">&gt; considered for sendi?
</span><br>
<p>I'm not sure I understand the question.  A message longer than the eager 
<br>
size automatically does not qualify for sendi.
<br>
<p>Also, the existence of a sendi path has to do with the BTL component, 
<br>
not with a particular NIC or something.  Not sure if that's relevent or not.
<br>
<p><span class="quotelev1">&gt; So lets say we are still inclined to write fastpath messages to BTLs 
</span><br>
<span class="quotelev1">&gt; evenly.  Maybe one modification to the above is check to see if the 
</span><br>
<span class="quotelev1">&gt; connection we are writing does only have one BTL and try the btl_sendi 
</span><br>
<span class="quotelev1">&gt; for that case higher in the stack.  This would help with the SM BTL 
</span><br>
<span class="quotelev1">&gt; but certainly striped OpenIB connections would not gain.  I don't 
</span><br>
<span class="quotelev1">&gt; believe other BTLs like TCP would matter either way.
</span><br>
<p>One can special-case sm.  E.g., if there is only one BTL, try sendi 
<br>
early.  Or, try sendi (early) only for the next BTL... if none, then 
<br>
dive down into the rest of the code.
<br>
<p>I'm still not sure about the striped-openib point you're making.  The 
<br>
following may or may not make sense depending on how ridiculously off 
<br>
base my understanding or nomenclature is.  Let's start with an example 
<br>
Jeff brought up recently:
<br>
<p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Example: if I have a dual-port IB HCA, Open MPI will make 2 different  
</span><br>
<span class="quotelev1">&gt; openib BTL modules.  In this case, the openib BTL will need to know  
</span><br>
<span class="quotelev1">&gt; exactly which module the PML is trying to sendi on.
</span><br>
<p>So, here there are two modules the PML could send on.  They're both 
<br>
openib modules.  So, we either define an openib sendi function (in which 
<br>
case short messages will be distributed equally over both connections) 
<br>
or we don't (in which case short messages will still be distributed 
<br>
equally over both  connetions!).
<br>
<p>The &quot;problem&quot; is only if you have two different BTL components.  E.g., 
<br>
one connection is mx and two connections are tcp.  If mx defines a 
<br>
sendi, then all short messages over mx and none over tcp.  Sounds good 
<br>
in this case, but presumably that's due to my loaded example.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5566.php">Brian W. Barrett: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5564.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>In reply to:</strong> <a href="5549.php">Terry Dontje: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5570.php">Terry Dontje: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Reply:</strong> <a href="5570.php">Terry Dontje: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
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
