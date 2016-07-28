<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 13:09:03 2008" -->
<!-- isoreceived="20080919170903" -->
<!-- sent="Fri, 19 Sep 2008 13:08:55 -0400" -->
<!-- isosent="20080919170855" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="48D3DCA7.4090608_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.17.1221840024.1602.users_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-19 13:08:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6614.php">Santolo Felaco: "[OMPI users] Mpirun don't execute"</a>
<li><strong>Previous message:</strong> <a href="6612.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe in reply to:</strong> <a href="6554.php">Sofia Aparicio Secanellas: "[OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6615.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6615.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Sofia,
<br>
<p>Ok, so I really wanted the stack of when you run with &quot;-mca 
<br>
mpi_preconnect_all 1&quot;  I believe you'll see that one of the processes 
<br>
will be in init.  However, the stack still probably will not help me 
<br>
help you.  What needs to happen is to step through the code in dbx while 
<br>
the connection is trying to be established.  I am hoping you might find 
<br>
the connect call fails or that we've been given an interface that 
<br>
somehow cannot reach the other node.  However, when you specified &quot;-mca 
<br>
btl_tcp_if_include eth1&quot; that should have forced things to use the 
<br>
interface you need.  So it really comes down to why are we not 
<br>
connecting to the eth1 address?  Are we failing on routing to that 
<br>
address or is the connect failing because we are trying to use a port 
<br>
that we are not really allowed to use or is it something else?
<br>
<p>I don't think it is a routing problem since you are able to reach each 
<br>
node via ssh.  Is there someone else on the list that might want to lend 
<br>
a hand here?  I feel like I am missing something obvious going on here.
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Date: Fri, 19 Sep 2008 16:09:11 +0200
</span><br>
<span class="quotelev1">&gt; From: &quot;Sofia Aparicio Secanellas&quot; &lt;saparicio_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;1BBF50FE29F743B5829CC3785F47CADD_at_aparicio1&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have installed 1.2.7 and I obtain the same result.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will explain you what I have done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. On my computer edu_at_10.1.10.240 I have added a new user called sofia. This 
</span><br>
<span class="quotelev1">&gt; way I have sofia_at_10.1.10.208 and sofia_at_10.1.10.240.
</span><br>
<span class="quotelev1">&gt; 2. I have downloaded the openmpi 1.2.7 from the openmpi website on both 
</span><br>
<span class="quotelev1">&gt; computers in /home/sofia/Desktop.
</span><br>
<span class="quotelev1">&gt; 3. I have installed everything using &quot;sudo ./configure&quot;, &quot;sudo make&quot; and 
</span><br>
<span class="quotelev1">&gt; &quot;sudo make install&quot;.
</span><br>
<span class="quotelev1">&gt; 4. To make ssh not ask me for a password. I have typed in sofia_at_10.1.10.208 
</span><br>
<span class="quotelev1">&gt; &quot;ssh-keygen -t dsa&quot;, &quot;cd $HOME/.ssh&quot; and &quot;cp id_dsa.pub authorized_keys&quot;. I 
</span><br>
<span class="quotelev1">&gt; have copied the directory &quot;/home/sofia/.ssh&quot; from sofia_at_10.1.10.208 to 
</span><br>
<span class="quotelev1">&gt; /home/sofia/.ssh in sofia_at_10.1.10.240. The ssh  command without password 
</span><br>
<span class="quotelev1">&gt; works on computer sofia_at_10.1.10.208  but computer sofia_at_10.1.10.208 ask me 
</span><br>
<span class="quotelev1">&gt; for a passphrase and for the password. Is it normal?
</span><br>
<span class="quotelev1">&gt; 5. I have created a directory &quot;/home/sofia/programasparalelos&quot; on both 
</span><br>
<span class="quotelev1">&gt; computers and I have given permissions to the directory with &quot;chmod 777&quot;.
</span><br>
<span class="quotelev1">&gt; 6. I have copied on both computers in &quot;/home/sofia/programasparalelos&quot;  the 
</span><br>
<span class="quotelev1">&gt; program &quot;PruebaSumaParalela.c&quot; (I have changed a little bit the program, I 
</span><br>
<span class="quotelev1">&gt; enclose you the new program) and I have compiled using &quot;mpicc 
</span><br>
<span class="quotelev1">&gt; PruebaSumaParalela.c -o PruebaSumaParalela.out&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 7. Now I run the program on both computersusing the command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np2 --host 10.1.10.208,10.1.10.240 --prefix /usr/local 
</span><br>
<span class="quotelev1">&gt; ./PruebaSumaParalela.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  When I run the program I obtain 3 PIDs executing on every computer, 2 of 
</span><br>
<span class="quotelev1">&gt; &quot;./PruebaSumaParalela.out&quot; and 1 of  &quot;mpirun -np2 --host 
</span><br>
<span class="quotelev1">&gt; 10.1.10.208,10.1.10.240 --prefix /usr/local ./PruebaSumaParalela.out&quot;. I 
</span><br>
<span class="quotelev1">&gt; enclose you the results obtained on every computer for every 
</span><br>
<span class="quotelev1">&gt; &quot;./PruebaSumaParalela.out&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sofia
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6614.php">Santolo Felaco: "[OMPI users] Mpirun don't execute"</a>
<li><strong>Previous message:</strong> <a href="6612.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Maybe in reply to:</strong> <a href="6554.php">Sofia Aparicio Secanellas: "[OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6615.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6615.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
