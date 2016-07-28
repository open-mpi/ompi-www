<?
$subject_val = "[OMPI users] Debug info on Darwin";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  4 17:02:50 2010" -->
<!-- isoreceived="20100604210250" -->
<!-- sent="Fri, 4 Jun 2010 17:02:43 -0400" -->
<!-- isosent="20100604210243" -->
<!-- name="Peter Thompson" -->
<!-- email="petert_at_[hidden]" -->
<!-- subject="[OMPI users] Debug info on Darwin" -->
<!-- id="4C0969F3.7070709_at_totalviewtech.com" -->
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
<strong>Subject:</strong> [OMPI users] Debug info on Darwin<br>
<strong>From:</strong> Peter Thompson (<em>petert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-04 17:02:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13226.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs onthe	samemachine"</a>
<li><strong>Previous message:</strong> <a href="13224.php">Katz, Jacob: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the	samemachine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13284.php">Jeff Squyres: "Re: [OMPI users] Debug info on Darwin"</a>
<li><strong>Reply:</strong> <a href="13284.php">Jeff Squyres: "Re: [OMPI users] Debug info on Darwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've had a couple of reports of users trying to debug with Open MPI and 
<br>
TotalView on Darwin and not being able to use the classic
<br>
<p>mpirun -tv -np 4 ./foo
<br>
<p>launch.  The typical problem shows up as something like
<br>
<p>Can't find typedef for MPIR_PROCDESC
<br>
<p>and then TotalView can't attach to the spawned processes.  While the 
<br>
Open MPI build may correctly compile the needed files with -g, the 
<br>
problem arises in that the DWARF info on Darwin is kept in the .o 
<br>
files.  If these files are kept around, we might be able to find that 
<br>
info and be happy debugging.  But if they are deleted after the build, 
<br>
or things are moved around, then we are unable to locate the .o files 
<br>
containing the debug info, and no one is pleased. 
<br>
<p>It was suggested by our CTO that if these files were compiled as to 
<br>
produce STABS debug info, rather than DWARF, then the debug info would 
<br>
be copied into the executables and shared libraries, and we would then 
<br>
be able to debug with Open MPI without a problem.   I'm not sure if this 
<br>
is the best place to offer that suggestion, but I imagine it's not a bad 
<br>
place to start.  ;-)
<br>
<p>Regards,
<br>
Peter Thompson
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13226.php">Jeff Squyres: "Re: [OMPI users] SM failure with mixed 32/64-bit procs onthe	samemachine"</a>
<li><strong>Previous message:</strong> <a href="13224.php">Katz, Jacob: "Re: [OMPI users] SM failure with mixed 32/64-bit procs on the	samemachine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13284.php">Jeff Squyres: "Re: [OMPI users] Debug info on Darwin"</a>
<li><strong>Reply:</strong> <a href="13284.php">Jeff Squyres: "Re: [OMPI users] Debug info on Darwin"</a>
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
