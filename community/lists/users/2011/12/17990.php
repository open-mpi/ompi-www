<?
$subject_val = "Re: [OMPI users] MPI_BCAST and fortran subarrays";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 16 09:04:34 2011" -->
<!-- isoreceived="20111216140434" -->
<!-- sent="Fri, 16 Dec 2011 09:04:25 -0500" -->
<!-- isosent="20111216140425" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_BCAST and fortran subarrays" -->
<!-- id="4512FC5C-A0A5-4F6A-91B9-E7FBE2503193_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EE9AFA2.1020103_at_hmg.inpg.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_BCAST and fortran subarrays<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-16 09:04:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17991.php">Jeff Squyres: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>Previous message:</strong> <a href="17989.php">Jeff Squyres: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>In reply to:</strong> <a href="17983.php">Patrick Begou: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A few points to add to this discussion...
<br>
<p>1. In the new (proposed) MPI-3 Fortran bindings (i.e., the &quot;use mpi_f08&quot; module), array subsections will be handled properly by MPI.  However, we'll have to wait for the Fortran compilers to support F08 features first (i.e., both the MPI Forum and the Fortran standards body collaborated to make this work).
<br>
<p>2. I highly suggest that you read the section in MPI-2.2 chapter 10 about Fortran.  It talks about what you can and cannot expect to work with advanced Fortran usage.  Here's a pointer to the beginning of the MPI-2.2 doc's Fortran section:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.mpi-forum.org/docs/mpi22-report/node341.htm#Node341">http://www.mpi-forum.org/docs/mpi22-report/node341.htm#Node341</a>
<br>
<p>3. It is true (to my understanding) that many Fortran compilers will create a copy of non-contiguous array subsections when calling a subroutine.  There are problems, however, if you do so with non-blocking MPI routines (e.g., calling MPI_ISEND with an array subsection, which the compiler implements via a temporary copy).  There can also be problems if the compiler makes a contiguous copy and you used a custom datatype that is *not* contiguous (i.e., it reflects the size/shape of the original, non-contiguous data -- it does not reflect the now-contiguous copy that the compiler used).
<br>
<p><p>On Dec 15, 2011, at 3:28 AM, Patrick Begou wrote:
<br>
<p><span class="quotelev1">&gt; Thanks all for your converging point of view about my problem.
</span><br>
<span class="quotelev1">&gt; Portability is also an important point for this code so there is  only one solution: using user defined data type.
</span><br>
<span class="quotelev1">&gt; In my mind, this was more for C or C++ code without the fortran subarray behavior but I was in error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is a little bit more complicated as the real code is a 3D application but I think it's not so complicated to implement this strategy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I'm convinced that  user defined data type is also an important MPI feature in Fortran.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patrick
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ===============================================================
</span><br>
<span class="quotelev1">&gt; |  Equipe M.O.S.T.         | <a href="http://most.hmg.inpg.fr">http://most.hmg.inpg.fr</a>          |
</span><br>
<span class="quotelev1">&gt; |  Patrick BEGOU           |       ------------               |
</span><br>
<span class="quotelev1">&gt; |  LEGI                    | mailto:Patrick.Begou_at_[hidden] |
</span><br>
<span class="quotelev1">&gt; |  BP 53 X                 | Tel 04 76 82 51 35               |
</span><br>
<span class="quotelev1">&gt; |  38041 GRENOBLE CEDEX    | Fax 04 76 82 52 71               |
</span><br>
<span class="quotelev1">&gt; ===============================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17991.php">Jeff Squyres: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>Previous message:</strong> <a href="17989.php">Jeff Squyres: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>In reply to:</strong> <a href="17983.php">Patrick Begou: "Re: [OMPI users] MPI_BCAST and fortran subarrays"</a>
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
