<?
$subject_val = "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  1 04:31:42 2014" -->
<!-- isoreceived="20141201093142" -->
<!-- sent="Mon, 01 Dec 2014 18:31:43 +0900" -->
<!-- isosent="20141201093143" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems" -->
<!-- id="547C357F.2080402_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="547C2A22.5080909_at_bils.se" -->
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
<strong>Date:</strong> 2014-12-01 04:31:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16378.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Previous message:</strong> <a href="16376.php">marc.hoeppner_at_[hidden]: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>In reply to:</strong> <a href="16376.php">marc.hoeppner_at_[hidden]: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Marc,
<br>
<p>i am not aware of any mpi implementation in which mpirun does the job
<br>
allocation.
<br>
<p>instead, mpirun gets job info from the batch manager (e.g. number of nodes)
<br>
so the job can be launched seamlessly and be properly killed in case of
<br>
a job abort
<br>
(bkill or equivalent)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/12/01 17:47, marc.hoeppner_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  sorry for the late reply - I've been traveling with limited email
</span><br>
<span class="quotelev1">&gt; access. I think you can leave this issue be. I think I was hoping for a
</span><br>
<span class="quotelev1">&gt; way to just launch mpirun and have it create the allocation by itself.
</span><br>
<span class="quotelev1">&gt; It's not super important right now, more something I was wondering
</span><br>
<span class="quotelev1">&gt; about. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks again for looking into this!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /Marc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 28.11.2014 17:10, Ralph Castain wrote: 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hey Marc - just wanted to check to see if you felt this would indeed solve the problem for you. I'd rather not invest the time if this isn't going to meet the need, and I honestly don't know of a better solution. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 20, 2014, at 2:13 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's what I can provide: 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * lsrun -n N bash This causes openlava to create an allocation and start you off in a bash shell (or pick your shell) 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * mpirun ..... Will read the allocation and use openlava to start the daemons, and then the application, on the allocated nodes 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can execute as many mpirun's as you like, then release the allocation (I believe by simply exiting the shell) when done. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does that match your expectations? 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 20, 2014, at 2:03 PM, Marc H&#246;ppner &lt;marc.hoeppner_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; yes, lsrun exists under openlava. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using mpirun is fine, but openlava currently requires that to be launched through a bash script (openmpi-mpirun). Would be neater if one could do away with that. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Agan, thanks for looking into this!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /Marc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hold on - was discussing this with a (possibly former) OpenLava developer who made some suggestions that would make this work. It all hinges on one thing. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you please check and see if you have &quot;lsrun&quot; on your system? If you do, then I can offer a tight integration in that we would use OpenLava to actually launch the OMPI daemons. Still not sure I could support you directly launching MPI apps without using mpirun, if that's what you are after. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 18, 2014, at 7:58 AM, Marc H&#246;ppner &lt;marc.hoeppner_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I really appreciate you guys looking into this! At least now I know that there isn't a better way to run mpi jobs. Probably worth looking into LSF again..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Marc 
</span><br>
<span class="quotelev2">&gt;&gt; I took a brief gander at the OpenLava source code, and a couple of things jump out. First, OpenLava is a batch scheduler and only supports batch execution - there is no interactive command for &quot;run this job&quot;. So you would have to &quot;bsub&quot; mpirun regardless. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Once you submit the job, mpirun can certainly read the local allocation via the environment. However, we cannot use the OpenLava internal functions to launch the daemons or processes as the code is GPL2, and thus has a viral incompatible license. Ordinarily, we get around that by just executing the interactive job execution command, but OpenLava doesn't have one. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So we'd have no other choice but to use ssh to launch the daemons on the remote nodes. This is exactly what the provided openmpi wrapper script that comes with OpenLava already does. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bottom line: I don't see a way to do any deeper integration minus the interactive execution command. If OpenLava had a way of getting an allocation and then interactively running jobs, we could support what you requested. This doesn't seem to be what they are intending, unless I'm missing something (the documentation is rather incomplete). 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Nov 18, 2014 at 6:20 AM, Marc H&#246;ppner &lt;marc.hoeppner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi, 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sure, no problem. And about the C Api, I really don't know more than what I was told in the google group post I referred to (i.e. the API is essentially identical to LSF 4-6, which should be on the web). 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The output of env can be found here: <a href="https://dl.dropboxusercontent.com/u/1918141/env.txt">https://dl.dropboxusercontent.com/u/1918141/env.txt</a> [6] 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /M 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Marc P. Hoeppner, PhD 
</span><br>
<span class="quotelev2">&gt;&gt; Team Leader 
</span><br>
<span class="quotelev2">&gt;&gt; BILS Genome Annotation Platform 
</span><br>
<span class="quotelev2">&gt;&gt; Department for Medical Biochemistry and Microbiology 
</span><br>
<span class="quotelev2">&gt;&gt; Uppsala University, Sweden 
</span><br>
<span class="quotelev2">&gt;&gt; marc.hoeppner_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 18 Nov 2014, at 15:14, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote: 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you could just run a single copy of &quot;env&quot; and send the output along, that would help a lot. I'm not interested in the usual path etc, but would like to see the envars that OpenLava is setting. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Nov 18, 2014 at 2:19 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Marc,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the reply you pointed is a bit confusing to me :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;There is a native C API which can submit/start/stop/kill/re queue jobs&quot;
</span><br>
<span class="quotelev2">&gt;&gt; this is not what i am looking for :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;you need to make an appropriate call to openlava to start a remote process&quot;
</span><br>
<span class="quotelev2">&gt;&gt; this is what i am interested in :-)
</span><br>
<span class="quotelev2">&gt;&gt; could you be more specific (e.g. point me to the functions, since the OpenLava doc is pretty minimal ...)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the goal here is to spawn the orted daemons as part of the parallel job,
</span><br>
<span class="quotelev2">&gt;&gt; so these daemons are accounted within the parallel job.
</span><br>
<span class="quotelev2">&gt;&gt; /* if we use an API that simply spawns orted, but the orted is not related whatsoever to the parallel job,
</span><br>
<span class="quotelev2">&gt;&gt; then we can simply use ssh */
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
<span class="quotelev2">&gt;&gt; On 2014/11/18 18:24, Marc H&#246;ppner wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gilles, 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks for the prompt reply. Yes, as far as I know there is a C API to interact with jobs etc. Some mentioning here: <a href="https://groups.google.com/forum/#!topic/openlava-users/w74cRUe9Y9E">https://groups.google.com/forum/#!topic/openlava-users/w74cRUe9Y9E</a> [1] &lt;<a href="https://groups.google.com/forum/#!topic/openlava-users/w74cRUe9Y9E">https://groups.google.com/forum/#!topic/openlava-users/w74cRUe9Y9E</a>&gt; [1]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /Marc Marc P. Hoeppner, PhD Team Leader BILS Genome Annotation Platform Department for Medical Biochemistry and Microbiology Uppsala University, Sweden marc.hoeppner_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; at that time, it works with SLURM and possibly other PMI capable batch
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi list,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have recently started to wonder how hard it would be to add support for queuing systems to the tight integration function of OpenMPI (unfortunately, I am not a developer myself). Specifically, we are working with OpenLava (www.openlava.org [2]), which is based on an early version of Lava/LSF and open source. It's proven quite useful in environments where some level of LSF compatibility is needed, but without actually paying for a (rather pricey) LSF license. 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Given that openLava shares quite a bit of DNA with LSF, I was wondering how hard it would be to add OL tight integration support to OpenMPI. Currently, OL enables OpenMPI jobs through a wrapper script, but that's obviously not ideal and doesn't work for some programs that have MPI support built-in (and thus expect to be able to just execute mpirun). 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any thoughts on this would be greatly appreciated!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Marc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Marc P. Hoeppner, PhD
</span><br>
<span class="quotelev2">&gt;&gt; Team Leader
</span><br>
<span class="quotelev2">&gt;&gt; BILS Genome Annotation Platform
</span><br>
<span class="quotelev2">&gt;&gt; Department for Medical Biochemistry and Microbiology
</span><br>
<span class="quotelev2">&gt;&gt; Uppsala University, Sweden
</span><br>
<span class="quotelev2">&gt;&gt; marc.hoeppner_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> [3]
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16312.php">http://www.open-mpi.org/community/lists/devel/2014/11/16312.php</a> [4]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> [3]
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16313.php">http://www.open-mpi.org/community/lists/devel/2014/11/16313.php</a> [5]
</span><br>
<span class="quotelev1">&gt; _______________________________________________ devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] Subscription:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> [3] 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16314.php">http://www.open-mpi.org/community/lists/devel/2014/11/16314.php</a> [7]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> [3]
</span><br>
<span class="quotelev1">&gt;  Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16315.php">http://www.open-mpi.org/community/lists/devel/2014/11/16315.php</a> [11]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;  devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> [3]
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16316.php">http://www.open-mpi.org/community/lists/devel/2014/11/16316.php</a> [12] 
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> [3]
</span><br>
<span class="quotelev1">&gt;  Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16317.php">http://www.open-mpi.org/community/lists/devel/2014/11/16317.php</a> [13] 
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16318.php">http://www.open-mpi.org/community/lists/devel/2014/11/16318.php</a> [8]
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16319.php">http://www.open-mpi.org/community/lists/devel/2014/11/16319.php</a> [14] 
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16326.php">http://www.open-mpi.org/community/lists/devel/2014/11/16326.php</a> [9]
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16327.php">http://www.open-mpi.org/community/lists/devel/2014/11/16327.php</a> [15] 
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16373.php">http://www.open-mpi.org/community/lists/devel/2014/11/16373.php</a> [10]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Links:
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; [1] <a href="https://groups.google.com/forum/#%21topic/openlava-users/w74cRUe9Y9E">https://groups.google.com/forum/#%21topic/openlava-users/w74cRUe9Y9E</a>
</span><br>
<span class="quotelev1">&gt; [2] <a href="http://www.openlava.org/">http://www.openlava.org/</a>
</span><br>
<span class="quotelev1">&gt; [3] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; [4] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16312.php">http://www.open-mpi.org/community/lists/devel/2014/11/16312.php</a>
</span><br>
<span class="quotelev1">&gt; [5] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16313.php">http://www.open-mpi.org/community/lists/devel/2014/11/16313.php</a>
</span><br>
<span class="quotelev1">&gt; [6] <a href="https://dl.dropboxusercontent.com/u/1918141/env.txt">https://dl.dropboxusercontent.com/u/1918141/env.txt</a>
</span><br>
<span class="quotelev1">&gt; [7] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16314.php">http://www.open-mpi.org/community/lists/devel/2014/11/16314.php</a>
</span><br>
<span class="quotelev1">&gt; [8] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16318.php">http://www.open-mpi.org/community/lists/devel/2014/11/16318.php</a>
</span><br>
<span class="quotelev1">&gt; [9] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16326.php">http://www.open-mpi.org/community/lists/devel/2014/11/16326.php</a>
</span><br>
<span class="quotelev1">&gt; [10] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16373.php">http://www.open-mpi.org/community/lists/devel/2014/11/16373.php</a>
</span><br>
<span class="quotelev1">&gt; [11] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16315.php">http://www.open-mpi.org/community/lists/devel/2014/11/16315.php</a>
</span><br>
<span class="quotelev1">&gt; [12] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16316.php">http://www.open-mpi.org/community/lists/devel/2014/11/16316.php</a>
</span><br>
<span class="quotelev1">&gt; [13] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16317.php">http://www.open-mpi.org/community/lists/devel/2014/11/16317.php</a>
</span><br>
<span class="quotelev1">&gt; [14] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16319.php">http://www.open-mpi.org/community/lists/devel/2014/11/16319.php</a>
</span><br>
<span class="quotelev1">&gt; [15] <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16327.php">http://www.open-mpi.org/community/lists/devel/2014/11/16327.php</a>
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
<span class="quotelev1">&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/index.php">http://www.open-mpi.org/community/lists/devel/2014/12/index.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16377/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16378.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI 1.8: link problem when Fortran+C+Platform LSF"</a>
<li><strong>Previous message:</strong> <a href="16376.php">marc.hoeppner_at_[hidden]: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
<li><strong>In reply to:</strong> <a href="16376.php">marc.hoeppner_at_[hidden]: "Re: [OMPI devel] Question about tight integration with not-yet-supported queuing systems"</a>
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
