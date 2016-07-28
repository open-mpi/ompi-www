<?
$subject_val = "Re: [OMPI users] IB question (slightly off topic)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 12 01:35:42 2016" -->
<!-- isoreceived="20160312063542" -->
<!-- sent="Sat, 12 Mar 2016 15:35:41 +0900" -->
<!-- isosent="20160312063541" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] IB question (slightly off topic)" -->
<!-- id="CAAkFZ5uD1gTdMRTzEMeU-TBhjsWUhswniC2-rriANgjqaTFNWQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHXxYDi=s-0ASiYRVqT69dYeP9Bueo6SMR7+zF88OK7u+g_fww_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] IB question (slightly off topic)<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-12 01:35:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28692.php">Gilles Gouaillardet: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<li><strong>Previous message:</strong> <a href="28690.php">dpchoudh .: "[OMPI users] IB question (slightly off topic)"</a>
<li><strong>In reply to:</strong> <a href="28690.php">dpchoudh .: "[OMPI users] IB question (slightly off topic)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In my understanding, the standard is mainly for the hardware and misc stuff
<br>
only.
<br>
For example, mellanox and qlogic infiniband can use the same cables and
<br>
switches.
<br>
Iirc, they can use the same subnet manager and communicate via IPoIB.
<br>
<p>When performance matters, mellanox use ib verbs, and qlogic uses PSM
<br>
library.
<br>
I am not sure what you mean by &quot;ompi prefers PSM over other IB&quot;
<br>
assuming qlogic can work with IB verbs, then yes, PSM is faster for qlogic,
<br>
so ompi will prefer PSM.
<br>
Mellanox infiniband cannot use PSM so ompi use IB verbs.
<br>
Note mellanox also provides optimized proprietary libraries (hcoll, mxm,
<br>
...) that can be used for enhanced performances.
<br>
<p>Fwiw and iirc, Intel bought the infiniband assets from Qlogic a few years
<br>
ago.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, March 12, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a question, that I do realize, is somewhat off topic to this list.
</span><br>
<span class="quotelev1">&gt; But I do not know who to approach for an answer. Hopefully the community
</span><br>
<span class="quotelev1">&gt; here will help me out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know that Infiniband is a 'standard' interface (standardized by IETF?
</span><br>
<span class="quotelev1">&gt; IEEE? or some similar body), much like Ethernet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I do see that they come in different 'flavors', (and have
</span><br>
<span class="quotelev1">&gt; different feature set?) such as Qlogic PSM or Mellanox ConnectX, that have
</span><br>
<span class="quotelev1">&gt; *user space* &quot;drivers&quot; and even OpenMPI treats them differently (preferring
</span><br>
<span class="quotelev1">&gt; Qlogic PSM over other IB, as a default behavior).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For someone very new to the Infiniband world, what are the differences?
</span><br>
<span class="quotelev1">&gt; How can they be different and yet confirm to the (supposed) standard?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any pointer to appropriate literature is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28691/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28692.php">Gilles Gouaillardet: "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<li><strong>Previous message:</strong> <a href="28690.php">dpchoudh .: "[OMPI users] IB question (slightly off topic)"</a>
<li><strong>In reply to:</strong> <a href="28690.php">dpchoudh .: "[OMPI users] IB question (slightly off topic)"</a>
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
