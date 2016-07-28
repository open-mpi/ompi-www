<?
$subject_val = "Re: [OMPI users] openMPI on Xgrid";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 29 15:48:59 2010" -->
<!-- isoreceived="20100329194859" -->
<!-- sent="Mon, 29 Mar 2010 12:48:53 -0700" -->
<!-- isosent="20100329194853" -->
<!-- name="Jody Klymak" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI on Xgrid" -->
<!-- id="3139AE4C-764E-488C-B202-CC50F0D33372_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="208208E2-B469-4224-BC8B-0BE9D80598AE_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI on Xgrid<br>
<strong>From:</strong> Jody Klymak (<em>jklymak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-29 15:48:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12465.php">Martin Bernreuther: "[OMPI users] OPEN_MPI macro for mpif.h?"</a>
<li><strong>Previous message:</strong> <a href="12463.php">Ralph Castain: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>In reply to:</strong> <a href="12463.php">Ralph Castain: "Re: [OMPI users] openMPI on Xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12466.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Reply:</strong> <a href="12466.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Reply:</strong> <a href="12476.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 29, 2010, at  12:39 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 29, 2010, at 1:34 PM, Cristobal Navarro wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks for the information,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but is it possible to make it work with xgrid or the 1.4.1 version  
</span><br>
<span class="quotelev2">&gt;&gt; just dont support it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p>FWIW, I've had excellent success with Torque and openmpi on OS-X 10.5  
<br>
Server.
<br>
<p><a href="http://www.clusterresources.com/products/torque-resource-manager.php">http://www.clusterresources.com/products/torque-resource-manager.php</a>
<br>
<p>It doesn't have a nice dashboard, but the queue tools are more than  
<br>
adequate for my needs.
<br>
<p>Open MPI had a funny port issue on my setup that folks helped with
<br>
<p>&nbsp;From my notes:
<br>
<p>Edited /Network/Xgrid/openmpi/etc/openmpi-mca-params.conf to make sure
<br>
that the right ports are used:
<br>
<p>&lt;example&gt;
<br>
# set ports so that they are more valid than the default ones (see  
<br>
email from Ralph Castain)
<br>
btl_tcp_port_min_v4 = 36900
<br>
btl_tcp_port_range  = 32
<br>
&lt;/example&gt;
<br>
<p>Cheers,  Jody
<br>
<p><p><pre>
--
Jody Klymak
<a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12464/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12465.php">Martin Bernreuther: "[OMPI users] OPEN_MPI macro for mpif.h?"</a>
<li><strong>Previous message:</strong> <a href="12463.php">Ralph Castain: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>In reply to:</strong> <a href="12463.php">Ralph Castain: "Re: [OMPI users] openMPI on Xgrid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12466.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Reply:</strong> <a href="12466.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
<li><strong>Reply:</strong> <a href="12476.php">Cristobal Navarro: "Re: [OMPI users] openMPI on Xgrid"</a>
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
