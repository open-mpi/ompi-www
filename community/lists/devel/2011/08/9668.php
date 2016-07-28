<?
$subject_val = "Re: [OMPI devel] Building Error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 17 13:01:39 2011" -->
<!-- isoreceived="20110817170139" -->
<!-- sent="Wed, 17 Aug 2011 13:01:34 -0400" -->
<!-- isosent="20110817170134" -->
<!-- name="Matthew Russell" -->
<!-- email="mrussel2_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Building Error" -->
<!-- id="CAFmqpWqyF4WZ-Wr9UOCGv2Wnk2+fHD_ffEjErh4ng3uQOx0GMg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3E8AA952-D137-4C4D-8DA2-7BF5A264C453_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-08-17 13:01:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9669.php">Jeff Squyres: "[OMPI devel] 1.5.4 and 1.4.4 NEWS items"</a>
<li><strong>Previous message:</strong> <a href="9667.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>In reply to:</strong> <a href="9660.php">Ralph Castain: "Re: [OMPI devel] Building Error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I'm really grateful for the detailed responses.
<br>
<p>I'll try running different responses as Larry suggested.  Right now MPICH
<br>
seems to be satisfying my needs, so I have less time to devote to getting
<br>
OpenMPI working, but I am interested in having it working just as an option
<br>
to MPICH.
<br>
<p>Thanks!
<br>
<p>On Tue, Aug 16, 2011 at 10:35 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Just an FYI. Disabling ORTE support is intended solely for systems that
</span><br>
<span class="quotelev1">&gt; require no RTE assistance - e.g., Crays. Configuring without RTE support
</span><br>
<span class="quotelev1">&gt; will generate something that cannot run on a Mac, which is why the build
</span><br>
<span class="quotelev1">&gt; fails in that environment - it is looking for external RTE support that does
</span><br>
<span class="quotelev1">&gt; not exist on the Mac. That configure option works fine on the intended
</span><br>
<span class="quotelev1">&gt; targets.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The declspec macro does indeed have visibility attributes - in fact, that
</span><br>
<span class="quotelev1">&gt; is its sole purpose. You are welcome to try disabling visibility to see if
</span><br>
<span class="quotelev1">&gt; that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The module definitions are actually identical, minus the visibility flags.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 16, 2011, at 8:08 PM, Larry Baker wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthew,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The best I can come up with is that somehow the declaration of
</span><br>
<span class="quotelev1">&gt; external orte_odls in orte/mca/odls/odls.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ORTE_DECLSPEC extern orte_odls_base_module_t orte_odls;  /* holds selected
</span><br>
<span class="quotelev1">&gt; module's function pointers */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; does not exactly match the definition of orte_odis in
</span><br>
<span class="quotelev1">&gt; orte/mca/odis/base/odls_base_open.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte_odls_base_module_t orte_odls;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ORTE_DECLSPEC might include some decorations having to do with the
</span><br>
<span class="quotelev1">&gt; visibility attribute.  Try adding --disable-visibility to your configure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Otherwise, I see in orte/mca/odis/base/odls_base_open.c that orte_odis is
</span><br>
<span class="quotelev1">&gt; not defined if ORTE_DISABLE_FULL_SUPPORT == 1.  I tried to compile
</span><br>
<span class="quotelev1">&gt; with --without-rte-support to force #define ORTE_DISABLE_FULL_SUPPORT 1, but
</span><br>
<span class="quotelev1">&gt; the make failed before it reached the link that failed for you.  When
</span><br>
<span class="quotelev1">&gt; --without-rte-support is requested in 1.4.3, there are declarations that
</span><br>
<span class="quotelev1">&gt; depend on typedefs that are skipped, causing the make to fail.  You may be
</span><br>
<span class="quotelev1">&gt; encountering something subtle like that when configure deduces some behavior
</span><br>
<span class="quotelev1">&gt; for pgcc and the code doesn't quite have the conditional compilation tests
</span><br>
<span class="quotelev1">&gt; in the right place.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might try a newer version of OpenMPI, which might have fixed problem
</span><br>
<span class="quotelev1">&gt; like --without-rte-support failing.
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
<span class="quotelev1">&gt; Hi Larry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your interest.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe your solution is the right one, however I think there's some
</span><br>
<span class="quotelev1">&gt; other issues causing some problems too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I add the search_paths_first flag to my configure, the command that
</span><br>
<span class="quotelev1">&gt; breaks in the Makefile is,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: link: /opt/pgi/osx86-64/10.9/bin/pgcc -DNDEBUG -O2 -Msignextend -V
</span><br>
<span class="quotelev1">&gt; -search_paths_first -o orte-clean orte-clean.o
</span><br>
<span class="quotelev1">&gt;  ../../../orte/.libs/libopen-rte.a
</span><br>
<span class="quotelev1">&gt; /Users/matt/software/openmpi/openmpi-1.4.3/opal/.libs/libopen-pal.a -lutil
</span><br>
<span class="quotelev1">&gt; *pgcc-Error-Unknown switch: -search_paths_first*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pgcc 10.9-0 64-bit target on Apple OS/X -tp nehalem-64
</span><br>
<span class="quotelev1">&gt; Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev1">&gt; Copyright 2000-2010, STMicroelectronics, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev1">&gt; make: *** [orte-clean] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem there is that that libtool isn't passing the &quot;-Wl,&quot; along with
</span><br>
<span class="quotelev1">&gt; the search_path_first error, so it isn't getting to the linker.  If I try
</span><br>
<span class="quotelev1">&gt; to manually build it, I still have missing symbols:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; matt_at_pontus:orte-clean$ pgcc -DNDEBUG -O2 -Msignextend -V *
</span><br>
<span class="quotelev1">&gt; -Wl,-search_paths_first* -o orte-clean orte-clean.o
</span><br>
<span class="quotelev1">&gt;  ../../../orte/.libs/libopen-rte.a
</span><br>
<span class="quotelev1">&gt; /Users/matt/software/openmpi/openmpi-1.4.3/opal/.libs/libopen-pal.a -lutil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pgcc 10.9-0 64-bit target on Apple OS/X -tp nehalem-64
</span><br>
<span class="quotelev1">&gt; Copyright 1989-2000, The Portland Group, Inc.  All Rights Reserved.
</span><br>
<span class="quotelev1">&gt; Copyright 2000-2010, STMicroelectronics, Inc.  All Rights Reserved.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 16, 2011 at 2:46 PM, Larry Baker &lt;baker_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Matthew,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What configure options did you use?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can try to replicate your findings, as best I can, using the Intel
</span><br>
<span class="quotelev2">&gt;&gt; compiler on my desktop Mac (Leopard).  One thing I want to investigate is
</span><br>
<span class="quotelev2">&gt;&gt; which libutil is supposed to be linked.  There is no -L in the failing link
</span><br>
<span class="quotelev2">&gt;&gt; step.  Is that possibly the error?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have PGI and about five other compilers on our cluster.  I'll get to
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.4.3 with all those as soon as I fetch the latest versions and
</span><br>
<span class="quotelev2">&gt;&gt; reinstall my cluster software (Rocks just came out with 5.4.3).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Larry Baker
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
<span class="quotelev2">&gt;&gt; Hmm, I tried the recommendation above, adding -Wl,-search_paths_first, and
</span><br>
<span class="quotelev2">&gt;&gt; I still ran into the same issue.  I suspect it is an issue with PGI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Meanwhile, I've been able to get my applications (CMAQ) working with
</span><br>
<span class="quotelev2">&gt;&gt; MPICH2, so for now at least I am going to continue with that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the responses!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Aug 15, 2011 at 8:43 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW: I build OMPI on Mac OS-X (Snow Leopard) every day, without adding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any extra flags, without problem. The citation below relates to something
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from a long time ago, I believe - haven't seen that problem in quite some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do not, however, use PGI. We regularly have problems with PGI on a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variety of systems, and I suspect you are hitting one here - but can't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; confirm it as we don't have PGI licenses to use for testing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The Xgrid support is broken, but has nothing to do with the problem you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; describe. Just means you can't launch via Xgrid.
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
<span class="quotelev3">&gt;&gt;&gt; Matthew,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have the same type of error on a completely different software package
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on Mac OS X.  The error occurs because of the way that Mac OS X searches for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lutil.  If the libutil.a ORTE needs is theirs, i.e., not the system
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libutil.dylib, then you have exactly the same problem I did.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here are my notes for the fix using gcc.  You will have to find out the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; equivalent method to pass the -search_paths_first linker option using pgcc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Mac OS X searches for shared libraries before static libraries.  Thus,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L&lt;ours&gt; -lutil finds the system libutil.dylib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # before our libutil.a, which causes undefined references in the link
</span><br>
<span class="quotelev3">&gt;&gt;&gt; step because it is using the wrong library.  The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # ld -search_paths_first option forces ld to search each directory first
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for a matching library, instead of all directories
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # first for a shared library.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # Note: this is the form to pass -search_paths_first to ld when $(CC) is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the linker command in makefile.ux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export LDFLAGS=-Wl,-search_paths_first
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Larry Baker
</span><br>
<span class="quotelev3">&gt;&gt;&gt; US Geological Survey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 650-329-5608
</span><br>
<span class="quotelev3">&gt;&gt;&gt; baker_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 15 Aug 2011, at 1:01 PM, Matthew Russell wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope this problem merits being posted here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On OS X (Snow Leopard, and Lion), I cannot seem to build Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After a lot of building, I get the error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh ../../../libtool --tag=CC   --mode=link
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/pgi/osx86-64/10.9/bin/pgcc  -DNDEBUG -O2 -Msignextend -V
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -export-dynamic   -o orte-clean orte-clean.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../orte/libopen-rte.la-lutil
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: link: /opt/pgi/osx86-64/10.9/bin/pgcc -DNDEBUG -O2 -Msignextend
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -V -o orte-clean orte-clean.o  ../../../orte/.libs/libopen-rte.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Users/matt/software/openmpi/openmpi-1.4.3/opal/.libs/libopen-pal.a -lutil
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   &quot;_orte_odls&quot;, referenced from:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       _orte_errmgr_base_error_abort in libopen-rte.a(errmgr_base_fns.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is with the PGI 10.9 compiler, OpenMPI 1.4.3, platform is 86x64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The README does not list PGI as a compiler that OpenMPI was tested with,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and there are notes about it's support for XGrid being broken (I'm not sure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if this is related.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I seem to get the error regardless of which configure flags I'm using,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just for completeness though, here are the flags I am using:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/usr/local/openmpi_pg --enable-mpi-f77
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mpi-f90 --with-memory-manager=none
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has anyone else got or fixed this error?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I looked at other postings in this list, such as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2007/05/1590.php">http://www.open-mpi.org/community/lists/devel/2007/05/1590.php</a> , but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they didn't help much.
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
<span class="quotelev3">&gt;&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9668/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9669.php">Jeff Squyres: "[OMPI devel] 1.5.4 and 1.4.4 NEWS items"</a>
<li><strong>Previous message:</strong> <a href="9667.php">Jeff Squyres: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>In reply to:</strong> <a href="9660.php">Ralph Castain: "Re: [OMPI devel] Building Error"</a>
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
