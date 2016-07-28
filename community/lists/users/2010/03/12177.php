<?
$subject_val = "[OMPI users] sm btl choices";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  1 03:42:11 2010" -->
<!-- isoreceived="20100301084211" -->
<!-- sent="Mon, 01 Mar 2010 00:42:06 -0800" -->
<!-- isosent="20100301084206" -->
<!-- name="David Turner" -->
<!-- email="dpturner_at_[hidden]" -->
<!-- subject="[OMPI users] sm btl choices" -->
<!-- id="4B8B7DDE.5010301_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> David Turner (<em>dpturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-01 03:42:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12178.php">Ralph Castain: "Re: [OMPI users] sm btl choices"</a>
<li><strong>Previous message:</strong> <a href="../../2010/02/12176.php">Fernando Lemos: "[OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12178.php">Ralph Castain: "Re: [OMPI users] sm btl choices"</a>
<li><strong>Reply:</strong> <a href="12178.php">Ralph Castain: "Re: [OMPI users] sm btl choices"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Running on a large cluster of 8-core nodes.  I understand
<br>
that the SM BTL is a &quot;good thing&quot;.  But I'm curious about
<br>
its use of memory-mapped files.  I believe these files will
<br>
be in $TMPDIR, which defaults to /tmp.
<br>
<p>In our cluster, the compute nodes are stateless, so /tmp
<br>
is actually in RAM.  Keeping memory-mapped &quot;files&quot; in
<br>
memory seems kind of circular, although I know little
<br>
about these things.  A bigger problem is that it appears
<br>
OMPI does not remove the files upon completion.
<br>
<p>Another option is to redefine $TMPDIR to point to a
<br>
&quot;real&quot; file system.  In our cluster, all the available
<br>
file systems are accessed over the IB fabric.  So it
<br>
seems that there will be IB traffic, even though the
<br>
point of the SM BTL is to avoid this traffic.
<br>
<p>Given the above two constraints, might it just be
<br>
better to disable the SM BTL entirely, and use the
<br>
IB BTL even within a node?  Of course, the &quot;self&quot;
<br>
BTL should still be used if appropriate.
<br>
<p>Any thoughts clarifying these issues would be
<br>
greatly appreciated.  Thanks!
<br>
<p><pre>
-- 
Best regards,
David Turner
User Services Group        email: dpturner_at_[hidden]
NERSC Division             phone: (510) 486-4027
Lawrence Berkeley Lab        fax: (510) 486-4316
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12178.php">Ralph Castain: "Re: [OMPI users] sm btl choices"</a>
<li><strong>Previous message:</strong> <a href="../../2010/02/12176.php">Fernando Lemos: "[OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12178.php">Ralph Castain: "Re: [OMPI users] sm btl choices"</a>
<li><strong>Reply:</strong> <a href="12178.php">Ralph Castain: "Re: [OMPI users] sm btl choices"</a>
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
