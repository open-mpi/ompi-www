<?
$subject_val = "Re: [OMPI users] Open MPI and Objective C";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 20 09:13:18 2011" -->
<!-- isoreceived="20110920131318" -->
<!-- sent="Tue, 20 Sep 2011 13:12:48 +0000" -->
<!-- isosent="20110920131248" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and Objective C" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD0F991C75_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8710F711-7FC6-4C45-8FCA-639838B3D2FA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI and Objective C<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-20 09:12:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17356.php">Samuel K. Gutierrez: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>Previous message:</strong> <a href="17354.php">Rolf vandeVaart: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="17335.php">Jeff Squyres: "Re: [OMPI users] Open MPI and Objective C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17341.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Open MPI and Objective C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem you're running into is not due to Open MPI.  The Objective C and C compilers on OS X (and most platforms) are the same binary, so you should be able to use mpicc without any problems.  It will see the .m extension and switch to Objective C mode.  However, NSLog is in the Foundation framework, so you must add the compiler option
<br>
<p>&nbsp;&nbsp;-framework Foundation
<br>
<p>to the compiler flags (both when compiling and linking).  If you ripped out all the MPI and used gcc directly to compile your example code, you'd run into the same linker error without the -framework option.
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
________________________________________
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Jeff Squyres [jsquyres_at_[hidden]]
Sent: Monday, September 19, 2011 6:46 AM
To: Open MPI Users
Subject: Re: [OMPI users] Open MPI and Objective C
+1
You'll probably have to run &quot;mpicc --showme&quot; to see all the flags that OMPI is passing to the underlying compiler, and use those (or equivalents) to the ObjC compiler.
On Sep 19, 2011, at 8:34 AM, Ralph Castain wrote:
&gt; Nothing to do with us - you call a function &quot;NSLog&quot; that Objective C doesn't recognize. That isn't an MPI function.
&gt;
&gt; On Sep 18, 2011, at 8:20 PM, Scott Wilcox wrote:
&gt;
&gt;&gt; I have been asked to convert some C++ code using Open MPI to Objective C and I am having problems getting a simple Obj C program to compile.  I have searched through the FAQs and have not found anything specific.  Is it an incorrect assumption that the C interfaces work with Obj C, or am I missing something?
&gt;&gt;
&gt;&gt; Thanks in advance for your help!
&gt;&gt; Scott
&gt;&gt;
&gt;&gt;
&gt;&gt; open MPI version: 1.4.3
&gt;&gt; OSX 10.5.1
&gt;&gt;
&gt;&gt; file: main.m
&gt;&gt;
&gt;&gt; #import &lt;Foundation/Foundation.h&gt;
&gt;&gt; #import &quot;mpi.h&quot;
&gt;&gt;
&gt;&gt; int main (int argc, char** argv)
&gt;&gt;
&gt;&gt; {
&gt;&gt;    //***
&gt;&gt;    // Variable Declaration
&gt;&gt;    //***
&gt;&gt;    int theRank;
&gt;&gt;    int theSize;
&gt;&gt;
&gt;&gt;    //***
&gt;&gt;    // Initializing Message Passing Interface
&gt;&gt;    //***
&gt;&gt;    MPI_Init(&amp;argc,&amp;argv);
&gt;&gt;    MPI_Comm_size(MPI_COMM_WORLD,&amp;theSize);
&gt;&gt;    MPI_Comm_rank(MPI_COMM_WORLD,&amp;theRank);
&gt;&gt;    //*** end
&gt;&gt;
&gt;&gt;    NSLog(@&quot;Executing open MPI Objective C&quot;);
&gt;&gt;
&gt;&gt; }
&gt;&gt;
&gt;&gt; Compile:
&gt;&gt;
&gt;&gt; [87]UNC ONLY: SAW&gt;mpicc main.m -o test
&gt;&gt; Undefined symbols:
&gt;&gt;   &quot;___CFConstantStringClassReference&quot;, referenced from:
&gt;&gt;       cfstring=Executing open MPI Objective C in ccj1AlL9.o
&gt;&gt;   &quot;_NSLog&quot;, referenced from:
&gt;&gt;       _main in ccj1AlL9.o
&gt;&gt; ld: symbol(s) not found
&gt;&gt; collect2: ld returned 1 exit status
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17356.php">Samuel K. Gutierrez: "Re: [OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<li><strong>Previous message:</strong> <a href="17354.php">Rolf vandeVaart: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="17335.php">Jeff Squyres: "Re: [OMPI users] Open MPI and Objective C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17341.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Open MPI and Objective C"</a>
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
