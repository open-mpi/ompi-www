<?
$subject_val = "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 18 02:39:57 2014" -->
<!-- isoreceived="20141118073957" -->
<!-- sent="Tue, 18 Nov 2014 16:40:16 +0900" -->
<!-- isosent="20141118074016" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems" -->
<!-- id="546AF7E0.2000302_at_iferc.org" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6C2C24E8-4DF4-44FA-94BA-3B413A304C1B_at_bils.se" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-18 02:40:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16314.php">Marc Höppner: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Previous message:</strong> <a href="16312.php">Marc H&#195;&#182;ppner: "[OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>In reply to:</strong> <a href="16312.php">Marc H&#195;&#182;ppner: "[OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16314.php">Marc Höppner: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Reply:</strong> <a href="16314.php">Marc Höppner: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Marc,
<br>
<p>OpenLava is based on a pretty old version of LSF (4.x if i remember
<br>
correctly)
<br>
and i do not think LSF had support for parallel jobs tight integration
<br>
at that time.
<br>
<p>my understanding is that basically, there is two kind of direct
<br>
integration :
<br>
- mpirun launch: mpirun spawns orted via the API provided by the batch
<br>
manager
<br>
- direct launch: the mpi tasks are launched directly from the
<br>
script/command line and no mpirun/orted is involved
<br>
&nbsp;&nbsp;at that time, it works with SLURM and possibly other PMI capable batch
<br>
manager
<br>
<p>i think OpenLava simply gets a list of hosts from the environment, build
<br>
a machinefile, pass it to mpirun that spawns orted with ssh, so this is
<br>
really loose integration.
<br>
<p>OpenMPI is based on plugins, so as long as the queing system provides an
<br>
API to start/stop/kill tasks, mpirun launch should not
<br>
be a huge effort.
<br>
<p>Are you aware of such an API provided by OpenLava ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/11/18 16:31, Marc H&#195;&#182;ppner wrote:
<br>
<span class="quotelev1">&gt; Hi list,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have recently started to wonder how hard it would be to add support for queuing systems to the tight integration function of OpenMPI (unfortunately, I am not a developer myself). Specifically, we are working with OpenLava (www.openlava.org), which is based on an early version of Lava/LSF and open source. It&#226;&#128;&#153;s proven quite useful in environments where some level of LSF compatibility is needed, but without actually paying for a (rather pricey) LSF license. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given that openLava shares quite a bit of DNA with LSF, I was wondering how hard it would be to add OL tight integration support to OpenMPI. Currently, OL enables OpenMPI jobs through a wrapper script, but that&#226;&#128;&#153;s obviously not ideal and doesn&#226;&#128;&#153;t work for some programs that have MPI support built-in (and thus expect to be able to just execute mpirun). 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any thoughts on this would be greatly appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Marc P. Hoeppner, PhD
</span><br>
<span class="quotelev1">&gt; Team Leader
</span><br>
<span class="quotelev1">&gt; BILS Genome Annotation Platform
</span><br>
<span class="quotelev1">&gt; Department for Medical Biochemistry and Microbiology
</span><br>
<span class="quotelev1">&gt; Uppsala University, Sweden
</span><br>
<span class="quotelev1">&gt; marc.hoeppner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16312.php">http://www.open-mpi.org/community/lists/devel/2014/11/16312.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16314.php">Marc Höppner: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Previous message:</strong> <a href="16312.php">Marc H&#195;&#182;ppner: "[OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>In reply to:</strong> <a href="16312.php">Marc H&#195;&#182;ppner: "[OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16314.php">Marc Höppner: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Reply:</strong> <a href="16314.php">Marc Höppner: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
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
