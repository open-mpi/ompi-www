<?
$subject_val = "Re: [OMPI users] Open MPI and Objective C";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 19 08:46:23 2011" -->
<!-- isoreceived="20110919124623" -->
<!-- sent="Mon, 19 Sep 2011 08:46:14 -0400" -->
<!-- isosent="20110919124614" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and Objective C" -->
<!-- id="8710F711-7FC6-4C45-8FCA-639838B3D2FA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9761B50A-D973-4496-899F-E94C2FBEA386_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-19 08:46:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17336.php">Jeff Squyres: "Re: [OMPI users] RE :  Problems with MPI_Init_Thread(...)"</a>
<li><strong>Previous message:</strong> <a href="17334.php">S&#233;bastien Boisvert: "[OMPI users] RE :  Problems with MPI_Init_Thread(...)"</a>
<li><strong>In reply to:</strong> <a href="17333.php">Ralph Castain: "Re: [OMPI users] Open MPI and Objective C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17355.php">Barrett, Brian W: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>Reply:</strong> <a href="17355.php">Barrett, Brian W: "Re: [OMPI users] Open MPI and Objective C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p>You'll probably have to run &quot;mpicc --showme&quot; to see all the flags that OMPI is passing to the underlying compiler, and use those (or equivalents) to the ObjC compiler.
<br>
<p><p>On Sep 19, 2011, at 8:34 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Nothing to do with us - you call a function &quot;NSLog&quot; that Objective C doesn't recognize. That isn't an MPI function.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 18, 2011, at 8:20 PM, Scott Wilcox wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have been asked to convert some C++ code using Open MPI to Objective C and I am having problems getting a simple Obj C program to compile.  I have searched through the FAQs and have not found anything specific.  Is it an incorrect assumption that the C interfaces work with Obj C, or am I missing something?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance for your help!
</span><br>
<span class="quotelev2">&gt;&gt; Scott
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; open MPI version: 1.4.3
</span><br>
<span class="quotelev2">&gt;&gt; OSX 10.5.1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; file: main.m
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #import &lt;Foundation/Foundation.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #import &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main (int argc, char** argv)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    //***
</span><br>
<span class="quotelev2">&gt;&gt;    // Variable Declaration
</span><br>
<span class="quotelev2">&gt;&gt;    //***
</span><br>
<span class="quotelev2">&gt;&gt;    int theRank;
</span><br>
<span class="quotelev2">&gt;&gt;    int theSize;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;    //***
</span><br>
<span class="quotelev2">&gt;&gt;    // Initializing Message Passing Interface
</span><br>
<span class="quotelev2">&gt;&gt;    //***
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Init(&amp;argc,&amp;argv);   
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_size(MPI_COMM_WORLD,&amp;theSize);   
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_rank(MPI_COMM_WORLD,&amp;theRank);
</span><br>
<span class="quotelev2">&gt;&gt;    //*** end
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;    NSLog(@&quot;Executing open MPI Objective C&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Compile:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [87]UNC ONLY: SAW&gt;mpicc main.m -o test
</span><br>
<span class="quotelev2">&gt;&gt; Undefined symbols:
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;___CFConstantStringClassReference&quot;, referenced from:
</span><br>
<span class="quotelev2">&gt;&gt;       cfstring=Executing open MPI Objective C in ccj1AlL9.o
</span><br>
<span class="quotelev2">&gt;&gt;   &quot;_NSLog&quot;, referenced from:
</span><br>
<span class="quotelev2">&gt;&gt;       _main in ccj1AlL9.o
</span><br>
<span class="quotelev2">&gt;&gt; ld: symbol(s) not found
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17336.php">Jeff Squyres: "Re: [OMPI users] RE :  Problems with MPI_Init_Thread(...)"</a>
<li><strong>Previous message:</strong> <a href="17334.php">S&#233;bastien Boisvert: "[OMPI users] RE :  Problems with MPI_Init_Thread(...)"</a>
<li><strong>In reply to:</strong> <a href="17333.php">Ralph Castain: "Re: [OMPI users] Open MPI and Objective C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17355.php">Barrett, Brian W: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>Reply:</strong> <a href="17355.php">Barrett, Brian W: "Re: [OMPI users] Open MPI and Objective C"</a>
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
