<?
$subject_val = "Re: [OMPI devel] Building Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 16 17:10:18 2011" -->
<!-- isoreceived="20110816211018" -->
<!-- sent="Tue, 16 Aug 2011 14:10:09 -0700" -->
<!-- isosent="20110816211009" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Building Error" -->
<!-- id="4398C011-11E2-4CA2-8170-485A861C06C0_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAFmqpWpV+DapXuEfLPY6Ffp0p0SkuikgS5Z16qvD99=2DYBm0Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-08-16 17:10:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9659.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>Previous message:</strong> <a href="9657.php">Jeff Squyres: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>Maybe in reply to:</strong> <a href="9647.php">Matthew Russell: "[OMPI devel] Building Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9659.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Matthew,
<br>
<p>orte_odls is a global variable defined in odls_base_open.c.
<br>
<p>I used your configure options, but did not override the compiler or  
<br>
compiler flags options.  configure used gcc.  odls_base_open.c gets  
<br>
compiled and then the object gets inserted into libmca_odls.a.  Later,  
<br>
it looks like it also gets inserted into libopen-rte.0.dylib.  The  
<br>
link step to create orte-clean references libopen-rte.dylib:
<br>
<p><span class="quotelev1">&gt; gcc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CC   --mode=link gcc  -O3 -DNDEBUG - 
</span><br>
<span class="quotelev1">&gt; finline-functions -fno-strict-aliasing  -fvisibility=hidden  -export- 
</span><br>
<span class="quotelev1">&gt; dynamic   -o orte-clean orte-clean.o ../../../orte/libopen-rte.la - 
</span><br>
<span class="quotelev1">&gt; lutil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -O3 -DNDEBUG -finline-functions -fno-strict- 
</span><br>
<span class="quotelev1">&gt; aliasing -fvisibility=hidden -o .libs/orte-clean orte- 
</span><br>
<span class="quotelev1">&gt; clean.o  ../../../orte/.libs/libopen-rte.dylib /Users/baker/Desktop/ 
</span><br>
<span class="quotelev1">&gt; Software/OpenMPI/1.4.3/openmpi-1.4.3/opal/.libs/libopen-pal.dylib - 
</span><br>
<span class="quotelev1">&gt; lutil
</span><br>
<p><p>Your link step does not; it references a static version of libopen-rte:
<br>
<p><span class="quotelev1">&gt; pgcc:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: link: /opt/pgi/osx86-64/10.9/bin/pgcc -DNDEBUG -O2 - 
</span><br>
<span class="quotelev1">&gt; Msignextend -V -o orte-clean orte-clean.o  ../../../orte/.libs/ 
</span><br>
<span class="quotelev1">&gt; libopen-rte.a /Users/matt/software/openmpi/openmpi-1.4.3/opal/.libs/ 
</span><br>
<span class="quotelev1">&gt; libopen-pal.a -lutil
</span><br>
<span class="quotelev1">&gt;
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
<p><p>I will try to configure my setup to use static libraries and see what  
<br>
changes.
<br>
<p>I think the experiment with -search_paths_first was a red herring.  I  
<br>
think odls_base_open.o is not in libopen-rte.a for some reason.  Or,  
<br>
the external name that gets defined in odls_base_open.c is not the  
<br>
same as the external name being referenced in errmgr_base_fns.c.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On 16 Aug 2011, at 11:53 AM, Matthew Russell wrote:
<br>
<p><span class="quotelev1">&gt; Hi Larry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your interest.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe your solution is the right one, however I think there's  
</span><br>
<span class="quotelev1">&gt; some other issues causing some problems too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I add the search_paths_first flag to my configure, the command  
</span><br>
<span class="quotelev1">&gt; that breaks in the Makefile is,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: link: /opt/pgi/osx86-64/10.9/bin/pgcc -DNDEBUG -O2 - 
</span><br>
<span class="quotelev1">&gt; Msignextend -V -search_paths_first -o orte-clean orte- 
</span><br>
<span class="quotelev1">&gt; clean.o  ../../../orte/.libs/libopen-rte.a /Users/matt/software/ 
</span><br>
<span class="quotelev1">&gt; openmpi/openmpi-1.4.3/opal/.libs/libopen-pal.a -lutil
</span><br>
<span class="quotelev1">&gt; pgcc-Error-Unknown switch: -search_paths_first
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
<span class="quotelev1">&gt; The problem there is that that libtool isn't passing the &quot;-Wl,&quot;  
</span><br>
<span class="quotelev1">&gt; along with the search_path_first error, so it isn't getting to the  
</span><br>
<span class="quotelev1">&gt; linker.  If I try to manually build it, I still have missing symbols:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; matt_at_pontus:orte-clean$ pgcc -DNDEBUG -O2 -Msignextend -V -Wl,- 
</span><br>
<span class="quotelev1">&gt; search_paths_first -o orte-clean orte-clean.o  ../../../orte/.libs/ 
</span><br>
<span class="quotelev1">&gt; libopen-rte.a /Users/matt/software/openmpi/openmpi-1.4.3/opal/.libs/ 
</span><br>
<span class="quotelev1">&gt; libopen-pal.a -lutil
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
<span class="quotelev1">&gt;       _orte_errmgr_base_error_abort in libopen- 
</span><br>
<span class="quotelev1">&gt; rte.a(errmgr_base_fns.o)
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
<span class="quotelev1">&gt; Matthew,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What configure options did you use?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can try to replicate your findings, as best I can, using the Intel  
</span><br>
<span class="quotelev1">&gt; compiler on my desktop Mac (Leopard).  One thing I want to  
</span><br>
<span class="quotelev1">&gt; investigate is which libutil is supposed to be linked.  There is no - 
</span><br>
<span class="quotelev1">&gt; L in the failing link step.  Is that possibly the error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have PGI and about five other compilers on our cluster.  I'll get  
</span><br>
<span class="quotelev1">&gt; to OpenMPI 1.4.3 with all those as soon as I fetch the latest  
</span><br>
<span class="quotelev1">&gt; versions and reinstall my cluster software (Rocks just came out with  
</span><br>
<span class="quotelev1">&gt; 5.4.3).
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
<span class="quotelev1">&gt; On 16 Aug 2011, at 9:44 AM, Matthew Russell wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmm, I tried the recommendation above, adding -Wl,- 
</span><br>
<span class="quotelev2">&gt;&gt; search_paths_first, and I still ran into the same issue.  I suspect  
</span><br>
<span class="quotelev2">&gt;&gt; it is an issue with PGI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Meanwhile, I've been able to get my applications (CMAQ) working  
</span><br>
<span class="quotelev2">&gt;&gt; with MPICH2, so for now at least I am going to continue with that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the responses!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Aug 15, 2011 at 8:43 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: I build OMPI on Mac OS-X (Snow Leopard) every day, without  
</span><br>
<span class="quotelev2">&gt;&gt; adding any extra flags, without problem. The citation below relates  
</span><br>
<span class="quotelev2">&gt;&gt; to something from a long time ago, I believe - haven't seen that  
</span><br>
<span class="quotelev2">&gt;&gt; problem in quite some time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not, however, use PGI. We regularly have problems with PGI on  
</span><br>
<span class="quotelev2">&gt;&gt; a variety of systems, and I suspect you are hitting one here - but  
</span><br>
<span class="quotelev2">&gt;&gt; can't confirm it as we don't have PGI licenses to use for testing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Xgrid support is broken, but has nothing to do with the problem  
</span><br>
<span class="quotelev2">&gt;&gt; you describe. Just means you can't launch via Xgrid.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 15, 2011, at 2:53 PM, Larry Baker wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Matthew,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have the same type of error on a completely different software  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; package on Mac OS X.  The error occurs because of the way that Mac  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OS X searches for -lutil.  If the libutil.a ORTE needs is theirs,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i.e., not the system libutil.dylib, then you have exactly the same  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem I did.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here are my notes for the fix using gcc.  You will have to find  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out the equivalent method to pass the -search_paths_first linker  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; option using pgcc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Mac OS X searches for shared libraries before static  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libraries.  Thus, -L&lt;ours&gt; -lutil finds the system libutil.dylib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # before our libutil.a, which causes undefined references in the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; link step because it is using the wrong library.  The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # ld -search_paths_first option forces ld to search each  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; directory first for a matching library, instead of all directories
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # first for a shared library.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # Note: this is the form to pass -search_paths_first to ld when $ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (CC) is the linker command in makefile.ux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export LDFLAGS=-Wl,-search_paths_first
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I hope this problem merits being posted here.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On OS X (Snow Leopard, and Lion), I cannot seem to build Open MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; After a lot of building, I get the error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh ../../../libtool --tag=CC   --mode=link /opt/pgi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; osx86-64/10.9/bin/pgcc  -DNDEBUG -O2 -Msignextend -V   -export- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dynamic   -o orte-clean orte-clean.o ../../../orte/libopen-rte.la- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lutil
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link: /opt/pgi/osx86-64/10.9/bin/pgcc -DNDEBUG -O2 - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Msignextend -V -o orte-clean orte-clean.o  ../../../orte/.libs/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libopen-rte.a /Users/matt/software/openmpi/openmpi-1.4.3/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/.libs/libopen-pal.a -lutil
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Undefined symbols for architecture x86_64:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   &quot;_orte_odls&quot;, referenced from:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       _orte_errmgr_base_error_abort in libopen- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rte.a(errmgr_base_fns.o)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ld: symbol(s) not found for architecture x86_64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is with the PGI 10.9 compiler, OpenMPI 1.4.3, platform is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 86x64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The README does not list PGI as a compiler that OpenMPI was  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tested with, and there are notes about it's support for XGrid  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; being broken (I'm not sure if this is related.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I seem to get the error regardless of which configure flags I'm  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; using, just for completeness though, here are the flags I am using:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --prefix=/usr/local/openmpi_pg --enable-mpi-f77 -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; enable-mpi-f90 --with-memory-manager=none
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Has anyone else got or fixed this error?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I looked at other postings in this list, such as <a href="http://www.open-mpi.org/community/lists/devel/2007/05/1590.php">http://www.open-mpi.org/community/lists/devel/2007/05/1590.php</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  , but they didn't help much.
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
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9658/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9659.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
<li><strong>Previous message:</strong> <a href="9657.php">Jeff Squyres: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<li><strong>Maybe in reply to:</strong> <a href="9647.php">Matthew Russell: "[OMPI devel] Building Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9659.php">Larry Baker: "Re: [OMPI devel] Building Error"</a>
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
