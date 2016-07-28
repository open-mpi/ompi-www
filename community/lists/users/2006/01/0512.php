<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 19 10:43:51 2006" -->
<!-- isoreceived="20060119154351" -->
<!-- sent="Thu, 19 Jan 2006 08:43:49 -0700" -->
<!-- isosent="20060119154349" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] does btl_openib work ?" -->
<!-- id="1992edda8b080c348800c08e8f3c234d_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1137620463.24430.35.camel_at_jhugly.pantasys.com" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-19 10:43:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0513.php">Jeff Squyres: "Re: [O-MPI users] Totalview question?"</a>
<li><strong>Previous message:</strong> <a href="0511.php">Jeff Squyres: "Re: [O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
<li><strong>In reply to:</strong> <a href="0510.php">Jean-Christophe Hugly: "[O-MPI users] does btl_openib work ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jean,
<br>
<p>I will be looking at this a bit later today, I don't want you to think 
<br>
we are ignoring you ;-)
<br>
<p>Thanks,
<br>
<p>Galen
<br>
<p>On Jan 18, 2006, at 2:41 PM, Jean-Christophe Hugly wrote:
<br>
<p><span class="quotelev1">&gt; More info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Environment of remotely exec'ed progs (by running mpirun ... env):
</span><br>
<span class="quotelev1">&gt; ==================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_rds_hostfile_path=/root/machines
</span><br>
<span class="quotelev1">&gt; SHELL=/bin/bash
</span><br>
<span class="quotelev1">&gt; SSH_CLIENT=10.1.40.61 42076 22
</span><br>
<span class="quotelev1">&gt; USER=root
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/opt/ompi/lib:
</span><br>
<span class="quotelev1">&gt; LS_COLORS=
</span><br>
<span class="quotelev1">&gt; MAIL=/var/mail/root
</span><br>
<span class="quotelev1">&gt; PATH=/opt/ompi/bin:/usr/bin:/bin:/usr/sbin:/sbin
</span><br>
<span class="quotelev1">&gt; PWD=/root
</span><br>
<span class="quotelev1">&gt; LANG=en_US.UTF-8
</span><br>
<span class="quotelev1">&gt; SHLVL=1
</span><br>
<span class="quotelev1">&gt; HOME=/root
</span><br>
<span class="quotelev1">&gt; LS_OPTIONS=-a -N --color=none -T 0
</span><br>
<span class="quotelev1">&gt; LOGNAME=root
</span><br>
<span class="quotelev1">&gt; SSH_CONNECTION=10.1.40.61 42076 10.1.40.63 22
</span><br>
<span class="quotelev1">&gt; _=/opt/ompi/bin/orted
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_universe=root_at_bench1:default-universe-10053
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ns_nds=env
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ns_nds_vpid_start=0
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ns_nds_num_procs=1
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_mpi_paffinity_processor=0
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ns_replica_uri=0.0.0;tcp://10.1.40.61:33050
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_gpr_replica_uri=0.0.0;tcp://10.1.40.61:33050
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_orte_base_nodename=bench2
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ns_nds_cellid=0
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ns_nds_jobid=1
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_ns_nds_vpid=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ulimits (by running mpirun ... sh -c &quot;ulimit -a&quot;):
</span><br>
<span class="quotelev1">&gt; ==================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; core file size        (blocks, -c) 0
</span><br>
<span class="quotelev1">&gt; data seg size         (kbytes, -d) unlimited
</span><br>
<span class="quotelev1">&gt; file size             (blocks, -f) unlimited
</span><br>
<span class="quotelev1">&gt; max locked memory     (kbytes, -l) 1073741824
</span><br>
<span class="quotelev1">&gt; max memory size       (kbytes, -m) unlimited
</span><br>
<span class="quotelev1">&gt; open files                    (-n) 1024
</span><br>
<span class="quotelev1">&gt; pipe size          (512 bytes, -p) 8
</span><br>
<span class="quotelev1">&gt; stack size            (kbytes, -s) 8192
</span><br>
<span class="quotelev1">&gt; cpu time             (seconds, -t) unlimited
</span><br>
<span class="quotelev1">&gt; max user processes            (-u) 81920
</span><br>
<span class="quotelev1">&gt; virtual memory        (kbytes, -v) unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I forgot anything ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jean-Christophe Hugly &lt;jice_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; PANTA
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0513.php">Jeff Squyres: "Re: [O-MPI users] Totalview question?"</a>
<li><strong>Previous message:</strong> <a href="0511.php">Jeff Squyres: "Re: [O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
<li><strong>In reply to:</strong> <a href="0510.php">Jean-Christophe Hugly: "[O-MPI users] does btl_openib work ?"</a>
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
