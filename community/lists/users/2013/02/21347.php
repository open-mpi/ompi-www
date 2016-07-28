<?
$subject_val = "Re: [OMPI users] now 1.9 [was: I have still a problem withrankfiles in openmpi-1.6.4rc3]";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 10 10:45:59 2013" -->
<!-- isoreceived="20130210154559" -->
<!-- sent="Sun, 10 Feb 2013 07:45:43 -0800" -->
<!-- isosent="20130210154543" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] now 1.9 [was: I have still a problem withrankfiles in openmpi-1.6.4rc3]" -->
<!-- id="5117C0A7.7000601_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201302100914.r1A9ESRI022237_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] now 1.9 [was: I have still a problem withrankfiles in openmpi-1.6.4rc3]<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-10 10:45:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21348.php">satya k: "[OMPI users] running mpi job.."</a>
<li><strong>Previous message:</strong> <a href="21346.php">Siegmar Gross: "Re: [OMPI users] now 1.9 [was: I have still a problem withrankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>In reply to:</strong> <a href="21346.php">Siegmar Gross: "Re: [OMPI users] now 1.9 [was: I have still a problem withrankfiles in openmpi-1.6.4rc3]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/10/2013 1:14 AM, Siegmar Gross wrote:
<br>
<span class="quotelev2">&gt;&gt; I don't think the problem is related to Solaris.  I think it's also on Linux.
</span><br>
<span class="quotelev2">&gt;&gt; E.g., I can reproduce the problem with 1.9a1r28035 on Linux using GCC compilers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar: can you confirm this is a problem also on Linux?  E.g.,
</span><br>
<span class="quotelev2">&gt;&gt; with OMPI 1.9, on one of your Linux nodes (linpc0?) try
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       % cat myrankfile
</span><br>
<span class="quotelev2">&gt;&gt;       rank 0=linpc0 slot=0:1
</span><br>
<span class="quotelev2">&gt;&gt;       % mpirun --report-bindings --rankfile myrankfile numactl --show
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For me, the binding I get is not 0:1 but 0,1.
</span><br>
<span class="quotelev1">&gt; I get the following outputs for openmpi-1.6.4rc4 (without your patch)
</span><br>
<p>Okay thanks, but 1.6 is not the issue here.  There is something going on 
<br>
in 1.9/trunk that is very different.  Thanks for the 1.6 output, but 
<br>
it's all right.
<br>
<p><span class="quotelev1">&gt; and openmpi-1.9 (both compiled with Sun C 5.12).
</span><br>
<p>Thanks for the confirmation.  You, too, are showing Linux demonstrating 
<br>
this problem.  It looks like bindings are wrong in 1.9.  Ralph says he's 
<br>
taking a look.  The rankfile says &quot;0:1&quot;, but you're getting &quot;0,1&quot;.
<br>
<p><span class="quotelev1">&gt; linpc1 rankfiles 96 mpirun --report-bindings --rankfile rf_1_linux numactl --show
</span><br>
<span class="quotelev1">&gt; [linpc1:16061] MCW rank 0 bound to socket 0[core 0[hwt 0]], socket 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev1">&gt; physcpubind: 0 1
</span><br>
<span class="quotelev1">&gt; linpc1 rankfiles 97 ompi_info | grep &quot;MPI:&quot;
</span><br>
<span class="quotelev1">&gt;                  Open MPI: 1.9a1r28035
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21348.php">satya k: "[OMPI users] running mpi job.."</a>
<li><strong>Previous message:</strong> <a href="21346.php">Siegmar Gross: "Re: [OMPI users] now 1.9 [was: I have still a problem withrankfiles in openmpi-1.6.4rc3]"</a>
<li><strong>In reply to:</strong> <a href="21346.php">Siegmar Gross: "Re: [OMPI users] now 1.9 [was: I have still a problem withrankfiles in openmpi-1.6.4rc3]"</a>
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
