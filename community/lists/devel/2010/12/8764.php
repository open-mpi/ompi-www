<?
$subject_val = "Re: [OMPI devel] RFC: Bring the lastest	ROMIO	version	from	MPICH2-1.3 into the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  6 08:42:33 2010" -->
<!-- isoreceived="20101206134233" -->
<!-- sent="Mon, 06 Dec 2010 14:42:26 +0100" -->
<!-- isosent="20101206134226" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Bring the lastest	ROMIO	version	from	MPICH2-1.3 into the trunk" -->
<!-- id="4CFCE842.80209_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FC1ABD14-FDD9-4CE0-BE88-FF53A6EAB9F4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Bring the lastest	ROMIO	version	from	MPICH2-1.3 into the trunk<br>
<strong>From:</strong> Pascal Deveze (<em>Pascal.Deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-06 08:42:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8765.php">Nathan Hjelm: "[OMPI devel] rfc: backport of orte debugger framework to 1.5 branch"</a>
<li><strong>Previous message:</strong> <a href="8763.php">Doron Shoham: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
<li><strong>In reply to:</strong> <a href="8762.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8776.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8776.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I removed ompi/mca/io/romio/romio/acinclude.m4. I put &quot;autoreconf -ivf 
<br>
-I confdb&quot; in autogen.sh. And I &quot;chmod +x autogen.sh&quot; (my
<br>
stupid error is that this file wasn't executable).
<br>
And all is now OK.
<br>
These modifications have been pushed in bitbucket.
<br>
<p>I tried to run the ROMIO tests and got an error in 
<br>
ompi/mpi/c/profile/MPI_File_set_errhandler.c:
<br>
OBJ_RELEASE(tmp) is calling an assertion:
<br>
<p>&nbsp;pfile_set_errhandler.c:75: PMPI_File_set_errhandler: Assertion 
<br>
`((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *) 
<br>
(tmp))-&gt;obj_magic_id' failed.
<br>
[cuzco10:10336] *** Process received signal ***
<br>
[cuzco10:10336] Signal: Aborted (6)
<br>
[cuzco10:10336] Signal code:  (-6)
<br>
[cuzco10:10336] [ 0] /lib64/libpthread.so.0() [0x3e8560f440]
<br>
[cuzco10:10336] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x3e852329c5]
<br>
[cuzco10:10336] [ 2] /lib64/libc.so.6(abort+0x175) [0x3e852341a5]
<br>
[cuzco10:10336] [ 3] /lib64/libc.so.6(__assert_fail+0xf5) [0x3e8522b945]
<br>
[cuzco10:10336] [ 4] 
<br>
/home_nfs/devezep/ATLAS/openmpi-default/lib/libmpi.so.0(MPI_File_set_errhandler+0x1e4) 
<br>
[0x7fcbee89d1d4]
<br>
[cuzco10:10336] [ 5] 
<br>
/home_nfs/devezep/ATLAS/openmpi-default/lib/openmpi/mca_io_romio.so(mca_io_romio_dist_MPI_File_close+0x12a) 
<br>
[0x7fcbe7dbc4ea]
<br>
[cuzco10:10336] [ 6] 
<br>
/home_nfs/devezep/ATLAS/openmpi-default/lib/openmpi/mca_io_romio.so(+0x9764) 
<br>
[0x7fcbe7d8e764]
<br>
[cuzco10:10336] [ 7] 
<br>
/home_nfs/devezep/ATLAS/openmpi-default/lib/libmpi.so.0(+0x50309) 
<br>
[0x7fcbee853309]
<br>
[cuzco10:10336] [ 8] 
<br>
/home_nfs/devezep/ATLAS/openmpi-default/lib/libmpi.so.0(+0x4faa0) 
<br>
[0x7fcbee852aa0]
<br>
[cuzco10:10336] [ 9] 
<br>
/home_nfs/devezep/ATLAS/openmpi-default/lib/libmpi.so.0(PMPI_File_close+0xa2) 
<br>
[0x7fcbee896832]
<br>
[cuzco10:10336] [10] ./a.out(main+0x3a4) [0x402434]
<br>
[cuzco10:10336] [11] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3e8521ec5d]
<br>
[cuzco10:10336] [12] ./a.out() [0x401fc9]
<br>
[cuzco10:10336] *** End of error message ***
<br>
<p>I am currently analysing the problem (MPI_File_close() now calls 
<br>
MPI_File_set_errhandler()).
<br>
<p>Pascal
<br>
<p>Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Dec 1, 2010, at 7:35 AM, Pascal Deveze wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I am not on AIM nor on google talk. Sorry. In the case you think it is necessary, I could ask for an ID.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW.  Many of us find it convenient for quickie/informal discussions.  We can keep going here in email and switch to phone if it becomes necessary.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I see that we have the whole romio/confdb directory, so it seems like we should use that tree rather than copy to acinclude.m4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; I agree with you. But, as I said, I have a problem with the macro PAC_FUNC_NEEDS_DECL and the only way to solve it is to put it in acinclude.m4.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Per below, I think this is now moot -- the romio/autogen.sh script should fix this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - there's no .hgignore file -- making &quot;hg status&quot; difficult.  In your SVN+HG tree, can you run ./contrib/hg/build-hgignore.pl and commit/push the resulting .hgignore?  That would be most helpful.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; I have done it, and pushed.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Awesome; thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - ompi/mca/io/romio/romio/adio/include/romioconf.h.in is in the hg repo, but should not be (it's generated).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; I removed it and pushed the modification.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - I don't see a romio/acinclude.m4 file in the repo, so whatever you did there doesn't show up for me.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; I see the file romio/romio/acinclude.m4 in bitbucket:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://bitbucket.org/devezep/new-romio-for-openmpi/src/f06f1a24c75b/ompi/mca/io/romio/romio/acinclude.m4">http://bitbucket.org/devezep/new-romio-for-openmpi/src/f06f1a24c75b/ompi/mca/io/romio/romio/acinclude.m4</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Weird.  Ok.  But I think this is now moot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - I tried to add an ompi/mca/io/romio/romio/autogen.sh executable file that contained:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf -ivf -I confdb
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and that seems to make everything work.  Can you confirm/double check?  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Yes I tried what you suggest (without acinclude.m4), it seems that everything work:
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf -ivf -I confdb
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: Entering directory `.'
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: configure.in: not using Gettext
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: running: aclocal -I confdb --force 
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: configure.in: tracing
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: running: libtoolize --copy --force
</span><br>
<span class="quotelev2">&gt;&gt; libtoolize: putting auxiliary files in AC_CONFIG_AUX_DIR, `confdb'.
</span><br>
<span class="quotelev2">&gt;&gt; libtoolize: copying file `confdb/ltmain.sh'
</span><br>
<span class="quotelev2">&gt;&gt; libtoolize: Consider adding `AC_CONFIG_MACRO_DIR([m4])' to configure.in and
</span><br>
<span class="quotelev2">&gt;&gt; libtoolize: rerunning libtoolize, to keep the correct libtool macros in-tree.
</span><br>
<span class="quotelev2">&gt;&gt; libtoolize: Consider adding `-I m4' to ACLOCAL_AMFLAGS in Makefile.am.
</span><br>
<span class="quotelev2">&gt;&gt; libtoolize: `AC_PROG_RANLIB' is rendered obsolete by `LT_INIT'
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: running: /homes/openmpi/tools/2010-10-12/bin/autoconf --include=confdb --force
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: running: /homes/openmpi/tools/2010-10-12/bin/autoheader --include=confdb --force
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: running: automake --add-missing --copy --force-missing
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf: Leaving directory `.'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I try to generate the whole MPI, autogen.sh works but configure fails in the romio directory.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm confused by this statement.  Did you run the top-level autogen.sh first?  That would should automatically invoke the romio/autogen.sh in the Right place, do a few extra things, etc.  Then you should be able to run configure properly (and have it invoke ROMIO's configure at the Right time, etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that what you tried?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just did a fresh checkout of your hg, removed ompi/mca/io/romio/romio/acinclude.m4 and put in an autogen.sh (and made it executable) that contained:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :
</span><br>
<span class="quotelev1">&gt; autoreconf -ivf -I confdb
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then ran the top-level autogen.sh and configure, and it all worked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can see that ompi/mca/io/romio/romio/aclocal.m4 m4_include()'s all the relevant m4 macro files in the confdb directory, including aclocal_cc.m4, which defines PAC_FUNC_NEEDS_DECL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; If I try your autoreconf, then it works for ROMIO.
</span><br>
<span class="quotelev2">&gt;&gt; ===== This does not work without acinclude.m4 ==================
</span><br>
<span class="quotelev2">&gt;&gt; ./autogen.sh
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=$HOME/bitbucket/new-romio-for-openmpi/install --disable-ipv6 --with-openib=${OFED_BUILDROOT}/usr --enable-openib-connectx-xrc --enable-contrib-no-build=libnbc,vt --with-io-romio-flags=&quot;CFLAGS=-I$LUSTRE_PATH/usr/include/ --with-file-system=ufs+nfs+lustre&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ===== This works without acinclude.m4 ==================
</span><br>
<span class="quotelev2">&gt;&gt; ./autogen.sh
</span><br>
<span class="quotelev2">&gt;&gt; cd ompi/mca/io/romio/romio
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf -ivf -I confdb
</span><br>
<span class="quotelev2">&gt;&gt; cd -
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=$HOME/bitbucket/new-romio-for-openmpi/install --disable-ipv6 --with-openib=${OFED_BUILDROOT}/usr --enable-openib-connectx-xrc --enable-contrib-no-build=libnbc,vt --with-io-romio-flags=&quot;CFLAGS=-I$LUSTRE_PATH/usr/include/ --with-file-system=ufs+nfs+lustre&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My conclusion is: There is something to change in autogen.sh to deal with ROMIO (call autoreconf -ivf -I confdb). In that case, the file acinclude.m4 is no more usefull.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure what you mean...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe try getting a fresh checkout that does not have any auto* kruft in it at all, remove the aclocal/acinclude, and then put in the autogen.sh file and re-run the top-level autogen.sh to see what happens.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I attached the stdout/stderr from running autogen.sh, configure, and make so that you can see what my output looks like.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8764/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8765.php">Nathan Hjelm: "[OMPI devel] rfc: backport of orte debugger framework to 1.5 branch"</a>
<li><strong>Previous message:</strong> <a href="8763.php">Doron Shoham: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
<li><strong>In reply to:</strong> <a href="8762.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8776.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8776.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
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
