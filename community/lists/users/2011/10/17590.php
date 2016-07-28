<?
$subject_val = "Re: [OMPI users] orte_grpcomm_modex failed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 21 07:14:58 2011" -->
<!-- isoreceived="20111021111458" -->
<!-- sent="Fri, 21 Oct 2011 07:14:35 -0400" -->
<!-- isosent="20111021111435" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte_grpcomm_modex failed" -->
<!-- id="0C3C2B7A-52D0-4FE3-AF29-A16925CDCC9F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1319194803.14577.YahooMailNeo_at_web29603.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] orte_grpcomm_modex failed<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-21 07:14:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17591.php">ramu: "[OMPI users] Technical details of various MPI APIs"</a>
<li><strong>Previous message:</strong> <a href="17589.php">devendra rai: "[OMPI users] orte_grpcomm_modex failed"</a>
<li><strong>In reply to:</strong> <a href="17589.php">devendra rai: "[OMPI users] orte_grpcomm_modex failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17596.php">devendra rai: "[OMPI users] Visual debugging on the cluster"</a>
<li><strong>Reply:</strong> <a href="17596.php">devendra rai: "[OMPI users] Visual debugging on the cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This usually means that you have a Open MPI version mismatch between some of your nodes.  Meaning: on some nodes, you're finding version X.Y.Z of Open MPI by default, but on other nodes, you're finding version A.B.C.
<br>
<p><p>On Oct 21, 2011, at 7:00 AM, devendra rai wrote:
<br>
<p><span class="quotelev1">&gt; Hello Community,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been struggling with this error for quite some time:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   orte_grpcomm_modex failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Data unpack would read past end of buffer&quot; (-26) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 18945 on
</span><br>
<span class="quotelev1">&gt; node tik35x.ethz.ch exiting without calling &quot;finalize&quot;. This may
</span><br>
<span class="quotelev1">&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running this on a cluster and this has started happening only after a recent rebuild of openmpi-1.4.3. Interestingly, I have the same version of openmpi on my PC, and the same application works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have looked into this error on the web, but there is very little discussion, on the causes, or how to correct it. I asked the admin to attempt a re-install of openmpi, but I am not sure whether this will solve the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can some one please help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Devendra Rai
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17591.php">ramu: "[OMPI users] Technical details of various MPI APIs"</a>
<li><strong>Previous message:</strong> <a href="17589.php">devendra rai: "[OMPI users] orte_grpcomm_modex failed"</a>
<li><strong>In reply to:</strong> <a href="17589.php">devendra rai: "[OMPI users] orte_grpcomm_modex failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17596.php">devendra rai: "[OMPI users] Visual debugging on the cluster"</a>
<li><strong>Reply:</strong> <a href="17596.php">devendra rai: "[OMPI users] Visual debugging on the cluster"</a>
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
