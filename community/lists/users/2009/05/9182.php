<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 09:37:38 2009" -->
<!-- isoreceived="20090504133738" -->
<!-- sent="Mon, 4 May 2009 21:50:14 +0800" -->
<!-- isosent="20090504135014" -->
<!-- name="jan" -->
<!-- email="jan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3" -->
<!-- id="20090504135017.M35621_at_wavelink.com.tw" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] users Digest, Vol 1217, Issue 2, Message3" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3<br>
<strong>From:</strong> jan (<em>jan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-04 09:50:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9183.php">Kritiraj Sajadah: "Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<li><strong>Previous message:</strong> <a href="9181.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9149.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9202.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Reply:</strong> <a href="9202.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Jeff. I have passed the mail to the IB vendor Dell company(the 
<br>
blade was ordered from Dell Taiwan), but he todl me that he didn't 
<br>
understand  &quot;layer 0 diagnostics&quot;. Coluld you help us to get more 
<br>
information of &quot;layer 0 diagnostics&quot;. Thanks again.
<br>
<p>Regards,
<br>
<p>Gloria Jan
<br>
Wavelink Technology Inc.
<br>
<p><p><span class="quotelev1">&gt; As I've indicated a few times in this thread:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Have you run layer 0 diagnostics to know that your fabric is clean?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You might want to contact your IB vendor to find out how to do that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 4, 2009, at 4:34 AM, jan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have updated the firmware of Infiniband module on Dell M600, but the
</span><br>
<span class="quotelev2">&gt;&gt; problem still occured.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -hostfile clusternode -np 16 --byslot --mca btl  openib,sm,self
</span><br>
<span class="quotelev2">&gt;&gt; $HOME/test/cpi
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 on node1
</span><br>
<span class="quotelev2">&gt;&gt; Process 11 on node2
</span><br>
<span class="quotelev2">&gt;&gt; Process 8 on node2
</span><br>
<span class="quotelev2">&gt;&gt; Process 6 on node1
</span><br>
<span class="quotelev2">&gt;&gt; Process 4 on node1
</span><br>
<span class="quotelev2">&gt;&gt; Process 14 on node2
</span><br>
<span class="quotelev2">&gt;&gt; Process 3 on node1
</span><br>
<span class="quotelev2">&gt;&gt; Process 2 on node1
</span><br>
<span class="quotelev2">&gt;&gt; Process 9 on node2
</span><br>
<span class="quotelev2">&gt;&gt; Process 5 on node1
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 on node1
</span><br>
<span class="quotelev2">&gt;&gt; Process 7 on node1
</span><br>
<span class="quotelev2">&gt;&gt; Process 10 on node2
</span><br>
<span class="quotelev2">&gt;&gt; Process 15 on node2
</span><br>
<span class="quotelev2">&gt;&gt; Process 13 on node2
</span><br>
<span class="quotelev2">&gt;&gt; Process 12 on node2
</span><br>
<span class="quotelev2">&gt;&gt; [node1][[3175,1],0][btl_openib_component.c:3029:poll_device] error 
</span><br>
<span class="quotelev2">&gt;&gt; polling
</span><br>
<span class="quotelev2">&gt;&gt; HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt; = = = = = = = 
</span><br>
<span class="quotelev2">&gt;&gt; ======================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this problem unsolvable?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Gloria Jan
</span><br>
<span class="quotelev2">&gt;&gt; Wavelink Technology Inc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9183.php">Kritiraj Sajadah: "Re: [OMPI users] mca: base: component_find: unable to open/usr/local/lib/openmpi/mca_crs_blcr: file not found (ignored)"</a>
<li><strong>Previous message:</strong> <a href="9181.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9149.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9202.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Reply:</strong> <a href="9202.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
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
