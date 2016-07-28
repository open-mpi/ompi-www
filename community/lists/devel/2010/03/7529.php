<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 16:07:27 2010" -->
<!-- isoreceived="20100303210727" -->
<!-- sent="Wed, 03 Mar 2010 16:06:36 -0500" -->
<!-- isosent="20100303210636" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762" -->
<!-- id="4B8ECF5C.7080104_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B8ECDB5.7040007_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 16:06:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7530.php">Jeff Squyres: "[OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>Previous message:</strong> <a href="7528.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>In reply to:</strong> <a href="7528.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7526.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; Iain Bason wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 3, 2010, at 3:04 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mmmm... good point.  I was thinking specifically of the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if_in|exclude behavior in the openib BTL.  That uses strcmp, not 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; strncmp.  Here's a complete list:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_info --param all all --parsable | grep include | grep :value:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca:opal:base:param:opal_event_include:value:pollmca:btl:ofud:param:btl_ofud_if_include:value: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca:btl:openib:param:btl_openib_if_include:value:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca:btl:openib:param:btl_openib_ipaddr_include:value:mca:btl:openib:param:btl_openib_cpc_include:value: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca:btl:sctp:param:btl_sctp_if_include:value:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca:btl:tcp:param:btl_tcp_if_include:value:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca:btl:base:param:btl_base_include:value:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca:oob:tcp:param:oob_tcp_if_include:value:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do we know what these others do?  I only checked openib_if_*clude -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it's strcmp.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I haven't looked at those, but it's easy to grep for strncmp...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks as though sctp is the only other BTL that uses strncmp.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course, if we decide to change the default so that it no longer 
</span><br>
<span class="quotelev2">&gt;&gt; includes &quot;lo&quot; then maybe using strncmp doesn't matter.  The problem 
</span><br>
<span class="quotelev2">&gt;&gt; has been that the name of the interface is different on different 
</span><br>
<span class="quotelev2">&gt;&gt; platforms.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (I should note that the default also excludes &quot;sppp&quot;.  I don't know 
</span><br>
<span class="quotelev2">&gt;&gt; anything about that interface.)
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; I may be wrong for the usage here but the old Sun Starcats had a tcp 
</span><br>
<span class="quotelev1">&gt; interface named sppp to its diagnostic processor that we needed to skip.
</span><br>
<span class="quotelev1">&gt; Not sure if this is the same reason done here, I couldn't find where 
</span><br>
<span class="quotelev1">&gt; sppp was referenced so I could find the history of the line in opengrok.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
Close, r19988 added sppp to the excluded interfaces for the Sun M9000 
<br>
server.  I believe for the same reason I gave above.
<br>
<p>--td
<br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Additionally, if loopback is now handled properly via change #2, 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; shouldn't the default value for the btl_tcp_if_exclude parameter 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; now be empty?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That's a good question.  Enabling the &quot;lo&quot; interface results in 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; intra-node messages being striped across that interface in addition 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to the others on a system.  I don't know what impact that would 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have, if any.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sm and self should still be prioritized above it, right?  If so, we 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should be ok.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, that's true.  It would only affect those who restrict intra-node 
</span><br>
<span class="quotelev2">&gt;&gt; communication to TCP.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I think you're right that the addition of striping across 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lo* in addition to the other interfaces might have an unknown effect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's a random question -- if a user does not use the sm btl, would 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sending messages through lo for on-node communication be potentially 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; better than sending it through a real device, given that that real 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; device may be far away (in the NUMA sense of &quot;far&quot;)?  I.e., are OS's 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; typically smart enough to know that loopback traffic may be able to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stay local to the NUMA node, vs. sending it out to a device and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; back?  Or are OS's smart enough to know that if the both ends of a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TCP socket are on the same node -- regardless of what IP interface 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they use -- and if both processes are on the same NUMA locality, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that the data can stay local and not have to make a round trip to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the device?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (I admit that this is a fairly corner case -- doing on-node 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communication but *not* using the sm btl...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Good question.  For the loopback interface there is no physical 
</span><br>
<span class="quotelev2">&gt;&gt; device, so there should be no NUMA effect.  For an interface with a 
</span><br>
<span class="quotelev2">&gt;&gt; physical device there may be some reason that a packet would actually 
</span><br>
<span class="quotelev2">&gt;&gt; have to go out to the device.  If there is no such reason, I would 
</span><br>
<span class="quotelev2">&gt;&gt; expect Unix to be smart enough not to do it, given how much 
</span><br>
<span class="quotelev2">&gt;&gt; intra-node TCP traffic one commonly sees on Unix.  I couldn't hazard 
</span><br>
<span class="quotelev2">&gt;&gt; a guess about Windows.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Iain
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
<li><strong>Next message:</strong> <a href="7530.php">Jeff Squyres: "[OMPI devel] RFC: Rename --enable-*-threads and ENABLE*THREAD* (take 2)"</a>
<li><strong>Previous message:</strong> <a href="7528.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>In reply to:</strong> <a href="7528.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7526.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
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
