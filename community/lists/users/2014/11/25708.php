<?
$subject_val = "Re: [OMPI users] Question on mapping processes to hosts file";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  7 12:51:08 2014" -->
<!-- isoreceived="20141107175108" -->
<!-- sent="Fri, 7 Nov 2014 09:51:04 -0800" -->
<!-- isosent="20141107175104" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on mapping processes to hosts file" -->
<!-- id="4A80FF63-C336-480A-A19C-CBF4301F5652_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0CC22504_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on mapping processes to hosts file<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-07 12:51:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25709.php">Brock Palen: "[OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25707.php">Blosch, Edwin L: "[OMPI users] Question on mapping processes to hosts file"</a>
<li><strong>In reply to:</strong> <a href="25707.php">Blosch, Edwin L: "[OMPI users] Question on mapping processes to hosts file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25742.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to hosts file"</a>
<li><strong>Reply:</strong> <a href="25742.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to hosts file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah, yes - so here is what is happening. When no slot info is provided, we use the number of detected cores on each node as the #slots. So if you want to loadbalance across the nodes, you need to set &#226;&#128;&#148;map-by node
<br>
<p>Or add slots=1 to each line of your host file to override the default behavior
<br>
<p><span class="quotelev1">&gt; On Nov 7, 2014, at 8:52 AM, Blosch, Edwin L &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here&#226;&#128;&#153;s my command:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;path_to_OpenMPI_1.8.3&gt;/bin/mpirun &lt;unrelated MCA options&gt; --machinefile hosts.dat -np 4 &lt;executable&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Here&#226;&#128;&#153;s my hosts.dat file:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; % cat hosts.dat
</span><br>
<span class="quotelev1">&gt; node01
</span><br>
<span class="quotelev1">&gt; node02
</span><br>
<span class="quotelev1">&gt; node03
</span><br>
<span class="quotelev1">&gt; node04
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; All 4 ranks are launched on node01.  I don&#226;&#128;&#153;t believe I&#226;&#128;&#153;ve ever seen this before.  I had to do a sanity check, so I tried MVAPICH2-2.1a and got what I expected: 1 process runs on each of the 4 nodes.  The mpirun man page says &#226;&#128;&#152;round-robin&#226;&#128;&#153;, which I take to mean that one process would be launched per line in the hosts file, so this really seems like incorrect behavior.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; What could be the possibilities here?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks for the help!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25707.php">http://www.open-mpi.org/community/lists/users/2014/11/25707.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/11/25707.php">http://www.open-mpi.org/community/lists/users/2014/11/25707.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25708/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25709.php">Brock Palen: "[OMPI users] How OMPI picks ethernet interfaces"</a>
<li><strong>Previous message:</strong> <a href="25707.php">Blosch, Edwin L: "[OMPI users] Question on mapping processes to hosts file"</a>
<li><strong>In reply to:</strong> <a href="25707.php">Blosch, Edwin L: "[OMPI users] Question on mapping processes to hosts file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25742.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to hosts file"</a>
<li><strong>Reply:</strong> <a href="25742.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Question on mapping processes to hosts file"</a>
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
