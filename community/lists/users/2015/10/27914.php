<?
$subject_val = "[OMPI users] Questions about non-blocking collective calls...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 15:46:41 2015" -->
<!-- isoreceived="20151021194641" -->
<!-- sent="Wed, 21 Oct 2015 15:46:25 -0400" -->
<!-- isosent="20151021194625" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="[OMPI users] Questions about non-blocking collective calls..." -->
<!-- id="5627EB91.7090100_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> [OMPI users] Questions about non-blocking collective calls...<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-21 15:46:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27915.php">Gilles Gouaillardet: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Previous message:</strong> <a href="27913.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27915.php">Gilles Gouaillardet: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Reply:</strong> <a href="27915.php">Gilles Gouaillardet: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>A long time ago (in 2002) we programmed here a non-blocking MPI_Igather 
<br>
with equivalent calls to MPI_Isend/MPI_Irecv (see the 2 attached files).
<br>
<p>A very convenient advantage of this version, is that I can do some work 
<br>
on the root process as soon as it start receiving data...  Then, it wait 
<br>
for the next communication to terminate and process the received data.
<br>
<p>Now, I am looking at MPI_Igather (and all non-blocking collective MPI 
<br>
calls), and I am somewhat surprised (or ignorant) that I cannot have the 
<br>
root rank receive some data, then process it, then wait until the next 
<br>
&quot;MPI_irecv&quot; terminate...
<br>
<p>In other words, a MPI_Igather generate only 1 MPI_Request but I would 
<br>
like to have either &quot;p&quot; (with p = size of communicator) MPI_Request 
<br>
generated or be able to call &quot;p&quot; times MPI_WaitAny with the same 
<br>
MPI_Request...  Am I normal? :)
<br>
<p>So my 3 questions are:
<br>
<p>#1- Is there a way to use MPI_Igather with MPI_WaitAny (or something 
<br>
else?) to process data as it is received?
<br>
<p>#2- Big question: will our implementation with MPI_Isend/MPI_Irecv scale 
<br>
to a large number of processes?  What are the possible drawbacks of 
<br>
doing it like we did?
<br>
<p>#3- Why should I replace our implementation by the native MPI_Igather?
<br>
<p>Thanks!
<br>
<p>Eric
<br>
<p><p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27914/igather_with_isendrecv.cc">igather_with_isendrecv.cc</a>
</ul>
<!-- attachment="igather_with_isendrecv.cc" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27914/igather.c">igather.c</a>
</ul>
<!-- attachment="igather.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27915.php">Gilles Gouaillardet: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Previous message:</strong> <a href="27913.php">David Shrader: "Re: [OMPI users] hcoll dependency on mxm configure error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27915.php">Gilles Gouaillardet: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
<li><strong>Reply:</strong> <a href="27915.php">Gilles Gouaillardet: "Re: [OMPI users] Questions about non-blocking collective calls..."</a>
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
