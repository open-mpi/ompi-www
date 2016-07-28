<?
$subject_val = "Re: [OMPI devel] Using external libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 17 15:26:49 2013" -->
<!-- isoreceived="20130417192649" -->
<!-- sent="Wed, 17 Apr 2013 13:26:44 -0600" -->
<!-- isosent="20130417192644" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using external libevent" -->
<!-- id="516EF774.3090705_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA15_PquOQWS+7ocxt36JgSkWh51Uyy2wDXhyvkSHS+0xnw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-04-17 15:26:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12280.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12278.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>In reply to:</strong> <a href="12277.php">Paul Hargrove: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12280.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12280.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/17/2013 12:38 PM, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 17, 2013 at 10:40 AM, Orion Poplawski &lt;orion_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:orion_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     So, would you be willing to provide more of the rationale as to why
</span><br>
<span class="quotelev1">&gt;     libevent is bundled?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Orion,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am NOT an Open MPI developer myself.  So please don't take my response as
</span><br>
<span class="quotelev1">&gt; speaking for the community.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found the following file useful in understanding WHY libevent is currently
</span><br>
<span class="quotelev1">&gt; bundled in Open MPI:
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/source/xref/ompi-trunk/opal/mca/event/base/README.openmpi">https://svn.open-mpi.org/source/xref/ompi-trunk/opal/mca/event/base/README.openmpi</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Thanks, that was helpful.  From what I read there, it does not appear that 
<br>
libevent is not being modified in a meaningful way as it would apply to 
<br>
Fedora.  In Fedora, all applications would be built against the same libevent, 
<br>
so that should not be an issue.  And assuming that the Fedora libevent 
<br>
properly detects kqueue and epoll (if applicable) that should be okay.  Also, 
<br>
have this improvements been submitted back to libevent?
<br>
<p>Finally, while openmpi may not need to make use of the dns, http, and rpc 
<br>
events, would it be problematic if they were present in the library?
<br>
<p>So other than openmpi expecting to work with a specific version of libevent, 
<br>
I'm not seeing compelling reason why bundling is necessary (at least for 
<br>
Fedora packaging).  If there is, please let me know.
<br>
<p>Thanks!
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="12280.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12278.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>In reply to:</strong> <a href="12277.php">Paul Hargrove: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12280.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12280.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
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
