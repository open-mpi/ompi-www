<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Nov 18 20:25:31 2006" -->
<!-- isoreceived="20061119012531" -->
<!-- sent="Sat, 18 Nov 2006 18:25:21 -0700" -->
<!-- isosent="20061119012521" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Building OpenMPI on windows" -->
<!-- id="863B2D97-495A-4136-8C0A-7097CAEE292E_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FBD9C329-5BF2-47E6-B85F-29A985C66409_at_cs.utk.edu" -->
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
<strong>From:</strong> Greg Watson (<em>gwatson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-18 20:25:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1183.php">Resat Umit Payli: "[OMPI devel] Cross-Cluster OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="1181.php">George Bosilca: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<li><strong>In reply to:</strong> <a href="1181.php">George Bosilca: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1192.php">Brian W Barrett: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It would be of great help for the Eclipse Parallel Tools Platform if  
<br>
this was working. We get lots of requests for PTP on Windows, but  
<br>
lack of OMPI support has prevented this to date.
<br>
<p>Regards,
<br>
<p>Greg
<br>
<p>On Nov 18, 2006, at 12:39 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I'm impressed that it work with cygwin out of the box. Last time I
</span><br>
<span class="quotelev1">&gt; tried, I had to patch the libtool, do some manual modifications of
</span><br>
<span class="quotelev1">&gt; the configure script (of course after altering some of the .m4
</span><br>
<span class="quotelev1">&gt; files). It worked, I was able to run a simple ping-pong program, but
</span><br>
<span class="quotelev1">&gt; it took me something like 4 hours to compile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm out of office for the next week. I can give a try to the whole
</span><br>
<span class="quotelev1">&gt; cygwin/SFU once I get back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 18, 2006, at 9:22 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know if we're tried cygwin for a long, long time...  My gut
</span><br>
<span class="quotelev2">&gt;&gt; reaction is that it &quot;should work&quot; (the wrappers are pretty simple C),
</span><br>
<span class="quotelev2">&gt;&gt; but I don't have any cygwin resources to test / fix this.  :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George -- got any insight?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 16, 2006, at 4:44 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not sure about running under cygwin at this stage - I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code base there before as you did, but never tried to run anything
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I believe 1.2 will operate under Windows itself. Of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; course, that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; means using the Windows compilers...but if you have those, you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; able to run.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll have to defer to my colleagues who wrote those wrapper
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers as to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; why cygwin might be taking offense. They are all at the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Supercomputing Expo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this week, so response may be a little delayed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11/16/06 1:54 PM, &quot;Beth Tibbitts&quot; &lt;tibbitts_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm trying to build OpenMPI on windows with cygwin, to at least be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; able to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; demo the Eclipse PTP(Parallel Tools Platform)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on my laptop.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I configured OpenMPI version 1.2 (openmpi-1.2b1) with the following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; command:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --with-devel-headers  --enable-mca-no-build=timer-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; windows
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then did make all and make install, which all seemed to finish ok
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When i try to compile a small test mpi program I get a segfault
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $ mpicc mpitest.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Signal:11 info.si_errno:0(No error) si_code:23()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Failing at addr:0x401a06
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       15 [main] mpicc 7036 _cygtls::handle_exceptions: Error while
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dumping
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; state
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  (probably corrupted stack)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...Beth
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Beth Tibbitts  (859) 243-4981  (TL 545-4981)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; High Productivity Tools / Parallel Tools  <a href="http://eclipse.org/ptp">http://eclipse.org/ptp</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; IBM T.J.Watson Research Center
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mailing Address:  IBM Corp., 455 Park Place, Lexington, KY 40511
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1183.php">Resat Umit Payli: "[OMPI devel] Cross-Cluster OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="1181.php">George Bosilca: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<li><strong>In reply to:</strong> <a href="1181.php">George Bosilca: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1192.php">Brian W Barrett: "Re: [OMPI devel] Building OpenMPI on windows"</a>
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
