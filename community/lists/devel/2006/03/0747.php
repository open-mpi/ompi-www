<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Mar 12 12:33:11 2006" -->
<!-- isoreceived="20060312173311" -->
<!-- sent="Sun, 12 Mar 2006 18:32:57 +0100" -->
<!-- isosent="20060312173257" -->
<!-- name="Christian Leber" -->
<!-- email="christian_at_[hidden]" -->
<!-- subject="[OMPI devel] writing a module to use OMPI on another network interface" -->
<!-- id="20060312173257.GA13726_at_core" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Christian Leber (<em>christian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-12 12:32:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0748.php">Brian Barrett: "Re: [OMPI devel] writing a module to use OMPI on another network interface"</a>
<li><strong>Previous message:</strong> <a href="0746.php">Brian Barrett: "[OMPI devel] ptmalloc2 and iof changes tonight"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0748.php">Brian Barrett: "Re: [OMPI devel] writing a module to use OMPI on another network interface"</a>
<li><strong>Reply:</strong> <a href="0748.php">Brian Barrett: "Re: [OMPI devel] writing a module to use OMPI on another network interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I would like to write a module (i think that's the right terminology)
<br>
for OpenMPI to a new network interface.
<br>
<p>The network interface (actually a simulator) can do the following
<br>
simple things:
<br>
-return the size of the network
<br>
-return the id of the node inside the network
<br>
-send non-blocking to a node
<br>
-probe for messages
<br>
-recv blocking
<br>
<p>So it's a pretty simple interface, the connection to the simulator works
<br>
over normal TCP/IP sockets.
<br>
<p>So how should I start doing this?
<br>
Or is there something existing i could modify?
<br>
<p>Regards
<br>
Christian Leber
<br>
<p><pre>
-- 
  &quot;Omnis enim res, quae dando non deficit, dum habetur et non datur,
   nondum habetur, quomodo habenda est.&quot;       (Aurelius Augustinus)
  Translation: &lt;<a href="http://gnuhh.org/work/fsf-europe/augustinus.html">http://gnuhh.org/work/fsf-europe/augustinus.html</a>&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0748.php">Brian Barrett: "Re: [OMPI devel] writing a module to use OMPI on another network interface"</a>
<li><strong>Previous message:</strong> <a href="0746.php">Brian Barrett: "[OMPI devel] ptmalloc2 and iof changes tonight"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0748.php">Brian Barrett: "Re: [OMPI devel] writing a module to use OMPI on another network interface"</a>
<li><strong>Reply:</strong> <a href="0748.php">Brian Barrett: "Re: [OMPI devel] writing a module to use OMPI on another network interface"</a>
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
