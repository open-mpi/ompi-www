<?
$subject_val = "Re: [OMPI users] Machinefile option in opempi-1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 22:40:48 2009" -->
<!-- isoreceived="20090620024048" -->
<!-- sent="Fri, 19 Jun 2009 20:40:43 -0600" -->
<!-- isosent="20090620024043" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Machinefile option in opempi-1.3.2" -->
<!-- id="71d2d8cc0906191940p34fe49ecj55d4057727c6e27c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="41935ab00906191235m26af1939hf360b8274a301ee5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Machinefile option in opempi-1.3.2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-19 22:40:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9652.php">Ralph Castain: "Re: [OMPI users] mpirun fails on the host"</a>
<li><strong>Previous message:</strong> <a href="9650.php">Scott Atchley: "Re: [OMPI users] Error in mx_init (error MX library incompatible with driver version)"</a>
<li><strong>In reply to:</strong> <a href="9646.php">Rajesh Sudarsan: "[OMPI users] Machinefile option in opempi-1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9653.php">Rajesh Sudarsan: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>Reply:</strong> <a href="9653.php">Rajesh Sudarsan: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you do &quot;man orte_hosts&quot;, you'll see a full explanation of how the various
<br>
machinefile options work.
<br>
The default mapper doesn't do any type of sorting - it is a round-robin
<br>
mapper that just works its way through the provided nodes. We don't reorder
<br>
them in any way.
<br>
<p>However, it does depend on the number of slots we are told each node has, so
<br>
that might be what you are encountering. If you do a --display-map and send
<br>
it along, I might be able to spot the issue.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Fri, Jun 19, 2009 at 1:35 PM, Rajesh Sudarsan &lt;rsudarsan_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tested a simple hello world program on 5 nodes each with dual
</span><br>
<span class="quotelev1">&gt; quad-core processors. I noticed that openmpi does not always follow
</span><br>
<span class="quotelev1">&gt; the order of the processors indicated in the machinefile. Depending
</span><br>
<span class="quotelev1">&gt; upon the number of processors requested, openmpi does some type of
</span><br>
<span class="quotelev1">&gt; sorting to find the best node fit for a particular job and runs on
</span><br>
<span class="quotelev1">&gt; them.  Is there a way to make openmpi to turn off this sorting and
</span><br>
<span class="quotelev1">&gt; strictly follow the order indicated in the machinefile?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec supports three options to specify the machinefile -
</span><br>
<span class="quotelev1">&gt; default-machinefile, hostfile, and machinefile. Can anyone tell what
</span><br>
<span class="quotelev1">&gt; is the difference between these three options?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rajesh
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9651/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9652.php">Ralph Castain: "Re: [OMPI users] mpirun fails on the host"</a>
<li><strong>Previous message:</strong> <a href="9650.php">Scott Atchley: "Re: [OMPI users] Error in mx_init (error MX library incompatible with driver version)"</a>
<li><strong>In reply to:</strong> <a href="9646.php">Rajesh Sudarsan: "[OMPI users] Machinefile option in opempi-1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9653.php">Rajesh Sudarsan: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
<li><strong>Reply:</strong> <a href="9653.php">Rajesh Sudarsan: "Re: [OMPI users] Machinefile option in opempi-1.3.2"</a>
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
