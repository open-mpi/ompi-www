<?
$subject_val = "Re: [OMPI devel] IOF repair";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 11:20:40 2008" -->
<!-- isoreceived="20080710152040" -->
<!-- sent="Thu, 10 Jul 2008 17:20:34 +0200 (CEST)" -->
<!-- isosent="20080710152034" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IOF repair" -->
<!-- id="Pine.LNX.4.64.0807101710070.24484_at_kenzo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C49AA54C.573E%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] IOF repair<br>
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-10 11:20:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4301.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Previous message:</strong> <a href="4299.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>In reply to:</strong> <a href="4292.php">Ralph Castain: "[OMPI devel] IOF repair"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4301.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Reply:</strong> <a href="4301.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 9 Jul 2008, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; stdin is read twice if rank=0 shares the node with mpirun
</span><br>
<p>I consider this to be a very serious regression. Many Fortran 
<br>
scientific programs (at least many that I know) read their input from 
<br>
stdin. This comes as a result of them being (or started to be) written 
<br>
many years ago with Fortran77 for which AFAIK there is no defined way 
<br>
of handling command line parameters, so reading from stdin is a 
<br>
convenient and portable way to put some data into the program as this 
<br>
is known to be open already and at a well known I/O unit.
<br>
<p>I just spent 2 days trying to understand why one such program (CHARMM) 
<br>
which worked fine for many MPI implementations on many platforms 
<br>
including the stable 1.2 series on this very cluster suddenly stops in 
<br>
some step related to processing input. After reading your message, 
<br>
everything makes sense...
<br>
<p><span class="quotelev1">&gt; Alternatively, we could ship 1.3 as-is, and warn users (similar to 1.2) that
</span><br>
<span class="quotelev1">&gt; they should avoiding reading from stdin if there is any chance that rank=0
</span><br>
<span class="quotelev1">&gt; could be co-located with mpirun. Note that most of our clusters do not allow
</span><br>
<span class="quotelev1">&gt; such co-location - but it is permitted by default by OMPI.
</span><br>
<p>I don't know what setup your clusters have, but most that I have seen, 
<br>
including all those that I admin, do run mpirun/mpiexec and rank=0 on 
<br>
the same node. I really think that this will bite a lot of people.
<br>
<p><pre>
-- 
Bogdan Costescu
IWR, University of Heidelberg, INF 368, D-69120 Heidelberg, Germany
Phone: +49 6221 54 8869/8240, Fax: +49 6221 54 8868/8850
E-mail: bogdan.costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4301.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Previous message:</strong> <a href="4299.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>In reply to:</strong> <a href="4292.php">Ralph Castain: "[OMPI devel] IOF repair"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4301.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Reply:</strong> <a href="4301.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
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
