<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 10:55:15 2008" -->
<!-- isoreceived="20080918145515" -->
<!-- sent="Thu, 18 Sep 2008 16:54:12 +0200" -->
<!-- isosent="20080918145412" -->
<!-- name="Sofia Aparicio Secanellas" -->
<!-- email="saparicio_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="6AF5A25A6FCF4DA89195AC39599764FA_at_aparicio1" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="48D246D0.1040600_at_sun.com" -->
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
<strong>Date:</strong> 2008-09-18 10:54:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6604.php">Alex Wolfe: "[OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>Previous message:</strong> <a href="6602.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>In reply to:</strong> <a href="6600.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6605.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Here I enclose you the two files. I should tell you that before I did not 
<br>
use the real IPs. The real ones are in the files.
<br>
<p>Thanks again.
<br>
<p>Sofia
<br>
<p><p>----- Original Message ----- 
<br>
From: &quot;Terry Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt;
<br>
To: &lt;users_at_[hidden]&gt;
<br>
Sent: Thursday, September 18, 2008 2:17 PM
<br>
Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
<br>
<p><p><span class="quotelev1">&gt; It might also be interesting to see the result of &quot;ifconfig -a&quot; on both of 
</span><br>
<span class="quotelev1">&gt; your machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Thu, 18 Sep 2008 10:19:37 +0200
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Sofia Aparicio Secanellas&quot; &lt;saparicio_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Problem with MPI_Send and MPI_Recv
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;E3B88B6CBFCF4F78A9F8310502FB5AD4_at_aparicio1&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; format=flowed; charset=&quot;iso-8859-1&quot;;
</span><br>
<span class="quotelev2">&gt;&gt; reply-type=response
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Terry,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, &quot;edu&quot; is the user and 10.4.5.126 is the IP address. Because both 
</span><br>
<span class="quotelev2">&gt;&gt; computers have different usernames, I think that I should write the 
</span><br>
<span class="quotelev2">&gt;&gt; username otherwise it does not work. In fact, on the computer 10.4.5.123 
</span><br>
<span class="quotelev2">&gt;&gt; I write:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 --host 10.4.5.123,edu_at_10.4.5.126 --prefix /usr/local 
</span><br>
<span class="quotelev2">&gt;&gt; ./PruebaSumaParalela.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and on the computer 10.4.5.126 I write:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 --host sofia_at_10.4.5.123,10.4.5.126 --prefix /usr/local 
</span><br>
<span class="quotelev2">&gt;&gt; ./PruebaSumaParalela.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I try only with the IP and  I write on the computer 10.4.5.123:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 --host 10.4.5.123,10.4.5.126 --prefix /usr/local 
</span><br>
<span class="quotelev2">&gt;&gt; ./PruebaSumaParalela.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; then the computer ask me the password of sofia_at_10.4.5.126 and then I type 
</span><br>
<span class="quotelev2">&gt;&gt; the password and does not work because the user is &quot;edu&quot; not &quot;sofia&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to install dbx, if I can attach a debugger I will tell you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sofia
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
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6603/ifconfigresultedu.txt">ifconfigresultedu.txt</a>
</ul>
<!-- attachment="ifconfigresultedu.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6603/ifconfigresultsofia.txt">ifconfigresultsofia.txt</a>
</ul>
<!-- attachment="ifconfigresultsofia.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6604.php">Alex Wolfe: "[OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>Previous message:</strong> <a href="6602.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>In reply to:</strong> <a href="6600.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6605.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
