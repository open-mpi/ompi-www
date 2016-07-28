<?
$subject_val = "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 25 05:41:55 2010" -->
<!-- isoreceived="20100525094155" -->
<!-- sent="Tue, 25 May 2010 10:41:50 +0100" -->
<!-- isosent="20100525094150" -->
<!-- name="Rajnesh Jindel" -->
<!-- email="rajnesh.jindel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process doesn't exit on remote machine when using hostfile" -->
<!-- id="AANLkTiliU1Tnb2qU2EjM__lg0Op2s0t5iaXXl1IGEeIG_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BFB8574.601_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Process doesn't exit on remote machine when using hostfile<br>
<strong>From:</strong> Rajnesh Jindel (<em>rajnesh.jindel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-25 05:41:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13159.php">Fernando Lemos: "Re: [OMPI users] About the necessity of cancelation of pending communication and the use of buffer"</a>
<li><strong>Previous message:</strong> <a href="13157.php">Reuti: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>In reply to:</strong> <a href="13155.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13187.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>Reply:</strong> <a href="13187.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13242.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
disabled the firewall and using admin account so security isnt the issue
<br>
here. like I said this problem only occurs when using a hostfile,  if I
<br>
actually specify the hostname on the commandfline it works fine
<br>
On 25 May 2010 09:08, Shiqing Fan &lt;fan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What's the firewall setting on the remote node? Could you try to add an
</span><br>
<span class="quotelev1">&gt; exception for the application, or turn off the firewall completely?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2010-5-24 4:44 PM, Rajnesh Jindel wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I specify the hosts separately on the commandline, as follows, the
</span><br>
<span class="quotelev1">&gt; process completes as expected.
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 -host remotehost,localhost myapp
</span><br>
<span class="quotelev1">&gt;  Output appears for the localhost and a textfile is created on the
</span><br>
<span class="quotelev1">&gt; remotehost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However when I use a hostfile the remote processes never complete. I can
</span><br>
<span class="quotelev1">&gt; see the output from the local processes and by remote login I can see that
</span><br>
<span class="quotelev1">&gt; that processes are being started on the remote machine but never complete.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The is a simple reduce example using boost.mpi (v1.43) I'm using windows 7
</span><br>
<span class="quotelev1">&gt; x64 pro on both machines and openmpi 1.4.2 the hostfile and athe app are in
</span><br>
<span class="quotelev1">&gt; the same locaion on both machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea why this is happening?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Raj
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev1">&gt; High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev1">&gt;   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev1">&gt; Address:Allmandring 30               email: fan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 70569 Stuttgart
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13158/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13159.php">Fernando Lemos: "Re: [OMPI users] About the necessity of cancelation of pending communication and the use of buffer"</a>
<li><strong>Previous message:</strong> <a href="13157.php">Reuti: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>In reply to:</strong> <a href="13155.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13187.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>Reply:</strong> <a href="13187.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13242.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
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
