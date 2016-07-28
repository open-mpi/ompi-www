<?
$subject_val = "Re: [OMPI users] Building with thread support on Windows?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 21 14:34:06 2011" -->
<!-- isoreceived="20110921183406" -->
<!-- sent="Wed, 21 Sep 2011 20:33:59 +0200" -->
<!-- isosent="20110921183359" -->
<!-- name="Bj&#195;&#182;rn Regnstr&#195;&#182;m" -->
<!-- email="regnstrom_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building with thread support on Windows?" -->
<!-- id="1316630039.4e7a2e1736203_at_go.flowtech.se" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4E7A0398.2090406_at_aol.com" -->
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
<strong>From:</strong> Bj&#195;&#182;rn Regnstr&#195;&#182;m (<em>regnstrom_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-21 14:33:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17379.php">Sébastien Boisvert: "[OMPI users] RE :  Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Previous message:</strong> <a href="17377.php">Tim Prince: "Re: [OMPI users] EXTERNAL: Re:  Question about compilng with fPIC"</a>
<li><strong>In reply to:</strong> <a href="17371.php">Tim Prince: "Re: [OMPI users] Building with thread support on Windows?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17384.php">Shiqing Fan: "Re: [OMPI users] Building with thread support on Windows?"</a>
<li><strong>Reply:</strong> <a href="17384.php">Shiqing Fan: "Re: [OMPI users] Building with thread support on Windows?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am building with VS 2008 and the compiler (cl) and the standard
<br>
libraries that goes&#194;&#160;with&#194;&#160;
<br>
it, including the windows thread library. I have noted that ompi_info
<br>
requires&#194;&#160;either&#194;&#160;Posix&#194;&#160;
<br>
or Solaris threads to report that open-mpi has thread support.&#194;&#160;Do I
<br>
&#194;&#160;need to change&#194;&#160;the&#194;&#160;
<br>
thread library&#194;&#160;and/or do I need another compiler?
<br>
&#194;&#160;
<br>
Regards,
<br>
Bjorn Regnstrom
<br>
<p>At Wednesday, 2011-09-21 on 17:32 Tim Prince wrote:
<br>
<p>On 9/21/2011 11:18 AM, Bj&#195;&#182;rn Regnstr&#195;&#182;m wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to build Open MPI 1.4.3 with thread support on Windows.
</span><br>
A
<br>
<span class="quotelev1">&gt; trivial test program
</span><br>
<span class="quotelev1">&gt; runs if it calls MPI_Init or MP_Init_thread(int *argc, char
</span><br>
***argv, int
<br>
<span class="quotelev1">&gt; required, int *provide) with
</span><br>
<span class="quotelev1">&gt; reguired=0 but hangs if required&gt;0. ompi_info for my build reports
</span><br>
that
<br>
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
<span class="quotelev1">&gt; Is there anything else that needs to be done with the
</span><br>
configuration?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have built 1.4.3 with thread support on several linuxes and mac
</span><br>
and it
<br>
<span class="quotelev1">&gt; works fine there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Not all Windows compilers work well enough with all threading models 
<br>
that you could expect satisfactory results; in particular, the
<br>
compilers 
<br>
and thread libraries you use on linux may not be adequate for Windows
<br>
<p>thread support.
<br>
<p><pre>
-- 
Tim Prince
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17378/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17379.php">Sébastien Boisvert: "[OMPI users] RE :  Latency of 250 microseconds with Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Previous message:</strong> <a href="17377.php">Tim Prince: "Re: [OMPI users] EXTERNAL: Re:  Question about compilng with fPIC"</a>
<li><strong>In reply to:</strong> <a href="17371.php">Tim Prince: "Re: [OMPI users] Building with thread support on Windows?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17384.php">Shiqing Fan: "Re: [OMPI users] Building with thread support on Windows?"</a>
<li><strong>Reply:</strong> <a href="17384.php">Shiqing Fan: "Re: [OMPI users] Building with thread support on Windows?"</a>
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
