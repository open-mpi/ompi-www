<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  2 15:27:04 2006" -->
<!-- isoreceived="20060302202704" -->
<!-- sent="Thu, 2 Mar 2006 21:26:59 +0100" -->
<!-- isosent="20060302202659" -->
<!-- name="Bjoern Nachtwey" -->
<!-- email="b.nachtwey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90 ==&amp;gt; Problem solved" -->
<!-- id="200603022127.01754.b.nachtwey_at_tu-bs.de" -->
<!-- charset="iso-8859-15" -->
<!-- inreplyto="4405F847.4080605_at_st.com" -->
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
<strong>From:</strong> Bjoern Nachtwey (<em>b.nachtwey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-02 15:26:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0763.php">Xiaoning (David) Yang: "[OMPI users] Problem running open mpi across nodes."</a>
<li><strong>Previous message:</strong> <a href="0761.php">Jeff Squyres: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>In reply to:</strong> <a href="0743.php">Brent LEBACK: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0746.php">Troy Telford: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Folks,
<br>
<p>I had to add the &quot;--with-gnu-ld&quot; flag  and call my variables F77 and FC (not 
<br>
FC and F90).
<br>
<p>now it works :-)
<br>
<p>Thanks!
<br>
<p>Bj&#248;rn
<br>
<p>you wrote:
<br>
<span class="quotelev1">&gt; I've used
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --with-gnu-ld F77=pgf77 FFLAGS=-fastsse FC=pgf90
</span><br>
<span class="quotelev1">&gt; FCFLAGS=-fastsse
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and that worked for me.  Email direct if you have problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Brent
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0763.php">Xiaoning (David) Yang: "[OMPI users] Problem running open mpi across nodes."</a>
<li><strong>Previous message:</strong> <a href="0761.php">Jeff Squyres: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>In reply to:</strong> <a href="0743.php">Brent LEBACK: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0746.php">Troy Telford: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
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
