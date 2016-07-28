<?
$subject_val = "Re: [OMPI users] OpenMPI 1.10.1 crashes with file size limit &lt;= 131072";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 16:20:23 2015" -->
<!-- isoreceived="20151119212023" -->
<!-- sent="Thu, 19 Nov 2015 15:20:18 -0600" -->
<!-- isosent="20151119212018" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.10.1 crashes with file size limit &amp;lt;= 131072" -->
<!-- id="CAMD57occb3M4+2k07Gdzbv7Ufp2dKdZAAq=wMr2W9m3rJneZAw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DUB123-W313B20A891A100E07C841EB11B0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.10.1 crashes with file size limit &lt;= 131072<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-19 16:20:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28069.php">Saurabh T: "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<li><strong>Previous message:</strong> <a href="28067.php">Saurabh T: "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<li><strong>In reply to:</strong> <a href="28065.php">Saurabh T: "[OMPI users] OpenMPI 1.10.1 crashes with file size limit &lt;= 131072"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you please provide a little more info regarding the environment you
<br>
are running under (which resource mgr or not, etc), how many nodes you had
<br>
in the allocation, etc?
<br>
<p>There is no reason why something should behave that way. So it would help
<br>
if we could understand the setup.
<br>
Ralph
<br>
<p><p>On Thu, Nov 19, 2015 at 2:20 PM, Saurabh T &lt;saurabh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Here's what I find:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; cd examples
</span><br>
<span class="quotelev2">&gt; &gt; make hello_cxx
</span><br>
<span class="quotelev2">&gt; &gt; ulimit -f 131073
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; orterun -np 3 hello_cxxHello, world!
</span><br>
<span class="quotelev1">&gt; [Etc]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ulimit -f 131072
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; orterun -np 3 hello_cxx
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28065.php">http://www.open-mpi.org/community/lists/users/2015/11/28065.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28068/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28069.php">Saurabh T: "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<li><strong>Previous message:</strong> <a href="28067.php">Saurabh T: "Re: [OMPI users] Openmpi 1.10.1 fails with SIGXFSZ on file limit &lt;= 131072"</a>
<li><strong>In reply to:</strong> <a href="28065.php">Saurabh T: "[OMPI users] OpenMPI 1.10.1 crashes with file size limit &lt;= 131072"</a>
<!-- nextthread="start" -->
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
