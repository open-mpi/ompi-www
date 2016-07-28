<?
$subject_val = "[MTT users] hostlist enhancement";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 08:49:06 2008" -->
<!-- isoreceived="20080110134906" -->
<!-- sent="Thu, 10 Jan 2008 08:48:20 -0500" -->
<!-- isosent="20080110134820" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] hostlist enhancement" -->
<!-- id="A7AA0C28-BA41-4867-B597-94D42A48BAB4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [MTT users] hostlist enhancement<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 08:48:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0477.php">Pavel Shamis (Pasha): "Re: [MTT users] hostlist enhancement"</a>
<li><strong>Previous message:</strong> <a href="0475.php">Pavel Shamis (Pasha): "[MTT users] mtt reports arrive without subject."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0477.php">Pavel Shamis (Pasha): "Re: [MTT users] hostlist enhancement"</a>
<li><strong>Reply:</strong> <a href="0477.php">Pavel Shamis (Pasha): "Re: [MTT users] hostlist enhancement"</a>
<li><strong>Reply:</strong> <a href="0479.php">Ethan Mallove: "Re: [MTT users] hostlist enhancement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mellanox told me that the MTT &amp;hostlist() funclet is returning a comma- 
<br>
delimited list of hosts (and &amp;hostlist_hosts()).  That is fine for  
<br>
Open MPI, but it is not for MVAPICH -- MVAPICH requires a space- 
<br>
delimited list of hosts for their mpirun.
<br>
<p>Here's a patch that introduces an optional parameter to &amp;hostlist()  
<br>
and &amp;hostlist_hosts().  The optional parameter is a delimiter for the  
<br>
hostlist.  So if you call:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;hostlist_hosts()
<br>
<p>you'll get the same comma-delimited list that is returned today.  But  
<br>
if you call
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;hostlist_hosts(&quot; &quot;)
<br>
<p>you should get a space-delimited list.
<br>
<p>Can Mellanox try this patch and see if it works for them?  If so, I'll  
<br>
commit it to the MTT trunk.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems


</pre>
<p>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0476/hostlist.patch">hostlist.patch</a>
</ul>
<!-- attachment="hostlist.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0477.php">Pavel Shamis (Pasha): "Re: [MTT users] hostlist enhancement"</a>
<li><strong>Previous message:</strong> <a href="0475.php">Pavel Shamis (Pasha): "[MTT users] mtt reports arrive without subject."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0477.php">Pavel Shamis (Pasha): "Re: [MTT users] hostlist enhancement"</a>
<li><strong>Reply:</strong> <a href="0477.php">Pavel Shamis (Pasha): "Re: [MTT users] hostlist enhancement"</a>
<li><strong>Reply:</strong> <a href="0479.php">Ethan Mallove: "Re: [MTT users] hostlist enhancement"</a>
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
