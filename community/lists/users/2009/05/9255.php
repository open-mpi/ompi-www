<?
$subject_val = "[OMPI users] OpenMPI 1.3.X Configuration for OFED";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 09:51:22 2009" -->
<!-- isoreceived="20090507135122" -->
<!-- sent="Thu, 7 May 2009 08:51:13 -0500" -->
<!-- isosent="20090507135113" -->
<!-- name="pat.o'bryant_at_[hidden]" -->
<!-- email="pat.o'bryant_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.3.X Configuration for OFED" -->
<!-- id="OF96098CE0.60BAA23B-ON862575AF.004B386E-862575AF.004C19DC_at_exxonmobil.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.3.X Configuration for OFED<br>
<strong>From:</strong> <a href="mailto:pat.o'bryant_at_[hidden]?Subject=Re:%20[OMPI%20users]%20OpenMPI%201.3.X%20Configuration%20for%20OFED"><em>pat.o'bryant_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-05-07 09:51:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9256.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9254.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9259.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] OpenMPI 1.3.X Configuration for OFED"</a>
<li><strong>Reply:</strong> <a href="9259.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] OpenMPI 1.3.X Configuration for OFED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am in the process of building a production system with OpenMPI 1.3.2
<br>
with support for OFED. Is it necessary in the &quot;configure&quot; statement to
<br>
specify &quot;--with-openib(=DIR)&quot; to get OFED support? I have built a test
<br>
system with OpenMPI 1.3.2 and an &quot;ompi_info&quot; yields the output below. It
<br>
appears that InfiniBand support is installed even though I didn't use
<br>
&quot;--with-openib(=DIR)&quot;.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The installation of OFED used its &quot;default&quot; areas, of which there
<br>
appears to be a great number. If I have to specify the &quot;openib&quot; path I am
<br>
not sure what value should be used.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pat
<br>
<p>./ompi_info --all | grep openib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: openib (MCA v2.0, API v2.0, Component v1.3.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;..........................................
<br>
<p><p><p>J.W. (Pat) O'Bryant,Jr.
<br>
Business Line Infrastructure
<br>
Technical Systems, HPC
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9256.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9254.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9259.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] OpenMPI 1.3.X Configuration for OFED"</a>
<li><strong>Reply:</strong> <a href="9259.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] OpenMPI 1.3.X Configuration for OFED"</a>
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
