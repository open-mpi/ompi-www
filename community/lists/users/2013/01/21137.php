<?
$subject_val = "Re: [OMPI users] libmpi_f90 shared lib version number change in 1.6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 12:12:15 2013" -->
<!-- isoreceived="20130116171215" -->
<!-- sent="Wed, 16 Jan 2013 17:12:09 +0000" -->
<!-- isosent="20130116171209" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libmpi_f90 shared lib version number change in 1.6.3" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC380BC298_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1357985174.3355.65.camel_at_lurvas.hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] libmpi_f90 shared lib version number change in 1.6.3<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-16 12:12:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21138.php">Divakar Viswanath: "[OMPI users] openmpi 1.4 vs. 1.6 internals"</a>
<li><strong>Previous message:</strong> <a href="21136.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>In reply to:</strong> <a href="21112.php">Ake Sandgren: "[OMPI users] libmpi_f90 shared lib version number change in 1.6.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 12, 2013, at 5:06 AM, Ake Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Was the change for libmpi_f90 in VERSION intentional or a typo?
</span><br>
<span class="quotelev1">&gt; This is from openmpi 1.6.3
</span><br>
<span class="quotelev1">&gt; libmpi_f90_so_version=4:0:1
</span><br>
<span class="quotelev1">&gt; 1.6.1 had
</span><br>
<span class="quotelev1">&gt; libmpi_f90_so_version=2:0:1
</span><br>
<p><p>It was both intentional and a typo.  
<br>
<p>Specifically, it really should have bee 4:0:3.  :-(
<br>
<p>Meaning: we unintentionally broke the F90 ABI for 1.6.3 (specifically: OMPI applications compiled to utilize &quot;use mpi&quot;). :-( :-( :-(  
<br>
<p>This ABI compatibility will be restored in 1.6.4.
<br>
<p>-----
<br>
<p>See these commit messages for a fuller explanation:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/27471">https://svn.open-mpi.org/trac/ompi/changeset/27471</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/27558">https://svn.open-mpi.org/trac/ompi/changeset/27558</a>
<br>
<p>The short explanation is that, in terms of the &quot;use mpi&quot; interface, all Open MPI 1.6.x versions are ABI compatible except 1.6.3.
<br>
<p>These work:
<br>
<p>- compile a &quot;use mpi&quot; OMPI application with 1.6.x (where x!=3), change your LD_LIBRARY_PATH to point to a different OMPI 1.6.x installation (where x!=3)
<br>
<p>- compile a &quot;use mpi&quot; OMPI application with 1.6.3, use it with OMPI 1.6.3 installation
<br>
<p>These do not:
<br>
<p>- compile a &quot;use mpi&quot; OMPI application with 1.6.x (where x!=3), change your LD_LIBRARY_PATH to point an OMPI 1.6.3 installation
<br>
<p>- compile a &quot;use mpi&quot; OMPI application with 1.6.3, use it with OMPI 1.6.x installation (where x!=3)
<br>
<p>I will make an FAQ item about this so that the result is google-able.
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
<li><strong>Next message:</strong> <a href="21138.php">Divakar Viswanath: "[OMPI users] openmpi 1.4 vs. 1.6 internals"</a>
<li><strong>Previous message:</strong> <a href="21136.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>In reply to:</strong> <a href="21112.php">Ake Sandgren: "[OMPI users] libmpi_f90 shared lib version number change in 1.6.3"</a>
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
