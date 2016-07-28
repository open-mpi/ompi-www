<?
$subject_val = "[OMPI users] questions about the openib component";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  8 11:04:43 2010" -->
<!-- isoreceived="20101208160443" -->
<!-- sent="Wed, 8 Dec 2010 15:59:01 +0000" -->
<!-- isosent="20101208155901" -->
<!-- name="&#186;&#238;&#189;&#220;" -->
<!-- email="hjieboy85_at_[hidden]" -->
<!-- subject="[OMPI users] questions about the openib component" -->
<!-- id="COL113-W5457CA257A591F80FC335B82D0_at_phx.gbl" -->
<!-- charset="gb2312" -->
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
<strong>Subject:</strong> [OMPI users] questions about the openib component<br>
<strong>From:</strong> &#186;&#238;&#189;&#220; (<em>hjieboy85_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-08 10:59:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15041.php">Richard Treumann: "Re: [OMPI users] curious behavior during wait for broadcast: 100%	cpu"</a>
<li><strong>Previous message:</strong> <a href="15039.php">Gilbert Grosdidier: "[OMPI users] Trouble with IPM &amp; OpenMPI on SGI Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15154.php">Jeff Squyres: "Re: [OMPI users] questions about the openib component"</a>
<li><strong>Reply:</strong> <a href="15154.php">Jeff Squyres: "Re: [OMPI users] questions about the openib component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>Now I am studying the openib component, and I find it is really complicated. Here I have one question to ask,  it is as follows:
<br>
<p>In the initialization of openib component, the function named setup_qps() is used. In this function, the following code segments are written:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_component.num_pp_qps = num_pp_qps;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_component.num_srq_qps = num_srq_qps;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_component.num_xrc_qps = num_xrc_qps;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_openib_component.num_qps = num_pp_qps + num_srq_qps + num_xrc_qps;
<br>
if you run the program in the step way, you will find that at last the value of mca_btl_openib_component.num_qps is 4( the value of num_pp_qps is 1, and the value of        num_srq_qps is 3).  Can someone explain me why 4 QPs(1 normal QP, 3 SRQ QPs) need to be created?
<br>
<p><p>Have a nice day!
<br>
Thanks very much!
<br>
<p>best regards,
<br>
Jie
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15040/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15041.php">Richard Treumann: "Re: [OMPI users] curious behavior during wait for broadcast: 100%	cpu"</a>
<li><strong>Previous message:</strong> <a href="15039.php">Gilbert Grosdidier: "[OMPI users] Trouble with IPM &amp; OpenMPI on SGI Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15154.php">Jeff Squyres: "Re: [OMPI users] questions about the openib component"</a>
<li><strong>Reply:</strong> <a href="15154.php">Jeff Squyres: "Re: [OMPI users] questions about the openib component"</a>
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
