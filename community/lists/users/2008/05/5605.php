<?
$subject_val = "Re: [OMPI users] Enabling progress thread";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  5 13:33:45 2008" -->
<!-- isoreceived="20080505173345" -->
<!-- sent="Mon, 5 May 2008 13:33:29 -0400" -->
<!-- isosent="20080505173329" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Enabling progress thread" -->
<!-- id="FB4B0057-26B1-4196-A3AF-B1620A6489C6_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DA593EB6-EF4E-44AB-9D0D-46DF1DA70018_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-05 13:33:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5606.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5604.php">Pak Lui: "Re: [OMPI users] MPI_Lookup_name error"</a>
<li><strong>In reply to:</strong> <a href="5585.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Enabling progress thread"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would make a stronger statement than that: progress threads are  
<br>
totally broken in v1.2.  Don't bother trying them.
<br>
<p>On May 1, 2008, at 11:18 AM, Aur&#233;lien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; You can add --enable-progress-threads to the configure. However,
</span><br>
<span class="quotelev1">&gt; please consider this as a beta feature. We know for sure there is some
</span><br>
<span class="quotelev1">&gt; bugs in current thread safety.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 1 mai 08 &#224; 09:46, Alberto Giannetti a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In message <a href="http://www.open-mpi.org/community/lists/users/">http://www.open-mpi.org/community/lists/users/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 2007/03/2889.php I found this comment:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;The only way to get any
</span><br>
<span class="quotelev2">&gt;&gt; benefit from the MPI_Bsend is to have a progress thread which take
</span><br>
<span class="quotelev2">&gt;&gt; care of the pending communications in the background. Such thread is
</span><br>
<span class="quotelev2">&gt;&gt; not enabled by default in Open MPI.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I understand this won't be portable, but how do you enable a sender
</span><br>
<span class="quotelev2">&gt;&gt; progress thread in Open MPI?
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5606.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5604.php">Pak Lui: "Re: [OMPI users] MPI_Lookup_name error"</a>
<li><strong>In reply to:</strong> <a href="5585.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] Enabling progress thread"</a>
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
