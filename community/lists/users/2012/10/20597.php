<?
$subject_val = "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 08:17:16 2012" -->
<!-- isoreceived="20121031121716" -->
<!-- sent="Wed, 31 Oct 2012 08:16:52 -0400" -->
<!-- isosent="20121031121652" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application" -->
<!-- id="6A695692-E68E-4121-ADA4-3024847629D8_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAH_fbjmPXKGTEXABboG_ozSt-CO3Etd+EKv_6aWhBqt+tL_XCQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-31 08:16:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20598.php">Ralph Castain: "Re: [OMPI users] [patch] test(1) &quot;==&quot; is not portable, use &quot;=&quot;"</a>
<li><strong>Previous message:</strong> <a href="20596.php">marco atzeri: "[OMPI users] bug (?) opal_path_access incorrect call"</a>
<li><strong>In reply to:</strong> <a href="20594.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to find errno.h in your machine and see what the #define'd name for 108 is.
<br>
<p>On Oct 31, 2012, at 3:04 AM, Mathieu Gontier wrote:
<br>
<p><span class="quotelev1">&gt; I do not know too :-/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 30, 2012 at 2:37 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; What's errno=108 on your platform?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 30, 2012, at 9:22 AM, Damien Hocking wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I've never seen that, but someone else might have.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Damien
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 30/10/2012 1:43 AM, Mathieu Gontier wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Damien,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The only message I have is:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [vs2010:09300] [[56007,0],0]-[[56007,1],0] mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [vs2010:09300] 2 more processes have sent help message help-odls-default.txt / odls-default:could-not-kill
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Does it mean something for you?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Mathieu Gontier
</span><br>
<span class="quotelev1">&gt; - MSN: mathieu.gontier_at_[hidden]
</span><br>
<span class="quotelev1">&gt; - Skype: mathieu_gontier
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20598.php">Ralph Castain: "Re: [OMPI users] [patch] test(1) &quot;==&quot; is not portable, use &quot;=&quot;"</a>
<li><strong>Previous message:</strong> <a href="20596.php">marco atzeri: "[OMPI users] bug (?) opal_path_access incorrect call"</a>
<li><strong>In reply to:</strong> <a href="20594.php">Mathieu Gontier: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
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
