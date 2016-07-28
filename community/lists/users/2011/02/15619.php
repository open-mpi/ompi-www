<?
$subject_val = "[OMPI users] Use mca_base_param_file_path to set .ssh?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 15 13:35:33 2011" -->
<!-- isoreceived="20110215183533" -->
<!-- sent="Tue, 15 Feb 2011 12:35:23 -0600" -->
<!-- isosent="20110215183523" -->
<!-- name="Barnet Wagman" -->
<!-- email="bw_at_[hidden]" -->
<!-- subject="[OMPI users] Use mca_base_param_file_path to set .ssh?" -->
<!-- id="4D5AC76B.4030808_at_norbl.com" -->
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
<strong>Subject:</strong> [OMPI users] Use mca_base_param_file_path to set .ssh?<br>
<strong>From:</strong> Barnet Wagman (<em>bw_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-15 13:35:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15620.php">Ralph Castain: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>Previous message:</strong> <a href="15618.php">Petit, George (Cont, ARL/CISD): "[OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15620.php">Ralph Castain: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>Reply:</strong> <a href="15620.php">Ralph Castain: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I need to find a way of controlling the rsa key used when open-mpi uses
<br>
ssh to access hosts.  By default, ssh uses the
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;~/.ssh/id_rsa
<br>
<p>However, I need to set the key used without messing around with users'
<br>
.ssh directories.  It appears that in a default installation of
<br>
open-mpi, ~/.ssh is specfied is mca_base_param_file_path.  Can I change
<br>
the ssh directory used by setting this mca param? Or is there some other
<br>
way of specifying the id_rsa file (other than changing ssh config files).
<br>
<p>More generally, is there anything posted that states in detail what
<br>
mca_base_param_file_path controls? 
<br>
<p>I've found a reference to it in the FAQ: &quot;The MCA parameter
<br>
(mca_base_param_file_path) specifies the path to search for AMCA files
<br>
with relative paths. By default this is
<br>
|$SYSCONFDIR/amca-param-sets/:$CWD|.&quot;   From this description, it
<br>
doesn't like setting mca_base_param_file_path will solve my problem.
<br>
<p>thanks
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15619/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15620.php">Ralph Castain: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>Previous message:</strong> <a href="15618.php">Petit, George (Cont, ARL/CISD): "[OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15620.php">Ralph Castain: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
<li><strong>Reply:</strong> <a href="15620.php">Ralph Castain: "Re: [OMPI users] Use mca_base_param_file_path to set .ssh?"</a>
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
