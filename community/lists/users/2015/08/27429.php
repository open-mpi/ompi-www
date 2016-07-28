<?
$subject_val = "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 12:49:48 2015" -->
<!-- isoreceived="20150811164948" -->
<!-- sent="Tue, 11 Aug 2015 16:49:45 +0000" -->
<!-- isosent="20150811164945" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?" -->
<!-- id="E07150E2-988E-4F97-BA0C-8C30078289E6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57odBXWx93zLQmoV5XEPJS7hR-bcA3vW9bTPa-hfy8exu6A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-11 12:49:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27430.php">Amos Leffler: "[OMPI users] Problem in using openmpi-1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27428.php">Ralph Castain: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="27428.php">Ralph Castain: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27435.php">Dave Love: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="27435.php">Dave Love: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think Dave's point is that numactl-devel (and numactl) is only needed for *building* Open MPI.  Users only need numactl to *run* Open MPI.
<br>
<p>Specifically, numactl-devel contains the .h files we need to compile OMPI against libnumactl:
<br>
<p>$ rpm -ql numactl-devel
<br>
/usr/include/numa.h
<br>
/usr/include/numacompat1.h
<br>
/usr/include/numaif.h
<br>
/usr/lib64/libnuma.a
<br>
/usr/lib64/libnuma.so
<br>
/usr/share/man/man3/numa.3.gz
<br>
<p>Note that the .so is a sym link to .so.1, in the main numactl package:
<br>
<p>$ rpm -ql numactl
<br>
/usr/bin/memhog
<br>
/usr/bin/migratepages
<br>
/usr/bin/migspeed
<br>
/usr/bin/numactl
<br>
/usr/bin/numademo
<br>
/usr/bin/numastat
<br>
/usr/lib64/libnuma.so.1
<br>
/usr/share/man/man8/migratepages.8.gz
<br>
/usr/share/man/man8/migspeed.8.gz
<br>
/usr/share/man/man8/numactl.8.gz
<br>
/usr/share/man/man8/numastat.8.gz
<br>
<p><p><span class="quotelev1">&gt; On Aug 11, 2015, at 12:42 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because only the devel package includes the necessary pieces to set memory affinity.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 11, 2015 at 9:37 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Bill
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You need numactl-devel on the nodes. Not having them means we cannot ensure
</span><br>
<span class="quotelev2">&gt; &gt; memory is bound local to the procs, which will hurt performance but not
</span><br>
<span class="quotelev2">&gt; &gt; much else. There is an MCA param to turn off the warnings if you choose not
</span><br>
<span class="quotelev2">&gt; &gt; to install the libs: hwloc_base_mem_bind_failure_action=silent
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why should you need the -devel package on the compute nodes?  (It only
</span><br>
<span class="quotelev1">&gt; contains the .h and .so files.)  The RHEL and Fedora packages don't
</span><br>
<span class="quotelev1">&gt; require it and work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [For an up-to-date OMPI, you can rebuild the package against the current
</span><br>
<span class="quotelev1">&gt; tarball, at least after the chaos caused by RHEL 6.6 updating
</span><br>
<span class="quotelev1">&gt; incompatibly to 1.8.  Otherwise use the Fedora packaging, which is kept
</span><br>
<span class="quotelev1">&gt; quite current.]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27427.php">http://www.open-mpi.org/community/lists/users/2015/08/27427.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27428.php">http://www.open-mpi.org/community/lists/users/2015/08/27428.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27430.php">Amos Leffler: "[OMPI users] Problem in using openmpi-1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27428.php">Ralph Castain: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="27428.php">Ralph Castain: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27435.php">Dave Love: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="27435.php">Dave Love: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
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
