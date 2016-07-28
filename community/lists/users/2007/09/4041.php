<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 19 13:19:43 2007" -->
<!-- isoreceived="20070919171943" -->
<!-- sent="Wed, 19 Sep 2007 19:19:38 +0200" -->
<!-- isosent="20070919171938" -->
<!-- name="Tobias Burnus" -->
<!-- email="burnus_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;quot;OpenIB unable to find any HCAs&amp;quot;: Why is this shown on a single SMP machine?" -->
<!-- id="46F15A2A.1060801_at_net-b.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>From:</strong> Tobias Burnus (<em>burnus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-19 13:19:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4042.php">Edmund Sumbar: "[OMPI users] SKaMPI hangs on collectives and onesided"</a>
<li><strong>Previous message:</strong> <a href="4040.php">Tim Prins: "Re: [OMPI users] Segmentation fault when spawning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4052.php">Jeff Squyres: "Re: [OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
<li><strong>Reply:</strong> <a href="4052.php">Jeff Squyres: "Re: [OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I start an MPI job with:
<br>
<p>mpirun -np 2
<br>
<p>the following gets shown:
<br>
<p>--------------------------------------------------------------------------
<br>
[0,1,0]: OpenIB on host tux was unable to find any HCAs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
[0,1,0]: uDAPL on host tux was unable to find any NICs.
<br>
Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
libibverbs: Fatal: couldn't read uverbs ABI version.
<br>
<p><p>before it runs the job. The point is: As I have *one* SMP machine, there
<br>
is no need to use Infiniband etc. as accessing the local memory directly
<br>
will be faster ;-)
<br>
<p>Why is this message shown in this case?
<br>
<p>(I read that one can suppress the first message via &quot;btl=^openib&quot; in
<br>
/etc/openmpi-mca-params.conf:.)
<br>
<p>Tobias
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4042.php">Edmund Sumbar: "[OMPI users] SKaMPI hangs on collectives and onesided"</a>
<li><strong>Previous message:</strong> <a href="4040.php">Tim Prins: "Re: [OMPI users] Segmentation fault when spawning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4052.php">Jeff Squyres: "Re: [OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
<li><strong>Reply:</strong> <a href="4052.php">Jeff Squyres: "Re: [OMPI users] &quot;OpenIB unable to find any HCAs&quot;: Why is this shown on a single SMP machine?"</a>
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
