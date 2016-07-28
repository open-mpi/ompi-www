<?
$subject_val = "[hwloc-users] Strange binding issue on 40 core nodes and cgroups";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 16:03:40 2012" -->
<!-- isoreceived="20121102200340" -->
<!-- sent="Fri, 2 Nov 2012 16:03:34 -0400" -->
<!-- isosent="20121102200334" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[hwloc-users] Strange binding issue on 40 core nodes and cgroups" -->
<!-- id="703325E2-5FC4-454F-B3B6-8881C52DF132_at_umich.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-users] Strange binding issue on 40 core nodes and cgroups<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-02 16:03:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0758.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/10/0756.php">Samuel Thibault: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0758.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>Reply:</strong> <a href="0758.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This isn't a hwloc problem exactly, but maybe you can shed some insight.
<br>
<p>We have some 4 socket 10 core = 40 core nodes, HT off:
<br>
<p>depth 0:	1 Machine (type #1)
<br>
&nbsp;depth 1:	4 NUMANodes (type #2)
<br>
&nbsp;&nbsp;depth 2:	4 Sockets (type #3)
<br>
&nbsp;&nbsp;&nbsp;depth 3:	4 Caches (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;depth 4:	40 Caches (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 5:	40 Caches (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 6:	40 Cores (type #5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 7:	40 PUs (type #6)
<br>
<p><p>We run rhel 6.3  we use torque to create cgroups for jobs.  I get the following cgroup for this job  all 12 cores for the job are on one node:
<br>
cat /dev/cpuset/torque/8845236.nyx.engin.umich.edu/cpus 
<br>
0-1,4-5,8,12,16,20,24,28,32,36
<br>
<p>Not all nicely spaced, but 12 cores
<br>
<p>I then start a code, even a simple serial code with openmpi 1.6.0 on all 12 cores:
<br>
mpirun ./stream
<br>
<p>45521 brockp    20   0 1885m 1.8g  456 R 100.0  0.2   4:02.72 stream             
<br>
45522 brockp    20   0 1885m 1.8g  456 R 100.0  0.2   1:46.08 stream             
<br>
45525 brockp    20   0 1885m 1.8g  456 R 100.0  0.2   4:02.72 stream             
<br>
45526 brockp    20   0 1885m 1.8g  456 R 100.0  0.2   1:46.07 stream             
<br>
45527 brockp    20   0 1885m 1.8g  456 R 100.0  0.2   4:02.71 stream             
<br>
45528 brockp    20   0 1885m 1.8g  456 R 100.0  0.2   4:02.71 stream             
<br>
45532 brockp    20   0 1885m 1.8g  456 R 100.0  0.2   1:46.05 stream             
<br>
45529 brockp    20   0 1885m 1.8g  456 R 99.2  0.2   4:02.70 stream              
<br>
45530 brockp    20   0 1885m 1.8g  456 R 99.2  0.2   4:02.70 stream              
<br>
45531 brockp    20   0 1885m 1.8g  456 R 33.6  0.2   1:20.89 stream              
<br>
45523 brockp    20   0 1885m 1.8g  456 R 32.8  0.2   1:20.90 stream              
<br>
45524 brockp    20   0 1885m 1.8g  456 R 32.8  0.2   1:20.89 stream   
<br>
<p>Note the processes that are not running at 100% cpu, 
<br>
<p>hwloc-bind  --get --pid 45523
<br>
0x00000011,0x11111133
<br>
&lt;the same mask is reported for all 12 processes&gt;
<br>
<p>hwloc-calc 0x00000011,0x11111133 --intersect PU
<br>
0,1,2,3,4,5,6,7,8,9,10,11
<br>
<p>So all ranks in the job should see all 12 cores.  The same cgroup is reported by /proc/&lt;pid&gt;/cgroup
<br>
<p>Not only that I can make things work by forcing binding in the mpi launcher:
<br>
mpirun -bind-to-core ./stream
<br>
<p>46886 brockp    20   0 1885m 1.8g  456 R 99.8  0.2   0:15.49 stream              
<br>
46887 brockp    20   0 1885m 1.8g  456 R 99.8  0.2   0:15.49 stream              
<br>
46888 brockp    20   0 1885m 1.8g  456 R 99.8  0.2   0:15.48 stream              
<br>
46889 brockp    20   0 1885m 1.8g  456 R 99.8  0.2   0:15.49 stream              
<br>
46890 brockp    20   0 1885m 1.8g  456 R 99.8  0.2   0:15.48 stream              
<br>
46891 brockp    20   0 1885m 1.8g  456 R 99.8  0.2   0:15.48 stream              
<br>
46892 brockp    20   0 1885m 1.8g  456 R 99.8  0.2   0:15.47 stream              
<br>
46893 brockp    20   0 1885m 1.8g  456 R 99.8  0.2   0:15.47 stream              
<br>
46894 brockp    20   0 1885m 1.8g  456 R 99.8  0.2   0:15.47 stream              
<br>
46895 brockp    20   0 1885m 1.8g  456 R 99.8  0.2   0:15.47 stream              
<br>
46896 brockp    20   0 1885m 1.8g  456 R 99.8  0.2   0:15.46 stream              
<br>
46897 brockp    20   0 1885m 1.8g  456 R 99.8  0.2   0:15.46 stream 
<br>
<p>Things are now working as expected, and I should stress this is inside the same torque job and cgroup that I started with.
<br>
<p>A multi threaded version of the code does use close to 12 cores as expected.
<br>
<p>If I cervumvent out batch system and the cgroups a normal mpirun ./stream  does start 12 processes that consume a full 100% core. 
<br>
<p>Thoughts?  This is really odd linux scheduler behavior.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0758.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/10/0756.php">Samuel Thibault: "Re: [hwloc-users] How do I access CPUModel info string"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0758.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
<li><strong>Reply:</strong> <a href="0758.php">Brice Goglin: "Re: [hwloc-users] Strange binding issue on 40 core nodes and cgroups"</a>
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
