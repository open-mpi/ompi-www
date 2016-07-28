<?
$subject_val = "Re: [OMPI users] machinefile binding error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 17:23:47 2015" -->
<!-- isoreceived="20150224222347" -->
<!-- sent="Tue, 24 Feb 2015 14:23:43 -0800" -->
<!-- isosent="20150224222343" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] machinefile binding error" -->
<!-- id="CA91BF97-EB7B-4D99-89DA-399CD808D47F_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="B2B766770F518A4EA4567774C593969831ADBB8B_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Date:</strong> 2015-02-24 17:23:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26393.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="26391.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>In reply to:</strong> <a href="26390.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26399.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>Reply:</strong> <a href="26399.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks to me like some of the nodes don&#226;&#128;&#153;t have the required numactl packages installed. Why don&#226;&#128;&#153;t you try launching the job without binding, just to see if everything works?
<br>
<p>Just add &#226;&#128;&#156;&#226;&#128;&#148;bind-to none&#226;&#128;&#157; to your cmd line and see if things work
<br>
<p><p><span class="quotelev1">&gt; On Feb 24, 2015, at 2:21 PM, Galloway, Jack D &lt;jackg_at_[hidden]&gt; wrote:
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26392/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26393.php">vithanousek: "Re: [OMPI users] MPIIO and OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="26391.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>In reply to:</strong> <a href="26390.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26399.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>Reply:</strong> <a href="26399.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
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
