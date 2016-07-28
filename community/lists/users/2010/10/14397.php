<?
$subject_val = "[OMPI users] hdf5 build error using openmpi and Intel Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  6 03:09:26 2010" -->
<!-- isoreceived="20101006070926" -->
<!-- sent="Wed, 6 Oct 2010 09:09:21 +0200" -->
<!-- isosent="20101006070921" -->
<!-- name="G&#246;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="[OMPI users] hdf5 build error using openmpi and Intel Fortran" -->
<!-- id="AANLkTi=bcNR7hvooat7prKPzjVkojTJN145ZBe0-1rGa_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] hdf5 build error using openmpi and Intel Fortran<br>
<strong>From:</strong> G&#246;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-06 03:09:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14398.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="14396.php">Barrett, Brian W: "Re: [OMPI users] location of ompi libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14398.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Reply:</strong> <a href="14398.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Reply:</strong> <a href="14401.php">Tim Prince: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>I'm trying to build hdf5 1.8.5-patch1 on RHEL5 using openmpi 1.4 and
<br>
the Intel Compiler suite 11.0. I have Fortran, MPI and shared library
<br>
support enabled. I get this error at linking stage:
<br>
<p>/bin/sh ../../libtool --tag=FC   --mode=link mpif90 -O2 -g -pipe -Wall
<br>
-Wp,-D_FORTIFY_SOURCE=2 -fexceptions -fstack-protector
<br>
--param=ssp-buffer-size=4 -m64 -mtune=generic -fPIC  -O3 -I../../src
<br>
-I../../fortran/src  -version-info 6:4:0
<br>
-Wl,-rpath=/usr/lib64/openmpi/1.4-icc/lib -lmpi -o libhdf5_fortran.la
<br>
-rpath /usr/lib64 H5f90global.lo H5fortran_types.lo H5_ff.lo H5Aff.lo
<br>
H5Dff.lo H5Eff.lo H5Fff.lo H5Gff.lo H5Iff.lo H5Lff.lo H5Off.lo
<br>
H5Pff.lo H5Rff.lo H5Sff.lo H5Tff.lo H5Zff.lo
<br>
H5_DBLE_InterfaceInclude.lo H5f90kit.lo H5_f.lo H5Af.lo H5Df.lo
<br>
H5Ef.lo H5Ff.lo H5Gf.lo H5If.lo H5Lf.lo H5Of.lo H5Pf.lo H5Rf.lo
<br>
H5Sf.lo H5Tf.lo H5Zf.lo H5FDmpiof.lo HDF5mpio.lo H5FDmpioff.lo  -lsz
<br>
-lz -lm
<br>
libtool: link: mpif90 -shared  .libs/H5f90global.o
<br>
.libs/H5fortran_types.o .libs/H5_ff.o .libs/H5Aff.o .libs/H5Dff.o
<br>
.libs/H5Eff.o .libs/H5Fff.o .libs/H5Gff.o .libs/H5Iff.o .libs/H5Lff.o
<br>
.libs/H5Off.o .libs/H5Pff.o .libs/H5Rff.o .libs/H5Sff.o .libs/H5Tff.o
<br>
.libs/H5Zff.o .libs/H5_DBLE_InterfaceInclude.o .libs/H5f90kit.o
<br>
.libs/H5_f.o .libs/H5Af.o .libs/H5Df.o .libs/H5Ef.o .libs/H5Ff.o
<br>
.libs/H5Gf.o .libs/H5If.o .libs/H5Lf.o .libs/H5Of.o .libs/H5Pf.o
<br>
.libs/H5Rf.o .libs/H5Sf.o .libs/H5Tf.o .libs/H5Zf.o .libs/H5FDmpiof.o
<br>
.libs/HDF5mpio.o .libs/H5FDmpioff.o    -lmpi -lsz -lz -lm  -m64
<br>
-mtune=generic -rpath=/usr/lib64/openmpi/1.4-icc/lib   -soname
<br>
libhdf5_fortran.so.6 -o .libs/libhdf5_fortran.so.6.0.4
<br>
ifort: command line warning #10156: ignoring option '-r'; no argument required
<br>
ifort: command line warning #10156: ignoring option '-s'; no argument required
<br>
ld: libhdf5_fortran.so.6: No such file: No such file or directory
<br>
make[1]: *** [libhdf5_fortran.la] Fehler 1
<br>
<p><p>hdf5 builds fine with static libraries only, but they become huge. It
<br>
looks like libtool or mpif90 or something else is calling ifort with
<br>
the wrong options. Any idea on how to fix this?
<br>
<p>Regards, G&#246;tz Waschk
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14398.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="14396.php">Barrett, Brian W: "Re: [OMPI users] location of ompi libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14398.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Reply:</strong> <a href="14398.php">Jeff Squyres (jsquyres): "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Reply:</strong> <a href="14401.php">Tim Prince: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
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
