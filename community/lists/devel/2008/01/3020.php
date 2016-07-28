<?
$subject_val = "[OMPI devel] trunk breakage";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 14:08:31 2008" -->
<!-- isoreceived="20080123190831" -->
<!-- sent="Wed, 23 Jan 2008 14:08:20 -0500" -->
<!-- isosent="20080123190820" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk breakage" -->
<!-- id="D0D03442-FC60-4055-A85E-73813DA7205D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200801231727.m0NHROQS019118_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] trunk breakage<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-23 14:08:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3021.php">Aurélien Bouteiller: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>Previous message:</strong> <a href="3019.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17177"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3021.php">Aurélien Bouteiller: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>Reply:</strong> <a href="3021.php">Aurélien Bouteiller: "Re: [OMPI devel] trunk breakage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The vprotocol pml does not compile for me.
<br>
<p><p>make[4]: Entering directory `/home/jsquyres/svn/ompi2/ompi/mca/pml/v/ 
<br>
vprotocol/pessimist'
<br>
/bin/sh ../../../../../../libtool --tag=CC   --mode=compile gcc - 
<br>
DHAVE_CONFIG_H -I. -I../../../../../../opal/include - 
<br>
I../../../../../../orte/include -I../../../../../../ompi/include - 
<br>
I../../../../../../opal/mca/paffinity/linux/plpa/src/libplpa   - 
<br>
I../../../../../..    -g -Wall -Wundef -Wno-long-long -Wsign-compare - 
<br>
Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror- 
<br>
implicit-function-declaration -finline-functions -fno-strict-aliasing - 
<br>
pthread -MT mca_vprotocol_pessimist_la- 
<br>
vprotocol_pessimist_sender_based.lo -MD -MP -MF .deps/ 
<br>
mca_vprotocol_pessimist_la-vprotocol_pessimist_sender_based.Tpo -c -o  
<br>
mca_vprotocol_pessimist_la-vprotocol_pessimist_sender_based.lo `test - 
<br>
f 'vprotocol_pessimist_sender_based.c' || echo  
<br>
'./'`vprotocol_pessimist_sender_based.c
<br>
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../../../opal/ 
<br>
include -I../../../../../../orte/include -I../../../../../../ompi/ 
<br>
include -I../../../../../../opal/mca/paffinity/linux/plpa/src/libplpa - 
<br>
I../../../../../.. -g -Wall -Wundef -Wno-long-long -Wsign-compare - 
<br>
Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror- 
<br>
implicit-function-declaration -finline-functions -fno-strict-aliasing - 
<br>
pthread -MT mca_vprotocol_pessimist_la- 
<br>
vprotocol_pessimist_sender_based.lo -MD -MP -MF .deps/ 
<br>
mca_vprotocol_pessimist_la-vprotocol_pessimist_sender_based.Tpo -c  
<br>
vprotocol_pessimist_sender_based.c  -fPIC -DPIC -o .libs/ 
<br>
mca_vprotocol_pessimist_la-vprotocol_pessimist_sender_based.o
<br>
vprotocol_pessimist_sender_based.c: In function `sb_mmap_alloc':
<br>
vprotocol_pessimist_sender_based.c:94: error: `MAP_NOCACHE' undeclared  
<br>
(first use in this function)
<br>
vprotocol_pessimist_sender_based.c:94: error: (Each undeclared  
<br>
identifier is reported only once
<br>
vprotocol_pessimist_sender_based.c:94: error: for each function it  
<br>
appears in.)
<br>
make[4]: *** [mca_vprotocol_pessimist_la- 
<br>
vprotocol_pessimist_sender_based.lo] Error 1
<br>
make[4]: Leaving directory `/home/jsquyres/svn/ompi2/ompi/mca/pml/v/ 
<br>
vprotocol/pessimist'
<br>
make[3]: *** [all-recursive] Error 1
<br>
<p><p>On Jan 23, 2008, at 12:27 PM, bouteill_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: bouteill
</span><br>
<span class="quotelev1">&gt; Date: 2008-01-23 12:27:23 EST (Wed, 23 Jan 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 17182
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17182">https://svn.open-mpi.org/trac/ompi/changeset/17182</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; removed ignore, as the code is robust enough to avoid interfering  
</span><br>
<span class="quotelev1">&gt; with others
</span><br>
<span class="quotelev1">&gt; Removed:
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/v/.ompi_ignore
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/pml/v/.ompi_unignore
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Deleted: trunk/ompi/mca/pml/v/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Deleted: trunk/ompi/mca/pml/v/.ompi_unignore
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/pml/v/.ompi_unignore	2008-01-23 12:27:23 EST  
</span><br>
<span class="quotelev1">&gt; (Wed, 23 Jan 2008)
</span><br>
<span class="quotelev1">&gt; +++ (empty file)
</span><br>
<span class="quotelev1">&gt; @@ -1 +0,0 @@
</span><br>
<span class="quotelev1">&gt; -bouteill
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<li><strong>Next message:</strong> <a href="3021.php">Aurélien Bouteiller: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>Previous message:</strong> <a href="3019.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17177"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3021.php">Aurélien Bouteiller: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>Reply:</strong> <a href="3021.php">Aurélien Bouteiller: "Re: [OMPI devel] trunk breakage"</a>
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
