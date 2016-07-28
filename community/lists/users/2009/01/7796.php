<?
$subject_val = "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 09:28:20 2009" -->
<!-- isoreceived="20090123142820" -->
<!-- sent="Fri, 23 Jan 2009 19:58:15 +0530" -->
<!-- isosent="20090123142815" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cluster with IB hosts and Ethernet hosts" -->
<!-- id="cb60cbc40901230628y78e3bbf4o57c9f7b5814f7d8f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1019692B-5EAF-4A52-A1C2-918ADAF236E9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cluster with IB hosts and Ethernet hosts<br>
<strong>From:</strong> Sangamesh B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 09:28:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7797.php">Jeff Squyres: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<li><strong>Previous message:</strong> <a href="7795.php">Igor Kozin: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="7784.php">Jeff Squyres: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7800.php">Sangamesh B: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<li><strong>Reply:</strong> <a href="7800.php">Sangamesh B: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jan 23, 2009 at 5:41 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Jan 22, 2009, at 11:26 PM, Sangamesh B wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   We''ve a cluster with 23 nodes connected to IB switch and 8 nodes
</span><br>
<span class="quotelev2">&gt;&gt; have connected to ethernet switch. Master node is also connected to IB
</span><br>
<span class="quotelev2">&gt;&gt; switch. SGE(with tight integration, -pe orte)  is used for
</span><br>
<span class="quotelev2">&gt;&gt; parallel/serial job submission.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI-1.3 is installed on master node with IB support
</span><br>
<span class="quotelev2">&gt;&gt; (--with-openib=/usr). The same folder is copied to the remaining 23 IB
</span><br>
<span class="quotelev2">&gt;&gt; nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now what shall I do for remaining 8 ethernet nodes:
</span><br>
<span class="quotelev2">&gt;&gt; (1) Copy the same folder(IB) to these nodes
</span><br>
<span class="quotelev2">&gt;&gt; (2) Install Open MPI on one of the 8 eight ethernet nodes. Copy the
</span><br>
<span class="quotelev2">&gt;&gt; same to 7 nodes.
</span><br>
<span class="quotelev2">&gt;&gt; (3) Install an ethernet version of Open MPI on master node and copy to 8
</span><br>
<span class="quotelev2">&gt;&gt; nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Either 1 or 2 is your best bet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have OFED installed on all nodes (either explicitly, or included in
</span><br>
<span class="quotelev1">&gt; your Linux distro)?
</span><br>
No
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, I believe that at least some users with configurations like this
</span><br>
<span class="quotelev1">&gt; install OMPI with OFED support (--with-openib=/usr, as you mentioned above)
</span><br>
<span class="quotelev1">&gt; on all nodes.  OMPI will notice that there is no OpenFabrics-capable
</span><br>
<span class="quotelev1">&gt; hardware on the ethernet-only nodes and will simply not use the openib BTL
</span><br>
<span class="quotelev1">&gt; plugin.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that OMPI v1.3 got better about being silent about the lack of
</span><br>
<span class="quotelev1">&gt; OpenFabrics devices when the openib BTL is present (OMPI v1.2 issued a
</span><br>
<span class="quotelev1">&gt; warning about this).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How you intend to use this setup is up to you; you may want to restrict jobs
</span><br>
<span class="quotelev1">&gt; to 100% IB or 100% ethernet via SGE, or you may want to let them mix,
</span><br>
<span class="quotelev1">&gt; realizing that the overall parallel job may be slowed down to the speed of
</span><br>
<span class="quotelev1">&gt; the slowest network (e.g., ethernet).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Now I've two basic problems:
<br>
<p>(1)  Open MPI 1.3 is configurred as:
<br>
# ./configure --prefix=/opt/mpi/openmpi/1.3/intel --with-sge
<br>
--with-openib=/usr | tee config_out
<br>
<p>But,
<br>
<p>&nbsp;/opt/mpi/openmpi/1.3/intel/bin/ompi_info | grep gridengine
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.3)
<br>
<p>shows only one component. Is this ok?
<br>
<p>(2) Open MPI is itself not working
<br>
ssh: connect to host chemfist.iitk.ac.in port 22: Connection timed out
<br>
A daemon (pid 31343) died unexpectedly with status 1 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p><p>On two nodes:
<br>
<p># /opt/mpi/openmpi/1.3/intel/bin/mpirun -np 2 -hostfile ih hostname
<br>
bash: /opt/mpi/openmpi/1.3/intel/bin/orted: No such file or directory
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 31184) died unexpectedly with status 127 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to cleanly terminate the daemons on the nodes shown
<br>
below. Additional manual cleanup may be required - please refer to
<br>
the &quot;orte-clean&quot; tool for assistance.
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibc0 - daemon did not report back when launched
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ibc1 - daemon did not report back when launched
<br>
<p><p>#cat ih
<br>
ibc0
<br>
ibc1
<br>
<p>Everything is fine.
<br>
These ib interfaces are able to ping from master.
<br>
<p># echo $LD_LIBRARY_PATH
<br>
/opt/mpi/openmpi/1.3/intel/lib:/opt/intel/cce/10.0.023/lib:/opt/intel/fce/10.0.023/lib:/opt/intel/mkl/10.0.5.025/lib/em64t:/opt/gridengine/lib/lx26-amd6
<br>
<p>IB tests are also working fine.
<br>
Please help us to reslove this
<br>
<p><span class="quotelev1">&gt; Make sense?
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7797.php">Jeff Squyres: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<li><strong>Previous message:</strong> <a href="7795.php">Igor Kozin: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>In reply to:</strong> <a href="7784.php">Jeff Squyres: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7800.php">Sangamesh B: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<li><strong>Reply:</strong> <a href="7800.php">Sangamesh B: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
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
