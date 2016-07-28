<?
$subject_val = "Re: [OMPI users] How to run OpenMPI C code under Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 22 17:30:31 2015" -->
<!-- isoreceived="20151122223031" -->
<!-- sent="Sun, 22 Nov 2015 23:30:18 +0100" -->
<!-- isosent="20151122223018" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to run OpenMPI C code under Windows 7" -->
<!-- id="565241FA.90102_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20151122150412.1c953d03de16b6167e9703e6814645d8.0674b95200.wbe_at_email01.secureserver.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to run OpenMPI C code under Windows 7<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-22 17:30:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28093.php">Tim Prince: "Re: [OMPI users] How to run OpenMPI C code under Windows 7"</a>
<li><strong>Previous message:</strong> <a href="28091.php">Philip Bitar: "[OMPI users] How to run OpenMPI C code under Windows 7"</a>
<li><strong>In reply to:</strong> <a href="28091.php">Philip Bitar: "[OMPI users] How to run OpenMPI C code under Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28093.php">Tim Prince: "Re: [OMPI users] How to run OpenMPI C code under Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 22/11/2015 23:04, Philip Bitar wrote:
<br>
<span class="quotelev1">&gt; *How to run OpenMPI C code under Windows 7*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to get OpenMPI C code to run under Windows 7 any way that I
</span><br>
<span class="quotelev1">&gt; can. Evidently there is no current support for running OpenMPI directly
</span><br>
<span class="quotelev1">&gt; under Windows 7, so I installed Cygwin. Is there a better way to run
</span><br>
<span class="quotelev1">&gt; OpenMPI C code under Windows 7?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Under Cygwin, I installed a GCC C compiler, which works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also installed an OpenMPI package. Here is a link to a list of the
</span><br>
<span class="quotelev1">&gt; files in the Cygwin OpenMPI package:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://cygwin.com/cgi-bin2/package-cat.cgi?file=x86%2Flibopenmpi%2Flibopenmpi-1.8.6-1&amp;grep=openmpi">https://cygwin.com/cgi-bin2/package-cat.cgi?file=x86%2Flibopenmpi%2Flibopenmpi-1.8.6-1&amp;grep=openmpi</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My PATH variable is as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/bin:/usr/bin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc will compile, but it won't link. It can't find the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -lmpi
</span><br>
<span class="quotelev1">&gt; -lopen-rte
</span><br>
<span class="quotelev1">&gt; -lopen-pal
</span><br>
<p>have you installed libopenmpi-devel ?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28093.php">Tim Prince: "Re: [OMPI users] How to run OpenMPI C code under Windows 7"</a>
<li><strong>Previous message:</strong> <a href="28091.php">Philip Bitar: "[OMPI users] How to run OpenMPI C code under Windows 7"</a>
<li><strong>In reply to:</strong> <a href="28091.php">Philip Bitar: "[OMPI users] How to run OpenMPI C code under Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28093.php">Tim Prince: "Re: [OMPI users] How to run OpenMPI C code under Windows 7"</a>
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
