<?
$subject_val = "[OMPI users] Question on building OpenMPI with support for memory affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 29 09:46:08 2013" -->
<!-- isoreceived="20130529134608" -->
<!-- sent="Wed, 29 May 2013 13:45:26 +0000" -->
<!-- isosent="20130529134526" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Question on building OpenMPI with support for memory affinity" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CA0338A_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] Question on building OpenMPI with support for memory affinity<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-29 09:45:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21977.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI installation"</a>
<li><strong>Previous message:</strong> <a href="21975.php">Jeff Squyres (jsquyres): "Re: [OMPI users] -Re Post- MPI_SUM is not defined on the	MPI_INTEGER datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21978.php">Ralph Castain: "Re: [OMPI users] Question on building OpenMPI with support for memory affinity"</a>
<li><strong>Reply:</strong> <a href="21978.php">Ralph Castain: "Re: [OMPI users] Question on building OpenMPI with support for memory affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The FAQ talks about building support for memory affinity by adding -with-libnuma=&lt;path&gt;
<br>
<p>However, I did not do that, and yet when I check ompi_info, it looks like there is support from the hwloc module.
<br>
<p>Can I assume the FAQ is a little stale and that -with-libnuma is not really necessary anymore?
<br>
<p>[bloscel_at_mgmt1 bin]$ ./ompi_info | grep affi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI extensions: affinity example
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.6.4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: hwloc (MCA v2.0, API v2.0, Component v1.6.4)
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21976/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21977.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI installation"</a>
<li><strong>Previous message:</strong> <a href="21975.php">Jeff Squyres (jsquyres): "Re: [OMPI users] -Re Post- MPI_SUM is not defined on the	MPI_INTEGER datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21978.php">Ralph Castain: "Re: [OMPI users] Question on building OpenMPI with support for memory affinity"</a>
<li><strong>Reply:</strong> <a href="21978.php">Ralph Castain: "Re: [OMPI users] Question on building OpenMPI with support for memory affinity"</a>
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
