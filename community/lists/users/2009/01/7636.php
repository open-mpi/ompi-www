<?
$subject_val = "Re: [OMPI users] using ompi-server on a single node";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  5 17:49:44 2009" -->
<!-- isoreceived="20090105224944" -->
<!-- sent="Tue, 06 Jan 2009 09:49:33 +1100" -->
<!-- isosent="20090105224933" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using ompi-server on a single node" -->
<!-- id="1231195773.22982.7.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="4A08E633-B802-447D-AB60-B93060556EDC_at_lanl.gov" -->
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
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-05 17:49:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7637.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="7635.php">Maciej Kazulak: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="7630.php">Ralph Castain: "Re: [OMPI users] using ompi-server on a single node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7643.php">Ralph Castain: "Re: [OMPI users] using ompi-server on a single node"</a>
<li><strong>Reply:</strong> <a href="7643.php">Ralph Castain: "Re: [OMPI users] using ompi-server on a single node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
But why doesn't tcp work on loopback?
<br>
<p><p>On Mon, 2009-01-05 at 07:25 -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; It is currently a known limitation - shared memory currently only  
</span><br>
<span class="quotelev1">&gt; works between procs from the same job. There is an enhancement coming  
</span><br>
<span class="quotelev1">&gt; that will remove this restriction, but it won't be out for some time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 5, 2009, at 1:06 AM, Thomas Ropars wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've tried to use ompi-server to connect 2 processes belonging to
</span><br>
<span class="quotelev2">&gt; &gt; different jobs but running on the same computer. It works when the
</span><br>
<span class="quotelev2">&gt; &gt; computer has a network interface up. But if the only active network
</span><br>
<span class="quotelev2">&gt; &gt; interface is the local loop, it doesn't work.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; According to what I understood reading the code, it is because no btl
</span><br>
<span class="quotelev2">&gt; &gt; component can be used in this case. &quot;tcp&quot; is not used because usually
</span><br>
<span class="quotelev2">&gt; &gt; it is the &quot;sm&quot; component that is used for processes on the same host.
</span><br>
<span class="quotelev2">&gt; &gt; But in that case it doesn't work because &quot;sm&quot; is supposed to work only
</span><br>
<span class="quotelev2">&gt; &gt; for processes of the same job.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I know that this use-case is not very frequent  :)
</span><br>
<span class="quotelev2">&gt; &gt; But Is there a solution to make it work ? or is it a known  
</span><br>
<span class="quotelev2">&gt; &gt; limitation ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thomas
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7637.php">Jeff Squyres: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="7635.php">Maciej Kazulak: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="7630.php">Ralph Castain: "Re: [OMPI users] using ompi-server on a single node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7643.php">Ralph Castain: "Re: [OMPI users] using ompi-server on a single node"</a>
<li><strong>Reply:</strong> <a href="7643.php">Ralph Castain: "Re: [OMPI users] using ompi-server on a single node"</a>
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
