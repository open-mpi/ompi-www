<?
$subject_val = "Re: [MTT devel] MTToGDS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 06:47:20 2010" -->
<!-- isoreceived="20100210114720" -->
<!-- sent="Wed, 10 Feb 2010 06:47:13 -0500" -->
<!-- isosent="20100210114713" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTToGDS" -->
<!-- id="0CFB6F72-212C-4C60-BD51-8895718E1EA9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B727878.7050905_at_argus-cv.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTToGDS<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 06:47:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0471.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0469.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="0467.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0473.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0473.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 10, 2010, at 4:12 AM, Igor Ivanov wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Is it hard to redirect the appspot lookup to use google account names + passwords?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; [II] I believe that it is possible task. It could be done in two ways:
</span><br>
<span class="quotelev1">&gt; set google account e-mail in mttdatabase_username key of ini-file
</span><br>
<span class="quotelev1">&gt; 1) provide for filling User.username with google account e-mail and change code of User.check_password in file  gds/auth/models.py to with google account verification code
</span><br>
<span class="quotelev1">&gt; code example (I have not checked one):
</span><br>
<p>I took a swipe at doing this (totally not tested; how does one develop/test this stuff?).  I know just a tiny bit of python, but the code was fairly readable.  Please see the attached patch -- is it anywhere close to correct?
<br>
<p>User.get_full_name() would still need to be re-done.  How does one fetch Google account info like that?
<br>
<p><span class="quotelev1">&gt; Keep in mind performance difference between google account verification code and local verification!
</span><br>
<p>Yep -- am not worried about that.  MTT data submits don't have to be super speedy.  If a local verification takes (say) .01 second, and a google account verification takes 1 second (or even a few seconds), I don't think it'll matter.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0470/use-google-account.patch">use-google-account.patch</a>
</ul>
<!-- attachment="use-google-account.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0471.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0469.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="0467.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0473.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Reply:</strong> <a href="0473.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
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
