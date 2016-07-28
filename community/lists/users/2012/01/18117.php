<?
$subject_val = "Re: [OMPI users] SIGV at MPI_Cart_sub";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 10 06:42:04 2012" -->
<!-- isoreceived="20120110114204" -->
<!-- sent="Tue, 10 Jan 2012 12:42:00 +0100" -->
<!-- isosent="20120110114200" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGV at MPI_Cart_sub" -->
<!-- id="4F0C2408.3010801_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+H1izOfv0ace1dT5GXCROJwd8uga9iBKQ1wnht8uXwAz6uh4Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SIGV at MPI_Cart_sub<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-10 06:42:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18118.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Previous message:</strong> <a href="18116.php">Anas Al-Trad: "[OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>In reply to:</strong> <a href="18116.php">Anas Al-Trad: "[OMPI users] SIGV at MPI_Cart_sub"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18118.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Reply:</strong> <a href="18118.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A blind guess: did you use Intel compiler?
<br>
If so, there is/was an error leading to SIGSEGV _in Open MPI itselv_.
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2012/01/18091.php">http://www.open-mpi.org/community/lists/users/2012/01/18091.php</a>
<br>
<p>If the SIGSEGV arise not in OpenMPI but in application itself it may be 
<br>
a programming issue.. In any case, more precisely answer are impossible 
<br>
without seeing any codes snippet and/or logs.
<br>
<p>Best,
<br>
Paul
<br>
<p><p>Anas Al-Trad wrote:
<br>
<span class="quotelev1">&gt; Dear people, 
</span><br>
<span class="quotelev1">&gt;                In my application, I have the segmentation fault of 
</span><br>
<span class="quotelev1">&gt; Integer Divide-by-zero when calling MPI_cart_sub routine. My program is 
</span><br>
<span class="quotelev1">&gt; as follows, I have 128 ranks, I make a new communicator of the first 96 
</span><br>
<span class="quotelev1">&gt; ranks via MPI_Comm_creat. Then I create a grid of 8X12 by calling 
</span><br>
<span class="quotelev1">&gt; MPI_Cart_create. After creating the grid if I call MPI_Cart_sub then I 
</span><br>
<span class="quotelev1">&gt; have that error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This error happens also when I use a communicator of 24 ranks and create 
</span><br>
<span class="quotelev1">&gt; a grid of 4X6. Can you please help me in solving this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Anas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18117/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18118.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Previous message:</strong> <a href="18116.php">Anas Al-Trad: "[OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>In reply to:</strong> <a href="18116.php">Anas Al-Trad: "[OMPI users] SIGV at MPI_Cart_sub"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18118.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Reply:</strong> <a href="18118.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
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
