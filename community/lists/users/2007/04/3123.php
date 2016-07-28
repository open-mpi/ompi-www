<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 24 08:20:59 2007" -->
<!-- isoreceived="20070424122059" -->
<!-- sent="Tue, 24 Apr 2007 08:20:37 -0400" -->
<!-- isosent="20070424122037" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do you switch off paffinity?" -->
<!-- id="66881B1F-AAB5-4BF7-B6B0-631DF8929E55_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.64.0704231820250.6911_at_aragorn.brc.West.Sun.COM" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-24 08:20:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3124.php">Ralph Castain: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<li><strong>Previous message:</strong> <a href="3122.php">Jeff Squyres: "Re: [OMPI users] Bug in orte/mca/pls/rsh/pls_rsh_module.c"</a>
<li><strong>In reply to:</strong> <a href="3120.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3130.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Reply:</strong> <a href="3130.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 23, 2007, at 9:22 PM, Mostyn Lewis wrote:
<br>
<p><span class="quotelev1">&gt; I tried this on a humble PC and it works there.
</span><br>
<span class="quotelev1">&gt; I see in the --mca mpi_show_mca_params 1 print out that there is a
</span><br>
<span class="quotelev1">&gt; [bb17:06646] paffinity=
</span><br>
<span class="quotelev1">&gt; entry, so I expect that sets the value entry back to 0?
</span><br>
<p>There should be an mpi_paffinity_alone parameter; that's what drives  
<br>
the whole process.
<br>
<p><span class="quotelev1">&gt; I'll get to the SLES10 cluster when I can (other people doing
</span><br>
<span class="quotelev1">&gt; benchmarks) and see what I can. I see there's no stdbool.h there,
</span><br>
<span class="quotelev1">&gt; so maybe this is an artifact of defining the bool type on an
</span><br>
<span class="quotelev1">&gt; operton. I'll get back to you when I can.
</span><br>
<p>Lack of (bool) shouldn't be a factor.  If it is, we have a bug.
<br>
<p><span class="quotelev1">&gt; The test of boundness was a perl program invoked via system() in a
</span><br>
<span class="quotelev1">&gt; C MPI program. The /proc/&lt;pid&gt;/stat result shows the CPU you are
</span><br>
<span class="quotelev1">&gt; bound to (3rd number from the end) and a taskset call gets back the
</span><br>
<span class="quotelev1">&gt; mask to show if you are bound or not.
</span><br>
<p>Hmm.  What version kernel do you have?  I know there were some issues  
<br>
with this information until recent versions (I confess to not knowing  
<br>
which version the information became stable/reliable, unfortunately).
<br>
<p>Are you launching under a scheduler, perchance?  N1GE may be setting  
<br>
affinity before MPI processes are even launched, for example...?   
<br>
(I'm not too familiar with N1GE -- I'm speculating).
<br>
<p>There's a simple acid test to see if OMPI is setting the affinity or  
<br>
not: remove the linux paffinity component (assuming you compiled the  
<br>
components as plugins/dynamic shared objects).  Go to the OMPI  
<br>
installation directory:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$prefix/lib/openmpi
<br>
<p>There should be 2 files in there named mca_paffinity_linux.*.  This  
<br>
is the component that knows how to set processor affinity in Open  
<br>
MPI; if it's not there, Open MPI won't know how to set affinity on  
<br>
your system (and therefore won't).  Rename or move these files so  
<br>
that they are not findable, such as:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cd $prefix/lib/openmpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mkdir junk
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mv *paffinity_linux* junk
<br>
<p>And run your test again.  If you're still getting affinity set, then  
<br>
it's not Open MPI that is setting it.
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
<li><strong>Next message:</strong> <a href="3124.php">Ralph Castain: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<li><strong>Previous message:</strong> <a href="3122.php">Jeff Squyres: "Re: [OMPI users] Bug in orte/mca/pls/rsh/pls_rsh_module.c"</a>
<li><strong>In reply to:</strong> <a href="3120.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3130.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
<li><strong>Reply:</strong> <a href="3130.php">Mostyn Lewis: "Re: [OMPI users] How do you switch off paffinity?"</a>
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
