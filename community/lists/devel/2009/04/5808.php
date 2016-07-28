<?
$subject_val = "[OMPI devel] A Couple of Questions";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 12 21:58:10 2009" -->
<!-- isoreceived="20090413015810" -->
<!-- sent="Mon, 13 Apr 2009 02:58:05 +0100" -->
<!-- isosent="20090413015805" -->
<!-- name="Timothy Hayes" -->
<!-- email="hayesti_at_[hidden]" -->
<!-- subject="[OMPI devel] A Couple of Questions" -->
<!-- id="f6ed2720904121858x5d66ce5bs89959902428daf45_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] A Couple of Questions<br>
<strong>From:</strong> Timothy Hayes (<em>hayesti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-12 21:58:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5809.php">George Bosilca: "Re: [OMPI devel] A Couple of Questions"</a>
<li><strong>Previous message:</strong> <a href="5807.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5809.php">George Bosilca: "Re: [OMPI devel] A Couple of Questions"</a>
<li><strong>Reply:</strong> <a href="5809.php">George Bosilca: "Re: [OMPI devel] A Couple of Questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was wondering if someone might be able to shed some light on a couple of
<br>
questions I have.
<br>
<p>When you receive a fragment/base_descriptor in a BTL module, is the raw data
<br>
allowed to be fragmented when you invoke the callback function? By that I
<br>
mean, I'm using a circular buffer in each endpoint so sometimes data loops
<br>
back around. Currently I'm doing a two step copy: from my socket to the
<br>
circular buffer and then from the circular buffer to the fragment. This
<br>
actually effects my total throughput quite a bit, it would be much nicer to
<br>
just point to the buffer instead. When I tried using two base_segments to
<br>
point to the start and end of buffer I got some pretty strange errors. I'm
<br>
just wondering if someone could confirm or deny that you can or can't do
<br>
this, maybe those errors were down to human error instead.
<br>
<p>My other question is about the BTL failover system. Would someone be able to
<br>
briefly explain how it works or maybe point me to some docs? I'm actually
<br>
expecting the file descriptors in my module to fail a certain point during
<br>
an Open MPI job and I'd like my BTL module to fail gracefully and allow the
<br>
TCP module to take over in its place. I'm not sure how to explicitly make
<br>
the the BTL module say to the rest of Open MPI &quot;don't use my anymore&quot;
<br>
though.
<br>
<p>Happy Easter
<br>
Tim
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5808/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5809.php">George Bosilca: "Re: [OMPI devel] A Couple of Questions"</a>
<li><strong>Previous message:</strong> <a href="5807.php">Lenny Verkhovsky: "Re: [OMPI devel] trac 1857: SM btl hangs when msg &gt;=4k, Performance 	degradation ???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5809.php">George Bosilca: "Re: [OMPI devel] A Couple of Questions"</a>
<li><strong>Reply:</strong> <a href="5809.php">George Bosilca: "Re: [OMPI devel] A Couple of Questions"</a>
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
