<?
$subject_val = "[OMPI users] MPI broadcast test fails only when I run within a torque job";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 19:35:14 2010" -->
<!-- isoreceived="20100728233514" -->
<!-- sent="Wed, 28 Jul 2010 18:35:09 -0500" -->
<!-- isosent="20100728233509" -->
<!-- name="Rahul Nabar" -->
<!-- email="rpnabar_at_[hidden]" -->
<!-- subject="[OMPI users] MPI broadcast test fails only when I run within a torque job" -->
<!-- id="AANLkTinbr_0gqkB3Y+_u504gRJJTaw0uVcZsk8ursO4X_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI broadcast test fails only when I run within a torque job<br>
<strong>From:</strong> Rahul Nabar (<em>rpnabar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 19:35:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13860.php">David Akin: "[OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Previous message:</strong> <a href="13858.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure if this is a torque issue or an MPI issue. If I log in to
<br>
a compute-node and run the standard mpi broadcast  test it returns no
<br>
error but if I run it through PBS/Torque I get an error (see below)
<br>
The nodes that return the error are fairly random. Even the same set
<br>
of nodes will run a test once and then the next time they fail.  In
<br>
case it matters, these nodes have dual interfaces: 1GigE and 10GigE.
<br>
All tests I was trying on the same group of 32 nodes.
<br>
<p>If I login to the node (just as a regular user ; not as root) then the
<br>
test runs fine. No errors at all.
<br>
<p>Is there a timeout somewhere? Or some such issue? Not at all sure why
<br>
this is happening....
<br>
<p>Things I've verified. ulimit seems ok. I explicitly have set the
<br>
ulimit within the pbs init script as well as in the ssh script that
<br>
spawns it.
<br>
<p>[root_at_eu013 ~]# grep ulimit /etc/init.d/pbs
<br>
ulimit -l unlimited
<br>
[root_at_eu013 ~]# grep ulimit /etc/init.d/sshd
<br>
ulimit -l unlimited
<br>
<p><p>ssh eu013 ulimit -l
<br>
unlimited
<br>
<p>Even if I put a &quot;ulimit -l&quot; in a PBS job it does return unlimited.
<br>
<p>&quot;cat /sys/class/infiniband/cxgb3_0/proto_stats/tcpRetransSegs&quot; returns
<br>
a zero on all nodes concerned. Even ifconfig does not return any Error
<br>
packets.
<br>
<p><pre>
-- 
Rahul
#############################################################3
PBS command:
mpirun -mca btl openib,sm,self -mca orte_base_help_aggregate 0
/opt/src/mpitests/imb/src/IMB-MPI1 bcast
-----------------------------through
PBS---------------------------------------------
The RDMA CM returned an event error while attempting to make a
connection.  This type of error usually indicates a network
configuration error.
  Local host:   eu013
  Local device: cxgb3_0
  Error name:   RDMA_CM_EVENT_UNREACHABLE
  Peer:         eu010
Your MPI job will now abort, sorry.
-------------------------------------------------------------------------
#######################################
Run  physically from a compute node
mpirun -host eu001,eu002,eu003,eu004,eu005,eu006,eu007,eu008,eu009,eu010,eu011,eu012,eu013,eu014,eu015,eu016,eu017,eu018,eu019,eu010,eu011,eu012,eu013,eu014,eu015,eu016,eu017,eu018,eu019,eu020,eu021,eu022,eu023,eu024,eu025,eu026,eu027,eu028,eu029,eu030,eu031,eu032
-mca btl openib,sm,self -mca orte_base_help_aggregate 0
/opt/src/mpitests/imb/src/IMB-MPI1 bcast
#----------------------------------------------------------------
# Benchmarking Bcast
# #processes = 42
#----------------------------------------------------------------
       #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
            0         1000         0.02         0.03         0.02
            1         1000       170.70       170.76       170.74
            2         1000       171.04       171.10       171.08
            4         1000       171.09       171.15       171.13
            8         1000       171.05       171.13       171.10
           16         1000       171.03       171.10       171.07
           32         1000        31.93        32.00        31.98
           64         1000        28.86        29.02        28.99
          128         1000        29.34        29.40        29.38
          256         1000        29.90        29.98        29.95
          512         1000        30.39        30.47        30.44
         1024         1000        31.59        31.67        31.64
         2048         1000        38.15        38.26        38.23
         4096         1000       187.59       187.75       187.68
         8192         1000       208.26       208.41       208.37
        16384         1000       395.47       395.71       395.61
        32768         1000      9360.99      9441.36      9416.47
        65536          400     10522.09     11003.08     10781.73
       131072          299     16971.71     17647.29     17329.27
       262144          160     15404.01     17131.36     15816.46
       524288           80      2659.56      4258.90      3002.04
      1048576           40      4305.72      5305.33      5219.00
      2097152           20      2472.34     10711.80      8599.28
      4194304           10      6275.51     20791.20     13687.10
# All processes entering MPI_Finalize
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13860.php">David Akin: "[OMPI users] Hybrid OpenMPI / OpenMP run pins OpenMP threads to a single core"</a>
<li><strong>Previous message:</strong> <a href="13858.php">Gus Correa: "Re: [OMPI users] openMPI shared with NFS, but says different version"</a>
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
