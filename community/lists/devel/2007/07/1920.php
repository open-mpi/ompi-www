<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 17 23:01:34 2007" -->
<!-- isoreceived="20070718030134" -->
<!-- sent="Tue, 17 Jul 2007 23:01:29 -0400" -->
<!-- isosent="20070718030129" -->
<!-- name="Bill McMillan" -->
<!-- email="bmcmillan_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: lsf support / farm use models" -->
<!-- id="FC9F574257AC4C46A53166FB4A9CFCCD0298B838_at_catoexm05.noam.corp.platform.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] Fwd: lsf support / farm use models" -->
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
<strong>From:</strong> Bill McMillan (<em>bmcmillan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-17 23:01:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1921.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15474"</a>
<li><strong>Previous message:</strong> <a href="1919.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15474"</a>
<li><strong>Maybe in reply to:</strong> <a href="1900.php">Matthew Moskewicz: "[OMPI devel] Fwd: lsf support / farm use models"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1936.php">Matthew Moskewicz: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Reply:</strong> <a href="1936.php">Matthew Moskewicz: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; there appear to be some overlaps between the ls_* and lsb_* functions,
</span><br>
<p><span class="quotelev1">&gt; but they seem basically compatible as far as i can tell. almost all 
</span><br>
<span class="quotelev1">&gt; the functions have a command line version as well, for example: 
</span><br>
<span class="quotelev1">&gt; lsb_submit()/bsub 
</span><br>
<p>&nbsp;&nbsp;Like openmpi and orte, there are two layers in LSF.  The ls_* API's
<br>
&nbsp;&nbsp;talk to what is/was historically called &quot;LSF Base&quot; and the lsb_* API's
<br>
&nbsp;&nbsp;talk to what is/was historically called &quot;LSF Batch&quot;.
<br>
<p>&nbsp;&nbsp;The ls_* API's are essentially &quot;do it now&quot; type functionality for
<br>
&nbsp;&nbsp;writing distributed applications that do not require batch
<br>
functionality.
<br>
&nbsp;&nbsp;The ls_* functions do not honour any batch allocation or policy in
<br>
&nbsp;&nbsp;any shapre 
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; lsb_getalloc()/none and lsb_launch()/blaunch are new with LSF 7.0, but
</span><br>
<p><span class="quotelev1">&gt; appear to just be a different (simpler) interface to existing 
</span><br>
<span class="quotelev1">&gt; functionality in the LSB_* env vars and the ls_rexec()/lsgrun commands
</span><br>
<p><span class="quotelev1">&gt; -- although, as you say, perhaps platform will hook or enhance them 
</span><br>
<span class="quotelev1">&gt; later. but, the key issue is that lsb_launch() just starts tasks -- it
</span><br>
<p><span class="quotelev1">&gt; does not perform or interact with the queue or job control (much?). 
</span><br>
<span class="quotelev1">&gt; so, you can't use these functions to get an allocation in the first 
</span><br>
<span class="quotelev1">&gt; place, and you have to be careful not to use them as a way around the 
</span><br>
<span class="quotelev1">&gt; queuing system. 
</span><br>
<p>&nbsp;&nbsp;ls_* api's do not honour a batch allocation, while lsb_launch does.
<br>
&nbsp;&nbsp;lsb_launch will only allow you to start tasks on nodes allocated to
<br>
&nbsp;&nbsp;your jobs, and is subject to all the queue/job controls.
<br>
<p>&nbsp;&nbsp;ls_rexec/lsgrun are not used to start batch jobs
<br>
<p>&nbsp;&nbsp;In pre-7.0, the method for starting openmpi is essentially:
<br>
<p>&nbsp;&nbsp;$bsub -n N -a openmpi mpirun.lsf a.out
<br>
<p>&nbsp;&nbsp;Note that you only have the openmpi method and mpirun.lsf if you have
<br>
&nbsp;&nbsp;installed the hpc extensions.
<br>
<p><span class="quotelev1">&gt; [ as a side note, the function ls_rexecv()/lsgrun is the one i have 
</span><br>
<span class="quotelev1">&gt; heard admins do not like because it can break queuing/accounting, and 
</span><br>
<span class="quotelev1">&gt; might try to disable somehow. i don't really buy that, because it's 
</span><br>
<span class="quotelev1">&gt; not you can disable it and have the system still work, since (as 
</span><br>
<span class="quotelev1">&gt; above) || job launching depends on it. i guess if you really don't 
</span><br>
<span class="quotelev1">&gt; care about || launching maybe you could. but, if used properly after a
</span><br>
<p><span class="quotelev1">&gt; proper allocation i don't think there should (or even can) be a 
</span><br>
<span class="quotelev1">&gt; problem. ] 
</span><br>
<p>&nbsp;&nbsp;Job launching does not depend on it; and admins can explicitly
<br>
&nbsp;&nbsp;turn off support for ls_rexec/lsgrun while allowing lsb_launch to 
<br>
&nbsp;&nbsp;continue to function -- thus ensuring that tasks of any form can only
<br>
&nbsp;&nbsp;be started on nodes allocated to the job.
<br>
<p><span class="quotelev1">&gt; so, lsb_submit()/bsub is a combination allocate/launch -- you specify 
</span><br>
<span class="quotelev1">&gt; the allocation size you want, and when it's all ready, it runs the 
</span><br>
<span class="quotelev1">&gt; 'job' (really the job launcher) only on one (randomly chosen) 'head' 
</span><br>
<span class="quotelev1">&gt; node from the allocation, with the env vars set so the launcher can 
</span><br>
<span class="quotelev1">&gt; use ls_rexec/lsgrun functions to start the rest of the job. there are 
</span><br>
<span class="quotelev1">&gt; of course various script wrappers you can use (mpijob, pvmjob, etc) 
</span><br>
<span class="quotelev1">&gt; instead of your 'real job'. then, i think lsf *should* try to track 
</span><br>
<span class="quotelev1">&gt; what processes get started via the wrapper / head process so it knows 
</span><br>
<span class="quotelev1">&gt; they are part of the same job. i dunno if it really does that -- but, 
</span><br>
<span class="quotelev1">&gt; my guess is that at the least it assumes the allocation is in use 
</span><br>
<span class="quotelev1">&gt; until the original process ends. in any case, the wrapper / head 
</span><br>
<span class="quotelev1">&gt; process examines the environment vars and uses ls_rexec()/lsgrun or 
</span><br>
<span class="quotelev1">&gt; the like to actually run N copies of the 'real job' executable. in 
</span><br>
<span class="quotelev1">&gt; 7.0, it can conveniently use lsb_getalloc() and lsb_launch(), but that
</span><br>
<p><span class="quotelev1">&gt; doesn't really change any semantics as far as i know. one could 
</span><br>
<span class="quotelev1">&gt; imaging that calling lsb_launch() instead of ls_rexec() might be 
</span><br>
<span class="quotelev1">&gt; preferable from a process tracking point of view, but i don't see why 
</span><br>
<span class="quotelev1">&gt; Platform couldn't hook ls_rexec() just as well as lsb_launch(). 
</span><br>
<p>&nbsp;&nbsp;ls_rexec does not honour batch semantics.  Prior to LSF7 there is
<br>
&nbsp;&nbsp;an additional parallel application manager that is started when the
<br>
&nbsp;&nbsp;-a openmpi option is specified.  It handles I/O marshalling, signaling
<br>
&nbsp;&nbsp;and task accounting for the complete parallel job across all nodes.
<br>
&nbsp;&nbsp;In LSF7, this functionaly has been embedded directly into the RES
<br>
daemon
<br>
&nbsp;&nbsp;and is invoked when lsb_launch is used.
<br>
<p>&nbsp;&nbsp;yes you could use ls_rexec but it does not handle the I/O and process
<br>
&nbsp;&nbsp;marshalling - you need to handle that yourself if you use ls_rexec.
<br>
<p>&nbsp;&nbsp;The first node is node random, it is the &quot;best&quot; match within the
<br>
allocation
<br>
&nbsp;&nbsp;based on the resource requirements for the job
<br>
<p>&nbsp;&nbsp;Since you are refering to the mpijob/pvmjob scripts I would guess
<br>
&nbsp;&nbsp;you do not have the HPC extensions installed, as these are fairly
<br>
&nbsp;&nbsp;simplistic wrappers that don't make use of the parallel application
<br>
&nbsp;&nbsp;manager.
<br>
<p><span class="quotelev1">&gt; there is also an lsb_runjob() that is similar to lsb_launch(), but for
</span><br>
<p><span class="quotelev1">&gt; an already submitted job. so, if one were to lsb_sumbit() with an 
</span><br>
<span class="quotelev1">&gt; option set to never launch it automatically, and then one were to run 
</span><br>
<span class="quotelev1">&gt; lsb_runjob(), you can avoid the queue and/or force the use of certain 
</span><br>
<span class="quotelev1">&gt; hosts? i guess this is also not a good function to use, but at least 
</span><br>
<span class="quotelev1">&gt; the queuing system would be aware of any bad behavior (queue skipping 
</span><br>
<span class="quotelev1">&gt; via ls_placereq() to get extra hosts, for instance) in this case ... 
</span><br>
<p>&nbsp;&nbsp;Not really - lsb_runjob() is essentially an admin function to force
<br>
&nbsp;&nbsp;a job to run irrespective of the current
<br>
policies/priorities/allocations.
<br>
&nbsp;&nbsp;Unless you have administrator privs it will fail.
<br>
<p>&nbsp;&nbsp;As for growing or shrinking the allocation for a job, that is on the
<br>
&nbsp;&nbsp;the roadmap for the near future.  However, as Jeff has previously
<br>
&nbsp;&nbsp;mentioned, on a busy system you could end up waiting for a long time
<br>
&nbsp;&nbsp;to get additional nodes.
<br>
<p>&nbsp;&nbsp;Essentially it boils down to make an asynchronous request for
<br>
additional
<br>
&nbsp;&nbsp;resources and registering a callback for when something can be
<br>
allocated.
<br>
<p>&nbsp;&nbsp;Regards,
<br>
&nbsp;&nbsp;Bill
<br>
<p><p>-------------
<br>
Bill McMillan
<br>
Principal Technical Product Manager
<br>
Platform Computing
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1920/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1921.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15474"</a>
<li><strong>Previous message:</strong> <a href="1919.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15474"</a>
<li><strong>Maybe in reply to:</strong> <a href="1900.php">Matthew Moskewicz: "[OMPI devel] Fwd: lsf support / farm use models"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1936.php">Matthew Moskewicz: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Reply:</strong> <a href="1936.php">Matthew Moskewicz: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
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
