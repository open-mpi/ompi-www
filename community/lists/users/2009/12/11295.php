<?
$subject_val = "Re: [OMPI users] Trouble with SGE integration";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 04:32:49 2009" -->
<!-- isoreceived="20091201093249" -->
<!-- sent="Tue, 01 Dec 2009 10:32:43 +0100" -->
<!-- isosent="20091201093243" -->
<!-- name="Ondrej Glembek" -->
<!-- email="glembek_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with SGE integration" -->
<!-- id="4B14E2BB.2090107_at_fit.vutbr.cz" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EE953C5F-2599-48D3-940C-C7EF435CA5A5_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Ondrej Glembek (<em>glembek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 04:32:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11296.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Previous message:</strong> <a href="11294.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>In reply to:</strong> <a href="../../2009/11/11289.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11297.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Reply:</strong> <a href="11297.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to add more info:
<br>
<p>Reuti wrote:
<br>
<span class="quotelev1">&gt; Am 30.11.2009 um 20:07 schrieb Ondrej Glembek:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I think the real problem is, that Open MPI assumes you are outside
</span><br>
<span class="quotelev1">&gt; of SGE and so uses a different startup. Are you resetting any of SGE's
</span><br>
<span class="quotelev1">&gt; environment variables in your custom starter method (like $JOB_ID)?
</span><br>
<p>Also one of the reasons that makes me think that Open MPI knows it is
<br>
inside of SGE is the dump of mpiexec (below)
<br>
<p>The first four lines show that starter.sh is called from mpiexec, having
<br>
trouble with the (...) command...
<br>
<p>The last four lines show, that mpiexec knows the machines it is suppose
<br>
tu run on...
<br>
<p>Thanx
<br>
<p><p><p>/usr/local/share/SGE/util/starter.sh: line 9: exec: (: not found
<br>
/usr/local/share/SGE/util/starter.sh: line 9: exec: (: not found
<br>
/usr/local/share/SGE/util/starter.sh: line 9: exec: (: not found
<br>
/usr/local/share/SGE/util/starter.sh: line 9: exec: (: not found
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 30616) died unexpectedly with status 127 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons on the nodes shown
<br>
below. Additional manual cleanup may be required - please refer to
<br>
the &quot;orte-clean&quot; tool for assistance.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;blade57.fit.vutbr.cz - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;blade39.fit.vutbr.cz - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;blade41.fit.vutbr.cz - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;blade61.fit.vutbr.cz - daemon did not report back when launched
<br>
<p><p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanx
</span><br>
<span class="quotelev2">&gt;&gt; Ondrej
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reuti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 30.11.2009 um 18:46 schrieb Ondrej Glembek:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi, thanx for reply...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried to dump the $@ before calling the exec and here it is:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ( test ! -r ./.profile || . ./.profile;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PATH=/homes/kazi/glembek/share/openmpi-1.3.3-64/bin:$PATH ; export
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PATH ;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/homes/kazi/glembek/share/openmpi-1.3.3-64/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ; export LD_LIBRARY_PATH ;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /homes/kazi/glembek/share/openmpi-1.3.3-64/bin/orted -mca ess env
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mca orte_ess_jobid 3870359552 -mca orte_ess_vpid 1 -mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_ess_num_procs 2 --hnp-uri
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;3870359552.0;tcp://147.229.8.134:53727&quot; --mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pls_gridengine_verbose 1 --output-filename mpi.log )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It looks like the line gets constructed in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte/mca/plm/rsh/plm_rsh_module.c and depends on the shell...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Still I wonder, why mpiexec calls the starter.sh... I thought the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; starter was supposed to call the script which wraps a call to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Correct. This will happen for the master node of this job, i.e. where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the jobscript is executed. But it will also be used for the qrsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -inherit calls. I wonder about one thing: I see only a call to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;orted&quot; and not the above sub-shell on my machines. Did you compile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI with --with-sge?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The original call above would be &quot;ssh node_xy ( test ! ....)&quot; which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seems working for ssh and rsh.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just one note: with the starter script you will lose the set PATH and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH, as a new shell is created. It might be necessary to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set it again in your starter method.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am I not right???
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ondrej
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Reuti wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Am 30.11.2009 um 16:33 schrieb Ondrej Glembek:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; we are using a custom starter method in our SGE to launch our
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; jobs... It
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; looks something like this:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # ... we do whole bunch of stuff here
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #start the job in thus shell
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; exec &quot;$@&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the &quot;$@&quot; should be replaced by the path to the jobscript (qsub) or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; command (qrsh) plus the given options.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For the spread tasks to other nodes I get as argument: &quot; orted -mca
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ess env -mca orte_ess_jobid ...&quot;. Also no . ./.profile.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So I wonder, where the . ./.profile is coming from. Can you put a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; `sleep 60` or alike before the `exec ...` and grep the built line
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; from `ps -e f` before it crashes?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The trouble is that mpiexec passes a command which looks like this:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ( . ./.profile ..... )
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; which, however, is not a valid exec argument...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Is there any way to tell mpiexec to run it in a separate script???
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; idea how to solve this???
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanx
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ondrej Glembek
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Ondrej Glembek, PhD student  E-mail: glembek_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   UPGM FIT VUT Brno, L226      Web:   
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.fit.vutbr.cz/~glembek">http://www.fit.vutbr.cz/~glembek</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Bozetechova 2, 612 66        Phone:  +420 54114-1292
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Brno, Czech Republic         Fax:    +420 54114-1290
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   ICQ: 93233896
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   GPG: C050 A6DC 7291 6776 9B69 BB11 C033 D756 6F33 DE3C
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Ondrej Glembek, PhD student  E-mail: glembek_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   UPGM FIT VUT Brno, L226      Web:    <a href="http://www.fit.vutbr.cz/~glembek">http://www.fit.vutbr.cz/~glembek</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Bozetechova 2, 612 66        Phone:  +420 54114-1292
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Brno, Czech Republic         Fax:    +420 54114-1290
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   ICQ: 93233896
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   GPG: C050 A6DC 7291 6776 9B69 BB11 C033 D756 6F33 DE3C
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Ondrej Glembek, PhD student  E-mail: glembek_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;   UPGM FIT VUT Brno, L226      Web:    <a href="http://www.fit.vutbr.cz/~glembek">http://www.fit.vutbr.cz/~glembek</a>
</span><br>
<span class="quotelev2">&gt;&gt;   Bozetechova 2, 612 66        Phone:  +420 54114-1292
</span><br>
<span class="quotelev2">&gt;&gt;   Brno, Czech Republic         Fax:    +420 54114-1290
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   ICQ: 93233896
</span><br>
<span class="quotelev2">&gt;&gt;   GPG: C050 A6DC 7291 6776 9B69 BB11 C033 D756 6F33 DE3C
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
  Ondrej Glembek, PhD student  E-mail: glembek_at_[hidden]
  UPGM FIT VUT Brno, L226      Web:    <a href="http://www.fit.vutbr.cz/~glembek">http://www.fit.vutbr.cz/~glembek</a>
  Bozetechova 2, 612 66        Phone:  +420 54114-1292
  Brno, Czech Republic         Fax:    +420 54114-1290
  ICQ: 93233896
  GPG: C050 A6DC 7291 6776 9B69 BB11 C033 D756 6F33 DE3C
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11296.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Previous message:</strong> <a href="11294.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>In reply to:</strong> <a href="../../2009/11/11289.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11297.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Reply:</strong> <a href="11297.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
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
