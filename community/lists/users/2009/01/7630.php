<?
$subject_val = "Re: [OMPI users] using ompi-server on a single node";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 09:25:44 2009" -->
<!-- isoreceived="20090105142544" -->
<!-- sent="Mon, 5 Jan 2009 07:25:36 -0700" -->
<!-- isosent="20090105142536" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using ompi-server on a single node" -->
<!-- id="4A08E633-B802-447D-AB60-B93060556EDC_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4961BF87.6080304_at_irisa.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] using ompi-server on a single node<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-05 09:25:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7631.php">Lydia Heck: "[OMPI users] using the carto facility"</a>
<li><strong>Previous message:</strong> <a href="7629.php">Thomas Ropars: "[OMPI users] using ompi-server on a single node"</a>
<li><strong>In reply to:</strong> <a href="7629.php">Thomas Ropars: "[OMPI users] using ompi-server on a single node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7636.php">Terry Frankcombe: "Re: [OMPI users] using ompi-server on a single node"</a>
<li><strong>Reply:</strong> <a href="7636.php">Terry Frankcombe: "Re: [OMPI users] using ompi-server on a single node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is currently a known limitation - shared memory currently only  
<br>
works between procs from the same job. There is an enhancement coming  
<br>
that will remove this restriction, but it won't be out for some time.
<br>
<p>Ralph
<br>
<p>On Jan 5, 2009, at 1:06 AM, Thomas Ropars wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried to use ompi-server to connect 2 processes belonging to
</span><br>
<span class="quotelev1">&gt; different jobs but running on the same computer. It works when the
</span><br>
<span class="quotelev1">&gt; computer has a network interface up. But if the only active network
</span><br>
<span class="quotelev1">&gt; interface is the local loop, it doesn't work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; According to what I understood reading the code, it is because no btl
</span><br>
<span class="quotelev1">&gt; component can be used in this case. &quot;tcp&quot; is not used because usually
</span><br>
<span class="quotelev1">&gt; it is the &quot;sm&quot; component that is used for processes on the same host.
</span><br>
<span class="quotelev1">&gt; But in that case it doesn't work because &quot;sm&quot; is supposed to work only
</span><br>
<span class="quotelev1">&gt; for processes of the same job.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know that this use-case is not very frequent  :)
</span><br>
<span class="quotelev1">&gt; But Is there a solution to make it work ? or is it a known  
</span><br>
<span class="quotelev1">&gt; limitation ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thomas
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7631.php">Lydia Heck: "[OMPI users] using the carto facility"</a>
<li><strong>Previous message:</strong> <a href="7629.php">Thomas Ropars: "[OMPI users] using ompi-server on a single node"</a>
<li><strong>In reply to:</strong> <a href="7629.php">Thomas Ropars: "[OMPI users] using ompi-server on a single node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7636.php">Terry Frankcombe: "Re: [OMPI users] using ompi-server on a single node"</a>
<li><strong>Reply:</strong> <a href="7636.php">Terry Frankcombe: "Re: [OMPI users] using ompi-server on a single node"</a>
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
