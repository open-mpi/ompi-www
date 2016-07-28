<?
$subject_val = "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  6 08:43:14 2010" -->
<!-- isoreceived="20101006124314" -->
<!-- sent="Wed, 06 Oct 2010 05:43:02 -0700" -->
<!-- isosent="20101006124302" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran" -->
<!-- id="4CAC6ED6.3030106_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-06 08:43:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14402.php">Götz Waschk: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="14400.php">jody: "[OMPI users] my leak or OpenMPI's leak?"</a>
<li><strong>In reply to:</strong> <a href="14397.php">G&#246;tz Waschk: "[OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14402.php">Götz Waschk: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Reply:</strong> <a href="14402.php">Götz Waschk: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;On 10/6/2010 12:09 AM, G&#246;tz Waschk wrote:
<br>
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
Do -Wl,-rpath and -Wl,-soname= work any better?
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14402.php">Götz Waschk: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="14400.php">jody: "[OMPI users] my leak or OpenMPI's leak?"</a>
<li><strong>In reply to:</strong> <a href="14397.php">G&#246;tz Waschk: "[OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14402.php">Götz Waschk: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
<li><strong>Reply:</strong> <a href="14402.php">Götz Waschk: "Re: [OMPI users] hdf5 build error using openmpi and Intel Fortran"</a>
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
