<?
$subject_val = "Re: [OMPI users] Use of __float128 with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  2 07:41:16 2014" -->
<!-- isoreceived="20140202124116" -->
<!-- sent="Sun, 2 Feb 2014 13:41:13 +0100" -->
<!-- isosent="20140202124113" -->
<!-- name="Patrick Boehl" -->
<!-- email="Patrick.Boehl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Use of __float128 with openmpi" -->
<!-- id="75F90C46-8804-4AFF-927B-A5A373A57F23_at_physik.uni-muenchen.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGKz=uJ9g1JrsWn3tXbnuX3G2=OKbQiotvJsrwO2xiu7Dj7hLg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-02-02 07:41:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23534.php">Patrick Boehl: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Previous message:</strong> <a href="23532.php">Reuti: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>In reply to:</strong> <a href="23531.php">Jeff Hammond: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23535.php">George Bosilca: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Reply:</strong> <a href="23535.php">George Bosilca: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff,
<br>
<p>thank you a lot for your reply!
<br>
<p>On 01.02.2014, at 23:07, Jeff Hammond wrote:
<br>
<p><span class="quotelev1">&gt; See Section 5.9.5 of MPI-3 or the section named &quot;User-Defined
</span><br>
<span class="quotelev1">&gt; Reduction Operations&quot; but presumably numbered differently in older
</span><br>
<span class="quotelev1">&gt; copies of the MPI standard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An older but still relevant online reference is
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mpi-forum.org/docs/mpi-2.2/mpi22-report/node107.htm">http://www.mpi-forum.org/docs/mpi-2.2/mpi22-report/node107.htm</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>In this example they construct this &quot;datatype&quot;
<br>
<p>--------- 
<br>
typedef struct {
<br>
double real,imag;
<br>
} Complex
<br>
---------
<br>
<p>and later
<br>
<p>---------
<br>
MPI_Datatype ctype;
<br>
/* explain to MPI how type Complex is defined
<br>
*/
<br>
MPI_Type_contiguous(2, MPI_DOUBLE, &amp;ctype);
<br>
---------
<br>
<p>Do I understand correctly that I have to find out how __float128 is constructed internally and 
<br>
convert it to a form which is compatible with the standard MPI Datatypes?
<br>
In an analogue way as they do in the example. Up to now, I only found out that __float128 should 
<br>
be somehow the sum of two doubles.
<br>
<p>Again, I am grateful for any help!
<br>
<p>Best regards,
<br>
Patrick
<br>
<p><p><p><p><span class="quotelev1">&gt; On Sat, Feb 1, 2014 at 2:28 PM, Tim Prince &lt;n8tm_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 02/01/2014 12:42 PM, Patrick Boehl wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a question on datatypes in openmpi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there an (easy?) way to use __float128 variables with openmpi?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Specifically, functions like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Allreduce
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seem to give weird results with __float128.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Essentially all I found was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://beige.ucs.indiana.edu/I590/node100.html">http://beige.ucs.indiana.edu/I590/node100.html</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where they state
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_LONG_DOUBLE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   This is a quadruple precision, 128-bit long floating point number.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But as far as I have seen, MPI_LONG_DOUBLE is only used for long doubles.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The Open MPI Version is 1.6.3 and gcc is 4.7.3 on a x86_64 machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It seems unlikely that 10 year old course notes on an unspecified MPI
</span><br>
<span class="quotelev2">&gt;&gt; implementation (hinted to be IBM power3) would deal with specific details of
</span><br>
<span class="quotelev2">&gt;&gt; openmpi on a different architecture.
</span><br>
<span class="quotelev2">&gt;&gt; Where openmpi refers to &quot;portable C types&quot; I would take long double to be
</span><br>
<span class="quotelev2">&gt;&gt; the 80-bit hardware format you would have in a standard build of gcc for
</span><br>
<span class="quotelev2">&gt;&gt; x86_64.  You should be able to gain some insight by examining your openmpi
</span><br>
<span class="quotelev2">&gt;&gt; build logs to see if it builds for both __float80 and __float128 (or
</span><br>
<span class="quotelev2">&gt;&gt; neither).  gfortran has a 128-bit data type (software floating point
</span><br>
<span class="quotelev2">&gt;&gt; real(16), corresponding to __float128); you should be able to see in the
</span><br>
<span class="quotelev2">&gt;&gt; build logs whether that data type was used.
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden]
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
<li><strong>Next message:</strong> <a href="23534.php">Patrick Boehl: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Previous message:</strong> <a href="23532.php">Reuti: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>In reply to:</strong> <a href="23531.php">Jeff Hammond: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23535.php">George Bosilca: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Reply:</strong> <a href="23535.php">George Bosilca: "Re: [OMPI users] Use of __float128 with openmpi"</a>
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
