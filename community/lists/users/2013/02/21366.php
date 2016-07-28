<?
$subject_val = "Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh, -pe	orte 4` fails)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 10:51:09 2013" -->
<!-- isoreceived="20130211155109" -->
<!-- sent="Mon, 11 Feb 2013 16:50:54 +0100" -->
<!-- isosent="20130211155054" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh, -pe	orte 4` fails)" -->
<!-- id="97EC115E-0B61-4771-ACD2-655CD6D27909_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5118D559.1010900_at_univ-nantes.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh, -pe	orte 4` fails)<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-11 10:50:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21367.php">Stefan Mauerberger: "[OMPI users] MPI_FILE_READ: wrong file-size does not raise an exception"</a>
<li><strong>Previous message:</strong> <a href="21365.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>In reply to:</strong> <a href="21360.php">Pierre Lindenbaum: "Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh, -pe	orte 4` fails)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 11.02.2013 um 12:26 schrieb Pierre Lindenbaum:
<br>
<p><span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; and I've changed `shell_start_mode      posix_compliant`  to `unix_behavior ` using  `qconf -mconf`. (However, shell_start_mode is  still listed as posix_compliant )
</span><br>
<p>AFAIK this is deprecated on the configuration level, as it moved to the queue definition `qconf -mq all.q`.
<br>
<p><p><span class="quotelev1">&gt; Now, qsh -pe orte 4 works
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   qsh -pe orte 4
</span><br>
<p>A plain `qsh` is working for you? This is an old startup method due to the insecure X11 startup it shouldn't be used any longer IMO.
<br>
<p><p><span class="quotelev1">&gt;   Your job 84581 (&quot;INTERACTIVE&quot;) has been submitted
</span><br>
<span class="quotelev1">&gt;   waiting for interactive job to be scheduled ...
</span><br>
<span class="quotelev1">&gt;   Your interactive job 84581 has been successfully scheduled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (should I run that command before running any a new mpirun command ?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when invoking:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     qsub -cwd -pe orte 7 with-a-shell.sh
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt;     qrsh -cwd -pe orte 100 /commun/data/packages/openmpi/bin/mpirun /path/to/a.out  arg1 arg2 arg3 ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that works too ! Thank you ! :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   queuename                      qtype resv/used/tot. load_avg
</span><br>
<span class="quotelev1">&gt;   arch          states
</span><br>
<span class="quotelev1">&gt;   ---------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   all.q_at_node01                   BIP   0/15/64        2.76 lx24-amd64
</span><br>
<span class="quotelev1">&gt;      84598 0.55500 mpirun     lindenb      r     02/11/2013 12:03:36    15
</span><br>
<span class="quotelev1">&gt;   ---------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   all.q_at_node02                   BIP   0/14/64        3.89 lx24-amd64
</span><br>
<span class="quotelev1">&gt;      84598 0.55500 mpirun     lindenb      r     02/11/2013 12:03:36    14
</span><br>
<span class="quotelev1">&gt;   ---------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   all.q_at_node03                   BIP   0/14/64        3.23 lx24-amd64
</span><br>
<span class="quotelev1">&gt;      84598 0.55500 mpirun     lindenb      r     02/11/2013 12:03:36    14
</span><br>
<span class="quotelev1">&gt;   ---------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   all.q_at_node04                   BIP   0/14/64        3.68 lx24-amd64
</span><br>
<span class="quotelev1">&gt;      84598 0.55500 mpirun     lindenb      r     02/11/2013 12:03:36    14
</span><br>
<span class="quotelev1">&gt;   ---------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   all.q_at_node05                   BIP   0/15/64        2.91 lx24-amd64
</span><br>
<span class="quotelev1">&gt;      84598 0.55500 mpirun     lindenb      r     02/11/2013 12:03:36    15
</span><br>
<span class="quotelev1">&gt;   ---------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   all.q_at_node06                   BIP   0/14/64        3.91 lx24-amd64
</span><br>
<span class="quotelev1">&gt;      84598 0.55500 mpirun     lindenb      r     02/11/2013 12:03:36    14
</span><br>
<span class="quotelev1">&gt;   ---------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   all.q_at_node07                   BIP   0/14/64        3.79 lx24-amd64
</span><br>
<span class="quotelev1">&gt;      84598 0.55500 mpirun     lindenb      r     02/11/2013 12:03:36    14
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK, my first openmpi program works. But as far as I can see: it is faster when invoked on the master node (~3.22min) than when invoked by means of SGE (~7H45):
</span><br>
<p>It's 7:45 to 3:32 - both in minutes:seconds, or?
<br>
<p>All machines are the same regarding speed and core count? BTW: running interactively in SGE might not set environment variables in case you use `qrsh` without a command or `qlogin` and some default hostfile will be used instead (unless you provide one). Below with the supplied command it should be fine.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;   time /commun/data/packages/openmpi/bin/mpirun -np 7 /path/to/a.out    arg1 arg2 arg3 ....
</span><br>
<span class="quotelev1">&gt;   670.985u 64.929s 3:32.36 346.5%    0+0k 16322112+6560io 32pf+0w
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   time qrsh -cwd -pe orte 7 /commun/data/packages/openmpi/bin/mpirun
</span><br>
<span class="quotelev1">&gt;   /path/to/a.out  arg1 arg2 arg3 ....
</span><br>
<span class="quotelev1">&gt;   0.023u 0.036s 7:45.05 0.0%    0+0k 1496+0io 1pf+0w
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm going to investigate this... :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you again
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pierre
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21367.php">Stefan Mauerberger: "[OMPI users] MPI_FILE_READ: wrong file-size does not raise an exception"</a>
<li><strong>Previous message:</strong> <a href="21365.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>In reply to:</strong> <a href="21360.php">Pierre Lindenbaum: "Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh, -pe	orte 4` fails)"</a>
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
