<?
$subject_val = "Re: [OMPI users] GCC extendability to OpenMPI Specification";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 03:58:34 2008" -->
<!-- isoreceived="20080604075834" -->
<!-- sent="Wed, 04 Jun 2008 03:58:17 -0400" -->
<!-- isosent="20080604075817" -->
<!-- name="Joe Landman" -->
<!-- email="landman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] GCC extendability to OpenMPI Specification" -->
<!-- id="48464B19.4070805_at_scalableinformatics.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3efa6bfc0806040023qe7ee1e5ufe73b73e5976309_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] GCC extendability to OpenMPI Specification<br>
<strong>From:</strong> Joe Landman (<em>landman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 03:58:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5792.php">Adrian Knoth: "Re: [OMPI users] eigenvalue problem"</a>
<li><strong>Previous message:</strong> <a href="5790.php">Andreas Sch&#228;fer: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>In reply to:</strong> <a href="5788.php">Mukesh K Srivastava: "[OMPI users] GCC extendability to OpenMPI Specification"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mukesh K Srivastava wrote:
<br>
<span class="quotelev1">&gt; Hi OMPI Community.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any thought process to extend GCC support to OpenMPI or
</span><br>
<span class="quotelev1">&gt; implementation of OpenMPI specification in GCC for C, C++ &amp; Fortran and
</span><br>
<span class="quotelev1">&gt; making it generally available for platforms which supports POSIX.
</span><br>
<p>Hi Mukesh:
<br>
<p>&nbsp;&nbsp;&nbsp;Open MPI is already written in C, and compiles correctly under 
<br>
several different GCC flavors.  It works with C, C++, and Fortran90 
<br>
currently, on multiple POSIX platforms.
<br>
<p>&nbsp;&nbsp;&nbsp;Are you asking about including this natively with GCC?  As OpenMP is 
<br>
integrated into the compiler?
<br>
<p>&nbsp;&nbsp;&nbsp;Please remember that MPI is generally a set of function/method calls 
<br>
that implement particular operations.  Even with a system as &quot;simple&quot; as 
<br>
OpenMP (not Open MPI), automatic parallelization in the general quite 
<br>
hard (and you don't get great performance).  MPI does force you to think 
<br>
about communication topology as well as many other issues.  It would be 
<br>
great if the compiler could handle this for you, but unfortunately, it 
<br>
is far more than a &quot;simple matter of programming&quot;.  This is a genuinely 
<br>
hard problem.
<br>
<p><span class="quotelev1">&gt; Can GCC community think extending a support library for OpenMPI in it's
</span><br>
<span class="quotelev1">&gt; releases.
</span><br>
<p>&nbsp;&nbsp;&nbsp;You can build the lib*.so for each compiler, but please remember that 
<br>
the builds can be different (just look at all those nice options in 
<br>
configure!).  The API should be the same, so as long as you build 
<br>
against the same version (Jeff and others, please correct me if this 
<br>
assumption is not correct), you should be able to move your runtime 
<br>
linked binaries around.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BR
</span><br>
<span class="quotelev1">&gt; Mukesh
</span><br>
<p>Joe
<br>
<p><p><pre>
-- 
Joseph Landman, Ph.D
Founder and CEO
Scalable Informatics LLC,
email: landman_at_[hidden]
web  : <a href="http://www.scalableinformatics.com">http://www.scalableinformatics.com</a>
        <a href="http://jackrabbit.scalableinformatics.com">http://jackrabbit.scalableinformatics.com</a>
phone: +1 734 786 8423
fax  : +1 866 888 3112
cell : +1 734 612 4615
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5792.php">Adrian Knoth: "Re: [OMPI users] eigenvalue problem"</a>
<li><strong>Previous message:</strong> <a href="5790.php">Andreas Sch&#228;fer: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>In reply to:</strong> <a href="5788.php">Mukesh K Srivastava: "[OMPI users] GCC extendability to OpenMPI Specification"</a>
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
