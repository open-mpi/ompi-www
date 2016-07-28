<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 16 16:44:53 2006" -->
<!-- isoreceived="20061116214453" -->
<!-- sent="Thu, 16 Nov 2006 14:44:37 -0700" -->
<!-- isosent="20061116214437" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Building OpenMPI on windows" -->
<!-- id="C18229D5.603%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFC51C3F63.FFA370F2-ON85257228.0070A5E2-85257228.0072E4CC_at_us.ibm.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-16 16:44:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1180.php">Jeff Squyres: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<li><strong>Previous message:</strong> <a href="1178.php">Beth Tibbitts: "[OMPI devel] Building OpenMPI on windows"</a>
<li><strong>In reply to:</strong> <a href="1178.php">Beth Tibbitts: "[OMPI devel] Building OpenMPI on windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1180.php">Jeff Squyres: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<li><strong>Reply:</strong> <a href="1180.php">Jeff Squyres: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure about running under cygwin at this stage - I have compiled the
<br>
code base there before as you did, but never tried to run anything in that
<br>
environment.
<br>
<p>However, I believe 1.2 will operate under Windows itself. Of course, that
<br>
means using the Windows compilers...but if you have those, you should be
<br>
able to run.
<br>
<p>I'll have to defer to my colleagues who wrote those wrapper compilers as to
<br>
why cygwin might be taking offense. They are all at the Supercomputing Expo
<br>
this week, so response may be a little delayed.
<br>
<p>Ralph
<br>
<p><p>On 11/16/06 1:54 PM, &quot;Beth Tibbitts&quot; &lt;tibbitts_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to build OpenMPI on windows with cygwin, to at least be able to
</span><br>
<span class="quotelev1">&gt; demo the Eclipse PTP(Parallel Tools Platform)
</span><br>
<span class="quotelev1">&gt; on my laptop.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I configured OpenMPI version 1.2 (openmpi-1.2b1) with the following
</span><br>
<span class="quotelev1">&gt; command:
</span><br>
<span class="quotelev1">&gt; ./configure --with-devel-headers  --enable-mca-no-build=timer-windows
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then did make all and make install, which all seemed to finish ok
</span><br>
<span class="quotelev1">&gt; When i try to compile a small test mpi program I get a segfault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpicc mpitest.c
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(No error) si_code:23()
</span><br>
<span class="quotelev1">&gt; Failing at addr:0x401a06
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt;       15 [main] mpicc 7036 _cygtls::handle_exceptions: Error while dumping
</span><br>
<span class="quotelev1">&gt; state
</span><br>
<span class="quotelev1">&gt;  (probably corrupted stack)
</span><br>
<span class="quotelev1">&gt; Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...Beth
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Beth Tibbitts  (859) 243-4981  (TL 545-4981)
</span><br>
<span class="quotelev1">&gt; High Productivity Tools / Parallel Tools  <a href="http://eclipse.org/ptp">http://eclipse.org/ptp</a>
</span><br>
<span class="quotelev1">&gt; IBM T.J.Watson Research Center
</span><br>
<span class="quotelev1">&gt; Mailing Address:  IBM Corp., 455 Park Place, Lexington, KY 40511
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
<li><strong>Next message:</strong> <a href="1180.php">Jeff Squyres: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<li><strong>Previous message:</strong> <a href="1178.php">Beth Tibbitts: "[OMPI devel] Building OpenMPI on windows"</a>
<li><strong>In reply to:</strong> <a href="1178.php">Beth Tibbitts: "[OMPI devel] Building OpenMPI on windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1180.php">Jeff Squyres: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<li><strong>Reply:</strong> <a href="1180.php">Jeff Squyres: "Re: [OMPI devel] Building OpenMPI on windows"</a>
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
