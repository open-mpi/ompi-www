<?
$subject_val = "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 06:59:39 2016" -->
<!-- isoreceived="20160129115939" -->
<!-- sent="Fri, 29 Jan 2016 20:59:38 +0900" -->
<!-- isosent="20160129115938" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions" -->
<!-- id="CAAkFZ5v8UXq25cWx22W4Lf9x1E4B=61bTCHQEbtTqpANF3MuPw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5sVBs80Lmm+5iaZuqDDWRWyX8oc_uZmbN8L3vTgp3yA7A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-29 06:59:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28416.php">Diego Avesani: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="28414.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>In reply to:</strong> <a href="28412.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/02/28423.php">William Law: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/02/28423.php">William Law: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
on second thought, is there any chance your sysadmin removed the old
<br>
libslurm.so.x but kept the old libpmix.so.y ?
<br>
in this case, the real issue would be hidden
<br>
your sysadmin &quot;broke&quot; the old libpmi, but you want to use the new one
<br>
indeed.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, January 29, 2016, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is openmpi linked with a static libpmi.a that requires a dynamic libslurm ?
</span><br>
<span class="quotelev1">&gt; that can be checked with ldd mca_ess_pmi.so
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btw, do slurm folks increase the libpmi.so version each time slurm is
</span><br>
<span class="quotelev1">&gt; upgraded ?
</span><br>
<span class="quotelev1">&gt; that could be a part of the issue ...
</span><br>
<span class="quotelev1">&gt; but if they increase lib version because of abi changes, it might be a bad
</span><br>
<span class="quotelev1">&gt; idea to open libxxx.so instead of libxxx.so.y
</span><br>
<span class="quotelev1">&gt; generally speaking, libxxx.so.y is provided by libxxx package, and
</span><br>
<span class="quotelev1">&gt; libxxx.so is provided by libxxx-devel package, which means it might not be
</span><br>
<span class="quotelev1">&gt; available on compute nodes.
</span><br>
<span class="quotelev1">&gt; we could also dlopen libxxx instead of linking with it, and have the
</span><br>
<span class="quotelev1">&gt; sysadmin configure openmpi so it finds the right lib (this approach is used
</span><br>
<span class="quotelev1">&gt; by a prominent vendor, and has other pros but also cons)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Friday, January 29, 2016, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It makes sense - but isn&#226;&#128;&#153;t it slurm that is linking libpmi against
</span><br>
<span class="quotelev2">&gt;&gt; libslurm? I don&#226;&#128;&#153;t think we are making that connection, so it would be a
</span><br>
<span class="quotelev2">&gt;&gt; slurm issue to change it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 28, 2016, at 10:12 PM, William Law &lt;willthelaw_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our group can't find anyway to do this and it'd be helpful.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We use slurm and keep upgrading the slurm environment.  OpenMPI bombs out
</span><br>
<span class="quotelev2">&gt;&gt; against PMI each time the libslurm stuff changes, which seems to be fairly
</span><br>
<span class="quotelev2">&gt;&gt; regularly.  Is there a way to compile against slurm but insulate ourselves
</span><br>
<span class="quotelev2">&gt;&gt; from the libslurm chaos?  Obvious will ask the slurm folks too.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [*wlaw*@some-node /scratch/users/wlaw/imb/src]$ mpirun -n 2 --mca
</span><br>
<span class="quotelev2">&gt;&gt; grpcomm ^pmi ./IMB-MPI1
</span><br>
<span class="quotelev2">&gt;&gt; [some-node.local:42584] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /share/sw/free/openmpi/1.6.5/intel/13sp1up1/lib/openmpi/mca_ess_pmi:
</span><br>
<span class="quotelev2">&gt;&gt; libslurm.so.28: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [some-node.local:42585] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /share/sw/free/openmpi/1.6.5/intel/13sp1up1/lib/openmpi/mca_pubsub_pmi:
</span><br>
<span class="quotelev2">&gt;&gt; libslurm.so.28: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [some-node.local:42586] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /share/sw/free/openmpi/1.6.5/intel/13sp1up1/lib/openmpi/mca_pubsub_pmi:
</span><br>
<span class="quotelev2">&gt;&gt; libslurm.so.28: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; (ignored)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (sent it via the wrong email so it bounced..... heh)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Upon further investigation it seems like the most appropriate thing would
</span><br>
<span class="quotelev2">&gt;&gt; be to point it at compile time to libslurm.so instead of libslurm.so.xx;
</span><br>
<span class="quotelev2">&gt;&gt; does that make sense?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Will
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28408.php">http://www.open-mpi.org/community/lists/users/2016/01/28408.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28415/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28416.php">Diego Avesani: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="28414.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>In reply to:</strong> <a href="28412.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/02/28423.php">William Law: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2016/02/28423.php">William Law: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
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
