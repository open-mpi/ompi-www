<?
$subject_val = "Re: [OMPI users] ompi_info in 1.8.x";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  2 12:20:51 2015" -->
<!-- isoreceived="20150702162051" -->
<!-- sent="Thu, 2 Jul 2015 16:20:47 +0000" -->
<!-- isosent="20150702162047" -->
<!-- name="Tom Coles" -->
<!-- email="tcoles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi_info in 1.8.x" -->
<!-- id="C02BC8C11F3E684DBAC6ECF9180BABF2B44F1A0A_at_OC11EXPO30.exchange.mit.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] ompi_info in 1.8.x" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi_info in 1.8.x<br>
<strong>From:</strong> Tom Coles (<em>tcoles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-02 12:20:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27249.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
<li><strong>Previous message:</strong> <a href="27247.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
<li><strong>Maybe in reply to:</strong> <a href="27246.php">Tom Coles: "[OMPI users] ompi_info in 1.8.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27249.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
<li><strong>Reply:</strong> <a href="27249.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see, thanks for the quick reply. 
<br>
<p>In light of this, I'd like to suggest an update to the FAQ entry at <a href="http://www.open-mpi.org/faq/?category=tuning#available-mca-params">http://www.open-mpi.org/faq/?category=tuning#available-mca-params</a>
<br>
I just noticed that this is covered in question 6, but it is not clear when reading question 8.
<br>
<p>Tom
<br>
<p><span class="quotelev1">&gt; On Thu, 2 Jul 2015 at 14:17:17, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Greetings Tom.
</span><br>
<p><span class="quotelev1">&gt; This was a change we made to the default behavior in ompi_info in the v1.7/v1.8 series.  See the --level option and the &quot;Levels&quot; section in the ompi_info(1) man page (i.e., <a href="http://www.open-mpi.org/doc/v1.8/man1/ompi_info.1.php">http://www.open-mpi.org/doc/v1.8/man1/ompi_info.1.php</a>).
</span><br>
<p><p><p><span class="quotelev1">&gt; On Jul 2, 2015, at 10:10 AM, Tom Coles &lt;tcoles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run:
</span><br>
<span class="quotelev1">&gt; ompi_info --param btl all
</span><br>
<span class="quotelev1">&gt; with OpenMPI 1.8.x, it returns only btl_tcp_if_include and btl_tcp_if_exclude. However, if I run it in 1.6.x, it returns a long list of btl parameters. These parameters are still shown in 1.8.x if I run:
</span><br>
<span class="quotelev1">&gt; ompi_info --all
</span><br>
<span class="quotelev1">&gt; But obviously this is less convenient when I am only interested in btl parameters.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure if this is a bug with the first command I gave above or if something has changed that I'm not aware of.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I run RHEL 5.11 and have tried compiling with various GCC versions, including 4.4.7 (from RedHat's yum repository), 4.8.2, 4.9.1, and 5.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for any help/advice.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tom Coles
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27246.php">http://www.open-mpi.org/community/lists/users/2015/07/27246.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27249.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
<li><strong>Previous message:</strong> <a href="27247.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
<li><strong>Maybe in reply to:</strong> <a href="27246.php">Tom Coles: "[OMPI users] ompi_info in 1.8.x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27249.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
<li><strong>Reply:</strong> <a href="27249.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_info in 1.8.x"</a>
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
