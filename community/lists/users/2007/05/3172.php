<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  1 16:40:11 2007" -->
<!-- isoreceived="20070501204011" -->
<!-- sent="Tue, 01 May 2007 22:40:05 +0200" -->
<!-- isosent="20070501204005" -->
<!-- name="Ole Holm Nielsen" -->
<!-- email="Ole.H.Nielsen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque and OpenMPI 1.2.1 problems" -->
<!-- id="4637A5A5.8080900_at_fysik.dtu.dk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C25CC7A3.2A7F%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ole Holm Nielsen (<em>Ole.H.Nielsen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-01 16:40:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3173.php">Rob: "[OMPI users] Alpha system &amp; OpenMPI 1.2.1 does not work..."</a>
<li><strong>Previous message:</strong> <a href="3171.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>In reply to:</strong> <a href="3171.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3175.php">Bas van der Vlies: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the suggestion.  I inserted a printenv command and the path and
<br>
library variables seem to be correct for our OpenMPI installation:
<br>
<p>LD_LIBRARY_PATH=/usr/local/openmpi-1.2.1-pgi/lib:/opt/intel/compiler90/lib
<br>
MPIHOME=/usr/local/openmpi-1.2.1-pgi
<br>
PATH=/usr/local/openmpi-1.2.1-pgi/bin:/usr/local/openmpi-1.2.1-pgi/bin:/usr/kerberos/bin:/bin:/usr/bin:/usr/local/lam-7.1.2-pgi/bin:/opt/intel/compiler90/bin:/usr/local/bin:/usr/X11R6/bin
<br>
<p>Does OpenMPI have any issues when installed in non-default directories
<br>
such as /usr/local/openmpi-1.2.1-pgi ?
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; The most likely problem is that you have a path or library issue regarding
</span><br>
<span class="quotelev1">&gt; the location of the OpenMPI/OpenRTE executables when running batch versus
</span><br>
<span class="quotelev1">&gt; interactive. We see this sometimes when the shell startups differ in those
</span><br>
<span class="quotelev1">&gt; two modes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You might try just running a batch vs interactive printenv to see if
</span><br>
<span class="quotelev1">&gt; differences exist.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I know, there are no compatibility issues with Torque at this
</span><br>
<span class="quotelev1">&gt; time. 
</span><br>
<p>Thanks,
<br>
Ole
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3173.php">Rob: "[OMPI users] Alpha system &amp; OpenMPI 1.2.1 does not work..."</a>
<li><strong>Previous message:</strong> <a href="3171.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<li><strong>In reply to:</strong> <a href="3171.php">Ralph Castain: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3175.php">Bas van der Vlies: "Re: [OMPI users] Torque and OpenMPI 1.2.1 problems"</a>
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
