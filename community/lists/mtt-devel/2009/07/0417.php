<?
$subject_val = "Re: [MTT devel] use of &amp;perl()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 10:54:35 2009" -->
<!-- isoreceived="20090706145435" -->
<!-- sent="Mon, 6 Jul 2009 10:54:27 -0400" -->
<!-- isosent="20090706145427" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] use of &amp;amp;perl()" -->
<!-- id="20090706145427.GA46814_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="47BC750D-9926-4DC9-B76D-E4EFBAC10151_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] use of &amp;perl()<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 10:54:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0418.php">Jeff Squyres: "Re: [MTT devel] use of &amp;perl()"</a>
<li><strong>Previous message:</strong> <a href="0416.php">Jeff Squyres: "[MTT devel] use of &amp;perl()"</a>
<li><strong>In reply to:</strong> <a href="0416.php">Jeff Squyres: "[MTT devel] use of &amp;perl()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0418.php">Jeff Squyres: "Re: [MTT devel] use of &amp;perl()"</a>
<li><strong>Reply:</strong> <a href="0418.php">Jeff Squyres: "Re: [MTT devel] use of &amp;perl()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jul/06/2009 10:25:51AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I was just trying to use &amp;perl() in an ini file and ran across an annoying 
</span><br>
<span class="quotelev1">&gt; restriction: I had to make the whole thing be one long line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; max_test_num = &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; &amp;perl('open(IN, &quot;./mpi_test_suite -l|&quot;) || die(&quot;cant open&quot;); while (&lt;IN&gt;) { 
</span><br>
<span class="quotelev1">&gt; if (m/Num Tests : (\d+)/) { close(IN); return $1; } } close(IN); return 
</span><br>
<span class="quotelev1">&gt; &quot;0&quot;; ')
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Without that, the MTT parser would complain that it couldn't find the 
</span><br>
<span class="quotelev1">&gt; closing ' quote (i.e., &quot;&amp;perl('  ...  ')&quot;).  I tracked it down and it's 
</span><br>
<span class="quotelev1">&gt; because if I did this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; max_test_num = &lt;&lt;EOF
</span><br>
<span class="quotelev1">&gt; &amp;perl('
</span><br>
<span class="quotelev1">&gt; open(IN, &quot;./mpi_test_suite -l|&quot;) || die(&quot;cant open&quot;);
</span><br>
<span class="quotelev1">&gt; while (&lt;IN&gt;) {
</span><br>
<span class="quotelev1">&gt;     if (m/Num Tests : (\d+)/) { close(IN); return $1; }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; close(IN);
</span><br>
<span class="quotelev1">&gt; return &quot;0&quot;;
</span><br>
<span class="quotelev1">&gt; ')
</span><br>
<span class="quotelev1">&gt; EOF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then the parser stops looking for the closing quote on the &quot;&amp;perl('&quot; line 
</span><br>
<span class="quotelev1">&gt; -- it doesn't go beyond the \n.  Yuck.
</span><br>
<p>Ewww. I think the parser should be able to handle those newlines.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<p>When I need a multi-line &amp;perl(), I throw the perl code into a sub in
<br>
my funclet file. E.g., do this in a Cisco.pm file:
<br>
<p>&nbsp;&nbsp;sub max_test_num {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;open(IN, &quot;./mpi_test_suite -l|&quot;) || die(&quot;cant open&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;while (&lt;IN&gt;) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (m/Num Tests : (\d+)/) { 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;close(IN); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return $1; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;close(IN);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return &quot;0&quot;;
<br>
&nbsp;&nbsp;}
<br>
<p>Put your funclet file next to your INI file, since your INI file will
<br>
now require your funclet file:
<br>
<p>&nbsp;&nbsp;foo/bar.ini
<br>
&nbsp;&nbsp;funclets/Cisco.pm
<br>
<p>And then have this in your INI file:
<br>
<p>&nbsp;&nbsp;[MTT]
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;funclet_files = &amp;dirname(&quot;@INI_NAME@&quot;)/../funclets/Cisco.pm
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;max_test_num = &amp;Cisco::max_test_num()
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
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0418.php">Jeff Squyres: "Re: [MTT devel] use of &amp;perl()"</a>
<li><strong>Previous message:</strong> <a href="0416.php">Jeff Squyres: "[MTT devel] use of &amp;perl()"</a>
<li><strong>In reply to:</strong> <a href="0416.php">Jeff Squyres: "[MTT devel] use of &amp;perl()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0418.php">Jeff Squyres: "Re: [MTT devel] use of &amp;perl()"</a>
<li><strong>Reply:</strong> <a href="0418.php">Jeff Squyres: "Re: [MTT devel] use of &amp;perl()"</a>
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
