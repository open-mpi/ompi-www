<?
$subject_val = "[OMPI devel] A minor nit in the mpirun manpage";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 00:20:29 2009" -->
<!-- isoreceived="20091022042029" -->
<!-- sent="Wed, 21 Oct 2009 21:20:14 -0700" -->
<!-- isosent="20091022042014" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] A minor nit in the mpirun manpage" -->
<!-- id="4ADFDD7E.8050708_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] A minor nit in the mpirun manpage<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-22 00:20:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7000.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="6998.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7005.php">Terry Dontje: "Re: [OMPI devel] A minor nit in the mpirun manpage"</a>
<li><strong>Reply:</strong> <a href="7005.php">Terry Dontje: "Re: [OMPI devel] A minor nit in the mpirun manpage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry if this has been fixed for 1.3.4, but in the manpge for mpirun in 
<br>
1.3.3 I noticed the following in the &quot;MCA&quot; section of the manpage:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Note: The -mca switch is simply a shortcut for  setting  
<br>
environment  variables.   The  same
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;effect  may  be  accomplished  by setting corresponding 
<br>
environment variables before running
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun.  The form of the environment variables that Open MPI sets 
<br>
are:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_&lt;key&gt;=&lt;value&gt;
<br>
<p>However, as &lt;key&gt; is defined the env var one must set is actually
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_MCA_&lt;key&gt;=&lt;value&gt;
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
<li><strong>Next message:</strong> <a href="7000.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="6998.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7005.php">Terry Dontje: "Re: [OMPI devel] A minor nit in the mpirun manpage"</a>
<li><strong>Reply:</strong> <a href="7005.php">Terry Dontje: "Re: [OMPI devel] A minor nit in the mpirun manpage"</a>
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
