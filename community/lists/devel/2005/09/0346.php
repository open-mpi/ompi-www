<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 14 09:59:00 2005" -->
<!-- isoreceived="20050914145900" -->
<!-- sent="Wed, 14 Sep 2005 17:58:14 +0300" -->
<!-- isosent="20050914145814" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re:  Registration Cache changes" -->
<!-- id="20050914145814.GO15121_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="75558F2E-963F-41BC-A2A8-5653DF738A99_at_cs.unm.edu" -->
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
<strong>Date:</strong> 2005-09-14 09:58:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0347.php">Ralf Wildenhues: "Re:  64bit shared library problems"</a>
<li><strong>Previous message:</strong> <a href="0345.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>In reply to:</strong> <a href="0344.php">Galen M. Shipman: "Registration Cache changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0385.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Sep 14, 2005 at 08:40:49AM -0600, Galen M. Shipman wrote:
<br>
<span class="quotelev1">&gt; Hi Gleb,
</span><br>
<p>Hello Galen,
<br>
<p>I checked out the new code and am looking at it now. Thanks!
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim and I have incorporated some of the changes you mentioned into a  
</span><br>
<span class="quotelev1">&gt; new rcache framework. Currently there is a single component in this  
</span><br>
<span class="quotelev1">&gt; framework, rcache_rb which is a registration cache based on a red- 
</span><br>
<span class="quotelev1">&gt; black tree  and uses an MRU list if the registration is not  
</span><br>
<span class="quotelev1">&gt; persistent. Note that each mpool now has it's own rcache instead of  
</span><br>
<span class="quotelev1">&gt; the btl's sharing an rcache. This has significantly simplified both  
</span><br>
<span class="quotelev1">&gt; the btls and the pml. Thanks for your input and please feel free to  
</span><br>
<span class="quotelev1">&gt; critique.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0347.php">Ralf Wildenhues: "Re:  64bit shared library problems"</a>
<li><strong>Previous message:</strong> <a href="0345.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>In reply to:</strong> <a href="0344.php">Galen M. Shipman: "Registration Cache changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0385.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
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
