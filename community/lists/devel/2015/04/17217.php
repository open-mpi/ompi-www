<?
$subject_val = "[OMPI devel] segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 05:12:02 2015" -->
<!-- isoreceived="20150414091202" -->
<!-- sent="Tue, 14 Apr 2015 10:12:02 +0100" -->
<!-- isosent="20150414091202" -->
<!-- name="Cyrille DIBAMOU MBEUYO" -->
<!-- email="cdibamou_at_[hidden]" -->
<!-- subject="[OMPI devel] segmentation fault" -->
<!-- id="CAD1qWRTS93W9iWtDcUYSrO-=Yt9EpKAnKE5GZJkPvTPfgopQHg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] segmentation fault<br>
<strong>From:</strong> Cyrille DIBAMOU MBEUYO (<em>cdibamou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-14 05:12:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17218.php">Ralph Castain: "Re: [OMPI devel] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="17216.php">Ralph Castain: "Re: [OMPI devel] Info about ORTE structure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17218.php">Ralph Castain: "Re: [OMPI devel] segmentation fault"</a>
<li><strong>Reply:</strong> <a href="17218.php">Ralph Castain: "Re: [OMPI devel] segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
*Good morning,*
<br>
<p>In my experiences, i have shared a folder in my cluster of 4 computers.
<br>
I then run a mpi programm (which calculate the nomber pi) on 2 computers,
<br>
and i checkpoint it with the ompi-checkpoint command.
<br>
For the restart, i modify the nodes file for change one computer name so
<br>
that the two new computer node are different than the two older for the
<br>
computing.
<br>
With the ompi-restart command (and the nodes file), when i restart the
<br>
checkpointed application, i got this error message : *mpirun noticed that
<br>
process rank 1 with PID 1619 on node oartwo exited on signal 11
<br>
(segmentation fault).*
<br>
<p>I then want to kno the problem and how to solve it.
<br>
<p><p><p>*Thank you*
<br>
<p><p>*Hope to read you.*
<br>
*Best regards.*
<br>
<p><pre>
-- 
DIBAMOU MBEUYO Cyrille
Computer Engineer, M.Sc.
Ph.D. Student in Computer Science
*Mobile* : (+237) 696 608 826 / 674 979 502
The University Of Ngaoundere,  CAMEROUN
*Other Email *: cdibamou_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17217/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17218.php">Ralph Castain: "Re: [OMPI devel] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="17216.php">Ralph Castain: "Re: [OMPI devel] Info about ORTE structure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17218.php">Ralph Castain: "Re: [OMPI devel] segmentation fault"</a>
<li><strong>Reply:</strong> <a href="17218.php">Ralph Castain: "Re: [OMPI devel] segmentation fault"</a>
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
