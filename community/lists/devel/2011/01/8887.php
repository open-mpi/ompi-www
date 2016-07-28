<?
$subject_val = "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 18 09:30:05 2011" -->
<!-- isoreceived="20110118143005" -->
<!-- sent="Tue, 18 Jan 2011 09:30:00 -0500" -->
<!-- isosent="20110118143000" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk" -->
<!-- id="7CB46077-6543-4F82-BBBC-DDFF52EBFC20_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4D346A4B.80900_at_bull.net" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-18 09:30:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8888.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8886.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>In reply to:</strong> <a href="8882.php">Pascal Deveze: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8888.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  That looks like a merge gone bad; I'm not sure what happened there.  It could well be an artifact of traversing from 1.5 to 1.4, or something like that.  
<br>
<p>I would not re-remove these files.
<br>
<p><p>On Jan 17, 2011, at 11:11 AM, Pascal Deveze wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You removed the following files (<a href="https://bitbucket.org/devezep/new-romio-for-openmpi/changeset/9b8f70de722d">https://bitbucket.org/devezep/new-romio-for-openmpi/changeset/9b8f70de722d</a>). I see that they are in the trunk. Shall I remove them again ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HACKING
</span><br>
<span class="quotelev1">&gt; config/Makefile.options
</span><br>
<span class="quotelev1">&gt; config/libltdl-preopen-error.diff
</span><br>
<span class="quotelev1">&gt; config/lt224-icc.diff
</span><br>
<span class="quotelev1">&gt; config/mca_acinclude.m4
</span><br>
<span class="quotelev1">&gt; config/mca_configure.ac
</span><br>
<span class="quotelev1">&gt; config/mca_make_configure.pl
</span><br>
<span class="quotelev1">&gt; config/ompi_check_libfca.m4
</span><br>
<span class="quotelev1">&gt; config/ompi_ensure_contains_optflags.m4
</span><br>
<span class="quotelev1">&gt; config/ompi_ext.m4
</span><br>
<span class="quotelev1">&gt; config/ompi_microsoft.m4
</span><br>
<span class="quotelev1">&gt; config/ompi_setup_component_package.m4
</span><br>
<span class="quotelev1">&gt; config/ompi_strip_optflags.m4
</span><br>
<span class="quotelev1">&gt; contrib/check_unnecessary_headers.sh
</span><br>
<span class="quotelev1">&gt; contrib/code_counter.pl
</span><br>
<span class="quotelev1">&gt; contrib/copyright.pl
</span><br>
<span class="quotelev1">&gt; contrib/dist/find-copyrights.pl
</span><br>
<span class="quotelev1">&gt; contrib/dist/gkcommit.pl
</span><br>
<span class="quotelev1">&gt; contrib/dist/linux/README
</span><br>
<span class="quotelev1">&gt; contrib/dist/linux/README.ompi-spec-generator
</span><br>
<span class="quotelev1">&gt; contrib/dist/linux/buildrpm.sh
</span><br>
<span class="quotelev1">&gt; contrib/dist/linux/buildswitcherrpm.sh
</span><br>
<span class="quotelev1">&gt; contrib/dist/linux/ompi-spec-generator.py
</span><br>
<span class="quotelev1">&gt; contrib/dist/linux/openmpi-switcher-modulefile.spec
</span><br>
<span class="quotelev1">&gt; contrib/dist/linux/openmpi-switcher-modulefile.tcl
</span><br>
<span class="quotelev1">&gt; contrib/dist/make-authors.pl
</span><br>
<span class="quotelev1">&gt; contrib/dist/make_tarball
</span><br>
<span class="quotelev1">&gt; contrib/find_occurence.pl
</span><br>
<span class="quotelev1">&gt; contrib/find_offenders.pl
</span><br>
<span class="quotelev1">&gt; contrib/fix_headers.pl
</span><br>
<span class="quotelev1">&gt; contrib/fix_indent.pl
</span><br>
<span class="quotelev1">&gt; contrib/gen_stats.pl
</span><br>
<span class="quotelev1">&gt; contrib/generate_file_list.pl
</span><br>
<span class="quotelev1">&gt; contrib/header_replacement.sh
</span><br>
<span class="quotelev1">&gt; contrib/headers.txt
</span><br>
<span class="quotelev1">&gt; contrib/hg/build-hgignore.pl
</span><br>
<span class="quotelev1">&gt; contrib/hg/set-hg-share-perms.csh
</span><br>
<span class="quotelev1">&gt; contrib/nightly/build_sample_config.txt
</span><br>
<span class="quotelev1">&gt; contrib/nightly/build_tarball.pl
</span><br>
<span class="quotelev1">&gt; contrib/nightly/build_tests.pl
</span><br>
<span class="quotelev1">&gt; contrib/nightly/check_devel_headers.pl
</span><br>
<span class="quotelev1">&gt; contrib/nightly/create_tarball.sh
</span><br>
<span class="quotelev1">&gt; contrib/nightly/illegal_symbols_report.pl
</span><br>
<span class="quotelev1">&gt; contrib/nightly/ompi_cronjob.sh
</span><br>
<span class="quotelev1">&gt; contrib/nightly/unimplemented_report.sh
</span><br>
<span class="quotelev1">&gt; contrib/ompi_cplusplus.sed
</span><br>
<span class="quotelev1">&gt; contrib/ompi_cplusplus.sh
</span><br>
<span class="quotelev1">&gt; contrib/ompi_cplusplus.txt
</span><br>
<span class="quotelev1">&gt; contrib/platform/cisco/ebuild/hlfr
</span><br>
<span class="quotelev1">&gt; contrib/platform/cisco/ebuild/hlfr.conf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pascal Deveze a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; The bitbucket tree (<a href="https://bitbucket.org/devezep/new-romio-for-openmpi">https://bitbucket.org/devezep/new-romio-for-openmpi</a>) has just been updated with the open-mpi trunk.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have made three patches:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hg out
</span><br>
<span class="quotelev2">&gt;&gt; comparing with ssh://hg@bitbucket.org/devezep/new-romio-for-openmpi
</span><br>
<span class="quotelev2">&gt;&gt; searching for changes
</span><br>
<span class="quotelev2">&gt;&gt; changeset:   25:3e677102a125
</span><br>
<span class="quotelev2">&gt;&gt; user:        Pascal Deveze &lt;Pascal.Deveze_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; date:        Mon Jan 17 13:40:10 2011 +0100
</span><br>
<span class="quotelev2">&gt;&gt; summary:     Remove all files
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; changeset:   26:e3989f46f83a
</span><br>
<span class="quotelev2">&gt;&gt; user:        Pascal Deveze &lt;Pascal.Deveze_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; date:        Mon Jan 17 14:46:48 2011 +0100
</span><br>
<span class="quotelev2">&gt;&gt; summary:     Import from <a href="http://svn.open-mpi.org/svn/ompi/trunki">http://svn.open-mpi.org/svn/ompi/trunki</a> (r24256)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; changeset:   27:97f54ec8a575
</span><br>
<span class="quotelev2">&gt;&gt; tag:         tip
</span><br>
<span class="quotelev2">&gt;&gt; user:        Pascal Deveze &lt;Pascal.Deveze_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; date:        Mon Jan 17 16:14:06 2011 +0100
</span><br>
<span class="quotelev2">&gt;&gt; summary:     New Romio
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have tested the result and the ROMIO tests are OK.
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8888.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8886.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>In reply to:</strong> <a href="8882.php">Pascal Deveze: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8888.php">Jeff Squyres: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
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
