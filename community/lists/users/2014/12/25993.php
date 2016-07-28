<?
$subject_val = "Re: [OMPI users] ERROR: C_FUNLOC function";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 15 01:22:59 2014" -->
<!-- isoreceived="20141215062259" -->
<!-- sent="Mon, 15 Dec 2014 07:22:40 +0100 (CET)" -->
<!-- isosent="20141215062240" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ERROR: C_FUNLOC function" -->
<!-- id="201412150622.sBF6MeHB014241_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] ERROR: C_FUNLOC function" -->
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
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-15 01:22:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25994.php">Jorge D'Elia: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Previous message:</strong> <a href="25992.php">Gilles Gouaillardet: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Maybe in reply to:</strong> <a href="25963.php">Siegmar Gross: "[OMPI users] ERROR: C_FUNLOC function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26009.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Reply:</strong> <a href="26009.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p><span class="quotelev1">&gt; a similar issue was reported in mpich with xlf compilers :
</span><br>
<span class="quotelev1">&gt; <a href="http://trac.mpich.org/projects/mpich/ticket/2144">http://trac.mpich.org/projects/mpich/ticket/2144</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They concluded this is a compiler issue (e.g. the compiler does not
</span><br>
<span class="quotelev1">&gt; implement TS 29113 subclause 8.1)
</span><br>
<p>Thank you very much. I'll report the problem to Oracle and perhaps
<br>
they can and will fix their compiler problem.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; i made PR 315 <a href="https://github.com/open-mpi/ompi/pull/315">https://github.com/open-mpi/ompi/pull/315</a>
</span><br>
<span class="quotelev1">&gt; f08 binding support is disabled if TS29113 subclause 8.1 is not implemented
</span><br>
<span class="quotelev1">&gt; could you please review/comment on this ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/12/12 2:28, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; will you have the time to fix the Fortran problem for the new Oracle
</span><br>
<span class="quotelev2">&gt; &gt; Solaris Studio 12.4 compiler suite in openmpi-1.8.4?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tyr openmpi-1.8.4rc2-SunOS.sparc.64_cc 103 tail -15 
</span><br>
log.make.SunOS.sparc.64_cc 
<br>
<span class="quotelev2">&gt; &gt;   PPFC     comm_compare_f08.lo
</span><br>
<span class="quotelev2">&gt; &gt;   PPFC     comm_connect_f08.lo
</span><br>
<span class="quotelev2">&gt; &gt;   PPFC     comm_create_errhandler_f08.lo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    fn = c_funloc(comm_errhandler_fn)
</span><br>
<span class="quotelev2">&gt; &gt;                  ^                   
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
&quot;../../../../../openmpi-1.8.4rc2/ompi/mpi/fortran/use-mpi-f08/comm_create_errhan
<br>
<span class="quotelev2">&gt; &gt; dler_f08.F90&quot;, Line = 22, Column = 18: ERROR: C_FUNLOC function argument 
</span><br>
must be 
<br>
<span class="quotelev2">&gt; &gt; a procedure that is interoperable or a procedure pointer associated with an 
</span><br>
<span class="quotelev2">&gt; &gt; interoperable procedure.
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: 
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2014/12/25963.php">http://www.open-mpi.org/community/lists/users/2014/12/25963.php</a>
<br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25994.php">Jorge D'Elia: "Re: [OMPI users] OpenMPI 1.8.4 and hwloc in Fedora 14 using a beta gcc 5.0 compiler."</a>
<li><strong>Previous message:</strong> <a href="25992.php">Gilles Gouaillardet: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Maybe in reply to:</strong> <a href="25963.php">Siegmar Gross: "[OMPI users] ERROR: C_FUNLOC function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26009.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<li><strong>Reply:</strong> <a href="26009.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
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
