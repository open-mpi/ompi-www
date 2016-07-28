<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 10 06:36:12 2007" -->
<!-- isoreceived="20070410103612" -->
<!-- sent="Tue, 10 Apr 2007 12:36:08 +0200" -->
<!-- isosent="20070410103608" -->
<!-- name="G&#246;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification" -->
<!-- id="5711d990704100336t77a144adodcf14a27b0aef99f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="983537.10941.qm_at_web35111.mail.mud.yahoo.com" -->
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
<strong>From:</strong> G&#246;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-10 06:36:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3052.php">Jeff Squyres: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>Previous message:</strong> <a href="3050.php">Bala: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>In reply to:</strong> <a href="3050.php">Bala: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3052.php">Jeff Squyres: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>Reply:</strong> <a href="3052.php">Jeff Squyres: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 4/10/07, Bala &lt;cppbala_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;   But still when we try to submit interactive job
</span><br>
<span class="quotelev1">&gt; we are getting the following error,
</span><br>
<span class="quotelev1">&gt; $ qrsh -pe mpich 4
</span><br>
<span class="quotelev1">&gt;  Rocks Compute Node
</span><br>
<span class="quotelev1">&gt;  Rocks 4.2.1 (Cydonia)
</span><br>
<span class="quotelev1">&gt;  Profile built 14:09 02-Apr-2007
</span><br>
<span class="quotelev1">&gt;  Kickstarted 22:16 02-Apr-2007
</span><br>
<span class="quotelev1">&gt;  -bash: ulimit: max locked memory: cannot modify
</span><br>
<span class="quotelev1">&gt; limit: Operation not permitted
</span><br>
<p>Hi Bala,
<br>
<p>it seems you set the limit in one of the bash profile scripts, be it
<br>
~/.profile, /etc/profile or /etc/profile.d/*.
<br>
<p><span class="quotelev1">&gt;  How do you set ulimit?? and how much??
</span><br>
<span class="quotelev1">&gt; pls advice.
</span><br>
I don't set this limit at all, SGE doesn't touch the default value of
<br>
32k. There are several ways to set the limit. It seems you are hitting
<br>
the hard limit, if you want to set a higher value, you have to modify
<br>
/etc/security/limits.conf as defined in the comments. This is part of
<br>
pam, so you have to make sure your ssh session is using pam.
<br>
<p>Regards, G&#246;tz Waschk
<br>
<p><p><pre>
-- 
AL I:40: Do what thou wilt shall be the whole of the Law.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3052.php">Jeff Squyres: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>Previous message:</strong> <a href="3050.php">Bala: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>In reply to:</strong> <a href="3050.php">Bala: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3052.php">Jeff Squyres: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
<li><strong>Reply:</strong> <a href="3052.php">Jeff Squyres: "Re: [OMPI users] OpenMPI run with the SGE launcher, orte PE calrification"</a>
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
