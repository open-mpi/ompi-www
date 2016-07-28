<?
$subject_val = "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 12:42:19 2015" -->
<!-- isoreceived="20150811164219" -->
<!-- sent="Tue, 11 Aug 2015 09:42:18 -0700" -->
<!-- isosent="20150811164218" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?" -->
<!-- id="CAMD57odBXWx93zLQmoV5XEPJS7hR-bcA3vW9bTPa-hfy8exu6A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="87h9o5g4sw.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-11 12:42:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27429.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="27427.php">Dave Love: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="27427.php">Dave Love: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27429.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="27429.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Because only the devel package includes the necessary pieces to set memory
<br>
affinity.
<br>
<p><p>On Tue, Aug 11, 2015 at 9:37 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Bill
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You need numactl-devel on the nodes. Not having them means we cannot
</span><br>
<span class="quotelev1">&gt; ensure
</span><br>
<span class="quotelev2">&gt; &gt; memory is bound local to the procs, which will hurt performance but not
</span><br>
<span class="quotelev2">&gt; &gt; much else. There is an MCA param to turn off the warnings if you choose
</span><br>
<span class="quotelev1">&gt; not
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27427.php">http://www.open-mpi.org/community/lists/users/2015/08/27427.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27428/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27429.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="27427.php">Dave Love: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="27427.php">Dave Love: "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27429.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="27429.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What Red Hat Enterprise/CentOS NUMA libraries are recommended/required for OpenMPI?"</a>
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
