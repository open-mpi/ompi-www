<?
$subject_val = "Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 07:08:53 2009" -->
<!-- isoreceived="20090225120853" -->
<!-- sent="Wed, 25 Feb 2009 07:08:46 -0500" -->
<!-- isosent="20090225120846" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer" -->
<!-- id="CD0E5E3F-05EB-42AC-9C3B-3E2DD89602C9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="924CDB255A147C48B23D75C97EBC94111F52FF_at_exbe04.intra.dlr.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-25 07:08:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8196.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libswhenusingVampirServer"</a>
<li><strong>Previous message:</strong> <a href="8194.php">Nysal Jan: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<li><strong>In reply to:</strong> <a href="8193.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8196.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libswhenusingVampirServer"</a>
<li><strong>Reply:</strong> <a href="8196.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libswhenusingVampirServer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 25, 2009, at 4:02 AM, &lt;michael.meinel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; - Get Python to give you the possibility of opening dependent
</span><br>
<span class="quotelev2">&gt;&gt; libraries in the global scope.  This may be somewhat controversial;
</span><br>
<span class="quotelev2">&gt;&gt; there are good reasons to open plugins in private scopes.  But I have
</span><br>
<span class="quotelev2">&gt;&gt; to imagine that OMPI is not the only python extension out there that
</span><br>
<span class="quotelev2">&gt;&gt; wants to open plugins of its own; other such projects should be
</span><br>
<span class="quotelev2">&gt;&gt; running into similar issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That would involve patching Python in some nifty places which would
</span><br>
<span class="quotelev1">&gt; probably lead to less Platform independence, so no option yet.
</span><br>
<p><p>I should have been more clear: what I meant was to engage the Python  
<br>
community to get such a feature to be implemented upstream in Python  
<br>
itself.  Since I would find it easy to believe that other Python  
<br>
Extension projects may run into similar issues, it may be worth  
<br>
raising this issue to the Python community and opening the debate there.
<br>
<p>That being said, Nysal also posted an interesting approach.  :-)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8196.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libswhenusingVampirServer"</a>
<li><strong>Previous message:</strong> <a href="8194.php">Nysal Jan: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<li><strong>In reply to:</strong> <a href="8193.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libs whenusingVampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8196.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libswhenusingVampirServer"</a>
<li><strong>Reply:</strong> <a href="8196.php">michael.meinel_at_[hidden]: "Re: [OMPI users] Problems in 1.3 loading shared libswhenusingVampirServer"</a>
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
