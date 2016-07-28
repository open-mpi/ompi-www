<?
$subject_val = "[OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  1 10:02:36 2016" -->
<!-- isoreceived="20160201150236" -->
<!-- sent="Mon, 1 Feb 2016 18:02:14 +0300" -->
<!-- isosent="20160201150214" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY" -->
<!-- id="CAEcYPwCXr-AbL9nZdpcH56W2Y5hYUAv70SDTdUufQ2tPmuMCxA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-01 10:02:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18533.php">Gilles Gouaillardet: "[OMPI devel] Fwd: Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18531.php">Geoffrey Paulsen: "[OMPI devel] Minutes from Telcon today"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18534.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
<li><strong>Reply:</strong> <a href="18534.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might argue that the attached tests are naive, but still... (Open
<br>
MPI v1.10.2)
<br>
<p>$ mpicc win_post_wait.c
<br>
$ mpiexec -n 1 ./a.out
<br>
malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 76)
<br>
malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 78)
<br>
$ mpiexec -n 2 ./a.out
<br>
malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 76)
<br>
malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 78)
<br>
malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 76)
<br>
malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 78)
<br>
<p>$ mpicc win_start_complete.c
<br>
$ mpiexec -n 1 ./a.out
<br>
malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 76)
<br>
malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 78)
<br>
malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 76)
<br>
malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 78)
<br>
$ mpiexec -n 2 ./a.out
<br>
malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 76)
<br>
malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 78)
<br>
malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 76)
<br>
malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 78)
<br>
malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 76)
<br>
malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 78)
<br>
malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 76)
<br>
malloc debug: Request for 0 bytes (osc_pt2pt_active_target.c, 78)
<br>
<p><p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Numerical Porous Media Center (NumPor)
King Abdullah University of Science and Technology (KAUST)
<a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459


</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18532/win_start_complete.c">win_start_complete.c</a>
</ul>
<!-- attachment="win_start_complete.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18532/win_post_wait.c">win_post_wait.c</a>
</ul>
<!-- attachment="win_post_wait.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18533.php">Gilles Gouaillardet: "[OMPI devel] Fwd: Re: [OMPI users] New libmpi.so dependency on libibverbs.so?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18531.php">Geoffrey Paulsen: "[OMPI devel] Minutes from Telcon today"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18534.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
<li><strong>Reply:</strong> <a href="18534.php">Gilles Gouaillardet: "Re: [OMPI devel] malloc(0) warnings in post/wait and start/complete calls with GROUP_EMPTY"</a>
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
