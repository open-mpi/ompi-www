<?
$subject_val = "[OMPI users] Open MPI-1.5.4 --with-mpi-f90-size=large Compilation Error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  4 22:56:19 2012" -->
<!-- isoreceived="20120205035619" -->
<!-- sent="Sun, 5 Feb 2012 03:56:08 +0000" -->
<!-- isosent="20120205035608" -->
<!-- name="Rashid, Z. (Zahid)" -->
<!-- email="Z.Rashid_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI-1.5.4 --with-mpi-f90-size=large Compilation Error" -->
<!-- id="E4836E204F953E4F91484E7A23674AB801E8DE28_at_ICTSC-W-S206.soliscom.uu.nl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI-1.5.4 --with-mpi-f90-size=large Compilation Error<br>
<strong>From:</strong> Rashid, Z. (Zahid) (<em>Z.Rashid_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-04 22:56:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18398.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18396.php">Ralph Castain: "Re: [OMPI users] How to join intercommunicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18400.php">Jeff Squyres: "Re: [OMPI users] Open MPI-1.5.4 --with-mpi-f90-size=large Compilation Error"</a>
<li><strong>Reply:</strong> <a href="18400.php">Jeff Squyres: "Re: [OMPI users] Open MPI-1.5.4 --with-mpi-f90-size=large Compilation Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI users,
<br>
<p>I want to compile Open MPI-1.5.4 beta on my macbook pro (with GCC-4.6.2/Gfortran-4.6.2 installed) with the option; &quot; configure --with-mpi-f90-size=large &quot;. The configuration script runs ok but during compilation I get the following warnings which after a limit of 25 turn into an error.
<br>
<p>&nbsp;&nbsp;FC     mpi_scatterv_f90.lo
<br>
mpi_scatterv_f90.f90:17.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:55.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
&nbsp;&nbsp;FC     mpi_sendrecv_f90.lo
<br>
mpi_scatterv_f90.f90:93.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:131.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:169.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:207.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:245.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:283.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:321.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:359.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:397.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:435.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:473.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:511.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:549.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:587.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:625.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:663.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:701.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:739.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:777.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:815.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:853.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:891.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
mpi_scatterv_f90.f90:929.12:
<br>
<p>&nbsp;&nbsp;print *, &quot;Open MPI WARNING: You are calling MPI_SCATTERV with incorrect sendc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unterminated character constant beginning at (1)
<br>
Fatal Error: Error count reached limit of 25.
<br>
make[4]: *** [mpi_scatterv_f90.lo] Error 1
<br>
make[4]: *** Waiting for unfinished jobs....
<br>
make[3]: *** [all-recursive] Error 1
<br>
make[2]: *** [all] Error 2
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p>With &quot; configure --with-mpi-f90-size=medium &quot;, the error disappears. I want to compile it with &quot; --with-mpi-f90-size=large &quot; option. Any help to get around this error will be appreciated.
<br>
<p>Regards.
<br>
<p>Zahid
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18397/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18398.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>Previous message:</strong> <a href="18396.php">Ralph Castain: "Re: [OMPI users] How to join intercommunicators?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18400.php">Jeff Squyres: "Re: [OMPI users] Open MPI-1.5.4 --with-mpi-f90-size=large Compilation Error"</a>
<li><strong>Reply:</strong> <a href="18400.php">Jeff Squyres: "Re: [OMPI users] Open MPI-1.5.4 --with-mpi-f90-size=large Compilation Error"</a>
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
