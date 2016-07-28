<?
$subject_val = "Re: [OMPI users] Job does not quit even when the simulation dies";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 08:44:50 2007" -->
<!-- isoreceived="20071107134450" -->
<!-- sent="Wed, 7 Nov 2007 08:44:41 -0500" -->
<!-- isosent="20071107134441" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Job does not quit even when the simulation dies" -->
<!-- id="D148BFA2-4739-4927-AE9F-FEA16075DA60_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="63646F1C-29EC-4577-AE41-BAE2A1F669E2_at_gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 08:44:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4437.php">Ralph H Castain: "Re: [OMPI users] Job does not quit even when the simulation dies"</a>
<li><strong>Previous message:</strong> <a href="4435.php">Jeff Squyres: "Re: [OMPI users] Double Standard Output for Non-MPI on Itanium Running Red Hat Enterprise Linux 4.0"</a>
<li><strong>In reply to:</strong> <a href="4418.php">Teng Lin: "[OMPI users] Job does not quit even when the simulation dies"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4437.php">Ralph H Castain: "Re: [OMPI users] Job does not quit even when the simulation dies"</a>
<li><strong>Reply:</strong> <a href="4437.php">Ralph H Castain: "Re: [OMPI users] Job does not quit even when the simulation dies"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Support for failure scenarios is something that is getting better over  
<br>
time in Open MPI.
<br>
<p>It looks like the version you are using either didn't properly catch  
<br>
that there was a failure and/or then cleanly exit all MPI processes.
<br>
<p><p>On Nov 6, 2007, at 9:01 PM, Teng Lin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just realize I have a job run for a long time, while some of the nodes
</span><br>
<span class="quotelev1">&gt; already die. Is there any way to ask other nodes to quit ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [kyla-0-1.local:09741] mca_btl_tcp_frag_send: writev failed with
</span><br>
<span class="quotelev1">&gt; errno=104
</span><br>
<span class="quotelev1">&gt; [kyla-0-1.local:09742] mca_btl_tcp_frag_send: writev failed with
</span><br>
<span class="quotelev1">&gt; errno=104
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The FAQ does mention it is related  to :
</span><br>
<span class="quotelev1">&gt;  Connection reset by peer: These types of errors usually occur after
</span><br>
<span class="quotelev1">&gt; MPI_INIT has completed, and typically indicate that an MPI process has
</span><br>
<span class="quotelev1">&gt; died unexpectedly (e.g., due to a seg fault). The specific error
</span><br>
<span class="quotelev1">&gt; message indicates that a peer MPI process tried to write to the now-
</span><br>
<span class="quotelev1">&gt; dead MPI process and failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Teng
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4437.php">Ralph H Castain: "Re: [OMPI users] Job does not quit even when the simulation dies"</a>
<li><strong>Previous message:</strong> <a href="4435.php">Jeff Squyres: "Re: [OMPI users] Double Standard Output for Non-MPI on Itanium Running Red Hat Enterprise Linux 4.0"</a>
<li><strong>In reply to:</strong> <a href="4418.php">Teng Lin: "[OMPI users] Job does not quit even when the simulation dies"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4437.php">Ralph H Castain: "Re: [OMPI users] Job does not quit even when the simulation dies"</a>
<li><strong>Reply:</strong> <a href="4437.php">Ralph H Castain: "Re: [OMPI users] Job does not quit even when the simulation dies"</a>
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
