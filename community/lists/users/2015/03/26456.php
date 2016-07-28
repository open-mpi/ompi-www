<?
$subject_val = "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio'	enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 17:23:38 2015" -->
<!-- isoreceived="20150312212338" -->
<!-- sent="Thu, 12 Mar 2015 21:23:36 +0000" -->
<!-- isosent="20150312212336" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio'	enabled" -->
<!-- id="621C378D-5592-47FA-BA77-378F32942636_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5501FE48.1020406_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio'	enabled<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-12 17:23:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26457.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Previous message:</strong> <a href="26455.php">Fabricio Cannini: "[OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>In reply to:</strong> <a href="26455.php">Fabricio Cannini: "[OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26457.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Reply:</strong> <a href="26457.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you have the latest version of the Intel 12.x compiler installed?
<br>
<p>Are you able to compile/install any other C source code that uses varargs?
<br>
<p>I ask because we've seen busted / buggy Intel compiler installs before.  It may be that you need to update to the latest version of the Intel 12.x compiler suite.
<br>
<p><p><span class="quotelev1">&gt; On Mar 12, 2015, at 4:59 PM, Fabricio Cannini &lt;fcannini_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello there
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to compile the mentioned combination in a centos 6.5 x64 host without success, while using intel 14.0 the problem does not happens.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using the configure option '--disable-io-romio' allows me to compile without further trouble, but that's not really a fix. ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've tried both 1.8.3 and 1.8.4 tarballs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the error message:
</span><br>
<span class="quotelev1">&gt; ============================================================
</span><br>
<span class="quotelev1">&gt; /usr/include/bits/fcntl2.h(44): error #18015: invalid use of '__builtin_va_arg_pack_len'
</span><br>
<span class="quotelev1">&gt; /usr/include/bits/fcntl2.h(57): error #18015: invalid use of '__builtin_va_arg_pack_len'
</span><br>
<span class="quotelev1">&gt; /usr/include/bits/fcntl2.h(60): error #18015: invalid use of '__builtin_va_arg_pack'
</span><br>
<span class="quotelev1">&gt; compilation aborted for adio/ad_nfs/ad_nfs_open.c (code 1)
</span><br>
<span class="quotelev1">&gt; ============================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And the configure options:
</span><br>
<span class="quotelev1">&gt; ============================================================
</span><br>
<span class="quotelev1">&gt; --enable-shared		\
</span><br>
<span class="quotelev1">&gt; --enable-static         \
</span><br>
<span class="quotelev1">&gt; --disable-vt		\
</span><br>
<span class="quotelev1">&gt; --with-sge		\
</span><br>
<span class="quotelev1">&gt; --with-tm=/opt/torque	\
</span><br>
<span class="quotelev1">&gt; --with-valgrind		\
</span><br>
<span class="quotelev1">&gt; --with-psm		\
</span><br>
<span class="quotelev1">&gt; --with-verbs=yes	\
</span><br>
<span class="quotelev1">&gt; --with-threads=posix
</span><br>
<span class="quotelev1">&gt; =============================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIA,
</span><br>
<span class="quotelev1">&gt; Fabricio
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26455.php">http://www.open-mpi.org/community/lists/users/2015/03/26455.php</a>
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
<li><strong>Next message:</strong> <a href="26457.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Previous message:</strong> <a href="26455.php">Fabricio Cannini: "[OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>In reply to:</strong> <a href="26455.php">Fabricio Cannini: "[OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26457.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Reply:</strong> <a href="26457.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
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
