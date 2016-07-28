<?
$subject_val = "Re: [OMPI devel] Backward Compatibility of MPI	Java	Binding";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 15:57:26 2013" -->
<!-- isoreceived="20130111205726" -->
<!-- sent="Fri, 11 Jan 2013 20:57:21 +0000" -->
<!-- isosent="20130111205721" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Backward Compatibility of MPI	Java	Binding" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC380B3E6F_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EEDDCA3E-3BFF-4FF7-9CF5-FE7911ADA75C_at_ci.i.u-tokyo.ac.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Backward Compatibility of MPI	Java	Binding<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-11 15:57:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11925.php">Ralph Castain: "Re: [OMPI devel] mpirun @ 100%"</a>
<li><strong>Previous message:</strong> <a href="11923.php">Gutierrez, Samuel K: "Re: [OMPI devel] New SM BTL Initialization Take 2"</a>
<li><strong>In reply to:</strong> <a href="11918.php">Yoshiki SATO: "Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java	Binding"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 10, 2013, at 10:33 AM, Yoshiki SATO &lt;yoshiki_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Yes -- IIRC, the Java interface isn't really dependent upon anything specific in the back-end C implementation of Open MPI.  So I'm guessing/assuming that if you can build it, it should work against the 1.6 OMPI C engine just fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sounds good :-)  I'm going to try to build it anyway, and let you know if stucked.
</span><br>
<p>Cool.
<br>
<p><span class="quotelev2">&gt;&gt; Is MPI-for-Java of interest to you?  I ask because Ralph and I have been trying to figure out how to get the cycles to do more with the Java interface (e.g., make it more like a 1:1 set of bindings).  Is this something you'd be willing to work on / contribute, perchance?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.  This is because one of our roles is enabling Java applications to run on top of the K computer (Fujitsu), which prevents user processes from TCP/IP communications directly.  It only allows communications via customized openmpi (scheduler) between inter node communications.  
</span><br>
<p>Gotcha.
<br>
<p><span class="quotelev1">&gt; BTW, I don't fully understand what a 1:1 set of bindings mean.  I believe that the interfaces defined in mpiJava was carefully designed to match the MPI spec, and then should be a 1:1 set of bindings.  Otherwise, I'm willing to contribute something to make it better ;-)
</span><br>
<p>I think they're *somewhat* close; I don't think that they're exactly a one-to-one mapping to the C bindings.  I know that they added the &quot;offset&quot; argument for choice buffers, and I can see what that would be necessary.  So that should probably stay.
<br>
<p>But extras like MPI.OBJECT should probably disappear, and be replaced with proper support for Java-isms (e.g., N-dimensional arrays -- see posts from Siegmar on the users list about how N-dimensional arrays don't work because OMPI is assuming that they'll be contiguous in memory, but Java allocates, for example, a 2D array as a series of 1D arrays).  And any other interfaces that aren't nearly identical to what the MPI C++ bindings are (were) should probably also go, unless there are strong reasons to *need* them.
<br>
<p>I've setup a Bitbucket for this Java work, if you would like to contribute.  It's a branch from the Open MPI SVN trunk; I can keep it up to date.  If you send me your Bitbucket ID, I can give you write permissions.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://bitbucket.org/jsquyres/ompi-java-revamped">https://bitbucket.org/jsquyres/ompi-java-revamped</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11925.php">Ralph Castain: "Re: [OMPI devel] mpirun @ 100%"</a>
<li><strong>Previous message:</strong> <a href="11923.php">Gutierrez, Samuel K: "Re: [OMPI devel] New SM BTL Initialization Take 2"</a>
<li><strong>In reply to:</strong> <a href="11918.php">Yoshiki SATO: "Re: [OMPI devel] [OMPI users] Backward Compatibility of MPI Java	Binding"</a>
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
