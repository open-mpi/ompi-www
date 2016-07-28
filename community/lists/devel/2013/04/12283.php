<?
$subject_val = "Re: [OMPI devel] Speaking of epoll....";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 17 17:38:17 2013" -->
<!-- isoreceived="20130417213817" -->
<!-- sent="Wed, 17 Apr 2013 14:38:11 -0700" -->
<!-- isosent="20130417213811" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Speaking of epoll...." -->
<!-- id="9843851E-5F8C-4788-A0A7-8DF41C6CA773_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="516F12AD.6040101_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Speaking of epoll....<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-17 17:38:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12284.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12282.php">Orion Poplawski: "[OMPI devel] Speaking of epoll...."</a>
<li><strong>In reply to:</strong> <a href="12282.php">Orion Poplawski: "[OMPI devel] Speaking of epoll...."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12285.php">Ralph Castain: "Re: [OMPI devel] Speaking of epoll...."</a>
<li><strong>Reply:</strong> <a href="12285.php">Ralph Castain: "Re: [OMPI devel] Speaking of epoll...."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ick - will take a look. Thanks!
<br>
<p>On Apr 17, 2013, at 2:22 PM, Orion Poplawski &lt;orion_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Building 1.7.1 on Fedora I'm seeing:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking for epoll support... checking for epoll_ctl... yes
</span><br>
<span class="quotelev1">&gt; yes
</span><br>
<span class="quotelev1">&gt; checking for working epoll library interface... no
</span><br>
<span class="quotelev1">&gt; no
</span><br>
<span class="quotelev1">&gt; checking for working epoll system call... no
</span><br>
<span class="quotelev1">&gt; checking for epoll syscall support... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at config.log:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; configure:13769: checking for working epoll library interface
</span><br>
<span class="quotelev1">&gt; configure:13822: gcc -o conftest  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 -fexceptions -fstack-protector --param=ssp-buffer-size=4  -m64 -mtune=generic -Wall -fno-strict-aliasing -I/builddir/build/BUILD/openmpi-1.7.1 -I/builddir/build/BUILD/openmpi-1.7.1 -I/builddir/build/BUILD/openmpi-1.7.1/opal/include    -Wl,-z,noexecstack conftest.c -lnsl  -lutil -lm  -lhwloc  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c: In function 'main':
</span><br>
<span class="quotelev1">&gt; conftest.c:137:5: warning: 'main' is normally a non-static function [-Wmain]
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt;     ^
</span><br>
<span class="quotelev1">&gt; conftest.c: In function 'main':
</span><br>
<span class="quotelev1">&gt; conftest.c:143:16: error: expected expression before '[' token
</span><br>
<span class="quotelev1">&gt;     int fildes[[2]];
</span><br>
<span class="quotelev1">&gt;                ^
</span><br>
<span class="quotelev1">&gt; conftest.c:147:22: error: expected expression before '[' token
</span><br>
<span class="quotelev1">&gt;     if (pipe(&amp;fildes[[0]]) &lt; 0)
</span><br>
<span class="quotelev1">&gt;                      ^
</span><br>
<span class="quotelev1">&gt; conftest.c:154:47: error: expected expression before '[' token
</span><br>
<span class="quotelev1">&gt;     if (epoll_ctl(epfd, EPOLL_CTL_ADD, fildes[[1]], &amp;epevin) == -1)
</span><br>
<span class="quotelev1">&gt;                                               ^
</span><br>
<span class="quotelev1">&gt; conftest.c:143:9: warning: unused variable 'fildes' [-Wunused-variable]
</span><br>
<span class="quotelev1">&gt;     int fildes[[2]];
</span><br>
<span class="quotelev1">&gt;         ^
</span><br>
<span class="quotelev1">&gt; configure:13822: $? = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which results in HAVE_EPOLL = 0kjj
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like an issue with m4 quoting.  Also, it looks like this has been addressed (removed) in libevent 2.0.21.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Orion Poplawski
</span><br>
<span class="quotelev1">&gt; Technical Manager                     303-415-9701 x222
</span><br>
<span class="quotelev1">&gt; NWRA, Boulder/CoRA Office             FAX: 303-415-9702
</span><br>
<span class="quotelev1">&gt; 3380 Mitchell Lane                       orion_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12284.php">Ralph Castain: "Re: [OMPI devel] Using external libevent"</a>
<li><strong>Previous message:</strong> <a href="12282.php">Orion Poplawski: "[OMPI devel] Speaking of epoll...."</a>
<li><strong>In reply to:</strong> <a href="12282.php">Orion Poplawski: "[OMPI devel] Speaking of epoll...."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12285.php">Ralph Castain: "Re: [OMPI devel] Speaking of epoll...."</a>
<li><strong>Reply:</strong> <a href="12285.php">Ralph Castain: "Re: [OMPI devel] Speaking of epoll...."</a>
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
