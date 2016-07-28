<?
$subject_val = "Re: [OMPI users] Trouble with SGE integration";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 30 17:48:18 2009" -->
<!-- isoreceived="20091130224818" -->
<!-- sent="Mon, 30 Nov 2009 23:48:00 +0100" -->
<!-- isosent="20091130224800" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with SGE integration" -->
<!-- id="EE953C5F-2599-48D3-940C-C7EF435CA5A5_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4B1417EE.8040003_at_fit.vutbr.cz" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-30 17:48:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11296.php">Jeff Squyres: "Re: [OMPI users] How to install openmpi to suportthread_level_multiple?"</a>
<li><strong>Previous message:</strong> <a href="11294.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>In reply to:</strong> <a href="11294.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11300.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11300.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11301.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 30.11.2009 um 20:07 schrieb Ondrej Glembek:
<br>
<p><span class="quotelev1">&gt; I definitely compiled the package with --with-sge flag... Here's my  
</span><br>
<span class="quotelev1">&gt; configure log:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/homes/kazi/glembek/share/openmpi-1.3.3-64 -- 
</span><br>
<span class="quotelev1">&gt; with-sge --enable-shared --enable-static --host=x86_64-linux -- 
</span><br>
<span class="quotelev1">&gt; build=x86_64-linux NM=x86_64-linux-nm
</span><br>
<p>Is there any list of valid values for --host, --build and NM - and  
<br>
what is NM for? From the ./configure --help I would &quot;assume&quot; that one  
<br>
can tell Open MPI to prepare to BUILD on a PPC platform, although I'm  
<br>
issuing the command on a x86, and the result of the PPC compile  
<br>
should be to run on x86_64. Maybe you can leave it out, as it's the  
<br>
same in your case?
<br>
<p><p><span class="quotelev1">&gt; Just to mention one more interesting thing: when---by luck---sge  
</span><br>
<span class="quotelev1">&gt; reserves the jobs on the same machine (aka smp scheme), all works  
</span><br>
<span class="quotelev1">&gt; with no problem...
</span><br>
<p>Then it will just create forks - no necessity to use qrsh at all.
<br>
<p><p><span class="quotelev1">&gt; Is there any way to force the ssh before the (...) term???
</span><br>
<p>Using SSH directly would bypass SGE's startup. What are your entries  
<br>
for qrsh_daemon and so on in SGE's configuration? Which version of SGE?
<br>
<p>But I think the real problem is, that Open MPI assumes you are  
<br>
outside of SGE and so uses a different startup. Are you resetting any  
<br>
of SGE's environment variables in your custom starter method (like  
<br>
$JOB_ID)?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanx
</span><br>
<span class="quotelev1">&gt; Ondrej
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Am 30.11.2009 um 18:46 schrieb Ondrej Glembek:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi, thanx for reply...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to dump the $@ before calling the exec and here it is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ( test ! -r ./.profile || . ./.profile; PATH=/homes/kazi/glembek/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; share/openmpi-1.3.3-64/bin:$PATH ; export PATH ; LD_LIBRARY_PATH=/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; homes/kazi/glembek/share/openmpi-1.3.3-64/lib:$LD_LIBRARY_PATH ;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export LD_LIBRARY_PATH ; /homes/kazi/glembek/share/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.3.3-64/bin/orted -mca ess env -mca orte_ess_jobid  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3870359552 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uri &quot;3870359552.0;tcp://147.229.8.134:53727&quot; --mca  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pls_gridengine_verbose 1 --output-filename mpi.log )
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like the line gets constructed in orte/mca/plm/rsh/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plm_rsh_module.c and depends on the shell...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Still I wonder, why mpiexec calls the starter.sh... I thought the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; starter was supposed to call the script which wraps a call to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec...
</span><br>
<span class="quotelev2">&gt;&gt; Correct. This will happen for the master node of this job, i.e.  
</span><br>
<span class="quotelev2">&gt;&gt; where the jobscript is executed. But it will also be used for the  
</span><br>
<span class="quotelev2">&gt;&gt; qrsh -inherit calls. I wonder about one thing: I see only a call  
</span><br>
<span class="quotelev2">&gt;&gt; to &quot;orted&quot; and not the above sub-shell on my machines. Did you  
</span><br>
<span class="quotelev2">&gt;&gt; compile Open MPI with --with-sge?
</span><br>
<span class="quotelev2">&gt;&gt; The original call above would be &quot;ssh node_xy ( test ! ....)&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; which seems working for ssh and rsh.
</span><br>
<span class="quotelev2">&gt;&gt; Just one note: with the starter script you will lose the set PATH  
</span><br>
<span class="quotelev2">&gt;&gt; and LD_LIBRARY_PATH, as a new shell is created. It might be  
</span><br>
<span class="quotelev2">&gt;&gt; necessary to set it again in your starter method.
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am I not right???
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ondrej
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reuti wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Am 30.11.2009 um 16:33 schrieb Ondrej Glembek:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; we are using a custom starter method in our SGE to launch our  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jobs... It
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; looks something like this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # ... we do whole bunch of stuff here
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #start the job in thus shell
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exec &quot;$@&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the &quot;$@&quot; should be replaced by the path to the jobscript (qsub)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or command (qrsh) plus the given options.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For the spread tasks to other nodes I get as argument: &quot; orted - 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca ess env -mca orte_ess_jobid ...&quot;. Also no . ./.profile.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So I wonder, where the . ./.profile is coming from. Can you put  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a `sleep 60` or alike before the `exec ...` and grep the built  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; line from `ps -e f` before it crashes?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The trouble is that mpiexec passes a command which looks like  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ( . ./.profile ..... )
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; which, however, is not a valid exec argument...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is there any way to tell mpiexec to run it in a separate  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; script??? Any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; idea how to solve this???
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanx
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ondrej Glembek
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
<li><strong>Next message:</strong> <a href="11296.php">Jeff Squyres: "Re: [OMPI users] How to install openmpi to suportthread_level_multiple?"</a>
<li><strong>Previous message:</strong> <a href="11294.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>In reply to:</strong> <a href="11294.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11300.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11300.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11301.php">Ondrej Glembek: "Re: [OMPI users] Trouble with SGE integration"</a>
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
