<?
$subject_val = "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  6 06:35:50 2010" -->
<!-- isoreceived="20101006103550" -->
<!-- sent="Wed, 6 Oct 2010 06:35:53 -0400" -->
<!-- isosent="20101006103553" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran" -->
<!-- id="8A870D70-113B-450F-A740-B4F3F4DA6D85_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AANLkTi=bcNR7hvooat7prKPzjVkojTJN145ZBe0-1rGa_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-06 06:35:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14399.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared memory"</a>
<li><strong>Previous message:</strong> <a href="14397.php">G&#246;tz Waschk: "[OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>In reply to:</strong> <a href="14397.php">G&#246;tz Waschk: "[OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14401.php">Tim Prince: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks like something you should take up with the hdf5 people. 
<br>
<p>Sent from my PDA. No type good. 
<br>
<p>On Oct 6, 2010, at 3:09 AM, G&#195;&#182;tz Waschk &lt;goetz.waschk_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to build hdf5 1.8.5-patch1 on RHEL5 using openmpi 1.4 and
</span><br>
<span class="quotelev1">&gt; the Intel Compiler suite 11.0. I have Fortran, MPI and shared library
</span><br>
<span class="quotelev1">&gt; support enabled. I get this error at linking stage:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../libtool --tag=FC   --mode=link mpif90 -O2 -g -pipe -Wall
</span><br>
<span class="quotelev1">&gt; -Wp,-D_FORTIFY_SOURCE=2 -fexceptions -fstack-protector
</span><br>
<span class="quotelev1">&gt; --param=ssp-buffer-size=4 -m64 -mtune=generic -fPIC  -O3 -I../../src
</span><br>
<span class="quotelev1">&gt; -I../../fortran/src  -version-info 6:4:0
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath=/usr/lib64/openmpi/1.4-icc/lib -lmpi -o libhdf5_fortran.la
</span><br>
<span class="quotelev1">&gt; -rpath /usr/lib64 H5f90global.lo H5fortran_types.lo H5_ff.lo H5Aff.lo
</span><br>
<span class="quotelev1">&gt; H5Dff.lo H5Eff.lo H5Fff.lo H5Gff.lo H5Iff.lo H5Lff.lo H5Off.lo
</span><br>
<span class="quotelev1">&gt; H5Pff.lo H5Rff.lo H5Sff.lo H5Tff.lo H5Zff.lo
</span><br>
<span class="quotelev1">&gt; H5_DBLE_InterfaceInclude.lo H5f90kit.lo H5_f.lo H5Af.lo H5Df.lo
</span><br>
<span class="quotelev1">&gt; H5Ef.lo H5Ff.lo H5Gf.lo H5If.lo H5Lf.lo H5Of.lo H5Pf.lo H5Rf.lo
</span><br>
<span class="quotelev1">&gt; H5Sf.lo H5Tf.lo H5Zf.lo H5FDmpiof.lo HDF5mpio.lo H5FDmpioff.lo  -lsz
</span><br>
<span class="quotelev1">&gt; -lz -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: mpif90 -shared  .libs/H5f90global.o
</span><br>
<span class="quotelev1">&gt; .libs/H5fortran_types.o .libs/H5_ff.o .libs/H5Aff.o .libs/H5Dff.o
</span><br>
<span class="quotelev1">&gt; .libs/H5Eff.o .libs/H5Fff.o .libs/H5Gff.o .libs/H5Iff.o .libs/H5Lff.o
</span><br>
<span class="quotelev1">&gt; .libs/H5Off.o .libs/H5Pff.o .libs/H5Rff.o .libs/H5Sff.o .libs/H5Tff.o
</span><br>
<span class="quotelev1">&gt; .libs/H5Zff.o .libs/H5_DBLE_InterfaceInclude.o .libs/H5f90kit.o
</span><br>
<span class="quotelev1">&gt; .libs/H5_f.o .libs/H5Af.o .libs/H5Df.o .libs/H5Ef.o .libs/H5Ff.o
</span><br>
<span class="quotelev1">&gt; .libs/H5Gf.o .libs/H5If.o .libs/H5Lf.o .libs/H5Of.o .libs/H5Pf.o
</span><br>
<span class="quotelev1">&gt; .libs/H5Rf.o .libs/H5Sf.o .libs/H5Tf.o .libs/H5Zf.o .libs/H5FDmpiof.o
</span><br>
<span class="quotelev1">&gt; .libs/HDF5mpio.o .libs/H5FDmpioff.o    -lmpi -lsz -lz -lm  -m64
</span><br>
<span class="quotelev1">&gt; -mtune=generic -rpath=/usr/lib64/openmpi/1.4-icc/lib   -soname
</span><br>
<span class="quotelev1">&gt; libhdf5_fortran.so.6 -o .libs/libhdf5_fortran.so.6.0.4
</span><br>
<span class="quotelev1">&gt; ifort: command line warning #10156: ignoring option '-r'; no argument required
</span><br>
<span class="quotelev1">&gt; ifort: command line warning #10156: ignoring option '-s'; no argument required
</span><br>
<span class="quotelev1">&gt; ld: libhdf5_fortran.so.6: No such file: No such file or directory
</span><br>
<span class="quotelev1">&gt; make[1]: *** [libhdf5_fortran.la] Fehler 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hdf5 builds fine with static libraries only, but they become huge. It
</span><br>
<span class="quotelev1">&gt; looks like libtool or mpif90 or something else is calling ifort with
</span><br>
<span class="quotelev1">&gt; the wrong options. Any idea on how to fix this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards, G&#195;&#182;tz Waschk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14399.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Shared memory"</a>
<li><strong>Previous message:</strong> <a href="14397.php">G&#246;tz Waschk: "[OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>In reply to:</strong> <a href="14397.php">G&#246;tz Waschk: "[OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14401.php">Tim Prince: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
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
