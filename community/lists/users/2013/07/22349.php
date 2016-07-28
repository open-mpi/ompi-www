<?
$subject_val = "Re: [OMPI users] After OS Update MPI_Init fails on one host";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 19 19:07:03 2013" -->
<!-- isoreceived="20130719230703" -->
<!-- sent="Fri, 19 Jul 2013 19:06:51 -0400" -->
<!-- isosent="20130719230651" -->
<!-- name="Kevin H. Hobbs" -->
<!-- email="hobbsk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] After OS Update MPI_Init fails on one host" -->
<!-- id="51E9C68B.2000700_at_ohio.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EA601B10-2489-4526-B6CA-56533E935F71_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] After OS Update MPI_Init fails on one host<br>
<strong>From:</strong> Kevin H. Hobbs (<em>hobbsk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-19 19:06:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22350.php">Erik Nelson: "Re: [OMPI users] check point restart"</a>
<li><strong>Previous message:</strong> <a href="22348.php">Jeff Hammond: "Re: [OMPI users] configure/library question"</a>
<li><strong>In reply to:</strong> <a href="22347.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22351.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22351.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 07/19/2013 05:11 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Are you sure you're using the same version of OMPI on this new OS?
</span><br>
<p>No, I'm sure I'm using a different version of Open MPI in Fedora
<br>
18 from the one I was using in Fedora 17.
<br>
<p>I have only the Open MPI provided by the Fedora distribution.
<br>
<p><span class="quotelev1">&gt; They typically distribute one in your default path, 
</span><br>
<p>Fedora allows both Open MPI and MPICH to be installed at the same
<br>
time by using the module system.
<br>
<p>Neither is in the default path, I have to put them in my path with :
<br>
<p>&nbsp;&nbsp;module load mpi/openmpi-x86_64
<br>
<p>which is in my ~/.bashrc .
<br>
<p><span class="quotelev1">&gt; so I'd check to ensure that you really are using the version you think.
</span><br>
<p>'locate mpicc' and 'locate mpirun' only find one hit each so I'm
<br>
reasonably sure I'm running what I think I'm running.
<br>
<p>That being said packaging bugs have happened before is there any
<br>
library, config file, or executable that you would suggest I look
<br>
for that might have come from a prior version of Open MPI or its
<br>
dependencies?
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22349/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22350.php">Erik Nelson: "Re: [OMPI users] check point restart"</a>
<li><strong>Previous message:</strong> <a href="22348.php">Jeff Hammond: "Re: [OMPI users] configure/library question"</a>
<li><strong>In reply to:</strong> <a href="22347.php">Ralph Castain: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22351.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22351.php">Jeff Squyres (jsquyres): "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
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
