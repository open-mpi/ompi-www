<?
$subject_val = "Re: [OMPI users] Open MPI and Objective C";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 19 11:26:36 2011" -->
<!-- isoreceived="20110919152636" -->
<!-- sent="Mon, 19 Sep 2011 08:26:29 -0700" -->
<!-- isosent="20110919152629" -->
<!-- name="Beatty, Daniel D CIV NAVAIR, 474300D" -->
<!-- email="daniel.beatty_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and Objective C" -->
<!-- id="F7C1659EEBBA1D4E85D2314C873AE579068E3214_at_nawechlkez02v.nadsuswe.nads.navy.mil" -->
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
<strong>From:</strong> Beatty, Daniel D CIV NAVAIR, 474300D (<em>daniel.beatty_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-19 11:26:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17342.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17340.php">Eugene Loh: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv 	question"</a>
<li><strong>In reply to:</strong> <a href="17333.php">Ralph Castain: "Re: [OMPI users] Open MPI and Objective C"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Scott,
<br>
The NSLog call should be no big deal since it is provided by the Cocoa frameworks and is inherent to Objective C.  
<br>
<p>The mpicc compiler may be a different thing.   It may not recognize that it supposed to be calling gcc to compile in Objective-C mode and not in pure ISO C-99.   I will have look up in my notes to recall the instructions necessary to make regular gcc or clang to compile properly with MPI.
<br>
<p>The extension is fine, so I would think that gcc should go into Objective-C mode.   I think MacResearch has an example on their site that could help.
<br>
<p>Good luck,
<br>
<p>Daniel D. Beatty
<br>
Computer Scientist, 474300D
<br>
Detonation Sciences Branch
<br>
On detail for Land Range Data Systems Branch
<br>
At Exodus: (760)939-4040 MTTh 0800 to 1800
<br>
At Pearson: (760)939-7097 WF 0800 to 1600
<br>
iPhone: (806)438-6620
<br>
<p><p><p><p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Monday, September 19, 2011 5:35
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Open MPI and Objective C
<br>
<p>Nothing to do with us - you call a function &quot;NSLog&quot; that Objective C doesn't recognize. That isn't an MPI function.
<br>
<p>On Sep 18, 2011, at 8:20 PM, Scott Wilcox wrote:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have been asked to convert some C++ code using Open MPI to Objective C and I am having problems getting a simple Obj C program to compile.  I have searched through the FAQs and have not found anything specific.  Is it an incorrect assumption that the C interfaces work with Obj C, or am I missing something?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks in advance for your help!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Scott
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;open MPI version: 1.4.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OSX 10.5.1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;file: main.m
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#import &lt;Foundation/Foundation.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#import &quot;mpi.h&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int main (int argc, char** argv)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Variable Declaration
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int theRank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int theSize;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Initializing Message Passing Interface
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//***
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;theSize);   
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;theRank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//*** end
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NSLog(@&quot;Executing open MPI Objective C&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Compile:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[87]UNC ONLY: SAW&gt;mpicc main.m -o test
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Undefined symbols:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;___CFConstantStringClassReference&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cfstring=Executing open MPI Objective C in ccj1AlL9.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;_NSLog&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in ccj1AlL9.o
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ld: symbol(s) not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collect2: ld returned 1 exit status
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17341/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17342.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17340.php">Eugene Loh: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv 	question"</a>
<li><strong>In reply to:</strong> <a href="17333.php">Ralph Castain: "Re: [OMPI users] Open MPI and Objective C"</a>
<!-- nextthread="start" -->
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
