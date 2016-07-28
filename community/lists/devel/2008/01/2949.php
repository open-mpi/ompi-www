<?
$subject_val = "[OMPI devel] processor affinity -- OpenMPI/batch system integration";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  9 15:59:43 2008" -->
<!-- isoreceived="20080109205943" -->
<!-- sent="Wed, 9 Jan 2008 15:59:35 -0500" -->
<!-- isosent="20080109205935" -->
<!-- name="Rayson Ho" -->
<!-- email="rayrayson_at_[hidden]" -->
<!-- subject="[OMPI devel] processor affinity -- OpenMPI/batch system integration" -->
<!-- id="a0ba9d430801091259g55cb19c6o530ba939b0f2aa70_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] processor affinity -- OpenMPI/batch system integration<br>
<strong>From:</strong> Rayson Ho (<em>rayrayson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-09 15:59:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2950.php">Jon Mason: "[OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>Previous message:</strong> <a href="2948.php">Adrian Knoth: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2962.php">Pak Lui: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Reply:</strong> <a href="2962.php">Pak Lui: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/09/4719.php">Rayson Ho: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm from the Sun Grid Engine (SGE) project (
<br>
<a href="http://gridengine.sunsource.net">http://gridengine.sunsource.net</a> ). I am working on processor affinity
<br>
support for SGE.
<br>
<p>In 2005, we had some discussions on the SGE mailing list with Jeff on
<br>
this topic. As quad-core processors are available from AMD and Intel,
<br>
and higher core count per socket is coming soon, I would like to see
<br>
what we can do to come up with a simple interface for the SGE 6.2
<br>
release, which will be available in Q2 this year (or at least into an
<br>
&quot;update&quot; release of SGE6.2 if we couldn't get the changes in on time).
<br>
<p>The discussions we had before:
<br>
<a href="http://gridengine.sunsource.net/servlets/BrowseList?list=dev&amp;by=thread&amp;from=7081">http://gridengine.sunsource.net/servlets/BrowseList?list=dev&amp;by=thread&amp;from=7081</a>
<br>
<a href="http://gridengine.sunsource.net/servlets/BrowseList?list=dev&amp;by=thread&amp;from=4803">http://gridengine.sunsource.net/servlets/BrowseList?list=dev&amp;by=thread&amp;from=4803</a>
<br>
<p>I looked at the SGE code, the simplest we can do is to set an
<br>
environment variable to tell the task group the processor mask of the
<br>
node before we start each task group. Is it good enough for OpenMPI??
<br>
<p>After reading the OpenMPI code, I believe what we need to do is that
<br>
in ompi/runtime/ompi_mpi_init.c , we need to add an else case:
<br>
<p>&nbsp;if (ompi_mpi_paffinity_alone) {
<br>
&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;}
<br>
&nbsp;else
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;// get processor affinity information from batch system via the env var
<br>
&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;}
<br>
<p>Thanks,
<br>
Rayson
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2950.php">Jon Mason: "[OMPI devel] [PATCH] openib btl: extensable cpc selection enablement"</a>
<li><strong>Previous message:</strong> <a href="2948.php">Adrian Knoth: "Re: [OMPI devel] btl tcp port to xensocket"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2962.php">Pak Lui: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Reply:</strong> <a href="2962.php">Pak Lui: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/09/4719.php">Rayson Ho: "Re: [OMPI devel] processor affinity -- OpenMPI/batch system integration"</a>
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
