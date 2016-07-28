<?
$subject_val = "Re: [OMPI users] running &quot;openmpi&quot; with &quot;knem&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec  1 17:54:11 2012" -->
<!-- isoreceived="20121201225411" -->
<!-- sent="Sat, 01 Dec 2012 23:53:47 +0100" -->
<!-- isosent="20121201225347" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running &amp;quot;openmpi&amp;quot; with &amp;quot;knem&amp;quot;" -->
<!-- id="50BA8A7B.9040904_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+ob-UX6KLCX+VZi-_OZxN5FEDvX+SG-13swn0UVUbRFJa9FVg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] running &quot;openmpi&quot; with &quot;knem&quot;<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-01 17:53:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20841.php">shiny knight: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Previous message:</strong> <a href="20839.php">Reuti: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>In reply to:</strong> <a href="20837.php">Leta Melkamu: "[OMPI users] running &quot;openmpi&quot; with &quot;knem&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 01/12/2012 12:45, Leta Melkamu a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello there, 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have some doubts on the use of knem with openmpi, everything works fine.
</span><br>
<span class="quotelev1">&gt; However, it is a bit not clear on the usage of knem flags while
</span><br>
<span class="quotelev1">&gt; running my open-mpi program. 
</span><br>
<span class="quotelev1">&gt; Something like --mca btl_sm_knem_dma_min 4860 is enough or I have to
</span><br>
<span class="quotelev1">&gt; add more flag like --mca btl_sm_eager_limit 4276 in the same run? or
</span><br>
<span class="quotelev1">&gt; can you please suggest me a good documentation link about knem flag
</span><br>
<span class="quotelev1">&gt; usage, I have tried to look around but no good info regarding those
</span><br>
<span class="quotelev1">&gt; staff. otherwise I will end up to test each command with different
</span><br>
<span class="quotelev1">&gt; flag value for each run.
</span><br>
<p>What are you trying to do?
<br>
<p>* Use knem for direct copy through kernel for medium/large messages:
<br>
(common use case)
<br>
&quot;--mca btl_sm_use_knem 1&quot; is enough. You can &quot;cat /dev/knem&quot; before and
<br>
after a run to see that knem counters have increased, which means OMPI
<br>
successfully passed some copy requests to knem.
<br>
<p>* Use knem for short messages:
<br>
&quot;--mca btl_sm_eager_limit 4276&quot; may help. But I am not sure that's a
<br>
good idea since knem was designed for large messages.
<br>
<p>* Offload knem copies to I/OAT hardware on Intel servers. That's what
<br>
&quot;btl_sm_knem_dma_min&quot; is for. Not sure you really want to do that
<br>
either, it's not much interesting on current Intel servers.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20840/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20841.php">shiny knight: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>Previous message:</strong> <a href="20839.php">Reuti: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>In reply to:</strong> <a href="20837.php">Leta Melkamu: "[OMPI users] running &quot;openmpi&quot; with &quot;knem&quot;"</a>
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
