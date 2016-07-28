<?
$subject_val = "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 13:01:06 2016" -->
<!-- isoreceived="20160122180106" -->
<!-- sent="Fri, 22 Jan 2016 18:01:03 +0000" -->
<!-- isosent="20160122180103" -->
<!-- name="Kuhl, Spencer J" -->
<!-- email="spencer-kuhl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1" -->
<!-- id="BY2PR04MB712BDF9DDE931428FEA8FE78EC40_at_BY2PR04MB712.namprd04.prod.outlook.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="56A2682D.5090609_at_nvidia.com" -->
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
<strong>Date:</strong> 2016-01-22 13:01:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28342.php">Sylvain Jeaugey: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Previous message:</strong> <a href="28340.php">Sylvain Jeaugey: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>In reply to:</strong> <a href="28340.php">Sylvain Jeaugey: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28342.php">Sylvain Jeaugey: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Reply:</strong> <a href="28342.php">Sylvain Jeaugey: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sylvain,
<br>
<p><p>The configure does not stop, 'make all install' completes.  After remaking and recompiling then ignoring the configure errors, and confirming both a functional cuda install and functional openmpi install.  I went to the /usr/local/cuda/samples directory and ran 'make' and succesfully ran 'simpleMPI' provided by NVIDIA.  The output suggested that everything works perfectly fine between openMPI and cuda on my Jetson TK1 install.  Because of this, I think it is as you suspected; it was just ./configure output noise.
<br>
<p><p>What a frustrating exercise.  Thanks for the suggestion.  I think I can say 'case closed'
<br>
<p><p>Spencer
<br>
<p><p><p>________________________________
<br>
From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Sylvain Jeaugey &lt;sjeaugey_at_[hidden]&gt;
<br>
Sent: Friday, January 22, 2016 11:34 AM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1
<br>
<p>Hi Spencer,
<br>
<p>Could you be more specific about what fails ? Did the configure stop at some point ? Or is it a compile error during the build ?
<br>
<p>I'm not sure the errors you are seeing in config.log are actually the real problem (I'm seeing the same error traces on a perfectly working machine). Not pretty, but maybe just noise.
<br>
<p>Thanks,
<br>
Sylvain
<br>
<p>On 01/22/2016 06:48 AM, Kuhl, Spencer J wrote:
<br>
<p>Thanks for the suggestion Ryan, I will remove the symlinks and start try again.  I checked config.log, and it appears that the configure finds cuda support, (result: yes), but once configure checks for cuda.h usability, conftest.c reports that a fatal error occurred, 'cuda.h no such file or directory.'
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
From: users &lt;users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&gt; on behalf of Novosielski, Ryan &lt;novosirj_at_[hidden]&gt;&lt;mailto:novosirj_at_[hidden]&gt;
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
<p>On Jan 21, 2016, at 17:45, Kuhl, Spencer J &lt;&lt;mailto:spencer-kuhl_at_[hidden]&gt;spencer-kuhl_at_[hidden]&lt;mailto:spencer-kuhl_at_[hidden]&gt;&gt; wrote:
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
<p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28335.php">http://www.open-mpi.org/community/lists/users/2016/01/28335.php</a>
<br>
<p>________________________________
<br>
This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
<br>
________________________________
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28341/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28342.php">Sylvain Jeaugey: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Previous message:</strong> <a href="28340.php">Sylvain Jeaugey: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>In reply to:</strong> <a href="28340.php">Sylvain Jeaugey: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28342.php">Sylvain Jeaugey: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Reply:</strong> <a href="28342.php">Sylvain Jeaugey: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
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
