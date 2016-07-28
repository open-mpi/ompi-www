<?
$subject_val = "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 30 16:45:29 2010" -->
<!-- isoreceived="20100530204529" -->
<!-- sent="Sun, 30 May 2010 22:47:17 +0200" -->
<!-- isosent="20100530204717" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process doesn't exit on remote machine when using hostfile" -->
<!-- id="4C02CED5.7080700_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTiliU1Tnb2qU2EjM__lg0Op2s0t5iaXXl1IGEeIG_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-05-30 16:47:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13188.php">José Ignacio Aliaga Estellés: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<li><strong>Previous message:</strong> <a href="13186.php">Ralph Castain: "Re: [OMPI users] Configuring with torque: error and patch"</a>
<li><strong>In reply to:</strong> <a href="13158.php">Rajnesh Jindel: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13242.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Sorry for the late reply.
<br>
<p>It seems something is still missing on Windows for supporting hostfiles, 
<br>
I'll fix it ASAP.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p><p>On 2010-5-25 11:41 AM, Rajnesh Jindel wrote:
<br>
<span class="quotelev1">&gt; disabled the firewall and using admin account so security isnt the 
</span><br>
<span class="quotelev1">&gt; issue here. like I said this problem only occurs when using a 
</span><br>
<span class="quotelev1">&gt; hostfile,  if I actually specify the hostname on the commandfline it 
</span><br>
<span class="quotelev1">&gt; works fine
</span><br>
<span class="quotelev1">&gt; On 25 May 2010 09:08, Shiqing Fan &lt;fan_at_[hidden] &lt;mailto:fan_at_[hidden]&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     What's the firewall setting on the remote node? Could you try to
</span><br>
<span class="quotelev1">&gt;     add an exception for the application, or turn off the firewall
</span><br>
<span class="quotelev1">&gt;     completely?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Regards,
</span><br>
<span class="quotelev1">&gt;     Shiqing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 2010-5-24 4:44 PM, Rajnesh Jindel wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     When I specify the hosts separately on the commandline, as
</span><br>
<span class="quotelev2">&gt;&gt;     follows, the process completes as expected.
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun -np 8 -host remotehost,localhost myapp
</span><br>
<span class="quotelev2">&gt;&gt;     Output appears for the localhost and a textfile is created on the
</span><br>
<span class="quotelev2">&gt;&gt;     remotehost
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     However when I use a hostfile the remote processes never
</span><br>
<span class="quotelev2">&gt;&gt;     complete. I can see the output from the local processes and by
</span><br>
<span class="quotelev2">&gt;&gt;     remote login I can see that that processes are being started on
</span><br>
<span class="quotelev2">&gt;&gt;     the remote machine but never complete.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The is a simple reduce example using boost.mpi (v1.43) I'm using
</span><br>
<span class="quotelev2">&gt;&gt;     windows 7 x64 pro on both machines and openmpi 1.4.2 the hostfile
</span><br>
<span class="quotelev2">&gt;&gt;     and athe app are in the same locaion on both machines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Any idea why this is happening?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Raj
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     Shiqing Fan<a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev1">&gt;     High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev1">&gt;        Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev1">&gt;     Address:Allmandring 30               email:fan_at_[hidden]  &lt;mailto:fan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     70569 Stuttgart
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13187/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13188.php">José Ignacio Aliaga Estellés: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<li><strong>Previous message:</strong> <a href="13186.php">Ralph Castain: "Re: [OMPI users] Configuring with torque: error and patch"</a>
<li><strong>In reply to:</strong> <a href="13158.php">Rajnesh Jindel: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13242.php">Shiqing Fan: "Re: [OMPI users] Process doesn't exit on remote machine when using hostfile"</a>
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
