<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 03:51:41 2008" -->
<!-- isoreceived="20080917075141" -->
<!-- sent="Wed, 17 Sep 2008 09:51:17 +0200" -->
<!-- isosent="20080917075117" -->
<!-- name="Sofia Aparicio Secanellas" -->
<!-- email="saparicio_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="01E1440878E64F87855EF83B29A48331_at_aparicio1" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="48D00C19.1000501_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Send and MPI_Recv<br>
<strong>From:</strong> Sofia Aparicio Secanellas (<em>saparicio_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 03:51:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6560.php">Santolo Felaco: "[OMPI users] Where is ompi-chekpoint?"</a>
<li><strong>Previous message:</strong> <a href="6558.php">jody: "Re: [OMPI users] Newbie doubt."</a>
<li><strong>In reply to:</strong> <a href="6555.php">Gus Correa: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6566.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gus,
<br>
<p>Thank you very much for your answer but I do not think that this is the 
<br>
problem.I have changed everything in a C program and I obtain the same 
<br>
result.
<br>
<p>Does anyone have any idea about the problem?
<br>
<p>Sofia
<br>
<p>----- Original Message ----- 
<br>
From: &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt;
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Sent: Tuesday, September 16, 2008 9:42 PM
<br>
Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
<br>
<p><p><span class="quotelev1">&gt; Hello Sofia and list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not a C++ person, I must say.
</span><br>
<span class="quotelev1">&gt; However, I noticed that you wrote the program in C++,
</span><br>
<span class="quotelev1">&gt; compiled it with the mpiCC (C++) compiler wrapper,
</span><br>
<span class="quotelev1">&gt; but your MPI calls are written with the MPI C binding syntax,
</span><br>
<span class="quotelev1">&gt; not the MPI C++ binding syntax.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E.g. :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Send(&amp;sum,1,MPI_INT,0,1,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; instead of something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; comm.Send(&amp;sum,1,MPI::INT,0,1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder if this mixed C++ / C environment may have caused some of the 
</span><br>
<span class="quotelev1">&gt; trouble,
</span><br>
<span class="quotelev1">&gt; although I am not sure about that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since the specific C++ commands that you use are basically for
</span><br>
<span class="quotelev1">&gt; printing messages, it may be easier to transform the program into
</span><br>
<span class="quotelev1">&gt; a C program, by replacing the appropriate include files
</span><br>
<span class="quotelev1">&gt; and the C++ specific I/O commands by C commands,
</span><br>
<span class="quotelev1">&gt; and then compile the program again with mpicc.
</span><br>
<span class="quotelev1">&gt; An alternative is to write the MPI function calls in the C++ binding 
</span><br>
<span class="quotelev1">&gt; syntax.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sofia Aparicio Secanellas wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;  I am new using MPI. I want to run a simple program (I enclose the 
</span><br>
<span class="quotelev2">&gt;&gt; program) in 2 different computers. I have installed MPI in both 
</span><br>
<span class="quotelev2">&gt;&gt; computers. I have compiled the program using:
</span><br>
<span class="quotelev2">&gt;&gt;  mpiCC -o PruebaSumaParalela.out PruebaSumaParalela.cpp
</span><br>
<span class="quotelev2">&gt;&gt;  I have copied the executable PruebaSumaParalela.out  to my /home 
</span><br>
<span class="quotelev2">&gt;&gt; directoy in both computers. Then I run:
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun -np 2 --host 10.4.5.123,edu_at_10.4.5.126 --prefix /usr/local 
</span><br>
<span class="quotelev2">&gt;&gt; ./PruebaSumaParalela.out
</span><br>
<span class="quotelev2">&gt;&gt;  The 10.4.5.123 computer prints:
</span><br>
<span class="quotelev2">&gt;&gt;  Inicio
</span><br>
<span class="quotelev2">&gt;&gt; Inicio
</span><br>
<span class="quotelev2">&gt;&gt; totalnodes:2
</span><br>
<span class="quotelev2">&gt;&gt; mynode:0
</span><br>
<span class="quotelev2">&gt;&gt; Inicio Recv
</span><br>
<span class="quotelev2">&gt;&gt; totalnodes:2
</span><br>
<span class="quotelev2">&gt;&gt; mynode:1
</span><br>
<span class="quotelev2">&gt;&gt; Inicio Send
</span><br>
<span class="quotelev2">&gt;&gt; sum:375250
</span><br>
<span class="quotelev2">&gt;&gt;  The edu_at_10.4.5.126 &lt;mailto:edu_at_10.4.5.126&gt; computer prints:
</span><br>
<span class="quotelev2">&gt;&gt;  Inicio
</span><br>
<span class="quotelev2">&gt;&gt; Inicio
</span><br>
<span class="quotelev2">&gt;&gt; totalnodes:2
</span><br>
<span class="quotelev2">&gt;&gt; mynode:1
</span><br>
<span class="quotelev2">&gt;&gt; Inicio Send
</span><br>
<span class="quotelev2">&gt;&gt; sum:375250
</span><br>
<span class="quotelev2">&gt;&gt; totalnodes:2
</span><br>
<span class="quotelev2">&gt;&gt; mynode:0
</span><br>
<span class="quotelev2">&gt;&gt; Inicio Recv
</span><br>
<span class="quotelev2">&gt;&gt;  But the program does not finish on any computer. It seems that the Send 
</span><br>
<span class="quotelev2">&gt;&gt; and Recv does not work. Master computer is waiting to receive something 
</span><br>
<span class="quotelev2">&gt;&gt; that the slave does not send.
</span><br>
<span class="quotelev2">&gt;&gt; Do you know what the problem could be ?
</span><br>
<span class="quotelev2">&gt;&gt;  Thank you very much.
</span><br>
<span class="quotelev2">&gt;&gt;  Sofia
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No virus found in this outgoing message
</span><br>
<span class="quotelev2">&gt;&gt; Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;#include&lt;iostream.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;#include&lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;int main(int argc, char ** argv){
</span><br>
<span class="quotelev2">&gt;&gt;int mynode, totalnodes;
</span><br>
<span class="quotelev2">&gt;&gt;int sum,startval,endval,accum;
</span><br>
<span class="quotelev2">&gt;&gt;printf(&quot;Inicio\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;MPI_Comm_size(MPI_COMM_WORLD, &amp;totalnodes);
</span><br>
<span class="quotelev2">&gt;&gt;MPI_Comm_rank(MPI_COMM_WORLD, &amp;mynode);
</span><br>
<span class="quotelev2">&gt;&gt;printf(&quot;totalnodes: %d\n&quot;,totalnodes);
</span><br>
<span class="quotelev2">&gt;&gt;printf(&quot;mynode: %d\n&quot;,mynode);
</span><br>
<span class="quotelev2">&gt;&gt;sum = 0;
</span><br>
<span class="quotelev2">&gt;&gt;startval = 1000*mynode/totalnodes+1;
</span><br>
<span class="quotelev2">&gt;&gt;endval = 1000*(mynode+1)/totalnodes;
</span><br>
<span class="quotelev2">&gt;&gt;for(int i=startval;i&lt;=endval;i=i+1)
</span><br>
<span class="quotelev2">&gt;&gt;sum = sum + i;
</span><br>
<span class="quotelev2">&gt;&gt;if(mynode!=0){
</span><br>
<span class="quotelev2">&gt;&gt;printf(&quot;Inicio Send\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;printf(&quot;sum: %d\n&quot;,sum);
</span><br>
<span class="quotelev2">&gt;&gt;MPI_Send(&amp;sum,1,MPI_INT,0,1,MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;printf(&quot;Send sum\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;}
</span><br>
<span class="quotelev2">&gt;&gt;else
</span><br>
<span class="quotelev2">&gt;&gt;for(int j=1;j&lt;totalnodes;j=j+1){
</span><br>
<span class="quotelev2">&gt;&gt;printf(&quot;Inicio Recv\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;MPI_Recv(&amp;accum,1,MPI_INT,j,1,MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;printf(&quot;RECV accum\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;sum = sum + accum;
</span><br>
<span class="quotelev2">&gt;&gt;printf(&quot;Sum\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;}
</span><br>
<span class="quotelev2">&gt;&gt;printf(&quot;Final\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;if(mynode == 0)
</span><br>
<span class="quotelev2">&gt;&gt;cout &lt;&lt; &quot;The sum from 1 to 1000 is: &quot; &lt;&lt; sum &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt;&gt;MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;}
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No virus found in this incoming message
</span><br>
<span class="quotelev1">&gt; Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
</span><br>
<span class="quotelev1">&gt; <a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a> 
</span><br>
<p><p><p>No virus found in this outgoing message
<br>
Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
<br>
<a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6560.php">Santolo Felaco: "[OMPI users] Where is ompi-chekpoint?"</a>
<li><strong>Previous message:</strong> <a href="6558.php">jody: "Re: [OMPI users] Newbie doubt."</a>
<li><strong>In reply to:</strong> <a href="6555.php">Gus Correa: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6566.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
