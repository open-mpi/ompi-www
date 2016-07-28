<?
$subject_val = "[OMPI users] ssh error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 06:05:14 2014" -->
<!-- isoreceived="20140311100514" -->
<!-- sent="Tue, 11 Mar 2014 13:35:12 +0330" -->
<!-- isosent="20140311100512" -->
<!-- name="raha khalili" -->
<!-- email="khadije.khalili_at_[hidden]" -->
<!-- subject="[OMPI users] ssh error" -->
<!-- id="CAC-SUbsW=w5PvZe6=MufsBtYPi_nqKiVypOjCHS8tCFvGGrzmg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] ssh error<br>
<strong>From:</strong> raha khalili (<em>khadije.khalili_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-11 06:05:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23793.php">Reuti: "Re: [OMPI users] ssh error"</a>
<li><strong>Previous message:</strong> <a href="23791.php">Alex A. Granovsky: "Re: [OMPI users] Problems with computation-communication overlap innon-blocking mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23793.php">Reuti: "Re: [OMPI users] ssh error"</a>
<li><strong>Reply:</strong> <a href="23793.php">Reuti: "Re: [OMPI users] ssh error"</a>
<li><strong>Reply:</strong> <a href="23794.php">Mehdi Rahmani: "Re: [OMPI users] ssh error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear users
<br>
<p>I want to run a quantum espresso program (with passwordless ssh). I
<br>
prepared a hostfile named 'texthost' at my input directory. I get this
<br>
error when I run the program:
<br>
<p>texthost:
<br>
# This is a hostfile.
<br>
# I have 4 syetems are paralleled by mpich2
<br>
# The following nodes are that machines I want to use:
<br>
#client3_at_master.cluster.umz slots=4
<br>
khalili_at_client1.cluster.umz slots=4 max-slots=4
<br>
#khalili_at_client2.cluster.umz slots=4 max-slots=4
<br>
khalili_at_client3.cluster.umz slots=8 max-slots=8
<br>
<p>command:
<br>
mpirun --host texthost -np 2 /home/client3/espresso-5.0.2/bin/pw.x -in
<br>
AdnAu.rx.in | tee AdnAu.rx.out
<br>
<p>error:
<br>
ssh: Could not resolve hostname texthost: Name or service not known
<br>
<p>after press ctrl+c:
<br>
^C[mpiexec_at_master.cluster.umz] HYDU_sock_write (./utils/sock/sock.c:291):
<br>
write error (Bad file descriptor)
<br>
[mpiexec_at_master.cluster.umz] HYD_pmcd_pmiserv_send_signal
<br>
(./pm/pmiserv/pmiserv_cb.c:170): unable to write data to proxy
<br>
[mpiexec_at_master.cluster.umz] ui_cmd_cb (./pm/pmiserv/pmiserv_pmci.c:79):
<br>
unable to send signal downstream
<br>
[mpiexec_at_master.cluster.umz] HYDT_dmxu_poll_wait_for_event
<br>
(./tools/demux/demux_poll.c:77): callback returned error status
<br>
[mpiexec_at_master.cluster.umz] HYD_pmci_wait_for_completion
<br>
(./pm/pmiserv/pmiserv_pmci.c:197): error waiting for event
<br>
[mpiexec_at_master.cluster.umz] main (./ui/mpich/mpiexec.c:331): process
<br>
manager error waiting for completion
<br>
<p>Could you help me please?
<br>
Thank you very much
<br>
<pre>
-- 
Khadije Khalili
Ph.D Student of Solid-State Physics
Department of Physics
University of Mazandaran
Babolsar, Iran
kh.khalili_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23792/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23793.php">Reuti: "Re: [OMPI users] ssh error"</a>
<li><strong>Previous message:</strong> <a href="23791.php">Alex A. Granovsky: "Re: [OMPI users] Problems with computation-communication overlap innon-blocking mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23793.php">Reuti: "Re: [OMPI users] ssh error"</a>
<li><strong>Reply:</strong> <a href="23793.php">Reuti: "Re: [OMPI users] ssh error"</a>
<li><strong>Reply:</strong> <a href="23794.php">Mehdi Rahmani: "Re: [OMPI users] ssh error"</a>
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
