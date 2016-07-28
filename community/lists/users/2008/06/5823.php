<?
$subject_val = "Re: [OMPI users] Communicators in Fortran and C";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 06:30:58 2008" -->
<!-- isoreceived="20080605103058" -->
<!-- sent="Thu, 05 Jun 2008 06:30:49 -0400" -->
<!-- isosent="20080605103049" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Communicators in Fortran and C" -->
<!-- id="4847C059.8080803_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.5896.1212648844.5420.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Communicators in Fortran and C<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-05 06:30:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5824.php">Jeff Squyres: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="5822.php">George Bosilca: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
<li><strong>Maybe in reply to:</strong> <a href="5820.php">Samuel Sarholz: "[OMPI users] Communicators in Fortran and C"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can translate the communicator from Fortran to C using the MPI_COMM_F2C routine.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Message: 4
</span><br>
<span class="quotelev1">&gt; Date: Thu, 05 Jun 2008 08:53:55 +0200
</span><br>
<span class="quotelev1">&gt; From: Samuel Sarholz &lt;sarholz_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Communicators in Fortran and C
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;48478D83.6080800_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have problems running a Fortran program which is calling a C library 
</span><br>
<span class="quotelev1">&gt; with OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that the Fortan part has a communicator which is passed 
</span><br>
<span class="quotelev1">&gt; to the C library.
</span><br>
<span class="quotelev1">&gt; And if I understand the headers right a communicator is an integer in 
</span><br>
<span class="quotelev1">&gt; fortran, but a struct on the C side of openmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to translate/cast these communicators?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; best regards,
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5824.php">Jeff Squyres: "Re: [OMPI users] libibverbs and openmpi 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="5822.php">George Bosilca: "Re: [OMPI users] HPMPI versus OpenMPI performance"</a>
<li><strong>Maybe in reply to:</strong> <a href="5820.php">Samuel Sarholz: "[OMPI users] Communicators in Fortran and C"</a>
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
