<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat May 19 03:40:20 2007" -->
<!-- isoreceived="20070519074020" -->
<!-- sent="Sat, 19 May 2007 09:40:41 +0200" -->
<!-- isosent="20070519074041" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication" -->
<!-- id="20070519074041.GE14385_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1BA88196-1A31-43B6-9779-DB557984AE06_at_cs.utk.edu" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-19 03:40:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3303.php">Michael Alexander: "[OMPI users] Call for Book Chapters: Process Algebra/Algebraic Languages and Parallel Processing"</a>
<li><strong>Previous message:</strong> <a href="3301.php">Jeff Squyres: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>In reply to:</strong> <a href="3295.php">George Bosilca: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3322.php">Code Master: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Reply:</strong> <a href="3322.php">Code Master: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, May 18, 2007 at 05:53:21PM -0400, George Bosilca wrote:
<br>
<p>[bind BTL/TCP+OOB to specific port]
<br>
<span class="quotelev1">&gt; As the linux kernel need some time before completely cleaning up the  
</span><br>
<span class="quotelev1">&gt; socket, this approach can lead to many problems.
</span><br>
<p>Absolutely. My propose cannot be consired useful for productive
<br>
environments. As you've already mentioned, it wouldn't be possible to
<br>
run more than one process per node.
<br>
<p>I see two additional approaches: let the BTL component write its
<br>
listening output to stdout (or a file) and collect these information
<br>
from every participating node. This is more or less a very reduced
<br>
version of WANT_PEER_DUMP.
<br>
<p>The second option would dump the corresponding GPR entries, e.g. on
<br>
rank 0. I'm thinking of btl_tcp_proc.c:111, somewhere after
<br>
mca_pml_base_modex_recv(). In line 144, we iterate over each received
<br>
address. It shouldn't be too hard for &quot;Code Master&quot; to write the
<br>
ports into a file.
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
<li><strong>Next message:</strong> <a href="3303.php">Michael Alexander: "[OMPI users] Call for Book Chapters: Process Algebra/Algebraic Languages and Parallel Processing"</a>
<li><strong>Previous message:</strong> <a href="3301.php">Jeff Squyres: "Re: [OMPI users] Can not execute a simple command with openmpi"</a>
<li><strong>In reply to:</strong> <a href="3295.php">George Bosilca: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3322.php">Code Master: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<li><strong>Reply:</strong> <a href="3322.php">Code Master: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
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
