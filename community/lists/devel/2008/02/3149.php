<?
$subject_val = "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 01:46:48 2008" -->
<!-- isoreceived="20080207064648" -->
<!-- sent="Thu, 7 Feb 2008 01:46:47 -0500" -->
<!-- isosent="20080207064647" -->
<!-- name="Torsten Hoefler" -->
<!-- email="torsten.hoefler_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk" -->
<!-- id="20080207064647.GU3275_at_benten.cs.indiana.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F0FFFA4C-C547-4393-93EB-167BA7AAE09D_at_open-mpi.org" -->
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
<strong>From:</strong> Torsten Hoefler (<em>torsten.hoefler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-07 01:46:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3150.php">Torsten Hoefler: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Previous message:</strong> <a href="3148.php">Brian Barrett: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>In reply to:</strong> <a href="3148.php">Brian Barrett: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3152.php">Terry Dontje: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Reply:</strong> <a href="3152.php">Terry Dontje: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brian,
<br>
<span class="quotelev1">&gt; Let me start by reminding everyone that I have no vote, so this should  
</span><br>
<span class="quotelev1">&gt; probably be sent to /dev/null.
</span><br>
thanks for your comment and this will not go to /dev/null!
<br>
<p><span class="quotelev1">&gt; I think Ralph raised some good points.  I'd like to raise another.
</span><br>
yes [will reply to this in a separate thread]
<br>
<p><span class="quotelev1">&gt; Does it make sense to bring LibNBC into the release at this point,  
</span><br>
<span class="quotelev1">&gt; given the current standardization process of non-blocking collectives?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My feeling is no, based on the long term support costs.  We had this  
</span><br>
<span class="quotelev1">&gt; problem with a function in LAM/MPI -- MPIL_SPAWN, I believe it was --  
</span><br>
<span class="quotelev1">&gt; that was almost but not quite MPI_COMM_SPAWN.  It was added to allow  
</span><br>
<span class="quotelev1">&gt; spawn before the standard was finished for dynamics.  The problem is,  
</span><br>
<span class="quotelev1">&gt; it wasn't quite MPI_COMM_SPAWN, so we were now stuck with yet another  
</span><br>
<span class="quotelev1">&gt; function to support (in a touchy piece of code) for infinity and beyond.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I worry that we'll have the same with LibNBC -- a piece of code that  
</span><br>
<span class="quotelev1">&gt; solves an immediate problem (no non-blocking collectives in MPI) but  
</span><br>
<span class="quotelev1">&gt; will become a long-term support anchor.  Since this is something we'll  
</span><br>
<span class="quotelev1">&gt; be encouraging users to write code to, it's not like support for  
</span><br>
<span class="quotelev1">&gt; mvapi, where we can just deprecate it and users won't really notice.   
</span><br>
<span class="quotelev1">&gt; It's one thing to tell them to update their cluster software stack --  
</span><br>
<span class="quotelev1">&gt; it's another to tell them to rewrite their applications.
</span><br>
I think this is a very good and valid point. However, I would like to
<br>
deprecate the NBC_* things as soon as non-blocking collectives are a
<br>
part of the standard. Of course, this would probably need two minor
<br>
versions to &quot;clean&quot; the code-base, but this is (will be) our normal
<br>
procedure (just what happened to MVAPI).
<br>
<p>And rewriting the user's application will not be that hard, it'll mainly
<br>
be vim:%s/NBC_/MPI_/g. Even if we change the interface (e.g. add tags or
<br>
decide to use the more limited split collective approach), this task is
<br>
rather easy and can be automated easily. It's not a functionality
<br>
change, just an interface.
<br>
<p>So don't get me wrong, I'm not pushing for it but I have had quite some
<br>
users who saw me as Open MPI and LibNBC developer when Open MPI will
<br>
support non-blocking collectives. We had a long discussion about this at
<br>
the Paris meeting and decided (for various reasons) to not add
<br>
non-blocking collectives directly to the coll modules but rather have
<br>
support for LibNBC. So this is already the &quot;light&quot; version of the whole
<br>
effort :).
<br>
<p>And we do not know how long this MPI-3 standardization process will take.
<br>
<p>Best,
<br>
&nbsp;&nbsp;Torsten
<br>
<p><pre>
-- 
 bash$ :(){ :|:&amp;};: --------------------- <a href="http://www.unixer.de/">http://www.unixer.de/</a> -----
Indiana University    | <a href="http://www.indiana.edu">http://www.indiana.edu</a>
Open Systems Lab      | <a href="http://osl.iu.edu/">http://osl.iu.edu/</a>
150 S. Woodlawn Ave.  | Bloomington, IN, 474045-7104 | USA
Lindley Hall Room 135 | +01 (812) 855-3608
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3150.php">Torsten Hoefler: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Previous message:</strong> <a href="3148.php">Brian Barrett: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>In reply to:</strong> <a href="3148.php">Brian Barrett: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3152.php">Terry Dontje: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Reply:</strong> <a href="3152.php">Terry Dontje: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
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
