<?
$subject_val = "Re: [OMPI users] Trouble with SGE integration";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 30 12:46:39 2009" -->
<!-- isoreceived="20091130174639" -->
<!-- sent="Mon, 30 Nov 2009 18:46:36 +0100" -->
<!-- isosent="20091130174636" -->
<!-- name="Ondrej Glembek" -->
<!-- email="glembek_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with SGE integration" -->
<!-- id="4B1404FC.4040806_at_fit.vutbr.cz" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F9271864-2FB2-4213-8AE2-8B72BCBB4F62_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble with SGE integration<br>
<strong>From:</strong> Ondrej Glembek (<em>glembek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-30 12:46:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11293.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Previous message:</strong> <a href="11291.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>In reply to:</strong> <a href="11291.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11293.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Reply:</strong> <a href="11293.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, thanx for reply...
<br>
<p>I tried to dump the $@ before calling the exec and here it is:
<br>
<p><p>( test ! -r ./.profile || . ./.profile; 
<br>
PATH=/homes/kazi/glembek/share/openmpi-1.3.3-64/bin:$PATH ; export PATH 
<br>
; 
<br>
LD_LIBRARY_PATH=/homes/kazi/glembek/share/openmpi-1.3.3-64/lib:$LD_LIBRARY_PATH 
<br>
; export LD_LIBRARY_PATH ; 
<br>
/homes/kazi/glembek/share/openmpi-1.3.3-64/bin/orted -mca ess env -mca 
<br>
orte_ess_jobid 3870359552 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 
<br>
--hnp-uri &quot;3870359552.0;tcp://147.229.8.134:53727&quot; --mca 
<br>
pls_gridengine_verbose 1 --output-filename mpi.log )
<br>
<p><p>It looks like the line gets constructed in 
<br>
orte/mca/plm/rsh/plm_rsh_module.c and depends on the shell...
<br>
<p>Still I wonder, why mpiexec calls the starter.sh... I thought the 
<br>
starter was supposed to call the script which wraps a call to mpiexec...
<br>
<p>Am I not right???
<br>
Ondrej
<br>
<p><p>Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 30.11.2009 um 16:33 schrieb Ondrej Glembek:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; we are using a custom starter method in our SGE to launch our jobs... It
</span><br>
<span class="quotelev2">&gt;&gt; looks something like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # ... we do whole bunch of stuff here
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #start the job in thus shell
</span><br>
<span class="quotelev2">&gt;&gt; exec &quot;$@&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the &quot;$@&quot; should be replaced by the path to the jobscript (qsub) or 
</span><br>
<span class="quotelev1">&gt; command (qrsh) plus the given options.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the spread tasks to other nodes I get as argument: &quot; orted -mca ess 
</span><br>
<span class="quotelev1">&gt; env -mca orte_ess_jobid ...&quot;. Also no . ./.profile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I wonder, where the . ./.profile is coming from. Can you put a `sleep 
</span><br>
<span class="quotelev1">&gt; 60` or alike before the `exec ...` and grep the built line from `ps -e 
</span><br>
<span class="quotelev1">&gt; f` before it crashes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The trouble is that mpiexec passes a command which looks like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ( . ./.profile ..... )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which, however, is not a valid exec argument...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any way to tell mpiexec to run it in a separate script??? Any
</span><br>
<span class="quotelev2">&gt;&gt; idea how to solve this???
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanx
</span><br>
<span class="quotelev2">&gt;&gt; Ondrej Glembek
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
<li><strong>Next message:</strong> <a href="11293.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Previous message:</strong> <a href="11291.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>In reply to:</strong> <a href="11291.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11293.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Reply:</strong> <a href="11293.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
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
