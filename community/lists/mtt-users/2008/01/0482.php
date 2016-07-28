<?
$subject_val = "Re: [MTT users] hostlist enhancement";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 11:51:00 2008" -->
<!-- isoreceived="20080110165100" -->
<!-- sent="Thu, 10 Jan 2008 11:26:23 -0500" -->
<!-- isosent="20080110162623" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] hostlist enhancement" -->
<!-- id="3E7AE825-F604-4EB2-98CD-ED67F3B5291F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47864607.8030506_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 11:26:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0483.php">Ethan Mallove: "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>Previous message:</strong> <a href="0481.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>In reply to:</strong> <a href="0480.php">Pavel Shamis (Pasha): "Re: [MTT users] hostlist enhancement"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ya, that's a bozo on my part.  I'll commit without the //.
<br>
<p><p>On Jan 10, 2008, at 11:21 AM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt; Here is reply from Oleg :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Patch didn't work.
</span><br>
<span class="quotelev1">&gt; Broken code -  my $ret = join(/$delimiter/, @hosts); in
</span><br>
<span class="quotelev1">&gt; lib/MTT/Values/Functions.pm &gt; sub hostlist_hosts
</span><br>
<span class="quotelev1">&gt; Must be $ret = join($delimiter, @hosts);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Works for me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jan/10/2008 08:48:20AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mellanox told me that the MTT &amp;hostlist() funclet is returning a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; comma-delimited list of hosts (and &amp;hostlist_hosts()).  That is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fine for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI, but it is not for MVAPICH -- MVAPICH requires a space- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; delimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list of hosts for their mpirun.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's a patch that introduces an optional parameter to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;hostlist() and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;hostlist_hosts().  The optional parameter is a delimiter for the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostlist.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So if you call:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	&amp;hostlist_hosts()
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you'll get the same comma-delimited list that is returned today.   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you call
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	&amp;hostlist_hosts(&quot; &quot;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you should get a space-delimited list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can Mellanox try this patch and see if it works for them?  If so,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll
</span><br>
<span class="quotelev3">&gt;&gt;&gt; commit it to the MTT trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Pavel Shamis (Pasha)
</span><br>
<span class="quotelev1">&gt; Mellanox Technologies
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0483.php">Ethan Mallove: "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>Previous message:</strong> <a href="0481.php">Pavel Shamis (Pasha): "Re: [MTT users] mtt reports arrive without subject."</a>
<li><strong>In reply to:</strong> <a href="0480.php">Pavel Shamis (Pasha): "Re: [MTT users] hostlist enhancement"</a>
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
