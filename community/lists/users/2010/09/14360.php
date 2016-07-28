<?
$subject_val = "Re: [OMPI users] a question about [MPI]IO on systems without	network filesystem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 29 21:47:17 2010" -->
<!-- isoreceived="20100930014717" -->
<!-- sent="Thu, 30 Sep 2010 11:47:06 +1000" -->
<!-- isosent="20100930014706" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] a question about [MPI]IO on systems without	network filesystem" -->
<!-- id="1285811227.5787.64.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="4CA30839.2050805_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] a question about [MPI]IO on systems without	network filesystem<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-29 21:47:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14361.php">Reuti: "Re: [OMPI users] how to tell if opempi is using rsh or ssh"</a>
<li><strong>Previous message:</strong> <a href="14359.php">Borenstein, Bernard S: "[OMPI users] how to tell if opempi is using rsh or ssh"</a>
<li><strong>In reply to:</strong> <a href="14352.php">Paul Kapinos: "[OMPI users] a question about [MPI]IO on systems without network filesystem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14362.php">Richard Treumann: "Re: [OMPI users] a question about [MPI]IO on systems	without	network filesystem"</a>
<li><strong>Reply:</strong> <a href="14362.php">Richard Treumann: "Re: [OMPI users] a question about [MPI]IO on systems	without	network filesystem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Paul
<br>
<p>I think you should clarify whether you mean you want you application to
<br>
send all it's data back to a particular rank, which then does all IO (in
<br>
which case the answer is any MPI implementation can do this... it's a
<br>
matter of how you code the app), or if you want the application to know
<br>
nothing about it, but have the system somehow intercept all IO and make
<br>
it magically appear at a particular node (much harder).
<br>
<p><p>On Wed, 2010-09-29 at 11:34 +0200, Paul Kapinos wrote:
<br>
<span class="quotelev1">&gt; Dear OpenMPI developer,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have a question about the possibility to use MPI IO (and possible 
</span><br>
<span class="quotelev1">&gt; regular I/O) on clusters which does *not* have a common filesystem 
</span><br>
<span class="quotelev1">&gt; (network filesystem) on all nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A common filesystem is mainly NOT a hard precondition to use OpenMPI:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#do-i-need-a-common-filesystem">http://www.open-mpi.org/faq/?category=running#do-i-need-a-common-filesystem</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Say, we have a (diskless? equipped with very small disks?) cluster, on 
</span><br>
<span class="quotelev1">&gt; which only one node have access to a filesystem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible to configure/run OpenMPI in a such way, that only _one_ 
</span><br>
<span class="quotelev1">&gt; process (e.g. master) performs real disk I/O, and other processes sends 
</span><br>
<span class="quotelev1">&gt; the data to the master which works as an agent?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course this would impacts the performance, because all data must be 
</span><br>
<span class="quotelev1">&gt; send over network, and the master may became a bottleneck. But is such 
</span><br>
<span class="quotelev1">&gt; scenario - IO of all processes bundled to one  process - practicable at all?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best wishes
</span><br>
<span class="quotelev1">&gt; Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14361.php">Reuti: "Re: [OMPI users] how to tell if opempi is using rsh or ssh"</a>
<li><strong>Previous message:</strong> <a href="14359.php">Borenstein, Bernard S: "[OMPI users] how to tell if opempi is using rsh or ssh"</a>
<li><strong>In reply to:</strong> <a href="14352.php">Paul Kapinos: "[OMPI users] a question about [MPI]IO on systems without network filesystem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14362.php">Richard Treumann: "Re: [OMPI users] a question about [MPI]IO on systems	without	network filesystem"</a>
<li><strong>Reply:</strong> <a href="14362.php">Richard Treumann: "Re: [OMPI users] a question about [MPI]IO on systems	without	network filesystem"</a>
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
