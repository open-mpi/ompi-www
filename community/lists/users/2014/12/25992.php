<?
$subject_val = "Re: [OMPI users] ERROR: C_FUNLOC function";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 00:53:21 2014" -->
<!-- isoreceived="20141215055321" -->
<!-- sent="Mon, 15 Dec 2014 14:53:19 +0900" -->
<!-- isosent="20141215055319" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ERROR: C_FUNLOC function" -->
<!-- id="548E774F.4030600_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201412111728.sBBHS8IM022093_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] ERROR: C_FUNLOC function<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-15 00:53:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25993.php">Siegmar Gross: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Previous message:</strong> <a href="25991.php">George Bosilca: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>In reply to:</strong> <a href="25963.php">Siegmar Gross: "[OMPI users] ERROR: C_FUNLOC function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25993.php">Siegmar Gross: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Siegmar,
<br>
<p>a similar issue was reported in mpich with xlf compilers :
<br>
<a href="http://trac.mpich.org/projects/mpich/ticket/2144">http://trac.mpich.org/projects/mpich/ticket/2144</a>
<br>
<p>They concluded this is a compiler issue (e.g. the compiler does not
<br>
implement TS 29113 subclause 8.1)
<br>
<p><p>Jeff,
<br>
i made PR 315 <a href="https://github.com/open-mpi/ompi/pull/315">https://github.com/open-mpi/ompi/pull/315</a>
<br>
f08 binding support is disabled if TS29113 subclause 8.1 is not implemented
<br>
could you please review/comment on this ?
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 2014/12/12 2:28, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; will you have the time to fix the Fortran problem for the new Oracle
</span><br>
<span class="quotelev1">&gt; Solaris Studio 12.4 compiler suite in openmpi-1.8.4?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.8.4rc2-SunOS.sparc.64_cc 103 tail -15 log.make.SunOS.sparc.64_cc 
</span><br>
<span class="quotelev1">&gt;   PPFC     comm_compare_f08.lo
</span><br>
<span class="quotelev1">&gt;   PPFC     comm_connect_f08.lo
</span><br>
<span class="quotelev1">&gt;   PPFC     comm_create_errhandler_f08.lo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    fn = c_funloc(comm_errhandler_fn)
</span><br>
<span class="quotelev1">&gt;                  ^                   
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.8.4rc2/ompi/mpi/fortran/use-mpi-f08/comm_create_errhan
</span><br>
<span class="quotelev1">&gt; dler_f08.F90&quot;, Line = 22, Column = 18: ERROR: C_FUNLOC function argument must be 
</span><br>
<span class="quotelev1">&gt; a procedure that is interoperable or a procedure pointer associated with an 
</span><br>
<span class="quotelev1">&gt; interoperable procedure.
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25963.php">http://www.open-mpi.org/community/lists/users/2014/12/25963.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25993.php">Siegmar Gross: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Previous message:</strong> <a href="25991.php">George Bosilca: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>In reply to:</strong> <a href="25963.php">Siegmar Gross: "[OMPI users] ERROR: C_FUNLOC function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25993.php">Siegmar Gross: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
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
