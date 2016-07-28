<?
$subject_val = "Re: [OMPI users] machinefile binding error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 17:21:19 2015" -->
<!-- isoreceived="20150224222119" -->
<!-- sent="Tue, 24 Feb 2015 22:21:15 +0000" -->
<!-- isosent="20150224222115" -->
<!-- name="Galloway, Jack D" -->
<!-- email="jackg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] machinefile binding error" -->
<!-- id="B2B766770F518A4EA4567774C593969831ADBB8B_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="B2B766770F518A4EA4567774C593969831ADBB5E_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>From:</strong> Galloway, Jack D (<em>jackg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-24 17:21:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26391.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Previous message:</strong> <a href="26389.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
<li><strong>In reply to:</strong> <a href="26388.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26392.php">Ralph Castain: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>Reply:</strong> <a href="26392.php">Ralph Castain: "Re: [OMPI users] machinefile binding error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the error may be due to a new architecture change (brought on perhaps by the intel compilers?).  Bad wording here, but I&#226;&#128;&#153;m really stumbling.  As I add processors to the mpirun hostname call, at ~100 processors I get the following error, which may be informative to more seasoned eyes.  Additionally, I&#226;&#128;&#153;ve attached the config.log in case something stands out, grepping on &#226;&#128;&#156;catastrophic error&#226;&#128;&#157; gives not too many results, but I don&#226;&#128;&#153;t know if the error may be there or more subtle.
<br>

<br>
--------------------------------------------------------------------------
<br>
WARNING: a request was made to bind a process. While the system
<br>
supports binding the process itself, at least one node does NOT
<br>
support binding memory to the process location.
<br>

<br>
&nbsp;&nbsp;Node:  tebow124
<br>

<br>
This usually is due to not having the required NUMA support installed
<br>
on the node. In some Linux distributions, the required support is
<br>
contained in the libnumactl and libnumactl-devel packages.
<br>
This is a warning only; your job will continue, though performance may be degraded.
<br>
--------------------------------------------------------------------------
<br>
tebow
<br>
--------------------------------------------------------------------------
<br>
Open MPI tried to bind a new process, but something went wrong.  The
<br>
process was killed without launching the target application.  Your job
<br>
will now abort.
<br>

<br>
&nbsp;&nbsp;Local host:        tebow125
<br>
&nbsp;&nbsp;Application name:  /bin/hostname
<br>
&nbsp;&nbsp;Error message:     hwloc_set_cpubind returned &quot;Error&quot; for bitmap &quot;8,24&quot;
<br>
&nbsp;&nbsp;Location:          odls_default_module.c:551
<br>
--------------------------------------------------------------------------
<br>

<br>
Thanks,
<br>
--Jack
<br>

<br>

<br>

<br>

<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Galloway, Jack D
<br>
Sent: Tuesday, February 24, 2015 2:31 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] machinefile binding error
<br>

<br>
Thank you sir, that fixed the first problem, hopefully the second is as easy!
<br>

<br>
I still get the second error when trying to farm out on a &#226;&#128;&#156;large&#226;&#128;&#157; number of processors:
<br>

<br>
machine file (&#226;&#128;&#156;mach_burn_24s&#226;&#128;&#157;):
<br>
tebow
<br>
tebow121 slots=24
<br>
tebow122 slots=24
<br>
tebow123 slots=24
<br>
tebow124 slots=24
<br>
tebow125 slots=24
<br>
tebow126 slots=24
<br>
tebow127 slots=24
<br>
tebow128 slots=24
<br>
tebow129 slots=24
<br>
tebow130 slots=24
<br>
tebow131 slots=24
<br>
tebow132 slots=24
<br>
tebow133 slots=24
<br>
tebow134 slots=24
<br>
tebow135 slots=24
<br>

<br>
mpirun &#226;&#128;&#147;np 361 &#226;&#128;&#147;machinefile mach_burn_24s hostname
<br>

<br>
--------------------------------------------------------------------------
<br>
WARNING: a request was made to bind a process. While the system
<br>
supports binding the process itself, at least one node does NOT
<br>
support binding memory to the process location.
<br>

<br>
&nbsp;&nbsp;Node:  tebow124
<br>

<br>
This usually is due to not having the required NUMA support installed
<br>
on the node. In some Linux distributions, the required support is
<br>
contained in the libnumactl and libnumactl-devel packages.
<br>
This is a warning only; your job will continue, though performance may be degraded.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>

<br>
&nbsp;&nbsp;&nbsp;Bind to:     NONE
<br>
&nbsp;&nbsp;&nbsp;Node:        tebow125
<br>
&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;#cpus:       1
<br>

<br>
You can override this protection by adding the &quot;overload-allowed&quot;
<br>
option to your binding directive.
<br>
--------------------------------------------------------------------------
<br>

<br>
All the compute nodes (tebow121-135) have 24+ cores on them.
<br>

<br>
Any ideas?  Thanks!
<br>

<br>
--Jack
<br>

<br>

<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Tuesday, February 24, 2015 1:57 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] machinefile binding error
<br>

<br>
Ah, now that&#226;&#128;&#153;s a &#226;&#128;&#156;feature&#226;&#128;&#157; :-)
<br>

