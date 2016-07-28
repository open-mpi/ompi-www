<?
$subject_val = "Re: [OMPI devel] trunk breakage";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 14:59:44 2008" -->
<!-- isoreceived="20080123195944" -->
<!-- sent="Wed, 23 Jan 2008 12:59:35 -0700" -->
<!-- isosent="20080123195935" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk breakage" -->
<!-- id="C3BCEAB7.BE32%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="075123B8-4C80-4927-89B8-025B79DA127B_at_eecs.utk.edu" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-23 14:59:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3025.php">Jeff Squyres: "[OMPI devel] v pml question"</a>
<li><strong>Previous message:</strong> <a href="3023.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17177"</a>
<li><strong>In reply to:</strong> <a href="3021.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] trunk breakage"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Still no joy...
<br>
<p>pn1180961:~/openmpi/trunk rhc$ make install &gt; /dev/null
<br>
vprotocol_pessimist_sender_based.c: In function 'sb_mmap_file_open':
<br>
vprotocol_pessimist_sender_based.c:43: error: 'errno' undeclared (first use
<br>
in this function)
<br>
vprotocol_pessimist_sender_based.c:43: error: (Each undeclared identifier is
<br>
reported only once
<br>
vprotocol_pessimist_sender_based.c:43: error: for each function it appears
<br>
in.)
<br>
vprotocol_pessimist_sender_based.c: In function 'sb_mmap_file_close':
<br>
vprotocol_pessimist_sender_based.c:58: error: 'errno' undeclared (first use
<br>
in this function)
<br>
vprotocol_pessimist_sender_based.c: In function 'sb_mmap_alloc':
<br>
vprotocol_pessimist_sender_based.c:91: error: 'errno' undeclared (first use
<br>
in this function)
<br>
vprotocol_pessimist_sender_based.c: In function 'sb_mmap_free':
<br>
vprotocol_pessimist_sender_based.c:118: error: 'errno' undeclared (first use
<br>
in this function)
<br>
make[4]: *** 
<br>
[libmca_vprotocol_pessimist_la-vprotocol_pessimist_sender_based.lo] Error 1
<br>
make[3]: *** [install-recursive] Error 1
<br>
make[2]: *** [install-recursive] Error 1
<br>
make[1]: *** [install-recursive] Error 1
<br>
make: *** [install-recursive] Error 1
<br>
<p><p><p>On 1/23/08 12:29 PM, &quot;Aur&#233;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Should be fixed with r17184. Thanks for the quick bug report !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aurelien
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 23 janv. 08 &#224; 14:08, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The vprotocol pml does not compile for me.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Entering directory `/home/jsquyres/svn/ompi2/ompi/mca/pml/v/
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol/pessimist'
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../../../libtool --tag=CC   --mode=compile gcc -
</span><br>
<span class="quotelev2">&gt;&gt; DHAVE_CONFIG_H -I. -I../../../../../../opal/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../../../orte/include -I../../../../../../ompi/include -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../../../opal/mca/paffinity/linux/plpa/src/libplpa   -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../../..    -g -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -MT mca_vprotocol_pessimist_la-
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; mca_vprotocol_pessimist_la-vprotocol_pessimist_sender_based.Tpo -c -o
</span><br>
<span class="quotelev2">&gt;&gt; mca_vprotocol_pessimist_la-vprotocol_pessimist_sender_based.lo `test -
</span><br>
<span class="quotelev2">&gt;&gt; f 'vprotocol_pessimist_sender_based.c' || echo
</span><br>
<span class="quotelev2">&gt;&gt; './'`vprotocol_pessimist_sender_based.c
</span><br>
<span class="quotelev2">&gt;&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I../../../../../../opal/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../../../orte/include -I../../../../../../ompi/
</span><br>
<span class="quotelev2">&gt;&gt; include -I../../../../../../opal/mca/paffinity/linux/plpa/src/
</span><br>
<span class="quotelev2">&gt;&gt; libplpa -
</span><br>
<span class="quotelev2">&gt;&gt; I../../../../../.. -g -Wall -Wundef -Wno-long-long -Wsign-compare -
</span><br>
<span class="quotelev2">&gt;&gt; Wmissing-prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror-
</span><br>
<span class="quotelev2">&gt;&gt; implicit-function-declaration -finline-functions -fno-strict-
</span><br>
<span class="quotelev2">&gt;&gt; aliasing -
</span><br>
<span class="quotelev2">&gt;&gt; pthread -MT mca_vprotocol_pessimist_la-
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.lo -MD -MP -MF .deps/
</span><br>
<span class="quotelev2">&gt;&gt; mca_vprotocol_pessimist_la-vprotocol_pessimist_sender_based.Tpo -c
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.c  -fPIC -DPIC -o .libs/
</span><br>
<span class="quotelev2">&gt;&gt; mca_vprotocol_pessimist_la-vprotocol_pessimist_sender_based.o
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.c: In function `sb_mmap_alloc':
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.c:94: error: `MAP_NOCACHE' undeclared
</span><br>
<span class="quotelev2">&gt;&gt; (first use in this function)
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.c:94: error: (Each undeclared
</span><br>
<span class="quotelev2">&gt;&gt; identifier is reported only once
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.c:94: error: for each function it
</span><br>
<span class="quotelev2">&gt;&gt; appears in.)
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [mca_vprotocol_pessimist_la-
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_sender_based.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: Leaving directory `/home/jsquyres/svn/ompi2/ompi/mca/pml/v/
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol/pessimist'
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 23, 2008, at 12:27 PM, bouteill_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Author: bouteill
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: 2008-01-23 12:27:23 EST (Wed, 23 Jan 2008)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New Revision: 17182
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17182">https://svn.open-mpi.org/trac/ompi/changeset/17182</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; removed ignore, as the code is robust enough to avoid interfering
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with others
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Removed:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/pml/v/.ompi_ignore
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  trunk/ompi/mca/pml/v/.ompi_unignore
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Deleted: trunk/ompi/mca/pml/v/.ompi_ignore
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Deleted: trunk/ompi/mca/pml/v/.ompi_unignore
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =
</span><br>
<span class="quotelev3">&gt;&gt;&gt; = 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =====================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- trunk/ompi/mca/pml/v/.ompi_unignore 2008-01-23 12:27:23 EST
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Wed, 23 Jan 2008)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ (empty file)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; @@ -1 +0,0 @@
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bouteill
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="3025.php">Jeff Squyres: "[OMPI devel] v pml question"</a>
<li><strong>Previous message:</strong> <a href="3023.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17177"</a>
<li><strong>In reply to:</strong> <a href="3021.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] trunk breakage"</a>
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
