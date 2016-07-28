<?
$subject_val = "Re: [OMPI users] requirement on ssh when run openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  1 04:21:50 2013" -->
<!-- isoreceived="20130801082150" -->
<!-- sent="Thu, 1 Aug 2013 10:21:19 +0200" -->
<!-- isosent="20130801082119" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] requirement on ssh when run openmpi" -->
<!-- id="F875BDFB-700B-4E8F-B2E8-E89F8A5778E0_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="30c2f966.1831.14036e85a8c.Coremail.qsmeng_at_126.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] requirement on ssh when run openmpi<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-01 04:21:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22422.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Previous message:</strong> <a href="22420.php">Paul Kapinos: "Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/07/22418.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22422.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Reply:</strong> <a href="22422.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 01.08.2013 um 00:45 schrieb meng:
<br>
<p><span class="quotelev1">&gt; Dear Dani and Reuti,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; either install openmpi on each node, and setup  /etc/profile.d/openmpi.{c,}sh and /etc/ld.so.conf.d/openmpi.conf files on both (preferred) or install to a common file system (e.g. nfs mount) and still use profile and ldconfig to setup environment. &gt; 
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;      I choose to install openmpi on each mode.  
</span><br>
<span class="quotelev1">&gt;      But I dont know the difference between the following the two methods in setting PATH. First method, I set PATH ans LD_LIBRARY_PATH in .bashrc and then source .bashrc. The second as Dani suggested. But it seems not easy to set openmpi.csh. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Where was Open MPI installed to? Maybe you need to set the $PATH for a non-interactive login in your ~/.bashrc to include this location on the slave node. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       I install openmpi at /usr/local/openmpi-1.6.5 on both computers. and the two computers now can access each other without passwd required. I set the path and ld_library_path in .bashrc and source it.
</span><br>
<p>It will be sourced automatically.
<br>
<p>I was assuming that you are using bash, for csh it would be different.
<br>
<p>The command:
<br>
<p>$ ssh c2 which orted
<br>
<p>must succeed. Does:
<br>
<p>$ ssh c2 echo \$PATH
<br>
<p>show the path(s) you added in ~/.bashrc on the other machine?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;      I still get the problems as before. In detail, the problem is as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  bash: orted: command not found
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 9118) died unexpectedly with status 127 while attempting
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
<span class="quotelev1">&gt; -------------------------------------------------------------! -------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; meng
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22422.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Previous message:</strong> <a href="22420.php">Paul Kapinos: "Re: [OMPI users] Big job, InfiniBand, MPI_Alltoallv and ibv_create_qp failed"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/07/22418.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22422.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Reply:</strong> <a href="22422.php">meng : "Re: [OMPI users] requirement on ssh when run openmpi"</a>
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
