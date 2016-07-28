<?
$subject_val = "Re: [OMPI devel] IOF repair";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 14:27:33 2008" -->
<!-- isoreceived="20080710182733" -->
<!-- sent="Thu, 10 Jul 2008 14:27:27 -0400" -->
<!-- isosent="20080710182727" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IOF repair" -->
<!-- id="0495F879-1507-41CF-8191-9E42846F1E0A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="13158698-7C6E-48CC-8355-1BF09EDD5F89_at_cisco.com" -->
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
<strong>Date:</strong> 2008-07-10 14:27:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4306.php">Ralph Castain: "[OMPI devel] July meeting"</a>
<li><strong>Previous message:</strong> <a href="4304.php">Jeff Squyres: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>In reply to:</strong> <a href="4301.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4309.php">Ralph Castain: "Re: [OMPI devel] IOF repair"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[Finally] Fixed in <a href="https://svn.open-mpi.org/trac/ompi/changeset/18873">https://svn.open-mpi.org/trac/ompi/changeset/18873</a>.
<br>
<p><p>On Jul 10, 2008, at 11:29 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Ya, no worries -- we're working on a fix.  We're just debating  
</span><br>
<span class="quotelev1">&gt; exactly *how* to fix it.  See <a href="https://svn.open-mpi.org/trac/ompi/ticket/1135">https://svn.open-mpi.org/trac/ompi/ticket/1135</a> 
</span><br>
<span class="quotelev1">&gt;  if you want to keep up with the conversation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 10, 2008, at 11:20 AM, Bogdan Costescu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 9 Jul 2008, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stdin is read twice if rank=0 shares the node with mpirun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I consider this to be a very serious regression. Many Fortran  
</span><br>
<span class="quotelev2">&gt;&gt; scientific programs (at least many that I know) read their input  
</span><br>
<span class="quotelev2">&gt;&gt; from stdin. This comes as a result of them being (or started to be)  
</span><br>
<span class="quotelev2">&gt;&gt; written many years ago with Fortran77 for which AFAIK there is no  
</span><br>
<span class="quotelev2">&gt;&gt; defined way of handling command line parameters, so reading from  
</span><br>
<span class="quotelev2">&gt;&gt; stdin is a convenient and portable way to put some data into the  
</span><br>
<span class="quotelev2">&gt;&gt; program as this is known to be open already and at a well known I/O  
</span><br>
<span class="quotelev2">&gt;&gt; unit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just spent 2 days trying to understand why one such program  
</span><br>
<span class="quotelev2">&gt;&gt; (CHARMM) which worked fine for many MPI implementations on many  
</span><br>
<span class="quotelev2">&gt;&gt; platforms including the stable 1.2 series on this very cluster  
</span><br>
<span class="quotelev2">&gt;&gt; suddenly stops in some step related to processing input. After  
</span><br>
<span class="quotelev2">&gt;&gt; reading your message, everything makes sense...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alternatively, we could ship 1.3 as-is, and warn users (similar to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.2) that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they should avoiding reading from stdin if there is any chance  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that rank=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could be co-located with mpirun. Note that most of our clusters do  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not allow
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such co-location - but it is permitted by default by OMPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know what setup your clusters have, but most that I have  
</span><br>
<span class="quotelev2">&gt;&gt; seen, including all those that I admin, do run mpirun/mpiexec and  
</span><br>
<span class="quotelev2">&gt;&gt; rank=0 on the same node. I really think that this will bite a lot  
</span><br>
<span class="quotelev2">&gt;&gt; of people.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Bogdan Costescu
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IWR, University of Heidelberg, INF 368, D-69120 Heidelberg, Germany
</span><br>
<span class="quotelev2">&gt;&gt; Phone: +49 6221 54 8869/8240, Fax: +49 6221 54 8868/8850
</span><br>
<span class="quotelev2">&gt;&gt; E-mail: bogdan.costescu_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="4306.php">Ralph Castain: "[OMPI devel] July meeting"</a>
<li><strong>Previous message:</strong> <a href="4304.php">Jeff Squyres: "Re: [OMPI devel] v1.3 RM: need a ruling"</a>
<li><strong>In reply to:</strong> <a href="4301.php">Jeff Squyres: "Re: [OMPI devel] IOF repair"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4309.php">Ralph Castain: "Re: [OMPI devel] IOF repair"</a>
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
