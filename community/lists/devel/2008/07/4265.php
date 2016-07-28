<?
$subject_val = "[OMPI devel] RFC: make mpi_leave_pinned=1 the default";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  3 08:56:57 2008" -->
<!-- isoreceived="20080703125657" -->
<!-- sent="Thu, 3 Jul 2008 05:56:52 -0700" -->
<!-- isosent="20080703125652" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: make mpi_leave_pinned=1 the default" -->
<!-- id="DAE6CC43-E302-4320-B4CB-16360ECE6A37_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: make mpi_leave_pinned=1 the default<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-03 08:56:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4266.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4264.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4267.php">Brian W. Barrett: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<li><strong>Reply:</strong> <a href="4267.php">Brian W. Barrett: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<li><strong>Reply:</strong> <a href="4268.php">Torsten Hoefler: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<li><strong>Reply:</strong> <a href="4279.php">Patrick Geoffray: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: make mpi_leave_pinned=1 by default when a BTL is used that would  
<br>
benefit from it (when possible; 0 when not, obviously)
<br>
<p>WHY: Several reasons:
<br>
- we continually get beat up because of &quot;lower performance&quot; on  
<br>
benchmarks by default (I get beat up, at least ;-) )
<br>
- ptmalloc is no longer compiled in user apps by default, but mallopt  
<br>
may be available
<br>
- ptmalloc has been linked in on many platforms by default for a long  
<br>
time
<br>
- our ptmalloc settings were such that memory was rarely returned to  
<br>
the OS -- quite similar to mallopt
<br>
- very few people have complained about the above policy
<br>
- therefore, it may be ok to mallopt by default if there is a device  
<br>
in the run that would benefit from it
<br>
<p>WHERE: openib BTL, MPI runtime directory
<br>
<p>WHEN: before v1.3 ships
<br>
<p>TIMEOUT: Fri, July 11, 2008
<br>
<p>----------------------
<br>
<p>I'm assuming that this topic will generate a fair amount of  
<br>
conversation.  :-)
<br>
<p>I'm basically getting tired of people complaining that OMPI has lower  
<br>
default benchmark performance on OpenFabrics networks.  I don't mind  
<br>
explaining the mpi_leave_pinned flag; what I do mind is that customers  
<br>
and users who refuse to use it (which is at least sort of  
<br>
understandable).  I also mind that other MPI implementations  
<br>
(sometimes knowingly) compare Open MPI without leave_pinned to their  
<br>
implementations with leave_pinned.  Explaining it after the fact is  
<br>
never quite as compelling when there is a big poster on a show floor  
<br>
showing MPI XYZ with great ping pong performance and OMPI with lousy  
<br>
ping pong performance.
<br>
<p>Note that:
<br>
<p>- OMPI is the only MPI that doesn't do the &quot;leave pinned&quot; trick by  
<br>
default on OpenFabrics networks
<br>
- I know that pingpong benchmarks are meaningless.  Customers and  
<br>
users don't care.  We cannot move this mountain.
<br>
- I know that leave_pinned is frequently meaningless to real apps  
<br>
(although Torsten likes to argue otherwise -- and he's got at least  
<br>
some real-world data points that show otherwise :-) ).
<br>
- I know that it's only OpenFabrics networks that require this setting  
<br>
and that many people think OpenFabrics is broken because of this.   
<br>
Let's leave such religious arguments at the door; I'm not happy we  
<br>
have to do it either, but that's not the issue here.
<br>
<p>So my proposal is to enable mpi_leave_pinned by default:
<br>
<p>- if there's a BTL in the app that would benefit (i.e., openib).  This  
<br>
would likely entail adding some clever callback from the openib BTL  
<br>
init, or somesuch (I have not thought this through yet).
<br>
- mallopt or ptmalloc is available
<br>
<p>Comments?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4266.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4264.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4267.php">Brian W. Barrett: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<li><strong>Reply:</strong> <a href="4267.php">Brian W. Barrett: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<li><strong>Reply:</strong> <a href="4268.php">Torsten Hoefler: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<li><strong>Reply:</strong> <a href="4279.php">Patrick Geoffray: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
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
