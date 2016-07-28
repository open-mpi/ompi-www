<?
$subject_val = "Re: [OMPI users] Trouble with SGE integration";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 05:51:16 2009" -->
<!-- isoreceived="20091201105116" -->
<!-- sent="Tue, 1 Dec 2009 11:50:53 +0100" -->
<!-- isosent="20091201105053" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with SGE integration" -->
<!-- id="CC862AAB-9ED6-4608-A16C-E76D9901E39B_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B14E2BB.2090107_at_fit.vutbr.cz" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 05:50:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11298.php">Tim Prince: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<li><strong>Previous message:</strong> <a href="11296.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>In reply to:</strong> <a href="11295.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11301.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Reply:</strong> <a href="11301.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 01.12.2009 um 10:32 schrieb Ondrej Glembek:
<br>
<p><span class="quotelev1">&gt; Just to add more info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Am 30.11.2009 um 20:07 schrieb Ondrej Glembek:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But I think the real problem is, that Open MPI assumes you are  
</span><br>
<span class="quotelev2">&gt;&gt; outside
</span><br>
<span class="quotelev2">&gt;&gt; of SGE and so uses a different startup. Are you resetting any of  
</span><br>
<span class="quotelev2">&gt;&gt; SGE's
</span><br>
<span class="quotelev2">&gt;&gt; environment variables in your custom starter method (like $JOB_ID)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also one of the reasons that makes me think that Open MPI knows it is
</span><br>
<span class="quotelev1">&gt; inside of SGE is the dump of mpiexec (below)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first four lines show that starter.sh is called from mpiexec,  
</span><br>
<span class="quotelev1">&gt; having
</span><br>
<span class="quotelev1">&gt; trouble with the (...) command...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The last four lines show, that mpiexec knows the machines it is  
</span><br>
<span class="quotelev1">&gt; suppose
</span><br>
<span class="quotelev1">&gt; tu run on...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/share/SGE/util/starter.sh: line 9: exec: (: not found
</span><br>
<span class="quotelev1">&gt; /usr/local/share/SGE/util/starter.sh: line 9: exec: (: not found
</span><br>
<span class="quotelev1">&gt; /usr/local/share/SGE/util/starter.sh: line 9: exec: (: not found
</span><br>
<span class="quotelev1">&gt; /usr/local/share/SGE/util/starter.sh: line 9: exec: (: not found
</span><br>
<p>You are right. So the question remains: why is Open MPI building such  
<br>
a line at all.
<br>
<p>As you found the place in the source, it's done only for certain  
<br>
shells. And I would assume only in case of an rsh/ssh startup. When  
<br>
you put a `sleep 60` in your starter script: 1) it will of course  
<br>
delay the start of the program, but when it gets to 2) mpiexec, you  
<br>
should see some &quot;qrsh -inherit ...&quot; on the master node of the  
<br>
parallel job. Are these present?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; A daemon (pid 30616) died unexpectedly with status 127 while  
</span><br>
<span class="quotelev1">&gt; attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev1">&gt; have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;         blade57.fit.vutbr.cz - daemon did not report back when  
</span><br>
<span class="quotelev1">&gt; launched
</span><br>
<span class="quotelev1">&gt;         blade39.fit.vutbr.cz - daemon did not report back when  
</span><br>
<span class="quotelev1">&gt; launched
</span><br>
<span class="quotelev1">&gt;         blade41.fit.vutbr.cz - daemon did not report back when  
</span><br>
<span class="quotelev1">&gt; launched
</span><br>
<span class="quotelev1">&gt;         blade61.fit.vutbr.cz - daemon did not report back when  
</span><br>
<span class="quotelev1">&gt; launched
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ondrej
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reuti wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am 30.11.2009 um 18:46 schrieb Ondrej Glembek:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi, thanx for reply...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I tried to dump the $@ before calling the exec and here it is:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ( test ! -r ./.profile || . ./.profile;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PATH=/homes/kazi/glembek/share/openmpi-1.3.3-64/bin:$PATH ; export
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PATH ;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/homes/kazi/glembek/share/openmpi-1.3.3-64/lib: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ; export LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /homes/kazi/glembek/share/openmpi-1.3.3-64/bin/orted -mca ess env
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -mca orte_ess_jobid 3870359552 -mca orte_ess_vpid 1 -mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orte_ess_num_procs 2 --hnp-uri
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;3870359552.0;tcp://147.229.8.134:53727&quot; --mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pls_gridengine_verbose 1 --output-filename mpi.log )
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It looks like the line gets constructed in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orte/mca/plm/rsh/plm_rsh_module.c and depends on the shell...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Still I wonder, why mpiexec calls the starter.sh... I thought the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; starter was supposed to call the script which wraps a call to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpiexec...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Correct. This will happen for the master node of this job, i.e.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; where
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the jobscript is executed. But it will also be used for the qrsh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -inherit calls. I wonder about one thing: I see only a call to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;orted&quot; and not the above sub-shell on my machines. Did you compile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI with --with-sge?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The original call above would be &quot;ssh node_xy ( test ! ....)&quot; which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; seems working for ssh and rsh.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just one note: with the starter script you will lose the set  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PATH and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH, as a new shell is created. It might be  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; necessary to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; set it again in your starter method.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Am I not right???
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ondrej
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Am 30.11.2009 um 16:33 schrieb Ondrej Glembek:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; we are using a custom starter method in our SGE to launch our
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; jobs... It
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; looks something like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; # ... we do whole bunch of stuff here
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #start the job in thus shell
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; exec &quot;$@&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the &quot;$@&quot; should be replaced by the path to the jobscript  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; (qsub) or
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; command (qrsh) plus the given options.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; For the spread tasks to other nodes I get as argument: &quot; orted  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -mca
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ess env -mca orte_ess_jobid ...&quot;. Also no . ./.profile.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; So I wonder, where the . ./.profile is coming from. Can you put a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; `sleep 60` or alike before the `exec ...` and grep the built line
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; from `ps -e f` before it crashes?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The trouble is that mpiexec passes a command which looks like  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ( . ./.profile ..... )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; which, however, is not a valid exec argument...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is there any way to tell mpiexec to run it in a separate  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; script???
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; idea how to solve this???
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanx
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ondrej Glembek
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Ondrej Glembek, PhD student  E-mail: glembek_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   UPGM FIT VUT Brno, L226      Web:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.fit.vutbr.cz/~glembek">http://www.fit.vutbr.cz/~glembek</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Bozetechova 2, 612 66        Phone:  +420 54114-1292
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Brno, Czech Republic         Fax:    +420 54114-1290
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   ICQ: 93233896
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   GPG: C050 A6DC 7291 6776 9B69 BB11 C033 D756 6F33 DE3C
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Ondrej Glembek, PhD student  E-mail: glembek_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   UPGM FIT VUT Brno, L226      Web:    <a href="http://www.fit.vutbr.cz/">http://www.fit.vutbr.cz/</a> 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ~glembek
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Bozetechova 2, 612 66        Phone:  +420 54114-1292
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Brno, Czech Republic         Fax:    +420 54114-1290
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   ICQ: 93233896
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   GPG: C050 A6DC 7291 6776 9B69 BB11 C033 D756 6F33 DE3C
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Ondrej Glembek, PhD student  E-mail: glembek_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   UPGM FIT VUT Brno, L226      Web:    <a href="http://www.fit.vutbr.cz/">http://www.fit.vutbr.cz/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~glembek
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Bozetechova 2, 612 66        Phone:  +420 54114-1292
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Brno, Czech Republic         Fax:    +420 54114-1290
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ICQ: 93233896
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   GPG: C050 A6DC 7291 6776 9B69 BB11 C033 D756 6F33 DE3C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Ondrej Glembek, PhD student  E-mail: glembek_at_[hidden]
</span><br>
<span class="quotelev1">&gt;   UPGM FIT VUT Brno, L226      Web:    <a href="http://www.fit.vutbr.cz/">http://www.fit.vutbr.cz/</a> 
</span><br>
<span class="quotelev1">&gt; ~glembek
</span><br>
<span class="quotelev1">&gt;   Bozetechova 2, 612 66        Phone:  +420 54114-1292
</span><br>
<span class="quotelev1">&gt;   Brno, Czech Republic         Fax:    +420 54114-1290
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ICQ: 93233896
</span><br>
<span class="quotelev1">&gt;   GPG: C050 A6DC 7291 6776 9B69 BB11 C033 D756 6F33 DE3C
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
<li><strong>Next message:</strong> <a href="11298.php">Tim Prince: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<li><strong>Previous message:</strong> <a href="11296.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>In reply to:</strong> <a href="11295.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11301.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Reply:</strong> <a href="11301.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
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
