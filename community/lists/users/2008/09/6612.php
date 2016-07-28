<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 10:10:35 2008" -->
<!-- isoreceived="20080919141035" -->
<!-- sent="Fri, 19 Sep 2008 16:09:11 +0200" -->
<!-- isosent="20080919140911" -->
<!-- name="Sofia Aparicio Secanellas" -->
<!-- email="saparicio_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="1BBF50FE29F743B5829CC3785F47CADD_at_aparicio1" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="48D2907B.3020606_at_sun.com" -->
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
<strong>Date:</strong> 2008-09-19 10:09:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6613.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6611.php">John Hearns: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>In reply to:</strong> <a href="6605.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6613.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Terry,
<br>
<p>I have installed 1.2.7 and I obtain the same result.
<br>
<p>I will explain you what I have done.
<br>
<p>1. On my computer edu_at_10.1.10.240 I have added a new user called sofia. This 
<br>
way I have sofia_at_10.1.10.208 and sofia_at_10.1.10.240.
<br>
2. I have downloaded the openmpi 1.2.7 from the openmpi website on both 
<br>
computers in /home/sofia/Desktop.
<br>
3. I have installed everything using &quot;sudo ./configure&quot;, &quot;sudo make&quot; and 
<br>
&quot;sudo make install&quot;.
<br>
4. To make ssh not ask me for a password. I have typed in sofia_at_10.1.10.208 
<br>
&quot;ssh-keygen -t dsa&quot;, &quot;cd $HOME/.ssh&quot; and &quot;cp id_dsa.pub authorized_keys&quot;. I 
<br>
have copied the directory &quot;/home/sofia/.ssh&quot; from sofia_at_10.1.10.208 to 
<br>
/home/sofia/.ssh in sofia_at_10.1.10.240. The ssh  command without password 
<br>
works on computer sofia_at_10.1.10.208  but computer sofia_at_10.1.10.208 ask me 
<br>
for a passphrase and for the password. Is it normal?
<br>
5. I have created a directory &quot;/home/sofia/programasparalelos&quot; on both 
<br>
computers and I have given permissions to the directory with &quot;chmod 777&quot;.
<br>
6. I have copied on both computers in &quot;/home/sofia/programasparalelos&quot;  the 
<br>
program &quot;PruebaSumaParalela.c&quot; (I have changed a little bit the program, I 
<br>
enclose you the new program) and I have compiled using &quot;mpicc 
<br>
PruebaSumaParalela.c -o PruebaSumaParalela.out&quot;.
<br>
<p>7. Now I run the program on both computersusing the command:
<br>
<p>mpirun -np2 --host 10.1.10.208,10.1.10.240 --prefix /usr/local 
<br>
./PruebaSumaParalela.out
<br>
<p>&nbsp;When I run the program I obtain 3 PIDs executing on every computer, 2 of 
<br>
&quot;./PruebaSumaParalela.out&quot; and 1 of  &quot;mpirun -np2 --host 
<br>
10.1.10.208,10.1.10.240 --prefix /usr/local ./PruebaSumaParalela.out&quot;. I 
<br>
enclose you the results obtained on every computer for every 
<br>
&quot;./PruebaSumaParalela.out&quot;.
<br>
<p>Thank you very much.
<br>
<p>Sofia
<br>
<p><p>----- Original Message ----- 
<br>
From: &quot;Terry Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt;
<br>
To: &lt;users_at_[hidden]&gt;
<br>
Sent: Thursday, September 18, 2008 7:31 PM
<br>
Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
<br>
<p><p><span class="quotelev1">&gt; Turns out you debugged the mpirun I was actually wanting you to attach to 
</span><br>
<span class="quotelev1">&gt; your program, PruebaSumaParalela.out, on both nodes and dump each of their 
</span><br>
<span class="quotelev1">&gt; stacks.
</span><br>
<span class="quotelev1">&gt; Is there a reason why you are using 1.2.2 instead of 1.2.7 or something 
</span><br>
<span class="quotelev1">&gt; from the 1.3 branch?  I am wondering if maybe there is some sort of bug in 
</span><br>
<span class="quotelev1">&gt; the tcp BTL that is preventing it from matching your two interfaces.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another thing to try is to specifically list out the interfaces you want 
</span><br>
<span class="quotelev1">&gt; to have used.  I do not think this is going to help but it can't hurt 
</span><br>
<span class="quotelev1">&gt; either.  I would do something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --host 10.4.5.123,edu_at_10.4.5.126 --mca mpi_preconnect_all 
</span><br>
<span class="quotelev1">&gt;  1 --prefix /usr/local -mca btl self,tcp -mca btl_tcp_if_include eth1 
</span><br>
<span class="quotelev1">&gt; ./PruebaSumaParalela.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thu, 18 Sep 2008 13:12:46 +0200
</span><br>
<span class="quotelev1">&gt; From: &quot;Sofia Aparicio Secanellas&quot; &lt;saparicio_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;35BA42AA514D45239323DB9B38B4C5CE_at_aparicio1&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finally, I have installed dbx. I enclose a file with the result that I get 
</span><br>
<span class="quotelev1">&gt; when I type &quot;dbx - PID of mpirun...&quot; and then &quot;where&quot; on computer 
</span><br>
<span class="quotelev1">&gt; 10.4.5.123 .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any idea what could be the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sofia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6612/PruebaSumaParalela.c">PruebaSumaParalela.c</a>
</ul>
<!-- attachment="PruebaSumaParalela.c" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6612/file1_10.1.10.208.txt">file1_10.1.10.208.txt</a>
</ul>
<!-- attachment="file1_10.1.10.208.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6612/file1_10.1.10.240.txt">file1_10.1.10.240.txt</a>
</ul>
<!-- attachment="file1_10.1.10.240.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6612/file2_10.1.10.208.txt">file2_10.1.10.208.txt</a>
</ul>
<!-- attachment="file2_10.1.10.208.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6612/file2_10.1.10.240.txt">file2_10.1.10.240.txt</a>
</ul>
<!-- attachment="file2_10.1.10.240.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6613.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6611.php">John Hearns: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>In reply to:</strong> <a href="6605.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6613.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
