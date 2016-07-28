<?
$subject_val = "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 11:40:42 2014" -->
<!-- isoreceived="20141103164042" -->
<!-- sent="Mon, 03 Nov 2014 16:40:40 +0000" -->
<!-- isosent="20141103164040" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] change in behaviour 1.6 -&amp;gt; 1.8 under sge" -->
<!-- id="8761ewutiv.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.GSO.2.00.1411031205310.23393_at_sunserv3" -->
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
<strong>Subject:</strong> Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-03 11:40:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25662.php">Steven Eliuk: "[OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<li><strong>Previous message:</strong> <a href="25660.php">Ralph Castain: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>In reply to:</strong> <a href="25659.php">Mark Dixon: "[OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25665.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>Reply:</strong> <a href="25665.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mark Dixon &lt;m.c.dixon_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've started looking at moving to the openmpi 1.8 branch from 1.6 on
</span><br>
<span class="quotelev1">&gt; our CentOS6/Son of Grid Engine cluster and noticed an unexpected
</span><br>
<span class="quotelev1">&gt; difference when binding multiple cores to each rank.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has openmpi's definition 'slot' changed between 1.6 and 1.8?
</span><br>
<p>You wouldn't expect it to be documented if so, of course :-(, but it it
<br>
doesn't look so.
<br>
<p><span class="quotelev1">&gt; It used to mean ranks, but now it appears to mean processing elements
</span><br>
<span class="quotelev1">&gt; (see Details, below).
</span><br>
<p>I'm fairly confused by this.  Bizarrely, it happens I was going to ask
<br>
whether anyone had a patch or workaround for the problem we see with
<br>
1.6.  [I notice there was a previous thread about mpi+openmp I didn't
<br>
catch at the time which looked pretty confused.  I suppose I should
<br>
follow it up for archives.]
<br>
<p><span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS Also, the man page for 1.8.3 reports that '--bysocket' is
</span><br>
<span class="quotelev1">&gt; deprecated, but it doesn't seem to exist when we try to use it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mpirun: Error: unknown option &quot;-bysocket&quot;
</span><br>
<span class="quotelev1">&gt;   Type 'mpirun --help' for usage.
</span><br>
<p>[Yes, per mpirun --help.]
<br>
<p><span class="quotelev1">&gt; ====== Details ======
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1.6.5, we launch with the following core binding options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mpirun --bind-to-core --cpus-per-proc &lt;n&gt; &lt;program&gt;
</span><br>
<p>That just doesn't work here on multiple nodes (and you forgot the
<br>
--np to override $NSLOTS).  It tries to over-allocate the first host.
<br>
The workaround is to use --loadbalance in this case, but it fails in the
<br>
normal case if you try to make it the default, sigh.  So the
<br>
recommendation for MPI+OpenMP jobs, until I fix it, is a script like
<br>
<p>&nbsp;&nbsp;#$ -l exclusive
<br>
&nbsp;&nbsp;export OMP_NUM_THREADS=2
<br>
&nbsp;&nbsp;exec mpirun --loadbalance --cpus-per-proc $OMP_NUM_THREADS --np $(($NSLOTS/$OMP_NUM_THREADS)) ...
<br>
<p>assuming OMP_NUM_THREADS divides cores/socket on the relevant nodes
<br>
sensibly, and eliding issues with per-rank OMP affinity.
<br>
<p><span class="quotelev1">&gt;   mpirun --bind-to-core --bysocket --cpus-per-proc &lt;n&gt; &lt;program&gt;
</span><br>
<p>Similarly in that case.  (I assume that trying to keep consecutive ranks
<br>
adjacent is a good default.)
<br>
<p><span class="quotelev1">&gt;   where &lt;n&gt; is calculated to maximise the number of cores available to
</span><br>
<span class="quotelev1">&gt;   use - I guess affectively
</span><br>
<span class="quotelev1">&gt;   max(1, int(number of cores per node / slots per node requested)).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   openmpi reads the file $PE_HOSTFILE and launches a rank for each slot
</span><br>
<span class="quotelev1">&gt;   defined in it, binding &lt;n&gt; cores per rank.
</span><br>
<p>That's why you need the --np, or is this with a fiddled host file?
<br>
<p><span class="quotelev1">&gt; On 1.8.3, we've tried launching with the following core binding
</span><br>
<span class="quotelev1">&gt; options (which we hoped were equivalent):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mpirun -map-by node:PE=&lt;n&gt; &lt;program&gt;
</span><br>
<span class="quotelev1">&gt;   mpirun -map-by socket:PE=&lt;n&gt; &lt;program&gt;
</span><br>
<p>With 1.8.3 here, replacing &quot;--loadbalance --cpus-per-proc&quot; with
<br>
&quot;--map-by slot:PE=2&quot; works.
<br>
<p>I assume you use --report-bindings to check what's going on (which gave
<br>
me the hint about --loadbalance).  I've never seen it lie about the
<br>
binding the processes actually get.
<br>
<p><span class="quotelev1">&gt;   openmpi reads the file $PE_HOSTFILE and launches a factor of &lt;n&gt; fewer
</span><br>
<span class="quotelev1">&gt;   ranks than under 1.6.5. We also notice that, where we wanted a single
</span><br>
<span class="quotelev1">&gt;   rank on the box and &lt;n&gt; is the number of cores available, openmpi
</span><br>
<span class="quotelev1">&gt;   refuses to launch and we get the message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   &quot;There are not enough slots available in the system to satisfy the 1
</span><br>
<span class="quotelev1">&gt;   slots that were requested by the application&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I think that error message needs a little work :)
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25662.php">Steven Eliuk: "[OMPI users] Randomly long (100ms vs 7000+ms) fulfillment of MPI_Ibcast"</a>
<li><strong>Previous message:</strong> <a href="25660.php">Ralph Castain: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>In reply to:</strong> <a href="25659.php">Mark Dixon: "[OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25665.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
<li><strong>Reply:</strong> <a href="25665.php">Dave Love: "Re: [OMPI users] change in behaviour 1.6 -&gt; 1.8 under sge"</a>
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
