<?
$subject_val = "Re: [OMPI users] Issue about cm PML";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 10:52:26 2016" -->
<!-- isoreceived="20160317145226" -->
<!-- sent="Thu, 17 Mar 2016 10:52:24 -0400" -->
<!-- isosent="20160317145224" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue about cm PML" -->
<!-- id="CAHXxYDiXkVjHHhumiyRb=e1sfMrZjONqL0Bh9JLSxJMwdkTSeQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B31D3760-BA77-4F23-89CC-9C8C63D12CBB_at_cisco.com" -->
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
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 10:52:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28735.php">evelina dumitrescu: "[OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<li><strong>Previous message:</strong> <a href="28733.php">Bland, Wesley: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28727.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issue about cm PML"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you everybody. With your help I was able to resolve the issue. For
<br>
the sake of completeness, this is what I had to do:
<br>
<p>infinipath-psm was already installed in my system when OpenMPI was built
<br>
from source. However, infinipath-psm-devel was NOT installed. I suppose
<br>
that's why openMPI could not add support for PSM when built from source,
<br>
and, following Jeff's advice, I ran
<br>
<p>ompi_info | grep psm
<br>
<p>which showed no output.
<br>
<p>I had to install infinipath-psm-devel and rebuild OpenMPI. That fixed it.
<br>
<p>Durga
<br>
<p>Life is complex. It has real and imaginary parts.
<br>
<p>On Thu, Mar 17, 2016 at 9:17 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Additionally, if you run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ompi_info | grep psm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you see the PSM MTL listed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To force the CM MTL, you can run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mpirun --mca pml cm ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That won't let any BTLs be selected (because only ob1 uses the BTLs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 17, 2016, at 8:07 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; can you try to add
</span><br>
<span class="quotelev2">&gt; &gt; --mca mtl psm
</span><br>
<span class="quotelev2">&gt; &gt; to your mpirun command line ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; you might also have to blacklist the opening btl
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thursday, March 17, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello all
</span><br>
<span class="quotelev2">&gt; &gt; I have a simple test setup, consisting of two Dell workstation nodes
</span><br>
<span class="quotelev1">&gt; with similar hardware profile.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Both the nodes have (identical)
</span><br>
<span class="quotelev2">&gt; &gt; 1. Qlogic 4x DDR infiniband
</span><br>
<span class="quotelev2">&gt; &gt; 2. Chelsio C310 iWARP ethernet.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Both of these cards are connected back to back, without a switch.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; With this setup, I can run OpenMPI over TCP and openib BTL. However, if
</span><br>
<span class="quotelev1">&gt; I try to use the PSM MTL (excluding the Chelsio NIC, of course, since it
</span><br>
<span class="quotelev1">&gt; does not support PSM), I get an error from one of the nodes (details
</span><br>
<span class="quotelev1">&gt; below), which makes me think that a required library or package is not
</span><br>
<span class="quotelev1">&gt; installed, but I can't figure out what it might be.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Note that the test program is a simple 'hello world' program.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The following work:
</span><br>
<span class="quotelev2">&gt; &gt;   mpirun -np 2 --hostfile ~/hostfile -mca btl tcp,self ./mpitest
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 --hostfile ~/hostfile -mca btl self,openib -mca
</span><br>
<span class="quotelev1">&gt; btl_openib_if_exclude cxgb3_0 ./mpitest
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (I had to exclude the Chelsio card because of this issue:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://www.open-mpi.org/community/lists/users/2016/03/28661.php">https://www.open-mpi.org/community/lists/users/2016/03/28661.php</a>  )
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is what does NOT work:
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 --hostfile ~/hostfile -mca mtl psm -mca
</span><br>
<span class="quotelev1">&gt; btl_openib_if_exclude cxgb3_0 ./mpitest
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The error (from both nodes) is:
</span><br>
<span class="quotelev2">&gt; &gt;  mca: base: components_open: component pml / cm open function failed
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, I still see the &quot;Hello, world&quot; output indicating that the
</span><br>
<span class="quotelev1">&gt; program ran to completion.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is also another command that does NOT work:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 --hostfile ~/hostfile -mca pml cm -mca
</span><br>
<span class="quotelev1">&gt; btl_openib_if_exclude cxgb3_0 ./mpitest
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The error is: (from the root node)
</span><br>
<span class="quotelev2">&gt; &gt; PML cm cannot be selected
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, this time, I see no output from the program, indicating it did
</span><br>
<span class="quotelev1">&gt; not run.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The following command also fails in a similar way:
</span><br>
<span class="quotelev2">&gt; &gt;  mpirun -np 2 --hostfile ~/hostfile -mca pml cm -mca mtl psm -mca
</span><br>
<span class="quotelev1">&gt; btl_openib_if_exclude cxgb3_0 ./mpitest
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have verified that infinipath-psm is installed on both nodes. Both
</span><br>
<span class="quotelev1">&gt; nodes run identical CentOS 7 and the libraries were installed from the
</span><br>
<span class="quotelev1">&gt; CentOS repositories (i.e. were not compiled from source)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Both nodes run OMPI 1.10.2, compiled from the source RPM.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What am I doing wrong?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Durga
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28725.php">http://www.open-mpi.org/community/lists/users/2016/03/28725.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28727.php">http://www.open-mpi.org/community/lists/users/2016/03/28727.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28734/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28735.php">evelina dumitrescu: "[OMPI users] How to link the statically compiled OpenMPI library ?"</a>
<li><strong>Previous message:</strong> <a href="28733.php">Bland, Wesley: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28727.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issue about cm PML"</a>
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
