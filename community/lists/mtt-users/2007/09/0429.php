<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 25 13:22:33 2007" -->
<!-- isoreceived="20070925172233" -->
<!-- sent="Tue, 25 Sep 2007 13:22:28 -0400" -->
<!-- isosent="20070925172228" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Capturing stderr using &amp;amp;shell()" -->
<!-- id="20070925172228.GD1913_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20070917161247.GZ13767_at_sun.com" -->
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
<strong>Date:</strong> 2007-09-25 13:22:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0430.php">Ron Brightwell: "[MTT users] Sandia account info/request"</a>
<li><strong>Previous message:</strong> <a href="0428.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>In reply to:</strong> <a href="0407.php">Ethan Mallove: "[MTT users] Capturing stderr using &amp;shell()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This issue was resolved by backslash-escaping the '&amp;'.
<br>
So this works:
<br>
<p>&nbsp;&nbsp;alreadyinstalled_version = &amp;shell(&quot;tcsh -c '@alreadyinstalled_dir@/bin/mpinfo -V |\&amp; cut -d\&quot; \&quot; -f6-8'&quot;)
<br>
<p>-Ethan
<br>
<p><p>On Mon, Sep/17/2007 12:12:48PM, Ethan Mallove wrote:
<br>
<p><p><p><span class="quotelev1">&gt; I am stuck trying to capture STDERR using &amp;shell().
</span><br>
<span class="quotelev1">&gt; I am able to capture it using tcsh, but since &amp;shell() 
</span><br>
<span class="quotelev1">&gt; is sh-based, I need some sh-magic to get this working.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   tcsh $ mpinfo -V |&amp; cut -d' ' -f6-8
</span><br>
<span class="quotelev1">&gt;   10 Mar 2006
</span><br>
<span class="quotelev1">&gt;   bash-3.00$ /opt/SUNWhpc/HPC6.0/bin/mpinfo -V 2&gt;&amp;1 cut -d' ' -f6-8
</span><br>
<span class="quotelev1">&gt;   mpinfo: Sun HPC ClusterTools 6 10 Mar 2006 CRE 3.0
</span><br>
<span class="quotelev1">&gt;   bash-3.00$ tcsh -c '/opt/SUNWhpc/HPC6.0/bin/mpinfo -V |&amp; cut -d&quot; &quot; -f6-8'
</span><br>
<span class="quotelev1">&gt;   10 Mar 2006
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No luck using &quot;tcsh -c&quot; with &amp;shell().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Value: bogus
</span><br>
<span class="quotelev1">&gt;   Evaluating: &amp;shell(&quot;tcsh -c '/opt/SUNWhpc/HPC6.0/bin/mpinfo -V |&amp; cut -d\&quot;
</span><br>
<span class="quotelev1">&gt;      \&quot; -f6-8'&quot;)
</span><br>
<span class="quotelev1">&gt;   Replacing vars from section MTT: &amp;shell(&quot;tcsh -c
</span><br>
<span class="quotelev1">&gt;      '/opt/SUNWhpc/HPC6.0/bin/mpinfo -V |&amp; cut -d\&quot; \&quot; -f6-8'&quot;)
</span><br>
<span class="quotelev1">&gt;   --&gt; Prefix now: 
</span><br>
<span class="quotelev1">&gt;   --&gt; Remaining (after &amp;): shell(&quot;tcsh -c '/opt/SUNWhpc/HPC6.0/bin/mpinfo -V
</span><br>
<span class="quotelev1">&gt;      |&amp; cut -d\&quot; \&quot; -f6-8'&quot;)
</span><br>
<span class="quotelev1">&gt;   --&gt; Found func name: shell
</span><br>
<span class="quotelev1">&gt;   --&gt; Found beginning of arguments: &quot;tcsh -c '/opt/SUNWhpc/HPC6.0/bin/mpinfo
</span><br>
<span class="quotelev1">&gt;      -V |&amp; cut -d\&quot; \&quot; -f6-8'&quot;)
</span><br>
<span class="quotelev1">&gt;   --&gt; Initial param search: &quot;tcsh -c '/opt/SUNWhpc/HPC6.0/bin/mpinfo -V |&amp;
</span><br>
<span class="quotelev1">&gt;      cut -d\&quot; \&quot; -f6-8'&quot;)
</span><br>
<span class="quotelev1">&gt;   --&gt; Loop: trimmed search: &quot;tcsh -c '/opt/SUNWhpc/HPC6.0/bin/mpinfo -V |&amp;
</span><br>
<span class="quotelev1">&gt;      cut -d\&quot; \&quot; -f6-8'&quot;)
</span><br>
<span class="quotelev1">&gt;   --&gt; Examining char: &quot; (pos 0)
</span><br>
<span class="quotelev1">&gt;   --&gt; Found beginning quote
</span><br>
<span class="quotelev1">&gt;   --&gt; Found last quote
</span><br>
<span class="quotelev1">&gt;   --&gt; Examining char: ) (pos 66)
</span><br>
<span class="quotelev1">&gt;   --&gt; Found end of arg (pos 66)
</span><br>
<span class="quotelev1">&gt;   Found argument: &quot;tcsh -c '/opt/SUNWhpc/HPC6.0/bin/mpinfo -V |&amp; cut -d\&quot; \&quot;
</span><br>
<span class="quotelev1">&gt;      -f6-8'&quot;
</span><br>
<span class="quotelev1">&gt;   --&gt; Remainder: 
</span><br>
<span class="quotelev1">&gt;   --&gt; Calling: $ret = MTT::Values::Functions::shell(&quot;tcsh -c
</span><br>
<span class="quotelev1">&gt;      '/opt/SUNWhpc/HPC6.0/bin/mpinfo -V |&amp; cut -d\&quot; \&quot; -f6-8'&quot;);
</span><br>
<span class="quotelev1">&gt;   &amp;shell: got tcsh -c '/opt/SUNWhpc/HPC6.0/bin/mpinfo -V |&amp; cut -d&quot; &quot; -f6-8'
</span><br>
<span class="quotelev1">&gt;   &amp;shell: returning 
</span><br>
<span class="quotelev1">&gt;   --&gt; After eval(string), remaining: 
</span><br>
<span class="quotelev1">&gt;   Replacing vars from section MTT: 
</span><br>
<span class="quotelev1">&gt;   Got final version before escapes: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ???
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ethan
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
<li><strong>Next message:</strong> <a href="0430.php">Ron Brightwell: "[MTT users] Sandia account info/request"</a>
<li><strong>Previous message:</strong> <a href="0428.php">Mohamad Chaarawi: "Re: [MTT users] MVAPICH2 configuring problems"</a>
<li><strong>In reply to:</strong> <a href="0407.php">Ethan Mallove: "[MTT users] Capturing stderr using &amp;shell()"</a>
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
