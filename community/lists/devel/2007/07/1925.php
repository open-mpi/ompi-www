<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 09:45:34 2007" -->
<!-- isoreceived="20070718134534" -->
<!-- sent="Wed, 18 Jul 2007 16:45:29 +0300" -->
<!-- isosent="20070718134529" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node" -->
<!-- id="20070718134529.GN5125_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20070718132715.GM5125_at_minantech.com" -->
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
<strong>Date:</strong> 2007-07-18 09:45:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1926.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Previous message:</strong> <a href="1924.php">Gleb Natapov: "[OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>In reply to:</strong> <a href="1924.php">Gleb Natapov: "[OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1928.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Reply:</strong> <a href="1928.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 18, 2007 at 04:27:15PM +0300, Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   With current trunk LD_LIBRARY_PATH is not set for ranks that are
</span><br>
<span class="quotelev1">&gt; launched on the head node. This worked previously.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Same more info. I use rsh pls.
<br>
elfit1# /home/glebn/openmpi/bin/mpirun -np 1 -H elfit1 env | grep LD_LIBRARY_PATH
<br>
gives nothing. 
<br>
<p>The strange thing that I just found is that this one works
<br>
elfit1# /home/glebn/openmpi/bin/mpirun -np 1 -H localhost env | grep LD_LIBRARY_PATH
<br>
LD_LIBRARY_PATH=/home/glebn/openmpi/lib
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1926.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Previous message:</strong> <a href="1924.php">Gleb Natapov: "[OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>In reply to:</strong> <a href="1924.php">Gleb Natapov: "[OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1928.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>Reply:</strong> <a href="1928.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
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
