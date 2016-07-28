<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec  7 11:34:42 2005" -->
<!-- isoreceived="20051207163442" -->
<!-- sent="Wed, 7 Dec 2005 17:34:36 +0100 (CET)" -->
<!-- isosent="20051207163436" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] error creating high priority cq for mthca0" -->
<!-- id="Pine.LNX.4.63.0512071724220.32350_at_dingo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.63.0512071700510.32350_at_dingo.iwr.uni-heidelberg.de" -->
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
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-07 11:34:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0432.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Previous message:</strong> <a href="0430.php">Bogdan Costescu: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>In reply to:</strong> <a href="0430.php">Bogdan Costescu: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0433.php">Daryl W. Grunau: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[ Sorry, I pressed the wrong keys too soon... ]
<br>
<p>On Wed, 7 Dec 2005, Bogdan Costescu wrote:
<br>
<p><span class="quotelev1">&gt; ... can't &quot;ulimit -l X&quot; where X is larger than the &quot;hard&quot; value from
</span><br>
<span class="quotelev1">&gt; limits.conf.
</span><br>
<p>This is true for a normal user; however root can modify the hard 
<br>
limits in its shells. Also a batch system, running as root on a 
<br>
compute node, can set the hard and soft values to something different 
<br>
from the system (limits.conf) values before starting the user shell or 
<br>
compute process, via setrlimit(2).
<br>
<p>Is the limits.conf issue specific to Linux ? Aren't there other OSes 
<br>
that use PAM and would be affected as well ?
<br>
<p><pre>
-- 
Bogdan Costescu
IWR - Interdisziplinaeres Zentrum fuer Wissenschaftliches Rechnen
Universitaet Heidelberg, INF 368, D-69120 Heidelberg, GERMANY
Telephone: +49 6221 54 8869, Telefax: +49 6221 54 8868
E-mail: Bogdan.Costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0432.php">Pierre Valiron: "Re: [O-MPI users] failure to build openmpi-1.0.1rc5 on Solaris10 Opteron"</a>
<li><strong>Previous message:</strong> <a href="0430.php">Bogdan Costescu: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<li><strong>In reply to:</strong> <a href="0430.php">Bogdan Costescu: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0433.php">Daryl W. Grunau: "Re: [O-MPI users] error creating high priority cq for mthca0"</a>
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
