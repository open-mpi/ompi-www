<?
$subject_val = "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel	Compilers 11.1.058 =&gt; Segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 13:22:39 2009" -->
<!-- isoreceived="20090908172239" -->
<!-- sent="Tue, 8 Sep 2009 14:20:34 -0300" -->
<!-- isosent="20090908172034" -->
<!-- name="Douglas Guptill" -->
<!-- email="douglas.guptill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel	Compilers 11.1.058 =&amp;gt; Segmentation fault" -->
<!-- id="20090908172034.GA27996_at_dome" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="98F0CECE-5B38-4519-A043-FEA353AED643_at_apple.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel	Compilers 11.1.058 =&gt; Segmentation fault<br>
<strong>From:</strong> Douglas Guptill (<em>douglas.guptill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-08 13:20:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10594.php">James: "Re: [OMPI users] Heterogeneous SLURM cluster segfaults on largetransfers"</a>
<li><strong>Previous message:</strong> <a href="10592.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>In reply to:</strong> <a href="10591.php">Warner Yuen: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Sep 08, 2009 at 08:32:47AM -0700, Warner Yuen wrote:
<br>
<p><span class="quotelev1">&gt; I also had the same problem with IFORT and ICC with OMPI-1.33 on Mac OS X 
</span><br>
<span class="quotelev1">&gt; v10.6. However, I was successfully able to use 10.6 Server with IFORT 
</span><br>
<span class="quotelev1">&gt; 11.1.058 and GCC.
</span><br>
<p>That is an interesting result, in light of question #14 of:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=building">http://www.open-mpi.org/faq/?category=building</a>
<br>
<p>which says, in part:
<br>
<p>NOTE: The Open MPI team recommends using a single compiler suite
<br>
whenever possible. Unexpeced or undefined behavior can occur when you
<br>
mix compiler suites in unsupported ways (e.g., mixing Fortran 77 and
<br>
Fortran 90 compilers between different compiler suites is almost
<br>
guaranteed not to work).
<br>
<p>Perhaps mixing Fortran from one compiler suite and C from another is
<br>
reasonable?
<br>
<p>Douglas.
<br>
<p><span class="quotelev1">&gt; On Sep 8, 2009, at 7:11 AM, users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 7
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 8 Sep 2009 07:10:50 -0700
</span><br>
<span class="quotelev2">&gt;&gt; From: Marcus Herrmann &lt;marcus.herrmann_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel
</span><br>
<span class="quotelev2">&gt;&gt; 	Compilers 11.1.058 =&gt; Segmentation fault
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;52515ACC-6E3E-4BEA-AE91-89B587A7C24F_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain;	charset=us-ascii;	format=flowed;	delsp=yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Christophe,
</span><br>
<span class="quotelev2">&gt;&gt; the 11.1.058 compilers are not (yet) compatible with snow leopard. See
</span><br>
<span class="quotelev2">&gt;&gt; the Intel compiler Forums. The gnu compilers however work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Marcus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10594.php">James: "Re: [OMPI users] Heterogeneous SLURM cluster segfaults on largetransfers"</a>
<li><strong>Previous message:</strong> <a href="10592.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>In reply to:</strong> <a href="10591.php">Warner Yuen: "Re: [OMPI users] Mac OSX 10.6 (SL) + openMPI 1.3.3 + Intel Compilers 11.1.058 =&gt; Segmentation fault"</a>
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
