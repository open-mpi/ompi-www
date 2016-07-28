<?
$subject_val = "Re: [OMPI devel] Modex and others";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 13 08:19:40 2008" -->
<!-- isoreceived="20081113131940" -->
<!-- sent="Thu, 13 Nov 2008 14:22:17 +0100" -->
<!-- isosent="20081113132217" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Modex and others" -->
<!-- id="491C2A09.1090802_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="30A4FC6B-C484-42A4-8B07-CDC06A49DF4B_at_cisco.com" -->
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
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-13 08:22:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4886.php">Leonardo Fialho: "[OMPI devel] RML OOB, What&#180;s wrong?"</a>
<li><strong>Previous message:</strong> <a href="4884.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4872.php">Jeff Squyres: "Re: [OMPI devel] Modex and others"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4889.php">Ralph Castain: "Re: [OMPI devel] Modex and others"</a>
<li><strong>Reply:</strong> <a href="4889.php">Ralph Castain: "Re: [OMPI devel] Modex and others"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I agree with your viewpoint, principally about the &quot;reachability&quot;. But...
<br>
<p>Looking from the FT viewpoint, sometimes (or some FT architectures), wants to recover an application process on other node different from the first. In this case a new modex should be called. It's fine for coordinated C/R, on the other hand, for uncoordinated C/R its not a good choice, I think. One more time the tradeoffs...
<br>
<p>A possible solution is to perform n-1 modex involving the recovered process and each one of the other processes... It's better than an allgather modex? I don't now. I think not. And what is the impact of a allgather modex while MPI thread is delivering messages? These answers about these questions could suggest that a uncoordinated C/R is not possible on Open MPI.
<br>
<p>Leonardo Fialho
<br>
<p><p>Jeff Squyres escribi&#243;:
<br>
<span class="quotelev1">&gt; On Nov 7, 2008, at 10:18 AM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I understand that a process need to have the contact information to 
</span><br>
<span class="quotelev2">&gt;&gt; send MPI messages to other processes, and modex permits it. My 
</span><br>
<span class="quotelev2">&gt;&gt; question is, why do not perform the contact exchange when it is 
</span><br>
<span class="quotelev2">&gt;&gt; necessary?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For example: in a M/W application, the workers does not need more 
</span><br>
<span class="quotelev2">&gt;&gt; information than the masters contact info.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think that it reduces the startup time, but increases the *first* 
</span><br>
<span class="quotelev2">&gt;&gt; communication between two peers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, this is actually a pretty complex topic.  There are many, many 
</span><br>
<span class="quotelev1">&gt; tradeoffs in terms of what performance do you want vs. what 
</span><br>
<span class="quotelev1">&gt; functionality do you want.  This subject has been discussed for many, 
</span><br>
<span class="quotelev1">&gt; many hours by the OMPI developers.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The modex is performed during MPI_INIT; the v1.3 series' modex is 
</span><br>
<span class="quotelev1">&gt; quite a bit more efficient than the v1.2 series' modex.  The modex 
</span><br>
<span class="quotelev1">&gt; information comprises of several things, some of which are either the 
</span><br>
<span class="quotelev1">&gt; contact info or &quot;reachability&quot; info of BTL modules.  For the openib 
</span><br>
<span class="quotelev1">&gt; BTL, for example, port subnet ID's and MTU's are passed in the modex, 
</span><br>
<span class="quotelev1">&gt; but LIDs don't need to be passed (in some cases) until two processes 
</span><br>
<span class="quotelev1">&gt; actually try to reach each other.  We use the reachability information 
</span><br>
<span class="quotelev1">&gt; to determine whether a given BTL module *could* be used to connect to 
</span><br>
<span class="quotelev1">&gt; a remote peer.  For example, if we get to the end of MPI_INIT and find 
</span><br>
<span class="quotelev1">&gt; a peer that cannot be reached, we abort (after hours of debate, we 
</span><br>
<span class="quotelev1">&gt; decided it was better to abort right away when there was a peer that 
</span><br>
<span class="quotelev1">&gt; could not be reached rather than abort only on attempted first contact 
</span><br>
<span class="quotelev1">&gt; because it could be a simple network/configuration error that should 
</span><br>
<span class="quotelev1">&gt; be detected immediately, rather than erroring out [potentially] long 
</span><br>
<span class="quotelev1">&gt; into a multi-hour run).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have been discussing a &quot;modex-less&quot; startup for quite a while; this 
</span><br>
<span class="quotelev1">&gt; is actually one of the topics on the agenda for an engineering meeting 
</span><br>
<span class="quotelev1">&gt; that we're having December.  modex-less is quite important for 
</span><br>
<span class="quotelev1">&gt; scalability to many thousands of processes, but other tradeoffs may be 
</span><br>
<span class="quotelev1">&gt; necessary to make this work (read:  we've talked about modex-less for 
</span><br>
<span class="quotelev1">&gt; forever; we're finally likely to do it in the near future because of 
</span><br>
<span class="quotelev1">&gt; some upcoming very very large scale machines at US DOE labs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Leonardo Fialho
Computer Architecture and Operating Systems Department - CAOS
Universidad Autonoma de Barcelona - UAB
ETSE, Edifcio Q, QC/3088
<a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
Phone: +34-93-581-2888
Fax: +34-93-581-2478
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4886.php">Leonardo Fialho: "[OMPI devel] RML OOB, What&#180;s wrong?"</a>
<li><strong>Previous message:</strong> <a href="4884.php">Ralph Castain: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4872.php">Jeff Squyres: "Re: [OMPI devel] Modex and others"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4889.php">Ralph Castain: "Re: [OMPI devel] Modex and others"</a>
<li><strong>Reply:</strong> <a href="4889.php">Ralph Castain: "Re: [OMPI devel] Modex and others"</a>
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
