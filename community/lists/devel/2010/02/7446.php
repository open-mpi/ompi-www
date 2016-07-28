<?
$subject_val = "Re: [OMPI devel] configure question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 17 10:29:39 2010" -->
<!-- isoreceived="20100217152939" -->
<!-- sent="Wed, 17 Feb 2010 10:29:35 -0500" -->
<!-- isosent="20100217152935" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] configure question" -->
<!-- id="227256A2-E075-4446-BE76-53903B12AF89_at_computer.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100217070159.GC3621_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] configure question<br>
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-17 10:29:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7447.php">Jeff Squyres: "[OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7445.php">Peter Kjellstrom: "Re: [OMPI devel] 1.5.0 could be soon"</a>
<li><strong>In reply to:</strong> <a href="7442.php">Ralf Wildenhues: "Re: [OMPI devel] configure question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem seems to be that on SL, gfortran defaults to 32-bit binaries while gcc defaults to 64-bit. If I set FFLAGS=-m64 then configure finishes. Of course, I have no idea if a Fortran MPI program will actually *work*, but at least OMPI builds. That's all that matters isn't it? :-).
<br>
<p>Greg
<br>
<p>On Feb 17, 2010, at 2:01 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hello Greg,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Greg Watson wrote on Tue, Feb 16, 2010 at 07:03:30PM CET:
</span><br>
<span class="quotelev2">&gt;&gt; When I run configure under Snow Leopard (this is OMPI 1.3.4), I get the following:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; checking if C and Fortran 77 are link compatible... no
</span><br>
<span class="quotelev2">&gt;&gt; **********************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; It appears that your Fortran 77 compiler is unable to link against
</span><br>
<span class="quotelev2">&gt;&gt; object files created by your C compiler.  This typically indicates
</span><br>
<span class="quotelev2">&gt;&gt; one of a few possibilities:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  - A conflict between CFLAGS and FFLAGS
</span><br>
<span class="quotelev2">&gt;&gt;  - A problem with your compiler installation(s)
</span><br>
<span class="quotelev2">&gt;&gt;  - Different default build options between compilers (e.g., C
</span><br>
<span class="quotelev2">&gt;&gt;    building for 32 bit and Fortran building for 64 bit)
</span><br>
<span class="quotelev2">&gt;&gt;  - Incompatible compilers
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Such problems can usually be solved by picking compatible compilers
</span><br>
<span class="quotelev2">&gt;&gt; and/or CFLAGS and FFLAGS.  More information (including exactly what
</span><br>
<span class="quotelev2">&gt;&gt; command was given to the compilers and what error resulted when the
</span><br>
<span class="quotelev2">&gt;&gt; commands were executed) is available in the config.log file in this
</span><br>
<span class="quotelev2">&gt;&gt; directory.
</span><br>
<span class="quotelev2">&gt;&gt; **********************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: C and Fortran 77 compilers are not link compatible.  Can not continue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anyone know of the top of their head what these options would be, or even if it is possible?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, did you take a look at the corresponding bits in the config.log
</span><br>
<span class="quotelev1">&gt; file?  Can you post them?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ralf
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
<li><strong>Next message:</strong> <a href="7447.php">Jeff Squyres: "[OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7445.php">Peter Kjellstrom: "Re: [OMPI devel] 1.5.0 could be soon"</a>
<li><strong>In reply to:</strong> <a href="7442.php">Ralf Wildenhues: "Re: [OMPI devel] configure question"</a>
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
