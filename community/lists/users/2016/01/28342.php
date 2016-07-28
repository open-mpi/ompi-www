<?
$subject_val = "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 13:07:43 2016" -->
<!-- isoreceived="20160122180743" -->
<!-- sent="Fri, 22 Jan 2016 10:07:33 -0800" -->
<!-- isosent="20160122180733" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sjeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1" -->
<!-- id="56A26FE5.9010408_at_nvidia.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BY2PR04MB712BDF9DDE931428FEA8FE78EC40_at_BY2PR04MB712.namprd04.prod.outlook.com" -->
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
<strong>From:</strong> Sylvain Jeaugey (<em>sjeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-22 13:07:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28343.php">Kuhl, Spencer J: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Previous message:</strong> <a href="28341.php">Kuhl, Spencer J: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>In reply to:</strong> <a href="28341.php">Kuhl, Spencer J: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28343.php">Kuhl, Spencer J: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Reply:</strong> <a href="28343.php">Kuhl, Spencer J: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like the errors are produced by the hwloc configure ; this one 
<br>
somehow can't find CUDA (I have to check if that's a problem btw). 
<br>
Anyway, later in the configure, the VT configure finds cuda correctly, 
<br>
so it seems specific to the hwloc configure.
<br>
<p>On 01/22/2016 10:01 AM, Kuhl, Spencer J wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Sylvain,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configure does not stop, 'make all install' completes.  After 
</span><br>
<span class="quotelev1">&gt; remaking and recompiling then ignoring the configure errors, and 
</span><br>
<span class="quotelev1">&gt; confirming both a functional cuda install and functional openmpi 
</span><br>
<span class="quotelev1">&gt; install.  I went to the /usr/local/cuda/samples directory and ran 
</span><br>
<span class="quotelev1">&gt; 'make' and succesfully ran 'simpleMPI' provided by NVIDIA.  The output 
</span><br>
<span class="quotelev1">&gt; suggested that everything works perfectly fine between openMPI and 
</span><br>
<span class="quotelev1">&gt; cuda on my Jetson TK1 install.  Because of this, I think it is as you 
</span><br>
<span class="quotelev1">&gt; suspected; it was just ./configure output noise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What a frustrating exercise.  Thanks for the suggestion.  I think I 
</span><br>
<span class="quotelev1">&gt; can say 'case closed'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Spencer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users &lt;users-bounces_at_[hidden]&gt; on behalf of Sylvain 
</span><br>
<span class="quotelev1">&gt; Jeaugey &lt;sjeaugey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Sent:* Friday, January 22, 2016 11:34 AM
</span><br>
<span class="quotelev1">&gt; *To:* users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] configuring open mpi 10.1.2 with cuda on 
</span><br>
<span class="quotelev1">&gt; NVIDIA TK1
</span><br>
<span class="quotelev1">&gt; Hi Spencer,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you be more specific about what fails ? Did the configure stop 
</span><br>
<span class="quotelev1">&gt; at some point ? Or is it a compile error during the build ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure the errors you are seeing in config.log are actually the 
</span><br>
<span class="quotelev1">&gt; real problem (I'm seeing the same error traces on a perfectly working 
</span><br>
<span class="quotelev1">&gt; machine). Not pretty, but maybe just noise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 01/22/2016 06:48 AM, Kuhl, Spencer J wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the suggestion Ryan, I will remove the symlinks and start 
</span><br>
<span class="quotelev2">&gt;&gt; try again.  I checked config.log, and it appears that the configure 
</span><br>
<span class="quotelev2">&gt;&gt; finds cuda support, (result: yes), but once configure checks for 
</span><br>
<span class="quotelev2">&gt;&gt; cuda.h usability, conftest.c reports that a fatal error occurred, 
</span><br>
<span class="quotelev2">&gt;&gt; 'cuda.h no such file or directory.'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have copied here some grep'ed output of config.log
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ./configure --prefix=/usr/local --with-cuda=/usr/local/cuda-6.5 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-java
</span><br>
<span class="quotelev2">&gt;&gt; configure:9829: checking if --with-cuda is set
</span><br>
<span class="quotelev2">&gt;&gt; configure:9883: result: found (/usr/local/cuda-6.5/include/cuda.h)
</span><br>
<span class="quotelev2">&gt;&gt; | #include &lt;/usr/local/cuda-6.5/include/cuda.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:10055: checking if have cuda support
</span><br>
<span class="quotelev2">&gt;&gt; configure:10058: result: yes (-I/usr/local/cuda-6.5)
</span><br>
<span class="quotelev2">&gt;&gt; configure:66435: result: '--prefix=/usr/local' 
</span><br>
<span class="quotelev2">&gt;&gt; '--with-cuda=/usr/local/cuda-6.5' '--enable-mpi-java'
</span><br>
<span class="quotelev2">&gt;&gt; configure:74182: checking cuda.h usability
</span><br>
<span class="quotelev2">&gt;&gt; conftest.c:643:18: fatal error: cuda.h: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;  #include &lt;cuda.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; | #include &lt;cuda.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:74182: checking cuda.h presence
</span><br>
<span class="quotelev2">&gt;&gt; conftest.c:610:18: fatal error: cuda.h: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;  #include &lt;cuda.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; | #include &lt;cuda.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:74182: checking for cuda.h
</span><br>
<span class="quotelev2">&gt;&gt; configure:74265: checking cuda_runtime_api.h usability
</span><br>
<span class="quotelev2">&gt;&gt; conftest.c:643:30: fatal error: cuda_runtime_api.h: No such file or 
</span><br>
<span class="quotelev2">&gt;&gt; directory
</span><br>
<span class="quotelev2">&gt;&gt;  #include &lt;cuda_runtime_api.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; | #include &lt;cuda_runtime_api.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:74265: checking cuda_runtime_api.h presence
</span><br>
<span class="quotelev2">&gt;&gt; conftest.c:610:30: fatal error: cuda_runtime_api.h: No such file or 
</span><br>
<span class="quotelev2">&gt;&gt; directory
</span><br>
<span class="quotelev2">&gt;&gt;  #include &lt;cuda_runtime_api.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; | #include &lt;cuda_runtime_api.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure:74265: checking for cuda_runtime_api.h
</span><br>
<span class="quotelev2">&gt;&gt; configure:97946: running /bin/bash './configure' --disable-dns 
</span><br>
<span class="quotelev2">&gt;&gt; --disable-http --disable-rpc --disable-openssl 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-thread-support --disable-evport '--prefix=/usr/local' 
</span><br>
<span class="quotelev2">&gt;&gt; '--with-cuda=/usr/local/cuda-6.5' '--enable-mpi-java' 
</span><br>
<span class="quotelev2">&gt;&gt; --cache-file=/dev/null --srcdir=. --disable-option-checking
</span><br>
<span class="quotelev2">&gt;&gt; configure:187066: result: verbs_usnic, ugni, sm, verbs, cuda
</span><br>
<span class="quotelev2">&gt;&gt; configure:193532: checking for MCA component common:cuda compile mode
</span><br>
<span class="quotelev2">&gt;&gt; configure:193585: checking if MCA component common:cuda can compile
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *From:* users &lt;users-bounces_at_[hidden]&gt; on behalf of Novosielski, 
</span><br>
<span class="quotelev2">&gt;&gt; Ryan &lt;novosirj_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Sent:* Friday, January 22, 2016 1:20 AM
</span><br>
<span class="quotelev2">&gt;&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:* Re: [OMPI users] configuring open mpi 10.1.2 with cuda on 
</span><br>
<span class="quotelev2">&gt;&gt; NVIDIA TK1
</span><br>
<span class="quotelev2">&gt;&gt; I would check config.log carefully to see what specifically failed or 
</span><br>
<span class="quotelev2">&gt;&gt; wasn't found where. I would never mess around with the contents of 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/include. That is sloppy stuff and likely to get you into trouble 
</span><br>
<span class="quotelev2">&gt;&gt; someday.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ____ *Note: UMDNJ is now Rutgers-Biomedical and Health Sciences*
</span><br>
<span class="quotelev2">&gt;&gt; || \\UTGERS      |---------------------*O*---------------------
</span><br>
<span class="quotelev2">&gt;&gt; ||_// Biomedical | Ryan Novosielski - Senior Technologist
</span><br>
<span class="quotelev2">&gt;&gt; || \\ and Health | novosirj_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:novosirj_at_[hidden]&gt;- 973/972.0922 (2x0922)
</span><br>
<span class="quotelev2">&gt;&gt; ||  \\  Sciences | OIRT/High Perf &amp; Res Comp - MSB C630, Newark
</span><br>
<span class="quotelev2">&gt;&gt;     `'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 21, 2016, at 17:45, Kuhl, Spencer J &lt;spencer-kuhl_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Openmpi 1.10.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cuda.h and cuda_runtime_api.h exist in /usr/local/cuda-6.5/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using the configure trigger ./configure --with-cuda does not find 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cuda.h or cuda_runtime_api.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using the configure trigger ./configure 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-cuda=/usr/local/cuda-6.5 does not find cuda.h or 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cuda_runtime_api.h either.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I found a stack exchange article where someone tried to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; symlink cuda.h and cuda_runtime_api.h to /usr/include and then it 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configured fine for that user.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did the same thing, created symlinks of those to header files 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cuda.h and cuda_runtime_api.h to /usr/include and my ./configure got 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; past cuda.h successfully, but not past cuda_runtime_api.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any suggestions?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Spencer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28331.php">http://www.open-mpi.org/community/lists/users/2016/01/28331.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/01/28335.php">http://www.open-mpi.org/community/lists/users/2016/01/28335.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) 
</span><br>
<span class="quotelev1">&gt; and may contain confidential information. Any unauthorized review, 
</span><br>
<span class="quotelev1">&gt; use, disclosure or distribution is prohibited.  If you are not the 
</span><br>
<span class="quotelev1">&gt; intended recipient, please contact the sender by reply email and 
</span><br>
<span class="quotelev1">&gt; destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28341.php">http://www.open-mpi.org/community/lists/users/2016/01/28341.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28342/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28343.php">Kuhl, Spencer J: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Previous message:</strong> <a href="28341.php">Kuhl, Spencer J: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>In reply to:</strong> <a href="28341.php">Kuhl, Spencer J: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28343.php">Kuhl, Spencer J: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Reply:</strong> <a href="28343.php">Kuhl, Spencer J: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
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
