<?
$subject_val = "Re: [OMPI devel] [OMPI users] cartofile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 13 09:16:28 2009" -->
<!-- isoreceived="20091013131628" -->
<!-- sent="Tue, 13 Oct 2009 07:16:16 -0600" -->
<!-- isosent="20091013131616" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] cartofile" -->
<!-- id="54573ED8-B1FA-4B66-9D75-610B94FBA8F1_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AD47BBD.40405_at_sun.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-13 09:16:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6965.php">Sylvain Jeaugey: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>Previous message:</strong> <a href="6963.php">Terry Dontje: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>In reply to:</strong> <a href="6963.php">Terry Dontje: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6965.php">Sylvain Jeaugey: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>Reply:</strong> <a href="6965.php">Sylvain Jeaugey: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is where OMPI uses it:
<br>
<p>ompi/mca/btl/openib/btl_openib_component.c:1918:static  
<br>
opal_carto_graph_t *host_topo;
<br>
ompi/mca/btl/openib/btl_openib_component.c:1923:     
<br>
opal_carto_base_node_t *device_node;
<br>
ompi/mca/btl/openib/btl_openib_component.c:1931:    device_node =  
<br>
opal_carto_base_find_node(host_topo, device);
<br>
ompi/mca/btl/openib/btl_openib_component.c:1941:         
<br>
opal_carto_base_node_t *slot_node;
<br>
ompi/mca/btl/openib/btl_openib_component.c:1951:        slot_node =  
<br>
opal_carto_base_find_node(host_topo, slot);
<br>
ompi/mca/btl/openib/btl_openib_component.c:1958:        distance =  
<br>
opal_carto_base_spf(host_topo, slot_node, device_node);
<br>
ompi/mca/btl/openib/btl_openib_component.c:1989:     
<br>
opal_carto_base_get_host_graph(&amp;host_topo, &quot;Infiniband&quot;);
<br>
ompi/mca/btl/openib/btl_openib_component.c:1998:     
<br>
opal_carto_base_free_graph(host_topo);
<br>
ompi/mca/btl/sm/btl_sm.c:118:    opal_carto_graph_t *topo;
<br>
ompi/mca/btl/sm/btl_sm.c:123:    opal_carto_node_distance_t *dist;
<br>
ompi/mca/btl/sm/btl_sm.c:124:    opal_carto_base_node_t *slot_node;
<br>
ompi/mca/btl/sm/btl_sm.c:129:    if (OMPI_SUCCESS !=  
<br>
opal_carto_base_get_host_graph(&amp;topo, &quot;Memory&quot;)) {
<br>
ompi/mca/btl/sm/btl_sm.c:134:     opal_value_array_init(&amp;dists, sizeof 
<br>
(opal_carto_node_distance_t));
<br>
ompi/mca/btl/sm/btl_sm.c:157:     slot_node = opal_carto_base_find_node 
<br>
(topo, myslot);
<br>
ompi/mca/btl/sm/btl_sm.c:163:     opal_carto_base_get_nodes_distance 
<br>
(topo, slot_node, &quot;Memory&quot;, &amp;dists);
<br>
ompi/mca/btl/sm/btl_sm.c:168:     dist = (opal_carto_node_distance_t  
<br>
*) opal_value_array_get_item(&amp;dists, 0);
<br>
ompi/mca/btl/sm/btl_sm.c:175:     opal_carto_base_free_graph(topo);
<br>
<p>No idea if it is of any value or not. I don't know of anyone who has  
<br>
ever written a carto file for a system, has any idea how to do so, or  
<br>
why they should. Looking at the code, it wouldn't appear to have any  
<br>
value on any of the machines at LANL, but I may be missing something -  
<br>
not a lot of help around to understand it.
<br>
<p>On Oct 13, 2009, at 7:08 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; After rereading the manpage for the umpteenth time I agree with  
</span><br>
<span class="quotelev1">&gt; Eugene that the information provided on cartofile is next to  
</span><br>
<span class="quotelev1">&gt; useless.   Ok, so you describe what your node looks like but what  
</span><br>
<span class="quotelev1">&gt; does mpirun or libmpi do with that information?  Other than the  
</span><br>
<span class="quotelev1">&gt; option to provide the cartofile it isn't obvious how a user or  
</span><br>
<span class="quotelev1">&gt; libmpi uses this information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've looked on the faq and wiki and have not found anything yet on  
</span><br>
<span class="quotelev1">&gt; how one &quot;current&quot; uses cartofile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This e-mail was on the users alias... see <a href="http://www.open-mpi.org/community/lists/users/2009/09/10710.php">http://www.open-mpi.org/community/lists/users/2009/09/10710.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There wasn't much response, so let me ask another question.  How  
</span><br>
<span class="quotelev2">&gt;&gt; about if we remove the cartofile section from the DESCRIPTION  
</span><br>
<span class="quotelev2">&gt;&gt; section of the OMPI mpirun man page?  It's a lot of text that  
</span><br>
<span class="quotelev2">&gt;&gt; illustrates how to create a cartofile without saying anything about  
</span><br>
<span class="quotelev2">&gt;&gt; why one would want to go to the trouble.  What does this impact?   
</span><br>
<span class="quotelev2">&gt;&gt; What does it change?  What's the motivation for doing this stuff?   
</span><br>
<span class="quotelev2">&gt;&gt; What's this stuff good for?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another alternative could be to move the cartofile description to a  
</span><br>
<span class="quotelev2">&gt;&gt; FAQ page.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The mpirun man page is rather long and I was thinking that if we  
</span><br>
<span class="quotelev2">&gt;&gt; could remove some &quot;low impact&quot; stuff out, we could improve the  
</span><br>
<span class="quotelev2">&gt;&gt; overall signal-to-noise ratio of the page.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In any case, I personally would like to know what cartofiles are  
</span><br>
<span class="quotelev2">&gt;&gt; good for.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you, but I don't understand who is consuming this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information for what.  E.g., the mpirun man page describes the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; carto file, but doesn't give users any indication whether they  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should be worrying about this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Eugene,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; carto file is a file with a staic graph topology of your node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the opal/mca/carto/file/carto_file.h you can see example.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ( yes I know that , it should be help/man list :) )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Basically it describes a map of your node and inside  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interconnection.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hopefully it will be discovered automatically someday,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but for now you can describe your node manually.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards Lenny.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Sep 17, 2009 at 12:38 AM, Eugene Loh &lt;Eugene.Loh_at_[hidden] &lt;mailto:Eugene.Loh_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt; &gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    I feel like I should know, but what's a cartofile?  I guess you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    supply &quot;topological&quot; information about a host, but I can't tell
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    how this information is used by, say, mpirun.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6965.php">Sylvain Jeaugey: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>Previous message:</strong> <a href="6963.php">Terry Dontje: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>In reply to:</strong> <a href="6963.php">Terry Dontje: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6965.php">Sylvain Jeaugey: "Re: [OMPI devel] [OMPI users] cartofile"</a>
<li><strong>Reply:</strong> <a href="6965.php">Sylvain Jeaugey: "Re: [OMPI devel] [OMPI users] cartofile"</a>
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
