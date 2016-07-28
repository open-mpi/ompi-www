<?
$subject_val = "Re: [OMPI devel] Using external libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 17 15:40:50 2013" -->
<!-- isoreceived="20130417194050" -->
<!-- sent="Wed, 17 Apr 2013 12:40:43 -0700" -->
<!-- isosent="20130417194043" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using external libevent" -->
<!-- id="F1D0DAC3-D033-4CC9-B0D0-8D1B7B3579B8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="516EF774.3090705_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Using external libevent<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-17 15:40:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12281.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12279.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>In reply to:</strong> <a href="12279.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12281.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12281.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 17, 2013, at 12:26 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 04/17/2013 12:38 PM, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Apr 17, 2013 at 10:40 AM, Orion Poplawski &lt;orion_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:orion_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    So, would you be willing to provide more of the rationale as to why
</span><br>
<span class="quotelev2">&gt;&gt;    libevent is bundled?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Orion,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am NOT an Open MPI developer myself.  So please don't take my response as
</span><br>
<span class="quotelev2">&gt;&gt; speaking for the community.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I found the following file useful in understanding WHY libevent is currently
</span><br>
<span class="quotelev2">&gt;&gt; bundled in Open MPI:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/source/xref/ompi-trunk/opal/mca/event/base/README.openmpi">https://svn.open-mpi.org/source/xref/ompi-trunk/opal/mca/event/base/README.openmpi</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, that was helpful.  From what I read there, it does not appear that libevent is not being modified in a meaningful way as it would apply to Fedora.  In Fedora, all applications would be built against the same libevent, so that should not be an issue.
</span><br>
<p>It depends upon how libevent was configured. For example, if Fedora configures libevent with thread support enabled, then the MPI job will see an unnecessary performance impact. Our users notice such things. At the very least, we'd have to detect how libevent was configured so we could (a) abort if it isn't the right minimum version, and (b) adjust behavior to reflect the configuration and capabilities of the libevent version being used.
<br>
<p>Complicated, and probably not what users would expect.
<br>
<p><span class="quotelev1">&gt;  And assuming that the Fedora libevent properly detects kqueue and epoll (if applicable) that should be okay.
</span><br>
<p>I would suggest checking that assumption before committing to it.
<br>
<p><span class="quotelev1">&gt;  Also, have this improvements been submitted back to libevent?
</span><br>
<p>Yes, though I can't say with certainty if/when they were adopted. In some cases, the libevent folks see this as being too application-specific - i.e., we need things to behave a certain way, but not everybody does.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Finally, while openmpi may not need to make use of the dns, http, and rpc events, would it be problematic if they were present in the library?
</span><br>
<p>No - just increases the memory footprint, but does no real harm.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So other than openmpi expecting to work with a specific version of libevent, I'm not seeing compelling reason why bundling is necessary (at least for Fedora packaging).  If there is, please let me know.
</span><br>
<p>I'd hate to make a Fedora-specific change and then have users complain because of things like performance degradation on that platform. As Jeff pointed out, this is how we've distributed OMPI on every platform since day one - I'm not hearing a compelling reason to change that policy. We'd have to discuss any such request at our next weekly meeting (Tues mornings).
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Orion Poplawski
</span><br>
<span class="quotelev1">&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev1">&gt; NWRA, Boulder/CoRA Office             FAX: 303-415-9702
</span><br>
<span class="quotelev1">&gt; 3380 Mitchell Lane                       orion_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
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
<li><strong>Next message:</strong> <a href="12281.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12279.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>In reply to:</strong> <a href="12279.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12281.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12281.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
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
