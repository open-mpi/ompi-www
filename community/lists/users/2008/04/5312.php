<?
$subject_val = "Re: [OMPI users] setup of a basic system on RHEL or Fedora";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  3 23:41:56 2008" -->
<!-- isoreceived="20080404034156" -->
<!-- sent="03 Apr 2008 22:41:38 -0500" -->
<!-- isosent="20080404034138" -->
<!-- name="trnja001_at_[hidden]" -->
<!-- email="trnja001_at_[hidden]" -->
<!-- subject="Re: [OMPI users] setup of a basic system on RHEL or Fedora" -->
<!-- id="Prayer.1.0.16.0804032241380.8648_at_wm2.tc.umn.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1207270859.5385.70.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] setup of a basic system on RHEL or Fedora<br>
<strong>From:</strong> <a href="mailto:trnja001_at_[hidden]?Subject=Re:%20[OMPI%20users]%20setup%20of%20a%20basic%20system%20on%20RHEL%20or%20Fedora"><em>trnja001_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-04-03 23:41:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5313.php">Lars Andersson: "[OMPI users] Oversubscription performance problem"</a>
<li><strong>Previous message:</strong> <a href="5311.php">Brian Barrett: "Re: [OMPI users] OSX undefined symbols when compiling hello world in cpp but not in c"</a>
<li><strong>In reply to:</strong> <a href="5309.php">Terry Frankcombe: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5314.php">George Bosilca: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>Reply:</strong> <a href="5314.php">George Bosilca: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenMPI does not use PATH, at least not by default (or my default).
<br>
<p>Node 1:
<br>
PATH=/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/home/elvedin/bin
<br>
<p>Node 2: 
<br>
PATH=/home/elvedin/mpi/ompi/bin:/usr/kerberos/bin:/usr/lib/ccache:/usr/local/bin:/bin:/usr/bin
<br>
<p>Binary &quot;endian&quot; is in /home/elvedin/mpi/ompi/bin of node 2 (as defined in 
<br>
PATH) and in /home/elvedin/ of node 1. Running from node 1 with &quot;mpirun -np 
<br>
2 -machinefile (has node1,node2 in it) endian&quot; -
<br>
<p>Failed to find the following executable:
<br>
<p>Host:       node2
<br>
Executable: endian
<br>
<p>On Apr 3 2008, Terry Frankcombe wrote:
<br>
<p><span class="quotelev1">&gt;Someone can correct me if I'm wrong, but I do believe that the
</span><br>
<span class="quotelev1">&gt;executables don't need to be in the same place on every node, but they
</span><br>
<span class="quotelev1">&gt;do need to be on every node somewhere in that node's PATH.  Certainly,
</span><br>
<span class="quotelev1">&gt;consistent NFS mounted filespaces is one of the easiest ways to achieve
</span><br>
<span class="quotelev1">&gt;this.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5313.php">Lars Andersson: "[OMPI users] Oversubscription performance problem"</a>
<li><strong>Previous message:</strong> <a href="5311.php">Brian Barrett: "Re: [OMPI users] OSX undefined symbols when compiling hello world in cpp but not in c"</a>
<li><strong>In reply to:</strong> <a href="5309.php">Terry Frankcombe: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5314.php">George Bosilca: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>Reply:</strong> <a href="5314.php">George Bosilca: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
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
