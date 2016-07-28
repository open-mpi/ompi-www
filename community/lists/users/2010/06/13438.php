<?
$subject_val = "Re: [OMPI users] Open MPI ERR_TRUNCATE: message truncated";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 29 07:09:23 2010" -->
<!-- isoreceived="20100629110923" -->
<!-- sent="Tue, 29 Jun 2010 07:09:17 -0400" -->
<!-- isosent="20100629110917" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI ERR_TRUNCATE: message truncated" -->
<!-- id="4AE9269F-296E-4AA5-BDE3-A8E602A88B34_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT134-w5642257A4D9DA5317691B1CBCB0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI ERR_TRUNCATE: message truncated<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-29 07:09:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13439.php">Jeff Squyres: "Re: [OMPI users] about MPI"</a>
<li><strong>Previous message:</strong> <a href="13437.php">Jeff Squyres: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>In reply to:</strong> <a href="13433.php">Jack Bryan: "[OMPI users] Open MPI ERR_TRUNCATE: message truncated"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know exactly what it means in boost.mpi.  What it means in MPI is that you posted a receive that was too short to accommodate the incoming message.  For example, you posted a receive of 4 bytes, but the incoming message was 1024 bytes long.  That's a truncate error.
<br>
<p><p>On Jun 28, 2010, at 11:38 PM, Jack Bryan wrote:
<br>
<p><span class="quotelev1">&gt; Dear All, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using Open MPI : mpirun (Open MPI) 1.3.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I  got error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; terminate called after throwing an instance of 'boost::exception_detail::clone_impl&lt;boost::exception_detail::error_info_injector&lt;boost::mpi::exception&gt; &gt;'
</span><br>
<span class="quotelev1">&gt;   what():  MPI_Test: MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I installed boost MPI library and compile and run the program  by openMPI.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; It seems that the message has been truncated by the receiver. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How can I fix the problem ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it a bug of OpenMPI ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; June 28 2010
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The New Busy is not the old busy. Search, chat and e-mail from your inbox. Get started. _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13439.php">Jeff Squyres: "Re: [OMPI users] about MPI"</a>
<li><strong>Previous message:</strong> <a href="13437.php">Jeff Squyres: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>In reply to:</strong> <a href="13433.php">Jack Bryan: "[OMPI users] Open MPI ERR_TRUNCATE: message truncated"</a>
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
