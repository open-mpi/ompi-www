<?
$subject_val = "Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh, -pe	orte 4` fails)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 06:33:09 2013" -->
<!-- isoreceived="20130211113309" -->
<!-- sent="Mon, 11 Feb 2013 12:26:17 +0100" -->
<!-- isosent="20130211112617" -->
<!-- name="Pierre Lindenbaum" -->
<!-- email="pierre.lindenbaum_at_[hidden]" -->
<!-- subject="Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh, -pe	orte 4` fails)" -->
<!-- id="5118D559.1010900_at_univ-nantes.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.9.1360429202.6682.users_at_open-mpi.org" -->
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
<strong>From:</strong> Pierre Lindenbaum (<em>pierre.lindenbaum_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-11 06:26:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21361.php">Daniel Fetchinson: "[OMPI users] mpirun completes for one user, not for another"</a>
<li><strong>Previous message:</strong> <a href="21359.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to find the binding of each rank on the local	machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21366.php">Reuti: "Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh, -pe	orte 4` fails)"</a>
<li><strong>Reply:</strong> <a href="21366.php">Reuti: "Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh, -pe	orte 4` fails)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; This is a good sign, as it tries to use `qrsh -inherit ...` already. Can you confirm the following settings:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ qconf -sp orte
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; control_slaves     TRUE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ qconf -sq all.q
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; shell_start_mode      unix_behavior
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;qconf -sp orte
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;pe_name            orte
<br>
&nbsp;&nbsp;&nbsp;&nbsp;slots              448
<br>
&nbsp;&nbsp;&nbsp;&nbsp;user_lists         NONE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;xuser_lists        NONE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;start_proc_args    /bin/true
<br>
&nbsp;&nbsp;&nbsp;&nbsp;stop_proc_args     /bin/true
<br>
&nbsp;&nbsp;&nbsp;&nbsp;allocation_rule    $round_robin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;control_slaves     FALSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;job_is_first_task  TRUE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;urgency_slots      min
<br>
&nbsp;&nbsp;&nbsp;&nbsp;accounting_summary FALSE
<br>
<p><p>and
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;qconf -sq all.q | grep start_
<br>
&nbsp;&nbsp;&nbsp;&nbsp;shell_start_mode      posix_compliant
<br>
<p><p><p>I've edited the env conf using `qconf -mp orte` changing 
<br>
`control_slaves` to TRUE
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;# qconf -sp orte
<br>
&nbsp;&nbsp;&nbsp;&nbsp;pe_name            orte
<br>
&nbsp;&nbsp;&nbsp;&nbsp;slots              448
<br>
&nbsp;&nbsp;&nbsp;&nbsp;user_lists         NONE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;xuser_lists        NONE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;start_proc_args    /bin/true
<br>
&nbsp;&nbsp;&nbsp;&nbsp;stop_proc_args     /bin/true
<br>
&nbsp;&nbsp;&nbsp;&nbsp;allocation_rule    $round_robin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;control_slaves     TRUE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;job_is_first_task  TRUE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;urgency_slots      min
<br>
&nbsp;&nbsp;&nbsp;&nbsp;accounting_summary FALSE
<br>
<p>and I've changed `shell_start_mode      posix_compliant`  to 
<br>
`unix_behavior ` using  `qconf -mconf`. (However, shell_start_mode is  
<br>
still listed as posix_compliant )
<br>
<p>Now, qsh -pe orte 4 works
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;qsh -pe orte 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Your job 84581 (&quot;INTERACTIVE&quot;) has been submitted
<br>
&nbsp;&nbsp;&nbsp;&nbsp;waiting for interactive job to be scheduled ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Your interactive job 84581 has been successfully scheduled.
<br>
<p><p>(should I run that command before running any a new mpirun command ?)
<br>
<p>when invoking:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;qsub -cwd -pe orte 7 with-a-shell.sh
<br>
or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;qrsh -cwd -pe orte 100 /commun/data/packages/openmpi/bin/mpirun 
<br>
/path/to/a.out  arg1 arg2 arg3 ....
<br>
<p>that works too ! Thank you ! :-)
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;queuename                      qtype resv/used/tot. load_avg
<br>
&nbsp;&nbsp;&nbsp;&nbsp;arch          states
<br>
&nbsp;&nbsp;&nbsp;&nbsp;---------------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;all.q_at_node01                   BIP   0/15/64        2.76 lx24-amd64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;84598 0.55500 mpirun     lindenb      r     02/11/2013 12:03:36    15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;---------------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;all.q_at_node02                   BIP   0/14/64        3.89 lx24-amd64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;84598 0.55500 mpirun     lindenb      r     02/11/2013 12:03:36    14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;---------------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;all.q_at_node03                   BIP   0/14/64        3.23 lx24-amd64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;84598 0.55500 mpirun     lindenb      r     02/11/2013 12:03:36    14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;---------------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;all.q_at_node04                   BIP   0/14/64        3.68 lx24-amd64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;84598 0.55500 mpirun     lindenb      r     02/11/2013 12:03:36    14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;---------------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;all.q_at_node05                   BIP   0/15/64        2.91 lx24-amd64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;84598 0.55500 mpirun     lindenb      r     02/11/2013 12:03:36    15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;---------------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;all.q_at_node06                   BIP   0/14/64        3.91 lx24-amd64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;84598 0.55500 mpirun     lindenb      r     02/11/2013 12:03:36    14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;---------------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;all.q_at_node07                   BIP   0/14/64        3.79 lx24-amd64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;84598 0.55500 mpirun     lindenb      r     02/11/2013 12:03:36    14
<br>
<p><p><p>OK, my first openmpi program works. But as far as I can see: it is 
<br>
faster when invoked on the master node (~3.22min) than when invoked by 
<br>
means of SGE (~7H45):
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;time /commun/data/packages/openmpi/bin/mpirun -np 7 /path/to/a.out 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;arg1 arg2 arg3 ....
<br>
&nbsp;&nbsp;&nbsp;&nbsp;670.985u 64.929s 3:32.36 346.5%    0+0k 16322112+6560io 32pf+0w
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;time qrsh -cwd -pe orte 7 /commun/data/packages/openmpi/bin/mpirun
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/path/to/a.out  arg1 arg2 arg3 ....
<br>
&nbsp;&nbsp;&nbsp;&nbsp;0.023u 0.036s 7:45.05 0.0%    0+0k 1496+0io 1pf+0w
<br>
<p><p><p>I'm going to investigate this... :-)
<br>
<p>Thank you again
<br>
<p>Pierre
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21361.php">Daniel Fetchinson: "[OMPI users] mpirun completes for one user, not for another"</a>
<li><strong>Previous message:</strong> <a href="21359.php">Jeff Squyres (jsquyres): "Re: [OMPI users] how to find the binding of each rank on the local	machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21366.php">Reuti: "Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh, -pe	orte 4` fails)"</a>
<li><strong>Reply:</strong> <a href="21366.php">Reuti: "Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh, -pe	orte 4` fails)"</a>
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
