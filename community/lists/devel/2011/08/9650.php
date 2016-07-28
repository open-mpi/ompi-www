<?
$subject_val = "Re: [OMPI devel] Building Error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 15 20:43:43 2011" -->
<!-- isoreceived="20110816004343" -->
<!-- sent="Mon, 15 Aug 2011 18:43:34 -0600" -->
<!-- isosent="20110816004334" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Building Error" -->
<!-- id="A2629988-65A4-448A-B0A0-1378E3678E3B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BD1EB4C5-0E3C-4C5C-91E1-466C0C362DA4_at_usgs.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Building Error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-15 20:43:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9651.php">Ralph Castain: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>Previous message:</strong> <a href="9649.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>In reply to:</strong> <a href="9649.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9653.php">Matthew Russell: "Re: [OMPI devel] Building Error"</a>
<li><strong>Reply:</strong> <a href="9653.php">Matthew Russell: "Re: [OMPI devel] Building Error"</a>
<li><strong>Reply:</strong> <a href="9655.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: I build OMPI on Mac OS-X (Snow Leopard) every day, without adding any extra flags, without problem. The citation below relates to something from a long time ago, I believe - haven't seen that problem in quite some time.
<br>
<p>I do not, however, use PGI. We regularly have problems with PGI on a variety of systems, and I suspect you are hitting one here - but can't confirm it as we don't have PGI licenses to use for testing.
<br>
<p>The Xgrid support is broken, but has nothing to do with the problem you describe. Just means you can't launch via Xgrid.
<br>
<p><p>On Aug 15, 2011, at 2:53 PM, Larry Baker wrote:
<br>
<p><span class="quotelev1">&gt; Matthew,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have the same type of error on a completely different software package on Mac OS X.  The error occurs because of the way that Mac OS X searches for -lutil.  If the libutil.a ORTE needs is theirs, i.e., not the system libutil.dylib, then you have exactly the same problem I did.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are my notes for the fix using gcc.  You will have to find out the equivalent method to pass the -search_paths_first linker option using pgcc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # Mac OS X searches for shared libraries before static libraries.  Thus, -L&lt;ours&gt; -lutil finds the system libutil.dylib
</span><br>
<span class="quotelev2">&gt;&gt; # before our libutil.a, which causes undefined references in the link step because it is using the wrong library.  The
</span><br>
<span class="quotelev2">&gt;&gt; # ld -search_paths_first option forces ld to search each directory first for a matching library, instead of all directories
</span><br>
<span class="quotelev2">&gt;&gt; # first for a shared library.
</span><br>
<span class="quotelev2">&gt;&gt; # Note: this is the form to pass -search_paths_first to ld when $(CC) is the linker command in makefile.ux
</span><br>
<span class="quotelev2">&gt;&gt; export LDFLAGS=-Wl,-search_paths_first
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 15 Aug 2011, at 1:01 PM, Matthew Russell wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I hope this problem merits being posted here.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On OS X (Snow Leopard, and Lion), I cannot seem to build Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After a lot of building, I get the error:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../libtool --tag=CC   --mode=link /opt/pgi/osx86-64/10.9/bin/pgcc  -DNDEBUG -O2 -Msignextend -V   -export-dynamic   -o orte-clean orte-clean.o ../../../orte/libopen-rte.la-lutil  
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: /opt/pgi/osx86-64/10.9/bin/pgcc -DNDEBUG -O2 -Msignextend -V -o orte-clean orte-clean.o  ../../../orte/.libs/libopen-rte.a /Users/matt/software/openmpi/openmpi-1.4.3/opal/.libs/libopen-pal.a -lutil
</span><br>
<span class="quotelev2">&gt;&gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;_orte_odls&quot;, referenced from:
</span><br>
<span class="quotelev2">&gt;&gt;       _orte_errmgr_base_error_abort in libopen-rte.a(errmgr_base_fns.o)
</span><br>
<span class="quotelev2">&gt;&gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is with the PGI 10.9 compiler, OpenMPI 1.4.3, platform is 86x64
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The README does not list PGI as a compiler that OpenMPI was tested with, and there are notes about it's support for XGrid being broken (I'm not sure if this is related.)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I seem to get the error regardless of which configure flags I'm using, just for completeness though, here are the flags I am using:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/usr/local/openmpi_pg --enable-mpi-f77 --enable-mpi-f90 --with-memory-manager=none
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Has anyone else got or fixed this error?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I looked at other postings in this list, such as <a href="http://www.open-mpi.org/community/lists/devel/2007/05/1590.php">http://www.open-mpi.org/community/lists/devel/2007/05/1590.php</a> , but they didn't help much.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9650/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9651.php">Ralph Castain: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>Previous message:</strong> <a href="9649.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>In reply to:</strong> <a href="9649.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9653.php">Matthew Russell: "Re: [OMPI devel] Building Error"</a>
<li><strong>Reply:</strong> <a href="9653.php">Matthew Russell: "Re: [OMPI devel] Building Error"</a>
<li><strong>Reply:</strong> <a href="9655.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
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
