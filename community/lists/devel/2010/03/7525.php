<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 15:25:00 2010" -->
<!-- isoreceived="20100303202500" -->
<!-- sent="Wed, 03 Mar 2010 15:24:37 -0500" -->
<!-- isosent="20100303202437" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762" -->
<!-- id="C54549E1-1016-4AFF-8DB4-E1706FEA294C_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7734D287-FF25-4637-ACF6-597D255F125D_at_cisco.com" -->
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
<strong>From:</strong> Iain Bason (<em>Iain.Bason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 15:24:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7526.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Previous message:</strong> <a href="7524.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>In reply to:</strong> <a href="7524.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7528.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Reply:</strong> <a href="7528.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 3, 2010, at 3:04 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mmmm... good point.  I was thinking specifically of the if_in|exclude behavior in the openib BTL.  That uses strcmp, not strncmp.  Here's a complete list:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info --param all all --parsable | grep include | grep :value:
</span><br>
<span class="quotelev1">&gt; mca:opal:base:param:opal_event_include:value:pollmca:btl:ofud:param:btl_ofud_if_include:value:
</span><br>
<span class="quotelev1">&gt; mca:btl:openib:param:btl_openib_if_include:value:
</span><br>
<span class="quotelev1">&gt; mca:btl:openib:param:btl_openib_ipaddr_include:value:mca:btl:openib:param:btl_openib_cpc_include:value:
</span><br>
<span class="quotelev1">&gt; mca:btl:sctp:param:btl_sctp_if_include:value:
</span><br>
<span class="quotelev1">&gt; mca:btl:tcp:param:btl_tcp_if_include:value:
</span><br>
<span class="quotelev1">&gt; mca:btl:base:param:btl_base_include:value:
</span><br>
<span class="quotelev1">&gt; mca:oob:tcp:param:oob_tcp_if_include:value:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do we know what these others do?  I only checked openib_if_*clude -- it's strcmp.
</span><br>
<p>I haven't looked at those, but it's easy to grep for strncmp...
<br>
<p>It looks as though sctp is the only other BTL that uses strncmp.
<br>
<p>Of course, if we decide to change the default so that it no longer includes &quot;lo&quot; then maybe using strncmp doesn't matter.  The problem has been that the name of the interface is different on different platforms.
<br>
<p>(I should note that the default also excludes &quot;sppp&quot;.  I don't know anything about that interface.)
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Additionally, if loopback is now handled properly via change #2, shouldn't the default value for the btl_tcp_if_exclude parameter now be empty?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's a good question.  Enabling the &quot;lo&quot; interface results in intra-node messages being striped across that interface in addition to the others on a system.  I don't know what impact that would have, if any.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sm and self should still be prioritized above it, right?  If so, we should be ok.
</span><br>
<p>Yes, that's true.  It would only affect those who restrict intra-node communication to TCP.
<br>
<p><span class="quotelev1">&gt; However, I think you're right that the addition of striping across lo* in addition to the other interfaces might have an unknown effect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's a random question -- if a user does not use the sm btl, would sending messages through lo for on-node communication be potentially better than sending it through a real device, given that that real device may be far away (in the NUMA sense of &quot;far&quot;)?  I.e., are OS's typically smart enough to know that loopback traffic may be able to stay local to the NUMA node, vs. sending it out to a device and back?  Or are OS's smart enough to know that if the both ends of a TCP socket are on the same node -- regardless of what IP interface they use -- and if both processes are on the same NUMA locality, that the data can stay local and not have to make a round trip to the device?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (I admit that this is a fairly corner case -- doing on-node communication but *not* using the sm btl...)
</span><br>
<p>Good question.  For the loopback interface there is no physical device, so there should be no NUMA effect.  For an interface with a physical device there may be some reason that a packet would actually have to go out to the device.  If there is no such reason, I would expect Unix to be smart enough not to do it, given how much intra-node TCP traffic one commonly sees on Unix.  I couldn't hazard a guess about Windows.
<br>
<p>Iain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7526.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Previous message:</strong> <a href="7524.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>In reply to:</strong> <a href="7524.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7528.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
<li><strong>Reply:</strong> <a href="7528.php">Terry Dontje: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22762"</a>
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
