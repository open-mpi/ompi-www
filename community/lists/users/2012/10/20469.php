<?
$subject_val = "[OMPI users] debugs for jobs not starting";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 11 11:50:03 2012" -->
<!-- isoreceived="20121011155003" -->
<!-- sent="Thu, 11 Oct 2012 11:49:58 -0400" -->
<!-- isosent="20121011154958" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="[OMPI users] debugs for jobs not starting" -->
<!-- id="CABOsP2OvMyJu1NTCrid6y8moKpSx6zGomWjPCED8oGSe2UfegQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] debugs for jobs not starting<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-11 11:49:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20470.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>Previous message:</strong> <a href="20468.php">Christian Krause: "[OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20470.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>Reply:</strong> <a href="20470.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to diagnose an MPI job (in this case xhpl), that fails to
<br>
start when the rank count gets fairly high into the thousands.
<br>
<p>My symptom is the jobs fires up via slurm, and I can see all the xhpl
<br>
processes on the nodes, but it never kicks over to the next process.
<br>
<p>My question is, what debugs should I turn on to tell me what the
<br>
system might be waiting on?
<br>
<p>I've checked a bunch of things, but I'm probably overlooking something
<br>
trivial (which is par for me).
<br>
<p>I'm using the Openmpi 1.6.1, Slurm 2.4.2 on CentOS 6.3, with Infiniband/PSM
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20470.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>Previous message:</strong> <a href="20468.php">Christian Krause: "[OMPI users] [1.6.2] Compilation Error (at vtfilter) with Intel Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20470.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
<li><strong>Reply:</strong> <a href="20470.php">Michael Di Domenico: "Re: [OMPI users] debugs for jobs not starting"</a>
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
