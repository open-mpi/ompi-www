<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 11:46:12 2007" -->
<!-- isoreceived="20070404154612" -->
<!-- sent="Wed, 4 Apr 2007 11:47:05 -0400" -->
<!-- isosent="20070404154705" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;quot;Address not mapped&amp;quot; error on user defined MPI_OP function" -->
<!-- id="200704041147.05897.kyron_at_neuralbs.com" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-04 11:47:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3018.php">Eric Thibodeau: "Re: [OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
<li><strong>Previous message:</strong> <a href="3016.php">Jeff Squyres: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3018.php">Eric Thibodeau: "Re: [OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
<li><strong>Reply:</strong> <a href="3018.php">Eric Thibodeau: "Re: [OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
<li><strong>Reply:</strong> <a href="3020.php">Eric Thibodeau: "Re: [OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First off, please excuse the attached code as I may be na&#195;&#131;&#194;&#175;ve in my attempts to implement my own MPI_OP.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am attempting to create my own MPI_OP to use with MPI_Allreduce. I have been able to find very little examples off the net of creating MPI_OPs. My present references are &quot;MPI The complete reference Volume 1 2nd edition&quot; and some rather good slides I found at <a href="http://www.mpi-hd.mpg.de/personalhomes/stiff/MPI/">http://www.mpi-hd.mpg.de/personalhomes/stiff/MPI/</a> . I am attaching my &quot;proof of concept&quot; code which fails with:
<br>
<p>[kyron:14074] *** Process received signal ***
<br>
[kyron:14074] Signal: Segmentation fault (11)
<br>
[kyron:14074] Signal code: Address not mapped (1)
<br>
[kyron:14074] Failing at address: 0x801da600
<br>
[kyron:14074] [ 0] [0x6ffa6440]
<br>
[kyron:14074] [ 1] /home/kyron/openmpi_i686/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_allreduce_intra_recursivedoubling+0x700) [0x6fbb0dd0]
<br>
[kyron:14074] [ 2] /home/kyron/openmpi_i686/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_allreduce_intra_dec_fixed+0xb2) [0x6fbae9a2]
<br>
[kyron:14074] [ 3] /home/kyron/openmpi_i686/lib/libmpi.so.0(PMPI_Allreduce+0x1a6) [0x6ff61e86]
<br>
[kyron:14074] [ 4] AllReduceTest(main+0x180) [0x8048ee8]
<br>
[kyron:14074] [ 5] /lib/libc.so.6(__libc_start_main+0xe3) [0x6fcbd823]
<br>
[kyron:14074] *** End of error message ***
<br>
<p><p>Eric Thibodeau
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3017/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3017/AllReduceTest.c">AllReduceTest.c</a>
</ul>
<!-- attachment="AllReduceTest.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3018.php">Eric Thibodeau: "Re: [OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
<li><strong>Previous message:</strong> <a href="3016.php">Jeff Squyres: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3018.php">Eric Thibodeau: "Re: [OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
<li><strong>Reply:</strong> <a href="3018.php">Eric Thibodeau: "Re: [OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
<li><strong>Reply:</strong> <a href="3020.php">Eric Thibodeau: "Re: [OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
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
