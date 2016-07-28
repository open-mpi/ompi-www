<?
$subject_val = "[OMPI users] Fwd:  Getting default hostfile on Open MPI 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  3 12:45:35 2008" -->
<!-- isoreceived="20080803164535" -->
<!-- sent="Sun, 3 Aug 2008 10:45:25 -0600" -->
<!-- isosent="20080803164525" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd:  Getting default hostfile on Open MPI 1.3" -->
<!-- id="898341BB-FEDE-466E-A28E-8B926B7AFAC7_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="42B18323-4B17-4885-A72B-32428BBBDDCA_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] Fwd:  Getting default hostfile on Open MPI 1.3<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-03 12:45:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6253.php">Mark Borgerding: "[OMPI users] MPI adopt-a-group: a question and status report"</a>
<li><strong>Previous message:</strong> <a href="6251.php">Jeff Squyres: "Re: [OMPI users] Problems building openmpi 1.2.6 with Lahey Fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay - this one slipped past me.
<br>
<p>There was an internal change to the way we handle hostfiles in Open  
<br>
MPI, so the parameter changed. The correct way to specify a system- 
<br>
wide default host file is indeed to set OMPI_MCA_orte_default_hostfile  
<br>
in your environment, or to set orte_default_hostfile in the default  
<br>
MCA parameter file. You can also specify it on the command line as -- 
<br>
default-hostfile.
<br>
<p>The value is NULL by default as we do not have a default name for the  
<br>
system-wide hostfile. So you have to specify it for us.
<br>
<p>Given that our handling of hostfiles has changed, it might be worth  
<br>
reviewing the notes on the wiki:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan">https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan</a>
<br>
<p>Alternatively, there is a man page in 1.3 that also covers this  
<br>
material: man orte_hosts
<br>
<p>Ralph
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Daniel Felix Ferber &lt;danielsforummail_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: July 16, 2008 10:09:01 AM EDT
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Getting default hostfile on Open MPI 1.3
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Open MPI 1.2, I used following command to get the default host  
</span><br>
<span class="quotelev2">&gt;&gt; file:
</span><br>
<span class="quotelev2">&gt;&gt; ompi_info -a --parseable | grep rds_hostfile_path
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now, on Open MPI 1.3, the parameter does not seem to exist anymore.  
</span><br>
<span class="quotelev2">&gt;&gt; I checked that there is another parameter  
</span><br>
<span class="quotelev2">&gt;&gt; (mca:orte:base:param:orte_default_hostfile), but its value is  
</span><br>
<span class="quotelev2">&gt;&gt; always empty.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which file whould I used for a system-wide default host file? Is  
</span><br>
<span class="quotelev2">&gt;&gt; there another way to query the path for this default host file? Or  
</span><br>
<span class="quotelev2">&gt;&gt; is a command to query which hosts are going to be used by mpi by  
</span><br>
<span class="quotelev2">&gt;&gt; default?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Daniel Felix Ferber
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6252/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6253.php">Mark Borgerding: "[OMPI users] MPI adopt-a-group: a question and status report"</a>
<li><strong>Previous message:</strong> <a href="6251.php">Jeff Squyres: "Re: [OMPI users] Problems building openmpi 1.2.6 with Lahey Fortran"</a>
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
