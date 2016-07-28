<?
$subject_val = "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 09:54:56 2008" -->
<!-- isoreceived="20080723135456" -->
<!-- sent="Wed, 23 Jul 2008 09:54:50 -0400" -->
<!-- isosent="20080723135450" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Help on building openmpi with &amp;quot;-Wl, --as-needed	-Wl, --no-undefined&amp;quot;" -->
<!-- id="148248A4-A827-40A4-9C73-8D73CBD476C3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b4974c1caeeba369e034d54d8d8e9b65_at_localhost" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 09:54:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4403.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>Previous message:</strong> <a href="4401.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>In reply to:</strong> <a href="4388.php">Brian W. Barrett: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4404.php">Ralf Wildenhues: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<li><strong>Reply:</strong> <a href="4404.php">Ralf Wildenhues: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian / Ralf --
<br>
<p>Is the attached patch what you're talking about?
<br>
<p>If so, I'll commit to trunk, v1.2, and v1.3.
<br>
<p><p>On Jul 21, 2008, at 7:08 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Sun, 20 Jul 2008 21:13:48 +0200, Ralf Wildenhues
</span><br>
<span class="quotelev1">&gt; &lt;Ralf.Wildenhues_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; * Funda Wang wrote on Sun, Jul 20, 2008 at 05:29:57AM CEST:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm currently building openmpi 1.2.6 under Mandriva cooker, and its
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default LDFLAGS is &quot;-Wl,--as-needed -Wl,--no-undefined&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But openmpi 1.2.6 builds failed with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: link: g++ -shared -nostdlib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/gcc/i586-manbo-linux-gnu/4.3.1/../../../crti.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/gcc/i586-manbo-linux-gnu/4.3.1/crtbeginS.o  .libs/mpicxx.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .libs/intercepts.o .libs/comm.o .libs/datatype.o .libs/file.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .libs/win.o   -lnsl -lutil -L/usr/lib/gcc/i586-manbo-linux-gnu/4.3.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L/usr/lib/gcc/i586-manbo-linux-gnu/4.3.1/../../.. -lstdc++ -lm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lpthread -lc -lgcc_s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/gcc/i586-manbo-linux-gnu/4.3.1/crtendS.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/gcc/i586-manbo-linux-gnu/4.3.1/../../../crtn.o  -march=i586
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mtune=generic -pthread -Wl,--no-undefined   -pthread -Wl,-soname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Wl,libmpi_cxx.so.0 -o .libs/libmpi_cxx.so.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .libs/mpicxx.o: In function `Errhandler':
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; /home/fwang/rpm/BUILD/openmpi-1.2.6/ompi/mpi/cxx/../../../ompi/mpi/ 
</span><br>
<span class="quotelev1">&gt; cxx/errhandler.h:30:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; undefined reference to `ompi_mpi_errors_are_fatal'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suppose ompi/mpi/cxx/Makefile.am is missing some  
</span><br>
<span class="quotelev2">&gt;&gt; libmpi_cxx_la_LIBADD
</span><br>
<span class="quotelev2">&gt;&gt; line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yeah, Ralf's correct -- Open MPI's missing the LIBADD fields to  
</span><br>
<span class="quotelev1">&gt; cause the
</span><br>
<span class="quotelev1">&gt; C++, F77, and F90 bindings to not link against libmpi.so (which they  
</span><br>
<span class="quotelev1">&gt; depend
</span><br>
<span class="quotelev1">&gt; upon).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's no good solution to this problem in Open MPI 1.2.6, other  
</span><br>
<span class="quotelev1">&gt; than to
</span><br>
<span class="quotelev1">&gt; not build with -Wl,--no-undefined.  The fix requires rebuilding the
</span><br>
<span class="quotelev1">&gt; Makefile, which is a little dicy from an Open MPI release tarball.
</span><br>
<span class="quotelev1">&gt; Hopefully, one of the current developers can patch this for upcoming
</span><br>
<span class="quotelev1">&gt; releases.  Unfortunately, most of the time, such a link isn't really
</span><br>
<span class="quotelev1">&gt; required, so this never came up before.  It does seem weird that a
</span><br>
<span class="quotelev1">&gt; distribution would enable that option by default, since many  
</span><br>
<span class="quotelev1">&gt; projects don't
</span><br>
<span class="quotelev1">&gt; properly handle the situation well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4402/bindings-libtool.patch">bindings-libtool.patch</a>
</ul>
<!-- attachment="bindings-libtool.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4403.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>Previous message:</strong> <a href="4401.php">Jeff Squyres: "Re: [OMPI devel] Fwd: [OMPI bugs] [Open MPI] #1250: Performance problem on SM"</a>
<li><strong>In reply to:</strong> <a href="4388.php">Brian W. Barrett: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4404.php">Ralf Wildenhues: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
<li><strong>Reply:</strong> <a href="4404.php">Ralf Wildenhues: "Re: [OMPI devel] Help on building openmpi with &quot;-Wl, --as-needed	-Wl, --no-undefined&quot;"</a>
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
