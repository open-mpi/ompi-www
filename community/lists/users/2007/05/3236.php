<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 10 13:25:57 2007" -->
<!-- isoreceived="20070510172557" -->
<!-- sent="Thu, 10 May 2007 12:25:53 -0500" -->
<!-- isosent="20070510172553" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="[OMPI users] newbie question" -->
<!-- id="1178817953.1519.81.camel_at_stevo-desktop" -->
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
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-10 13:25:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3237.php">Tim Prins: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<li><strong>Previous message:</strong> <a href="3235.php">Laurent Nguyen: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3238.php">Jeff Squyres: "Re: [OMPI users] newbie question"</a>
<li><strong>Reply:</strong> <a href="3238.php">Jeff Squyres: "Re: [OMPI users] newbie question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to run a job specifically over tcp and the eth1 interface.
<br>
It seems to be barfing on trying to listen via ipv6.  I don't want ipv6.
<br>
How can I disable it?
<br>
<p>Here's my mpirun line:
<br>
<p>[root_at_vic12-10g ~]# mpirun --n 2 --host vic12,vic20 --mca btl self,tcp -mca btl_tcp_if_include eth1 /root/IMB_2.3/src/IMB-MPI1 sendrecv
<br>
[vic12][0,1,0][btl_tcp_component.c:489:mca_btl_tcp_component_create_listen] socket() failed: Address family not supported by protocol (97)
<br>
[vic12-10g:15771] mca_btl_tcp_component: IPv6 listening socket failed
<br>
[vic20][0,1,1][btl_tcp_component.c:489:mca_btl_tcp_component_create_listen] socket() failed: Address family not supported by protocol (97)
<br>
[vic20-10g:23977] mca_btl_tcp_component: IPv6 listening socket failed
<br>
<p><p>Thanks,
<br>
<p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3237.php">Tim Prins: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<li><strong>Previous message:</strong> <a href="3235.php">Laurent Nguyen: "Re: [OMPI users] OpenMPI 1.2.1: cannot install on IBM SP4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3238.php">Jeff Squyres: "Re: [OMPI users] newbie question"</a>
<li><strong>Reply:</strong> <a href="3238.php">Jeff Squyres: "Re: [OMPI users] newbie question"</a>
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
