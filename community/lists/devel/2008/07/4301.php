<?
$subject_val = "Re: [OMPI devel] IOF repair";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 11:29:30 2008" -->
<!-- isoreceived="20080710152930" -->
<!-- sent="Thu, 10 Jul 2008 11:29:23 -0400" -->
<!-- isosent="20080710152923" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IOF repair" -->
<!-- id="13158698-7C6E-48CC-8355-1BF09EDD5F89_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0807101710070.24484_at_kenzo.iwr.uni-heidelberg.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-10 11:29:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4302.php">Brad Benton: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Previous message:</strong> <a href="4300.php">Bogdan Costescu: "Re: [OMPI devel] IOF repair"</a>
<li><strong>In reply to:</strong> <a href="4300.php">Bogdan Costescu: "Re: [OMPI devel] IOF repair"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4305.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Reply:</strong> <a href="4305.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Reply:</strong> <a href="4309.php">Ralph Castain: "Re: [OMPI devel] IOF repair"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ya, no worries -- we're working on a fix.  We're just debating exactly  
<br>
*how* to fix it.  See <a href="https://svn.open-mpi.org/trac/ompi/ticket/1135">https://svn.open-mpi.org/trac/ompi/ticket/1135</a>  
<br>
if you want to keep up with the conversation.
<br>
<p><p>On Jul 10, 2008, at 11:20 AM, Bogdan Costescu wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 9 Jul 2008, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; stdin is read twice if rank=0 shares the node with mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I consider this to be a very serious regression. Many Fortran  
</span><br>
<span class="quotelev1">&gt; scientific programs (at least many that I know) read their input  
</span><br>
<span class="quotelev1">&gt; from stdin. This comes as a result of them being (or started to be)  
</span><br>
<span class="quotelev1">&gt; written many years ago with Fortran77 for which AFAIK there is no  
</span><br>
<span class="quotelev1">&gt; defined way of handling command line parameters, so reading from  
</span><br>
<span class="quotelev1">&gt; stdin is a convenient and portable way to put some data into the  
</span><br>
<span class="quotelev1">&gt; program as this is known to be open already and at a well known I/O  
</span><br>
<span class="quotelev1">&gt; unit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just spent 2 days trying to understand why one such program  
</span><br>
<span class="quotelev1">&gt; (CHARMM) which worked fine for many MPI implementations on many  
</span><br>
<span class="quotelev1">&gt; platforms including the stable 1.2 series on this very cluster  
</span><br>
<span class="quotelev1">&gt; suddenly stops in some step related to processing input. After  
</span><br>
<span class="quotelev1">&gt; reading your message, everything makes sense...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alternatively, we could ship 1.3 as-is, and warn users (similar to  
</span><br>
<span class="quotelev2">&gt;&gt; 1.2) that
</span><br>
<span class="quotelev2">&gt;&gt; they should avoiding reading from stdin if there is any chance that  
</span><br>
<span class="quotelev2">&gt;&gt; rank=0
</span><br>
<span class="quotelev2">&gt;&gt; could be co-located with mpirun. Note that most of our clusters do  
</span><br>
<span class="quotelev2">&gt;&gt; not allow
</span><br>
<span class="quotelev2">&gt;&gt; such co-location - but it is permitted by default by OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know what setup your clusters have, but most that I have  
</span><br>
<span class="quotelev1">&gt; seen, including all those that I admin, do run mpirun/mpiexec and  
</span><br>
<span class="quotelev1">&gt; rank=0 on the same node. I really think that this will bite a lot of  
</span><br>
<span class="quotelev1">&gt; people.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Bogdan Costescu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IWR, University of Heidelberg, INF 368, D-69120 Heidelberg, Germany
</span><br>
<span class="quotelev1">&gt; Phone: +49 6221 54 8869/8240, Fax: +49 6221 54 8868/8850
</span><br>
<span class="quotelev1">&gt; E-mail: bogdan.costescu_at_[hidden]
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4302.php">Brad Benton: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>Previous message:</strong> <a href="4300.php">Bogdan Costescu: "Re: [OMPI devel] IOF repair"</a>
<li><strong>In reply to:</strong> <a href="4300.php">Bogdan Costescu: "Re: [OMPI devel] IOF repair"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4305.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Reply:</strong> <a href="4305.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<li><strong>Reply:</strong> <a href="4309.php">Ralph Castain: "Re: [OMPI devel] IOF repair"</a>
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
