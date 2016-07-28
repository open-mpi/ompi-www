<?
$subject_val = "Re: [OMPI users] regarding the problem occurred while running anmpi programs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 11:43:43 2012" -->
<!-- isoreceived="20120425154343" -->
<!-- sent="Wed, 25 Apr 2012 17:43:38 +0200" -->
<!-- isosent="20120425154338" -->
<!-- name="seshendra seshu" -->
<!-- email="seshu199_at_[hidden]" -->
<!-- subject="Re: [OMPI users] regarding the problem occurred while running anmpi programs" -->
<!-- id="CAJ_xm3BbpMWcf8vCxG+ggdUJERKzA0mcnrKU_g2ZUQ8TbZYCvA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="05B29543-8C77-4330-BAE7-E4BE3D29CEBB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] regarding the problem occurred while running anmpi programs<br>
<strong>From:</strong> seshendra seshu (<em>seshu199_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 11:43:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19129.php">tyler.balson_at_[hidden]: "Re: [OMPI users] regarding the problem occurred while running anmpi	programs"</a>
<li><strong>Previous message:</strong> <a href="19127.php">Jeff Squyres (jsquyres): "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>In reply to:</strong> <a href="19127.php">Jeff Squyres (jsquyres): "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19129.php">tyler.balson_at_[hidden]: "Re: [OMPI users] regarding the problem occurred while running anmpi	programs"</a>
<li><strong>Reply:</strong> <a href="19129.php">tyler.balson_at_[hidden]: "Re: [OMPI users] regarding the problem occurred while running anmpi	programs"</a>
<li><strong>Reply:</strong> <a href="19130.php">Lloyd Brown: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I have exported the library files as below
<br>
<p>[master_at_ip-10-80-106-70 ~]$ export
<br>
LD_LIBRARY_PATH=/usr/local/openmpi-1.4.5/lib:$LD_LIBRARY_PATH
<br>
<p>[master_at_ip-10-80-106-70 ~]$ mpirun --prefix /usr/local/openmpi-1.4.5 -n 1
<br>
--hostfile hostfile out
<br>
out: error while loading shared libraries: libmpi_cxx.so.0: cannot open
<br>
shared object file: No such file or directory
<br>
[master_at_ip-10-80-106-70 ~]$ mpirun --prefix /usr/local/lib/ -n 1 --hostfile
<br>
hostfile
<br>
out
<br>
<p>out: error while loading shared libraries: libmpi_cxx.so.0: cannot open
<br>
shared object file: No such file or directory
<br>
<p>But still iam getting the same error.
<br>
<p><p><p><p><p>On Wed, Apr 25, 2012 at 5:36 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; See the FAQ item I cited.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 25, 2012, at 11:24 AM, &quot;seshendra seshu&quot; &lt;seshu199_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; now i have created an used and tried to run the program but i got the
</span><br>
<span class="quotelev1">&gt; following error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [master_at_ip-10-80-106-70 ~]$ mpirun -n 1 --hostfile hostfile
</span><br>
<span class="quotelev1">&gt; out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; out: error while loading shared libraries: libmpi_cxx.so.0: cannot open
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanking you
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 25, 2012 at 5:12 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 25, 2012, at 11:06 AM, seshendra seshu wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; so should i need to create an user and run the mpi program. or how can
</span><br>
<span class="quotelev2">&gt;&gt; i run in cluster
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is a &quot;best practice&quot; to not run real applications as root (e.g., MPI
</span><br>
<span class="quotelev2">&gt;&gt; applications).  Create a non-privlidged user to run your applications.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then be sure to set your LD_LIBRARY_PATH if you installed Open MPI into a
</span><br>
<span class="quotelev2">&gt;&gt; non-system-default location.  See this FAQ item:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  WITH REGARDS
</span><br>
<span class="quotelev1">&gt; M.L.N.Seshendra
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19128/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19129.php">tyler.balson_at_[hidden]: "Re: [OMPI users] regarding the problem occurred while running anmpi	programs"</a>
<li><strong>Previous message:</strong> <a href="19127.php">Jeff Squyres (jsquyres): "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>In reply to:</strong> <a href="19127.php">Jeff Squyres (jsquyres): "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19129.php">tyler.balson_at_[hidden]: "Re: [OMPI users] regarding the problem occurred while running anmpi	programs"</a>
<li><strong>Reply:</strong> <a href="19129.php">tyler.balson_at_[hidden]: "Re: [OMPI users] regarding the problem occurred while running anmpi	programs"</a>
<li><strong>Reply:</strong> <a href="19130.php">Lloyd Brown: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
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
