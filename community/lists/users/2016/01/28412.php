<?
$subject_val = "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 29 06:11:26 2016" -->
<!-- isoreceived="20160129111126" -->
<!-- sent="Fri, 29 Jan 2016 20:11:25 +0900" -->
<!-- isosent="20160129111125" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions" -->
<!-- id="CAAkFZ5sVBs80Lmm+5iaZuqDDWRWyX8oc_uZmbN8L3vTgp3yA7A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E4A9B99A-03B5-4A01-B4ED-960EEA37A968_at_open-mpi.org" -->
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
<strong>Date:</strong> 2016-01-29 06:11:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28413.php">Diego Avesani: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="28411.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>In reply to:</strong> <a href="28409.php">Ralph Castain: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28415.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<li><strong>Reply:</strong> <a href="28415.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is openmpi linked with a static libpmi.a that requires a dynamic libslurm ?
<br>
that can be checked with ldd mca_ess_pmi.so
<br>
<p>btw, do slurm folks increase the libpmi.so version each time slurm is
<br>
upgraded ?
<br>
that could be a part of the issue ...
<br>
but if they increase lib version because of abi changes, it might be a bad
<br>
idea to open libxxx.so instead of libxxx.so.y
<br>
generally speaking, libxxx.so.y is provided by libxxx package, and
<br>
libxxx.so is provided by libxxx-devel package, which means it might not be
<br>
available on compute nodes.
<br>
we could also dlopen libxxx instead of linking with it, and have the
<br>
sysadmin configure openmpi so it finds the right lib (this approach is used
<br>
by a prominent vendor, and has other pros but also cons)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Friday, January 29, 2016, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It makes sense - but isn&#226;&#128;&#153;t it slurm that is linking libpmi against
</span><br>
<span class="quotelev1">&gt; libslurm? I don&#226;&#128;&#153;t think we are making that connection, so it would be a
</span><br>
<span class="quotelev1">&gt; slurm issue to change it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 28, 2016, at 10:12 PM, William Law &lt;willthelaw_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','willthelaw_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our group can't find anyway to do this and it'd be helpful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We use slurm and keep upgrading the slurm environment.  OpenMPI bombs out
</span><br>
<span class="quotelev1">&gt; against PMI each time the libslurm stuff changes, which seems to be fairly
</span><br>
<span class="quotelev1">&gt; regularly.  Is there a way to compile against slurm but insulate ourselves
</span><br>
<span class="quotelev1">&gt; from the libslurm chaos?  Obvious will ask the slurm folks too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [*wlaw*@some-node /scratch/users/wlaw/imb/src]$ mpirun -n 2 --mca grpcomm
</span><br>
<span class="quotelev1">&gt; ^pmi ./IMB-MPI1
</span><br>
<span class="quotelev1">&gt; [some-node.local:42584] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /share/sw/free/openmpi/1.6.5/intel/13sp1up1/lib/openmpi/mca_ess_pmi:
</span><br>
<span class="quotelev1">&gt; libslurm.so.28: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [some-node.local:42585] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /share/sw/free/openmpi/1.6.5/intel/13sp1up1/lib/openmpi/mca_pubsub_pmi:
</span><br>
<span class="quotelev1">&gt; libslurm.so.28: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt; [some-node.local:42586] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; /share/sw/free/openmpi/1.6.5/intel/13sp1up1/lib/openmpi/mca_pubsub_pmi:
</span><br>
<span class="quotelev1">&gt; libslurm.so.28: cannot open shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (sent it via the wrong email so it bounced..... heh)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Upon further investigation it seems like the most appropriate thing would
</span><br>
<span class="quotelev1">&gt; be to point it at compile time to libslurm.so instead of libslurm.so.xx;
</span><br>
<span class="quotelev1">&gt; does that make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28408.php">http://www.open-mpi.org/community/lists/users/2016/01/28408.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28412/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28413.php">Diego Avesani: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>Previous message:</strong> <a href="28411.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OpenMPI - intel MPI mpi_waitall"</a>
<li><strong>In reply to:</strong> <a href="28409.php">Ralph Castain: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28415.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
<li><strong>Reply:</strong> <a href="28415.php">Gilles Gouaillardet: "Re: [OMPI users] OpenMPI against multiple, evolving SLURM versions"</a>
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
