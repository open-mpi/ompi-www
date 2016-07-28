<?
$subject_val = "Re: [OMPI users] Proper way to stop MPI process";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  7 10:45:19 2011" -->
<!-- isoreceived="20111007144519" -->
<!-- sent="Fri, 7 Oct 2011 16:45:03 +0200" -->
<!-- isosent="20111007144503" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Proper way to stop MPI process" -->
<!-- id="9B991123-68C4-406F-BA04-58EDD845C4E4_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CALKntY33pjGyaTuas86ANQPRy-iWEW8dKiLCzazgn9+pstxPuA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Proper way to stop MPI process<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-07 10:45:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17521.php">Thatyene Louise Alves de Souza Ramos: "[OMPI users] MPI_Comm_accept - Busy wait"</a>
<li><strong>Previous message:</strong> <a href="17519.php">Reuti: "Re: [OMPI users] Proper way to stop MPI process"</a>
<li><strong>In reply to:</strong> <a href="17488.php">Xin Tong: "Re: [OMPI users] Proper way to stop MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17519.php">Reuti: "Re: [OMPI users] Proper way to stop MPI process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 02.10.2011 um 14:35 schrieb Xin Tong:
<br>
<p><span class="quotelev1">&gt; I am using 1.4.3. I send the sigterm from a python script. Then I  
</span><br>
<span class="quotelev1">&gt; wait, the processes do not terminate until i keep pressing enter on  
</span><br>
<span class="quotelev1">&gt; the keyboard.
</span><br>
<p>Is the process really still running or is there just no prompt? Is it  
<br>
just one process, or might it be necessary to send the sigterm to a  
<br>
complete processgroup.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Xin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 30, 2011 at 10:10 PM, Ralph Castain  
</span><br>
<span class="quotelev1">&gt; &lt;rhc.openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Sigterm should work - what version are you using?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my iPad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 28, 2011, at 1:40 PM, Xin Tong &lt;xerox.time.tech_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am wondering what the proper way of stop a mpirun process and  
</span><br>
<span class="quotelev1">&gt; the child process it created. I tried to send SIGTERM,  it does not  
</span><br>
<span class="quotelev1">&gt; respond to it ? What kind of signal should I be sending to it ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Xin
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17521.php">Thatyene Louise Alves de Souza Ramos: "[OMPI users] MPI_Comm_accept - Busy wait"</a>
<li><strong>Previous message:</strong> <a href="17519.php">Reuti: "Re: [OMPI users] Proper way to stop MPI process"</a>
<li><strong>In reply to:</strong> <a href="17488.php">Xin Tong: "Re: [OMPI users] Proper way to stop MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17519.php">Reuti: "Re: [OMPI users] Proper way to stop MPI process"</a>
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
