<?
$subject_val = "Re: [OMPI devel] Building Error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 15 16:53:19 2011" -->
<!-- isoreceived="20110815205319" -->
<!-- sent="Mon, 15 Aug 2011 13:53:14 -0700" -->
<!-- isosent="20110815205314" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Building Error" -->
<!-- id="BD1EB4C5-0E3C-4C5C-91E1-466C0C362DA4_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAFmqpWpWqkDawWFQA57-dCJ4CagRrL7w2b9d5E=10UWamePhKQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-15 16:53:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9650.php">Ralph Castain: "Re: [OMPI devel] Building Error"</a>
<li><strong>Previous message:</strong> <a href="9648.php">Rolf vandeVaart: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>In reply to:</strong> <a href="9647.php">Matthew Russell: "[OMPI devel] Building Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9650.php">Ralph Castain: "Re: [OMPI devel] Building Error"</a>
<li><strong>Reply:</strong> <a href="9650.php">Ralph Castain: "Re: [OMPI devel] Building Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Matthew,
<br>
<p>I have the same type of error on a completely different software  
<br>
package on Mac OS X.  The error occurs because of the way that Mac OS  
<br>
X searches for -lutil.  If the libutil.a ORTE needs is theirs, i.e.,  
<br>
not the system libutil.dylib, then you have exactly the same problem I  
<br>
did.
<br>
<p>Here are my notes for the fix using gcc.  You will have to find out  
<br>
the equivalent method to pass the -search_paths_first linker option  
<br>
using pgcc.
<br>
<p><span class="quotelev1">&gt; # Mac OS X searches for shared libraries before static libraries.   
</span><br>
<span class="quotelev1">&gt; Thus, -L&lt;ours&gt; -lutil finds the system libutil.dylib
</span><br>
<span class="quotelev1">&gt; # before our libutil.a, which causes undefined references in the  
</span><br>
<span class="quotelev1">&gt; link step because it is using the wrong library.  The
</span><br>
<span class="quotelev1">&gt; # ld -search_paths_first option forces ld to search each directory  
</span><br>
<span class="quotelev1">&gt; first for a matching library, instead of all directories
</span><br>
<span class="quotelev1">&gt; # first for a shared library.
</span><br>
<span class="quotelev1">&gt; # Note: this is the form to pass -search_paths_first to ld when $ 
</span><br>
<span class="quotelev1">&gt; (CC) is the linker command in makefile.ux
</span><br>
<span class="quotelev1">&gt; export LDFLAGS=-Wl,-search_paths_first
</span><br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On 15 Aug 2011, at 1:01 PM, Matthew Russell wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this problem merits being posted here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On OS X (Snow Leopard, and Lion), I cannot seem to build Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After a lot of building, I get the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CC   --mode=link /opt/pgi/ 
</span><br>
<span class="quotelev1">&gt; osx86-64/10.9/bin/pgcc  -DNDEBUG -O2 -Msignextend -V   -export- 
</span><br>
<span class="quotelev1">&gt; dynamic   -o orte-clean orte-clean.o ../../../orte/libopen-rte.la- 
</span><br>
<span class="quotelev1">&gt; lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: /opt/pgi/osx86-64/10.9/bin/pgcc -DNDEBUG -O2 - 
</span><br>
<span class="quotelev1">&gt; Msignextend -V -o orte-clean orte-clean.o  ../../../orte/.libs/ 
</span><br>
<span class="quotelev1">&gt; libopen-rte.a /Users/matt/software/openmpi/openmpi-1.4.3/opal/.libs/ 
</span><br>
<span class="quotelev1">&gt; libopen-pal.a -lutil
</span><br>
<span class="quotelev1">&gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev1">&gt;   &quot;_orte_odls&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       _orte_errmgr_base_error_abort in libopen- 
</span><br>
<span class="quotelev1">&gt; rte.a(errmgr_base_fns.o)
</span><br>
<span class="quotelev1">&gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is with the PGI 10.9 compiler, OpenMPI 1.4.3, platform is 86x64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The README does not list PGI as a compiler that OpenMPI was tested  
</span><br>
<span class="quotelev1">&gt; with, and there are notes about it's support for XGrid being broken  
</span><br>
<span class="quotelev1">&gt; (I'm not sure if this is related.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I seem to get the error regardless of which configure flags I'm  
</span><br>
<span class="quotelev1">&gt; using, just for completeness though, here are the flags I am using:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/openmpi_pg --enable-mpi-f77 --enable- 
</span><br>
<span class="quotelev1">&gt; mpi-f90 --with-memory-manager=none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone else got or fixed this error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I looked at other postings in this list, such as <a href="http://www.open-mpi.org/community/lists/devel/2007/05/1590.php">http://www.open-mpi.org/community/lists/devel/2007/05/1590.php</a> 
</span><br>
<span class="quotelev1">&gt;  , but they didn't help much.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9649/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9650.php">Ralph Castain: "Re: [OMPI devel] Building Error"</a>
<li><strong>Previous message:</strong> <a href="9648.php">Rolf vandeVaart: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>In reply to:</strong> <a href="9647.php">Matthew Russell: "[OMPI devel] Building Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9650.php">Ralph Castain: "Re: [OMPI devel] Building Error"</a>
<li><strong>Reply:</strong> <a href="9650.php">Ralph Castain: "Re: [OMPI devel] Building Error"</a>
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
