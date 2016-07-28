<?
$subject_val = "Re: [OMPI users] Building with thread support on Windows?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 21 18:00:28 2011" -->
<!-- isoreceived="20110921220028" -->
<!-- sent="Thu, 22 Sep 2011 00:00:21 +0200" -->
<!-- isosent="20110921220021" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building with thread support on Windows?" -->
<!-- id="4E7A5E75.6070409_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1316630039.4e7a2e1736203_at_go.flowtech.se" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-21 18:00:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17385.php">Sébastien Boisvert: "[OMPI users] RE : RE : RE : Latency of 250 microseconds with	Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Previous message:</strong> <a href="17383.php">Jeff Squyres: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>In reply to:</strong> <a href="17378.php">Bj&#195;&#182;rn Regnstr&#195;&#182;m: "Re: [OMPI users] Building with thread support on Windows?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Bjorn,
<br>
<p>Unfortunately, the currently version of Open MPI for Windows doesn't 
<br>
support Posix nor Solaris threads.
<br>
<p>However, the work of supporting MinGW is proceeding, which will support 
<br>
GNU compilers for building Open MPI on Windows, and it may partly 
<br>
support pthread, but still needs a lot of tests.
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><p><p>On 2011-09-21 8:33 PM, Bj&#246;rn Regnstr&#246;m wrote:
<br>
<span class="quotelev1">&gt; I am building with VS 2008 and the compiler (cl) and the standard 
</span><br>
<span class="quotelev1">&gt; libraries that goes with
</span><br>
<span class="quotelev1">&gt; it, including the windows thread library. I have noted that ompi_info 
</span><br>
<span class="quotelev1">&gt; requires either Posix
</span><br>
<span class="quotelev1">&gt; or Solaris threads to report that open-mpi has thread support. Do I 
</span><br>
<span class="quotelev1">&gt;  need to change the
</span><br>
<span class="quotelev1">&gt; thread library and/or do I need another compiler?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Bjorn Regnstrom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At Wednesday, 2011-09-21 on 17:32 Tim Prince wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 9/21/2011 11:18 AM, Bj&#246;rn Regnstr&#246;m wrote:
</span><br>
<span class="quotelev2">&gt;     &gt; Hi,
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I am trying to build Open MPI 1.4.3 with thread support on
</span><br>
<span class="quotelev1">&gt;     Windows. A
</span><br>
<span class="quotelev2">&gt;     &gt; trivial test program
</span><br>
<span class="quotelev2">&gt;     &gt; runs if it calls MPI_Init or MP_Init_thread(int *argc, char
</span><br>
<span class="quotelev1">&gt;     ***argv, int
</span><br>
<span class="quotelev2">&gt;     &gt; required, int *provide) with
</span><br>
<span class="quotelev2">&gt;     &gt; reguired=0 but hangs if required&gt;0. ompi_info for my build
</span><br>
<span class="quotelev1">&gt;     reports that
</span><br>
<span class="quotelev2">&gt;     &gt; there is no thread
</span><br>
<span class="quotelev2">&gt;     &gt; support but MPI_Init_thread returns provide==required.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; The only change in the CMake configuration was to check
</span><br>
<span class="quotelev2">&gt;     &gt; OMPI_ENABLE_MPI_THREADS.
</span><br>
<span class="quotelev2">&gt;     &gt; Is there anything else that needs to be done with the configuration?
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; I have built 1.4.3 with thread support on several linuxes and
</span><br>
<span class="quotelev1">&gt;     mac and it
</span><br>
<span class="quotelev2">&gt;     &gt; works fine there.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev1">&gt;     Not all Windows compilers work well enough with all threading models
</span><br>
<span class="quotelev1">&gt;     that you could expect satisfactory results; in particular, the
</span><br>
<span class="quotelev1">&gt;     compilers
</span><br>
<span class="quotelev1">&gt;     and thread libraries you use on linux may not be adequate for Windows
</span><br>
<span class="quotelev1">&gt;     thread support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Tim Prince
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17384/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17385.php">Sébastien Boisvert: "[OMPI users] RE : RE : RE : Latency of 250 microseconds with	Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Previous message:</strong> <a href="17383.php">Jeff Squyres: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>In reply to:</strong> <a href="17378.php">Bj&#195;&#182;rn Regnstr&#195;&#182;m: "Re: [OMPI users] Building with thread support on Windows?"</a>
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
