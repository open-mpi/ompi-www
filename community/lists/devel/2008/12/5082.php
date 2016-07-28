<?
$subject_val = "[OMPI devel] sm BTL &quot;extra procs&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 22 11:43:29 2008" -->
<!-- isoreceived="20081222164329" -->
<!-- sent="Mon, 22 Dec 2008 08:47:16 -0800" -->
<!-- isosent="20081222164716" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] sm BTL &amp;quot;extra procs&amp;quot;" -->
<!-- id="494FC494.6060205_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] sm BTL &quot;extra procs&quot;<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-22 11:47:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5083.php">Richard Graham: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<li><strong>Previous message:</strong> <a href="5081.php">Lenny Verkhovsky: "Re: [OMPI devel] Disappearing for US holidays..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5083.php">Richard Graham: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<li><strong>Reply:</strong> <a href="5083.php">Richard Graham: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Why does the sm BTL allocate &quot;extra procs&quot;?
<br>
<p>E.g.,
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/browser/branches/v1.3/ompi/mca/btl/sm/btl_sm.c?version=19785#L403">https://svn.open-mpi.org/trac/ompi/browser/branches/v1.3/ompi/mca/btl/sm/btl_sm.c?version=19785#L403</a>
<br>
<p>In particular:
<br>
<p>*) sm_max_procs is -1 (so there is no max)
<br>
*) sm_sm_extra_procs (sic, this is the ompi_info name) is 2
<br>
<p>So, if there are n procs on the node, it allocates FIFOs for n*(n+2) 
<br>
connections.  Why?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5083.php">Richard Graham: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<li><strong>Previous message:</strong> <a href="5081.php">Lenny Verkhovsky: "Re: [OMPI devel] Disappearing for US holidays..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5083.php">Richard Graham: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
<li><strong>Reply:</strong> <a href="5083.php">Richard Graham: "Re: [OMPI devel] sm BTL &quot;extra procs&quot;"</a>
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
