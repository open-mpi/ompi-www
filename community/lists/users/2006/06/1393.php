<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 12 09:52:32 2006" -->
<!-- isoreceived="20060612135232" -->
<!-- sent="Mon, 12 Jun 2006 09:52:14 -0400" -->
<!-- isosent="20060612135214" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] F90 interfaces again" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF609D01_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] F90 interfaces again" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-12 09:52:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1394.php">Jens Klostermann: "[OMPI users] Why does it suddenly not run?"</a>
<li><strong>Previous message:</strong> <a href="1392.php">Michael Kluskens: "Re: [OMPI users] F90 interfaces again"</a>
<li><strong>Maybe in reply to:</strong> <a href="1387.php">Michael Kluskens: "[OMPI users] F90 interfaces again"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that we've fixed everything with respect to f90 except the &quot;large&quot; interface.  Let us know if we either missed something or you find something new.
<br>
<p>Thanks!
<br>
<p>&nbsp;-----Original Message-----
<br>
From: 	Michael Kluskens [mailto:mkluskens_at_[hidden]]
<br>
Sent:	Mon Jun 12 09:47:52 2006
<br>
To:	Open MPI Users
<br>
Subject:	Re: [OMPI users] F90 interfaces again
<br>
<p>On Jun 9, 2006, at 12:33 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 8 Jun 2006, Michael Kluskens wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             call MPI_WAITALL(3,sp_request,MPI_STATUSES_IGNORE,ier)
</span><br>
<span class="quotelev2">&gt;&gt;                                                                   1
</span><br>
<span class="quotelev2">&gt;&gt; Error: Generic subroutine 'mpi_waitall' at (1) is not consistent with
</span><br>
<span class="quotelev2">&gt;&gt; a specific subroutine interface
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Issue, 3rd argument of MPI_WAITALL expects an integer array normally,
</span><br>
<span class="quotelev2">&gt;&gt; but this constant is permitted by the standard.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is with OpenMPI 1.2a1r10186,  I can check the details of the
</span><br>
<span class="quotelev2">&gt;&gt; scripts and generated files next week for whatever is the latest
</span><br>
<span class="quotelev2">&gt;&gt; version.  But odds are this has not been spotted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which compiler are you using?  I'm trying to replicate, and  
</span><br>
<span class="quotelev1">&gt; gfortran isn't getting mad at me (which is weird, because I would  
</span><br>
<span class="quotelev1">&gt; have expected it to get very angry at me).
</span><br>
<p>I'm using g95 and I configure with:
<br>
<p>./configure F77=g95 FC=g95 LDFLAGS=-lSystemStubs --with-mpi-f90- 
<br>
size=large --enable-static --with-f90-max-array-dim=3
<br>
<p>Downloaded &quot;openmpi-1.2a1r10297&quot; today.
<br>
<p>Looking at the scripts I believe this problem was fixed between 10186  
<br>
and 10297.
<br>
<p>I can't test until I check for and if needed implement my fixes to  
<br>
the other interfaces I mentioned previously.
<br>
<p>Michael
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1393/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1394.php">Jens Klostermann: "[OMPI users] Why does it suddenly not run?"</a>
<li><strong>Previous message:</strong> <a href="1392.php">Michael Kluskens: "Re: [OMPI users] F90 interfaces again"</a>
<li><strong>Maybe in reply to:</strong> <a href="1387.php">Michael Kluskens: "[OMPI users] F90 interfaces again"</a>
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
