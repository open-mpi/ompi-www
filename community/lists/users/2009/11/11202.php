<?
$subject_val = "Re: [OMPI users] Behavior of MPI_Send";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 15 12:55:24 2009" -->
<!-- isoreceived="20091115175524" -->
<!-- sent="Sun, 15 Nov 2009 09:55:19 -0800" -->
<!-- isosent="20091115175519" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Behavior of MPI_Send" -->
<!-- id="77D1931B-1B20-4CF9-ACBA-0CD71D6D9FA5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="afc7dbc60911150925i454993f8u56a15e6063507c8a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Behavior of MPI_Send<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-15 12:55:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11203.php">George Bosilca: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11201.php">Charles Salvia: "[OMPI users] Behavior of MPI_Send"</a>
<li><strong>In reply to:</strong> <a href="11201.php">Charles Salvia: "[OMPI users] Behavior of MPI_Send"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No.  The MPI standard only guarantees that the local buffer is  
<br>
available for re-use when MPI_SEND returns.  It does not guarantee  
<br>
anything about the receiver or the transmission of the message.  If  
<br>
you need a guarantee about receiver behavior, try MPI_SSEND -- it  
<br>
won't return until the receiver has posted a matching receive (but  
<br>
does not guarantee that the receiver has *finished* receiving the  
<br>
message).
<br>
<p><p>On Nov 15, 2009, at 9:25 AM, Charles Salvia wrote:
<br>
<p><span class="quotelev1">&gt; I'm confused about the required behavior of MPI_Send() using TCP  
</span><br>
<span class="quotelev1">&gt; sockets.  Does a call to MPI_Send() block until the receiving  
</span><br>
<span class="quotelev1">&gt; process actually receives the message, or does MPI_Send() only block  
</span><br>
<span class="quotelev1">&gt; until the send operation completes locally?  In other words, does  
</span><br>
<span class="quotelev1">&gt; the sender actually have to wait for an ACK from the receiver to  
</span><br>
<span class="quotelev1">&gt; proceed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Charles Salvia
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
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11203.php">George Bosilca: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11201.php">Charles Salvia: "[OMPI users] Behavior of MPI_Send"</a>
<li><strong>In reply to:</strong> <a href="11201.php">Charles Salvia: "[OMPI users] Behavior of MPI_Send"</a>
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
