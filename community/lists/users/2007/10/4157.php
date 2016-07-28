<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct  5 23:31:58 2007" -->
<!-- isoreceived="20071006033158" -->
<!-- sent="Fri, 5 Oct 2007 21:31:50 -0600" -->
<!-- isosent="20071006033150" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="71D306F6-7AC0-4E3F-97DE-FC789F32BF81_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="18182.63344.818724.674388_at_ron.nulle.part" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-05 23:31:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4158.php">Amit Kumar Saha: "[OMPI users] [OT] Newbie seeks clarification about Parallel Computing Terminologies"</a>
<li><strong>Previous message:</strong> <a href="4156.php">Dirk Eddelbuettel: "[OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4156.php">Dirk Eddelbuettel: "[OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4159.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4159.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 5, 2007, at 8:48 PM, Dirk Eddelbuettel wrote:
<br>
<p><span class="quotelev1">&gt; With the (Debian package of the) current 1.2.4 release, I am seeing  
</span><br>
<span class="quotelev1">&gt; a lot of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mca: base: component_find: unable to open osc pt2pt: file not  
</span><br>
<span class="quotelev1">&gt; found (ignored)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that I'd like to suppress.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For these Debian packages, we added a (commented-out by default)  
</span><br>
<span class="quotelev1">&gt; entry to
</span><br>
<span class="quotelev1">&gt; suppress the Infiniband noise when no Infiniband hardware is to be  
</span><br>
<span class="quotelev1">&gt; found. I
</span><br>
<span class="quotelev1">&gt; would like to suppress this 'osc pt2pt' message too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But all attempts at guestimating parameters for
</span><br>
<span class="quotelev1">&gt;   /etc/openmpi/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt; based on what
</span><br>
<span class="quotelev1">&gt;   ompi_info all all
</span><br>
<span class="quotelev1">&gt; shows failed.  Could someone help me along?
</span><br>
<p>This is a bit different, and points to something bad going on.  The  
<br>
error message is that for some reason, a library that the pt2pt  
<br>
component depends on was not found.  The pt2pt osc component is  
<br>
entirely built on the MPI layer -- it shouldn't have any external  
<br>
dependencies.  Can you run ldd on the library and see if there's  
<br>
anything obvious?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4158.php">Amit Kumar Saha: "[OMPI users] [OT] Newbie seeks clarification about Parallel Computing Terminologies"</a>
<li><strong>Previous message:</strong> <a href="4156.php">Dirk Eddelbuettel: "[OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>In reply to:</strong> <a href="4156.php">Dirk Eddelbuettel: "[OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4159.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4159.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
