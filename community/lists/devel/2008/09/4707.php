<?
$subject_val = "Re: [OMPI devel] RDMA_CM";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 25 14:16:14 2008" -->
<!-- isoreceived="20080925181614" -->
<!-- sent="Thu, 25 Sep 2008 21:16:09 +0300" -->
<!-- isosent="20080925181609" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RDMA_CM" -->
<!-- id="453d39990809251116p7b3c44e8r5d3b5bbfcb1ab865_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="661D50AF-C714-49C4-AD9E-CFBE825D5B5A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RDMA_CM<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-25 14:16:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4708.php">Aurélien Bouteiller: "Re: [OMPI devel] trunk temporarily closed"</a>
<li><strong>Previous message:</strong> <a href="4706.php">Lenny Verkhovsky: "[OMPI devel] Fwd: svn error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think it's a sm bug again I tested with the latest revision, I think it
<br>
was r19588 ( before Jeff shuted the svn down).
<br>
I run the mpi_p test ( BW between pairs of nodes ) with many nodes and it
<br>
got stacked, it also works without sm.  I am sorry I couldn't test it
<br>
earlier.
<br>
# i=1 ; while [ 1 ] ; do echo &quot; ****************** i=$i ******** &quot;;
<br>
/home/USERS/lenny/OMPI_ORTE_TRUNK/bin/mpirun -np 84 -hostfile hostfile
<br>
/home/USERS/lenny/TESTS/TRUNK/mpi_p1_4_TRUNK -t bw ; let i=i+1; sleep 1 ;
<br>
done
<br>
&nbsp;&nbsp;****************** i=1 ********
<br>
BW (84) (size min max avg) 1048576 660.152249 2075.115025 1325.838953
<br>
&nbsp;&nbsp;****************** i=2 ********
<br>
[stucked]
<br>
<p>p.s. I will be on vacation until 5-Oct, I hope to fallow mails and run few
<br>
tests.
<br>
Best Regards
<br>
Lenny.
<br>
On Thu, Sep 25, 2008 at 6:44 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Note that there *are* other changes to the openib BTL in that branch
</span><br>
<span class="quotelev1">&gt; besides just the CPC (meaning: changing the CPC meant changing other things
</span><br>
<span class="quotelev1">&gt; as well).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So if you can run with the trunk and you can't run with this branch, then
</span><br>
<span class="quotelev1">&gt; there may be something different wrong with the hg tree other than just the
</span><br>
<span class="quotelev1">&gt; RDMA CM stuff...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know what you find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 25, 2008, at 9:21 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  after few more tests is seems like -mca btl_openib_cpc_include oob hangs
</span><br>
<span class="quotelev2">&gt;&gt; too.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so, maybe it's something environmental.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; let me recheck it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 9/25/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: On Sep 25, 2008, at
</span><br>
<span class="quotelev2">&gt;&gt; 7:25 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have RDMACM got hanged on np=16 ( dual core dual cpu).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yuck.  I've run all of the intel tests at 32 procs (4ppn).  What exactly
</span><br>
<span class="quotelev2">&gt;&gt; did you run and where exactly did it hang?  Can you get stack traces?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it seems like it got hanged on the last machine (
</span><br>
<span class="quotelev2">&gt;&gt; witch1,witch2,witch3,witch4)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; when I ctrl-c the mpirun, I got defunct procs on the last machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #ps -ef |grep  mpi
</span><br>
<span class="quotelev2">&gt;&gt; root 5321 5320 98 14:09 ? 00:03:47 [mpi_p_TRUNK_rdm] &lt;defunct&gt;
</span><br>
<span class="quotelev2">&gt;&gt; root 5322 5320 98 14:09 ? 00:03:47 [mpi_p_TRUNK_rdm] &lt;defunct&gt;
</span><br>
<span class="quotelev2">&gt;&gt; root 5323 5320 98 14:09 ? 00:03:47 [mpi_p_TRUNK_rdm] &lt;defunct&gt;
</span><br>
<span class="quotelev2">&gt;&gt; root 5324 5320 98 14:09 ? 00:03:47 [mpi_p_TRUNK_rdm] &lt;defunct&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are you seeing ORTE problems?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4707/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4708.php">Aurélien Bouteiller: "Re: [OMPI devel] trunk temporarily closed"</a>
<li><strong>Previous message:</strong> <a href="4706.php">Lenny Verkhovsky: "[OMPI devel] Fwd: svn error"</a>
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
