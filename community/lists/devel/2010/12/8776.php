<?
$subject_val = "Re: [OMPI devel] RFC: Bring the lastest	ROMIO	version	from	MPICH2-1.3 into the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 14 18:02:16 2010" -->
<!-- isoreceived="20101214230216" -->
<!-- sent="Tue, 14 Dec 2010 18:02:10 -0500" -->
<!-- isosent="20101214230210" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Bring the lastest	ROMIO	version	from	MPICH2-1.3 into the trunk" -->
<!-- id="6A837AE4-80C4-4279-8C8A-1AF30BCCDD3A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CFCE842.80209_at_bull.net" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-14 18:02:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8777.php">David Singleton: "Re: [OMPI devel] memory binding"</a>
<li><strong>Previous message:</strong> <a href="8775.php">David Fiala: "[OMPI devel] OpenIB not functioning on 1.5.x (works on 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="8764.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay; travel got in the way.
<br>
<p>It was quite difficult to pull from your repo because you committed about a dozen generated files that all conflicted with mine (assumedly we have slightly different versions of flex and whatnot).
<br>
<p>I tried to push back some minor changes but I don't have permission -- can you grant me write perms?
<br>
<p>[15:01] svbu-mpi:~/hg/new-romio-for-openmpi % hg push
<br>
pushing to ssh://hg@bitbucket.org/devezep/new-romio-for-openmpi
<br>
searching for changes
<br>
remote: adding changesets
<br>
remote: adding manifests
<br>
remote: adding file changes
<br>
remote: added 3 changesets with 1 changes to 1 files
<br>
remote: error: pretxnchangegroup.bb_perm hook failed: You're not allowed to write to this repository.
<br>
remote: transaction abort!
<br>
remote: rollback completed
<br>
remote: abort: You're not allowed to write to this repository.
<br>
[15:01] svbu-mpi:~/hg/new-romio-for-openmpi % 
<br>
<p><p><p>On Dec 6, 2010, at 8:42 AM, Pascal Deveze wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I removed ompi/mca/io/romio/romio/acinclude.m4. I put &quot;autoreconf -ivf -I confdb&quot; in autogen.sh. And I &quot;chmod +x autogen.sh&quot; (my
</span><br>
<span class="quotelev1">&gt; stupid error is that this file wasn't executable).
</span><br>
<span class="quotelev1">&gt; And all is now OK.
</span><br>
<span class="quotelev1">&gt; These modifications have been pushed in bitbucket.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to run the ROMIO tests and got an error in ompi/mpi/c/profile/MPI_File_set_errhandler.c:
</span><br>
<span class="quotelev1">&gt; OBJ_RELEASE(tmp) is calling an assertion:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  pfile_set_errhandler.c:75: PMPI_File_set_errhandler: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *) (tmp))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev1">&gt; [cuzco10:10336] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [cuzco10:10336] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [cuzco10:10336] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [cuzco10:10336] [ 0] /lib64/libpthread.so.0() [0x3e8560f440]
</span><br>
<span class="quotelev1">&gt; [cuzco10:10336] [ 1] /lib64/libc.so.6(gsignal+0x35) [0x3e852329c5]
</span><br>
<span class="quotelev1">&gt; [cuzco10:10336] [ 2] /lib64/libc.so.6(abort+0x175) [0x3e852341a5]
</span><br>
<span class="quotelev1">&gt; [cuzco10:10336] [ 3] /lib64/libc.so.6(__assert_fail+0xf5) [0x3e8522b945]
</span><br>
<span class="quotelev1">&gt; [cuzco10:10336] [ 4] /home_nfs/devezep/ATLAS/openmpi-default/lib/libmpi.so.0(MPI_File_set_errhandler+0x1e4) [0x7fcbee89d1d4]
</span><br>
<span class="quotelev1">&gt; [cuzco10:10336] [ 5] /home_nfs/devezep/ATLAS/openmpi-default/lib/openmpi/mca_io_romio.so(mca_io_romio_dist_MPI_File_close+0x12a) [0x7fcbe7dbc4ea]
</span><br>
<span class="quotelev1">&gt; [cuzco10:10336] [ 6] /home_nfs/devezep/ATLAS/openmpi-default/lib/openmpi/mca_io_romio.so(+0x9764) [0x7fcbe7d8e764]
</span><br>
<span class="quotelev1">&gt; [cuzco10:10336] [ 7] /home_nfs/devezep/ATLAS/openmpi-default/lib/libmpi.so.0(+0x50309) [0x7fcbee853309]
</span><br>
<span class="quotelev1">&gt; [cuzco10:10336] [ 8] /home_nfs/devezep/ATLAS/openmpi-default/lib/libmpi.so.0(+0x4faa0) [0x7fcbee852aa0]
</span><br>
<span class="quotelev1">&gt; [cuzco10:10336] [ 9] /home_nfs/devezep/ATLAS/openmpi-default/lib/libmpi.so.0(PMPI_File_close+0xa2) [0x7fcbee896832]
</span><br>
<span class="quotelev1">&gt; [cuzco10:10336] [10] ./a.out(main+0x3a4) [0x402434]
</span><br>
<span class="quotelev1">&gt; [cuzco10:10336] [11] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3e8521ec5d]
</span><br>
<span class="quotelev1">&gt; [cuzco10:10336] [12] ./a.out() [0x401fc9]
</span><br>
<span class="quotelev1">&gt; [cuzco10:10336] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am currently analysing the problem (MPI_File_close() now calls MPI_File_set_errhandler()).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pascal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 1, 2010, at 7:35 AM, Pascal Deveze wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not on AIM nor on google talk. Sorry. In the case you think it is necessary, I could ask for an ID.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW.  Many of us find it convenient for quickie/informal discussions.  We can keep going here in email and switch to phone if it becomes necessary.
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I see that we have the whole romio/confdb directory, so it seems like we should use that tree rather than copy to acinclude.m4.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I agree with you. But, as I said, I have a problem with the macro PAC_FUNC_NEEDS_DECL and the only way to solve it is to put it in acinclude.m4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Per below, I think this is now moot -- the romio/autogen.sh script should fix this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - there's no .hgignore file -- making &quot;hg status&quot; difficult.  In your SVN+HG tree, can you run ./contrib/hg/build-hgignore.pl and commit/push the resulting .hgignore?  That would be most helpful.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have done it, and pushed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Awesome; thanks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - ompi/mca/io/romio/romio/adio/include/romioconf.h.in is in the hg repo, but should not be (it's generated).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I removed it and pushed the modification.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - I don't see a romio/acinclude.m4 file in the repo, so whatever you did there doesn't show up for me.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I see the file romio/romio/acinclude.m4 in bitbucket:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://bitbucket.org/devezep/new-romio-for-openmpi/src/f06f1a24c75b/ompi/mca/io/romio/romio/acinclude.m4">http://bitbucket.org/devezep/new-romio-for-openmpi/src/f06f1a24c75b/ompi/mca/io/romio/romio/acinclude.m4</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Weird.  Ok.  But I think this is now moot.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - I tried to add an ompi/mca/io/romio/romio/autogen.sh executable file that contained:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; autoreconf -ivf -I confdb
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and that seems to make everything work.  Can you confirm/double check?  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes I tried what you suggest (without acinclude.m4), it seems that everything work:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf -ivf -I confdb
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: Entering directory `.'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: configure.in: not using Gettext
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: running: aclocal -I confdb --force 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: configure.in: tracing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: running: libtoolize --copy --force
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtoolize: putting auxiliary files in AC_CONFIG_AUX_DIR, `confdb'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtoolize: copying file `confdb/ltmain.sh'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtoolize: Consider adding `AC_CONFIG_MACRO_DIR([m4])' to configure.in and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtoolize: rerunning libtoolize, to keep the correct libtool macros in-tree.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtoolize: Consider adding `-I m4' to ACLOCAL_AMFLAGS in Makefile.am.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtoolize: `AC_PROG_RANLIB' is rendered obsolete by `LT_INIT'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: running: /homes/openmpi/tools/2010-10-12/bin/autoconf --include=confdb --force
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: running: /homes/openmpi/tools/2010-10-12/bin/autoheader --include=confdb --force
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: running: automake --add-missing --copy --force-missing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: Leaving directory `.'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I try to generate the whole MPI, autogen.sh works but configure fails in the romio directory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm confused by this statement.  Did you run the top-level autogen.sh first?  That would should automatically invoke the romio/autogen.sh in the Right place, do a few extra things, etc.  Then you should be able to run configure properly (and have it invoke ROMIO's configure at the Right time, etc.).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is that what you tried?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just did a fresh checkout of your hg, removed ompi/mca/io/romio/romio/acinclude.m4 and put in an autogen.sh (and made it executable) that contained:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; :
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf -ivf -I confdb
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I then ran the top-level autogen.sh and configure, and it all worked.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can see that ompi/mca/io/romio/romio/aclocal.m4 m4_include()'s all the relevant m4 macro files in the confdb directory, including aclocal_cc.m4, which defines PAC_FUNC_NEEDS_DECL.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I try your autoreconf, then it works for ROMIO.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===== This does not work without acinclude.m4 ==================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./autogen.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=$HOME/bitbucket/new-romio-for-openmpi/install --disable-ipv6 --with-openib=${OFED_BUILDROOT}/usr --enable-openib-connectx-xrc --enable-contrib-no-build=libnbc,vt --with-io-romio-flags=&quot;CFLAGS=-I$LUSTRE_PATH/usr/include/ --with-file-system=ufs+nfs+lustre&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===== This works without acinclude.m4 ==================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./autogen.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cd ompi/mca/io/romio/romio
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf -ivf -I confdb
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cd -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=$HOME/bitbucket/new-romio-for-openmpi/install --disable-ipv6 --with-openib=${OFED_BUILDROOT}/usr --enable-openib-connectx-xrc --enable-contrib-no-build=libnbc,vt --with-io-romio-flags=&quot;CFLAGS=-I$LUSTRE_PATH/usr/include/ --with-file-system=ufs+nfs+lustre&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My conclusion is: There is something to change in autogen.sh to deal with ROMIO (call autoreconf -ivf -I confdb). In that case, the file acinclude.m4 is no more usefull.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure what you mean...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Maybe try getting a fresh checkout that does not have any auto* kruft in it at all, remove the aclocal/acinclude, and then put in the autogen.sh file and re-run the top-level autogen.sh to see what happens.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I attached the stdout/stderr from running autogen.sh, configure, and make so that you can see what my output looks like.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="8777.php">David Singleton: "Re: [OMPI devel] memory binding"</a>
<li><strong>Previous message:</strong> <a href="8775.php">David Fiala: "[OMPI devel] OpenIB not functioning on 1.5.x (works on 1.4.3)"</a>
<li><strong>In reply to:</strong> <a href="8764.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
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
