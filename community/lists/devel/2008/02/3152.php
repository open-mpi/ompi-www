<?
$subject_val = "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 06:49:03 2008" -->
<!-- isoreceived="20080207114903" -->
<!-- sent="Thu, 07 Feb 2008 06:48:53 -0500" -->
<!-- isosent="20080207114853" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk" -->
<!-- id="47AAF025.8010307_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080207064647.GU3275_at_benten.cs.indiana.edu" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-07 06:48:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3153.php">Jeff Squyres: "[OMPI devel] VT section of the FAQ"</a>
<li><strong>Previous message:</strong> <a href="3151.php">Muhammad Atif: "Re: [OMPI devel] xensocket - callbacks through OPAL/libevent"</a>
<li><strong>In reply to:</strong> <a href="3149.php">Torsten Hoefler: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3156.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Reply:</strong> <a href="3156.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Torsten Hoefler wrote:
<br>
<span class="quotelev1">&gt; Hi Brian,
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Let me start by reminding everyone that I have no vote, so this should  
</span><br>
<span class="quotelev2">&gt;&gt; probably be sent to /dev/null.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; thanks for your comment and this will not go to /dev/null!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I think Ralph raised some good points.  I'd like to raise another.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; yes [will reply to this in a separate thread]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Does it make sense to bring LibNBC into the release at this point,  
</span><br>
<span class="quotelev2">&gt;&gt; given the current standardization process of non-blocking collectives?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My feeling is no, based on the long term support costs.  We had this  
</span><br>
<span class="quotelev2">&gt;&gt; problem with a function in LAM/MPI -- MPIL_SPAWN, I believe it was --  
</span><br>
<span class="quotelev2">&gt;&gt; that was almost but not quite MPI_COMM_SPAWN.  It was added to allow  
</span><br>
<span class="quotelev2">&gt;&gt; spawn before the standard was finished for dynamics.  The problem is,  
</span><br>
<span class="quotelev2">&gt;&gt; it wasn't quite MPI_COMM_SPAWN, so we were now stuck with yet another  
</span><br>
<span class="quotelev2">&gt;&gt; function to support (in a touchy piece of code) for infinity and beyond.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I worry that we'll have the same with LibNBC -- a piece of code that  
</span><br>
<span class="quotelev2">&gt;&gt; solves an immediate problem (no non-blocking collectives in MPI) but  
</span><br>
<span class="quotelev2">&gt;&gt; will become a long-term support anchor.  Since this is something we'll  
</span><br>
<span class="quotelev2">&gt;&gt; be encouraging users to write code to, it's not like support for  
</span><br>
<span class="quotelev2">&gt;&gt; mvapi, where we can just deprecate it and users won't really notice.   
</span><br>
<span class="quotelev2">&gt;&gt; It's one thing to tell them to update their cluster software stack --  
</span><br>
<span class="quotelev2">&gt;&gt; it's another to tell them to rewrite their applications.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; I think this is a very good and valid point. However, I would like to
</span><br>
<span class="quotelev1">&gt; deprecate the NBC_* things as soon as non-blocking collectives are a
</span><br>
<span class="quotelev1">&gt; part of the standard. Of course, this would probably need two minor
</span><br>
<span class="quotelev1">&gt; versions to &quot;clean&quot; the code-base, but this is (will be) our normal
</span><br>
<span class="quotelev1">&gt; procedure (just what happened to MVAPI).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Though it doesn't seem to me that NBC is a slam dunk to get into the MPI 
<br>
spec and I could
<br>
imagine it changing significantly due to someone elses opinion/needs.
<br>
<span class="quotelev1">&gt; And rewriting the user's application will not be that hard, it'll mainly
</span><br>
<span class="quotelev1">&gt; be vim:%s/NBC_/MPI_/g. Even if we change the interface (e.g. add tags or
</span><br>
<span class="quotelev1">&gt; decide to use the more limited split collective approach), this task is
</span><br>
<span class="quotelev1">&gt; rather easy and can be automated easily. It's not a functionality
</span><br>
<span class="quotelev1">&gt; change, just an interface.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Though if NBC is built by default for release builds I think that raises 
<br>
the bar saying that we
<br>
OMPI believe this should be used by all of our users without any 
<br>
concerns that the API may
<br>
change or it might have significant issues. 
<br>
<p>On a similar track do you have any tests that validate the 
<br>
functionality/correctness of NBC
<br>
that can be ran as a part of the MTT nightly tests?
<br>
<p>My opinion is I have no problem with NBC being merged in just that I 
<br>
don't think it should be
<br>
built by default.
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3153.php">Jeff Squyres: "[OMPI devel] VT section of the FAQ"</a>
<li><strong>Previous message:</strong> <a href="3151.php">Muhammad Atif: "Re: [OMPI devel] xensocket - callbacks through OPAL/libevent"</a>
<li><strong>In reply to:</strong> <a href="3149.php">Torsten Hoefler: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3156.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Reply:</strong> <a href="3156.php">Ralph H Castain: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
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
