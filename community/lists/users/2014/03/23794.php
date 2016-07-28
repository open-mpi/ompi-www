<?
$subject_val = "Re: [OMPI users] ssh error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 08:16:43 2014" -->
<!-- isoreceived="20140311121643" -->
<!-- sent="Tue, 11 Mar 2014 15:46:42 +0330" -->
<!-- isosent="20140311121642" -->
<!-- name="Mehdi Rahmani" -->
<!-- email="mrahmani56_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh error" -->
<!-- id="CAJbO9ak+AJJMvNoqzpe6JCSka_66MRfEM=1PZD-cV3SP_AQe9w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Mehdi Rahmani (<em>mrahmani56_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-11 08:16:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23795.php">Ralph Castain: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Previous message:</strong> <a href="23793.php">Reuti: "Re: [OMPI users] ssh error"</a>
<li><strong>In reply to:</strong> <a href="23792.php">raha khalili: "[OMPI users] ssh error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23801.php">raha khalili: "Re: [OMPI users] ssh error"</a>
<li><strong>Reply:</strong> <a href="23801.php">raha khalili: "Re: [OMPI users] ssh error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
use --hostfile or --machinefile in your command
<br>
mpirun *--hostfile* texthost -np 2 /home/client3/espresso-5.0.2/bin/pw.x
<br>
-in AdnAu.rx.in | tee AdnAu.rx.out
<br>
<p><p>On Tue, Mar 11, 2014 at 1:35 PM, raha khalili &lt;khadije.khalili_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Dear users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to run a quantum espresso program (with passwordless ssh). I
</span><br>
<span class="quotelev1">&gt; prepared a hostfile named 'texthost' at my input directory. I get this
</span><br>
<span class="quotelev1">&gt; error when I run the program:
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
<span class="quotelev1">&gt; mpirun --host texthost -np 2 /home/client3/espresso-5.0.2/bin/pw.x -in
</span><br>
<span class="quotelev1">&gt; AdnAu.rx.in | tee AdnAu.rx.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt; ssh: Could not resolve hostname texthost: Name or service not known
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; after press ctrl+c:
</span><br>
<span class="quotelev1">&gt; ^C[mpiexec_at_master.cluster.umz] HYDU_sock_write (./utils/sock/sock.c:291):
</span><br>
<span class="quotelev1">&gt; write error (Bad file descriptor)
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_master.cluster.umz] HYD_pmcd_pmiserv_send_signal
</span><br>
<span class="quotelev1">&gt; (./pm/pmiserv/pmiserv_cb.c:170): unable to write data to proxy
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_master.cluster.umz] ui_cmd_cb (./pm/pmiserv/pmiserv_pmci.c:79):
</span><br>
<span class="quotelev1">&gt; unable to send signal downstream
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_master.cluster.umz] HYDT_dmxu_poll_wait_for_event
</span><br>
<span class="quotelev1">&gt; (./tools/demux/demux_poll.c:77): callback returned error status
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_master.cluster.umz] HYD_pmci_wait_for_completion
</span><br>
<span class="quotelev1">&gt; (./pm/pmiserv/pmiserv_pmci.c:197): error waiting for event
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_master.cluster.umz] main (./ui/mpich/mpiexec.c:331): process
</span><br>
<span class="quotelev1">&gt; manager error waiting for completion
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23794/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23795.php">Ralph Castain: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Previous message:</strong> <a href="23793.php">Reuti: "Re: [OMPI users] ssh error"</a>
<li><strong>In reply to:</strong> <a href="23792.php">raha khalili: "[OMPI users] ssh error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23801.php">raha khalili: "Re: [OMPI users] ssh error"</a>
<li><strong>Reply:</strong> <a href="23801.php">raha khalili: "Re: [OMPI users] ssh error"</a>
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
