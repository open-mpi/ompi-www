<?
$subject_val = "Re: [OMPI users] mxm 3.0 and knem warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 10:15:09 2014" -->
<!-- isoreceived="20140827141509" -->
<!-- sent="Wed, 27 Aug 2014 17:15:08 +0300" -->
<!-- isosent="20140827141508" -->
<!-- name="Alina Sklarevich" -->
<!-- email="alinas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mxm 3.0 and knem warnings" -->
<!-- id="CADGp0BQsKPcbop8i_m=e33GkwKTeJ=b7mLNPLu_gvigS5R-pWA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9D628EB3-5089-465A-BB10-88BFAD419E86_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mxm 3.0 and knem warnings<br>
<strong>From:</strong> Alina Sklarevich (<em>alinas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-27 10:15:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25170.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>Previous message:</strong> <a href="25168.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &#181;&#170;&#206;`:  &#181;&#170;&#206;`:  Does multiple Irecv means concurrent receiving ?"</a>
<li><strong>In reply to:</strong> <a href="25166.php">Brock Palen: "[OMPI users] mxm 3.0 and knem warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25170.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>Reply:</strong> <a href="25170.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>KNEM can improve the performance significantly for intra-node communication
<br>
and that's why MXM is using it.
<br>
If you don't want to use it, you can suppress this warning by adding the
<br>
following to your command line after mpirun:
<br>
-x MXM_LOG_LEVEL=error
<br>
<p>Alina.
<br>
<p><p>On Wed, Aug 27, 2014 at 4:28 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; We updated our ofed and started to rebuild our MPI builds with mxm 3.0  .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now we get warnings bout knem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1409145437.578861] [flux-login1:31719:0]         shm.c:65   MXM  WARN
</span><br>
<span class="quotelev1">&gt; Could not open the KNEM device file at /dev/knem : No such file or
</span><br>
<span class="quotelev1">&gt; directory. Won't use knem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have heard about it a little.  Should we investigate adding it to our
</span><br>
<span class="quotelev1">&gt; systems?
</span><br>
<span class="quotelev1">&gt; Is there a way to suppress this warning?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25166.php">http://www.open-mpi.org/community/lists/users/2014/08/25166.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25169/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25170.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>Previous message:</strong> <a href="25168.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &#181;&#170;&#206;`:  &#181;&#170;&#206;`:  Does multiple Irecv means concurrent receiving ?"</a>
<li><strong>In reply to:</strong> <a href="25166.php">Brock Palen: "[OMPI users] mxm 3.0 and knem warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25170.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
<li><strong>Reply:</strong> <a href="25170.php">Brock Palen: "Re: [OMPI users] mxm 3.0 and knem warnings"</a>
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
