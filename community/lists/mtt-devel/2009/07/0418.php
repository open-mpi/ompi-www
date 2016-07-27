<?
$subject_val = "Re: [MTT devel] use of &amp;perl()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 10:56:30 2009" -->
<!-- isoreceived="20090706145630" -->
<!-- sent="Mon, 6 Jul 2009 10:56:24 -0400" -->
<!-- isosent="20090706145624" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] use of &amp;amp;perl()" -->
<!-- id="624FC667-44F6-444A-BD58-00F5AF7CFD1E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090706145427.GA46814_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 10:56:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0419.php">Jeff Squyres: "[MTT devel] OTF testing tool"</a>
<li><strong>Previous message:</strong> <a href="0417.php">Ethan Mallove: "Re: [MTT devel] use of &amp;perl()"</a>
<li><strong>In reply to:</strong> <a href="0417.php">Ethan Mallove: "Re: [MTT devel] use of &amp;perl()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, ok.  Yes, that is cleaner -- so &amp;perl() is of somewhat limited  
<br>
value.
<br>
<p>I already have a Cisco.pm file, so adding a new funclet is no biggie.   
<br>
Thanks for the idea.
<br>
<p><p>On Jul 6, 2009, at 10:54 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Jul/06/2009 10:25:51AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I was just trying to use &amp;perl() in an ini file and ran across an  
</span><br>
<span class="quotelev1">&gt; annoying
</span><br>
<span class="quotelev2">&gt; &gt; restriction: I had to make the whole thing be one long line:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; max_test_num = &lt;&lt;EOF
</span><br>
<span class="quotelev2">&gt; &gt; &amp;perl('open(IN, &quot;./mpi_test_suite -l|&quot;) || die(&quot;cant open&quot;); while  
</span><br>
<span class="quotelev1">&gt; (&lt;IN&gt;) {
</span><br>
<span class="quotelev2">&gt; &gt; if (m/Num Tests : (\d+)/) { close(IN); return $1; } } close(IN);  
</span><br>
<span class="quotelev1">&gt; return
</span><br>
<span class="quotelev2">&gt; &gt; &quot;0&quot;; ')
</span><br>
<span class="quotelev2">&gt; &gt; EOF
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Without that, the MTT parser would complain that it couldn't find  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; closing ' quote (i.e., &quot;&amp;perl('  ...  ')&quot;).  I tracked it down and  
</span><br>
<span class="quotelev1">&gt; it's
</span><br>
<span class="quotelev2">&gt; &gt; because if I did this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; max_test_num = &lt;&lt;EOF
</span><br>
<span class="quotelev2">&gt; &gt; &amp;perl('
</span><br>
<span class="quotelev2">&gt; &gt; open(IN, &quot;./mpi_test_suite -l|&quot;) || die(&quot;cant open&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; while (&lt;IN&gt;) {
</span><br>
<span class="quotelev2">&gt; &gt;     if (m/Num Tests : (\d+)/) { close(IN); return $1; }
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; close(IN);
</span><br>
<span class="quotelev2">&gt; &gt; return &quot;0&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; ')
</span><br>
<span class="quotelev2">&gt; &gt; EOF
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; then the parser stops looking for the closing quote on the  
</span><br>
<span class="quotelev1">&gt; &quot;&amp;perl('&quot; line
</span><br>
<span class="quotelev2">&gt; &gt; -- it doesn't go beyond the \n.  Yuck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ewww. I think the parser should be able to handle those newlines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I need a multi-line &amp;perl(), I throw the perl code into a sub in
</span><br>
<span class="quotelev1">&gt; my funclet file. E.g., do this in a Cisco.pm file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   sub max_test_num {
</span><br>
<span class="quotelev1">&gt;     open(IN, &quot;./mpi_test_suite -l|&quot;) || die(&quot;cant open&quot;);
</span><br>
<span class="quotelev1">&gt;     while (&lt;IN&gt;) {
</span><br>
<span class="quotelev1">&gt;         if (m/Num Tests : (\d+)/) {
</span><br>
<span class="quotelev1">&gt;           close(IN);
</span><br>
<span class="quotelev1">&gt;           return $1;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     close(IN);
</span><br>
<span class="quotelev1">&gt;     return &quot;0&quot;;
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Put your funclet file next to your INI file, since your INI file will
</span><br>
<span class="quotelev1">&gt; now require your funclet file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   foo/bar.ini
</span><br>
<span class="quotelev1">&gt;   funclets/Cisco.pm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And then have this in your INI file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   [MTT]
</span><br>
<span class="quotelev1">&gt;   ...
</span><br>
<span class="quotelev1">&gt;   funclet_files = &amp;dirname(&quot;@INI_NAME@&quot;)/../funclets/Cisco.pm
</span><br>
<span class="quotelev1">&gt;   ...
</span><br>
<span class="quotelev1">&gt;   max_test_num = &amp;Cisco::max_test_num()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0419.php">Jeff Squyres: "[MTT devel] OTF testing tool"</a>
<li><strong>Previous message:</strong> <a href="0417.php">Ethan Mallove: "Re: [MTT devel] use of &amp;perl()"</a>
<li><strong>In reply to:</strong> <a href="0417.php">Ethan Mallove: "Re: [MTT devel] use of &amp;perl()"</a>
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
