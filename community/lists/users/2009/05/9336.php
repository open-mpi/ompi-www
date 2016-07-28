<?
$subject_val = "Re: [OMPI users] could oversubscription clobber an executable?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 09:35:31 2009" -->
<!-- isoreceived="20090514133531" -->
<!-- sent="Thu, 14 May 2009 09:35:25 -0400" -->
<!-- isosent="20090514133525" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] could oversubscription clobber an executable?" -->
<!-- id="BA4E2974-D51F-4111-83DB-1CFD8D3BDBB9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A0BA55F.3050807_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] could oversubscription clobber an executable?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 09:35:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9337.php">Åke Sandgren: "Re: [OMPI users] Problems with &quot;error polling LP CQ with status	RNR&quot;"</a>
<li><strong>Previous message:</strong> <a href="9335.php">Jeff Squyres: "Re: [OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
<li><strong>In reply to:</strong> <a href="9330.php">Valmor de Almeida: "[OMPI users] could oversubscription clobber an executable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9338.php">Valmor de Almeida: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Reply:</strong> <a href="9338.php">Valmor de Almeida: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Reply:</strong> <a href="9344.php">Valmor de Almeida: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This sounds like memory badness is occurring somewhere in your  
<br>
application which eventually corrupts things to make them stop working  
<br>
(e.g., writing beyond the end of arrays, etc.).  Have you run your app  
<br>
through a memory-checking debugger, perchance?
<br>
<p><p>On May 14, 2009, at 1:00 AM, Valmor de Almeida wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am wondering whether light oversubscription could lead to a  
</span><br>
<span class="quotelev1">&gt; clobbered
</span><br>
<span class="quotelev1">&gt; program. The particular case is a fortran 77 (for the most part)  
</span><br>
<span class="quotelev1">&gt; code I
</span><br>
<span class="quotelev1">&gt; am working with that can only run on powers of 2 processes (starting
</span><br>
<span class="quotelev1">&gt; with power 1). When I run the program on my single-processor laptop,  
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev1">&gt; shows some erratic behavior, namely the fortran system calls that  
</span><br>
<span class="quotelev1">&gt; create
</span><br>
<span class="quotelev1">&gt; directories and rename files, etc. do not work after some point in the
</span><br>
<span class="quotelev1">&gt; program. I only use -np 2 and the hostfile is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 'hostname' slots=1 max_slots=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Changing the dimension of some larger arrays in the program do affect
</span><br>
<span class="quotelev1">&gt; the point where the system calls do not work. The status of the mpi
</span><br>
<span class="quotelev1">&gt; calls is normal; no errors reported. I am using gfortran 4.3.2 and
</span><br>
<span class="quotelev1">&gt; ompi-1.3.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program runs normally on my workstation with 4 processors with the
</span><br>
<span class="quotelev1">&gt; same compiler/ompi versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any inputs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Valmor
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9337.php">Åke Sandgren: "Re: [OMPI users] Problems with &quot;error polling LP CQ with status	RNR&quot;"</a>
<li><strong>Previous message:</strong> <a href="9335.php">Jeff Squyres: "Re: [OMPI users] Problems with &quot;error polling LP CQ with status RNR&quot;"</a>
<li><strong>In reply to:</strong> <a href="9330.php">Valmor de Almeida: "[OMPI users] could oversubscription clobber an executable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9338.php">Valmor de Almeida: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Reply:</strong> <a href="9338.php">Valmor de Almeida: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Reply:</strong> <a href="9344.php">Valmor de Almeida: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
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
