<?
$subject_val = "Re: [OMPI users] Fortran derived types";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 06:07:39 2010" -->
<!-- isoreceived="20100506100739" -->
<!-- sent="Thu, 06 May 2010 12:07:34 +0200" -->
<!-- isosent="20100506100734" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran derived types" -->
<!-- id="4BE294E6.1030102_at_rz.rwth-aachen.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="063591A1FD6A8143ACC2CA38F4C1B5EF88F5A7BA_at_HVXMSPA.us.lmco.com" -->
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
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 06:07:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12918.php">Ake Sandgren: "[OMPI users] opal_mutex_lock(): Resource deadlock avoided"</a>
<li><strong>Previous message:</strong> <a href="12916.php">Jovana Knezevic: "[OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<li><strong>In reply to:</strong> <a href="12906.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; In general, even in your serial fortran code, you're already 
</span><br>
<span class="quotelev1">&gt; taking a performance hit using a derived type. 
</span><br>
<p>That is not generally true. The right statement is: &quot;it depends&quot;.
<br>
<p>Yes, sometimes derived data types and object orientation and so on can 
<br>
lead to some performance hit; but current compiler usually can oprimise 
<br>
alot.
<br>
<p>E.g. consider <a href="http://www.terboven.com/download/OAbstractionsLA.pdf">http://www.terboven.com/download/OAbstractionsLA.pdf</a> 
<br>
(especially p.19).
<br>
<p><p>So, I would not recommend to disturb the ready program in order to let 
<br>
it be the old good f77 style. And let us not start a flame about 
<br>
&quot;assembler is faster but OO is easier&quot;! :-)
<br>
<p>Best wishes
<br>
Paul
<br>
<p><p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Prentice Bisbal
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, May 05, 2010 11:51 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Fortran derived types
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Vedran Coralic wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my Fortran 90 code I use several custom defined derived types.
</span><br>
<span class="quotelev2">&gt;&gt; Amongst them is a vector of arrays, i.e. v(:)%f(:,:,:). I am wondering 
</span><br>
<span class="quotelev2">&gt;&gt; what the proper way of sending this data structure from one processor 
</span><br>
<span class="quotelev2">&gt;&gt; to another is. Is the best way to just restructure the data by copying 
</span><br>
<span class="quotelev2">&gt;&gt; it into a vector and sending that or is there a simpler way possible 
</span><br>
<span class="quotelev2">&gt;&gt; by defining an MPI derived type that can handle it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I looked into the latter myself but so far, I have only found the 
</span><br>
<span class="quotelev2">&gt;&gt; solution for a scalar fortran derived type and the methodology that 
</span><br>
<span class="quotelev2">&gt;&gt; was suggested in that case did not seem naturally extensible to the vector case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It depends on how your data is distributed in memory. If the arrays are evenly distributed, like what would happen in a multidimensional-array, the derived datatypes will work fine. If you can't guarantee the spacing between the arrays that make up the vector, then using MPI_Pack/MPI_Unpack (or whatever the Fortran equivalents are) is the best way to go.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not an expert MPI programmer, but I wrote a small program earlier this year that created a dynamically created array of dynamically created arrays. After doing some research into this same problem, it looked like packing/unpacking was the only way to go.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using Pack/Unpack is easy, but there is a performance hit since the data needs to be copied into the packed buffer before sending, and then copied out of the buffer after the receive.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Prentice
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12917/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12918.php">Ake Sandgren: "[OMPI users] opal_mutex_lock(): Resource deadlock avoided"</a>
<li><strong>Previous message:</strong> <a href="12916.php">Jovana Knezevic: "[OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<li><strong>In reply to:</strong> <a href="12906.php">Cole, Derek E: "Re: [OMPI users] Fortran derived types"</a>
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
