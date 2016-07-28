<?
$subject_val = "Re: [OMPI devel] trunk breakage";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 14:33:40 2008" -->
<!-- isoreceived="20080123193340" -->
<!-- sent="Wed, 23 Jan 2008 14:29:56 -0500" -->
<!-- isosent="20080123192956" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk breakage" -->
<!-- id="075123B8-4C80-4927-89B8-025B79DA127B_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D0D03442-FC60-4055-A85E-73813DA7205D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk breakage<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-23 14:29:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3022.php">Jeff Squyres: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>Previous message:</strong> <a href="3020.php">Jeff Squyres: "[OMPI devel] trunk breakage"</a>
<li><strong>In reply to:</strong> <a href="3020.php">Jeff Squyres: "[OMPI devel] trunk breakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3024.php">Ralph H Castain: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>Reply:</strong> <a href="3024.php">Ralph H Castain: "Re: [OMPI devel] trunk breakage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should be fixed with r17184. Thanks for the quick bug report !
<br>
<p>Aurelien
<br>
<p>Le 23 janv. 08 &#224; 14:08, Jeff Squyres a &#233;crit :
<br>
<p><span class="quotelev1">&gt; The vprotocol pml does not compile for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory `/home/jsquyres/svn/ompi2/ompi/mca/pml/v/
</span><br>
<span class="quotelev1">&gt; vprotocol/pessimist'
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../../../../libtool --tag=CC   --mode=compile gcc -
</span><br>
<span class="quotelev1">&gt; DHAVE_CONFIG_H -I. -I../../../../../../opal/include -
</span><br>
<span class="quotelev1">&gt; I../../../../../../orte/include -I../../../../../../ompi/include -
</span><br>
<span class="quotelev1">&gt; I../../../../../../opal/mca/paffinity/linux/plpa/src/libplpa   -
</span><br>
<span class="quotelev1">&gt; I../../../../../..    -g -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev1">&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev1">&gt; implicit-function-declaration -finline-functions -fno-strict- 
</span><br>
<span class="quotelev1">&gt; aliasing -
</span><br>
<span class="quotelev1">&gt; pthread -MT mca_vprotocol_pessimist_la-
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_sender_based.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev1">&gt; mca_vprotocol_pessimist_la-vprotocol_pessimist_sender_based.Tpo -c -o
</span><br>
<span class="quotelev1">&gt; mca_vprotocol_pessimist_la-vprotocol_pessimist_sender_based.lo `test -
</span><br>
<span class="quotelev1">&gt; f 'vprotocol_pessimist_sender_based.c' || echo
</span><br>
<span class="quotelev1">&gt; './'`vprotocol_pessimist_sender_based.c
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../../../opal/
</span><br>
<span class="quotelev1">&gt; include -I../../../../../../orte/include -I../../../../../../ompi/
</span><br>
<span class="quotelev1">&gt; include -I../../../../../../opal/mca/paffinity/linux/plpa/src/ 
</span><br>
<span class="quotelev1">&gt; libplpa -
</span><br>
<span class="quotelev1">&gt; I../../../../../.. -g -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev1">&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev1">&gt; implicit-function-declaration -finline-functions -fno-strict- 
</span><br>
<span class="quotelev1">&gt; aliasing -
</span><br>
<span class="quotelev1">&gt; pthread -MT mca_vprotocol_pessimist_la-
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_sender_based.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev1">&gt; mca_vprotocol_pessimist_la-vprotocol_pessimist_sender_based.Tpo -c
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_sender_based.c  -fPIC -DPIC -o .libs/
</span><br>
<span class="quotelev1">&gt; mca_vprotocol_pessimist_la-vprotocol_pessimist_sender_based.o
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_sender_based.c: In function `sb_mmap_alloc':
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_sender_based.c:94: error: `MAP_NOCACHE' undeclared
</span><br>
<span class="quotelev1">&gt; (first use in this function)
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_sender_based.c:94: error: (Each undeclared
</span><br>
<span class="quotelev1">&gt; identifier is reported only once
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_sender_based.c:94: error: for each function it
</span><br>
<span class="quotelev1">&gt; appears in.)
</span><br>
<span class="quotelev1">&gt; make[4]: *** [mca_vprotocol_pessimist_la-
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_sender_based.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/home/jsquyres/svn/ompi2/ompi/mca/pml/v/
</span><br>
<span class="quotelev1">&gt; vprotocol/pessimist'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 23, 2008, at 12:27 PM, bouteill_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: bouteill
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2008-01-23 12:27:23 EST (Wed, 23 Jan 2008)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 17182
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17182">https://svn.open-mpi.org/trac/ompi/changeset/17182</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; removed ignore, as the code is robust enough to avoid interfering
</span><br>
<span class="quotelev2">&gt;&gt; with others
</span><br>
<span class="quotelev2">&gt;&gt; Removed:
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pml/v/.ompi_ignore
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/pml/v/.ompi_unignore
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Deleted: trunk/ompi/mca/pml/v/.ompi_ignore
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Deleted: trunk/ompi/mca/pml/v/.ompi_unignore
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; =
</span><br>
<span class="quotelev2">&gt;&gt; = 
</span><br>
<span class="quotelev2">&gt;&gt; =====================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/pml/v/.ompi_unignore	2008-01-23 12:27:23 EST
</span><br>
<span class="quotelev2">&gt;&gt; (Wed, 23 Jan 2008)
</span><br>
<span class="quotelev2">&gt;&gt; +++ (empty file)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1 +0,0 @@
</span><br>
<span class="quotelev2">&gt;&gt; -bouteill
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3022.php">Jeff Squyres: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<li><strong>Previous message:</strong> <a href="3020.php">Jeff Squyres: "[OMPI devel] trunk breakage"</a>
<li><strong>In reply to:</strong> <a href="3020.php">Jeff Squyres: "[OMPI devel] trunk breakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3024.php">Ralph H Castain: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>Reply:</strong> <a href="3024.php">Ralph H Castain: "Re: [OMPI devel] trunk breakage"</a>
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
