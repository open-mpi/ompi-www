<?
$subject_val = "[OMPI users] question about running openmpi with different interconnects";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  4 10:30:13 2011" -->
<!-- isoreceived="20110404143013" -->
<!-- sent="Mon, 4 Apr 2011 07:30:01 -0700" -->
<!-- isosent="20110404143001" -->
<!-- name="Borenstein, Bernard S" -->
<!-- email="bernard.s.borenstein_at_[hidden]" -->
<!-- subject="[OMPI users] question about running openmpi with different interconnects" -->
<!-- id="86452700B9094A47B93B8DD616E3927E06BA6D9C98_at_XCH-SW-06V.sw.nos.boeing.com" -->
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
<strong>Subject:</strong> [OMPI users] question about running openmpi with different interconnects<br>
<strong>From:</strong> Borenstein, Bernard S (<em>bernard.s.borenstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-04 10:30:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16110.php">Ralph Castain: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16108.php">Ralph Castain: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16121.php">Jeff Squyres: "Re: [OMPI users] question about running openmpi with different interconnects"</a>
<li><strong>Reply:</strong> <a href="16121.php">Jeff Squyres: "Re: [OMPI users] question about running openmpi with different interconnects"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have added clusters with different interconnects and decided to build one OPENMPI 1.4.3 version to handle all the possible interconnects
<br>
and run everywhere.  I have two questions about this :
<br>
<p>1 - is there a way for Openmpi to print out the interconnect it selected to use at run time?  I am asking for an option similar to the -prot argument in hpmpi/platform mpi to print the interconnect selected.  If this is not implemented, I would like to suggest it as an enhancement.
<br>
<p>2 - I have built Openmpi to allow tcp, mx, gm and ib.  When running on a tcp only cluster and specifying -mca btl tcp,sm,self, I get errors like this
<br>
[erb426:08967] Error in mx_init (error No MX device entry in /dev.)
<br>
<p>Since I am calling out the interconnect to use, why would I be getting an error like this??
<br>
<p>Bernie Borenstein
<br>
The Boeing Company
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16109/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16110.php">Ralph Castain: "Re: [OMPI users] mpi problems,"</a>
<li><strong>Previous message:</strong> <a href="16108.php">Ralph Castain: "Re: [OMPI users] Deadlock with mpi_init_thread + mpi_file_set_view"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16121.php">Jeff Squyres: "Re: [OMPI users] question about running openmpi with different interconnects"</a>
<li><strong>Reply:</strong> <a href="16121.php">Jeff Squyres: "Re: [OMPI users] question about running openmpi with different interconnects"</a>
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
