<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 28 11:21:21 2007" -->
<!-- isoreceived="20070628152121" -->
<!-- sent="Thu, 28 Jun 2007 11:20:31 -0400" -->
<!-- isosent="20070628152031" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] max_np on multi-processor nodes" -->
<!-- id="20070628152031.GL16327_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B1BB8618-12EB-41B5-B2AB-4A7254647949_at_cisco.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-28 11:20:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0340.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] max_np on multi-processor nodes"</a>
<li><strong>Previous message:</strong> <a href="0338.php">Jeff Squyres: "Re: [MTT users] max_np on multi-processor nodes"</a>
<li><strong>In reply to:</strong> <a href="0338.php">Jeff Squyres: "Re: [MTT users] max_np on multi-processor nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0340.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] max_np on multi-processor nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jun/28/2007 08:07:11AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 28, 2007, at 12:42 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; env_max_procs uses this order of precedence to get a
</span><br>
<span class="quotelev2">&gt; &gt; &quot;max_np&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   1. Various resource managers
</span><br>
<span class="quotelev2">&gt; &gt;   2. If a global hostfile was specified
</span><br>
<span class="quotelev2">&gt; &gt;   3. If a global hostlist was specified
</span><br>
<span class="quotelev2">&gt; &gt;   4. If a global max_np was specified
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Shouldn't 4 be at the top of the list?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm doing single node testing, but the fact that I have only
</span><br>
<span class="quotelev2">&gt; &gt; one node listed in hostlist causes env_max_procs to return
</span><br>
<span class="quotelev2">&gt; &gt; &quot;1&quot;. I'd like to override the 1 value with the number of
</span><br>
<span class="quotelev2">&gt; &gt; CPU's on the single node I'm running on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is the :N notation not sufficient?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # OMPI Core: if you would rather list the hosts individually on the
</span><br>
<span class="quotelev1">&gt; # mpirun command line, list hosts here delimited by whitespace (if you
</span><br>
<span class="quotelev1">&gt; # have a hostfile listed above, this value will be ignored!).  Hosts
</span><br>
<span class="quotelev1">&gt; # can optionally be suffixed with &quot;:num&quot;, where &quot;num&quot; is an integer
</span><br>
<span class="quotelev1">&gt; # indicating how many processes may be started on that machine (if not
</span><br>
<span class="quotelev1">&gt; # specified, &quot;:1&quot; is assumed).  The sum of all of these values is used
</span><br>
<span class="quotelev1">&gt; # for &amp;env_max_np() at run time.  Example (4 uniprocessors):
</span><br>
<span class="quotelev1">&gt; #    hostlist = node1 node2 node3 node4
</span><br>
<span class="quotelev1">&gt; # Another example (4 2-way SMPs):
</span><br>
<span class="quotelev1">&gt; #    hostlist = node1:2 node2:2 node3:2 node4:2
</span><br>
<span class="quotelev1">&gt; # The &quot;hostlist&quot; value is ignored if you are running in a scheduled
</span><br>
<span class="quotelev1">&gt; # environment or if you have specified a hostfile.
</span><br>
<p><p>Oops. That's what I need. 
<br>
<p>But re the above precedence list, if I wanted to
<br>
oversubscribe using a hostlist and a manually overriden
<br>
max_np param, wouldn't we still need to put item #4 at the
<br>
top of the list?
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0340.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] max_np on multi-processor nodes"</a>
<li><strong>Previous message:</strong> <a href="0338.php">Jeff Squyres: "Re: [MTT users] max_np on multi-processor nodes"</a>
<li><strong>In reply to:</strong> <a href="0338.php">Jeff Squyres: "Re: [MTT users] max_np on multi-processor nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0340.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] max_np on multi-processor nodes"</a>
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
