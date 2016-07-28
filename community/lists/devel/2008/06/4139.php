<?
$subject_val = "[OMPI devel] BW benchmark hangs after r 18551";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 01:54:35 2008" -->
<!-- isoreceived="20080617055435" -->
<!-- sent="Tue, 17 Jun 2008 08:54:31 +0300" -->
<!-- isosent="20080617055431" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="[OMPI devel] BW benchmark hangs after r 18551" -->
<!-- id="453d39990806162254t5b8e95dfia111aab1296bdd1e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] BW benchmark hangs after r 18551<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-17 01:54:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4140.php">George Bosilca: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>Previous message:</strong> <a href="4138.php">Jeff Squyres: "[OMPI devel] Fwd: OMPI / Coverity: not running?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4140.php">George Bosilca: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>Reply:</strong> <a href="4140.php">George Bosilca: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>Maybe reply:</strong> <a href="4160.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, George,
<br>
<p>I have a problem running BW benchmark on 100 rank cluster after r18551.
<br>
The BW is mpi_p that runs mpi_bandwidth with 100K between all pairs.
<br>
<p><p>#mpirun -np 100 -hostfile hostfile_w  ./mpi_p_18549 -t bw -s 100000
<br>
BW (100) (size min max avg)  100000     576.734030      2001.882416
<br>
1062.698408
<br>
#mpirun -np 100 -hostfile hostfile_w ./mpi_p_18551 -t bw -s 100000
<br>
mpirun: killing job...
<br>
( it hangs even after 10 hours ).
<br>
<p><p>It doesn't happen if I run --bynode or btl openib,self only.
<br>
<p><p>Lenny.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4139/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4140.php">George Bosilca: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>Previous message:</strong> <a href="4138.php">Jeff Squyres: "[OMPI devel] Fwd: OMPI / Coverity: not running?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4140.php">George Bosilca: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>Reply:</strong> <a href="4140.php">George Bosilca: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>Maybe reply:</strong> <a href="4160.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
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
