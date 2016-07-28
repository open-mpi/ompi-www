<?
$subject_val = "[OMPI users] using of MPI_Publish_name with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 10:28:17 2008" -->
<!-- isoreceived="20081210152817" -->
<!-- sent="Wed, 10 Dec 2008 16:28:11 +0100" -->
<!-- isosent="20081210152811" -->
<!-- name="Bernard Secher - SFME/LGLS" -->
<!-- email="bsecher_at_[hidden]" -->
<!-- subject="[OMPI users] using of MPI_Publish_name with openmpi" -->
<!-- id="493FE00B.2080003_at_cea.fr" -->
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
<strong>Subject:</strong> [OMPI users] using of MPI_Publish_name with openmpi<br>
<strong>From:</strong> Bernard Secher - SFME/LGLS (<em>bsecher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-10 10:28:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7496.php">George Bosilca: "Re: [OMPI users] Multicast?"</a>
<li><strong>Previous message:</strong> <a href="7494.php">Jeff Squyres: "Re: [OMPI users] Multicast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7497.php">Aurélien Bouteiller: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
<li><strong>Reply:</strong> <a href="7497.php">Aurélien Bouteiller: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody
<br>
<p>I want to use MPI_publish_name function to do communicaztion between two 
<br>
independant code.
<br>
<p>I saw on the web i must use the orted daemon with the following command:
<br>
<p><p>orted --persistent --seed --scope public --universe foo
<br>
<p>The communication success, but when i close the communication  I have a 
<br>
dead-lock at the following function: MPI_Comm_disconnect();
<br>
<p><p>I have a second question:
<br>
How can i stop the orted daemon?
<br>
<p>Bernard
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7495/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7496.php">George Bosilca: "Re: [OMPI users] Multicast?"</a>
<li><strong>Previous message:</strong> <a href="7494.php">Jeff Squyres: "Re: [OMPI users] Multicast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7497.php">Aurélien Bouteiller: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
<li><strong>Reply:</strong> <a href="7497.php">Aurélien Bouteiller: "Re: [OMPI users] using of MPI_Publish_name with openmpi"</a>
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
