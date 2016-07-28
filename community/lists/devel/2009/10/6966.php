<?
$subject_val = "Re: [OMPI devel] [OMPI users] cartofile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 13 10:51:11 2009" -->
<!-- isoreceived="20091013145111" -->
<!-- sent="Tue, 13 Oct 2009 10:50:00 -0400" -->
<!-- isosent="20091013145000" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] cartofile" -->
<!-- id="4AD49398.3000903_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.2.00.0910131604510.557_at_jeaugeys.frec.bull.fr" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-13 10:50:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6967.php">Kenneth Lloyd: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>Previous message:</strong> <a href="6965.php">Sylvain Jeaugey: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>In reply to:</strong> <a href="6965.php">Sylvain Jeaugey: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6967.php">Kenneth Lloyd: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess my problem with the manpage or any info on carto in general is 
<br>
that there is no text that describes what happens if you have a 
<br>
cartofile and how it affects a job when you pass it in. 
<br>
<p>--td
<br>
<p>Sylvain Jeaugey wrote:
<br>
<span class="quotelev1">&gt; We worked a bit on it and yes, there is some work to do :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * The syntax used to describe the various components is far from being 
</span><br>
<span class="quotelev1">&gt; consistent from one usage to another (&quot;SOCKET&quot;, &quot;NODE&quot;, ...). We 
</span><br>
<span class="quotelev1">&gt; manage to make things reading the various not up to date example files 
</span><br>
<span class="quotelev1">&gt; - but mainly the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * The auto-detect component does not seem to do anything. We 
</span><br>
<span class="quotelev1">&gt; implemented it, and planned to release it. For now the code is heavily 
</span><br>
<span class="quotelev1">&gt; based on linux kernel functionalities, but missing the needed ifdefs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, we did a patch to dump in graphviz format the detected (or read) 
</span><br>
<span class="quotelev1">&gt; topology.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not much time to work on this right now, but if anyone wants to work 
</span><br>
<span class="quotelev1">&gt; on it, we may help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 13 Oct 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is where OMPI uses it:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/btl/openib/btl_openib_component.c:1918:static 
</span><br>
<span class="quotelev2">&gt;&gt; opal_carto_graph_t *host_topo;
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/btl/openib/btl_openib_component.c:1923:    
</span><br>
<span class="quotelev2">&gt;&gt; opal_carto_base_node_t *device_node;
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/btl/openib/btl_openib_component.c:1931:    device_node = 
</span><br>
<span class="quotelev2">&gt;&gt; opal_carto_base_find_node(host_topo, device);
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/btl/openib/btl_openib_component.c:1941: 
</span><br>
<span class="quotelev2">&gt;&gt; opal_carto_base_node_t *slot_node;
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/btl/openib/btl_openib_component.c:1951:        slot_node = 
</span><br>
<span class="quotelev2">&gt;&gt; opal_carto_base_find_node(host_topo, slot);
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/btl/openib/btl_openib_component.c:1958:        distance = 
</span><br>
<span class="quotelev2">&gt;&gt; opal_carto_base_spf(host_topo, slot_node, device_node);
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/btl/openib/btl_openib_component.c:1989: 
</span><br>
<span class="quotelev2">&gt;&gt; opal_carto_base_get_host_graph(&amp;host_topo, &quot;Infiniband&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/btl/openib/btl_openib_component.c:1998: 
</span><br>
<span class="quotelev2">&gt;&gt; opal_carto_base_free_graph(host_topo);
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/btl/sm/btl_sm.c:118:    opal_carto_graph_t *topo;
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/btl/sm/btl_sm.c:123:    opal_carto_node_distance_t *dist;
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/btl/sm/btl_sm.c:124:    opal_carto_base_node_t *slot_node;
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/btl/sm/btl_sm.c:129:    if (OMPI_SUCCESS != 
</span><br>
<span class="quotelev2">&gt;&gt; opal_carto_base_get_host_graph(&amp;topo, &quot;Memory&quot;)) {
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/btl/sm/btl_sm.c:134:     opal_value_array_init(&amp;dists, 
</span><br>
<span class="quotelev2">&gt;&gt; sizeof(opal_carto_node_distance_t));
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/btl/sm/btl_sm.c:157:     slot_node = 
</span><br>
<span class="quotelev2">&gt;&gt; opal_carto_base_find_node(topo, myslot);
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/btl/sm/btl_sm.c:163:     
</span><br>
<span class="quotelev2">&gt;&gt; opal_carto_base_get_nodes_distance(topo, slot_node, &quot;Memory&quot;, &amp;dists);
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/btl/sm/btl_sm.c:168:     dist = (opal_carto_node_distance_t 
</span><br>
<span class="quotelev2">&gt;&gt; *) opal_value_array_get_item(&amp;dists, 0);
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/btl/sm/btl_sm.c:175:     opal_carto_base_free_graph(topo);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No idea if it is of any value or not. I don't know of anyone who has 
</span><br>
<span class="quotelev2">&gt;&gt; ever written a carto file for a system, has any idea how to do so, or 
</span><br>
<span class="quotelev2">&gt;&gt; why they should. Looking at the code, it wouldn't appear to have any 
</span><br>
<span class="quotelev2">&gt;&gt; value on any of the machines at LANL, but I may be missing something 
</span><br>
<span class="quotelev2">&gt;&gt; - not a lot of help around to understand it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 13, 2009, at 7:08 AM, Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After rereading the manpage for the umpteenth time I agree with 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eugene that the information provided on cartofile is next to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; useless.   Ok, so you describe what your node looks like but what 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does mpirun or libmpi do with that information?  Other than the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; option to provide the cartofile it isn't obvious how a user or 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmpi uses this information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've looked on the faq and wiki and have not found anything yet on 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; how one &quot;current&quot; uses cartofile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This e-mail was on the users alias... see 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/09/10710.php">http://www.open-mpi.org/community/lists/users/2009/09/10710.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There wasn't much response, so let me ask another question.  How 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; about if we remove the cartofile section from the DESCRIPTION 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; section of the OMPI mpirun man page?  It's a lot of text that 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; illustrates how to create a cartofile without saying anything about 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; why one would want to go to the trouble.  What does this impact?  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What does it change?  What's the motivation for doing this stuff?  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What's this stuff good for?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Another alternative could be to move the cartofile description to a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FAQ page.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The mpirun man page is rather long and I was thinking that if we 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could remove some &quot;low impact&quot; stuff out, we could improve the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; overall signal-to-noise ratio of the page.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In any case, I personally would like to know what cartofiles are 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; good for.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you, but I don't understand who is consuming this 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; information for what.  E.g., the mpirun man page describes the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; carto file, but doesn't give users any indication whether they 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; should be worrying about this.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi Eugene,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; carto file is a file with a staic graph topology of your node.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; in the opal/mca/carto/file/carto_file.h you can see example.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ( yes I know that , it should be help/man list :) )
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Basically it describes a map of your node and inside 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; interconnection.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hopefully it will be discovered automatically someday,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; but for now you can describe your node manually.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Best regards Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Thu, Sep 17, 2009 at 12:38 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:Eugene.Loh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   I feel like I should know, but what's a cartofile?  I guess you
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   supply &quot;topological&quot; information about a host, but I can't tell
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   how this information is used by, say, mpirun.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------ 
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="6967.php">Kenneth Lloyd: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>Previous message:</strong> <a href="6965.php">Sylvain Jeaugey: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>In reply to:</strong> <a href="6965.php">Sylvain Jeaugey: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6967.php">Kenneth Lloyd: "Re: [OMPI devel] [OMPI users] cartofile"</a>
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
