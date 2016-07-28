<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 15 09:21:49 2010" -->
<!-- isoreceived="20101115142149" -->
<!-- sent="Mon, 15 Nov 2010 07:21:43 -0700" -->
<!-- isosent="20101115142143" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="AANLkTi=97mY=Y3c7=X9rv6dQwbp9QWYBUWHMwzawYC4X_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44D0B567-EFFB-48F1-B0C3-D1CC21B8F1A5_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-15 09:21:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14760.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14758.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14758.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14760.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I confess I am now confused. What version of OMPI are you using?
<br>
<p>FWIW: OMPI was updated at some point to detect the actual cores of an
<br>
external binding, and abide by them. If we aren't doing that, then we have a
<br>
bug that needs to be resolved. Or it could be you are using a version that
<br>
predates the change.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Mon, Nov 15, 2010 at 5:38 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 15.11.2010 um 13:13 schrieb Chris Jewell:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Okay so I tried what you suggested.  You essentially get the requested
</span><br>
<span class="quotelev1">&gt; number of bound cores on each execution node, so if I use
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ qsub -pe openmpi 8 -binding linear:2 &lt;myscript.com&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; then I get 2 bound cores per node, irrespective of the number of slots
</span><br>
<span class="quotelev1">&gt; (and hence parallel) processes allocated by GE.  This is irrespective of
</span><br>
<span class="quotelev1">&gt; which setting I use for the allocation_rule.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but it should work fine with an &quot;allocation_rule 2&quot; then.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; My aim with this was to deal with badly behaved multithreaded algorithms
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yep, this causes sometimes the overloading of a machine. When I know that I
</span><br>
<span class="quotelev1">&gt; want to compile a parallel Open MPI application, I use non-threaded versions
</span><br>
<span class="quotelev1">&gt; of ATLAS, MKL or other libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; which end up spreading across more cores on an execution node than the
</span><br>
<span class="quotelev1">&gt; number of GE-allocated slots (thereby interfering with other GE scheduled
</span><br>
<span class="quotelev1">&gt; tasks running on the same exec node).  By binding a process to one or more
</span><br>
<span class="quotelev1">&gt; cores, one can &quot;box in&quot; processes and prevent them from spawning erroneous
</span><br>
<span class="quotelev1">&gt; sub-processes and threads.  Unfortunately, the above solution sets the same
</span><br>
<span class="quotelev1">&gt; core binding for each execution node to be the same.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From exploring the software (both OpenMPI and GE) further, I have two
</span><br>
<span class="quotelev1">&gt; comments:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) The core binding feature in GE appears to apply the requested
</span><br>
<span class="quotelev1">&gt; core-binding topology to every execution node involved in a parallel job,
</span><br>
<span class="quotelev1">&gt; rather than assuming that the topology requested is *per parallel process*.
</span><br>
<span class="quotelev1">&gt;  So, if I request 'qsub -pe mpi 8 -binding linear:1 &lt;myscript.com&gt;' with
</span><br>
<span class="quotelev1">&gt; the intention of getting each of the 8 parallel processes to be bound to 1
</span><br>
<span class="quotelev1">&gt; core, I actually get all processes associated with the job_id on one exec
</span><br>
<span class="quotelev1">&gt; node bound to 1 core.  Oops!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2) OpenMPI has its own core-binding feature (-mca mpi_paffinity_alone 1)
</span><br>
<span class="quotelev1">&gt; which works well to bind each parallel process to one processor.
</span><br>
<span class="quotelev1">&gt;  Unfortunately, the binding framework (hwloc) is different to that which GE
</span><br>
<span class="quotelev1">&gt; uses (PLPA), resulting in binding overlaps between GE-bound tasks (eg serial
</span><br>
<span class="quotelev1">&gt; and smp jobs) and OpenMPI-bound processes (ie my mpi jobs).  Again, oops ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; If, indeed, it is not possible currently to implement this type of
</span><br>
<span class="quotelev1">&gt; core-binding in tightly integrated OpenMPI/GE, then a solution might lie in
</span><br>
<span class="quotelev1">&gt; a custom script run in the parallel environment's 'start proc args'.  This
</span><br>
<span class="quotelev1">&gt; script would have to find out which slots are allocated where on the
</span><br>
<span class="quotelev1">&gt; cluster, and write an OpenMPI rankfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Exactly this should work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you use &quot;binding_instance&quot; &quot;pe&quot; and reformat the information in the
</span><br>
<span class="quotelev1">&gt; $PE_HOSTFILE to a &quot;rankfile&quot;, it should work to get the desired allocation.
</span><br>
<span class="quotelev1">&gt; Maybe you can share the script with this list once you got it working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14759/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14760.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14758.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14758.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14760.php">Chris Jewell: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
