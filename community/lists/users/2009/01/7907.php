<?
$subject_val = "Re: [OMPI users] Using compiler_args in wrappers with Portland Group Compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 20:11:18 2009" -->
<!-- isoreceived="20090131011118" -->
<!-- sent="Fri, 30 Jan 2009 20:10:43 -0500" -->
<!-- isosent="20090131011043" -->
<!-- name="Wayne Gilmore" -->
<!-- email="waygil_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using compiler_args in wrappers with Portland Group Compilers" -->
<!-- id="4983A513.8000005_at_bu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Using compiler_args in wrappers with Portland Group Compilers" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using compiler_args in wrappers with Portland Group Compilers<br>
<strong>From:</strong> Wayne Gilmore (<em>waygil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-30 20:10:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7908.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>Previous message:</strong> <a href="7906.php">Goldstein, Bruce E: "Re: [OMPI users] Installing OpenMPI for Intel Fortran on OSX??"</a>
<li><strong>Maybe in reply to:</strong> <a href="7872.php">Wayne Gilmore: "[OMPI users] Using compiler_args in wrappers with Portland Group Compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1"> &gt;You should be able to include options just as you want them to appear on
</span><br>
<span class="quotelev1"> &gt;the command line. Can you send me both the .txt file you edited as well
</span><br>
<span class="quotelev1"> &gt;as the output of mpicc -showme (or whichever compiler you are testing)?
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;Thanks,
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;Brian
</span><br>
<p>For a regular 64 bit build:
<br>
(no problems here, works fine)
<br>
<p>katana:~ % mpicc --showme
<br>
pgcc -D_REENTRANT
<br>
-I/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/include
<br>
-Wl,-rpath
<br>
-Wl,/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib
<br>
-L/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib
<br>
-lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil
<br>
-lpthread -ldl
<br>
<p>For a 32 bit build when compiler_args is set to &quot;-tp p7&quot; in the wrapper:
<br>
(note that in this case is does not pick up the lib32 and include32 dirs)
<br>
<p>katana:share/openmpi % mpicc -tp p7 --showme
<br>
pgcc -D_REENTRANT
<br>
-I/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/include
<br>
-tp p7 -Wl,-rpath
<br>
-Wl,/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib
<br>
-L/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib
<br>
-lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil
<br>
-lpthread -ldl
<br>
<p>For a 32 bit build when compiler_args is set to &quot;p7&quot; in the wrapper
<br>
(note that in this case it does pick up the lib32 and include32 dirs)
<br>
<p>katana:share/openmpi % mpicc -tp p7 --showme
<br>
pgcc -D_REENTRANT
<br>
-I/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/include32 
<br>
<p>-I/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/include32 
<br>
<p>-tp p7 -Wl,-rpath
<br>
-Wl,/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib32
<br>
-L/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib32
<br>
-lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil
<br>
-lpthread -ldl
<br>
<p>Here's the mpicc-wrapper-data.txt file that I am using: (with
<br>
compiler_args set to &quot;p7&quot; only.  This works, but if I set it to &quot;-tp p7&quot;
<br>
it fails to pick up the info in the stanza)
<br>
<p>compiler_args=
<br>
project=Open MPI
<br>
project_short=OMPI
<br>
version=1.3
<br>
language=C
<br>
compiler_env=CC
<br>
compiler_flags_env=CFLAGS
<br>
compiler=pgcc
<br>
extra_includes=
<br>
preprocessor_flags=-D_REENTRANT
<br>
compiler_flags=
<br>
linker_flags=-Wl,-rpath
<br>
-Wl,/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib
<br>
libs=-lmpi -lopen-rte -lopen-pal   -ldl   -Wl,--export-dynamic -lnsl
<br>
-lutil -lpthread -ldl
<br>
required_file=
<br>
includedir=${includedir}
<br>
libdir=${libdir}
<br>
<p>compiler_args=p7
<br>
project=Open MPI
<br>
project_short=OMPI
<br>
version=1.3
<br>
language=C
<br>
compiler_env=CC
<br>
compiler_flags_env=CFLAGS
<br>
compiler=pgcc
<br>
extra_includes=
<br>
preprocessor_flags=-D_REENTRANT
<br>
-I/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/include32
<br>
compiler_flags=
<br>
linker_flags=-Wl,-rpath
<br>
-Wl,/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib32
<br>
libs=-lmpi -lopen-rte -lopen-pal   -ldl   -Wl,--export-dynamic -lnsl
<br>
-lutil -lpthread -ldl
<br>
required_file=
<br>
includedir=/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/include32
<br>
libdir=/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib32
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7908.php">Sangamesh B: "Re: [OMPI users] Fwd: [GE users] Open MPI job fails when run thru SGE"</a>
<li><strong>Previous message:</strong> <a href="7906.php">Goldstein, Bruce E: "Re: [OMPI users] Installing OpenMPI for Intel Fortran on OSX??"</a>
<li><strong>Maybe in reply to:</strong> <a href="7872.php">Wayne Gilmore: "[OMPI users] Using compiler_args in wrappers with Portland Group Compilers"</a>
<!-- nextthread="start" -->
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
