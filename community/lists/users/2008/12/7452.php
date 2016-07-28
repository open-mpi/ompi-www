<?
$subject_val = "Re: [OMPI users] MCA parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 08:39:54 2008" -->
<!-- isoreceived="20081208133954" -->
<!-- sent="Mon, 8 Dec 2008 06:39:47 -0700" -->
<!-- isosent="20081208133947" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MCA parameter" -->
<!-- id="8EDDD90E-C212-4076-914F-28932B4F01FD_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="477389.55781.qm_at_web28405.mail.ukl.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MCA parameter<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-08 08:39:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7453.php">Heitor Florido: "[OMPI users] undefined symbol: MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="7451.php">Number Cruncher: "[OMPI users] orterun returns zero when it fails to find an executeable"</a>
<li><strong>In reply to:</strong> <a href="7446.php">Yasmine Yacoub: "[OMPI users] MCA parameter"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are multiple ways to set MCA parameters - you can checkout the  
<br>
FAQ to see all of them:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
<br>
<p>In your immediate case, just add -mca  
<br>
btl_openib_warn_default_gid_prefix 0 to your cmd line.
<br>
<p>Ralph
<br>
<p>On Dec 8, 2008, at 1:49 AM, Yasmine Yacoub wrote:
<br>
<p><span class="quotelev1">&gt; Good morning,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have explain my problem lat time and still I haven't receive any  
</span><br>
<span class="quotelev1">&gt; response.
</span><br>
<span class="quotelev1">&gt; ok, my problem is that after installing pwscf and running one scf  
</span><br>
<span class="quotelev1">&gt; example, I got the output but with this warning message :
</span><br>
<span class="quotelev1">&gt; WARNING: There are more than one active ports on host  
</span><br>
<span class="quotelev1">&gt; 'stallo-2.local', but the
</span><br>
<span class="quotelev1">&gt; default subnet GID prefix was detected on more than one of these
</span><br>
<span class="quotelev1">&gt; ports.  If these ports are connected to different physical IB
</span><br>
<span class="quotelev1">&gt; networks, this configuration will fail in Open MPI.  This version of
</span><br>
<span class="quotelev1">&gt; Open MPI requires that every physically separate IB subnet that is
</span><br>
<span class="quotelev1">&gt; used between connected MPI processes must have different subnet ID
</span><br>
<span class="quotelev1">&gt; values.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please see this FAQ entry for more details:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid">http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev1">&gt;       btl_openib_warn_default_gid_prefix to 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, please how can I turn off this warning? I have already tried to  
</span><br>
<span class="quotelev1">&gt; follow the steps indicated in the link above but it doesn't work.  
</span><br>
<span class="quotelev1">&gt; what is exactly the command I have to use?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7452/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7453.php">Heitor Florido: "[OMPI users] undefined symbol: MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="7451.php">Number Cruncher: "[OMPI users] orterun returns zero when it fails to find an executeable"</a>
<li><strong>In reply to:</strong> <a href="7446.php">Yasmine Yacoub: "[OMPI users] MCA parameter"</a>
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
