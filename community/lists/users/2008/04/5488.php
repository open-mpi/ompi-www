<?
$subject_val = "Re: [OMPI users] Busy waiting [was Re:  (no subject)]";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 09:09:25 2008" -->
<!-- isoreceived="20080424130925" -->
<!-- sent="Thu, 24 Apr 2008 15:09:12 +0200" -->
<!-- isosent="20080424130912" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Busy waiting [was Re:  (no subject)]" -->
<!-- id="20080424130912.GQ15077_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="FAEA7EFE-583F-41A8-B6DC-C61E1F6924C6_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Busy waiting [was Re:  (no subject)]<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 09:09:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5489.php">Tim Prins: "Re: [OMPI users] PubSub and MPI"</a>
<li><strong>Previous message:</strong> <a href="5487.php">Jeff Squyres: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5484.php">Alberto Giannetti: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5504.php">Alberto Giannetti: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Reply:</strong> <a href="5504.php">Alberto Giannetti: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Apr 24, 2008 at 08:25:44AM -0400, Alberto Giannetti wrote:
<br>
<p><span class="quotelev2">&gt; &gt; I am using one of the nodes as a desktop computer. Therefore it is
</span><br>
<span class="quotelev2">&gt; &gt; most important for me that the mpi program is not so greedily
</span><br>
<span class="quotelev2">&gt; &gt; acquiring cpu time.
</span><br>
<p><span class="quotelev1">&gt; From a performance/usability stand, you could set interactive  
</span><br>
<span class="quotelev1">&gt; applications on higher priority to guarantee your desktop  
</span><br>
<span class="quotelev1">&gt; applications work as expected.
</span><br>
<p>What you really mean is to renice the MPI program to 10 or even 19.
<br>
<p>It's usually not a good idea to raise the priority of any program below
<br>
0, as this could lock up your machine (that's why nice-levels below 0
<br>
are reserved for privileged users (root))
<br>
<p>(note that lower nice levels actually mean higher priority. Just to
<br>
avoid confusion. I guess I don't have to mention &quot;man nice&quot; on a
<br>
technical mailing list.)
<br>
<p>Anyway, I suggest you set mpi_yield_when_idle=1 in your mca-params.conf.
<br>
<p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5489.php">Tim Prins: "Re: [OMPI users] PubSub and MPI"</a>
<li><strong>Previous message:</strong> <a href="5487.php">Jeff Squyres: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5484.php">Alberto Giannetti: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5504.php">Alberto Giannetti: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>Reply:</strong> <a href="5504.php">Alberto Giannetti: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
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
