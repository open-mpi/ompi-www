<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 16 15:42:26 2008" -->
<!-- isoreceived="20080916194226" -->
<!-- sent="Tue, 16 Sep 2008 15:42:17 -0400" -->
<!-- isosent="20080916194217" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="48D00C19.1000501_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D99B2E131E0640C9A2A4D8A0FD2472A5_at_aparicio1" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-16 15:42:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6556.php">Davi Vercillo C. Garcia (デビッド): "[OMPI users] Newbie doubt."</a>
<li><strong>Previous message:</strong> <a href="6554.php">Sofia Aparicio Secanellas: "[OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6554.php">Sofia Aparicio Secanellas: "[OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6559.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6559.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Sofia and list
<br>
<p>I am not a C++ person, I must say.
<br>
However, I noticed that you wrote the program in C++,
<br>
compiled it with the mpiCC (C++) compiler wrapper,
<br>
but your MPI calls are written with the MPI C binding syntax,
<br>
not the MPI C++ binding syntax.
<br>
<p>E.g. :
<br>
<p>MPI_Send(&amp;sum,1,MPI_INT,0,1,MPI_COMM_WORLD);
<br>
<p>instead of something like this:
<br>
<p>comm.Send(&amp;sum,1,MPI::INT,0,1);
<br>
<p>I wonder if this mixed C++ / C environment may have caused some of the 
<br>
trouble,
<br>
although I am not sure about that.
<br>
<p>Since the specific C++ commands that you use are basically for
<br>
printing messages, it may be easier to transform the program into
<br>
a C program, by replacing the appropriate include files
<br>
and the C++ specific I/O commands by C commands,
<br>
and then compile the program again with mpicc.
<br>
An alternative is to write the MPI function calls in the C++ binding syntax.
<br>
<p>I hope this helps.
<br>
<p>Gus Correa
<br>
<p><pre>
-- 
---------------------------------------------------------------------
Gustavo J. Ponce Correa, PhD - Email: gus_at_[hidden]
Lamont-Doherty Earth Observatory - Columbia University
P.O. Box 1000 [61 Route 9W] - Palisades, NY, 10964-8000 - USA
---------------------------------------------------------------------
Sofia Aparicio Secanellas wrote:
&gt; Hello,
&gt;  
&gt; I am new using MPI. I want to run a simple program (I enclose the 
&gt; program) in 2 different computers. I have installed MPI in both 
&gt; computers. I have compiled the program using:
&gt;  
&gt; mpiCC -o PruebaSumaParalela.out PruebaSumaParalela.cpp
&gt;  
&gt; I have copied the executable PruebaSumaParalela.out  to my /home 
&gt; directoy in both computers. Then I run:
&gt;  
&gt; mpirun -np 2 --host 10.4.5.123,edu_at_10.4.5.126 --prefix /usr/local 
&gt; ./PruebaSumaParalela.out
&gt;  
&gt; The 10.4.5.123 computer prints:
&gt;  
&gt; Inicio
&gt; Inicio
&gt; totalnodes:2
&gt; mynode:0
&gt; Inicio Recv
&gt; totalnodes:2
&gt; mynode:1
&gt; Inicio Send
&gt; sum:375250
&gt;  
&gt; The edu_at_10.4.5.126 &lt;mailto:edu_at_10.4.5.126&gt; computer prints:
&gt;  
&gt; Inicio
&gt; Inicio
&gt; totalnodes:2
&gt; mynode:1
&gt; Inicio Send
&gt; sum:375250
&gt; totalnodes:2
&gt; mynode:0
&gt; Inicio Recv
&gt;  
&gt; But the program does not finish on any computer. It seems that the 
&gt; Send and Recv does not work. Master computer is waiting to receive 
&gt; something that the slave does not send.
&gt; Do you know what the problem could be ?
&gt;  
&gt; Thank you very much.
&gt;  
&gt; Sofia
&gt;
&gt;
&gt; No virus found in this outgoing message
&gt; Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
&gt; <a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
&gt;
&gt;------------------------------------------------------------------------
&gt;
&gt;#include&lt;iostream.h&gt;
&gt;#include&lt;mpi.h&gt;
&gt;int main(int argc, char ** argv){
&gt;int mynode, totalnodes;
&gt;int sum,startval,endval,accum;
&gt;printf(&quot;Inicio\n&quot;);
&gt;MPI_Status status;
&gt;MPI_Init(&amp;argc,&amp;argv);
&gt;MPI_Comm_size(MPI_COMM_WORLD, &amp;totalnodes);
&gt;MPI_Comm_rank(MPI_COMM_WORLD, &amp;mynode);
&gt;printf(&quot;totalnodes: %d\n&quot;,totalnodes);
&gt;printf(&quot;mynode: %d\n&quot;,mynode);
&gt;sum = 0;
&gt;startval = 1000*mynode/totalnodes+1;
&gt;endval = 1000*(mynode+1)/totalnodes;
&gt;for(int i=startval;i&lt;=endval;i=i+1)
&gt;sum = sum + i;
&gt;if(mynode!=0){
&gt;printf(&quot;Inicio Send\n&quot;);
&gt;printf(&quot;sum: %d\n&quot;,sum);
&gt;MPI_Send(&amp;sum,1,MPI_INT,0,1,MPI_COMM_WORLD);
&gt;printf(&quot;Send sum\n&quot;);
&gt;}
&gt;else
&gt;for(int j=1;j&lt;totalnodes;j=j+1){
&gt;printf(&quot;Inicio Recv\n&quot;);
&gt;MPI_Recv(&amp;accum,1,MPI_INT,j,1,MPI_COMM_WORLD, &amp;status);
&gt;printf(&quot;RECV accum\n&quot;);
&gt;sum = sum + accum;
&gt;printf(&quot;Sum\n&quot;);
&gt;}
&gt;printf(&quot;Final\n&quot;);
&gt;if(mynode == 0)
&gt;cout &lt;&lt; &quot;The sum from 1 to 1000 is: &quot; &lt;&lt; sum &lt;&lt; endl;
&gt;MPI_Finalize();
&gt;}
&gt;
&gt;------------------------------------------------------------------------
&gt;
&gt;_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6556.php">Davi Vercillo C. Garcia (デビッド): "[OMPI users] Newbie doubt."</a>
<li><strong>Previous message:</strong> <a href="6554.php">Sofia Aparicio Secanellas: "[OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6554.php">Sofia Aparicio Secanellas: "[OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6559.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6559.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
