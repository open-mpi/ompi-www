<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  9 23:59:06 2006" -->
<!-- isoreceived="20061110045906" -->
<!-- sent="Thu, 09 Nov 2006 21:58:57 -0700" -->
<!-- isosent="20061110045857" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] debugging problem" -->
<!-- id="C1795521.3D5%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4554013D.6080905_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-09 23:58:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2171.php">Brock Palen: "[OMPI users] problems with gm support on OSX PPC"</a>
<li><strong>Previous message:</strong> <a href="2169.php">Manal Helal: "[OMPI users] debugging problem"</a>
<li><strong>In reply to:</strong> <a href="2169.php">Manal Helal: "[OMPI users] debugging problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2172.php">Manal Helal: "Re: [OMPI users] debugging problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Manal
<br>
<p>The output you are seeing is caused by the &quot;-d&quot; flag you put in the mpirun
<br>
command line - it shows normal operation.
<br>
<p>Could you tell us something more about why you believe there was an error?
<br>
<p>Ralph
<br>
<p><p><p>On 11/9/06 9:34 PM, &quot;Manal Helal&quot; &lt;manalorama_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run the following command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   mpirun -np XX -d xterm -e gdb &lt;myprog&gt; &lt;myargs&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and I am receiving these errors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *****************
</span><br>
<span class="quotelev1">&gt;   [leo01:02141] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [leo01:02141]   universe default-universe
</span><br>
<span class="quotelev1">&gt; [leo01:02141]   user mhelal
</span><br>
<span class="quotelev1">&gt; [leo01:02141]   host leo01
</span><br>
<span class="quotelev1">&gt; [leo01:02141]   jobid 0
</span><br>
<span class="quotelev1">&gt; [leo01:02141]   procid 0
</span><br>
<span class="quotelev1">&gt; [leo01:02141] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-mhelal_at_leo01_0/default-universe/0/0
</span><br>
<span class="quotelev1">&gt; [leo01:02141] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-mhelal_at_leo01_0/default-universe/0
</span><br>
<span class="quotelev1">&gt; [leo01:02141] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-mhelal_at_leo01_0/default-universe
</span><br>
<span class="quotelev1">&gt; [leo01:02141] top: openmpi-sessions-mhelal_at_leo01_0
</span><br>
<span class="quotelev1">&gt; [leo01:02141] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [leo01:02141] [0,0,0] contact_file
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-mhelal_at_leo01_0/default- universe/universe-setup.txt
</span><br>
<span class="quotelev1">&gt; [leo01:02141] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1">&gt; [leo01:02141] pls:rsh: local csh: 0, local bash: 1
</span><br>
<span class="quotelev1">&gt; [leo01:02141] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev1">&gt; [leo01:02141] pls:rsh: remote csh: 0, remote bash: 1
</span><br>
<span class="quotelev1">&gt; [leo01:02141] pls:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt; [leo01:02141] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug
</span><br>
<span class="quotelev1">&gt; --bootproxy 1 - -name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename
</span><br>
<span class="quotelev1">&gt; &lt;template&gt; --universe m helal_at_leo01:default-universe --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://129.94.242.77:40738&quot; --gpr replica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://129.94.242.77:40738&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev1">&gt; [leo01:02141] pls:rsh: launching on node localhost
</span><br>
<span class="quotelev1">&gt; [leo01:02141] pls:rsh: oversubscribed -- setting mpi_yield_when_idle to 1
</span><br>
<span class="quotelev1">&gt; (1 4)
</span><br>
<span class="quotelev1">&gt; [leo01:02141] pls:rsh: localhost is a LOCAL node
</span><br>
<span class="quotelev1">&gt; [leo01:02141] pls:rsh: changing to directory /import/eno/1/mhelal
</span><br>
<span class="quotelev1">&gt; [leo01:02141] pls:rsh: executing: orted --debug --bootproxy 1 --name 0.0.1
</span><br>
<span class="quotelev1">&gt; --num _procs 2 --vpid_start 0 --nodename localhost --universe
</span><br>
<span class="quotelev1">&gt; mhelal_at_leo01:default-uni verse --nsreplica
</span><br>
<span class="quotelev1">&gt; &quot;0.0.0;tcp://129.94.242.77:40738&quot; --gprreplica &quot;0.0.0;tcp://12
</span><br>
<span class="quotelev1">&gt; 9.94.242.77:40738&quot; --mpi-call-yield 1
</span><br>
<span class="quotelev1">&gt; [leo01:02143] [0,0,1] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [leo01:02143]   universe default-universe
</span><br>
<span class="quotelev1">&gt; [leo01:02143]   user mhelal
</span><br>
<span class="quotelev1">&gt; [leo01:02143]   host localhost
</span><br>
<span class="quotelev1">&gt; [leo01:02143]   jobid 0
</span><br>
<span class="quotelev1">&gt; [leo01:02143]   procid 1
</span><br>
<span class="quotelev1">&gt; [leo01:02143] procdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-mhelal_at_localhost_0/default-universe /0/1
</span><br>
<span class="quotelev1">&gt; [leo01:02143] jobdir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-mhelal_at_localhost_0/default-universe/ 0
</span><br>
<span class="quotelev1">&gt; [leo01:02143] unidir:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-mhelal_at_localhost_0/default-universe
</span><br>
<span class="quotelev1">&gt; [leo01:02143] top: openmpi-sessions-mhelal_at_localhost_0
</span><br>
<span class="quotelev1">&gt; [leo01:02143] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [leo01:02143] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [leo01:02143] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [leo01:02143] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [leo01:02143] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [leo01:02143] orted: job_state_callback(jobid = 1, state =
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_STATE_TERMI NATED)
</span><br>
<span class="quotelev1">&gt; [leo01:02143] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [leo01:02143] sess_dir_finalize: found proc session dir empty - deleting
</span><br>
<span class="quotelev1">&gt; [leo01:02143] sess_dir_finalize: found job session dir empty - deleting
</span><br>
<span class="quotelev1">&gt; [leo01:02143] sess_dir_finalize: found univ session dir empty - deleting
</span><br>
<span class="quotelev1">&gt; [leo01:02143] sess_dir_finalize: found top session dir empty - deleting
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ****************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will you please have a look, and advise if possible where I could change
</span><br>
<span class="quotelev1">&gt; these paths, when I checked the paths, it was not there all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Manal
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2171.php">Brock Palen: "[OMPI users] problems with gm support on OSX PPC"</a>
<li><strong>Previous message:</strong> <a href="2169.php">Manal Helal: "[OMPI users] debugging problem"</a>
<li><strong>In reply to:</strong> <a href="2169.php">Manal Helal: "[OMPI users] debugging problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2172.php">Manal Helal: "Re: [OMPI users] debugging problem"</a>
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
