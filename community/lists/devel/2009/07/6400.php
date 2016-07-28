<?
$subject_val = "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 14 11:40:06 2009" -->
<!-- isoreceived="20090714154006" -->
<!-- sent="Tue, 14 Jul 2009 11:39:59 -0400" -->
<!-- isosent="20090714153959" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer" -->
<!-- id="6C6F450C-30E4-4AE1-90FC-A893C74C6E21_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D78563B3-9AB5-4C18-B6CA-86F79B026443_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-14 11:39:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6401.php">Rainer Keller: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>Previous message:</strong> <a href="6399.php">Josh Hursey: "[OMPI devel] Fwd: [all-osl-users] Upgrading of the OSL SVN server"</a>
<li><strong>In reply to:</strong> <a href="6390.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6401.php">Rainer Keller: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>Reply:</strong> <a href="6401.php">Rainer Keller: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm a bit disturbed by two things:
<br>
<p>1. My questions were not answered before the DDT split was merged to  
<br>
the trunk.
<br>
<p>2. The number of &quot;fixup&quot; commits and things that broke on the trunk  
<br>
after the DDT split was merged seem to indicate a lack of testing.   
<br>
What happened?
<br>
<p>(perhaps this was addressed on the teleconf today; I was not there --  
<br>
if it was discussed, forgive the redundancy...)
<br>
<p><p>On Jul 9, 2009, at 7:08 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Two comments:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why : ...  Second
</span><br>
<span class="quotelev2">&gt;&gt; reason, is that now the data-type engine (without all the MPI
</span><br>
<span class="quotelev2">&gt;&gt; knowledge) is available to other projects.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We're still only shipping Open MPI as a whole as our official  
</span><br>
<span class="quotelev1">&gt; product, right?  More specifically: we're not intending to ship OPAL  
</span><br>
<span class="quotelev1">&gt; independently, right?  If other projects want to pick up OPAL  
</span><br>
<span class="quotelev1">&gt; themselves and use it (e.g., via SVN checkouts, Mercurial clones,  
</span><br>
<span class="quotelev1">&gt; official OMPI tarballs, etc.), that's fine.  But I'd be opposed to  
</span><br>
<span class="quotelev1">&gt; creating a 2nd official distribution that was OPAL-only.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Performance tests on the ompi-ddt branch have proven that there is no
</span><br>
<span class="quotelev2">&gt;&gt; performance penalties associated with this change (tests done using
</span><br>
<span class="quotelev2">&gt;&gt; NetPipe-3.7.1 on smoky using BTL/sm, giving 1.6usecs on this  
</span><br>
<span class="quotelev2">&gt;&gt; platform).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.6us sounds like pretty high sm latency...  Is this a slow platform?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6401.php">Rainer Keller: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>Previous message:</strong> <a href="6399.php">Josh Hursey: "[OMPI devel] Fwd: [all-osl-users] Upgrading of the OSL SVN server"</a>
<li><strong>In reply to:</strong> <a href="6390.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6401.php">Rainer Keller: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>Reply:</strong> <a href="6401.php">Rainer Keller: "Re: [OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
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
