<?
$subject_val = "Re: [OMPI users] MXM vs OpenIB";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 14:58:42 2013" -->
<!-- isoreceived="20130122195842" -->
<!-- sent="Tue, 22 Jan 2013 14:58:38 -0500" -->
<!-- isosent="20130122195838" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MXM vs OpenIB" -->
<!-- id="83CCB1E3-5A95-4B0A-9C06-01D8CD9A6F67_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1F0DB100-B52D-41E6-8131-CDC55BC59909_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MXM vs OpenIB<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-22 14:58:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21191.php">Ralph Castain: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>Previous message:</strong> <a href="21189.php">Shamis, Pavel: "Re: [OMPI users] XRC vs SRQ vs PRQ"</a>
<li><strong>In reply to:</strong> <a href="21184.php">Brock Palen: "[OMPI users] MXM vs OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21197.php">Brock Palen: "Re: [OMPI users] MXM vs OpenIB"</a>
<li><strong>Reply:</strong> <a href="21197.php">Brock Palen: "Re: [OMPI users] MXM vs OpenIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; We just learned about MXM, and given most our cards are Mellonox ConnectX cards (though not all, have have islands of previous to ConnectX and Qlogic supported in the same OpenMPI environment),
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Will MXM correctly fail though to PSM if on qlogic gear and fail though to OpenIB if on previous to connectX cards?
</span><br>
<p>Do you want to run MXM and PSM in the same MPI session ? You can't do it. MXM and PSM use different network protocols.
<br>
If you want to use MXM in your MPI job, all nodes should be configured to use MXM.
<br>
<p>On the other hand, OpenIB btl should support mixed environments out of the box.
<br>
<p>- Pasha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21191.php">Ralph Castain: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>Previous message:</strong> <a href="21189.php">Shamis, Pavel: "Re: [OMPI users] XRC vs SRQ vs PRQ"</a>
<li><strong>In reply to:</strong> <a href="21184.php">Brock Palen: "[OMPI users] MXM vs OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21197.php">Brock Palen: "Re: [OMPI users] MXM vs OpenIB"</a>
<li><strong>Reply:</strong> <a href="21197.php">Brock Palen: "Re: [OMPI users] MXM vs OpenIB"</a>
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
