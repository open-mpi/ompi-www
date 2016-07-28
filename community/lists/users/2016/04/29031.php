<?
$subject_val = "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 14:02:13 2016" -->
<!-- isoreceived="20160425180213" -->
<!-- sent="Mon, 25 Apr 2016 11:02:10 -0700" -->
<!-- isosent="20160425180210" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH" -->
<!-- id="019AA17B-8D9C-44C5-9AB5-B40F7764A7E2_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="00ca01d19f18$c3a90300$4afb0900$_at_getiton.myzen.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-25 14:02:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29032.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="29030.php">Rob Malpass: "[OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="29030.php">Rob Malpass: "[OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29032.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="29032.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have you tried configuring OMPI with -enable-orterun-prefix-by-default?
<br>
<p><span class="quotelev1">&gt; On Apr 25, 2016, at 10:34 AM, Rob Malpass &lt;lug_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Sorry if this isn&#226;&#128;&#153;t 100% relevant to this list but I&#226;&#128;&#153;m at my wits end&#226;&#128;&#166;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; After a lot of hacking, I&#226;&#128;&#153;ve finally configured openmpi on my Ubuntu cluster.   I had been having awful problems with not being able to find the libraries on the remote nodes but apparently the workaround is to use ld.conf.so.d/*.conf
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have compiled and run an example and it has worked but as it is not recommended practice, can I please ask if there is a better / more elegant workaround?   It is still the case that LD_LIBRARY_PATH is not set (because no dot files like .profile, .bashrc etc) get executed when a non-interactive ssh session takes place).   Is this going to cause me problems later?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/29030.php">http://www.open-mpi.org/community/lists/users/2016/04/29030.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2016/04/29030.php">http://www.open-mpi.org/community/lists/users/2016/04/29030.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29031/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29032.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="29030.php">Rob Malpass: "[OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="29030.php">Rob Malpass: "[OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29032.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="29032.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
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
