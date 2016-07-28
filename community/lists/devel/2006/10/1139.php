<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 25 03:45:58 2006" -->
<!-- isoreceived="20061025074558" -->
<!-- sent="Wed, 25 Oct 2006 09:45:47 +0200" -->
<!-- isosent="20061025074547" -->
<!-- name="Joachim Worringen" -->
<!-- email="joachim_at_[hidden]" -->
<!-- subject="[OMPI devel] socket usage" -->
<!-- id="453F162B.5010306_at_dolphinics.com" -->
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
<strong>From:</strong> Joachim Worringen (<em>joachim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-25 03:45:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1140.php">Adrian Knoth: "[OMPI devel] New oob/tcp?"</a>
<li><strong>Previous message:</strong> <a href="1138.php">Brian W. Barrett: "Re: [OMPI devel] help config.status to not mess up substitutions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1141.php">Ralph H Castain: "Re: [OMPI devel] socket usage"</a>
<li><strong>Reply:</strong> <a href="1141.php">Ralph H Castain: "Re: [OMPI devel] socket usage"</a>
<li><strong>Reply:</strong> <a href="1148.php">Torsten Hoefler: "Re: [OMPI devel] socket usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there a formula to calculate the number of socket connections per 
<br>
node (S) that an OpenMPI application needs for running (via sockets) on 
<br>
N nodes with P processes each? I guess something like
<br>
<p>S = P * (N-1)*P
<br>
<p>but what about the daemons etc.? Let's assume only a single interface is 
<br>
used.
<br>
<p>&nbsp;&nbsp;thanks, Joachim
<br>
<p><pre>
-- 
Joachim Worringen, Software Architect, Dolphin Interconnect Solutions
phone ++49/(0)228/324 08 17 - <a href="http://www.dolphinics.com">http://www.dolphinics.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1140.php">Adrian Knoth: "[OMPI devel] New oob/tcp?"</a>
<li><strong>Previous message:</strong> <a href="1138.php">Brian W. Barrett: "Re: [OMPI devel] help config.status to not mess up substitutions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1141.php">Ralph H Castain: "Re: [OMPI devel] socket usage"</a>
<li><strong>Reply:</strong> <a href="1141.php">Ralph H Castain: "Re: [OMPI devel] socket usage"</a>
<li><strong>Reply:</strong> <a href="1148.php">Torsten Hoefler: "Re: [OMPI devel] socket usage"</a>
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
