<?
$subject_val = "[OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 14:29:45 2015" -->
<!-- isoreceived="20150126192945" -->
<!-- sent="Mon, 26 Jan 2015 11:29:37 -0800" -->
<!-- isosent="20150126192937" -->
<!-- name="Evan" -->
<!-- email="evan.samanas_at_[hidden]" -->
<!-- subject="[OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host" -->
<!-- id="54C695A1.3080307_at_gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host<br>
<strong>From:</strong> Evan (<em>evan.samanas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-26 14:29:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26236.php">Kris Kersten: "[OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
<li><strong>Previous message:</strong> <a href="26234.php">Oscar Vega-Gisbert: "Re: [OMPI users] Segfault in mpi-java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26252.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26252.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26271.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am using OpenMPI 1.8.4 on a Ubuntu 14.04 machine and 5 Ubuntu 12.04 
<br>
machines.  I am using ssh to launch MPI jobs and I'm able to run simple 
<br>
programs like 'mpirun -np 8 --host localhost,pachy1 hostname' and get 
<br>
the expected output (pachy1 being an entry in my /etc/hosts file).
<br>
<p>I started using MPI_Comm_spawn in my app with the intent of NOT calling 
<br>
mpirun to launch the program that calls MPI_Comm_spawn (my attempt at 
<br>
using the Singleton MPI_INIT pattern described in 10.5.2 of MPI 3.0 
<br>
standard).  The app needs to launch an MPI job of a given size from a 
<br>
given hostfile, where the job needs to report some info back to the app, 
<br>
so it seemed MPI_Comm_spawn was my best bet.  The app is only rarely 
<br>
going to be used this way, thus mpirun not being used to launch the app 
<br>
that is the parent in the MPI_Comm_spawn operation.  This pattern works 
<br>
fine if the only entries in the hostfile are 'localhost'.  However if I 
<br>
add a host that isn't local I get a segmentation fault from the orted 
<br>
process.
<br>
<p>In any case, I distilled my example down as small as I could.  I've 
<br>
attached the C code of the master and the hostfile I'm using. Here's the 
<br>
output:
<br>
<p>evan_at_lasarti:~/devel/toy_progs/mpi_spawn$ ./master 
<br>
~/mpi/test_distributed.hostfile
<br>
[lasarti:32020] [[21014,1],0] FORKING HNP: orted --hnp --set-sid 
<br>
--report-uri 14 --singleton-died-pipe 15 -mca state_novm_select 1 -mca 
<br>
ess_base_jobid 1377173504
<br>
[lasarti:32022] *** Process received signal ***
<br>
[lasarti:32022] Signal: Segmentation fault (11)
<br>
[lasarti:32022] Signal code: Address not mapped (1)
<br>
[lasarti:32022] Failing at address: (nil)
<br>
[lasarti:32022] [ 0] 
<br>
/lib/x86_64-linux-gnu/libpthread.so.0(+0x10340)[0x7f07af039340]
<br>
[lasarti:32022] [ 1] 
<br>
/opt/openmpi-1.8.4/lib/libopen-pal.so.6(opal_hwloc191_hwloc_get_obj_by_depth+0x32)[0x7f07aea227c2]
<br>
[lasarti:32022] [ 2] 
<br>
/opt/openmpi-1.8.4/lib/libopen-pal.so.6(opal_hwloc_base_get_nbobjs_by_type+0x90)[0x7f07ae9f5430]
<br>
[lasarti:32022] [ 3] 
<br>
/opt/openmpi-1.8.4/lib/openmpi/mca_rmaps_round_robin.so(orte_rmaps_rr_byobj+0x134)[0x7f07ab2fb154]
<br>
[lasarti:32022] [ 4] 
<br>
/opt/openmpi-1.8.4/lib/openmpi/mca_rmaps_round_robin.so(+0x12c6)[0x7f07ab2fa2c6]
<br>
[lasarti:32022] [ 5] 
<br>
/opt/openmpi-1.8.4/lib/libopen-rte.so.7(orte_rmaps_base_map_job+0x21a)[0x7f07af299f7a]
<br>
[lasarti:32022] [ 6] 
<br>
/opt/openmpi-1.8.4/lib/libopen-pal.so.6(opal_libevent2021_event_base_loop+0x6e4)[0x7f07ae9e7034]
<br>
[lasarti:32022] [ 7] 
<br>
/opt/openmpi-1.8.4/lib/libopen-rte.so.7(orte_daemon+0xdff)[0x7f07af27a86f]
<br>
[lasarti:32022] [ 8] orted(main+0x47)[0x400877]
<br>
[lasarti:32022] [ 9] 
<br>
/lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)[0x7f07aec84ec5]
<br>
[lasarti:32022] [10] orted[0x4008cb]
<br>
[lasarti:32022] *** End of error message ***
<br>
<p>If I launch 'master.c' using mpirun, I don't get a segmentation fault, 
<br>
but it doesn't seem to be launching the process on anything more than 
<br>
localhost, no matter what hostfile I give it.
<br>
<p>For what it's worth, I fully expected to debug some path issues 
<br>
regarding the binary I wanted to launch with MPI_Comm_spawn when I used 
<br>
this distributed, but this error at first glance doesn't appear to have 
<br>
anything to do with that.  I'm sure this is something silly I'm doing 
<br>
wrong, but I don't really know how to debug this further given this error.
<br>
<p>Evan
<br>
<p>P.S. Only including zipped config.log since the &quot;ompi_info -v ompi full 
<br>
--parsable&quot; command I got from <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> 
<br>
doesn't seem to work anymore.
<br>
<p><p><p>


<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26235/master.c">master.c</a>
</ul>
<!-- attachment="master.c" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26235/test_distributed.hostfile">test_distributed.hostfile</a>
</ul>
<!-- attachment="test_distributed.hostfile" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26235/config.log.tar.bz2">config.log.tar.bz2</a>
</ul>
<!-- attachment="config.log.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26236.php">Kris Kersten: "[OMPI users] TCP BTL and virtual network interfaces, bug #3339"</a>
<li><strong>Previous message:</strong> <a href="26234.php">Oscar Vega-Gisbert: "Re: [OMPI users] Segfault in mpi-java"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26252.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26252.php">Ralph Castain: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/02/26271.php">Evan Samanas: "Re: [OMPI users] orted seg fault when using MPI_Comm_spawn on more than one host"</a>
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
