<?
$subject_val = "Re: [OMPI users] Spawn and OpenFabrics";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 12:27:46 2009" -->
<!-- isoreceived="20090602162746" -->
<!-- sent="Tue, 2 Jun 2009 12:27:40 -0400" -->
<!-- isosent="20090602162740" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn and OpenFabrics" -->
<!-- id="E5AB9152-56E0-4061-8A50-1824A71B1327_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1243957073.3239.39.camel_at_alpaca.lan" -->
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
<strong>Subject:</strong> Re: [OMPI users] Spawn and OpenFabrics<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-02 12:27:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9498.php">Allen Barnett: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>Previous message:</strong> <a href="9496.php">Allen Barnett: "[OMPI users] Spawn and OpenFabrics"</a>
<li><strong>In reply to:</strong> <a href="9496.php">Allen Barnett: "[OMPI users] Spawn and OpenFabrics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9498.php">Allen Barnett: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>Reply:</strong> <a href="9498.php">Allen Barnett: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 2, 2009, at 11:37 AM, Allen Barnett wrote:
<br>
<p><span class="quotelev1">&gt; std::stringstream ss;
</span><br>
<span class="quotelev1">&gt; ss &lt;&lt; &quot;partitioner_program &quot; &lt;&lt; COMM_WORLD_SIZE;
</span><br>
<span class="quotelev1">&gt; system( ss.str().c_str() );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>You'd probably see the same problem even if you strdup'ed the c_str()  
<br>
and system()'ed that.
<br>
<p>What kernel are you using?  Does OMPI say that it has IBV fork support?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_info --param btl openib --parsable | grep have_fork_support
<br>
<p>Be sure to also see <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-fork">http://www.open-mpi.org/faq/?category=openfabrics#ofa-fork</a> 
<br>
.
<br>
<span class="quotelev1">&gt; Also, would MPI_COMM_SPAWN suffer from the same difficulties?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>It shouldn't; we proxy the launch of new commands off to mpirun /  
<br>
OMPI's run-time system.  Specifically: the new process(es) are not  
<br>
POSIX children of the process(es) that called MPI_COMM_SPAWN.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9498.php">Allen Barnett: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>Previous message:</strong> <a href="9496.php">Allen Barnett: "[OMPI users] Spawn and OpenFabrics"</a>
<li><strong>In reply to:</strong> <a href="9496.php">Allen Barnett: "[OMPI users] Spawn and OpenFabrics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9498.php">Allen Barnett: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>Reply:</strong> <a href="9498.php">Allen Barnett: "Re: [OMPI users] Spawn and OpenFabrics"</a>
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
