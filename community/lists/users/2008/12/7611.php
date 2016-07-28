<?
$subject_val = "[OMPI users] segmentation fault in opal_free_list_grow (derived datatypes + onesided)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 28 12:01:35 2008" -->
<!-- isoreceived="20081228170135" -->
<!-- sent="Sun, 28 Dec 2008 18:00:42 +0100" -->
<!-- isosent="20081228170042" -->
<!-- name="doriankrause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="[OMPI users] segmentation fault in opal_free_list_grow (derived datatypes + onesided)" -->
<!-- id="4957B0BA.8030300_at_web.de" -->
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
<strong>Subject:</strong> [OMPI users] segmentation fault in opal_free_list_grow (derived datatypes + onesided)<br>
<strong>From:</strong> doriankrause (<em>doriankrause_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-28 12:00:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7612.php">Jack Bryan: "[OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>Previous message:</strong> <a href="7610.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi List,
<br>
<p>the attached test program (bsm-db.cc) always dies in malloc called from 
<br>
opal_free_list (backtrace in error.txt and valgrind (vg*) output can be 
<br>
found in the tar file). It seems that there is an invalid write in 
<br>
ompi_osc_pt2pt_sendreq_send. I checked the derived datatype using the 
<br>
checkdt.plx script and can confirm that there is no overlap and the 
<br>
window on the target side is large enough. The segfault occurs on the 
<br>
origin side.
<br>
<p>I would be glad if someone could try to reproduce the problem. I'm using 
<br>
the trunk (revision 20157 from 12/19/08).
<br>
<p>Unfortunately the code (which has been extracted automatically from a 
<br>
real-life application) is not really readable, sorry for that ...
<br>
<p><p>Many thanks + Best regards
<br>
Dorian
<br>
<p><p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7611/ompisigsegv.tar.gz">ompisigsegv.tar.gz</a>
</ul>
<!-- attachment="ompisigsegv.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7612.php">Jack Bryan: "[OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>Previous message:</strong> <a href="7610.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
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
