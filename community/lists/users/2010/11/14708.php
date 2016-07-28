<?
$subject_val = "Re: [OMPI users] Open MPI data transfer error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  6 19:00:44 2010" -->
<!-- isoreceived="20101106230044" -->
<!-- sent="Sat, 6 Nov 2010 17:00:38 -0600" -->
<!-- isosent="20101106230038" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI data transfer error" -->
<!-- id="SNT134-W2A24F7698CC0955A94286CB4D0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CD48B64.9020005_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI data transfer error<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-06 19:00:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14709.php">Jed Brown: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Previous message:</strong> <a href="14707.php">Jed Brown: "[OMPI users] Open MPI 1.5 is not detecting oversubscription"</a>
<li><strong>In reply to:</strong> <a href="14706.php">Eugene Loh: "Re: [OMPI users] Open MPI data transfer error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14709.php">Jed Brown: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="14709.php">Jed Brown: "Re: [OMPI users] Open MPI data transfer error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks,
<br>
About my MPI program bugs: 
<br>
I used GDB and got the error:
<br>
Program received signal SIGSEGV, Segmentation fault.0:  0x0000003a31c62184 in fwrite () from /lib64/libc.so.6
<br>
also error :
<br>
1:  Program received signal SIGABRT, Aborted.0:  I am rank 0, I have sent 4tasks out of total tasks1:  0x0000003a31c30265 in raise () from /lib64/libc.so.6
<br>
<p>It may be caused by a class usage.
<br>
My program master-worker MPI framework: 
<br>
class CNSGA2{	allocate mem for var;	some deallocate statement;	some pointers;	evaluate(); // it is a function}
<br>
CNSGA2::CNSGA2(){}
<br>
class newCNSGA2:public CNSGA2{public:	newCNSGA2(){cout &lt;&lt; &quot; constructor for newCNSGA2 \n\n&quot; &lt;&lt; endl;};		~newCNSGA2(){cout &lt;&lt; &quot; destructor for newCNSGA2 \n\n&quot; &lt;&lt; endl;};};
<br>
<p>main(){	CNSGA2* nsga2a = new CNSGA2(true); // true or false are only for different constructors	CNSGA2* nsga2b = new CNSGA2(false);		if (myRank == 0) // scope1	{		initialize the objects of nsga2a or nsga2b;				}		broadcast some parameters, which are got from scope1. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;According to the parameters, define a datatype (myData) so that all workers use that to do 	recv and send. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (myRank == 0) // scope2	{		send out myData to workers by the datatype defined above;			}		if (myRank != 0) 	{		newCNSGA2 myNsga2;		recv data from master and work on the recved data; 		myNsga2.evaluate(recv data); 		send back results;	}
<br>
}
<br>
<p>If I declear objects (nsga2a nsga2b ) in scope 1 , they cannot be visible in scope2. But, actually, the two objects are only used in master not in workers.
<br>
Workers only needs to call  evaluate() from the class CNSGA2. 
<br>
This is why I used inheritance to define a new class newCNSGA2. 
<br>
But, the problem is there some memory allocation and deallocation inside class CNSGA2. 
<br>
The new class newCNSGA2 donot need these memory allocation and deallocation. 
<br>
If I put the delaration of CNSGA2* nsga2a or CNSGA2* nsga2b in scope1, they are not visible in scope 2. 
<br>
<p>I cannot combine the two scopes because the datatype need them to de defined so that all workers can see them and use them to do send and recv. 
<br>
<p>Any help is appreciated. 
<br>
Jack
<br>
Nov. 6 2010
<br>
<p><span class="quotelev1">&gt; Date: Fri, 5 Nov 2010 14:55:32 -0800
</span><br>
<span class="quotelev1">&gt; From: eugene.loh_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI data transfer error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Debugging is not a straightforward task.  Even posting the code doesn't 
</span><br>
<span class="quotelev1">&gt; necessarily help (since no one may be motivated to help or they can't 
</span><br>
<span class="quotelev1">&gt; reproduce the problem or...).  You'll just have to try different things 
</span><br>
<span class="quotelev1">&gt; and see what works for you.  Another option is to trace the MPI calls.  
</span><br>
<span class="quotelev1">&gt; If a process sends a message, dump out the MPI_Send() arguments.  When a 
</span><br>
<span class="quotelev1">&gt; receiver receives, correspondingly dump those arguments.  Etc.  This 
</span><br>
<span class="quotelev1">&gt; might be a way of seeing what the program is doing in terms of MPI and 
</span><br>
<span class="quotelev1">&gt; thereby getting to suggestion B below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How do you trace and sort through the resulting data?  That's another 
</span><br>
<span class="quotelev1">&gt; tough question.  Among other things, if you can't find a tool that fits 
</span><br>
<span class="quotelev1">&gt; your needs, you can use the PMPI layer to write wrappers.  Writing 
</span><br>
<span class="quotelev1">&gt; wrappers is like inserting printf() statements, but doesn't quite have 
</span><br>
<span class="quotelev1">&gt; the same amount of moral shame associated with it!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Prentice Bisbal wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Choose one
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;A) Post only the relevant sections of the code. If you have syntax
</span><br>
<span class="quotelev2">&gt; &gt;error, it should be in the Send and Receive calls, or one of the lines
</span><br>
<span class="quotelev2">&gt; &gt;where the data is copied or read from the array/buffer/whatever that
</span><br>
<span class="quotelev2">&gt; &gt;you're sending or receiving.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;B) Try reproducing your problem in a toy program that has only enough
</span><br>
<span class="quotelev2">&gt; &gt;code to reproduce your problem. For example, create an array, populate
</span><br>
<span class="quotelev2">&gt; &gt;it with data, send it, and then on the receiving end, receive it, and
</span><br>
<span class="quotelev2">&gt; &gt;print it out. Something simple like that. I find when I do that, I
</span><br>
<span class="quotelev2">&gt; &gt;usually find the error in my code.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Jack Bryan wrote:
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;But, my code is too long to be posted. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;dozens of files, thousands of lines. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Do you have better ideas ? 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Any help is appreciated. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Nov. 5 2010
</span><br>
<span class="quotelev3">&gt; &gt;&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;From: solarbikedz_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Date: Fri, 5 Nov 2010 11:20:57 -0700
</span><br>
<span class="quotelev3">&gt; &gt;&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Subject: Re: [OMPI users] Open MPI data transfer error
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;As Prentice said, we can't help you without seeing your code.  openMPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt;has stood many trials from many programmers, with many bugs ironed out.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;So typically it is unlikely openMPI is the source of your error. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Without seeing your code the only logical conclusion is that something
</span><br>
<span class="quotelev3">&gt; &gt;&gt;is wrong with your programming.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;On Fri, Nov 5, 2010 at 10:52 AM, Prentice Bisbal &lt;prentice_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&lt;mailto:prentice_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    We can't help you with your coding problem without seeing your code.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Jack Bryan wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;    &gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;    &gt; I have used &quot;cout&quot; in c++ to print the values of data.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;    &gt; The sender sends correct data to correct receiver.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;    &gt; But, receiver gets wrong data from correct sender.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;    &gt; why ?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;    &gt; thanks
</span><br>
<span class="quotelev4">&gt; &gt;&gt;    &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;    &gt; Nov. 5 2010
</span><br>
<span class="quotelev4">&gt; &gt;&gt;    &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;    &gt;&gt; Date: Fri, 5 Nov 2010 08:54:22 -0400
</span><br>
<span class="quotelev1">&gt; &gt;&gt;    &gt;&gt; From: prentice_at_[hidden] &lt;mailto:prentice_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;    &gt;&gt; To: users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;    &gt;&gt; Subject: Re: [OMPI users] Open MPI data transfer error
</span><br>
<span class="quotelev1">&gt; &gt;&gt;    &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;    &gt;&gt; Jack Bryan wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;    &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;    &gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;    &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;    &gt;&gt; &gt; In my Open MPI program, one master sends data to 3 workers.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;    &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;    &gt;&gt; &gt; Two workers can receive their data.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;    &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;    &gt;&gt; &gt; But, the third worker can not get their data.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;    &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;    &gt;&gt; &gt; Before sending data, the master sends a head information to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    each worker
</span><br>
<span class="quotelev2">&gt; &gt;&gt;    &gt;&gt; &gt; receiver
</span><br>
<span class="quotelev2">&gt; &gt;&gt;    &gt;&gt; &gt; so that each worker knows what the following data package is.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    (such as
</span><br>
<span class="quotelev2">&gt; &gt;&gt;    &gt;&gt; &gt; length, package tag).
</span><br>
<span class="quotelev2">&gt; &gt;&gt;    &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;    &gt;&gt; &gt; The third worker can get its head information message from
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    master but
</span><br>
<span class="quotelev2">&gt; &gt;&gt;    &gt;&gt; &gt; cannot get its correct
</span><br>
<span class="quotelev2">&gt; &gt;&gt;    &gt;&gt; &gt; data package.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;    &gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;    &gt;&gt; &gt; It got the data that should be received by first worker, which
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    get its
</span><br>
<span class="quotelev2">&gt; &gt;&gt;    &gt;&gt; &gt; correct data.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;    &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;    &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;    &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;    &gt;&gt; Jack,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;    &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;    &gt;&gt; Providing the relevant sections of code here would be very helpful.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;    &gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;    &gt;&gt; &lt;inside joke&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;    &gt;&gt; I would tell you to add some printf statements to your code to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    see what
</span><br>
<span class="quotelev1">&gt; &gt;&gt;    &gt;&gt; data is stored in your variables on the master before it sends
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    them to
</span><br>
<span class="quotelev1">&gt; &gt;&gt;    &gt;&gt; each node, but Jeff Squyres and I agreed to disagree in a civil
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    manner
</span><br>
<span class="quotelev1">&gt; &gt;&gt;    &gt;&gt; on that debugging technique earlier this week, and I'd hate to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    re-open
</span><br>
<span class="quotelev1">&gt; &gt;&gt;    &gt;&gt; those old wounds by suggesting that technique here. ;)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;    &gt;&gt; &lt;/inside joke&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14708/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14709.php">Jed Brown: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Previous message:</strong> <a href="14707.php">Jed Brown: "[OMPI users] Open MPI 1.5 is not detecting oversubscription"</a>
<li><strong>In reply to:</strong> <a href="14706.php">Eugene Loh: "Re: [OMPI users] Open MPI data transfer error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14709.php">Jed Brown: "Re: [OMPI users] Open MPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="14709.php">Jed Brown: "Re: [OMPI users] Open MPI data transfer error"</a>
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
