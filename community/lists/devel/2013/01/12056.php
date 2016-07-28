<?
$subject_val = "[OMPI devel] trunk install failure [brbarret]";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 01:15:33 2013" -->
<!-- isoreceived="20130129061533" -->
<!-- sent="Mon, 28 Jan 2013 22:15:28 -0800" -->
<!-- isosent="20130129061528" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk install failure [brbarret]" -->
<!-- id="CAAvDA17n3uYVSR=7psPmyUb7T3rF4oScw31rhvwpKb8iLCNTZA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] trunk install failure [brbarret]<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-29 01:15:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12057.php">Joshua Ladd: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Previous message:</strong> <a href="12055.php">Ralph Castain: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12071.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  trunk install failure [brbarret]"</a>
<li><strong>Reply:</strong> <a href="12071.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  trunk install failure [brbarret]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using tonight's trunk tarball (r27954) configured using
<br>
&quot;--with-devel-headers&quot; it looks like &quot;make install&quot; is trying to install
<br>
rte_orte.h TWICE:
<br>
<p>&nbsp;/usr/bin/install -c -m 644  ../../../../../ompi/mca/rte/orte/rte_orte.h
<br>
<span class="quotelev1">&gt; ../../../../../ompi/mca/rte/orte/rte_orte.h
</span><br>
<span class="quotelev1">&gt; '/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.9a1r27954/BUILD-edison/INSTALL/include/openmpi/ompi/mca/rte/orte/.'
</span><br>
<span class="quotelev1">&gt; /usr/bin/install: will not overwrite just-created
</span><br>
<span class="quotelev1">&gt; `/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.9a1r27954/BUILD-edison/INSTALL/include/openmpi/ompi/mca/rte/orte/./rte_orte.h'
</span><br>
<span class="quotelev1">&gt; with `../../../../../ompi/mca/rte/orte/rte_orte.h'
</span><br>
<p><p>This is because the file is in $(headers) in ompi/mca/rte/orte/Makefile.am
<br>
upto twice:
<br>
<p><span class="quotelev1">&gt; headers = rte_orte.h
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; # Conditionally install the header files
</span><br>
<span class="quotelev1">&gt; if WANT_INSTALL_HEADERS
</span><br>
<span class="quotelev1">&gt; headers += rte_orte.h
</span><br>
<p><p>This entire Makefile.am appears to have been added to the trunk by Brian on
<br>
Sunday.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12056/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12057.php">Joshua Ladd: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Previous message:</strong> <a href="12055.php">Ralph Castain: "Re: [OMPI devel] Open MPI on Cray XC30 - suspicous configury"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12071.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  trunk install failure [brbarret]"</a>
<li><strong>Reply:</strong> <a href="12071.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  trunk install failure [brbarret]"</a>
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
