<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr  2 08:03:06 2007" -->
<!-- isoreceived="20070402120306" -->
<!-- sent="Mon, 2 Apr 2007 08:01:34 -0400" -->
<!-- isosent="20070402120134" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] experiences with gfortran and ompi" -->
<!-- id="5DE02066-34AC-470C-901F-6064A85B575F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-02 08:01:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2973.php">Weikuan Yu: "[OMPI users] HotI 2007 Call for Papers -- Deadline (April 9) is approaching"</a>
<li><strong>Previous message:</strong> <a href="2971.php">de Almeida, Valmor F.: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20"</a>
<li><strong>In reply to:</strong> <a href="2969.php">de Almeida, Valmor F.: "[OMPI users] experiences with gfortran and ompi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2983.php">de Almeida, Valmor F.: "Re: [OMPI users] experiences with gfortran and ompi"</a>
<li><strong>Reply:</strong> <a href="2983.php">de Almeida, Valmor F.: "Re: [OMPI users] experiences with gfortran and ompi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 1, 2007, at 12:50 PM, de Almeida, Valmor F. wrote:
<br>
<p><span class="quotelev1">&gt; I would be interested in hearing folk's experiences with gfortran and
</span><br>
<span class="quotelev1">&gt; ompi-1.2. Is gfortran good enough for prime time?
</span><br>
<p>It is my understanding that gfortran is the GNU path forward -- they  
<br>
are not spending any time on g77.  I've been using gfortran (for  
<br>
testing only; I'm not an apps guy) for a few years and have been  
<br>
relatively pleased with it.
<br>
<p><span class="quotelev1">&gt; I have built ompi-1.2 with gfortran-4.1.1 but no luck in testing it
</span><br>
<span class="quotelev1">&gt; because my application of interest (legacy fortran code) will not
</span><br>
<span class="quotelev1">&gt; compile with gfortran.
</span><br>
<p>Bummer.  FWIW, we have some internal testing OMPI Fortran codes that  
<br>
are difficult to get to compile uniformly across all Fortran  
<br>
compilers (the most difficult point is usually fortran pointers).   
<br>
This could well be because of my lack of knowledge of Fortran,  
<br>
however -- I am nowhere close to being a Fortran expert.
<br>
<p><span class="quotelev1">&gt; In addition I would be interested in hearing about the use of  
</span><br>
<span class="quotelev1">&gt; different
</span><br>
<span class="quotelev1">&gt; fortran compilers. For instance, how about building ompi with gfortran
</span><br>
<span class="quotelev1">&gt; but compiling mpi fortran codes with the intel compiler?
</span><br>
<p>As Rainer said, we don't recommend this.  It may be possible, but I  
<br>
would not suggest this course of action unless you have a strong need  
<br>
to do so.  Additionally, we tend to only test the single-compiler- 
<br>
suite scenarios (e.g., gcc/g++/gfortran, pgcc/pgCC/pgf77/pgf90, icc/ 
<br>
icpc/ifort, etc.), so I don't have much data about mixing compilers  
<br>
for you; sorry.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2973.php">Weikuan Yu: "[OMPI users] HotI 2007 Call for Papers -- Deadline (April 9) is approaching"</a>
<li><strong>Previous message:</strong> <a href="2971.php">de Almeida, Valmor F.: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20"</a>
<li><strong>In reply to:</strong> <a href="2969.php">de Almeida, Valmor F.: "[OMPI users] experiences with gfortran and ompi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2983.php">de Almeida, Valmor F.: "Re: [OMPI users] experiences with gfortran and ompi"</a>
<li><strong>Reply:</strong> <a href="2983.php">de Almeida, Valmor F.: "Re: [OMPI users] experiences with gfortran and ompi"</a>
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
