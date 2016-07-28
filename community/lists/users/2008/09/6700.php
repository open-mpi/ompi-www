<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 11:07:10 2008" -->
<!-- isoreceived="20080923150710" -->
<!-- sent="Tue, 23 Sep 2008 17:05:22 +0200" -->
<!-- isosent="20080923150522" -->
<!-- name="Sofia Aparicio Secanellas" -->
<!-- email="saparicio_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="34D2F769A7C946BF915A828A9CD7F3CC_at_aparicio1" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="48D8FBDA.1000605_at_sun.com" -->
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
<strong>Date:</strong> 2008-09-23 11:05:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6701.php">Santolo Felaco: "[OMPI users] Not Found libltdl"</a>
<li><strong>Previous message:</strong> <a href="6699.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6699.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6703.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Terry,
<br>
<p>Here you can find the files.
<br>
<p>Thank you very much.
<br>
<p>Sofia
<br>
----- Original Message ----- 
<br>
From: &quot;Terry Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt;
<br>
To: &lt;users_at_[hidden]&gt;
<br>
Sent: Tuesday, September 23, 2008 4:23 PM
<br>
Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
<br>
<p><p><span class="quotelev1">&gt; Hello Sofia,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After talking with another OMPI member can you humor me and do
</span><br>
<span class="quotelev1">&gt; &quot;/sbin/iptables -L&quot; on both your machines.  You'll need to be root to
</span><br>
<span class="quotelev1">&gt; do such.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tue, 23 Sep 2008 06:02:30 -0400
</span><br>
<span class="quotelev1">&gt; From: Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;48D8BEB6.8040901_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; format=flowed; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Sofia, Looking at your stack trace it is what I thought was 
</span><br>
<span class="quotelev1">&gt; happening and that is one process is stuck trying to connect to the other. 
</span><br>
<span class="quotelev1">&gt; The stack unfortunately does not give enough information as to why. The 
</span><br>
<span class="quotelev1">&gt; only suggestion I could give is walk through a debuggable version of the 
</span><br>
<span class="quotelev1">&gt; code from ompi_init_do_preconnect and see if you can find where the 
</span><br>
<span class="quotelev1">&gt; process is calling connect and see if the connect call is failing. If you 
</span><br>
<span class="quotelev1">&gt; don't have a firewall I am not sure what is then blocking the connection 
</span><br>
<span class="quotelev1">&gt; from happening. Either the address somehow is being mashed up or something 
</span><br>
<span class="quotelev1">&gt; else. --td Date: Mon, 22 Sep 2008 10:49:41 +0200 From: &quot;Sofia Aparicio 
</span><br>
<span class="quotelev1">&gt; Secanellas&quot; &lt;saparicio_at_[hidden]&gt; Subject: Re: [OMPI users] Problem 
</span><br>
<span class="quotelev1">&gt; with MPI_Send and MPI_Recv To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;2F607CC2B43A422B80CEBBD540BFFE8B_at_aparicio1&gt; Content-Type: 
</span><br>
<span class="quotelev1">&gt; text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot; Hello Terry, I do not 
</span><br>
<span class="quotelev1">&gt; have an active firewall. I have typed on both computers: netstat -lnut I 
</span><br>
<span class="quotelev1">&gt; enclose you the results. I have also written on both computers: mpirun -np 
</span><br>
<span class="quotelev1">&gt; 2 --host 10.1.10.208,10.1.10.240 --mca mpi_preconnect_all 1 --prefix 
</span><br>
<span class="quotelev1">&gt; /usr/local -mca btl self,tcp -mca btl_tcp_if_include eth1 
</span><br>
<span class="quotelev1">&gt; ./PruebaSumaParalela.out I enclose you the results. Thank you. Sofia -----  
</span><br>
<span class="quotelev1">&gt; Original Message ----- From: &quot;Terry Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; To: 
</span><br>
<span class="quotelev1">&gt; &lt;users_at_[hidden]&gt; Sent: Friday, September 19, 2008 7:54 PM Subject: Re: 
</span><br>
<span class="quotelev1">&gt; [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Hello Sofia,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; After further reflection I wonder if you have a firewall that is 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; preventing connections to certain ports.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; --td
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Terry Dontje wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; Hello Sofia,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; Ok, so I really wanted the stack of when you run with &quot;-mca 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; mpi_preconnect_all 1&quot;  I believe you'll see that one of the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; processes will be in init.  However, the stack still probably 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; will not help me help you.  What needs to happen is to step 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; through the code in dbx while the connection is trying to be 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; established.  I am hoping you might find the connect call fails 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; or that we've been given an interface that somehow cannot reach 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; the other node.  However, when you specified &quot;-mca 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; btl_tcp_if_include eth1&quot; that should have forced things to use 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; the interface you need.  So it really comes down to why are we 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; not connecting to the eth1 address?  Are we failing on routing 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; to that address or is the connect failing because we are trying 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; to use a port that we are not really allowed to use or is it 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; something else?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; I don't think it is a routing problem since you are able to 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; reach each node via ssh.  Is there someone else on the list that 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; might want to lend a hand here?  I feel like I am missing 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; something obvious going on here.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt; --td
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; Date: Fri, 19 Sep 2008 16:09:11 +0200
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; From: &quot;Sofia Aparicio Secanellas&quot; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; &lt;saparicio_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; Message-ID: &lt;1BBF50FE29F743B5829CC3785F47CADD_at_aparicio1&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; Hello Terry,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; I have installed 1.2.7 and I obtain the same result.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; I will explain you what I have done.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; 1. On my computer edu_at_10.1.10.240 I have added a new user 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; called sofia. This way I have sofia_at_10.1.10.208 and 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; sofia_at_10.1.10.240.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; 2. I have downloaded the openmpi 1.2.7 from the openmpi 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; website on both computers in /home/sofia/Desktop.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; 3. I have installed everything using &quot;sudo ./configure&quot;, 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; &quot;sudo make&quot; and &quot;sudo make install&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; 4. To make ssh not ask me for a password. I have typed in 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; sofia_at_10.1.10.208 &quot;ssh-keygen -t dsa&quot;, &quot;cd $HOME/.ssh&quot; and 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; &quot;cp id_dsa.pub authorized_keys&quot;. I have copied the directory 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; &quot;/home/sofia/.ssh&quot; from sofia_at_10.1.10.208 to 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; /home/sofia/.ssh in sofia_at_10.1.10.240. The ssh  command 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; without password works on computer sofia_at_10.1.10.208  but 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; computer sofia_at_10.1.10.208 ask me for a passphrase and for 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; the password. Is it normal?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; 5. I have created a directory 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; &quot;/home/sofia/programasparalelos&quot; on both computers and I 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; have given permissions to the directory with &quot;chmod 777&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; 6. I have copied on both computers in 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; &quot;/home/sofia/programasparalelos&quot; the program 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; &quot;PruebaSumaParalela.c&quot; (I have changed a little bit the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; program, I enclose you the new program) and I have compiled 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; using &quot;mpicc PruebaSumaParalela.c -o 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; PruebaSumaParalela.out&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; 7. Now I run the program on both computersusing the command:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; mpirun -np2 --host 10.1.10.208,10.1.10.240 --prefix 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; /usr/local ./PruebaSumaParalela.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;  When I run the program I obtain 3 PIDs executing on every 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; computer, 2 of &quot;./PruebaSumaParalela.out&quot; and 1 of 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;  &quot;mpirun -np2 --host 10.1.10.208,10.1.10.240 --prefix 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; /usr/local ./PruebaSumaParalela.out&quot;. I enclose you the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; results obtained on every computer for every 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; &quot;./PruebaSumaParalela.out&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt; Sofia
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<p>No virus found in this outgoing message
<br>
Checked by PC Tools AntiVirus (4.0.0.26 - 10.100.007).
<br>
<a href="http://www.pctools.com/free-antivirus/">http://www.pctools.com/free-antivirus/</a>
<br>
<p><p>

<br><p>
<p><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6700/iptables_10.1.10.208.txt">iptables_10.1.10.208.txt</a>
</ul>
<!-- attachment="iptables_10.1.10.208.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6700/iptables_10.1.10.240.txt">iptables_10.1.10.240.txt</a>
</ul>
<!-- attachment="iptables_10.1.10.240.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6701.php">Santolo Felaco: "[OMPI users] Not Found libltdl"</a>
<li><strong>Previous message:</strong> <a href="6699.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6699.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6703.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
