<?
$subject_val = "Re: [OMPI users] Debugging memory use of Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 19:10:40 2009" -->
<!-- isoreceived="20090414231040" -->
<!-- sent="Tue, 14 Apr 2009 16:10:19 -0700" -->
<!-- isosent="20090414231019" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging memory use of Open MPI" -->
<!-- id="49E517DB.7050705_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49E4FEEF.5040904_at_bcgsc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debugging memory use of Open MPI<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 19:10:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8928.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
<li><strong>Previous message:</strong> <a href="8926.php">Jovana Knezevic: "[OMPI users] Problem with MPI_File_read() (2)"</a>
<li><strong>In reply to:</strong> <a href="8924.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8929.php">Chris Gottbrath: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8929.php">Chris Gottbrath: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8961.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shaun Jackman wrote:
<br>
<p><span class="quotelev1">&gt; Wow. Thanks, Eugene. I definitely have to look into the Sun HPC 
</span><br>
<span class="quotelev1">&gt; ClusterTools. It looks as though it could be very informative.
</span><br>
<p>Great.  And, I didn't mean to slight TotalView.  I'm just not familiar 
<br>
with it.
<br>
<p><span class="quotelev1">&gt; What's the purpose of the 400 MB that MPI_Init has allocated?
</span><br>
<p>It's for... um, I don't know.  Let's see...
<br>
<p>About a third of it appears to be
<br>
vt_open() -&gt; VTThrd_open() -&gt; VTGen_open
<br>
which I'm guessing is due to the VampirTrace instrumentation (maybe 
<br>
allocating the buffers into which the MPI tracing data is collected).  
<br>
It seems to go away if one doesn't collect message-tracing data.
<br>
<p>Somehow, I can't see further into the library.  Hmm.  It does seem like 
<br>
a bunch.  The shared-memory area (which MPI_Init allocates for on-node 
<br>
message passing) is much smaller.  The remaining roughly 130 
<br>
Mbyte/process seems to be independent of the number of processes.
<br>
<p>An interesting exercise for the reader.
<br>
<p><span class="quotelev1">&gt; The figure of in-flight messages vs time when the receiver sleeps is 
</span><br>
<span class="quotelev1">&gt; particularly interesting. The sender appears to stop sending and block 
</span><br>
<span class="quotelev1">&gt; once there are 30'000 in-flight messages. Has Open MPI detected the 
</span><br>
<span class="quotelev1">&gt; situation of congestion and begun waiting for the receiver to catch 
</span><br>
<span class="quotelev1">&gt; up? Or is it something simpler, such as the underlying write(2) call 
</span><br>
<span class="quotelev1">&gt; to the TCP socket blocking? If it's the first case, perhaps I could 
</span><br>
<span class="quotelev1">&gt; tune this threshold to behave better for my application.
</span><br>
<p>This particular case is for two on-node processes.  So, no TCP is 
<br>
involved.  There appear to be about 55K allocations, which looks like 
<br>
the 85K peak minus the 30K at which the sender stalls.  So, maybe some 
<br>
resource got exhausted at that point.  Dunno.
<br>
<p>Anyhow, this may be starting to get into more detail than you (or I) 
<br>
need to understand to address your problem.  It *is* interesting stuff, 
<br>
though.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8928.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_File_read() (2)"</a>
<li><strong>Previous message:</strong> <a href="8926.php">Jovana Knezevic: "[OMPI users] Problem with MPI_File_read() (2)"</a>
<li><strong>In reply to:</strong> <a href="8924.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8929.php">Chris Gottbrath: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8929.php">Chris Gottbrath: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8961.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
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
