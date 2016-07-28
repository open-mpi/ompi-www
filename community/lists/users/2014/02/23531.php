<?
$subject_val = "Re: [OMPI users] Use of __float128 with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  1 17:07:40 2014" -->
<!-- isoreceived="20140201220740" -->
<!-- sent="Sat, 1 Feb 2014 16:07:19 -0600" -->
<!-- isosent="20140201220719" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Use of __float128 with openmpi" -->
<!-- id="CAGKz=uJ9g1JrsWn3tXbnuX3G2=OKbQiotvJsrwO2xiu7Dj7hLg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="52ED58D0.5070404_at_aol.com" -->
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
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-01 17:07:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23532.php">Reuti: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Previous message:</strong> <a href="23530.php">Tim Prince: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>In reply to:</strong> <a href="23530.php">Tim Prince: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23533.php">Patrick Boehl: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Reply:</strong> <a href="23533.php">Patrick Boehl: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See Section 5.9.5 of MPI-3 or the section named &quot;User-Defined
<br>
Reduction Operations&quot; but presumably numbered differently in older
<br>
copies of the MPI standard.
<br>
<p>An older but still relevant online reference is
<br>
<a href="http://www.mpi-forum.org/docs/mpi-2.2/mpi22-report/node107.htm">http://www.mpi-forum.org/docs/mpi-2.2/mpi22-report/node107.htm</a>
<br>
<p>There is a proposal to support __float128 in the MPI standard in the
<br>
future but it has not been formally considered by the MPI Forum yet
<br>
[<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/318">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/318</a>].
<br>
<p>Best,
<br>
<p>Jeff
<br>
<p>On Sat, Feb 1, 2014 at 2:28 PM, Tim Prince &lt;n8tm_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 02/01/2014 12:42 PM, Patrick Boehl wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a question on datatypes in openmpi:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there an (easy?) way to use __float128 variables with openmpi?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Specifically, functions like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Allreduce
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; seem to give weird results with __float128.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Essentially all I found was
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://beige.ucs.indiana.edu/I590/node100.html">http://beige.ucs.indiana.edu/I590/node100.html</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; where they state
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; MPI_LONG_DOUBLE
</span><br>
<span class="quotelev2">&gt;&gt;    This is a quadruple precision, 128-bit long floating point number.
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But as far as I have seen, MPI_LONG_DOUBLE is only used for long doubles.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Open MPI Version is 1.6.3 and gcc is 4.7.3 on a x86_64 machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; It seems unlikely that 10 year old course notes on an unspecified MPI
</span><br>
<span class="quotelev1">&gt; implementation (hinted to be IBM power3) would deal with specific details of
</span><br>
<span class="quotelev1">&gt; openmpi on a different architecture.
</span><br>
<span class="quotelev1">&gt; Where openmpi refers to &quot;portable C types&quot; I would take long double to be
</span><br>
<span class="quotelev1">&gt; the 80-bit hardware format you would have in a standard build of gcc for
</span><br>
<span class="quotelev1">&gt; x86_64.  You should be able to gain some insight by examining your openmpi
</span><br>
<span class="quotelev1">&gt; build logs to see if it builds for both __float80 and __float128 (or
</span><br>
<span class="quotelev1">&gt; neither).  gfortran has a 128-bit data type (software floating point
</span><br>
<span class="quotelev1">&gt; real(16), corresponding to __float128); you should be able to see in the
</span><br>
<span class="quotelev1">&gt; build logs whether that data type was used.
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
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23532.php">Reuti: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Previous message:</strong> <a href="23530.php">Tim Prince: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>In reply to:</strong> <a href="23530.php">Tim Prince: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23533.php">Patrick Boehl: "Re: [OMPI users] Use of __float128 with openmpi"</a>
<li><strong>Reply:</strong> <a href="23533.php">Patrick Boehl: "Re: [OMPI users] Use of __float128 with openmpi"</a>
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
