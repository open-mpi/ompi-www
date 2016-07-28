<?
$subject_val = "Re: [OMPI users] Possible openmpi bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 20 11:47:02 2009" -->
<!-- isoreceived="20090720154702" -->
<!-- sent="Mon, 20 Jul 2009 11:47:01 -0400" -->
<!-- isosent="20090720154701" -->
<!-- name="Steven Dale" -->
<!-- email="steven_dale_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible openmpi bug?" -->
<!-- id="OF6D4A366E.CD248462-ON852575F9.00568B35-852575F9.0056AFA6_at_hc-sc.gc.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0907200824g573193a8o28e3678c71f24c47_at_mail.gmail.com" -->
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
<strong>From:</strong> Steven Dale (<em>steven_dale_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-20 11:47:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10016.php">Jed Brown: "[OMPI users] MPI_Barrier called late within ompi_mpi_finalize when MPIIO fd not closed"</a>
<li><strong>Previous message:</strong> <a href="10014.php">Ralph Castain: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>In reply to:</strong> <a href="10014.php">Ralph Castain: "Re: [OMPI users] Possible openmpi bug?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tried adjusting oob_tcp_peer_retries. Same result.
<br>
<p>I don't think it to be a memory limitation...I've got 64GB per box and 
<br>
this is only taking about 5GB. I've got no limitations set on a per-job or 
<br>
per-process basis.
<br>
<p><p>____________________
<br>
Steve Dale
<br>
Senior Platform Analyst
<br>
Health Canada
<br>
Phone: (613)-948-4910
<br>
E-mail: steven_dale_at_[hidden]
<br>
<p><p><p>Ralph Castain &lt;rhc_at_[hidden]&gt; 
<br>
Sent by: users-bounces_at_[hidden]
<br>
07/20/2009 11:24 AM
<br>
Please respond to
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><p>To
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
cc
<br>
<p>Subject
<br>
Re: [OMPI users] Possible openmpi bug?
<br>
<p><p><p><p><p><p>Try adjusting this:
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
<p>You might also check to see if you are hitting memory limitations. If so, 
<br>
or if you just want to try anyway, try reducing the value of 
<br>
coll_sync_barrier_before.
<br>
<p>Ralph
<br>
<p><p>On Mon, Jul 20, 2009 at 9:17 AM, Steven Dale &lt;steven_dale_at_[hidden]&gt; 
<br>
wrote:
<br>
<p>Okay, now the plot is just getting weirder. 
<br>
<p>I implemented most of the changes you recommend below. We are not running 
<br>
panasas, and our network is GB ethernet only, so I left the openib 
<br>
parameters out as well. I also recompiled with the switches suggested in 
<br>
the tlcc directory for the non-panasas file. 
<br>
<p>Now our test case will run on 10 nodes with 160 permutations, which is a 
<br>
step forward. It does however still crash with a routed:binomial error on 
<br>
10 nodes with 1600 permutations after about 14 minutes. With 800 
<br>
permutations, it runs quite happily as well. 
<br>
<p>....current openmpi-mca-param.conf is now: 
<br>
<p># $sysconf is a directory on a local disk, it is likely that changes 
<br>
# to this file will need to be propagated to other nodes.  If $sysconf 
<br>
# is a directory that is shared via a networked filesystem, changes to 
<br>
# this file will be visible to all nodes that share this $sysconf. 
<br>
<p># The format is straightforward: one per line, mca_param_name = 
<br>
# rvalue.  Quoting is ignored (so if you use quotes or escape 
<br>
# characters, they'll be included as part of the value).  For example: 
<br>
<p># Disable run-time MPI parameter checking 
<br>
#   mpi_param_check = 0 
<br>
<p># Note that the value &quot;~/&quot; will be expanded to the current user's home 
<br>
# directory.  For example: 
<br>
<p># Change component loading path 
<br>
#   component_path = /usr/local/lib/openmpi:~/my_openmpi_components 
<br>
<p># See &quot;ompi_info --param all all&quot; for a full listing of Open MPI MCA 
<br>
# parameters available and their default values. 
<br>
orte_abort_timeout = 10 
<br>
opal_set_max_sys_limits = 1 
<br>
orte_no_session_dirs = /usr,/users,/home,/hcadmin 
<br>
orte_tmpdir_base = /tmp 
<br>
orte_allocation_required = 1 
<br>
coll_sync_priority = 100 
<br>
coll_sync_barrier_before = 1000 
<br>
coll_hierarch_priority = 90 
<br>
oob_tcp_if_include=eth3 
<br>
oob_tcp_peer_retries = 10 
<br>
oob_tcp_disable_family = IPv6 
<br>
oob_tcp_listen_mode = listen_thread 
<br>
oob_tcp_sndbuf = 65536 
<br>
oob_tcp_rcvbuf = 65536 
<br>
btl = sm,tcp,self 
<br>
## Setup MPI options 
<br>
mpi_show_handle_leaks = 0 
<br>
mpi_warn_on_fork = 1 
<br>
<p>Current compilation looks like this: 
<br>
<p>#!/bin/sh 
<br>
<p># Takes about 20-25 minutes 
<br>
<p>PATH=$PATH:/usr/local/bin:;export PATH 
<br>
LDFLAGS=&quot;-m64&quot; 
<br>
CFLAGS=&quot;-m64&quot; 
<br>
CXXFLAGS=&quot;-m64&quot; 
<br>
FCFLAGS=&quot;-m64&quot; 
<br>
FFLAGS=&quot;-m64&quot; 
<br>
<p># Build and install OpenMPI 
<br>
<p>cd openmpi/openmpi-1.3.3 
<br>
<p>sh ./configure --enable-dlopen=no --enable-binaries=yes 
<br>
--enable-shared=yes --enable-ipv6=no --enable-ft-thread=no 
<br>
--enable-mca-no-build=crs,filem,routed-linear,snapc,pml-dr,pml-crcp2,pml-crcpw,pml-v,pml-example,crcp,pml-cm 
<br>
--with-slurm=yes --with-io-romio-flags=&quot;--with-file-system=ufs+nfs&quot; 
<br>
--with-memory-manager=ptmalloc2 --with-wrapper-ldflags=&quot;-m64&quot; 
<br>
--with-wrapper-cxxflags=&quot;-m64&quot; --with-wrapper-fcflags=&quot;-m64&quot; 
<br>
--with-wrapper-fflags=&quot;-m64&quot; 
<br>
<p>make 
<br>
make install 
<br>
<p>____________________
<br>
Steve Dale
<br>
Senior Platform Analyst
<br>
Health Canada
<br>
<p><p><p>Ralph Castain &lt;rhc_at_[hidden]&gt; 
<br>
Sent by: users-bounces_at_[hidden] 
<br>
07/17/2009 10:35 AM
<br>
<p><p>Please respond to
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><p>To
<br>
Open MPI Users &lt;users_at_[hidden]&gt; 
<br>
cc
<br>
<p>Subject
<br>
Re: [OMPI users] Possible openmpi bug?
<br>
<p><p><p><p><p><p><p><p>Okay, just checking the obvious. :-) 
<br>
<p>We regularly run with the exact same configuration here (i.e., slurm + 
<br>
16cpus/node) without problem on jobs that are both short and long, so it 
<br>
seems doubtful that it would be an OMPI bug. However, it is possible as 
<br>
the difference could be due to configuration and/or parameter settings. We 
<br>
have seen some site-specific problems that are easily resolved with 
<br>
parameter changes. 
<br>
<p>You might take a look at our (LANL's) platform files for our slurm-based 
<br>
system and see if they help. You will find them in the tarball at 
<br>
<p>contrib/platform/lanl/tlcc 
<br>
<p>Specifically, since you probably aren't running panasas (?), look at the 
<br>
optimized-nopanasas and optimized-nopanasas.conf (they are a pair) files 
<br>
to see how we configure the system for build, and the mca params we use to 
<br>
execute applications. If you can, I would suggest giving them a try 
<br>
(adjusting as required for your setup - e.g., you may want not want the 
<br>
-m64 flags) and see if it resolves the problem. 
<br>
<p>Ralph 
<br>
<p>On Jul 17, 2009, at 7:15 AM, Steven Dale wrote: 
<br>
<p><p>I think it unlikely that its a time limit thing. Firstly, slurm is set up 
<br>
with no time limit on jobs, and we get the same behaviour whether or not 
<br>
slurm is in the picture. 
<br>
In addition, we've run several other much larger jobs with a greater 
<br>
number of permutations and they complete fine. 
<br>
<p>This job takes about 5-10 minutes to run. We've run jobs that take a week 
<br>
or more and the indivdual R process can be seen to run for days at a time 
<br>
and they run fine. 
<br>
<p>In addition, I'd find it hard to believe (although I concede the 
<br>
possibility) that jobs entirely self-contained within the same box run 
<br>
slower that jobs which span 2 boxes over the network. (14 cpus vs 17 cpus 
<br>
for example). 
<br>
<p><p>____________________
<br>
Steve Dale
<br>
Senior Platform Analyst
<br>
Health Canada
<br>
Phone: (613)-948-4910
<br>
E-mail: steven_dale_at_[hidden] 
<br>
<p>Ralph Castain &lt;rhc_at_[hidden]&gt; 
<br>
Sent by: users-bounces_at_[hidden] 
<br>
07/17/2009 01:13 AM 
<br>
<p><p>Please respond to
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><p><p>To
<br>
Open MPI Users &lt;users_at_[hidden]&gt; 
<br>
cc
<br>
<p>Subject
<br>
Re: [OMPI users] Possible openmpi bug?
<br>
<p><p><p><p><p><p><p><p><p><p><span class="quotelev1">&gt;From what I can see, it looks like your job is being terminated - 
</span><br>
something is killing mpirun. Is it possible that the job runs slowly 
<br>
enough on 14 or less cpus that it simply isn't completing within your 
<br>
specified time limit? 
<br>
<p>The lifeline message simply indicates that a process self-aborted because 
<br>
it lost contact with its local daemon - in this case, mpirun (as that is 
<br>
always daemon 0) - which means that the daemon was terminated for some 
<br>
reason. 
<br>
<p><p>On Jul 16, 2009, at 11:15 AM, Steven Dale wrote: 
<br>
<p><p>Here is my situation: 
<br>
<p>2 Dell R900's with 16 cpus each and 64 GB RAM 
<br>
OS: SuSE SLES 10 SP2 patched up to date 
<br>
R version 2.9.1 
<br>
Rmpi version 0.5-7 
<br>
snow version 0.3-3 
<br>
maanova library version 1.14.0 
<br>
openmpi version 1.3.3 
<br>
slurm version 2.0.3 
<br>
<p>With a given set of R code, we get abnormal exits when using 14 or less 
<br>
cpus. When using 15 or more, the job completes normally. 
<br>
error is a variation on: 
<br>
<p>[pdp-dev-r01:22618] [[15549,1],0] routed:binomial: Connection to lifeline 
<br>
[[15549,0],0] lost 
<br>
<p>during the array permutations. 
<br>
<p>Increasing the number of permutations above 200 also produces similar 
<br>
results. 
<br>
<p>The R code is executed with a typical command line for 14 cpus being: 
<br>
<p>sbatch -n 14 -i ./Rtest.txt --mail-type=ALL 
<br>
--mail-user=steven_dale_at_[hidden] /usr/local/bin/R --no-save 
<br>
<p><p>Config.log, ompi_info, Rscript.txt and slurm outputs are attached. Network 
<br>
is GB Ethernet copper tcp/ip. 
<br>
<p><p>I think this to be an openmpi error/bug due to the routed:binomial 
<br>
message. This also had the same results with openmpi-1.3.2, R 2.9.0, 
<br>
maanova 1.12 and slurm 2.0.1. 
<br>
<p><p>No non-default MCA parameters are set. 
<br>
<p>LD_LIBRARY_PATH=/usr/local/lib. 
<br>
<p>Configuration done with defaults. 
<br>
<p>Any ideas are welcome. 
<br>
<p><p><p><p>____________________
<br>
Steve Dale
<br>
&lt;bugrep.tar.bz2&gt;_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10015/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10016.php">Jed Brown: "[OMPI users] MPI_Barrier called late within ompi_mpi_finalize when MPIIO fd not closed"</a>
<li><strong>Previous message:</strong> <a href="10014.php">Ralph Castain: "Re: [OMPI users] Possible openmpi bug?"</a>
<li><strong>In reply to:</strong> <a href="10014.php">Ralph Castain: "Re: [OMPI users] Possible openmpi bug?"</a>
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
