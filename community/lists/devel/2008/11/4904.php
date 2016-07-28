<?
$subject_val = "Re: [OMPI devel] Modex and others";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 14 11:18:28 2008" -->
<!-- isoreceived="20081114161828" -->
<!-- sent="Fri, 14 Nov 2008 11:18:22 -0500" -->
<!-- isosent="20081114161822" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Modex and others" -->
<!-- id="82B4618A-B4EB-4CD7-9A33-ACE998E694C5_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="491C6CDD.4080906_at_aomail.uab.es" -->
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
<strong>Date:</strong> 2008-11-14 11:18:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4905.php">Richard Graham: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Previous message:</strong> <a href="4903.php">Jeff Squyres: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4891.php">Leonardo Fialho: "Re: [OMPI devel] Modex and others"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  I'm not sure the BML is the right place to do this.  The BML  
<br>
doesn't know anything about the internals of the BTLs; it's just a  
<br>
dispatch / multiplexer.
<br>
<p>Unfortunately, few of us are in a good place to respond at the moment  
<br>
-- SC is next week and we're all hosed trying to get ready for that...
<br>
<p><p>On Nov 13, 2008, at 1:07 PM, Leonardo Fialho wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Very good document.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; About the MPI layer (in case of fault), my idea is to give to BML  
</span><br>
<span class="quotelev1">&gt; the ability to handle BTL errors which occurs when a process die  
</span><br>
<span class="quotelev1">&gt; (and probably have been migrated), discovering the new location. I  
</span><br>
<span class="quotelev1">&gt; think that it is possible because the HNP request the restart for  
</span><br>
<span class="quotelev1">&gt; the orted daemon, so it knows the new location of the faulty process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Leonardo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph Castain escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt; If you look at the Dec meeting wiki, you will see that we are  
</span><br>
<span class="quotelev2">&gt;&gt; moving quickly to a modex-less launch anyway. It won't be the  
</span><br>
<span class="quotelev2">&gt;&gt; default because it requires pre-discovery of the cluster's network  
</span><br>
<span class="quotelev2">&gt;&gt; resources (for which we will provide a tool or method), but it will  
</span><br>
<span class="quotelev2">&gt;&gt; help resolve some of these problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Outside of that, I will have to leave it to the FT folks to figure  
</span><br>
<span class="quotelev2">&gt;&gt; out how to resolve modex situations. We have the ability to support  
</span><br>
<span class="quotelev2">&gt;&gt; multiple modex models (and already do), but I don't know if you can  
</span><br>
<span class="quotelev2">&gt;&gt; do what you describe or not - I'm not sure how the MPI layer will  
</span><br>
<span class="quotelev2">&gt;&gt; handle that situation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 13, 2008, at 6:22 AM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I agree with your viewpoint, principally about the &quot;reachability&quot;.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looking from the FT viewpoint, sometimes (or some FT  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; architectures), wants to recover an application process on other  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node different from the first. In this case a new modex should be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; called. It's fine for coordinated C/R, on the other hand, for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uncoordinated C/R its not a good choice, I think. One more time  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the tradeoffs...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A possible solution is to perform n-1 modex involving the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recovered process and each one of the other processes... It's  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; better than an allgather modex? I don't now. I think not. And what  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is the impact of a allgather modex while MPI thread is delivering  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; messages? These answers about these questions could suggest that a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uncoordinated C/R is not possible on Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres escribi&#243;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 7, 2008, at 10:18 AM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I understand that a process need to have the contact information  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to send MPI messages to other processes, and modex permits it.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My question is, why do not perform the contact exchange when it  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is necessary?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For example: in a M/W application, the workers does not need  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; more information than the masters contact info.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I think that it reduces the startup time, but increases the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *first* communication between two peers.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FWIW, this is actually a pretty complex topic.  There are many,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; many tradeoffs in terms of what performance do you want vs. what  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; functionality do you want.  This subject has been discussed for  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; many, many hours by the OMPI developers.  :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The modex is performed during MPI_INIT; the v1.3 series' modex is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; quite a bit more efficient than the v1.2 series' modex.  The  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; modex information comprises of several things, some of which are  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; either the contact info or &quot;reachability&quot; info of BTL modules.   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For the openib BTL, for example, port subnet ID's and MTU's are  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; passed in the modex, but LIDs don't need to be passed (in some  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cases) until two processes actually try to reach each other.  We  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use the reachability information to determine whether a given BTL  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; module *could* be used to connect to a remote peer.  For example,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if we get to the end of MPI_INIT and find a peer that cannot be  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reached, we abort (after hours of debate, we decided it was  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; better to abort right away when there was a peer that could not  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be reached rather than abort only on attempted first contact  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; because it could be a simple network/configuration error that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; should be detected immediately, rather than erroring out  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [potentially] long into a multi-hour run).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We have been discussing a &quot;modex-less&quot; startup for quite a while;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this is actually one of the topics on the agenda for an  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; engineering meeting that we're having December.  modex-less is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; quite important for scalability to many thousands of processes,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but other tradeoffs may be necessary to make this work (read:   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we've talked about modex-less for forever; we're finally likely  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to do it in the near future because of some upcoming very very  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; large scale machines at US DOE labs).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does that make sense?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax: +34-93-581-2478
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Leonardo Fialho
</span><br>
<span class="quotelev1">&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev1">&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev1">&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev1">&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev1">&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev1">&gt; Fax: +34-93-581-2478
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="4905.php">Richard Graham: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Previous message:</strong> <a href="4903.php">Jeff Squyres: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>In reply to:</strong> <a href="4891.php">Leonardo Fialho: "Re: [OMPI devel] Modex and others"</a>
<!-- nextthread="start" -->
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
