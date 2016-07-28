<?
$subject_val = "[OMPI users] progressing passive-sync RMA operations";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  9 01:06:34 2015" -->
<!-- isoreceived="20150109060634" -->
<!-- sent="Thu, 8 Jan 2015 22:06:33 -0800" -->
<!-- isosent="20150109060633" -->
<!-- name="Christopher O'Grady" -->
<!-- email="cpo_at_[hidden]" -->
<!-- subject="[OMPI users] progressing passive-sync RMA operations" -->
<!-- id="21679.28649.222903.816789_at_rhel6-64h.slac.stanford.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] progressing passive-sync RMA operations<br>
<strong>From:</strong> Christopher O'Grady (<em>cpo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-09 01:06:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26149.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Previous message:</strong> <a href="26147.php">George Bosilca: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm using openmpi 1.8.1 and could use some brief advice on RMA with
<br>
passive synchronization.  I've been trying to use that synchronization
<br>
because I can't guarantee that the two ranks that are communicating
<br>
have matching pairs of Start/Complete Post/Wait required by active
<br>
synchronization.  On the &quot;target&quot; side, I think I've learned that I
<br>
have to enter the MPI library in order to &quot;progress&quot; the RMA request
<br>
as described here:
<br>
<p><a href="http://stackoverflow.com/questions/18737545/mpi-with-c-passive-rma-synchronization">http://stackoverflow.com/questions/18737545/mpi-with-c-passive-rma-synchronization</a>
<br>
<p>So to &quot;enter the MPI library&quot; I've tried calling MPI_Iprobe on the
<br>
target side intermittently to try to progress the RMA, but I don't
<br>
believe that works.  Is there another routine that would work better?
<br>
I guess I could try &quot;enable-opal-multi-threads&quot; recommended in the
<br>
above post, but was worried about thread-safety, and thought I would
<br>
first ask for advice here on the cleanest way to progress RMA requests
<br>
on the target with passive synchronization.
<br>
<p>Thanks for any quick thoughts you might have!
<br>
<p>chris
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26149.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Previous message:</strong> <a href="26147.php">George Bosilca: "Re: [OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
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
