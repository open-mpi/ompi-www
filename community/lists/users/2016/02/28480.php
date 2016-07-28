<?
$subject_val = "Re: [OMPI users] OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 16:48:09 2016" -->
<!-- isoreceived="20160209214809" -->
<!-- sent="Tue, 9 Feb 2016 23:48:07 +0200" -->
<!-- isosent="20160209214807" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] Fortran vs C reductions" -->
<!-- id="CAMJJpkVuGkCpEqG0yqM5mcZmKTYuypZjHBbCzTjvrbTKfFFi=A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="08DA714B-23BA-4A07-AD2E-D8B0012A5E16_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-09 16:48:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28481.php">Jeff Hammond: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28479.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28474.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28477.php">Jeff Hammond: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The only agreement we have so far is that from the perspective of a user
<br>
having a questionable usage of a particular datatype in a extremely
<br>
particular reduction operation the situation can be perceived as unfriendly.
<br>
<p>Your argument is that if in a particular OMPI installation Fortran support
<br>
is not provided, we should not provide any of the MPI Fortran datatypes
<br>
because of possible mismatch between the different types and compilers
<br>
involved. Allow me to turn this question around: In which language we
<br>
provide (and always provided) support for all ops related to Fortran
<br>
datatypes? Thus, your argument is fallacious, based on the uncertain
<br>
expectation that only a Fortran function is able to correctly handle basic
<br>
Fortran types.
<br>
<p>My argument is that support for Fortran datatype is trivial to provide (and
<br>
mandated by the standard). To sustain my argument I claim that despite the
<br>
fact that we provide all the operators for all the types in C, including
<br>
for the predefined Fortran and CXX datatypes, we had zero complains about
<br>
any potential issue with them. Taking in account the wild combination of
<br>
platforms, compilers and configuration environments where Open MPI is
<br>
deployed, from a pragmatic perspective this highly suggest that indeed
<br>
DOUBLE PRECISION and double are more similar than you think they are, and
<br>
that our original assumption when designing the datatype support was valid.
<br>
<p>I like pragmatic solutions, if it's not broken or fun to implement, I don't
<br>
get excited. And honestly the issue at hand doesn't qualify for none of the
<br>
above.
<br>
<p>You want a simple solution? Enable all ops for all basic predefined types,
<br>
even when Fortran support is not provided. 10 lines of code, that will save
<br>
everybody's time, and that based on prior experiences will always provide
<br>
the correct outcome. The bonus here is that this will allow our users to
<br>
reach the serendipity JeffH was talking about.
<br>
<p>George.
<br>
<p><p>On Tue, Feb 9, 2016 at 3:51 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 9, 2016, at 12:21 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sorry to spoil the fun here, but this proposal is a very bad idea. It is
</span><br>
<span class="quotelev1">&gt; mandated by the MPI standard, page 25 line 27 (v3.1), not only to provide
</span><br>
<span class="quotelev1">&gt; all predefined datatypes, but to have support for them. There are optional
</span><br>
<span class="quotelev1">&gt; datatypes, but MPI_DOUBLE_PRECISION (which is explicitly the base
</span><br>
<span class="quotelev1">&gt; predefined datatype for MPI_2DOUBLE_PRECISION) is not one of them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't quite follow the logic here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mpif.h interface is mandated by The MPI spec.  If you're building Open
</span><br>
<span class="quotelev1">&gt; MPI on a platform without a Fortran compiler, then by definition, you don't
</span><br>
<span class="quotelev1">&gt; get a compliant MPI implementation because you're missing a key requirement
</span><br>
<span class="quotelev1">&gt; (i.e., a Fortran compiler).  We -- the Open MPI developers -- have chosen
</span><br>
<span class="quotelev1">&gt; to enable this non-conformant scenario because there are valid use cases
</span><br>
<span class="quotelev1">&gt; for it with our users.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Meaning: there is no question that this is not conformant behavior.
</span><br>
<span class="quotelev1">&gt; Saying that we can't do it because it is not conformat is tautological.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What we're discussing is how to make the behavior useful to end users in
</span><br>
<span class="quotelev1">&gt; this already-defined-to-be-non-conformant situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, note that Open MPI disables a bunch of other datatypes if they can't
</span><br>
<span class="quotelev1">&gt; be supported -- just search for the use of the macro UNAVAILABLE in
</span><br>
<span class="quotelev1">&gt; ompi/datatype/ompi_datatype_internal.h (which lead to run-time failures if
</span><br>
<span class="quotelev1">&gt; they can't be used).  The question here is whether that should be a compile
</span><br>
<span class="quotelev1">&gt; time vs. run time failure.  I think there's good arguments for making them
</span><br>
<span class="quotelev1">&gt; be compile time failures, if possible.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now we can argue if DOUBLE PRECISION in Fortran is a double in C.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. MPI-3.1 Annex A p674 states that MPI_DOUBLE_PRECISION is a Fortran
</span><br>
<span class="quotelev1">&gt; datatype that corresponds to the Fortran type &quot;DOUBLE PRECISION&quot;.
</span><br>
<span class="quotelev1">&gt; 2. MPI-3.1 5.9.4 p180 declares MPI_2DOUBLE_PRECISION to be a pair of
</span><br>
<span class="quotelev1">&gt; Fortran DOUBLE PRECISION variables.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Whether or not DOUBLE PRECISION is exactly equivalent to a C double is an
</span><br>
<span class="quotelev1">&gt; entirely different question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; As these languages are interoperable,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's an extremely broad statement.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To be pedantic: there are many things in each language that do not exactly
</span><br>
<span class="quotelev1">&gt; interoperate with each other.  Indeed, F08 explicitly added a bunch of
</span><br>
<span class="quotelev1">&gt; things to the Fortran language to precisely allow interop between C and
</span><br>
<span class="quotelev1">&gt; Fortran (e.g., continued enhancements to the definitions of BIND(C) and
</span><br>
<span class="quotelev1">&gt; related things).  But there are still many things between that two that are
</span><br>
<span class="quotelev1">&gt; not identical -- the two languages do not have a 1-to-1 correspondence for
</span><br>
<span class="quotelev1">&gt; every one of their features.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; and there is no explicit conversion function, it is safe to assume this
</span><br>
<span class="quotelev1">&gt; is the case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Whether or not Fortran's DOUBLE PRECISION is exactly equivalent to a C
</span><br>
<span class="quotelev1">&gt; double (and whether a pair of Fortran DOUBLE precision variables is exactly
</span><br>
<span class="quotelev1">&gt; equivalent to a pair of C double variables) is not something you can assume.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Easy case to pick on: what if the user compiles their Fortran program with
</span><br>
<span class="quotelev1">&gt; -i 8? (i.e., integers are double their normal size)  We tell Open MPI users
</span><br>
<span class="quotelev1">&gt; that this scenario is supported, but only if they configure Open MPI with
</span><br>
<span class="quotelev1">&gt; FCFLAGS=&quot;-i 8&quot; so that Open MPI's configure can figure out that INTEGER is
</span><br>
<span class="quotelev1">&gt; 8 bytes long (and therefore doesn't correspond to a C int).  ...and so on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's a similar compiler flag for floating point values (&quot;-d 8&quot;?  I
</span><br>
<span class="quotelev1">&gt; don't remember offhand), that makes the assumption that Fortran DOUBLE
</span><br>
<span class="quotelev1">&gt; PRECISION === C double a bad one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, we've definitely run into cases in the past where the alignments of
</span><br>
<span class="quotelev1">&gt; Fortran datatypes are different than the alignments of C datatypes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In short: the only way that we can *know* that a Fortran datatype is
</span><br>
<span class="quotelev1">&gt; equivalent to a C datatype is to actually *test* it.  Given that Open MPI
</span><br>
<span class="quotelev1">&gt; already disables a bunch of datatypes when it can't support them, it's not
</span><br>
<span class="quotelev1">&gt; unreadable to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a) disable all Fortran types when Open MPI was not configure with a
</span><br>
<span class="quotelev1">&gt; Fortran compiler, and
</span><br>
<span class="quotelev1">&gt;    --&gt; OR Provide the option for the user to choose between
</span><br>
<span class="quotelev1">&gt;        &quot;You didn't configure with a Fortran compiler, so I'll assume C
</span><br>
<span class="quotelev1">&gt; types===Fortran types&quot; (i.e., some of today's behavior), and
</span><br>
<span class="quotelev1">&gt;        &quot;You didn't configure with a Fortran compiler, so I'll disable all
</span><br>
<span class="quotelev1">&gt; Fortran types&quot;
</span><br>
<span class="quotelev1">&gt; b) see if we can make unsupported datatypes be compile-time failures
</span><br>
<span class="quotelev1">&gt; instead of run-time failures.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28474.php">http://www.open-mpi.org/community/lists/users/2016/02/28474.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28480/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28481.php">Jeff Hammond: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28479.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28474.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28477.php">Jeff Hammond: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
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
