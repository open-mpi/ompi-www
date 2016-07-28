<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 17 12:13:00 2007" -->
<!-- isoreceived="20070917161300" -->
<!-- sent="Mon, 17 Sep 2007 12:12:48 -0400" -->
<!-- isosent="20070917161248" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT users] Capturing stderr using &amp;amp;shell()" -->
<!-- id="20070917161247.GZ13767_at_sun.com" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2007-09-17 12:12:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0408.php">Ethan Mallove: "[MTT users] OSU parsing module issue?"</a>
<li><strong>Previous message:</strong> <a href="0406.php">Jeff Squyres: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0429.php">Ethan Mallove: "Re: [MTT users] Capturing stderr using &amp;shell()"</a>
<li><strong>Reply:</strong> <a href="0429.php">Ethan Mallove: "Re: [MTT users] Capturing stderr using &amp;shell()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am stuck trying to capture STDERR using &amp;shell().
<br>
I am able to capture it using tcsh, but since &amp;shell() 
<br>
is sh-based, I need some sh-magic to get this working.
<br>
<p>&nbsp;&nbsp;tcsh $ mpinfo -V |&amp; cut -d' ' -f6-8
<br>
&nbsp;&nbsp;10 Mar 2006
<br>
&nbsp;&nbsp;bash-3.00$ /opt/SUNWhpc/HPC6.0/bin/mpinfo -V 2&gt;&amp;1 cut -d' ' -f6-8
<br>
&nbsp;&nbsp;mpinfo: Sun HPC ClusterTools 6 10 Mar 2006 CRE 3.0
<br>
&nbsp;&nbsp;bash-3.00$ tcsh -c '/opt/SUNWhpc/HPC6.0/bin/mpinfo -V |&amp; cut -d&quot; &quot; -f6-8'
<br>
&nbsp;&nbsp;10 Mar 2006
<br>
<p>No luck using &quot;tcsh -c&quot; with &amp;shell().
<br>
<p>&nbsp;&nbsp;Value: bogus
<br>
&nbsp;&nbsp;Evaluating: &amp;shell(&quot;tcsh -c '/opt/SUNWhpc/HPC6.0/bin/mpinfo -V |&amp; cut -d\&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\&quot; -f6-8'&quot;)
<br>
&nbsp;&nbsp;Replacing vars from section MTT: &amp;shell(&quot;tcsh -c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'/opt/SUNWhpc/HPC6.0/bin/mpinfo -V |&amp; cut -d\&quot; \&quot; -f6-8'&quot;)
<br>
&nbsp;&nbsp;--&gt; Prefix now: 
<br>
&nbsp;&nbsp;--&gt; Remaining (after &amp;): shell(&quot;tcsh -c '/opt/SUNWhpc/HPC6.0/bin/mpinfo -V
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&amp; cut -d\&quot; \&quot; -f6-8'&quot;)
<br>
&nbsp;&nbsp;--&gt; Found func name: shell
<br>
&nbsp;&nbsp;--&gt; Found beginning of arguments: &quot;tcsh -c '/opt/SUNWhpc/HPC6.0/bin/mpinfo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-V |&amp; cut -d\&quot; \&quot; -f6-8'&quot;)
<br>
&nbsp;&nbsp;--&gt; Initial param search: &quot;tcsh -c '/opt/SUNWhpc/HPC6.0/bin/mpinfo -V |&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cut -d\&quot; \&quot; -f6-8'&quot;)
<br>
&nbsp;&nbsp;--&gt; Loop: trimmed search: &quot;tcsh -c '/opt/SUNWhpc/HPC6.0/bin/mpinfo -V |&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cut -d\&quot; \&quot; -f6-8'&quot;)
<br>
&nbsp;&nbsp;--&gt; Examining char: &quot; (pos 0)
<br>
&nbsp;&nbsp;--&gt; Found beginning quote
<br>
&nbsp;&nbsp;--&gt; Found last quote
<br>
&nbsp;&nbsp;--&gt; Examining char: ) (pos 66)
<br>
&nbsp;&nbsp;--&gt; Found end of arg (pos 66)
<br>
&nbsp;&nbsp;Found argument: &quot;tcsh -c '/opt/SUNWhpc/HPC6.0/bin/mpinfo -V |&amp; cut -d\&quot; \&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-f6-8'&quot;
<br>
&nbsp;&nbsp;--&gt; Remainder: 
<br>
&nbsp;&nbsp;--&gt; Calling: $ret = MTT::Values::Functions::shell(&quot;tcsh -c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'/opt/SUNWhpc/HPC6.0/bin/mpinfo -V |&amp; cut -d\&quot; \&quot; -f6-8'&quot;);
<br>
&nbsp;&nbsp;&amp;shell: got tcsh -c '/opt/SUNWhpc/HPC6.0/bin/mpinfo -V |&amp; cut -d&quot; &quot; -f6-8'
<br>
&nbsp;&nbsp;&amp;shell: returning 
<br>
&nbsp;&nbsp;--&gt; After eval(string), remaining: 
<br>
&nbsp;&nbsp;Replacing vars from section MTT: 
<br>
&nbsp;&nbsp;Got final version before escapes: 
<br>
<p>???
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0408.php">Ethan Mallove: "[MTT users] OSU parsing module issue?"</a>
<li><strong>Previous message:</strong> <a href="0406.php">Jeff Squyres: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0429.php">Ethan Mallove: "Re: [MTT users] Capturing stderr using &amp;shell()"</a>
<li><strong>Reply:</strong> <a href="0429.php">Ethan Mallove: "Re: [MTT users] Capturing stderr using &amp;shell()"</a>
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
