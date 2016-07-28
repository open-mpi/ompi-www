<?
$subject_val = "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 30 09:21:19 2010" -->
<!-- isoreceived="20101130142119" -->
<!-- sent="Tue, 30 Nov 2010 09:21:14 -0500" -->
<!-- isosent="20101130142114" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk" -->
<!-- id="5663FC70-5B96-4BD9-A9AB-54CB46E22E35_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CF4E393.2010900_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-30 09:21:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8743.php">Terry Dontje: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>Previous message:</strong> <a href="8741.php">Jeff Squyres: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>In reply to:</strong> <a href="8739.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8756.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8756.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 30, 2010, at 6:44 AM, Pascal Deveze wrote:
<br>
<p><span class="quotelev1">&gt; I have commited all my last changes in bitbucket, including those that follows.
</span><br>
<p>I got a checkout, and still have some problems/questions.  More below.
<br>
<p>If you do the IM thing, ping me on IM (I sent you my IDs in an off-list email).
<br>
<p><span class="quotelev2">&gt;&gt; Do we have the MPIU functions?  Or is that an MPICH2-specific thing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have put in comments this last &quot;AC_DEFINE&quot;:
</span><br>
<span class="quotelev1">&gt; # Open MPI does not have the MPIU functions
</span><br>
<span class="quotelev1">&gt; # AC_DEFINE(HAVE_MPIU_FUNCS,1,[Define if MPICH2 memory tracing macros defined]) 
</span><br>
<p>Good.
<br>
<p><span class="quotelev2">&gt;&gt; I see that you moved confdb/aclocal_cc.m4 to acinclude.m4.  Shoudn't we just -I confdb instead to get all of their .m4 files?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; This has been done during the last porting (years ago).
</span><br>
<span class="quotelev1">&gt; I have now changed this: All confdb/.m4 files are now copied from MPICH2. Only the definition of PAC_FUNC_NEEDS_DECL is still kept in acinclude.m4.
</span><br>
<span class="quotelev1">&gt; If I do not so, configure is still blocking on this macro.
</span><br>
<span class="quotelev1">&gt; All seems working well so. If you have any clue about this, I will take it !
</span><br>
<p>I see that we have the whole romio/confdb directory, so it seems like we should use that tree rather than copy to acinclude.m4.
<br>
<p>But I note that when I get an hg clone of your repo:
<br>
<p>- there's no .hgignore file -- making &quot;hg status&quot; difficult.  In your SVN+HG tree, can you run ./contrib/hg/build-hgignore.pl and commit/push the resulting .hgignore?  That would be most helpful.
<br>
<p>- ompi/mca/io/romio/romio/adio/include/romioconf.h.in is in the hg repo, but should not be (it's generated).
<br>
<p>- I don't see a romio/acinclude.m4 file in the repo, so whatever you did there doesn't show up for me.  
<br>
<p>- I tried to add an ompi/mca/io/romio/romio/autogen.sh executable file that contained:
<br>
<p>:
<br>
autoreconf -ivf -I confdb
<br>
<p>and that seems to make everything work.  Can you confirm/double check?
<br>
<p><span class="quotelev2">&gt;&gt; In configure.in, please update the version number in AM_INIT_AUTOMAKE.
</span><br>
<span class="quotelev1">&gt; AM_INIT_AUTOMAKE(io-romio, 1.0.0, 'no')
</span><br>
<span class="quotelev1">&gt; is changed to
</span><br>
<span class="quotelev1">&gt; AM_INIT_AUTOMAKE(io-romio, 1.0.1, 'no')
</span><br>
<p>Can we use whatever the real ROMIO version number is?  
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="8743.php">Terry Dontje: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>Previous message:</strong> <a href="8741.php">Jeff Squyres: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>In reply to:</strong> <a href="8739.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8756.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8756.php">Pascal Deveze: "Re: [OMPI devel] RFC: Bring the lastest ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
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
