<?
$subject_val = "Re: [OMPI devel] Modex and others";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  7 16:16:23 2008" -->
<!-- isoreceived="20081107211623" -->
<!-- sent="Fri, 7 Nov 2008 16:16:17 -0500" -->
<!-- isosent="20081107211617" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Modex and others" -->
<!-- id="30A4FC6B-C484-42A4-8B07-CDC06A49DF4B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49145C4C.5070407_at_aomail.uab.es" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Modex and others<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-07 16:16:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4873.php">Rolf Vandevaart: "Re: [OMPI devel] Additional excluded tcp inteface"</a>
<li><strong>Previous message:</strong> <a href="4871.php">Leonardo Fialho: "Re: [OMPI devel] libevent"</a>
<li><strong>In reply to:</strong> <a href="4864.php">Leonardo Fialho: "[OMPI devel] Modex and others"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4885.php">Leonardo Fialho: "Re: [OMPI devel] Modex and others"</a>
<li><strong>Reply:</strong> <a href="4885.php">Leonardo Fialho: "Re: [OMPI devel] Modex and others"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 7, 2008, at 10:18 AM, Leonardo Fialho wrote:
<br>
<p><span class="quotelev1">&gt; I understand that a process need to have the contact information to  
</span><br>
<span class="quotelev1">&gt; send MPI messages to other processes, and modex permits it. My  
</span><br>
<span class="quotelev1">&gt; question is, why do not perform the contact exchange when it is  
</span><br>
<span class="quotelev1">&gt; necessary?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example: in a M/W application, the workers does not need more  
</span><br>
<span class="quotelev1">&gt; information than the masters contact info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that it reduces the startup time, but increases the *first*  
</span><br>
<span class="quotelev1">&gt; communication between two peers.
</span><br>
<p><p>FWIW, this is actually a pretty complex topic.  There are many, many  
<br>
tradeoffs in terms of what performance do you want vs. what  
<br>
functionality do you want.  This subject has been discussed for many,  
<br>
many hours by the OMPI developers.  :-)
<br>
<p>The modex is performed during MPI_INIT; the v1.3 series' modex is  
<br>
quite a bit more efficient than the v1.2 series' modex.  The modex  
<br>
information comprises of several things, some of which are either the  
<br>
contact info or &quot;reachability&quot; info of BTL modules.  For the openib  
<br>
BTL, for example, port subnet ID's and MTU's are passed in the modex,  
<br>
but LIDs don't need to be passed (in some cases) until two processes  
<br>
actually try to reach each other.  We use the reachability information  
<br>
to determine whether a given BTL module *could* be used to connect to  
<br>
a remote peer.  For example, if we get to the end of MPI_INIT and find  
<br>
a peer that cannot be reached, we abort (after hours of debate, we  
<br>
decided it was better to abort right away when there was a peer that  
<br>
could not be reached rather than abort only on attempted first contact  
<br>
because it could be a simple network/configuration error that should  
<br>
be detected immediately, rather than erroring out [potentially] long  
<br>
into a multi-hour run).
<br>
<p>We have been discussing a &quot;modex-less&quot; startup for quite a while; this  
<br>
is actually one of the topics on the agenda for an engineering meeting  
<br>
that we're having December.  modex-less is quite important for  
<br>
scalability to many thousands of processes, but other tradeoffs may be  
<br>
necessary to make this work (read:  we've talked about modex-less for  
<br>
forever; we're finally likely to do it in the near future because of  
<br>
some upcoming very very large scale machines at US DOE labs).
<br>
<p>Does that make sense?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4873.php">Rolf Vandevaart: "Re: [OMPI devel] Additional excluded tcp inteface"</a>
<li><strong>Previous message:</strong> <a href="4871.php">Leonardo Fialho: "Re: [OMPI devel] libevent"</a>
<li><strong>In reply to:</strong> <a href="4864.php">Leonardo Fialho: "[OMPI devel] Modex and others"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4885.php">Leonardo Fialho: "Re: [OMPI devel] Modex and others"</a>
<li><strong>Reply:</strong> <a href="4885.php">Leonardo Fialho: "Re: [OMPI devel] Modex and others"</a>
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
