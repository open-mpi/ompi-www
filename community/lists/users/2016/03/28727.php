<?
$subject_val = "Re: [OMPI users] Issue about cm PML";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 09:17:37 2016" -->
<!-- isoreceived="20160317131737" -->
<!-- sent="Thu, 17 Mar 2016 13:17:34 +0000" -->
<!-- isosent="20160317131734" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue about cm PML" -->
<!-- id="B31D3760-BA77-4F23-89CC-9C8C63D12CBB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5scNuTW8-KUhdC4izYp1yxgZwnhypsoW_ZUTMqatL_SYQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Issue about cm PML<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 09:17:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28728.php">Dave Love: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Previous message:</strong> <a href="28726.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>In reply to:</strong> <a href="28725.php">Gilles Gouaillardet: "Re: [OMPI users] Issue about cm PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28734.php">dpchoudh .: "Re: [OMPI users] Issue about cm PML"</a>
<li><strong>Reply:</strong> <a href="28734.php">dpchoudh .: "Re: [OMPI users] Issue about cm PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Additionally, if you run
<br>
<p>&nbsp;&nbsp;ompi_info | grep psm
<br>
<p>Do you see the PSM MTL listed?
<br>
<p>To force the CM MTL, you can run:
<br>
<p>&nbsp;&nbsp;mpirun --mca pml cm ...
<br>
<p>That won't let any BTLs be selected (because only ob1 uses the BTLs).
<br>
<p><p><span class="quotelev1">&gt; On Mar 17, 2016, at 8:07 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; can you try to add
</span><br>
<span class="quotelev1">&gt; --mca mtl psm
</span><br>
<span class="quotelev1">&gt; to your mpirun command line ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you might also have to blacklist the opening btl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thursday, March 17, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt; I have a simple test setup, consisting of two Dell workstation nodes with similar hardware profile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both the nodes have (identical)
</span><br>
<span class="quotelev1">&gt; 1. Qlogic 4x DDR infiniband
</span><br>
<span class="quotelev1">&gt; 2. Chelsio C310 iWARP ethernet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both of these cards are connected back to back, without a switch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With this setup, I can run OpenMPI over TCP and openib BTL. However, if I try to use the PSM MTL (excluding the Chelsio NIC, of course, since it does not support PSM), I get an error from one of the nodes (details below), which makes me think that a required library or package is not installed, but I can't figure out what it might be.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that the test program is a simple 'hello world' program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following work:
</span><br>
<span class="quotelev1">&gt;   mpirun -np 2 --hostfile ~/hostfile -mca btl tcp,self ./mpitest
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --hostfile ~/hostfile -mca btl self,openib -mca btl_openib_if_exclude cxgb3_0 ./mpitest
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (I had to exclude the Chelsio card because of this issue:
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/community/lists/users/2016/03/28661.php">https://www.open-mpi.org/community/lists/users/2016/03/28661.php</a>  )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is what does NOT work:
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --hostfile ~/hostfile -mca mtl psm -mca btl_openib_if_exclude cxgb3_0 ./mpitest
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error (from both nodes) is: 
</span><br>
<span class="quotelev1">&gt;  mca: base: components_open: component pml / cm open function failed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I still see the &quot;Hello, world&quot; output indicating that the program ran to completion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is also another command that does NOT work:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --hostfile ~/hostfile -mca pml cm -mca btl_openib_if_exclude cxgb3_0 ./mpitest
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error is: (from the root node)
</span><br>
<span class="quotelev1">&gt; PML cm cannot be selected
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, this time, I see no output from the program, indicating it did not run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following command also fails in a similar way:
</span><br>
<span class="quotelev1">&gt;  mpirun -np 2 --hostfile ~/hostfile -mca pml cm -mca mtl psm -mca btl_openib_if_exclude cxgb3_0 ./mpitest
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have verified that infinipath-psm is installed on both nodes. Both nodes run identical CentOS 7 and the libraries were installed from the CentOS repositories (i.e. were not compiled from source)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both nodes run OMPI 1.10.2, compiled from the source RPM.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What am I doing wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28725.php">http://www.open-mpi.org/community/lists/users/2016/03/28725.php</a>
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
<li><strong>Next message:</strong> <a href="28728.php">Dave Love: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Previous message:</strong> <a href="28726.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>In reply to:</strong> <a href="28725.php">Gilles Gouaillardet: "Re: [OMPI users] Issue about cm PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28734.php">dpchoudh .: "Re: [OMPI users] Issue about cm PML"</a>
<li><strong>Reply:</strong> <a href="28734.php">dpchoudh .: "Re: [OMPI users] Issue about cm PML"</a>
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
