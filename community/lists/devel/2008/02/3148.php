<?
$subject_val = "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 00:50:49 2008" -->
<!-- isoreceived="20080207055049" -->
<!-- sent="Wed, 6 Feb 2008 22:50:40 -0700" -->
<!-- isosent="20080207055040" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk" -->
<!-- id="F0FFFA4C-C547-4393-93EB-167BA7AAE09D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080206211407.GN3275_at_benten.cs.indiana.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-07 00:50:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3149.php">Torsten Hoefler: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Previous message:</strong> <a href="3147.php">Ralph Castain: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>In reply to:</strong> <a href="3145.php">Torsten Hoefler: "[OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3149.php">Torsten Hoefler: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Reply:</strong> <a href="3149.php">Torsten Hoefler: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me start by reminding everyone that I have no vote, so this should  
<br>
probably be sent to /dev/null.
<br>
<p>I think Ralph raised some good points.  I'd like to raise another.
<br>
<p>Does it make sense to bring LibNBC into the release at this point,  
<br>
given the current standardization process of non-blocking collectives?
<br>
<p>My feeling is no, based on the long term support costs.  We had this  
<br>
problem with a function in LAM/MPI -- MPIL_SPAWN, I believe it was --  
<br>
that was almost but not quite MPI_COMM_SPAWN.  It was added to allow  
<br>
spawn before the standard was finished for dynamics.  The problem is,  
<br>
it wasn't quite MPI_COMM_SPAWN, so we were now stuck with yet another  
<br>
function to support (in a touchy piece of code) for infinity and beyond.
<br>
<p>I worry that we'll have the same with LibNBC -- a piece of code that  
<br>
solves an immediate problem (no non-blocking collectives in MPI) but  
<br>
will become a long-term support anchor.  Since this is something we'll  
<br>
be encouraging users to write code to, it's not like support for  
<br>
mvapi, where we can just deprecate it and users won't really notice.   
<br>
It's one thing to tell them to update their cluster software stack --  
<br>
it's another to tell them to rewrite their applications.
<br>
<p><p>Just my $0.02,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3149.php">Torsten Hoefler: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Previous message:</strong> <a href="3147.php">Ralph Castain: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>In reply to:</strong> <a href="3145.php">Torsten Hoefler: "[OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3149.php">Torsten Hoefler: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Reply:</strong> <a href="3149.php">Torsten Hoefler: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
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
