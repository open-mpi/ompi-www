<?
$subject_val = "[hwloc-devel] merging to v0.9";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 14:23:02 2009" -->
<!-- isoreceived="20091021182302" -->
<!-- sent="Wed, 21 Oct 2009 14:22:58 -0400" -->
<!-- isosent="20091021182258" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] merging to v0.9" -->
<!-- id="D6B5A193-33D5-425C-8821-C70A65C570CD_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] merging to v0.9<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 14:22:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0218.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Previous message:</strong> <a href="0216.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict	compiler flags"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW, I use this trivial script to help merge stuff over to v0.9 --  
<br>
maybe it's helpful to others...
<br>
<p>#!/bin/csh -f
<br>
<p>set r=$1
<br>
set otrunk=<a href="https://svn.open-mpi.org/svn/hwloc/trunk">https://svn.open-mpi.org/svn/hwloc/trunk</a>
<br>
<p>while (&quot;$r&quot; != &quot;&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo merging in r$r...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set r_minus_one=`expr $r - 1`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set str=&quot;svn merge -r ${r_minus_one}:$r $otrunk .&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo $str
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;eval $str
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ($status != &quot;0&quot;) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo merge failed -- exiting
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (&quot;$argv&quot; != &quot;&quot;) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shift
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set r=$1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;set r=
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
end
<br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0218.php">Pavan Balaji: "Re: [hwloc-devel] MPICH2 question"</a>
<li><strong>Previous message:</strong> <a href="0216.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc] #16: hwloc build fails with strict	compiler flags"</a>
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
