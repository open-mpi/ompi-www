<?
$subject_val = "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 18 05:19:44 2014" -->
<!-- isoreceived="20141118101944" -->
<!-- sent="Tue, 18 Nov 2014 19:19:56 +0900" -->
<!-- isosent="20141118101956" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems" -->
<!-- id="546B1D4C.2050308_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="02A8C18C-C431-4107-B28E-3945CF74E2A1_at_bils.se" -->
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
<strong>Date:</strong> 2014-11-18 05:19:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16316.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Previous message:</strong> <a href="16314.php">Marc H&#195;&#182;ppner: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>In reply to:</strong> <a href="16314.php">Marc H&#195;&#182;ppner: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16316.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Reply:</strong> <a href="16316.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Marc,
<br>
<p>the reply you pointed is a bit confusing to me :
<br>
<p>&quot;There is a native C API which can submit/start/stop/kill/re queue jobs&quot;
<br>
this is not what i am looking for :-(
<br>
<p>&quot;you need to make an appropriate call to openlava to start a remote process&quot;
<br>
this is what i am interested in :-)
<br>
could you be more specific (e.g. point me to the functions, since the
<br>
OpenLava doc is pretty minimal ...)
<br>
<p>the goal here is to spawn the orted daemons as part of the parallel job,
<br>
so these daemons are accounted within the parallel job.
<br>
/* if we use an API that simply spawns orted, but the orted is not
<br>
related whatsoever to the parallel job,
<br>
then we can simply use ssh */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 2014/11/18 18:24, Marc H&#246;ppner wrote:
<br>
<span class="quotelev1">&gt; Hi Gilles, 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for the prompt reply. Yes, as far as I know there is a C API to interact with jobs etc. Some mentioning here: <a href="https://groups.google.com/forum/#!topic/openlava-users/w74cRUe9Y9E">https://groups.google.com/forum/#!topic/openlava-users/w74cRUe9Y9E</a> &lt;<a href="https://groups.google.com/forum/#!topic/openlava-users/w74cRUe9Y9E">https://groups.google.com/forum/#!topic/openlava-users/w74cRUe9Y9E</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /Marc
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
<span class="quotelev2">&gt;&gt; On 18 Nov 2014, at 08:40, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Marc,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenLava is based on a pretty old version of LSF (4.x if i remember
</span><br>
<span class="quotelev2">&gt;&gt; correctly)
</span><br>
<span class="quotelev2">&gt;&gt; and i do not think LSF had support for parallel jobs tight integration
</span><br>
<span class="quotelev2">&gt;&gt; at that time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; my understanding is that basically, there is two kind of direct
</span><br>
<span class="quotelev2">&gt;&gt; integration :
</span><br>
<span class="quotelev2">&gt;&gt; - mpirun launch: mpirun spawns orted via the API provided by the batch
</span><br>
<span class="quotelev2">&gt;&gt; manager
</span><br>
<span class="quotelev2">&gt;&gt; - direct launch: the mpi tasks are launched directly from the
</span><br>
<span class="quotelev2">&gt;&gt; script/command line and no mpirun/orted is involved
</span><br>
<span class="quotelev2">&gt;&gt;  at that time, it works with SLURM and possibly other PMI capable batch
</span><br>
<span class="quotelev2">&gt;&gt; manager
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i think OpenLava simply gets a list of hosts from the environment, build
</span><br>
<span class="quotelev2">&gt;&gt; a machinefile, pass it to mpirun that spawns orted with ssh, so this is
</span><br>
<span class="quotelev2">&gt;&gt; really loose integration.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI is based on plugins, so as long as the queing system provides an
</span><br>
<span class="quotelev2">&gt;&gt; API to start/stop/kill tasks, mpirun launch should not
</span><br>
<span class="quotelev2">&gt;&gt; be a huge effort.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you aware of such an API provided by OpenLava ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2014/11/18 16:31, Marc H&#246;ppner wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi list,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have recently started to wonder how hard it would be to add support for queuing systems to the tight integration function of OpenMPI (unfortunately, I am not a developer myself). Specifically, we are working with OpenLava (www.openlava.org), which is based on an early version of Lava/LSF and open source. It's proven quite useful in environments where some level of LSF compatibility is needed, but without actually paying for a (rather pricey) LSF license. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Given that openLava shares quite a bit of DNA with LSF, I was wondering how hard it would be to add OL tight integration support to OpenMPI. Currently, OL enables OpenMPI jobs through a wrapper script, but that's obviously not ideal and doesn't work for some programs that have MPI support built-in (and thus expect to be able to just execute mpirun). 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any thoughts on this would be greatly appreciated!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Marc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Marc P. Hoeppner, PhD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Team Leader
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BILS Genome Annotation Platform
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department for Medical Biochemistry and Microbiology
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Uppsala University, Sweden
</span><br>
<span class="quotelev3">&gt;&gt;&gt; marc.hoeppner_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16312.php">http://www.open-mpi.org/community/lists/devel/2014/11/16312.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16313.php">http://www.open-mpi.org/community/lists/devel/2014/11/16313.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16314.php">http://www.open-mpi.org/community/lists/devel/2014/11/16314.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16315/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16316.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Previous message:</strong> <a href="16314.php">Marc H&#195;&#182;ppner: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>In reply to:</strong> <a href="16314.php">Marc H&#195;&#182;ppner: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16316.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Reply:</strong> <a href="16316.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
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
