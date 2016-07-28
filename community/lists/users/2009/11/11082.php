<?
$subject_val = "Re: [OMPI users] Help: Firewall problems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 05:49:10 2009" -->
<!-- isoreceived="20091106104910" -->
<!-- sent="Fri, 6 Nov 2009 18:49:05 +0800" -->
<!-- isosent="20091106104905" -->
<!-- name="Lee Amy" -->
<!-- email="openlinuxsource_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: Firewall problems" -->
<!-- id="289665360911060249n336d1470j7b0e5660d5a967b4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AEFC00B4-98CE-4B84-81FD-F633EAC45969_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: Firewall problems<br>
<strong>From:</strong> Lee Amy (<em>openlinuxsource_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-06 05:49:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11083.php">Jeff Squyres: "Re: [OMPI users] Help: Firewall problems"</a>
<li><strong>Previous message:</strong> <a href="11081.php">Christoph Rackwitz: "[OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>In reply to:</strong> <a href="11070.php">Jeff Squyres: "Re: [OMPI users] Help: Firewall problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11083.php">Jeff Squyres: "Re: [OMPI users] Help: Firewall problems"</a>
<li><strong>Reply:</strong> <a href="11083.php">Jeff Squyres: "Re: [OMPI users] Help: Firewall problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Nov 6, 2009 at 2:39 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Nov 5, 2009, at 11:28 AM, Lee Amy wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I remembered MPI does not count on TCP/IP but why default iptables
</span><br>
<span class="quotelev2">&gt;&gt; will prevent the MPI programs from running? After I stop iptables then
</span><br>
<span class="quotelev2">&gt;&gt; programs run well. I use Ethernet as connection.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that Open MPI *can* use TCP as an interface for MPI messaging. &#160;It
</span><br>
<span class="quotelev1">&gt; definitely uses TCP for administrative control of MPI jobs, even if TCP is
</span><br>
<span class="quotelev1">&gt; not used for MPI messaging. &#160;Open MPI therefore basically requires the
</span><br>
<span class="quotelev1">&gt; ability to open sockets between all nodes in the job on random TCP ports.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your could probably configure iptables to &quot;trust&quot; all the machines in your
</span><br>
<span class="quotelev1">&gt; cluster (i.e., allow TCP sockets to/from random ports) but disallow most
</span><br>
<span class="quotelev1">&gt; (all?) TCP connections from outside your cluster, if you wanted to...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<p>Thanks. And actually I don't know if I need to disable iptables to run
<br>
MPI programs properly. Obviously from your words Open MPI will use
<br>
random ports so how do I set up in iptables then let trusted machines
<br>
open their random ports?
<br>
<p>Regards,
<br>
<p>Amy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11083.php">Jeff Squyres: "Re: [OMPI users] Help: Firewall problems"</a>
<li><strong>Previous message:</strong> <a href="11081.php">Christoph Rackwitz: "[OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>In reply to:</strong> <a href="11070.php">Jeff Squyres: "Re: [OMPI users] Help: Firewall problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11083.php">Jeff Squyres: "Re: [OMPI users] Help: Firewall problems"</a>
<li><strong>Reply:</strong> <a href="11083.php">Jeff Squyres: "Re: [OMPI users] Help: Firewall problems"</a>
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
