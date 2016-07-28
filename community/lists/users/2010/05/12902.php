<?
$subject_val = "Re: [OMPI users] Fortran derived types";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  5 11:50:58 2010" -->
<!-- isoreceived="20100505155058" -->
<!-- sent="Wed, 05 May 2010 11:50:53 -0400" -->
<!-- isosent="20100505155053" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran derived types" -->
<!-- id="4BE193DD.80302_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="z2g48b85f861005041225yb5870debiaefefce2fa5d8270_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran derived types<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-05 11:50:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12903.php">Prentice Bisbal: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12901.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12875.php">Vedran Coralic: "[OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12906.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Reply:</strong> <a href="12906.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Vedran Coralic wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my Fortran 90 code I use several custom defined derived types.
</span><br>
<span class="quotelev1">&gt; Amongst them is a vector of arrays, i.e. v(:)%f(:,:,:). I am wondering
</span><br>
<span class="quotelev1">&gt; what the proper way of sending this data structure from one processor to
</span><br>
<span class="quotelev1">&gt; another is. Is the best way to just restructure the data by copying it
</span><br>
<span class="quotelev1">&gt; into a vector and sending that or is there a simpler way possible by
</span><br>
<span class="quotelev1">&gt; defining an MPI derived type that can handle it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I looked into the latter myself but so far, I have only found the
</span><br>
<span class="quotelev1">&gt; solution for a scalar fortran derived type and the methodology that was
</span><br>
<span class="quotelev1">&gt; suggested in that case did not seem naturally extensible to the vector case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>It depends on how your data is distributed in memory. If the arrays are
<br>
evenly distributed, like what would happen in a multidimensional-array,
<br>
the derived datatypes will work fine. If you can't guarantee the spacing
<br>
between the arrays that make up the vector, then using
<br>
MPI_Pack/MPI_Unpack (or whatever the Fortran equivalents are) is the
<br>
best way to go.
<br>
<p>I'm not an expert MPI programmer, but I wrote a small program earlier
<br>
this year that created a dynamically created array of dynamically
<br>
created arrays. After doing some research into this same problem, it
<br>
looked like packing/unpacking was the only way to go.
<br>
<p>Using Pack/Unpack is easy, but there is a performance hit since the data
<br>
needs to be copied into the packed buffer before sending, and then
<br>
copied out of the buffer after the receive.
<br>
<p><p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12903.php">Prentice Bisbal: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12901.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12875.php">Vedran Coralic: "[OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12906.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Reply:</strong> <a href="12906.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
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
