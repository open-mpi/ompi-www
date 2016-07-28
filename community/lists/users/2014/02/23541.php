<?
$subject_val = "Re: [OMPI users] Use of __float128 with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  3 06:32:03 2014" -->
<!-- isoreceived="20140203113203" -->
<!-- sent="Mon, 3 Feb 2014 12:32:00 +0100" -->
<!-- isosent="20140203113200" -->
<!-- name="Patrick Boehl" -->
<!-- email="Patrick.Boehl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Use of __float128 with openmpi" -->
<!-- id="1E7B32E7-42D7-486F-9417-AF26073DFDF5_at_physik.uni-muenchen.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54FC62D7-DB8A-43D5-A286-8AABF621C5FF_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Use of __float128 with openmpi<br>
<strong>From:</strong> Patrick Boehl (<em>Patrick.Boehl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-03 06:32:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23542.php">Eric Chamberland: "[OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Previous message:</strong> <a href="23540.php">&#197;ke Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>In reply to:</strong> <a href="23535.php">George Bosilca: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23534.php">Patrick Boehl: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello George,
<br>
<p>thank you a lot!
<br>
<p>Everything seems to work now! :)
<br>
<p>Best,
<br>
Patrick
<br>
<p><p>On 02.02.2014, at 14:15, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Just go for the most trivial:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Type_contiguous(sizeof(__float128), MPI_BYTE, &amp;my__float128);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A little bit more info about the optional quad-precision floating-point format is available on Wikipedia (<a href="https://en.wikipedia.org/wiki/Double-double_%28arithmetic%29#Double-double_arithmetic">https://en.wikipedia.org/wiki/Double-double_%28arithmetic%29#Double-double_arithmetic</a>).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 2, 2014, at 13:41 , Patrick Boehl &lt;Patrick.Boehl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thank you a lot for your reply!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 01.02.2014, at 23:07, Jeff Hammond wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See Section 5.9.5 of MPI-3 or the section named &quot;User-Defined
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reduction Operations&quot; but presumably numbered differently in older
</span><br>
<span class="quotelev3">&gt;&gt;&gt; copies of the MPI standard.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An older but still relevant online reference is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.mpi-forum.org/docs/mpi-2.2/mpi22-report/node107.htm">http://www.mpi-forum.org/docs/mpi-2.2/mpi22-report/node107.htm</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In this example they construct this &quot;datatype&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------- 
</span><br>
<span class="quotelev2">&gt;&gt; typedef struct {
</span><br>
<span class="quotelev2">&gt;&gt; double real,imag;
</span><br>
<span class="quotelev2">&gt;&gt; } Complex
</span><br>
<span class="quotelev2">&gt;&gt; ---------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and later
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ---------
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Datatype ctype;
</span><br>
<span class="quotelev2">&gt;&gt; /* explain to MPI how type Complex is defined
</span><br>
<span class="quotelev2">&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Type_contiguous(2, MPI_DOUBLE, &amp;ctype);
</span><br>
<span class="quotelev2">&gt;&gt; ---------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do I understand correctly that I have to find out how __float128 is constructed internally and 
</span><br>
<span class="quotelev2">&gt;&gt; convert it to a form which is compatible with the standard MPI Datatypes?
</span><br>
<span class="quotelev2">&gt;&gt; In an analogue way as they do in the example. Up to now, I only found out that __float128 should 
</span><br>
<span class="quotelev2">&gt;&gt; be somehow the sum of two doubles.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Again, I am grateful for any help!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Patrick
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sat, Feb 1, 2014 at 2:28 PM, Tim Prince &lt;n8tm_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 02/01/2014 12:42 PM, Patrick Boehl wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have a question on datatypes in openmpi:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is there an (easy?) way to use __float128 variables with openmpi?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Specifically, functions like
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Allreduce
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; seem to give weird results with __float128.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Essentially all I found was
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://beige.ucs.indiana.edu/I590/node100.html">http://beige.ucs.indiana.edu/I590/node100.html</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; where they state
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_LONG_DOUBLE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is a quadruple precision, 128-bit long floating point number.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But as far as I have seen, MPI_LONG_DOUBLE is only used for long doubles.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The Open MPI Version is 1.6.3 and gcc is 4.7.3 on a x86_64 machine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It seems unlikely that 10 year old course notes on an unspecified MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; implementation (hinted to be IBM power3) would deal with specific details of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi on a different architecture.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Where openmpi refers to &quot;portable C types&quot; I would take long double to be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the 80-bit hardware format you would have in a standard build of gcc for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; x86_64.  You should be able to gain some insight by examining your openmpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; build logs to see if it builds for both __float80 and __float128 (or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; neither).  gfortran has a 128-bit data type (software floating point
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; real(16), corresponding to __float128); you should be able to see in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; build logs whether that data type was used.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Hammond
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jeff.science_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="23542.php">Eric Chamberland: "[OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>Previous message:</strong> <a href="23540.php">&#197;ke Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>In reply to:</strong> <a href="23535.php">George Bosilca: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23534.php">Patrick Boehl: "Re: [OMPI users] Use of __float128 with openmpi"</a>
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
