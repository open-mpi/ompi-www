<?
$subject_val = "Re: [OMPI devel] Using external libevent";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 17 13:40:13 2013" -->
<!-- isoreceived="20130417174013" -->
<!-- sent="Wed, 17 Apr 2013 11:40:07 -0600" -->
<!-- isosent="20130417174007" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Using external libevent" -->
<!-- id="516EDE77.1040106_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI devel] Using external libevent" -->
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
<strong>Date:</strong> 2013-04-17 13:40:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12276.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12274.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Maybe in reply to:</strong> <a href="12273.php">Orion Poplawski: "[OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12276.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12276.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12277.php">Paul Hargrove: "Re: [OMPI devel] Using external libevent"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1"> &gt; On Apr 16, 2013, at 9:22 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2"> &gt;&gt; I'm starting to take a look at updating openmpi in Fedora to 1.7.  It 
</span><br>
looks like openmpi is now bundling a copy of libevent, which is generally 
<br>
forbidden in Fedora.
<br>
<p><span class="quotelev1"> &gt; FWIW, we've always bundled libevent -- ever since 1.0. It was made a little 
</span><br>
more obvious in 1.7 because we shifted some things around in the build system, 
<br>
but it's always been there.
<br>
<p><span class="quotelev2"> &gt;&gt; Is there any work being done on allowing one to compile against an 
</span><br>
external libevent library?
<br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; We have not done this because OMPI is fairly tied to the specific version 
</span><br>
of libevent that is bundled.
<br>
<p><span class="quotelev1"> &gt; Given that OMPI has *always* bundled libevent, how terrible would it be to 
</span><br>
just let that continue?
<br>
<p>Well, it goes against Fedora policy and now that it has been detected, 
<br>
something has to be done about it.  We can apply for an exception, in which 
<br>
case we need to answer the following questions from 
<br>
<a href="https://fedoraproject.org/wiki/Packaging:No_Bundled_Libraries#Standard_questions">https://fedoraproject.org/wiki/Packaging:No_Bundled_Libraries#Standard_questions</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Has the library behaviour been modified? If so, how has it been 
<br>
modified? If the library has been modified in ways that change the API or 
<br>
behaviour then there may be a case for copying. Note that fixing bugs is not 
<br>
grounds to copy. If the library has not been modified (ie: it can be used 
<br>
verbatim in the distro) there's little chance of an exception.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Why haven't the changes been pushed to the upstream library? If no 
<br>
attempt has been made to push the changes upstream, we shouldn't be supporting 
<br>
people forking out of laziness.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Have the changes been proposed to the Fedora package maintainer for 
<br>
the library? In some cases it may make sense for our package to take the 
<br>
changes despite upstream not taking them (for instance, if upstream for the 
<br>
library is dead).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Could we make the forked version the canonical version within Fedora? For 
<br>
instance, if upstream for the library is dead, is the package we're working on 
<br>
that bundles willing to make their fork a library that others can link against?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Are the changes useful to consumers other than the bundling application? 
<br>
If so why aren't we proposing that the library be released as a fork of the 
<br>
upstream library?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Is upstream keeping the base library updated or are they continuously one 
<br>
or more versions behind the latest upstream release?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What is the attitude of upstream towards bundling? (Are they eager to 
<br>
remove the bundled version? are they engaged with the upstream for the 
<br>
library? Do they have a history of bundling? Are they argumentative?)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Overview of the security ramifications of bundling
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Does the maintainer of the Fedora package of the library being bundled 
<br>
have any comments about this?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Is there a plan for unbundling the library at a later time? Include 
<br>
things like what features would need to be added to the upstream library, a 
<br>
timeline for when those features would be merged, how we're helping to meet 
<br>
those goals, etc.
<br>
<p>So, would you be willing to provide more of the rationale as to why libevent 
<br>
is bundled?
<br>
<p>Thanks!
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
<li><strong>Next message:</strong> <a href="12276.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12274.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Maybe in reply to:</strong> <a href="12273.php">Orion Poplawski: "[OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12276.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12276.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Reply:</strong> <a href="12277.php">Paul Hargrove: "Re: [OMPI devel] Using external libevent"</a>
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
