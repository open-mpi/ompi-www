<?
$subject_val = "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  9 13:37:11 2013" -->
<!-- isoreceived="20131009173711" -->
<!-- sent="Wed, 9 Oct 2013 11:37:10 -0600" -->
<!-- isosent="20131009173710" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV" -->
<!-- id="20131009173710.GB30920_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0A970F4038D541469E279AD555D8781630C19DF6_at_mbx256-1.adm.swri.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-09 13:37:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22781.php">Kevin M. Hildebrand: "[OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Previous message:</strong> <a href="22779.php">Nathan Hjelm: "Re: [OMPI users] Unterminated log buffer causes corrupt log messages"</a>
<li><strong>In reply to:</strong> <a href="22775.php">Gerlach, Charles A.: "[OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22815.php">Gerlach, Charles A.: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>Reply:</strong> <a href="22815.php">Gerlach, Charles A.: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These functions are tested nightly and there has been no indication any of these
<br>
functions fail with MPI_IN_PLACE. Can you provide a reproducer?
<br>
<p>-Nathan
<br>
HPC-3, LANL
<br>
<p>On Tue, Oct 08, 2013 at 07:40:50PM +0000, Gerlach, Charles A. wrote:
<br>
<span class="quotelev1">&gt;    I have an MPI code that was developed using MPICH1 and OpenMPI before the
</span><br>
<span class="quotelev1">&gt;    MPI2 standards became commonplace (before MPI_IN_PLACE was an option).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    So, my code has many examples of GATHERV, AGATHERV and SCATTERV, where I
</span><br>
<span class="quotelev1">&gt;    pass the same array in as the SEND_BUF and the RECV_BUF, and this has
</span><br>
<span class="quotelev1">&gt;    worked fine for many years.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Intel MPI and MPICH2 explicitly disallow this behavior according to the
</span><br>
<span class="quotelev1">&gt;    MPI2 standard. So, I have gone through and used MPI_IN_PLACE for all the
</span><br>
<span class="quotelev1">&gt;    GATHERV/SCATTERVs that used to pass the same array twice. This code now
</span><br>
<span class="quotelev1">&gt;    works with MPICH2 and Intel_MPI, but fails with OpenMPI-1.6.5 on multiple
</span><br>
<span class="quotelev1">&gt;    platforms and compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    PLATFORM                  COMPILER            SUCCESS? (For at least one
</span><br>
<span class="quotelev1">&gt;    simple example)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    SLED 12.3 (x86-64) - Portland group  - fails
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    SLED 12.3 (x86-64) - g95                         - fails
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    SLED 12.3 (x86-64) - gfortran               - works
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    OS X 10.8                 -- intel                        -fails
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    In every case where OpenMPI fails with the MPI_IN_PLACE code, I can go
</span><br>
<span class="quotelev1">&gt;    back to the original code that passes the same array twice instead of
</span><br>
<span class="quotelev1">&gt;    using MPI_IN_PLACE, and it is fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I have made a test case doing an individual GATHERV with MPI_IN_PLACE, and
</span><br>
<span class="quotelev1">&gt;    it works with OpenMPI.  So it looks like there is some interaction with my
</span><br>
<span class="quotelev1">&gt;    code that is causing the problem. I have no idea how to go about trying to
</span><br>
<span class="quotelev1">&gt;    debug it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    In summary:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    OpenMPI-1.6.5 crashes my code when I use GATHERV, AGATHERV, and SCATTERV
</span><br>
<span class="quotelev1">&gt;    with MPI_IN_PLACE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Intel MPI and MPICH2 work with my code when I use GATHERV, AGATHERV, and
</span><br>
<span class="quotelev1">&gt;    SCATTERV with MPI_IN_PLACE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    OpenMPI-1.6.5 works with my code when I pass the same array to SEND_BUF
</span><br>
<span class="quotelev1">&gt;    and RECV_BUF instead of using MPI_IN_PLACE for those same GATHERV,
</span><br>
<span class="quotelev1">&gt;    AGATHERV, and SCATTERVs.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    -Charles
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22781.php">Kevin M. Hildebrand: "[OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Previous message:</strong> <a href="22779.php">Nathan Hjelm: "Re: [OMPI users] Unterminated log buffer causes corrupt log messages"</a>
<li><strong>In reply to:</strong> <a href="22775.php">Gerlach, Charles A.: "[OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22815.php">Gerlach, Charles A.: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>Reply:</strong> <a href="22815.php">Gerlach, Charles A.: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
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
