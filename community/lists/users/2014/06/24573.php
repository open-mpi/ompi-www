<?
$subject_val = "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 13:24:10 2014" -->
<!-- isoreceived="20140606172410" -->
<!-- sent="Fri, 06 Jun 2014 13:24:08 -0400" -->
<!-- isosent="20140606172408" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI" -->
<!-- id="5391F938.3050108_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="995C2BEF-2963-4539-90E9-7063E219E703_at_open-mpi.org" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-06 13:24:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24574.php">Ralph Castain: "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="24572.php">Ralph Castain: "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="24572.php">Ralph Castain: "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24574.php">Ralph Castain: "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI"</a>
<li><strong>Reply:</strong> <a href="24574.php">Ralph Castain: "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 06/06/2014 01:05 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; You can always add --display-allocation to the cmd line to see what we
</span><br>
<span class="quotelev1">&gt; thought we received.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you configure OMPI with --enable-debug, you can set --mca
</span><br>
<span class="quotelev1">&gt; ras_base_verbose 10 to see the details
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi John
<br>
<p>On the Torque side, you can put a line &quot;cat $PBS_NODEFILE&quot; on the job 
<br>
script.  This will list the nodes (multiple times according to the 
<br>
number of cores requested).
<br>
I find this useful documentation,
<br>
along with job number, work directory, etc.
<br>
&quot;man qsub&quot; will show you all the PBS_* environment variables
<br>
available to the job.
<br>
For instance, you can echo them using a Torque
<br>
'prolog' script, if the user
<br>
didn't do it. That will appear in the Torque STDOUT file.
<br>
<p>&nbsp;From outside the job script, &quot;qstat -n&quot; (and variants, say, with -u 
<br>
username)
<br>
will list the nodes allocated to each job,
<br>
again multiple times as per the requested cores.
<br>
<p>&quot;tracejob job_number&quot; will show similar information.
<br>
<p><p>If you configured Torque --with-cpuset,
<br>
there is more information about the cpuset allocated to the job
<br>
in /dev/cpuset/torque/jobnumber (on the first node listed above, called 
<br>
&quot;mother superior&quot; in Torque parlance).
<br>
This mostly matter if there is more than one job running on a node.
<br>
However, Torque doesn't bind processes/MPI_ranks to cores or sockets or 
<br>
whatever.  As Ralph said, Open MPI does that.
<br>
I believe Open MPI doesn't use the cpuset info from Torque.
<br>
(Ralph, please correct me if I am wrong.)
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<p><p><span class="quotelev1">&gt; On Jun 6, 2014, at 10:01 AM, Reuti &lt;reuti_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:reuti_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 06.06.2014 um 18:58 schrieb Sasso, John (GE Power &amp; Water, Non-GE):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OK, so at the least, how can I get the node and slots/node info that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is passed from PBS?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ask because I&#146;m trying to troubleshoot a problem w/ PBS and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build of OpenMPI 1.6 I noted.  If I submit a 24-process simple job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; through PBS using a script which has:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/openmpi/bin/orterun -n 24 --hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/sasso/TEST/hosts.file --mca orte_rsh_agent rsh --mca btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openib,tcp,self --mca orte_base_help_aggregate 0 -x PATH -x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH /home/sasso/TEST/simplempihello.exe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using the --hostfile on your own would mean to violate the granted
</span><br>
<span class="quotelev2">&gt;&gt; slot allocation by PBS. Just leave this option out. How do you submit
</span><br>
<span class="quotelev2">&gt;&gt; your job?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And the hostfile /home/sasso/TEST/hosts.file contains 24 entries (the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first 16 being host node0001 and the last 8 being node0002), it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appears that 24 MPI tasks try to start on node0001 instead of getting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distributed as 16 on node0001 and 8 on node0002.   Hence, I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; curious what is being passed by PBS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --john
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Friday, June 06, 2014 12:31 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Determining what parameters a scheduler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; passes to OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We currently only get the node and slots/node info from PBS - we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don't get any task placement info at all. We then use the mpirun cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; options and built-in mappers to map the tasks to the nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I suppose we could do more integration in that regard, but haven't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; really seen a reason to do so - the OMPI mappers are generally more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flexible than anything in the schedulers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 6, 2014, at 9:08 AM, Sasso, John (GE Power &amp; Water, Non-GE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;John1.Sasso_at_[hidden] &lt;mailto:John1.Sasso_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For the PBS scheduler and using a build of OpenMPI 1.6 built against
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS include files + libs, is there a way to determine (perhaps via
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some debugging flags passed to mpirun) what job placement parameters
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are passed from the PBS scheduler to OpenMPI?  In particular, I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; talking about task placement info such as nodes to place on, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              --john
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24574.php">Ralph Castain: "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="24572.php">Ralph Castain: "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="24572.php">Ralph Castain: "Re: [OMPI users] Determining what parameters a scheduler passes to	OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24574.php">Ralph Castain: "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI"</a>
<li><strong>Reply:</strong> <a href="24574.php">Ralph Castain: "Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI"</a>
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
