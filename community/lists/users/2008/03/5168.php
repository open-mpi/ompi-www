<?
$subject_val = "[OMPI users] Set GID";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 18:04:24 2008" -->
<!-- isoreceived="20080311220424" -->
<!-- sent="Tue, 11 Mar 2008 17:04:19 -0500" -->
<!-- isosent="20080311220419" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="[OMPI users] Set GID" -->
<!-- id="20080311220419.GC28088_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> [OMPI users] Set GID<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-11 18:04:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5169.php">Audet, Martin: "[OMPI users] MPI_Comm_connect() fails."</a>
<li><strong>Previous message:</strong> <a href="5167.php">Jim Hill: "[OMPI users] What architecture?  X86_64, that's what architecture!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5173.php">Jeff Squyres: "Re: [OMPI users] Set GID"</a>
<li><strong>Reply:</strong> <a href="5173.php">Jeff Squyres: "Re: [OMPI users] Set GID"</a>
<li><strong>Reply:</strong> <a href="5174.php">Pavel Shamis (Pasha): "Re: [OMPI users] Set GID"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am getting the following error when I try to run OMPI over my dual
<br>
port IB adapter:
<br>
<p>--------------------------------------------------------------------------
<br>
WARNING: There are more than one active ports on host 'vic20', but the
<br>
default subnet GID prefix was detected on more than one of these
<br>
ports.  If these ports are connected to different physical IB
<br>
networks, this configuration will fail in Open MPI.  This version of
<br>
Open MPI requires that every physically separate IB subnet that is
<br>
used between connected MPI processes must have different subnet ID
<br>
values.
<br>
<p>Please see this FAQ entry for more details:
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid">http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid</a>
<br>
<p>NOTE: You can turn off this warning by setting the MCA parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_openib_warn_default_gid_prefix to 0.
<br>
--------------------------------------------------------------------------
<br>
<p><p>I understand why it is doing the above based on the description in the
<br>
link above, but I cannot seem to find anywhere that will tell me how to
<br>
change the GID to something else.
<br>
<p>Thanks,
<br>
Jon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5169.php">Audet, Martin: "[OMPI users] MPI_Comm_connect() fails."</a>
<li><strong>Previous message:</strong> <a href="5167.php">Jim Hill: "[OMPI users] What architecture?  X86_64, that's what architecture!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5173.php">Jeff Squyres: "Re: [OMPI users] Set GID"</a>
<li><strong>Reply:</strong> <a href="5173.php">Jeff Squyres: "Re: [OMPI users] Set GID"</a>
<li><strong>Reply:</strong> <a href="5174.php">Pavel Shamis (Pasha): "Re: [OMPI users] Set GID"</a>
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
