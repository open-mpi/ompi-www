<?
$subject_val = "Re: [OMPI devel] RFC: optimize probe in ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 19 07:36:11 2014" -->
<!-- isoreceived="20140219123611" -->
<!-- sent="Wed, 19 Feb 2014 13:36:07 +0100" -->
<!-- isosent="20140219123607" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: optimize probe in ob1" -->
<!-- id="2D12C9D6-746A-4B6B-B527-A622382157CF_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20140218235601.GS89915_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: optimize probe in ob1<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-19 07:36:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14184.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Previous message:</strong> <a href="14182.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>In reply to:</strong> <a href="14182.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14184.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Reply:</strong> <a href="14184.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>Sorry, I&#146;m moving and will not have the time to thoughtfully review your patch before March. I quickly glanced over and things look OK, but I had no time to validate/test it.
<br>
<p>There is one minor thing I would suggest to change. In your patch in_unexpected_list is defined as a bool, which translates to an int on most platforms. You can change it to an uint8_t and move the in_unexpected_list field in the mca_pml_ob1_comm_proc_t to allow the compiler to pack it with the expected_sequence. The final structure should look like this:
<br>
<p>struct mca_pml_ob1_comm_proc_t {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_list_item_t super;        /**&lt; allow this proc to be kept in a list */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;uint16_t expected_sequence;    /**&lt; send message sequence number - receiver side */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;uint8_t  in_unexpected_list;   /**&lt; the proc has pending unexpected messages */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct ompi_proc_t* ompi_proc;
<br>
#if OPAL_ENABLE_MULTI_THREADS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;volatile int32_t send_sequence; /**&lt; send side sequence number */
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int32_t send_sequence; /**&lt; send side sequence number */
<br>
#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_list_t frags_cant_match;  /**&lt; out-of-order fragment queues */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_list_t specific_receives; /**&lt; queues of unmatched specific receives */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_list_t unexpected_frags;  /**&lt; unexpected fragment queues */
<br>
};
<br>
<p>This will reduce the size of the mca_pml_ob1_comm_proc_t structure by 4 bytes. This structure is used to store information about each processor for each communicator, so the gain might be substantial at scale. Overall not a big win compared with the fact that you changed the super from an opal_object_t to an opal_list_item_t (doubling the amount of memory requested). But still better than nothing&#133;
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;George.
<br>
<p><p><p>On Feb 19, 2014, at 00:56 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote: 
<br>
<p><span class="quotelev1">&gt; On Tue, Feb 11, 2014 at 01:43:37AM +0100, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The class is only usable in the context of a single .c file. As a code protection it makes perfect sense to me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, yes. So it is. Fixed in the latest patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It&#146;s not yet, and I did not notice an RFC about. The event I was referring to is only generated when the message is first noticed. In the particular instance affected by your patch it has been delayed until the communicator is created locally, but it still have to be generated once. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is the message is not generated once but twice with
</span><br>
<span class="quotelev1">&gt; add_fragment_to_unexpected where it is. One message is generated when
</span><br>
<span class="quotelev1">&gt; an out of order packet is processed by the outer loop (it is put into
</span><br>
<span class="quotelev1">&gt; the out of order list) then another time when it is processed by the
</span><br>
<span class="quotelev1">&gt; inter loop jumping to the add_fragment_to_unexpected. This has no affect
</span><br>
<span class="quotelev1">&gt; on the iprobe optimization so I have dropped it from my proposed patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The size check and the removal from the list is still in the critical path. At some point we were down to few hundreds of nano-sec, enough to get bugged by one extra memory reference.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I modified the patch to only remove procs from the unexpected_procs list
</span><br>
<span class="quotelev1">&gt; when matching wildcard receive requests. This way there are no extra
</span><br>
<span class="quotelev1">&gt; instructions in the critical path. It will make probe a little slower
</span><br>
<span class="quotelev1">&gt; than the previous patch but that is ok. I see no degredation with simple
</span><br>
<span class="quotelev1">&gt; pt2pt benchmarks with vader. Please take a look and let me know what you
</span><br>
<span class="quotelev1">&gt; think.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; &lt;iprobe_patch_v2.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14184.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Previous message:</strong> <a href="14182.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>In reply to:</strong> <a href="14182.php">Nathan Hjelm: "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14184.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>Reply:</strong> <a href="14184.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: optimize probe in ob1"</a>
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
