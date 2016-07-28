<?
$subject_val = "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 10:11:39 2008" -->
<!-- isoreceived="20080207151139" -->
<!-- sent="Thu, 07 Feb 2008 08:11:24 -0700" -->
<!-- isosent="20080207151124" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk" -->
<!-- id="C3D06DAC.C248%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47AAF025.8010307_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-07 10:11:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3157.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Previous message:</strong> <a href="3155.php">Jeff Squyres: "Re: [OMPI devel] VT section of the FAQ"</a>
<li><strong>In reply to:</strong> <a href="3152.php">Terry Dontje: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3157.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Reply:</strong> <a href="3157.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe Brian and Terry raise good points. May I offer a possible
<br>
alternative? What if we only include in Open MPI an include file that
<br>
contains the &quot;hooks&quot; to libNBC, and have the build system only &quot;see&quot; those
<br>
if someone specifies --with-NBC (or whatever option name you like). If you
<br>
like, you can make the inclusion automatic if libNBC is detected on the
<br>
system. It would make sense to also add -libNBC to the mpicc et al wrappers
<br>
as well when the build system includes the function definitions.
<br>
<p>This would allow those users that want (or can) to use that library link
<br>
against it, without adding a bunch of source code to our release. I suspect
<br>
there are complications that will have to be dealt with, but offer it as
<br>
something to consider.
<br>
<p><p>Also, remember that there is an added burden when we add source code to Open
<br>
MPI that we haven't discussed - we are now adding coordination issues to our
<br>
own release cycle. If libNBC changes, are we now going to be pressed to
<br>
issue another OMPI release so that the new NBC version is included? Do we
<br>
now need to coordinate our releases with theirs so that things align?
<br>
<p>And if we have an increasing number of such &quot;included&quot; packages, how complex
<br>
is -that- release discussion going to get?!?
<br>
<p><p>On 2/7/08 4:48 AM, &quot;Terry Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Torsten Hoefler wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Brian,
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me start by reminding everyone that I have no vote, so this should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; probably be sent to /dev/null.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; thanks for your comment and this will not go to /dev/null!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think Ralph raised some good points.  I'd like to raise another.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; yes [will reply to this in a separate thread]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does it make sense to bring LibNBC into the release at this point,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; given the current standardization process of non-blocking collectives?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My feeling is no, based on the long term support costs.  We had this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem with a function in LAM/MPI -- MPIL_SPAWN, I believe it was --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that was almost but not quite MPI_COMM_SPAWN.  It was added to allow
</span><br>
<span class="quotelev3">&gt;&gt;&gt; spawn before the standard was finished for dynamics.  The problem is,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it wasn't quite MPI_COMM_SPAWN, so we were now stuck with yet another
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function to support (in a touchy piece of code) for infinity and beyond.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I worry that we'll have the same with LibNBC -- a piece of code that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; solves an immediate problem (no non-blocking collectives in MPI) but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will become a long-term support anchor.  Since this is something we'll
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be encouraging users to write code to, it's not like support for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mvapi, where we can just deprecate it and users won't really notice.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's one thing to tell them to update their cluster software stack --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it's another to tell them to rewrite their applications.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; I think this is a very good and valid point. However, I would like to
</span><br>
<span class="quotelev2">&gt;&gt; deprecate the NBC_* things as soon as non-blocking collectives are a
</span><br>
<span class="quotelev2">&gt;&gt; part of the standard. Of course, this would probably need two minor
</span><br>
<span class="quotelev2">&gt;&gt; versions to &quot;clean&quot; the code-base, but this is (will be) our normal
</span><br>
<span class="quotelev2">&gt;&gt; procedure (just what happened to MVAPI).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; Though it doesn't seem to me that NBC is a slam dunk to get into the MPI
</span><br>
<span class="quotelev1">&gt; spec and I could
</span><br>
<span class="quotelev1">&gt; imagine it changing significantly due to someone elses opinion/needs.
</span><br>
<span class="quotelev2">&gt;&gt; And rewriting the user's application will not be that hard, it'll mainly
</span><br>
<span class="quotelev2">&gt;&gt; be vim:%s/NBC_/MPI_/g. Even if we change the interface (e.g. add tags or
</span><br>
<span class="quotelev2">&gt;&gt; decide to use the more limited split collective approach), this task is
</span><br>
<span class="quotelev2">&gt;&gt; rather easy and can be automated easily. It's not a functionality
</span><br>
<span class="quotelev2">&gt;&gt; change, just an interface.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; Though if NBC is built by default for release builds I think that raises
</span><br>
<span class="quotelev1">&gt; the bar saying that we
</span><br>
<span class="quotelev1">&gt; OMPI believe this should be used by all of our users without any
</span><br>
<span class="quotelev1">&gt; concerns that the API may
</span><br>
<span class="quotelev1">&gt; change or it might have significant issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On a similar track do you have any tests that validate the
</span><br>
<span class="quotelev1">&gt; functionality/correctness of NBC
</span><br>
<span class="quotelev1">&gt; that can be ran as a part of the MTT nightly tests?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My opinion is I have no problem with NBC being merged in just that I
</span><br>
<span class="quotelev1">&gt; don't think it should be
</span><br>
<span class="quotelev1">&gt; built by default.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="3157.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Previous message:</strong> <a href="3155.php">Jeff Squyres: "Re: [OMPI devel] VT section of the FAQ"</a>
<li><strong>In reply to:</strong> <a href="3152.php">Terry Dontje: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3157.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Reply:</strong> <a href="3157.php">Jeff Squyres: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
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
