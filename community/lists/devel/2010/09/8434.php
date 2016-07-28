<?
$subject_val = "Re: [OMPI devel] Possible memory leak";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  1 04:14:35 2010" -->
<!-- isoreceived="20100901081435" -->
<!-- sent="Wed, 1 Sep 2010 10:07:36 +0200 (CEST)" -->
<!-- isosent="20100901080736" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Possible memory leak" -->
<!-- id="alpine.DEB.2.00.1009010951310.9212_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E717D708_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Possible memory leak<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-01 04:07:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8435.php">Chris Samuel: "[OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8433.php">Larry Baker: "[OMPI devel] Fwd:  Fwd:  1.5rc5 has been posted"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8431.php">ananda.mudar_at_[hidden]: "[OMPI devel] Possible memory leak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8436.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Possible memory leak"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi ananda,
<br>
<p>I didn't try to run your program, but this seems logical to me.
<br>
<p>The problem with calling MPI_Bcast repeatedly is that you may have an 
<br>
infinite desynchronization between the sender and the receiver(s). 
<br>
MPI_Bcast is an unidirectional operation. It does not necessary block 
<br>
until the receiver(s) gets the message, hence causing a huge number of 
<br>
messages to be buffered (and in the case of ft-enable-cr, I guess 
<br>
everything is saved until an operation going the other way is done).
<br>
<p>To &quot;solve&quot; this issue, the sync collective component has been created to 
<br>
perform a barrier every N operations. So, running with -mca coll 
<br>
basic,sync should make the problem disappear. I don't think it is really a 
<br>
memory leak, the memory used is needed (in case of fault) and should be 
<br>
freed at the next operation going the other way (reduce, barrier, 
<br>
recv/send).
<br>
<p>This seems to be the classical problem of MPI_Bcast benchmarks. Real 
<br>
applications usually don't suffer this kind of problems.
<br>
<p>Sylvain
<br>
<p>On Tue, 31 Aug 2010, ananda.mudar_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run the attached program with the following arguments, the size of MPI processes keep increasing alarmingly (I saw that the size grew from 18M to 12G in under 10 minutes) making me suspect that there is a major memory leak:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -am ft-enable-cr --mca coll basic -np 2 &lt;name of the executable&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run this program without checkpoint control ie; remove &quot;-am ft-enable-cr&quot;,  the size of MPI processes stays constant.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also if I run this program without setting &quot;--mca coll basic&quot;, the size of the MPI processes stays constant.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I set the mca parameter to &quot;--mca coll basic&quot; during my debugging attempts of the problem related to checkpointing the program that has repetitive MPI_Bcast() calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FYI, I am using OpenMPI v1.4.2 with BLCR 0.8.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ananda
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ananda B Mudar, PMP
</span><br>
<span class="quotelev1">&gt; Senior Technical Architect
</span><br>
<span class="quotelev1">&gt; Wipro Technologies
</span><br>
<span class="quotelev1">&gt; Ph: 972 765 8093
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.wipro.com
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8435.php">Chris Samuel: "[OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8433.php">Larry Baker: "[OMPI devel] Fwd:  Fwd:  1.5rc5 has been posted"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8431.php">ananda.mudar_at_[hidden]: "[OMPI devel] Possible memory leak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8436.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Possible memory leak"</a>
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
