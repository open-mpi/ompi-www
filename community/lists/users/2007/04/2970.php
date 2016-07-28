<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr  1 13:36:54 2007" -->
<!-- isoreceived="20070401173654" -->
<!-- sent="Sun, 1 Apr 2007 19:35:51 +0200" -->
<!-- isosent="20070401173551" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] experiences with gfortran and ompi" -->
<!-- id="200704011935.52230.keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D2D7D9FE2492524A925313E2D82E1B5304E9EBE7_at_ORNLEXCHANGE.ornl.gov" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-01 13:35:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2971.php">de Almeida, Valmor F.: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20"</a>
<li><strong>Previous message:</strong> <a href="2969.php">de Almeida, Valmor F.: "[OMPI users] experiences with gfortran and ompi"</a>
<li><strong>In reply to:</strong> <a href="2969.php">de Almeida, Valmor F.: "[OMPI users] experiences with gfortran and ompi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2972.php">Jeff Squyres: "Re: [OMPI users] experiences with gfortran and ompi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Valmor,
<br>
On Sunday 01 April 2007 18:50, de Almeida, Valmor F. wrote:
<br>
<span class="quotelev1">&gt; I would be interested in hearing folk's experiences with gfortran and
</span><br>
<span class="quotelev1">&gt; ompi-1.2. Is gfortran good enough for prime time?
</span><br>
Well, I have the same experience like You -- compiling ompi is not the issue, 
<br>
however some applications still are, like cpmd in my case.
<br>
<p><span class="quotelev1">&gt; I have built ompi-1.2 with gfortran-4.1.1 but no luck in testing it
</span><br>
<span class="quotelev1">&gt; because my application of interest (legacy fortran code) will not
</span><br>
<span class="quotelev1">&gt; compile with gfortran.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In addition I would be interested in hearing about the use of different
</span><br>
<span class="quotelev1">&gt; fortran compilers. For instance, how about building ompi with gfortran
</span><br>
<span class="quotelev1">&gt; but compiling mpi fortran codes with the intel compiler?
</span><br>
That's not a good idea, as fortran compilers may have different values 
<br>
representations of Logical, alignment and possibly even type-sizes, e.g. the 
<br>
intel-compiler considers logical TRUE to be -1, while gcc expects TRUE to be 
<br>
0.
<br>
<p>With best regards,
<br>
Rainer
<br>
<pre>
-- 
----------------------------------------------------------------
Dipl.-Inf. Rainer Keller       <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
 High Performance Computing       Tel: ++49 (0)711-685 6 5858
   Center Stuttgart (HLRS)           Fax: ++49 (0)711-685 6 5832
 POSTAL:Nobelstrasse 19                 email: keller_at_[hidden]     
 ACTUAL:Allmandring 30, R.O.030            AIM:rusraink
 70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2971.php">de Almeida, Valmor F.: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20"</a>
<li><strong>Previous message:</strong> <a href="2969.php">de Almeida, Valmor F.: "[OMPI users] experiences with gfortran and ompi"</a>
<li><strong>In reply to:</strong> <a href="2969.php">de Almeida, Valmor F.: "[OMPI users] experiences with gfortran and ompi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2972.php">Jeff Squyres: "Re: [OMPI users] experiences with gfortran and ompi"</a>
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
