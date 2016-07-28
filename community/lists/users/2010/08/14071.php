<?
$subject_val = "[OMPI users] mem lock limit &amp; ulimit";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 18 14:57:11 2010" -->
<!-- isoreceived="20100818185711" -->
<!-- sent="Wed, 18 Aug 2010 20:17:24 +0200" -->
<!-- isosent="20100818181724" -->
<!-- name="stabeek" -->
<!-- email="stabeek_at_[hidden]" -->
<!-- subject="[OMPI users] mem lock limit &amp;amp; ulimit" -->
<!-- id="20100818181724.29937.qmail_at_ns354564.ovh.net" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] mem lock limit &amp; ulimit<br>
<strong>From:</strong> stabeek (<em>stabeek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-18 14:17:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14072.php">Ralph Castain: "Re: [OMPI users] mem lock limit &amp; ulimit"</a>
<li><strong>Previous message:</strong> <a href="14070.php">Richard Treumann: "Re: [OMPI users] Accessing to the send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14072.php">Ralph Castain: "Re: [OMPI users] mem lock limit &amp; ulimit"</a>
<li><strong>Reply:</strong> <a href="14072.php">Ralph Castain: "Re: [OMPI users] mem lock limit &amp; ulimit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, 
<br>
<p>I've done a good bit of reading and still cannot get my mpirun programs to 
<br>
execute without giving warnings about the memory lock limit not being 
<br>
&quot;unlimited&quot;. 
<br>
<p>I'm on an infiniband-(openib)-networked cluster under slurm resource mgmt 
<br>
using openmpi. 
<br>
<p>Initially I did not want to set max memlock to unlimited because of security 
<br>
concerns, so I concentrated on having slurm negate this limit via its 
<br>
PropagateResourceLimitsExcept=MEMLOCK setting. 
<br>
<p>There was little success with this, and then on reading the MPI FAQ @openmpi 
<br>
for a second time, and seeing that openmpi's source code actually recurs to 
<br>
libc's getrlimit() to ascertain the memlock limit, I decided this setting 
<br>
was not-relevant for me. This is hunch as yet, it would be nice to get it 
<br>
verified, though it won't help me resolve the problem really. 
<br>
<p>Now I'm faced with having to ask about ulimit on a mailing which is not 
<br>
about ulimit, but I'm hoping for some people's experience here:
<br>
&quot;ulimit -l unlimited&quot; works if:
<br>
1) the /etc/security/limits.conf file has unlimited soft and hard limits.
<br>
2) if you are root. 
<br>
<p>These conditions solve the problem. But the 2nd is not feasible as should be 
<br>
clear. The problem is that for a normal user running ulimit does not allow a 
<br>
memlock max setting above 256. Its behaviour is one of: 
<br>
<p>&quot;Let normaluser increase max memlock only up to 256&quot; 
<br>
<p>Can anybody shed any light or make any suggestions, it would be appreciated. 
<br>
Many thanks.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14072.php">Ralph Castain: "Re: [OMPI users] mem lock limit &amp; ulimit"</a>
<li><strong>Previous message:</strong> <a href="14070.php">Richard Treumann: "Re: [OMPI users] Accessing to the send buffer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14072.php">Ralph Castain: "Re: [OMPI users] mem lock limit &amp; ulimit"</a>
<li><strong>Reply:</strong> <a href="14072.php">Ralph Castain: "Re: [OMPI users] mem lock limit &amp; ulimit"</a>
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
