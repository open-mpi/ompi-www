<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 23 21:33:14 2007" -->
<!-- isoreceived="20070824013314" -->
<!-- sent="Thu, 23 Aug 2007 20:27:13 -0500" -->
<!-- isosent="20070824012713" -->
<!-- name="Jeff Pummill" -->
<!-- email="jpummil_at_[hidden]" -->
<!-- subject="[OMPI users] MVAPI Options on Job Submission" -->
<!-- id="46CE33F1.5080200_at_uark.edu" -->
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
<strong>From:</strong> Jeff Pummill (<em>jpummil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-23 21:27:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3917.php">Brock Palen: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
<li><strong>Previous message:</strong> <a href="3915.php">Tim Prins: "Re: [OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3917.php">Brock Palen: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
<li><strong>Reply:</strong> <a href="3917.php">Brock Palen: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have successfully compiled Open MPI 1.2.3 against Intel 8.1 compiler 
<br>
suite and old (3 years) mvapi stack using the following configure:
<br>
<p>configure --prefix=/nfsutil/openmpi-1.2.3 
<br>
--with-mvapi=/usr/local/topspin/ CC=icc CXX=icpc F77=ifort FC=ifort
<br>
<p>Do I need to assign any particular flags to the command line submission 
<br>
to ensure that it is using the IB network instead of the TCP? Or 
<br>
possibly disable the Gig-E with ^tcp to see if it still runs successfully?
<br>
<p>I just want to be sure that Open MPI is actually USING the IB network 
<br>
and mvapi.
<br>
<p>Thanks!
<br>
<p>Jeff Pummill
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3917.php">Brock Palen: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
<li><strong>Previous message:</strong> <a href="3915.php">Tim Prins: "Re: [OMPI users] openmpi realloc() holding onto memory when glibc doesn't"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3917.php">Brock Palen: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
<li><strong>Reply:</strong> <a href="3917.php">Brock Palen: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
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
