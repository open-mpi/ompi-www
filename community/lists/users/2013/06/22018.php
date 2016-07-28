<?
$subject_val = "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  4 06:23:23 2013" -->
<!-- isoreceived="20130604102323" -->
<!-- sent="Tue, 4 Jun 2013 10:23:19 +0000" -->
<!-- isosent="20130604102319" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F658F2C_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51AC86D7.1090904_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-04 06:23:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22019.php">W Spector: "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<li><strong>Previous message:</strong> <a href="22017.php">vacate: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<li><strong>In reply to:</strong> <a href="22014.php">Paul Kapinos: "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22019.php">W Spector: "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<li><strong>Reply:</strong> <a href="22019.php">W Spector: "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 3, 2013, at 5:06 AM, Paul Kapinos &lt;kapinos_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It is more or less well-known that MPI_THREAD_MULTIPLE disable the OpenFabric / InfiniBand networking in Open MPI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=supported-systems#thread-support">http://www.open-mpi.org/faq/?category=supported-systems#thread-support</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2010/03/12345.php">http://www.open-mpi.org/community/lists/users/2010/03/12345.php</a>
</span><br>
<p>Yes, this is true -- MPI_THREAD_MULITPLE support is fairly incomplete in Open MPI.
<br>
<p><span class="quotelev1">&gt; On our system not only the 'openib' BTL is off, but also the IPoIB denies to work, leading to error.
</span><br>
<p>That's odd -- are you saying that the TCP BTL doesn't work with IPoIB?  I can't think of why that would be the case.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22019.php">W Spector: "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<li><strong>Previous message:</strong> <a href="22017.php">vacate: "Re: [OMPI users] I got &quot;ssh_exchange_identification&quot; errors when I mpirun over 1500 times almost at the same time"</a>
<li><strong>In reply to:</strong> <a href="22014.php">Paul Kapinos: "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22019.php">W Spector: "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
<li><strong>Reply:</strong> <a href="22019.php">W Spector: "Re: [OMPI users] 1.7.1 Hang with MPI_THREAD_MULTIPLE set"</a>
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
