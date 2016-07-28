<?
$subject_val = "Re: [OMPI devel] RFC: Bring the lastest ROMIO	version	from	MPICH2-1.3 into the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  1 07:35:35 2010" -->
<!-- isoreceived="20101201123535" -->
<!-- sent="Wed, 01 Dec 2010 13:35:27 +0100" -->
<!-- isosent="20101201123527" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Bring the lastest ROMIO	version	from	MPICH2-1.3 into the trunk" -->
<!-- id="4CF6410F.2010306_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5663FC70-5B96-4BD9-A9AB-54CB46E22E35_at_cisco.com" -->
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
<strong>From:</strong> Pascal Deveze (<em>Pascal.Deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-01 07:35:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8757.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>Previous message:</strong> <a href="8755.php">Damien Guinier: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8742.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8762.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8762.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Comments are in the text
<br>
<p>Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Nov 30, 2010, at 6:44 AM, Pascal Deveze wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I have commited all my last changes in bitbucket, including those that follows.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got a checkout, and still have some problems/questions.  More below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you do the IM thing, ping me on IM (I sent you my IDs in an off-list email).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I am not on AIM nor on google talk. Sorry. In the case you think it is necessary, I could ask for an ID.
<br>
We could also continue with email.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Do we have the MPIU functions?  Or is that an MPICH2-specific thing?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; I have put in comments this last &quot;AC_DEFINE&quot;:
</span><br>
<span class="quotelev2">&gt;&gt; # Open MPI does not have the MPIU functions
</span><br>
<span class="quotelev2">&gt;&gt; # AC_DEFINE(HAVE_MPIU_FUNCS,1,[Define if MPICH2 memory tracing macros defined]) 
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I see that you moved confdb/aclocal_cc.m4 to acinclude.m4.  Shoudn't we just -I confdb instead to get all of their .m4 files?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; This has been done during the last porting (years ago).
</span><br>
<span class="quotelev2">&gt;&gt; I have now changed this: All confdb/.m4 files are now copied from MPICH2. Only the definition of PAC_FUNC_NEEDS_DECL is still kept in acinclude.m4.
</span><br>
<span class="quotelev2">&gt;&gt; If I do not so, configure is still blocking on this macro.
</span><br>
<span class="quotelev2">&gt;&gt; All seems working well so. If you have any clue about this, I will take it !
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see that we have the whole romio/confdb directory, so it seems like we should use that tree rather than copy to acinclude.m4.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I agree with you. But, as I said, I have a problem with the macro 
<br>
PAC_FUNC_NEEDS_DECL and the only way to solve it is to put it in 
<br>
acinclude.m4.
<br>
<span class="quotelev1">&gt; But I note that when I get an hg clone of your repo:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - there's no .hgignore file -- making &quot;hg status&quot; difficult.  In your SVN+HG tree, can you run ./contrib/hg/build-hgignore.pl and commit/push the resulting .hgignore?  That would be most helpful.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I have done it, and pushed.
<br>
<span class="quotelev1">&gt; - ompi/mca/io/romio/romio/adio/include/romioconf.h.in is in the hg repo, but should not be (it's generated).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I removed it and pushed the modification.
<br>
<span class="quotelev1">&gt; - I don't see a romio/acinclude.m4 file in the repo, so whatever you did there doesn't show up for me.  
</span><br>
<span class="quotelev1">&gt;   
</span><br>
I see the file romio/romio/acinclude.m4 in bitbucket:
<br>
<a href="http://bitbucket.org/devezep/new-romio-for-openmpi/src/f06f1a24c75b/ompi/mca/io/romio/romio/acinclude.m4">http://bitbucket.org/devezep/new-romio-for-openmpi/src/f06f1a24c75b/ompi/mca/io/romio/romio/acinclude.m4</a>
<br>
<p><span class="quotelev1">&gt; - I tried to add an ompi/mca/io/romio/romio/autogen.sh executable file that contained:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :
</span><br>
<span class="quotelev1">&gt; autoreconf -ivf -I confdb
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and that seems to make everything work.  Can you confirm/double check?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Yes I tried what you suggest (without acinclude.m4), it seems that 
<br>
everything work:
<br>
autoreconf -ivf -I confdb
<br>
autoreconf: Entering directory `.'
<br>
autoreconf: configure.in: not using Gettext
<br>
autoreconf: running: aclocal -I confdb --force
<br>
autoreconf: configure.in: tracing
<br>
autoreconf: running: libtoolize --copy --force
<br>
libtoolize: putting auxiliary files in AC_CONFIG_AUX_DIR, `confdb'.
<br>
libtoolize: copying file `confdb/ltmain.sh'
<br>
libtoolize: Consider adding `AC_CONFIG_MACRO_DIR([m4])' to configure.in and
<br>
libtoolize: rerunning libtoolize, to keep the correct libtool macros 
<br>
in-tree.
<br>
libtoolize: Consider adding `-I m4' to ACLOCAL_AMFLAGS in Makefile.am.
<br>
libtoolize: `AC_PROG_RANLIB' is rendered obsolete by `LT_INIT'
<br>
autoreconf: running: /homes/openmpi/tools/2010-10-12/bin/autoconf 
<br>
--include=confdb --force
<br>
autoreconf: running: /homes/openmpi/tools/2010-10-12/bin/autoheader 
<br>
--include=confdb --force
<br>
autoreconf: running: automake --add-missing --copy --force-missing
<br>
autoreconf: Leaving directory `.'
<br>
<p>If I try to generate the whole MPI, autogen.sh works but configure fails 
<br>
in the romio directory.
<br>
If I try your autoreconf, then it works for ROMIO.
<br>
===== This does not work without acinclude.m4 ==================
<br>
./autogen.sh
<br>
./configure --prefix=$HOME/bitbucket/new-romio-for-openmpi/install 
<br>
--disable-ipv6 --with-openib=${OFED_BUILDROOT}/usr 
<br>
--enable-openib-connectx-xrc --enable-contrib-no-build=libnbc,vt 
<br>
--with-io-romio-flags=&quot;CFLAGS=-I$LUSTRE_PATH/usr/include/ 
<br>
--with-file-system=ufs+nfs+lustre&quot;
<br>
<p><p>===== This works without acinclude.m4 ==================
<br>
./autogen.sh
<br>
cd ompi/mca/io/romio/romio
<br>
autoreconf -ivf -I confdb
<br>
cd -
<br>
./configure --prefix=$HOME/bitbucket/new-romio-for-openmpi/install 
<br>
--disable-ipv6 --with-openib=${OFED_BUILDROOT}/usr 
<br>
--enable-openib-connectx-xrc --enable-contrib-no-build=libnbc,vt 
<br>
--with-io-romio-flags=&quot;CFLAGS=-I$LUSTRE_PATH/usr/include/ 
<br>
--with-file-system=ufs+nfs+lustre&quot;
<br>
<p>My conclusion is: There is something to change in autogen.sh to deal 
<br>
with ROMIO (call autoreconf -ivf -I confdb). In that case, the file 
<br>
acinclude.m4 is no more usefull.
<br>
<span class="quotelev3">&gt;&gt;&gt; In configure.in, please update the version number in AM_INIT_AUTOMAKE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; AM_INIT_AUTOMAKE(io-romio, 1.0.0, 'no')
</span><br>
<span class="quotelev2">&gt;&gt; is changed to
</span><br>
<span class="quotelev2">&gt;&gt; AM_INIT_AUTOMAKE(io-romio, 1.0.1, 'no')
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can we use whatever the real ROMIO version number is?  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
It seems that real version is 1.2.6 (see README).  So I changed it, 
<br>
committed and pushed.
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8756/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8757.php">Ralph Castain: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>Previous message:</strong> <a href="8755.php">Damien Guinier: "Re: [OMPI devel] confusion between slot and procs on mca/rmaps"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8742.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8762.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8762.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
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
