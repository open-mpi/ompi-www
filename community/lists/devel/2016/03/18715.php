<?
$subject_val = "Re: [OMPI devel] Scaling down open mpi for embedded application";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 19 05:52:30 2016" -->
<!-- isoreceived="20160319095230" -->
<!-- sent="Sat, 19 Mar 2016 18:52:28 +0900" -->
<!-- isosent="20160319095228" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Scaling down open mpi for embedded application" -->
<!-- id="CAAkFZ5tVjhgjb=2__LbYy6pc_mdawkotCc6Cx0NaE2MTr3thyA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+Lkxs+iZ_FKSWRGESGXTF--kgXCrb5sgSPZ6FdWQyJWL1TvOg_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-19 05:52:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18716.php">Ralph Castain: "Re: [OMPI devel] Scaling down open mpi for embedded application"</a>
<li><strong>Previous message:</strong> <a href="18714.php">Monika Hemnani: "[OMPI devel] Scaling down open mpi for embedded application"</a>
<li><strong>In reply to:</strong> <a href="18714.php">Monika Hemnani: "[OMPI devel] Scaling down open mpi for embedded application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18716.php">Ralph Castain: "Re: [OMPI devel] Scaling down open mpi for embedded application"</a>
<li><strong>Reply:</strong> <a href="18716.php">Ralph Castain: "Re: [OMPI devel] Scaling down open mpi for embedded application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Monika,
<br>
<p>is there ant reason why you use openmpi 1.4.5  ?
<br>
it is quite antique today, 1.10.2 is the latest stable version.
<br>
<p>strictly speaking, openmpi does not require linux, it works fine on
<br>
Solaris, bsd variants, Cygwin and other arch.
<br>
<p>the memory footprint is made of the library size, and the memory it
<br>
allocates internally
<br>
(buffers for communication for example)
<br>
at first glance, I am not sure you should start focusing on the
<br>
library size.
<br>
<p>I'd rather suggest you start with openmpi 1.10.2, and then try
<br>
configure &amp;&amp; make &amp;&amp; make install
<br>
<p>if you are stuck, then please post the details so we are able to help
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p>On Saturday, March 19, 2016, Monika Hemnani &lt;hemnanimt1_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am building a multiprocessor system with soft-core processor(Microblaze)
</span><br>
<span class="quotelev1">&gt; and operating system xilkernel(OS from xilinx). I want to scale down Open
</span><br>
<span class="quotelev1">&gt; mpi with the the functionality of mainly  sending and recieving only. Also
</span><br>
<span class="quotelev1">&gt; I want the MPI library to have a low memory footprint(in kBs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As my OS is not linux, I cannot install Open mpi. So I took all the .c and
</span><br>
<span class="quotelev1">&gt; .h files of of Open mpi 1.4.5 and started compiling it.
</span><br>
<span class="quotelev1">&gt; Then I was planning to remove the files which won't be used by me.So I
</span><br>
<span class="quotelev1">&gt; will be having only the files of desired functionality and also get lesser
</span><br>
<span class="quotelev1">&gt; memory footprint.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But when I started building the full Open mpi. I got many errors which I'm
</span><br>
<span class="quotelev1">&gt; unable to solve.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you please tell me, is my approach right?
</span><br>
<span class="quotelev1">&gt; If not, what should be my approach?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18715/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18716.php">Ralph Castain: "Re: [OMPI devel] Scaling down open mpi for embedded application"</a>
<li><strong>Previous message:</strong> <a href="18714.php">Monika Hemnani: "[OMPI devel] Scaling down open mpi for embedded application"</a>
<li><strong>In reply to:</strong> <a href="18714.php">Monika Hemnani: "[OMPI devel] Scaling down open mpi for embedded application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18716.php">Ralph Castain: "Re: [OMPI devel] Scaling down open mpi for embedded application"</a>
<li><strong>Reply:</strong> <a href="18716.php">Ralph Castain: "Re: [OMPI devel] Scaling down open mpi for embedded application"</a>
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
