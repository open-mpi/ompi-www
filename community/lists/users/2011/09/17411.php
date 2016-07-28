<?
$subject_val = "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 10:48:23 2011" -->
<!-- isoreceived="20110923144823" -->
<!-- sent="Fri, 23 Sep 2011 10:48:18 -0400" -->
<!-- isosent="20110923144818" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi -cc=&amp;lt;compiler name&amp;gt; option" -->
<!-- id="2CB8DC70-B3C7-45D4-8D3E-B3476D5BAA51_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E7C92BE.30104_at_idi.ntnu.no" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-23 10:48:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17412.php">Waclaw Kusnierczyk: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17410.php">Waclaw Kusnierczyk: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>In reply to:</strong> <a href="17410.php">Waclaw Kusnierczyk: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17412.php">Waclaw Kusnierczyk: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17412.php">Waclaw Kusnierczyk: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 23, 2011, at 10:07 AM, Waclaw Kusnierczyk wrote:
<br>
<p><span class="quotelev1">&gt; it's not unusual to use double-hyphen ('--') to separate options
</span><br>
<span class="quotelev1">&gt; intended for the wrapper from the options intended for the wrapped.  so
</span><br>
<span class="quotelev1">&gt; you could have
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    wrapper --foo -- --foo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with the first --foo interpreted by the wrapper and the other one passed
</span><br>
<span class="quotelev1">&gt; down to whatever the downstream program is.
</span><br>
<p>Yes, we considered this approach.
<br>
<p>However, we ultimately discarded it when someone showed a real-world code that used *multiple* wrapper compilers (i.e., one wrapper compiler invoked another, which, in turn, invoked another, and then finally invoked the real/underlying compiler).  Who gets the tokens before &quot;--&quot;?  
<br>
<p>You could certainly have a command line like:
<br>
<p>&nbsp;&nbsp;&nbsp;wrapper1 --foo -- --opions-for-wrapper2 -- --options-for-wrapper3 -- foo.c -o foo
<br>
<p>But that seems exceedingly distasteful.
<br>
<p>I'm afraid I don't remember the specific application / middleware that was used in our decision point not to support &quot;--&quot;, but I should point out it was very much in line with our original philosophy: only understand --showme and pass everything else, including &quot;--&quot;, to the underlying executable (which may just happen to be another wrapper or something else that might understand &quot;--&quot;).  
<br>
<p>Given that MPI can be used with other middleware, we decided that the best approach was minimalistic and allow our flags to be extracted if needed.  Those two options seemed to cover all cases, even if they -- unfortunately -- aren't portable.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17412.php">Waclaw Kusnierczyk: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17410.php">Waclaw Kusnierczyk: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>In reply to:</strong> <a href="17410.php">Waclaw Kusnierczyk: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17412.php">Waclaw Kusnierczyk: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17412.php">Waclaw Kusnierczyk: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
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
