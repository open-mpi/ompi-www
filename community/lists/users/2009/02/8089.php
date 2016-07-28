<?
$subject_val = "[OMPI users] compiler_args in wrapper-data.txt files with Portland Group Compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 18 12:08:05 2009" -->
<!-- isoreceived="20090218170805" -->
<!-- sent="Wed, 18 Feb 2009 12:07:35 -0500" -->
<!-- isosent="20090218170735" -->
<!-- name="Wayne Gilmore" -->
<!-- email="waygil_at_[hidden]" -->
<!-- subject="[OMPI users] compiler_args in wrapper-data.txt files with Portland Group Compilers" -->
<!-- id="499C4057.7040101_at_bu.edu" -->
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
<strong>Subject:</strong> [OMPI users] compiler_args in wrapper-data.txt files with Portland Group Compilers<br>
<strong>From:</strong> Wayne Gilmore (<em>waygil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-18 12:07:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8090.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Ssh problem"</a>
<li><strong>Previous message:</strong> <a href="8088.php">Jeff Squyres: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I sent this to the mailing list last month but did not get any helpful 
<br>
replies.  Can anyone help with this??
<br>
<p>I'm trying to use the compiler_args field in the wrappers script to deal
<br>
with 32 bit compiles on our cluster.
<br>
<p>I'm using Portland Group compilers and use the following for 32 bit
<br>
builds: -tp p7
<br>
<p>I've created a separate stanza in the wrapper but I am not able to use
<br>
the whole option &quot;-tp p7&quot; for the compiler_args. It only works if I do
<br>
compiler_args=p7
<br>
<p>Is there a way to provide compiler_args with arguments that contain a
<br>
space?
<br>
<p>This would eliminate cases where 'p7' would appear elsewhere in the
<br>
compile line and be falsely recognized as a 32 bit build.
<br>
<p>Here is some additional information from my build:
<br>
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
compiler_args set to &quot;p7&quot; only. This works, but if I set it to &quot;-tp p7&quot;
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
libs=-lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl
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
libs=-lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl
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
<li><strong>Next message:</strong> <a href="8090.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Ssh problem"</a>
<li><strong>Previous message:</strong> <a href="8088.php">Jeff Squyres: "Re: [OMPI users] MPI_File_write_ordered does not truncate files"</a>
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
