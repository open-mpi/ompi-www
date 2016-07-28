<?
$subject_val = "Re: [OMPI users] Help: HPL Compiled Problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 22 02:41:07 2009" -->
<!-- isoreceived="20090722064107" -->
<!-- sent="Wed, 22 Jul 2009 14:40:54 +0800" -->
<!-- isosent="20090722064054" -->
<!-- name="Lee Amy" -->
<!-- email="openlinuxsource_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: HPL Compiled Problem" -->
<!-- id="289665360907212340h484cdbe2g10c3fccc0cae0c19_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.63.0907220818580.12249_at_druifje.clustervision.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: HPL Compiled Problem<br>
<strong>From:</strong> Lee Amy (<em>openlinuxsource_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-22 02:40:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10030.php">Daniël Mantione: "Re: [OMPI users] Help: HPL Compiled Problem"</a>
<li><strong>Previous message:</strong> <a href="10028.php">Dani&#235;l Mantione: "Re: [OMPI users] Help: HPL Compiled Problem"</a>
<li><strong>In reply to:</strong> <a href="10028.php">Dani&#235;l Mantione: "Re: [OMPI users] Help: HPL Compiled Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10030.php">Daniël Mantione: "Re: [OMPI users] Help: HPL Compiled Problem"</a>
<li><strong>Reply:</strong> <a href="10030.php">Daniël Mantione: "Re: [OMPI users] Help: HPL Compiled Problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 22, 2009 at 2:20 PM, Dani&#235;l
<br>
Mantione&lt;daniel.mantione_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 22 Jul 2009, Lee Amy wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm going to compile HPL by using OpenMPI-1.2.4. Here's my
</span><br>
<span class="quotelev2">&gt;&gt; Make.Linux_ATHLON_CBLAS file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GotoBLAS needs to be called as Fortran BLAS, so you need to switch from
</span><br>
<span class="quotelev1">&gt; CBLAS to FBLAS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dani&#235;l Mantione
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Dear sir,
<br>
<p>Thank you very much. I have compiled HPL successfully. But when I
<br>
start up xhpl program I encountered such problem.
<br>
<p>[node101:15416] *** Process received signal ***
<br>
[node101:15418] *** Process received signal ***
<br>
[node101:15418] Signal: Segmentation fault (11)
<br>
[node101:15418] Signal code: Address not mapped (1)
<br>
[node101:15418] Failing at address: 0x7fff
<br>
[node101:15416] Signal: Segmentation fault (11)
<br>
[node101:15416] Signal code: Address not mapped (1)
<br>
[node101:15416] Failing at address: 0x7fff
<br>
[node101:15418] [ 0] /lib64/libc.so.6 [0x2b7e20aa1c30]
<br>
[node101:15418] [ 1] xhpl [0x4259f0]
<br>
[node101:15418] *** End of error message ***
<br>
[node101:15416] [ 0] /lib64/libc.so.6 [0x2aacfce93c30]
<br>
[node101:15416] [ 1] xhpl [0x4259f0]
<br>
[node101:15416] *** End of error message ***
<br>
mpirun noticed that job rank 0 with PID 15416 on node node101 exited
<br>
on signal 11 (Segmentation fault).
<br>
<p>Here's the uname -a output.
<br>
<p>Linux node101 2.6.16.60-0.21-smp #1 SMP Tue May 6 12:41:02 UTC 2008
<br>
x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>Here's the lsb_release output.
<br>
<p>LSB Version:
<br>
core-2.0-noarch:core-3.0-noarch:core-2.0-x86_64:core-3.0-x86_64:desktop-3.1-amd64:desktop-3.1-noarch:graphics-2.0-amd64:graphics-2.0-noarch:graphics-3.1-amd64:graphics-3.1-noarch
<br>
<p>Could you tell me how to fix that?
<br>
<p>Thank you very much.
<br>
<p>Amy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10030.php">Daniël Mantione: "Re: [OMPI users] Help: HPL Compiled Problem"</a>
<li><strong>Previous message:</strong> <a href="10028.php">Dani&#235;l Mantione: "Re: [OMPI users] Help: HPL Compiled Problem"</a>
<li><strong>In reply to:</strong> <a href="10028.php">Dani&#235;l Mantione: "Re: [OMPI users] Help: HPL Compiled Problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10030.php">Daniël Mantione: "Re: [OMPI users] Help: HPL Compiled Problem"</a>
<li><strong>Reply:</strong> <a href="10030.php">Daniël Mantione: "Re: [OMPI users] Help: HPL Compiled Problem"</a>
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
