<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  9 23:31:27 2006" -->
<!-- isoreceived="20061110043127" -->
<!-- sent="Fri, 10 Nov 2006 15:34:05 +1100" -->
<!-- isosent="20061110043405" -->
<!-- name="Manal Helal" -->
<!-- email="manalorama_at_[hidden]" -->
<!-- subject="[OMPI users] debugging problem" -->
<!-- id="4554013D.6080905_at_gmail.com" -->
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
<strong>From:</strong> Manal Helal (<em>manalorama_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-09 23:34:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2170.php">Ralph Castain: "Re: [OMPI users] debugging problem"</a>
<li><strong>Previous message:</strong> <a href="2168.php">Kenneth Chiu: "Re: [OMPI users] Where does the output for	-mca	coll_tuned_base_verbose go?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2170.php">Ralph Castain: "Re: [OMPI users] debugging problem"</a>
<li><strong>Reply:</strong> <a href="2170.php">Ralph Castain: "Re: [OMPI users] debugging problem"</a>
<li><strong>Maybe reply:</strong> <a href="2172.php">Manal Helal: "Re: [OMPI users] debugging problem"</a>
<li><strong>Maybe reply:</strong> <a href="2173.php">Ralph Castain: "Re: [OMPI users] debugging problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I am trying to run the following command:
<br>
<p>&nbsp;&nbsp;mpirun -np XX -d xterm -e gdb &lt;myprog&gt; &lt;myargs&gt;
<br>
<p><p>and I am receiving these errors:
<br>
<p>*****************
<br>
&nbsp;&nbsp;[leo01:02141] [0,0,0] setting up session dir with
<br>
[leo01:02141]   universe default-universe
<br>
[leo01:02141]   user mhelal
<br>
[leo01:02141]   host leo01
<br>
[leo01:02141]   jobid 0
<br>
[leo01:02141]   procid 0
<br>
[leo01:02141] procdir:
<br>
/tmp/openmpi-sessions-mhelal_at_leo01_0/default-universe/0/0
<br>
[leo01:02141] jobdir:
<br>
/tmp/openmpi-sessions-mhelal_at_leo01_0/default-universe/0
<br>
[leo01:02141] unidir:
<br>
/tmp/openmpi-sessions-mhelal_at_leo01_0/default-universe
<br>
[leo01:02141] top: openmpi-sessions-mhelal_at_leo01_0
<br>
[leo01:02141] tmp: /tmp
<br>
[leo01:02141] [0,0,0] contact_file
<br>
/tmp/openmpi-sessions-mhelal_at_leo01_0/default- universe/universe-setup.txt
<br>
[leo01:02141] [0,0,0] wrote setup file
<br>
[leo01:02141] pls:rsh: local csh: 0, local bash: 1
<br>
[leo01:02141] pls:rsh: assuming same remote shell as local shell
<br>
[leo01:02141] pls:rsh: remote csh: 0, remote bash: 1
<br>
[leo01:02141] pls:rsh: final template argv:
<br>
[leo01:02141] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug
<br>
--bootproxy 1 - -name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename
<br>
&lt;template&gt; --universe m helal_at_leo01:default-universe --nsreplica
<br>
&quot;0.0.0;tcp://129.94.242.77:40738&quot; --gpr replica
<br>
&quot;0.0.0;tcp://129.94.242.77:40738&quot; --mpi-call-yield 0
<br>
[leo01:02141] pls:rsh: launching on node localhost
<br>
[leo01:02141] pls:rsh: oversubscribed -- setting mpi_yield_when_idle to 1
<br>
(1 4)
<br>
[leo01:02141] pls:rsh: localhost is a LOCAL node
<br>
[leo01:02141] pls:rsh: changing to directory /import/eno/1/mhelal
<br>
[leo01:02141] pls:rsh: executing: orted --debug --bootproxy 1 --name 0.0.1
<br>
--num _procs 2 --vpid_start 0 --nodename localhost --universe
<br>
mhelal_at_leo01:default-uni verse --nsreplica
<br>
&quot;0.0.0;tcp://129.94.242.77:40738&quot; --gprreplica &quot;0.0.0;tcp://12
<br>
9.94.242.77:40738&quot; --mpi-call-yield 1
<br>
[leo01:02143] [0,0,1] setting up session dir with
<br>
[leo01:02143]   universe default-universe
<br>
[leo01:02143]   user mhelal
<br>
[leo01:02143]   host localhost
<br>
[leo01:02143]   jobid 0
<br>
[leo01:02143]   procid 1
<br>
[leo01:02143] procdir:
<br>
/tmp/openmpi-sessions-mhelal_at_localhost_0/default-universe /0/1
<br>
[leo01:02143] jobdir:
<br>
/tmp/openmpi-sessions-mhelal_at_localhost_0/default-universe/ 0
<br>
[leo01:02143] unidir:
<br>
/tmp/openmpi-sessions-mhelal_at_localhost_0/default-universe
<br>
[leo01:02143] top: openmpi-sessions-mhelal_at_localhost_0
<br>
[leo01:02143] tmp: /tmp
<br>
[leo01:02143] sess_dir_finalize: proc session dir not empty - leaving
<br>
[leo01:02143] sess_dir_finalize: proc session dir not empty - leaving
<br>
[leo01:02143] sess_dir_finalize: proc session dir not empty - leaving
<br>
[leo01:02143] sess_dir_finalize: proc session dir not empty - leaving
<br>
[leo01:02143] orted: job_state_callback(jobid = 1, state =
<br>
ORTE_PROC_STATE_TERMI NATED)
<br>
[leo01:02143] sess_dir_finalize: job session dir not empty - leaving
<br>
[leo01:02143] sess_dir_finalize: found proc session dir empty - deleting
<br>
[leo01:02143] sess_dir_finalize: found job session dir empty - deleting
<br>
[leo01:02143] sess_dir_finalize: found univ session dir empty - deleting
<br>
[leo01:02143] sess_dir_finalize: found top session dir empty - deleting
<br>
<p>****************
<br>
<p>Will you please have a look, and advise if possible where I could change
<br>
these paths, when I checked the paths, it was not there all
<br>
<p>Best Regards,
<br>
<p>Manal
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2170.php">Ralph Castain: "Re: [OMPI users] debugging problem"</a>
<li><strong>Previous message:</strong> <a href="2168.php">Kenneth Chiu: "Re: [OMPI users] Where does the output for	-mca	coll_tuned_base_verbose go?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2170.php">Ralph Castain: "Re: [OMPI users] debugging problem"</a>
<li><strong>Reply:</strong> <a href="2170.php">Ralph Castain: "Re: [OMPI users] debugging problem"</a>
<li><strong>Maybe reply:</strong> <a href="2172.php">Manal Helal: "Re: [OMPI users] debugging problem"</a>
<li><strong>Maybe reply:</strong> <a href="2173.php">Ralph Castain: "Re: [OMPI users] debugging problem"</a>
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
