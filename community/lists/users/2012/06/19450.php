<?
$subject_val = "[OMPI users] problem with sctp.h on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  5 10:11:21 2012" -->
<!-- isoreceived="20120605141121" -->
<!-- sent="Tue, 5 Jun 2012 16:10:39 +0200 (CEST)" -->
<!-- isosent="20120605141039" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with sctp.h on Solaris" -->
<!-- id="201206051410.q55EAdNV000746_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] problem with sctp.h on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-05 10:10:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19451.php">TAY wee-beng: "[OMPI users] MPI and gprof"</a>
<li><strong>Previous message:</strong> <a href="19449.php">Mudassar Majeed: "[OMPI users] Directed to Undirected Graph"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19453.php">TERRY DONTJE: "Re: [OMPI users] problem with sctp.h on Solaris"</a>
<li><strong>Reply:</strong> <a href="19453.php">TERRY DONTJE: "Re: [OMPI users] problem with sctp.h on Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="19478.php">Siegmar Gross: "Re: [OMPI users] problem with sctp.h on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I compiled &quot;openmpi-1.6&quot; on &quot;Solaris 10 sparc&quot; and &quot;Solaris 10 x86&quot;
<br>
with &quot;gcc-4.6.2&quot; and &quot;Sun C 5.12&quot;. Today I searched my log-files for
<br>
&quot;WARNING&quot; and found the following message.
<br>
<p>WARNING: netinet/sctp.h: present but cannot be compiled
<br>
WARNING: netinet/sctp.h:     check for missing prerequisite headers?
<br>
WARNING: netinet/sctp.h: see the Autoconf documentation
<br>
WARNING: netinet/sctp.h:     section &quot;Present But Cannot Be Compiled&quot;
<br>
WARNING: netinet/sctp.h: proceeding with the compiler's result
<br>
WARNING:     ## ------------------------------------------------------ ##
<br>
WARNING:     ## Report this to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ##
<br>
WARNING:     ## ------------------------------------------------------ ##
<br>
<p>Looking in &quot;config.log&quot; showed that some types are undefined.
<br>
<p>tyr openmpi-1.6-SunOS.sparc.64_cc 323 grep sctp config.log
<br>
configure:119568: result: elan, mx, ofud, openib, portals, sctp, sm, tcp, udapl
<br>
configure:125730: checking for MCA component btl:sctp compile mode
<br>
configure:125752: checking --with-sctp value
<br>
configure:125862: checking --with-sctp-libdir value
<br>
configure:125946: checking netinet/sctp.h usability
<br>
&quot;/usr/include/netinet/sctp.h&quot;, line 228:
<br>
&nbsp;&nbsp;incomplete struct/union/enum sockaddr_storage: spc_aaddr
<br>
&quot;/usr/include/netinet/sctp.h&quot;, line 530: syntax error before or at: socklen_t
<br>
&quot;/usr/include/netinet/sctp.h&quot;, line 533: syntax error before or at: socklen_t
<br>
&quot;/usr/include/netinet/sctp.h&quot;, line 537: syntax error before or at: socklen_t
<br>
&quot;/usr/include/netinet/sctp.h&quot;, line 772: syntax error before or at: ipaddr_t
<br>
&quot;/usr/include/netinet/sctp.h&quot;, line 779: syntax error before or at: in6_addr_t
<br>
| #include &lt;netinet/sctp.h&gt;
<br>
...
<br>
<p>The missing types are defined via &lt;netinet/in.h&gt;. In which files must
<br>
I include this header file to avoid the warning? Thank you very much
<br>
for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19451.php">TAY wee-beng: "[OMPI users] MPI and gprof"</a>
<li><strong>Previous message:</strong> <a href="19449.php">Mudassar Majeed: "[OMPI users] Directed to Undirected Graph"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19453.php">TERRY DONTJE: "Re: [OMPI users] problem with sctp.h on Solaris"</a>
<li><strong>Reply:</strong> <a href="19453.php">TERRY DONTJE: "Re: [OMPI users] problem with sctp.h on Solaris"</a>
<li><strong>Maybe reply:</strong> <a href="19478.php">Siegmar Gross: "Re: [OMPI users] problem with sctp.h on Solaris"</a>
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
