<?
$subject_val = "Re: [OMPI users] openmpi over tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 29 19:21:00 2009" -->
<!-- isoreceived="20090130002100" -->
<!-- sent="Thu, 29 Jan 2009 19:20:55 -0500" -->
<!-- isosent="20090130002055" -->
<!-- name="Daniel De Marco" -->
<!-- email="ddm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi over tcp" -->
<!-- id="20090130002055.GA835_at_yakko.bartol.udel.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3F74A247-0A9D-46BB-B0DE-E6F3BB97B821_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi over tcp<br>
<strong>From:</strong> Daniel De Marco (<em>ddm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-29 19:20:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7890.php">Kiril Dichev: "Re: [OMPI users] Issue with PBS Pro"</a>
<li><strong>Previous message:</strong> <a href="7888.php">Jeff Squyres: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>In reply to:</strong> <a href="7888.php">Jeff Squyres: "Re: [OMPI users] openmpi over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7918.php">Jeff Squyres: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7918.php">Jeff Squyres: "Re: [OMPI users] openmpi over tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I put most of the info at:
<br>
<a href="http://www.bartol.udel.edu/~ddm/ompi_debug.tgz">http://www.bartol.udel.edu/~ddm/ompi_debug.tgz</a>
<br>
The tar file contains the config.log, the ifconfig for the two nodes and
<br>
the output of ompi_info --all.
<br>
<p>As I said I was running with:
<br>
mpirun --mca btl tcp,self --prefix /share/apps/openmpi-1.3/gcc_ifort/                                                                                                                                   
<br>
--machinefile machines -np 2 ./osu_latency 
<br>
and I also tried adding -mca btl_tcp_if_include eth0 to the options.
<br>
<p>Thanks for your help.
<br>
Please let me know if you need some other info.
<br>
Daniel.
<br>
<p><p>* Jeff Squyres &lt;jsquyres_at_[hidden]&gt; [01/29/2009 16:30]:
<br>
<span class="quotelev1">&gt; Can you send the full output described here (including all network setup 
</span><br>
<span class="quotelev1">&gt; stuff):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 29, 2009, at 3:18 PM, Daniel De Marco wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Ralph Castain &lt;rhc_at_[hidden]&gt; [01/29/2009 14:27]:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is quite likely that you have IPoIB on your system. In that case, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TCP BTL will pickup that interface and use it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you have a specific interface you want to use, try -mca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_tcp_if_include eth0 (or whatever that interface is). This tell the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TCP
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTL to only use the specified interface, so it will either fail (if that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interface isn't available or doesn't exist) or use only that one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; no, I don't have IPoIB configured. I tried anyway your suggestion and I
</span><br>
<span class="quotelev2">&gt;&gt; got the same results as before. The weird thing is that even if use
</span><br>
<span class="quotelev2">&gt;&gt; 	-mca btl_tcp_if_include eth2
</span><br>
<span class="quotelev2">&gt;&gt; where eth2 doesn't exist I get the same results...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, Daniel.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7890.php">Kiril Dichev: "Re: [OMPI users] Issue with PBS Pro"</a>
<li><strong>Previous message:</strong> <a href="7888.php">Jeff Squyres: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>In reply to:</strong> <a href="7888.php">Jeff Squyres: "Re: [OMPI users] openmpi over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7918.php">Jeff Squyres: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7918.php">Jeff Squyres: "Re: [OMPI users] openmpi over tcp"</a>
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
