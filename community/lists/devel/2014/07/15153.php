<?
$subject_val = "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 17:20:58 2014" -->
<!-- isoreceived="20140715212058" -->
<!-- sent="Tue, 15 Jul 2014 14:20:56 -0700" -->
<!-- isosent="20140715212056" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal" -->
<!-- id="CAAvDA14DTbaCRzFwp54LHbCczzswqVXErgQEsW1dAwWWG2OmoQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5F6FB0CDAF4F98419A0D970E1F65ED05AB3663_at_ECS-EXG-P-MB05.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-15 17:20:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15154.php">Ralph Castain: "Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15152.php">Pritchard, Howard r: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15152.php">Pritchard, Howard r: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15155.php">Joshua Ladd: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15155.php">Joshua Ladd: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 15, 2014 at 12:49 PM, Pritchard, Howard r &lt;howardp_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I don't think there's anything wrong with using ctor/dtors in shared
</span><br>
<span class="quotelev1">&gt; libraries,
</span><br>
<span class="quotelev1">&gt; but one does need to make sure that in these functions there's no
</span><br>
<span class="quotelev1">&gt; assumptions
</span><br>
<span class="quotelev1">&gt; about ordering of them wrt to other ctors/dtors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The ELF specification is clear that the order of execution of DT_INIT and
<br>
DT_FINI entries is undefined.
<br>
The .ctors and .dtors sections typically used by the GNU toolchain are, I
<br>
believe, not part of any formal linker specification.
<br>
So, I agree w/ Howard that one must take care not to assume anything about
<br>
order.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15153/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15154.php">Ralph Castain: "Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15152.php">Pritchard, Howard r: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15152.php">Pritchard, Howard r: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15155.php">Joshua Ladd: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15155.php">Joshua Ladd: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
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
