<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 28 02:07:36 2007" -->
<!-- isoreceived="20070628060736" -->
<!-- sent="Thu, 28 Jun 2007 08:07:11 +0200" -->
<!-- isosent="20070628060711" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] max_np on multi-processor nodes" -->
<!-- id="B1BB8618-12EB-41B5-B2AB-4A7254647949_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070627224254.GH10255_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-28 02:07:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0339.php">Ethan Mallove: "Re: [MTT users] max_np on multi-processor nodes"</a>
<li><strong>Previous message:</strong> <a href="0337.php">Ethan Mallove: "[MTT users] max_np on multi-processor nodes"</a>
<li><strong>In reply to:</strong> <a href="0337.php">Ethan Mallove: "[MTT users] max_np on multi-processor nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0339.php">Ethan Mallove: "Re: [MTT users] max_np on multi-processor nodes"</a>
<li><strong>Reply:</strong> <a href="0339.php">Ethan Mallove: "Re: [MTT users] max_np on multi-processor nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 28, 2007, at 12:42 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; env_max_procs uses this order of precedence to get a
</span><br>
<span class="quotelev1">&gt; &quot;max_np&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   1. Various resource managers
</span><br>
<span class="quotelev1">&gt;   2. If a global hostfile was specified
</span><br>
<span class="quotelev1">&gt;   3. If a global hostlist was specified
</span><br>
<span class="quotelev1">&gt;   4. If a global max_np was specified
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shouldn't 4 be at the top of the list?
</span><br>
<p><span class="quotelev1">&gt; I'm doing single node testing, but the fact that I have only
</span><br>
<span class="quotelev1">&gt; one node listed in hostlist causes env_max_procs to return
</span><br>
<span class="quotelev1">&gt; &quot;1&quot;. I'd like to override the 1 value with the number of
</span><br>
<span class="quotelev1">&gt; CPU's on the single node I'm running on.
</span><br>
<p>Is the :N notation not sufficient?
<br>
<p># OMPI Core: if you would rather list the hosts individually on the
<br>
# mpirun command line, list hosts here delimited by whitespace (if you
<br>
# have a hostfile listed above, this value will be ignored!).  Hosts
<br>
# can optionally be suffixed with &quot;:num&quot;, where &quot;num&quot; is an integer
<br>
# indicating how many processes may be started on that machine (if not
<br>
# specified, &quot;:1&quot; is assumed).  The sum of all of these values is used
<br>
# for &amp;env_max_np() at run time.  Example (4 uniprocessors):
<br>
#    hostlist = node1 node2 node3 node4
<br>
# Another example (4 2-way SMPs):
<br>
#    hostlist = node1:2 node2:2 node3:2 node4:2
<br>
# The &quot;hostlist&quot; value is ignored if you are running in a scheduled
<br>
# environment or if you have specified a hostfile.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0339.php">Ethan Mallove: "Re: [MTT users] max_np on multi-processor nodes"</a>
<li><strong>Previous message:</strong> <a href="0337.php">Ethan Mallove: "[MTT users] max_np on multi-processor nodes"</a>
<li><strong>In reply to:</strong> <a href="0337.php">Ethan Mallove: "[MTT users] max_np on multi-processor nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0339.php">Ethan Mallove: "Re: [MTT users] max_np on multi-processor nodes"</a>
<li><strong>Reply:</strong> <a href="0339.php">Ethan Mallove: "Re: [MTT users] max_np on multi-processor nodes"</a>
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
