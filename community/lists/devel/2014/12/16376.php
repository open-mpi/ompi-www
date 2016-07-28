<?
$subject_val = "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  1 03:47:28 2014" -->
<!-- isoreceived="20141201084728" -->
<!-- sent="Mon, 01 Dec 2014 09:47:22 +0100" -->
<!-- isosent="20141201084722" -->
<!-- name="marc.hoeppner_at_[hidden]" -->
<!-- email="marc.hoeppner_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems" -->
<!-- id="547C2A22.5080909_at_bils.se" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B8AD72BA-76B9-4909-B315-25458B54C26C_at_open-mpi.org" -->
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
<strong>From:</strong> <a href="mailto:marc.hoeppner_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Question%20about%20tight%20integration%20with%20not-yet-supported%20queuing%20systems"><em>marc.hoeppner_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-12-01 03:47:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16377.php">Gilles Gouaillardet: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16375.php">Kawashima, Takahiro: "Re: [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16373.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16377.php">Gilles Gouaillardet: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Reply:</strong> <a href="16377.php">Gilles Gouaillardet: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
<p>HI,
<br>
<p>&nbsp;sorry for the late reply - I've been traveling with limited email
<br>
access. I think you can leave this issue be. I think I was hoping for a
<br>
way to just launch mpirun and have it create the allocation by itself.
<br>
It's not super important right now, more something I was wondering
<br>
about. 
<br>
<p>&nbsp;Thanks again for looking into this!
<br>
<p>&nbsp;/Marc
<br>
<p>On 28.11.2014 17:10, Ralph Castain wrote: 
<br>
<p><span class="quotelev1">&gt; Hey Marc - just wanted to check to see if you felt this would indeed solve the problem for you. I'd rather not invest the time if this isn't going to meet the need, and I honestly don't know of a better solution. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 20, 2014, at 2:13 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's what I can provide: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * lsrun -n N bash This causes openlava to create an allocation and start you off in a bash shell (or pick your shell) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * mpirun ..... Will read the allocation and use openlava to start the daemons, and then the application, on the allocated nodes 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can execute as many mpirun's as you like, then release the allocation (I believe by simply exiting the shell) when done. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that match your expectations? 
</span><br>
<span class="quotelev1">&gt; Ralph 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 20, 2014, at 2:03 PM, Marc H&#195;&#182;ppner &lt;marc.hoeppner_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yes, lsrun exists under openlava. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using mpirun is fine, but openlava currently requires that to be launched through a bash script (openmpi-mpirun). Would be neater if one could do away with that. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Agan, thanks for looking into this!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /Marc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hold on - was discussing this with a (possibly former) OpenLava developer who made some suggestions that would make this work. It all hinges on one thing. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you please check and see if you have &quot;lsrun&quot; on your system? If you do, then I can offer a tight integration in that we would use OpenLava to actually launch the OMPI daemons. Still not sure I could support you directly launching MPI apps without using mpirun, if that's what you are after. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 18, 2014, at 7:58 AM, Marc H&#195;&#182;ppner &lt;marc.hoeppner_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I really appreciate you guys looking into this! At least now I know that there isn't a better way to run mpi jobs. Probably worth looking into LSF again..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Marc 
</span><br>
<span class="quotelev1">&gt; I took a brief gander at the OpenLava source code, and a couple of things jump out. First, OpenLava is a batch scheduler and only supports batch execution - there is no interactive command for &quot;run this job&quot;. So you would have to &quot;bsub&quot; mpirun regardless. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Once you submit the job, mpirun can certainly read the local allocation via the environment. However, we cannot use the OpenLava internal functions to launch the daemons or processes as the code is GPL2, and thus has a viral incompatible license. Ordinarily, we get around that by just executing the interactive job execution command, but OpenLava doesn't have one. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So we'd have no other choice but to use ssh to launch the daemons on the remote nodes. This is exactly what the provided openmpi wrapper script that comes with OpenLava already does. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bottom line: I don't see a way to do any deeper integration minus the interactive execution command. If OpenLava had a way of getting an allocation and then interactively running jobs, we could support what you requested. This doesn't seem to be what they are intending, unless I'm missing something (the documentation is rather incomplete). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Nov 18, 2014 at 6:20 AM, Marc H&#195;&#182;ppner &lt;marc.hoeppner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sure, no problem. And about the C Api, I really don't know more than what I was told in the google group post I referred to (i.e. the API is essentially identical to LSF 4-6, which should be on the web). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output of env can be found here: <a href="https://dl.dropboxusercontent.com/u/1918141/env.txt">https://dl.dropboxusercontent.com/u/1918141/env.txt</a> [6] 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /M 
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
<span class="quotelev1">&gt; On 18 Nov 2014, at 15:14, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you could just run a single copy of &quot;env&quot; and send the output along, that would help a lot. I'm not interested in the usual path etc, but would like to see the envars that OpenLava is setting. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks 
</span><br>
<span class="quotelev1">&gt; Ralph 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Nov 18, 2014 at 2:19 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Marc,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the reply you pointed is a bit confusing to me :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;There is a native C API which can submit/start/stop/kill/re queue jobs&quot;
</span><br>
<span class="quotelev1">&gt; this is not what i am looking for :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;you need to make an appropriate call to openlava to start a remote process&quot;
</span><br>
<span class="quotelev1">&gt; this is what i am interested in :-)
</span><br>
<span class="quotelev1">&gt; could you be more specific (e.g. point me to the functions, since the OpenLava doc is pretty minimal ...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the goal here is to spawn the orted daemons as part of the parallel job,
</span><br>
<span class="quotelev1">&gt; so these daemons are accounted within the parallel job.
</span><br>
<span class="quotelev1">&gt; /* if we use an API that simply spawns orted, but the orted is not related whatsoever to the parallel job,
</span><br>
<span class="quotelev1">&gt; then we can simply use ssh */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/11/18 18:24, Marc H&#195;&#182;ppner wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Gilles, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks for the prompt reply. Yes, as far as I know there is a C API to interact with jobs etc. Some mentioning here: <a href="https://groups.google.com/forum/#!topic/openlava-users/w74cRUe9Y9E">https://groups.google.com/forum/#!topic/openlava-users/w74cRUe9Y9E</a> [1] &lt;<a href="https://groups.google.com/forum/#!topic/openlava-users/w74cRUe9Y9E">https://groups.google.com/forum/#!topic/openlava-users/w74cRUe9Y9E</a>&gt; [1]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /Marc Marc P. Hoeppner, PhD Team Leader BILS Genome Annotation Platform Department for Medical Biochemistry and Microbiology Uppsala University, Sweden marc.hoeppner_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 18 Nov 2014, at 08:40, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Marc,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenLava is based on a pretty old version of LSF (4.x if i remember
</span><br>
<span class="quotelev1">&gt; correctly)
</span><br>
<span class="quotelev1">&gt; and i do not think LSF had support for parallel jobs tight integration
</span><br>
<span class="quotelev1">&gt; at that time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my understanding is that basically, there is two kind of direct
</span><br>
<span class="quotelev1">&gt; integration :
</span><br>
<span class="quotelev1">&gt; - mpirun launch: mpirun spawns orted via the API provided by the batch
</span><br>
<span class="quotelev1">&gt; manager
</span><br>
<span class="quotelev1">&gt; - direct launch: the mpi tasks are launched directly from the
</span><br>
<span class="quotelev1">&gt; script/command line and no mpirun/orted is involved
</span><br>
<span class="quotelev1">&gt; at that time, it works with SLURM and possibly other PMI capable batch
</span><br>
<span class="quotelev1">&gt; manager
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i think OpenLava simply gets a list of hosts from the environment, build
</span><br>
<span class="quotelev1">&gt; a machinefile, pass it to mpirun that spawns orted with ssh, so this is
</span><br>
<span class="quotelev1">&gt; really loose integration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI is based on plugins, so as long as the queing system provides an
</span><br>
<span class="quotelev1">&gt; API to start/stop/kill tasks, mpirun launch should not
</span><br>
<span class="quotelev1">&gt; be a huge effort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you aware of such an API provided by OpenLava ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/11/18 16:31, Marc H&#195;&#182;ppner wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have recently started to wonder how hard it would be to add support for queuing systems to the tight integration function of OpenMPI (unfortunately, I am not a developer myself). Specifically, we are working with OpenLava (www.openlava.org [2]), which is based on an early version of Lava/LSF and open source. It's proven quite useful in environments where some level of LSF compatibility is needed, but without actually paying for a (rather pricey) LSF license. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given that openLava shares quite a bit of DNA with LSF, I was wondering how hard it would be to add OL tight integration support to OpenMPI. Currently, OL enables OpenMPI jobs through a wrapper script, but that's obviously not ideal and doesn't work for some programs that have MPI support built-in (and thus expect to be able to just execute mpirun). 
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> [3]
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16312.php">http://www.open-mpi.org/community/lists/devel/2014/11/16312.php</a> [4]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> [3]
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16313.php">http://www.open-mpi.org/community/lists/devel/2014/11/16313.php</a> [5]
</span><br>
<p>_______________________________________________ devel mailing list
<br>
devel_at_[hidden] Subscription:
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> [3] 
<br>
<p>Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16314.php">http://www.open-mpi.org/community/lists/devel/2014/11/16314.php</a> [7]
<br>
<p>&nbsp;_______________________________________________
<br>
&nbsp;devel mailing list
<br>
devel_at_[hidden]
<br>
&nbsp;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> [3]
<br>
&nbsp;Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16315.php">http://www.open-mpi.org/community/lists/devel/2014/11/16315.php</a> [11]
<br>
_______________________________________________
<br>
&nbsp;devel mailing list
<br>
devel_at_[hidden]
<br>
&nbsp;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> [3]
<br>
Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16316.php">http://www.open-mpi.org/community/lists/devel/2014/11/16316.php</a> [12] 
<br>
&nbsp;_______________________________________________
<br>
&nbsp;devel mailing list
<br>
devel_at_[hidden]
<br>
&nbsp;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> [3]
<br>
&nbsp;Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16317.php">http://www.open-mpi.org/community/lists/devel/2014/11/16317.php</a> [13] 
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> [3]
<br>
Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16318.php">http://www.open-mpi.org/community/lists/devel/2014/11/16318.php</a> [8]
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> [3]
<br>
Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16319.php">http://www.open-mpi.org/community/lists/devel/2014/11/16319.php</a> [14] 
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> [3]
<br>
Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16326.php">http://www.open-mpi.org/community/lists/devel/2014/11/16326.php</a> [9]
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> [3]
<br>
Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16327.php">http://www.open-mpi.org/community/lists/devel/2014/11/16327.php</a> [15] 
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> [3]
<br>
Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16373.php">http://www.open-mpi.org/community/lists/devel/2014/11/16373.php</a> [10]
<br>
<p>&nbsp;
<br>
<p>Links:
<br>
------
<br>
[1] <a href="https://groups.google.com/forum/#%21topic/openlava-users/w74cRUe9Y9E">https://groups.google.com/forum/#%21topic/openlava-users/w74cRUe9Y9E</a>
<br>
[2] <a href="http://www.openlava.org/">http://www.openlava.org/</a>
<br>
[3] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
[4] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16312.php">http://www.open-mpi.org/community/lists/devel/2014/11/16312.php</a>
<br>
[5] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16313.php">http://www.open-mpi.org/community/lists/devel/2014/11/16313.php</a>
<br>
[6] <a href="https://dl.dropboxusercontent.com/u/1918141/env.txt">https://dl.dropboxusercontent.com/u/1918141/env.txt</a>
<br>
[7] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16314.php">http://www.open-mpi.org/community/lists/devel/2014/11/16314.php</a>
<br>
[8] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16318.php">http://www.open-mpi.org/community/lists/devel/2014/11/16318.php</a>
<br>
[9] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16326.php">http://www.open-mpi.org/community/lists/devel/2014/11/16326.php</a>
<br>
[10] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16373.php">http://www.open-mpi.org/community/lists/devel/2014/11/16373.php</a>
<br>
[11] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16315.php">http://www.open-mpi.org/community/lists/devel/2014/11/16315.php</a>
<br>
[12] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16316.php">http://www.open-mpi.org/community/lists/devel/2014/11/16316.php</a>
<br>
[13] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16317.php">http://www.open-mpi.org/community/lists/devel/2014/11/16317.php</a>
<br>
[14] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16319.php">http://www.open-mpi.org/community/lists/devel/2014/11/16319.php</a>
<br>
[15] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16327.php">http://www.open-mpi.org/community/lists/devel/2014/11/16327.php</a>
<br>
<p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16376/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16377.php">Gilles Gouaillardet: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16375.php">Kawashima, Takahiro: "Re: [OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16373.php">Ralph Castain: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16377.php">Gilles Gouaillardet: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>Reply:</strong> <a href="16377.php">Gilles Gouaillardet: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
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
