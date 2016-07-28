<?
$subject_val = "Re: [OMPI devel] Memory hooks change testing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 11 17:58:02 2008" -->
<!-- isoreceived="20080611215802" -->
<!-- sent="Wed, 11 Jun 2008 16:57:54 -0500" -->
<!-- isosent="20080611215754" -->
<!-- name="Brad Benton" -->
<!-- email="bradford.benton_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Memory hooks change testing" -->
<!-- id="44079e5f0806111457ice3d88dvc468f2c66fa4b8c2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.64.0806111747380.18328_at_marvin.we-be-smart.org" -->
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
<strong>From:</strong> Brad Benton (<em>bradford.benton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-11 17:57:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4122.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Pallas fails"</a>
<li><strong>Previous message:</strong> <a href="4120.php">Brian W. Barrett: "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>In reply to:</strong> <a href="4120.php">Brian W. Barrett: "Re: [OMPI devel] Memory hooks change testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4124.php">Brad Benton: "Re: [OMPI devel] Memory hooks change testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
np...i'll give it another try (and will correspondingly endeavor to mollify
<br>
the mercurial gods
<br>
as best i can).
<br>
<p>thx,
<br>
--brad
<br>
<p><p>On Wed, Jun 11, 2008 at 4:50 PM, Brian W. Barrett &lt;brbarret_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Brad unfortunately figured out I had done something to annoy the gods of
</span><br>
<span class="quotelev1">&gt; mercurial and the repository below didn't contain all the changes
</span><br>
<span class="quotelev1">&gt; advertised (and in fact didn't work).  I've since rebuilt the repository
</span><br>
<span class="quotelev1">&gt; and verified it works now.  I'd recommend deleting your existing clones of
</span><br>
<span class="quotelev1">&gt; the repository below and starting over.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry about that,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 11 Jun 2008, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Did anyone get a chance to test (or think about testing) this?  I'd like
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt; commit the changes on Friday evening, if I haven't heard any negative
</span><br>
<span class="quotelev2">&gt; &gt; feedback.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 9, 2008, at 8:56 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi all -
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Per the RFC I sent out last week, I've implemented a revised behavior of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the memory hooks for high speed networks.  It's a bit different than the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; RFC proposed, but still very minor and fairly straight foward.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The default is to build ptmalloc2 support, but as an almost complete
</span><br>
<span class="quotelev3">&gt; &gt;&gt; standalone library.  If the user wants to use ptmalloc2, he only has to
</span><br>
<span class="quotelev1">&gt; add
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -lopenmpi-malloc to his link line.  Even when standalone and
</span><br>
<span class="quotelev1">&gt; openmpi-malloc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is not linked in, we'll still intercept munmap as it's needed for
</span><br>
<span class="quotelev1">&gt; mallopt
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (below) and we've never had any trouble with that part of ptmalloc2
</span><br>
<span class="quotelev1">&gt; (it's
</span><br>
<span class="quotelev3">&gt; &gt;&gt; easy to intercept).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As a *CHANGE* in behavior, if leave_pinned support is turned on and
</span><br>
<span class="quotelev1">&gt; there's
</span><br>
<span class="quotelev3">&gt; &gt;&gt; no ptmalloc2 support, we will automatically enable mallopt.  As a
</span><br>
<span class="quotelev1">&gt; *CHANGE*
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in behavior, if the user disables mallopt or mallopt is not available
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; leave pinned is requested, we'll abort.  I think these both make sense
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; are closest to expected behavior, but wanted to point them out.  It is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; possible for the user to disable mallopt and enable leave_pinned, but
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; will *only* work if there is some other mechanism for intercepting free
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (basically, it allows a way to ensure your using ptmalloc2 instead of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mallopt).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; There is also a new memory component, mallopt, which only intercepts
</span><br>
<span class="quotelev1">&gt; munmap
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and exists only to allow users to enable mallopt while not building the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ptmalloc2 component at all.  Previously, our mallopt support was lacking
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that it didn't cover the case where users explicitly called munmap in
</span><br>
<span class="quotelev1">&gt; their
</span><br>
<span class="quotelev3">&gt; &gt;&gt; applications.  Now, it does.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The changes are fairly small and can be seen/tested in the HG repository
</span><br>
<span class="quotelev3">&gt; &gt;&gt; bwb/mem-hooks, URL below.  I think this would be a good thing to push to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.3, as it will solve an ongoing problem on Linux (basically, users
</span><br>
<span class="quotelev1">&gt; getting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; screwed by our ptmalloc2 implementation).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/bwb/mem-hooks/">http://www.open-mpi.org/hg/hgwebdir.cgi/bwb/mem-hooks/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brian Barrett
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open MPI developer
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4121/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4122.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Pallas fails"</a>
<li><strong>Previous message:</strong> <a href="4120.php">Brian W. Barrett: "Re: [OMPI devel] Memory hooks change testing"</a>
<li><strong>In reply to:</strong> <a href="4120.php">Brian W. Barrett: "Re: [OMPI devel] Memory hooks change testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4124.php">Brad Benton: "Re: [OMPI devel] Memory hooks change testing"</a>
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
