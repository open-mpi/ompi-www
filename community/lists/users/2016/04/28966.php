<?
$subject_val = "Re: [OMPI users] Build on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 10:01:02 2016" -->
<!-- isoreceived="20160419140102" -->
<!-- sent="Tue, 19 Apr 2016 14:00:56 +0000" -->
<!-- isosent="20160419140056" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build on FreeBSD" -->
<!-- id="D5A2D1D1-4037-46EA-A36C-9059F86402A8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDiC=JSmdcoNppOkpdq+OZTbT8trRcQTXP+UuLE4_kL0-g_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-19 10:00:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28967.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="28965.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib failover"</a>
<li><strong>In reply to:</strong> <a href="28940.php">dpchoudh .: "[OMPI users] Build on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28968.php">Nathan Hjelm: "Re: [OMPI users] Build on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="28968.php">Nathan Hjelm: "Re: [OMPI users] Build on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks; I added this to <a href="https://github.com/open-mpi/ompi-release/pull/1079">https://github.com/open-mpi/ompi-release/pull/1079</a>.
<br>
<p>I didn't know your Github ID, so I didn't @mention you in the comment.
<br>
<p><p><span class="quotelev1">&gt; On Apr 17, 2016, at 1:07 AM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand that FreeBSD is not a supported platform, so this may be an irrelevant piece of information, but let me pass it on anyway in the hope that it might be useful to somebody.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.10.2 (release) successfully compiles on FreeBSD 10.2 (except for a minor issue of setting LD_LIBRARY_PATH for Fortran compilation).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, the trunk does not build, and the error is as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making all in mca/patcher/linux
</span><br>
<span class="quotelev1">&gt;   CC       patcher_linux_module.lo
</span><br>
<span class="quotelev1">&gt; patcher_linux_module.c:44:5: error: expected specifier-qualifier-list before 'ElfW'
</span><br>
<span class="quotelev1">&gt;      ElfW(Xword)        size;
</span><br>
<span class="quotelev1">&gt;      ^
</span><br>
<span class="quotelev1">&gt; patcher_linux_module.c:48:5: error: expected specifier-qualifier-list before 'ElfW'
</span><br>
<span class="quotelev1">&gt;      ElfW(Rela)         *tab;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;And many more similar, snipped for brevity&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like the file and directory where this issue occurs is a new addition in the master branch (for release 2.x, I presume); it does not exist in 1.10.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know nothing about the intent of the new code, and it looks like it is meant for Linux (only?) anyway, but somehow the autotools is pulling it in for FreeBSD as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1% of the executables have 99% of CPU privilege!
</span><br>
<span class="quotelev1">&gt; Userspace code! Unite!! Occupy the kernel!!!
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28940.php">http://www.open-mpi.org/community/lists/users/2016/04/28940.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28967.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="28965.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openib failover"</a>
<li><strong>In reply to:</strong> <a href="28940.php">dpchoudh .: "[OMPI users] Build on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28968.php">Nathan Hjelm: "Re: [OMPI users] Build on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="28968.php">Nathan Hjelm: "Re: [OMPI users] Build on FreeBSD"</a>
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
