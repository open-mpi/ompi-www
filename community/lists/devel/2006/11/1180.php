<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Nov 18 09:22:36 2006" -->
<!-- isoreceived="20061118142236" -->
<!-- sent="Sat, 18 Nov 2006 09:22:04 -0500" -->
<!-- isosent="20061118142204" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Building OpenMPI on windows" -->
<!-- id="08652B41-2E25-4F9B-AB0C-910596068B5D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C18229D5.603%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-18 09:22:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1181.php">George Bosilca: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<li><strong>Previous message:</strong> <a href="1179.php">Ralph Castain: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<li><strong>In reply to:</strong> <a href="1179.php">Ralph Castain: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1181.php">George Bosilca: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<li><strong>Reply:</strong> <a href="1181.php">George Bosilca: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know if we're tried cygwin for a long, long time...  My gut  
<br>
reaction is that it &quot;should work&quot; (the wrappers are pretty simple C),  
<br>
but I don't have any cygwin resources to test / fix this.  :-(
<br>
<p>George -- got any insight?
<br>
<p><p>On Nov 16, 2006, at 4:44 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I'm not sure about running under cygwin at this stage - I have  
</span><br>
<span class="quotelev1">&gt; compiled the
</span><br>
<span class="quotelev1">&gt; code base there before as you did, but never tried to run anything  
</span><br>
<span class="quotelev1">&gt; in that
</span><br>
<span class="quotelev1">&gt; environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I believe 1.2 will operate under Windows itself. Of  
</span><br>
<span class="quotelev1">&gt; course, that
</span><br>
<span class="quotelev1">&gt; means using the Windows compilers...but if you have those, you  
</span><br>
<span class="quotelev1">&gt; should be
</span><br>
<span class="quotelev1">&gt; able to run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll have to defer to my colleagues who wrote those wrapper  
</span><br>
<span class="quotelev1">&gt; compilers as to
</span><br>
<span class="quotelev1">&gt; why cygwin might be taking offense. They are all at the  
</span><br>
<span class="quotelev1">&gt; Supercomputing Expo
</span><br>
<span class="quotelev1">&gt; this week, so response may be a little delayed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/16/06 1:54 PM, &quot;Beth Tibbitts&quot; &lt;tibbitts_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to build OpenMPI on windows with cygwin, to at least be  
</span><br>
<span class="quotelev2">&gt;&gt; able to
</span><br>
<span class="quotelev2">&gt;&gt; demo the Eclipse PTP(Parallel Tools Platform)
</span><br>
<span class="quotelev2">&gt;&gt; on my laptop.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I configured OpenMPI version 1.2 (openmpi-1.2b1) with the following
</span><br>
<span class="quotelev2">&gt;&gt; command:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --with-devel-headers  --enable-mca-no-build=timer-windows
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; then did make all and make install, which all seemed to finish ok
</span><br>
<span class="quotelev2">&gt;&gt; When i try to compile a small test mpi program I get a segfault
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpicc mpitest.c
</span><br>
<span class="quotelev2">&gt;&gt; Signal:11 info.si_errno:0(No error) si_code:23()
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:0x401a06
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;       15 [main] mpicc 7036 _cygtls::handle_exceptions: Error while  
</span><br>
<span class="quotelev2">&gt;&gt; dumping
</span><br>
<span class="quotelev2">&gt;&gt; state
</span><br>
<span class="quotelev2">&gt;&gt;  (probably corrupted stack)
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...Beth
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Beth Tibbitts  (859) 243-4981  (TL 545-4981)
</span><br>
<span class="quotelev2">&gt;&gt; High Productivity Tools / Parallel Tools  <a href="http://eclipse.org/ptp">http://eclipse.org/ptp</a>
</span><br>
<span class="quotelev2">&gt;&gt; IBM T.J.Watson Research Center
</span><br>
<span class="quotelev2">&gt;&gt; Mailing Address:  IBM Corp., 455 Park Place, Lexington, KY 40511
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
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1181.php">George Bosilca: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<li><strong>Previous message:</strong> <a href="1179.php">Ralph Castain: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<li><strong>In reply to:</strong> <a href="1179.php">Ralph Castain: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1181.php">George Bosilca: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<li><strong>Reply:</strong> <a href="1181.php">George Bosilca: "Re: [OMPI devel] Building OpenMPI on windows"</a>
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
