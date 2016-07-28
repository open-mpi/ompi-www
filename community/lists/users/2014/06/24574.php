<?
$subject_val = "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 13:30:00 2014" -->
<!-- isoreceived="20140606173000" -->
<!-- sent="Fri, 6 Jun 2014 10:29:56 -0700" -->
<!-- isosent="20140606172956" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI" -->
<!-- id="FC3B579A-2F66-45B8-89F8-C3236DF0DD42_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5391F938.3050108_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-06 13:29:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24575.php">Dan Dietz: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24573.php">Gus Correa: "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="24573.php">Gus Correa: "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24577.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<li><strong>Reply:</strong> <a href="24577.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 6, 2014, at 10:24 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 06/06/2014 01:05 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You can always add --display-allocation to the cmd line to see what we
</span><br>
<span class="quotelev2">&gt;&gt; thought we received.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you configure OMPI with --enable-debug, you can set --mca
</span><br>
<span class="quotelev2">&gt;&gt; ras_base_verbose 10 to see the details
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi John
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the Torque side, you can put a line &quot;cat $PBS_NODEFILE&quot; on the job script.  This will list the nodes (multiple times according to the number of cores requested).
</span><br>
<span class="quotelev1">&gt; I find this useful documentation,
</span><br>
<span class="quotelev1">&gt; along with job number, work directory, etc.
</span><br>
<span class="quotelev1">&gt; &quot;man qsub&quot; will show you all the PBS_* environment variables
</span><br>
<span class="quotelev1">&gt; available to the job.
</span><br>
<span class="quotelev1">&gt; For instance, you can echo them using a Torque
</span><br>
<span class="quotelev1">&gt; 'prolog' script, if the user
</span><br>
<span class="quotelev1">&gt; didn't do it. That will appear in the Torque STDOUT file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From outside the job script, &quot;qstat -n&quot; (and variants, say, with -u username)
</span><br>
<span class="quotelev1">&gt; will list the nodes allocated to each job,
</span><br>
<span class="quotelev1">&gt; again multiple times as per the requested cores.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;tracejob job_number&quot; will show similar information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you configured Torque --with-cpuset,
</span><br>
<span class="quotelev1">&gt; there is more information about the cpuset allocated to the job
</span><br>
<span class="quotelev1">&gt; in /dev/cpuset/torque/jobnumber (on the first node listed above, called &quot;mother superior&quot; in Torque parlance).
</span><br>
<span class="quotelev1">&gt; This mostly matter if there is more than one job running on a node.
</span><br>
<span class="quotelev1">&gt; However, Torque doesn't bind processes/MPI_ranks to cores or sockets or whatever.  As Ralph said, Open MPI does that.
</span><br>
<span class="quotelev1">&gt; I believe Open MPI doesn't use the cpuset info from Torque.
</span><br>
<span class="quotelev1">&gt; (Ralph, please correct me if I am wrong.)
</span><br>
<p>You are correct in that we don't use any per-process designations. We do, however, work inside any overall envelope that Torque may impose on us - e.g., if you tell Torque to limit the job to cores 0-4, we will honor that directive and keep all processes within that envelope.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My two cents,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 6, 2014, at 10:01 AM, Reuti &lt;reuti_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:reuti_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 06.06.2014 um 18:58 schrieb Sasso, John (GE Power &amp; Water, Non-GE):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OK, so at the least, how can I get the node and slots/node info that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is passed from PBS?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I ask because I&#146;m trying to troubleshoot a problem w/ PBS and the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; build of OpenMPI 1.6 I noted.  If I submit a 24-process simple job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; through PBS using a script which has:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/local/openmpi/bin/orterun -n 24 --hostfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/sasso/TEST/hosts.file --mca orte_rsh_agent rsh --mca btl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openib,tcp,self --mca orte_base_help_aggregate 0 -x PATH -x
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH /home/sasso/TEST/simplempihello.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using the --hostfile on your own would mean to violate the granted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slot allocation by PBS. Just leave this option out. How do you submit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your job?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And the hostfile /home/sasso/TEST/hosts.file contains 24 entries (the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; first 16 being host node0001 and the last 8 being node0002), it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; appears that 24 MPI tasks try to start on node0001 instead of getting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; distributed as 16 on node0001 and 8 on node0002.   Hence, I am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; curious what is being passed by PBS.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --john
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Castain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Friday, June 06, 2014 12:31 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Determining what parameters a scheduler
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; passes to OpenMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We currently only get the node and slots/node info from PBS - we
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; don't get any task placement info at all. We then use the mpirun cmd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; options and built-in mappers to map the tasks to the nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I suppose we could do more integration in that regard, but haven't
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; really seen a reason to do so - the OMPI mappers are generally more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; flexible than anything in the schedulers.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 6, 2014, at 9:08 AM, Sasso, John (GE Power &amp; Water, Non-GE)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;John1.Sasso_at_[hidden] &lt;mailto:John1.Sasso_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For the PBS scheduler and using a build of OpenMPI 1.6 built against
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PBS include files + libs, is there a way to determine (perhaps via
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; some debugging flags passed to mpirun) what job placement parameters
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are passed from the PBS scheduler to OpenMPI?  In particular, I am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; talking about task placement info such as nodes to place on, etc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             --john
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24575.php">Dan Dietz: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24573.php">Gus Correa: "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="24573.php">Gus Correa: "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24577.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<li><strong>Reply:</strong> <a href="24577.php">Sasso, John (GE Power & Water, Non-GE): "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
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
