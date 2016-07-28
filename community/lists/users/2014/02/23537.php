<?
$subject_val = "Re: [OMPI users] Planned support for Intel Phis";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  2 11:02:14 2014" -->
<!-- isoreceived="20140202160214" -->
<!-- sent="Sun, 2 Feb 2014 08:01:30 -0800" -->
<!-- isosent="20140202160130" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Planned support for Intel Phis" -->
<!-- id="0FB1CE43-C8CA-48B6-B9A5-FAB56B5C14A3_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+OO3AWxS+DzHje7tPZ2UGB6qt2VkzdZmhTBb9R9d6vXgK5Vhg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Planned support for Intel Phis<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-02 11:01:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23538.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re:  Planned support for Intel Phis"</a>
<li><strong>Previous message:</strong> <a href="23536.php">Michael Thomadakis: "[OMPI users] Planned support for Intel Phis"</a>
<li><strong>In reply to:</strong> <a href="23536.php">Michael Thomadakis: "[OMPI users] Planned support for Intel Phis"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Support for the Phi is in the upcoming 1.7.4 release. It doesn't require any version of OFED as it uses the Phi's scif interface for communication to ranks on the local host. For communication off-host, OMPI will use whatever NICs are available
<br>
<p><p>On Feb 2, 2014, at 6:44 AM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello OpenMPI,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was wondering what is the support that is being implemented for the Intel Phi platforms. That is would we be able to run MPI code in &quot;symmetric&quot; fashion, where some ranks run on the cores of the multicore hostst and some on the cores of the Phis in a multinode cluster environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also is it based on OFED 1.5.4.1 or on which OFED?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Michael
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23538.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re:  Planned support for Intel Phis"</a>
<li><strong>Previous message:</strong> <a href="23536.php">Michael Thomadakis: "[OMPI users] Planned support for Intel Phis"</a>
<li><strong>In reply to:</strong> <a href="23536.php">Michael Thomadakis: "[OMPI users] Planned support for Intel Phis"</a>
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
