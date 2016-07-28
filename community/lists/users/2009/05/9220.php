<?
$subject_val = "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  5 09:37:26 2009" -->
<!-- isoreceived="20090505133726" -->
<!-- sent="Tue, 05 May 2009 06:37:15 -0700" -->
<!-- isosent="20090505133715" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??" -->
<!-- id="4A00410B.5000609_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="23C841EE-2F91-4E9A-99D6-E5582C0361E1_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-05 09:37:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9221.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9219.php">Jeroen Kleijer: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9211.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9222.php">Eugene Loh: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Reply:</strong> <a href="9222.php">Eugene Loh: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; On May 5, 2009, at 3:37 AM, Geoffroy Pignot wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  The result is : everything works fine with MPI executables : logical !!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What I was trying to do , was to run non MPI exes thanks to mpirun. 
</span><br>
<span class="quotelev2">&gt;&gt; There , openmpi is not able to bind these processes to a particular CPU.
</span><br>
<span class="quotelev2">&gt;&gt; My conclusion is that the process affinity is set in MPI_Init, right ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes - sorry, I should have caught that in your cmd line. Not enough 
</span><br>
<span class="quotelev1">&gt; sleep lately... :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could it be possible to have the paffinity features working without 
</span><br>
<span class="quotelev2">&gt;&gt; any MPI_Init call, using taskset for example. I agree , it's not your 
</span><br>
<span class="quotelev2">&gt;&gt; job to support the execution of any kind of exes but it would be nice !!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, it is worth the question. As things stand, processes don't 
</span><br>
<span class="quotelev1">&gt; bind until they call MPI_Init. This has caused some problems for 
</span><br>
<span class="quotelev1">&gt; people that rely on the procs to be restricted to specific processor 
</span><br>
<span class="quotelev1">&gt; sets, but who don't (for various reasons) call MPI_Init at the 
</span><br>
<span class="quotelev1">&gt; beginning of their program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll raise the question inside the devel community and see what people 
</span><br>
<span class="quotelev1">&gt; think.
</span><br>
<p>Another case is where you have a NUMA node and the MPI process allocates 
<br>
and touches a bunch of memory before MPI_Init is called.  In this case, 
<br>
we wouldn't want to wait until MPI_Init for process binding.  Rather, we 
<br>
would want the process bound as soon as it is started.
<br>
<p>Put more strongly, the &quot;correct&quot; (subjective term) way for an MPI 
<br>
implementation to bind processes is upon process creation and waiting 
<br>
until MPI_Init is &quot;wrong&quot;.  This point of view has nothing to do with 
<br>
asking the MPI implementation to support binding of non-MPI processes.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9221.php">Jeff Squyres: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9219.php">Jeroen Kleijer: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9211.php">Ralph Castain: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9222.php">Eugene Loh: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<li><strong>Reply:</strong> <a href="9222.php">Eugene Loh: "Re: [OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
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
