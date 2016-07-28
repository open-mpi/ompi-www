<?
$subject_val = "Re: [MTT users] hostlist enhancement";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 09:04:37 2008" -->
<!-- isoreceived="20080110140437" -->
<!-- sent="Thu, 10 Jan 2008 16:04:31 +0200" -->
<!-- isosent="20080110140431" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [MTT users] hostlist enhancement" -->
<!-- id="478625EF.60606_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A7AA0C28-BA41-4867-B597-94D42A48BAB4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT users] hostlist enhancement<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 09:04:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0478.php">Ethan Mallove: "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>Previous message:</strong> <a href="0476.php">Jeff Squyres: "[MTT users] hostlist enhancement"</a>
<li><strong>In reply to:</strong> <a href="0476.php">Jeff Squyres: "[MTT users] hostlist enhancement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0479.php">Ethan Mallove: "Re: [MTT users] hostlist enhancement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mellanox will try.
<br>
10x!
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Mellanox told me that the MTT &amp;hostlist() funclet is returning a 
</span><br>
<span class="quotelev1">&gt; comma-delimited list of hosts (and &amp;hostlist_hosts()).  That is fine 
</span><br>
<span class="quotelev1">&gt; for Open MPI, but it is not for MVAPICH -- MVAPICH requires a 
</span><br>
<span class="quotelev1">&gt; space-delimited list of hosts for their mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's a patch that introduces an optional parameter to &amp;hostlist() 
</span><br>
<span class="quotelev1">&gt; and &amp;hostlist_hosts().  The optional parameter is a delimiter for the 
</span><br>
<span class="quotelev1">&gt; hostlist.  So if you call:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     &amp;hostlist_hosts()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you'll get the same comma-delimited list that is returned today.  But 
</span><br>
<span class="quotelev1">&gt; if you call
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     &amp;hostlist_hosts(&quot; &quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you should get a space-delimited list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can Mellanox try this patch and see if it works for them?  If so, I'll 
</span><br>
<span class="quotelev1">&gt; commit it to the MTT trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><pre>
-- 
Pavel Shamis (Pasha)
Mellanox Technologies
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0478.php">Ethan Mallove: "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>Previous message:</strong> <a href="0476.php">Jeff Squyres: "[MTT users] hostlist enhancement"</a>
<li><strong>In reply to:</strong> <a href="0476.php">Jeff Squyres: "[MTT users] hostlist enhancement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0479.php">Ethan Mallove: "Re: [MTT users] hostlist enhancement"</a>
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
