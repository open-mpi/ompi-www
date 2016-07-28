<?
$subject_val = "Re: [OMPI users] OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 21:04:27 2016" -->
<!-- isoreceived="20160210020427" -->
<!-- sent="Tue, 9 Feb 2016 18:04:25 -0800" -->
<!-- isosent="20160210020425" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] Fortran vs C reductions" -->
<!-- id="CAGKz=u+FAQ+8Nfr=EUGZXu7=yyqsJR5N5UJnDrbDFt_rQ=rn-g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkWze_xGdub_+Gp+vORAwCyQp5=yNjmG0RyoXXDqj4UZEg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-02-09 21:04:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28482.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28480.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28479.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Then we should clarify the spec, because it's unreasonable to require MPI
<br>
support a Fortran type without being able to know its representation.
<br>
<p>Jeff
<br>
<p>On Tuesday, February 9, 2016, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The text you pinpoint is clear about the target: the MPI bindings. The
</span><br>
<span class="quotelev1">&gt; question here is not about bindings, but about a predefined datatype, a
</span><br>
<span class="quotelev1">&gt; case where I don't think the text applies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 9, 2016 at 6:17 PM, Jeff Hammond &lt;jeff.science_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','jeff.science_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;MPI-3.0 (and later) compliant Fortran bindings are not only a property
</span><br>
<span class="quotelev2">&gt;&gt; of the MPI library itself, but rather a property of an MPI library together
</span><br>
<span class="quotelev2">&gt;&gt; with the Fortran compiler suite for which it is compiled.&quot; (MPI 3.1 Section
</span><br>
<span class="quotelev2">&gt;&gt; 17.1.7).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course, implementations can provide support in excess of the minimum
</span><br>
<span class="quotelev2">&gt;&gt; required by the standard, provided that support remains compliant with the
</span><br>
<span class="quotelev2">&gt;&gt; standard.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Feb 8, 2016 at 9:21 PM, George Bosilca &lt;bosilca_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','bosilca_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Sorry to spoil the fun here, but this proposal is a very bad idea. It
</span><br>
<span class="quotelev2">&gt;&gt; is mandated by the MPI standard, page 25 line 27 (v3.1), not only to
</span><br>
<span class="quotelev2">&gt;&gt; provide all predefined datatypes, but to have support for them. There are
</span><br>
<span class="quotelev2">&gt;&gt; optional datatypes, but MPI_DOUBLE_PRECISION (which is explicitly the base
</span><br>
<span class="quotelev2">&gt;&gt; predefined datatype for MPI_2DOUBLE_PRECISION) is not one of them.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Now we can argue if DOUBLE PRECISION in Fortran is a double in C. As
</span><br>
<span class="quotelev2">&gt;&gt; these languages are interoperable, and there is no explicit conversion
</span><br>
<span class="quotelev2">&gt;&gt; function, it is safe to assume this is the case. Thus, is seems to me
</span><br>
<span class="quotelev2">&gt;&gt; absolutely legal to provide the MPI-required support for DOUBLE PRECISION
</span><br>
<span class="quotelev2">&gt;&gt; despite the fact that Fortran support is not enabled.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Now taking a closer look at the op, I see nothing in the standard the
</span><br>
<span class="quotelev2">&gt;&gt; would require to provide the op if the corresponding language is not
</span><br>
<span class="quotelev2">&gt;&gt; supported. While it could be nice (as a convenience for the users and also
</span><br>
<span class="quotelev2">&gt;&gt; because there is no technical reason not to) to enable the loc op, on non
</span><br>
<span class="quotelev2">&gt;&gt; native datatypes, this is not mandatory. Thus, the current behavior exposed
</span><br>
<span class="quotelev2">&gt;&gt; by Open MPI is acceptable from the standard perspective.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   George.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Mon, Feb 8, 2016 at 4:35 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Awesome; thanks Gilles.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; On Feb 8, 2016, at 9:29 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; ok, will do
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; On Monday, February 8, 2016, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; I like your suggestion better -- if we can somehow report during the
</span><br>
<span class="quotelev2">&gt;&gt; compile/link that the reason for the error is because Open MPI was not
</span><br>
<span class="quotelev2">&gt;&gt; compiled with Fortran support, that would definitely be preferable.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; FWIW: my suggestion was because I wanted to convey the *reason* for
</span><br>
<span class="quotelev2">&gt;&gt; the error (i.e., that OMPI has no Fortran support), and a pragma-based
</span><br>
<span class="quotelev2">&gt;&gt; solution didn't occur to me.  I didn't want to follow Gilles' suggestion of
</span><br>
<span class="quotelev2">&gt;&gt; just removing the symbols, because that will lead to other confusion (e.g.,
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Hey, Open MPI is not compliant because it doesn't have Fortran datatypes
</span><br>
<span class="quotelev2">&gt;&gt; available in C!&quot;).
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Gilles: do you want to poke around and see if you can make any of
</span><br>
<span class="quotelev2">&gt;&gt; Jeff's suggestions work out nicely?  (i.e., give some kind of compile/link
</span><br>
<span class="quotelev2">&gt;&gt; error that states that Open MPI was not built with Fortran support?)
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; On Feb 8, 2016, at 8:55 AM, Jeff Hammond &lt;jeff.science_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','jeff.science_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; Waiting until runtime to issue this error is a terrible idea,
</span><br>
<span class="quotelev2">&gt;&gt; because then the PETSc team (among others) will disparage you for allowing
</span><br>
<span class="quotelev2">&gt;&gt; a user to successfully build against an unusable library.  They are
</span><br>
<span class="quotelev2">&gt;&gt; on-record numerous times in the past as to the evils of e.g. no-op symbols
</span><br>
<span class="quotelev2">&gt;&gt; in MPI or other runtime libraries, since this means that compile- and
</span><br>
<span class="quotelev2">&gt;&gt; link-based tests pass, even though nothing good will happen when the user
</span><br>
<span class="quotelev2">&gt;&gt; employs them in an application.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; The right thing to do is what Gilles proposed: do not define the
</span><br>
<span class="quotelev2">&gt;&gt; types in mpi.h so that it is impossible to compile C code with Fortran
</span><br>
<span class="quotelev2">&gt;&gt; datatypes, if Fortran datatypes are not supported.  There are more and less
</span><br>
<span class="quotelev2">&gt;&gt; effective ways to do this, in terms of letting the user know what is
</span><br>
<span class="quotelev2">&gt;&gt; happening.  For example, you can just not define them, which might confuse
</span><br>
<span class="quotelev2">&gt;&gt; novices who don't know how to read error messages (HPC users are frequent
</span><br>
<span class="quotelev2">&gt;&gt; offenders).
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; You could use e.g.:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; #define MPI_DOUBLE_PRECISION choke me No Fortran support when
</span><br>
<span class="quotelev2">&gt;&gt; library was compiled!
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; Unfortunately, Clang colorized output emphasizes the wrong problem
</span><br>
<span class="quotelev2">&gt;&gt; here, and ICC doesn't even echo the message at all in its error message.
</span><br>
<span class="quotelev2">&gt;&gt; GCC issues the same error four times, and makes it relatively hard to miss
</span><br>
<span class="quotelev2">&gt;&gt; the message.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; If the following GCC extension is supported, along with C99/C++11,
</span><br>
<span class="quotelev2">&gt;&gt; you could do this:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; #define MPI_DOUBLE_PRECISION _Pragma(&quot;GCC error \&quot;MPI was not
</span><br>
<span class="quotelev2">&gt;&gt; compiled with Fortran support\&quot;&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; For the _functions_ that require Fortran support, you can use e.g.
</span><br>
<span class="quotelev2">&gt;&gt; __attribute__((error(&quot;no Fortran&quot;))) on the function declaration, although
</span><br>
<span class="quotelev2">&gt;&gt; neither ICC nor Clang support this, and it ends up throwing two error
</span><br>
<span class="quotelev2">&gt;&gt; messages when compiled (only one - the right one - when only preprocessed),
</span><br>
<span class="quotelev2">&gt;&gt; which might confuse the same folks that it is trying to help.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; Jeff
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; On Mon, Feb 8, 2016 at 5:14 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; The issue at hand is trying to help the user figure out that they
</span><br>
<span class="quotelev2">&gt;&gt; have an open MPI built without fortran support.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; Perhaps we should improve the error reporting at run time to
</span><br>
<span class="quotelev2">&gt;&gt; display something about the fact that you used a fortran data type but have
</span><br>
<span class="quotelev2">&gt;&gt; an OMPI that was compiled without fortran support.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; On Feb 8, 2016, at 4:00 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt; That being said, should we remove these fortran types from
</span><br>
<span class="quotelev2">&gt;&gt; include files and libs when ompi is configure'd without fortran support ?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt; Jeff Hammond &lt;jeff.science_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','jeff.science_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &gt; &gt;&gt; &gt; BTW: is there a reason you don't want to just use the C
</span><br>
<span class="quotelev2">&gt;&gt; datatypes?  The fundamental output of the index is an integer value --
</span><br>
<span class="quotelev2">&gt;&gt; casting it to a float of some flavor doesn't fundamentally change its value.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt; The code in question is not mine.  I have suggested to the
</span><br>
<span class="quotelev2">&gt;&gt; developers that they should use the correct C types.  The reason I became
</span><br>
<span class="quotelev2">&gt;&gt; aware of this issue is that one of my colleagues compiled and ran this code
</span><br>
<span class="quotelev2">&gt;&gt; on a system where OpenMPI was built without Fortran support and the code
</span><br>
<span class="quotelev2">&gt;&gt; started failing with errors from MPI which were not seen on other systems.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt; If you use an MPI library compiled without Fortran support, you
</span><br>
<span class="quotelev2">&gt;&gt; should expect precisely nothing related to Fortran to work.  You might get
</span><br>
<span class="quotelev2">&gt;&gt; more than this because the universe is being nice to you, but you should
</span><br>
<span class="quotelev2">&gt;&gt; treat it as serendipity when something works, not a bug when something
</span><br>
<span class="quotelev2">&gt;&gt; doesn't.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt; Jeff
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt; Jeff Hammond
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','jeff.science_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;&gt; &gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28459.php">http://www.open-mpi.org/community/lists/users/2016/02/28459.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28460.php">http://www.open-mpi.org/community/lists/users/2016/02/28460.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; --
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; Jeff Hammond
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','jeff.science_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; &gt;&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28461.php">http://www.open-mpi.org/community/lists/users/2016/02/28461.php</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; --
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28463.php">http://www.open-mpi.org/community/lists/users/2016/02/28463.php</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28465.php">http://www.open-mpi.org/community/lists/users/2016/02/28465.php</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','jsquyres_at_[hidden]');&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28466.php">http://www.open-mpi.org/community/lists/users/2016/02/28466.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28469.php">http://www.open-mpi.org/community/lists/users/2016/02/28469.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Hammond
</span><br>
<span class="quotelev2">&gt;&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','jeff.science_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28477.php">http://www.open-mpi.org/community/lists/users/2016/02/28477.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28481/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28482.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28480.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28479.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
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
