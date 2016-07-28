<?
$subject_val = "[OMPI users] questions to some open problems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 09:01:06 2012" -->
<!-- isoreceived="20121214140106" -->
<!-- sent="Fri, 14 Dec 2012 14:54:21 +0100 (CET)" -->
<!-- isosent="20121214135421" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] questions to some open problems" -->
<!-- id="201212141354.qBEDsLce022677_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] questions to some open problems<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-14 08:54:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20950.php">Ralph Castain: "Re: [OMPI users] problem with data transfer in a heterogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="20948.php">Siegmar Gross: "[OMPI users] problem with data transfer in a heterogeneous environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20951.php">Ralph Castain: "Re: [OMPI users] questions to some open problems"</a>
<li><strong>Reply:</strong> <a href="20951.php">Ralph Castain: "Re: [OMPI users] questions to some open problems"</a>
<li><strong>Maybe reply:</strong> <a href="20961.php">Siegmar Gross: "Re: [OMPI users] questions to some open problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>some weeks ago (mainly in the beginning of October) I reported
<br>
several problems and I would be grateful if you can tell me if
<br>
and probably when somebody will try to solve them.
<br>
<p>1) I don't get the expected results, when I try to send or scatter
<br>
&nbsp;&nbsp;&nbsp;the columns of a matrix in Java. The received column values have
<br>
&nbsp;&nbsp;&nbsp;nothing to do with the original values, if I use a homogeneous
<br>
&nbsp;&nbsp;&nbsp;environment and the program breaks with &quot;An error occurred in
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_dup&quot; and &quot;MPI_ERR_INTERN: internal error&quot;, if I use
<br>
&nbsp;&nbsp;&nbsp;a heterogeneous environment. I would like to use the Java API.
<br>
<p>2) I don't get the expected result, when I try to scatter an object
<br>
&nbsp;&nbsp;&nbsp;in Java.
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/3351">https://svn.open-mpi.org/trac/ompi/ticket/3351</a>
<br>
<p>3) I still get only a message that all nodes are already filled up
<br>
&nbsp;&nbsp;&nbsp;when I use a &quot;rankfile&quot; and nothing else happens. I would like
<br>
&nbsp;&nbsp;&nbsp;to use a rankfile. You filed a bug fix for it.
<br>
<p>4) I would like to have &quot;-cpus-per-proc&quot;, &quot;-npersocket&quot;, etc for
<br>
&nbsp;&nbsp;&nbsp;every set of machines/applications and not globally for all
<br>
&nbsp;&nbsp;&nbsp;machines/applications if I specify several colon-separated sets
<br>
&nbsp;&nbsp;&nbsp;of machines or applications on the command line. You told me that
<br>
&nbsp;&nbsp;&nbsp;it could be done.
<br>
<p>5) By the way, it seems that the option &quot;-cpus-per-proc&quot; isn't any
<br>
&nbsp;&nbsp;&nbsp;longer supported in openmpi-1.7 and openmpi-1.9. How can I bind a
<br>
&nbsp;&nbsp;&nbsp;multi-threaded process to more than one core in these versions?
<br>
<p>I can provide my small programs once more if you need them. Thank
<br>
you very much for any answer in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20950.php">Ralph Castain: "Re: [OMPI users] problem with data transfer in a heterogeneous environment"</a>
<li><strong>Previous message:</strong> <a href="20948.php">Siegmar Gross: "[OMPI users] problem with data transfer in a heterogeneous environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20951.php">Ralph Castain: "Re: [OMPI users] questions to some open problems"</a>
<li><strong>Reply:</strong> <a href="20951.php">Ralph Castain: "Re: [OMPI users] questions to some open problems"</a>
<li><strong>Maybe reply:</strong> <a href="20961.php">Siegmar Gross: "Re: [OMPI users] questions to some open problems"</a>
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
