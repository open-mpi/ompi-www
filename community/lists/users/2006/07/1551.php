<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul  5 11:36:57 2006" -->
<!-- isoreceived="20060705153657" -->
<!-- sent="Wed, 05 Jul 2006 09:36:56 -0600" -->
<!-- isosent="20060705153656" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Datatype bug regression from Open MPI 1.0.2 to	Open MPI 1.1" -->
<!-- id="1152113816.11524.7.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="1151706300.12310.6.camel_at_newhon.site" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-05 11:36:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1552.php">Frank Kahle: "Re: [OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on, communicator	MPI_COMM_WORLD (Jeff Squyres (jsquyres))"</a>
<li><strong>Previous message:</strong> <a href="1550.php">Marcin Skoczylas: "[OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1519.php">Yvan Fournier: "[OMPI users] Datatype bug regression from Open MPI 1.0.2 to Open MPI 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1595.php">George Bosilca: "Re: [OMPI users] Datatype bug regression from Open MPI 1.0.2 to Open MPI 1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, 2006-07-01 at 00:25 +0200, Yvan Fournier wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had encountered a bug in Open MPI 1.0.1 using indexed datatypes
</span><br>
<span class="quotelev1">&gt; with MPI_Recv (which seems to be of the &quot;off by one&quot; sort), which
</span><br>
<span class="quotelev1">&gt; was corrected in Open MPI 1.0.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems to have resurfaced in Open MPI 1.1 (I encountered it using
</span><br>
<span class="quotelev1">&gt; different data and did not recognize it immediately, but it seems
</span><br>
<span class="quotelev1">&gt; it can reproduced using the same simplified test I had sent
</span><br>
<span class="quotelev1">&gt; the first time, which I re-attach here just in case).
</span><br>
<p>Thank you for the bug report.  It's going to take us a little while to
<br>
track the issue down.  I've filed a bug in our bug tracker (you should
<br>
receive e-mails when the ticket is updated) and someone familiar with
<br>
the datatype engine will take a look as soon as possible.
<br>
<p><p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1552.php">Frank Kahle: "Re: [OMPI users] OS X, OpenMPI 1.1: An error occurred in MPI_Allreduce on, communicator	MPI_COMM_WORLD (Jeff Squyres (jsquyres))"</a>
<li><strong>Previous message:</strong> <a href="1550.php">Marcin Skoczylas: "[OMPI users] MPI_Recv, is it possible to switch on/off aggresive mode during runtime?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/06/1519.php">Yvan Fournier: "[OMPI users] Datatype bug regression from Open MPI 1.0.2 to Open MPI 1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1595.php">George Bosilca: "Re: [OMPI users] Datatype bug regression from Open MPI 1.0.2 to Open MPI 1.1"</a>
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