<br>
Seriously, it *is* actually a new feature of the 1.8 series. We now go out and actually sense the number of cores on the system and set the number of slots to that value unless you tell us otherwise. It was something people continually nagged us about, and so we made the change.
<br>

<br>
In your case, you could just put slots=1 on the first line of your machine file and we should respect it.
<br>

<br>

<br>
On Feb 24, 2015, at 12:49 PM, Galloway, Jack D &lt;jackg_at_[hidden]&lt;mailto:jackg_at_[hidden]&gt;&gt; wrote:
<br>

<br>
I recently upgraded my CentOS kernel and am running 2.6.32-504.8.1.el6.x86_64, in this upgrade I also decided to upgrade my intel/openmpi codes.
<br>

<br>
I upgraded from:
<br>

<br>
intel version 13.1.2, with openmpi 1.6.5
<br>
intel 15.0.2, with openmpi 1.8.4
<br>

<br>
Previously a command of &#226;&#128;&#156;mpirun &#226;&#128;&#147;np NP &#226;&#128;&#147;machinefile MACH executable&#226;&#128;&#157; would return expected results, particularly in how the machinefile was mapped to mpi tasks.  However, now when I try to run a code (which worked in the 13.1.2/1.6.5 paradigm) things behave anomalously.
<br>

<br>
For instance, if I have machine file (&#226;&#128;&#156;mach_burn_24s&#226;&#128;&#157;) that consists of:
<br>
tebow
<br>
tebow121 slots=24
<br>
tebow122 slots=24
<br>
tebow123 slots=24
<br>
tebow124 slots=24
<br>
tebow125 slots=24
<br>
tebow126 slots=24
<br>
tebow127 slots=24
<br>
tebow128 slots=24
<br>
tebow129 slots=24
<br>
tebow130 slots=24
<br>
tebow131 slots=24
<br>
tebow132 slots=24
<br>
tebow133 slots=24
<br>
tebow134 slots=24
<br>
tebow135 slots=24
<br>

<br>
Before the allocation would follow as expected (i.e. &#226;&#128;&#147;np 25 &#226;&#128;&#147;machinefile above) would give 1 task on tebow, and 24 on tebow121, and if I assigned 361 the entire machinefile would be filled up.
<br>

<br>
However now it&#226;&#128;&#153;s not the case.  If I type &#226;&#128;&#156;mpirun -np 24 -machinefile burn_machs/mach_burn_24s hostname&#226;&#128;&#157;, I get the following result:
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow121
<br>
tebow
<br>
tebow121
<br>
tebow121
<br>
tebow121
<br>
tebow121
<br>
tebow121
<br>
tebow121
<br>
tebow121
<br>

<br>
Now there are 16 cores on &#226;&#128;&#156;tebow&#226;&#128;&#157;, but I only requested one task in the machinefile (so I assume).  And furthermore if I request 361 I get the following catastrophic error:
<br>

<br>
--------------------------------------------------------------------------
<br>
WARNING: a request was made to bind a process. While the system
<br>
supports binding the process itself, at least one node does NOT
<br>
support binding memory to the process location.
<br>

<br>
&nbsp;&nbsp;Node:  tebow124
<br>

<br>
This usually is due to not having the required NUMA support installed
<br>
on the node. In some Linux distributions, the required support is
<br>
contained in the libnumactl and libnumactl-devel packages.
<br>
This is a warning only; your job will continue, though performance may be degraded.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>

<br>
&nbsp;&nbsp;&nbsp;Bind to:     NONE
<br>
&nbsp;&nbsp;&nbsp;Node:        tebow125
<br>
&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;#cpus:       1
<br>

<br>
You can override this protection by adding the &quot;overload-allowed&quot;
<br>
option to your binding directive.
<br>
--------------------------------------------------------------------------
<br>

<br>
All the compute nodes (tebow121-135) have 24+ cores on them.  I believe some configuration change has occurred which has duped the system into trying to go off the reported number of cores, but even then it seems to be getting things wrong (i.e. not pulling the right number of cores).
<br>

<br>
The config line use previously (which worked without issue according to the machinefile specification) was:
<br>
&nbsp;&nbsp;$ ./configure --prefix=/opt/openmpi/openmpi-1.6.5 --with-openib --with-openib-libdir=/usr/lib64 CC=icc F77=ifort FC=ifort CXX=icpc
<br>

<br>
The config line which I now use is:
<br>
./configure --prefix=/opt/openmpi/openmpi-1.8.4 --with-verbs --with-verbs-libdir=/usr/lib64 CC=icc F77=ifort FC=ifort CXX=icpc
<br>

<br>
I&#226;&#128;&#153;m at a loss where to look for the solution, any help is appreciated.
<br>

<br>
--Jack
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26383.php">http://www.open-mpi.org/community/lists/users/2015/02/26383.php</a>
<br>

<br>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26390/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26390/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26391.php">Nathan Hjelm: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Previous message:</strong> <a href="26389.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
<li><strong>In reply to:</strong> <a href="26388.php">Galloway, Jack D: "Re: [OMPI users] machinefile binding error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26392.php">Ralph Castain: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>Reply:</strong> <a href="26392.php">Ralph Castain: "Re: [OMPI users] machinefile binding error"</a>
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
