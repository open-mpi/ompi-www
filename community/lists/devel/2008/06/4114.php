<?
$subject_val = "[OMPI devel] Memory hooks change testing";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 22:56:41 2008" -->
<!-- isoreceived="20080610025641" -->
<!-- sent="Mon, 9 Jun 2008 20:56:30 -0600" -->
<!-- isosent="20080610025630" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="[OMPI devel] Memory hooks change testing" -->
<!-- id="3E5F11F2-037B-4872-9D6B-AB02AA6595EA_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] Memory hooks change testing<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-09 22:56:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4115.php">Lenny Verkhovsky: "[OMPI devel] Fwd:  SM BTL NUMA awareness patches"</a>
<li><strong>Previous message:</strong> <a href="4113.php">Joseph Bane: "Re: [OMPI devel] devel Digest, Vol 1080, Issue 3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4117.php">Brian Barrett: "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>Reply:</strong> <a href="4117.php">Brian Barrett: "Re: [OMPI devel] Memory hooks change testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>Per the RFC I sent out last week, I've implemented a revised behavior  
<br>
of the memory hooks for high speed networks.  It's a bit different  
<br>
than the RFC proposed, but still very minor and fairly straight foward.
<br>
<p>The default is to build ptmalloc2 support, but as an almost complete  
<br>
standalone library.  If the user wants to use ptmalloc2, he only has  
<br>
to add -lopenmpi-malloc to his link line.  Even when standalone and  
<br>
openmpi-malloc is not linked in, we'll still intercept munmap as it's  
<br>
needed for mallopt (below) and we've never had any trouble with that  
<br>
part of ptmalloc2 (it's easy to intercept).
<br>
<p>As a *CHANGE* in behavior, if leave_pinned support is turned on and  
<br>
there's no ptmalloc2 support, we will automatically enable mallopt.   
<br>
As a *CHANGE* in behavior, if the user disables mallopt or mallopt is  
<br>
not available and leave pinned is requested, we'll abort.  I think  
<br>
these both make sense and are closest to expected behavior, but wanted  
<br>
to point them out.  It is possible for the user to disable mallopt and  
<br>
enable leave_pinned, but that will *only* work if there is some other  
<br>
mechanism for intercepting free (basically, it allows a way to ensure  
<br>
your using ptmalloc2 instead of mallopt).
<br>
<p>There is also a new memory component, mallopt, which only intercepts  
<br>
munmap and exists only to allow users to enable mallopt while not  
<br>
building the ptmalloc2 component at all.  Previously, our mallopt  
<br>
support was lacking in that it didn't cover the case where users  
<br>
explicitly called munmap in their applications.  Now, it does.
<br>
<p>The changes are fairly small and can be seen/tested in the HG  
<br>
repository bwb/mem-hooks, URL below.  I think this would be a good  
<br>
thing to push to 1.3, as it will solve an ongoing problem on Linux  
<br>
(basically, users getting screwed by our ptmalloc2 implementation).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/hg/hgwebdir.cgi/bwb/mem-hooks/">http://www.open-mpi.org/hg/hgwebdir.cgi/bwb/mem-hooks/</a>
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
<li><strong>Next message:</strong> <a href="4115.php">Lenny Verkhovsky: "[OMPI devel] Fwd:  SM BTL NUMA awareness patches"</a>
<li><strong>Previous message:</strong> <a href="4113.php">Joseph Bane: "Re: [OMPI devel] devel Digest, Vol 1080, Issue 3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4117.php">Brian Barrett: "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>Reply:</strong> <a href="4117.php">Brian Barrett: "Re: [OMPI devel] Memory hooks change testing"</a>
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
