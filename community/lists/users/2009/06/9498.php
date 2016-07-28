<?
$subject_val = "Re: [OMPI users] Spawn and OpenFabrics";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 15:26:47 2009" -->
<!-- isoreceived="20090602192647" -->
<!-- sent="Tue, 02 Jun 2009 15:26:36 -0400" -->
<!-- isosent="20090602192636" -->
<!-- name="Allen Barnett" -->
<!-- email="allen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn and OpenFabrics" -->
<!-- id="1243970796.3239.76.camel_at_alpaca.lan" -->
<!-- inreplyto="E5AB9152-56E0-4061-8A50-1824A71B1327_at_cisco.com" -->
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
<strong>From:</strong> Allen Barnett (<em>allen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-02 15:26:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9499.php">Danesh Daroui: "Re: [OMPI users] sync problem"</a>
<li><strong>Previous message:</strong> <a href="9497.php">Jeff Squyres: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>In reply to:</strong> <a href="9497.php">Jeff Squyres: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9554.php">Jeff Squyres: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>Reply:</strong> <a href="9554.php">Jeff Squyres: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-06-02 at 12:27 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 2, 2009, at 11:37 AM, Allen Barnett wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; std::stringstream ss;
</span><br>
<span class="quotelev2">&gt; &gt; ss &lt;&lt; &quot;partitioner_program &quot; &lt;&lt; COMM_WORLD_SIZE;
</span><br>
<span class="quotelev2">&gt; &gt; system( ss.str().c_str() );
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You'd probably see the same problem even if you strdup'ed the c_str()  
</span><br>
<span class="quotelev1">&gt; and system()'ed that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What kernel are you using? 
</span><br>
<p>I've seen it myself on my generic opteron RHEL 4 cluster with kernel
<br>
2.6.9-78.0.22; I can't really figure out which version of OFED it uses
<br>
(maybe 1.2?). A customer has reported it on an Altix system with SLES
<br>
10.2 and kernel 2.6.16.60 with a version of OFED 1.3.
<br>
<p><span class="quotelev1">&gt;  Does OMPI say that it has IBV fork support?
</span><br>
<span class="quotelev1">&gt;      ompi_info --param btl openib --parsable | grep have_fork_support
</span><br>
<p>My RHEL4 system reports:
<br>
<p>MCA btl: parameter &quot;btl_openib_want_fork_support&quot; (current value: &quot;-1&quot;)
<br>
MCA btl: information &quot;btl_openib_have_fork_support&quot; (value: &quot;1&quot;)
<br>
<p>as does the build installed on the Altix system.
<br>
<p><span class="quotelev1">&gt; Be sure to also see <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-fork">http://www.open-mpi.org/faq/?category=openfabrics#ofa-fork</a> 
</span><br>
<p>We're using OMPI 1.2.8.
<br>
<p><span class="quotelev2">&gt; &gt; Also, would MPI_COMM_SPAWN suffer from the same difficulties?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It shouldn't; we proxy the launch of new commands off to mpirun /  
</span><br>
<span class="quotelev1">&gt; OMPI's run-time system.  Specifically: the new process(es) are not  
</span><br>
<span class="quotelev1">&gt; POSIX children of the process(es) that called MPI_COMM_SPAWN.
</span><br>
<p>Is a program started with MPI_COMM_SPAWN required to call MPI_INIT? I
<br>
guess what I'm asking is if I will have to make my partitioner an
<br>
OpenMPI program as well?
<br>
<p>Thanks,
<br>
Allen
<br>
<p><pre>
-- 
Allen Barnett
E-Mail: allen_at_[hidden]
Skype:  allenbarnett
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9499.php">Danesh Daroui: "Re: [OMPI users] sync problem"</a>
<li><strong>Previous message:</strong> <a href="9497.php">Jeff Squyres: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>In reply to:</strong> <a href="9497.php">Jeff Squyres: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9554.php">Jeff Squyres: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>Reply:</strong> <a href="9554.php">Jeff Squyres: "Re: [OMPI users] Spawn and OpenFabrics"</a>
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
