<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 19:34:59 2010" -->
<!-- isoreceived="20100707233459" -->
<!-- sent="Wed, 07 Jul 2010 17:34:44 -0600" -->
<!-- isosent="20100707233444" -->
<!-- name="Price, Brian M (N-KCI)" -->
<!-- email="brian.m.price_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement" -->
<!-- id="07E77CF9C426584F8126A762FD1AFEA4147F418785_at_HDXMSPA.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87bpajq72i.fsf_at_59A2.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement<br>
<strong>From:</strong> Price, Brian M (N-KCI) (<em>brian.m.price_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 19:34:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13524.php">Zhigang Wei: "[OMPI users] configure options"</a>
<li><strong>Previous message:</strong> <a href="13522.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>In reply to:</strong> <a href="13522.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13527.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Reply:</strong> <a href="13527.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jed,
<br>
<p>The IBM P5 I'm working on is big endian.
<br>
<p>The test program I'm using is written in Fortran 90 (as stated in my question).
<br>
<p>I imagine this is indeed a library issue, but I still don't understand what I've done wrong here.
<br>
<p>Can anyone tell me how I should be building my OpenMPI libraries and my test program so that this test would work correctly?
<br>
<p>Thanks.
<br>
<p>-----Original Message-----
<br>
From: Jed Brown [mailto:five9a2_at_[hidden]] On Behalf Of Jed Brown
<br>
Sent: Wednesday, July 07, 2010 3:08 PM
<br>
To: Price, Brian M (N-KCI); Open MPI Users
<br>
Subject: Re: [OMPI users] EXTERNAL: Re: MPI_GET beyond 2 GB displacement
<br>
<p>On Wed, 07 Jul 2010 15:51:41 -0600, &quot;Price, Brian M (N-KCI)&quot; &lt;brian.m.price_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand what you've said about 32-bit signed INTs, but in my program, the displacement variable that I use for the MPI_GET call is a 64-bit INT (KIND = 8).
</span><br>
<p>The MPI Fortran bindings expect a standard int, your program is only working because your system is little endian so the first 4 bytes are the low bytes (correct for numbers less than 2^31), it would be completely broken on a big endian system.  This is a library issue, you can't fix it by using different sized ints in your program and you would see compiler errors due to the type mismatch if you were using Fortran 90 (which is capable of some type checking).
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13524.php">Zhigang Wei: "[OMPI users] configure options"</a>
<li><strong>Previous message:</strong> <a href="13522.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>In reply to:</strong> <a href="13522.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13527.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Reply:</strong> <a href="13527.php">Jed Brown: "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
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
