<?
$subject_val = "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 22 07:37:26 2013" -->
<!-- isoreceived="20130322113726" -->
<!-- sent="Fri, 22 Mar 2013 07:37:21 -0400" -->
<!-- isosent="20130322113721" -->
<!-- name="David A. Boger" -->
<!-- email="dab143_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected" -->
<!-- id="1363952241l.1810472l.0l_at_psu.edu" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> David A. Boger (<em>dab143_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-22 07:37:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21599.php">David A. Boger: "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<li><strong>Previous message:</strong> <a href="21597.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21599.php">David A. Boger: "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph.  I have a Mac OS X 10.6.8 laptop where I can run
<br>
open-mpi 1.2.8 and open-mpi 1.6.4 with the vpn connected without any problem,
<br>
even without having to exclude the vpn interface, so you're probably right --
<br>
the existence of the vpn interface alone doesn't explain the problem.
<br>
Nevertheless, disconnecting the vpn on my ubuntu box definitely resolves the
<br>
problem, so I think it's tied in somehow.
<br>
<p>Do you think the process is
<br>
hanging looking for a specific TCP connection, or just any TCP
<br>
connection?  If it's a specific one, is there a way to find out which or
<br>
to test using something outside of mpirun that would show the same
<br>
delay?
<br>
<p>Thanks again,
<br>
David
<br>
<p>On Fri, Mar 22, 2013 12:25 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
The process is hanging trying to open a TCP connection back to mpirun. I would
<br>
<span class="quotelev1">&gt;have thought that excluding the vpn interface would help, but it could be that
</span><br>
<span class="quotelev1">&gt;there is still some interference from the vpn software itself - as you probably
</span><br>
<span class="quotelev1">&gt;know, vpn generally tries to restrict connections.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I don't recall seeing this behavior with my laptop (which also runs with a
</span><br>
<span class="quotelev1">&gt;Cisco vpn), but I'll check it again in the morning and let you know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Mar 21, 2013, at 6:52 PM, David A. Boger &lt;dab143_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I am having a problem on my linux desktop where mpi_init hangs for
</span><br>
<span class="quotelev1">&gt;approximately 64 seconds if I have my vpn client connected but runs immediately
</span><br>
<span class="quotelev1">&gt;if I disconnect the vpn. I've picked through the FAQ and Google but have failed
</span><br>
<span class="quotelev1">&gt;to come up with a solution.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Some potentially relevant information: I am using Open MPI 1.4.3 under
</span><br>
<span class="quotelev1">&gt;ubuntu 12.04.1 and Cisco AnyConnect VPN Client. (I have also downloaded
</span><br>
<span class="quotelev1">&gt;openmpi 1.6.4 and built it from source but believe it behaves the same
</span><br>
<span class="quotelev1">&gt;way.)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Some potentially irrelevant information: I believe SSH tunneling is
</span><br>
<span class="quotelev1">&gt;disabled by the vpn.  While the vpn is connected, ifconfig shows an extra
</span><br>
<span class="quotelev1">&gt;interface (cscotun0 with inet addr:10.248.17.27 that shows up in the
</span><br>
<span class="quotelev1">&gt;contact.txt file:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; wt217:~/wrk/mpi&gt; cat
</span><br>
<span class="quotelev1">&gt;/tmp/openmpi-sessions-dab143_at_wt217_0/29142/contact.txt
</span><br>
<span class="quotelev2">&gt;&gt; 1909850112.0;tcp://192.168.1.3:48237;tcp://10.248.17.27:48237
</span><br>
<span class="quotelev2">&gt;&gt; 22001
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The code is simply
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char** argv)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I compile it using &quot;mpicc -g mpi_hello.c -o mpi_hello&quot; and
</span><br>
<span class="quotelev1">&gt;execute it using &quot;mpirun -d -v ./mpi_hello&quot;. (The problem occurs
</span><br>
<span class="quotelev1">&gt;whether or not I asked for more than one processor.) With verbosity on, I
</span><br>
<span class="quotelev1">&gt;get the following output:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; wt217:~/wrk/mpi&gt; mpirun -d -v ./mpi_hello
</span><br>
<span class="quotelev2">&gt;&gt; [wt217:22015] procdir: /tmp/openmpi-sessions-dab143_at_wt217_0/29144/0/0
</span><br>
<span class="quotelev2">&gt;&gt; [wt217:22015] jobdir: /tmp/openmpi-sessions-dab143_at_wt217_0/29144/0
</span><br>
<span class="quotelev2">&gt;&gt; [wt217:22015] top: openmpi-sessions-dab143_at_wt217_0
</span><br>
<span class="quotelev2">&gt;&gt; [wt217:22015] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; [wt217:22015] [[29144,0],0] node[0].name wt217 daemon 0 arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [wt217:22015] Info: ! Setting up debugger process table for applications
</span><br>
<span class="quotelev2">&gt;&gt;   MPIR_being_debugged = 0
</span><br>
<span class="quotelev2">&gt;&gt;   MPIR_debug_state = 1
</span><br>
<span class="quotelev2">&gt;&gt;   MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev2">&gt;&gt;   MPIR_i_am_starter = 0
</span><br>
<span class="quotelev2">&gt;&gt;   MPIR_proctable_size = 1
</span><br>
<span class="quotelev2">&gt;&gt;   MPIR_proctable:
</span><br>
<span class="quotelev2">&gt;&gt;     (i, host, exe, pid) = (0, wt217,
</span><br>
<span class="quotelev1">&gt;/home/dab143/wrk/mpi/./mpi_hello, 22016)
</span><br>
<span class="quotelev2">&gt;&gt; [wt217:22016] procdir: /tmp/openmpi-sessions-dab143_at_wt217_0/29144/1/0
</span><br>
<span class="quotelev2">&gt;&gt; [wt217:22016] jobdir: /tmp/openmpi-sessions-dab143_at_wt217_0/29144/1
</span><br>
<span class="quotelev2">&gt;&gt; [wt217:22016] top: openmpi-sessions-dab143_at_wt217_0
</span><br>
<span class="quotelev2">&gt;&gt; [wt217:22016] tmp: /tmp
</span><br>
<span class="quotelev2">&gt;&gt; &lt;hangs for approximately 64 seconds&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [wt217:22016] [[29144,1],0] node[0].name wt217 daemon 0 arch ffc91200
</span><br>
<span class="quotelev2">&gt;&gt; [wt217:22016] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [wt217:22015] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [wt217:22015] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; [wt217:22015] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev2">&gt;&gt; orterun: e! xiting with status 0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The code hangs for approximately 6! 4 second s after the line that reads
</span><br>
<span class="quotelev1">&gt;&quot;tmp: /tmp&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I attach gdb to the process during this time, the stack trace
</span><br>
<span class="quotelev1">&gt;(attached) shows that the pause is in __GI___poll in
</span><br>
<span class="quotelev1">&gt;/sysdeps/unix/sysv/linux/poll.c:83.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If I add &quot;-mca oob_tcp_if_exclude cscotun0&quot;, then the
</span><br>
<span class="quotelev1">&gt;corresponding address for that vpn interface no longer shows up in contact.txt,
</span><br>
<span class="quotelev1">&gt;but the problem remains. I also add &quot;-mca btl ^cscotun0 -mca
</span><br>
<span class="quotelev1">&gt;btl_tcp_if_exclude cscotun0&quot; with no effect.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any idea what is hanging this up or how I can get more information as to
</span><br>
<span class="quotelev1">&gt;what is going on during the pause? I assume connecting the vpn has caused
</span><br>
<span class="quotelev1">&gt;mpi_init to look for something that isn't available and that eventually times
</span><br>
<span class="quotelev1">&gt;out, but I don't know what.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Output from ompi_info and the gdb stack trace is attached.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&lt;stack.txt.bz2&gt;&lt;ompi_info.txt.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21598/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21599.php">David A. Boger: "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<li><strong>Previous message:</strong> <a href="21597.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21599.php">David A. Boger: "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
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
