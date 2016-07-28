<?
$subject_val = "Re: [OMPI devel] [OMPI users] cartofile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 13 10:20:02 2009" -->
<!-- isoreceived="20091013142002" -->
<!-- sent="Tue, 13 Oct 2009 16:15:42 +0200 (CEST)" -->
<!-- isosent="20091013141542" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] cartofile" -->
<!-- id="alpine.DEB.2.00.0910131604510.557_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="54573ED8-B1FA-4B66-9D75-610B94FBA8F1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] cartofile<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-13 10:15:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6966.php">Terry Dontje: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>Previous message:</strong> <a href="6964.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>In reply to:</strong> <a href="6964.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6966.php">Terry Dontje: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>Reply:</strong> <a href="6966.php">Terry Dontje: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We worked a bit on it and yes, there is some work to do :
<br>
<p>* The syntax used to describe the various components is far from being 
<br>
consistent from one usage to another (&quot;SOCKET&quot;, &quot;NODE&quot;, ...). We manage to 
<br>
make things reading the various not up to date example files - but mainly 
<br>
the code.
<br>
<p>* The auto-detect component does not seem to do anything. We implemented 
<br>
it, and planned to release it. For now the code is heavily based on linux 
<br>
kernel functionalities, but missing the needed ifdefs.
<br>
<p>Also, we did a patch to dump in graphviz format the detected (or read) 
<br>
topology.
<br>
<p>Not much time to work on this right now, but if anyone wants to work on 
<br>
it, we may help.
<br>
<p>Sylvain
<br>
<p>On Tue, 13 Oct 2009, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Here is where OMPI uses it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/btl_openib_component.c:1918:static opal_carto_graph_t 
</span><br>
<span class="quotelev1">&gt; *host_topo;
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/btl_openib_component.c:1923:    opal_carto_base_node_t 
</span><br>
<span class="quotelev1">&gt; *device_node;
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/btl_openib_component.c:1931:    device_node = 
</span><br>
<span class="quotelev1">&gt; opal_carto_base_find_node(host_topo, device);
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/btl_openib_component.c:1941: 
</span><br>
<span class="quotelev1">&gt; opal_carto_base_node_t *slot_node;
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/btl_openib_component.c:1951:        slot_node = 
</span><br>
<span class="quotelev1">&gt; opal_carto_base_find_node(host_topo, slot);
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/btl_openib_component.c:1958:        distance = 
</span><br>
<span class="quotelev1">&gt; opal_carto_base_spf(host_topo, slot_node, device_node);
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/btl_openib_component.c:1989: 
</span><br>
<span class="quotelev1">&gt; opal_carto_base_get_host_graph(&amp;host_topo, &quot;Infiniband&quot;);
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/openib/btl_openib_component.c:1998: 
</span><br>
<span class="quotelev1">&gt; opal_carto_base_free_graph(host_topo);
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/sm/btl_sm.c:118:    opal_carto_graph_t *topo;
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/sm/btl_sm.c:123:    opal_carto_node_distance_t *dist;
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/sm/btl_sm.c:124:    opal_carto_base_node_t *slot_node;
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/sm/btl_sm.c:129:    if (OMPI_SUCCESS != 
</span><br>
<span class="quotelev1">&gt; opal_carto_base_get_host_graph(&amp;topo, &quot;Memory&quot;)) {
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/sm/btl_sm.c:134:     opal_value_array_init(&amp;dists, 
</span><br>
<span class="quotelev1">&gt; sizeof(opal_carto_node_distance_t));
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/sm/btl_sm.c:157:     slot_node = opal_carto_base_find_node(topo, 
</span><br>
<span class="quotelev1">&gt; myslot);
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/sm/btl_sm.c:163:     opal_carto_base_get_nodes_distance(topo, 
</span><br>
<span class="quotelev1">&gt; slot_node, &quot;Memory&quot;, &amp;dists);
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/sm/btl_sm.c:168:     dist = (opal_carto_node_distance_t *) 
</span><br>
<span class="quotelev1">&gt; opal_value_array_get_item(&amp;dists, 0);
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/sm/btl_sm.c:175:     opal_carto_base_free_graph(topo);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No idea if it is of any value or not. I don't know of anyone who has ever 
</span><br>
<span class="quotelev1">&gt; written a carto file for a system, has any idea how to do so, or why they 
</span><br>
<span class="quotelev1">&gt; should. Looking at the code, it wouldn't appear to have any value on any of 
</span><br>
<span class="quotelev1">&gt; the machines at LANL, but I may be missing something - not a lot of help 
</span><br>
<span class="quotelev1">&gt; around to understand it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 13, 2009, at 7:08 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After rereading the manpage for the umpteenth time I agree with Eugene that 
</span><br>
<span class="quotelev2">&gt;&gt; the information provided on cartofile is next to useless.   Ok, so you 
</span><br>
<span class="quotelev2">&gt;&gt; describe what your node looks like but what does mpirun or libmpi do with 
</span><br>
<span class="quotelev2">&gt;&gt; that information?  Other than the option to provide the cartofile it isn't 
</span><br>
<span class="quotelev2">&gt;&gt; obvious how a user or libmpi uses this information.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've looked on the faq and wiki and have not found anything yet on how one 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;current&quot; uses cartofile.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This e-mail was on the users alias... see 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/09/10710.php">http://www.open-mpi.org/community/lists/users/2009/09/10710.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There wasn't much response, so let me ask another question.  How about if 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we remove the cartofile section from the DESCRIPTION section of the OMPI 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun man page?  It's a lot of text that illustrates how to create a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cartofile without saying anything about why one would want to go to the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trouble.  What does this impact?  What does it change?  What's the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; motivation for doing this stuff?  What's this stuff good for?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another alternative could be to move the cartofile description to a FAQ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; page.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The mpirun man page is rather long and I was thinking that if we could 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remove some &quot;low impact&quot; stuff out, we could improve the overall 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal-to-noise ratio of the page.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In any case, I personally would like to know what cartofiles are good for.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you, but I don't understand who is consuming this information for 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; what.  E.g., the mpirun man page describes the carto file, but doesn't 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; give users any indication whether they should be worrying about this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Eugene,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; carto file is a file with a staic graph topology of your node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in the opal/mca/carto/file/carto_file.h you can see example.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ( yes I know that , it should be help/man list :) )
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Basically it describes a map of your node and inside interconnection.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hopefully it will be discovered automatically someday,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but for now you can describe your node manually.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best regards Lenny.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Thu, Sep 17, 2009 at 12:38 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;mailto:Eugene.Loh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   I feel like I should know, but what's a cartofile?  I guess you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   supply &quot;topological&quot; information about a host, but I can't tell
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   how this information is used by, say, mpirun.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6966.php">Terry Dontje: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>Previous message:</strong> <a href="6964.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>In reply to:</strong> <a href="6964.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6966.php">Terry Dontje: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>Reply:</strong> <a href="6966.php">Terry Dontje: "Re: [OMPI devel] [OMPI users] cartofile"</a>
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
