<?
$subject_val = "Re: [OMPI users] SGE problems w/OpenMPI 1.8.7";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 12:33:57 2015" -->
<!-- isoreceived="20150811163357" -->
<!-- sent="Tue, 11 Aug 2015 17:33:55 +0100" -->
<!-- isosent="20150811163355" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE problems w/OpenMPI 1.8.7" -->
<!-- id="87k2t1g4y4.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293EEEB7C_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] SGE problems w/OpenMPI 1.8.7<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-11 12:33:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27426.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27424.php">Jeremia B&#195;&#164;r: "[OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27363.php">Lane, William: "[OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Lane, William&quot; &lt;William.Lane_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; I'm running a mixed cluster of Blades (HS21 and HS22 chassis), x3550-M3 and X3550-M4 systems, some of which support hyperthreading, while others
</span><br>
<span class="quotelev1">&gt; don't (specifically the HS21 blades) all on CentOS 6.3 w/SGE.
</span><br>
<p>Do you mean jobs are split across nodes which have hyperthreading on,
<br>
and ones which don't (and you're trying to use the threads where they're
<br>
on)?  That doesn't seem a good idea.  (You could turn off threads
<br>
per-job in a root-privileged prolog, pe_starter, or shepherd_cmd; or it
<br>
would probably work to set the slot count to the core count and bind to
<br>
cores.)
<br>
<p><span class="quotelev1">&gt; I have no problems running my simple OpenMPI 1.8.7 test code outside of SGE (with or without the --bind-to core switch, but can only run the jobs within
</span><br>
<span class="quotelev1">&gt; SGE via qrsh on a limited number of slots (4 at most) successfully. The errors are very similar to the ones I was getting running OpenMPI 1.8.5 - 1.8.6 outside of SGE
</span><br>
<span class="quotelev1">&gt; on this same cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Strangely, when running the test code outside of SGE w/the --bind-to core switch, mpirun still binds processes to hyperthreading cores. Additionally,
</span><br>
<span class="quotelev1">&gt; the --bind-to core switch prevents the OpenMPI 1.8.7 test code from running at all within SGE (it outputs warnings about missing NUMA libraries reducing performance
</span><br>
<span class="quotelev1">&gt; then exits).
</span><br>
<p>Are you doing SGE core binding
<br>
&lt;<a href="http://arc.liv.ac.uk/SGE/howto/sge-configs.html#_core_binding">http://arc.liv.ac.uk/SGE/howto/sge-configs.html#_core_binding</a>&gt;?
<br>
<p><span class="quotelev1">&gt; We would rather run out OpenMPI jobs from within SGE so that we can get accounting data on OpenMPI jobs for administrative purposes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The orte PE I'm been using seems to meet all the requirements for previous versions of OpenMPI:
</span><br>
<span class="quotelev1">&gt; the allocation rule is fill-up, rather than round-robin (I'm not sure if this makes a difference or not)
</span><br>
<p>If you're really going to have heterogeneous threading, I'd guess you
<br>
best allocate only whole nodes and let openmpi do the binding.
<br>
<p>[procenv is recommended for comparing the job's generalized environment
<br>
with the environment outside the resource manager
<br>
&lt;<a href="http://arc.liv.ac.uk/SGE/howto/troubleshooting.html">http://arc.liv.ac.uk/SGE/howto/troubleshooting.html</a>&gt;.]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27426.php">Dave Love: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27424.php">Jeremia B&#195;&#164;r: "[OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27363.php">Lane, William: "[OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
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
