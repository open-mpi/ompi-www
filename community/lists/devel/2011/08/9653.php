<?
$subject_val = "Re: [OMPI devel] Building Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 16 12:44:47 2011" -->
<!-- isoreceived="20110816164447" -->
<!-- sent="Tue, 16 Aug 2011 12:44:42 -0400" -->
<!-- isosent="20110816164442" -->
<!-- name="Matthew Russell" -->
<!-- email="mrussel2_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Building Error" -->
<!-- id="CAFmqpWphF09er1Uj7Jy+MuvcNVY+rhHH=hxTwJchk0U5etEYCg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A2629988-65A4-448A-B0A0-1378E3678E3B_at_open-mpi.org" -->
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
<strong>From:</strong> Matthew Russell (<em>mrussel2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-16 12:44:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9654.php">Graham, Richard L.: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O	frameworks to trunk"</a>
<li><strong>Previous message:</strong> <a href="9652.php">Jeff Squyres: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk"</a>
<li><strong>In reply to:</strong> <a href="9650.php">Ralph Castain: "Re: [OMPI devel] Building Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9656.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>Reply:</strong> <a href="9656.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, I tried the recommendation above, adding -Wl,-search_paths_first, and I
<br>
still ran into the same issue.  I suspect it is an issue with PGI.
<br>
<p>Meanwhile, I've been able to get my applications (CMAQ) working with MPICH2,
<br>
so for now at least I am going to continue with that.
<br>
<p>Thanks for the responses!
<br>
<p>On Mon, Aug 15, 2011 at 8:43 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FWIW: I build OMPI on Mac OS-X (Snow Leopard) every day, without adding any
</span><br>
<span class="quotelev1">&gt; extra flags, without problem. The citation below relates to something from a
</span><br>
<span class="quotelev1">&gt; long time ago, I believe - haven't seen that problem in quite some time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not, however, use PGI. We regularly have problems with PGI on a
</span><br>
<span class="quotelev1">&gt; variety of systems, and I suspect you are hitting one here - but can't
</span><br>
<span class="quotelev1">&gt; confirm it as we don't have PGI licenses to use for testing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Xgrid support is broken, but has nothing to do with the problem you
</span><br>
<span class="quotelev1">&gt; describe. Just means you can't launch via Xgrid.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 15, 2011, at 2:53 PM, Larry Baker wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthew,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have the same type of error on a completely different software package on
</span><br>
<span class="quotelev1">&gt; Mac OS X.  The error occurs because of the way that Mac OS X searches for
</span><br>
<span class="quotelev1">&gt; -lutil.  If the libutil.a ORTE needs is theirs, i.e., not the system
</span><br>
<span class="quotelev1">&gt; libutil.dylib, then you have exactly the same problem I did.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are my notes for the fix using gcc.  You will have to find out the
</span><br>
<span class="quotelev1">&gt; equivalent method to pass the -search_paths_first linker option using pgcc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Mac OS X searches for shared libraries before static libraries.  Thus,
</span><br>
<span class="quotelev1">&gt; -L&lt;ours&gt; -lutil finds the system libutil.dylib
</span><br>
<span class="quotelev1">&gt; # before our libutil.a, which causes undefined references in the link step
</span><br>
<span class="quotelev1">&gt; because it is using the wrong library.  The
</span><br>
<span class="quotelev1">&gt; # ld -search_paths_first option forces ld to search each directory first
</span><br>
<span class="quotelev1">&gt; for a matching library, instead of all directories
</span><br>
<span class="quotelev1">&gt; # first for a shared library.
</span><br>
<span class="quotelev1">&gt; # Note: this is the form to pass -search_paths_first to ld when $(CC) is
</span><br>
<span class="quotelev1">&gt; the linker command in makefile.ux
</span><br>
<span class="quotelev1">&gt; export LDFLAGS=-Wl,-search_paths_first
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CC   --mode=link
</span><br>
<span class="quotelev1">&gt; /opt/pgi/osx86-64/10.9/bin/pgcc  -DNDEBUG -O2 -Msignextend -V
</span><br>
<span class="quotelev1">&gt; -export-dynamic   -o orte-clean orte-clean.o
</span><br>
<span class="quotelev1">&gt; ../../../orte/libopen-rte.la-lutil
</span><br>
<span class="quotelev1">&gt; libtool: link: /opt/pgi/osx86-64/10.9/bin/pgcc -DNDEBUG -O2 -Msignextend -V
</span><br>
<span class="quotelev1">&gt; -o orte-clean orte-clean.o  ../../../orte/.libs/libopen-rte.a
</span><br>
<span class="quotelev1">&gt; /Users/matt/software/openmpi/openmpi-1.4.3/opal/.libs/libopen-pal.a -lutil
</span><br>
<span class="quotelev1">&gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev1">&gt;   &quot;_orte_odls&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       _orte_errmgr_base_error_abort in libopen-rte.a(errmgr_base_fns.o)
</span><br>
<span class="quotelev1">&gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is with the PGI 10.9 compiler, OpenMPI 1.4.3, platform is 86x64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The README does not list PGI as a compiler that OpenMPI was tested with,
</span><br>
<span class="quotelev1">&gt; and there are notes about it's support for XGrid being broken (I'm not sure
</span><br>
<span class="quotelev1">&gt; if this is related.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I seem to get the error regardless of which configure flags I'm using, just
</span><br>
<span class="quotelev1">&gt; for completeness though, here are the flags I am using:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/openmpi_pg --enable-mpi-f77
</span><br>
<span class="quotelev1">&gt; --enable-mpi-f90 --with-memory-manager=none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone else got or fixed this error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I looked at other postings in this list, such as
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2007/05/1590.php">http://www.open-mpi.org/community/lists/devel/2007/05/1590.php</a> , but they
</span><br>
<span class="quotelev1">&gt; didn't help much.
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
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9653/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9654.php">Graham, Richard L.: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O	frameworks to trunk"</a>
<li><strong>Previous message:</strong> <a href="9652.php">Jeff Squyres: "Re: [OMPI devel] RFC: adding OMPIO module and new parallel I/O frameworks to trunk"</a>
<li><strong>In reply to:</strong> <a href="9650.php">Ralph Castain: "Re: [OMPI devel] Building Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9656.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>Reply:</strong> <a href="9656.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
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
