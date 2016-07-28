<?
$subject_val = "Re: [OMPI users] ssh error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 15 10:15:29 2014" -->
<!-- isoreceived="20140315141529" -->
<!-- sent="Sat, 15 Mar 2014 07:14:28 -0700" -->
<!-- isosent="20140315141428" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh error" -->
<!-- id="9C863E05-3316-4672-89D7-FC7DC3074CB6_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAC-SUbsVuUh_hVBxgZC2GLvUkLdPsj8YfKHS2SupPSH98QNUXg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-15 10:14:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23855.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Previous message:</strong> <a href="23853.php">raha khalili: "Re: [OMPI users] ssh error"</a>
<li><strong>In reply to:</strong> <a href="23853.php">raha khalili: "Re: [OMPI users] ssh error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, for one thing - that output clearly shows you are running MPICH, not Open MPI. You might ask them about the errors
<br>
<p>On Mar 15, 2014, at 6:36 AM, raha khalili &lt;khadije.khalili_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run a program based on other posts in this topic. I run this command as Mehdi said but I get an error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [client3_at_master 92.12.23]$ mpirun --hostfile texthost -np 2 /home/client3/espresso-5.0.2/bin/pw.x -in AdnAu.rx.in | tee AdnAu.rx.out
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_master.cluster.umz] HYDU_process_mfile_token (./utils/args/args.c:299): token slots not supported at this time
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_master.cluster.umz] HYDU_parse_hostfile (./utils/args/args.c:347): unable to process token
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_master.cluster.umz] mfile_fn (./ui/mpich/utils.c:341): error parsing hostfile
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_master.cluster.umz] match_arg (./utils/args/args.c:153): match handler returned error
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_master.cluster.umz] HYDU_parse_array (./utils/args/args.c:175): argument matching returned error
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_master.cluster.umz] parse_args (./ui/mpich/utils.c:1609): error parsing input array
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_master.cluster.umz] HYD_uii_mpx_get_parameters (./ui/mpich/utils.c:1660): unable to parse user arguments
</span><br>
<span class="quotelev1">&gt; [mpiexec_at_master.cluster.umz] main (./ui/mpich/mpiexec.c:153): error parsing parameters
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hostfile:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # This is a hostfile.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # The following nodes are used for calculations
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #master.cluster.umz slots=4 max-slots=2
</span><br>
<span class="quotelev1">&gt; khalili_at_192.168.196.2 slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt; khalili_at_192.168.196.3 slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt; #khalili_at_client3.cluster.umz slots=8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is really appreciated. 
</span><br>
<span class="quotelev1">&gt; Khadije Khalili
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 11, 2014 at 9:01 PM, raha khalili &lt;khadije.khalili_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Very thanks to Mehdi and Reuti for your helps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 11, 2014 at 3:46 PM, Mehdi Rahmani &lt;mrahmani56_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; use --hostfile or --machinefile in your command
</span><br>
<span class="quotelev1">&gt; mpirun --hostfile texthost -np 2 /home/client3/espresso-5.0.2/bin/pw.x -in AdnAu.rx.in | tee AdnAu.rx.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 11, 2014 at 1:35 PM, raha khalili &lt;khadije.khalili_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dear users
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to run a quantum espresso program (with passwordless ssh). I prepared a hostfile named 'texthost' at my input directory. I get this error when I run the program:
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23854/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23855.php">Ralph Castain: "Re: [OMPI users] Question about '--mca btl tcp,self'"</a>
<li><strong>Previous message:</strong> <a href="23853.php">raha khalili: "Re: [OMPI users] ssh error"</a>
<li><strong>In reply to:</strong> <a href="23853.php">raha khalili: "Re: [OMPI users] ssh error"</a>
<!-- nextthread="start" -->
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
