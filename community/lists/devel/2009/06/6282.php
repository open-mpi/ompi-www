<?
$subject_val = "Re: [OMPI devel] MPI_REAL16";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 13:44:06 2009" -->
<!-- isoreceived="20090619174406" -->
<!-- sent="Fri, 19 Jun 2009 13:43:59 -0400" -->
<!-- isosent="20090619174359" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_REAL16" -->
<!-- id="20881D46-8F5A-45B3-81AF-EF6C79B10332_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A3BCB97.8010000_at_marine.rutgers.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-19 13:43:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6283.php">David Robertson: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Previous message:</strong> <a href="6281.php">David Robertson: "[OMPI devel] MPI_REAL16"</a>
<li><strong>In reply to:</strong> <a href="6281.php">David Robertson: "[OMPI devel] MPI_REAL16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6283.php">David Robertson: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Reply:</strong> <a href="6283.php">David Robertson: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Reply:</strong> <a href="6290.php">David Robertson: "Re: [OMPI devel] MPI_REAL16"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings David.
<br>
<p>I think we should have a more explicit note about MPI_REAL16 support  
<br>
in the README.
<br>
<p>This issue has come up before; see <a href="https://svn.open-mpi.org/trac/ompi/ticket/1603">https://svn.open-mpi.org/trac/ompi/ticket/1603</a> 
<br>
.
<br>
<p>If you read through that ticket, you'll see that I was unable to find  
<br>
a C equivalent type for REAL*16 with the Intel compilers.  This is  
<br>
what blocked us from making that work.  :-\  But then again, I haven't  
<br>
tried the test codes on that ticket with the Intel 11.0 compilers to  
<br>
see what would happen (last tests were with 10.something).  It *seems*  
<br>
to be a compiler issue, but I confess that we never had a high enough  
<br>
priority to follow through and figure it out completely.
<br>
<p>If you have an Intel support contract, you might want to take some of  
<br>
the final observations on #1603 (e.g., the test codes I put near the  
<br>
end) and see what Intel has to say about it.  Perhaps we're doing  
<br>
something wrong...?
<br>
<p>I hate to pass the buck here, but I unfortunately have a whole pile of  
<br>
higher-priority items that I need to work on...
<br>
<p><p><p>On Jun 19, 2009, at 1:32 PM, David Robertson wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have compiled Open MPI 1.3.2 with Intel Fortran and C/C++ 11.0
</span><br>
<span class="quotelev1">&gt; compilers. Fortran Real*16 seems to be working except for  
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce.
</span><br>
<span class="quotelev1">&gt; I have attached a simple program to show what I mean. I am not an MPI
</span><br>
<span class="quotelev1">&gt; programmer but I work for one and he actually wrote the attached
</span><br>
<span class="quotelev1">&gt; program. The program sets a variable to 1 on all processes then sums.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running with real*8 (comment #define REAL16 in quad_test.F) produces  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; expected results:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Number of Nodes =            4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ALLREDUCE sum   =    4.00000000000000
</span><br>
<span class="quotelev1">&gt;   ALLGATHER sum   =    4.00000000000000
</span><br>
<span class="quotelev1">&gt;   ISEND/IRECV sum =    4.00000000000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Node =            0   Value =    1.00000000000000
</span><br>
<span class="quotelev1">&gt;   Node =            2   Value =    1.00000000000000
</span><br>
<span class="quotelev1">&gt;   Node =            3   Value =    1.00000000000000
</span><br>
<span class="quotelev1">&gt;   Node =            1   Value =    1.00000000000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running with real*16 produces the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Number of Nodes =            4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ALLREDUCE sum   =    1.00000000000000000000000000000000
</span><br>
<span class="quotelev1">&gt;   ALLGATHER sum   =    4.00000000000000000000000000000000
</span><br>
<span class="quotelev1">&gt;   ISEND/IRECV sum =    4.00000000000000000000000000000000
</span><br>
<span class="quotelev1">&gt;   Node =            0   Value =    1.00000000000000000000000000000000
</span><br>
<span class="quotelev1">&gt;   Node =            1   Value =    1.00000000000000000000000000000000
</span><br>
<span class="quotelev1">&gt;   Node =            2   Value =    1.00000000000000000000000000000000
</span><br>
<span class="quotelev1">&gt;   Node =            3   Value =    1.00000000000000000000000000000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I mentioned, I'm not a parallel programmer but I would expect the
</span><br>
<span class="quotelev1">&gt; similar results from identical operations on  real*8 and real*16  
</span><br>
<span class="quotelev1">&gt; variables.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOTE: I get the same behavior with MPICH and MPICH2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6283.php">David Robertson: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Previous message:</strong> <a href="6281.php">David Robertson: "[OMPI devel] MPI_REAL16"</a>
<li><strong>In reply to:</strong> <a href="6281.php">David Robertson: "[OMPI devel] MPI_REAL16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6283.php">David Robertson: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Reply:</strong> <a href="6283.php">David Robertson: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Reply:</strong> <a href="6290.php">David Robertson: "Re: [OMPI devel] MPI_REAL16"</a>
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
