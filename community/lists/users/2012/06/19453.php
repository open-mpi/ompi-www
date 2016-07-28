<?
$subject_val = "Re: [OMPI users] problem with sctp.h on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  5 11:57:22 2012" -->
<!-- isoreceived="20120605155722" -->
<!-- sent="Tue, 05 Jun 2012 11:57:22 -0400" -->
<!-- isosent="20120605155722" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with sctp.h on Solaris" -->
<!-- id="4FCE2C62.4020300_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201206051410.q55EAdNV000746_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with sctp.h on Solaris<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-05 11:57:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19454.php">Michael Raymond: "Re: [OMPI users] Directed to Undirected Graph"</a>
<li><strong>Previous message:</strong> <a href="19452.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="19450.php">Siegmar Gross: "[OMPI users] problem with sctp.h on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19478.php">Siegmar Gross: "Re: [OMPI users] problem with sctp.h on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks like a missing check in the sctp configure.m4.  I am working 
<br>
on a patch.
<br>
<p>--td
<br>
<p>On 6/5/2012 10:10 AM, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled &quot;openmpi-1.6&quot; on &quot;Solaris 10 sparc&quot; and &quot;Solaris 10 x86&quot;
</span><br>
<span class="quotelev1">&gt; with &quot;gcc-4.6.2&quot; and &quot;Sun C 5.12&quot;. Today I searched my log-files for
</span><br>
<span class="quotelev1">&gt; &quot;WARNING&quot; and found the following message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING: netinet/sctp.h: present but cannot be compiled
</span><br>
<span class="quotelev1">&gt; WARNING: netinet/sctp.h:     check for missing prerequisite headers?
</span><br>
<span class="quotelev1">&gt; WARNING: netinet/sctp.h: see the Autoconf documentation
</span><br>
<span class="quotelev1">&gt; WARNING: netinet/sctp.h:     section &quot;Present But Cannot Be Compiled&quot;
</span><br>
<span class="quotelev1">&gt; WARNING: netinet/sctp.h: proceeding with the compiler's result
</span><br>
<span class="quotelev1">&gt; WARNING:     ## ------------------------------------------------------ ##
</span><br>
<span class="quotelev1">&gt; WARNING:     ## Report this to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> ##
</span><br>
<span class="quotelev1">&gt; WARNING:     ## ------------------------------------------------------ ##
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking in &quot;config.log&quot; showed that some types are undefined.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr openmpi-1.6-SunOS.sparc.64_cc 323 grep sctp config.log
</span><br>
<span class="quotelev1">&gt; configure:119568: result: elan, mx, ofud, openib, portals, sctp, sm, tcp, udapl
</span><br>
<span class="quotelev1">&gt; configure:125730: checking for MCA component btl:sctp compile mode
</span><br>
<span class="quotelev1">&gt; configure:125752: checking --with-sctp value
</span><br>
<span class="quotelev1">&gt; configure:125862: checking --with-sctp-libdir value
</span><br>
<span class="quotelev1">&gt; configure:125946: checking netinet/sctp.h usability
</span><br>
<span class="quotelev1">&gt; &quot;/usr/include/netinet/sctp.h&quot;, line 228:
</span><br>
<span class="quotelev1">&gt;    incomplete struct/union/enum sockaddr_storage: spc_aaddr
</span><br>
<span class="quotelev1">&gt; &quot;/usr/include/netinet/sctp.h&quot;, line 530: syntax error before or at: socklen_t
</span><br>
<span class="quotelev1">&gt; &quot;/usr/include/netinet/sctp.h&quot;, line 533: syntax error before or at: socklen_t
</span><br>
<span class="quotelev1">&gt; &quot;/usr/include/netinet/sctp.h&quot;, line 537: syntax error before or at: socklen_t
</span><br>
<span class="quotelev1">&gt; &quot;/usr/include/netinet/sctp.h&quot;, line 772: syntax error before or at: ipaddr_t
</span><br>
<span class="quotelev1">&gt; &quot;/usr/include/netinet/sctp.h&quot;, line 779: syntax error before or at: in6_addr_t
</span><br>
<span class="quotelev1">&gt; | #include&lt;netinet/sctp.h&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The missing types are defined via&lt;netinet/in.h&gt;. In which files must
</span><br>
<span class="quotelev1">&gt; I include this header file to avoid the warning? Thank you very much
</span><br>
<span class="quotelev1">&gt; for any help in advance.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19453/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19454.php">Michael Raymond: "Re: [OMPI users] Directed to Undirected Graph"</a>
<li><strong>Previous message:</strong> <a href="19452.php">Edmund Sumbar: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>In reply to:</strong> <a href="19450.php">Siegmar Gross: "[OMPI users] problem with sctp.h on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19478.php">Siegmar Gross: "Re: [OMPI users] problem with sctp.h on Solaris"</a>
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
