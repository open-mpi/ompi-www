<?
$subject_val = "[OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 11:46:27 2014" -->
<!-- isoreceived="20140109164627" -->
<!-- sent="Thu, 9 Jan 2014 11:46:22 -0500" -->
<!-- isosent="20140109164622" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors" -->
<!-- id="4E69499F-BAB9-4946-88E9-1B9842BE7984_at_umich.edu" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 11:46:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23348.php">Victor Prosolin: "[OMPI users] OpenMPI with dual port Myrinet cards"</a>
<li><strong>Previous message:</strong> <a href="23346.php">Jeff Hammond: "Re: [OMPI users] Calling a variable from another processor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23393.php">Brock Palen: "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<li><strong>Reply:</strong> <a href="23393.php">Brock Palen: "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<li><strong>Reply:</strong> <a href="23397.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Attached you will find a small sample code that demonstrates the problem but ether MPI_File_seek() or MPI_File_get_position() is screwing up on me.  This only happens with this version of the intel compiler:
<br>
<p>Version 14.0.0.080 Build 20130728
<br>
<p>You can compile and run the example with:
<br>
<p>mpicc -g -DDEBUG mkrandfile.c -o mkrand
<br>
mpirun -np 2 mkrand -f data -l 1
<br>
<p>1.6.5  works with gcc 4.7.0, 
<br>
openmpi/1.6.5/gcc/4.7.0
<br>
&nbsp;&nbsp;0: my current offset is 0
<br>
&nbsp;&nbsp;1: my current offset is 8388608
<br>
<p>openmpi/1.6.5/intel/14.0
<br>
&nbsp;&nbsp;0: my current offset is 4294967297
<br>
&nbsp;&nbsp;1: my current offset is 4294967297
<br>
<p>I passed the code through ddt, and the calculations for the offset for each rank gets the correct values passed to MPI_File_seek() but what I get back from MPI_File_get_position() is the above gibberish. 
<br>
<p>I also cannot produce the problem with  openmpi/1.6.4/intel/13.0.1  or with openmpi/1.6.5/pgi/13.5
<br>
<p>Our builds all like this:
<br>
<p>PREFIX=/home/software/rhel6/openmpi-1.6.5/pgi-13.5
<br>
MXM=/home/software/rhel6/mxm/2.0
<br>
FCA=/home/software/rhel6/fca/2.5
<br>
COMPILERS='CC=pgcc CXX=pgCC FC=pgf90 F77=pgf77'
<br>
./configure \
<br>
&nbsp;&nbsp;&nbsp;--prefix=${PREFIX} \
<br>
&nbsp;&nbsp;&nbsp;--mandir=${PREFIX}/man \
<br>
&nbsp;&nbsp;&nbsp;--with-tm=/usr/local/torque \
<br>
&nbsp;&nbsp;&nbsp;--with-openib --with-psm \
<br>
&nbsp;&nbsp;&nbsp;--with-io-romio-flags='--with-file-system=testfs+ufs+nfs+lustre' \
<br>
&nbsp;&nbsp;&nbsp;--with-mxm=$MXM \
<br>
&nbsp;&nbsp;&nbsp;--with-fca=$FCA \
<br>
&nbsp;&nbsp;&nbsp;--disable-dlopen --enable-shared \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$COMPILERS
<br>
<p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>

<br><p>
<p><p><p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23347/mkrandfiles.c">mkrandfiles.c</a>
</ul>
<!-- attachment="mkrandfiles.c" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23347/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23348.php">Victor Prosolin: "[OMPI users] OpenMPI with dual port Myrinet cards"</a>
<li><strong>Previous message:</strong> <a href="23346.php">Jeff Hammond: "Re: [OMPI users] Calling a variable from another processor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23393.php">Brock Palen: "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<li><strong>Reply:</strong> <a href="23393.php">Brock Palen: "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
<li><strong>Reply:</strong> <a href="23397.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.5  intel 14.0 MPI-IO Errors"</a>
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
