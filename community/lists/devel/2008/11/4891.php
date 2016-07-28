<?
$subject_val = "Re: [OMPI devel] Modex and others";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 13 13:04:38 2008" -->
<!-- isoreceived="20081113180438" -->
<!-- sent="Thu, 13 Nov 2008 19:07:25 +0100" -->
<!-- isosent="20081113180725" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Modex and others" -->
<!-- id="491C6CDD.4080906_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1E81AF6E-B965-47BC-986E-9B11C14AA71A_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-11-13 13:07:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4892.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Previous message:</strong> <a href="4890.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19991"</a>
<li><strong>In reply to:</strong> <a href="4889.php">Ralph Castain: "Re: [OMPI devel] Modex and others"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4904.php">Jeff Squyres: "Re: [OMPI devel] Modex and others"</a>
<li><strong>Reply:</strong> <a href="4904.php">Jeff Squyres: "Re: [OMPI devel] Modex and others"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Very good document.
<br>
<p>About the MPI layer (in case of fault), my idea is to give to BML the 
<br>
ability to handle BTL errors which occurs when a process die (and 
<br>
probably have been migrated), discovering the new location. I think that 
<br>
it is possible because the HNP request the restart for the orted daemon, 
<br>
so it knows the new location of the faulty process.
<br>
<p>Leonardo
<br>
<p>Ralph Castain escribi&#243;:
<br>
<span class="quotelev1">&gt; If you look at the Dec meeting wiki, you will see that we are moving 
</span><br>
<span class="quotelev1">&gt; quickly to a modex-less launch anyway. It won't be the default because 
</span><br>
<span class="quotelev1">&gt; it requires pre-discovery of the cluster's network resources (for 
</span><br>
<span class="quotelev1">&gt; which we will provide a tool or method), but it will help resolve some 
</span><br>
<span class="quotelev1">&gt; of these problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Outside of that, I will have to leave it to the FT folks to figure out 
</span><br>
<span class="quotelev1">&gt; how to resolve modex situations. We have the ability to support 
</span><br>
<span class="quotelev1">&gt; multiple modex models (and already do), but I don't know if you can do 
</span><br>
<span class="quotelev1">&gt; what you describe or not - I'm not sure how the MPI layer will handle 
</span><br>
<span class="quotelev1">&gt; that situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 13, 2008, at 6:22 AM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I agree with your viewpoint, principally about the &quot;reachability&quot;. 
</span><br>
<span class="quotelev2">&gt;&gt; But...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking from the FT viewpoint, sometimes (or some FT architectures), 
</span><br>
<span class="quotelev2">&gt;&gt; wants to recover an application process on other node different from 
</span><br>
<span class="quotelev2">&gt;&gt; the first. In this case a new modex should be called. It's fine for 
</span><br>
<span class="quotelev2">&gt;&gt; coordinated C/R, on the other hand, for uncoordinated C/R its not a 
</span><br>
<span class="quotelev2">&gt;&gt; good choice, I think. One more time the tradeoffs...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A possible solution is to perform n-1 modex involving the recovered 
</span><br>
<span class="quotelev2">&gt;&gt; process and each one of the other processes... It's better than an 
</span><br>
<span class="quotelev2">&gt;&gt; allgather modex? I don't now. I think not. And what is the impact of 
</span><br>
<span class="quotelev2">&gt;&gt; a allgather modex while MPI thread is delivering messages? These 
</span><br>
<span class="quotelev2">&gt;&gt; answers about these questions could suggest that a uncoordinated C/R 
</span><br>
<span class="quotelev2">&gt;&gt; is not possible on Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres escribi&#243;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 7, 2008, at 10:18 AM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I understand that a process need to have the contact information to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; send MPI messages to other processes, and modex permits it. My 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; question is, why do not perform the contact exchange when it is 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; necessary?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For example: in a M/W application, the workers does not need more 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; information than the masters contact info.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think that it reduces the startup time, but increases the *first* 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; communication between two peers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW, this is actually a pretty complex topic.  There are many, many 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tradeoffs in terms of what performance do you want vs. what 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functionality do you want.  This subject has been discussed for 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; many, many hours by the OMPI developers.  :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The modex is performed during MPI_INIT; the v1.3 series' modex is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quite a bit more efficient than the v1.2 series' modex.  The modex 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information comprises of several things, some of which are either 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the contact info or &quot;reachability&quot; info of BTL modules.  For the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openib BTL, for example, port subnet ID's and MTU's are passed in 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the modex, but LIDs don't need to be passed (in some cases) until 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; two processes actually try to reach each other.  We use the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reachability information to determine whether a given BTL module 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *could* be used to connect to a remote peer.  For example, if we get 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the end of MPI_INIT and find a peer that cannot be reached, we 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; abort (after hours of debate, we decided it was better to abort 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; right away when there was a peer that could not be reached rather 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than abort only on attempted first contact because it could be a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simple network/configuration error that should be detected 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; immediately, rather than erroring out [potentially] long into a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multi-hour run).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have been discussing a &quot;modex-less&quot; startup for quite a while; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is actually one of the topics on the agenda for an engineering 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; meeting that we're having December.  modex-less is quite important 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for scalability to many thousands of processes, but other tradeoffs 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may be necessary to make this work (read:  we've talked about 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; modex-less for forever; we're finally likely to do it in the near 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; future because of some upcoming very very large scale machines at US 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DOE labs).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does that make sense?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev2">&gt;&gt; Computer Architecture and Operating Systems Department - CAOS
</span><br>
<span class="quotelev2">&gt;&gt; Universidad Autonoma de Barcelona - UAB
</span><br>
<span class="quotelev2">&gt;&gt; ETSE, Edifcio Q, QC/3088
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
</span><br>
<span class="quotelev2">&gt;&gt; Phone: +34-93-581-2888
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +34-93-581-2478
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
<li><strong>Next message:</strong> <a href="4892.php">Eugene Loh: "Re: [OMPI devel] SM backing file size"</a>
<li><strong>Previous message:</strong> <a href="4890.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19991"</a>
<li><strong>In reply to:</strong> <a href="4889.php">Ralph Castain: "Re: [OMPI devel] Modex and others"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4904.php">Jeff Squyres: "Re: [OMPI devel] Modex and others"</a>
<li><strong>Reply:</strong> <a href="4904.php">Jeff Squyres: "Re: [OMPI devel] Modex and others"</a>
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
