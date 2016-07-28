<?
$subject_val = "[OMPI devel] Speaking of epoll....";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 17 17:22:57 2013" -->
<!-- isoreceived="20130417212257" -->
<!-- sent="Wed, 17 Apr 2013 15:22:53 -0600" -->
<!-- isosent="20130417212253" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="[OMPI devel] Speaking of epoll...." -->
<!-- id="516F12AD.6040101_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Speaking of epoll....<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-17 17:22:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12283.php">Ralph Castain: "Re: [OMPI devel] Speaking of epoll...."</a>
<li><strong>Previous message:</strong> <a href="12281.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12283.php">Ralph Castain: "Re: [OMPI devel] Speaking of epoll...."</a>
<li><strong>Reply:</strong> <a href="12283.php">Ralph Castain: "Re: [OMPI devel] Speaking of epoll...."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Building 1.7.1 on Fedora I'm seeing:
<br>
<p>checking for epoll support... checking for epoll_ctl... yes
<br>
yes
<br>
checking for working epoll library interface... no
<br>
no
<br>
checking for working epoll system call... no
<br>
checking for epoll syscall support... no
<br>
<p>Looking at config.log:
<br>
<p>configure:13769: checking for working epoll library interface
<br>
configure:13822: gcc -o conftest  -O2 -g -pipe -Wall -Wp,-D_FORTIFY_SOURCE=2 
<br>
-fexceptions -fstack-protector --param=ssp-buffer-size=4  -m64 -mtune=generic 
<br>
-Wall -fno-strict-aliasing -I/builddir/build/BUILD/openmpi-1.7.1 
<br>
-I/builddir/build/BUILD/openmpi-1.7.1 
<br>
-I/builddir/build/BUILD/openmpi-1.7.1/opal/include    -Wl,-z,noexecstack 
<br>
conftest.c -lnsl  -lutil -lm  -lhwloc  &gt;&amp;5
<br>
conftest.c: In function 'main':
<br>
conftest.c:137:5: warning: 'main' is normally a non-static function [-Wmain]
<br>
&nbsp;&nbsp;int main(int argc, char **argv)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
conftest.c: In function 'main':
<br>
conftest.c:143:16: error: expected expression before '[' token
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int fildes[[2]];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
conftest.c:147:22: error: expected expression before '[' token
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (pipe(&amp;fildes[[0]]) &lt; 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
conftest.c:154:47: error: expected expression before '[' token
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (epoll_ctl(epfd, EPOLL_CTL_ADD, fildes[[1]], &amp;epevin) == -1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
conftest.c:143:9: warning: unused variable 'fildes' [-Wunused-variable]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int fildes[[2]];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
configure:13822: $? = 1
<br>
<p>Which results in HAVE_EPOLL = 0kjj
<br>
<p>Looks like an issue with m4 quoting.  Also, it looks like this has been 
<br>
addressed (removed) in libevent 2.0.21.
<br>
<p><p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA, Boulder/CoRA Office             FAX: 303-415-9702
3380 Mitchell Lane                       orion_at_[hidden]
Boulder, CO 80301                   <a href="http://www.nwra.com">http://www.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12283.php">Ralph Castain: "Re: [OMPI devel] Speaking of epoll...."</a>
<li><strong>Previous message:</strong> <a href="12281.php">Orion Poplawski: "Re: [OMPI devel] Using external libevent"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12283.php">Ralph Castain: "Re: [OMPI devel] Speaking of epoll...."</a>
<li><strong>Reply:</strong> <a href="12283.php">Ralph Castain: "Re: [OMPI devel] Speaking of epoll...."</a>
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
