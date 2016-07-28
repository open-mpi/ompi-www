<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov 10 21:58:22 2006" -->
<!-- isoreceived="20061111025822" -->
<!-- sent="Fri, 10 Nov 2006 19:58:10 -0700" -->
<!-- isosent="20061111025810" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] debugging problem" -->
<!-- id="C17A8A52.432%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C17A8806.430%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-11-10 21:58:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2174.php">trasz_at_[hidden]: "[OMPI users] ScaLAPACK + BLACS + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2172.php">Manal Helal: "Re: [OMPI users] debugging problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="2169.php">Manal Helal: "[OMPI users] debugging problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2770.php">Jean-Christophe Mignot: "[OMPI users] running jobs on heteregenous clusters"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2770.php">Jean-Christophe Mignot: "[OMPI users] running jobs on heteregenous clusters"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My apologies, Manal &#173; I had a slight error on the command line I gave you.
<br>
It should be:
<br>
<p>mpirun &#139;np XX xterm &#173;e gdb &lt;myprog&gt;
<br>
<p>When the xterm windows pop-up, you will need to enter each of them and type
<br>
<p>run &lt;myargs&gt;
<br>
<p>To start the program. If you want gdb to use a specific directory, you can
<br>
pass the &#179;-d &lt;mydir&gt;&#178; argument in the first command line:
<br>
<p>mpirun &#139;np XX xterm &#173;e gdb &#173;d &gt;mydir&gt; &lt;myprog&gt;
<br>
<p>You would still need to issue the &#179;run&#178; command in each xterm window.
<br>
<p>Sorry for the error.
<br>
Ralph
<br>
<p><p>On 11/10/06 7:48 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Manal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No problem at all &#173; happy to be of some help. I believe the command line you
</span><br>
<span class="quotelev1">&gt; want is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun &#139;np XX xterm &#173;e gdb &lt;myprog&gt; &lt;myargs&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That will kickoff XX copies of xterm, each running gdb of your program in it.
</span><br>
<span class="quotelev1">&gt; We use that command ourselves quite often to help debug the system. Gdb should
</span><br>
<span class="quotelev1">&gt; let you switch between threads on each application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope that is of help
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/10/06 7:23 PM, &quot;Manal Helal&quot; &lt;manalorama_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; sorry about this, I understood that -d should make the output directory the
</span><br>
<span class="quotelev2">&gt;&gt; xterm, but my expectation, was to have separate xterms for each running
</span><br>
<span class="quotelev2">&gt;&gt; process that I can debug! am I completely off-track?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; where I can find more information about debugging multiprocess-multithreaded
</span><br>
<span class="quotelev2">&gt;&gt; programs using gdb? I have the -np processes created by mpirun, and then each
</span><br>
<span class="quotelev2">&gt;&gt; process has a number of threads running in parallel independently (some
</span><br>
<span class="quotelev2">&gt;&gt; semaphores are used anyway?) will I end up having different xterms for each
</span><br>
<span class="quotelev2">&gt;&gt; process (hopefully each thread within as well?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; I am  totally lost in this debugging scenario, and need basic help actually
</span><br>
<span class="quotelev2">&gt;&gt; about what to expect?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; thank you for your reply,
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards, 
</span><br>
<span class="quotelev2">&gt;&gt; Manal
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Date: Thu, 09 Nov 2006 21:58:57 -0700
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] debugging problem
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt; C1795521.3D5%rhc_at_[hidden] &lt;mailto:C1795521.3D5%rhc_at_[hidden]&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain;       charset=&quot;US-ASCII&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Manal
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The output you are seeing is caused by the &quot;-d&quot; flag you put in the mpirun
</span><br>
<span class="quotelev2">&gt;&gt; command line - it shows normal operation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could you tell us something more about why you believe there was an error?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 11/9/06 9:34 PM, &quot;Manal Helal&quot; &lt; manalorama_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:manalorama_at_[hidden]&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hi
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I am trying to run the following command:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   mpirun -np XX -d xterm -e gdb &lt;myprog&gt; &lt;myargs&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; and I am receiving these errors:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; *****************
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   [leo01:02141] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141]   universe default-universe
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141]   user mhelal
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141]   host leo01
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141]   jobid 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141]   procid 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141] procdir:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; /tmp/openmpi-sessions-mhelal_at_leo01_0/default-universe/0/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141] jobdir:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; /tmp/openmpi-sessions-mhelal_at_leo01 _0/default-universe/0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141] unidir:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; /tmp/openmpi-sessions-mhelal_at_leo01_0/default-universe
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141] top: openmpi-sessions-mhelal_at_leo01_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141] [0,0,0] contact_file
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; /tmp/openmpi-sessions-mhelal_at_leo01_0/default- universe/universe-setup.txt
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141] [0,0,0] wrote setup file
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141] pls:rsh: local csh: 0, local bash: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141] pls:rsh: assuming same remote shell as local shell
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141] pls:rsh: remote csh: 0, remote bash: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141] pls:rsh: final template argv:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141] pls:rsh:     /usr/bin/ssh &lt;template&gt; orted --debug
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --bootproxy 1 - -name &lt;template&gt; --num_procs 2 --vpid_start 0 --nodename
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &lt;template&gt; --universe m helal_at_leo01:default-universe --nsreplica
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &quot;0.0.0;tcp://129.94.242.77:40738&quot; --gpr replica
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &quot;0.0.0;tcp://129.94.242.77:40738&quot; --mpi-call-yield 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141] pls:rsh: launching on node localhost
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141] pls:rsh: oversubscribed -- setting mpi_yield_when_idle to 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; (1 4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141] pls:rsh: localhost is a LOCAL node
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141] pls:rsh: changing to directory /import/eno/1/mhelal
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02141] pls:rsh: executing: orted --debug --bootproxy 1 --name 0.0.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --num _procs 2 --vpid_start 0 --nodename localhost --universe
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mhelal_at_leo01:default-uni verse --nsreplica
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; &quot;0.0.0 ;tcp://129.94.242.77:40738&quot; --gprreplica &quot;0.0.0;tcp://12
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; 9.94.242.77:40738 &lt;<a href="http://9.94.242.77:40738/">http://9.94.242.77:40738/</a>&gt; &quot; --mpi-call-yield 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02143] [0,0,1] setting up session dir with
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02143]   universe default-universe
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02143]   user mhelal
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02143]   host localhost
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02143]   jobid 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02143]   procid 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02143] procdir:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; /tmp/openmpi-sessions-mhelal_at_localhost_0/default-universe /0/1
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02143] jobdir:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; /tmp/openmpi-sessions-mhelal_at_localhost_0/default-universe/ 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02143] unidir:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; /tmp/openmpi-sessions-mhelal_at_localhost_0/default-universe
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02143] top: openmpi-sessions-mhelal_at_localhost_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02143] tmp: /tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02143] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02143] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02143] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02143] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02143] orted: job_state_callback(jobid = 1, state =
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ORTE_PROC_STATE_TERMI NATED)
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02143] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02143] sess_dir_finalize: found proc session dir empty - deleting
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02143] sess_dir_finalize: found job session dir empty - deleting
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02143] sess_dir_finalize: found univ session dir empty - deleting
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [leo01:02143] sess_dir_finalize: found top session dir empty - deleting
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ****************
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Will you please have a look, and advise if possible where I could change
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; these paths, when I checked the paths, it was not there all
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Best Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Manal
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2173/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2174.php">trasz_at_[hidden]: "[OMPI users] ScaLAPACK + BLACS + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2172.php">Manal Helal: "Re: [OMPI users] debugging problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="2169.php">Manal Helal: "[OMPI users] debugging problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2770.php">Jean-Christophe Mignot: "[OMPI users] running jobs on heteregenous clusters"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2770.php">Jean-Christophe Mignot: "[OMPI users] running jobs on heteregenous clusters"</a>
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
