<?
$subject_val = "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 17 22:56:43 2014" -->
<!-- isoreceived="20140718025643" -->
<!-- sent="Thu, 17 Jul 2014 19:55:47 -0700" -->
<!-- isosent="20140718025547" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal" -->
<!-- id="51396904-9E76-40E9-956A-E8B211A816C0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkV0TFzZ0fW6fCReQjxWEOV0ncRF8b+fNQNBcGB0fNRRmA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-17 22:55:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15195.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15193.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15193.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15195.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15195.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15199.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As I said, I don't know which solution is the one to follow - they both have significant &quot;ick&quot; factors, though I wouldn't go so far as to characterize either of them as &quot;horrible&quot;. Not being &quot;clean&quot; after calling MPI_Finalize seems just as strange.
<br>
<p>Nathan and I did discuss the init-after-finalize issue, and he intends to raise it with the Forum as it doesn't seem a logical thing to do. So that issue may go away. Still leaves us pondering the right solution, and hopefully coming up with something better than either of the ones we have so far.
<br>
<p><p>On Jul 17, 2014, at 7:48 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I think Case #1 is only a partial solution, as it only solves the example attached to the ticket. Based on my reading the the tool chapter calling MPI_T_init after MPI_Finalize is legit, and this case is not covered by the patch. But this is not the major issue I have with this patch. From a coding perspective, it makes the initialization of OPAL horribly unnatural, requiring any other layer using OPAL to make a horrible gymnastic just to tear it down correctly (setting opal_init_util_init_extra to the right value).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 16, 2014 at 11:29 AM, Pritchard, Howard r &lt;howardp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; HI Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I vote for solution #1.  Doesn't change current behavior.  Doesn't open the door to becoming dependent on availability of
</span><br>
<span class="quotelev1">&gt; ctor/dtor feature in future toolchains.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, July 16, 2014 9:08 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 16, 2014 at 07:59:14AM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I discussed this over IM with Nathan to try and get a better understanding of the options. Basically, we have two approaches available to us:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. my solution resolves the segv problem and eliminates leaks so long as the user calls MPI_Init/Finalize after calling the MPI_T init/finalize functions. This method will still leak memory if the user doesn't use MPI after calling the MPI_T functions, but does mean that all memory used by MPI will be released upon MPI_Finalize. So if the user program continues beyond MPI, they won't be carrying the MPI memory footprint with them. This continues our current behavior.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. the destructor method, which release the MPI memory footprint upon final program termination instead of at MPI_Finalize. This also solves the segv and leak problems, and ensures that someone calling only the MPI_T init/finalize functions will be valgrind-clean, but means that a user program that runs beyond MPI will carry the MPI memory footprint with them. This is a change in our current behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Correct. Though the only thing we will carry around until termination is the memory associated with opal/mca/if, opal/mca/event, opal_net, opal_malloc, opal_show_help, opal_output, opal_dss, opal_datatype, and opal_class. Not sure how much memory this is.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15172.php">http://www.open-mpi.org/community/lists/devel/2014/07/15172.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15193.php">http://www.open-mpi.org/community/lists/devel/2014/07/15193.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15194/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15195.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Previous message:</strong> <a href="15193.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>In reply to:</strong> <a href="15193.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15195.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15195.php">Ralph Castain: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
<li><strong>Reply:</strong> <a href="15199.php">George Bosilca: "Re: [OMPI devel] RFC: Add an __attribute__((destructor)) function to opal"</a>
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
