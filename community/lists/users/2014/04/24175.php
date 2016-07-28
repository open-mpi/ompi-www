<?
$subject_val = "Re: [OMPI users] can't run mpi-jobs on remote host";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 10:10:19 2014" -->
<!-- isoreceived="20140414141019" -->
<!-- sent="Mon, 14 Apr 2014 07:08:59 -0700" -->
<!-- isosent="20140414140859" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] can't run mpi-jobs on remote host" -->
<!-- id="1B138940-6403-4E5F-BCB3-D007CD445FD0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9b8e92bdf6ee4568949cbaec9c7b0cda_at_AMSPR03MB614.eurprd03.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] can't run mpi-jobs on remote host<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 10:08:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24176.php">Ralph Castain: "Re: [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8"</a>
<li><strong>Previous message:</strong> <a href="24174.php">Reuti: "Re: [OMPI users] Different output ubuntu /mac"</a>
<li><strong>In reply to:</strong> <a href="24171.php">Lubrano Francesco: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm confused - how are you building OMPI?? You normally have to do:
<br>
<p>1. ./configure --prefix=&lt;foo&gt; ....  This is where you would add --enable-debug
<br>
<p>2. make clean all install
<br>
<p>You then run your mpirun command as you've done. 
<br>
<p><p>On Apr 14, 2014, at 12:52 AM, Lubrano Francesco &lt;lubrano.francesco_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I can't set --enable-debug (command not found: I have just --enable-recovery in help command), but the other commands works properly. The output is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; francesco_at_linux-hldu:~&gt; mpirun -mca plm_base_verbose 10 --debug-daemons --host Frank_at_158.110.39.110 hostname
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca: base: components_register: registering plm components
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca: base: components_register: found loaded component isolated
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca: base: components_register: component isolated has no register or open function
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca: base: components_register: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca: base: components_register: component rsh register function successful
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca: base: components_register: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca: base: components_register: component slurm register function successful
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca: base: components_open: found loaded component isolated
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca: base: components_open: component isolated open function successful
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca:base:select:(  plm) Querying component [isolated]
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca:base:select:(  plm) Query of component [isolated] set priority to 0
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca: base: close: component isolated closed
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca: base: close: unloading component isolated
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca: base: close: component slurm closed
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev1">&gt; Daemon was launched on linux-o5sl.site - beginning to initialize
</span><br>
<span class="quotelev1">&gt; [linux-o5sl.site:02271] mca: base: components_register: registering plm components
</span><br>
<span class="quotelev1">&gt; [linux-o5sl.site:02271] mca: base: components_register: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [linux-o5sl.site:02271] mca: base: components_register: component rsh register function successful
</span><br>
<span class="quotelev1">&gt; [linux-o5sl.site:02271] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [linux-o5sl.site:02271] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [linux-o5sl.site:02271] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev1">&gt; [linux-o5sl.site:02271] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [linux-o5sl.site:02271] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [linux-o5sl.site:02271] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [linux-o5sl.site:02271] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; Daemon [[33734,0],1] checking in as pid 2271 on host linux-o5sl
</span><br>
<span class="quotelev1">&gt; [linux-o5sl.site:02271] [[33734,0],1] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; [linux-o5sl.site:02271] mca: base: close: component rsh closed
</span><br>
<span class="quotelev1">&gt; [linux-o5sl.site:02271] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] [[33734,0],0] orted_cmd: received exit cmd
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] [[33734,0],0] orted_cmd: all routes and children gone - exiting
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca: base: close: component rsh closed
</span><br>
<span class="quotelev1">&gt; [linux-hldu.site:02234] mca: base: close: unloading component rsh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is orted in linux-05sl reciving any command?
</span><br>
<span class="quotelev1">&gt; Thank you for your cooperation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (I don't know if it matter, but I have the same problem using the first pc as remote and the second as local).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Francesco
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24175/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24176.php">Ralph Castain: "Re: [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8"</a>
<li><strong>Previous message:</strong> <a href="24174.php">Reuti: "Re: [OMPI users] Different output ubuntu /mac"</a>
<li><strong>In reply to:</strong> <a href="24171.php">Lubrano Francesco: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
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
