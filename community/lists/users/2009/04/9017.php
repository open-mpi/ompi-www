<?
$subject_val = "Re: [OMPI users] 100% CPU doing nothing!?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 23:20:08 2009" -->
<!-- isoreceived="20090422032008" -->
<!-- sent="Wed, 22 Apr 2009 13:19:57 +1000" -->
<!-- isosent="20090422031957" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 100% CPU doing nothing!?" -->
<!-- id="1240370398.5779.111.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="1240366793.9395.91.camel_at_corn.betterworld.us" -->
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
<strong>Subject:</strong> Re: [OMPI users] 100% CPU doing nothing!?<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-21 23:19:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9018.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9016.php">Ross Boylan: "[OMPI users] 100% CPU doing nothing!?"</a>
<li><strong>In reply to:</strong> <a href="9016.php">Ross Boylan: "[OMPI users] 100% CPU doing nothing!?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9024.php">Douglas Guptill: "[OMPI users]  100% CPU doing nothing!?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-04-21 at 19:19 -0700, Ross Boylan wrote:
<br>
<span class="quotelev1">&gt; I'm using Rmpi (a pretty thin wrapper around MPI for R) on Debian Lenny
</span><br>
<span class="quotelev1">&gt; (amd64).  My set up has a central calculator and a bunch of slaves to
</span><br>
<span class="quotelev1">&gt; wich work is distributed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The slaves wait like this:
</span><br>
<span class="quotelev1">&gt;         mpi.send(as.double(0), doubleType, root, requestCode, comm=comm)
</span><br>
<span class="quotelev1">&gt;         request &lt;- request+1
</span><br>
<span class="quotelev1">&gt;         cases &lt;- mpi.recv(cases, integerType, root, mpi.any.tag(),
</span><br>
<span class="quotelev1">&gt; comm=comm)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I.e., they do a simple send and then a receive.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's possible there's no one to talk to, so it could be stuck at
</span><br>
<span class="quotelev1">&gt; mpi.send or mpi.recv.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are either of those operations that should chew up CPU?  At this point,
</span><br>
<span class="quotelev1">&gt; I'm just trying to figure out where to look for the source of the
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<p><p>The short response is:  why do you not want it to use the whole CPU
<br>
while waiting?
<br>
<p>There's some discussion starting here:
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/users/2008/04/5457.php">http://www.open-mpi.org/community/lists/users/2008/04/5457.php</a>&gt;
<br>
<p>If you really want to make your application run slower, you can yield
<br>
the CPU when not doing much:
<br>
&lt;<a href="http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded">http://www.open-mpi.org/faq/?category=running#force-aggressive-degraded</a>&gt;
<br>
<p><p>Ciao
<br>
Terry
<br>
<p><pre>
-- 
Dr. Terry Frankcombe
Research School of Chemistry, Australian National University
Ph: (+61) 0417 163 509    Skype: terry.frankcombe
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9018.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9016.php">Ross Boylan: "[OMPI users] 100% CPU doing nothing!?"</a>
<li><strong>In reply to:</strong> <a href="9016.php">Ross Boylan: "[OMPI users] 100% CPU doing nothing!?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9024.php">Douglas Guptill: "[OMPI users]  100% CPU doing nothing!?"</a>
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
