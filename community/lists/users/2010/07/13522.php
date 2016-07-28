<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 18:06:02 2010" -->
<!-- isoreceived="20100707220602" -->
<!-- sent="Thu, 08 Jul 2010 00:07:49 +0200" -->
<!-- isosent="20100707220749" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement" -->
<!-- id="87bpajq72i.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="07E77CF9C426584F8126A762FD1AFEA4147F418685_at_HDXMSPA.us.lmco.com" -->
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
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 18:07:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13523.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Previous message:</strong> <a href="13521.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>In reply to:</strong> <a href="13521.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13523.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Reply:</strong> <a href="13523.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 07 Jul 2010 15:51:41 -0600, &quot;Price, Brian M (N-KCI)&quot; &lt;brian.m.price_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand what you've said about 32-bit signed INTs, but in my program, the displacement variable that I use for the MPI_GET call is a 64-bit INT (KIND = 8).
</span><br>
<p>The MPI Fortran bindings expect a standard int, your program is only
<br>
working because your system is little endian so the first 4 bytes are
<br>
the low bytes (correct for numbers less than 2^31), it would be
<br>
completely broken on a big endian system.  This is a library issue, you
<br>
can't fix it by using different sized ints in your program and you would
<br>
see compiler errors due to the type mismatch if you were using Fortran
<br>
90 (which is capable of some type checking).
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13523.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Previous message:</strong> <a href="13521.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>In reply to:</strong> <a href="13521.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13523.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
<li><strong>Reply:</strong> <a href="13523.php">Price, Brian M (N-KCI): "Re: [OMPI users] EXTERNAL: Re:  MPI_GET beyond 2 GB displacement"</a>
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
