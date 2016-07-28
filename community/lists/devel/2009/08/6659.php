<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 17:43:43 2009" -->
<!-- isoreceived="20090817214343" -->
<!-- sent="Mon, 17 Aug 2009 14:43:12 -0700" -->
<!-- isosent="20090817214312" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="4A89CEF0.2030707_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1250543417.3902.33.camel_at_alpha" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Heads up on new feature to 1.3.4<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 17:43:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6660.php">Patrick Geoffray: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6658.php">Ashley Pittman: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6658.php">Ashley Pittman: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6661.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6661.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some more thoughts in this thread that I've not seen expressed yet 
<br>
(perhaps I missed them):
<br>
<p>+ Some argue that this change in the middle of a stable series may, to 
<br>
some users, appear to be a performance regression when they update.  
<br>
However, I would argue that if the alternative is to delay this feature 
<br>
until the next stable release, it will STILL appear to those same users 
<br>
to be a performance regression when they upgrade.  If the choice is 
<br>
between sooner or later I would vote for sooner.
<br>
<p>+ I wonder if one can do any &quot;introspection&quot; with the dynamic linker to 
<br>
detect hybrid OpenMP (no &quot;I&quot;) apps and avoid pinning them by default 
<br>
(examining OMP_NUM_THREADS in the environment is no good, since that 
<br>
variable may have a site default value other than 1 or empty).  To me 
<br>
this is the most obvious class of application that will suffer from 
<br>
imposing pinning by default.
<br>
<p>+ The question of round-robin-by-core vs round-robin-by-socket is not 
<br>
fundamentally any different from the question of how to map one's tasks 
<br>
to flat-SMP nodes (cylic, block or block-cylic; XYZT vs TXYZ, etc.)  
<br>
There is NO universal right answer, and for better or worse the end-user 
<br>
that wants to maximize performance is going to need to either understand 
<br>
how their comms interact with task layout, or they are going to try 
<br>
different options until the are happy.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 Tel: +1-510-495-2352
HPC Research Department                   Fax: +1-510-486-6900
Lawrence Berkeley National Laboratory     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6660.php">Patrick Geoffray: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6658.php">Ashley Pittman: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6658.php">Ashley Pittman: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6661.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6661.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
