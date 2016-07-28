<?
$subject_val = "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 18 19:59:19 2016" -->
<!-- isoreceived="20160518235919" -->
<!-- sent="Thu, 19 May 2016 08:59:15 +0900" -->
<!-- isosent="20160518235915" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?" -->
<!-- id="31c746a8-7675-5104-556a-eb332cbcb008_at_rist.or.jp" -->
<!-- charset="utf-8" -->
<!-- inreplyto="39BF333B-63B8-48AD-AE31-7981683698BD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-18 19:59:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29238.php">dani: "Re: [OMPI users] Building vs packaging"</a>
<li><strong>Previous message:</strong> <a href="29236.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<li><strong>In reply to:</strong> <a href="29236.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29311.php">Ryan Novosielski: "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On top of that, and iirc, there used to be a bug in Open MPI that raised 
<br>
some false warnings about how much memory can be registered.
<br>
<p>OpenMPI 1.6.5 is antic now, so once you have updated your system 
<br>
settings (see the faq, and ensure ulimit -l is unlimited on all your 
<br>
nodes) and if still does not work, i suggest you try the latest Open MPI 
<br>
(1.10.2) and see how things go.
<br>
<p>(and fwiw, i recommend you use Open MPI 1.10.2 even if 1.6.5 is working ...)
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p><p>On 5/19/2016 7:59 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On May 18, 2016, at 6:16 PM, Ryan Novosielski &lt;novosirj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;m pretty sure this is no longer relevant (having read Roland&#226;&#128;&#153;s messages about it from a couple of years ago now). Can you please confirm that for me, and then let me know if there is any way that I can silence this old copy of OpenMPI that I need to use with some software that depends on it for some reason? It is causing my users to report it as an issue pretty regularly.
</span><br>
<span class="quotelev1">&gt; The message cites that only 32MB is able to be registered out of a total of 128MB.  That seems low to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you look at the FAQ item and see if there are system limits that you should increase?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29238.php">dani: "Re: [OMPI users] Building vs packaging"</a>
<li><strong>Previous message:</strong> <a href="29236.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<li><strong>In reply to:</strong> <a href="29236.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29311.php">Ryan Novosielski: "Re: [OMPI users] OpenMPI 1.6.5 on CentOS 7.1, silence ib-locked-pages?"</a>
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
