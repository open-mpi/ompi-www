<?
$subject_val = "Re: [OMPI users] machinefile binding error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 11:11:09 2015" -->
<!-- isoreceived="20150225161109" -->
<!-- sent="Wed, 25 Feb 2015 08:11:04 -0800" -->
<!-- isosent="20150225161104" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] machinefile binding error" -->
<!-- id="FCF08DBC-CF9B-404D-AD52-145823CE6B22_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="B2B766770F518A4EA4567774C593969831ADBC59_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] machinefile binding error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-25 11:11:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26401.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="26399.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>In reply to:</strong> <a href="26399.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, it sounds like the problem is that some nodes have numactl installed, and thus can perform binding, and some don&#226;&#128;&#153;t. It also sounds like you&#226;&#128;&#153;d prefer to not bind your procs at all as they are multi-threaded, and you want to have as many procs on a node as you do slots. You clearly recognize that this means the threads from the different procs will be competing against each other for cpu&#226;&#128;&#153;s in that design.
<br>
<p>Correct?
<br>
<p>If so, then indeed add that line to the default MCA param file and you&#226;&#128;&#153;re good to go.
<br>
<p>However, if you&#226;&#128;&#153;d like to avoid thread competition for cpu&#226;&#128;&#153;s, then another way you could do this is to specify the number of cpu&#226;&#128;&#153;s to assign to each proc. In other words, you can bind the proc to more than one cpu, assuming you have enough cpu&#226;&#128;&#153;s to meet your needs.
<br>
<p>For example, let&#226;&#128;&#153;s say you have 48 cores on your machines, and you want to run 24 procs on each host. Then you could add this to the cmd line:
<br>
<p>&#226;&#128;&#148;map-by slot:pe=2
<br>
<p>This will cause mpirun to assign one proc to each slot, but to bind that proc to two cores. The binding is done sequentially so as to avoid assigning more than one proc to a given core. If there aren&#226;&#128;&#153;t enough cores to do what you ask, then you&#226;&#128;&#153;ll get an error.
<br>
<p>The threads for that proc will be confined to the assigned cores, and so the threads from a given process will only compete with themselves.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><p><span class="quotelev1">&gt; On Feb 25, 2015, at 8:01 AM, Galloway, Jack D &lt;jackg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --bind-to none worked, ran just fine.  Additionally &#226;&#128;&#147;hetero-nodes also worked without error.  However hetero-nodes didn&#226;&#128;&#153;t allow threading properly while bind-to none did.  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is this the best option forward, adding that on all mpirun command lines or setting some system variables?  Or alternatively, would this work to avoid command line specification or environment variables?:
</span><br>
<span class="quotelev1">&gt; When you install OMPI, an &quot;etc&quot; directory gets created under the prefix location. In that directory is a file &quot;openmpi-mca-params.conf&quot;. This is your default MCA param file that mpirun (and every OMPI process) reads on startup. You can put any params in there that you want. In this case, you'd add a line: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_base_binding_policy = none 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from, <a href="http://www.open-mpi.org/community/lists/users/2014/05/24467.php">http://www.open-mpi.org/community/lists/users/2014/05/24467.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/05/24467.php">http://www.open-mpi.org/community/lists/users/2014/05/24467.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks for the help,
</span><br>
<span class="quotelev1">&gt; --Jack
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, February 24, 2015 3:24 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] machinefile binding error
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; It looks to me like some of the nodes don&#226;&#128;&#153;t have the required numactl packages installed. Why don&#226;&#128;&#153;t you try launching the job without binding, just to see if everything works?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Just add &#226;&#128;&#156;&#226;&#128;&#148;bind-to none&#226;&#128;&#157; to your cmd line and see if things work
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Feb 24, 2015, at 2:21 PM, Galloway, Jack D &lt;jackg_at_[hidden] &lt;mailto:jackg_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I think the error may be due to a new architecture change (brought on perhaps by the intel compilers?).  Bad wording here, but I&#226;&#128;&#153;m really stumbling.  As I add processors to the mpirun hostname call, at ~100 processors I get the following error, which may be informative to more seasoned eyes.  Additionally, I&#226;&#128;&#153;ve attached the config.log in case something stands out, grepping on &#226;&#128;&#156;catastrophic error&#226;&#128;&#157; gives not too many results, but I don&#226;&#128;&#153;t know if the error may be there or more subtle.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev1">&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev1">&gt; support binding memory to the process location.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   Node:  tebow124
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This usually is due to not having the required NUMA support installed
</span><br>
<span class="quotelev1">&gt; on the node. In some Linux distributions, the required support is
</span><br>
<span class="quotelev1">&gt; contained in the libnumactl and libnumactl-devel packages.
</span><br>
<span class="quotelev1">&gt; This is a warning only; your job will continue, though performance may be degraded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; tebow
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Open MPI tried to bind a new process, but something went wrong.  The
</span><br>
<span class="quotelev1">&gt; process was killed without launching the target application.  Your job
</span><br>
<span class="quotelev1">&gt; will now abort.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   Local host:        tebow125
</span><br>
<span class="quotelev1">&gt;   Application name:  /bin/hostname
</span><br>
<span class="quotelev1">&gt;   Error message:     hwloc_set_cpubind returned &quot;Error&quot; for bitmap &quot;8,24&quot;
</span><br>
<span class="quotelev1">&gt;   Location:          odls_default_module.c:551
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; --Jack
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] On Behalf Of Galloway, Jack D
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, February 24, 2015 2:31 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] machinefile binding error
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thank you sir, that fixed the first problem, hopefully the second is as easy!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I still get the second error when trying to farm out on a &#226;&#128;&#156;large&#226;&#128;&#157; number of processors:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; machine file (&#226;&#128;&#156;mach_burn_24s&#226;&#128;&#157;):
</span><br>
<span class="quotelev1">&gt; tebow
</span><br>
<span class="quotelev1">&gt; tebow121 slots=24
</span><br>
<span class="quotelev1">&gt; tebow122 slots=24
</span><br>
<span class="quotelev1">&gt; tebow123 slots=24
</span><br>
<span class="quotelev1">&gt; tebow124 slots=24
</span><br>
<span class="quotelev1">&gt; tebow125 slots=24
</span><br>
<span class="quotelev1">&gt; tebow126 slots=24
</span><br>
<span class="quotelev1">&gt; tebow127 slots=24
</span><br>
<span class="quotelev1">&gt; tebow128 slots=24
</span><br>
<span class="quotelev1">&gt; tebow129 slots=24
</span><br>
<span class="quotelev1">&gt; tebow130 slots=24
</span><br>
<span class="quotelev1">&gt; tebow131 slots=24
</span><br>
<span class="quotelev1">&gt; tebow132 slots=24
</span><br>
<span class="quotelev1">&gt; tebow133 slots=24
</span><br>
<span class="quotelev1">&gt; tebow134 slots=24
</span><br>
<span class="quotelev1">&gt; tebow135 slots=24
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; mpirun &#226;&#128;&#147;np 361 &#226;&#128;&#147;machinefile mach_burn_24s hostname
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev1">&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev1">&gt; support binding memory to the process location.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   Node:  tebow124
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This usually is due to not having the required NUMA support installed
</span><br>
<span class="quotelev1">&gt; on the node. In some Linux distributions, the required support is
</span><br>
<span class="quotelev1">&gt; contained in the libnumactl and libnumactl-devel packages.
</span><br>
<span class="quotelev1">&gt; This is a warning only; your job will continue, though performance may be degraded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev1">&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    Bind to:     NONE
</span><br>
<span class="quotelev1">&gt;    Node:        tebow125
</span><br>
<span class="quotelev1">&gt;    #processes:  2
</span><br>
<span class="quotelev1">&gt;    #cpus:       1
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev1">&gt; option to your binding directive.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; All the compute nodes (tebow121-135) have 24+ cores on them. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Any ideas?  Thanks!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --Jack  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, February 24, 2015 1:57 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] machinefile binding error
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ah, now that&#226;&#128;&#153;s a &#226;&#128;&#156;feature&#226;&#128;&#157; :-)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Seriously, it *is* actually a new feature of the 1.8 series. We now go out and actually sense the number of cores on the system and set the number of slots to that value unless you tell us otherwise. It was something people continually nagged us about, and so we made the change.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In your case, you could just put slots=1 on the first line of your machine file and we should respect it.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Feb 24, 2015, at 12:49 PM, Galloway, Jack D &lt;jackg_at_[hidden] &lt;mailto:jackg_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I recently upgraded my CentOS kernel and am running 2.6.32-504.8.1.el6.x86_64, in this upgrade I also decided to upgrade my intel/openmpi codes.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I upgraded from:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; intel version 13.1.2, with openmpi 1.6.5
</span><br>
<span class="quotelev1">&gt; intel 15.0.2, with openmpi 1.8.4
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Previously a command of &#226;&#128;&#156;mpirun &#226;&#128;&#147;np NP &#226;&#128;&#147;machinefile MACH executable&#226;&#128;&#157; would return expected results, particularly in how the machinefile was mapped to mpi tasks.  However, now when I try to run a code (which worked in the 13.1.2/1.6.5 paradigm) things behave anomalously.  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; For instance, if I have machine file (&#226;&#128;&#156;mach_burn_24s&#226;&#128;&#157;) that consists of:
</span><br>
<span class="quotelev1">&gt; tebow
</span><br>
<span class="quotelev1">&gt; tebow121 slots=24
</span><br>
<span class="quotelev1">&gt; tebow122 slots=24
</span><br>
<span class="quotelev1">&gt; tebow123 slots=24
</span><br>
<span class="quotelev1">&gt; tebow124 slots=24
</span><br>
<span class="quotelev1">&gt; tebow125 slots=24
</span><br>
<span class="quotelev1">&gt; tebow126 slots=24
</span><br>
<span class="quotelev1">&gt; tebow127 slots=24
</span><br>
<span class="quotelev1">&gt; tebow128 slots=24
</span><br>
<span class="quotelev1">&gt; tebow129 slots=24
</span><br>
<span class="quotelev1">&gt; tebow130 slots=24
</span><br>
<span class="quotelev1">&gt; tebow131 slots=24
</span><br>
<span class="quotelev1">&gt; tebow132 slots=24
</span><br>
<span class="quotelev1">&gt; tebow133 slots=24
</span><br>
<span class="quotelev1">&gt; tebow134 slots=24
</span><br>
<span class="quotelev1">&gt; tebow135 slots=24
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Before the allocation would follow as expected (i.e. &#226;&#128;&#147;np 25 &#226;&#128;&#147;machinefile above) would give 1 task on tebow, and 24 on tebow121, and if I assigned 361 the entire machinefile would be filled up.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; However now it&#226;&#128;&#153;s not the case.  If I type &#226;&#128;&#156;mpirun -np 24 -machinefile burn_machs/mach_burn_24s hostname&#226;&#128;&#157;, I get the following result:
</span><br>
<span class="quotelev1">&gt; tebow
</span><br>
<span class="quotelev1">&gt; tebow
</span><br>
<span class="quotelev1">&gt; tebow
</span><br>
<span class="quotelev1">&gt; tebow
</span><br>
<span class="quotelev1">&gt; tebow
</span><br>
<span class="quotelev1">&gt; tebow
</span><br>
<span class="quotelev1">&gt; tebow
</span><br>
<span class="quotelev1">&gt; tebow
</span><br>
<span class="quotelev1">&gt; tebow
</span><br>
<span class="quotelev1">&gt; tebow
</span><br>
<span class="quotelev1">&gt; tebow
</span><br>
<span class="quotelev1">&gt; tebow
</span><br>
<span class="quotelev1">&gt; tebow
</span><br>
<span class="quotelev1">&gt; tebow
</span><br>
<span class="quotelev1">&gt; tebow
</span><br>
<span class="quotelev1">&gt; tebow121
</span><br>
<span class="quotelev1">&gt; tebow
</span><br>
<span class="quotelev1">&gt; tebow121
</span><br>
<span class="quotelev1">&gt; tebow121
</span><br>
<span class="quotelev1">&gt; tebow121
</span><br>
<span class="quotelev1">&gt; tebow121
</span><br>
<span class="quotelev1">&gt; tebow121
</span><br>
<span class="quotelev1">&gt; tebow121
</span><br>
<span class="quotelev1">&gt; tebow121
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Now there are 16 cores on &#226;&#128;&#156;tebow&#226;&#128;&#157;, but I only requested one task in the machinefile (so I assume).  And furthermore if I request 361 I get the following catastrophic error:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev1">&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev1">&gt; support binding memory to the process location.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   Node:  tebow124
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This usually is due to not having the required NUMA support installed
</span><br>
<span class="quotelev1">&gt; on the node. In some Linux distributions, the required support is
</span><br>
<span class="quotelev1">&gt; contained in the libnumactl and libnumactl-devel packages.
</span><br>
<span class="quotelev1">&gt; This is a warning only; your job will continue, though performance may be degraded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev1">&gt; processes than cpus on a resource:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    Bind to:     NONE
</span><br>
<span class="quotelev1">&gt;    Node:        tebow125
</span><br>
<span class="quotelev1">&gt;    #processes:  2
</span><br>
<span class="quotelev1">&gt;    #cpus:       1
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev1">&gt; option to your binding directive.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; All the compute nodes (tebow121-135) have 24+ cores on them.  I believe some configuration change has occurred which has duped the system into trying to go off the reported number of cores, but even then it seems to be getting things wrong (i.e. not pulling the right number of cores).  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The config line use previously (which worked without issue according to the machinefile specification) was:
</span><br>
<span class="quotelev1">&gt;   $ ./configure --prefix=/opt/openmpi/openmpi-1.6.5 --with-openib --with-openib-libdir=/usr/lib64 CC=icc F77=ifort FC=ifort CXX=icpc
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The config line which I now use is:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi/openmpi-1.8.4 --with-verbs --with-verbs-libdir=/usr/lib64 CC=icc F77=ifort FC=ifort CXX=icpc
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m at a loss where to look for the solution, any help is appreciated.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --Jack
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26383.php">http://www.open-mpi.org/community/lists/users/2015/02/26383.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26383.php">http://www.open-mpi.org/community/lists/users/2015/02/26383.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;config.log.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26390.php">http://www.open-mpi.org/community/lists/users/2015/02/26390.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26390.php">http://www.open-mpi.org/community/lists/users/2015/02/26390.php</a>&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26399.php">http://www.open-mpi.org/community/lists/users/2015/02/26399.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26399.php">http://www.open-mpi.org/community/lists/users/2015/02/26399.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26400/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26401.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="26399.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>In reply to:</strong> <a href="26399.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
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
