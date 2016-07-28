<?
$subject_val = "Re: [OMPI users] Mixing the FORTRAN and C APIs.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 13:51:05 2011" -->
<!-- isoreceived="20110506175105" -->
<!-- sent="Fri, 6 May 2011 10:50:58 -0700" -->
<!-- isosent="20110506175058" -->
<!-- name="Tim Prince" -->
<!-- email="tcprince_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixing the FORTRAN and C APIs." -->
<!-- id="BLU0-SMTP118EB4823E7ADE742D86D91B7830_at_phx.gbl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTiminXkp8=LqADkagK6s2oaBvx3o+w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mixing the FORTRAN and C APIs.<br>
<strong>From:</strong> Tim Prince (<em>tcprince_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-06 13:50:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16468.php">Rodrigo Oliveira: "[OMPI users] Error when trying to kill a spawned process"</a>
<li><strong>Previous message:</strong> <a href="16466.php">Tim Hutt: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>In reply to:</strong> <a href="16466.php">Tim Hutt: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16479.php">Jeff Squyres: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>Reply:</strong> <a href="16479.php">Jeff Squyres: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/6/2011 10:22 AM, Tim Hutt wrote:
<br>
<span class="quotelev1">&gt; On 6 May 2011 16:45, Tim Hutt&lt;tdhutt_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 6 May 2011 16:27, Tim Prince&lt;tcprince_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you want to use the MPI Fortran library, don't convert your Fortran to C.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   It's difficult to understand why you would consider f2c a &quot;simplest way,&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but at least it should allow you to use ordinary C MPI function calls.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry, maybe I wasn't clear. Just to clarify, all of *my* code is
</span><br>
<span class="quotelev2">&gt;&gt; written in C++ (because I don't actually know Fortran), but I want to
</span><br>
<span class="quotelev2">&gt;&gt; use some function from PARPACK which is written in Fortran.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm I converted my C++ code to use the C OpenMPI interface instead,
</span><br>
<span class="quotelev1">&gt; and now I get link errors (undefined references). I remembered I've
</span><br>
<span class="quotelev1">&gt; been linking with -lmpi -lmpi_f77, so maybe I need to also link with
</span><br>
<span class="quotelev1">&gt; -lmpi_cxx or -lmpi++  ... what exactly do each of these libraries
</span><br>
<span class="quotelev1">&gt; contain?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also I have run into the problem that the communicators are of type
</span><br>
<span class="quotelev1">&gt; &quot;MPI_Comm&quot; in C, and &quot;integer&quot; in Fortran... I am using MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; in each case so I assume that will end up referring to the same
</span><br>
<span class="quotelev1">&gt; thing... but maybe you really can't mix Fortran and C. Expert opinion
</span><br>
<span class="quotelev1">&gt; would be very very welcome!
</span><br>
<span class="quotelev1">&gt;
</span><br>
If you use your OpenMPI mpicc wrapper to compile and link, the MPI 
<br>
libraries should be taken care of.
<br>
Style usage in an f2c translation is debatable, but you have an #include 
<br>
&quot;f2c.h&quot; or &quot;g2c.h&quot; which translates the Fortran data types to legacy C 
<br>
equivalent.  By legacy I mean that in the f2c era, the inclusion of C 
<br>
data types in Fortran via USE iso_c_binding had not been envisioned.
<br>
One would think that you would use the MPI header data types on both the 
<br>
Fortran and the C side, even though you are using legacy interfaces.
<br>
Slip-ups in MPI data types often lead to run-time errors.  If you have 
<br>
an error-checking MPI library such as the Intel MPI one, you get a 
<br>
little better explanation at the failure point.
<br>
<pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16468.php">Rodrigo Oliveira: "[OMPI users] Error when trying to kill a spawned process"</a>
<li><strong>Previous message:</strong> <a href="16466.php">Tim Hutt: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>In reply to:</strong> <a href="16466.php">Tim Hutt: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16479.php">Jeff Squyres: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
<li><strong>Reply:</strong> <a href="16479.php">Jeff Squyres: "Re: [OMPI users] Mixing the FORTRAN and C APIs."</a>
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
