<?
$subject_val = "Re: [OMPI users] configure blcr errors openmpi 1.4.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 28 10:15:14 2011" -->
<!-- isoreceived="20111128151514" -->
<!-- sent="Mon, 28 Nov 2011 14:54:19 +0000 (UTC)" -->
<!-- isosent="20111128145419" -->
<!-- name="Vlad Popa" -->
<!-- email="vlad_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure blcr errors openmpi 1.4.4" -->
<!-- id="loom.20111128T155102-905_at_post.gmane.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAANzjEn5VK9KSdoRFCu9+XUqZFJA7d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure blcr errors openmpi 1.4.4<br>
<strong>From:</strong> Vlad Popa (<em>vlad_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-28 09:54:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17845.php">Jeff Squyres: "Re: [OMPI users] Deadlock at MPI_FInalize"</a>
<li><strong>Previous message:</strong> <a href="17843.php">Mudassar Majeed: "Re: [OMPI users] Deadlock at MPI_FInalize"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/10/17654.php">Josh Hursey: "Re: [OMPI users] configure blcr errors openmpi 1.4.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>Josh Hursey &lt;jjhursey &lt;at&gt; open-mpi.org&gt; writes:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder if the try_compile step is failing. Can you send a compressed
</span><br>
<span class="quotelev1">&gt; copy of your config.log from this build?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<p><p>No need for that anymore ..
<br>
you simply have to add  the params &quot;--enable-ft-thread&quot; &quot;--with-ft=cr&quot;   
<br>
<p>&quot;--enable-mpi-threads&quot;  and then it works ..
<br>
<p>Sorry for late reply  and thanks  for help
<br>
<p>Greetings 
<br>
Vlad 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17845.php">Jeff Squyres: "Re: [OMPI users] Deadlock at MPI_FInalize"</a>
<li><strong>Previous message:</strong> <a href="17843.php">Mudassar Majeed: "Re: [OMPI users] Deadlock at MPI_FInalize"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/10/17654.php">Josh Hursey: "Re: [OMPI users] configure blcr errors openmpi 1.4.4"</a>
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
