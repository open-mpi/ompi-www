<?
$subject_val = "[OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 09:17:16 2015" -->
<!-- isoreceived="20150410131716" -->
<!-- sent="Fri, 10 Apr 2015 09:16:41 -0400" -->
<!-- isosent="20150410131641" -->
<!-- name="twurgl_at_[hidden]" -->
<!-- email="twurgl_at_[hidden]" -->
<!-- subject="[OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4" -->
<!-- id="y9bvbh4kts6.fsf_at_rds4020.akr.goodyear.com" -->
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
<strong>Subject:</strong> [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4<br>
<strong>From:</strong> <a href="mailto:twurgl_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Assigning%20processes%20to%20cores%201.4.2,%201.6.4%20and%201.8.4"><em>twurgl_at_[hidden]</em></a><br>
<strong>Date:</strong> 2015-04-10 09:16:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17206.php">Nick Papior Andersen: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="17204.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17206.php">Nick Papior Andersen: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17206.php">Nick Papior Andersen: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We can't seem to get &quot;processor affinity&quot; using 1.6.4 or newer OpenMPI. 
<br>
<p>Note this is a 2 socket machine with 8 cores per socket
<br>
<p>We had compiled OpenMPI 1.4.2 with the following configure options:
<br>
<p>===========================================================================
<br>
export CC=/apps/share/intel/v14.0.4.211/bin/icc
<br>
export CXX=/apps/share/intel/v14.0.4.211/bin/icpc
<br>
export FC=/apps/share/intel/v14.0.4.211/bin/ifort
<br>
<p>version=1.4.2.I1404211
<br>
<p>./configure \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--prefix=/apps/share/openmpi/$version \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--disable-shared \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-static \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-shared=no \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-openib \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-libnuma=/usr \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpirun-prefix-by-default \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-memory-manager=none \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-tm=/apps/share/TORQUE/current/Linux
<br>
===========================================================================
<br>
<p>and then used this mpirun command (where we used 8 cores):
<br>
<p>===========================================================================
<br>
/apps/share/openmpi/1.4.2.I1404211/bin/mpirun \
<br>
--prefix /apps/share/openmpi/1.4.2.I1404211 \
<br>
--mca mpi_paffinity_alone 1 \
<br>
--mca btl openib,tcp,sm,self \
<br>
--x LD_LIBRARY_PATH \
<br>
{model args}
<br>
===========================================================================
<br>
<p>And when we checked the process map, it looks like this:
<br>
<p>&nbsp;&nbsp;PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
<br>
22232 prog1                 0    469.9M [ 469.9M     0      0      0      0      0  ]
<br>
22233 prog1                 1    479.0M [   4.0M 475.0M     0      0      0      0  ]
<br>
22234 prog1                 2    516.7M [ 516.7M     0      0      0      0      0  ]
<br>
22235 prog1                 3    485.4M [   8.0M 477.4M     0      0      0      0  ]
<br>
22236 prog1                 4    482.6M [ 482.6M     0      0      0      0      0  ]
<br>
22237 prog1                 5    486.6M [   6.0M 480.6M     0      0      0      0  ]
<br>
22238 prog1                 6    481.3M [ 481.3M     0      0      0      0      0  ]
<br>
22239 prog1                 7    419.4M [   8.0M 411.4M     0      0      0      0  ]
<br>
<p>Now with 1.6.4 and higher, we did the following:
<br>
===========================================================================
<br>
export CC=/apps/share/intel/v14.0.4.211/bin/icc
<br>
export CXX=/apps/share/intel/v14.0.4.211/bin/icpc
<br>
export FC=/apps/share/intel/v14.0.4.211/bin/ifort
<br>
<p>version=1.6.4.I1404211
<br>
<p>./configure \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--disable-vt \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--prefix=/apps/share/openmpi/$version \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--disable-shared \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-static \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-verbs \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpirun-prefix-by-default \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-memory-manager=none \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-hwloc \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-ext \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-tm=/apps/share/TORQUE/current/Linux
<br>
===========================================================================
<br>
<p>We've tried the same mpirun command, with -bind-to-core, with -bind-to-core -bycore etc
<br>
and I can't seem to get the right combination of args to get the same behavior as 1.4.2.
<br>
<p>We get the following process map (this output is with mpirun args --bind-to-socket
<br>
--mca mpi_paffinity_alone 1):
<br>
<p>&nbsp;&nbsp;PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
<br>
24176 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.2M [  60.2M     0      0      0      0      0  ]
<br>
24177 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
<br>
24178 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
<br>
24179 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
<br>
24180 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
<br>
24181 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
<br>
24182 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
<br>
24183 prog1           0,2,4,6,8,10,12,14,16,18,20,22,24,26,28,30     60.5M [  60.5M     0      0      0      0      0  ]
<br>
<p>here is the map using just --mca mpi_paffinity_alone 1 
<br>
<p>&nbsp;&nbsp;PID COMMAND         CPUMASK     TOTAL [     N0     N1     N2     N3     N4     N5 ]
<br>
25846 prog1              0,16     60.6M [  60.6M     0      0      0      0      0  ]
<br>
25847 prog1              2,18     60.6M [  60.6M     0      0      0      0      0  ]
<br>
25848 prog1              4,20     60.6M [  60.6M     0      0      0      0      0  ]
<br>
25849 prog1              6,22     60.6M [  60.6M     0      0      0      0      0  ]
<br>
25850 prog1              8,24     60.6M [  60.6M     0      0      0      0      0  ]
<br>
25851 prog1             10,26     60.6M [  60.6M     0      0      0      0      0  ]
<br>
25852 prog1             12,28     60.6M [  60.6M     0      0      0      0      0  ]
<br>
25853 prog1             14,30     60.6M [  60.6M     0      0      0      0      0  ]
<br>
<p>I figure I am compiling incorrectly or using the wrong mpirun args.  
<br>
<p>Can someone tell me how to duplicate the behavior of 1.4.2 regarding binding the processes to cores?  
<br>
<p>Any help appreciated..
<br>
<p>thanks
<br>
<p>tom
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17206.php">Nick Papior Andersen: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="17204.php">Paul Hargrove: "Re: [OMPI devel] 1.8.5rc1 is ready for testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17206.php">Nick Papior Andersen: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
<li><strong>Reply:</strong> <a href="17206.php">Nick Papior Andersen: "Re: [OMPI devel] Assigning processes to cores 1.4.2, 1.6.4 and 1.8.4"</a>
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
