<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 20 17:15:09 2007" -->
<!-- isoreceived="20070320211509" -->
<!-- sent="Tue, 20 Mar 2007 14:15:05 -0700" -->
<!-- isosent="20070320211505" -->
<!-- name="Mike Houston" -->
<!-- email="mhouston_at_[hidden]" -->
<!-- subject="[OMPI users] Issues with Get/Put and IRecv" -->
<!-- id="46004ED9.9090104_at_graphics.stanford.edu" -->
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
<strong>From:</strong> Mike Houston (<em>mhouston_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-20 17:15:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2851.php">Brian Barrett: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Previous message:</strong> <a href="2849.php">Ralph Castain: "Re: [OMPI users] v1.2 Bus Error (/tmp usage)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2851.php">Brian Barrett: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Reply:</strong> <a href="2851.php">Brian Barrett: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I only do gets/puts, things seem to be working correctly with version 
<br>
1.2.  However, if I have a posted Irecv on the target node and issue a 
<br>
MPI_Get against that target, MPI_Test on the posed IRecv causes a segfaults:
<br>
<p>[expose:21249] *** Process received signal ***
<br>
[expose:21249] Signal: Segmentation fault (11)
<br>
[expose:21249] Signal code: Address not mapped (1)
<br>
[expose:21249] Failing at address: 0xa0
<br>
[expose:21249] [ 0] [0x96e440]
<br>
[expose:21249] [ 1] 
<br>
/usr/lib/openmpi/mca_osc_pt2pt.so(ompi_osc_pt2pt_replyreq_send+0xed) 
<br>
[0x2c765d]
<br>
[expose:21249] [ 2] /usr/lib/openmpi/mca_osc_pt2pt.so [0x2c5ebe]
<br>
[expose:21249] [ 3] 
<br>
/usr/lib/openmpi/mca_osc_pt2pt.so(ompi_osc_pt2pt_progress+0x119) [0x2c6389]
<br>
[expose:21249] [ 4] /usr/lib/libopen-pal.so.0(opal_progress+0x69) [0x67d019]
<br>
[expose:21249] [ 5] 
<br>
/usr/lib/openmpi/mca_osc_pt2pt.so(ompi_osc_pt2pt_passive_unlock+0xb5) 
<br>
[0x2ca9e5]
<br>
[expose:21249] [ 6] /usr/lib/openmpi/mca_osc_pt2pt.so [0x2c5cd2]
<br>
[expose:21249] [ 7] 
<br>
/usr/lib/openmpi/mca_osc_pt2pt.so(ompi_osc_pt2pt_progress+0x119) [0x2c6389]
<br>
[expose:21249] [ 8] /usr/lib/libopen-pal.so.0(opal_progress+0x69) [0x67d019]
<br>
[expose:21249] [ 9] /usr/lib/libmpi.so.0(ompi_request_test+0x35) [0x3d6f05]
<br>
[expose:21249] [10] /usr/lib/libmpi.so.0(PMPI_Test+0x80) [0x404770]
<br>
<p>Anyone have suggestions?  Sadly, I need to have IRecv's posted.  I'll 
<br>
attempt to find a workaround, but it looks like the posed IRecv is 
<br>
getting all the data of the MPI_Get from the other node.  It's like the 
<br>
message tagging is getting ignored.  I've never tried posting two 
<br>
different IRecv's with different message tags either...
<br>
<p>-Mike
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2851.php">Brian Barrett: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Previous message:</strong> <a href="2849.php">Ralph Castain: "Re: [OMPI users] v1.2 Bus Error (/tmp usage)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2851.php">Brian Barrett: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
<li><strong>Reply:</strong> <a href="2851.php">Brian Barrett: "Re: [OMPI users] Issues with Get/Put and IRecv"</a>
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
