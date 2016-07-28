<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 10 08:06:57 2007" -->
<!-- isoreceived="20070410120657" -->
<!-- sent="Tue, 10 Apr 2007 08:06:41 -0400" -->
<!-- isosent="20070410120641" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification" -->
<!-- id="5231D83B-F21A-484E-B015-5132962DFC51_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5711d990704100336t77a144adodcf14a27b0aef99f_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-10 08:06:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3053.php">Brock Palen: "Re: [OMPI users] Help with HPL and MPI"</a>
<li><strong>Previous message:</strong> <a href="3051.php">G&#246;tz Waschk: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>In reply to:</strong> <a href="3051.php">G&#246;tz Waschk: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you are setting the limits for locked memory for InfiniBand, see  
<br>
these FAQ entries:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more</a>
<br>
<p><p><p>On Apr 10, 2007, at 6:36 AM, G&#246;tz Waschk wrote:
<br>
<p><span class="quotelev1">&gt; On 4/10/07, Bala &lt;cppbala_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   But still when we try to submit interactive job
</span><br>
<span class="quotelev2">&gt;&gt; we are getting the following error,
</span><br>
<span class="quotelev2">&gt;&gt; $ qrsh -pe mpich 4
</span><br>
<span class="quotelev2">&gt;&gt;  Rocks Compute Node
</span><br>
<span class="quotelev2">&gt;&gt;  Rocks 4.2.1 (Cydonia)
</span><br>
<span class="quotelev2">&gt;&gt;  Profile built 14:09 02-Apr-2007
</span><br>
<span class="quotelev2">&gt;&gt;  Kickstarted 22:16 02-Apr-2007
</span><br>
<span class="quotelev2">&gt;&gt;  -bash: ulimit: max locked memory: cannot modify
</span><br>
<span class="quotelev2">&gt;&gt; limit: Operation not permitted
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Bala,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it seems you set the limit in one of the bash profile scripts, be it
</span><br>
<span class="quotelev1">&gt; ~/.profile, /etc/profile or /etc/profile.d/*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  How do you set ulimit?? and how much??
</span><br>
<span class="quotelev2">&gt;&gt; pls advice.
</span><br>
<span class="quotelev1">&gt; I don't set this limit at all, SGE doesn't touch the default value of
</span><br>
<span class="quotelev1">&gt; 32k. There are several ways to set the limit. It seems you are hitting
</span><br>
<span class="quotelev1">&gt; the hard limit, if you want to set a higher value, you have to modify
</span><br>
<span class="quotelev1">&gt; /etc/security/limits.conf as defined in the comments. This is part of
</span><br>
<span class="quotelev1">&gt; pam, so you have to make sure your ssh session is using pam.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards, G&#246;tz Waschk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; AL I:40: Do what thou wilt shall be the whole of the Law.
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3053.php">Brock Palen: "Re: [OMPI users] Help with HPL and MPI"</a>
<li><strong>Previous message:</strong> <a href="3051.php">G&#246;tz Waschk: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>In reply to:</strong> <a href="3051.php">G&#246;tz Waschk: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
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
