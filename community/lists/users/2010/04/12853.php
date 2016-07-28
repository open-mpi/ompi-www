<?
$subject_val = "[OMPI users] openmpi 1.4.1 and xgrid";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 30 15:14:41 2010" -->
<!-- isoreceived="20100430191441" -->
<!-- sent="Fri, 30 Apr 2010 20:14:15 +0100" -->
<!-- isosent="20100430191415" -->
<!-- name="Alan" -->
<!-- email="alanwilter_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.4.1 and xgrid" -->
<!-- id="i2zcf58c8d01004301214x5bc3b0ak613b0d66e95a843e_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.4.1 and xgrid<br>
<strong>From:</strong> Alan (<em>alanwilter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-30 15:14:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12854.php">Doug Reeder: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>Previous message:</strong> <a href="12852.php">Trent Creekmore: "Re: [OMPI users] Calling MPI from a CGI script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12854.php">Doug Reeder: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>Reply:</strong> <a href="12854.php">Doug Reeder: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>No matter I do I cannot disable xgrid while compiling opempi. I tried:
<br>
<p>--without-xgrid --enable-shared --enable-static
<br>
<p>And still see with ompi_info:
<br>
<p>&nbsp;MCA plm: xgrid (MCA v2.0, API v2.0, Component v1.4.1)
<br>
<p>And because of xgrid on ompi, I have:
<br>
<p>openmpi-1.4.1/examples% mpirun -c 2 hello_c
<br>
[amadeus.local:26559] [[63998,0],0] ORTE_ERROR_LOG: Unknown error: 1 in file
<br>
src/plm_xgrid_module.m at line 119
<br>
[amadeus.local:26559] [[63998,0],0] ORTE_ERROR_LOG: Unknown error: 1 in file
<br>
src/plm_xgrid_module.m at line 15
<br>
<p>Using mac SL 10.6.3
<br>
<p>Compiling 1.3.3 and haven't any problem.
<br>
<p>Thanks in advance,
<br>
<p>Alan
<br>
<p><pre>
-- 
Alan Wilter S. da Silva, D.Sc. - CCPN Research Associate
Department of Biochemistry, University of Cambridge.
80 Tennis Court Road, Cambridge CB2 1GA, UK.
&gt;&gt;<a href="http://www.bio.cam.ac.uk/~awd28">http://www.bio.cam.ac.uk/~awd28</a>&lt;&lt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12853/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12854.php">Doug Reeder: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>Previous message:</strong> <a href="12852.php">Trent Creekmore: "Re: [OMPI users] Calling MPI from a CGI script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12854.php">Doug Reeder: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
<li><strong>Reply:</strong> <a href="12854.php">Doug Reeder: "Re: [OMPI users] openmpi 1.4.1 and xgrid"</a>
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
