<?
$subject_val = "Re: [OMPI users] Very slow MPI_GATHER";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  1 06:12:21 2012" -->
<!-- isoreceived="20120301111221" -->
<!-- sent="Thu, 1 Mar 2012 06:12:16 -0500" -->
<!-- isosent="20120301111216" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Very slow MPI_GATHER" -->
<!-- id="96D70C02-9AE5-47CB-AE20-B2FA2FAF18E4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2584DBFDF8544E4B85B0E40F35707F7502354EF6_at_hnomb01.corp.atmel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Very slow MPI_GATHER<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-01 06:12:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18637.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Previous message:</strong> <a href="18635.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format errorI"</a>
<li><strong>In reply to:</strong> <a href="18631.php">Pinero, Pedro_jose: "Re: [OMPI users] Very slow MPI_GATHER"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 1, 2012, at 3:33 AM, Pinero, Pedro_jose wrote:
<br>
<p><span class="quotelev1">&gt; I am launching 200 light processes in two computers with 8 cores each one (Intel i7 processor). They are dedicated and are interconnected through a point-to-point Gigabit Ethernet link.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I read about oversubscribing nodes in the open-mpi documentation, and for that reason I am using the option
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -    Mca mpi_yield_when_idle 1
</span><br>
<p>That's still going to give you terrible performance.
<br>
<p>Open MPI was designed to run basically at one process per processor (usually a core).  The easiest reason to cite here is that Open MPI busy-polls while blocking for message passing progress.  The yield_when_idle option *helps* (in some versions of Linux, at least), but it doesn't change that fact that MPI processes will be extremely aggressive in clamoring for CPU cycles.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18637.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<li><strong>Previous message:</strong> <a href="18635.php">Syed Ahsan Ali: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format errorI"</a>
<li><strong>In reply to:</strong> <a href="18631.php">Pinero, Pedro_jose: "Re: [OMPI users] Very slow MPI_GATHER"</a>
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
