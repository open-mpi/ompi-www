<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 13:54:42 2008" -->
<!-- isoreceived="20080919175442" -->
<!-- sent="Fri, 19 Sep 2008 13:54:31 -0400" -->
<!-- isosent="20080919175431" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="48D3E757.3010200_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48D3DCA7.4090608_at_sun.com" -->
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
<strong>Date:</strong> 2008-09-19 13:54:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6616.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>Previous message:</strong> <a href="6614.php">Santolo Felaco: "[OMPI users] Mpirun don't execute"</a>
<li><strong>In reply to:</strong> <a href="6613.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6647.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6647.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Sofia,
<br>
<p>After further reflection I wonder if you have a firewall that is 
<br>
preventing connections to certain ports.
<br>
<p>--td
<br>
<p>Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; Hello Sofia,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, so I really wanted the stack of when you run with &quot;-mca 
</span><br>
<span class="quotelev1">&gt; mpi_preconnect_all 1&quot;  I believe you'll see that one of the processes 
</span><br>
<span class="quotelev1">&gt; will be in init.  However, the stack still probably will not help me 
</span><br>
<span class="quotelev1">&gt; help you.  What needs to happen is to step through the code in dbx 
</span><br>
<span class="quotelev1">&gt; while the connection is trying to be established.  I am hoping you 
</span><br>
<span class="quotelev1">&gt; might find the connect call fails or that we've been given an 
</span><br>
<span class="quotelev1">&gt; interface that somehow cannot reach the other node.  However, when you 
</span><br>
<span class="quotelev1">&gt; specified &quot;-mca btl_tcp_if_include eth1&quot; that should have forced 
</span><br>
<span class="quotelev1">&gt; things to use the interface you need.  So it really comes down to why 
</span><br>
<span class="quotelev1">&gt; are we not connecting to the eth1 address?  Are we failing on routing 
</span><br>
<span class="quotelev1">&gt; to that address or is the connect failing because we are trying to use 
</span><br>
<span class="quotelev1">&gt; a port that we are not really allowed to use or is it something else?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think it is a routing problem since you are able to reach each 
</span><br>
<span class="quotelev1">&gt; node via ssh.  Is there someone else on the list that might want to 
</span><br>
<span class="quotelev1">&gt; lend a hand here?  I feel like I am missing something obvious going on 
</span><br>
<span class="quotelev1">&gt; here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, 19 Sep 2008 16:09:11 +0200
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Sofia Aparicio Secanellas&quot; &lt;saparicio_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;1BBF50FE29F743B5829CC3785F47CADD_at_aparicio1&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Terry,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have installed 1.2.7 and I obtain the same result.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will explain you what I have done.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. On my computer edu_at_10.1.10.240 I have added a new user called 
</span><br>
<span class="quotelev2">&gt;&gt; sofia. This way I have sofia_at_10.1.10.208 and sofia_at_10.1.10.240.
</span><br>
<span class="quotelev2">&gt;&gt; 2. I have downloaded the openmpi 1.2.7 from the openmpi website on 
</span><br>
<span class="quotelev2">&gt;&gt; both computers in /home/sofia/Desktop.
</span><br>
<span class="quotelev2">&gt;&gt; 3. I have installed everything using &quot;sudo ./configure&quot;, &quot;sudo make&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; and &quot;sudo make install&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 4. To make ssh not ask me for a password. I have typed in 
</span><br>
<span class="quotelev2">&gt;&gt; sofia_at_10.1.10.208 &quot;ssh-keygen -t dsa&quot;, &quot;cd $HOME/.ssh&quot; and &quot;cp 
</span><br>
<span class="quotelev2">&gt;&gt; id_dsa.pub authorized_keys&quot;. I have copied the directory 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/home/sofia/.ssh&quot; from sofia_at_10.1.10.208 to /home/sofia/.ssh in 
</span><br>
<span class="quotelev2">&gt;&gt; sofia_at_10.1.10.240. The ssh  command without password works on 
</span><br>
<span class="quotelev2">&gt;&gt; computer sofia_at_10.1.10.208  but computer sofia_at_10.1.10.208 ask me for 
</span><br>
<span class="quotelev2">&gt;&gt; a passphrase and for the password. Is it normal?
</span><br>
<span class="quotelev2">&gt;&gt; 5. I have created a directory &quot;/home/sofia/programasparalelos&quot; on 
</span><br>
<span class="quotelev2">&gt;&gt; both computers and I have given permissions to the directory with 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;chmod 777&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 6. I have copied on both computers in 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/home/sofia/programasparalelos&quot;  the program &quot;PruebaSumaParalela.c&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; (I have changed a little bit the program, I enclose you the new 
</span><br>
<span class="quotelev2">&gt;&gt; program) and I have compiled using &quot;mpicc PruebaSumaParalela.c -o 
</span><br>
<span class="quotelev2">&gt;&gt; PruebaSumaParalela.out&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 7. Now I run the program on both computersusing the command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np2 --host 10.1.10.208,10.1.10.240 --prefix /usr/local 
</span><br>
<span class="quotelev2">&gt;&gt; ./PruebaSumaParalela.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  When I run the program I obtain 3 PIDs executing on every computer, 
</span><br>
<span class="quotelev2">&gt;&gt; 2 of &quot;./PruebaSumaParalela.out&quot; and 1 of  &quot;mpirun -np2 --host 
</span><br>
<span class="quotelev2">&gt;&gt; 10.1.10.208,10.1.10.240 --prefix /usr/local 
</span><br>
<span class="quotelev2">&gt;&gt; ./PruebaSumaParalela.out&quot;. I enclose you the results obtained on 
</span><br>
<span class="quotelev2">&gt;&gt; every computer for every &quot;./PruebaSumaParalela.out&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sofia
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6616.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>Previous message:</strong> <a href="6614.php">Santolo Felaco: "[OMPI users] Mpirun don't execute"</a>
<li><strong>In reply to:</strong> <a href="6613.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6647.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6647.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
