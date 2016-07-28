<?
$subject_val = "Re: [OMPI devel] Using external libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 17 16:20:01 2013" -->
<!-- isoreceived="20130417202001" -->
<!-- sent="Wed, 17 Apr 2013 14:19:57 -0600" -->
<!-- isosent="20130417201957" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using external libevent" -->
<!-- id="516F03ED.8020602_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F1D0DAC3-D033-4CC9-B0D0-8D1B7B3579B8_at_open-mpi.org" -->
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
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-17 16:19:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12282.php">Orion Poplawski: "[OMPI devel] Speaking of epoll...."</a>
<li><strong>Previous message:</strong> <a href="12280.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>In reply to:</strong> <a href="12280.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12284.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12284.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/17/2013 01:40 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 17, 2013, at 12:26 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 04/17/2013 12:38 PM, Paul Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Apr 17, 2013 at 10:40 AM, Orion Poplawski &lt;orion_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:orion_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     So, would you be willing to provide more of the rationale as to why
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     libevent is bundled?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Orion,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am NOT an Open MPI developer myself.  So please don't take my response as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; speaking for the community.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I found the following file useful in understanding WHY libevent is currently
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bundled in Open MPI:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/source/xref/ompi-trunk/opal/mca/event/base/README.openmpi">https://svn.open-mpi.org/source/xref/ompi-trunk/opal/mca/event/base/README.openmpi</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, that was helpful.  From what I read there, it does not appear that libevent is not being modified in a meaningful way as it would apply to Fedora.  In Fedora, all applications would be built against the same libevent, so that should not be an issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It depends upon how libevent was configured. For example, if Fedora configures libevent with thread support enabled, then the MPI job will see an unnecessary performance impact. Our users notice such things. At the very least, we'd have to detect how libevent was configured so we could (a) abort if it isn't the right minimum version, and (b) adjust behavior to reflect the configuration and capabilities of the libevent version being used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Complicated, and probably not what users would expect.
</span><br>
<p>Okay, that sounds like that might be a compelling reason.  The Fedora version 
<br>
is indeed compiled with thread support (i.e. without --disable-thread-support).
<br>
<p><span class="quotelev2">&gt;&gt;   And assuming that the Fedora libevent properly detects kqueue and epoll (if applicable) that should be okay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would suggest checking that assumption before committing to it.
</span><br>
<p><a href="http://kojipkgs.fedoraproject.org//packages/libevent/2.0.18/3.fc19/data/logs/x86_64/build.log">http://kojipkgs.fedoraproject.org//packages/libevent/2.0.18/3.fc19/data/logs/x86_64/build.log</a>
<br>
<p>checking for epoll_ctl... yes
<br>
<p>checking for TAILQ_FOREACH in sys/queue.h... yes
<br>
(not sure if this is &quot;kqueue&quot; - I don't see that string anywhere).
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So other than openmpi expecting to work with a specific version of libevent, I'm not seeing compelling reason why bundling is necessary (at least for Fedora packaging).  If there is, please let me know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd hate to make a Fedora-specific change and then have users complain because of things like performance degradation on that platform. As Jeff pointed out, this is how we've distributed OMPI on every platform since day one - I'm not hearing a compelling reason to change that policy. We'd have to discuss any such request at our next weekly meeting (Tues mornings).
</span><br>
<p>Of course.
<br>
<p><p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA, Boulder/CoRA Office             FAX: 303-415-9702
3380 Mitchell Lane                       orion_at_[hidden]
Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12282.php">Orion Poplawski: "[OMPI devel] Speaking of epoll...."</a>
<li><strong>Previous message:</strong> <a href="12280.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>In reply to:</strong> <a href="12280.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12284.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12284.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
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
