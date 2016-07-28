<?
$subject_val = "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 25 14:57:19 2016" -->
<!-- isoreceived="20160425185719" -->
<!-- sent="Mon, 25 Apr 2016 18:57:16 +0000" -->
<!-- isosent="20160425185716" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH" -->
<!-- id="91682EF1-3D2A-49F2-AD1B-650BDF57143B_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="019AA17B-8D9C-44C5-9AB5-B40F7764A7E2_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-25 14:57:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29033.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Previous message:</strong> <a href="29031.php">Ralph Castain: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="29031.php">Ralph Castain: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29036.php">Dave Love: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In addition to what Ralph said, check out these 3 FAQ items:
<br>

<br>
<a href="https://www.open-mpi.org/faq/?category=running#run-prereqs">https://www.open-mpi.org/faq/?category=running#run-prereqs</a>
<br>
<a href="https://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">https://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<a href="https://www.open-mpi.org/faq/?category=running#mpirun-prefix">https://www.open-mpi.org/faq/?category=running#mpirun-prefix</a>
<br>

<br>

<br>

<br>
<span class="quotelev1">&gt; On Apr 25, 2016, at 2:02 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you tried configuring OMPI with -enable-orterun-prefix-by-default?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 25, 2016, at 10:34 AM, Rob Malpass &lt;lug_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Sorry if this isn&#226;&#128;&#153;t 100% relevant to this list but I&#226;&#128;&#153;m at my wits end&#226;&#128;&#166;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; After a lot of hacking, I&#226;&#128;&#153;ve finally configured openmpi on my Ubuntu cluster.   I had been having awful problems with not being able to find the libraries on the remote nodes but apparently the workaround is to use ld.conf.so.d/*.conf
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; I have compiled and run an example and it has worked but as it is not recommended practice, can I please ask if there is a better / more elegant workaround?   It is still the case that LD_LIBRARY_PATH is not set (because no dot files like .profile, .bashrc etc) get executed when a non-interactive ssh session takes place).   Is this going to cause me problems later?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/29030.php">http://www.open-mpi.org/community/lists/users/2016/04/29030.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/29031.php">http://www.open-mpi.org/community/lists/users/2016/04/29031.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29033.php">Siegmar Gross: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Previous message:</strong> <a href="29031.php">Ralph Castain: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="29031.php">Ralph Castain: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29036.php">Dave Love: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
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
