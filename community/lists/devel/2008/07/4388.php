<?
$subject_val = "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 19:08:50 2008" -->
<!-- isoreceived="20080721230850" -->
<!-- sent="Mon, 21 Jul 2008 19:08:45 -0400" -->
<!-- isosent="20080721230845" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Help on building openmpi with &amp;quot;-Wl, --as-needed	-Wl, --no-undefined&amp;quot;" -->
<!-- id="b4974c1caeeba369e034d54d8d8e9b65_at_localhost" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20080720191347.GD25838_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-21 19:08:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4389.php">Jeff Squyres: "Re: [OMPI devel] MCA base component changes"</a>
<li><strong>Previous message:</strong> <a href="4387.php">Brian W. Barrett: "Re: [OMPI devel] MCA base component changes"</a>
<li><strong>In reply to:</strong> <a href="4383.php">Ralf Wildenhues: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4402.php">Jeff Squyres: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<li><strong>Reply:</strong> <a href="4402.php">Jeff Squyres: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 20 Jul 2008 21:13:48 +0200, Ralf Wildenhues
<br>
&lt;Ralf.Wildenhues_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; * Funda Wang wrote on Sun, Jul 20, 2008 at 05:29:57AM CEST:
</span><br>
<span class="quotelev2">&gt;&gt; I'm currently building openmpi 1.2.6 under Mandriva cooker, and its
</span><br>
<span class="quotelev2">&gt;&gt; default LDFLAGS is &quot;-Wl,--as-needed -Wl,--no-undefined&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But openmpi 1.2.6 builds failed with:
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: g++ -shared -nostdlib
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i586-manbo-linux-gnu/4.3.1/../../../crti.o
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i586-manbo-linux-gnu/4.3.1/crtbeginS.o  .libs/mpicxx.o
</span><br>
<span class="quotelev2">&gt;&gt; .libs/intercepts.o .libs/comm.o .libs/datatype.o .libs/file.o
</span><br>
<span class="quotelev2">&gt;&gt; .libs/win.o   -lnsl -lutil -L/usr/lib/gcc/i586-manbo-linux-gnu/4.3.1
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib/gcc/i586-manbo-linux-gnu/4.3.1/../../.. -lstdc++ -lm
</span><br>
<span class="quotelev2">&gt;&gt; -lpthread -lc -lgcc_s
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i586-manbo-linux-gnu/4.3.1/crtendS.o
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i586-manbo-linux-gnu/4.3.1/../../../crtn.o  -march=i586
</span><br>
<span class="quotelev2">&gt;&gt; -mtune=generic -pthread -Wl,--no-undefined   -pthread -Wl,-soname
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,libmpi_cxx.so.0 -o .libs/libmpi_cxx.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; .libs/mpicxx.o: In function `Errhandler':
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
/home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/cxx/errhandler.h:30:
<br>
<span class="quotelev2">&gt;&gt; undefined reference to `ompi_mpi_errors_are_fatal'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I suppose ompi/mpi/cxx/Makefile.am is missing some libmpi_cxx_la_LIBADD
</span><br>
<span class="quotelev1">&gt; line.
</span><br>
<p>Yeah, Ralf's correct -- Open MPI's missing the LIBADD fields to cause the
<br>
C++, F77, and F90 bindings to not link against libmpi.so (which they depend
<br>
upon).
<br>
<p>There's no good solution to this problem in Open MPI 1.2.6, other than to
<br>
not build with -Wl,--no-undefined.  The fix requires rebuilding the
<br>
Makefile, which is a little dicy from an Open MPI release tarball. 
<br>
Hopefully, one of the current developers can patch this for upcoming
<br>
releases.  Unfortunately, most of the time, such a link isn't really
<br>
required, so this never came up before.  It does seem weird that a
<br>
distribution would enable that option by default, since many projects don't
<br>
properly handle the situation well.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4389.php">Jeff Squyres: "Re: [OMPI devel] MCA base component changes"</a>
<li><strong>Previous message:</strong> <a href="4387.php">Brian W. Barrett: "Re: [OMPI devel] MCA base component changes"</a>
<li><strong>In reply to:</strong> <a href="4383.php">Ralf Wildenhues: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4402.php">Jeff Squyres: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<li><strong>Reply:</strong> <a href="4402.php">Jeff Squyres: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
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
