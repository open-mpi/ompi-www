<?
$subject_val = "Re: [OMPI devel] Memory hooks change testing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 11 14:26:52 2008" -->
<!-- isoreceived="20080611182652" -->
<!-- sent="Wed, 11 Jun 2008 21:20:47 +0300" -->
<!-- isosent="20080611182047" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Memory hooks change testing" -->
<!-- id="4850177F.4000404_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAF909DA-261C-4C69-947A-DB86BE2098BC_at_open-mpi.org" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-11 14:20:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4119.php">David Daniel: "[OMPI devel] libdir not propagated to contrib/vt/vt ??"</a>
<li><strong>Previous message:</strong> <a href="4117.php">Brian Barrett: "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>In reply to:</strong> <a href="4117.php">Brian Barrett: "Re: [OMPI devel] Memory hooks change testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4120.php">Brian W. Barrett: "Re: [OMPI devel] Memory hooks change testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; Did anyone get a chance to test (or think about testing) this?  I'd  
</span><br>
<span class="quotelev1">&gt; like to commit the changes on Friday evening, if I haven't heard any  
</span><br>
<span class="quotelev1">&gt; negative feedback.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I will run it tomorrow on my cluster.
<br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 9, 2008, at 8:56 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi all -
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Per the RFC I sent out last week, I've implemented a revised  
</span><br>
<span class="quotelev2">&gt;&gt; behavior of the memory hooks for high speed networks.  It's a bit  
</span><br>
<span class="quotelev2">&gt;&gt; different than the RFC proposed, but still very minor and fairly  
</span><br>
<span class="quotelev2">&gt;&gt; straight foward.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The default is to build ptmalloc2 support, but as an almost complete  
</span><br>
<span class="quotelev2">&gt;&gt; standalone library.  If the user wants to use ptmalloc2, he only has  
</span><br>
<span class="quotelev2">&gt;&gt; to add -lopenmpi-malloc to his link line.  Even when standalone and  
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-malloc is not linked in, we'll still intercept munmap as  
</span><br>
<span class="quotelev2">&gt;&gt; it's needed for mallopt (below) and we've never had any trouble with  
</span><br>
<span class="quotelev2">&gt;&gt; that part of ptmalloc2 (it's easy to intercept).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As a *CHANGE* in behavior, if leave_pinned support is turned on and  
</span><br>
<span class="quotelev2">&gt;&gt; there's no ptmalloc2 support, we will automatically enable mallopt.   
</span><br>
<span class="quotelev2">&gt;&gt; As a *CHANGE* in behavior, if the user disables mallopt or mallopt  
</span><br>
<span class="quotelev2">&gt;&gt; is not available and leave pinned is requested, we'll abort.  I  
</span><br>
<span class="quotelev2">&gt;&gt; think these both make sense and are closest to expected behavior,  
</span><br>
<span class="quotelev2">&gt;&gt; but wanted to point them out.  It is possible for the user to  
</span><br>
<span class="quotelev2">&gt;&gt; disable mallopt and enable leave_pinned, but that will *only* work  
</span><br>
<span class="quotelev2">&gt;&gt; if there is some other mechanism for intercepting free (basically,  
</span><br>
<span class="quotelev2">&gt;&gt; it allows a way to ensure your using ptmalloc2 instead of mallopt).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is also a new memory component, mallopt, which only intercepts  
</span><br>
<span class="quotelev2">&gt;&gt; munmap and exists only to allow users to enable mallopt while not  
</span><br>
<span class="quotelev2">&gt;&gt; building the ptmalloc2 component at all.  Previously, our mallopt  
</span><br>
<span class="quotelev2">&gt;&gt; support was lacking in that it didn't cover the case where users  
</span><br>
<span class="quotelev2">&gt;&gt; explicitly called munmap in their applications.  Now, it does.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The changes are fairly small and can be seen/tested in the HG  
</span><br>
<span class="quotelev2">&gt;&gt; repository bwb/mem-hooks, URL below.  I think this would be a good  
</span><br>
<span class="quotelev2">&gt;&gt; thing to push to 1.3, as it will solve an ongoing problem on Linux  
</span><br>
<span class="quotelev2">&gt;&gt; (basically, users getting screwed by our ptmalloc2 implementation).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/bwb/mem-hooks/">http://www.open-mpi.org/hg/hgwebdir.cgi/bwb/mem-hooks/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;  Brian Barrett
</span><br>
<span class="quotelev2">&gt;&gt;  Open MPI developer
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4119.php">David Daniel: "[OMPI devel] libdir not propagated to contrib/vt/vt ??"</a>
<li><strong>Previous message:</strong> <a href="4117.php">Brian Barrett: "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>In reply to:</strong> <a href="4117.php">Brian Barrett: "Re: [OMPI devel] Memory hooks change testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4120.php">Brian W. Barrett: "Re: [OMPI devel] Memory hooks change testing"</a>
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
