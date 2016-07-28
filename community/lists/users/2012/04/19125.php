<?
$subject_val = "Re: [OMPI users] regarding the problem occurred while running an mpi programs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 11:24:33 2012" -->
<!-- isoreceived="20120425152433" -->
<!-- sent="Wed, 25 Apr 2012 17:24:28 +0200" -->
<!-- isosent="20120425152428" -->
<!-- name="seshendra seshu" -->
<!-- email="seshu199_at_[hidden]" -->
<!-- subject="Re: [OMPI users] regarding the problem occurred while running an mpi programs" -->
<!-- id="CAJ_xm3BhQmwLYxmSsMtes+5ZN9qQ9TfECSicTdG9jabC=Az9yg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="677C2385-A37F-46C7-98C6-2BB3F284B90A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] regarding the problem occurred while running an mpi programs<br>
<strong>From:</strong> seshendra seshu (<em>seshu199_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 11:24:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19126.php">tyler.balson_at_[hidden]: "Re: [OMPI users] regarding the problem occurred while running an	mpi programs"</a>
<li><strong>Previous message:</strong> <a href="19124.php">Jeff Squyres: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<li><strong>In reply to:</strong> <a href="19124.php">Jeff Squyres: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19126.php">tyler.balson_at_[hidden]: "Re: [OMPI users] regarding the problem occurred while running an	mpi programs"</a>
<li><strong>Reply:</strong> <a href="19126.php">tyler.balson_at_[hidden]: "Re: [OMPI users] regarding the problem occurred while running an	mpi programs"</a>
<li><strong>Reply:</strong> <a href="19127.php">Jeff Squyres (jsquyres): "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
now i have created an used and tried to run the program but i got the
<br>
following error
<br>
<p>[master_at_ip-10-80-106-70 ~]$ mpirun -n 1 --hostfile hostfile
<br>
out
<br>
<p>out: error while loading shared libraries: libmpi_cxx.so.0: cannot open
<br>
shared object file: No such file or directory
<br>
<p><p>thanking you
<br>
<p><p><p>On Wed, Apr 25, 2012 at 5:12 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Apr 25, 2012, at 11:06 AM, seshendra seshu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; so should i need to create an user and run the mpi program. or how can i
</span><br>
<span class="quotelev1">&gt; run in cluster
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is a &quot;best practice&quot; to not run real applications as root (e.g., MPI
</span><br>
<span class="quotelev1">&gt; applications).  Create a non-privlidged user to run your applications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then be sure to set your LD_LIBRARY_PATH if you installed Open MPI into a
</span><br>
<span class="quotelev1">&gt; non-system-default location.  See this FAQ item:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
 WITH REGARDS
M.L.N.Seshendra
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19125/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19126.php">tyler.balson_at_[hidden]: "Re: [OMPI users] regarding the problem occurred while running an	mpi programs"</a>
<li><strong>Previous message:</strong> <a href="19124.php">Jeff Squyres: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<li><strong>In reply to:</strong> <a href="19124.php">Jeff Squyres: "Re: [OMPI users] regarding the problem occurred while running an mpi programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19126.php">tyler.balson_at_[hidden]: "Re: [OMPI users] regarding the problem occurred while running an	mpi programs"</a>
<li><strong>Reply:</strong> <a href="19126.php">tyler.balson_at_[hidden]: "Re: [OMPI users] regarding the problem occurred while running an	mpi programs"</a>
<li><strong>Reply:</strong> <a href="19127.php">Jeff Squyres (jsquyres): "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
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
