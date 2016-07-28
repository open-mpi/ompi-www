<?
$subject_val = "Re: [OMPI users] Problem with MPI_Send and MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 05:09:02 2008" -->
<!-- isoreceived="20080919090902" -->
<!-- sent="Fri, 19 Sep 2008 11:07:49 +0200" -->
<!-- isosent="20080919090749" -->
<!-- name="Sofia Aparicio Secanellas" -->
<!-- email="saparicio_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Send and MPI_Recv" -->
<!-- id="51068BE41B554317AD56972494885D6A_at_aparicio1" -->
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
<strong>Date:</strong> 2008-09-19 05:07:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6611.php">John Hearns: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>Previous message:</strong> <a href="6609.php">Neeraj Chourasia: "[OMPI users] Re :Re: Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>In reply to:</strong> <a href="6605.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6612.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Terry, I will install 1.2.7.
<br>
<p>Sofia
<br>
<p>----- Original Message ----- 
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
<li><strong>Next message:</strong> <a href="6611.php">John Hearns: "Re: [OMPI users] Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>Previous message:</strong> <a href="6609.php">Neeraj Chourasia: "[OMPI users] Re :Re: Linpack Benchmark and File Descriptor Limits"</a>
<li><strong>In reply to:</strong> <a href="6605.php">Terry Dontje: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6612.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
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
