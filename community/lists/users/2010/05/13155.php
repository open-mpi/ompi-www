<?
$subject_val = "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 25 04:06:17 2010" -->
<!-- isoreceived="20100525080617" -->
<!-- sent="Tue, 25 May 2010 10:08:20 +0200" -->
<!-- isosent="20100525080820" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process doesn't exit on remote machine when using hostfile" -->
<!-- id="4BFB8574.601_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimwb04EN2w9J4jhRyEblUGIcgRsiXE5bvpAfKjT_at_mail.gmail.com" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-25 04:08:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13156.php">Ashley Pittman: "Re: [OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
<li><strong>Previous message:</strong> <a href="13154.php">Eloi Gaudry: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>In reply to:</strong> <a href="13142.php">Rajnesh Jindel: "[OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13158.php">Rajnesh Jindel: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>Reply:</strong> <a href="13158.php">Rajnesh Jindel: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>What's the firewall setting on the remote node? Could you try to add an 
<br>
exception for the application, or turn off the firewall completely?
<br>
<p>Regards,
<br>
Shiqing
<br>
<p><p><p>On 2010-5-24 4:44 PM, Rajnesh Jindel wrote:
<br>
<span class="quotelev1">&gt; When I specify the hosts separately on the commandline, as follows, 
</span><br>
<span class="quotelev1">&gt; the process completes as expected.
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 -host remotehost,localhost myapp
</span><br>
<span class="quotelev1">&gt; Output appears for the localhost and a textfile is created on the 
</span><br>
<span class="quotelev1">&gt; remotehost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However when I use a hostfile the remote processes never complete. I 
</span><br>
<span class="quotelev1">&gt; can see the output from the local processes and by remote login I can 
</span><br>
<span class="quotelev1">&gt; see that that processes are being started on the remote machine but 
</span><br>
<span class="quotelev1">&gt; never complete.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The is a simple reduce example using boost.mpi (v1.43) I'm using 
</span><br>
<span class="quotelev1">&gt; windows 7 x64 pro on both machines and openmpi 1.4.2 the hostfile and 
</span><br>
<span class="quotelev1">&gt; athe app are in the same locaion on both machines.
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
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]
70569 Stuttgart
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13155/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13156.php">Ashley Pittman: "Re: [OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
<li><strong>Previous message:</strong> <a href="13154.php">Eloi Gaudry: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>In reply to:</strong> <a href="13142.php">Rajnesh Jindel: "[OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13158.php">Rajnesh Jindel: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<li><strong>Reply:</strong> <a href="13158.php">Rajnesh Jindel: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
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
