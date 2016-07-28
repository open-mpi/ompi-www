<?
$subject_val = "Re: [OMPI users] Issue about cm PML";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 08:07:11 2016" -->
<!-- isoreceived="20160317120711" -->
<!-- sent="Thu, 17 Mar 2016 21:07:10 +0900" -->
<!-- isosent="20160317120710" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Issue about cm PML" -->
<!-- id="CAAkFZ5scNuTW8-KUhdC4izYp1yxgZwnhypsoW_ZUTMqatL_SYQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHXxYDiq=jCCqszhbMSEy2OSKiUzo-QBSeSKNvUAx7fjBrwdAA_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 08:07:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28726.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Previous message:</strong> <a href="28724.php">Ralph Castain: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>In reply to:</strong> <a href="28721.php">dpchoudh .: "[OMPI users] Issue about cm PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28727.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issue about cm PML"</a>
<li><strong>Reply:</strong> <a href="28727.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issue about cm PML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
can you try to add
<br>
--mca mtl psm
<br>
to your mpirun command line ?
<br>
<p>you might also have to blacklist the opening btl
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, March 17, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt; I have a simple test setup, consisting of two Dell workstation nodes with
</span><br>
<span class="quotelev1">&gt; similar hardware profile.
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
<span class="quotelev1">&gt; With this setup, I can run OpenMPI over TCP and openib BTL. However, if I
</span><br>
<span class="quotelev1">&gt; try to use the PSM MTL (excluding the Chelsio NIC, of course, since it does
</span><br>
<span class="quotelev1">&gt; not support PSM), I get an error from one of the nodes (details below),
</span><br>
<span class="quotelev1">&gt; which makes me think that a required library or package is not installed,
</span><br>
<span class="quotelev1">&gt; but I can't figure out what it might be.
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
<span class="quotelev1">&gt; mpirun -np 2 --hostfile ~/hostfile -mca btl self,openib -mca
</span><br>
<span class="quotelev1">&gt; btl_openib_if_exclude cxgb3_0 ./mpitest
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
<span class="quotelev1">&gt; mpirun -np 2 --hostfile ~/hostfile -mca mtl psm -mca btl_openib_if_exclude
</span><br>
<span class="quotelev1">&gt; cxgb3_0 ./mpitest
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error (from both nodes) is:
</span><br>
<span class="quotelev1">&gt;  mca: base: components_open: component pml / cm open function failed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I still see the &quot;Hello, world&quot; output indicating that the program
</span><br>
<span class="quotelev1">&gt; ran to completion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is also another command that does NOT work:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --hostfile ~/hostfile -mca pml cm -mca btl_openib_if_exclude
</span><br>
<span class="quotelev1">&gt; cxgb3_0 ./mpitest
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error is: (from the root node)
</span><br>
<span class="quotelev1">&gt; PML cm cannot be selected
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, this time, I see no output from the program, indicating it did
</span><br>
<span class="quotelev1">&gt; not run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following command also fails in a similar way:
</span><br>
<span class="quotelev1">&gt;  mpirun -np 2 --hostfile ~/hostfile -mca pml cm -mca mtl psm -mca
</span><br>
<span class="quotelev1">&gt; btl_openib_if_exclude cxgb3_0 ./mpitest
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have verified that infinipath-psm is installed on both nodes. Both nodes
</span><br>
<span class="quotelev1">&gt; run identical CentOS 7 and the libraries were installed from the CentOS
</span><br>
<span class="quotelev1">&gt; repositories (i.e. were not compiled from source)
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28725/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28726.php">Michael Di Domenico: "Re: [OMPI users] locked memory and queue pairs"</a>
<li><strong>Previous message:</strong> <a href="28724.php">Ralph Castain: "Re: [OMPI users] Strange problem with mpirun and LIGGGHTS after reboot of machine"</a>
<li><strong>In reply to:</strong> <a href="28721.php">dpchoudh .: "[OMPI users] Issue about cm PML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28727.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issue about cm PML"</a>
<li><strong>Reply:</strong> <a href="28727.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Issue about cm PML"</a>
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
