<?
$subject_val = "[OMPI devel] XML stdout/stderr";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 25 11:10:16 2009" -->
<!-- isoreceived="20090525151016" -->
<!-- sent="Mon, 25 May 2009 11:10:12 -0400" -->
<!-- isosent="20090525151012" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="[OMPI devel] XML stdout/stderr" -->
<!-- id="402C47F1-51B6-441D-8C88-B127BAFC2050_at_computer.org" -->
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
<strong>Subject:</strong> [OMPI devel] XML stdout/stderr<br>
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-25 11:10:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6083.php">Nadia Derbey: "[OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>Previous message:</strong> <a href="6081.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6085.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Reply:</strong> <a href="6085.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>In life, nothing is ever easy...
<br>
<p>While the XML output is working well, I've come across an issue with  
<br>
stdout/stderr. Unfortunately it's not just enough to wrap it in tags,  
<br>
because it's possible that the output will contain XML formatting  
<br>
information. There are two ways to get around this. The easiest is to  
<br>
wrap the output in &quot;&lt;![CDATA[&quot; and &quot;]]&gt;&quot;. This has the benefit of  
<br>
being relatively easy, but will fail if the output contains the string  
<br>
&quot;]]&gt;&quot;. The other way is to replace all instances of &quot;&amp;&quot;, &quot;&lt;&quot;, and &quot;&gt;&quot;  
<br>
with &quot;&amp;amp;&quot;, &quot;&amp;lt;&quot;, and &quot;&amp;gt;&quot; respectively. This is safer, but  
<br>
requires more processing.
<br>
<p>Thoughts?
<br>
<p>Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6083.php">Nadia Derbey: "[OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>Previous message:</strong> <a href="6081.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6085.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Reply:</strong> <a href="6085.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
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
