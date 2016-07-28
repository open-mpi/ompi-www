<?
$subject_val = "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 19:52:47 2014" -->
<!-- isoreceived="20140715235247" -->
<!-- sent="Tue, 15 Jul 2014 19:52:47 -0400" -->
<!-- isosent="20140715235247" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal" -->
<!-- id="CAG4F6z84bJzHZf3GDEVY0xKTZHL-M02vPxRPc6GtVQNbdvkCPA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA14DTbaCRzFwp54LHbCczzswqVXErgQEsW1dAwWWG2OmoQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-15 19:52:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15156.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15154.php">Ralph Castain: "Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<li><strong>In reply to:</strong> <a href="15153.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15156.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15156.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
According to <a href="http://gcc.gnu.org/onlinedocs/gcc/Function-Attributes.html">http://gcc.gnu.org/onlinedocs/gcc/Function-Attributes.html</a>
<br>
<p>*&quot;constructor *
<br>
* destructor *
<br>
* constructor (*priority*)** destructor (priority)**The constructor
<br>
attribute causes the function to be called automatically before execution
<br>
enters main (). Similarly, the destructor attribute causes the function to
<br>
be called automatically after main () completes or exit () is called.
<br>
Functions with these attributes are useful for initializing data that is
<br>
used implicitly during the execution of the program. *
<br>
<p>*You may provide an optional integer priority to control the order in which
<br>
constructor and destructor functions are run. A constructor with a smaller
<br>
priority number runs before a constructor with a larger priority number;
<br>
the opposite relationship holds for destructors. So, if you have a
<br>
constructor that allocates a resource and a destructor that deallocates the
<br>
same resource, both functions typically have the same priority. The
<br>
priorities for constructor and destructor functions are the same as those
<br>
specified for namespace-scope C++ objects (see C++ Attributes
<br>
&lt;<a href="http://gcc.gnu.org/onlinedocs/gcc/C_002b_002b-Attributes.html#C_002b_002b-Attributes">http://gcc.gnu.org/onlinedocs/gcc/C_002b_002b-Attributes.html#C_002b_002b-Attributes</a>&gt;).
<br>
*
<br>
<p>*These attributes are not currently implemented for Objective-C.&quot;*
<br>
<p><p><p>On Tue, Jul 15, 2014 at 5:20 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 15, 2014 at 12:49 PM, Pritchard, Howard r &lt;howardp_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't think there's anything wrong with using ctor/dtors in shared
</span><br>
<span class="quotelev2">&gt;&gt; libraries,
</span><br>
<span class="quotelev2">&gt;&gt; but one does need to make sure that in these functions there's no
</span><br>
<span class="quotelev2">&gt;&gt; assumptions
</span><br>
<span class="quotelev2">&gt;&gt; about ordering of them wrt to other ctors/dtors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ELF specification is clear that the order of execution of DT_INIT and
</span><br>
<span class="quotelev1">&gt; DT_FINI entries is undefined.
</span><br>
<span class="quotelev1">&gt; The .ctors and .dtors sections typically used by the GNU toolchain are, I
</span><br>
<span class="quotelev1">&gt; believe, not part of any formal linker specification.
</span><br>
<span class="quotelev1">&gt; So, I agree w/ Howard that one must take care not to assume anything about
</span><br>
<span class="quotelev1">&gt; order.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15153.php">http://www.open-mpi.org/community/lists/devel/2014/07/15153.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15155/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15156.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15154.php">Ralph Castain: "Re: [OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<li><strong>In reply to:</strong> <a href="15153.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15156.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15156.php">Paul Hargrove: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
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
