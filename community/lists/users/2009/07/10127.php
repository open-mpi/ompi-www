<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1302, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 11:27:58 2009" -->
<!-- isoreceived="20090729152758" -->
<!-- sent="Wed, 29 Jul 2009 16:27:50 +0100" -->
<!-- isosent="20090729152750" -->
<!-- name="Ricardo Fonseca" -->
<!-- email="ricardo.fonseca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1302, Issue 1" -->
<!-- id="14714E7D-04BB-4DC8-8061-89591F33ACB8_at_ist.utl.pt" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.12369.1248863251.6040.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1302, Issue 1<br>
<strong>From:</strong> Ricardo Fonseca (<em>ricardo.fonseca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-29 11:27:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10128.php">Michael Di Domenico: "[OMPI users] strange IMB runs"</a>
<li><strong>Previous message:</strong> <a href="10126.php">Jeffrey M Ceason: "[OMPI users] Jeffrey M Ceason is out of the office."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I am using the right one. I've installed the freshly compiled  
<br>
openmpi into /opt/openmpi/1.3.3-g95-32. If I edit the mpif.h file by  
<br>
hand and put &quot;error!&quot; in the first line I get:
<br>
<p>zamblap:sandbox zamb$ edit /opt/openmpi/1.3.3-g95-32/include/mpif.h
<br>
<p>zamblap:sandbox zamb$ mpif77 inplace_test.f90
<br>
<p>In file mpif.h:1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Included at inplace_test.f90:7
<br>
<p>error!
<br>
<p>1
<br>
<p>Error: Unclassifiable statement at (1)
<br>
<p>(btw, if I use the F90 bindings instead I get a similar problem,  
<br>
except the address for the MPI_IN_PLACE fortran constant is slightly  
<br>
different from the F77 binding, i.e. instead of 0x50920 I get 0x508e0)
<br>
<p>Thanks for your help,
<br>
<p>Ricardo
<br>
<p><span class="quotelev1">&gt; Subject: Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran  
</span><br>
<span class="quotelev1">&gt; withMPI_REDUCE / MPI_ALLREDUCE
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres (jsquyres_at_[hidden])
</span><br>
<span class="quotelev1">&gt; Date: 2009-07-29 08:54:38
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you confirm that you're using the right mpif.h?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Keep in mind that each MPI implementation's mpif.h is different --
</span><br>
<span class="quotelev1">&gt; it's a common mistake to assume that the mpif.h from one MPI
</span><br>
<span class="quotelev1">&gt; implementation should work with another implementation (e.g., someone
</span><br>
<span class="quotelev1">&gt; copied mpif.h from one MPI to your software's source tree, so the
</span><br>
<span class="quotelev1">&gt; compiler always finds that one instead of the MPI-implementation-
</span><br>
<span class="quotelev1">&gt; provided mpif.h.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2009, at 1:17 PM, Ricardo Fonseca wrote:
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10128.php">Michael Di Domenico: "[OMPI users] strange IMB runs"</a>
<li><strong>Previous message:</strong> <a href="10126.php">Jeffrey M Ceason: "[OMPI users] Jeffrey M Ceason is out of the office."</a>
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
