<?
$subject_val = "Re: [OMPI users] timing + /usr/bin/time";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 14 04:34:49 2008" -->
<!-- isoreceived="20081114093449" -->
<!-- sent="Fri, 14 Nov 2008 18:34:43 +0900" -->
<!-- isosent="20081114093443" -->
<!-- name="Raymond Wan" -->
<!-- email="rwan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] timing + /usr/bin/time" -->
<!-- id="491D4633.6040301_at_kuicr.kyoto-u.ac.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5637D364-943B-46B2-96B6-E6DB6A6E0E64_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] timing + /usr/bin/time<br>
<strong>From:</strong> Raymond Wan (<em>rwan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-14 04:34:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7311.php">Sun, Yongqi (E F ES EN 72): "[OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Previous message:</strong> <a href="7309.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>In reply to:</strong> <a href="7296.php">Reuti: "Re: [OMPI users] timing + /usr/bin/time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7309.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Reuti,
<br>
<p>I have to admit that I'm so familiar with SGE, but I'll take a look at 
<br>
it so that I'll learn something.  In my current situation, I don't 
<br>
/need/ to report a user time.  I was just wondering if it has any 
<br>
meaning and what people mean when they show numbers or a graph and just 
<br>
says &quot;time&quot;.
<br>
<p>But thank you for pointing this out!
<br>
<p>Ray
<br>
<p><p><p>Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi Ray,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with the Tight Integration of Open MPI into SGE 
</span><br>
<span class="quotelev1">&gt; (<a href="http://gridengine.sunsource.net/">http://gridengine.sunsource.net/</a>) you will get a correct accouting. 
</span><br>
<span class="quotelev1">&gt; Every process created with qrsh (a replacement for ssh) will have an 
</span><br>
<span class="quotelev1">&gt; additional group id attached and SGE will accumulate them all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Depending on the size of the cluster, you might want to look into a 
</span><br>
<span class="quotelev1">&gt; batch queuing system. In fact: we use it even local on some machines 
</span><br>
<span class="quotelev1">&gt; to serialize the workflow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7311.php">Sun, Yongqi (E F ES EN 72): "[OMPI users] avoid usage of ssh on local machine"</a>
<li><strong>Previous message:</strong> <a href="7309.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
<li><strong>In reply to:</strong> <a href="7296.php">Reuti: "Re: [OMPI users] timing + /usr/bin/time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7309.php">Raymond Wan: "Re: [OMPI users] timing + /usr/bin/time"</a>
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
