<?
$subject_val = "Re: [OMPI devel] Memory hooks change testing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 11 17:50:34 2008" -->
<!-- isoreceived="20080611215034" -->
<!-- sent="Wed, 11 Jun 2008 17:50:26 -0400 (EDT)" -->
<!-- isosent="20080611215026" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Memory hooks change testing" -->
<!-- id="Pine.LNX.4.64.0806111747380.18328_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-11 17:50:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4121.php">Brad Benton: "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>Previous message:</strong> <a href="4119.php">David Daniel: "[OMPI devel] libdir not propagated to contrib/vt/vt ??"</a>
<li><strong>In reply to:</strong> <a href="4117.php">Brian Barrett: "Re: [OMPI devel] Memory hooks change testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4121.php">Brad Benton: "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>Reply:</strong> <a href="4121.php">Brad Benton: "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>Reply:</strong> <a href="4124.php">Brad Benton: "Re: [OMPI devel] Memory hooks change testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brad unfortunately figured out I had done something to annoy the gods of 
<br>
mercurial and the repository below didn't contain all the changes 
<br>
advertised (and in fact didn't work).  I've since rebuilt the repository 
<br>
and verified it works now.  I'd recommend deleting your existing clones of 
<br>
the repository below and starting over.
<br>
<p>Sorry about that,
<br>
<p>Brian
<br>
<p><p>On Wed, 11 Jun 2008, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; Did anyone get a chance to test (or think about testing) this?  I'd like to 
</span><br>
<span class="quotelev1">&gt; commit the changes on Friday evening, if I haven't heard any negative 
</span><br>
<span class="quotelev1">&gt; feedback.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 9, 2008, at 8:56 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all -
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Per the RFC I sent out last week, I've implemented a revised behavior of 
</span><br>
<span class="quotelev2">&gt;&gt; the memory hooks for high speed networks.  It's a bit different than the 
</span><br>
<span class="quotelev2">&gt;&gt; RFC proposed, but still very minor and fairly straight foward.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The default is to build ptmalloc2 support, but as an almost complete 
</span><br>
<span class="quotelev2">&gt;&gt; standalone library.  If the user wants to use ptmalloc2, he only has to add 
</span><br>
<span class="quotelev2">&gt;&gt; -lopenmpi-malloc to his link line.  Even when standalone and openmpi-malloc 
</span><br>
<span class="quotelev2">&gt;&gt; is not linked in, we'll still intercept munmap as it's needed for mallopt 
</span><br>
<span class="quotelev2">&gt;&gt; (below) and we've never had any trouble with that part of ptmalloc2 (it's 
</span><br>
<span class="quotelev2">&gt;&gt; easy to intercept).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As a *CHANGE* in behavior, if leave_pinned support is turned on and there's 
</span><br>
<span class="quotelev2">&gt;&gt; no ptmalloc2 support, we will automatically enable mallopt.  As a *CHANGE* 
</span><br>
<span class="quotelev2">&gt;&gt; in behavior, if the user disables mallopt or mallopt is not available and 
</span><br>
<span class="quotelev2">&gt;&gt; leave pinned is requested, we'll abort.  I think these both make sense and 
</span><br>
<span class="quotelev2">&gt;&gt; are closest to expected behavior, but wanted to point them out.  It is 
</span><br>
<span class="quotelev2">&gt;&gt; possible for the user to disable mallopt and enable leave_pinned, but that 
</span><br>
<span class="quotelev2">&gt;&gt; will *only* work if there is some other mechanism for intercepting free 
</span><br>
<span class="quotelev2">&gt;&gt; (basically, it allows a way to ensure your using ptmalloc2 instead of 
</span><br>
<span class="quotelev2">&gt;&gt; mallopt).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is also a new memory component, mallopt, which only intercepts munmap 
</span><br>
<span class="quotelev2">&gt;&gt; and exists only to allow users to enable mallopt while not building the 
</span><br>
<span class="quotelev2">&gt;&gt; ptmalloc2 component at all.  Previously, our mallopt support was lacking in 
</span><br>
<span class="quotelev2">&gt;&gt; that it didn't cover the case where users explicitly called munmap in their 
</span><br>
<span class="quotelev2">&gt;&gt; applications.  Now, it does.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The changes are fairly small and can be seen/tested in the HG repository 
</span><br>
<span class="quotelev2">&gt;&gt; bwb/mem-hooks, URL below.  I think this would be a good thing to push to 
</span><br>
<span class="quotelev2">&gt;&gt; 1.3, as it will solve an ongoing problem on Linux (basically, users getting 
</span><br>
<span class="quotelev2">&gt;&gt; screwed by our ptmalloc2 implementation).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/bwb/mem-hooks/">http://www.open-mpi.org/hg/hgwebdir.cgi/bwb/mem-hooks/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Brian Barrett
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<li><strong>Next message:</strong> <a href="4121.php">Brad Benton: "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>Previous message:</strong> <a href="4119.php">David Daniel: "[OMPI devel] libdir not propagated to contrib/vt/vt ??"</a>
<li><strong>In reply to:</strong> <a href="4117.php">Brian Barrett: "Re: [OMPI devel] Memory hooks change testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4121.php">Brad Benton: "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>Reply:</strong> <a href="4121.php">Brad Benton: "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>Reply:</strong> <a href="4124.php">Brad Benton: "Re: [OMPI devel] Memory hooks change testing"</a>
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
