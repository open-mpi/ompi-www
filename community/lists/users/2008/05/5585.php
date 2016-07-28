<?
$subject_val = "Re: [OMPI users] Enabling progress thread";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  1 11:18:49 2008" -->
<!-- isoreceived="20080501151849" -->
<!-- sent="Thu, 1 May 2008 11:18:40 -0400" -->
<!-- isosent="20080501151840" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Enabling progress thread" -->
<!-- id="DA593EB6-EF4E-44AB-9D0D-46DF1DA70018_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ABC28A31-5A04-46B1-B40B-467E2A380B65_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Enabling progress thread<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-01 11:18:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5586.php">Linwei Wang: "[OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5584.php">Alberto Giannetti: "[OMPI users] Enabling progress thread"</a>
<li><strong>In reply to:</strong> <a href="5584.php">Alberto Giannetti: "[OMPI users] Enabling progress thread"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5605.php">Jeff Squyres: "Re: [OMPI users] Enabling progress thread"</a>
<li><strong>Reply:</strong> <a href="5605.php">Jeff Squyres: "Re: [OMPI users] Enabling progress thread"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can add --enable-progress-threads to the configure. However,  
<br>
please consider this as a beta feature. We know for sure there is some  
<br>
bugs in current thread safety.
<br>
<p>Aurelien
<br>
<p>Le 1 mai 08 &#224; 09:46, Alberto Giannetti a &#233;crit :
<br>
<p><span class="quotelev1">&gt; In message <a href="http://www.open-mpi.org/community/lists/users/">http://www.open-mpi.org/community/lists/users/</a>
</span><br>
<span class="quotelev1">&gt; 2007/03/2889.php I found this comment:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;The only way to get any
</span><br>
<span class="quotelev1">&gt; benefit from the MPI_Bsend is to have a progress thread which take
</span><br>
<span class="quotelev1">&gt; care of the pending communications in the background. Such thread is
</span><br>
<span class="quotelev1">&gt; not enabled by default in Open MPI.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I understand this won't be portable, but how do you enable a sender
</span><br>
<span class="quotelev1">&gt; progress thread in Open MPI?
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
<li><strong>Next message:</strong> <a href="5586.php">Linwei Wang: "[OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5584.php">Alberto Giannetti: "[OMPI users] Enabling progress thread"</a>
<li><strong>In reply to:</strong> <a href="5584.php">Alberto Giannetti: "[OMPI users] Enabling progress thread"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5605.php">Jeff Squyres: "Re: [OMPI users] Enabling progress thread"</a>
<li><strong>Reply:</strong> <a href="5605.php">Jeff Squyres: "Re: [OMPI users] Enabling progress thread"</a>
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
