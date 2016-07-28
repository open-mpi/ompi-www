<?
$subject_val = "Re: [OMPI users] using ompi-server on a single node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  6 09:29:25 2009" -->
<!-- isoreceived="20090106142925" -->
<!-- sent="Tue, 6 Jan 2009 07:29:17 -0700" -->
<!-- isosent="20090106142917" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using ompi-server on a single node" -->
<!-- id="3505FBFD-E4B4-4875-AAF8-7E82BA1CCC4D_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1231195773.22982.7.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Date:</strong> 2009-01-06 09:29:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7644.php">Ralph Castain: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="7642.php">Mahmoud Payami: "Re: [OMPI users] question running on heterogeneous systems"</a>
<li><strong>In reply to:</strong> <a href="7636.php">Terry Frankcombe: "Re: [OMPI users] using ompi-server on a single node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The code that discovers local interfaces specifically ignores any  
<br>
interfaces that are not up or are just local loopbacks. My guess is  
<br>
that the person who wrote that code long, long ago was assuming that  
<br>
the sole purpose was to talk to remote nodes, not to loop back onto  
<br>
yourself.
<br>
<p>I imagine it could be changed to include loopback, but I would first  
<br>
need to work with other developers to ensure there are no unexpected  
<br>
consequences in doing so.
<br>
<p>Ralph
<br>
<p>On Jan 5, 2009, at 3:49 PM, Terry Frankcombe wrote:
<br>
<p><span class="quotelev1">&gt; But why doesn't tcp work on loopback?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, 2009-01-05 at 07:25 -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It is currently a known limitation - shared memory currently only
</span><br>
<span class="quotelev2">&gt;&gt; works between procs from the same job. There is an enhancement coming
</span><br>
<span class="quotelev2">&gt;&gt; that will remove this restriction, but it won't be out for some time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 5, 2009, at 1:06 AM, Thomas Ropars wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've tried to use ompi-server to connect 2 processes belonging to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different jobs but running on the same computer. It works when the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; computer has a network interface up. But if the only active network
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interface is the local loop, it doesn't work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; According to what I understood reading the code, it is because no  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component can be used in this case. &quot;tcp&quot; is not used because  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usually
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is the &quot;sm&quot; component that is used for processes on the same  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But in that case it doesn't work because &quot;sm&quot; is supposed to work  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for processes of the same job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I know that this use-case is not very frequent  :)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But Is there a solution to make it work ? or is it a known
</span><br>
<span class="quotelev3">&gt;&gt;&gt; limitation ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thomas
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7644.php">Ralph Castain: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="7642.php">Mahmoud Payami: "Re: [OMPI users] question running on heterogeneous systems"</a>
<li><strong>In reply to:</strong> <a href="7636.php">Terry Frankcombe: "Re: [OMPI users] using ompi-server on a single node"</a>
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
