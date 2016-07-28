<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun  8 16:41:19 2007" -->
<!-- isoreceived="20070608204119" -->
<!-- sent="Fri, 8 Jun 2007 16:40:38 -0400" -->
<!-- isosent="20070608204038" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixing MX and TCP" -->
<!-- id="7CE24BEC-804B-4A11-86FD-C2FF2B4FD12B_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="465EF327.70600_at_cs.vu.nl" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-08 16:40:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3423.php">Code Master: "Re: [OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes"</a>
<li><strong>Previous message:</strong> <a href="3421.php">Ralph Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3349.php">Kees Verstoep: "[OMPI users] mixing MX and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3424.php">Alex Tumanov: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Reply:</strong> <a href="3424.php">Alex Tumanov: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A fix for this problem is now available on the trunk. Please use any  
<br>
revision after 14963 and your problem will vanish [I hope!]. There  
<br>
are now some additional parameters which allow you to select which  
<br>
Myrinet network you want to use in the case there are several  
<br>
available (--mca btl_mx_if_include and --mca btl_mx_if_exclude). Even  
<br>
multi-rails should now work over MX.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 31, 2007, at 12:09 PM, Kees Verstoep wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am currently experimenting with OpenMPI in a multi-cluster setting
</span><br>
<span class="quotelev1">&gt; where each cluster has its private Myri-10G/MX network besides TCP.
</span><br>
<span class="quotelev1">&gt; Somehow I was under the assumption that OpenMPI would dynamically find
</span><br>
<span class="quotelev1">&gt; out the details of this configuration, and use MX where possible
</span><br>
<span class="quotelev1">&gt; (i.e., intra cluster), and TCP elsewhere.
</span><br>
<span class="quotelev1">&gt; But from some initial testing it appears OpenMPI-1.2.1 assumes global
</span><br>
<span class="quotelev1">&gt; connectivity over MX when every particpating host supports MX.
</span><br>
<span class="quotelev1">&gt; I see MX rather than tcp-level connections between clusters being
</span><br>
<span class="quotelev1">&gt; tried, which across clusters fails in mx_connect/mx_isend (at the
</span><br>
<span class="quotelev1">&gt; moment there is no inter-cluster support in MX itself).  Besides &quot;mx&quot;,
</span><br>
<span class="quotelev1">&gt; I do include &quot;tcp&quot; in the network option lists of course.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this just something that is not yet supported in the current
</span><br>
<span class="quotelev1">&gt; release, or does it work by providing some extra parameters?
</span><br>
<span class="quotelev1">&gt; I have not started digging in the code yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Kees Verstoep
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3422/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3423.php">Code Master: "Re: [OMPI users] mpirun in openmpi-1.2.2 fails to exit after client program finishes"</a>
<li><strong>Previous message:</strong> <a href="3421.php">Ralph Castain: "Re: [OMPI users] Issues running a basic program with spawn"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/05/3349.php">Kees Verstoep: "[OMPI users] mixing MX and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3424.php">Alex Tumanov: "Re: [OMPI users] mixing MX and TCP"</a>
<li><strong>Reply:</strong> <a href="3424.php">Alex Tumanov: "Re: [OMPI users] mixing MX and TCP"</a>
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
