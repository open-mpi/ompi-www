<?
$subject_val = "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 17 11:12:00 2011" -->
<!-- isoreceived="20110117161200" -->
<!-- sent="Mon, 17 Jan 2011 17:11:55 +0100" -->
<!-- isosent="20110117161155" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk" -->
<!-- id="4D346A4B.80900_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D3467A6.1010605_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk<br>
<strong>From:</strong> Pascal Deveze (<em>Pascal.Deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-17 11:11:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8883.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>Previous message:</strong> <a href="8881.php">Pascal Deveze: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>In reply to:</strong> <a href="8881.php">Pascal Deveze: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8887.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8887.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>You removed the following files 
<br>
(<a href="https://bitbucket.org/devezep/new-romio-for-openmpi/changeset/9b8f70de722d">https://bitbucket.org/devezep/new-romio-for-openmpi/changeset/9b8f70de722d</a>). 
<br>
I see that they are in the trunk. Shall I remove them again ?
<br>
<p>HACKING
<br>
config/Makefile.options
<br>
config/libltdl-preopen-error.diff
<br>
config/lt224-icc.diff
<br>
config/mca_acinclude.m4
<br>
config/mca_configure.ac
<br>
config/mca_make_configure.pl
<br>
config/ompi_check_libfca.m4
<br>
config/ompi_ensure_contains_optflags.m4
<br>
config/ompi_ext.m4
<br>
config/ompi_microsoft.m4
<br>
config/ompi_setup_component_package.m4
<br>
config/ompi_strip_optflags.m4
<br>
contrib/check_unnecessary_headers.sh
<br>
contrib/code_counter.pl
<br>
contrib/copyright.pl
<br>
contrib/dist/find-copyrights.pl
<br>
contrib/dist/gkcommit.pl
<br>
contrib/dist/linux/README
<br>
contrib/dist/linux/README.ompi-spec-generator
<br>
contrib/dist/linux/buildrpm.sh
<br>
contrib/dist/linux/buildswitcherrpm.sh
<br>
contrib/dist/linux/ompi-spec-generator.py
<br>
contrib/dist/linux/openmpi-switcher-modulefile.spec
<br>
contrib/dist/linux/openmpi-switcher-modulefile.tcl
<br>
contrib/dist/make-authors.pl
<br>
contrib/dist/make_tarball
<br>
contrib/find_occurence.pl
<br>
contrib/find_offenders.pl
<br>
contrib/fix_headers.pl
<br>
contrib/fix_indent.pl
<br>
contrib/gen_stats.pl
<br>
contrib/generate_file_list.pl
<br>
contrib/header_replacement.sh
<br>
contrib/headers.txt
<br>
contrib/hg/build-hgignore.pl
<br>
contrib/hg/set-hg-share-perms.csh
<br>
contrib/nightly/build_sample_config.txt
<br>
contrib/nightly/build_tarball.pl
<br>
contrib/nightly/build_tests.pl
<br>
contrib/nightly/check_devel_headers.pl
<br>
contrib/nightly/create_tarball.sh
<br>
contrib/nightly/illegal_symbols_report.pl
<br>
contrib/nightly/ompi_cronjob.sh
<br>
contrib/nightly/unimplemented_report.sh
<br>
contrib/ompi_cplusplus.sed
<br>
contrib/ompi_cplusplus.sh
<br>
contrib/ompi_cplusplus.txt
<br>
contrib/platform/cisco/ebuild/hlfr
<br>
contrib/platform/cisco/ebuild/hlfr.conf
<br>
<p><p>Pascal Deveze a &#233;crit :
<br>
<span class="quotelev1">&gt; The bitbucket tree 
</span><br>
<span class="quotelev1">&gt; (<a href="https://bitbucket.org/devezep/new-romio-for-openmpi">https://bitbucket.org/devezep/new-romio-for-openmpi</a>) has just been 
</span><br>
<span class="quotelev1">&gt; updated with the open-mpi trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have made three patches:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hg out
</span><br>
<span class="quotelev1">&gt; comparing with ssh://hg@bitbucket.org/devezep/new-romio-for-openmpi
</span><br>
<span class="quotelev1">&gt; searching for changes
</span><br>
<span class="quotelev1">&gt; changeset:   25:3e677102a125
</span><br>
<span class="quotelev1">&gt; user:        Pascal Deveze &lt;Pascal.Deveze_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; date:        Mon Jan 17 13:40:10 2011 +0100
</span><br>
<span class="quotelev1">&gt; summary:     Remove all files
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; changeset:   26:e3989f46f83a
</span><br>
<span class="quotelev1">&gt; user:        Pascal Deveze &lt;Pascal.Deveze_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; date:        Mon Jan 17 14:46:48 2011 +0100
</span><br>
<span class="quotelev1">&gt; summary:     Import from <a href="http://svn.open-mpi.org/svn/ompi/trunki">http://svn.open-mpi.org/svn/ompi/trunki</a> (r24256)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; changeset:   27:97f54ec8a575
</span><br>
<span class="quotelev1">&gt; tag:         tip
</span><br>
<span class="quotelev1">&gt; user:        Pascal Deveze &lt;Pascal.Deveze_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; date:        Mon Jan 17 16:14:06 2011 +0100
</span><br>
<span class="quotelev1">&gt; summary:     New Romio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tested the result and the ROMIO tests are OK.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8883.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>Previous message:</strong> <a href="8881.php">Pascal Deveze: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>In reply to:</strong> <a href="8881.php">Pascal Deveze: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8887.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8887.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
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
