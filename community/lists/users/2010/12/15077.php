<?
$subject_val = "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 16:03:11 2010" -->
<!-- isoreceived="20101210210311" -->
<!-- sent="Fri, 10 Dec 2010 16:02:18 -0500" -->
<!-- isosent="20101210210218" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Method for worker to determine its &amp;quot;rank&amp;quot; on	a	single machine?" -->
<!-- id="4D02955A.9070300_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E1PR9Vh-0005D1-7p_at_mendel.bio.caltech.edu" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 16:02:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15078.php">Tang, Hsiu-Khuern: "[OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>Previous message:</strong> <a href="15076.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<li><strong>In reply to:</strong> <a href="15075.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15067.php">Prentice Bisbal: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12/10/2010 03:24 PM, David Mathog wrote:
<br>
<span class="quotelev1">&gt; Ashley Pittman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For a much simpler approach you could also use these two environment
</span><br>
<span class="quotelev1">&gt; variables, this is on my current system which is 1.5 based, YMMV of course.
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_COMM_WORLD_LOCAL_RANK
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_COMM_WORLD_LOCAL_SIZE
</span><br>
However that doesn't really tell you which MPI_COMM_WORLD ranks are on 
<br>
the same node as you I believe.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; That is simpler.  It works on OMPI 1.4.3 too:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cat&gt;/usr/common/bin/dumpev.sh&lt;&lt;EOD
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; set
</span><br>
<span class="quotelev1">&gt; EOD
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 --host monkey01 --mca plm_rsh_agent rsh
</span><br>
<span class="quotelev1">&gt; /usr/common/bin/dumpenv.sh | grep LOCAL_RANK
</span><br>
<span class="quotelev1">&gt; OMPI_COMM_WORLD_LOCAL_RANK=0
</span><br>
<span class="quotelev1">&gt; OMPI_COMM_WORLD_LOCAL_RANK=1
</span><br>
<span class="quotelev1">&gt; OMPI_COMM_WORLD_LOCAL_RANK=2
</span><br>
<span class="quotelev1">&gt; OMPI_COMM_WORLD_LOCAL_RANK=3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David Mathog
</span><br>
<span class="quotelev1">&gt; mathog_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Manager, Sequence Analysis Facility, Biology Division, Caltech
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15077/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-15077/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15078.php">Tang, Hsiu-Khuern: "[OMPI users] cannot restrict port numbers using btl_tcp_port_min_v4 and btl_tcp_port_range_v4"</a>
<li><strong>Previous message:</strong> <a href="15076.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<li><strong>In reply to:</strong> <a href="15075.php">David Mathog: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15067.php">Prentice Bisbal: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
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
