<?
$subject_val = "Re: [OMPI users] Private and public IP mixing.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  5 12:02:09 2011" -->
<!-- isoreceived="20111005160209" -->
<!-- sent="Wed, 5 Oct 2011 18:01:44 +0200" -->
<!-- isosent="20111005160144" -->
<!-- name=".-=Kiwi=-." -->
<!-- email="heffeque_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Private and public IP mixing." -->
<!-- id="CAD4g32TGqvXFPPPbAFuZxfmyG4s5gL+w5XaR-eipz02zynV-uA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="3BB80DBE-7DC9-4F8C-8B40-62DDCE21163B_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Private and public IP mixing.<br>
<strong>From:</strong> .-=Kiwi=-. (<em>heffeque_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-05 12:01:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17512.php">Jeff Squyres: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Previous message:</strong> <a href="17510.php">Jeff Squyres: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>In reply to:</strong> <a href="17500.php">Ralph Castain: "Re: [OMPI users] Private and public IP mixing."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17512.php">Jeff Squyres: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Reply:</strong> <a href="17512.php">Jeff Squyres: "Re: [OMPI users] Private and public IP mixing."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;OMPI always tries to use the lowest numbered address first - just a natural
<br>
ordering.&quot;
<br>
<p>That doesn't seem to be the reason. We changed the private IPs to 212... (a
<br>
higher number than the public 210... IPs) and still MPI tries to go to 212
<br>
afterwards.
<br>
<p>We're reading the oob_tcp and btl_tcp parameters but we're not sure how to
<br>
do it.
<br>
<p>&quot;But if hello world doesn't even run, then try running with &quot;mpirun --mca
<br>
oob_tcp_if_include &lt;the interface(s) you want to use&gt; ...&quot;, per Ralph's
<br>
suggestion.  If *that* doesn't work, also add &quot;--mca btl_tcp_if_include ...&quot;
<br>
as well.&quot;
<br>
<p>We tried doing from Computer 1:
<br>
<p>orterun -mca oob_tcp_debug 1 -np 1 -host 212...3 ifconfig
<br>
<p>and everything was ok
<br>
<p>We tried doing from Computer 1:
<br>
<p>orterun -mca oob_tcp_debug 1 -np 1 -host 210...101 ifconfig
<br>
<p>and it says:
<br>
<p>There are no allocated resources for the application
<br>
&nbsp;&nbsp;ifconfig
<br>
that match the requested mapping:
<br>
<p><p>Verify that you have mapped the allocated resources properly using the
<br>
--host or --hostfile specification.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
launch so we are aborting. [...]
<br>
<p>Any other ideas?
<br>
<p><p>On Wed, Oct 5, 2011 at 1:54 AM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; OMPI always tries to use the lowest numbered address first - just a natural
</span><br>
<span class="quotelev1">&gt; ordering. You need to tell it to use just the public ones for this topology.
</span><br>
<span class="quotelev1">&gt; Use the oob_tcp and btl_tcp parameters to do this. See &quot;ompi_info --param
</span><br>
<span class="quotelev1">&gt; oob tcp&quot; and &quot;ompi_info --param btl tcp&quot; for the exact syntax.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my iPad
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 4, 2011, at 10:21 AM, &quot;(.-=Kiwi=-.)&quot; &lt;heffeque_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are constructing a set of computers with Open MPI and there's a small
</span><br>
<span class="quotelev1">&gt; problem with mixing public and private IPs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We aren't sure about what's causing the problem or how to solve it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The files are shared thanks to NFS and we have a couple computers with
</span><br>
<span class="quotelev1">&gt; private IPs and public IPs that we want them to send MPI work to some
</span><br>
<span class="quotelev1">&gt; machines that have public IPs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm going to try to describe with example IPs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Computer 1 sees itself as eth0:  172...2  but has a public IP assigned:
</span><br>
<span class="quotelev1">&gt; 210...2
</span><br>
<span class="quotelev1">&gt; Computer 2 sees itself as eth0:  172...3  but has a public IP assigned:
</span><br>
<span class="quotelev1">&gt; 210...3
</span><br>
<span class="quotelev1">&gt; Computers outside the subnet directly have public IPs assigned:  210...100+
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The computers outside see Computer 1 and 2 only with 210... they can't see
</span><br>
<span class="quotelev1">&gt; the 172... internal IPs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If an outside computer launches mpirun to Computer 1, it works ok.
</span><br>
<span class="quotelev1">&gt; If Computer 1 tries to launch mpirun to Computer 2 (with 172...) it also
</span><br>
<span class="quotelev1">&gt; works ok (not with 210... because they don't know that that's their public
</span><br>
<span class="quotelev1">&gt; IP, but that's not an issue).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem comes when Computer 1 or 2 try to launch mpirun to outside
</span><br>
<span class="quotelev1">&gt; computers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We tried to check out what was happening and installed wireshark on an
</span><br>
<span class="quotelev1">&gt; outside computer and it seems that the ssh part works ok (the ssh talk
</span><br>
<span class="quotelev1">&gt; between 210...2 and 210...101 is ok), but after that the outside computer
</span><br>
<span class="quotelev1">&gt; tries to send a TCP SYN package to 172...2 instead of 210...2 and the rest
</span><br>
<span class="quotelev1">&gt; of the packets onward the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way to solve this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've read this (
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/community/lists/users/2009/11/11184.php">http://www.open-mpi.org/community/lists/users/2009/11/11184.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/11/11184.php">http://www.open-mpi.org/community/lists/users/2009/11/11184.php</a> ) but I'm
</span><br>
<span class="quotelev1">&gt; not really sure what he's doing there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have the option of plugging Computer 1 and Computer 2 directly to the
</span><br>
<span class="quotelev1">&gt; switch that the outside computers are on, but we'd rather not because we'd
</span><br>
<span class="quotelev1">&gt; prefer the computers to stay on the private network, but if there's no other
</span><br>
<span class="quotelev1">&gt; way, I guess we can.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can it be done without having to change the network topology?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17511/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17512.php">Jeff Squyres: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Previous message:</strong> <a href="17510.php">Jeff Squyres: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>In reply to:</strong> <a href="17500.php">Ralph Castain: "Re: [OMPI users] Private and public IP mixing."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17512.php">Jeff Squyres: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Reply:</strong> <a href="17512.php">Jeff Squyres: "Re: [OMPI users] Private and public IP mixing."</a>
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
