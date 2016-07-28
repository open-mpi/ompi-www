<?
$subject_val = "Re: [OMPI devel] Adding a BTL module implementing poll()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  1 08:30:58 2010" -->
<!-- isoreceived="20101101123058" -->
<!-- sent="Mon, 1 Nov 2010 08:30:53 -0400" -->
<!-- isosent="20101101123053" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Adding a BTL module implementing poll()" -->
<!-- id="19ED559E-6797-4F5D-9E21-E8BAFF91F32E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinB1T8JFDH4GLCnoJJuMVa+yO+2RRL78KFt1Bb3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Adding a BTL module implementing poll()<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-01 08:30:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8649.php">Joshua Hursey: "Re: [OMPI devel] 1.5.x plans"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8647.php">Alex Margolin: "[OMPI devel] Adding a BTL module implementing poll()"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8647.php">Alex Margolin: "[OMPI devel] Adding a BTL module implementing poll()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How are you linking in the mos_poll() implementation?  Is it up in the BTL?
<br>
<p>If so, you'll need to move it down to the OPAL libevent section.  This is because all OPAL things are built before any OMPI things, to include some executables (e.g., the opal/tools/wrappers directory).  They link against libopen-pal (i.e., the library for OPAL), and don't &quot;see&quot; anything in the upper layers, such as BTLs.
<br>
<p>Does that help?
<br>
<p><p>On Oct 31, 2010, at 4:54 AM, Alex Margolin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I'm developing a new module under for BTL component to utilize an
</span><br>
<span class="quotelev1">&gt; existing distributed computing software in our lab.
</span><br>
<span class="quotelev1">&gt; I decided to write a TCP-like interface (implementing socket(),
</span><br>
<span class="quotelev1">&gt; connect(), accept(), send(), recv(), etc.) and then copy and modify
</span><br>
<span class="quotelev1">&gt; the existing BTL TCP module to create my own. I've also given
</span><br>
<span class="quotelev1">&gt; consideration to using LD_PRELOAD, but haven't gotten to it yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Currently, i'm having trouble with the the poll() syscall. Since the
</span><br>
<span class="quotelev1">&gt; I'm using other, &quot;non-linux&quot; sockets (no valid FD) with my own poll
</span><br>
<span class="quotelev1">&gt; implementation on them, I tried to replace the poll() in
</span><br>
<span class="quotelev1">&gt; opal/event/poll.c with a call to my poll in ompi/mca/btl/... and
</span><br>
<span class="quotelev1">&gt; failed to build open-mpi.
</span><br>
<span class="quotelev1">&gt; Since my poll needs to use the internal data structures of my module,
</span><br>
<span class="quotelev1">&gt; I did the following steps:
</span><br>
<span class="quotelev1">&gt; 1. Create a sym-link to my .h file in opal/event/
</span><br>
<span class="quotelev1">&gt; 2. in poll.c include my .h file and change the poll() syscall to call
</span><br>
<span class="quotelev1">&gt; my implementation (same interface).
</span><br>
<span class="quotelev1">&gt; 3. in Makefile.am added my .h file under EXTRA_DIST, my .lo file under
</span><br>
<span class="quotelev1">&gt; libevent_la_DEPENDENCIES and my module path under ompidir.
</span><br>
<span class="quotelev1">&gt; 4. tried to compile (x64): ./autogen.sh ; ./configure CFLAGS=-m64
</span><br>
<span class="quotelev1">&gt; CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64 --prefix /home/alex/huji/mpi/ ;
</span><br>
<span class="quotelev1">&gt; make ; make install
</span><br>
<span class="quotelev1">&gt; 5. failed miserably:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making install in tools/wrappers
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/home/alex/huji/openmpi-1.4.1/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool --tag=CC   --mode=link gcc  -O3 -DNDEBUG -m64
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -pthread -fvisibility=hidden
</span><br>
<span class="quotelev1">&gt; -export-dynamic   -o opal_wrapper opal_wrapper.o
</span><br>
<span class="quotelev1">&gt; ../../../opal/libopen-pal.la -lnsl -lutil  -lm
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -O3 -DNDEBUG -m64 -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread -fvisibility=hidden -o
</span><br>
<span class="quotelev1">&gt; .libs/opal_wrapper opal_wrapper.o -Wl,--export-dynamic
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so -ldl -lnsl -lutil -lm -pthread
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath -Wl,/home/alex/huji/mpi/lib
</span><br>
<span class="quotelev1">&gt; ../../../opal/.libs/libopen-pal.so: undefined reference to `mos_poll'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [opal_wrapper] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/alex/huji/openmpi-1.4.1/opal/tools/wrappers'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/alex/huji/openmpi-1.4.1/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [install-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you please help me build open-mpi with my module, or suggest a
</span><br>
<span class="quotelev1">&gt; better way to do this?
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Alex
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8649.php">Joshua Hursey: "Re: [OMPI devel] 1.5.x plans"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8647.php">Alex Margolin: "[OMPI devel] Adding a BTL module implementing poll()"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/10/8647.php">Alex Margolin: "[OMPI devel] Adding a BTL module implementing poll()"</a>
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
