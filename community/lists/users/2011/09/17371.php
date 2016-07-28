<?
$subject_val = "Re: [OMPI users] Building with thread support on Windows?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 21 11:33:02 2011" -->
<!-- isoreceived="20110921153302" -->
<!-- sent="Wed, 21 Sep 2011 11:32:40 -0400" -->
<!-- isosent="20110921153240" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building with thread support on Windows?" -->
<!-- id="4E7A0398.2090406_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1316618306.4e7a004257596_at_go.flowtech.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building with thread support on Windows?<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-21 11:32:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17372.php">Blosch, Edwin L: "[OMPI users] Question about compilng with fPIC"</a>
<li><strong>Previous message:</strong> <a href="17370.php">Bj&#195;&#182;rn Regnstr&#195;&#182;m: "[OMPI users] Building with thread support on Windows?"</a>
<li><strong>In reply to:</strong> <a href="17370.php">Bj&#195;&#182;rn Regnstr&#195;&#182;m: "[OMPI users] Building with thread support on Windows?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17378.php">Björn Regnström: "Re: [OMPI users] Building with thread support on Windows?"</a>
<li><strong>Reply:</strong> <a href="17378.php">Björn Regnström: "Re: [OMPI users] Building with thread support on Windows?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 9/21/2011 11:18 AM, Bj&#246;rn Regnstr&#246;m wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to build Open MPI 1.4.3 with thread support on Windows. A
</span><br>
<span class="quotelev1">&gt; trivial test program
</span><br>
<span class="quotelev1">&gt; runs if it calls MPI_Init or MP_Init_thread(int *argc, char ***argv, int
</span><br>
<span class="quotelev1">&gt; required, int *provide) with
</span><br>
<span class="quotelev1">&gt; reguired=0 but hangs if required&gt;0. ompi_info for my build reports that
</span><br>
<span class="quotelev1">&gt; there is no thread
</span><br>
<span class="quotelev1">&gt; support but MPI_Init_thread returns provide==required.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only change in the CMake configuration was to check
</span><br>
<span class="quotelev1">&gt; OMPI_ENABLE_MPI_THREADS.
</span><br>
<span class="quotelev1">&gt; Is there anything else that needs to be done with the configuration?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have built 1.4.3 with thread support on several linuxes and mac and it
</span><br>
<span class="quotelev1">&gt; works fine there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Not all Windows compilers work well enough with all threading models 
<br>
that you could expect satisfactory results; in particular, the compilers 
<br>
and thread libraries you use on linux may not be adequate for Windows 
<br>
thread support.
<br>
<p><p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17372.php">Blosch, Edwin L: "[OMPI users] Question about compilng with fPIC"</a>
<li><strong>Previous message:</strong> <a href="17370.php">Bj&#195;&#182;rn Regnstr&#195;&#182;m: "[OMPI users] Building with thread support on Windows?"</a>
<li><strong>In reply to:</strong> <a href="17370.php">Bj&#195;&#182;rn Regnstr&#195;&#182;m: "[OMPI users] Building with thread support on Windows?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17378.php">Björn Regnström: "Re: [OMPI users] Building with thread support on Windows?"</a>
<li><strong>Reply:</strong> <a href="17378.php">Björn Regnström: "Re: [OMPI users] Building with thread support on Windows?"</a>
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
