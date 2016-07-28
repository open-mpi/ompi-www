<?
$subject_val = "[OMPI users] Building from the SRPM version creates an rpm with striped libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 19:25:33 2010" -->
<!-- isoreceived="20100524232533" -->
<!-- sent="Mon, 24 May 2010 19:25:26 -0400" -->
<!-- isosent="20100524232526" -->
<!-- name="Peter Thompson" -->
<!-- email="petert_at_[hidden]" -->
<!-- subject="[OMPI users] Building from the SRPM version creates an rpm with striped libraries" -->
<!-- id="4BFB0AE6.6040305_at_totalviewtech.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Building from the SRPM version creates an rpm with striped libraries<br>
<strong>From:</strong> Peter Thompson (<em>petert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 19:25:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13151.php">tom fogal: "[OMPI users] fork / exec from an MPI process"</a>
<li><strong>Previous message:</strong> <a href="13149.php">Dawid Laszuk: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13156.php">Ashley Pittman: "Re: [OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
<li><strong>Reply:</strong> <a href="13156.php">Ashley Pittman: "Re: [OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a user who prefers building rpm's from the srpm.  That's okay, 
<br>
but for debugging via TotalView it creates a version with the openmpi 
<br>
.so files stripped and we can't gain control of the processes when 
<br>
launched via mpirun -tv.  I've verified this with my own build of a 
<br>
1.4.1 rpm which I then installed and noticed the same behavior that the 
<br>
user reports.  I was hoping to give them some advice as to how to avoid 
<br>
the stripping, as it appears that the actual build of those libraries is 
<br>
done with -g and everything looks fine.  But I can't figure out in the 
<br>
build (from the log file I created) just where that stripping takes 
<br>
place, or how to get around it if need be.  The best guess I have is 
<br>
that it may be happening at the very end when an rpm-tmp file is 
<br>
executed, but that file has disappeared so I don't really know what it 
<br>
does.  I thought it might be apparent in the spec file, but it's 
<br>
certainly not apparent to me!  Any help or advice would be appreciated.
<br>
<p>Cheers,
<br>
Peter Thompson
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13151.php">tom fogal: "[OMPI users] fork / exec from an MPI process"</a>
<li><strong>Previous message:</strong> <a href="13149.php">Dawid Laszuk: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13156.php">Ashley Pittman: "Re: [OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
<li><strong>Reply:</strong> <a href="13156.php">Ashley Pittman: "Re: [OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
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
