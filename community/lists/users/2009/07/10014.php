<?
$subject_val = "Re: [OMPI users] Possible openmpi bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 20 11:24:07 2009" -->
<!-- isoreceived="20090720152407" -->
<!-- sent="Mon, 20 Jul 2009 09:24:01 -0600" -->
<!-- isosent="20090720152401" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible openmpi bug?" -->
<!-- id="71d2d8cc0907200824g573193a8o28e3678c71f24c47_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF063E8E7D.07DC0AE3-ON852575F9.00536629-852575F9.005400FF_at_hc-sc.gc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Possible openmpi bug?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-20 11:24:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10015.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Previous message:</strong> <a href="10013.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>In reply to:</strong> <a href="10013.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10015.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Reply:</strong> <a href="10015.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try adjusting this:
<br>
oob_tcp_peer_retries = 10
<br>
<p>to be
<br>
<p>oob_tcp_peer_retries = 1000
<br>
<p>It should have given you an error if this failed, but let's give it a try
<br>
anyway.
<br>
<p>You might also check to see if you are hitting memory limitations. If so, or
<br>
if you just want to try anyway, try reducing the value of
<br>
coll_sync_barrier_before.
<br>
<p>Ralph
<br>
<p><p>On Mon, Jul 20, 2009 at 9:17 AM, Steven Dale &lt;steven_dale_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, now the plot is just getting weirder.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I implemented most of the changes you recommend below. We are not running
</span><br>
<span class="quotelev1">&gt; panasas, and our network is GB ethernet only, so I left the openib
</span><br>
<span class="quotelev1">&gt; parameters out as well. I also recompiled with the switches suggested in the
</span><br>
<span class="quotelev1">&gt; tlcc directory for the non-panasas file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now our test case will run on 10 nodes with 160 permutations, which is a
</span><br>
<span class="quotelev1">&gt; step forward. It does however still crash with a routed:binomial error on 10
</span><br>
<span class="quotelev1">&gt; nodes with 1600 permutations after about 14 minutes. With 800 permutations,
</span><br>
<span class="quotelev1">&gt; it runs quite happily as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ....current openmpi-mca-param.conf is now:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # $sysconf is a directory on a local disk, it is likely that changes
</span><br>
<span class="quotelev1">&gt; # to this file will need to be propagated to other nodes.  If $sysconf
</span><br>
<span class="quotelev1">&gt; # is a directory that is shared via a networked filesystem, changes to
</span><br>
<span class="quotelev1">&gt; # this file will be visible to all nodes that share this $sysconf.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # The format is straightforward: one per line, mca_param_name =
</span><br>
<span class="quotelev1">&gt; # rvalue.  Quoting is ignored (so if you use quotes or escape
</span><br>
<span class="quotelev1">&gt; # characters, they'll be included as part of the value).  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Disable run-time MPI parameter checking
</span><br>
<span class="quotelev1">&gt; #   mpi_param_check = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Note that the value &quot;~/&quot; will be expanded to the current user's home
</span><br>
<span class="quotelev1">&gt; # directory.  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Change component loading path
</span><br>
<span class="quotelev1">&gt; #   component_path = /usr/local/lib/openmpi:~/my_openmpi_components
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # See &quot;ompi_info --param all all&quot; for a full listing of Open MPI MCA
</span><br>
<span class="quotelev1">&gt; # parameters available and their default values.
</span><br>
<span class="quotelev1">&gt; orte_abort_timeout = 10
</span><br>
<span class="quotelev1">&gt; opal_set_max_sys_limits = 1
</span><br>
<span class="quotelev1">&gt; orte_no_session_dirs = /usr,/users,/home,/hcadmin
</span><br>
<span class="quotelev1">&gt; orte_tmpdir_base = /tmp
</span><br>
<span class="quotelev1">&gt; orte_allocation_required = 1
</span><br>
<span class="quotelev1">&gt; coll_sync_priority = 100
</span><br>
<span class="quotelev1">&gt; coll_sync_barrier_before = 1000
</span><br>
<span class="quotelev1">&gt; coll_hierarch_priority = 90
</span><br>
<span class="quotelev1">&gt; oob_tcp_if_include=eth3
</span><br>
<span class="quotelev1">&gt; oob_tcp_peer_retries = 10
</span><br>
<span class="quotelev1">&gt; oob_tcp_disable_family = IPv6
</span><br>
<span class="quotelev1">&gt; oob_tcp_listen_mode = listen_thread
</span><br>
<span class="quotelev1">&gt; oob_tcp_sndbuf = 65536
</span><br>
<span class="quotelev1">&gt; oob_tcp_rcvbuf = 65536
</span><br>
<span class="quotelev1">&gt; btl = sm,tcp,self
</span><br>
<span class="quotelev1">&gt; ## Setup MPI options
</span><br>
<span class="quotelev1">&gt; mpi_show_handle_leaks = 0
</span><br>
<span class="quotelev1">&gt; mpi_warn_on_fork = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Current compilation looks like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Takes about 20-25 minutes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PATH=$PATH:/usr/local/bin:;export PATH
</span><br>
<span class="quotelev1">&gt; LDFLAGS=&quot;-m64&quot;
</span><br>
<span class="quotelev1">&gt; CFLAGS=&quot;-m64&quot;
</span><br>
<span class="quotelev1">&gt; CXXFLAGS=&quot;-m64&quot;
</span><br>
<span class="quotelev1">&gt; FCFLAGS=&quot;-m64&quot;
</span><br>
<span class="quotelev1">&gt; FFLAGS=&quot;-m64&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Build and install OpenMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd openmpi/openmpi-1.3.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sh ./configure --enable-dlopen=no --enable-binaries=yes --enable-shared=yes
</span><br>
<span class="quotelev1">&gt; --enable-ipv6=no --enable-ft-thread=no
</span><br>
<span class="quotelev1">&gt; --enable-mca-no-build=crs,filem,routed-linear,snapc,pml-dr,pml-crcp2,pml-crcpw,pml-v,pml-example,crcp,pml-cm
</span><br>
<span class="quotelev1">&gt; --with-slurm=yes --with-io-romio-flags=&quot;--with-file-system=ufs+nfs&quot;
</span><br>
<span class="quotelev1">&gt; --with-memory-manager=ptmalloc2 --with-wrapper-ldflags=&quot;-m64&quot;
</span><br>
<span class="quotelev1">&gt; --with-wrapper-cxxflags=&quot;-m64&quot; --with-wrapper-fcflags=&quot;-m64&quot;
</span><br>
<span class="quotelev1">&gt; --with-wrapper-fflags=&quot;-m64&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make
</span><br>
<span class="quotelev1">&gt; make install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ____________________
</span><br>
<span class="quotelev1">&gt; Steve Dale
</span><br>
<span class="quotelev1">&gt; Senior Platform Analyst
</span><br>
<span class="quotelev1">&gt; Health Canada
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  *Ralph Castain &lt;rhc_at_[hidden]&gt;*
</span><br>
<span class="quotelev1">&gt; Sent by: users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 07/17/2009 10:35 AM
</span><br>
<span class="quotelev1">&gt;   Please respond to
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   To
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;users_at_[hidden]&gt;  cc
</span><br>
<span class="quotelev1">&gt;   Subject
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Possible openmpi bug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, just checking the obvious. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We regularly run with the exact same configuration here (i.e., slurm +
</span><br>
<span class="quotelev1">&gt; 16cpus/node) without problem on jobs that are both short and long, so it
</span><br>
<span class="quotelev1">&gt; seems doubtful that it would be an OMPI bug. However, it is possible as the
</span><br>
<span class="quotelev1">&gt; difference could be due to configuration and/or parameter settings. We have
</span><br>
<span class="quotelev1">&gt; seen some site-specific problems that are easily resolved with parameter
</span><br>
<span class="quotelev1">&gt; changes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might take a look at our (LANL's) platform files for our slurm-based
</span><br>
<span class="quotelev1">&gt; system and see if they help. You will find them in the tarball at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; contrib/platform/lanl/tlcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically, since you probably aren't running panasas (?), look at the
</span><br>
<span class="quotelev1">&gt; optimized-nopanasas and optimized-nopanasas.conf (they are a pair) files to
</span><br>
<span class="quotelev1">&gt; see how we configure the system for build, and the mca params we use to
</span><br>
<span class="quotelev1">&gt; execute applications. If you can, I would suggest giving them a try
</span><br>
<span class="quotelev1">&gt; (adjusting as required for your setup - e.g., you may want not want the -m64
</span><br>
<span class="quotelev1">&gt; flags) and see if it resolves the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 17, 2009, at 7:15 AM, Steven Dale wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think it unlikely that its a time limit thing. Firstly, slurm is set up
</span><br>
<span class="quotelev1">&gt; with no time limit on jobs, and we get the same behaviour whether or not
</span><br>
<span class="quotelev1">&gt; slurm is in the picture.
</span><br>
<span class="quotelev1">&gt; In addition, we've run several other much larger jobs with a greater number
</span><br>
<span class="quotelev1">&gt; of permutations and they complete fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This job takes about 5-10 minutes to run. We've run jobs that take a week
</span><br>
<span class="quotelev1">&gt; or more and the indivdual R process can be seen to run for days at a time
</span><br>
<span class="quotelev1">&gt; and they run fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In addition, I'd find it hard to believe (although I concede the
</span><br>
<span class="quotelev1">&gt; possibility) that jobs entirely self-contained within the same box run
</span><br>
<span class="quotelev1">&gt; slower that jobs which span 2 boxes over the network. (14 cpus vs 17 cpus
</span><br>
<span class="quotelev1">&gt; for example).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ____________________
</span><br>
<span class="quotelev1">&gt; Steve Dale
</span><br>
<span class="quotelev1">&gt; Senior Platform Analyst
</span><br>
<span class="quotelev1">&gt; Health Canada
</span><br>
<span class="quotelev1">&gt; Phone: (613)-948-4910
</span><br>
<span class="quotelev1">&gt; E-mail: *steven_dale_at_[hidden]* &lt;steven_dale_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   *Ralph Castain &lt;**rhc_at_[hidden]* &lt;rhc_at_[hidden]&gt;*&gt;*
</span><br>
<span class="quotelev1">&gt; Sent by: *users-bounces_at_[hidden]* &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 07/17/2009 01:13 AM
</span><br>
<span class="quotelev1">&gt;   Please respond to
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;*users_at_[hidden]* &lt;users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   To
</span><br>
<span class="quotelev1">&gt; Open MPI Users &lt;*users_at_[hidden]* &lt;users_at_[hidden]&gt;&gt;  cc
</span><br>
<span class="quotelev1">&gt;   Subject
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] Possible openmpi bug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;From what I can see, it looks like your job is being terminated -
</span><br>
<span class="quotelev1">&gt; something is killing mpirun. Is it possible that the job runs slowly enough
</span><br>
<span class="quotelev1">&gt; on 14 or less cpus that it simply isn't completing within your specified
</span><br>
<span class="quotelev1">&gt; time limit?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The lifeline message simply indicates that a process self-aborted because
</span><br>
<span class="quotelev1">&gt; it lost contact with its local daemon - in this case, mpirun (as that is
</span><br>
<span class="quotelev1">&gt; always daemon 0) - which means that the daemon was terminated for some
</span><br>
<span class="quotelev1">&gt; reason.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 16, 2009, at 11:15 AM, Steven Dale wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is my situation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2 Dell R900's with 16 cpus each and 64 GB RAM
</span><br>
<span class="quotelev1">&gt; OS: SuSE SLES 10 SP2 patched up to date
</span><br>
<span class="quotelev1">&gt; R version 2.9.1
</span><br>
<span class="quotelev1">&gt; Rmpi version 0.5-7
</span><br>
<span class="quotelev1">&gt; snow version 0.3-3
</span><br>
<span class="quotelev1">&gt; maanova library version 1.14.0
</span><br>
<span class="quotelev1">&gt; openmpi version 1.3.3
</span><br>
<span class="quotelev1">&gt; slurm version 2.0.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With a given set of R code, we get abnormal exits when using 14 or less
</span><br>
<span class="quotelev1">&gt; cpus. When using 15 or more, the job completes normally.
</span><br>
<span class="quotelev1">&gt; error is a variation on:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [pdp-dev-r01:22618] [[15549,1],0] routed:binomial: Connection to lifeline
</span><br>
<span class="quotelev1">&gt; [[15549,0],0] lost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; during the array permutations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Increasing the number of permutations above 200 also produces similar
</span><br>
<span class="quotelev1">&gt; results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The R code is executed with a typical command line for 14 cpus being:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sbatch -n 14 -i ./Rtest.txt --mail-type=ALL *
</span><br>
<span class="quotelev1">&gt; --mail-user=steven_dale_at_[hidden]* &lt;--mail-user=steven_dale_at_[hidden]&gt;/usr/local/bin/R --no-save
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Config.log, ompi_info, Rscript.txt and slurm outputs are attached. Network
</span><br>
<span class="quotelev1">&gt; is GB Ethernet copper tcp/ip.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think this to be an openmpi error/bug due to the routed:binomial message.
</span><br>
<span class="quotelev1">&gt; This also had the same results with openmpi-1.3.2, R 2.9.0, maanova 1.12 and
</span><br>
<span class="quotelev1">&gt; slurm 2.0.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No non-default MCA parameters are set.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/usr/local/lib.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Configuration done with defaults.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas are welcome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ____________________
</span><br>
<span class="quotelev1">&gt; Steve Dale
</span><br>
<span class="quotelev1">&gt; &lt;bugrep.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list*
</span><br>
<span class="quotelev1">&gt; **users_at_[hidden]* &lt;users_at_[hidden]&gt;*
</span><br>
<span class="quotelev1">&gt; **<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users*<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users*<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list*
</span><br>
<span class="quotelev1">&gt; **users_at_[hidden]* &lt;users_at_[hidden]&gt;*
</span><br>
<span class="quotelev1">&gt; **<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users*<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users*<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list*
</span><br>
<span class="quotelev1">&gt; **users_at_[hidden]* &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10014/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10015.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Previous message:</strong> <a href="10013.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>In reply to:</strong> <a href="10013.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10015.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>Reply:</strong> <a href="10015.php">Steven Dale: "Re: [OMPI users] Possible openmpi bug?"</a>
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
