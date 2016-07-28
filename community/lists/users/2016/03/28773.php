<?
$subject_val = "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files	limits	&gt;=	4096 still required?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 11:11:35 2016" -->
<!-- isoreceived="20160321151135" -->
<!-- sent="Mon, 21 Mar 2016 15:11:32 +0000" -->
<!-- isosent="20160321151132" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files	limits	&amp;gt;=	4096 still required?" -->
<!-- id="87k2kvg923.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF2A29F2456_at_cshsmsgmbx01.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files	limits	&gt;=	4096 still required?<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-21 11:11:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28774.php">Nathan Hjelm: "Re: [OMPI users] Why does 'self' needs to be explicitly mentioned?"</a>
<li><strong>Previous message:</strong> <a href="28772.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Existing and emerging interconnects for commodity	PCs"</a>
<li><strong>In reply to:</strong> <a href="28756.php">Lane, William: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files	limits	&gt;=	4096 still required?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Lane, William&quot; &lt;William.Lane_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the following openMPI job submission:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; qsub -q short.q -V -pe make 84 -b y mpirun -np 84 --prefix
</span><br>
<span class="quotelev1">&gt; /hpc/apps/mpi/openmpi/1.10.1/ --hetero-nodes --mca btl ^sm --mca
</span><br>
<span class="quotelev1">&gt; plm_base_verbose 5 /hpc/home/lanew/mpi/openmpi/a_1_10_1.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have some more information on this issue. All the server daemons are
</span><br>
<span class="quotelev1">&gt; started without error and before
</span><br>
<span class="quotelev1">&gt; I ever see the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [csclprd3-5-2:10512] [[42154,0],0] plm:base:receive got
</span><br>
<span class="quotelev1">&gt; update_proc_state for job [42154,1]
</span><br>
<span class="quotelev1">&gt; [csclprd3-6-12:30667] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [csclprd3-6-12:30667] Signal: Bus error (7)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; qrsh throws the following error for various nodes taking part in the
</span><br>
<span class="quotelev1">&gt; openmpi compute ring:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; unable to write to file /tmp/285507.1.short.q/qrsh_error: No space
</span><br>
<span class="quotelev1">&gt; left on device[csclprd3-4-3:08052] [[24964,0],17] plm:rsh: using
</span><br>
<span class="quotelev1">&gt; &quot;/opt/sge/bin/lx-amd64/qrsh -inherit -nostdin -V -verbose&quot; for
</span><br>
<span class="quotelev1">&gt; launching
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does each and every node taking part in the openMPI compute ring need
</span><br>
<span class="quotelev1">&gt; to write to a temporary directory?
</span><br>
<p>If don't believe the maintainer, please check the code or execution to
<br>
verify that it's pointless continuing with no space for SGE's tmpdir
<br>
(which means you basically have a broken system).  Really.
<br>
<p>I'd expect shmem to stop with an error message if it couldn't write the
<br>
memory mapped file, so maybe there's an OMPI bug there, but it won't
<br>
happen on a healthy node with enough space.  It's also possible SGE
<br>
should see the job failure as a system problem and disabled the queue,
<br>
if it didn't, but don't know how the job failure will have appeared.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28774.php">Nathan Hjelm: "Re: [OMPI users] Why does 'self' needs to be explicitly mentioned?"</a>
<li><strong>Previous message:</strong> <a href="28772.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Existing and emerging interconnects for commodity	PCs"</a>
<li><strong>In reply to:</strong> <a href="28756.php">Lane, William: "Re: [OMPI users] OpenMPI 1.10.1 *ix hard/soft open files	limits	&gt;=	4096 still required?"</a>
<!-- nextthread="start" -->
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
