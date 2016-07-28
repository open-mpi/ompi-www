<?
$subject_val = "Re: [OMPI users] help me please, about Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 13:30:42 2008" -->
<!-- isoreceived="20080617173042" -->
<!-- sent="Tue, 17 Jun 2008 19:30:27 +0200" -->
<!-- isosent="20080617173027" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] help me please, about Open MPI" -->
<!-- id="20080617173027.GR14055_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BAY104-W201D6D627BE3775AC8C5D0FDA80_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] help me please, about Open MPI<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-17 13:30:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5921.php">Adrian Knoth: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>Previous message:</strong> <a href="5919.php">Ilmar Wilbers: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>In reply to:</strong> <a href="5918.php">Tony Smith: "Re: [OMPI users] help me please, about Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5921.php">Adrian Knoth: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>Reply:</strong> <a href="5921.php">Adrian Knoth: "Re: [OMPI users] help me please, about Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jun 17, 2008 at 01:11:15PM -0400, Tony Smith wrote:
<br>
<p><span class="quotelev1">&gt; so , echo $TMPDIR :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      /tmp:/local2/pbs/myname/37911.hpc-cluster
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but the same errors. 
</span><br>
<p>Have you checked &quot;ls -ld /tmp/&quot;? Jeff has been asking you twice to
<br>
provide the exact permissions, so I guess he would be delighted to
<br>
eventually get the answer.
<br>
<p>You may also want to check the other path (the job specific one) in your
<br>
$TMPDIR.
<br>
<p>Last but not least: have you tried without PBS, let's say something like
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ orterun -np 2 /bin/hostname
<br>
<p>or even
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;$ orterun --mca pls rsh -np 2 /bin/hostname
<br>
<p>(sorry for asking this basic stuff, I haven't followed the whole thread)
<br>
<p><p>HTH
<br>
<p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5921.php">Adrian Knoth: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>Previous message:</strong> <a href="5919.php">Ilmar Wilbers: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>In reply to:</strong> <a href="5918.php">Tony Smith: "Re: [OMPI users] help me please, about Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5921.php">Adrian Knoth: "Re: [OMPI users] help me please, about Open MPI"</a>
<li><strong>Reply:</strong> <a href="5921.php">Adrian Knoth: "Re: [OMPI users] help me please, about Open MPI"</a>
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
