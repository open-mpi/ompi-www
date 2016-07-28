<?
$subject_val = "Re: [OMPI devel] MPI datatype problem in mpi_test_suite?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 19:43:20 2009" -->
<!-- isoreceived="20090706234320" -->
<!-- sent="Mon, 06 Jul 2009 19:43:48 -0400" -->
<!-- isosent="20090706234348" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI datatype problem in mpi_test_suite?" -->
<!-- id="200907061943.49095.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="64D58AC2-22DD-4272-9C44-B75A2E5F5699_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI datatype problem in mpi_test_suite?<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 19:43:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6384.php">Jeff Squyres: "Re: [OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
<li><strong>Previous message:</strong> <a href="6382.php">Jeff Squyres: "[OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
<li><strong>In reply to:</strong> <a href="6382.php">Jeff Squyres: "[OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6384.php">Jeff Squyres: "Re: [OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
<li><strong>Reply:</strong> <a href="6384.php">Jeff Squyres: "Re: [OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
On Monday 06 July 2009 11:05:16 am Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I notice that in the new HLRS mpi_test_suite, I'm getting oodles of
</span><br>
Well, the test suite is not really new (it was started some time around 2003)  
<br>
Regular ompi testing is new ;-)) Thanks for that, Jeff!
<br>
<p><p><span class="quotelev1">&gt; errors with the MPI_TYPE_MIX and MPI_SHORT_INT datatypes (Linux/
</span><br>
<span class="quotelev1">&gt; x86_64).  I have to run with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpirun mpi_test_suite -d All,\!MPI_TYPE_MIX,\!MPI_SHORT_INT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (which excludes these two types)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't quite follow the test suite code, but MPI_TYPE_MIX is some
</span><br>
<span class="quotelev1">&gt; kind of derived MPI datatype.
</span><br>
Yes. Basically MPI_TYPE_MIX (and MPI_TYPE_MIX_LB_UB) is a struct of 11 basic 
<br>
types:
<br>
MPI_Datatype mix_type[11] = {MPI_CHAR, MPI_SHORT, MPI_INT, MPI_LONG,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_FLOAT, MPI_DOUBLE, MPI_FLOAT_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_DOUBLE_INT, MPI_LONG_INT, MPI_SHORT_INT, MPI_2INT};
<br>
<p><p>Now, as it contains MPI_SHORT_INT (which contains a hole), the problem's cause 
<br>
may be similar!
<br>
This has to be investigated.
<br>
<p><p><span class="quotelev1">&gt; Is something wrong with our datatype engine?  Or are these tests
</span><br>
<span class="quotelev1">&gt; faulty?
</span><br>
First of all, the MPI standard requires the types such as MPI_FLOAT_INT or 
<br>
MPI_SHORT_INT to be usable in reduction operations.
<br>
Nevertheless they should be fine here.
<br>
<p>Now, MPIch2-1.1 works fine with all the datatypes (including MPI_TYPE_MIX)
<br>
------------------------------
<br>
mpirun -np 2 ./mpi_test_suite -t 'P2P,Collective' -r FULL -x strict
<br>
P2P tests Ring (3/44), comm MPI_COMM_WORLD (1/13), type MPI_CHAR (1/29)
<br>
...
<br>
Collective tests Alltoall (47/44), comm Intracomm merged of the Halved 
<br>
Intercomm (13/13), type MPI_TYPE_MIX_LB_UB (29/29)
<br>
Number of failed tests:0
<br>
------------------------------
<br>
<p><p><p><span class="quotelev1">&gt; I don't know if anyone has run this test suite with any regularity before,
</span><br>
<span class="quotelev1">&gt; so I don't know which it is...
</span><br>
Tests with these datatypes have been run on IBM's MPI, NEC's MPI (derived from 
<br>
MPIch) and Intel MPI (well, also MPIch based) although these were tested some 
<br>
time ago.
<br>
Tests against MPIch-1 and now MPIch2 have been done very often and bugs have 
<br>
been tracked down, so I believe the core of the test suite itself is fine!
<br>
<p>[I am not talking about correctness of individual tests themselves, e.g. -t 
<br>
one-sided will definitely show bugs in the test-suite]...
<br>
<p>With best regards,
<br>
Rainer
<br>
<p><p>PS: The test suite fills the send buffers with known values according to the 
<br>
datatype being passed to the test and afterwards checks against expected 
<br>
values.
<br>
The send and recv buffers are preset with a definable pattern (0xa5) to check 
<br>
for overwritten data in holes (see type MPI_TYPE_MIX_LB_UB).
<br>
The buffer starts with the MIN, then the MAX value of the given datatype, 
<br>
followed by (2+rank_of_comm_partner), (3+rank...) etc.
<br>
<p>One may check the hex-values of the ALL communicated buffers using a higher 
<br>
report level (-r FULL), however, one may want to reduce the number of elements 
<br>
send using -n, e.g. -n 10.
<br>
Higher values (default is  -n 1000) however have shown problems (that have 
<br>
hinted to bugs) when switching from eager protocol... These have been fixed in 
<br>
ompi.
<br>
<pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6384.php">Jeff Squyres: "Re: [OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
<li><strong>Previous message:</strong> <a href="6382.php">Jeff Squyres: "[OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
<li><strong>In reply to:</strong> <a href="6382.php">Jeff Squyres: "[OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6384.php">Jeff Squyres: "Re: [OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
<li><strong>Reply:</strong> <a href="6384.php">Jeff Squyres: "Re: [OMPI devel] MPI datatype problem in mpi_test_suite?"</a>
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
