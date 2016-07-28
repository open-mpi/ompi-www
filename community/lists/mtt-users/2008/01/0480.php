<?
$subject_val = "Re: [MTT users] hostlist enhancement";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 11:21:33 2008" -->
<!-- isoreceived="20080110162133" -->
<!-- sent="Thu, 10 Jan 2008 18:21:27 +0200" -->
<!-- isosent="20080110162127" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [MTT users] hostlist enhancement" -->
<!-- id="47864607.8030506_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080110154453.GR17034_at_sun.com" -->
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
<strong>Date:</strong> 2008-01-10 11:21:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0481.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>Previous message:</strong> <a href="0479.php">Ethan Mallove: "Re: [MTT users] hostlist enhancement"</a>
<li><strong>In reply to:</strong> <a href="0479.php">Ethan Mallove: "Re: [MTT users] hostlist enhancement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0482.php">Jeff Squyres: "Re: [MTT users] hostlist enhancement"</a>
<li><strong>Reply:</strong> <a href="0482.php">Jeff Squyres: "Re: [MTT users] hostlist enhancement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is reply from Oleg :
<br>
<p>The Patch didn't work.
<br>
Broken code -  my $ret = join(/$delimiter/, @hosts); in
<br>
lib/MTT/Values/Functions.pm &gt; sub hostlist_hosts
<br>
Must be $ret = join($delimiter, @hosts);
<br>
<p><p><p>Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; Works for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jan/10/2008 08:48:20AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox told me that the MTT &amp;hostlist() funclet is returning a 
</span><br>
<span class="quotelev2">&gt;&gt; comma-delimited list of hosts (and &amp;hostlist_hosts()).  That is fine for 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI, but it is not for MVAPICH -- MVAPICH requires a space-delimited 
</span><br>
<span class="quotelev2">&gt;&gt; list of hosts for their mpirun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's a patch that introduces an optional parameter to &amp;hostlist() and 
</span><br>
<span class="quotelev2">&gt;&gt; &amp;hostlist_hosts().  The optional parameter is a delimiter for the hostlist. 
</span><br>
<span class="quotelev2">&gt;&gt;  So if you call:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	&amp;hostlist_hosts()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you'll get the same comma-delimited list that is returned today.  But if 
</span><br>
<span class="quotelev2">&gt;&gt; you call
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	&amp;hostlist_hosts(&quot; &quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you should get a space-delimited list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can Mellanox try this patch and see if it works for them?  If so, I'll 
</span><br>
<span class="quotelev2">&gt;&gt; commit it to the MTT trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
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
<li><strong>Next message:</strong> <a href="0481.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>Previous message:</strong> <a href="0479.php">Ethan Mallove: "Re: [MTT users] hostlist enhancement"</a>
<li><strong>In reply to:</strong> <a href="0479.php">Ethan Mallove: "Re: [MTT users] hostlist enhancement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0482.php">Jeff Squyres: "Re: [MTT users] hostlist enhancement"</a>
<li><strong>Reply:</strong> <a href="0482.php">Jeff Squyres: "Re: [MTT users] hostlist enhancement"</a>
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
