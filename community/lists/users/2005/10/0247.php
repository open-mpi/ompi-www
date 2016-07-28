<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 31 10:49:34 2005" -->
<!-- isoreceived="20051031154934" -->
<!-- sent="Mon, 31 Oct 2005 07:46:44 -0800" -->
<!-- isosent="20051031154644" -->
<!-- name="Mike Houston" -->
<!-- email="mhouston_at_[hidden]" -->
<!-- subject="[O-MPI users] TCP problems with 1.0rc4" -->
<!-- id="43663C64.1050408_at_graphics.stanford.edu" -->
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
<strong>Date:</strong> 2005-10-31 10:46:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0248.php">Mike Houston: "[O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Previous message:</strong> <a href="0246.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0249.php">George Bosilca: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>Reply:</strong> <a href="0249.php">George Bosilca: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>Reply:</strong> <a href="0250.php">Tim S. Woodall: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We can't seem to run across TCP.  We did a default 'configure'.  Shared 
<br>
memory seems to work, but trying tcp give us:
<br>
<p>[0,1,1][btl_tcp_endpoint.c:557:mca_btl_tcp_endpoint_complete_connect] 
<br>
connect() failed with errno=113
<br>
<p>I'm assuming that the tcp backend is the most thoroughly tested, so I 
<br>
thought I'd ask in case we are doing something silly.  The above is 
<br>
caused when running the OSU NBCL mpi_bandwidth test.
<br>
<p>Thanks!
<br>
<p>-Mike
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0248.php">Mike Houston: "[O-MPI users] Infiniband performance problems (mvapi)"</a>
<li><strong>Previous message:</strong> <a href="0246.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0249.php">George Bosilca: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>Reply:</strong> <a href="0249.php">George Bosilca: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
<li><strong>Reply:</strong> <a href="0250.php">Tim S. Woodall: "Re: [O-MPI users] TCP problems with 1.0rc4"</a>
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
