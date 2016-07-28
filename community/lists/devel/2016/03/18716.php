<?
$subject_val = "Re: [OMPI devel] Scaling down open mpi for embedded application";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 19 10:48:49 2016" -->
<!-- isoreceived="20160319144849" -->
<!-- sent="Sat, 19 Mar 2016 07:48:45 -0700" -->
<!-- isosent="20160319144845" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Scaling down open mpi for embedded application" -->
<!-- id="384CE366-382A-4410-853C-7740BBB36E50_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5tVjhgjb=2__LbYy6pc_mdawkotCc6Cx0NaE2MTr3thyA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Scaling down open mpi for embedded application<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-19 10:48:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18717.php">Jeff Squyres (jsquyres): "[OMPI devel] Github updates to PRs"</a>
<li><strong>Previous message:</strong> <a href="18715.php">Gilles Gouaillardet: "Re: [OMPI devel] Scaling down open mpi for embedded application"</a>
<li><strong>In reply to:</strong> <a href="18715.php">Gilles Gouaillardet: "Re: [OMPI devel] Scaling down open mpi for embedded application"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There have been a couple of folks who did this before (one for a set-top cable TV box, another for a small satellite), and some folks run OMPI on small RaspberryPi &#226;&#128;&#156;clusters&#226;&#128;&#157;, so it is indeed doable. I would suggest going with a newer version as Gilles said, just so you start with something we can help you with (we don&#226;&#128;&#153;t support something as old as 1.4.5).
<br>
<p>You can safely remove nearly all the components before building. There are a few frameworks that need to have at least one component - I&#226;&#128;&#153;m afraid we don&#226;&#128;&#153;t keep a list, so it may take a bit of experimenting to find the minimum set. If you want, you can drop a &#226;&#128;&#156;.opal_ignore&#226;&#128;&#157; file (can be empty) in the directory of a component you want to remove - might be an easier way to experiment. You&#226;&#128;&#153;ll need to re-run autogen.pl and configure every time you add/remove an .opal_ignore.
<br>
<p>You cannot remove entire frameworks without editing the rest of the code, so I wouldn&#226;&#128;&#153;t start there.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Mar 19, 2016, at 2:52 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Monika,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is there ant reason why you use openmpi 1.4.5  ?
</span><br>
<span class="quotelev1">&gt; it is quite antique today, 1.10.2 is the latest stable version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; strictly speaking, openmpi does not require linux, it works fine on Solaris, bsd variants, Cygwin and other arch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the memory footprint is made of the library size, and the memory it allocates internally
</span><br>
<span class="quotelev1">&gt; (buffers for communication for example)
</span><br>
<span class="quotelev1">&gt; at first glance, I am not sure you should start focusing on the library size.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd rather suggest you start with openmpi 1.10.2, and then try
</span><br>
<span class="quotelev1">&gt; configure &amp;&amp; make &amp;&amp; make install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if you are stuck, then please post the details so we are able to help
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Saturday, March 19, 2016, Monika Hemnani &lt;hemnanimt1_at_[hidden] &lt;mailto:hemnanimt1_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I am building a multiprocessor system with soft-core processor(Microblaze) and operating system xilkernel(OS from xilinx). I want to scale down Open mpi with the the functionality of mainly  sending and recieving only. Also I want the MPI library to have a low memory footprint(in kBs). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As my OS is not linux, I cannot install Open mpi. So I took all the .c and .h files of of Open mpi 1.4.5 and started compiling it.
</span><br>
<span class="quotelev1">&gt; Then I was planning to remove the files which won't be used by me.So I will be having only the files of desired functionality and also get lesser memory footprint.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But when I started building the full Open mpi. I got many errors which I'm unable to solve.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you please tell me, is my approach right?
</span><br>
<span class="quotelev1">&gt; If not, what should be my approach?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18715.php">http://www.open-mpi.org/community/lists/devel/2016/03/18715.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18716/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18717.php">Jeff Squyres (jsquyres): "[OMPI devel] Github updates to PRs"</a>
<li><strong>Previous message:</strong> <a href="18715.php">Gilles Gouaillardet: "Re: [OMPI devel] Scaling down open mpi for embedded application"</a>
<li><strong>In reply to:</strong> <a href="18715.php">Gilles Gouaillardet: "Re: [OMPI devel] Scaling down open mpi for embedded application"</a>
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
