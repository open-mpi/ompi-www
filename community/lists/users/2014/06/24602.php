<?
$subject_val = "Re: [OMPI users] Determining what parameters a scheduler	passes	to	OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  9 10:06:08 2014" -->
<!-- isoreceived="20140609140608" -->
<!-- sent="Mon, 9 Jun 2014 14:06:04 +0000" -->
<!-- isosent="20140609140604" -->
<!-- name="Sasso, John (GE Power &amp; Water, Non-GE)" -->
<!-- email="John1.Sasso_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Determining what parameters a scheduler	passes	to	OpenMPI" -->
<!-- id="4F505D9A84D1D74E9397FB427DDF95BC3FE9839A_at_ALPMBAPA12.e2k.ad.ge.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="35601395-F745-4F8F-9ED7-DCB0962EF9EB_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Determining what parameters a scheduler	passes	to	OpenMPI<br>
<strong>From:</strong> Sasso, John (GE Power &amp; Water, Non-GE) (<em>John1.Sasso_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-09 10:06:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24603.php">Nathan Hjelm: "Re: [OMPI users] Compiling OpenMPI 1.8.1 for Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="24601.php">Dan Dietz: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24599.php">Ralph Castain: "Re: [OMPI users] Determining what parameters a scheduler passes	to	OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will be testing w/ 1.6.5 and update accordingly.  Thanks much!
<br>
<p><p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Sunday, June 08, 2014 7:40 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Determining what parameters a scheduler passes to OpenMPI
<br>
<p>Sorry about the comment re cpus-per-proc - confused this momentarily with another user also using Torque. I confirmed that this works fine with 1.6.5, and would guess you are hitting some bug in 1.6.0. Can you update?
<br>
<p><p>On Jun 6, 2014, at 12:20 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You might want to update to 1.6.5, if you can - I'll see what I can 
</span><br>
<span class="quotelev1">&gt; find
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2014, at 12:07 PM, Sasso, John (GE Power &amp; Water, Non-GE) &lt;John1.Sasso_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Version 1.6 (i.e. prior to 1.6.1)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph 
</span><br>
<span class="quotelev2">&gt;&gt; Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, June 06, 2014 3:03 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Determining what parameters a scheduler 
</span><br>
<span class="quotelev2">&gt;&gt; passes to OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It's possible that you are hitting a bug - not sure how much the cpus-per-proc option has been exercised in 1.6. Is this 1.6.5, or some other member of that series?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't have a Torque machine handy any more, but should be able to 
</span><br>
<span class="quotelev2">&gt;&gt; test this scenario on my boxes
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 6, 2014, at 10:51 AM, Sasso, John (GE Power &amp; Water, Non-GE) &lt;John1.Sasso_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Re: $PBS_NODEFILE, we use that to create the hostfile that is passed via --hostfile (i.e. the two are the same).  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To further debug this, I passed &quot;--display-allocation --display-map&quot; to orterun, which resulted in:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: node0001        Num slots: 16   Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: node0002      Num slots: 8    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========================   JOB MAP   ========================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: node0001        Num procs: 24
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 11
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 12
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 13
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 14
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 15
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 17
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 18
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 19
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 21
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 22
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      Process OMPI jobid: [24552,1] Process rank: 23
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have been going through the man page of mpirun as well as the OpenMPI mailing list and website, and thus far have been unable to determine the reason for the oversubscription of the head node (node0001) when even the PBS scheduler is passing along the correct slot count #s (16 and 8, resp).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am I running into a bug w/ OpenMPI 1.6?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --john
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Friday, June 06, 2014 1:30 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Determining what parameters a scheduler 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; passes to OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 6, 2014, at 10:24 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 06/06/2014 01:05 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; You can always add --display-allocation to the cmd line to see 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; what we thought we received.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you configure OMPI with --enable-debug, you can set --mca 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ras_base_verbose 10 to see the details
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi John
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On the Torque side, you can put a line &quot;cat $PBS_NODEFILE&quot; on the job script.  This will list the nodes (multiple times according to the number of cores requested).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I find this useful documentation,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; along with job number, work directory, etc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;man qsub&quot; will show you all the PBS_* environment variables 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available to the job.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For instance, you can echo them using a Torque 'prolog' script, if 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the user didn't do it. That will appear in the Torque STDOUT file.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From outside the job script, &quot;qstat -n&quot; (and variants, say, with -u
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; username) will list the nodes allocated to each job, again multiple 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; times as per the requested cores.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;tracejob job_number&quot; will show similar information.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you configured Torque --with-cpuset, there is more information 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; about the cpuset allocated to the job in 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /dev/cpuset/torque/jobnumber (on the first node listed above, called &quot;mother superior&quot; in Torque parlance).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This mostly matter if there is more than one job running on a node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, Torque doesn't bind processes/MPI_ranks to cores or sockets or whatever.  As Ralph said, Open MPI does that.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I believe Open MPI doesn't use the cpuset info from Torque.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Ralph, please correct me if I am wrong.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You are correct in that we don't use any per-process designations. We do, however, work inside any overall envelope that Torque may impose on us - e.g., if you tell Torque to limit the job to cores 0-4, we will honor that directive and keep all processes within that envelope.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My two cents,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jun 6, 2014, at 10:01 AM, Reuti &lt;reuti_at_[hidden] 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;mailto:reuti_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Am 06.06.2014 um 18:58 schrieb Sasso, John (GE Power &amp; Water, Non-GE):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; OK, so at the least, how can I get the node and slots/node info 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; that is passed from PBS?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I ask because I'm trying to troubleshoot a problem w/ PBS and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the build of OpenMPI 1.6 I noted.  If I submit a 24-process 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; simple job through PBS using a script which has:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/local/openmpi/bin/orterun -n 24 --hostfile 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/sasso/TEST/hosts.file --mca orte_rsh_agent rsh --mca btl 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; openib,tcp,self --mca orte_base_help_aggregate 0 -x PATH -x 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH /home/sasso/TEST/simplempihello.exe
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Using the --hostfile on your own would mean to violate the 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; granted slot allocation by PBS. Just leave this option out. How 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; do you submit your job?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; And the hostfile /home/sasso/TEST/hosts.file contains 24 entries 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (the first 16 being host node0001 and the last 8 being 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; node0002), it appears that 24 MPI tasks try to start on node0001 instead of getting
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; distributed as 16 on node0001 and 8 on node0002.   Hence, I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; curious what is being passed by PBS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --john
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph Castain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sent: Friday, June 06, 2014 12:31 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] Determining what parameters a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; scheduler passes to OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; We currently only get the node and slots/node info from PBS - we 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; don't get any task placement info at all. We then use the mpirun 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; cmd options and built-in mappers to map the tasks to the nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I suppose we could do more integration in that regard, but 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; haven't really seen a reason to do so - the OMPI mappers are 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; generally more flexible than anything in the schedulers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jun 6, 2014, at 9:08 AM, Sasso, John (GE Power &amp; Water, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Non-GE) &lt;John1.Sasso_at_[hidden] &lt;mailto:John1.Sasso_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; For the PBS scheduler and using a build of OpenMPI 1.6 built 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; against PBS include files + libs, is there a way to determine 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (perhaps via some debugging flags passed to mpirun) what job 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; placement parameters are passed from the PBS scheduler to OpenMPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; In particular, I am talking about task placement info such as nodes to place on, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;          --john
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24603.php">Nathan Hjelm: "Re: [OMPI users] Compiling OpenMPI 1.8.1 for Cray XC30"</a>
<li><strong>Previous message:</strong> <a href="24601.php">Dan Dietz: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24599.php">Ralph Castain: "Re: [OMPI users] Determining what parameters a scheduler passes	to	OpenMPI"</a>
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
