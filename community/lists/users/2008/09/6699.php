<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 10:23:43 2008" -->
<!-- isoreceived="20080923142343" -->
<!-- sent="Tue, 23 Sep 2008 10:23:22 -0400" -->
<!-- isosent="20080923142322" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="48D8FBDA.1000605_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.2015.1222164157.16379.users_at_open-mpi.org" -->
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
<strong>Date:</strong> 2008-09-23 10:23:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6700.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6698.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Maybe in reply to:</strong> <a href="6554.php">Sofia Aparicio Secanellas: "[OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6700.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6700.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Sofia,
<br>
<p>After talking with another OMPI member can you humor me and do
<br>
&quot;/sbin/iptables -L&quot; on both your machines.  You'll need to be root to
<br>
do such.
<br>
<p>--td
<br>
<p><p>Date: Tue, 23 Sep 2008 06:02:30 -0400
<br>
From: Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
<br>
To: users_at_[hidden]
<br>
Message-ID: &lt;48D8BEB6.8040901_at_[hidden]&gt;
<br>
Content-Type: text/plain; format=flowed; charset=ISO-8859-1
<br>
<p>Hello Sofia, Looking at your stack trace it is what I thought was 
<br>
happening and that is one process is stuck trying to connect to the 
<br>
other. The stack unfortunately does not give enough information as to 
<br>
why. The only suggestion I could give is walk through a debuggable 
<br>
version of the code from ompi_init_do_preconnect and see if you can find 
<br>
where the process is calling connect and see if the connect call is 
<br>
failing. If you don't have a firewall I am not sure what is then 
<br>
blocking the connection from happening. Either the address somehow is 
<br>
being mashed up or something else. --td Date: Mon, 22 Sep 2008 10:49:41 
<br>
+0200 From: &quot;Sofia Aparicio Secanellas&quot; &lt;saparicio_at_[hidden]&gt; 
<br>
Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv To: &quot;Open 
<br>
MPI Users&quot; &lt;users_at_[hidden]&gt; Message-ID: 
<br>
&lt;2F607CC2B43A422B80CEBBD540BFFE8B_at_aparicio1&gt; Content-Type: text/plain; 
<br>
charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot; Hello Terry, I do not have an 
<br>
active firewall. I have typed on both computers: netstat -lnut I enclose 
<br>
you the results. I have also written on both computers: mpirun -np 2 
<br>
--host 10.1.10.208,10.1.10.240 --mca mpi_preconnect_all 1 --prefix 
<br>
/usr/local -mca btl self,tcp -mca btl_tcp_if_include eth1 
<br>
./PruebaSumaParalela.out I enclose you the results. Thank you. Sofia 
<br>
----- Original Message ----- From: &quot;Terry Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; 
<br>
To: &lt;users_at_[hidden]&gt; Sent: Friday, September 19, 2008 7:54 PM 
<br>
Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
<br>
<p><p><span class="quotelev4">&gt;&gt; &gt; &gt; Hello Sofia,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; After further reflection I wonder if you have a firewall that is 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; preventing connections to certain ports.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; --td
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; Hello Sofia,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; Ok, so I really wanted the stack of when you run with &quot;-mca 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; mpi_preconnect_all 1&quot;  I believe you'll see that one of the processes 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; will be in init.  However, the stack still probably will not help me help 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; you.  What needs to happen is to step through the code in dbx while the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; connection is trying to be established.  I am hoping you might find the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; connect call fails or that we've been given an interface that somehow 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; cannot reach the other node.  However, when you specified &quot;-mca 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; btl_tcp_if_include eth1&quot; that should have forced things to use the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; interface you need.  So it really comes down to why are we not connecting 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; to the eth1 address?  Are we failing on routing to that address or is the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; connect failing because we are trying to use a port that we are not 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; really allowed to use or is it something else?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; I don't think it is a routing problem since you are able to reach each 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; node via ssh.  Is there someone else on the list that might want to lend 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; a hand here?  I feel like I am missing something obvious going on here.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; --td
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; Date: Fri, 19 Sep 2008 16:09:11 +0200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; From: &quot;Sofia Aparicio Secanellas&quot; &lt;saparicio_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; Message-ID: &lt;1BBF50FE29F743B5829CC3785F47CADD_at_aparicio1&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; Hello Terry,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; I have installed 1.2.7 and I obtain the same result.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; I will explain you what I have done.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; 1. On my computer edu_at_10.1.10.240 I have added a new user called sofia. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; This way I have sofia_at_10.1.10.208 and sofia_at_10.1.10.240.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; 2. I have downloaded the openmpi 1.2.7 from the openmpi website on both 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; computers in /home/sofia/Desktop.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; 3. I have installed everything using &quot;sudo ./configure&quot;, &quot;sudo make&quot; and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; &quot;sudo make install&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; 4. To make ssh not ask me for a password. I have typed in 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; sofia_at_10.1.10.208 &quot;ssh-keygen -t dsa&quot;, &quot;cd $HOME/.ssh&quot; and &quot;cp 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; id_dsa.pub authorized_keys&quot;. I have copied the directory 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; &quot;/home/sofia/.ssh&quot; from sofia_at_10.1.10.208 to /home/sofia/.ssh in 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; sofia_at_10.1.10.240. The ssh  command without password works on computer 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; sofia_at_10.1.10.208  but computer sofia_at_10.1.10.208 ask me for a 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; passphrase and for the password. Is it normal?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; 5. I have created a directory &quot;/home/sofia/programasparalelos&quot; on both 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; computers and I have given permissions to the directory with &quot;chmod 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; 777&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; 6. I have copied on both computers in &quot;/home/sofia/programasparalelos&quot; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; the program &quot;PruebaSumaParalela.c&quot; (I have changed a little bit the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; program, I enclose you the new program) and I have compiled using &quot;mpicc 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; PruebaSumaParalela.c -o PruebaSumaParalela.out&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; 7. Now I run the program on both computersusing the command:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; mpirun -np2 --host 10.1.10.208,10.1.10.240 --prefix /usr/local 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; ./PruebaSumaParalela.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;  When I run the program I obtain 3 PIDs executing on every computer, 2 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; of &quot;./PruebaSumaParalela.out&quot; and 1 of  &quot;mpirun -np2 --host 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; 10.1.10.208,10.1.10.240 --prefix /usr/local ./PruebaSumaParalela.out&quot;. I 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; enclose you the results obtained on every computer for every 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; &quot;./PruebaSumaParalela.out&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; Sofia
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;             
</span><br>
<span class="quotelev2">&gt;&gt;&gt; &gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6700.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6698.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Maybe in reply to:</strong> <a href="6554.php">Sofia Aparicio Secanellas: "[OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6700.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="6700.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
