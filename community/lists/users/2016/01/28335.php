<?
$subject_val = "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 09:48:50 2016" -->
<!-- isoreceived="20160122144850" -->
<!-- sent="Fri, 22 Jan 2016 14:48:45 +0000" -->
<!-- isosent="20160122144845" -->
<!-- name="Kuhl, Spencer J" -->
<!-- email="spencer-kuhl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1" -->
<!-- id="BY2PR04MB712903F20B77B2C7C79FD998EC40_at_BY2PR04MB712.namprd04.prod.outlook.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4D17AFF6-2925-4E21-96E9-7F5BF42737BD_at_ca.rutgers.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1<br>
<strong>From:</strong> Kuhl, Spencer J (<em>spencer-kuhl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-22 09:48:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28336.php">Nick Papior: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Previous message:</strong> <a href="28334.php">Pawe&#197;&#130; Jarz&#196;&#153;bski: "[OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>In reply to:</strong> <a href="28332.php">Novosielski, Ryan: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28340.php">Sylvain Jeaugey: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Reply:</strong> <a href="28340.php">Sylvain Jeaugey: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the suggestion Ryan, I will remove the symlinks and start try again.  I checked config.log, and it appears that the configure finds cuda support, (result: yes), but once configure checks for cuda.h usability, conftest.c reports that a fatal error occurred, 'cuda.h no such file or directory.'
<br>
<p><p>I have copied here some grep'ed output of config.log
<br>
<p><p>$ ./configure --prefix=/usr/local --with-cuda=/usr/local/cuda-6.5 --enable-mpi-java
<br>
configure:9829: checking if --with-cuda is set
<br>
configure:9883: result: found (/usr/local/cuda-6.5/include/cuda.h)
<br>
| #include &lt;/usr/local/cuda-6.5/include/cuda.h&gt;
<br>
configure:10055: checking if have cuda support
<br>
configure:10058: result: yes (-I/usr/local/cuda-6.5)
<br>
configure:66435: result:  '--prefix=/usr/local' '--with-cuda=/usr/local/cuda-6.5' '--enable-mpi-java'
<br>
configure:74182: checking cuda.h usability
<br>
conftest.c:643:18: fatal error: cuda.h: No such file or directory
<br>
&nbsp;#include &lt;cuda.h&gt;
<br>
| #include &lt;cuda.h&gt;
<br>
configure:74182: checking cuda.h presence
<br>
conftest.c:610:18: fatal error: cuda.h: No such file or directory
<br>
&nbsp;#include &lt;cuda.h&gt;
<br>
| #include &lt;cuda.h&gt;
<br>
configure:74182: checking for cuda.h
<br>
configure:74265: checking cuda_runtime_api.h usability
<br>
conftest.c:643:30: fatal error: cuda_runtime_api.h: No such file or directory
<br>
&nbsp;#include &lt;cuda_runtime_api.h&gt;
<br>
| #include &lt;cuda_runtime_api.h&gt;
<br>
configure:74265: checking cuda_runtime_api.h presence
<br>
conftest.c:610:30: fatal error: cuda_runtime_api.h: No such file or directory
<br>
&nbsp;#include &lt;cuda_runtime_api.h&gt;
<br>
| #include &lt;cuda_runtime_api.h&gt;
<br>
configure:74265: checking for cuda_runtime_api.h
<br>
configure:97946: running /bin/bash './configure' --disable-dns --disable-http --disable-rpc --disable-openssl --enable-thread-support --disable-evport  '--prefix=/usr/local' '--with-cuda=/usr/local/cuda-6.5' '--enable-mpi-java' --cache-file=/dev/null --srcdir=. --disable-option-checking
<br>
configure:187066: result: verbs_usnic, ugni, sm, verbs, cuda
<br>
configure:193532: checking for MCA component common:cuda compile mode
<br>
configure:193585: checking if MCA component common:cuda can compile
<br>
<p><p><p>________________________________
<br>
From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Novosielski, Ryan &lt;novosirj_at_[hidden]&gt;
<br>
Sent: Friday, January 22, 2016 1:20 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1
<br>
<p>I would check config.log carefully to see what specifically failed or wasn't found where. I would never mess around with the contents of /usr/include. That is sloppy stuff and likely to get you into trouble someday.
<br>
<p>____ *Note: UMDNJ is now Rutgers-Biomedical and Health Sciences*
<br>
|| \\UTGERS      |---------------------*O*---------------------
<br>
||_// Biomedical | Ryan Novosielski - Senior Technologist
<br>
|| \\ and Health | novosirj_at_[hidden]&lt;mailto:novosirj_at_[hidden]&gt;- 973/972.0922 (2x0922)
<br>
||  \\  Sciences | OIRT/High Perf &amp; Res Comp - MSB C630, Newark
<br>
&nbsp;&nbsp;&nbsp;&nbsp;`'
<br>
<p>On Jan 21, 2016, at 17:45, Kuhl, Spencer J &lt;spencer-kuhl_at_[hidden]&lt;mailto:spencer-kuhl_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Openmpi 1.10.2
<br>
<p>cuda.h and cuda_runtime_api.h exist in /usr/local/cuda-6.5/include
<br>
<p>using the configure trigger ./configure --with-cuda does not find cuda.h or cuda_runtime_api.h
<br>
<p>using the configure trigger ./configure --with-cuda=/usr/local/cuda-6.5 does not find cuda.h or cuda_runtime_api.h either.
<br>
<p>However, I found a stack exchange article where someone tried to symlink cuda.h and cuda_runtime_api.h to /usr/include and then it configured fine for that user.
<br>
<p>I did the same thing, created symlinks of those to header files cuda.h and cuda_runtime_api.h to /usr/include and my ./configure got past cuda.h successfully, but not past cuda_runtime_api.h
<br>
<p><p>Any suggestions?
<br>
<p><p>Thanks
<br>
<p><p>Spencer
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28331.php">http://www.open-mpi.org/community/lists/users/2016/01/28331.php</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28335/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28336.php">Nick Papior: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>Previous message:</strong> <a href="28334.php">Pawe&#197;&#130; Jarz&#196;&#153;bski: "[OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<li><strong>In reply to:</strong> <a href="28332.php">Novosielski, Ryan: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28340.php">Sylvain Jeaugey: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Reply:</strong> <a href="28340.php">Sylvain Jeaugey: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
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
