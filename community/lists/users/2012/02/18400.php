<?
$subject_val = "Re: [OMPI users] Open MPI-1.5.4 --with-mpi-f90-size=large Compilation Error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  6 07:50:30 2012" -->
<!-- isoreceived="20120206125030" -->
<!-- sent="Mon, 6 Feb 2012 07:50:24 -0500" -->
<!-- isosent="20120206125024" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI-1.5.4 --with-mpi-f90-size=large Compilation Error" -->
<!-- id="845F78AD-4858-4A22-94CA-209CF514F287_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E4836E204F953E4F91484E7A23674AB801E8DE28_at_ICTSC-W-S206.soliscom.uu.nl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI-1.5.4 --with-mpi-f90-size=large Compilation Error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-06 07:50:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18401.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18399.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18397.php">Rashid, Z. (Zahid): "[OMPI users] Open MPI-1.5.4 --with-mpi-f90-size=large Compilation Error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a known problem and is unlikely to be fixed.  The solution is simply to use the medium size f90 module, which means you won't have strict type checking on all MPI functions that take 2 choice buffers (e.g., MPI_SCATTERV).
<br>
<p>In the OMPI v1.7 series, we have a wholly revamped set of Fortran support coming.  Unfortunately, it won't work for gfortran because of lack of features in that compiler.  For (current versions of) gfortran, the level of fortran support is staying the same in Open MPI v1.7 (i.e., &quot;sizes&quot; and no &quot;large&quot; size).  :-(
<br>
<p><p>On Feb 4, 2012, at 10:56 PM, Rashid, Z. (Zahid) wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open MPI users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to compile Open MPI-1.5.4 beta on my macbook pro (with GCC-4.6.2/Gfortran-4.6.2 installed) with the option; &quot; configure --with-mpi-f90-size=large &quot;. The configuration script runs ok but during compilation I get the following warnings which after a limit of 25 turn into an error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   FC     mpi_scatterv_f90.lo
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:17.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:55.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt;   FC     mpi_sendrecv_f90.lo
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:93.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:131.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:169.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:207.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:245.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:283.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:321.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:359.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:397.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:435.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:473.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:511.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:549.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:587.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:625.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:663.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:701.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:739.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:777.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:815.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:853.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:891.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; mpi_scatterv_f90.f90:929.12:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
</span><br>
<span class="quotelev1">&gt;             1
</span><br>
<span class="quotelev1">&gt; Error: Unterminated character constant beginning at (1)
</span><br>
<span class="quotelev1">&gt; Fatal Error: Error count reached limit of 25.
</span><br>
<span class="quotelev1">&gt; make[4]: *** [mpi_scatterv_f90.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With &quot; configure --with-mpi-f90-size=medium &quot;, the error disappears. I want to compile it with &quot; --with-mpi-f90-size=large &quot; option. Any help to get around this error will be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Zahid
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
<li><strong>Next message:</strong> <a href="18401.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18399.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18397.php">Rashid, Z. (Zahid): "[OMPI users] Open MPI-1.5.4 --with-mpi-f90-size=large Compilation Error"</a>
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
