<?
$subject_val = "Re: [OMPI devel] -display-map";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 11 09:06:59 2008" -->
<!-- isoreceived="20080911130659" -->
<!-- sent="Thu, 11 Sep 2008 07:06:52 -0600" -->
<!-- isosent="20080911130652" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] -display-map" -->
<!-- id="C36E96BD-E4F1-41DB-8FA3-E2483F7F7A7C_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="78C4B4D7-D9BC-4268-97CF-8C1111BADBA1_at_computer.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] -display-map<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-11 09:06:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4646.php">Ralph Castain: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<li><strong>Previous message:</strong> <a href="4644.php">Greg Watson: "[OMPI devel] -display-map and mpi_spawn"</a>
<li><strong>In reply to:</strong> <a href="4643.php">Greg Watson: "[OMPI devel] -display-map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4661.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Reply:</strong> <a href="4661.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not in that regard, depending upon what you mean by &quot;recently&quot;. The  
<br>
only changes I am aware of wrt nodes consisted of some changes to the  
<br>
order in which we use the nodes when specified by hostfile or -host,  
<br>
and a little #if protectionism needed by Brian for the Cray port.
<br>
<p>Are you seeing this for every node? Reason I ask: I can't offhand  
<br>
think of anything in the code base that would replace a host name with  
<br>
the FQDN because we don't get that info for remote nodes. The only  
<br>
exception is the head node (where mpirun sits) - in that lone case, we  
<br>
default to the name returned to us by gethostname(). We do that  
<br>
because the head node is frequently accessible on a more global basis  
<br>
than the compute nodes - thus, the FQDN is required to ensure that  
<br>
there is no address confusion on the network.
<br>
<p>If the user refers to compute nodes in a hostfile or -host (or in an  
<br>
allocation from a resource manager) by non-FQDN, we just assume they  
<br>
know what they are doing and the name will correctly resolve to a  
<br>
unique address.
<br>
<p><p>On Sep 10, 2008, at 9:45 AM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has there been a change in the behavior of the -display-map option  
</span><br>
<span class="quotelev1">&gt; has changed recently in the 1.3 branch. We're now seeing the host  
</span><br>
<span class="quotelev1">&gt; name as a fully resolved DN rather than the entry that was specified  
</span><br>
<span class="quotelev1">&gt; in the hostfile. Is there any particular reason for this? If so,  
</span><br>
<span class="quotelev1">&gt; would it be possible to add the hostfile entry to the output since  
</span><br>
<span class="quotelev1">&gt; we need to be able to match the two?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4646.php">Ralph Castain: "Re: [OMPI devel] -display-map and mpi_spawn"</a>
<li><strong>Previous message:</strong> <a href="4644.php">Greg Watson: "[OMPI devel] -display-map and mpi_spawn"</a>
<li><strong>In reply to:</strong> <a href="4643.php">Greg Watson: "[OMPI devel] -display-map"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4661.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>Reply:</strong> <a href="4661.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
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
