<?
$subject_val = "[OMPI devel] mlx4 QP operation err";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 28 19:31:03 2015" -->
<!-- isoreceived="20150129003103" -->
<!-- sent="Wed, 28 Jan 2015 18:31:02 -0600" -->
<!-- isosent="20150129003102" -->
<!-- name="Dave Turner" -->
<!-- email="drdaveturner_at_[hidden]" -->
<!-- subject="[OMPI devel] mlx4 QP operation err" -->
<!-- id="CAFGXdkxm5BAY6upPm7A48Kha8UyPMVWTmL9a+UnAD3fN-GOaWg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] mlx4 QP operation err<br>
<strong>From:</strong> Dave Turner (<em>drdaveturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-28 19:31:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16838.php">Christopher Samuel: "Re: [OMPI devel] mlx4 QP operation err"</a>
<li><strong>Previous message:</strong> <a href="16836.php">Jeff Squyres (jsquyres): "[OMPI devel] For discussion tomorrow: MTL issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16838.php">Christopher Samuel: "Re: [OMPI devel] mlx4 QP operation err"</a>
<li><strong>Reply:</strong> <a href="16838.php">Christopher Samuel: "Re: [OMPI devel] mlx4 QP operation err"</a>
<li><strong>Reply:</strong> <a href="16839.php">Devendar Bureddy: "Re: [OMPI devel] mlx4 QP operation err"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;I'm testing RoCE on 40 Gbps Mellanox ethernet cards and am getting a
<br>
mlx4 QP operation error every time it gets to testing 132 kB packets.  These
<br>
are aggregate tests in that 16 cores on one host are doing bi-directional
<br>
ping-pongs to 16 cores on another host across the Mellanox cards.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I've found some old references to similar mlx4 errors dating back to
<br>
2009 that lead me to believe this may be a firmware error.  I believe we're
<br>
running the most up to date version of the firmware.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Could someone comment on whether these are firmware issues, and
<br>
if so how to report them to Mellanox?  I've attached some files with more
<br>
detailed information on this problem.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave Turner
<br>
<p><pre>
-- 
Work:     DaveTurner_at_[hidden]     (785) 532-7791
             118 Nichols Hall, Manhattan KS  66502
Home:    DrDaveTurner_at_[hidden]
              cell: (785) 770-5929

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16837/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16837/mlx4_error.tar.gz">mlx4_error.tar.gz</a>
</ul>
<!-- attachment="mlx4_error.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16838.php">Christopher Samuel: "Re: [OMPI devel] mlx4 QP operation err"</a>
<li><strong>Previous message:</strong> <a href="16836.php">Jeff Squyres (jsquyres): "[OMPI devel] For discussion tomorrow: MTL issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16838.php">Christopher Samuel: "Re: [OMPI devel] mlx4 QP operation err"</a>
<li><strong>Reply:</strong> <a href="16838.php">Christopher Samuel: "Re: [OMPI devel] mlx4 QP operation err"</a>
<li><strong>Reply:</strong> <a href="16839.php">Devendar Bureddy: "Re: [OMPI devel] mlx4 QP operation err"</a>
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
