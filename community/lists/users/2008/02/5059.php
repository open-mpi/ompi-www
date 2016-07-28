<?
$subject_val = "Re: [OMPI users] Specifying -wdir";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 12:27:45 2008" -->
<!-- isoreceived="20080221172745" -->
<!-- sent="Thu, 21 Feb 2008 15:30:29 -0300 (ART)" -->
<!-- isosent="20080221183029" -->
<!-- name="R.C.Pasianot" -->
<!-- email="pasianot_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Specifying -wdir" -->
<!-- id="Pine.LNX.4.44.0802211521290.1959-100000_at_tdmc6.cnea.gov.ar" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f55b29c20802210823j6e95e035gbeb0d277fe43f8ca_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Specifying -wdir<br>
<strong>From:</strong> R.C.Pasianot (<em>pasianot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-21 13:30:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5060.php">Bill Wichser: "[OMPI users] ofa-default-subnet-gid"</a>
<li><strong>Previous message:</strong> <a href="5058.php">Pak Lui: "Re: [OMPI users] Openmpi with SGE"</a>
<li><strong>In reply to:</strong> <a href="5057.php">Kevin Durda: "Re: [OMPI users] Specifying -wdir"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Thanks a lot Kevin,
<br>
<p>&nbsp;It seemed to me that something like your suggestion would
<br>
&nbsp;launch two unrelated &quot;appname&quot;, ..., luckily I was wrong ;-).
<br>
&nbsp;Indeed it does what I want.
<br>
<p>&nbsp;Thanks again,
<br>
<p>&nbsp;Roberto
<br>
<p>On Thu, 21 Feb 2008, Kevin Durda wrote:
<br>
<p><span class="quotelev1">&gt; Hi Roberto,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that you can do what you want if you use an appfile with something
</span><br>
<span class="quotelev1">&gt; like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -host node1,node2,node3 -np 6 -wdir /WorkingDir/ appname
</span><br>
<span class="quotelev1">&gt; -host node4 -np 2 -wdir /DifferentWorkingDir/ appname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then run your program using &quot;mpirun --app appfilename&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kevin
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5060.php">Bill Wichser: "[OMPI users] ofa-default-subnet-gid"</a>
<li><strong>Previous message:</strong> <a href="5058.php">Pak Lui: "Re: [OMPI users] Openmpi with SGE"</a>
<li><strong>In reply to:</strong> <a href="5057.php">Kevin Durda: "Re: [OMPI users] Specifying -wdir"</a>
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
