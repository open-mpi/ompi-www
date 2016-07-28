<?
$subject_val = "Re: [OMPI devel] Memory hooks change testing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 11 13:06:39 2008" -->
<!-- isoreceived="20080611170639" -->
<!-- sent="Wed, 11 Jun 2008 11:06:15 -0600" -->
<!-- isosent="20080611170615" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Memory hooks change testing" -->
<!-- id="CAF909DA-261C-4C69-947A-DB86BE2098BC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3E5F11F2-037B-4872-9D6B-AB02AA6595EA_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Memory hooks change testing<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-11 13:06:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4118.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>Previous message:</strong> <a href="4116.php">Ralph H Castain: "[OMPI devel] Vampirtrace warnings"</a>
<li><strong>In reply to:</strong> <a href="4114.php">Brian Barrett: "[OMPI devel] Memory hooks change testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4118.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>Reply:</strong> <a href="4118.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>Reply:</strong> <a href="4120.php">Brian W. Barrett: "Re: [OMPI devel] Memory hooks change testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did anyone get a chance to test (or think about testing) this?  I'd  
<br>
like to commit the changes on Friday evening, if I haven't heard any  
<br>
negative feedback.
<br>
<p>Brian
<br>
<p>On Jun 9, 2008, at 8:56 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; Hi all -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Per the RFC I sent out last week, I've implemented a revised  
</span><br>
<span class="quotelev1">&gt; behavior of the memory hooks for high speed networks.  It's a bit  
</span><br>
<span class="quotelev1">&gt; different than the RFC proposed, but still very minor and fairly  
</span><br>
<span class="quotelev1">&gt; straight foward.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The default is to build ptmalloc2 support, but as an almost complete  
</span><br>
<span class="quotelev1">&gt; standalone library.  If the user wants to use ptmalloc2, he only has  
</span><br>
<span class="quotelev1">&gt; to add -lopenmpi-malloc to his link line.  Even when standalone and  
</span><br>
<span class="quotelev1">&gt; openmpi-malloc is not linked in, we'll still intercept munmap as  
</span><br>
<span class="quotelev1">&gt; it's needed for mallopt (below) and we've never had any trouble with  
</span><br>
<span class="quotelev1">&gt; that part of ptmalloc2 (it's easy to intercept).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a *CHANGE* in behavior, if leave_pinned support is turned on and  
</span><br>
<span class="quotelev1">&gt; there's no ptmalloc2 support, we will automatically enable mallopt.   
</span><br>
<span class="quotelev1">&gt; As a *CHANGE* in behavior, if the user disables mallopt or mallopt  
</span><br>
<span class="quotelev1">&gt; is not available and leave pinned is requested, we'll abort.  I  
</span><br>
<span class="quotelev1">&gt; think these both make sense and are closest to expected behavior,  
</span><br>
<span class="quotelev1">&gt; but wanted to point them out.  It is possible for the user to  
</span><br>
<span class="quotelev1">&gt; disable mallopt and enable leave_pinned, but that will *only* work  
</span><br>
<span class="quotelev1">&gt; if there is some other mechanism for intercepting free (basically,  
</span><br>
<span class="quotelev1">&gt; it allows a way to ensure your using ptmalloc2 instead of mallopt).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is also a new memory component, mallopt, which only intercepts  
</span><br>
<span class="quotelev1">&gt; munmap and exists only to allow users to enable mallopt while not  
</span><br>
<span class="quotelev1">&gt; building the ptmalloc2 component at all.  Previously, our mallopt  
</span><br>
<span class="quotelev1">&gt; support was lacking in that it didn't cover the case where users  
</span><br>
<span class="quotelev1">&gt; explicitly called munmap in their applications.  Now, it does.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The changes are fairly small and can be seen/tested in the HG  
</span><br>
<span class="quotelev1">&gt; repository bwb/mem-hooks, URL below.  I think this would be a good  
</span><br>
<span class="quotelev1">&gt; thing to push to 1.3, as it will solve an ongoing problem on Linux  
</span><br>
<span class="quotelev1">&gt; (basically, users getting screwed by our ptmalloc2 implementation).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/bwb/mem-hooks/">http://www.open-mpi.org/hg/hgwebdir.cgi/bwb/mem-hooks/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  Brian Barrett
</span><br>
<span class="quotelev1">&gt;  Open MPI developer
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<li><strong>Next message:</strong> <a href="4118.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>Previous message:</strong> <a href="4116.php">Ralph H Castain: "[OMPI devel] Vampirtrace warnings"</a>
<li><strong>In reply to:</strong> <a href="4114.php">Brian Barrett: "[OMPI devel] Memory hooks change testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4118.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>Reply:</strong> <a href="4118.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>Reply:</strong> <a href="4120.php">Brian W. Barrett: "Re: [OMPI devel] Memory hooks change testing"</a>
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
