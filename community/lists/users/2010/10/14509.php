<?
$subject_val = "Re: [OMPI users] busy wait in MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 20 10:59:27 2010" -->
<!-- isoreceived="20101020145927" -->
<!-- sent="Wed, 20 Oct 2010 07:59:01 -0700" -->
<!-- isosent="20101020145901" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] busy wait in MPI_Recv" -->
<!-- id="AANLkTinicLjCiS1CuE-B=rH5-716aRD4P1vp4R3yHJ5J_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF841A7736.6EB9D459-ON852577C2.0041D640-852577C2.0043E01D_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] busy wait in MPI_Recv<br>
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-20 10:59:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14510.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Previous message:</strong> <a href="14508.php">Ralph Castain: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>In reply to:</strong> <a href="14505.php">Richard Treumann: "Re: [OMPI users] busy wait in MPI_Recv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Dick, Eugene.  That's what I figured.  I was just hoping there might
<br>
be some more obscure MPI functions that might do what I want.  I'll go ahead
<br>
and write my own yielding wrapper on irecv.
<br>
<p>Thanks again,
<br>
&nbsp;&nbsp;Brian
<br>
<p>sent from mobile phone
<br>
<p>On Oct 20, 2010 5:24 AM, &quot;Richard Treumann&quot; &lt;treumann_at_[hidden]&gt; wrote:
<br>
<p><p>Brian
<br>
<p>Most HPC applications are run with one processor and one working thread per
<br>
MPI process. In this case, the node is not being used for other work so if
<br>
the MPI process does release a processor, there is nothing else important
<br>
for it to do anyway.
<br>
<p>In these applications, the blocking MPI call (like MPI_Recv) is issued only
<br>
when there is no more computation that can be done until the MPI_Recv
<br>
returns with with the message.
<br>
<p>Unless your application has other threads that can make valuable use of the
<br>
processor freed up by making MPI_Recv do yields, the polling &quot;overhead&quot; is
<br>
probably not something to worry about.
<br>
<p>If you do have other work available for the freed processor to turn to, the
<br>
&quot;problem&quot; may be worth solving. MPI implementations, in general, default to
<br>
a polling approach because it makes the MPI_Recv faster and if there is
<br>
nothing else important for the processor to turn to, a fast MPI_Recv is what
<br>
matters.
<br>
<p><p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p><p>&nbsp;From: Brian Budge &lt;brian.budge_at_[hidden]&gt; To: Open MPI Users &lt;
<br>
users_at_[hidden]&gt; Date: 10/19/2010 09:47 PM Subject: [OMPI users] busy
<br>
wait in MPI_Recv Sent by: users-bounces_at_[hidden]
<br>
------------------------------
<br>
<p><p><p>Hi all -
<br>
<p>I just ran a small test to find out the overhead of an MPI_Recv call
<br>
when no communication...
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14509/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14510.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Previous message:</strong> <a href="14508.php">Ralph Castain: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>In reply to:</strong> <a href="14505.php">Richard Treumann: "Re: [OMPI users] busy wait in MPI_Recv"</a>
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
