<?
$subject_val = "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 28 09:03:35 2010" -->
<!-- isoreceived="20100428130335" -->
<!-- sent="Wed, 28 Apr 2010 06:03:21 -0700" -->
<!-- isosent="20100428130321" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS" -->
<!-- id="4BD83219.8070904_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BD7DBDF.1090706_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-28 09:03:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12836.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Previous message:</strong> <a href="12834.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>In reply to:</strong> <a href="12830.php">Fabian H&#228;nsel: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12840.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/27/2010 11:55 PM, Fabian H&#228;nsel wrote:
<br>
<span class="quotelev1">&gt; Hi Ali,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have solved that problem. I just removed the gcc flag -O3 from my 
</span><br>
<span class="quotelev2">&gt;&gt; compile script and the error vanished. However the speed of my code 
</span><br>
<span class="quotelev2">&gt;&gt; is also reduced to 50 iterations/minute from 70 iterations/minute, 
</span><br>
<span class="quotelev2">&gt;&gt; still not bad.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any alternative to -O3 flag?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried -O2 too but this also gives errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could try to set optimizations more fine-grained. Every 
</span><br>
<span class="quotelev1">&gt; -Osomething stands for a certain set of optimizations. Start with e.g. 
</span><br>
<span class="quotelev1">&gt; &quot;gcc -Q -O2 --help=optimizers&quot; to see all available optimizations and 
</span><br>
<span class="quotelev1">&gt; which are enabled at -O2. Read about them on the gcc manpage. Disable 
</span><br>
<span class="quotelev1">&gt; those that decrease accuracy. Enable more from the O3 level if you 
</span><br>
<span class="quotelev1">&gt; like. Be aware that decreased accuracy is maybe the source of your 
</span><br>
<span class="quotelev1">&gt; described performance gain. As your algorithm seems to be quite 
</span><br>
<span class="quotelev1">&gt; (numerically) instable, an additional look into dokumentation 
</span><br>
<span class="quotelev1">&gt; regarding precision and general sources regarding numerical instablity 
</span><br>
<span class="quotelev1">&gt; might benefit you while estimating the effects of certain optimizations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
If you are seeing run-time problems as soon as you invoke optimization, 
<br>
an evident suspicion is that you may have bugs such as uninitialized 
<br>
variables or range errors.  If you are lucky, turning on the associated 
<br>
gcc diagnostics and run-time checks may help discover them.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12836.php">kishore kumar: "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Previous message:</strong> <a href="12834.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_ABORT was invoked on rank 0 in communicatorMPI_COMM_WORLD with errorcode 0."</a>
<li><strong>In reply to:</strong> <a href="12830.php">Fabian H&#228;nsel: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12840.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
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
