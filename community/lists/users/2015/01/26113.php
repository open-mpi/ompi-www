<?
$subject_val = "Re: [OMPI users] Accessing Process Affinity within MPI Program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  7 00:47:26 2015" -->
<!-- isoreceived="20150107054726" -->
<!-- sent="Wed, 7 Jan 2015 00:47:25 -0500" -->
<!-- isosent="20150107054725" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing Process Affinity within MPI Program" -->
<!-- id="CA+ssbKV72PgB7-2fH5NN3=uddWWwbkN6Q5d87C=8H1DRTJUumQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="668FD327-00B6-41B6-907F-836837DE53DF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Accessing Process Affinity within MPI Program<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-07 00:47:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26114.php">Bernard Secher: "[OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26112.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Accessing Process Affinity within MPI Program"</a>
<li><strong>In reply to:</strong> <a href="26112.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Accessing Process Affinity within MPI Program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26115.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Accessing Process Affinity within MPI Program"</a>
<li><strong>Reply:</strong> <a href="26115.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Accessing Process Affinity within MPI Program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Jeff. I guess there is no Java binding for this function.
<br>
<p>On Tue, Jan 6, 2015 at 4:37 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Sorry for the delay in answering this; this mail came after I disappeared
</span><br>
<span class="quotelev1">&gt; for the US holidays.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes -- through an Open MPI extension (you must configure Open MPI with
</span><br>
<span class="quotelev1">&gt; --enable-mpi-ext=affinity or --enable-mpi-ext=all).  See:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/doc/v1.8/man3/OMPI_Affinity_str.3.php">http://www.open-mpi.org/doc/v1.8/man3/OMPI_Affinity_str.3.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 21, 2014, at 1:57 AM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is it possible to get information on the process affinity that's set in
</span><br>
<span class="quotelev1">&gt; mpirun command within the MPI program? For example I'd like to know the
</span><br>
<span class="quotelev1">&gt; number of cores that a given rank is bound to.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Saliya Ekanayake
</span><br>
<span class="quotelev2">&gt; &gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev2">&gt; &gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev2">&gt; &gt; Indiana University, Bloomington
</span><br>
<span class="quotelev2">&gt; &gt; Cell 812-391-4914
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/26050.php">http://www.open-mpi.org/community/lists/users/2014/12/26050.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26112.php">http://www.open-mpi.org/community/lists/users/2015/01/26112.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
Cell 812-391-4914
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26113/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26114.php">Bernard Secher: "[OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26112.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Accessing Process Affinity within MPI Program"</a>
<li><strong>In reply to:</strong> <a href="26112.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Accessing Process Affinity within MPI Program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26115.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Accessing Process Affinity within MPI Program"</a>
<li><strong>Reply:</strong> <a href="26115.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Accessing Process Affinity within MPI Program"</a>
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
