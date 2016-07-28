<?
$subject_val = "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 10:38:12 2009" -->
<!-- isoreceived="20090123153812" -->
<!-- sent="Fri, 23 Jan 2009 21:08:07 +0530" -->
<!-- isosent="20090123153807" -->
<!-- name="Sangamesh B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cluster with IB hosts and Ethernet hosts" -->
<!-- id="cb60cbc40901230738w7f9e6b8bj471ab63ba8a4f16a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="cb60cbc40901230628y78e3bbf4o57c9f7b5814f7d8f_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-01-23 10:38:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7801.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>Previous message:</strong> <a href="7799.php">Josh Hursey: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<li><strong>In reply to:</strong> <a href="7796.php">Sangamesh B: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Any solution for the following problem?
<br>
<p>On Fri, Jan 23, 2009 at 7:58 PM, Sangamesh B &lt;forum.san_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Fri, Jan 23, 2009 at 5:41 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 22, 2009, at 11:26 PM, Sangamesh B wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   We''ve a cluster with 23 nodes connected to IB switch and 8 nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have connected to ethernet switch. Master node is also connected to IB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; switch. SGE(with tight integration, -pe orte)  is used for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parallel/serial job submission.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI-1.3 is installed on master node with IB support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (--with-openib=/usr). The same folder is copied to the remaining 23 IB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sounds good.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now what shall I do for remaining 8 ethernet nodes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (1) Copy the same folder(IB) to these nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (2) Install Open MPI on one of the 8 eight ethernet nodes. Copy the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same to 7 nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (3) Install an ethernet version of Open MPI on master node and copy to 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Either 1 or 2 is your best bet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you have OFED installed on all nodes (either explicitly, or included in
</span><br>
<span class="quotelev2">&gt;&gt; your Linux distro)?
</span><br>
<span class="quotelev1">&gt; No
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If so, I believe that at least some users with configurations like this
</span><br>
<span class="quotelev2">&gt;&gt; install OMPI with OFED support (--with-openib=/usr, as you mentioned above)
</span><br>
<span class="quotelev2">&gt;&gt; on all nodes.  OMPI will notice that there is no OpenFabrics-capable
</span><br>
<span class="quotelev2">&gt;&gt; hardware on the ethernet-only nodes and will simply not use the openib BTL
</span><br>
<span class="quotelev2">&gt;&gt; plugin.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that OMPI v1.3 got better about being silent about the lack of
</span><br>
<span class="quotelev2">&gt;&gt; OpenFabrics devices when the openib BTL is present (OMPI v1.2 issued a
</span><br>
<span class="quotelev2">&gt;&gt; warning about this).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How you intend to use this setup is up to you; you may want to restrict jobs
</span><br>
<span class="quotelev2">&gt;&gt; to 100% IB or 100% ethernet via SGE, or you may want to let them mix,
</span><br>
<span class="quotelev2">&gt;&gt; realizing that the overall parallel job may be slowed down to the speed of
</span><br>
<span class="quotelev2">&gt;&gt; the slowest network (e.g., ethernet).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I've two basic problems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (1)  Open MPI 1.3 is configurred as:
</span><br>
<span class="quotelev1">&gt; # ./configure --prefix=/opt/mpi/openmpi/1.3/intel --with-sge
</span><br>
<span class="quotelev1">&gt; --with-openib=/usr | tee config_out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /opt/mpi/openmpi/1.3/intel/bin/ompi_info | grep gridengine
</span><br>
<span class="quotelev1">&gt;                 MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shows only one component. Is this ok?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (2) Open MPI is itself not working
</span><br>
<span class="quotelev1">&gt; ssh: connect to host chemfist.iitk.ac.in port 22: Connection timed out
</span><br>
<span class="quotelev1">&gt; A daemon (pid 31343) died unexpectedly with status 1 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On two nodes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # /opt/mpi/openmpi/1.3/intel/bin/mpirun -np 2 -hostfile ih hostname
</span><br>
<span class="quotelev1">&gt; bash: /opt/mpi/openmpi/1.3/intel/bin/orted: No such file or directory
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 31184) died unexpectedly with status 127 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons on the nodes shown
</span><br>
<span class="quotelev1">&gt; below. Additional manual cleanup may be required - please refer to
</span><br>
<span class="quotelev1">&gt; the &quot;orte-clean&quot; tool for assistance.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;        ibc0 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;        ibc1 - daemon did not report back when launched
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #cat ih
</span><br>
<span class="quotelev1">&gt; ibc0
</span><br>
<span class="quotelev1">&gt; ibc1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything is fine.
</span><br>
<span class="quotelev1">&gt; These ib interfaces are able to ping from master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /opt/mpi/openmpi/1.3/intel/lib:/opt/intel/cce/10.0.023/lib:/opt/intel/fce/10.0.023/lib:/opt/intel/mkl/10.0.5.025/lib/em64t:/opt/gridengine/lib/lx26-amd6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IB tests are also working fine.
</span><br>
<span class="quotelev1">&gt; Please help us to reslove this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Make sense?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7801.php">Ralph Castain: "Re: [OMPI users] 1.3 hangs running 2 exes with different names (Ralph Castain)"</a>
<li><strong>Previous message:</strong> <a href="7799.php">Josh Hursey: "Re: [OMPI users] 1.3 and --preload-files and --preload-binary"</a>
<li><strong>In reply to:</strong> <a href="7796.php">Sangamesh B: "Re: [OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<!-- nextthread="start" -->
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
