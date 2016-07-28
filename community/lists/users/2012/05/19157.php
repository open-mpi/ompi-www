<?
$subject_val = "Re: [OMPI users] Serializing objects";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 03:03:52 2012" -->
<!-- isoreceived="20120501070352" -->
<!-- sent="Tue, 1 May 2012 09:03:31 +0200" -->
<!-- isosent="20120501070331" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Serializing objects" -->
<!-- id="20120501070331.GA17607_at_neuromancer" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOB9epqNag6pXZrOtDvqiQKBo4YDUGdCU1WQfF60RjhzQ3aVXQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Serializing objects<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-01 03:03:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19158.php">Rohan Deshpande: "[OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/19156.php">Omar Andr&#233;s Zapata Mesa: "[OMPI users] Serializing objects"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/19156.php">Omar Andr&#233;s Zapata Mesa: "[OMPI users] Serializing objects"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Omar,
<br>
<p>with serialization of C++ objects is fundamentally no different than
<br>
sending structs with the C bindings. See [1] for an example of how to
<br>
use MPI_Isend/MPI_Irecv. Be advised though that MPI won't guarantee
<br>
that the communication will always run concurrently. 
<br>
<p>If your objects contain pointers or containers like std::vector,
<br>
std::map, and friends, then you might want to take a look at
<br>
boost::mpi [2] whose serialization can handle even tricky cases, but
<br>
which (boost::serialize) is also much slower than native MPI.
<br>
<p>Best
<br>
-Andreas
<br>
<p>[1] <a href="https://computing.llnl.gov/tutorials/mpi/">https://computing.llnl.gov/tutorials/mpi/</a>
<br>
[2] <a href="http://www.boost.org/doc/libs/1_49_0/doc/html/mpi.html">http://www.boost.org/doc/libs/1_49_0/doc/html/mpi.html</a>
<br>
<p><p>On 20:57 Mon 30 Apr     , Omar Andr&#233;s Zapata Mesa wrote:
<br>
<span class="quotelev1">&gt; Hello guys.
</span><br>
<span class="quotelev1">&gt; I am trying to serialize an object and send it with non-blocking
</span><br>
<span class="quotelev1">&gt; communication (Isend/Irecv) and I need use
</span><br>
<span class="quotelev1">&gt; Grequest but I can not find examples about how used it in c++.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; can somebody help me how to use it?
</span><br>
<span class="quotelev1">&gt; do you know where I can find documentation or examples?
</span><br>
<span class="quotelev1">&gt; can I pass a class's methods like a callback?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks you!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Omar Andres Zapata Mesa
</span><br>
<span class="quotelev1">&gt; Fundamental Interaction Phenomenology Gruop (Gfif)
</span><br>
<span class="quotelev1">&gt; Head Developer
</span><br>
<span class="quotelev1">&gt; <a href="http://gfif.udea.edu.co">http://gfif.udea.edu.co</a>
</span><br>
<span class="quotelev1">&gt; Gfif Developers (Gfif Dev)
</span><br>
<span class="quotelev1">&gt; Division of computer science
</span><br>
<span class="quotelev1">&gt; System Engineering Student
</span><br>
<span class="quotelev1">&gt; Universidad de Antioquia At Medellin - Colombia
</span><br>
<span class="quotelev1">&gt; Usuario Linux  #490962
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
==========================================================
Andreas Sch&#228;fer
HPC and Grid Computing
Chair of Computer Science 3
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
+49 9131 85-27910
PGP/GPG key via keyserver
<a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
==========================================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your 
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19157/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19158.php">Rohan Deshpande: "[OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/19156.php">Omar Andr&#233;s Zapata Mesa: "[OMPI users] Serializing objects"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/19156.php">Omar Andr&#233;s Zapata Mesa: "[OMPI users] Serializing objects"</a>
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
