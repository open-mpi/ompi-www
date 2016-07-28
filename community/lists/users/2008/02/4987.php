<?
$subject_val = "Re: [OMPI users] mpirun, paths and xterm again";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 12:02:49 2008" -->
<!-- isoreceived="20080205170249" -->
<!-- sent="Tue, 5 Feb 2008 18:02:44 +0100" -->
<!-- isosent="20080205170244" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun, paths and xterm again" -->
<!-- id="9b0da5ce0802050902o2e538bc6gd3d2c122c2ba4d8a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47A8908B.3080604_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun, paths and xterm again<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-05 12:02:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4988.php">Sacerdoti, Federico: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4986.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>In reply to:</strong> <a href="4986.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4989.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Reply:</strong> <a href="4989.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim
<br>
<p><span class="quotelev1">&gt; Your desktop is plankton, and you want
</span><br>
<span class="quotelev1">&gt; to run a job on both plankton and nano, and have xterms show up on nano.
</span><br>
<p>Not on nano, but on plankton, but ithink this was just a typo :)
<br>
<p><span class="quotelev1">&gt; It looks like you are already doing this, but to make sure, the way I
</span><br>
<span class="quotelev1">&gt; would use xhost is:
</span><br>
<span class="quotelev1">&gt; plankton$ xhost +nano_00
</span><br>
<span class="quotelev1">&gt; plankton$ mpirun -np 4 --hostfile testhosts -x DISPLAY=plankton:0.0
</span><br>
<span class="quotelev1">&gt; xterm -hold -e ../MPITest
</span><br>
This gives me 2 lines of
<br>
&nbsp;&nbsp;xterm Xt error: Can't open display: plankton:0.0
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you try running:
</span><br>
<span class="quotelev1">&gt; plankton$ mpirun -np 1 -host nano_00 -x DISPLAY=plankton:0.0 printenv
</span><br>
This yields
<br>
DISPLAY=plankton:0.0
<br>
OMPI_MCA_orte_precondition_transports=4a0f9ccb4c13cd0e-6255330fbb0289f9
<br>
OMPI_MCA_rds=proxy
<br>
OMPI_MCA_ras=proxy
<br>
OMPI_MCA_rmaps=proxy
<br>
OMPI_MCA_pls=proxy
<br>
OMPI_MCA_rmgr=proxy
<br>
SHELL=/bin/bash
<br>
SSH_CLIENT=130.60.49.141 59524 22
<br>
USER=jody
<br>
LD_LIBRARY_PATH=/opt/openmpi/lib
<br>
SSH_AUTH_SOCK=/tmp/ssh-enOzt24653/agent.24653
<br>
MAIL=/var/mail/jody
<br>
PATH=/opt/openmpi/bin:/usr/local/bin:/bin:/usr/bin
<br>
PWD=/home/jody
<br>
SHLVL=1
<br>
HOME=/home/jody
<br>
LOGNAME=jody
<br>
SSH_CONNECTION=130.60.49.141 59524 130.60.49.128 22
<br>
_=/opt/openmpi/bin/orted
<br>
OMPI_MCA_mpi_yield_when_idle=0
<br>
OMPI_MCA_mpi_paffinity_processor=0
<br>
OMPI_MCA_universe=jody_at_[hidden]:default-universe-10265
<br>
OMPI_MCA_ns_replica_uri=0.0.0;tcp://130.60.49.141:50310
<br>
OMPI_MCA_gpr_replica_uri=0.0.0;tcp://130.60.49.141:50310
<br>
OMPI_MCA_orte_app_num=0
<br>
OMPI_MCA_orte_base_nodename=nano_00
<br>
OMPI_MCA_ns_nds=env
<br>
OMPI_MCA_ns_nds_cellid=0
<br>
OMPI_MCA_ns_nds_jobid=1
<br>
OMPI_MCA_ns_nds_vpid=0
<br>
OMPI_MCA_ns_nds_vpid_start=0
<br>
OMPI_MCA_ns_nds_num_procs=1
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; just to make sure the environment variable is being properly set.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might also try:
</span><br>
<span class="quotelev1">&gt; in terminal 1:
</span><br>
<span class="quotelev1">&gt; plankton$ xhost +nano_00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in terminal 2:
</span><br>
<span class="quotelev1">&gt; plankton$ ssh -x nano_00
</span><br>
<span class="quotelev1">&gt; nano_00$ export DISPLAY=&quot;plankton:0.0&quot;
</span><br>
<span class="quotelev1">&gt; nano_00$ xterm
</span><br>
<span class="quotelev1">&gt;
</span><br>
This experiment also gives
<br>
xterm Xt error: Can't open display: plankton:0.0
<br>
<p><span class="quotelev1">&gt; This will ssh into nano, disabling ssh X forwarding, and try to launch
</span><br>
<span class="quotelev1">&gt; an xterm. If this does not work, then something is wrong with your x
</span><br>
<span class="quotelev1">&gt; setup. If it does work, it should work with Open MPI as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
So i guess something is wrong with my X setup.
<br>
I wonder what it could be ...
<br>
Doing the same with X11 forwarding works perfectly.
<br>
But why is X11 forwarding bad?  Or differently asked,
<br>
does Opem MPI make the ssh connection in such a way
<br>
that X11 forwarding is  disabled?
<br>
<p>Thank YOu
<br>
&nbsp;&nbsp;Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4988.php">Sacerdoti, Federico: "Re: [OMPI users] openmpi credits for eager messages"</a>
<li><strong>Previous message:</strong> <a href="4986.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>In reply to:</strong> <a href="4986.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4989.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Reply:</strong> <a href="4989.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
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
