<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  2 14:52:37 2007" -->
<!-- isoreceived="20070102195237" -->
<!-- sent="Tue, 2 Jan 2007 15:52:29 -0400 (VET)" -->
<!-- isosent="20070102195229" -->
<!-- name="jcolmenares_at_[hidden]" -->
<!-- email="jcolmenares_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted: command not found" -->
<!-- id="2987.201.242.105.201.1167767549.squirrel_at_belial.ula.ve" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="89331552-8F2A-4ED3-B21A-B6BCD33C7E90_at_cs.utk.edu" -->
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
<strong>From:</strong> <a href="mailto:jcolmenares_at_[hidden]?Subject=Re:%20[OMPI%20users]%20orted:%20command%20not%20found"><em>jcolmenares_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-01-02 14:52:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2417.php">Gurhan Ozen: "Re: [OMPI users] orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="2415.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "[OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2414.php">George Bosilca: "Re: [OMPI users] orted: command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2417.php">Gurhan Ozen: "Re: [OMPI users] orted: command not found"</a>
<li><strong>Reply:</strong> <a href="2417.php">Gurhan Ozen: "Re: [OMPI users] orted: command not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; First you should make sure that PATH and LD_LIBRARY_PATH are defined
</span><br>
<span class="quotelev1">&gt; in the section of your .bashrc file that get parsed for non
</span><br>
<span class="quotelev1">&gt; interactive sessions. Run &quot;mpirun -np 1 printenv&quot; and check if PATH
</span><br>
<span class="quotelev1">&gt; and LD_LIBRARY_PATH have the values you expect.
</span><br>
<p>in fact they do:
<br>
<p>bernie_at_bernie-1:~/proyecto$ mpirun -np 1 printenv
<br>
SHELL=/bin/bash
<br>
SSH_CLIENT=192.168.1.142 4109 22
<br>
USER=bernie
<br>
LD_LIBRARY_PATH=/usr/local/openmpi/lib:/usr/local/openmpi/lib:
<br>
MAIL=/var/mail/bernie
<br>
PATH=/usr/local/openmpi/bin:/usr/local/openmpi/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/bin/X11:/usr/games
<br>
PWD=/home/bernie
<br>
LANG=en_US.UTF-8
<br>
HISTCONTROL=ignoredups
<br>
SHLVL=1
<br>
HOME=/home/bernie
<br>
MPI_DIR=/usr/local/openmpi
<br>
LOGNAME=bernie
<br>
SSH_CONNECTION=192.168.1.142 4109 192.168.1.113 22
<br>
LESSOPEN=| /usr/bin/lesspipe %s
<br>
LESSCLOSE=/usr/bin/lesspipe %s %s
<br>
_=/usr/local/openmpi/bin/orted
<br>
OMPI_MCA_universe=bernie_at_bernie-1:default-universe
<br>
OMPI_MCA_ns_nds=env
<br>
OMPI_MCA_ns_nds_vpid_start=0
<br>
OMPI_MCA_ns_nds_num_procs=1
<br>
OMPI_MCA_mpi_paffinity_processor=0
<br>
OMPI_MCA_ns_replica_uri=0.0.0;tcp://192.168.1.142:4775
<br>
OMPI_MCA_gpr_replica_uri=0.0.0;tcp://192.168.1.142:4775
<br>
OMPI_MCA_orte_base_nodename=192.168.1.113
<br>
OMPI_MCA_ns_nds_cellid=0
<br>
OMPI_MCA_ns_nds_jobid=1
<br>
OMPI_MCA_ns_nds_vpid=0
<br>
<p><p><span class="quotelev1">&gt; For your second question you should give the path to your prueba.bin
</span><br>
<span class="quotelev1">&gt; executable. I'll do something like &quot;mpirun --prefix /usr/local/
</span><br>
<span class="quotelev1">&gt; openmpi -np 2 ./prueba.bin&quot;. The reason is that usually &quot;.&quot; is not in
</span><br>
<span class="quotelev1">&gt; the PATH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>bernie_at_bernie-1:~/proyecto$ mpirun --prefix /usr/local/openmpi -np 2
<br>
./prueba.bin
<br>
--------------------------------------------------------------------------
<br>
Failed to find or execute the following executable:
<br>
<p>Host:       bernie-3
<br>
Executable: ./prueba.bin
<br>
<p>Cannot continue.
<br>
--------------------------------------------------------------------------
<br>
<p>and the file IS there:
<br>
<p>bernie_at_bernie-1:~/proyecto$ ls prueba*
<br>
prueba.bin  prueba.f90  prueba.f90~
<br>
<p><p>I must be missing something pretty silly, but have been looking around for
<br>
days to no avail!
<br>
<p>Jose
<br>
<p>thanks
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2417.php">Gurhan Ozen: "Re: [OMPI users] orted: command not found"</a>
<li><strong>Previous message:</strong> <a href="2415.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "[OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2414.php">George Bosilca: "Re: [OMPI users] orted: command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2417.php">Gurhan Ozen: "Re: [OMPI users] orted: command not found"</a>
<li><strong>Reply:</strong> <a href="2417.php">Gurhan Ozen: "Re: [OMPI users] orted: command not found"</a>
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
