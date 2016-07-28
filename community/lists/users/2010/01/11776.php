<?
$subject_val = "[OMPI users] Setting MCA parameter from within program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 15:08:20 2010" -->
<!-- isoreceived="20100114200820" -->
<!-- sent="Thu, 14 Jan 2010 15:08:14 -0500" -->
<!-- isosent="20100114200814" -->
<!-- name="Roland Schulz" -->
<!-- email="roland_at_[hidden]" -->
<!-- subject="[OMPI users] Setting MCA parameter from within program" -->
<!-- id="c93c21391001141208t2eff60dcu3a90cd76adaa7b12_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Setting MCA parameter from within program<br>
<strong>From:</strong> Roland Schulz (<em>roland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-14 15:08:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11777.php">Jeff Squyres: "Re: [OMPI users] Rapid I/O support"</a>
<li><strong>Previous message:</strong> <a href="11775.php">TONY BASIL: "[OMPI users] Rapid I/O support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11779.php">Jeff Squyres: "Re: [OMPI users] Setting MCA parameter from within program"</a>
<li><strong>Reply:</strong> <a href="11779.php">Jeff Squyres: "Re: [OMPI users] Setting MCA parameter from within program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>is it possible to set MCA parameters from within the MPI program itself? The
<br>
FAQ only mentions how to set them through files or environment variables.
<br>
<p>I would like to set coll_tuned_use_dynamic_rules and
<br>
coll_tuned_alltoall_algorithm.
<br>
<p>I assume there is a function to do this  in include/opal/mca but I'm not
<br>
sure which one. And I couldn't find any documentation explaining it.
<br>
I'm aware that this will only work with OpenMPI and is probably not part of
<br>
the public api thus the interface might change between version.
<br>
<p>My plan is to benchmark all alltoall algorithms at start up and then use
<br>
this algorithm for all later AllToAll calls. I have benchmarked that
<br>
manually choosing the algorithm can make a large  difference. Also all my
<br>
alltoall communication is of the same data size thus tuning is easy.
<br>
<p>Thanks
<br>
<p><span class="quotelev1">&gt; Roland
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
ORNL/UT Center for Molecular Biophysics cmb.ornl.gov
865-241-1537, ORNL PO BOX 2008 MS6309
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11776/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11777.php">Jeff Squyres: "Re: [OMPI users] Rapid I/O support"</a>
<li><strong>Previous message:</strong> <a href="11775.php">TONY BASIL: "[OMPI users] Rapid I/O support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11779.php">Jeff Squyres: "Re: [OMPI users] Setting MCA parameter from within program"</a>
<li><strong>Reply:</strong> <a href="11779.php">Jeff Squyres: "Re: [OMPI users] Setting MCA parameter from within program"</a>
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
