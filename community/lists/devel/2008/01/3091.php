<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 09:38:10 2008" -->
<!-- isoreceived="20080130143810" -->
<!-- sent="Wed, 30 Jan 2008 15:38:00 +0100 (CET)" -->
<!-- isosent="20080130143800" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307" -->
<!-- id="Pine.LNX.4.64.0801301231230.5953_at_kenzo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080130081703.GO11368_at_ltw.loris.tv" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307<br>
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-30 09:38:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3092.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Previous message:</strong> <a href="3090.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>In reply to:</strong> <a href="3087.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3094.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Reply:</strong> <a href="3094.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 30 Jan 2008, Adrian Knoth wrote:
<br>
<p><span class="quotelev1">&gt; let me point out that the assumption &quot;One interface, one address&quot; 
</span><br>
<span class="quotelev1">&gt; isn't true.
</span><br>
<p>Strictly speaking when configuring one address to one interface:
<br>
<p>For Linux, &quot;one interface, one address&quot; isn't true; for Solaris and 
<br>
other Unices it is. The standards allow either of &quot;assign addresses to 
<br>
interfaces&quot; (Solaris way) and &quot;assign addresses to hosts&quot; (Linux way) 
<br>
to be used; this is a decision of the kernel network stack writers and 
<br>
can't be changed, however there are ways to configure the Linux stack 
<br>
to behave similar to the Solaris one from this point of view by 
<br>
limiting the ARP behaviour. The decision to assign addresses to hosts 
<br>
in Linux was made such that there is a better chance of reaching the 
<br>
host in case of misconfiguration or network problems. Indeed, even if 
<br>
an interface is down (f.e. cable unplugged or 'ifconfig ethX down'), 
<br>
the address is reachable via other interfaces, as a new ARP 
<br>
association is made between the IP address and the MAC address of the 
<br>
interface which is used.
<br>
<p><span class="quotelev1">&gt; As mentioned earlier: it's very common to have multiple addresses per
</span><br>
<span class="quotelev1">&gt; interface
</span><br>
<p>That's the other case: an interface could have several addresses 
<br>
configured for it, f.e. via repeated 'ip add ... dev ethX', but this 
<br>
just adds to the number of addresses assigned to the host.
<br>
<p>The results is that, with the default Linux kernel settings, there is 
<br>
no way to tell which way a connection will take in a multi-rail TCP/IP 
<br>
setup. Even more, when the ARP cache expires and a new ARP request is 
<br>
made, the answer (MAC address) from the target/destination could be 
<br>
different, so that from that moment on the connection could switch to 
<br>
a different media. I've tested this recently with the RHEL5 kernels 
<br>
with one gigabit and one Myri-10G connection, seeing a TCP stream 
<br>
switching randomly between the gigabit and the Myri-10G connection.
<br>
<p><pre>
-- 
Bogdan Costescu
IWR, University of Heidelberg, INF 368, D-69120 Heidelberg, Germany
Phone: +49 6221 54 8869/8240, Fax: +49 6221 54 8868/8850
E-mail: bogdan.costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3092.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Previous message:</strong> <a href="3090.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>In reply to:</strong> <a href="3087.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3094.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
<li><strong>Reply:</strong> <a href="3094.php">Adrian Knoth: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17307"</a>
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
