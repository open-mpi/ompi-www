<?
$subject_val = "Re: [OMPI users] Need help resolving &quot;error obtaining device context for mlx4_0&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 18:13:19 2015" -->
<!-- isoreceived="20151217231319" -->
<!-- sent="Thu, 17 Dec 2015 15:13:13 -0800" -->
<!-- isosent="20151217231313" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving &amp;quot;error obtaining device context for mlx4_0&amp;quot;" -->
<!-- id="87E5F9F7-4B45-4DFF-BBEF-DFDEE4E08C65_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="80e3112050a442509e65c19b5ff2b628_at_EXG13-P-MBX03.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need help resolving &quot;error obtaining device context for mlx4_0&quot;<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-17 18:13:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28180.php">Bathke, Chuck: "Re: [OMPI users] Need help resolving &quot;error obtaining device	context for mlx4_0&quot;"</a>
<li><strong>Previous message:</strong> <a href="28178.php">Bathke, Chuck: "[OMPI users] Need help resolving &quot;error obtaining device context for mlx4_0&quot;"</a>
<li><strong>In reply to:</strong> <a href="28178.php">Bathke, Chuck: "[OMPI users] Need help resolving &quot;error obtaining device context for mlx4_0&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28180.php">Bathke, Chuck: "Re: [OMPI users] Need help resolving &quot;error obtaining device	context for mlx4_0&quot;"</a>
<li><strong>Reply:</strong> <a href="28180.php">Bathke, Chuck: "Re: [OMPI users] Need help resolving &quot;error obtaining device	context for mlx4_0&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to check the permissions on the MLX device directory - according to that error message, the permissions are preventing you from accessing the device. Without getting access, we don&#226;&#128;&#153;t have a way to communicate across nodes - you can run on one node using shared memory, but not multiple nodes.
<br>
<p>So it looks like there is some device-level permissions issue in play.
<br>
<p><p><span class="quotelev1">&gt; On Dec 17, 2015, at 2:39 PM, Bathke, Chuck &lt;bathke_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;    I have a system of AMD blades that I am trying to run MCNP6 on using OPENMPI. I installed openmpi-1.6.5. I also have installed Intel FORTRAN and C compiles. I compiled MCNP6 using FC=&quot;mpif90&quot; CC=&quot;mpicc&quot; &#226;&#128;&#166; It runs just fine when I run it on a 1-hour test case on just one blade. I need to run it on several blades, but it issues an error and crashes and burns. I have sought help here, but no one seems to know how to fix it. I have mounted /opt and /home on bud and bud6 on the corresponding /opt and /home on bud4, at their suggestion. That did not fix anything. Please look at the attached file (created with bud4&gt;tar -zcf info.tgz mpihT3) that holds the data that is requested at <a href="https://www.open-mpi.org/community/help/">https://www.open-mpi.org/community/help/</a> &lt;<a href="https://www.open-mpi.org/community/help/">https://www.open-mpi.org/community/help/</a>&gt; and in bullet 13 on<a href="https://www.open-mpi.org/community/help/">https://www.open-mpi.org/community/help/</a> &lt;<a href="https://www.open-mpi.org/community/help/">https://www.open-mpi.org/community/help/</a>&gt; . Can you look at it and suggest a solution? I suspect that it is something trivial that does not stand out and say, &#226;&#128;&#156;look here you idiot.&#226;&#128;&#157; Thanks.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                                     Charles &quot;Chuck&quot; Bathke
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; MS-C921
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; P.O. Box 1663
</span><br>
<span class="quotelev1">&gt; Los Alamos, NM 87545
</span><br>
<span class="quotelev1">&gt; Phone:(505)667-7214
</span><br>
<span class="quotelev1">&gt; Cell:(505)695-5709
</span><br>
<span class="quotelev1">&gt; Fax: 505-665-2897
</span><br>
<span class="quotelev1">&gt; Location: TA-16, Building 0200, Room 125
</span><br>
<span class="quotelev1">&gt; NEN-5 Group Office: 505-667-0914
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;info.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28178.php">http://www.open-mpi.org/community/lists/users/2015/12/28178.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/12/28178.php">http://www.open-mpi.org/community/lists/users/2015/12/28178.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28179/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28180.php">Bathke, Chuck: "Re: [OMPI users] Need help resolving &quot;error obtaining device	context for mlx4_0&quot;"</a>
<li><strong>Previous message:</strong> <a href="28178.php">Bathke, Chuck: "[OMPI users] Need help resolving &quot;error obtaining device context for mlx4_0&quot;"</a>
<li><strong>In reply to:</strong> <a href="28178.php">Bathke, Chuck: "[OMPI users] Need help resolving &quot;error obtaining device context for mlx4_0&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28180.php">Bathke, Chuck: "Re: [OMPI users] Need help resolving &quot;error obtaining device	context for mlx4_0&quot;"</a>
<li><strong>Reply:</strong> <a href="28180.php">Bathke, Chuck: "Re: [OMPI users] Need help resolving &quot;error obtaining device	context for mlx4_0&quot;"</a>
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
