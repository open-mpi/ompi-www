<?
$subject_val = "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 22 00:25:52 2013" -->
<!-- isoreceived="20130322042552" -->
<!-- sent="Thu, 21 Mar 2013 21:25:45 -0700" -->
<!-- isosent="20130322042545" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected" -->
<!-- id="9814E6D6-C7FE-470F-AFA4-AABF7248AE00_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1363917176l.958622l.0l_at_psu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-22 00:25:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21595.php">Syed Ahsan Ali: "[OMPI users] Running openmpi jobs on two system"</a>
<li><strong>Previous message:</strong> <a href="21593.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21591.php">David A. Boger: "[OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21598.php">David A. Boger: "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The process is hanging trying to open a TCP connection back to mpirun. I would have thought that excluding the vpn interface would help, but it could be that there is still some interference from the vpn software itself - as you probably know, vpn generally tries to restrict connections.
<br>
<p>I don't recall seeing this behavior with my laptop (which also runs with a Cisco vpn), but I'll check it again in the morning and let you know.
<br>
<p><p>On Mar 21, 2013, at 6:52 PM, David A. Boger &lt;dab143_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  I am having a problem on my linux desktop where mpi_init hangs for approximately 64 seconds if I have my vpn client connected but runs immediately if I disconnect the vpn. I've picked through the FAQ and Google but have failed to come up with a solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some potentially relevant information: I am using Open MPI 1.4.3 under ubuntu 12.04.1 and Cisco AnyConnect VPN Client. (I have also downloaded openmpi 1.6.4 and built it from source but believe it behaves the same way.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some potentially irrelevant information: I believe SSH tunneling is disabled by the vpn.  While the vpn is connected, ifconfig shows an extra interface (cscotun0 with inet addr:10.248.17.27 that shows up in the contact.txt file:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; wt217:~/wrk/mpi&gt; cat /tmp/openmpi-sessions-dab143_at_wt217_0/29142/contact.txt
</span><br>
<span class="quotelev1">&gt; 1909850112.0;tcp://192.168.1.3:48237;tcp://10.248.17.27:48237
</span><br>
<span class="quotelev1">&gt; 22001
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code is simply
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compile it using &quot;mpicc -g mpi_hello.c -o mpi_hello&quot; and execute it using &quot;mpirun -d -v ./mpi_hello&quot;. (The problem occurs whether or not I asked for more than one processor.) With verbosity on, I get the following output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; wt217:~/wrk/mpi&gt; mpirun -d -v ./mpi_hello
</span><br>
<span class="quotelev1">&gt; [wt217:22015] procdir: /tmp/openmpi-sessions-dab143_at_wt217_0/29144/0/0
</span><br>
<span class="quotelev1">&gt; [wt217:22015] jobdir: /tmp/openmpi-sessions-dab143_at_wt217_0/29144/0
</span><br>
<span class="quotelev1">&gt; [wt217:22015] top: openmpi-sessions-dab143_at_wt217_0
</span><br>
<span class="quotelev1">&gt; [wt217:22015] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [wt217:22015] [[29144,0],0] node[0].name wt217 daemon 0 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [wt217:22015] Info: ! Setting up debugger process table for applications
</span><br>
<span class="quotelev1">&gt;   MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;   MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev1">&gt;   MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable_size = 1
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (0, wt217, /home/dab143/wrk/mpi/./mpi_hello, 22016)
</span><br>
<span class="quotelev1">&gt; [wt217:22016] procdir: /tmp/openmpi-sessions-dab143_at_wt217_0/29144/1/0
</span><br>
<span class="quotelev1">&gt; [wt217:22016] jobdir: /tmp/openmpi-sessions-dab143_at_wt217_0/29144/1
</span><br>
<span class="quotelev1">&gt; [wt217:22016] top: openmpi-sessions-dab143_at_wt217_0
</span><br>
<span class="quotelev1">&gt; [wt217:22016] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; &lt;hangs for approximately 64 seconds&gt;
</span><br>
<span class="quotelev1">&gt; [wt217:22016] [[29144,1],0] node[0].name wt217 daemon 0 arch ffc91200
</span><br>
<span class="quotelev1">&gt; [wt217:22016] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [wt217:22015] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [wt217:22015] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [wt217:22015] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; orterun: e! xiting with status 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code hangs for approximately 6! 4 second s after the line that reads &quot;tmp: /tmp&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I attach gdb to the process during this time, the stack trace (attached) shows that the pause is in __GI___poll in /sysdeps/unix/sysv/linux/poll.c:83.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I add &quot;-mca oob_tcp_if_exclude cscotun0&quot;, then the corresponding address for that vpn interface no longer shows up in contact.txt, but the problem remains. I also add &quot;-mca btl ^cscotun0 -mca btl_tcp_if_exclude cscotun0&quot; with no effect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea what is hanging this up or how I can get more information as to what is going on during the pause? I assume connecting the vpn has caused mpi_init to look for something that isn't available and that eventually times out, but I don't know what.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Output from ompi_info and the gdb stack trace is attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;stack.txt.bz2&gt;&lt;ompi_info.txt.bz2&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="21595.php">Syed Ahsan Ali: "[OMPI users] Running openmpi jobs on two system"</a>
<li><strong>Previous message:</strong> <a href="21593.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21591.php">David A. Boger: "[OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21598.php">David A. Boger: "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
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
