<?
$subject_val = "Re: [OMPI users] ssh error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 15 09:36:10 2014" -->
<!-- isoreceived="20140315133610" -->
<!-- sent="Sat, 15 Mar 2014 17:06:08 +0330" -->
<!-- isosent="20140315133608" -->
<!-- name="raha khalili" -->
<!-- email="khadije.khalili_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh error" -->
<!-- id="CAC-SUbsVuUh_hVBxgZC2GLvUkLdPsj8YfKHS2SupPSH98QNUXg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAC-SUbsGNqNj30puiZgVmkTYc3cfdbPfEew2QXWEPf2hDjhRKg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-03-15 09:36:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23854.php">Ralph Castain: "Re: [OMPI users] ssh error"</a>
<li><strong>Previous message:</strong> <a href="23852.php">Jianyu Liu: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>In reply to:</strong> <a href="23801.php">raha khalili: "Re: [OMPI users] ssh error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23854.php">Ralph Castain: "Re: [OMPI users] ssh error"</a>
<li><strong>Reply:</strong> <a href="23854.php">Ralph Castain: "Re: [OMPI users] ssh error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all
<br>
<p>I am trying to run a program based on other posts in this topic. I run this
<br>
command as Mehdi said but I get an error:
<br>
<p>[client3_at_master 92.12.23]$ mpirun --hostfile texthost -np 2
<br>
/home/client3/espresso-5.0.2/bin/pw.x -in AdnAu.rx.in | tee AdnAu.rx.out
<br>
[mpiexec_at_master.cluster.umz] HYDU_process_mfile_token
<br>
(./utils/args/args.c:299): token slots not supported at this time
<br>
[mpiexec_at_master.cluster.umz] HYDU_parse_hostfile (./utils/args/args.c:347):
<br>
unable to process token
<br>
[mpiexec_at_master.cluster.umz] mfile_fn (./ui/mpich/utils.c:341): error
<br>
parsing hostfile
<br>
[mpiexec_at_master.cluster.umz] match_arg (./utils/args/args.c:153): match
<br>
handler returned error
<br>
[mpiexec_at_master.cluster.umz] HYDU_parse_array (./utils/args/args.c:175):
<br>
argument matching returned error
<br>
[mpiexec_at_master.cluster.umz] parse_args (./ui/mpich/utils.c:1609): error
<br>
parsing input array
<br>
[mpiexec_at_master.cluster.umz] HYD_uii_mpx_get_parameters
<br>
(./ui/mpich/utils.c:1660): unable to parse user arguments
<br>
[mpiexec_at_master.cluster.umz] main (./ui/mpich/mpiexec.c:153): error parsing
<br>
parameters
<br>
<p>hostfile:
<br>
<p># This is a hostfile.
<br>
#
<br>
# The following nodes are used for calculations
<br>
#
<br>
#master.cluster.umz slots=4 max-slots=2
<br>
khalili_at_192.168.196.2 slots=4 max-slots=4
<br>
khalili_at_192.168.196.3 slots=4 max-slots=4
<br>
#khalili_at_client3.cluster.umz slots=8
<br>
<p>Any help is really appreciated.
<br>
Khadije Khalili
<br>
<p><p>On Tue, Mar 11, 2014 at 9:01 PM, raha khalili &lt;khadije.khalili_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Very thanks to Mehdi and Reuti for your helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 11, 2014 at 3:46 PM, Mehdi Rahmani &lt;mrahmani56_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; use --hostfile or --machinefile in your command
</span><br>
<span class="quotelev2">&gt;&gt; mpirun *--hostfile* texthost -np 2 /home/client3/espresso-5.0.2/bin/pw.x
</span><br>
<span class="quotelev2">&gt;&gt; -in AdnAu.rx.in | tee AdnAu.rx.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Mar 11, 2014 at 1:35 PM, raha khalili &lt;khadije.khalili_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear users
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to run a quantum espresso program (with passwordless ssh). I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prepared a hostfile named 'texthost' at my input directory. I get this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error when I run the program:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; texthost:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # This is a hostfile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # I have 4 syetems are paralleled by mpich2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # The following nodes are that machines I want to use:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #client3_at_master.cluster.umz slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; khalili_at_client1.cluster.umz slots=4 max-slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #khalili_at_client2.cluster.umz slots=4 max-slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; khalili_at_client3.cluster.umz slots=8 max-slots=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --host texthost -np 2 /home/client3/espresso-5.0.2/bin/pw.x -in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AdnAu.rx.in | tee AdnAu.rx.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh: Could not resolve hostname texthost: Name or service not known
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; after press ctrl+c:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^C[mpiexec_at_master.cluster.umz] HYDU_sock_write
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (./utils/sock/sock.c:291): write error (Bad file descriptor)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mpiexec_at_master.cluster.umz] HYD_pmcd_pmiserv_send_signal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (./pm/pmiserv/pmiserv_cb.c:170): unable to write data to proxy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mpiexec_at_master.cluster.umz] ui_cmd_cb
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (./pm/pmiserv/pmiserv_pmci.c:79): unable to send signal downstream
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mpiexec_at_master.cluster.umz] HYDT_dmxu_poll_wait_for_event
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (./tools/demux/demux_poll.c:77): callback returned error status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mpiexec_at_master.cluster.umz] HYD_pmci_wait_for_completion
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (./pm/pmiserv/pmiserv_pmci.c:197): error waiting for event
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mpiexec_at_master.cluster.umz] main (./ui/mpich/mpiexec.c:331): process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; manager error waiting for completion
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you help me please?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Khadije Khalili
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ph.D Student of Solid-State Physics
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Physics
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Mazandaran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Babolsar, Iran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kh.khalili_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23853/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23854.php">Ralph Castain: "Re: [OMPI users] ssh error"</a>
<li><strong>Previous message:</strong> <a href="23852.php">Jianyu Liu: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>In reply to:</strong> <a href="23801.php">raha khalili: "Re: [OMPI users] ssh error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23854.php">Ralph Castain: "Re: [OMPI users] ssh error"</a>
<li><strong>Reply:</strong> <a href="23854.php">Ralph Castain: "Re: [OMPI users] ssh error"</a>
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
