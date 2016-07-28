<?
$subject_val = "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 18:55:20 2014" -->
<!-- isoreceived="20140821225520" -->
<!-- sent="Thu, 21 Aug 2014 23:55:17 +0100" -->
<!-- isosent="20140821225517" -->
<!-- name="Andrej Prsa" -->
<!-- email="aprsa09_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working" -->
<!-- id="20140821235517.1f4de06b_at_antares" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4846A1EB-9097-4922-8F6A-2DEB2CCEB252_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working<br>
<strong>From:</strong> Andrej Prsa (<em>aprsa09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-21 18:55:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15684.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Previous message:</strong> <a href="15682.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>In reply to:</strong> <a href="15682.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15684.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Hate to keep bothering you, but could you ensure this is a debug
</span><br>
<span class="quotelev1">&gt; build (i.e., was configured with --enable-debug), and then set -mca
</span><br>
<span class="quotelev1">&gt; odls_base_verbose 5 --leave-session-attached on the cmd line?
</span><br>
<p>No bother at all -- would love to help. I recompiled 1.8.2rc4 with
<br>
debug and issued:
<br>
<p>/usr/local/openmpi-1.8.2rc4/bin/mpirun -np 48 --hostfile hosts -mca
<br>
odls_base_verbose 5 --leave-session-attached just_phb.py &gt; test.std 2&gt;
<br>
test.ste
<br>
<p>I'm attaching test.ste.
<br>
<p>Cheers,
<br>
Andrej
<br>
<p>
<br><hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15683/test.ste.bz2">test.ste.bz2</a>
</ul>
<!-- attachment="test.ste.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15684.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Previous message:</strong> <a href="15682.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>In reply to:</strong> <a href="15682.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15684.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
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
