<?
$subject_val = "Re: [MTT users] hostlist enhancement";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 10:44:58 2008" -->
<!-- isoreceived="20080110154458" -->
<!-- sent="Thu, 10 Jan 2008 10:44:53 -0500" -->
<!-- isosent="20080110154453" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] hostlist enhancement" -->
<!-- id="20080110154453.GR17034_at_sun.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 10:44:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0480.php">Pavel Shamis (Pasha): "Re: [MTT users] hostlist enhancement"</a>
<li><strong>Previous message:</strong> <a href="0478.php">Ethan Mallove: "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>In reply to:</strong> <a href="0476.php">Jeff Squyres: "[MTT users] hostlist enhancement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0480.php">Pavel Shamis (Pasha): "Re: [MTT users] hostlist enhancement"</a>
<li><strong>Reply:</strong> <a href="0480.php">Pavel Shamis (Pasha): "Re: [MTT users] hostlist enhancement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Works for me.
<br>
<p>-Ethan
<br>
<p>On Thu, Jan/10/2008 08:48:20AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Mellanox told me that the MTT &amp;hostlist() funclet is returning a 
</span><br>
<span class="quotelev1">&gt; comma-delimited list of hosts (and &amp;hostlist_hosts()).  That is fine for 
</span><br>
<span class="quotelev1">&gt; Open MPI, but it is not for MVAPICH -- MVAPICH requires a space-delimited 
</span><br>
<span class="quotelev1">&gt; list of hosts for their mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's a patch that introduces an optional parameter to &amp;hostlist() and 
</span><br>
<span class="quotelev1">&gt; &amp;hostlist_hosts().  The optional parameter is a delimiter for the hostlist. 
</span><br>
<span class="quotelev1">&gt;  So if you call:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	&amp;hostlist_hosts()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you'll get the same comma-delimited list that is returned today.  But if 
</span><br>
<span class="quotelev1">&gt; you call
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	&amp;hostlist_hosts(&quot; &quot;)
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<p><p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0480.php">Pavel Shamis (Pasha): "Re: [MTT users] hostlist enhancement"</a>
<li><strong>Previous message:</strong> <a href="0478.php">Ethan Mallove: "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>In reply to:</strong> <a href="0476.php">Jeff Squyres: "[MTT users] hostlist enhancement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0480.php">Pavel Shamis (Pasha): "Re: [MTT users] hostlist enhancement"</a>
<li><strong>Reply:</strong> <a href="0480.php">Pavel Shamis (Pasha): "Re: [MTT users] hostlist enhancement"</a>
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
