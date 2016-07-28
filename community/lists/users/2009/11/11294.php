<?
$subject_val = "Re: [OMPI users] Trouble with SGE integration";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 30 14:07:31 2009" -->
<!-- isoreceived="20091130190731" -->
<!-- sent="Mon, 30 Nov 2009 20:07:26 +0100" -->
<!-- isosent="20091130190726" -->
<!-- name="Ondrej Glembek" -->
<!-- email="glembek_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with SGE integration" -->
<!-- id="4B1417EE.8040003_at_fit.vutbr.cz" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C7C0CBA-1F1E-4434-A4DA-916D97777129_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2009-11-30 14:07:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11295.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Previous message:</strong> <a href="11293.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>In reply to:</strong> <a href="11293.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11295.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Reply:</strong> <a href="11295.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I definitely compiled the package with --with-sge flag... Here's my 
<br>
configure log:
<br>
<p>./configure --prefix=/homes/kazi/glembek/share/openmpi-1.3.3-64 
<br>
--with-sge --enable-shared --enable-static --host=x86_64-linux 
<br>
--build=x86_64-linux NM=x86_64-linux-nm
<br>
<p>Just to mention one more interesting thing: when---by luck---sge 
<br>
reserves the jobs on the same machine (aka smp scheme), all works with 
<br>
no problem...
<br>
<p>Is there any way to force the ssh before the (...) term???
<br>
<p>Thanx
<br>
Ondrej
<br>
<p><p>Reuti wrote:
<br>
<span class="quotelev1">&gt; Am 30.11.2009 um 18:46 schrieb Ondrej Glembek:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi, thanx for reply...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to dump the $@ before calling the exec and here it is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ( test ! -r ./.profile || . ./.profile; 
</span><br>
<span class="quotelev2">&gt;&gt; PATH=/homes/kazi/glembek/share/openmpi-1.3.3-64/bin:$PATH ; export 
</span><br>
<span class="quotelev2">&gt;&gt; PATH ; 
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH=/homes/kazi/glembek/share/openmpi-1.3.3-64/lib:$LD_LIBRARY_PATH 
</span><br>
<span class="quotelev2">&gt;&gt; ; export LD_LIBRARY_PATH ; 
</span><br>
<span class="quotelev2">&gt;&gt; /homes/kazi/glembek/share/openmpi-1.3.3-64/bin/orted -mca ess env -mca 
</span><br>
<span class="quotelev2">&gt;&gt; orte_ess_jobid 3870359552 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 
</span><br>
<span class="quotelev2">&gt;&gt; 2 --hnp-uri &quot;3870359552.0;tcp://147.229.8.134:53727&quot; --mca 
</span><br>
<span class="quotelev2">&gt;&gt; pls_gridengine_verbose 1 --output-filename mpi.log )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like the line gets constructed in 
</span><br>
<span class="quotelev2">&gt;&gt; orte/mca/plm/rsh/plm_rsh_module.c and depends on the shell...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Still I wonder, why mpiexec calls the starter.sh... I thought the 
</span><br>
<span class="quotelev2">&gt;&gt; starter was supposed to call the script which wraps a call to mpiexec...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Correct. This will happen for the master node of this job, i.e. where 
</span><br>
<span class="quotelev1">&gt; the jobscript is executed. But it will also be used for the qrsh 
</span><br>
<span class="quotelev1">&gt; -inherit calls. I wonder about one thing: I see only a call to &quot;orted&quot; 
</span><br>
<span class="quotelev1">&gt; and not the above sub-shell on my machines. Did you compile Open MPI 
</span><br>
<span class="quotelev1">&gt; with --with-sge?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The original call above would be &quot;ssh node_xy ( test ! ....)&quot; which 
</span><br>
<span class="quotelev1">&gt; seems working for ssh and rsh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just one note: with the starter script you will lose the set PATH and 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH, as a new shell is created. It might be necessary to set 
</span><br>
<span class="quotelev1">&gt; it again in your starter method.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am I not right???
</span><br>
<span class="quotelev2">&gt;&gt; Ondrej
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reuti wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 30.11.2009 um 16:33 schrieb Ondrej Glembek:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; we are using a custom starter method in our SGE to launch our 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jobs... It
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; looks something like this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # ... we do whole bunch of stuff here
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #start the job in thus shell
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exec &quot;$@&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the &quot;$@&quot; should be replaced by the path to the jobscript (qsub) or 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command (qrsh) plus the given options.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For the spread tasks to other nodes I get as argument: &quot; orted -mca 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ess env -mca orte_ess_jobid ...&quot;. Also no . ./.profile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I wonder, where the . ./.profile is coming from. Can you put a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `sleep 60` or alike before the `exec ...` and grep the built line 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from `ps -e f` before it crashes?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The trouble is that mpiexec passes a command which looks like this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ( . ./.profile ..... )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which, however, is not a valid exec argument...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there any way to tell mpiexec to run it in a separate script??? Any
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; idea how to solve this???
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ondrej Glembek
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
<li><strong>Next message:</strong> <a href="11295.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Previous message:</strong> <a href="11293.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>In reply to:</strong> <a href="11293.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11295.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Reply:</strong> <a href="11295.php">Reuti: "Re: [OMPI users] Trouble with SGE integration"</a>
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
