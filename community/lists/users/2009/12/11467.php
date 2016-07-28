<?
$subject_val = "[OMPI users] Hanging vs Stopping behaviour in communication failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 03:47:58 2009" -->
<!-- isoreceived="20091209084758" -->
<!-- sent="Wed, 09 Dec 2009 09:47:20 +0100" -->
<!-- isosent="20091209084720" -->
<!-- name="Constantinos Makassikis" -->
<!-- email="cmakassikis_at_[hidden]" -->
<!-- subject="[OMPI users] Hanging vs Stopping behaviour in communication failures" -->
<!-- id="4B1F6418.2080108_at_gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Hanging vs Stopping behaviour in communication failures<br>
<strong>From:</strong> Constantinos Makassikis (<em>cmakassikis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 03:47:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11468.php">Ashley Pittman: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Previous message:</strong> <a href="11466.php">Aleksej Saushev: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11535.php">Jeff Squyres: "Re: [OMPI users] Hanging vs Stopping behaviour in communication failures"</a>
<li><strong>Reply:</strong> <a href="11535.php">Jeff Squyres: "Re: [OMPI users] Hanging vs Stopping behaviour in communication failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>sometimes when running Open MPI jobs, the application hangs. By looking the
<br>
output I get the following error message:
<br>
<p>[ic17][[34562,1],74][../../../../../ompi/mca/btl/tcp/btl_tcp_frag.c:216:mca_btl_tcp_frag_recv    
<br>
] mca_btl_tcp_frag_recv: readv failed: No route to host (113)
<br>
<p>I would expect Open MPI to eventually quit with an error at such situations.
<br>
Is the observed behaviour (i.e.: hanging) the intended one ?
<br>
<p>If so, what would be the reason(s) behind choosing the hanging over the 
<br>
stopping ?
<br>
<p><p>Best Regards,
<br>
<p><pre>
--
Constantinos
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11468.php">Ashley Pittman: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Previous message:</strong> <a href="11466.php">Aleksej Saushev: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11535.php">Jeff Squyres: "Re: [OMPI users] Hanging vs Stopping behaviour in communication failures"</a>
<li><strong>Reply:</strong> <a href="11535.php">Jeff Squyres: "Re: [OMPI users] Hanging vs Stopping behaviour in communication failures"</a>
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
