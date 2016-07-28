<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  2 15:21:31 2007" -->
<!-- isoreceived="20070102202131" -->
<!-- sent="Tue, 2 Jan 2007 15:21:26 -0500" -->
<!-- isosent="20070102202126" -->
<!-- name="Gurhan Ozen" -->
<!-- email="gurhan.ozen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted: command not found" -->
<!-- id="5849f1820701021221lfd69b44rd38e15008b244cca_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5849f1820701021159l74c03bb5j41f229dbc2d02fff_at_mail.gmail.com" -->
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
<strong>From:</strong> Gurhan Ozen (<em>gurhan.ozen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-02 15:21:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2420.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2418.php">jcolmenares_at_[hidden]: "Re: [OMPI users] orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="2417.php">Gurhan Ozen: "Re: [OMPI users] orted: command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2421.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] orted: command not found"</a>
<li><strong>Reply:</strong> <a href="2421.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] orted: command not found"</a>
<li><strong>Reply:</strong> <a href="2422.php">jcolmenares_at_[hidden]: "Re: [OMPI users] orted: command not found"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/2/07, Gurhan Ozen &lt;gurhan.ozen_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On 1/2/07, jcolmenares_at_[hidden] &lt;jcolmenares_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; First you should make sure that PATH and LD_LIBRARY_PATH are defined
</span><br>
<span class="quotelev3">&gt; &gt; &gt; in the section of your .bashrc file that get parsed for non
</span><br>
<span class="quotelev3">&gt; &gt; &gt; interactive sessions. Run &quot;mpirun -np 1 printenv&quot; and check if PATH
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and LD_LIBRARY_PATH have the values you expect.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; in fact they do:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; bernie_at_bernie-1:~/proyecto$ mpirun -np 1 printenv
</span><br>
<span class="quotelev2">&gt; &gt; SHELL=/bin/bash
</span><br>
<span class="quotelev2">&gt; &gt; SSH_CLIENT=192.168.1.142 4109 22
</span><br>
<span class="quotelev2">&gt; &gt; USER=bernie
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH=/usr/local/openmpi/lib:/usr/local/openmpi/lib:
</span><br>
<span class="quotelev2">&gt; &gt; MAIL=/var/mail/bernie
</span><br>
<span class="quotelev2">&gt; &gt; PATH=/usr/local/openmpi/bin:/usr/local/openmpi/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/bin/X11:/usr/games
</span><br>
<span class="quotelev2">&gt; &gt; PWD=/home/bernie
</span><br>
<span class="quotelev2">&gt; &gt; LANG=en_US.UTF-8
</span><br>
<span class="quotelev2">&gt; &gt; HISTCONTROL=ignoredups
</span><br>
<span class="quotelev2">&gt; &gt; SHLVL=1
</span><br>
<span class="quotelev2">&gt; &gt; HOME=/home/bernie
</span><br>
<span class="quotelev2">&gt; &gt; MPI_DIR=/usr/local/openmpi
</span><br>
<span class="quotelev2">&gt; &gt; LOGNAME=bernie
</span><br>
<span class="quotelev2">&gt; &gt; SSH_CONNECTION=192.168.1.142 4109 192.168.1.113 22
</span><br>
<span class="quotelev2">&gt; &gt; LESSOPEN=| /usr/bin/lesspipe %s
</span><br>
<span class="quotelev2">&gt; &gt; LESSCLOSE=/usr/bin/lesspipe %s %s
</span><br>
<span class="quotelev2">&gt; &gt; _=/usr/local/openmpi/bin/orted
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_universe=bernie_at_bernie-1:default-universe
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_ns_nds=env
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_ns_nds_vpid_start=0
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_ns_nds_num_procs=1
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_mpi_paffinity_processor=0
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_ns_replica_uri=0.0.0;tcp://192.168.1.142:4775
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_gpr_replica_uri=0.0.0;tcp://192.168.1.142:4775
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_orte_base_nodename=192.168.1.113
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_ns_nds_cellid=0
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_ns_nds_jobid=1
</span><br>
<span class="quotelev2">&gt; &gt; OMPI_MCA_ns_nds_vpid=0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For your second question you should give the path to your prueba.bin
</span><br>
<span class="quotelev3">&gt; &gt; &gt; executable. I'll do something like &quot;mpirun --prefix /usr/local/
</span><br>
<span class="quotelev3">&gt; &gt; &gt; openmpi -np 2 ./prueba.bin&quot;. The reason is that usually &quot;.&quot; is not in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the PATH.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; bernie_at_bernie-1:~/proyecto$ mpirun --prefix /usr/local/openmpi -np 2
</span><br>
<span class="quotelev2">&gt; &gt; ./prueba.bin
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Failed to find or execute the following executable:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Host:       bernie-3
</span><br>
<span class="quotelev2">&gt; &gt; Executable: ./prueba.bin
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cannot continue.
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and the file IS there:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; bernie_at_bernie-1:~/proyecto$ ls prueba*
</span><br>
<span class="quotelev2">&gt; &gt; prueba.bin  prueba.f90  prueba.f90~
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Wait a minute.. you are running mpirun from bernie-1 without
<br>
proving any hostfile or hostnames .. So both processes should be
<br>
running on bernie-1 host, yet the error says it can't find the
<br>
executable on bernie-3. Why is this? Make sure that the file exists on
<br>
bernie-3 and is executable.
<br>
<p>&nbsp;&nbsp;&nbsp;gurhan
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I must be missing something pretty silly, but have been looking around for
</span><br>
<span class="quotelev2">&gt; &gt; days to no avail!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    What are the permissions on the file? Is it an executable file?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    gurhan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jose
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2420.php">Reese Faucette: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2418.php">jcolmenares_at_[hidden]: "Re: [OMPI users] orted: command not found"</a>
<li><strong>In reply to:</strong> <a href="2417.php">Gurhan Ozen: "Re: [OMPI users] orted: command not found"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2421.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] orted: command not found"</a>
<li><strong>Reply:</strong> <a href="2421.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] orted: command not found"</a>
<li><strong>Reply:</strong> <a href="2422.php">jcolmenares_at_[hidden]: "Re: [OMPI users] orted: command not found"</a>
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
