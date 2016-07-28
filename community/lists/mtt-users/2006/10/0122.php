<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  2 16:46:50 2006" -->
<!-- isoreceived="20061002204650" -->
<!-- sent="Mon, 02 Oct 2006 16:46:30 -0400" -->
<!-- isosent="20061002204630" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] [MTT bugs] [MTT] #85: Some sites still returning &amp;amp;shell(...) for compiler version" -->
<!-- id="C146F2E6.292A2%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061002203427.GE37980_at_sr1-ubur-07.East.Sun.COM" -->
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
<strong>Date:</strong> 2006-10-02 16:46:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0123.php">Jeff Squyres: "[MTT users] Ibm test suite build &quot;failing&quot;"</a>
<li><strong>Previous message:</strong> <a href="0121.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #85: Some sites still returning &amp;shell(...)	for compiler version"</a>
<li><strong>In reply to:</strong> <a href="0121.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #85: Some sites still returning &amp;shell(...)	for compiler version"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This really reflect a client problem somehow -- it's not that &quot;icc -v&quot; is
<br>
not running properly, it's that MTT is not escaping to run &amp;shell() at all.
<br>
<p>Sven -- what version of MTT are you running?  I.e., what SVN URL and r
<br>
number are you using for the runs?  Can you send your .ini file?
<br>
<p>Thanks!
<br>
<p><p>On 10/2/06 4:34 PM, &quot;Ethan Mallove&quot; &lt;ethan.mallove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Sven,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We noticed that mtt seems to not be grabbing the icc version
</span><br>
<span class="quotelev1">&gt; string in your results. E.g., we see this ugliness in the
</span><br>
<span class="quotelev1">&gt; HTML reports:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   &amp;shell(&quot;icc -v 2&gt;&amp;1 | awk '{ print \$2 }'&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, I do not have access to an icc. Could you do
</span><br>
<span class="quotelev1">&gt; the following commands from a Bourne shell, to see if we can
</span><br>
<span class="quotelev1">&gt; get to the bottom of this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ icc -v 2&gt;&amp;1
</span><br>
<span class="quotelev1">&gt; $ icc -v
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Oct/02/2006 07:23:43PM, MTT wrote:
</span><br>
<span class="quotelev2">&gt;&gt; #85: Some sites still returning &amp;shell(...) for compiler version
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------+--------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;  Reporter:  jsquyres     |       Owner:  emallove
</span><br>
<span class="quotelev2">&gt;&gt;      Type:  defect       |      Status:  new
</span><br>
<span class="quotelev2">&gt;&gt;  Priority:  major        |   Milestone:  v1.1
</span><br>
<span class="quotelev2">&gt;&gt; Component:  Client side  |     Version:  trunk
</span><br>
<span class="quotelev2">&gt;&gt;  Keywords:               |
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------+--------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;  Need to figure out why this is happening.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Have they just not upgraded to latest release version, or something wrong
</span><br>
<span class="quotelev2">&gt;&gt;  in their INI file, or ...?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Ticket URL: &lt;<a href="http://svn.open-mpi.org/trac/mtt/ticket/85">http://svn.open-mpi.org/trac/mtt/ticket/85</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MTT &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Issue tracking for the MPI Testing Tool.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-bugs mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-bugs_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-bugs">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-bugs</a>
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
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0123.php">Jeff Squyres: "[MTT users] Ibm test suite build &quot;failing&quot;"</a>
<li><strong>Previous message:</strong> <a href="0121.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #85: Some sites still returning &amp;shell(...)	for compiler version"</a>
<li><strong>In reply to:</strong> <a href="0121.php">Ethan Mallove: "Re: [MTT users] [MTT bugs] [MTT] #85: Some sites still returning &amp;shell(...)	for compiler version"</a>
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
