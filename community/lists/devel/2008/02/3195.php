<?
$subject_val = "Re: [OMPI devel] Fixlet for config/ompi_contrib.m4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 12 06:50:38 2008" -->
<!-- isoreceived="20080212115038" -->
<!-- sent="Tue, 12 Feb 2008 12:50:29 +0100" -->
<!-- isosent="20080212115029" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fixlet for config/ompi_contrib.m4" -->
<!-- id="1202817029.5844.25.camel_at_ricolap" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20080211201442.GB10939_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fixlet for config/ompi_contrib.m4<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-12 06:50:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3196.php">Andreas Knüpfer: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<li><strong>Previous message:</strong> <a href="3194.php">Gleb Natapov: "[OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
<li><strong>In reply to:</strong> <a href="3184.php">Ralf Wildenhues: "[OMPI devel] Fixlet for config/ompi_contrib.m4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralf,
<br>
<p>thanks for the patch. I've added this to the trunk...
<br>
<p><p>Matthias
<br>
<p>On Mo, 2008-02-11 at 21:14 +0100, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; please apply this patch, to make future contrib integration just a tad
</span><br>
<span class="quotelev1">&gt; bit easier.  I verified that the generated configure script is
</span><br>
<span class="quotelev1">&gt; identical, minus whitespace and comments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2008-02-11  Ralf Wildenhues  &lt;Ralf.Wildenhues_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	* config/ompi_contrib.m4 (OMPI_CONTRIB): Unify listings of
</span><br>
<span class="quotelev1">&gt; 	contrib software packages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: config/ompi_contrib.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- config/ompi_contrib.m4	(Revision 17419)
</span><br>
<span class="quotelev1">&gt; +++ config/ompi_contrib.m4	(Arbeitskopie)
</span><br>
<span class="quotelev1">&gt; @@ -67,20 +67,13 @@
</span><br>
<span class="quotelev1">&gt;      # Cycle through each of the hard-coded software packages and
</span><br>
<span class="quotelev1">&gt;      # configure them if not disabled.  May someday be expanded to have
</span><br>
<span class="quotelev1">&gt;      # autogen find the packages instead of this hard-coded list
</span><br>
<span class="quotelev1">&gt; -    # (<a href="https://svn.open-mpi.org/trac/ompi/ticket/1162">https://svn.open-mpi.org/trac/ompi/ticket/1162</a>).  I couldn't
</span><br>
<span class="quotelev1">&gt; -    # figure out a simple/easy way to have the m4 foreach do the m4
</span><br>
<span class="quotelev1">&gt; -    # include *and* all the rest of the stuff, so I settled for having
</span><br>
<span class="quotelev1">&gt; -    # two lists: each contribted software package will need to add its
</span><br>
<span class="quotelev1">&gt; -    # configure.m4 list here and then add its name to the m4 define
</span><br>
<span class="quotelev1">&gt; -    # for contrib_software_list.  Cope.
</span><br>
<span class="quotelev1">&gt; -#dnl    m4_include(ompi/contrib/libnbc/configure.m4)
</span><br>
<span class="quotelev1">&gt; -    m4_include(ompi/contrib/vt/configure.m4)
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -    m4_define(contrib_software_list, [vt])
</span><br>
<span class="quotelev1">&gt; -#dnl    m4_define(contrib_software_list, [libnbc, vt])
</span><br>
<span class="quotelev1">&gt; +    # (<a href="https://svn.open-mpi.org/trac/ompi/ticket/1162">https://svn.open-mpi.org/trac/ompi/ticket/1162</a>).
</span><br>
<span class="quotelev1">&gt; +    # m4_define([contrib_software_list], [libnbc, vt])
</span><br>
<span class="quotelev1">&gt; +    m4_define([contrib_software_list], [vt])
</span><br>
<span class="quotelev1">&gt;      m4_foreach(software, [contrib_software_list],
</span><br>
<span class="quotelev1">&gt; -               [OMPI_CONTRIB_DIST_SUBDIRS=&quot;$OMPI_CONTRIB_DIST_SUBDIRS contrib/software&quot;
</span><br>
<span class="quotelev1">&gt; -               _OMPI_CONTRIB_CONFIGURE(software)])
</span><br>
<span class="quotelev1">&gt; +	       [m4_include([ompi/contrib/]software[/configure.m4])
</span><br>
<span class="quotelev1">&gt; +	       OMPI_CONTRIB_DIST_SUBDIRS=&quot;$OMPI_CONTRIB_DIST_SUBDIRS contrib/software&quot;
</span><br>
<span class="quotelev1">&gt; +	       _OMPI_CONTRIB_CONFIGURE(software)])
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      # Setup the top-level glue
</span><br>
<span class="quotelev1">&gt;      AC_SUBST(OMPI_CONTRIB_SUBDIRS)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
--
Matthias Jurenz,
Center for Information Services and 
High Performance Computing (ZIH), TU Dresden, 
Willersbau A106, Zellescher Weg 12, 01062 Dresden
phone +49-351-463-31945, fax +49-351-463-37773
</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3195/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3195/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3196.php">Andreas Knüpfer: "Re: [OMPI devel] VT integration: make distclean problem"</a>
<li><strong>Previous message:</strong> <a href="3194.php">Gleb Natapov: "[OMPI devel] [RFC] Remove explicit call to progress() from ob1."</a>
<li><strong>In reply to:</strong> <a href="3184.php">Ralf Wildenhues: "[OMPI devel] Fixlet for config/ompi_contrib.m4"</a>
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
