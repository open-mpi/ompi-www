<?
$subject_val = "Re: [OMPI devel] MCA component open";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May  3 12:02:56 2008" -->
<!-- isoreceived="20080503160256" -->
<!-- sent="Sat, 3 May 2008 12:02:43 -0400" -->
<!-- isosent="20080503160243" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MCA component open" -->
<!-- id="D1F68752-CCD7-4CB1-8FB6-69F38B08C73A_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3F903EB5-AA9C-41D1-99A4-4DB94AB3CAC0_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MCA component open<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-03 12:02:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3812.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3810.php">Pak Lui: "Re: [OMPI devel] undefined references for rdma_get_peer_addr &amp;	rdma_get_local_addr"</a>
<li><strong>In reply to:</strong> <a href="3805.php">Josh Hursey: "Re: [OMPI devel] MCA component open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3814.php">Jeff Squyres: "Re: [OMPI devel] MCA component open"</a>
<li><strong>Reply:</strong> <a href="3814.php">Jeff Squyres: "Re: [OMPI devel] MCA component open"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem: The orted open all plm before discarding most of them,  
<br>
all this in the context where a &quot;--mca plm rsh&quot; was present on the  
<br>
mpirun invocation.
<br>
<p>The non problem: In the context of the mpirun process, only the rsh  
<br>
plm is opened, as the mpirun is the only process who get the &quot;--mca  
<br>
plm rsh&quot; information. As this specific argument is not included on the  
<br>
list of arguments we forward to the orted processes, there is no way  
<br>
that the orted can abide to the imposed restriction. Note that if the  
<br>
restriction is inserted in the config file, then even the orted  
<br>
respect it. So far the only problem I can see here, is that the orted  
<br>
are opening a framework that they are not supposed to (at least not in  
<br>
most of the cases).
<br>
<p>When we implemented the MCA filtering stuff, we proposed another  
<br>
optimization. More specifically, a default component for all special  
<br>
frameworks (i.e. used or not based on the type of process) that will  
<br>
be statically linked inside the library (and therefore will not  
<br>
generate any NFS traffic). Its only goal was to execute the selection  
<br>
logic when any of its functions were called, in other words on-demand  
<br>
component loading feature. Starting from there, a real component will  
<br>
be selected, and all other calls to this component will be directed to  
<br>
the selected component. I perfectly remember that Ralph was completely  
<br>
against this feature for two reasons: 1) all components in the ORTE  
<br>
framework had to be loaded and they will do the &quot;if(!hnp) return  
<br>
NULL&quot;; 2) he proposed to implement the null component.
<br>
<p>I was and I'm still against 1) so I guess that any effort toward  
<br>
implementing a null or none component will have my support.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 2, 2008, at 4:40 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; We could also call it 'null' for the empty set of components? Or maybe
</span><br>
<span class="quotelev1">&gt; OMPI-NULL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Outside of the naming do others this this is a useful feature to
</span><br>
<span class="quotelev1">&gt; implement?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 2, 2008, at 10:51 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would think that adding a special keyword would be the correct
</span><br>
<span class="quotelev2">&gt;&gt; method. I
</span><br>
<span class="quotelev2">&gt;&gt; would suggest something with an &quot;ompi&quot; in it, perhaps capitalized so
</span><br>
<span class="quotelev2">&gt;&gt; there
</span><br>
<span class="quotelev2">&gt;&gt; is no confusion...something like &quot;OMPI-NONE&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 5/2/08 8:37 AM, &quot;Josh Hursey&quot; &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't believe we have the logic in place to tell  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_component_open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'do not open anything'. (I could be wrong though).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Adding such an option might be useful, but we would have to consider
</span><br>
<span class="quotelev3">&gt;&gt;&gt; how that option should be specified by the user. Currently if you do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not set a value (leave empty space in mca-params.conf) then the MCA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system takes this to indicate that all components are eligible for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; selection. If you specify any options then only those options should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be opened. We could add a special keyword (such as 'none') to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; indicate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'open nothing'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What do people think about that?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 2, 2008, at 10:22 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I see what the problem is. In the case of slurm, I don't want -any-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; components to be opened, even though I am going to call plm open/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; select. I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have to leave that logic in place for those environments that -do-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; want to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specify some backend secondary launcher.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So the question is: how do I tell mca_component_open &quot;do not open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; anything&quot;?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If we don't have a mechanism for doing that, can we create one?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 5/2/08 8:02 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Well, I have a current version of the trunk. I add an MCA param to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; environment indicating that only rsh is to be used by the orted.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Yet I get
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; an output from every orted indicating that slurm (misspelled!) is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; available
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for selection.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This tells me that the slurm component is being opened, even  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; though
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; param is set.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I can check again to ensure that the param is set...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 5/2/08 7:53 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (moving to devel list for wider audience)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hmm.  I thought the UTK stuff from a while ago supposedly changed
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; this
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; behavior to only open the components that were specifically
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; requested.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This behavior looks like the *original* MCA behavior -- open them
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; all,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; then discard what we don't want (but doesn't necessarily reclaim
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; memory because of how dlclose works).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On May 2, 2008, at 9:48 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Yo guys
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I've noticed something on the trunk that just doesn't strike me
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; correct.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; If I specify &quot;-mca plm rsh&quot;, it is my expectation that (a) only
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; component will be opened, and (b) only the rsh module will be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; selected,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; unless that component indicates that it cannot run.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; What I am seeing, though, is that -all- the plm components are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; being
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; opened.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is not only unnecessary, but consumes memory and leads to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; concern over
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; whether or not some other module could become active.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is this the intended behavior? If so, may I suggest we change
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; it in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Josh's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; branch prior to bringing it over?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3811/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3812.php">Brad Penoff: "Re: [OMPI devel] Build failure on FreeBSD 7"</a>
<li><strong>Previous message:</strong> <a href="3810.php">Pak Lui: "Re: [OMPI devel] undefined references for rdma_get_peer_addr &amp;	rdma_get_local_addr"</a>
<li><strong>In reply to:</strong> <a href="3805.php">Josh Hursey: "Re: [OMPI devel] MCA component open"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3814.php">Jeff Squyres: "Re: [OMPI devel] MCA component open"</a>
<li><strong>Reply:</strong> <a href="3814.php">Jeff Squyres: "Re: [OMPI devel] MCA component open"</a>
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
