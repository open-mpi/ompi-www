<?
$subject_val = "Re: [OMPI users] OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 11:17:24 2016" -->
<!-- isoreceived="20160209161724" -->
<!-- sent="Tue, 9 Feb 2016 08:17:00 -0800" -->
<!-- isosent="20160209161700" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] Fortran vs C reductions" -->
<!-- id="CAGKz=uLUmpTNZagHXe2mpuVWnr0QTFtpSKrZucoe+-K1JODtig_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkWME67eUdgGixrv7iO81bcZwZRTASsB0nM0HnKNJ3HiGw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-09 11:17:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28478.php">Rahul Pisharody: "Re: [OMPI users] Help with OpenMPI and Univa Grid Engine"</a>
<li><strong>Previous message:</strong> <a href="28476.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28469.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28479.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28479.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;MPI-3.0 (and later) compliant Fortran bindings are not only a property of
<br>
the MPI library itself, but rather a property of an MPI library together
<br>
with the Fortran compiler suite for which it is compiled.&quot; (MPI 3.1 Section
<br>
17.1.7).
<br>
<p>Of course, implementations can provide support in excess of the minimum
<br>
required by the standard, provided that support remains compliant with the
<br>
standard.
<br>
<p>Jeff
<br>
<p>On Mon, Feb 8, 2016 at 9:21 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry to spoil the fun here, but this proposal is a very bad idea. It is
</span><br>
mandated by the MPI standard, page 25 line 27 (v3.1), not only to provide
<br>
all predefined datatypes, but to have support for them. There are optional
<br>
datatypes, but MPI_DOUBLE_PRECISION (which is explicitly the base
<br>
predefined datatype for MPI_2DOUBLE_PRECISION) is not one of them.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now we can argue if DOUBLE PRECISION in Fortran is a double in C. As
</span><br>
these languages are interoperable, and there is no explicit conversion
<br>
function, it is safe to assume this is the case. Thus, is seems to me
<br>
absolutely legal to provide the MPI-required support for DOUBLE PRECISION
<br>
despite the fact that Fortran support is not enabled.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now taking a closer look at the op, I see nothing in the standard the
</span><br>
would require to provide the op if the corresponding language is not
<br>
supported. While it could be nice (as a convenience for the users and also
<br>
because there is no technical reason not to) to enable the loc op, on non
<br>
native datatypes, this is not mandatory. Thus, the current behavior exposed
<br>
by Open MPI is acceptable from the standard perspective.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 8, 2016 at 4:35 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Awesome; thanks Gilles.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Feb 8, 2016, at 9:29 AM, Gilles Gouaillardet &lt;
</span><br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ok, will do
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Monday, February 8, 2016, Jeff Squyres (jsquyres) &lt;
</span><br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev3">&gt;&gt; &gt; I like your suggestion better -- if we can somehow report during the
</span><br>
compile/link that the reason for the error is because Open MPI was not
<br>
compiled with Fortran support, that would definitely be preferable.
<br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; FWIW: my suggestion was because I wanted to convey the *reason* for
</span><br>
the error (i.e., that OMPI has no Fortran support), and a pragma-based
<br>
solution didn't occur to me.  I didn't want to follow Gilles' suggestion of
<br>
just removing the symbols, because that will lead to other confusion (e.g.,
<br>
&quot;Hey, Open MPI is not compliant because it doesn't have Fortran datatypes
<br>
available in C!&quot;).
<br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Gilles: do you want to poke around and see if you can make any of
</span><br>
Jeff's suggestions work out nicely?  (i.e., give some kind of compile/link
<br>
error that states that Open MPI was not built with Fortran support?)
<br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Feb 8, 2016, at 8:55 AM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt;
</span><br>
wrote:
<br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Waiting until runtime to issue this error is a terrible idea,
</span><br>
because then the PETSc team (among others) will disparage you for allowing
<br>
a user to successfully build against an unusable library.  They are
<br>
on-record numerous times in the past as to the evils of e.g. no-op symbols
<br>
in MPI or other runtime libraries, since this means that compile- and
<br>
link-based tests pass, even though nothing good will happen when the user
<br>
employs them in an application.
<br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; The right thing to do is what Gilles proposed: do not define the
</span><br>
types in mpi.h so that it is impossible to compile C code with Fortran
<br>
datatypes, if Fortran datatypes are not supported.  There are more and less
<br>
effective ways to do this, in terms of letting the user know what is
<br>
happening.  For example, you can just not define them, which might confuse
<br>
novices who don't know how to read error messages (HPC users are frequent
<br>
offenders).
<br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; You could use e.g.:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; #define MPI_DOUBLE_PRECISION choke me No Fortran support when
</span><br>
library was compiled!
<br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Unfortunately, Clang colorized output emphasizes the wrong problem
</span><br>
here, and ICC doesn't even echo the message at all in its error message.
<br>
GCC issues the same error four times, and makes it relatively hard to miss
<br>
the message.
<br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; If the following GCC extension is supported, along with C99/C++11,
</span><br>
you could do this:
<br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; #define MPI_DOUBLE_PRECISION _Pragma(&quot;GCC error \&quot;MPI was not
</span><br>
compiled with Fortran support\&quot;&quot;)
<br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; For the _functions_ that require Fortran support, you can use e.g.
</span><br>
__attribute__((error(&quot;no Fortran&quot;))) on the function declaration, although
<br>
neither ICC nor Clang support this, and it ends up throwing two error
<br>
messages when compiled (only one - the right one - when only preprocessed),
<br>
which might confuse the same folks that it is trying to help.
<br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Best,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Jeff
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; On Mon, Feb 8, 2016 at 5:14 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev4">&gt;&gt; &gt; &gt; The issue at hand is trying to help the user figure out that they
</span><br>
have an open MPI built without fortran support.
<br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Perhaps we should improve the error reporting at run time to display
</span><br>
something about the fact that you used a fortran data type but have an OMPI
<br>
that was compiled without fortran support.
<br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; On Feb 8, 2016, at 4:00 AM, Gilles Gouaillardet &lt;
</span><br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; That being said, should we remove these fortran types from include
</span><br>
files and libs when ompi is configure'd without fortran support ?
<br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt; &gt;&gt; &gt; BTW: is there a reason you don't want to just use the C
</span><br>
datatypes?  The fundamental output of the index is an integer value --
<br>
casting it to a float of some flavor doesn't fundamentally change its value.
<br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; The code in question is not mine.  I have suggested to the
</span><br>
developers that they should use the correct C types.  The reason I became
<br>
aware of this issue is that one of my colleagues compiled and ran this code
<br>
on a system where OpenMPI was built without Fortran support and the code
<br>
started failing with errors from MPI which were not seen on other systems.
<br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; If you use an MPI library compiled without Fortran support, you
</span><br>
should expect precisely nothing related to Fortran to work.  You might get
<br>
more than this because the universe is being nice to you, but you should
<br>
treat it as serendipity when something works, not a bug when something
<br>
doesn't.
<br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Jeff
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2016/02/28459.php">http://www.open-mpi.org/community/lists/users/2016/02/28459.php</a>
<br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2016/02/28460.php">http://www.open-mpi.org/community/lists/users/2016/02/28460.php</a>
<br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Jeff Hammond
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2016/02/28461.php">http://www.open-mpi.org/community/lists/users/2016/02/28461.php</a>
<br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; For corporate legal information go to:
</span><br>
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2016/02/28463.php">http://www.open-mpi.org/community/lists/users/2016/02/28463.php</a>
<br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2016/02/28465.php">http://www.open-mpi.org/community/lists/users/2016/02/28465.php</a>
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2016/02/28466.php">http://www.open-mpi.org/community/lists/users/2016/02/28466.php</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2016/02/28469.php">http://www.open-mpi.org/community/lists/users/2016/02/28469.php</a>
<br>
<p><p><p><p><pre>
--
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28477/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28478.php">Rahul Pisharody: "Re: [OMPI users] Help with OpenMPI and Univa Grid Engine"</a>
<li><strong>Previous message:</strong> <a href="28476.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28469.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28479.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28479.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
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
