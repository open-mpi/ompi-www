<?
$subject_val = "Re: [OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 11:35:27 2009" -->
<!-- isoreceived="20090224163527" -->
<!-- sent="Tue, 24 Feb 2009 11:35:23 -0500 (EST)" -->
<!-- isosent="20090224163523" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers" -->
<!-- id="alpine.DEB.1.10.0902241132520.4830_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49A2FC2B.8040902_at_bu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-24 11:35:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5522.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Previous message:</strong> <a href="5520.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>In reply to:</strong> <a href="5513.php">Wayne Gilmore: "[OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5524.php">Wayne Gilmore: "Re: [OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers"</a>
<li><strong>Reply:</strong> <a href="5524.php">Wayne Gilmore: "Re: [OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Wayne -
<br>
<p>Sorry for the delay.  I'm the author of that code, and am currently trying 
<br>
to finish my dissertation, so I've been a bit behind.
<br>
<p>Anyway, at present, the compiler_args field only works on a single token. 
<br>
So you can't have something looking for -tp p7.  I thought about how to do 
<br>
this, but never got a chance to add it to the code base.  I'm not sure 
<br>
when/if that feature will be added.  If you have some time, the code lives 
<br>
in opal/tools/wrappers/opal_wrapper.c, if you want to have a look.
<br>
<p>Good luck,
<br>
<p>Brian
<br>
<p><p>On Mon, 23 Feb 2009, Wayne Gilmore wrote:
<br>
<p><span class="quotelev1">&gt; I sent this to the users mailing list buy maybe this is a better place for 
</span><br>
<span class="quotelev1">&gt; it. Can anyone help with this??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to use the compiler_args field in the wrappers script to deal
</span><br>
<span class="quotelev1">&gt; with 32 bit compiles on our cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using Portland Group compilers and use the following for 32 bit
</span><br>
<span class="quotelev1">&gt; builds: -tp p7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've created a separate stanza in the wrapper but I am not able to use
</span><br>
<span class="quotelev1">&gt; the whole option &quot;-tp p7&quot; for the compiler_args. It only works if I do
</span><br>
<span class="quotelev1">&gt; compiler_args=p7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to provide compiler_args with arguments that contain a
</span><br>
<span class="quotelev1">&gt; space?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This would eliminate cases where 'p7' would appear elsewhere in the
</span><br>
<span class="quotelev1">&gt; compile line and be falsely recognized as a 32 bit build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is some additional information from my build:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For a regular 64 bit build:
</span><br>
<span class="quotelev1">&gt; (no problems here, works fine)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; katana:~ % mpicc --showme
</span><br>
<span class="quotelev1">&gt; pgcc -D_REENTRANT
</span><br>
<span class="quotelev1">&gt; -I/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/include
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib
</span><br>
<span class="quotelev1">&gt; -L/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib
</span><br>
<span class="quotelev1">&gt; -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil
</span><br>
<span class="quotelev1">&gt; -lpthread -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For a 32 bit build when compiler_args is set to &quot;-tp p7&quot; in the wrapper:
</span><br>
<span class="quotelev1">&gt; (note that in this case is does not pick up the lib32 and include32 dirs)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; katana:share/openmpi % mpicc -tp p7 --showme
</span><br>
<span class="quotelev1">&gt; pgcc -D_REENTRANT
</span><br>
<span class="quotelev1">&gt; -I/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/include
</span><br>
<span class="quotelev1">&gt; -tp p7 -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib
</span><br>
<span class="quotelev1">&gt; -L/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib
</span><br>
<span class="quotelev1">&gt; -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil
</span><br>
<span class="quotelev1">&gt; -lpthread -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For a 32 bit build when compiler_args is set to &quot;p7&quot; in the wrapper
</span><br>
<span class="quotelev1">&gt; (note that in this case it does pick up the lib32 and include32 dirs)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; katana:share/openmpi % mpicc -tp p7 --showme
</span><br>
<span class="quotelev1">&gt; pgcc -D_REENTRANT
</span><br>
<span class="quotelev1">&gt; -I/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/include32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -I/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/include32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -tp p7 -Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib32
</span><br>
<span class="quotelev1">&gt; -L/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib32
</span><br>
<span class="quotelev1">&gt; -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil
</span><br>
<span class="quotelev1">&gt; -lpthread -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the mpicc-wrapper-data.txt file that I am using: (with
</span><br>
<span class="quotelev1">&gt; compiler_args set to &quot;p7&quot; only. This works, but if I set it to &quot;-tp p7&quot;
</span><br>
<span class="quotelev1">&gt; it fails to pick up the info in the stanza)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compiler_args=
</span><br>
<span class="quotelev1">&gt; project=Open MPI
</span><br>
<span class="quotelev1">&gt; project_short=OMPI
</span><br>
<span class="quotelev1">&gt; version=1.3
</span><br>
<span class="quotelev1">&gt; language=C
</span><br>
<span class="quotelev1">&gt; compiler_env=CC
</span><br>
<span class="quotelev1">&gt; compiler_flags_env=CFLAGS
</span><br>
<span class="quotelev1">&gt; compiler=pgcc
</span><br>
<span class="quotelev1">&gt; extra_includes=
</span><br>
<span class="quotelev1">&gt; preprocessor_flags=-D_REENTRANT
</span><br>
<span class="quotelev1">&gt; compiler_flags=
</span><br>
<span class="quotelev1">&gt; linker_flags=-Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib
</span><br>
<span class="quotelev1">&gt; libs=-lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl
</span><br>
<span class="quotelev1">&gt; -lutil -lpthread -ldl
</span><br>
<span class="quotelev1">&gt; required_file=
</span><br>
<span class="quotelev1">&gt; includedir=${includedir}
</span><br>
<span class="quotelev1">&gt; libdir=${libdir}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compiler_args=p7
</span><br>
<span class="quotelev1">&gt; project=Open MPI
</span><br>
<span class="quotelev1">&gt; project_short=OMPI
</span><br>
<span class="quotelev1">&gt; version=1.3
</span><br>
<span class="quotelev1">&gt; language=C
</span><br>
<span class="quotelev1">&gt; compiler_env=CC
</span><br>
<span class="quotelev1">&gt; compiler_flags_env=CFLAGS
</span><br>
<span class="quotelev1">&gt; compiler=pgcc
</span><br>
<span class="quotelev1">&gt; extra_includes=
</span><br>
<span class="quotelev1">&gt; preprocessor_flags=-D_REENTRANT
</span><br>
<span class="quotelev1">&gt; -I/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/include32
</span><br>
<span class="quotelev1">&gt; compiler_flags=
</span><br>
<span class="quotelev1">&gt; linker_flags=-Wl,-rpath
</span><br>
<span class="quotelev1">&gt; -Wl,/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib32
</span><br>
<span class="quotelev1">&gt; libs=-lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl
</span><br>
<span class="quotelev1">&gt; -lutil -lpthread -ldl
</span><br>
<span class="quotelev1">&gt; required_file=
</span><br>
<span class="quotelev1">&gt; includedir=/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/include32
</span><br>
<span class="quotelev1">&gt; libdir=/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib32 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5522.php">Eugene Loh: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>Previous message:</strong> <a href="5520.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<li><strong>In reply to:</strong> <a href="5513.php">Wayne Gilmore: "[OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5524.php">Wayne Gilmore: "Re: [OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers"</a>
<li><strong>Reply:</strong> <a href="5524.php">Wayne Gilmore: "Re: [OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers"</a>
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
