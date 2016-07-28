<?
$subject_val = "Re: [OMPI devel] initial SCTP BTL commit comments?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 14 08:12:07 2007" -->
<!-- isoreceived="20071114131207" -->
<!-- sent="Wed, 14 Nov 2007 08:11:44 -0500" -->
<!-- isosent="20071114131144" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] initial SCTP BTL commit comments?" -->
<!-- id="473AF410.10505_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b89c3c270711131241q916578ct980cf1a25c3f4816_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] initial SCTP BTL commit comments?<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-14 08:11:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2613.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<li><strong>Previous message:</strong> <a href="2611.php">Gleb Natapov: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>In reply to:</strong> <a href="2609.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2616.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2616.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brad Penoff wrote:
<br>
<span class="quotelev1">&gt; On Nov 12, 2007 3:26 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I have no objections to bringing this into the trunk, but I agree that
</span><br>
<span class="quotelev2">&gt;&gt; an .ompi_ignore is probably a good idea at first.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll try to cook up a commit soon then!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; One question that I'd like to have answered is how OMPI decides
</span><br>
<span class="quotelev2">&gt;&gt; whether to use the SCTP BTL or not.  If there are SCTP stacks
</span><br>
<span class="quotelev2">&gt;&gt; available by default in Linux and OS X -- but their performance may be
</span><br>
<span class="quotelev2">&gt;&gt; sub-optimal and/or buggy, we may want to have the SCTP BTL only
</span><br>
<span class="quotelev2">&gt;&gt; activated if the user explicitly asks for it.  Open MPI is very
</span><br>
<span class="quotelev2">&gt;&gt; concerned with &quot;out of the box&quot; behavior -- we need to ensure that
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpirun a.out&quot; will &quot;just work&quot; on all of our supported platforms.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to make a few things explicit...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Things would only work out of the box on FreeBSD, and there the stack
</span><br>
<span class="quotelev1">&gt; is very good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have less experience with the Linux stack but hope the availability
</span><br>
<span class="quotelev1">&gt; of and SCTP BTL will help encourage its use by us and others.  Now it
</span><br>
<span class="quotelev1">&gt; is a module by default (loaded with &quot;modprobe sctp&quot;) but the actual
</span><br>
<span class="quotelev1">&gt; SCTP sockets extension API needs to be downloaded and installed
</span><br>
<span class="quotelev1">&gt; separately.  The so-called lksctp-tools can be obtained here:
</span><br>
<span class="quotelev1">&gt; <a href="http://sourceforge.net/project/showfiles.php?group_id=26529">http://sourceforge.net/project/showfiles.php?group_id=26529</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The OS X stack does not come by default but instead is a kernel extension:
</span><br>
<span class="quotelev1">&gt; <a href="http://sctp.fh-muenster.de/sctp-nke.html">http://sctp.fh-muenster.de/sctp-nke.html</a>
</span><br>
<span class="quotelev1">&gt; I haven't yet started this testing but intend to soon.  As of now
</span><br>
<span class="quotelev1">&gt; though, the supplied configure.m4 does not try to even build the
</span><br>
<span class="quotelev1">&gt; component on Mac OS X.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So in my opinion, things in the configure scripts should be fine the
</span><br>
<span class="quotelev1">&gt; way the are since only FreeBSD stack (which we have confidence in)
</span><br>
<span class="quotelev1">&gt; will try to work out of the box; the others require the user to
</span><br>
<span class="quotelev1">&gt; install things.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I am gathering from the text above you haven't tried your BTL on Solaris 
<br>
at all.
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2613.php">Tim Prins: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r16723"</a>
<li><strong>Previous message:</strong> <a href="2611.php">Gleb Natapov: "Re: [OMPI devel] Multi-Rail and Open IB BTL"</a>
<li><strong>In reply to:</strong> <a href="2609.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2616.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
<li><strong>Reply:</strong> <a href="2616.php">Brad Penoff: "Re: [OMPI devel] initial SCTP BTL commit comments?"</a>
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
