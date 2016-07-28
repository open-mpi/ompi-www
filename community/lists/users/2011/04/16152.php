<?
$subject_val = "Re: [OMPI users] openmpi self checkpointing - error while running example";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  6 09:00:52 2011" -->
<!-- isoreceived="20110406130052" -->
<!-- sent="Wed, 6 Apr 2011 22:00:45 +0900" -->
<!-- isosent="20110406130045" -->
<!-- name="Nguyen Toan" -->
<!-- email="nguyentoan1508_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi self checkpointing - error while running example" -->
<!-- id="BANLkTimAXqh-XfOUCDwGTZgHy=QhKBUHUg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="41409C086371124DB9E054F9B1A8506F9363_at_MBX10.d.ethz.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi self checkpointing - error while running example<br>
<strong>From:</strong> Nguyen Toan (<em>nguyentoan1508_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-06 09:00:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16153.php">Hellmüller  Roman: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
<li><strong>Previous message:</strong> <a href="16151.php">Hellm&#252;ller  Roman: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
<li><strong>In reply to:</strong> <a href="16151.php">Hellm&#252;ller  Roman: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16153.php">Hellmüller  Roman: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
<li><strong>Reply:</strong> <a href="16153.php">Hellmüller  Roman: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Roman,
<br>
<p>It seems that you misunderstand the parameter &quot;-machinefile&quot;.
<br>
Following this parameter shoud be a file containing a list of machines
<br>
which your MPI application will be run on. For example, you want to
<br>
run your app on 2 nodes, named &quot;node1&quot; and &quot;node2&quot;, then this file, let call
<br>
it &quot;MACHINES_FILE&quot;, should look like this:
<br>
<p>node1
<br>
node2
<br>
<p>Now try to checkpoint and restart again with &quot;-machinefile MACHINES_FILE&quot;.
<br>
Hope it works.
<br>
<p>On Wed, Apr 6, 2011 at 9:13 PM, Hellm&#252;ller Roman &lt;hroman_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi Toan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thx for your suggestion. It gives me the following result, which does not
</span><br>
<span class="quotelev1">&gt; tell anything more.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hroman_at_cbl1 ~/checkpoints $ ompi-restart -v  -machinefile
</span><br>
<span class="quotelev1">&gt; ../semesterthesis/code/code2_self_example/my-hroman-cr-file.ckpt   om
</span><br>
<span class="quotelev1">&gt; pi_global_snapshot_28952.ckpt/
</span><br>
<span class="quotelev1">&gt; [cbl1:28974] Checking for the existence of
</span><br>
<span class="quotelev1">&gt; (/home/hroman/checkpoints/ompi_global_snapshot_28952.ckpt)
</span><br>
<span class="quotelev1">&gt; [cbl1:28974] Restarting from file (ompi_global_snapshot_28952.ckpt/)
</span><br>
<span class="quotelev1">&gt; [cbl1:28974]      Exec in self
</span><br>
<span class="quotelev1">&gt; ssh: connect to host 15 port 22: Invalid argument
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 28975) died unexpectedly with status 255 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; hroman_at_cbl1 ~/checkpoints $ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /cluster/sw/blcr/0.8.2/x86_64/gcc//lib:/cluster/sw/openmpi/1.5.3_ft/x86_64/gcc/lib:/opt/intel/Compiler/11.1/056/lib/intel64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The library path seems to be ok or should it look different? do you have
</span><br>
<span class="quotelev1">&gt; another idea?
</span><br>
<span class="quotelev1">&gt; cheers
</span><br>
<span class="quotelev1">&gt; roman
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; Von: users-bounces_at_[hidden] [users-bounces_at_[hidden]]&quot; im Auftrag
</span><br>
<span class="quotelev1">&gt; von &quot;Nguyen Toan [nguyentoan1508_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Gesendet: Mittwoch, 6. April 2011 13:20
</span><br>
<span class="quotelev1">&gt; Bis: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Betreff: Re: [OMPI users] openmpi self checkpointing - error while running
</span><br>
<span class="quotelev1">&gt; example
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Roman,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you try to checkpoint and restart with the parameter &quot;-machinefile&quot;. It
</span><br>
<span class="quotelev1">&gt; may work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nguyen Toan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 6, 2011 at 7:05 PM, Hellm&#252;ller Roman &lt;hroman_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:hroman_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to get fault tolerant ompi running on our cluster for my
</span><br>
<span class="quotelev1">&gt; semesterthesis.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Build &amp; compile were successful, blcr checkpointing works. openmpi 1.5.3,
</span><br>
<span class="quotelev1">&gt; blcr 0.8.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now i'm trying to set up the SELF checkpointing. the example from
</span><br>
<span class="quotelev1">&gt; <a href="http://osl.iu.edu/research/ft/ompi-cr/examples.php">http://osl.iu.edu/research/ft/ompi-cr/examples.php</a> does not work. I can
</span><br>
<span class="quotelev1">&gt; run the application and also do checkpoints, but restarting won't work.  I
</span><br>
<span class="quotelev1">&gt; got the following error by doning as sugested:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc my-app.c -export -export-dynamic -o my-app
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -am ft-enable-cr -mca crs_self_prefix my_personal my-app
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hroman_at_cbl1 ~ $ ompi-restart ompi_global_snapshot_27167.ckpt/
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: Unable to obtain the proper restart command to restart from the
</span><br>
<span class="quotelev1">&gt;      checkpoint file (opal_snapshot_0.ckpt). Returned -1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: Unable to obtain the proper restart command to restart from the
</span><br>
<span class="quotelev1">&gt;      checkpoint file (opal_snapshot_1.ckpt). Returned -1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i also tryed around with setting the path in the example file (restart_path
</span><br>
<span class="quotelev1">&gt; variable), changing the checkpoint directorys, and running the application
</span><br>
<span class="quotelev1">&gt; in different directorys...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; do you have an idea where the error could be?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here <a href="http://n.ethz.ch/~hroman/downloads/ompi_mailinglist.tar.gz">http://n.ethz.ch/~hroman/downloads/ompi_mailinglist.tar.gz</a>&lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://n.ethz.ch/%7Ehroman/downloads/ompi_mailinglist.tar.gz">http://n.ethz.ch/%7Ehroman/downloads/ompi_mailinglist.tar.gz</a>&gt; (40MB)
</span><br>
<span class="quotelev1">&gt; you'll find the library and the build of openmpi &amp; blcr as well as the env
</span><br>
<span class="quotelev1">&gt; variables and the output of ompi_info. there is one for the login and the
</span><br>
<span class="quotelev1">&gt; other for the compute nodes due to different kernels.  and here
</span><br>
<span class="quotelev1">&gt; <a href="http://n.ethz.ch/~hroman/downloads/ompi_global_snapshot_27167.ckpt.tar.gz">http://n.ethz.ch/~hroman/downloads/ompi_global_snapshot_27167.ckpt.tar.gz</a>&lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://n.ethz.ch/%7Ehroman/downloads/ompi_global_snapshot_27167.ckpt.tar.gz">http://n.ethz.ch/%7Ehroman/downloads/ompi_global_snapshot_27167.ckpt.tar.gz</a>&gt;
</span><br>
<span class="quotelev1">&gt; there is the produced checkpoint. please let me know if more outputs are
</span><br>
<span class="quotelev1">&gt; needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers
</span><br>
<span class="quotelev1">&gt; roman
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16152/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16153.php">Hellmüller  Roman: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
<li><strong>Previous message:</strong> <a href="16151.php">Hellm&#252;ller  Roman: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
<li><strong>In reply to:</strong> <a href="16151.php">Hellm&#252;ller  Roman: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16153.php">Hellmüller  Roman: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
<li><strong>Reply:</strong> <a href="16153.php">Hellmüller  Roman: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
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
