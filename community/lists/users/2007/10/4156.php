<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct  5 22:48:23 2007" -->
<!-- isoreceived="20071006024823" -->
<!-- sent="Fri, 5 Oct 2007 21:48:16 -0500" -->
<!-- isosent="20071006024816" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="18182.63344.818724.674388_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-05 22:48:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4157.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4155.php">Richard Graham: "[OMPI users] FW: Meeting at SC'07"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4157.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4157.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>With the (Debian package of the) current 1.2.4 release, I am seeing a lot of
<br>
<p>&nbsp;&nbsp;mca: base: component_find: unable to open osc pt2pt: file not found (ignored)
<br>
<p>that I'd like to suppress.  
<br>
<p>For these Debian packages, we added a (commented-out by default) entry to
<br>
suppress the Infiniband noise when no Infiniband hardware is to be found. I
<br>
would like to suppress this 'osc pt2pt' message too.
<br>
<p>But all attempts at guestimating parameters for
<br>
&nbsp;&nbsp;/etc/openmpi/openmpi-mca-params.conf 
<br>
based on what 
<br>
&nbsp;&nbsp;ompi_info all all
<br>
shows failed.  Could someone help me along?
<br>
<p>Many thanks, Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4157.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Previous message:</strong> <a href="4155.php">Richard Graham: "[OMPI users] FW: Meeting at SC'07"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4157.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4157.php">Brian Barrett: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
