<?
$subject_val = "Re: [OMPI devel] Building Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 16 22:35:59 2011" -->
<!-- isoreceived="20110817023559" -->
<!-- sent="Tue, 16 Aug 2011 20:35:51 -0600" -->
<!-- isosent="20110817023551" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Building Error" -->
<!-- id="3E8AA952-D137-4C4D-8DA2-7BF5A264C453_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3DB70B24-5AEC-4B0B-83B0-D1575D43EDBC_at_usgs.gov" -->
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
<strong>Date:</strong> 2011-08-16 22:35:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9661.php">Xin He: "[OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9659.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>In reply to:</strong> <a href="9659.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9668.php">Matthew Russell: "Re: [OMPI devel] Building Error"</a>
<li><strong>Reply:</strong> <a href="9668.php">Matthew Russell: "Re: [OMPI devel] Building Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just an FYI. Disabling ORTE support is intended solely for systems that require no RTE assistance - e.g., Crays. Configuring without RTE support will generate something that cannot run on a Mac, which is why the build fails in that environment - it is looking for external RTE support that does not exist on the Mac. That configure option works fine on the intended targets.
<br>
<p>The declspec macro does indeed have visibility attributes - in fact, that is its sole purpose. You are welcome to try disabling visibility to see if that helps.
<br>
<p>The module definitions are actually identical, minus the visibility flags.
<br>
<p><p>On Aug 16, 2011, at 8:08 PM, Larry Baker wrote:
<br>
<p><span class="quotelev1">&gt; Matthew,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The best I can come up with is that somehow the declaration of external orte_odls in orte/mca/odls/odls.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_DECLSPEC extern orte_odls_base_module_t orte_odls;  /* holds selected module's function pointers */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; does not exactly match the definition of orte_odis in orte/mca/odis/base/odls_base_open.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; orte_odls_base_module_t orte_odls;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ORTE_DECLSPEC might include some decorations having to do with the visibility attribute.  Try adding --disable-visibility to your configure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Otherwise, I see in orte/mca/odis/base/odls_base_open.c that orte_odis is not defined if ORTE_DISABLE_FULL_SUPPORT == 1.  I tried to compile with --without-rte-support to force #define ORTE_DISABLE_FULL_SUPPORT 1, but the make failed before it reached the link that failed for you.  When --without-rte-support is requested in 1.4.3, there are declarations that depend on typedefs that are skipped, causing the make to fail.  You may be encountering something subtle like that when configure deduces some behavior for pgcc and the code doesn't quite have the conditional compilation tests in the right place.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You might try a newer version of OpenMPI, which might have fixed problem like --without-rte-support failing.
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
<span class="quotelev1">&gt; On 16 Aug 2011, at 11:53 AM, Matthew Russell wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Larry,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your interest.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe your solution is the right one, however I think there's some other issues causing some problems too.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I add the search_paths_first flag to my configure, the command that breaks in the Makefile is,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: /opt/pgi/osx86-64/10.9/bin/pgcc -DNDEBUG -O2 -Msignextend -V -search_paths_first -o orte-clean orte-clean.o  ../../../orte/.libs/libopen-rte.a /Users/matt/software/openmpi/openmpi-1.4.3/opal/.libs/libopen-pal.a -lutil
</span><br>
<span class="quotelev2">&gt;&gt; pgcc-Error-Unknown switch: -search_paths_first
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; pgcc 10.9-0 64-bit target on Apple OS/X -tp nehalem-64 
</span><br>
<span class="quotelev2">&gt;&gt; Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev2">&gt;&gt; Copyright 2000-2010, STMicroelectronics, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [orte-clean] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem there is that that libtool isn't passing the &quot;-Wl,&quot; along with the search_path_first error, so it isn't getting to the linker.  If I try to manually build it, I still have missing symbols:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; matt_at_pontus:orte-clean$ pgcc -DNDEBUG -O2 -Msignextend -V -Wl,-search_paths_first -o orte-clean orte-clean.o  ../../../orte/.libs/libopen-rte.a /Users/matt/software/openmpi/openmpi-1.4.3/opal/.libs/libopen-pal.a -lutil
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; pgcc 10.9-0 64-bit target on Apple OS/X -tp nehalem-64 
</span><br>
<span class="quotelev2">&gt;&gt; Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev2">&gt;&gt; Copyright 2000-2010, STMicroelectronics, Inc.  All Rights Reserved.
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Aug 16, 2011 at 2:46 PM, Larry Baker &lt;baker_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Matthew,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What configure options did you use?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can try to replicate your findings, as best I can, using the Intel compiler on my desktop Mac (Leopard).  One thing I want to investigate is which libutil is supposed to be linked.  There is no -L in the failing link step.  Is that possibly the error?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have PGI and about five other compilers on our cluster.  I'll get to OpenMPI 1.4.3 with all those as soon as I fetch the latest versions and reinstall my cluster software (Rocks just came out with 5.4.3).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Larry Baker
</span><br>
<span class="quotelev2">&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev2">&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev2">&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 16 Aug 2011, at 9:44 AM, Matthew Russell wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmm, I tried the recommendation above, adding -Wl,-search_paths_first, and I still ran into the same issue.  I suspect it is an issue with PGI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Meanwhile, I've been able to get my applications (CMAQ) working with MPICH2, so for now at least I am going to continue with that.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the responses!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Aug 15, 2011 at 8:43 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW: I build OMPI on Mac OS-X (Snow Leopard) every day, without adding any extra flags, without problem. The citation below relates to something from a long time ago, I believe - haven't seen that problem in quite some time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do not, however, use PGI. We regularly have problems with PGI on a variety of systems, and I suspect you are hitting one here - but can't confirm it as we don't have PGI licenses to use for testing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The Xgrid support is broken, but has nothing to do with the problem you describe. Just means you can't launch via Xgrid.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 15, 2011, at 2:53 PM, Larry Baker wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Matthew,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have the same type of error on a completely different software package on Mac OS X.  The error occurs because of the way that Mac OS X searches for -lutil.  If the libutil.a ORTE needs is theirs, i.e., not the system libutil.dylib, then you have exactly the same problem I did.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here are my notes for the fix using gcc.  You will have to find out the equivalent method to pass the -search_paths_first linker option using pgcc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # Mac OS X searches for shared libraries before static libraries.  Thus, -L&lt;ours&gt; -lutil finds the system libutil.dylib
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # before our libutil.a, which causes undefined references in the link step because it is using the wrong library.  The
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # ld -search_paths_first option forces ld to search each directory first for a matching library, instead of all directories
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # first for a shared library.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # Note: this is the form to pass -search_paths_first to ld when $(CC) is the linker command in makefile.ux
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export LDFLAGS=-Wl,-search_paths_first
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Larry Baker
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 15 Aug 2011, at 1:01 PM, Matthew Russell wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I hope this problem merits being posted here.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On OS X (Snow Leopard, and Lion), I cannot seem to build Open MPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; After a lot of building, I get the error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /bin/sh ../../../libtool --tag=CC   --mode=link /opt/pgi/osx86-64/10.9/bin/pgcc  -DNDEBUG -O2 -Msignextend -V   -export-dynamic   -o orte-clean orte-clean.o ../../../orte/libopen-rte.la-lutil  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; libtool: link: /opt/pgi/osx86-64/10.9/bin/pgcc -DNDEBUG -O2 -Msignextend -V -o orte-clean orte-clean.o  ../../../orte/.libs/libopen-rte.a /Users/matt/software/openmpi/openmpi-1.4.3/opal/.libs/libopen-pal.a -lutil
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   &quot;_orte_odls&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       _orte_errmgr_base_error_abort in libopen-rte.a(errmgr_base_fns.o)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is with the PGI 10.9 compiler, OpenMPI 1.4.3, platform is 86x64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The README does not list PGI as a compiler that OpenMPI was tested with, and there are notes about it's support for XGrid being broken (I'm not sure if this is related.)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I seem to get the error regardless of which configure flags I'm using, just for completeness though, here are the flags I am using:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure --prefix=/usr/local/openmpi_pg --enable-mpi-f77 --enable-mpi-f90 --with-memory-manager=none
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Has anyone else got or fixed this error?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I looked at other postings in this list, such as <a href="http://www.open-mpi.org/community/lists/devel/2007/05/1590.php">http://www.open-mpi.org/community/lists/devel/2007/05/1590.php</a> , but they didn't help much.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9660/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9661.php">Xin He: "[OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9659.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>In reply to:</strong> <a href="9659.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9668.php">Matthew Russell: "Re: [OMPI devel] Building Error"</a>
<li><strong>Reply:</strong> <a href="9668.php">Matthew Russell: "Re: [OMPI devel] Building Error"</a>
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
