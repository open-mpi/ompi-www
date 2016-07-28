<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 13:40:26 2007" -->
<!-- isoreceived="20070723174026" -->
<!-- sent="Mon, 23 Jul 2007 11:40:12 -0600" -->
<!-- isosent="20070723174012" -->
<!-- name="Moreland, Kenneth" -->
<!-- email="kmorel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_set_view rejecting subarray views." -->
<!-- id="7137A9E1D1768C44BE7DF11D30FAB32303FDA33A_at_ES21SNLNT.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="96689034-522C-466F-914F-AD38D8B35764_at_lanl.gov" -->
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
<strong>From:</strong> Moreland, Kenneth (<em>kmorel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-23 13:40:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3742.php">SLIM H.A.: "Re: [OMPI users] sge qdel fails"</a>
<li><strong>Previous message:</strong> <a href="3740.php">Ralph H Castain: "Re: [OMPI users] orterun --bynode/--byslot problem"</a>
<li><strong>In reply to:</strong> <a href="3729.php">Brian Barrett: "Re: [OMPI users] MPI_File_set_view rejecting subarray views."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Brian.  That did the trick.
<br>
<p>-Ken
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
On
<br>
<span class="quotelev1">&gt; Behalf Of Brian Barrett
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, July 19, 2007 3:39 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_File_set_view rejecting subarray views.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 19, 2007, at 3:24 PM, Moreland, Kenneth wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I've run into a problem with the File I/O with openmpi version
</span><br>
1.2.3.
<br>
<span class="quotelev2">&gt; &gt; It is not possible to call MPI_File_set_view with a datatype created
</span><br>
<span class="quotelev2">&gt; &gt; from a subarray.  Instead of letting me set a view of this type, it
</span><br>
<span class="quotelev2">&gt; &gt; gives an invalid datatype error.  I have attached a simple program
</span><br>
<span class="quotelev2">&gt; &gt; that
</span><br>
<span class="quotelev2">&gt; &gt; demonstrates the problem.  In particular, the following sequence of
</span><br>
<span class="quotelev2">&gt; &gt; function calls should be supported, but they are not.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Type_create_subarray(3, sizes, subsizes, starts,
</span><br>
<span class="quotelev2">&gt; &gt;                            MPI_ORDER_FORTRAN, MPI_BYTE, &amp;view);
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_File_set_view(fd, 20, MPI_BYTE, view, &quot;native&quot;,
</span><br>
MPI_INFO_NULL);
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; After poking around in the source code a bit, I discovered that the
</span><br>
<span class="quotelev2">&gt; &gt; I/O
</span><br>
<span class="quotelev2">&gt; &gt; implementation actually supports the subarray data type, but there
</span><br>
<span class="quotelev2">&gt; &gt; is a
</span><br>
<span class="quotelev2">&gt; &gt; check that is issuing an error before the underlying I/O layer
</span><br>
(ROMIO)
<br>
<span class="quotelev2">&gt; &gt; has a chance to handle the request.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You need to commit the datatype after calling
</span><br>
<span class="quotelev1">&gt; MPI_Type_create_subarray.  If you add:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Type_commit(&amp;view);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; after the Type_create, but before File_set_view, the code will run to
</span><br>
<span class="quotelev1">&gt; completion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, the code will then complain about a Barrier after MPI_Finalize
</span><br>
<span class="quotelev1">&gt; due to an error in how we shut down when there are files that have
</span><br>
<span class="quotelev1">&gt; been opened but not closed (you should also add a call to
</span><br>
<span class="quotelev1">&gt; MPI_File_close after the set_view, but I'm assuming it's not there
</span><br>
<span class="quotelev1">&gt; because this is a test code).  This is something we need to fix, but
</span><br>
<span class="quotelev1">&gt; also signifies a user error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;    Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;    Networking Team, CCS-1
</span><br>
<span class="quotelev1">&gt;    Los Alamos National Laboratory
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
<li><strong>Next message:</strong> <a href="3742.php">SLIM H.A.: "Re: [OMPI users] sge qdel fails"</a>
<li><strong>Previous message:</strong> <a href="3740.php">Ralph H Castain: "Re: [OMPI users] orterun --bynode/--byslot problem"</a>
<li><strong>In reply to:</strong> <a href="3729.php">Brian Barrett: "Re: [OMPI users] MPI_File_set_view rejecting subarray views."</a>
<!-- nextthread="start" -->
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
