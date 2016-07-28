<?
$subject_val = "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 02:23:21 2016" -->
<!-- isoreceived="20160122072321" -->
<!-- sent="Fri, 22 Jan 2016 02:20:35 -0500" -->
<!-- isosent="20160122072035" -->
<!-- name="Novosielski, Ryan" -->
<!-- email="novosirj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1" -->
<!-- id="4D17AFF6-2925-4E21-96E9-7F5BF42737BD_at_ca.rutgers.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="BY2PR04MB712D5959D7DA41730F6BE0C8EC30_at_BY2PR04MB712.namprd04.prod.outlook.com" -->
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
<strong>From:</strong> Novosielski, Ryan (<em>novosirj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-22 02:20:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28333.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>Previous message:</strong> <a href="28331.php">Kuhl, Spencer J: "[OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>In reply to:</strong> <a href="28331.php">Kuhl, Spencer J: "[OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28335.php">Kuhl, Spencer J: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Reply:</strong> <a href="28335.php">Kuhl, Spencer J: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would check config.log carefully to see what specifically failed or wasn't found where. I would never mess around with the contents of /usr/include. That is sloppy stuff and likely to get you into trouble someday.
<br>

<br>
____ *Note: UMDNJ is now Rutgers-Biomedical and Health Sciences*
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

<br>
On Jan 21, 2016, at 17:45, Kuhl, Spencer J &lt;spencer-kuhl_at_[hidden]&lt;mailto:spencer-kuhl_at_[hidden]&gt;&gt; wrote:
<br>

<br>

<br>
Openmpi 1.10.2
<br>

<br>
cuda.h and cuda_runtime_api.h exist in /usr/local/cuda-6.5/include
<br>

<br>
using the configure trigger ./configure --with-cuda does not find cuda.h or cuda_runtime_api.h
<br>

<br>
using the configure trigger ./configure --with-cuda=/usr/local/cuda-6.5 does not find cuda.h or cuda_runtime_api.h either.
<br>

<br>
However, I found a stack exchange article where someone tried to symlink cuda.h and cuda_runtime_api.h to /usr/include and then it configured fine for that user.
<br>

<br>
I did the same thing, created symlinks of those to header files cuda.h and cuda_runtime_api.h to /usr/include and my ./configure got past cuda.h successfully, but not past cuda_runtime_api.h
<br>

<br>

<br>
Any suggestions?
<br>

<br>

<br>
Thanks
<br>

<br>

<br>
Spencer
<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28331.php">http://www.open-mpi.org/community/lists/users/2016/01/28331.php</a>
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28332/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28333.php">Eva: "Re: [OMPI users] MPI hangs on poll_device() with rdma"</a>
<li><strong>Previous message:</strong> <a href="28331.php">Kuhl, Spencer J: "[OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>In reply to:</strong> <a href="28331.php">Kuhl, Spencer J: "[OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28335.php">Kuhl, Spencer J: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
<li><strong>Reply:</strong> <a href="28335.php">Kuhl, Spencer J: "Re: [OMPI users] configuring open mpi 10.1.2 with cuda on NVIDIA TK1"</a>
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
