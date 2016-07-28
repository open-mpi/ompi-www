<?
$subject_val = "Re: [OMPI users] OpenMPI virtualization aware";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 28 09:44:56 2016" -->
<!-- isoreceived="20160528134456" -->
<!-- sent="Sat, 28 May 2016 22:44:55 +0900" -->
<!-- isosent="20160528134455" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI virtualization aware" -->
<!-- id="CAAkFZ5u=NLRY3wMrfHUe0c9=-ht=THfDFEF7dy6D0ACL_rPeaw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CABi-01XH+vdi2egBD=KNEN_CYXPEcG0j-+3rTvnFNc6mTD+nUg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI virtualization aware<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-28 09:44:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29323.php">Saliya Ekanayake: "[OMPI users] Broadcast faster than barrier"</a>
<li><strong>Previous message:</strong> <a href="29321.php">Ralph Castain: "Re: [OMPI users] OpenMPI virtualization aware"</a>
<li><strong>In reply to:</strong> <a href="29320.php">Marco D'Amico: "[OMPI users] OpenMPI virtualization aware"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Marco,
<br>
<p>are you referring mvapich2-virt
<br>
<a href="http://mvapich.cse.ohio-state.edu/userguide/virt">http://mvapich.cse.ohio-state.edu/userguide/virt</a> ?
<br>
<p>this basically adds support for SR-IOV (infiniband access from a guest) and
<br>
IVSHMEM
<br>
(shared memory between VMs running on the same host)
<br>
<p>I am not aware there has been any effort to support these, and your
<br>
contrubution is more than welcome !
<br>
<p>Feel free to follow-up on the devel mailing list
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, May 27, 2016, Marco D'Amico &lt;marco.damico91_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi I'm recently investigating in Virtualization used in HPC field, and I
</span><br>
<span class="quotelev1">&gt; found out that MVAPICH has a &quot;Virtualization aware&quot; version, that permit to
</span><br>
<span class="quotelev1">&gt; overcome the big latencies problems of using a Virtualization environment
</span><br>
<span class="quotelev1">&gt; for HPC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is if there is any similar efforts in OpenMPI, since I would
</span><br>
<span class="quotelev1">&gt; eventually contribute in it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Marco D'Amico
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29322/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29323.php">Saliya Ekanayake: "[OMPI users] Broadcast faster than barrier"</a>
<li><strong>Previous message:</strong> <a href="29321.php">Ralph Castain: "Re: [OMPI users] OpenMPI virtualization aware"</a>
<li><strong>In reply to:</strong> <a href="29320.php">Marco D'Amico: "[OMPI users] OpenMPI virtualization aware"</a>
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
