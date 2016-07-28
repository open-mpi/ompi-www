<?
$subject_val = "Re: [OMPI devel] trunk hangs since r19010";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 18:01:46 2008" -->
<!-- isoreceived="20080728220146" -->
<!-- sent="Mon, 28 Jul 2008 17:01:41 -0500" -->
<!-- isosent="20080728220141" -->
<!-- name="Brad Benton" -->
<!-- email="bradford.benton_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk hangs since r19010" -->
<!-- id="44079e5f0807281501k135c4e16k8ceb4d9258066692_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="488DFD23.1090701_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk hangs since r19010<br>
<strong>From:</strong> Brad Benton (<em>bradford.benton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 18:01:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4477.php">Jeff Squyres: "[OMPI devel] MCA_BTL_BASE_VERSION_1_0_1 and MCA_BTL_BASE_VERSION_1_0_0"</a>
<li><strong>Previous message:</strong> <a href="4475.php">Jeff Squyres: "[OMPI devel] parallel debugger attach"</a>
<li><strong>In reply to:</strong> <a href="4473.php">Terry Dontje: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4471.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jul 28, 2008 at 12:08 PM, Terry Dontje &lt;Terry.Dontje_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 28, 2008, at 12:03 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Interesting. The self is only used for local communications. I don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expect that any benchmark execute such communications, but apparently I was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrong. Please let me know the failing test, I will take a look this evening.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, my manual tests of a simplistic &quot;ring&quot; program work for all
</span><br>
<span class="quotelev2">&gt;&gt; combinations (openib, openib+self, openib+self+sm).  Shrug.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But for OSU latency, I found that openib, openib+sm work, but
</span><br>
<span class="quotelev2">&gt;&gt; openib+sm+self hangs (same results whether the 2 procs are on the same node
</span><br>
<span class="quotelev2">&gt;&gt; or different nodes).  There is no self communication in osu_latency, so
</span><br>
<span class="quotelev2">&gt;&gt; something else must be going on.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Is it something to do with the MPI_Barrier call?  osu_latency uses
</span><br>
<span class="quotelev1">&gt; MPI_Barrier and from rhc's email it sounds like his code does too.
</span><br>
<p><p>I don't think it's an issue with MPI_Barrier().  I'm running into this
<br>
problem with srtest.c (one of the example programs from the mpich
<br>
distribution).  It's a ring-type test with no barriers until the end, yet it
<br>
hangs on the very first Send/Recv pair from rank0 to rank1.
<br>
<p>I my case, openib and openib+sm works, but openib+self &amp; openib+sm+self
<br>
hang.
<br>
<p>--brad
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4476/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4477.php">Jeff Squyres: "[OMPI devel] MCA_BTL_BASE_VERSION_1_0_1 and MCA_BTL_BASE_VERSION_1_0_0"</a>
<li><strong>Previous message:</strong> <a href="4475.php">Jeff Squyres: "[OMPI devel] parallel debugger attach"</a>
<li><strong>In reply to:</strong> <a href="4473.php">Terry Dontje: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4471.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
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
