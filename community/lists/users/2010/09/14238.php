<?
$subject_val = "Re: [OMPI users] send and receive buffer the same  on root";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 16 13:36:29 2010" -->
<!-- isoreceived="20100916173629" -->
<!-- sent="Thu, 16 Sep 2010 13:36:23 -0400" -->
<!-- isosent="20100916173623" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send and receive buffer the same  on root" -->
<!-- id="OF43E047DB.9AAE447C-ON852577A0.005FE136-852577A0.0060CC7E_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1284652884.6749.38.camel_at_alder.reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] send and receive buffer the same  on root<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-16 13:36:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14239.php">Tim Prince: "Re: [OMPI users] send and receive buffer the same on root"</a>
<li><strong>Previous message:</strong> <a href="14237.php">Jeff Squyres: "Re: [OMPI users] send and receive buffer the same  on root"</a>
<li><strong>In reply to:</strong> <a href="14235.php">Tom Rosmond: "[OMPI users] send and receive buffer the same  on root"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tony 
<br>
<p>You are depending on luck. The MPI Standard allows the implementation to 
<br>
assume that send and recv buffers are distinct unless MPI_IN_PLACE is 
<br>
used.  Any MPI implementation may have more than one algorithm for a given 
<br>
MPI collective communication operation and the policy for switching 
<br>
algorithm is not documented.
<br>
<p>It is entirely possible that something like going from 32 to 64 processes 
<br>
or changing interconnects will cause a different algorithm to be used. 
<br>
Applying a patch could also cause the algorithm to be changed.
<br>
<p>In theory one algorithm could let you get away with the violation while 
<br>
another trips on it and a change you do not even realize you made cause 
<br>
bad answers to show up. Perhaps some algorithm uses space in the receive 
<br>
buffer as scratch.
<br>
<p>Standards compliant code is safer.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dick 
<br>
<p><p>Dick Treumann  -  MPI Team 
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p><p><p>From:
<br>
Tom Rosmond &lt;rosmond_at_[hidden]&gt;
<br>
To:
<br>
users_at_[hidden]
<br>
Date:
<br>
09/16/2010 12:05 PM
<br>
Subject:
<br>
[OMPI users] send and receive buffer the same  on root
<br>
Sent by:
<br>
users-bounces_at_[hidden]
<br>
<p><p><p>I am working with a Fortran 90 code with many MPI calls like this:
<br>
<p>call mpi_gatherv(x,nsize(rank+1),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_real,x,nsize,nstep,mpi_real,root,mpi_comm_world,mstat)
<br>
<p>'x' is allocated on root to be large enough to hold the results of the
<br>
gather, other arrays and parameters are defined correctly, and the code
<br>
runs as it should.  However, I am concerned that having the same send
<br>
and receive buffer on root is a violation of the MPI standard.  Am I
<br>
correct?  I am aware of the MPI_IN_PLACE feature that can be used in
<br>
this situation, by defining it as the send buffer at root. 
<br>
<p>The fact that the code as written seems to work on most system we run on
<br>
(some with OpenMPI, some with proprietary MPI's) indicates that in spite
<br>
of the standard, implementations allow it.  Is this correct, or are we
<br>
just lucky.
<br>
<p>T. Rosmond
<br>
<p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14238/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14239.php">Tim Prince: "Re: [OMPI users] send and receive buffer the same on root"</a>
<li><strong>Previous message:</strong> <a href="14237.php">Jeff Squyres: "Re: [OMPI users] send and receive buffer the same  on root"</a>
<li><strong>In reply to:</strong> <a href="14235.php">Tom Rosmond: "[OMPI users] send and receive buffer the same  on root"</a>
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
