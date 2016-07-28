<?
$subject_val = "Re: [OMPI users] checkpoint/restart facility - blcr";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 13:21:17 2014" -->
<!-- isoreceived="20140227182117" -->
<!-- sent="Thu, 27 Feb 2014 19:21:18 +0100" -->
<!-- isosent="20140227182118" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] checkpoint/restart facility - blcr" -->
<!-- id="2FF93A3E-CC1B-4947-8603-392E7603B524_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="7024D28B-BAE4-4C5E-B2A3-F8D96D1962DF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] checkpoint/restart facility - blcr<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 13:21:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23698.php">Gus Correa: "[OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="23696.php">George Bosilca: "Re: [OMPI users] checkpoint/restart facility - blcr"</a>
<li><strong>In reply to:</strong> <a href="23695.php">Ralph Castain: "Re: [OMPI users] checkpoint/restart facility - blcr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23696.php">George Bosilca: "Re: [OMPI users] checkpoint/restart facility - blcr"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The C/R framework is generic, so once the CRIU support is working I expect all previous C/R modules (BLCR and user-level) to be fully functional again.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Feb 27, 2014, at 19:15 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It is being restored, using the new CRIU support in the latest Linux kernel
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 27, 2014, at 10:11 AM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I heard that c/r support in OpenMPI was being dropped after version 1.6.x. Is this not still the case ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Le 2014-02-27 13:09, George Bosilca a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Both were supported at some point. I&#146;m not sure if any is still in a workable state in the trunk today. However, there is an ongoing effort to reinstate the coordinated approach.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 27, 2014, at 18:50 , basma a.azeem &lt;basmaabdelazeem_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i have a question about the checkpoint/restart facility of BLCR with OPEN MPI , does the checkpoint/restart solution as a whole can be considered as a coordinated or uncoordinated approach
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23697/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23698.php">Gus Correa: "[OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="23696.php">George Bosilca: "Re: [OMPI users] checkpoint/restart facility - blcr"</a>
<li><strong>In reply to:</strong> <a href="23695.php">Ralph Castain: "Re: [OMPI users] checkpoint/restart facility - blcr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23696.php">George Bosilca: "Re: [OMPI users] checkpoint/restart facility - blcr"</a>
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
