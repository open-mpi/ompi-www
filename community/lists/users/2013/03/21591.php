<?
$subject_val = "[OMPI users] mpi_init waits 64 seconds if vpn is connected";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 21 21:53:01 2013" -->
<!-- isoreceived="20130322015301" -->
<!-- sent="Thu, 21 Mar 2013 21:52:56 -0400" -->
<!-- isosent="20130322015256" -->
<!-- name="David A. Boger" -->
<!-- email="dab143_at_[hidden]" -->
<!-- subject="[OMPI users] mpi_init waits 64 seconds if vpn is connected" -->
<!-- id="1363917176l.958622l.0l_at_psu.edu" -->
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
<strong>Subject:</strong> [OMPI users] mpi_init waits 64 seconds if vpn is connected<br>
<strong>From:</strong> David A. Boger (<em>dab143_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-21 21:52:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21592.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21590.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21594.php">Ralph Castain: "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<li><strong>Reply:</strong> <a href="21594.php">Ralph Castain: "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<li><strong>Reply:</strong> <a href="21620.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;I am having a problem on my linux desktop where mpi_init hangs for
<br>
approximately 64 seconds if I have my vpn client connected but runs immediately
<br>
if I disconnect the vpn. I've picked through the FAQ and Google but have failed
<br>
to come up with a solution.
<br>
<p>Some potentially relevant information: I am using Open MPI 1.4.3 under ubuntu
<br>
12.04.1 and Cisco AnyConnect VPN Client. (I have also downloaded openmpi 1.6.4
<br>
and built it from source but believe it behaves the same way.)
<br>
<p>Some potentially irrelevant information: I believe SSH tunneling is disabled by
<br>
the vpn.  While the vpn is connected, ifconfig shows an extra interface
<br>
(cscotun0 with inet addr:10.248.17.27 that shows up in the contact.txt file:
<br>
<p>wt217:~/wrk/mpi&gt; cat /tmp/openmpi-sessions-dab143_at_wt217_0/29142/contact.txt
<br>
1909850112.0;tcp://192.168.1.3:48237;tcp://10.248.17.27:48237
<br>
22001
<br>
<p>The code is simply
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char** argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>I compile it using &quot;mpicc -g mpi_hello.c -o mpi_hello&quot; and execute it using
<br>
&quot;mpirun -d -v ./mpi_hello&quot;. (The problem occurs whether or not I asked for more
<br>
than one processor.) With verbosity on, I get the following output:
<br>
<p>wt217:~/wrk/mpi&gt; mpirun -d -v ./mpi_hello
<br>
[wt217:22015] procdir: /tmp/openmpi-sessions-dab143_at_wt217_0/29144/0/0
<br>
[wt217:22015] jobdir: /tmp/openmpi-sessions-dab143_at_wt217_0/29144/0
<br>
[wt217:22015] top: openmpi-sessions-dab143_at_wt217_0
<br>
[wt217:22015] tmp: /tmp
<br>
[wt217:22015] [[29144,0],0] node[0].name wt217 daemon 0 arch ffc91200
<br>
[wt217:22015] Info: Setting up debugger process table for applications
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_partial_attach_ok = 1
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 1
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, wt217, /home/dab143/wrk/mpi/./mpi_hello, 22016)
<br>
[wt217:22016] procdir: /tmp/openmpi-sessions-dab143_at_wt217_0/29144/1/0
<br>
[wt217:22016] jobdir: /tmp/openmpi-sessions-dab143_at_wt217_0/29144/1
<br>
[wt217:22016] top: openmpi-sessions-dab143_at_wt217_0
<br>
[wt217:22016] tmp: /tmp
<br>
&lt;hangs for approximately 64 seconds&gt;
<br>
[wt217:22016] [[29144,1],0] node[0].name wt217 daemon 0 arch ffc91200
<br>
[wt217:22016] sess_dir_finalize: proc session dir not empty - leaving
<br>
[wt217:22015] sess_dir_finalize: proc session dir not empty - leaving
<br>
[wt217:22015] sess_dir_finalize: job session dir not empty - leaving
<br>
[wt217:22015] sess_dir_finalize: proc session dir not empty - leaving
<br>
orterun: exiting with status 0
<br>
<p>The code hangs for approximately 64 seconds after the line that reads &quot;tmp:
<br>
/tmp&quot;.
<br>
<p>If I attach gdb to the process during this time, the stack trace (attached)
<br>
shows that the pause is in __GI___poll in /sysdeps/unix/sysv/linux/poll.c:83.
<br>
<p>If I add &quot;-mca oob_tcp_if_exclude cscotun0&quot;, then the corresponding address for
<br>
that vpn interface no longer shows up in contact.txt, but the problem remains.
<br>
I also add &quot;-mca btl ^cscotun0 -mca btl_tcp_if_exclude cscotun0&quot; with no effect.
<br>
<p>Any idea what is hanging this up or how I can get more information as to what
<br>
is going on during the pause? I assume connecting the vpn has caused mpi_init
<br>
to look for something that isn't available and that eventually times out, but I
<br>
don't know what.
<br>
<p>Output from ompi_info and the gdb stack trace is attached.
<br>
<p>Thanks,
<br>
David
<br>
<p><p><p>
<p>

<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21591/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21591/stack.txt.bz2">stack.txt.bz2</a>
</ul>
<!-- attachment="stack.txt.bz2" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21591/ompi_info.txt.bz2">ompi_info.txt.bz2</a>
</ul>
<!-- attachment="ompi_info.txt.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21592.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21590.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21594.php">Ralph Castain: "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<li><strong>Reply:</strong> <a href="21594.php">Ralph Castain: "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<li><strong>Reply:</strong> <a href="21620.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
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
