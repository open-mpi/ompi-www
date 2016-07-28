<?
$subject_val = "Re: [OMPI users] Build on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 12:37:05 2016" -->
<!-- isoreceived="20160419163705" -->
<!-- sent="Tue, 19 Apr 2016 10:37:02 -0600" -->
<!-- isosent="20160419163702" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build on FreeBSD" -->
<!-- id="20160419163702.GA25756_at_mordor.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D5A2D1D1-4037-46EA-A36C-9059F86402A8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Build on FreeBSD<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-19 12:37:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28969.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="28967.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="28966.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Build on FreeBSD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like FreeBSD has all the features required to support patching
<br>
the loader but has some minor differences in types. We will disable this
<br>
component on FreeBSD for now I may investigate re-enabling it later.
<br>
<p>-Nathan
<br>
<p>On Tue, Apr 19, 2016 at 02:00:56PM +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Thanks; I added this to <a href="https://github.com/open-mpi/ompi-release/pull/1079">https://github.com/open-mpi/ompi-release/pull/1079</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I didn't know your Github ID, so I didn't @mention you in the comment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 17, 2016, at 1:07 AM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello all
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I understand that FreeBSD is not a supported platform, so this may be an irrelevant piece of information, but let me pass it on anyway in the hope that it might be useful to somebody.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI 1.10.2 (release) successfully compiles on FreeBSD 10.2 (except for a minor issue of setting LD_LIBRARY_PATH for Fortran compilation).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; However, the trunk does not build, and the error is as follows:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Making all in mca/patcher/linux
</span><br>
<span class="quotelev2">&gt; &gt;   CC       patcher_linux_module.lo
</span><br>
<span class="quotelev2">&gt; &gt; patcher_linux_module.c:44:5: error: expected specifier-qualifier-list before 'ElfW'
</span><br>
<span class="quotelev2">&gt; &gt;      ElfW(Xword)        size;
</span><br>
<span class="quotelev2">&gt; &gt;      ^
</span><br>
<span class="quotelev2">&gt; &gt; patcher_linux_module.c:48:5: error: expected specifier-qualifier-list before 'ElfW'
</span><br>
<span class="quotelev2">&gt; &gt;      ElfW(Rela)         *tab;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &lt;And many more similar, snipped for brevity&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It looks like the file and directory where this issue occurs is a new addition in the master branch (for release 2.x, I presume); it does not exist in 1.10.2
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I know nothing about the intent of the new code, and it looks like it is meant for Linux (only?) anyway, but somehow the autotools is pulling it in for FreeBSD as well.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Durga
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1% of the executables have 99% of CPU privilege!
</span><br>
<span class="quotelev2">&gt; &gt; Userspace code! Unite!! Occupy the kernel!!!
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28940.php">http://www.open-mpi.org/community/lists/users/2016/04/28940.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28966.php">http://www.open-mpi.org/community/lists/users/2016/04/28966.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28968/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28969.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="28967.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="28966.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Build on FreeBSD"</a>
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
