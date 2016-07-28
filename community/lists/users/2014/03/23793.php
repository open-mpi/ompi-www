<?
$subject_val = "Re: [OMPI users] ssh error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 07:28:49 2014" -->
<!-- isoreceived="20140311112849" -->
<!-- sent="Tue, 11 Mar 2014 12:28:39 +0100" -->
<!-- isosent="20140311112839" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh error" -->
<!-- id="D2E1D14C-A31F-48C8-A438-0514C9AA38D9_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAC-SUbsW=w5PvZe6=MufsBtYPi_nqKiVypOjCHS8tCFvGGrzmg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ssh error<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-11 07:28:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23794.php">Mehdi Rahmani: "Re: [OMPI users] ssh error"</a>
<li><strong>Previous message:</strong> <a href="23792.php">raha khalili: "[OMPI users] ssh error"</a>
<li><strong>In reply to:</strong> <a href="23792.php">raha khalili: "[OMPI users] ssh error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23794.php">Mehdi Rahmani: "Re: [OMPI users] ssh error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 11.03.2014 um 11:05 schrieb raha khalili:
<br>
<p><span class="quotelev1">&gt; I want to run a quantum espresso program (with passwordless ssh). I prepared a hostfile named 'texthost' at my input directory. I get this error when I run the program:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; texthost:
</span><br>
<span class="quotelev1">&gt; # This is a hostfile. 
</span><br>
<span class="quotelev1">&gt; # I have 4 syetems are paralleled by mpich2
</span><br>
<span class="quotelev1">&gt; # The following nodes are that machines I want to use:
</span><br>
<span class="quotelev1">&gt; #client3_at_master.cluster.umz slots=4 
</span><br>
<span class="quotelev1">&gt; khalili_at_client1.cluster.umz slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt; #khalili_at_client2.cluster.umz slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt; khalili_at_client3.cluster.umz slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; command: 
</span><br>
<span class="quotelev1">&gt; mpirun --host texthost -np 2 /home/client3/espresso-5.0.2/bin/pw.x -in AdnAu.rx.in | tee AdnAu.rx.out
</span><br>
<p>--host denotes particular host(s). Please have a look at the -hostfile/-machinefile option in the man page to use a file.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt; ssh: Could not resolve hostname texthost: Name or service not known
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after press ctrl+c:
</span><br>
<span class="quotelev1">&gt; ^C[mpiexec_at_master.cluster.umz] HYDU_sock_write (./utils/sock/sock.c:291): write error (Bad file descriptor)
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_master.cluster.umz] HYD_pmcd_pmiserv_send_signal (./pm/pmiserv/pmiserv_cb.c:170): unable to write data to proxy
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_master.cluster.umz] ui_cmd_cb (./pm/pmiserv/pmiserv_pmci.c:79): unable to send signal downstream
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_master.cluster.umz] HYDT_dmxu_poll_wait_for_event (./tools/demux/demux_poll.c:77): callback returned error status
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_master.cluster.umz] HYD_pmci_wait_for_completion (./pm/pmiserv/pmiserv_pmci.c:197): error waiting for event
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_master.cluster.umz] main (./ui/mpich/mpiexec.c:331): process manager error waiting for completion
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you help me please?
</span><br>
<span class="quotelev1">&gt; Thank you very much
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Khadije Khalili
</span><br>
<span class="quotelev1">&gt; Ph.D Student of Solid-State Physics
</span><br>
<span class="quotelev1">&gt; Department of Physics
</span><br>
<span class="quotelev1">&gt; University of Mazandaran
</span><br>
<span class="quotelev1">&gt; Babolsar, Iran
</span><br>
<span class="quotelev1">&gt; kh.khalili_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  
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
<li><strong>Next message:</strong> <a href="23794.php">Mehdi Rahmani: "Re: [OMPI users] ssh error"</a>
<li><strong>Previous message:</strong> <a href="23792.php">raha khalili: "[OMPI users] ssh error"</a>
<li><strong>In reply to:</strong> <a href="23792.php">raha khalili: "[OMPI users] ssh error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23794.php">Mehdi Rahmani: "Re: [OMPI users] ssh error"</a>
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
