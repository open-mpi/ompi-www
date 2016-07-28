<?
$subject_val = "Re: [OMPI users] Fortran derived types";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  5 13:06:30 2010" -->
<!-- isoreceived="20100505170630" -->
<!-- sent="Wed, 05 May 2010 13:05:51 -0400" -->
<!-- isosent="20100505170551" -->
<!-- name="Cole, Derek E" -->
<!-- email="derek.e.cole_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran derived types" -->
<!-- id="063591A1FD6A8143ACC2CA38F4C1B5EF88F5A7BA_at_HVXMSPA.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BE193DD.80302_at_ias.edu" -->
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
<strong>From:</strong> Cole, Derek E (<em>derek.e.cole_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-05 13:05:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12907.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12905.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12902.php">Prentice Bisbal: "Re: [OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12915.php">Terry Frankcombe: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Reply:</strong> <a href="12915.php">Terry Frankcombe: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Reply:</strong> <a href="12917.php">Paul Kapinos: "Re: [OMPI users] Fortran derived types"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In general, even in your serial fortran code, you're already taking a performance hit using a derived type. Is it really necessary? It might be easier for you to change your fortran code into more memory friendly structures and then the MPI part will be easier. The serial code will have the added benefit of running faster, too.
<br>
<p>Derek
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Prentice Bisbal
<br>
Sent: Wednesday, May 05, 2010 11:51 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Fortran derived types
<br>
<p>Vedran Coralic wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my Fortran 90 code I use several custom defined derived types.
</span><br>
<span class="quotelev1">&gt; Amongst them is a vector of arrays, i.e. v(:)%f(:,:,:). I am wondering 
</span><br>
<span class="quotelev1">&gt; what the proper way of sending this data structure from one processor 
</span><br>
<span class="quotelev1">&gt; to another is. Is the best way to just restructure the data by copying 
</span><br>
<span class="quotelev1">&gt; it into a vector and sending that or is there a simpler way possible 
</span><br>
<span class="quotelev1">&gt; by defining an MPI derived type that can handle it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I looked into the latter myself but so far, I have only found the 
</span><br>
<span class="quotelev1">&gt; solution for a scalar fortran derived type and the methodology that 
</span><br>
<span class="quotelev1">&gt; was suggested in that case did not seem naturally extensible to the vector case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>It depends on how your data is distributed in memory. If the arrays are evenly distributed, like what would happen in a multidimensional-array, the derived datatypes will work fine. If you can't guarantee the spacing between the arrays that make up the vector, then using MPI_Pack/MPI_Unpack (or whatever the Fortran equivalents are) is the best way to go.
<br>
<p>I'm not an expert MPI programmer, but I wrote a small program earlier this year that created a dynamically created array of dynamically created arrays. After doing some research into this same problem, it looked like packing/unpacking was the only way to go.
<br>
<p>Using Pack/Unpack is easy, but there is a performance hit since the data needs to be copied into the packed buffer before sending, and then copied out of the buffer after the receive.
<br>
<p><p><pre>
--
Prentice
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12907.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12905.php">Jeff Squyres: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalemstandalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12902.php">Prentice Bisbal: "Re: [OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12915.php">Terry Frankcombe: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Reply:</strong> <a href="12915.php">Terry Frankcombe: "Re: [OMPI users] Fortran derived types"</a>
<li><strong>Reply:</strong> <a href="12917.php">Paul Kapinos: "Re: [OMPI users] Fortran derived types"</a>
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
