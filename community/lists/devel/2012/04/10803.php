<?
$subject_val = "[OMPI devel] algorithm selection in open mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  2 23:10:53 2012" -->
<!-- isoreceived="20120403031053" -->
<!-- sent="Mon, 2 Apr 2012 20:10:46 -0700 (PDT)" -->
<!-- isosent="20120403031046" -->
<!-- name="roswan ismail" -->
<!-- email="iewanis_at_[hidden]" -->
<!-- subject="[OMPI devel] algorithm selection in open mpi" -->
<!-- id="1333422646.9069.YahooMailNeo_at_web34502.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] algorithm selection in open mpi<br>
<strong>From:</strong> roswan ismail (<em>iewanis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-02 23:10:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10804.php">Rayson Ho: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10802.php">Benedict Holland: "[OMPI devel] OpenMPI and R"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10804.php">Rayson Ho: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Reply:</strong> <a href="10804.php">Rayson Ho: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Reply:</strong> <a href="10806.php">George Bosilca: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all..
&#160;
I am Roswan Ismail from Malaysia. I am focusing on MPI
communication performance on quad-core cluster at my university. I used Open
MPI-1.4.3 and measurements were done using scampi benchmark.
&#160;
As I know, open MPI used multiple algorithms to broadcast
data (MPI_BCAST) such as binomial, pipeline, binary tree, basic linear and
split binary tree. All these algorithms will be used based on message size and
communicator size. For example, binomial is used when message size to be
broadcasted is small while pipeline used for broadcasting a large message. 
&#160;
What I want to do now is, to use fixed algorithm i.e
binomial for all message size. I want to see and compare the results with the
default results. So, I was modified coll_tuned_decision_fixed.c which is
located in open mpi-1.4.3/ompi/mca/coll/tuned by returning binomial algorithm
for all condition. Then I recompile the files but the problem is, the results
obtained is same as default. It seems I do not do any changes to the codes.
&#160;
So could you guys tell me the right way to do that.
&#160;
Many thanks
&#160;
Roswan Binti Ismail, 
FTMK, 
Univ. Pend. Sultan Idris,
Tg Malim, Perak.
Pej: 05-4505173
H/P: 0123588047
iewanis_at_[hidden]
roswan_at_[hidden]
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10803/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10804.php">Rayson Ho: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10802.php">Benedict Holland: "[OMPI devel] OpenMPI and R"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10804.php">Rayson Ho: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Reply:</strong> <a href="10804.php">Rayson Ho: "Re: [OMPI devel] algorithm selection in open mpi"</a>
<li><strong>Reply:</strong> <a href="10806.php">George Bosilca: "Re: [OMPI devel] algorithm selection in open mpi"</a>
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
