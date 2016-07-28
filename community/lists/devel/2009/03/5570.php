<?
$subject_val = "Re: [OMPI devel] calling sendi earlier in the PML";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 06:25:45 2009" -->
<!-- isoreceived="20090304112545" -->
<!-- sent="Wed, 04 Mar 2009 06:25:38 -0500" -->
<!-- isosent="20090304112538" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] calling sendi earlier in the PML" -->
<!-- id="49AE6532.8010703_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49AD98E1.90002_at_sun.com" -->
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
<strong>Date:</strong> 2009-03-04 06:25:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5571.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5569.php">Brian W. Barrett: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="5565.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5558.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I didn't see exchange between you and Jeff at the end of this email.  It 
<br>
basically nullifies my half-baked concern.
<br>
<p>thanks,
<br>
<p>--td
<br>
<p>Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm on the verge of giving up moving the sendi call in the PML.  I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will try one or two last things, including this e-mail asking for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; feedback.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The idea is that when a BTL goes over a very low-latency 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interconnect (like sm), we really want to shave off whatever we can 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the software stack.  One way of doing so is to use a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;send-immediate&quot; function, which a few BTLs (like sm) provide.  The 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem is avoiding a bunch of overhead introduced by the PML before 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for a &quot;sendi()&quot; call.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Currently, the PML does something like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    for ( btl = ... ) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        if ( SUCCESS == btl-&gt;sendi() ) return SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        if ( SUCCESS == btl-&gt;send() ) return SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    return ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That is, it roundrobins over all available BTLs, for each one trying 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sendi() and then send().  If ever a sendi or send completes 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; successfully, we exit the loop successfully.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem is that this loop is buried several functioncalls deep 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the PML.  Before it reaches this far, the PML has initialized a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; large &quot;send request&quot; data structure while traversing some (to me) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; complicated call graph of functions.  This introduces a lot of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; overhead that mitigates much of the speedup we might hope to see 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the sendi function.  That overhead is unnecessary for a sendi 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call, but necessary for a send call.  I've tried reorganizing the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code to defer as much of that work as possible -- performing that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; overhead only if it's need to perform a send call -- but I've gotten 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; braincramp every time I've tried this reorganization.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think these are the options:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Option A) Punt!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Option B) Have someone more familiar with the PML make these changes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Option C) Have Eugene keep working at this because he'll learn more 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about the PML and it's good for his character.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Option D) Go to a strategy in which all BTLs are tried for sendi 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before any of them is tried for a send.  The code would look like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    for ( BTL = ... ) if ( SUCCESS == btl_sendi() ) return SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    for ( BTL = ... ) if ( SUCCESS == btl_send() ) return SUCCESS;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    return ERROR;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The reason this is so much easier to achieve is that we can put that 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first loop way up high in the PML (as soon as a send enters the PML, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; avoiding all that expensive overhead) and leave the second loop 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; several layers down, where it is today.  George is against this new 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; loop structure because he thinks round robin selection of BTLs is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; most fair and distributes the load over BTLs as evenly as possible.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (In contrast, the proposed loop would favor BTLs with sendi 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functions.)  It seems to me, however, that favoring BTLs that have 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sendi functions is exactly the right thing to do!  I'm not even 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; convinced that the conditions he's worried about are that common:  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multiple eager BTLs to poll, one has a sendi, and that sendi is not 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; very good or that BTL is getting overloaded.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess I agree with Eugene's points above.  Since we are dealing 
</span><br>
<span class="quotelev2">&gt;&gt; mainly with latency bound messages and not bandwidth spreading the 
</span><br>
<span class="quotelev2">&gt;&gt; messages among btls really shouldn't provide much/any advantage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that's right, but to be fair to George, I think his point is 
</span><br>
<span class="quotelev1">&gt; that even short messages can congest a BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe there is a range of sizes that could provide more bandwidth 
</span><br>
<span class="quotelev2">&gt;&gt; with striped IB or RNIC  connections.  But with the OpenIB 
</span><br>
<span class="quotelev2">&gt;&gt; multi-frags is there a way to section out that message size such that 
</span><br>
<span class="quotelev2">&gt;&gt; it wouldn't be considered for sendi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure I understand the question.  A message longer than the 
</span><br>
<span class="quotelev1">&gt; eager size automatically does not qualify for sendi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, the existence of a sendi path has to do with the BTL component, 
</span><br>
<span class="quotelev1">&gt; not with a particular NIC or something.  Not sure if that's relevent 
</span><br>
<span class="quotelev1">&gt; or not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So lets say we are still inclined to write fastpath messages to BTLs 
</span><br>
<span class="quotelev2">&gt;&gt; evenly.  Maybe one modification to the above is check to see if the 
</span><br>
<span class="quotelev2">&gt;&gt; connection we are writing does only have one BTL and try the 
</span><br>
<span class="quotelev2">&gt;&gt; btl_sendi for that case higher in the stack.  This would help with 
</span><br>
<span class="quotelev2">&gt;&gt; the SM BTL but certainly striped OpenIB connections would not gain.  
</span><br>
<span class="quotelev2">&gt;&gt; I don't believe other BTLs like TCP would matter either way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One can special-case sm.  E.g., if there is only one BTL, try sendi 
</span><br>
<span class="quotelev1">&gt; early.  Or, try sendi (early) only for the next BTL... if none, then 
</span><br>
<span class="quotelev1">&gt; dive down into the rest of the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm still not sure about the striped-openib point you're making.  The 
</span><br>
<span class="quotelev1">&gt; following may or may not make sense depending on how ridiculously off 
</span><br>
<span class="quotelev1">&gt; base my understanding or nomenclature is.  Let's start with an example 
</span><br>
<span class="quotelev1">&gt; Jeff brought up recently:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Example: if I have a dual-port IB HCA, Open MPI will make 2 
</span><br>
<span class="quotelev2">&gt;&gt; different  openib BTL modules.  In this case, the openib BTL will 
</span><br>
<span class="quotelev2">&gt;&gt; need to know  exactly which module the PML is trying to sendi on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, here there are two modules the PML could send on.  They're both 
</span><br>
<span class="quotelev1">&gt; openib modules.  So, we either define an openib sendi function (in 
</span><br>
<span class="quotelev1">&gt; which case short messages will be distributed equally over both 
</span><br>
<span class="quotelev1">&gt; connections) or we don't (in which case short messages will still be 
</span><br>
<span class="quotelev1">&gt; distributed equally over both  connetions!).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;problem&quot; is only if you have two different BTL components.  E.g., 
</span><br>
<span class="quotelev1">&gt; one connection is mx and two connections are tcp.  If mx defines a 
</span><br>
<span class="quotelev1">&gt; sendi, then all short messages over mx and none over tcp.  Sounds good 
</span><br>
<span class="quotelev1">&gt; in this case, but presumably that's due to my loaded example.
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
<li><strong>Next message:</strong> <a href="5571.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5569.php">Brian W. Barrett: "Re: [OMPI devel] 1.3.1rc3 was borked; 1.3.1rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="5565.php">Eugene Loh: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5558.php">Jeff Squyres: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
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
