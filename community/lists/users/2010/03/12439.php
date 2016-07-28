<?
$subject_val = "Re: [OMPI users] Trouble executing remote processes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 25 16:07:25 2010" -->
<!-- isoreceived="20100325200725" -->
<!-- sent="Thu, 25 Mar 2010 15:07:14 -0500" -->
<!-- isosent="20100325200714" -->
<!-- name="Robert Collyer" -->
<!-- email="rcollyer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble executing remote processes" -->
<!-- id="4BABC272.7060803_at_phys.lsu.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BAB8FE2.6030307_at_phys.lsu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble executing remote processes<br>
<strong>From:</strong> Robert Collyer (<em>rcollyer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-25 16:07:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12440.php">Matthew MacManes: "[OMPI users] qsub/SGE and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12438.php">Andreas Kn&#252;pfer: "Re: [OMPI users] Question - OTF file"</a>
<li><strong>In reply to:</strong> <a href="12437.php">Robert Collyer: "[OMPI users] Trouble executing remote processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My apologies for not sending this with the initial email.  I've enclosed 
<br>
our cluster setup.  This includes the ifconfig, ld_library_path, path, 
<br>
and fstab for three compute nodes and the file server itself.  The 
<br>
ld_library_path, path, and fstab setups are the same across the compute 
<br>
nodes, so they're only included once.  Additionally, I've included the 
<br>
config.log which you'll note turns off both f77 and f90.  This was done 
<br>
to turn on the threading in an attempt to combat the 
<br>
mca_btl_tcp_endpoint_complete_connect problem, but failed to do so.
<br>
<p>Robert Collyer wrote:
<br>
<span class="quotelev1">&gt; I'm running on a Fedora Core 9 Linux cluster with the mpi and home 
</span><br>
<span class="quotelev1">&gt; directories mounted on the compute nodes via NFS.  Since the 
</span><br>
<span class="quotelev1">&gt; executables are on a remote server, I have configured mpi with 
</span><br>
<span class="quotelev1">&gt; --disable-dlopen and have even gone as far as far enabling static and 
</span><br>
<span class="quotelev1">&gt; disabling shared.  In the process of trying to work around this 
</span><br>
<span class="quotelev1">&gt; problem, I upgraded from openmpi 1.3.3 to 1.4.1.  Also, the binaries 
</span><br>
<span class="quotelev1">&gt; were compiled with gcc 4.3.0, and the interconnect is ssh over ethernet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running from the fileserver, which is practically identical to the 
</span><br>
<span class="quotelev1">&gt; compute nodes, I can run the c++ hello world (examples/hello_cxx.cc) 
</span><br>
<span class="quotelev1">&gt; on up to three machines including the fileserver, but only two if the 
</span><br>
<span class="quotelev1">&gt; fileserver is not included in the hostname list.  In other words, 
</span><br>
<span class="quotelev1">&gt; either this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpirun -H filesrv,node1,node2 cpphello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpirun -H node1,node2 cpphello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for any number of processes functions correctly.  However, beyond the 
</span><br>
<span class="quotelev1">&gt; two remote node limit, the application just hangs.  orted shows up on 
</span><br>
<span class="quotelev1">&gt; the remote systems, but nothing happens.  Additionally, if I attempt 
</span><br>
<span class="quotelev1">&gt; to do the same thing from any of the compute nodes, any attempt to run 
</span><br>
<span class="quotelev1">&gt; on a remote node just hangs like before.  Incidentally, this behavior 
</span><br>
<span class="quotelev1">&gt; is not limited to hello world, and it occurs with non-mpi programs, 
</span><br>
<span class="quotelev1">&gt; like hostname, also.  Alternatively, when I run the c hello world 
</span><br>
<span class="quotelev1">&gt; (examples/hello_c.c), I get the same hanging behavior.  But, I also 
</span><br>
<span class="quotelev1">&gt; get mca_btl_tcp_endpoint_complete_connect &quot;no route to host&quot; errors, 
</span><br>
<span class="quotelev1">&gt; even though the processes appear to complete successfully.   Although, 
</span><br>
<span class="quotelev1">&gt; I need to kill (via ctrl-c) the overall mpi process.
</span><br>
<span class="quotelev1">&gt; As a further note, when testing this I also ran the boost::mpi tests, 
</span><br>
<span class="quotelev1">&gt; and I noticed that the all_gather_test process would eventually start 
</span><br>
<span class="quotelev1">&gt; remotely, but would peg the processor and never return.  I have not 
</span><br>
<span class="quotelev1">&gt; noticed this occur with the hello world programs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since they run better from the fileserver, I suspect it has something 
</span><br>
<span class="quotelev1">&gt; to do with the NFS mount.  But, I have no idea how to test that, or 
</span><br>
<span class="quotelev1">&gt; what to do about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rob
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
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12439/rcollyer_cluster_info.tar.gz">rcollyer_cluster_info.tar.gz</a>
</ul>
<!-- attachment="rcollyer_cluster_info.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12440.php">Matthew MacManes: "[OMPI users] qsub/SGE and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="12438.php">Andreas Kn&#252;pfer: "Re: [OMPI users] Question - OTF file"</a>
<li><strong>In reply to:</strong> <a href="12437.php">Robert Collyer: "[OMPI users] Trouble executing remote processes"</a>
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
