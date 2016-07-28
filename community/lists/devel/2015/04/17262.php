<?
$subject_val = "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 17 19:36:22 2015" -->
<!-- isoreceived="20150417233622" -->
<!-- sent="Fri, 17 Apr 2015 16:36:15 -0700" -->
<!-- isosent="20150417233615" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4" -->
<!-- id="713CF79E-DD70-4B56-83F6-1C5C37FBCC1F_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1429294596097.56516_at_goodyear.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-17 19:36:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17263.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17261.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>In reply to:</strong> <a href="17249.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17317.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17317.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tom
<br>
<p>Glad you are making some progress! Note that the 1.8 series uses hwloc for its affinity operations, while the 1.4 and 1.6 series used the old plpa code. Hence, you will not find the &#147;affinity&#148; components in the 1.8 ompi_info output.
<br>
<p>Is there some reason you didn&#146;t compile OMPI on the AMD machine? I ask because there are some config switches in various areas that differ between AMD and Intel architectures.
<br>
<p><p><span class="quotelev1">&gt; On Apr 17, 2015, at 11:16 AM, Tom Wurgler &lt;twurgl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note where I said &quot;1 hour 14 minutes&quot; it should have read &quot;1 hour 24 minutes&quot;...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Tom Wurgler
</span><br>
<span class="quotelev1">&gt; Sent: Friday, April 17, 2015 2:14 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ok, seems like I am making some progress here.  Thanks for the help.
</span><br>
<span class="quotelev1">&gt; I turned HT off.
</span><br>
<span class="quotelev1">&gt; Now I can run v 1.4.2, 1.6.4 and 1.8.4 all compiled the same compiler and run on the same machine
</span><br>
<span class="quotelev1">&gt; 1.4.2 runs this job in 59 minutes.   1.6.4 and 1.8.4 run the job in 1hr 24 minutes.
</span><br>
<span class="quotelev1">&gt; 1.4.2 uses just --mca paffinuty-alone 1 and the processes are bound
</span><br>
<span class="quotelev1">&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
</span><br>
<span class="quotelev1">&gt; 22232 prog1                 0    469.9M [ 469.9M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 22233 prog1                 1    479.0M [   4.0M 475.0M     0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 22234 prog1                 2    516.7M [ 516.7M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 22235 prog1                 3    485.4M [   8.0M 477.4M     0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 22236 prog1                 4    482.6M [ 482.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 22237 prog1                 5    486.6M [   6.0M 480.6M     0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 22238 prog1                 6    481.3M [ 481.3M     0      0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 22239 prog1                 7    419.4M [   8.0M 411.4M     0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I use 1.6.4 and 1.8.4 with --mca paffinity-alone 1, the run time is now 1hr 14 minutes.  The process map now looks like:
</span><br>
<span class="quotelev1">&gt; bash-4.3# numa-maps -n eagle
</span><br>
<span class="quotelev1">&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
</span><br>
<span class="quotelev1">&gt; 12248 eagle                 0    163.3M [ 155.3M   8.0M     0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 12249 eagle                 2    161.6M [ 159.6M   2.0M     0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 12250 eagle                 4    164.3M [ 160.3M   4.0M     0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 12251 eagle                 6    160.4M [ 156.4M   4.0M     0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 12252 eagle                 8    160.6M [ 154.6M   6.0M     0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 12253 eagle                10    159.8M [ 151.8M   8.0M     0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 12254 eagle                12    160.9M [ 152.9M   8.0M     0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 12255 eagle                14    159.8M [ 157.8M   2.0M     0      0      0      0  ]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I take off the --mca paffinity-alone 1, and instead use --bysocket --bind-to-core (1.6.4)  or --map-by socket --bind-to core (1.8.4), the job runs in 59 minutes and the process map look like the 1.4.2 one above...looks super!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now the issue:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I move the same openmi install dirs to our cluster nodes, I can run 1.64+ using the --mca paffinity-alone 1 options and the job runs (taking longer etc).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I then try the --bysocket --bind-to-core etc, I get the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An attempt to set processor affinity has failed - please check to
</span><br>
<span class="quotelev1">&gt; ensure that your system supports such functionality. If so, then
</span><br>
<span class="quotelev1">&gt; this is probably something that should be reported to the OMPI developers.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to start the specified application as it encountered an error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error name: Input/output error
</span><br>
<span class="quotelev1">&gt; Node: rdsargo36
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when attempting to start process rank 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: Previous command failed (exitcode=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now the original runs were done on an Intel box (and this is where OpenMPI was comilped).
</span><br>
<span class="quotelev1">&gt; I am trying to run now on an AMD based cluster node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So --mca paffinity-alone 1  works
</span><br>
<span class="quotelev1">&gt;      --bysocket --bind-to-core doesn't.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does this make sense to you folks?  If the AMD (running SuSE 11.1, BTW) doesn't support paffinity, why does the --mca version run?  Is there some way to check/set whether a system would support --bysocket etc?  Does it matter which machine I compiled on?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And compare the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [test_lsf2]rds4020[1010]% /apps/share/openmpi/1.6.4.I1404211/bin/ompi_info | grep -i affinity
</span><br>
<span class="quotelev1">&gt;           MPI extensions: affinity example
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [test_lsf2]rds4020[1010]% /apps/share/openmpi/1.4.2.I1404211/bin/ompi_info | grep -i affinity
</span><br>
<span class="quotelev1">&gt;            MCA paffinity: linux (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [test_lsf2]rds4020[1012]% /apps/share/openmpi/1.8.4.I1404211/bin/ompi_info | grep -i affinity
</span><br>
<span class="quotelev1">&gt; (no output)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Shouldn't the 1.8.4 version show something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank again for the help so far and appreciate any comments/help on the above.
</span><br>
<span class="quotelev1">&gt; tom
</span><br>
<span class="quotelev1">&gt; From: devel &lt;devel-bounces_at_[hidden] &lt;mailto:devel-bounces_at_[hidden]&gt;&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Friday, April 10, 2015 11:38 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Your configure options look fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Getting 1 process assigned to each core (irrespective of HT on or off):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#151;map-by core &#151;bind-to core
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will tight-pack the processes - i.e., they will be placed on each successive core. If you want to balance the load across the allocation (if the #procs &lt; #cores in allocation):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#151;map-by node &#151;bind-to core
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 10, 2015, at 7:24 AM, Tom Wurgler &lt;twurgl_at_[hidden] &lt;mailto:twurgl_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the responses.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The idea is to bind one process per processor.  The actual problem that prompted the investigation is that a job
</span><br>
<span class="quotelev2">&gt;&gt; ran with 1.4.2 runs in 59 minutes and the same job in 1.6.4 and 1.8.4 takes 79 minutes on the same machine, same compiler etc.  In trying to track down the reason for the run time differences, I found that the behavior is different regarding the binding.  Hence the question.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe it is doing what we requested, but not what we want.  The bind-to-socket was just one attempt at making
</span><br>
<span class="quotelev2">&gt;&gt; it bind one per processor.  I tried about 15 different combinations of the mpirun args and none matched the behavior of 1.4.2 or the run time of 1.4.2 and is a huge concern for us.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just checked this machine and hyperthreading is on.  I can change that and retest.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are my configure options ok for the 1.6.4+ configuring?
</span><br>
<span class="quotelev2">&gt;&gt; And what mpirun options should I be using to get 1 process per processor?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This job was an 8 core test job, but the core counts varies per type of job (and will be run on the big clusters, not this compile server).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The run time differences show up across all our clusters, Intel based, AMD based, various SuSE OS versions.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt; tom
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: devel &lt;devel-bounces_at_[hidden] &lt;mailto:devel-bounces_at_[hidden]&gt;&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, April 10, 2015 9:54 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Actually, I believe from the cmd line that the questioner wanted each process to be bound to a single core.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From your output, I&#146;m guessing you have hyperthreads enabled on your system - yes? In that case, the 1.4 series is likely to be binding each process to a single HT because it isn&#146;t sophisticated enough to realize the difference between HT and core.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Later versions of OMPI do know the difference. When you tell OMPI to bind to core, it will bind you to -both- HTs of that core. Hence the output you showed here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here is the map using just --mca mpi_paffinity_alone 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 25846 prog1              0,16     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 25847 prog1              2,18     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 25848 prog1              4,20     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 25849 prog1              6,22     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 25850 prog1              8,24     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 25851 prog1             10,26     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 25852 prog1             12,28     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 25853 prog1             14,30     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When you tell us bind-to socket, we bind you to every HT in that socket. Since you are running less than 8 processes, and we map-by core by default, all the processes are bound to the first socket. This is what you show in this output:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We get the following process map (this output is with mpirun args --bind-to-socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca mpi_paffinity_alone 1):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24176 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.2M [  60.2M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24177 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24178 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24179 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24180 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24181 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24182 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24183 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So it looks to me like OMPI is doing exactly what you requested. I admit the HT numbering in the cpumask is strange, but that&#146;s the way your BIOS numbered them.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 10, 2015, at 6:29 AM, Nick Papior Andersen &lt;nickpapior_at_[hidden] &lt;mailto:nickpapior_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bug, it should be &quot;span,pe=2&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2015-04-10 15:28 GMT+02:00 Nick Papior Andersen &lt;nickpapior_at_[hidden] &lt;mailto:nickpapior_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess you want process #1 to have core 0 and core 1 bound to it, process #2 have core 2 and core 3 bound?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can do this with (I do this with 1.8.4, I do not think it works with 1.6.x):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --map-by ppr:4:socket:span:pe=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ppr = processes per resource.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket = the resource
</span><br>
<span class="quotelev3">&gt;&gt;&gt; span = load balance the processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pe = bind processing elements to each process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This should launch 8 processes (you have 2 sockets). Each process should have 2 processing elements bound to it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can check with --report-bindings to see the &quot;bound&quot; processes bindings.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2015-04-10 15:16 GMT+02:00  &lt;twurgl_at_[hidden] &lt;mailto:twurgl_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We can't seem to get &quot;processor affinity&quot; using 1.6.4 or newer OpenMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note this is a 2 socket machine with 8 cores per socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We had compiled OpenMPI 1.4.2 with the following configure options:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export CC=/apps/share/intel/v14.0.4.211/bin/icc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export CXX=/apps/share/intel/v14.0.4.211/bin/icpc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export FC=/apps/share/intel/v14.0.4.211/bin/ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version=1.4.2.I1404211
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --prefix=/apps/share/openmpi/$version \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --disable-shared \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --enable-static \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --enable-shared=no \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --with-openib \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --with-libnuma=/usr \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --with-memory-manager=none \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --with-tm=/apps/share/TORQUE/current/Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and then used this mpirun command (where we used 8 cores):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /apps/share/openmpi/1.4.2.I1404211/bin/mpirun \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --prefix /apps/share/openmpi/1.4.2.I1404211 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca mpi_paffinity_alone 1 \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca btl openib,tcp,sm,self \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --x LD_LIBRARY_PATH \
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {model args}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And when we checked the process map, it looks like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 22232 prog1                 0    469.9M [ 469.9M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 22233 prog1                 1    479.0M [   4.0M 475.0M     0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 22234 prog1                 2    516.7M [ 516.7M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 22235 prog1                 3    485.4M [   8.0M 477.4M     0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 22236 prog1                 4    482.6M [ 482.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 22237 prog1                 5    486.6M [   6.0M 480.6M     0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 22238 prog1                 6    481.3M [ 481.3M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 22239 prog1                 7    419.4M [   8.0M 411.4M     0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now with 1.6.4 and higher, we did the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export CC=/apps/share/intel/v14.0.4.211/bin/icc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export CXX=/apps/share/intel/v14.0.4.211/bin/icpc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export FC=/apps/share/intel/v14.0.4.211/bin/ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version=1.6.4.I1404211
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --disable-vt \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --prefix=/apps/share/openmpi/$version \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --disable-shared \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --enable-static \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --with-verbs \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --enable-mpirun-prefix-by-default \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --with-memory-manager=none \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --with-hwloc \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --enable-mpi-ext \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --with-tm=/apps/share/TORQUE/current/Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===========================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We've tried the same mpirun command, with -bind-to-core, with -bind-to-core -bycore etc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I can't seem to get the right combination of args to get the same behavior as 1.4.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We get the following process map (this output is with mpirun args --bind-to-socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca mpi_paffinity_alone 1):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24176 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.2M [  60.2M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24177 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24178 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24179 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24180 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24181 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24182 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 24183 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here is the map using just --mca mpi_paffinity_alone 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 25846 prog1              0,16     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 25847 prog1              2,18     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 25848 prog1              4,20     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 25849 prog1              6,22     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 25850 prog1              8,24     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 25851 prog1             10,26     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 25852 prog1             12,28     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 25853 prog1             14,30     60.6M [  60.6M     0      0      0      0      0  ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I figure I am compiling incorrectly or using the wrong mpirun args.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can someone tell me how to duplicate the behavior of 1.4.2 regarding binding the processes to cores?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any help appreciated..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tom
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17205.php">http://www.open-mpi.org/community/lists/devel/2015/04/17205.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17205.php">http://www.open-mpi.org/community/lists/devel/2015/04/17205.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards Nick
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards Nick
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17207.php">http://www.open-mpi.org/community/lists/devel/2015/04/17207.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17207.php">http://www.open-mpi.org/community/lists/devel/2015/04/17207.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17209.php">http://www.open-mpi.org/community/lists/devel/2015/04/17209.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17209.php">http://www.open-mpi.org/community/lists/devel/2015/04/17209.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/04/17249.php">http://www.open-mpi.org/community/lists/devel/2015/04/17249.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/04/17249.php">http://www.open-mpi.org/community/lists/devel/2015/04/17249.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17262/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17263.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<li><strong>Previous message:</strong> <a href="17261.php">Ralph Castain: "Re: [OMPI devel] interaction with slurm 14.11"</a>
<li><strong>In reply to:</strong> <a href="17249.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17317.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17317.php">Tom Wurgler: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
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
