<?
$subject_val = "Re: [OMPI devel] RFC: Bring the lastest ROMIO	version	from	MPICH2-1.3 into the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  3 14:43:48 2010" -->
<!-- isoreceived="20101203194348" -->
<!-- sent="Fri, 3 Dec 2010 14:43:42 -0500" -->
<!-- isosent="20101203194342" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Bring the lastest ROMIO	version	from	MPICH2-1.3 into the trunk" -->
<!-- id="FC1ABD14-FDD9-4CE0-BE88-FF53A6EAB9F4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CF6410F.2010306_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Bring the lastest ROMIO	version	from	MPICH2-1.3 into the trunk<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-03 14:43:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8763.php">Doron Shoham: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
<li><strong>Previous message:</strong> <a href="8761.php">Jeff Squyres: "[OMPI devel] 1.5.1rc2 posted"</a>
<li><strong>In reply to:</strong> <a href="8756.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8764.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8764.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 1, 2010, at 7:35 AM, Pascal Deveze wrote:
<br>
<p><span class="quotelev1">&gt; I am not on AIM nor on google talk. Sorry. In the case you think it is necessary, I could ask for an ID.
</span><br>
<p>FWIW.  Many of us find it convenient for quickie/informal discussions.  We can keep going here in email and switch to phone if it becomes necessary.
<br>
<span class="quotelev2">&gt;&gt; I see that we have the whole romio/confdb directory, so it seems like we should use that tree rather than copy to acinclude.m4.
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; I agree with you. But, as I said, I have a problem with the macro PAC_FUNC_NEEDS_DECL and the only way to solve it is to put it in acinclude.m4.
</span><br>
<p>Per below, I think this is now moot -- the romio/autogen.sh script should fix this.
<br>
<p><span class="quotelev2">&gt;&gt; - there's no .hgignore file -- making &quot;hg status&quot; difficult.  In your SVN+HG tree, can you run ./contrib/hg/build-hgignore.pl and commit/push the resulting .hgignore?  That would be most helpful.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; I have done it, and pushed.
</span><br>
<p>Awesome; thanks.
<br>
<p><span class="quotelev2">&gt;&gt; - ompi/mca/io/romio/romio/adio/include/romioconf.h.in is in the hg repo, but should not be (it's generated).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; I removed it and pushed the modification.
</span><br>
<span class="quotelev2">&gt;&gt; - I don't see a romio/acinclude.m4 file in the repo, so whatever you did there doesn't show up for me.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; I see the file romio/romio/acinclude.m4 in bitbucket:
</span><br>
<span class="quotelev1">&gt; <a href="http://bitbucket.org/devezep/new-romio-for-openmpi/src/f06f1a24c75b/ompi/mca/io/romio/romio/acinclude.m4">http://bitbucket.org/devezep/new-romio-for-openmpi/src/f06f1a24c75b/ompi/mca/io/romio/romio/acinclude.m4</a>
</span><br>
<p>Weird.  Ok.  But I think this is now moot.
<br>
<p><span class="quotelev2">&gt;&gt; - I tried to add an ompi/mca/io/romio/romio/autogen.sh executable file that contained:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; :
</span><br>
<span class="quotelev2">&gt;&gt; autoreconf -ivf -I confdb
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and that seems to make everything work.  Can you confirm/double check?  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; Yes I tried what you suggest (without acinclude.m4), it seems that everything work:
</span><br>
<span class="quotelev1">&gt; autoreconf -ivf -I confdb
</span><br>
<span class="quotelev1">&gt; autoreconf: Entering directory `.'
</span><br>
<span class="quotelev1">&gt; autoreconf: configure.in: not using Gettext
</span><br>
<span class="quotelev1">&gt; autoreconf: running: aclocal -I confdb --force 
</span><br>
<span class="quotelev1">&gt; autoreconf: configure.in: tracing
</span><br>
<span class="quotelev1">&gt; autoreconf: running: libtoolize --copy --force
</span><br>
<span class="quotelev1">&gt; libtoolize: putting auxiliary files in AC_CONFIG_AUX_DIR, `confdb'.
</span><br>
<span class="quotelev1">&gt; libtoolize: copying file `confdb/ltmain.sh'
</span><br>
<span class="quotelev1">&gt; libtoolize: Consider adding `AC_CONFIG_MACRO_DIR([m4])' to configure.in and
</span><br>
<span class="quotelev1">&gt; libtoolize: rerunning libtoolize, to keep the correct libtool macros in-tree.
</span><br>
<span class="quotelev1">&gt; libtoolize: Consider adding `-I m4' to ACLOCAL_AMFLAGS in Makefile.am.
</span><br>
<span class="quotelev1">&gt; libtoolize: `AC_PROG_RANLIB' is rendered obsolete by `LT_INIT'
</span><br>
<span class="quotelev1">&gt; autoreconf: running: /homes/openmpi/tools/2010-10-12/bin/autoconf --include=confdb --force
</span><br>
<span class="quotelev1">&gt; autoreconf: running: /homes/openmpi/tools/2010-10-12/bin/autoheader --include=confdb --force
</span><br>
<span class="quotelev1">&gt; autoreconf: running: automake --add-missing --copy --force-missing
</span><br>
<span class="quotelev1">&gt; autoreconf: Leaving directory `.'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I try to generate the whole MPI, autogen.sh works but configure fails in the romio directory.
</span><br>
<p>I'm confused by this statement.  Did you run the top-level autogen.sh first?  That would should automatically invoke the romio/autogen.sh in the Right place, do a few extra things, etc.  Then you should be able to run configure properly (and have it invoke ROMIO's configure at the Right time, etc.).
<br>
<p>Is that what you tried?
<br>
<p>I just did a fresh checkout of your hg, removed ompi/mca/io/romio/romio/acinclude.m4 and put in an autogen.sh (and made it executable) that contained:
<br>
<p>:
<br>
autoreconf -ivf -I confdb
<br>
<p>I then ran the top-level autogen.sh and configure, and it all worked.
<br>
<p>You can see that ompi/mca/io/romio/romio/aclocal.m4 m4_include()'s all the relevant m4 macro files in the confdb directory, including aclocal_cc.m4, which defines PAC_FUNC_NEEDS_DECL.
<br>
<p><span class="quotelev1">&gt; If I try your autoreconf, then it works for ROMIO.
</span><br>
<span class="quotelev1">&gt; ===== This does not work without acinclude.m4 ==================
</span><br>
<span class="quotelev1">&gt; ./autogen.sh
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=$HOME/bitbucket/new-romio-for-openmpi/install --disable-ipv6 --with-openib=${OFED_BUILDROOT}/usr --enable-openib-connectx-xrc --enable-contrib-no-build=libnbc,vt --with-io-romio-flags=&quot;CFLAGS=-I$LUSTRE_PATH/usr/include/ --with-file-system=ufs+nfs+lustre&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===== This works without acinclude.m4 ==================
</span><br>
<span class="quotelev1">&gt; ./autogen.sh
</span><br>
<span class="quotelev1">&gt; cd ompi/mca/io/romio/romio
</span><br>
<span class="quotelev1">&gt; autoreconf -ivf -I confdb
</span><br>
<span class="quotelev1">&gt; cd -
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=$HOME/bitbucket/new-romio-for-openmpi/install --disable-ipv6 --with-openib=${OFED_BUILDROOT}/usr --enable-openib-connectx-xrc --enable-contrib-no-build=libnbc,vt --with-io-romio-flags=&quot;CFLAGS=-I$LUSTRE_PATH/usr/include/ --with-file-system=ufs+nfs+lustre&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My conclusion is: There is something to change in autogen.sh to deal with ROMIO (call autoreconf -ivf -I confdb). In that case, the file acinclude.m4 is no more usefull.
</span><br>
<p>I'm not sure what you mean...
<br>
<p>Maybe try getting a fresh checkout that does not have any auto* kruft in it at all, remove the aclocal/acinclude, and then put in the autogen.sh file and re-run the top-level autogen.sh to see what happens.
<br>
<p>I attached the stdout/stderr from running autogen.sh, configure, and make so that you can see what my output looks like.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8762/romio-build.tar.bz2">romio-build.tar.bz2</a>
</ul>
<!-- attachment="romio-build.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8763.php">Doron Shoham: "Re: [OMPI devel] Sending large messages over RDMA fails"</a>
<li><strong>Previous message:</strong> <a href="8761.php">Jeff Squyres: "[OMPI devel] 1.5.1rc2 posted"</a>
<li><strong>In reply to:</strong> <a href="8756.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8764.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8764.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
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
