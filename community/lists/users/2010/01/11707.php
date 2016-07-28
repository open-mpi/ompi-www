<?
$subject_val = "[OMPI users] btl udapl leaves string uninitialised";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  7 06:42:18 2010" -->
<!-- isoreceived="20100107114218" -->
<!-- sent="Thu, 7 Jan 2010 12:41:51 +0100" -->
<!-- isosent="20100107114151" -->
<!-- name="Dennis Schridde" -->
<!-- email="devurandom_at_[hidden]" -->
<!-- subject="[OMPI users] btl udapl leaves string uninitialised" -->
<!-- id="201001071241.59964.devurandom_at_gmx.net" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] btl udapl leaves string uninitialised<br>
<strong>From:</strong> Dennis Schridde (<em>devurandom_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-07 06:41:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11708.php">Jeff Squyres: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<li><strong>Previous message:</strong> <a href="11706.php">Ake Sandgren: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11713.php">Don Kerr: "Re: [OMPI users] btl udapl leaves string uninitialised"</a>
<li><strong>Reply:</strong> <a href="11713.php">Don Kerr: "Re: [OMPI users] btl udapl leaves string uninitialised"</a>
<li><strong>Maybe reply:</strong> <a href="11717.php">Dennis Schridde: "Re: [OMPI users] btl udapl leaves string uninitialised"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
<p>In btl_udapl_proc.c, if peer_proc-&gt;proc_addr_count &lt;= 0, btl_addr_string will 
<br>
not be initialised. Attached is a patch that initialised btl_addr_string at 
<br>
the first possible moment, which fixes this problem.
<br>
<p>Regards,
<br>
Dennis Schridde
<br>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11707/openmpi-1.4-btl_udapl_proc-set-btl_addr_string.patch">openmpi-1.4-btl_udapl_proc-set-btl_addr_string.patch</a>
</ul>
<!-- attachment="openmpi-1.4-btl_udapl_proc-set-btl_addr_string.patch" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11707/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11708.php">Jeff Squyres: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<li><strong>Previous message:</strong> <a href="11706.php">Ake Sandgren: "Re: [OMPI users] Problems compiling OpenMPI 1.4 with PGI 9.0-3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11713.php">Don Kerr: "Re: [OMPI users] btl udapl leaves string uninitialised"</a>
<li><strong>Reply:</strong> <a href="11713.php">Don Kerr: "Re: [OMPI users] btl udapl leaves string uninitialised"</a>
<li><strong>Maybe reply:</strong> <a href="11717.php">Dennis Schridde: "Re: [OMPI users] btl udapl leaves string uninitialised"</a>
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
