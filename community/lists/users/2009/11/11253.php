<?
$subject_val = "[OMPI users] configuration settings for Mac OSX";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 23 12:51:07 2009" -->
<!-- isoreceived="20091123175107" -->
<!-- sent="Mon, 23 Nov 2009 09:51:03 -0800 (PST)" -->
<!-- isosent="20091123175103" -->
<!-- name="Jurgen Heymann" -->
<!-- email="juheymann_at_[hidden]" -->
<!-- subject="[OMPI users] configuration settings for Mac OSX" -->
<!-- id="676379.63876.qm_at_web54204.mail.re2.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] configuration settings for Mac OSX<br>
<strong>From:</strong> Jurgen Heymann (<em>juheymann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-23 12:51:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11254.php">George Bosilca: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="11252.php">Eugene Loh: "Re: [OMPI users] Doubt regarding MPI_GATHER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11310.php">Jeff Squyres: "Re: [OMPI users] configuration settings for Mac OSX"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11310.php">Jeff Squyres: "Re: [OMPI users] configuration settings for Mac OSX"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11313.php">Jurgen Heymann: "Re: [OMPI users] configuration settings for Mac OSX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Users,
<br>
<p>I am trying to understand what parameters are essential to include when running ./configure with openmpi-1.3.3 when working with Mac using PPC (OS 10.4) or Intel platform (OS 10.5). What compilers and settings work best for the individual platforms (HFS+) and lead to robust installations?
<br>
<p>Fact is that I can build openmpi rather easily using ./configure --prefix=path_to_location on any of the mentioned platforms. Test on the package-provided examples work without flaw. However, building mpiblast-1.6 using openmpi fails on either platform (clean, no mpi alternatives present). Error messages indicate that certain functions provided within openmpi are not defined e.g., MPI::Datatype::Free() and MPI::WIN::Free().
<br>
<p>After consulting archives from mpiblast and openmpi and trying various settings, I cannot arrive at a solution that works. A similar problem had been presented on mpiblast-listserv but without conclusions aside from pointing to openmpi as the potential source. Any suggestions would be greatly appreciated.
<br>
<p>Thanks,
<br>
<p>Jurgen
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11254.php">George Bosilca: "Re: [OMPI users] segmentation fault: Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="11252.php">Eugene Loh: "Re: [OMPI users] Doubt regarding MPI_GATHER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11310.php">Jeff Squyres: "Re: [OMPI users] configuration settings for Mac OSX"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11310.php">Jeff Squyres: "Re: [OMPI users] configuration settings for Mac OSX"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11313.php">Jurgen Heymann: "Re: [OMPI users] configuration settings for Mac OSX"</a>
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
