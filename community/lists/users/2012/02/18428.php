<?
$subject_val = "Re: [OMPI users] Problem in epoll checking in the head revision of 1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 16:41:57 2012" -->
<!-- isoreceived="20120209214157" -->
<!-- sent="Thu, 9 Feb 2012 16:41:51 -0500" -->
<!-- isosent="20120209214151" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in epoll checking in the head revision of 1.5" -->
<!-- id="7C86BFDD-74B3-478A-9654-25719AF3084E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAN7CqreK2YE+i1nhP+rMUTLzkrV7KbZotoKLKyQNfMVH=773eA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem in epoll checking in the head revision of 1.5<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 16:41:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18429.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18427.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18426.php">Andrew Senin: "[OMPI users] Problem in epoll checking in the head revision of 1.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Committed -- thanks!
<br>
<p>On Feb 9, 2012, at 3:16 PM, Andrew Senin wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think there is a problem in the latest commit to the branch 1.5. When opal_setup_libevent.m4 is upgraded to autotools 1.5.5 the square brackets in the test C code should be replaced too. Otherwise they'll go unchanged to the configure file. And the C program which tests for epoll support will fail:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; configure:159404: checking for working epoll system call
</span><br>
<span class="quotelev1">&gt; configure:159455: gcc -o conftest -DNDEBUG -g -O2   -I/hpc/home/USERS/senina/projects/hg/shmem-dev/opal/mca/hwloc/hwloc131/hwloc/include -I/hpc/home/USERS/senina/projects/distribs/valgrind-3.7.0/install/include   -I/usr/include/infiniband -I/usr/include/infiniband    conftest.c -lrt -lnsl  -lutil -lm  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; conftest.c: In function 'main':
</span><br>
<span class="quotelev1">&gt; conftest.c:725: error: expected expression before '[' token
</span><br>
<span class="quotelev1">&gt; conftest.c:729: error: expected expression before '[' token
</span><br>
<span class="quotelev1">&gt; conftest.c:737: error: expected expression before '[' token
</span><br>
<span class="quotelev1">&gt; configure:159455: $? = 1
</span><br>
<span class="quotelev1">&gt; configure: program exited with status 1
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So
</span><br>
<span class="quotelev1">&gt;      int fildes[[2]];
</span><br>
<span class="quotelev1">&gt; and similar 
</span><br>
<span class="quotelev1">&gt; should be replaced to 
</span><br>
<span class="quotelev1">&gt;     int fildes[2];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've attached a diff file which worked for me. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards, 
</span><br>
<span class="quotelev1">&gt; Andrew Senin
</span><br>
<span class="quotelev1">&gt; &lt;diff&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18429.php">Abhinav Sarje: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>Previous message:</strong> <a href="18427.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18426.php">Andrew Senin: "[OMPI users] Problem in epoll checking in the head revision of 1.5"</a>
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
