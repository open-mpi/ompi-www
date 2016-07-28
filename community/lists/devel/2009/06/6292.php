<?
$subject_val = "Re: [OMPI devel] MPI_REAL16";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 21 09:16:19 2009" -->
<!-- isoreceived="20090621131619" -->
<!-- sent="Sun, 21 Jun 2009 09:16:13 -0400" -->
<!-- isosent="20090621131613" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_REAL16" -->
<!-- id="674C6FCA-AF7F-456A-8260-FE542F7FB435_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A3D627D.2030205_at_marine.rutgers.edu" -->
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
<strong>Date:</strong> 2009-06-21 09:16:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6293.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6291.php">Terry Dontje: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>In reply to:</strong> <a href="6290.php">David Robertson: "Re: [OMPI devel] MPI_REAL16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6298.php">Iain Bason: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Reply:</strong> <a href="6298.php">Iain Bason: "Re: [OMPI devel] MPI_REAL16"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for looking into this, David.
<br>
<p>So if I understand that correctly, it means you have to assign all  
<br>
literals in your fortran program with a &quot;_16&quot; suffix.  I don't know if  
<br>
that's standard Fortran or not.
<br>
<p>But I modified our configure test and now the types seem to match.   
<br>
Can you give the mercurial branch at the following URL a whirl and see  
<br>
if it works for you:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://bitbucket.org/jsquyres/fortran-real16/">http://bitbucket.org/jsquyres/fortran-real16/</a>
<br>
<p><p>On Jun 20, 2009, at 6:28 PM, David Robertson wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bellow is the reply I got from Intel and it seemed to work:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I received your issue. There isn't an equivalent type to Real*16 in  
</span><br>
<span class="quotelev1">&gt; icc
</span><br>
<span class="quotelev1">&gt; without the -Qoption,cpp,--extended_float_types option because there  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; no runtime library support for quad precision.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your test case has a bug in the Fortran code. Your literal is not QuAD
</span><br>
<span class="quotelev1">&gt; precision. You need to do the assignement as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; foo = 1.1_16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After making this change you still see fortran equal and a and b will
</span><br>
<span class="quotelev1">&gt; also be equal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you also request the owner of the code online make this  
</span><br>
<span class="quotelev1">&gt; correction?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know if you have additional questions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Elizabeth S.
</span><br>
<span class="quotelev1">&gt; Intel Developer Support
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Greetings David.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think we should have a more explicit note about MPI_REAL16  
</span><br>
<span class="quotelev1">&gt; support in
</span><br>
<span class="quotelev2">&gt; &gt; the README.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This issue has come up before; see
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1603">https://svn.open-mpi.org/trac/ompi/ticket/1603</a>.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you read through that ticket, you'll see that I was unable to  
</span><br>
<span class="quotelev1">&gt; find a
</span><br>
<span class="quotelev2">&gt; &gt; C equivalent type for REAL*16 with the Intel compilers.  This is  
</span><br>
<span class="quotelev1">&gt; what
</span><br>
<span class="quotelev2">&gt; &gt; blocked us from making that work.  :-\  But then again, I haven't  
</span><br>
<span class="quotelev1">&gt; tried
</span><br>
<span class="quotelev2">&gt; &gt; the test codes on that ticket with the Intel 11.0 compilers to see  
</span><br>
<span class="quotelev1">&gt; what
</span><br>
<span class="quotelev2">&gt; &gt; would happen (last tests were with 10.something).  It *seems* to  
</span><br>
<span class="quotelev1">&gt; be a
</span><br>
<span class="quotelev2">&gt; &gt; compiler issue, but I confess that we never had a high enough  
</span><br>
<span class="quotelev1">&gt; priority
</span><br>
<span class="quotelev2">&gt; &gt; to follow through and figure it out completely.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you have an Intel support contract, you might want to take some  
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev2">&gt; &gt; the final observations on #1603 (e.g., the test codes I put near the
</span><br>
<span class="quotelev2">&gt; &gt; end) and see what Intel has to say about it.  Perhaps we're doing
</span><br>
<span class="quotelev2">&gt; &gt; something wrong...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I hate to pass the buck here, but I unfortunately have a whole  
</span><br>
<span class="quotelev1">&gt; pile of
</span><br>
<span class="quotelev2">&gt; &gt; higher-priority items that I need to work on...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 19, 2009, at 1:32 PM, David Robertson wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have compiled Open MPI 1.3.2 with Intel Fortran and C/C++ 11.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; compilers. Fortran Real*16 seems to be working except for  
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have attached a simple program to show what I mean. I am not an  
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; programmer but I work for one and he actually wrote the attached
</span><br>
<span class="quotelev3">&gt; &gt;&gt; program. The program sets a variable to 1 on all processes then  
</span><br>
<span class="quotelev1">&gt; sums.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Running with real*8 (comment #define REAL16 in quad_test.F)  
</span><br>
<span class="quotelev1">&gt; produces the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; expected results:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Number of Nodes =            4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   ALLREDUCE sum   =    4.00000000000000
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   ALLGATHER sum   =    4.00000000000000
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   ISEND/IRECV sum =    4.00000000000000
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Node =            0   Value =    1.00000000000000
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Node =            2   Value =    1.00000000000000
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Node =            3   Value =    1.00000000000000
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Node =            1   Value =    1.00000000000000
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Running with real*16 produces the following:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Number of Nodes =            4
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   ALLREDUCE sum   =    1.00000000000000000000000000000000
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   ALLGATHER sum   =    4.00000000000000000000000000000000
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   ISEND/IRECV sum =    4.00000000000000000000000000000000
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Node =            0   Value =     
</span><br>
<span class="quotelev1">&gt; 1.00000000000000000000000000000000
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Node =            1   Value =     
</span><br>
<span class="quotelev1">&gt; 1.00000000000000000000000000000000
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Node =            2   Value =     
</span><br>
<span class="quotelev1">&gt; 1.00000000000000000000000000000000
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Node =            3   Value =     
</span><br>
<span class="quotelev1">&gt; 1.00000000000000000000000000000000
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As I mentioned, I'm not a parallel programmer but I would expect  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; similar results from identical operations on  real*8 and real*16
</span><br>
<span class="quotelev3">&gt; &gt;&gt; variables.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; NOTE: I get the same behavior with MPICH and MPICH2.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="6293.php">Ralph Castain: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>Previous message:</strong> <a href="6291.php">Terry Dontje: "Re: [OMPI devel] why does --rankfile need hostlist?"</a>
<li><strong>In reply to:</strong> <a href="6290.php">David Robertson: "Re: [OMPI devel] MPI_REAL16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6298.php">Iain Bason: "Re: [OMPI devel] MPI_REAL16"</a>
<li><strong>Reply:</strong> <a href="6298.php">Iain Bason: "Re: [OMPI devel] MPI_REAL16"</a>
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
