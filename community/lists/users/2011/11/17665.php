<?
$subject_val = "Re: [OMPI users] probl&#195;&#168;me with MPI_FINALIZE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  2 08:29:30 2011" -->
<!-- isoreceived="20111102122930" -->
<!-- sent="Wed, 2 Nov 2011 08:29:21 -0400" -->
<!-- isosent="20111102122921" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] probl&amp;#195;&amp;#168;me with MPI_FINALIZE" -->
<!-- id="1A99CBDD-F3E3-4543-95A6-A455C98FE3F5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAA+UwzvBkpk77J9GgjAMTrf1bb4nOfDdOtSv5ZN26s_=N53y1w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] probl&#195;&#168;me with MPI_FINALIZE<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-02 08:29:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17666.php">German Hoecht: "Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
<li><strong>Previous message:</strong> <a href="17664.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
<li><strong>In reply to:</strong> <a href="17661.php">amine mrabet: "[OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17667.php">Durga Choudhury: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<li><strong>Reply:</strong> <a href="17667.php">Durga Choudhury: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<li><strong>Reply:</strong> <a href="17668.php">amine mrabet: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you call MPI-INIT after you called MPI-finalize?  If so, you're not allowed to do that. Call. MPI-INIT once and call MPI-finalize once. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Nov 1, 2011, at 2:45 PM, &quot;amine mrabet&quot; &lt;aminesm01_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; hey
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i'm new in mpi , i try tu use  mpi inside of function and i have this error messag
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** after MPI was finalized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [dellam:16806] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; maybe i cant use mpi inside of function ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; amine mrabet 
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
<li><strong>Next message:</strong> <a href="17666.php">German Hoecht: "Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
<li><strong>Previous message:</strong> <a href="17664.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sending vector elements of type T using MPI_Ssend, plz help."</a>
<li><strong>In reply to:</strong> <a href="17661.php">amine mrabet: "[OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17667.php">Durga Choudhury: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<li><strong>Reply:</strong> <a href="17667.php">Durga Choudhury: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
<li><strong>Reply:</strong> <a href="17668.php">amine mrabet: "Re: [OMPI users] probl&#232;me with MPI_FINALIZE"</a>
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
