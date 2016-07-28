<?
$subject_val = "Re: [OMPI devel] Using external libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 10:43:24 2013" -->
<!-- isoreceived="20130708144324" -->
<!-- sent="Mon, 08 Jul 2013 08:43:08 -0600" -->
<!-- isosent="20130708144308" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using external libevent" -->
<!-- id="51DACFFC.9050802_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B5853849-1063-4B60-9869-BA9FA683492D_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-07-08 10:43:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12541.php">Vasiliy: "[OMPI devel] No such file(s) or directory"</a>
<li><strong>Previous message:</strong> <a href="12539.php">Paul Kapinos: "Re: [OMPI devel] max. message size"</a>
<li><strong>In reply to:</strong> <a href="12537.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/07/2013 05:43 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I've been playing with this some more and have it working, though I need Jeff to help resolve one lingering issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I ran across a couple of things that you folks are going to need to think about for Fedora:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. the current libevent rpm doesn't include the header files, so users will need to install both libevent and libevent-headers. In addition, the current libevent rpm is built -without- thread support, which we require. Thus, it is missing the required libevent_pthreads library. We will detect the lack of this library and abort configure, so at least we won't build something that can't run. However, it does mean that your users won't be able to use the OMPI rpm unless you get some changes in the libevent rpm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. current libevent rpm version level for CentOS, at least, is very old - like version 1.4. We are currently using version 2.0.21, so you can see the gap. In fact, version 1.4 doesn't even contain some of the functions we require. I've added a test for this and will abort the configure in such cases. However, it again means your users may not be able to use the OMPI rpm - it'll just be a question of what libevent version is available on their platform.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As we've been saying, we didn't just choose to include libevent without reason. It's a critical part of the OMPI system, and we have requirements both in terms of its revision level and how it is configured.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope to have the external libevent support committed to the trunk, and then moved to the 1.7 branch in the upcoming weeks. It'll be up to you folks to figure out how you're going to make this all work :-/
</span><br>
<p>Great!  Let me know when it is available for testing and I'll take a look.
<br>
<p><p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA/CoRA Division                    FAX: 303-415-9702
3380 Mitchell Lane                  orion_at_[hidden]
Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12541.php">Vasiliy: "[OMPI devel] No such file(s) or directory"</a>
<li><strong>Previous message:</strong> <a href="12539.php">Paul Kapinos: "Re: [OMPI devel] max. message size"</a>
<li><strong>In reply to:</strong> <a href="12537.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
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
