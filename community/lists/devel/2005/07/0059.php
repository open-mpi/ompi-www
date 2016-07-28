<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 28 17:41:52 2005" -->
<!-- isoreceived="20050728224152" -->
<!-- sent="Thu, 28 Jul 2005 16:41:43 -0600" -->
<!-- isosent="20050728224143" -->
<!-- name="Ralph H. Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re:  New Bproc Components" -->
<!-- id="6.2.3.4.2.20050728164008.01d2aa70_at_pobox1663.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="33093.128.165.253.83.1122589894.squirrel_at_webmail.lanl.gov" -->
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
<strong>From:</strong> Ralph H. Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-07-28 17:41:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0060.php">Greg Watson: "os x build"</a>
<li><strong>Previous message:</strong> <a href="0058.php">Timothy B. Prins: "New Bproc Components"</a>
<li><strong>In reply to:</strong> <a href="0058.php">Timothy B. Prins: "New Bproc Components"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Very interesting! Appreciate the info. My numbers are slightly better 
<br>
- as I've indicated, there is a NxN message exchange currently in the 
<br>
system that needs to be removed. With that commented out, the system 
<br>
scales roughly linearly with number of processes.
<br>
<p>At 04:31 PM 7/28/2005, you wrote:
<br>
<span class="quotelev1">&gt;All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I have removed the ompi_ignores from the new bproc components I have been
</span><br>
<span class="quotelev1">&gt;working on and they are now the default for bproc. These new components
</span><br>
<span class="quotelev1">&gt;have several advantages over the old bproc component but mainly:
</span><br>
<span class="quotelev1">&gt;  - we now provide ptys support for standard IO
</span><br>
<span class="quotelev1">&gt;  - it should work better with threaded applications(although this has not
</span><br>
<span class="quotelev1">&gt;been tested).
</span><br>
<span class="quotelev1">&gt;  - We also now support Scyld bproc and old versions of LANL bproc using a
</span><br>
<span class="quotelev1">&gt;serial launch as opposed to the parallel launch used for newer bproc
</span><br>
<span class="quotelev1">&gt;versions. (Although I do not have a box to test this on so any reports on
</span><br>
<span class="quotelev1">&gt;how it works would be appreciated)
</span><br>
<span class="quotelev1">&gt;Their use is the same as before: set your NODES environment variable to a
</span><br>
<span class="quotelev1">&gt;comma delimited list of the nodes to run on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The new launcher seems to be pretty scalable. Below are 2 charts where I
</span><br>
<span class="quotelev1">&gt;ran 'hostname' and a trivial mpi program on varying numbers of nodes with
</span><br>
<span class="quotelev1">&gt;both 1 and 2 processes per node (all times are in seconds).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Running Hostname:
</span><br>
<span class="quotelev1">&gt;Nodes 1 per node   2 per node
</span><br>
<span class="quotelev1">&gt;1        .162         .172
</span><br>
<span class="quotelev1">&gt;2        .202         .224
</span><br>
<span class="quotelev1">&gt;4        .243         .251
</span><br>
<span class="quotelev1">&gt;8        .260         .275
</span><br>
<span class="quotelev1">&gt;16       .305         .321
</span><br>
<span class="quotelev1">&gt;32       .360         .412
</span><br>
<span class="quotelev1">&gt;64       .524         .708
</span><br>
<span class="quotelev1">&gt;128     1.036        1.627
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Running a trivial mpi process(Init/finalize)
</span><br>
<span class="quotelev1">&gt;Nodes 1 per node   2 per node
</span><br>
<span class="quotelev1">&gt;1        .33          .46
</span><br>
<span class="quotelev1">&gt;2        .44          .63
</span><br>
<span class="quotelev1">&gt;4        .56          .77
</span><br>
<span class="quotelev1">&gt;8        .61          .89
</span><br>
<span class="quotelev1">&gt;16       .71         1.1
</span><br>
<span class="quotelev1">&gt;32       .88         1.5
</span><br>
<span class="quotelev1">&gt;64      1.4          3.5
</span><br>
<span class="quotelev1">&gt;128     3.1          9.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The frontend and nodes are dual Opteron 242 with 2 GB RAM and GigE.
</span><br>
<span class="quotelev1">&gt;I have been told that there are some NxN exchanges going on in the mpi
</span><br>
<span class="quotelev1">&gt;processes which are probably tainting the running time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The launcher is split into 2 separate components. The general idea is:
</span><br>
<span class="quotelev1">&gt;  1. pls_bproc is called by orterun. It figures out the process mapping and
</span><br>
<span class="quotelev1">&gt;     launches orted's on the nodes
</span><br>
<span class="quotelev1">&gt;  2. pls_bproc_orted is called by orted. This module initializes either a
</span><br>
<span class="quotelev1">&gt;pty    or
</span><br>
<span class="quotelev1">&gt;     pipes, places symlinks to them in well know points of the filesystem, and
</span><br>
<span class="quotelev1">&gt;     sets up the io forwarding. It then sends an ack back to orterun.
</span><br>
<span class="quotelev1">&gt;  3. pls_bproc waits for an ack to come back from the orteds, then does
</span><br>
<span class="quotelev1">&gt;several
</span><br>
<span class="quotelev1">&gt;     parallel launches of the application processes. The number of launches is
</span><br>
<span class="quotelev1">&gt;     equal to the maximum number of processes on a node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Let me know if there are any problems,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Tim
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0060.php">Greg Watson: "os x build"</a>
<li><strong>Previous message:</strong> <a href="0058.php">Timothy B. Prins: "New Bproc Components"</a>
<li><strong>In reply to:</strong> <a href="0058.php">Timothy B. Prins: "New Bproc Components"</a>
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
