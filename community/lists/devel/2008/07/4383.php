<?
$subject_val = "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 20 15:13:54 2008" -->
<!-- isoreceived="20080720191354" -->
<!-- sent="Sun, 20 Jul 2008 21:13:48 +0200" -->
<!-- isosent="20080720191348" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Help on building openmpi with &amp;quot;-Wl, --as-needed	-Wl, --no-undefined&amp;quot;" -->
<!-- id="20080720191347.GD25838_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="e7f875700807192029x320c69c7gb29fd5d7332d50a2_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-20 15:13:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4384.php">Jeff Squyres: "[OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<li><strong>Previous message:</strong> <a href="4382.php">Funda Wang: "[OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;"</a>
<li><strong>In reply to:</strong> <a href="4382.php">Funda Wang: "[OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4388.php">Brian W. Barrett: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<li><strong>Reply:</strong> <a href="4388.php">Brian W. Barrett: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Funda Wang wrote on Sun, Jul 20, 2008 at 05:29:57AM CEST:
<br>
<span class="quotelev1">&gt; I'm currently building openmpi 1.2.6 under Mandriva cooker, and its
</span><br>
<span class="quotelev1">&gt; default LDFLAGS is &quot;-Wl,--as-needed -Wl,--no-undefined&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But openmpi 1.2.6 builds failed with:
</span><br>
<span class="quotelev1">&gt; libtool: link: g++ -shared -nostdlib
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/i586-manbo-linux-gnu/4.3.1/../../../crti.o
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/i586-manbo-linux-gnu/4.3.1/crtbeginS.o  .libs/mpicxx.o
</span><br>
<span class="quotelev1">&gt; .libs/intercepts.o .libs/comm.o .libs/datatype.o .libs/file.o
</span><br>
<span class="quotelev1">&gt; .libs/win.o   -lnsl -lutil -L/usr/lib/gcc/i586-manbo-linux-gnu/4.3.1
</span><br>
<span class="quotelev1">&gt; -L/usr/lib/gcc/i586-manbo-linux-gnu/4.3.1/../../.. -lstdc++ -lm
</span><br>
<span class="quotelev1">&gt; -lpthread -lc -lgcc_s
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/i586-manbo-linux-gnu/4.3.1/crtendS.o
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/i586-manbo-linux-gnu/4.3.1/../../../crtn.o  -march=i586
</span><br>
<span class="quotelev1">&gt; -mtune=generic -pthread -Wl,--no-undefined   -pthread -Wl,-soname
</span><br>
<span class="quotelev1">&gt; -Wl,libmpi_cxx.so.0 -o .libs/libmpi_cxx.so.0.0.0
</span><br>
<span class="quotelev1">&gt; .libs/mpicxx.o: In function `Errhandler':
</span><br>
<span class="quotelev1">&gt; /home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/cxx/errhandler.h:30:
</span><br>
<span class="quotelev1">&gt; undefined reference to `ompi_mpi_errors_are_fatal'
</span><br>
<p>I suppose ompi/mpi/cxx/Makefile.am is missing some libmpi_cxx_la_LIBADD
<br>
line.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4384.php">Jeff Squyres: "[OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<li><strong>Previous message:</strong> <a href="4382.php">Funda Wang: "[OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;"</a>
<li><strong>In reply to:</strong> <a href="4382.php">Funda Wang: "[OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed -Wl, --no-undefined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4388.php">Brian W. Barrett: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<li><strong>Reply:</strong> <a href="4388.php">Brian W. Barrett: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
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
