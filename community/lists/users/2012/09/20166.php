<?
$subject_val = "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  9 13:40:55 2012" -->
<!-- isoreceived="20120909174055" -->
<!-- sent="Sun, 9 Sep 2012 19:27:19 +0200 (CEST)" -->
<!-- isosent="20120909172719" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7" -->
<!-- id="201209091727.q89HRJ70017367_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] error compiling openmpi-1.6.1 on Windows 7" -->
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
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-09 13:27:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20167.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20165.php">Siegmar Gross: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20014.php">Siegmar Gross: "[OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20183.php">Jeff Squyres: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Reply:</strong> <a href="20183.php">Jeff Squyres: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Shiqing,
<br>
<p>I disabled IPv6 in my network adpaters and activated the entry
<br>
&quot;127.0.0.1 localhost&quot; in file c:\Windows\System32\drivers\etc\hosts
<br>
to overwrite the IPv6 address for localhost in the registry.
<br>
<p><p>&quot;ping localhost&quot; displays the following output.
<br>
<p>Ping wird ausgef&#252;hrt f&#252;r hermes [127.0.0.1] mit 32 Bytes Daten:
<br>
Antwort von 127.0.0.1: Bytes=32 Zeit&lt;1ms TTL=128
<br>
...
<br>
<p><p>Nevertheless I get the warning from &quot;mpiexec&quot; before the output of
<br>
my program.
<br>
<p>c:\...&gt;mpiexec init_finalize.exe
<br>
--------------------------------------------------------------------------
<br>
WARNING: An invalid value was given for btl_tcp_if_exclude.  This
<br>
value will be ignored.
<br>
<p>&nbsp;&nbsp;Local host: hermes
<br>
&nbsp;&nbsp;Value:      127.0.0.1/8
<br>
&nbsp;&nbsp;Message:    Did not find interface matching this subnet
<br>
--------------------------------------------------------------------------
<br>
<p>Hello!
<br>
<p><p><p>I can avoid the warning with the following command line.
<br>
<p>c:\...&gt;mpiexec -mca btl_tcp_if_exclude lo init_finalize.exe
<br>
<p>Hello!
<br>
<p><p><p>c:\...&gt;ompi_info --param btl tcp | \cygwin\bin\grep if_exclude
<br>
Comma-delimited list of devices or CIDR notation of networks to use
<br>
&nbsp;&nbsp;for MPI communication (e.g., &quot;eth0,eth1&quot; or
<br>
&nbsp;&nbsp;&quot;192.168.0.0/16,10.1.4.0/24&quot;).  Mutually exclusive with
<br>
&nbsp;&nbsp;btl_tcp_if_exclude.
<br>
&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value:
<br>
&nbsp;&nbsp;&lt;127.0.0.1/8,sppp&gt;, data source: default value)
<br>
<p>Perhaps it is necessary to add &quot;lo&quot; once more to the list to make
<br>
Windows 7 happy.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><span class="quotelev2">&gt; &gt; The warning message is because the loopback adapter is excluded by 
</span><br>
<span class="quotelev2">&gt; &gt; default, but this adapter is actually not installed on Windows.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; One solution might be installing the loopback adapter on Windows. It 
</span><br>
<span class="quotelev2">&gt; &gt; very easy, only a few minutes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have installed the loopback adapter but it has the wrong IP address
</span><br>
<span class="quotelev1">&gt; so that I still have the same warning message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ethernet-Adapter LAN-Verbindung 3:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Verbindungsspezifisches DNS-Suffix:
</span><br>
<span class="quotelev1">&gt;    Beschreibung. . . . . . . . . . . : Microsoft Loopbackadapter
</span><br>
<span class="quotelev1">&gt;    Physikalische Adresse . . . . . . : 02-00-4C-4F-4F-50
</span><br>
<span class="quotelev1">&gt;    DHCP aktiviert. . . . . . . . . . : Ja
</span><br>
<span class="quotelev1">&gt;    Autokonfiguration aktiviert . . . : Ja
</span><br>
<span class="quotelev1">&gt;    Verbindungslokale IPv6-Adresse  . : fe80::25d7:866d:f5c9:7295%31(Bevorzugt)
</span><br>
<span class="quotelev1">&gt;    IPv4-Adresse (Auto. Konfiguration): 169.254.114.149(Bevorzugt)
</span><br>
<span class="quotelev1">&gt;    Subnetzmaske  . . . . . . . . . . : 255.255.0.0
</span><br>
<span class="quotelev1">&gt;    Standardgateway . . . . . . . . . :
</span><br>
<span class="quotelev1">&gt;    DHCPv6-IAID . . . . . . . . . . . : 671219788
</span><br>
<span class="quotelev1">&gt;    DHCPv6-Client-DUID. . . . . . . . : 
</span><br>
00-01-00-01-15-A4-69-BD-C0-F8-DA-35-64-02
<br>
<span class="quotelev1">&gt;    DNS-Server  . . . . . . . . . . . : fec0:0:0:ffff::1%1
</span><br>
<span class="quotelev1">&gt;                                        fec0:0:0:ffff::2%1
</span><br>
<span class="quotelev1">&gt;                                        fec0:0:0:ffff::3%1
</span><br>
<span class="quotelev1">&gt;    NetBIOS &#252;ber TCP/IP . . . . . . . : Aktiviert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to change the address to 127.0.0.1 without luck. When I switch
</span><br>
<span class="quotelev1">&gt; from &quot;automatic&quot; to &quot;manual&quot; in the properties menue and start the
</span><br>
<span class="quotelev1">&gt; IP address with 127 a window pops up announcing that an IP address
</span><br>
<span class="quotelev1">&gt; starting with 127 is reserved for the loopback adapter so that I couldn't
</span><br>
<span class="quotelev1">&gt; change the address. How did you manage to get the loopback adapter address
</span><br>
<span class="quotelev1">&gt; 127.0.0.1 or do you live with the message from Open MPI? Thank you very
</span><br>
<span class="quotelev1">&gt; much for a short answer in advance.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20167.php">Andrea Negri: "Re: [OMPI users] some mpi processes &quot;disappear&quot; on a cluster of servers"</a>
<li><strong>Previous message:</strong> <a href="20165.php">Siegmar Gross: "Re: [OMPI users] gcc problem compiling openmpi-1.6.1 on Solaris 10 sparc"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/08/20014.php">Siegmar Gross: "[OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20183.php">Jeff Squyres: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Reply:</strong> <a href="20183.php">Jeff Squyres: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
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
