<?
$subject_val = "Re: [OMPI users] Tight integration and interactive sessions with SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 22:55:39 2008" -->
<!-- isoreceived="20081113035539" -->
<!-- sent="Thu, 13 Nov 2008 04:55:27 +0100" -->
<!-- isosent="20081113035527" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tight integration and interactive sessions with SGE" -->
<!-- id="04039DAB-C5EF-454D-A2A6-4DECE12E7D63_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="491B7627.7020107_at_cse.ucdavis.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Tight integration and interactive sessions with SGE<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-12 22:55:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7303.php">Scott Beardsley: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>Previous message:</strong> <a href="7301.php">Scott Beardsley: "[OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>In reply to:</strong> <a href="7301.php">Scott Beardsley: "[OMPI users] Tight integration and interactive sessions with SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7303.php">Scott Beardsley: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>Reply:</strong> <a href="7303.php">Scott Beardsley: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Scott,
<br>
<p>Am 13.11.2008 um 01:34 schrieb Scott Beardsley:
<br>
<p><span class="quotelev1">&gt; I've been using OMPI 1.2.6 tightly integrated with Grid Engine for  
</span><br>
<span class="quotelev1">&gt; a bit now and it works great. However, I'm running into a problem  
</span><br>
<span class="quotelev1">&gt; running jobs from an interactive session (qlogin). I tried just  
</span><br>
<span class="quotelev1">&gt; doing &quot;mpirun -np N /path/to/binary&quot; where N &gt; # of cpus per node  
</span><br>
<span class="quotelev1">&gt; but OMPI will just oversubscribe the node.
</span><br>
<p>qlogin will create a completely fresh bash, which is not aware of  
<br>
running under SGE. Although you could set the SGE_* variables by  
<br>
hand, it's easier to use an interactive session with:
<br>
<p>$ qrsh -pe orte 4 /path/to/binary
<br>
<p>If you really need a shell, you can get one with:
<br>
<p>$ qrsh -pe orte 4 bash -il
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, I have an initialization script from the vendor that requires  
</span><br>
<span class="quotelev1">&gt; setting up local temporary directories. Prior to migration to OMPI  
</span><br>
<span class="quotelev1">&gt; we just parsed the machines file then went out to each node and  
</span><br>
<span class="quotelev1">&gt; created any necessary temp directories. Is there no way to get a  
</span><br>
<span class="quotelev1">&gt; list of machines with tight integration?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
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
<li><strong>Next message:</strong> <a href="7303.php">Scott Beardsley: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>Previous message:</strong> <a href="7301.php">Scott Beardsley: "[OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>In reply to:</strong> <a href="7301.php">Scott Beardsley: "[OMPI users] Tight integration and interactive sessions with SGE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7303.php">Scott Beardsley: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
<li><strong>Reply:</strong> <a href="7303.php">Scott Beardsley: "Re: [OMPI users] Tight integration and interactive sessions with SGE"</a>
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
