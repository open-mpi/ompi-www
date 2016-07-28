<?
$subject_val = "Re: [OMPI users] Interaction with boost::asio";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  7 10:27:14 2010" -->
<!-- isoreceived="20101207152714" -->
<!-- sent="Tue, 7 Dec 2010 08:27:04 -0700" -->
<!-- isosent="20101207152704" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Interaction with boost::asio" -->
<!-- id="912AC90A-E9B5-4523-B50A-C7700A4F7433_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTi=ibuGkUv02M+aSwptXa-_yx2BRtCzD6FjTOCW7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Interaction with boost::asio<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-07 10:27:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15026.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="15024.php">Terry Dontje: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<li><strong>In reply to:</strong> <a href="15022.php">Hannes Brandst&#228;tter-M&#252;ller: "[OMPI users] Interaction with boost::asio"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to ask the boost people - we wouldn't have any idea what asio is or does.
<br>
<p>On Dec 7, 2010, at 6:06 AM, Hannes Brandst&#228;tter-M&#252;ller wrote:
<br>
<p><span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI in combination with the boost libraries (especially boost::asio) and came across a weird interaction. When I use asio to send a message via TCP, some messages do not arrive at the server.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The effect is exhibited when I send a message from the tcp client to the server after calling MPI::Init();
</span><br>
<span class="quotelev1">&gt; If I remove this line, it works as intended.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this interaction known? If so, is there a workaround or something I can do to use this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Hannes
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15026.php">Jeff Squyres: "Re: [OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="15024.php">Terry Dontje: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<li><strong>In reply to:</strong> <a href="15022.php">Hannes Brandst&#228;tter-M&#252;ller: "[OMPI users] Interaction with boost::asio"</a>
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
