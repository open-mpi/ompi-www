<?
$subject_val = "Re: [OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 15:25:29 2009" -->
<!-- isoreceived="20090224202529" -->
<!-- sent="Tue, 24 Feb 2009 15:24:51 -0500" -->
<!-- isosent="20090224202451" -->
<!-- name="Wayne Gilmore" -->
<!-- email="waygil_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers" -->
<!-- id="49A45793.5050703_at_bu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.1.10.0902241132520.4830_at_marvin.we-be-smart.org" -->
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
<strong>From:</strong> Wayne Gilmore (<em>waygil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-24 15:24:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5525.php">Eugene Loh: "[OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>Previous message:</strong> <a href="5523.php">Jeff Squyres: "[OMPI devel] OMPI v1.3.1rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="5521.php">Brian W. Barrett: "Re: [OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No Worries.  Thanks for the reply!
<br>
<p>Wayne
<br>
<p>Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; Hi Wayne -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the delay.  I'm the author of that code, and am currently 
</span><br>
<span class="quotelev1">&gt; trying to finish my dissertation, so I've been a bit behind.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, at present, the compiler_args field only works on a single 
</span><br>
<span class="quotelev1">&gt; token. So you can't have something looking for -tp p7.  I thought about 
</span><br>
<span class="quotelev1">&gt; how to do this, but never got a chance to add it to the code base.  I'm 
</span><br>
<span class="quotelev1">&gt; not sure when/if that feature will be added.  If you have some time, the 
</span><br>
<span class="quotelev1">&gt; code lives in opal/tools/wrappers/opal_wrapper.c, if you want to have a 
</span><br>
<span class="quotelev1">&gt; look.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good luck,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 23 Feb 2009, Wayne Gilmore wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I sent this to the users mailing list buy maybe this is a better place 
</span><br>
<span class="quotelev2">&gt;&gt; for it. Can anyone help with this??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to use the compiler_args field in the wrappers script to deal
</span><br>
<span class="quotelev2">&gt;&gt; with 32 bit compiles on our cluster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using Portland Group compilers and use the following for 32 bit
</span><br>
<span class="quotelev2">&gt;&gt; builds: -tp p7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've created a separate stanza in the wrapper but I am not able to use
</span><br>
<span class="quotelev2">&gt;&gt; the whole option &quot;-tp p7&quot; for the compiler_args. It only works if I do
</span><br>
<span class="quotelev2">&gt;&gt; compiler_args=p7
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to provide compiler_args with arguments that contain a
</span><br>
<span class="quotelev2">&gt;&gt; space?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This would eliminate cases where 'p7' would appear elsewhere in the
</span><br>
<span class="quotelev2">&gt;&gt; compile line and be falsely recognized as a 32 bit build.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is some additional information from my build:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For a regular 64 bit build:
</span><br>
<span class="quotelev2">&gt;&gt; (no problems here, works fine)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; katana:~ % mpicc --showme
</span><br>
<span class="quotelev2">&gt;&gt; pgcc -D_REENTRANT
</span><br>
<span class="quotelev2">&gt;&gt; -I/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/include 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,-rpath
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib
</span><br>
<span class="quotelev2">&gt;&gt; -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; -lpthread -ldl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For a 32 bit build when compiler_args is set to &quot;-tp p7&quot; in the wrapper:
</span><br>
<span class="quotelev2">&gt;&gt; (note that in this case is does not pick up the lib32 and include32 dirs)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; katana:share/openmpi % mpicc -tp p7 --showme
</span><br>
<span class="quotelev2">&gt;&gt; pgcc -D_REENTRANT
</span><br>
<span class="quotelev2">&gt;&gt; -I/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/include 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -tp p7 -Wl,-rpath
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib
</span><br>
<span class="quotelev2">&gt;&gt; -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; -lpthread -ldl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For a 32 bit build when compiler_args is set to &quot;p7&quot; in the wrapper
</span><br>
<span class="quotelev2">&gt;&gt; (note that in this case it does pick up the lib32 and include32 dirs)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; katana:share/openmpi % mpicc -tp p7 --showme
</span><br>
<span class="quotelev2">&gt;&gt; pgcc -D_REENTRANT
</span><br>
<span class="quotelev2">&gt;&gt; -I/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/include32 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -I/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/include32 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -tp p7 -Wl,-rpath
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib32 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -L/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib32
</span><br>
<span class="quotelev2">&gt;&gt; -lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil
</span><br>
<span class="quotelev2">&gt;&gt; -lpthread -ldl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the mpicc-wrapper-data.txt file that I am using: (with
</span><br>
<span class="quotelev2">&gt;&gt; compiler_args set to &quot;p7&quot; only. This works, but if I set it to &quot;-tp p7&quot;
</span><br>
<span class="quotelev2">&gt;&gt; it fails to pick up the info in the stanza)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; compiler_args=
</span><br>
<span class="quotelev2">&gt;&gt; project=Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; project_short=OMPI
</span><br>
<span class="quotelev2">&gt;&gt; version=1.3
</span><br>
<span class="quotelev2">&gt;&gt; language=C
</span><br>
<span class="quotelev2">&gt;&gt; compiler_env=CC
</span><br>
<span class="quotelev2">&gt;&gt; compiler_flags_env=CFLAGS
</span><br>
<span class="quotelev2">&gt;&gt; compiler=pgcc
</span><br>
<span class="quotelev2">&gt;&gt; extra_includes=
</span><br>
<span class="quotelev2">&gt;&gt; preprocessor_flags=-D_REENTRANT
</span><br>
<span class="quotelev2">&gt;&gt; compiler_flags=
</span><br>
<span class="quotelev2">&gt;&gt; linker_flags=-Wl,-rpath
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib
</span><br>
<span class="quotelev2">&gt;&gt; libs=-lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl
</span><br>
<span class="quotelev2">&gt;&gt; -lutil -lpthread -ldl
</span><br>
<span class="quotelev2">&gt;&gt; required_file=
</span><br>
<span class="quotelev2">&gt;&gt; includedir=${includedir}
</span><br>
<span class="quotelev2">&gt;&gt; libdir=${libdir}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; compiler_args=p7
</span><br>
<span class="quotelev2">&gt;&gt; project=Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; project_short=OMPI
</span><br>
<span class="quotelev2">&gt;&gt; version=1.3
</span><br>
<span class="quotelev2">&gt;&gt; language=C
</span><br>
<span class="quotelev2">&gt;&gt; compiler_env=CC
</span><br>
<span class="quotelev2">&gt;&gt; compiler_flags_env=CFLAGS
</span><br>
<span class="quotelev2">&gt;&gt; compiler=pgcc
</span><br>
<span class="quotelev2">&gt;&gt; extra_includes=
</span><br>
<span class="quotelev2">&gt;&gt; preprocessor_flags=-D_REENTRANT
</span><br>
<span class="quotelev2">&gt;&gt; -I/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/include32 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; compiler_flags=
</span><br>
<span class="quotelev2">&gt;&gt; linker_flags=-Wl,-rpath
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib32 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libs=-lmpi -lopen-rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl
</span><br>
<span class="quotelev2">&gt;&gt; -lutil -lpthread -ldl
</span><br>
<span class="quotelev2">&gt;&gt; required_file=
</span><br>
<span class="quotelev2">&gt;&gt; includedir=/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/include32 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libdir=/project/scv/waygil/local/IT/ofedmpi-1.2.5.5/mpi/pgi/openmpi-1.3/lib32 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5525.php">Eugene Loh: "[OMPI devel] mca_btl_sm_sendi question"</a>
<li><strong>Previous message:</strong> <a href="5523.php">Jeff Squyres: "[OMPI devel] OMPI v1.3.1rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="5521.php">Brian W. Barrett: "Re: [OMPI devel] compiler_args in wrapper-data.txt files with Portland Group Compilers"</a>
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
