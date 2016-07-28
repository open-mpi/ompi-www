<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 10:55:08 2007" -->
<!-- isoreceived="20071017145508" -->
<!-- sent="Wed, 17 Oct 2007 10:54:49 -0400" -->
<!-- isosent="20071017145449" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.2 branch mpi_preconnect_all" -->
<!-- id="47162239.8000406_at_Sun.COM" -->
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
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-17 10:54:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2456.php">Jennis Pruett: "[OMPI devel] issue with --without-tm in configure?"</a>
<li><strong>Previous message:</strong> <a href="2454.php">Jeff Squyres: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2562.php">Jeff Squyres: "Re: [OMPI devel] v1.2 branch mpi_preconnect_all"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2562.php">Jeff Squyres: "Re: [OMPI devel] v1.2 branch mpi_preconnect_all"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>I have noticed an issue in the 1.2 branch when mpi_preconnect_all=1. The 
<br>
one way communication pattern (ranks either send or receive from each 
<br>
other) may not fully establish connection with peers. Example, if I have 
<br>
a 3 process mpi job and rank 0 does not do any mpi communication after 
<br>
MPI_Init() the other ranks attempts to connect will not be progressed (I 
<br>
have seen this with tcp and udapl).  
<br>
The preconnect pattern has changed slightly in the trunk but essentially 
<br>
it is still a one way communication, either send or receive with each 
<br>
rank. So although the issue I see in the 1.2 branch does not appear in 
<br>
the trunk I wonder if this will show up again.
<br>
<p>An alternative to the preconnect pattern that comes to mind would be to 
<br>
perform a send and receive between all ranks to ensure that connections 
<br>
have been fully established.
<br>
<p>Does anyone have thoughts or comments on this, or reasons not to have 
<br>
all ranks send and receive from all?
<br>
<p>-DON
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2456.php">Jennis Pruett: "[OMPI devel] issue with --without-tm in configure?"</a>
<li><strong>Previous message:</strong> <a href="2454.php">Jeff Squyres: "Re: [OMPI devel] RFC: delete mvapi BTL for v1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2562.php">Jeff Squyres: "Re: [OMPI devel] v1.2 branch mpi_preconnect_all"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2562.php">Jeff Squyres: "Re: [OMPI devel] v1.2 branch mpi_preconnect_all"</a>
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
