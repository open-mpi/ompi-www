<?
$subject_val = "[OMPI users] OpenMPI 1.10.1 crashes with file size limit &lt;= 131072";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 15:20:59 2015" -->
<!-- isoreceived="20151119202059" -->
<!-- sent="Thu, 19 Nov 2015 15:20:55 -0500" -->
<!-- isosent="20151119202055" -->
<!-- name="Saurabh T" -->
<!-- email="saurabh_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.10.1 crashes with file size limit &amp;lt;= 131072" -->
<!-- id="DUB123-W313B20A891A100E07C841EB11B0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.10.1 crashes with file size limit &lt;= 131072<br>
<strong>From:</strong> Saurabh T (<em>saurabh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-19 15:20:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28066.php">Saurabh T: "[OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<li><strong>Previous message:</strong> <a href="28064.php">Howard: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28068.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.10.1 crashes with file size limit &lt;= 131072"</a>
<li><strong>Reply:</strong> <a href="28068.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.10.1 crashes with file size limit &lt;= 131072"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's what I find:

&gt; cd examples
&gt; make hello_cxx
&gt; ulimit -f 131073

&gt; orterun -np 3 hello_cxxHello, world! 
[Etc]

&gt; ulimit -f 131072

&gt; orterun -np 3 hello_cxx

 		 	   		  <br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28066.php">Saurabh T: "[OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<li><strong>Previous message:</strong> <a href="28064.php">Howard: "Re: [OMPI users] help understand unhelpful ORTE error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28068.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.10.1 crashes with file size limit &lt;= 131072"</a>
<li><strong>Reply:</strong> <a href="28068.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.10.1 crashes with file size limit &lt;= 131072"</a>
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
