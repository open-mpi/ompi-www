<?
$subject_val = "Re: [OMPI devel] Using external libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 17 13:49:43 2013" -->
<!-- isoreceived="20130417174943" -->
<!-- sent="Wed, 17 Apr 2013 10:49:36 -0700" -->
<!-- isosent="20130417174936" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using external libevent" -->
<!-- id="EC43BAF2-263F-4D7D-84B1-C4253BDFE29C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="516EDE77.1040106_at_cora.nwra.com" -->
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
<strong>Date:</strong> 2013-04-17 13:49:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12277.php">Paul Hargrove: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12275.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>In reply to:</strong> <a href="12275.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12278.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12278.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wouldn't that be something best left to the Fedora folks to decide? They have been bundling OMPI with Fedora for a long time, and knew we were including libevent since the beginning.
<br>
<p>You are welcome to remind them of it - might be best to see what they have to say before we jump.
<br>
<p><p>On Apr 17, 2013, at 10:40 AM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt; &gt; On Apr 16, 2013, at 9:22 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm starting to take a look at updating openmpi in Fedora to 1.7.  It looks like openmpi is now bundling a copy of libevent, which is generally forbidden in Fedora.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; FWIW, we've always bundled libevent -- ever since 1.0. It was made a little more obvious in 1.7 because we shifted some things around in the build system, but it's always been there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is there any work being done on allowing one to compile against an external libevent library?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We have not done this because OMPI is fairly tied to the specific version of libevent that is bundled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Given that OMPI has *always* bundled libevent, how terrible would it be to just let that continue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, it goes against Fedora policy and now that it has been detected, something has to be done about it.  We can apply for an exception, in which case we need to answer the following questions from <a href="https://fedoraproject.org/wiki/Packaging:No_Bundled_Libraries#Standard_questions">https://fedoraproject.org/wiki/Packaging:No_Bundled_Libraries#Standard_questions</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Has the library behaviour been modified? If so, how has it been modified? If the library has been modified in ways that change the API or behaviour then there may be a case for copying. Note that fixing bugs is not grounds to copy. If the library has not been modified (ie: it can be used verbatim in the distro) there's little chance of an exception.
</span><br>
<span class="quotelev1">&gt;        Why haven't the changes been pushed to the upstream library? If no attempt has been made to push the changes upstream, we shouldn't be supporting people forking out of laziness.
</span><br>
<span class="quotelev1">&gt;        Have the changes been proposed to the Fedora package maintainer for the library? In some cases it may make sense for our package to take the changes despite upstream not taking them (for instance, if upstream for the library is dead).
</span><br>
<span class="quotelev1">&gt;    Could we make the forked version the canonical version within Fedora? For instance, if upstream for the library is dead, is the package we're working on that bundles willing to make their fork a library that others can link against?
</span><br>
<span class="quotelev1">&gt;    Are the changes useful to consumers other than the bundling application? If so why aren't we proposing that the library be released as a fork of the upstream library?
</span><br>
<span class="quotelev1">&gt;    Is upstream keeping the base library updated or are they continuously one or more versions behind the latest upstream release?
</span><br>
<span class="quotelev1">&gt;    What is the attitude of upstream towards bundling? (Are they eager to remove the bundled version? are they engaged with the upstream for the library? Do they have a history of bundling? Are they argumentative?)
</span><br>
<span class="quotelev1">&gt;    Overview of the security ramifications of bundling
</span><br>
<span class="quotelev1">&gt;    Does the maintainer of the Fedora package of the library being bundled have any comments about this?
</span><br>
<span class="quotelev1">&gt;    Is there a plan for unbundling the library at a later time? Include things like what features would need to be added to the upstream library, a timeline for when those features would be merged, how we're helping to meet those goals, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, would you be willing to provide more of the rationale as to why libevent is bundled?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12277.php">Paul Hargrove: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12275.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>In reply to:</strong> <a href="12275.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12278.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12278.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
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
