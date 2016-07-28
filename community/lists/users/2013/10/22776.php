<?
$subject_val = "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  8 18:14:42 2013" -->
<!-- isoreceived="20131008221442" -->
<!-- sent="Tue, 8 Oct 2013 17:14:20 -0500" -->
<!-- isosent="20131008221420" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV" -->
<!-- id="CAGKz=uJvSw0ANSPifWwAjPDZ2Ga=WDB-pC5=BbVhZ-cS0Sf9og_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-08 18:14:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22777.php">Kevin M. Hildebrand: "[OMPI users] Unterminated log buffer causes corrupt log messages"</a>
<li><strong>Previous message:</strong> <a href="22775.php">Gerlach, Charles A.: "[OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>In reply to:</strong> <a href="22775.php">Gerlach, Charles A.: "[OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22780.php">Nathan Hjelm: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;I have made a test case...&quot; means there is little reason not to
<br>
attach said test case to the email for verification :-)
<br>
<p>The following is in mpi.h.in in the OpenMPI trunk.
<br>
<p>=========================
<br>
/*
<br>
&nbsp;* Just in case you need it.  :-)
<br>
&nbsp;*/
<br>
#define OPEN_MPI 1
<br>
<p>/*
<br>
&nbsp;* MPI version
<br>
&nbsp;*/
<br>
#define MPI_VERSION 2
<br>
#define MPI_SUBVERSION 2
<br>
=========================
<br>
<p>Two things can be said from this:
<br>
<p>(1) You can workaround this non-portable awfulness with the C
<br>
preprocess by testing for the OPEN_MPI symbol.
<br>
<p>(2) OpenMPI claims to be compliant with the MPI 2.2 standard, hence
<br>
any failures to adhere to the behavior specified in that document for
<br>
MPI_IN_PLACE is erroneous.
<br>
<p>Best,
<br>
<p>Jeff
<br>
<p>On Tue, Oct 8, 2013 at 2:40 PM, Gerlach, Charles A.
<br>
&lt;charles.gerlach_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have an MPI code that was developed using MPICH1 and OpenMPI before the
</span><br>
<span class="quotelev1">&gt; MPI2 standards became commonplace (before MPI_IN_PLACE was an option).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, my code has many examples of GATHERV, AGATHERV and SCATTERV, where I
</span><br>
<span class="quotelev1">&gt; pass the same array in as the SEND_BUF and the RECV_BUF, and this has worked
</span><br>
<span class="quotelev1">&gt; fine for many years.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Intel MPI and MPICH2 explicitly disallow this behavior according to the MPI2
</span><br>
<span class="quotelev1">&gt; standard. So, I have gone through and used MPI_IN_PLACE for all the
</span><br>
<span class="quotelev1">&gt; GATHERV/SCATTERVs that used to pass the same array twice. This code now
</span><br>
<span class="quotelev1">&gt; works with MPICH2 and Intel_MPI, but fails with OpenMPI-1.6.5 on multiple
</span><br>
<span class="quotelev1">&gt; platforms and compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PLATFORM                  COMPILER            SUCCESS? (For at least one
</span><br>
<span class="quotelev1">&gt; simple example)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLED 12.3 (x86-64) &#226;&#128;&#147; Portland group  - fails
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLED 12.3 (x86-64) &#226;&#128;&#147; g95                         - fails
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SLED 12.3 (x86-64) &#226;&#128;&#147; gfortran               - works
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OS X 10.8                 -- intel                        -fails
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
<span class="quotelev1">&gt; In every case where OpenMPI fails with the MPI_IN_PLACE code, I can go back
</span><br>
<span class="quotelev1">&gt; to the original code that passes the same array twice instead of using
</span><br>
<span class="quotelev1">&gt; MPI_IN_PLACE, and it is fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have made a test case doing an individual GATHERV with MPI_IN_PLACE, and
</span><br>
<span class="quotelev1">&gt; it works with OpenMPI.  So it looks like there is some interaction with my
</span><br>
<span class="quotelev1">&gt; code that is causing the problem. I have no idea how to go about trying to
</span><br>
<span class="quotelev1">&gt; debug it.
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
<span class="quotelev1">&gt; In summary:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI-1.6.5 crashes my code when I use GATHERV, AGATHERV, and SCATTERV
</span><br>
<span class="quotelev1">&gt; with MPI_IN_PLACE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Intel MPI and MPICH2 work with my code when I use GATHERV, AGATHERV, and
</span><br>
<span class="quotelev1">&gt; SCATTERV with MPI_IN_PLACE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI-1.6.5 works with my code when I pass the same array to SEND_BUF and
</span><br>
<span class="quotelev1">&gt; RECV_BUF instead of using MPI_IN_PLACE for those same GATHERV, AGATHERV, and
</span><br>
<span class="quotelev1">&gt; SCATTERVs.
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
<span class="quotelev1">&gt; -Charles
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22777.php">Kevin M. Hildebrand: "[OMPI users] Unterminated log buffer causes corrupt log messages"</a>
<li><strong>Previous message:</strong> <a href="22775.php">Gerlach, Charles A.: "[OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<li><strong>In reply to:</strong> <a href="22775.php">Gerlach, Charles A.: "[OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22780.php">Nathan Hjelm: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
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
