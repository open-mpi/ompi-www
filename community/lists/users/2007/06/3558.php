<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 29 23:50:35 2007" -->
<!-- isoreceived="20070630035035" -->
<!-- sent="Fri, 29 Jun 2007 23:50:28 -0400" -->
<!-- isosent="20070630035028" -->
<!-- name="Ed D'Azevedo" -->
<!-- email="efdazedo_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi on g4 mac with g95 (www.g95.org) in mpif90" -->
<!-- id="4685D304.4030904_at_cs.utk.edu" -->
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
<strong>From:</strong> Ed D'Azevedo (<em>efdazedo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-29 23:50:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3559.php">Glenn Carver: "Re: [OMPI users] MPI over IB not working : &quot;Connection event not handled: 16391&quot;"</a>
<li><strong>Previous message:</strong> <a href="3557.php">Yip, Elizabeth L: "[OMPI users] Absoft compilation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3563.php">Jeff Squyres: "Re: [OMPI users] openmpi on g4 mac with g95 (www.g95.org) in mpif90"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3563.php">Jeff Squyres: "Re: [OMPI users] openmpi on g4 mac with g95 (www.g95.org) in mpif90"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>I am trying to build openmpi on a G4 mac osx 10.4 with Fortran g95
<br>
<p>(www.g95.org) support.
<br>
<p>I would like to use mpif90 or mpif77 to compile Fortran MPI code.
<br>
<p><p><p>I get an error in the configuration script.
<br>
<p>I use &quot;sh setup.sh&quot;. The file &quot;setup.sh&quot; is attached.
<br>
<p><p>Is there a way to make a reasonable guess say Fortran logical is the 
<br>
same size as Fortran integer and continue with the build process?
<br>
<p>Thanks.
<br>
<p>--------------------
<br>
<p>checking if PowerPC registers have r prefix... yes
<br>
checking for 64-bit PowerPC assembly support... no
<br>
checking if gcc supports GCC inline assembly... yes
<br>
checking if gcc supports DEC inline assembly... no
<br>
checking if gcc supports XLC inline assembly... no
<br>
checking if g++ supports GCC inline assembly... yes
<br>
checking if g++ supports DEC inline assembly... no
<br>
checking if g++ supports XLC inline assembly... no
<br>
checking for assembly format... default-.text-.globl-:-_-L--0-1-1-0-0
<br>
checking for asssembly architecture... POWERPC32
<br>
checking for perl... perl
<br>
checking for pre-built assembly file... yes (atomic-powerpc32-osx.s)
<br>
checking for atomic assembly filename... atomic-powerpc32-osx.s
<br>
<p>*** Fortran 77 compiler
<br>
checking whether we are using the GNU Fortran 77 compiler... yes
<br>
checking whether /Users/e6d/bin/g95 accepts -g... yes
<br>
checking if Fortran 77 compiler works... yes
<br>
checking /Users/e6d/bin/g95 external symbol convention... double underscore
<br>
checking if C and Fortran 77 are link compatible... yes
<br>
checking if Fortran 77 compiler supports LOGICAL... yes
<br>
checking size of Fortran 77 LOGICAL... configure: error: Could not 
<br>
determine size of LOGICAL
<br>
<p><p><p><p><p>
<p>
<p>
F77=/Users/e6d/bin/g95
<br>
FFLAGS=&quot;-ffixed-form -i4 -fzero -g -ftrace=full&quot;
<br>
FC=/Users/e6d/bin/g95
<br>
FCFLAGS=&quot;-i4 -fzero -g -ftrace=full&quot;
<br>
export F77
<br>
export FFLAGS
<br>
export FC
<br>
export FCFLAGS
<br>
<p>./configure --enable-mpi-f90  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mpi-f90-size=trivial \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mpi-param-check=always \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F77=/Users/e6d/bin/g95 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC=/Users/e6d/bin/g95 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FFLAGS=&quot; -ffixed-form -i4  -fzero -g -ftrace=full &quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FCFLAGS=&quot; -ffixed-form -i4  -fzero -g -ftrace=full &quot;  
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3558/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3559.php">Glenn Carver: "Re: [OMPI users] MPI over IB not working : &quot;Connection event not handled: 16391&quot;"</a>
<li><strong>Previous message:</strong> <a href="3557.php">Yip, Elizabeth L: "[OMPI users] Absoft compilation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3563.php">Jeff Squyres: "Re: [OMPI users] openmpi on g4 mac with g95 (www.g95.org) in mpif90"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3563.php">Jeff Squyres: "Re: [OMPI users] openmpi on g4 mac with g95 (www.g95.org) in mpif90"</a>
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
