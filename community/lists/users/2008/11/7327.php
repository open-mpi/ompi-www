<?
$subject_val = "Re: [OMPI users] avoid usage of ssh on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 17 11:40:05 2008" -->
<!-- isoreceived="20081117164005" -->
<!-- sent="Mon, 17 Nov 2008 17:39:59 +0100" -->
<!-- isosent="20081117163959" -->
<!-- name="Sun, Yongqi (E F ES EN 72)" -->
<!-- email="yongqi.sun_at_[hidden]" -->
<!-- subject="Re: [OMPI users] avoid usage of ssh on local machine" -->
<!-- id="EF9AA6DFC03E4D45A3BFE35E162D8AAD6AF108_at_DEERLS7E8A.ww007.siemens.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B3311CAB-ED24-44F3-9302-1F34A0ACC838_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] avoid usage of ssh on local machine<br>
<strong>From:</strong> Sun, Yongqi (E F ES EN 72) (<em>yongqi.sun_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-17 11:39:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7328.php">Solibakke Per Bjarte: "[OMPI users] openmpi-1.2.8 and cygwin..."</a>
<li><strong>Previous message:</strong> <a href="7326.php">Ravi Manumachu: "[OMPI users] Fwd: OpenMPI-1.2.8 issues on 64-bit Itanium platforms (IA64)"</a>
<li><strong>In reply to:</strong> <a href="7325.php">Jeff Squyres: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have my problem solved. Thank you for your help.
<br>
<p>Since the &quot;192.168.160.1&quot;, which is looked for by ssh, is not in my
<br>
ifconfig, I add this address to my network setting, by
<br>
<p>&nbsp;$ ifconfig eth0:1 192.168.160.1
<br>
&nbsp;$ route add -host 192.168.160.1 dev eth0:1
<br>
<p>And finally it works.
<br>
<p>Best regards
<br>
<p>Sun
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: Montag, 17. November 2008 13:18
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] avoid usage of ssh on local machine
<br>
<p>On Nov 17, 2008, at 7:04 AM, Sun, Yongqi (E F ES EN 72) wrote:
<br>
<p><span class="quotelev1">&gt; The OMPI is trying to launch 192.168.160.1, which is not in my  
</span><br>
<span class="quotelev1">&gt; ifconfig.
</span><br>
<span class="quotelev1">&gt; The contents of ifconfig and /etc/hosts are attached.
</span><br>
<span class="quotelev1">&gt; What should I do now?
</span><br>
<p>OMPI got that IP address from somewhere; probably by a name resolution  
<br>
of the name &quot;W71c-140644&quot;...?
<br>
<p>It does seem odd that your hostname is listed twice in /etc/hosts for  
<br>
two different IP addresses.  One looks like it's supposed to be a  
<br>
localhost kind of address and the other doesn't seem to resolve to an  
<br>
IP address that is configured on that host (i.e., both eth0 and eth1  
<br>
don't have that IP address).  This is at least likely to be part of  
<br>
the problem.
<br>
<p>It seems like there's some wonkyness in your IP addressing setup on  
<br>
that host; you might want to double check that all your networking  
<br>
setup is correct.  Check things like:
<br>
<p>- /etc/hosts
<br>
- what IP addresses you want the machine to be
<br>
- what the hostname is
<br>
- what /etc/nsswitch.conf contains
<br>
- what DNS and gethostbyname() returns for the name that is returned  
<br>
by the &quot;hostname&quot; command
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7328.php">Solibakke Per Bjarte: "[OMPI users] openmpi-1.2.8 and cygwin..."</a>
<li><strong>Previous message:</strong> <a href="7326.php">Ravi Manumachu: "[OMPI users] Fwd: OpenMPI-1.2.8 issues on 64-bit Itanium platforms (IA64)"</a>
<li><strong>In reply to:</strong> <a href="7325.php">Jeff Squyres: "Re: [OMPI users] avoid usage of ssh on local machine"</a>
<!-- nextthread="start" -->
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
