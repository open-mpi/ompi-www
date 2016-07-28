<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 14 09:40:52 2005" -->
<!-- isoreceived="20050914144052" -->
<!-- sent="Wed, 14 Sep 2005 08:40:49 -0600" -->
<!-- isosent="20050914144049" -->
<!-- name="Galen M. Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Registration Cache changes" -->
<!-- id="75558F2E-963F-41BC-A2A8-5653DF738A99_at_cs.unm.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Galen M. Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-14 09:40:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0345.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Previous message:</strong> <a href="0343.php">Ralph H. Castain: "Startup/shutdown performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0346.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<li><strong>Reply:</strong> <a href="0346.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<li><strong>Reply:</strong> <a href="0385.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gleb,
<br>
<p>Tim and I have incorporated some of the changes you mentioned into a  
<br>
new rcache framework. Currently there is a single component in this  
<br>
framework, rcache_rb which is a registration cache based on a red- 
<br>
black tree  and uses an MRU list if the registration is not  
<br>
persistent. Note that each mpool now has it's own rcache instead of  
<br>
the btl's sharing an rcache. This has significantly simplified both  
<br>
the btls and the pml. Thanks for your input and please feel free to  
<br>
critique.
<br>
<p>Galen 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0345.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<li><strong>Previous message:</strong> <a href="0343.php">Ralph H. Castain: "Startup/shutdown performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0346.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<li><strong>Reply:</strong> <a href="0346.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
<li><strong>Reply:</strong> <a href="0385.php">Gleb Natapov: "Re:  Registration Cache changes"</a>
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
