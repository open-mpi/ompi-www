<?
$subject_val = "Re: [OMPI users] Private and public IP mixing.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  5 12:13:56 2011" -->
<!-- isoreceived="20111005161356" -->
<!-- sent="Wed, 5 Oct 2011 12:13:51 -0400" -->
<!-- isosent="20111005161351" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Private and public IP mixing." -->
<!-- id="03C51935-AF99-4344-A6A5-745245A4E1C6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAD4g32TGqvXFPPPbAFuZxfmyG4s5gL+w5XaR-eipz02zynV-uA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-05 12:13:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17513.php">.-=Kiwi=-.: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Previous message:</strong> <a href="17511.php">.-=Kiwi=-.: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>In reply to:</strong> <a href="17511.php">.-=Kiwi=-.: "Re: [OMPI users] Private and public IP mixing."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17513.php">.-=Kiwi=-.: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Reply:</strong> <a href="17513.php">.-=Kiwi=-.: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Reply:</strong> <a href="17515.php">George Bosilca: "Re: [OMPI users] Private and public IP mixing."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check out this FAQ entry:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
<br>
<p>Note that there are btl_tcp_if_include / btl_tcp_if_exclude: these control MPI-level communications.  There's also oob_tcp_if_include / oob_tcp_if_exclude (that take the same kinds of values as btl_tcp_if_include/exclude) that control OMPI's run-time environment communications.
<br>
<p><p>On Oct 5, 2011, at 12:01 PM, (.-=Kiwi=-.) wrote:
<br>
<p><span class="quotelev1">&gt; &quot;OMPI always tries to use the lowest numbered address first - just a natural ordering.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That doesn't seem to be the reason. We changed the private IPs to 212... (a higher number than the public 210... IPs) and still MPI tries to go to 212 afterwards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We're reading the oob_tcp and btl_tcp parameters but we're not sure how to do it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;But if hello world doesn't even run, then try running with &quot;mpirun --mca oob_tcp_if_include &lt;the interface(s) you want to use&gt; ...&quot;, per Ralph's suggestion.  If *that* doesn't work, also add &quot;--mca btl_tcp_if_include ...&quot; as well.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We tried doing from Computer 1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orterun -mca oob_tcp_debug 1 -np 1 -host 212...3 ifconfig
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and everything was ok
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We tried doing from Computer 1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orterun -mca oob_tcp_debug 1 -np 1 -host 210...101 ifconfig
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and it says:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are no allocated resources for the application 
</span><br>
<span class="quotelev1">&gt;   ifconfig
</span><br>
<span class="quotelev1">&gt; that match the requested mapping:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Verify that you have mapped the allocated resources properly using the 
</span><br>
<span class="quotelev1">&gt; --host or --hostfile specification.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting. [...]  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any other ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Oct 5, 2011 at 1:54 AM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; OMPI always tries to use the lowest numbered address first - just a natural ordering. You need to tell it to use just the public ones for this topology. Use the oob_tcp and btl_tcp parameters to do this. See &quot;ompi_info --param oob tcp&quot; and &quot;ompi_info --param btl tcp&quot; for the exact syntax.
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
<span class="quotelev2">&gt;&gt; We are constructing a set of computers with Open MPI and there's a small problem with mixing public and private IPs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We aren't sure about what's causing the problem or how to solve it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The files are shared thanks to NFS and we have a couple computers with private IPs and public IPs that we want them to send MPI work to some machines that have public IPs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm going to try to describe with example IPs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Computer 1 sees itself as eth0:  172...2  but has a public IP assigned:  210...2
</span><br>
<span class="quotelev2">&gt;&gt; Computer 2 sees itself as eth0:  172...3  but has a public IP assigned:  210...3
</span><br>
<span class="quotelev2">&gt;&gt; Computers outside the subnet directly have public IPs assigned:  210...100+
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The computers outside see Computer 1 and 2 only with 210... they can't see the 172... internal IPs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If an outside computer launches mpirun to Computer 1, it works ok.
</span><br>
<span class="quotelev2">&gt;&gt; If Computer 1 tries to launch mpirun to Computer 2 (with 172...) it also works ok (not with 210... because they don't know that that's their public IP, but that's not an issue).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem comes when Computer 1 or 2 try to launch mpirun to outside computers.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We tried to check out what was happening and installed wireshark on an outside computer and it seems that the ssh part works ok (the ssh talk between 210...2 and 210...101 is ok), but after that the outside computer tries to send a TCP SYN package to 172...2 instead of 210...2 and the rest of the packets onward the same.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to solve this problem?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've read this ( <a href="http://www.open-mpi.org/community/lists/users/2009/11/11184.php">http://www.open-mpi.org/community/lists/users/2009/11/11184.php</a> ) but I'm not really sure what he's doing there.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have the option of plugging Computer 1 and Computer 2 directly to the switch that the outside computers are on, but we'd rather not because we'd prefer the computers to stay on the private network, but if there's no other way, I guess we can.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can it be done without having to change the network topology?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17513.php">.-=Kiwi=-.: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Previous message:</strong> <a href="17511.php">.-=Kiwi=-.: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>In reply to:</strong> <a href="17511.php">.-=Kiwi=-.: "Re: [OMPI users] Private and public IP mixing."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17513.php">.-=Kiwi=-.: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Reply:</strong> <a href="17513.php">.-=Kiwi=-.: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Reply:</strong> <a href="17515.php">George Bosilca: "Re: [OMPI users] Private and public IP mixing."</a>
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
