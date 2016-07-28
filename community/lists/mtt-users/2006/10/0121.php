<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  2 16:34:35 2006" -->
<!-- isoreceived="20061002203435" -->
<!-- sent="Mon, 2 Oct 2006 16:34:27 -0400" -->
<!-- isosent="20061002203427" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] [MTT bugs] [MTT] #85: Some sites still returning &amp;amp;shell(...)	for compiler version" -->
<!-- id="20061002203427.GE37980_at_sr1-ubur-07.East.Sun.COM" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="057.2e6d6990a54ab40fc3eab53a3417beab_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-10-02 16:34:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0122.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #85: Some sites still returning &amp;shell(...) for compiler version"</a>
<li><strong>Previous message:</strong> <a href="0120.php">Josh Hursey: "Re: [MTT users] Running the v1.1 nightly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0122.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #85: Some sites still returning &amp;shell(...) for compiler version"</a>
<li><strong>Reply:</strong> <a href="0122.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #85: Some sites still returning &amp;shell(...) for compiler version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sven,
<br>
<p>We noticed that mtt seems to not be grabbing the icc version
<br>
string in your results. E.g., we see this ugliness in the
<br>
HTML reports:
<br>
<p>&nbsp;&nbsp;&amp;shell(&quot;icc -v 2&gt;&amp;1 | awk '{ print \$2 }'&quot;)
<br>
<p>Unfortunately, I do not have access to an icc. Could you do
<br>
the following commands from a Bourne shell, to see if we can
<br>
get to the bottom of this?
<br>
<p>$ icc -v 2&gt;&amp;1
<br>
$ icc -v
<br>
<p>Thanks,
<br>
Ethan
<br>
<p><p>On Mon, Oct/02/2006 07:23:43PM, MTT wrote:
<br>
<span class="quotelev1">&gt; #85: Some sites still returning &amp;shell(...) for compiler version
</span><br>
<span class="quotelev1">&gt; -------------------------+--------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  Reporter:  jsquyres     |       Owner:  emallove
</span><br>
<span class="quotelev1">&gt;      Type:  defect       |      Status:  new     
</span><br>
<span class="quotelev1">&gt;  Priority:  major        |   Milestone:  v1.1    
</span><br>
<span class="quotelev1">&gt; Component:  Client side  |     Version:  trunk   
</span><br>
<span class="quotelev1">&gt;  Keywords:               |  
</span><br>
<span class="quotelev1">&gt; -------------------------+--------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  Need to figure out why this is happening.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Have they just not upgraded to latest release version, or something wrong
</span><br>
<span class="quotelev1">&gt;  in their INI file, or ...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ticket URL: &lt;<a href="http://svn.open-mpi.org/trac/mtt/ticket/85">http://svn.open-mpi.org/trac/mtt/ticket/85</a>&gt;
</span><br>
<span class="quotelev1">&gt; MTT &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev1">&gt; Issue tracking for the MPI Testing Tool.
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-bugs mailing list
</span><br>
<span class="quotelev1">&gt; mtt-bugs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-bugs">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-bugs</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0122.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #85: Some sites still returning &amp;shell(...) for compiler version"</a>
<li><strong>Previous message:</strong> <a href="0120.php">Josh Hursey: "Re: [MTT users] Running the v1.1 nightly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0122.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #85: Some sites still returning &amp;shell(...) for compiler version"</a>
<li><strong>Reply:</strong> <a href="0122.php">Jeff Squyres: "Re: [MTT users] [MTT bugs] [MTT] #85: Some sites still returning &amp;shell(...) for compiler version"</a>
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
