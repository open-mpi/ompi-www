<?
$subject_val = "Re: [OMPI devel] MPI_REAL16";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 20 18:28:24 2009" -->
<!-- isoreceived="20090620222824" -->
<!-- sent="Sat, 20 Jun 2009 18:28:13 -0400" -->
<!-- isosent="20090620222813" -->
<!-- name="David Robertson" -->
<!-- email="robertson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_REAL16" -->
<!-- id="4A3D627D.2030205_at_marine.rutgers.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20881D46-8F5A-45B3-81AF-EF6C79B10332_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_REAL16<br>
<strong>From:</strong> David Robertson (<em>robertson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-20 18:28:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6291.php">Terry Dontje: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6289.php">Brice Goglin: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
<li><strong>In reply to:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6292.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Reply:</strong> <a href="6292.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Bellow is the reply I got from Intel and it seemed to work:
<br>
<p>David,
<br>
<p>I received your issue. There isn't an equivalent type to Real*16 in icc 
<br>
without the -Qoption,cpp,--extended_float_types option because there is 
<br>
no runtime library support for quad precision.
<br>
<p>Your test case has a bug in the Fortran code. Your literal is not QuAD 
<br>
precision. You need to do the assignement as follows:
<br>
<p>foo = 1.1_16
<br>
<p>After making this change you still see fortran equal and a and b will 
<br>
also be equal.
<br>
<p>Can you also request the owner of the code online make this correction?
<br>
<p>Please let me know if you have additional questions.
<br>
<p>Regards,
<br>
<p>Elizabeth S.
<br>
Intel Developer Support
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Greetings David.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think we should have a more explicit note about MPI_REAL16 support in 
</span><br>
<span class="quotelev1">&gt; the README.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This issue has come up before; see 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1603">https://svn.open-mpi.org/trac/ompi/ticket/1603</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you read through that ticket, you'll see that I was unable to find a 
</span><br>
<span class="quotelev1">&gt; C equivalent type for REAL*16 with the Intel compilers.  This is what 
</span><br>
<span class="quotelev1">&gt; blocked us from making that work.  :-\  But then again, I haven't tried 
</span><br>
<span class="quotelev1">&gt; the test codes on that ticket with the Intel 11.0 compilers to see what 
</span><br>
<span class="quotelev1">&gt; would happen (last tests were with 10.something).  It *seems* to be a 
</span><br>
<span class="quotelev1">&gt; compiler issue, but I confess that we never had a high enough priority 
</span><br>
<span class="quotelev1">&gt; to follow through and figure it out completely.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you have an Intel support contract, you might want to take some of 
</span><br>
<span class="quotelev1">&gt; the final observations on #1603 (e.g., the test codes I put near the 
</span><br>
<span class="quotelev1">&gt; end) and see what Intel has to say about it.  Perhaps we're doing 
</span><br>
<span class="quotelev1">&gt; something wrong...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hate to pass the buck here, but I unfortunately have a whole pile of 
</span><br>
<span class="quotelev1">&gt; higher-priority items that I need to work on...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 19, 2009, at 1:32 PM, David Robertson wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have compiled Open MPI 1.3.2 with Intel Fortran and C/C++ 11.0
</span><br>
<span class="quotelev2">&gt;&gt; compilers. Fortran Real*16 seems to be working except for MPI_Allreduce.
</span><br>
<span class="quotelev2">&gt;&gt; I have attached a simple program to show what I mean. I am not an MPI
</span><br>
<span class="quotelev2">&gt;&gt; programmer but I work for one and he actually wrote the attached
</span><br>
<span class="quotelev2">&gt;&gt; program. The program sets a variable to 1 on all processes then sums.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running with real*8 (comment #define REAL16 in quad_test.F) produces the
</span><br>
<span class="quotelev2">&gt;&gt; expected results:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Number of Nodes =            4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   ALLREDUCE sum   =    4.00000000000000
</span><br>
<span class="quotelev2">&gt;&gt;   ALLGATHER sum   =    4.00000000000000
</span><br>
<span class="quotelev2">&gt;&gt;   ISEND/IRECV sum =    4.00000000000000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Node =            0   Value =    1.00000000000000
</span><br>
<span class="quotelev2">&gt;&gt;   Node =            2   Value =    1.00000000000000
</span><br>
<span class="quotelev2">&gt;&gt;   Node =            3   Value =    1.00000000000000
</span><br>
<span class="quotelev2">&gt;&gt;   Node =            1   Value =    1.00000000000000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running with real*16 produces the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Number of Nodes =            4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   ALLREDUCE sum   =    1.00000000000000000000000000000000
</span><br>
<span class="quotelev2">&gt;&gt;   ALLGATHER sum   =    4.00000000000000000000000000000000
</span><br>
<span class="quotelev2">&gt;&gt;   ISEND/IRECV sum =    4.00000000000000000000000000000000
</span><br>
<span class="quotelev2">&gt;&gt;   Node =            0   Value =    1.00000000000000000000000000000000
</span><br>
<span class="quotelev2">&gt;&gt;   Node =            1   Value =    1.00000000000000000000000000000000
</span><br>
<span class="quotelev2">&gt;&gt;   Node =            2   Value =    1.00000000000000000000000000000000
</span><br>
<span class="quotelev2">&gt;&gt;   Node =            3   Value =    1.00000000000000000000000000000000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As I mentioned, I'm not a parallel programmer but I would expect the
</span><br>
<span class="quotelev2">&gt;&gt; similar results from identical operations on  real*8 and real*16 
</span><br>
<span class="quotelev2">&gt;&gt; variables.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NOTE: I get the same behavior with MPICH and MPICH2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6291.php">Terry Dontje: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6289.php">Brice Goglin: "Re: [OMPI devel] connect management for multirail (Open-)MX"</a>
<li><strong>In reply to:</strong> <a href="6282.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6292.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Reply:</strong> <a href="6292.php">Jeff Squyres: "Re: [OMPI devel] MPI_REAL16"</a>
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
