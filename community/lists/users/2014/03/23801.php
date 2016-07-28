<?
$subject_val = "Re: [OMPI users] ssh error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 13:31:04 2014" -->
<!-- isoreceived="20140311173104" -->
<!-- sent="Tue, 11 Mar 2014 21:01:02 +0330" -->
<!-- isosent="20140311173102" -->
<!-- name="raha khalili" -->
<!-- email="khadije.khalili_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh error" -->
<!-- id="CAC-SUbsGNqNj30puiZgVmkTYc3cfdbPfEew2QXWEPf2hDjhRKg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJbO9ak+AJJMvNoqzpe6JCSka_66MRfEM=1PZD-cV3SP_AQe9w_at_mail.gmail.com" -->
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
<strong>From:</strong> raha khalili (<em>khadije.khalili_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-11 13:31:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23802.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Previous message:</strong> <a href="23800.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>In reply to:</strong> <a href="23794.php">Mehdi Rahmani: "Re: [OMPI users] ssh error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23853.php">raha khalili: "Re: [OMPI users] ssh error"</a>
<li><strong>Reply:</strong> <a href="23853.php">raha khalili: "Re: [OMPI users] ssh error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Very thanks to Mehdi and Reuti for your helps.
<br>
<p><p>On Tue, Mar 11, 2014 at 3:46 PM, Mehdi Rahmani &lt;mrahmani56_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; use --hostfile or --machinefile in your command
</span><br>
<span class="quotelev1">&gt; mpirun *--hostfile* texthost -np 2 /home/client3/espresso-5.0.2/bin/pw.x
</span><br>
<span class="quotelev1">&gt; -in AdnAu.rx.in | tee AdnAu.rx.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 11, 2014 at 1:35 PM, raha khalili &lt;khadije.khalili_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear users
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I want to run a quantum espresso program (with passwordless ssh). I
</span><br>
<span class="quotelev2">&gt;&gt; prepared a hostfile named 'texthost' at my input directory. I get this
</span><br>
<span class="quotelev2">&gt;&gt; error when I run the program:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; texthost:
</span><br>
<span class="quotelev2">&gt;&gt; # This is a hostfile.
</span><br>
<span class="quotelev2">&gt;&gt; # I have 4 syetems are paralleled by mpich2
</span><br>
<span class="quotelev2">&gt;&gt; # The following nodes are that machines I want to use:
</span><br>
<span class="quotelev2">&gt;&gt; #client3_at_master.cluster.umz slots=4
</span><br>
<span class="quotelev2">&gt;&gt; khalili_at_client1.cluster.umz slots=4 max-slots=4
</span><br>
<span class="quotelev2">&gt;&gt; #khalili_at_client2.cluster.umz slots=4 max-slots=4
</span><br>
<span class="quotelev2">&gt;&gt; khalili_at_client3.cluster.umz slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; command:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --host texthost -np 2 /home/client3/espresso-5.0.2/bin/pw.x -in
</span><br>
<span class="quotelev2">&gt;&gt; AdnAu.rx.in | tee AdnAu.rx.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; error:
</span><br>
<span class="quotelev2">&gt;&gt; ssh: Could not resolve hostname texthost: Name or service not known
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; after press ctrl+c:
</span><br>
<span class="quotelev2">&gt;&gt; ^C[mpiexec_at_master.cluster.umz] HYDU_sock_write
</span><br>
<span class="quotelev2">&gt;&gt; (./utils/sock/sock.c:291): write error (Bad file descriptor)
</span><br>
<span class="quotelev2">&gt;&gt; [mpiexec_at_master.cluster.umz] HYD_pmcd_pmiserv_send_signal
</span><br>
<span class="quotelev2">&gt;&gt; (./pm/pmiserv/pmiserv_cb.c:170): unable to write data to proxy
</span><br>
<span class="quotelev2">&gt;&gt; [mpiexec_at_master.cluster.umz] ui_cmd_cb (./pm/pmiserv/pmiserv_pmci.c:79):
</span><br>
<span class="quotelev2">&gt;&gt; unable to send signal downstream
</span><br>
<span class="quotelev2">&gt;&gt; [mpiexec_at_master.cluster.umz] HYDT_dmxu_poll_wait_for_event
</span><br>
<span class="quotelev2">&gt;&gt; (./tools/demux/demux_poll.c:77): callback returned error status
</span><br>
<span class="quotelev2">&gt;&gt; [mpiexec_at_master.cluster.umz] HYD_pmci_wait_for_completion
</span><br>
<span class="quotelev2">&gt;&gt; (./pm/pmiserv/pmiserv_pmci.c:197): error waiting for event
</span><br>
<span class="quotelev2">&gt;&gt; [mpiexec_at_master.cluster.umz] main (./ui/mpich/mpiexec.c:331): process
</span><br>
<span class="quotelev2">&gt;&gt; manager error waiting for completion
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you help me please?
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Khadije Khalili
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D Student of Solid-State Physics
</span><br>
<span class="quotelev2">&gt;&gt; Department of Physics
</span><br>
<span class="quotelev2">&gt;&gt; University of Mazandaran
</span><br>
<span class="quotelev2">&gt;&gt; Babolsar, Iran
</span><br>
<span class="quotelev2">&gt;&gt; kh.khalili_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23801/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23802.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Previous message:</strong> <a href="23800.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Compiling Open MPI 1.7.4 using PGI 14.2 and Mellanox HCOLL enabled"</a>
<li><strong>In reply to:</strong> <a href="23794.php">Mehdi Rahmani: "Re: [OMPI users] ssh error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23853.php">raha khalili: "Re: [OMPI users] ssh error"</a>
<li><strong>Reply:</strong> <a href="23853.php">raha khalili: "Re: [OMPI users] ssh error"</a>
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
