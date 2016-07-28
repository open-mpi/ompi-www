<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 08:11:21 2012" -->
<!-- isoreceived="20120209131121" -->
<!-- sent="Thu, 09 Feb 2012 14:06:53 +0100" -->
<!-- isosent="20120209130653" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun" -->
<!-- id="b21764a8-9216-4d80-86cb-225df504703b_at_email.android.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BF4F382F-3FF1-4F24-80E7-55AA394AC8D7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 08:06:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10366.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10364.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10361.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10367.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10367.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres &lt;jsquyres_at_[hidden]&gt; a &#195;&#169;crit&#194;&#160;:
<br>
<p><span class="quotelev1">&gt;On Feb 9, 2012, at 7:50 AM, Chris Samuel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just so that I understand this better -- if a process is bound in a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpuset, will tools like hwloc's lstopo only show the Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors *in that cpuset*?  I.e., does it not have any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; visibility of the processors outside of its cpuset?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe that was the intention - there's no real benefit to knowing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; about resources that you can't access or use (and will likely get an 
</span><br>
<span class="quotelev2">&gt;&gt; error if you do) to my mind.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The real question, however, is how are IO devices represented if you
</span><br>
<span class="quotelev1">&gt;don't do WHOLE_SUBSYSTEM?  I.e., what about IO devices that are not
</span><br>
<span class="quotelev1">&gt;local to the socket of your cpuset, for example?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Take this sample image, for example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/projects/hwloc/devel09-pci.png">http://www.open-mpi.org/projects/hwloc/devel09-pci.png</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;What if my cpuset is only on Socket P#0?  What exactly will be reported
</span><br>
<span class="quotelev1">&gt;via (WHOLE_SUBSYSTEM | HWLOC_TOPOLOGY_FLAG_WHOLE_IO)?
</span><br>
<p>I actually fixed something related to this case in 1.3.2. The device will be attached to the root object in this case iirc.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10366.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10364.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10361.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10367.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10367.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
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
