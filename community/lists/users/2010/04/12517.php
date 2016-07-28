<?
$subject_val = "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  1 16:18:02 2010" -->
<!-- isoreceived="20100401201802" -->
<!-- sent="Thu, 01 Apr 2010 15:17:25 -0500" -->
<!-- isosent="20100401201725" -->
<!-- name="Oliver Geisler" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times" -->
<!-- id="4BB4FF55.8060104_at_docawk.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201004011349.23139.keller_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times<br>
<strong>From:</strong> Oliver Geisler (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-01 16:17:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12518.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12516.php">Rainer Keller: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="12516.php">Rainer Keller: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12564.php">Jeff Squyres: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="12564.php">Jeff Squyres: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; However, reading through your initial description on Tuesday, none of these 
</span><br>
<span class="quotelev1">&gt; fit: You want to actually measure the kernel time on TCP communication costs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Since the problem occurs also on node only configuration and mca-option
<br>
btl = self,sm,tcp is used, I doubt it has to do with TCP communication.
<br>
But anyways will keep in the back of my mind.
<br>
<p><span class="quotelev1">&gt; So, have You tried attaching &quot;strace -c -f -p PID&quot; to the actual application 
</span><br>
<span class="quotelev1">&gt; processes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a starter You may invoke the benchmark using:
</span><br>
<span class="quotelev1">&gt;    mpirun -np 4 strace -c -f ./benchmark
</span><br>
<span class="quotelev1">&gt; (which however includes initialization and all other system calls)...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I ran it as you suggested (node-only, no network distribution)
<br>
I am not really fond of analyzing this in detail, but maybe this rings a
<br>
bell for one of you:
<br>
<p>% time     seconds  usecs/call     calls    errors syscall
<br>
------ ----------- ----------- --------- --------- ----------------
<br>
&nbsp;37.97    0.000508           0    119856           rt_sigaction
<br>
&nbsp;33.78    0.000452           0     59925           poll
<br>
&nbsp;21.00    0.000281           0    179776           rt_sigprocmask
<br>
&nbsp;&nbsp;7.25    0.000097           0    121297           gettimeofday
<br>
&nbsp;&nbsp;0.00    0.000000           0        85           read
<br>
&nbsp;&nbsp;0.00    0.000000           0         3           write
<br>
&nbsp;&nbsp;0.00    0.000000           0       324       203 open
<br>
&nbsp;&nbsp;0.00    0.000000           0       129           close
<br>
&nbsp;&nbsp;0.00    0.000000           0         3         3 unlink
<br>
[...]
<br>
% time     seconds  usecs/call     calls    errors syscall
<br>
------ ----------- ----------- --------- --------- ----------------
<br>
&nbsp;34.64    0.000194           0     92934           gettimeofday
<br>
&nbsp;28.75    0.000161           0    137227           rt_sigprocmask
<br>
&nbsp;26.25    0.000147           0     45742           poll
<br>
[...]
<br>
<p>I can provide the whole output, if you like.
<br>
<p><pre>
-- 
This message has been scanned for viruses and
dangerous content by MailScanner, and is
believed to be clean.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12518.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12516.php">Rainer Keller: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>In reply to:</strong> <a href="12516.php">Rainer Keller: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12564.php">Jeff Squyres: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<li><strong>Reply:</strong> <a href="12564.php">Jeff Squyres: "Re: [OMPI users] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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
