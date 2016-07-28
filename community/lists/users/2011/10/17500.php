<?
$subject_val = "Re: [OMPI users] Private and public IP mixing.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  4 19:54:11 2011" -->
<!-- isoreceived="20111004235411" -->
<!-- sent="Tue, 4 Oct 2011 16:54:00 -0700" -->
<!-- isosent="20111004235400" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Private and public IP mixing." -->
<!-- id="3BB80DBE-7DC9-4F8C-8B40-62DDCE21163B_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAD4g32RBSPjGBfo2Gu9v6ffi=W_ojjBSgPzz1rKq4+0L0qPn+g_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-04 19:54:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17501.php">Mickaël CANÉVET: "[OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>Previous message:</strong> <a href="17499.php">.-=Kiwi=-.: "[OMPI users] Private and public IP mixing."</a>
<li><strong>In reply to:</strong> <a href="17499.php">.-=Kiwi=-.: "[OMPI users] Private and public IP mixing."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17510.php">Jeff Squyres: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Reply:</strong> <a href="17510.php">Jeff Squyres: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Reply:</strong> <a href="17511.php">.-=Kiwi=-.: "Re: [OMPI users] Private and public IP mixing."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OMPI always tries to use the lowest numbered address first - just a natural ordering. You need to tell it to use just the public ones for this topology. Use the oob_tcp and btl_tcp parameters to do this. See &quot;ompi_info --param oob tcp&quot; and &quot;ompi_info --param btl tcp&quot; for the exact syntax.
<br>
<p><p>Sent from my iPad
<br>
<p>On Oct 4, 2011, at 10:21 AM, &quot;(.-=Kiwi=-.)&quot; &lt;heffeque_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We are constructing a set of computers with Open MPI and there's a small problem with mixing public and private IPs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We aren't sure about what's causing the problem or how to solve it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The files are shared thanks to NFS and we have a couple computers with private IPs and public IPs that we want them to send MPI work to some machines that have public IPs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm going to try to describe with example IPs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Computer 1 sees itself as eth0:  172...2  but has a public IP assigned:  210...2
</span><br>
<span class="quotelev1">&gt; Computer 2 sees itself as eth0:  172...3  but has a public IP assigned:  210...3
</span><br>
<span class="quotelev1">&gt; Computers outside the subnet directly have public IPs assigned:  210...100+
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The computers outside see Computer 1 and 2 only with 210... they can't see the 172... internal IPs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If an outside computer launches mpirun to Computer 1, it works ok.
</span><br>
<span class="quotelev1">&gt; If Computer 1 tries to launch mpirun to Computer 2 (with 172...) it also works ok (not with 210... because they don't know that that's their public IP, but that's not an issue).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem comes when Computer 1 or 2 try to launch mpirun to outside computers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We tried to check out what was happening and installed wireshark on an outside computer and it seems that the ssh part works ok (the ssh talk between 210...2 and 210...101 is ok), but after that the outside computer tries to send a TCP SYN package to 172...2 instead of 210...2 and the rest of the packets onward the same.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to solve this problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've read this ( <a href="http://www.open-mpi.org/community/lists/users/2009/11/11184.php">http://www.open-mpi.org/community/lists/users/2009/11/11184.php</a> ) but I'm not really sure what he's doing there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have the option of plugging Computer 1 and Computer 2 directly to the switch that the outside computers are on, but we'd rather not because we'd prefer the computers to stay on the private network, but if there's no other way, I guess we can.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can it be done without having to change the network topology?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17500/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17501.php">Mickaël CANÉVET: "[OMPI users] OpenMPI with CPU of different speed."</a>
<li><strong>Previous message:</strong> <a href="17499.php">.-=Kiwi=-.: "[OMPI users] Private and public IP mixing."</a>
<li><strong>In reply to:</strong> <a href="17499.php">.-=Kiwi=-.: "[OMPI users] Private and public IP mixing."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17510.php">Jeff Squyres: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Reply:</strong> <a href="17510.php">Jeff Squyres: "Re: [OMPI users] Private and public IP mixing."</a>
<li><strong>Reply:</strong> <a href="17511.php">.-=Kiwi=-.: "Re: [OMPI users] Private and public IP mixing."</a>
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
