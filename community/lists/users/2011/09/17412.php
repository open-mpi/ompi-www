<?
$subject_val = "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 12:49:48 2011" -->
<!-- isoreceived="20110923164948" -->
<!-- sent="Fri, 23 Sep 2011 11:49:41 -0500" -->
<!-- isosent="20110923164941" -->
<!-- name="Waclaw Kusnierczyk" -->
<!-- email="waku_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi -cc=&amp;lt;compiler name&amp;gt; option" -->
<!-- id="4E7CB8A5.4050005_at_idi.ntnu.no" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2CB8DC70-B3C7-45D4-8D3E-B3476D5BAA51_at_cisco.com" -->
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
<strong>From:</strong> Waclaw Kusnierczyk (<em>waku_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-23 12:49:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17413.php">Guilherme V: "[OMPI users] Fault Tolerant with openib"</a>
<li><strong>Previous message:</strong> <a href="17411.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>In reply to:</strong> <a href="17411.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09/23/2011 09:48 AM, Jeff Squyres wrote:
<br>
<p>(...)
<br>
<p><span class="quotelev1">&gt; However, we ultimately discarded it when someone showed a real-world code that used *multiple* wrapper compilers (i.e., one wrapper compiler invoked another, which, in turn, invoked another, and then finally invoked the real/underlying compiler).  Who gets the tokens before &quot;--&quot;?  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You could certainly have a command line like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    wrapper1 --foo -- --opions-for-wrapper2 -- --options-for-wrapper3 -- foo.c -o foo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But that seems exceedingly distasteful.
</span><br>
<p>and quite likely confusing.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm afraid I don't remember the specific application / middleware that was used in our decision point not to support &quot;--&quot;, but I should point out it was very much in line with our original philosophy: only understand --showme and pass everything else, including &quot;--&quot;, to the underlying executable (which may just happen to be another wrapper or something else that might understand &quot;--&quot;).  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Given that MPI can be used with other middleware, we decided that the best approach was minimalistic and allow our flags to be extracted if needed.  Those two options seemed to cover all cases, even if they -- unfortunately -- aren't portable.
</span><br>
<p>a purposeful and justified design choice is surely better than incidents :)
<br>
<p>vQ
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17413.php">Guilherme V: "[OMPI users] Fault Tolerant with openib"</a>
<li><strong>Previous message:</strong> <a href="17411.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>In reply to:</strong> <a href="17411.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
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
