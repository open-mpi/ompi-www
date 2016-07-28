<?
$subject_val = "[MTT devel] use of &amp;perl()";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 10:26:00 2009" -->
<!-- isoreceived="20090706142600" -->
<!-- sent="Mon, 6 Jul 2009 10:25:51 -0400" -->
<!-- isosent="20090706142551" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] use of &amp;amp;perl()" -->
<!-- id="47BC750D-9926-4DC9-B76D-E4EFBAC10151_at_cisco.com" -->
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
<strong>Subject:</strong> [MTT devel] use of &amp;perl()<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 10:25:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0417.php">Ethan Mallove: "Re: [MTT devel] use of &amp;perl()"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/06/0415.php">Ethan Mallove: "Re: [MTT devel] MTT email timeout notification feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0417.php">Ethan Mallove: "Re: [MTT devel] use of &amp;perl()"</a>
<li><strong>Reply:</strong> <a href="0417.php">Ethan Mallove: "Re: [MTT devel] use of &amp;perl()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was just trying to use &amp;perl() in an ini file and ran across an  
<br>
annoying restriction: I had to make the whole thing be one long line:
<br>
<p>max_test_num = &lt;&lt;EOF
<br>
&amp;perl('open(IN, &quot;./mpi_test_suite -l|&quot;) || die(&quot;cant open&quot;); while  
<br>
(&lt;IN&gt;) { if (m/Num Tests : (\d+)/) { close(IN); return $1; } }  
<br>
close(IN); return &quot;0&quot;; ')
<br>
EOF
<br>
<p>Without that, the MTT parser would complain that it couldn't find the  
<br>
closing ' quote (i.e., &quot;&amp;perl('  ...  ')&quot;).  I tracked it down and  
<br>
it's because if I did this:
<br>
<p>max_test_num = &lt;&lt;EOF
<br>
&amp;perl('
<br>
open(IN, &quot;./mpi_test_suite -l|&quot;) || die(&quot;cant open&quot;);
<br>
while (&lt;IN&gt;) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (m/Num Tests : (\d+)/) { close(IN); return $1; }
<br>
}
<br>
close(IN);
<br>
return &quot;0&quot;;
<br>
')
<br>
EOF
<br>
<p>then the parser stops looking for the closing quote on the &quot;&amp;perl('&quot;  
<br>
line -- it doesn't go beyond the \n.  Yuck.
<br>
<p>Any suggestions?
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
<li><strong>Next message:</strong> <a href="0417.php">Ethan Mallove: "Re: [MTT devel] use of &amp;perl()"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/06/0415.php">Ethan Mallove: "Re: [MTT devel] MTT email timeout notification feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0417.php">Ethan Mallove: "Re: [MTT devel] use of &amp;perl()"</a>
<li><strong>Reply:</strong> <a href="0417.php">Ethan Mallove: "Re: [MTT devel] use of &amp;perl()"</a>
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
