<?
$subject_val = "Re: [OMPI users] Different Prefix for different nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 12:47:09 2012" -->
<!-- isoreceived="20120215174709" -->
<!-- sent="Wed, 15 Feb 2012 20:47:04 +0300" -->
<!-- isosent="20120215174704" -->
<!-- name="Tohiko Looka" -->
<!-- email="tohiko.looka_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Different Prefix for different nodes" -->
<!-- id="CALd0-52RWd4QM0eSRo8CxnYCWVm37rJZQOLbKciQu+zq2tjN3w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8B5AFC46-7D3D-4C60-BB62-13A4D0C5A3BC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Different Prefix for different nodes<br>
<strong>From:</strong> Tohiko Looka (<em>tohiko.looka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 12:47:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18486.php">Tohiko Looka: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>Previous message:</strong> <a href="18484.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>In reply to:</strong> <a href="18482.php">Jeff Squyres: "Re: [OMPI users] Different Prefix for different nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18488.php">Jeff Squyres: "Re: [OMPI users] Different Prefix for different nodes"</a>
<li><strong>Reply:</strong> <a href="18488.php">Jeff Squyres: "Re: [OMPI users] Different Prefix for different nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff,
<br>
<p>Yes, I tried that and it worked.. Thanks
<br>
But I hope the people behind OpenMPI will correct this in the documentation
<br>
<p>On Wed, Feb 15, 2012 at 7:08 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 14, 2012, at 4:06 PM, Tohiko Looka wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to run my application on different nodes; each with a
</span><br>
<span class="quotelev1">&gt; different path to OpenMPI libraries and binaries.
</span><br>
<span class="quotelev2">&gt; &gt; According to the documentation I can set '-prefix' on a per-context
</span><br>
<span class="quotelev1">&gt; basis, so I can set '-prefix' differently
</span><br>
<span class="quotelev2">&gt; &gt; for each node, but I wasn't able to do it and I didn't find an example
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yoinks -- that might be incorrect documentation.  I'm pretty sure --prefix
</span><br>
<span class="quotelev1">&gt; is a global switch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have OMPI installed in different locations on different nodes,
</span><br>
<span class="quotelev1">&gt; --prefix might not be a good solution.  Instead, you might well want to set
</span><br>
<span class="quotelev1">&gt; your PATH/LD_LIBRARY_PATH in the shell startup files on each node (e.g.,
</span><br>
<span class="quotelev1">&gt; $HOME/.bashrc) to values that are relevant for that node.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18485/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18486.php">Tohiko Looka: "Re: [OMPI users] Strange OpenMPI messages"</a>
<li><strong>Previous message:</strong> <a href="18484.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<li><strong>In reply to:</strong> <a href="18482.php">Jeff Squyres: "Re: [OMPI users] Different Prefix for different nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18488.php">Jeff Squyres: "Re: [OMPI users] Different Prefix for different nodes"</a>
<li><strong>Reply:</strong> <a href="18488.php">Jeff Squyres: "Re: [OMPI users] Different Prefix for different nodes"</a>
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
