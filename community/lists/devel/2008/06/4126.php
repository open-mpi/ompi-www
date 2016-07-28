<?
$subject_val = "Re: [OMPI devel] Memory hooks change testing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 12 12:26:25 2008" -->
<!-- isoreceived="20080612162625" -->
<!-- sent="Thu, 12 Jun 2008 19:20:43 +0300" -->
<!-- isosent="20080612162043" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Memory hooks change testing" -->
<!-- id="48514CDB.5080706_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44079e5f0806120712m576abe1fk764b9c4a32396295_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-06-12 12:20:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4127.php">Tim Mattox: "[OMPI devel] Brief mail services outage today"</a>
<li><strong>Previous message:</strong> <a href="4125.php">Lenny Verkhovsky: "Re: [OMPI devel] SM BTL NUMA awareness patches"</a>
<li><strong>In reply to:</strong> <a href="4124.php">Brad Benton: "Re: [OMPI devel] Memory hooks change testing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In my MTT testing it looks ok, too.
<br>
<p>Brad Benton wrote:
<br>
<span class="quotelev1">&gt; Brian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is working smoothly now:  both the configuration/build and 
</span><br>
<span class="quotelev1">&gt; execution.  So,
</span><br>
<span class="quotelev1">&gt; from my standpoint, it looks good for inclusion into the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --brad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 11, 2008 at 4:50 PM, Brian W. Barrett 
</span><br>
<span class="quotelev1">&gt; &lt;brbarret_at_[hidden] &lt;mailto:brbarret_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Brad unfortunately figured out I had done something to annoy the
</span><br>
<span class="quotelev1">&gt;     gods of
</span><br>
<span class="quotelev1">&gt;     mercurial and the repository below didn't contain all the changes
</span><br>
<span class="quotelev1">&gt;     advertised (and in fact didn't work).  I've since rebuilt the
</span><br>
<span class="quotelev1">&gt;     repository
</span><br>
<span class="quotelev1">&gt;     and verified it works now.  I'd recommend deleting your existing
</span><br>
<span class="quotelev1">&gt;     clones of
</span><br>
<span class="quotelev1">&gt;     the repository below and starting over.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Sorry about that,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Wed, 11 Jun 2008, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Did anyone get a chance to test (or think about testing) this?
</span><br>
<span class="quotelev1">&gt;      I'd like to
</span><br>
<span class="quotelev2">&gt;     &gt; commit the changes on Friday evening, if I haven't heard any
</span><br>
<span class="quotelev1">&gt;     negative
</span><br>
<span class="quotelev2">&gt;     &gt; feedback.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Brian
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; On Jun 9, 2008, at 8:56 PM, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Hi all -
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Per the RFC I sent out last week, I've implemented a revised
</span><br>
<span class="quotelev1">&gt;     behavior of
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; the memory hooks for high speed networks.  It's a bit different
</span><br>
<span class="quotelev1">&gt;     than the
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; RFC proposed, but still very minor and fairly straight foward.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; The default is to build ptmalloc2 support, but as an almost
</span><br>
<span class="quotelev1">&gt;     complete
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; standalone library.  If the user wants to use ptmalloc2, he
</span><br>
<span class="quotelev1">&gt;     only has to add
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; -lopenmpi-malloc to his link line.  Even when standalone and
</span><br>
<span class="quotelev1">&gt;     openmpi-malloc
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; is not linked in, we'll still intercept munmap as it's needed
</span><br>
<span class="quotelev1">&gt;     for mallopt
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; (below) and we've never had any trouble with that part of
</span><br>
<span class="quotelev1">&gt;     ptmalloc2 (it's
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; easy to intercept).
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; As a *CHANGE* in behavior, if leave_pinned support is turned on
</span><br>
<span class="quotelev1">&gt;     and there's
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; no ptmalloc2 support, we will automatically enable mallopt.  As
</span><br>
<span class="quotelev1">&gt;     a *CHANGE*
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; in behavior, if the user disables mallopt or mallopt is not
</span><br>
<span class="quotelev1">&gt;     available and
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; leave pinned is requested, we'll abort.  I think these both
</span><br>
<span class="quotelev1">&gt;     make sense and
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; are closest to expected behavior, but wanted to point them out.
</span><br>
<span class="quotelev1">&gt;      It is
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; possible for the user to disable mallopt and enable
</span><br>
<span class="quotelev1">&gt;     leave_pinned, but that
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; will *only* work if there is some other mechanism for
</span><br>
<span class="quotelev1">&gt;     intercepting free
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; (basically, it allows a way to ensure your using ptmalloc2
</span><br>
<span class="quotelev1">&gt;     instead of
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; mallopt).
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; There is also a new memory component, mallopt, which only
</span><br>
<span class="quotelev1">&gt;     intercepts munmap
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; and exists only to allow users to enable mallopt while not
</span><br>
<span class="quotelev1">&gt;     building the
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; ptmalloc2 component at all.  Previously, our mallopt support
</span><br>
<span class="quotelev1">&gt;     was lacking in
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; that it didn't cover the case where users explicitly called
</span><br>
<span class="quotelev1">&gt;     munmap in their
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; applications.  Now, it does.
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; The changes are fairly small and can be seen/tested in the HG
</span><br>
<span class="quotelev1">&gt;     repository
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; bwb/mem-hooks, URL below.  I think this would be a good thing
</span><br>
<span class="quotelev1">&gt;     to push to
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; 1.3, as it will solve an ongoing problem on Linux (basically,
</span><br>
<span class="quotelev1">&gt;     users getting
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; screwed by our ptmalloc2 implementation).
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;   <a href="http://www.open-mpi.org/hg/hgwebdir.cgi/bwb/mem-hooks/">http://www.open-mpi.org/hg/hgwebdir.cgi/bwb/mem-hooks/</a>
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; --
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Brian Barrett
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; Open MPI developer
</span><br>
<span class="quotelev3">&gt;     &gt;&gt; <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev3">&gt;     &gt;&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="4127.php">Tim Mattox: "[OMPI devel] Brief mail services outage today"</a>
<li><strong>Previous message:</strong> <a href="4125.php">Lenny Verkhovsky: "Re: [OMPI devel] SM BTL NUMA awareness patches"</a>
<li><strong>In reply to:</strong> <a href="4124.php">Brad Benton: "Re: [OMPI devel] Memory hooks change testing"</a>
<!-- nextthread="start" -->
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
