<?
$subject_val = "[MTT devel] MTT";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 14:48:49 2009" -->
<!-- isoreceived="20090429184849" -->
<!-- sent="Wed, 29 Apr 2009 14:48:44 -0400" -->
<!-- isosent="20090429184844" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] MTT" -->
<!-- id="B283A1E5-1037-46FA-BB64-ECD07C9BDDC1_at_cisco.com" -->
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
<strong>Subject:</strong> [MTT devel] MTT<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-29 14:48:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0406.php">Ethan Mallove: "Re: [MTT devel] Check a v3.0 commit"</a>
<li><strong>Previous message:</strong> <a href="0404.php">Jeff Squyres: "Re: [MTT devel] Check a v3.0 commit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0408.php">Shiqing Fan: "Re: [MTT devel] MTT"</a>
<li><strong>Reply:</strong> <a href="0408.php">Shiqing Fan: "Re: [MTT devel] MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Shiqing --
<br>
<p>It looks like the &quot;uname -o&quot; that was added into OMPI.pm is  
<br>
problematic on OS X.
<br>
<p>What does client/whatami/whatami return on the platforms that you care  
<br>
about?  I.e., can we re-write this chunk of code in MPI/Install/ 
<br>
OMPI.pm to use whatami output:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my $sys_type=`uname -o`;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(($sys_type =~ /cygwin/i || $sys_type =~ /msys/i) &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$config-&gt;{compiler_name} eq &quot;microsoft&quot;) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$install = MTT::Common::Cmake::Install($gnu);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$install = MTT::Common::GNU_Install::Install($gnu);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
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
<li><strong>Next message:</strong> <a href="0406.php">Ethan Mallove: "Re: [MTT devel] Check a v3.0 commit"</a>
<li><strong>Previous message:</strong> <a href="0404.php">Jeff Squyres: "Re: [MTT devel] Check a v3.0 commit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0408.php">Shiqing Fan: "Re: [MTT devel] MTT"</a>
<li><strong>Reply:</strong> <a href="0408.php">Shiqing Fan: "Re: [MTT devel] MTT"</a>
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
