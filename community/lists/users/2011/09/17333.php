<?
$subject_val = "Re: [OMPI users] Open MPI and Objective C";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 19 08:34:44 2011" -->
<!-- isoreceived="20110919123444" -->
<!-- sent="Mon, 19 Sep 2011 06:34:34 -0600" -->
<!-- isosent="20110919123434" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and Objective C" -->
<!-- id="9761B50A-D973-4496-899F-E94C2FBEA386_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8DF79BA0-DE78-4346-B749-CCA7B2F0BF8F_at_verizon.net" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-19 08:34:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17334.php">Sébastien Boisvert: "[OMPI users] RE :  Problems with MPI_Init_Thread(...)"</a>
<li><strong>Previous message:</strong> <a href="17332.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>In reply to:</strong> <a href="17325.php">Scott Wilcox: "[OMPI users] Open MPI and Objective C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17335.php">Jeff Squyres: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>Reply:</strong> <a href="17335.php">Jeff Squyres: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>Reply:</strong> <a href="17341.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Open MPI and Objective C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nothing to do with us - you call a function &quot;NSLog&quot; that Objective C doesn't recognize. That isn't an MPI function.
<br>
<p>On Sep 18, 2011, at 8:20 PM, Scott Wilcox wrote:
<br>
<p><span class="quotelev1">&gt; I have been asked to convert some C++ code using Open MPI to Objective C and I am having problems getting a simple Obj C program to compile.  I have searched through the FAQs and have not found anything specific.  Is it an incorrect assumption that the C interfaces work with Obj C, or am I missing something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance for your help!
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; open MPI version: 1.4.3
</span><br>
<span class="quotelev1">&gt; OSX 10.5.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; file: main.m
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #import &lt;Foundation/Foundation.h&gt;
</span><br>
<span class="quotelev1">&gt; #import &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main (int argc, char** argv)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    //***
</span><br>
<span class="quotelev1">&gt;    // Variable Declaration
</span><br>
<span class="quotelev1">&gt;    //***
</span><br>
<span class="quotelev1">&gt;    int theRank;
</span><br>
<span class="quotelev1">&gt;    int theSize;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    //***
</span><br>
<span class="quotelev1">&gt;    // Initializing Message Passing Interface
</span><br>
<span class="quotelev1">&gt;    //***
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc,&amp;argv);   
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD,&amp;theSize);   
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD,&amp;theRank);
</span><br>
<span class="quotelev1">&gt;    //*** end
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;    NSLog(@&quot;Executing open MPI Objective C&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Compile:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [87]UNC ONLY: SAW&gt;mpicc main.m -o test
</span><br>
<span class="quotelev1">&gt; Undefined symbols:
</span><br>
<span class="quotelev1">&gt;   &quot;___CFConstantStringClassReference&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       cfstring=Executing open MPI Objective C in ccj1AlL9.o
</span><br>
<span class="quotelev1">&gt;   &quot;_NSLog&quot;, referenced from:
</span><br>
<span class="quotelev1">&gt;       _main in ccj1AlL9.o
</span><br>
<span class="quotelev1">&gt; ld: symbol(s) not found
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17333/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17334.php">Sébastien Boisvert: "[OMPI users] RE :  Problems with MPI_Init_Thread(...)"</a>
<li><strong>Previous message:</strong> <a href="17332.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>In reply to:</strong> <a href="17325.php">Scott Wilcox: "[OMPI users] Open MPI and Objective C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17335.php">Jeff Squyres: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>Reply:</strong> <a href="17335.php">Jeff Squyres: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>Reply:</strong> <a href="17341.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Open MPI and Objective C"</a>
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
