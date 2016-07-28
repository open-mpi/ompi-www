<?
$subject_val = "[OMPI devel] Simplified: Misuse or bug with nested types?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 23 09:54:22 2013" -->
<!-- isoreceived="20130423135422" -->
<!-- sent="Tue, 23 Apr 2013 09:54:15 -0400" -->
<!-- isosent="20130423135415" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="[OMPI devel] Simplified: Misuse or bug with nested types?" -->
<!-- id="51769287.6020508_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> [OMPI devel] Simplified: Misuse or bug with nested types?<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-23 09:54:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12287.php">Eric Chamberland: "Re: [OMPI devel] Simplified: Misuse or bug with nested types?"</a>
<li><strong>Previous message:</strong> <a href="12285.php">Ralph Castain: "Re: [OMPI devel] Speaking of epoll...."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12287.php">Eric Chamberland: "Re: [OMPI devel] Simplified: Misuse or bug with nested types?"</a>
<li><strong>Reply:</strong> <a href="12287.php">Eric Chamberland: "Re: [OMPI devel] Simplified: Misuse or bug with nested types?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have sent a previous message showing something that I think is a bug 
<br>
(or maybe a misuse, but...).
<br>
<p>I worked on the example sent to have it simplified: now it is almost 
<br>
half of the lines of code and the structures are more simple... but 
<br>
still showing the wrong behaviour.
<br>
<p>Briefly, we construct different MPI_datatype and nests them into a final 
<br>
type which is a:
<br>
{MPI_LONG,{{MPI_LONG,MPI_CHAR}*2}
<br>
<p>Here is the output from OpenMPI 1.6.3:
<br>
<p>&nbsp;&nbsp;Rank 0 send this:
<br>
&nbsp;&nbsp;i: 0 =&gt; {{0},{{3,%},{7,5}}}
<br>
&nbsp;&nbsp;i: 1 =&gt; {{1},{{3,%},{7,5}}}
<br>
&nbsp;&nbsp;i: 2 =&gt; {{2},{{3,%},{7,5}}}
<br>
&nbsp;&nbsp;i: 3 =&gt; {{3},{{3,%},{7,5}}}
<br>
&nbsp;&nbsp;i: 4 =&gt; {{4},{{3,%},{7,5}}}
<br>
&nbsp;&nbsp;i: 5 =&gt; {{5},{{3,%},{7,5}}}
<br>
MPI_Recv returned success and everything in MPI_Status is correct after 
<br>
receive.
<br>
&nbsp;&nbsp;Rank 1 received this:
<br>
&nbsp;&nbsp;i: 0 =&gt; {{0},{{3,%},{-999,$}}} *** ERROR ****
<br>
&nbsp;&nbsp;i: 1 =&gt; {{1},{{3,%},{-999,$}}} *** ERROR ****
<br>
&nbsp;&nbsp;i: 2 =&gt; {{2},{{3,%},{-999,$}}} *** ERROR ****
<br>
&nbsp;&nbsp;i: 3 =&gt; {{3},{{3,%},{-999,$}}} *** ERROR ****
<br>
&nbsp;&nbsp;i: 4 =&gt; {{4},{{3,%},{-999,$}}} *** ERROR ****
<br>
&nbsp;&nbsp;i: 5 =&gt; {{5},{{3,%},{-999,$}}} *** ERROR ****
<br>
<p>Here is the expected output, obtained with mpich-3.0.3:
<br>
<p>&nbsp;&nbsp;Rank 0 send this:
<br>
&nbsp;&nbsp;i: 0 =&gt; {{0},{{3,%},{7,5}}}
<br>
&nbsp;&nbsp;i: 1 =&gt; {{1},{{3,%},{7,5}}}
<br>
&nbsp;&nbsp;i: 2 =&gt; {{2},{{3,%},{7,5}}}
<br>
&nbsp;&nbsp;i: 3 =&gt; {{3},{{3,%},{7,5}}}
<br>
&nbsp;&nbsp;i: 4 =&gt; {{4},{{3,%},{7,5}}}
<br>
&nbsp;&nbsp;i: 5 =&gt; {{5},{{3,%},{7,5}}}
<br>
MPI_Recv returned success and everything in MPI_Status is correct after 
<br>
receive.
<br>
&nbsp;&nbsp;Rank 1 received this:
<br>
&nbsp;&nbsp;i: 0 =&gt; {{0},{{3,%},{7,5}}} OK
<br>
&nbsp;&nbsp;i: 1 =&gt; {{1},{{3,%},{7,5}}} OK
<br>
&nbsp;&nbsp;i: 2 =&gt; {{2},{{3,%},{7,5}}} OK
<br>
&nbsp;&nbsp;i: 3 =&gt; {{3},{{3,%},{7,5}}} OK
<br>
&nbsp;&nbsp;i: 4 =&gt; {{4},{{3,%},{7,5}}} OK
<br>
&nbsp;&nbsp;i: 5 =&gt; {{5},{{3,%},{7,5}}} OK
<br>
<p>Is it related to the bug reported here:
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2013/04/12267.php">http://www.open-mpi.org/community/lists/devel/2013/04/12267.php</a> ?
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12287.php">Eric Chamberland: "Re: [OMPI devel] Simplified: Misuse or bug with nested types?"</a>
<li><strong>Previous message:</strong> <a href="12285.php">Ralph Castain: "Re: [OMPI devel] Speaking of epoll...."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12287.php">Eric Chamberland: "Re: [OMPI devel] Simplified: Misuse or bug with nested types?"</a>
<li><strong>Reply:</strong> <a href="12287.php">Eric Chamberland: "Re: [OMPI devel] Simplified: Misuse or bug with nested types?"</a>
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
