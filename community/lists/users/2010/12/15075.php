<?
$subject_val = "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 15:24:13 2010" -->
<!-- isoreceived="20101210202413" -->
<!-- sent="Fri, 10 Dec 2010 12:24:09 -0800" -->
<!-- isosent="20101210202409" -->
<!-- name="David Mathog" -->
<!-- email="mathog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Method for worker to determine its &amp;quot;rank&amp;quot; on	a	single machine?" -->
<!-- id="E1PR9Vh-0005D1-7p_at_mendel.bio.caltech.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Method for worker to determine its &amp;quot;rank&amp;quot; on	a	single machine?" -->
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
<strong>Subject:</strong> Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?<br>
<strong>From:</strong> David Mathog (<em>mathog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 15:24:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15076.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15074.php">Terry Dontje: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>Maybe in reply to:</strong> <a href="15071.php">Gus Correa: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15076.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<li><strong>Reply:</strong> <a href="15076.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<li><strong>Reply:</strong> <a href="15077.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley Pittman wrote:
<br>
<p><span class="quotelev1">&gt; For a much simpler approach you could also use these two environment
</span><br>
variables, this is on my current system which is 1.5 based, YMMV of course.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI_COMM_WORLD_LOCAL_RANK
</span><br>
<span class="quotelev1">&gt; OMPI_COMM_WORLD_LOCAL_SIZE
</span><br>
<p>That is simpler.  It works on OMPI 1.4.3 too:
<br>
<p>cat &gt;/usr/common/bin/dumpev.sh &lt;&lt;EOD
<br>
#!/bin/bash
<br>
set
<br>
EOD
<br>
mpirun -np 4 --host monkey01 --mca plm_rsh_agent rsh
<br>
/usr/common/bin/dumpenv.sh | grep LOCAL_RANK
<br>
OMPI_COMM_WORLD_LOCAL_RANK=0
<br>
OMPI_COMM_WORLD_LOCAL_RANK=1
<br>
OMPI_COMM_WORLD_LOCAL_RANK=2
<br>
OMPI_COMM_WORLD_LOCAL_RANK=3
<br>
<p>Thanks,
<br>
<p>David Mathog
<br>
mathog_at_[hidden]
<br>
Manager, Sequence Analysis Facility, Biology Division, Caltech
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15076.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<li><strong>Previous message:</strong> <a href="15074.php">Terry Dontje: "Re: [OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>Maybe in reply to:</strong> <a href="15071.php">Gus Correa: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15076.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<li><strong>Reply:</strong> <a href="15076.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<li><strong>Reply:</strong> <a href="15077.php">Terry Dontje: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
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
