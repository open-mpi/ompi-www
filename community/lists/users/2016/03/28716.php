<?
$subject_val = "Re: [OMPI users] locked memory and queue pairs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 15:37:49 2016" -->
<!-- isoreceived="20160316193749" -->
<!-- sent="Wed, 16 Mar 2016 19:37:46 +0000" -->
<!-- isosent="20160316193746" -->
<!-- name="Cabral, Matias A" -->
<!-- email="matias.a.cabral_at_[hidden]" -->
<!-- subject="Re: [OMPI users] locked memory and queue pairs" -->
<!-- id="39196F20B4590A4A8337B6A6F7F0FD8D853E37E0_at_FMSMSX102.amr.corp.intel.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5604EA0B-380C-4649-A528-560367FBB32D_at_intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] locked memory and queue pairs<br>
<strong>From:</strong> Cabral, Matias A (<em>matias.a.cabral_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-16 15:37:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28717.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Previous message:</strong> <a href="28715.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Maybe in reply to:</strong> <a href="28673.php">Michael Di Domenico: "[OMPI users] locked memory and queue pairs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28717.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Reply:</strong> <a href="28717.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Michael,
<br>

<br>
I may be missing some context, if you are using the qlogic cards you will always want to use the psm mtl (-mca pml cm -mca mtl psm) and not openib btl. As Tom suggest, confirm the limits are setup on every node: could it be the alltoall is reaching a node that &quot;others&quot; are not? Please share the command line and the error message.  
<br>

<br>
Thanks, 
<br>

<br>
_MAC
<br>

<br>
<span class="quotelev2">&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: Michael Di Domenico &lt;mdidomenico4_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] locked memory and queue pairs
</span><br>
<span class="quotelev2">&gt;&gt; Date: March 16, 2016 at 11:32:01 AM EDT
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Mar 10, 2016 at 11:54 AM, Michael Di Domenico 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mdidomenico4_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when i try to run an openmpi job with &gt;128 ranks (16 ranks per node) 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using alltoall or alltoallv, i'm getting an error that the process 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was unable to get a queue pair.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i've checked the max locked memory settings across my machines;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using ulimit -l in and outside of mpirun and they're all set to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unlimited pam modules to ensure pam_limits.so is loaded and working 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the /etc/security/limits.conf is set for soft/hard mem to unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i tried a couple of quick mpi config settings i could think of;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca mtl ^psm no affect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca btl_openib_flags 1 no affect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the openmpi faq says to tweak some mtt values in /sys, but since i'm 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not on mellanox that doesn't apply to me
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the machines are rhel 6.7, kernel 2.6.32-573.12.1(with bundled 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ofed), running on qlogic single-port infiniband cards, psm is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enabled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other collectives seem to run okay, it seems to only be alltoall 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comms that fail and only at scale
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i believe (but can't prove) that this worked at one point, but i 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can't recall when i last tested it.  so it's reasonable to assume 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that some change to the system is preventing this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the question is, where should i start poking to find it?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; bump?
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28713.php">http://www.open-mpi.org/community/lists/users/2016/03/28713.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Jeff Squyres
</span><br>
<span class="quotelev1">&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;For corporate legal information go to: 
</span><br>
<span class="quotelev1">&gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28717.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Previous message:</strong> <a href="28715.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Maybe in reply to:</strong> <a href="28673.php">Michael Di Domenico: "[OMPI users] locked memory and queue pairs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28717.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Reply:</strong> <a href="28717.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
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
