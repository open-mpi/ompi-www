<?
$subject_val = "[OMPI users] Mac Ifort and gfortran together";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 14:12:40 2010" -->
<!-- isoreceived="20101129191240" -->
<!-- sent="Mon, 29 Nov 2010 14:12:36 -0500" -->
<!-- isosent="20101129191236" -->
<!-- name="David Robertson" -->
<!-- email="robertson_at_[hidden]" -->
<!-- subject="[OMPI users] Mac Ifort and gfortran together" -->
<!-- id="4CF3FB24.40907_at_marine.rutgers.edu" -->
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
<strong>Subject:</strong> [OMPI users] Mac Ifort and gfortran together<br>
<strong>From:</strong> David Robertson (<em>robertson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 14:12:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14913.php">Ralph Castain: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Previous message:</strong> <a href="14911.php">Jeff Squyres: "Re: [OMPI users] MPI-IO Lustre driver update?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/15155.php">Jeff Squyres: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/15155.php">Jeff Squyres: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15855.php">David Robertson: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm noticing a strange problem with Open MPI 1.4.2 on Mac OS X 10.6. We 
<br>
use both Intel Ifort 11.1 and gfortran 4.3 on the same machine and 
<br>
switch between them to test and debug code.
<br>
<p>I had runtime problems when I compiled openmpi in my usual way of no 
<br>
shared libraries so I switched to shared and it runs now. However, in 
<br>
order for it to work with ifort I ended up needing to add the location 
<br>
of my intel compiled Open MPI libraries (/opt/intelsoft/openmpi/lib) to 
<br>
my DYLD_LIBRARY_PATH environment variable to to get codes to compile 
<br>
and/or run with ifort.
<br>
<p>The problem is that adding /opt/intelsoft/openmpi/lib to 
<br>
DYLD_LIBRARY_PATH broke my Open MPI for gfortran. Now when I try to 
<br>
compile with mpif90 for gfortran it thinks it's actually trying to 
<br>
compile with ifort still. As soon as I take the above path out of 
<br>
DYLD_LIBRARY_PATH everything works fine.
<br>
<p>Also, when I run ompi_info everything looks right except prefix. It says 
<br>
/opt/intelsoft/openmpi rather than /opt/gfortransoft/openmpi like it 
<br>
should. It should be noted that having /opt/intelsoft/openmpi in 
<br>
LD_LIBRARY_PATH does not produce the same effect.
<br>
<p>Thanks,
<br>
Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14913.php">Ralph Castain: "Re: [OMPI users] Help!!!!!!!!!!!!Openmpi instal for ubuntu 64 bits"</a>
<li><strong>Previous message:</strong> <a href="14911.php">Jeff Squyres: "Re: [OMPI users] MPI-IO Lustre driver update?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/15155.php">Jeff Squyres: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/12/15155.php">Jeff Squyres: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/03/15855.php">David Robertson: "Re: [OMPI users] Mac Ifort and gfortran together"</a>
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
