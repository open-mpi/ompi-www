<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 28 17:31:40 2005" -->
<!-- isoreceived="20050728223140" -->
<!-- sent="Thu, 28 Jul 2005 16:31:34 -0600 (MDT)" -->
<!-- isosent="20050728223134" -->
<!-- name="Timothy B. Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="New Bproc Components" -->
<!-- id="33093.128.165.253.83.1122589894.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Timothy B. Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-07-28 17:31:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0059.php">Ralph H. Castain: "Re:  New Bproc Components"</a>
<li><strong>Previous message:</strong> <a href="0057.php">Tim S. Woodall: "Re:  Launching orted from Eclipse problem: solved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0059.php">Ralph H. Castain: "Re:  New Bproc Components"</a>
<li><strong>Reply:</strong> <a href="0059.php">Ralph H. Castain: "Re:  New Bproc Components"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All,
<br>
<p>I have removed the ompi_ignores from the new bproc components I have been
<br>
working on and they are now the default for bproc. These new components
<br>
have several advantages over the old bproc component but mainly:
<br>
&nbsp;- we now provide ptys support for standard IO
<br>
&nbsp;- it should work better with threaded applications(although this has not
<br>
been tested).
<br>
&nbsp;- We also now support Scyld bproc and old versions of LANL bproc using a
<br>
serial launch as opposed to the parallel launch used for newer bproc
<br>
versions. (Although I do not have a box to test this on so any reports on
<br>
how it works would be appreciated)
<br>
Their use is the same as before: set your NODES environment variable to a
<br>
comma delimited list of the nodes to run on.
<br>
<p>The new launcher seems to be pretty scalable. Below are 2 charts where I
<br>
ran 'hostname' and a trivial mpi program on varying numbers of nodes with
<br>
both 1 and 2 processes per node (all times are in seconds).
<br>
<p>Running Hostname:
<br>
Nodes 1 per node   2 per node
<br>
1        .162         .172
<br>
2        .202         .224
<br>
4        .243         .251
<br>
8        .260         .275
<br>
16       .305         .321
<br>
32       .360         .412
<br>
64       .524         .708
<br>
128     1.036        1.627
<br>
<p>Running a trivial mpi process(Init/finalize)
<br>
Nodes 1 per node   2 per node
<br>
1        .33          .46
<br>
2        .44          .63
<br>
4        .56          .77
<br>
8        .61          .89
<br>
16       .71         1.1
<br>
32       .88         1.5
<br>
64      1.4          3.5
<br>
128     3.1          9.2
<br>
<p>The frontend and nodes are dual Opteron 242 with 2 GB RAM and GigE.
<br>
I have been told that there are some NxN exchanges going on in the mpi
<br>
processes which are probably tainting the running time.
<br>
<p>The launcher is split into 2 separate components. The general idea is:
<br>
&nbsp;1. pls_bproc is called by orterun. It figures out the process mapping and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;launches orted's on the nodes
<br>
&nbsp;2. pls_bproc_orted is called by orted. This module initializes either a
<br>
pty    or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;pipes, places symlinks to them in well know points of the filesystem, and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sets up the io forwarding. It then sends an ack back to orterun.
<br>
&nbsp;3. pls_bproc waits for an ack to come back from the orteds, then does
<br>
several
<br>
&nbsp;&nbsp;&nbsp;&nbsp;parallel launches of the application processes. The number of launches is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;equal to the maximum number of processes on a node.
<br>
<p>Let me know if there are any problems,
<br>
<p>Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0059.php">Ralph H. Castain: "Re:  New Bproc Components"</a>
<li><strong>Previous message:</strong> <a href="0057.php">Tim S. Woodall: "Re:  Launching orted from Eclipse problem: solved"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0059.php">Ralph H. Castain: "Re:  New Bproc Components"</a>
<li><strong>Reply:</strong> <a href="0059.php">Ralph H. Castain: "Re:  New Bproc Components"</a>
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
