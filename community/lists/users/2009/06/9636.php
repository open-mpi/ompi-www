<?
$subject_val = "Re: [OMPI users] mpirun fails on the host";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 18 21:12:25 2009" -->
<!-- isoreceived="20090619011225" -->
<!-- sent="Thu, 18 Jun 2009 19:12:20 -0600" -->
<!-- isosent="20090619011220" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun fails on the host" -->
<!-- id="71d2d8cc0906181812s5af5fbafnb62a471b319e5bb2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c3fd201b0906181449u26c5ee13mf3821c3b6580c357_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun fails on the host<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-18 21:12:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9637.php">Honest Guvnor: "Re: [OMPI users] mpirun fails on the host"</a>
<li><strong>Previous message:</strong> <a href="9635.php">Kritiraj Sajadah: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>In reply to:</strong> <a href="9634.php">Honest Guvnor: "[OMPI users] mpirun fails on the host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9637.php">Honest Guvnor: "Re: [OMPI users] mpirun fails on the host"</a>
<li><strong>Reply:</strong> <a href="9637.php">Honest Guvnor: "Re: [OMPI users] mpirun fails on the host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Add --debug-devel to your cmd line and you'll get a bunch of diagnostic
<br>
info. Did you configure --enable-debug? If so, then additional debug can be
<br>
obtained - can let you know how to get it, if necessary.
<br>
Ralph
<br>
<p><p>On Thu, Jun 18, 2009 at 3:49 PM, Honest Guvnor
<br>
&lt;honestguvnor_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; OpenMPI 1.2.7, ethernet, Centos 5.3 i386 fresh install on host and nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Despite ssh and pdsh working, mpirun hangs when launching a program
</span><br>
<span class="quotelev1">&gt; from the host to a node:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cluster_at_hankel ~]$ ssh n06 hostname
</span><br>
<span class="quotelev1">&gt; n06
</span><br>
<span class="quotelev1">&gt; [cluster_at_hankel ~]$ pdsh -w n06 hostname
</span><br>
<span class="quotelev1">&gt; n06: n06
</span><br>
<span class="quotelev1">&gt; [cluster_at_hankel ~]$ mpirun -np 1 --host n06 hostname
</span><br>
<span class="quotelev1">&gt; [HANGS]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, mpirun works fine in reverse:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cluster_at_n06 ~]$ mpirun -np 1 --host hankel date
</span><br>
<span class="quotelev1">&gt; Thu Jun 18 22:53:27 CEST 2009
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and from node to node. Paths to bin and lib seem OK:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cluster_at_hankel ~]$ printenv PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/usr/lib/openmpi/1.2.7-gcc/bin:/home/cluster/bin
</span><br>
<span class="quotelev1">&gt; [cluster_at_hankel ~]$ printenv LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; :/usr/lib/openmpi/1.2.7-gcc/lib
</span><br>
<span class="quotelev1">&gt; [cluster_at_hankel ~]$ ssh n06 printenv PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/usr/lib/openmpi/1.2.7-gcc/bin
</span><br>
<span class="quotelev1">&gt; [cluster_at_hankel ~]$ ssh n06 printenv LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; :/usr/lib/openmpi/1.2.7-gcc/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are new to openmpi but checked a few mca parameters and turned on a
</span><br>
<span class="quotelev1">&gt; diagnostic flag or two but without coming up with much. The nodes do
</span><br>
<span class="quotelev1">&gt; not have access to the hosts external network and we half convinced
</span><br>
<span class="quotelev1">&gt; ourselves this was the problem because of mentions in the output with
</span><br>
<span class="quotelev1">&gt; the -d flag but:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [cluster_at_hankel ~]$ mpirun --mca btl tcp,self --mca btl_tcp_if_exclude
</span><br>
<span class="quotelev1">&gt; lo,eth0 --mca oob_tcp_if_exclude lo,eth0 -np 1 --host n06 hostname
</span><br>
<span class="quotelev1">&gt; [STILL HANGS]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where eth0 is the external network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Suggestions gratefully received on how we can get openmpi to report
</span><br>
<span class="quotelev1">&gt; what has failed or where to poke and prod further?
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9636/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9637.php">Honest Guvnor: "Re: [OMPI users] mpirun fails on the host"</a>
<li><strong>Previous message:</strong> <a href="9635.php">Kritiraj Sajadah: "Re: [OMPI users] vfs_write returned -14"</a>
<li><strong>In reply to:</strong> <a href="9634.php">Honest Guvnor: "[OMPI users] mpirun fails on the host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9637.php">Honest Guvnor: "Re: [OMPI users] mpirun fails on the host"</a>
<li><strong>Reply:</strong> <a href="9637.php">Honest Guvnor: "Re: [OMPI users] mpirun fails on the host"</a>
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
