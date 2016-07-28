<?
$subject_val = "Re: [OMPI users] OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  8 09:29:13 2016" -->
<!-- isoreceived="20160208142913" -->
<!-- sent="Mon, 8 Feb 2016 23:29:10 +0900" -->
<!-- isosent="20160208142910" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] Fortran vs C reductions" -->
<!-- id="CAAkFZ5uAbqWqmaWA2HbUXeNoqnLeusE9HP9nEpVQJFwuwpOhuA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4860F62F-F57C-409E-8299-A6FBE79A6F81_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] Fortran vs C reductions<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-08 09:29:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28466.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28464.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28463.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28466.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28466.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
ok, will do
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, February 8, 2016, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I like your suggestion better -- if we can somehow report during the
</span><br>
<span class="quotelev1">&gt; compile/link that the reason for the error is because Open MPI was not
</span><br>
<span class="quotelev1">&gt; compiled with Fortran support, that would definitely be preferable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: my suggestion was because I wanted to convey the *reason* for the
</span><br>
<span class="quotelev1">&gt; error (i.e., that OMPI has no Fortran support), and a pragma-based solution
</span><br>
<span class="quotelev1">&gt; didn't occur to me.  I didn't want to follow Gilles' suggestion of just
</span><br>
<span class="quotelev1">&gt; removing the symbols, because that will lead to other confusion (e.g.,
</span><br>
<span class="quotelev1">&gt; &quot;Hey, Open MPI is not compliant because it doesn't have Fortran datatypes
</span><br>
<span class="quotelev1">&gt; available in C!&quot;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles: do you want to poke around and see if you can make any of Jeff's
</span><br>
<span class="quotelev1">&gt; suggestions work out nicely?  (i.e., give some kind of compile/link error
</span><br>
<span class="quotelev1">&gt; that states that Open MPI was not built with Fortran support?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 8, 2016, at 8:55 AM, Jeff Hammond &lt;jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Waiting until runtime to issue this error is a terrible idea, because
</span><br>
<span class="quotelev1">&gt; then the PETSc team (among others) will disparage you for allowing a user
</span><br>
<span class="quotelev1">&gt; to successfully build against an unusable library.  They are on-record
</span><br>
<span class="quotelev1">&gt; numerous times in the past as to the evils of e.g. no-op symbols in MPI or
</span><br>
<span class="quotelev1">&gt; other runtime libraries, since this means that compile- and link-based
</span><br>
<span class="quotelev1">&gt; tests pass, even though nothing good will happen when the user employs them
</span><br>
<span class="quotelev1">&gt; in an application.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The right thing to do is what Gilles proposed: do not define the types
</span><br>
<span class="quotelev1">&gt; in mpi.h so that it is impossible to compile C code with Fortran datatypes,
</span><br>
<span class="quotelev1">&gt; if Fortran datatypes are not supported.  There are more and less effective
</span><br>
<span class="quotelev1">&gt; ways to do this, in terms of letting the user know what is happening.  For
</span><br>
<span class="quotelev1">&gt; example, you can just not define them, which might confuse novices who
</span><br>
<span class="quotelev1">&gt; don't know how to read error messages (HPC users are frequent offenders).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You could use e.g.:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #define MPI_DOUBLE_PRECISION choke me No Fortran support when library
</span><br>
<span class="quotelev1">&gt; was compiled!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately, Clang colorized output emphasizes the wrong problem here,
</span><br>
<span class="quotelev1">&gt; and ICC doesn't even echo the message at all in its error message.  GCC
</span><br>
<span class="quotelev1">&gt; issues the same error four times, and makes it relatively hard to miss the
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If the following GCC extension is supported, along with C99/C++11, you
</span><br>
<span class="quotelev1">&gt; could do this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #define MPI_DOUBLE_PRECISION _Pragma(&quot;GCC error \&quot;MPI was not compiled
</span><br>
<span class="quotelev1">&gt; with Fortran support\&quot;&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For the _functions_ that require Fortran support, you can use e.g.
</span><br>
<span class="quotelev1">&gt; __attribute__((error(&quot;no Fortran&quot;))) on the function declaration, although
</span><br>
<span class="quotelev1">&gt; neither ICC nor Clang support this, and it ends up throwing two error
</span><br>
<span class="quotelev1">&gt; messages when compiled (only one - the right one - when only preprocessed),
</span><br>
<span class="quotelev1">&gt; which might confuse the same folks that it is trying to help.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jeff
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Feb 8, 2016 at 5:14 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; The issue at hand is trying to help the user figure out that they have
</span><br>
<span class="quotelev1">&gt; an open MPI built without fortran support.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Perhaps we should improve the error reporting at run time to display
</span><br>
<span class="quotelev1">&gt; something about the fact that you used a fortran data type but have an OMPI
</span><br>
<span class="quotelev1">&gt; that was compiled without fortran support.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 8, 2016, at 4:00 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That being said, should we remove these fortran types from include
</span><br>
<span class="quotelev1">&gt; files and libs when ompi is configure'd without fortran support ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Hammond &lt;jeff.science_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; BTW: is there a reason you don't want to just use the C datatypes?
</span><br>
<span class="quotelev1">&gt; The fundamental output of the index is an integer value -- casting it to a
</span><br>
<span class="quotelev1">&gt; float of some flavor doesn't fundamentally change its value.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The code in question is not mine.  I have suggested to the developers
</span><br>
<span class="quotelev1">&gt; that they should use the correct C types.  The reason I became aware of
</span><br>
<span class="quotelev1">&gt; this issue is that one of my colleagues compiled and ran this code on a
</span><br>
<span class="quotelev1">&gt; system where OpenMPI was built without Fortran support and the code started
</span><br>
<span class="quotelev1">&gt; failing with errors from MPI which were not seen on other systems.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you use an MPI library compiled without Fortran support, you should
</span><br>
<span class="quotelev1">&gt; expect precisely nothing related to Fortran to work.  You might get more
</span><br>
<span class="quotelev1">&gt; than this because the universe is being nice to you, but you should treat
</span><br>
<span class="quotelev1">&gt; it as serendipity when something works, not a bug when something doesn't.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Hammond
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jeff.science_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28459.php">http://www.open-mpi.org/community/lists/users/2016/02/28459.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28460.php">http://www.open-mpi.org/community/lists/users/2016/02/28460.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Hammond
</span><br>
<span class="quotelev2">&gt; &gt; jeff.science_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28461.php">http://www.open-mpi.org/community/lists/users/2016/02/28461.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28463.php">http://www.open-mpi.org/community/lists/users/2016/02/28463.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28465/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28466.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28464.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28463.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28466.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28466.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
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
