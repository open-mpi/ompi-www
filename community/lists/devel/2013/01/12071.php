<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  trunk install failure [brbarret]";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 12:24:59 2013" -->
<!-- isoreceived="20130129172459" -->
<!-- sent="Tue, 29 Jan 2013 17:24:34 +0000" -->
<!-- isosent="20130129172434" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  trunk install failure [brbarret]" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD317DA12E_at_EXMB01.srn.sandia.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAAvDA17n3uYVSR=7psPmyUb7T3rF4oScw31rhvwpKb8iLCNTZA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  trunk install failure [brbarret]<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-29 12:24:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12072.php">Siegmar Gross: "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="12070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>In reply to:</strong> <a href="12056.php">Paul Hargrove: "[OMPI devel] trunk install failure [brbarret]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for noticing this.  Fixed in the trunk.
<br>
<p>Brian
<br>
<p>On 1/28/13 11:15 PM, &quot;Paul Hargrove&quot; &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Using tonight's trunk tarball (r27954) configured using &quot;--with-devel-headers&quot;
</span><br>
<span class="quotelev1">&gt; it looks like &quot;make install&quot; is trying to install rte_orte.h TWICE:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  /usr/bin/install -c -m 644  ../../../../../ompi/mca/rte/orte/rte_orte.h
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/mca/rte/orte/rte_orte.h
</span><br>
<span class="quotelev2">&gt;&gt; '/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.9a1r27954/BUILD-edison/INST
</span><br>
<span class="quotelev2">&gt;&gt; ALL/include/openmpi/ompi/mca/rte/orte/.'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/install: will not overwrite just-created
</span><br>
<span class="quotelev2">&gt;&gt; `/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.9a1r27954/BUILD-edison/INST
</span><br>
<span class="quotelev2">&gt;&gt; ALL/include/openmpi/ompi/mca/rte/orte/./rte_orte.h' with
</span><br>
<span class="quotelev2">&gt;&gt; `../../../../../ompi/mca/rte/orte/rte_orte.h'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is because the file is in $(headers) in ompi/mca/rte/orte/Makefile.am
</span><br>
<span class="quotelev1">&gt; upto twice:
</span><br>
<span class="quotelev2">&gt;&gt; headers = rte_orte.h
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; # Conditionally install the header files
</span><br>
<span class="quotelev2">&gt;&gt; if WANT_INSTALL_HEADERS
</span><br>
<span class="quotelev2">&gt;&gt; headers += rte_orte.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This entire Makefile.am appears to have been added to the trunk by Brian on
</span><br>
<span class="quotelev1">&gt; Sunday.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12071/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12071/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12072.php">Siegmar Gross: "Re: [OMPI devel] RFC: Remove (broken) heterogeneous support"</a>
<li><strong>Previous message:</strong> <a href="12070.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: opal_list iteration macros"</a>
<li><strong>In reply to:</strong> <a href="12056.php">Paul Hargrove: "[OMPI devel] trunk install failure [brbarret]"</a>
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
