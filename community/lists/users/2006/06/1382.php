<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun  7 10:59:22 2006" -->
<!-- isoreceived="20060607145922" -->
<!-- sent="Wed, 7 Jun 2006 10:56:48 -0400 (EDT)" -->
<!-- isosent="20060607145648" -->
<!-- name="Hugh Merz" -->
<!-- email="merz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error for open-mpi application" -->
<!-- id="Pine.LNX.4.64.0606071036570.4712_at_snipe.cita.utoronto.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="41def11e0606070720j2a02df8enf8984bdfc98e5f46_at_mail.gmail.com" -->
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
<strong>From:</strong> Hugh Merz (<em>merz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-07 10:56:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1383.php">Brian Barrett: "Re: [OMPI users] error for open-mpi application"</a>
<li><strong>Previous message:</strong> <a href="1381.php">Weihua Li: "[OMPI users] error for open-mpi application"</a>
<li><strong>In reply to:</strong> <a href="1381.php">Weihua Li: "[OMPI users] error for open-mpi application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1383.php">Brian Barrett: "Re: [OMPI users] error for open-mpi application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; However, when I used openmpi to compile a application program( Molecular
</span><br>
<span class="quotelev1">&gt; dynamcis code: Amber9), error messages are given:
</span><br>
<p>I think you would be better off using the OpenMPI wrapper compilers rather than trying to link the mpi libraries by hand.  For mo
<br>
re information read the FAQ, which contains a section on how to compile mpi programs with OpenMPI:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=mpi-apps">http://www.open-mpi.org/faq/?category=mpi-apps</a>
<br>
<p>Likely all that is required is to change the Makefile for Amber9.
<br>
<p><span class="quotelev1">&gt; For PMEMD module:
</span><br>
<p>For example, use mpif90 instead of pgf90 here:
<br>
<p><span class="quotelev1">&gt; pgf90  -o pmemd gbl_constants.o gbl_datatypes.o state_info.o file_io_dat.o
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; -L/home/ytang/gdata/whli/openmpi/lib -lmpich
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -lmpich
</span><br>
<p>This is the error - there is no libmpich in OpenMPI.
<br>
<p><span class="quotelev1">&gt; make[1]: *** [pmemd] Error 2
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/gdata/lun8/ytang/whli/amber9/src/pmemd/src'
</span><br>
<span class="quotelev1">&gt; make: *** [install] Error 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For sander module:
</span><br>
<p>Presumably this was not compiled with mpif90 either, but you did not send the command you used to compile it.
<br>
<p><span class="quotelev1">&gt; ../lmod/lmod.a ../lapack/lapack.a ../blas/blas.a \
</span><br>
<span class="quotelev1">&gt; ../lib/nxtsec.o ../lib/sys.a  -L/home/ytang/gdata/whli/openmpi/lib -lmpi_f90
</span><br>
<span class="quotelev1">&gt; -lmpi -lorte -lopal -lutil -lnsl -lpthread -ldl -Wl,--export-dynamic -lm
</span><br>
<span class="quotelev1">&gt; -lutil -lnsl -lpthread -ldl
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: skipping incompatible
</span><br>
<span class="quotelev1">&gt; /home/ytang/gdata/whli/openmpi/lib/libmpi_f90.a when searching for -lmpi_f90
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: cannot find -lmpi_f90
</span><br>
<span class="quotelev1">&gt; make[1]: *** [sander.MPI] Error 2
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/gdata/lun8/ytang/whli/amber9/src/sander'
</span><br>
<span class="quotelev1">&gt; make: *** [parallel] Error 2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know it must be something wrong with the installation of open-mpi, but I
</span><br>
<span class="quotelev1">&gt; don't know where it is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you please give me some advice?
</span><br>
<p>Read the FAQ.  I also suggest you email the Amber mailing list and read through any documentation on their site, which looks quite extensive.
<br>
<p>Hugh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1383.php">Brian Barrett: "Re: [OMPI users] error for open-mpi application"</a>
<li><strong>Previous message:</strong> <a href="1381.php">Weihua Li: "[OMPI users] error for open-mpi application"</a>
<li><strong>In reply to:</strong> <a href="1381.php">Weihua Li: "[OMPI users] error for open-mpi application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1383.php">Brian Barrett: "Re: [OMPI users] error for open-mpi application"</a>
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
