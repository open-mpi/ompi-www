<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 16 10:54:54 2007" -->
<!-- isoreceived="20070716145454" -->
<!-- sent="Mon, 16 Jul 2007 08:54:22 -0600" -->
<!-- isosent="20070716145422" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] DataTypes with &amp;quot;holes&amp;quot; for writing files" -->
<!-- id="85494810-2960-43BA-99CC-DDC497ED1D80_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0707152345x3cce47a3se17346624889cd3a_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-16 10:54:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3682.php">Bill Johnstone: "[OMPI users] mpirun hangs on remote nodes -- how to find where and why?"</a>
<li><strong>Previous message:</strong> <a href="3680.php">Brian Barrett: "Re: [OMPI users] end-to-end data reliability"</a>
<li><strong>In reply to:</strong> <a href="3679.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3683.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Reply:</strong> <a href="3683.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jody -
<br>
<p>I usually update the ROMIO package before each major release (1.0,  
<br>
1.1, 1.2, etc.) and then only within a major release series when a  
<br>
bug is found that requires an update.  This seems to be one of those  
<br>
times ;).  Just to make sure we're all on the same page, which  
<br>
version of Open MPI are you currently using?  I've filed a bug report  
<br>
(you'll get an e-mail about it) about updating ROMIO for the 1.2  
<br>
series.  I'm not sure if it will make 1.2.4, but it could.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p>On Jul 16, 2007, at 12:45 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Rob, thanks for your info.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know whether OpenMPI will use a newer version
</span><br>
<span class="quotelev1">&gt; of ROMIO sometimes soon?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/13/07, Robert Latham &lt;robl_at_[hidden]&gt; wrote:On Tue, Jul 10,  
</span><br>
<span class="quotelev1">&gt; 2007 at 04:36:01PM +0000, jody wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Error: Unsupported datatype passed to ADIOI_Count_contiguous_blocks
</span><br>
<span class="quotelev2">&gt; &gt; [aim-nano_02:22229] MPI_ABORT invoked on rank 0 in communicator
</span><br>
<span class="quotelev2">&gt; &gt; MPI_COMM_WORLD with errorcode 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Jody:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI uses an old version of ROMIO.  You get this error because the
</span><br>
<span class="quotelev1">&gt; ADIOI_Count_contiguous_blocks routine in this version of ROMIO does
</span><br>
<span class="quotelev1">&gt; not understand all MPI datatypes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can verify that this is the case by building your test against
</span><br>
<span class="quotelev1">&gt; MPICH2, which should succeed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Rob Latham
</span><br>
<span class="quotelev1">&gt; Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
</span><br>
<span class="quotelev1">&gt; Argonne National Lab, IL USA                 B29D F333 664A 4280 315B
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="3682.php">Bill Johnstone: "[OMPI users] mpirun hangs on remote nodes -- how to find where and why?"</a>
<li><strong>Previous message:</strong> <a href="3680.php">Brian Barrett: "Re: [OMPI users] end-to-end data reliability"</a>
<li><strong>In reply to:</strong> <a href="3679.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3683.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Reply:</strong> <a href="3683.php">jody: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
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
