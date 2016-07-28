<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 20 14:07:59 2006" -->
<!-- isoreceived="20060720180759" -->
<!-- sent="Thu, 20 Jul 2006 20:07:50 +0200" -->
<!-- isosent="20060720180750" -->
<!-- name="Frank Gruellich" -->
<!-- email="frank.gruellich_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SEGV in libopal during MPI_Alltoall" -->
<!-- id="44BFC676.7010802_at_megware.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.WNT.4.64.0607201328010.1980_at_bosilca" -->
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
<strong>From:</strong> Frank Gruellich (<em>frank.gruellich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-20 14:07:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1672.php">Jeff Squyres: "Re: [OMPI users] MPI_Finalize runtime error"</a>
<li><strong>Previous message:</strong> <a href="1670.php">Jeff Squyres: "Re: [OMPI users] MPI applicability"</a>
<li><strong>In reply to:</strong> <a href="1664.php">George Bosilca: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1658.php">shen T.T.: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; It is what I suspected. You can see that the envio array is smaller than
</span><br>
<span class="quotelev1">&gt; it should. It was created as an array of doubles with the size t_max, when
</span><br>
<span class="quotelev1">&gt; it should have been created as an array of double with the size t_max *
</span><br>
<span class="quotelev1">&gt; nprocs.
</span><br>
<p>Ah, yes, I see (and even understand).  Great, thank you very much, it
<br>
works now.
<br>
<p>Kind regards,
<br>
<pre>
-- 
Frank Gruellich
HPC-Techniker
Tel.:   +49 3722 528 42
Fax:    +49 3722 528 15
E-Mail: frank.gruellich_at_[hidden]
MEGWARE Computer GmbH
Vertrieb und Service
Nordstrasse 19
09247 Chemnitz/Roehrsdorf
Germany
<a href="http://www.megware.com/">http://www.megware.com/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1672.php">Jeff Squyres: "Re: [OMPI users] MPI_Finalize runtime error"</a>
<li><strong>Previous message:</strong> <a href="1670.php">Jeff Squyres: "Re: [OMPI users] MPI applicability"</a>
<li><strong>In reply to:</strong> <a href="1664.php">George Bosilca: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1658.php">shen T.T.: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
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
