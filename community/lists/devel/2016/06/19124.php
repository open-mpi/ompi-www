<?
$subject_val = "Re: [OMPI devel] 2.0.0rc3 MPI_Comm_split_type()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 16 19:15:54 2016" -->
<!-- isoreceived="20160616231554" -->
<!-- sent="Thu, 16 Jun 2016 23:15:52 +0000 (GMT)" -->
<!-- isosent="20160616231552" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 2.0.0rc3 MPI_Comm_split_type()" -->
<!-- id="5ca7dc14-fe12-44de-9e4c-9e079af1b03b_at_me.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI devel] 2.0.0rc3 MPI_Comm_split_type()" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 2.0.0rc3 MPI_Comm_split_type()<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-16 19:15:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19125.php">Nathan Hjelm: "Re: [OMPI devel] 2.0.0rc3 MPI_Comm_split_type()"</a>
<li><strong>Previous message:</strong> <a href="19123.php">Lisandro Dalcin: "[OMPI devel] 2.0.0rc3 MPI_Comm_split_type()"</a>
<li><strong>Maybe in reply to:</strong> <a href="19123.php">Lisandro Dalcin: "[OMPI devel] 2.0.0rc3 MPI_Comm_split_type()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19125.php">Nathan Hjelm: "Re: [OMPI devel] 2.0.0rc3 MPI_Comm_split_type()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not sure why happened&#194;&#160;but it is indeed a regression. Will submit a fix now.

-Nathan

On Jun 16, 2016, at 02:19 PM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:

Could you please check/confirm you are supporting passing
split_type=MPI_UNDEFINED to MPI_Comm_split_type() ? IIRC, this is a
regression from 2.0.0rc2.

$ cat test-comm-split-type.py
from mpi4py import MPI
subcomm = MPI.COMM_WORLD.Split_type(MPI.UNDEFINED)
assert subcomm == MPI.COMM_NULL

$ mpiexec -n 1 python test-comm-split-type.py
Traceback (most recent call last):
File &quot;test-comm-split-type.py&quot;, line 2, in &lt;module&gt;
subcomm = MPI.COMM_WORLD.Split_type(MPI.UNDEFINED)
File &quot;MPI/Comm.pyx&quot;, line 214, in mpi4py.MPI.Comm.Split_type
(src/mpi4py.MPI.c:95252)
mpi4py.MPI.Exception: MPI_ERR_ARG: invalid argument of some other kind


-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Extreme Computing Research Center (ECRC)
King Abdullah University of Science and Technology (KAUST)
<a href="http://ecrc.kaust.edu.sa/">http://ecrc.kaust.edu.sa/</a>

4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 0109
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>

Office Phone: +966 12 808-0459
_______________________________________________
devel mailing list
devel_at_[hidden]
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19123.php">http://www.open-mpi.org/community/lists/devel/2016/06/19123.php</a>

<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19124/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19125.php">Nathan Hjelm: "Re: [OMPI devel] 2.0.0rc3 MPI_Comm_split_type()"</a>
<li><strong>Previous message:</strong> <a href="19123.php">Lisandro Dalcin: "[OMPI devel] 2.0.0rc3 MPI_Comm_split_type()"</a>
<li><strong>Maybe in reply to:</strong> <a href="19123.php">Lisandro Dalcin: "[OMPI devel] 2.0.0rc3 MPI_Comm_split_type()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19125.php">Nathan Hjelm: "Re: [OMPI devel] 2.0.0rc3 MPI_Comm_split_type()"</a>
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
