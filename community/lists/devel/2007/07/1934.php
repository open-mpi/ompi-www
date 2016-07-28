<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 14:08:45 2007" -->
<!-- isoreceived="20070718180845" -->
<!-- sent="Wed, 18 Jul 2007 21:08:38 +0300" -->
<!-- isosent="20070718180838" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node" -->
<!-- id="20070718180838.GF12861_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C2C3891F.A092%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-18 14:08:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1935.php">Neil Ludban: "Re: [OMPI devel] devel Digest, Vol 802, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="1933.php">Rainer Keller: "Re: [OMPI devel] MPI_BOTTOM fixes: 1.2.4?"</a>
<li><strong>In reply to:</strong> <a href="1928.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1942.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Reply:</strong> <a href="1942.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 18, 2007 at 09:08:47AM -0600, Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; But this will lockup:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pn1180961:~/openmpi/trunk rhc$ mpirun -n 1 -host pn1180961 printenv | grep
</span><br>
<span class="quotelev1">&gt; LD
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reason is that the hostname in this last command doesn't match the
</span><br>
<span class="quotelev1">&gt; hostname I get when I query my interfaces, so mpirun thinks it must be a
</span><br>
<span class="quotelev1">&gt; remote host - and so we stick in ssh until that times out. Which could be
</span><br>
<span class="quotelev1">&gt; quick on your machine, but takes awhile for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
This is not my case. mpirun resolves hostname and runs env but
<br>
LD_LIBRARY_PATH is not there. If I use full name like this
<br>
# /home/glebn/openmpi/bin/mpirun -np 1 -H elfit1.voltaire.com env | grep LD_LIBRARY_PATH
<br>
LD_LIBRARY_PATH=/home/glebn/openmpi/lib
<br>
<p>everything is OK.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1935.php">Neil Ludban: "Re: [OMPI devel] devel Digest, Vol 802, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="1933.php">Rainer Keller: "Re: [OMPI devel] MPI_BOTTOM fixes: 1.2.4?"</a>
<li><strong>In reply to:</strong> <a href="1928.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1942.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Reply:</strong> <a href="1942.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
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
