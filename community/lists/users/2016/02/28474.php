<?
$subject_val = "Re: [OMPI users] OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 08:51:36 2016" -->
<!-- isoreceived="20160209135136" -->
<!-- sent="Tue, 9 Feb 2016 13:51:33 +0000" -->
<!-- isosent="20160209135133" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] Fortran vs C reductions" -->
<!-- id="08DA714B-23BA-4A07-AD2E-D8B0012A5E16_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-09 08:51:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28475.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28473.php">Dave Love: "Re: [OMPI users] Help with OpenMPI and Univa Grid Engine"</a>
<li><strong>In reply to:</strong> <a href="28469.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28480.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28480.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 9, 2016, at 12:21 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry to spoil the fun here, but this proposal is a very bad idea. It is mandated by the MPI standard, page 25 line 27 (v3.1), not only to provide all predefined datatypes, but to have support for them. There are optional datatypes, but MPI_DOUBLE_PRECISION (which is explicitly the base predefined datatype for MPI_2DOUBLE_PRECISION) is not one of them.
</span><br>
<p>I don't quite follow the logic here.
<br>
<p>The mpif.h interface is mandated by The MPI spec.  If you're building Open MPI on a platform without a Fortran compiler, then by definition, you don't get a compliant MPI implementation because you're missing a key requirement (i.e., a Fortran compiler).  We -- the Open MPI developers -- have chosen to enable this non-conformant scenario because there are valid use cases for it with our users.
<br>
<p>Meaning: there is no question that this is not conformant behavior.  Saying that we can't do it because it is not conformat is tautological.
<br>
<p>What we're discussing is how to make the behavior useful to end users in this already-defined-to-be-non-conformant situation.
<br>
<p>Also, note that Open MPI disables a bunch of other datatypes if they can't be supported -- just search for the use of the macro UNAVAILABLE in ompi/datatype/ompi_datatype_internal.h (which lead to run-time failures if they can't be used).  The question here is whether that should be a compile time vs. run time failure.  I think there's good arguments for making them be compile time failures, if possible.
<br>
<p><span class="quotelev1">&gt; Now we can argue if DOUBLE PRECISION in Fortran is a double in C.
</span><br>
<p>FWIW:
<br>
<p>1. MPI-3.1 Annex A p674 states that MPI_DOUBLE_PRECISION is a Fortran datatype that corresponds to the Fortran type &quot;DOUBLE PRECISION&quot;.
<br>
2. MPI-3.1 5.9.4 p180 declares MPI_2DOUBLE_PRECISION to be a pair of Fortran DOUBLE PRECISION variables.
<br>
<p>Whether or not DOUBLE PRECISION is exactly equivalent to a C double is an entirely different question.
<br>
<p><span class="quotelev1">&gt; As these languages are interoperable,
</span><br>
<p>That's an extremely broad statement.  :-)  
<br>
<p>To be pedantic: there are many things in each language that do not exactly interoperate with each other.  Indeed, F08 explicitly added a bunch of things to the Fortran language to precisely allow interop between C and Fortran (e.g., continued enhancements to the definitions of BIND(C) and related things).  But there are still many things between that two that are not identical -- the two languages do not have a 1-to-1 correspondence for every one of their features.
<br>
<p><span class="quotelev1">&gt; and there is no explicit conversion function, it is safe to assume this is the case.
</span><br>
<p>Whether or not Fortran's DOUBLE PRECISION is exactly equivalent to a C double (and whether a pair of Fortran DOUBLE precision variables is exactly equivalent to a pair of C double variables) is not something you can assume.
<br>
<p>Easy case to pick on: what if the user compiles their Fortran program with -i 8? (i.e., integers are double their normal size)  We tell Open MPI users that this scenario is supported, but only if they configure Open MPI with FCFLAGS=&quot;-i 8&quot; so that Open MPI's configure can figure out that INTEGER is 8 bytes long (and therefore doesn't correspond to a C int).  ...and so on.
<br>
<p>There's a similar compiler flag for floating point values (&quot;-d 8&quot;?  I don't remember offhand), that makes the assumption that Fortran DOUBLE PRECISION === C double a bad one.
<br>
<p>Also, we've definitely run into cases in the past where the alignments of Fortran datatypes are different than the alignments of C datatypes.
<br>
<p>In short: the only way that we can *know* that a Fortran datatype is equivalent to a C datatype is to actually *test* it.  Given that Open MPI already disables a bunch of datatypes when it can't support them, it's not unreadable to 
<br>
<p>a) disable all Fortran types when Open MPI was not configure with a Fortran compiler, and 
<br>
&nbsp;&nbsp;&nbsp;--&gt; OR Provide the option for the user to choose between
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;You didn't configure with a Fortran compiler, so I'll assume C types===Fortran types&quot; (i.e., some of today's behavior), and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;You didn't configure with a Fortran compiler, so I'll disable all Fortran types&quot;
<br>
b) see if we can make unsupported datatypes be compile-time failures instead of run-time failures.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28475.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28473.php">Dave Love: "Re: [OMPI users] Help with OpenMPI and Univa Grid Engine"</a>
<li><strong>In reply to:</strong> <a href="28469.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28480.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28480.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
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
