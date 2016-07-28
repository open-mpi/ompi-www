<?
$subject_val = "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 10 15:18:14 2012" -->
<!-- isoreceived="20120910191814" -->
<!-- sent="Mon, 10 Sep 2012 15:18:11 -0400" -->
<!-- isosent="20120910191811" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7" -->
<!-- id="FD9D0052-59B8-4AEF-AF00-F5EA6C0DDDA4_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201209091727.q89HRJ70017367_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-10 15:18:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20184.php">Jeff Squyres: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Previous message:</strong> <a href="20182.php">Jeff Squyres: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>In reply to:</strong> <a href="20166.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've added &quot;lo&quot; back into the list, but I'm curious as to why 127.0.0.1/8 doesn't work.
<br>
<p>If you run ipconfig, what does it say for the localhost entry?  I.e., what's its IP address and netmask?
<br>
<p><p>On Sep 9, 2012, at 1:27 PM, Siegmar Gross wrote:
<br>
<p><span class="quotelev1">&gt; Hi Shiqing,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I disabled IPv6 in my network adpaters and activated the entry
</span><br>
<span class="quotelev1">&gt; &quot;127.0.0.1 localhost&quot; in file c:\Windows\System32\drivers\etc\hosts
</span><br>
<span class="quotelev1">&gt; to overwrite the IPv6 address for localhost in the registry.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;ping localhost&quot; displays the following output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ping wird ausgef&#252;hrt f&#252;r hermes [127.0.0.1] mit 32 Bytes Daten:
</span><br>
<span class="quotelev1">&gt; Antwort von 127.0.0.1: Bytes=32 Zeit&lt;1ms TTL=128
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nevertheless I get the warning from &quot;mpiexec&quot; before the output of
</span><br>
<span class="quotelev1">&gt; my program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; c:\...&gt;mpiexec init_finalize.exe
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: An invalid value was given for btl_tcp_if_exclude.  This
</span><br>
<span class="quotelev1">&gt; value will be ignored.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Local host: hermes
</span><br>
<span class="quotelev1">&gt;  Value:      127.0.0.1/8
</span><br>
<span class="quotelev1">&gt;  Message:    Did not find interface matching this subnet
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can avoid the warning with the following command line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; c:\...&gt;mpiexec -mca btl_tcp_if_exclude lo init_finalize.exe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; c:\...&gt;ompi_info --param btl tcp | \cygwin\bin\grep if_exclude
</span><br>
<span class="quotelev1">&gt; Comma-delimited list of devices or CIDR notation of networks to use
</span><br>
<span class="quotelev1">&gt;  for MPI communication (e.g., &quot;eth0,eth1&quot; or
</span><br>
<span class="quotelev1">&gt;  &quot;192.168.0.0/16,10.1.4.0/24&quot;).  Mutually exclusive with
</span><br>
<span class="quotelev1">&gt;  btl_tcp_if_exclude.
</span><br>
<span class="quotelev1">&gt;  MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value:
</span><br>
<span class="quotelev1">&gt;  &lt;127.0.0.1/8,sppp&gt;, data source: default value)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps it is necessary to add &quot;lo&quot; once more to the list to make
</span><br>
<span class="quotelev1">&gt; Windows 7 happy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The warning message is because the loopback adapter is excluded by 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default, but this adapter is actually not installed on Windows.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One solution might be installing the loopback adapter on Windows. It 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; very easy, only a few minutes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have installed the loopback adapter but it has the wrong IP address
</span><br>
<span class="quotelev2">&gt;&gt; so that I still have the same warning message.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ethernet-Adapter LAN-Verbindung 3:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Verbindungsspezifisches DNS-Suffix:
</span><br>
<span class="quotelev2">&gt;&gt;   Beschreibung. . . . . . . . . . . : Microsoft Loopbackadapter
</span><br>
<span class="quotelev2">&gt;&gt;   Physikalische Adresse . . . . . . : 02-00-4C-4F-4F-50
</span><br>
<span class="quotelev2">&gt;&gt;   DHCP aktiviert. . . . . . . . . . : Ja
</span><br>
<span class="quotelev2">&gt;&gt;   Autokonfiguration aktiviert . . . : Ja
</span><br>
<span class="quotelev2">&gt;&gt;   Verbindungslokale IPv6-Adresse  . : fe80::25d7:866d:f5c9:7295%31(Bevorzugt)
</span><br>
<span class="quotelev2">&gt;&gt;   IPv4-Adresse (Auto. Konfiguration): 169.254.114.149(Bevorzugt)
</span><br>
<span class="quotelev2">&gt;&gt;   Subnetzmaske  . . . . . . . . . . : 255.255.0.0
</span><br>
<span class="quotelev2">&gt;&gt;   Standardgateway . . . . . . . . . :
</span><br>
<span class="quotelev2">&gt;&gt;   DHCPv6-IAID . . . . . . . . . . . : 671219788
</span><br>
<span class="quotelev2">&gt;&gt;   DHCPv6-Client-DUID. . . . . . . . : 
</span><br>
<span class="quotelev1">&gt; 00-01-00-01-15-A4-69-BD-C0-F8-DA-35-64-02
</span><br>
<span class="quotelev2">&gt;&gt;   DNS-Server  . . . . . . . . . . . : fec0:0:0:ffff::1%1
</span><br>
<span class="quotelev2">&gt;&gt;                                       fec0:0:0:ffff::2%1
</span><br>
<span class="quotelev2">&gt;&gt;                                       fec0:0:0:ffff::3%1
</span><br>
<span class="quotelev2">&gt;&gt;   NetBIOS &#252;ber TCP/IP . . . . . . . : Aktiviert
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried to change the address to 127.0.0.1 without luck. When I switch
</span><br>
<span class="quotelev2">&gt;&gt; from &quot;automatic&quot; to &quot;manual&quot; in the properties menue and start the
</span><br>
<span class="quotelev2">&gt;&gt; IP address with 127 a window pops up announcing that an IP address
</span><br>
<span class="quotelev2">&gt;&gt; starting with 127 is reserved for the loopback adapter so that I couldn't
</span><br>
<span class="quotelev2">&gt;&gt; change the address. How did you manage to get the loopback adapter address
</span><br>
<span class="quotelev2">&gt;&gt; 127.0.0.1 or do you live with the message from Open MPI? Thank you very
</span><br>
<span class="quotelev2">&gt;&gt; much for a short answer in advance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20184.php">Jeff Squyres: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Previous message:</strong> <a href="20182.php">Jeff Squyres: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>In reply to:</strong> <a href="20166.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
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
