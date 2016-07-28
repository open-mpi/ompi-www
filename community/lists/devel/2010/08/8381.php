<?
$subject_val = "Re: [OMPI devel] Question on the members of	ompi_crcp_bkmrk_pml_drain_message_ref_t and	ompi_crcp_bkmrk_pml_traffic_message_ref_t";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 09:23:54 2010" -->
<!-- isoreceived="20100826132354" -->
<!-- sent="Thu, 26 Aug 2010 09:23:47 -0400" -->
<!-- isosent="20100826132347" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Question on the members of	ompi_crcp_bkmrk_pml_drain_message_ref_t and	ompi_crcp_bkmrk_pml_traffic_message_ref_t" -->
<!-- id="19F53FF9-D360-420F-B8C3-FA8295852ED8_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1E3BF6B8D1243842A175F7C7069EB0E7081D5619_at_usa-mv-msg.wipro.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Question on the members of	ompi_crcp_bkmrk_pml_drain_message_ref_t and	ompi_crcp_bkmrk_pml_traffic_message_ref_t<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-26 09:23:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8382.php">Scott Atchley: "[OMPI devel] 1/4/3rc1 over MX"</a>
<li><strong>Previous message:</strong> <a href="8380.php">Rolf vandeVaart: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8374.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question on the members of ompi_crcp_bkmrk_pml_drain_message_ref_t and ompi_crcp_bkmrk_pml_traffic_message_ref_t"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ananda,
<br>
<p>So I think the comments are just misleading/wrong here. So messages are grouped by signature/envelope of the message. The ompi_crcp_bkmrk_pml_drain_message_ref_t and ompi_crcp_bkmrk_pml_traffic_message_ref_t data structures describe the envelope and each have a list of 'msg_contents' that point to the unique information for each message (e.g., buffer, request, status) of the type ompi_crcp_bkmrk_pml_message_content_ref_t.
<br>
<p>So the 'drain_message' and 'traffic_message' datatypes use the various integers to count the number of done/active/posted 'message_content' datatypes stored in the list that they are responsible for. The internals of crcp_bkmrk_pml.c use these counter values to quickly look up what needs to be drained or waited on instead of iterating through the list of all messages every time.
<br>
<p>This was a technique to reduce both the memory footprint of the implementation and improve performance slightly. It looks like the comments were not updated to match the change. Sorry about that. I'll file a ticket to update those comments in the trunk and branches so I don't forget.
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2550">https://svn.open-mpi.org/trac/ompi/ticket/2550</a>
<br>
<p>I hope that helps a bit.
<br>
<p>Best,
<br>
Josh
<br>
<p>On Aug 26, 2010, at 1:59 AM, &lt;ananda.mudar_at_[hidden]&gt; &lt;ananda.mudar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In the file ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.h, I have a question on the way few of the members of the following structures are defined:
</span><br>
<span class="quotelev1">&gt; ompi_crcp_bkmrk_pml_drain_message_ref_t
</span><br>
<span class="quotelev1">&gt; ompi_crcp_bkmrk_pml_traffic_message_ref_t
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Under the definition of &#147;ompi_crcp_bkmrk_pml_drain_message_ref_t&#148;, based on the comments following members are better declared as Boolean variables however they are declared as integers. Is there any reason for not using Boolean type?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;         /** Is this message complete WRT PML semantics?
</span><br>
<span class="quotelev1">&gt;          * true = message done on this side (send or receive)
</span><br>
<span class="quotelev1">&gt;          * false = message still in process (sending or receiving)
</span><br>
<span class="quotelev1">&gt;          */
</span><br>
<span class="quotelev1">&gt;         int done;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;         /** Is the message actively being worked on?
</span><br>
<span class="quotelev1">&gt;          * true = Message is !done, and is in the progress cycle
</span><br>
<span class="quotelev1">&gt;          * false = Message is !done and is *not* in the progress cycle ( [send/recv]_init requests)
</span><br>
<span class="quotelev1">&gt;          */
</span><br>
<span class="quotelev1">&gt;         int active;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;         /** Has this message been posted?
</span><br>
<span class="quotelev1">&gt;          * true = message was posted (Send or recv)
</span><br>
<span class="quotelev1">&gt;          * false = message was not yet posted.
</span><br>
<span class="quotelev1">&gt;          *   Used when trying to figure out which messages the drain protocol needs to post, and
</span><br>
<span class="quotelev1">&gt;          *   which message have already been posted for it.
</span><br>
<span class="quotelev1">&gt;          */
</span><br>
<span class="quotelev1">&gt;         int already_posted;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I see that you have used bool type for similar members in ompi_crcp_bkmrk_pml_message_content_ref_t.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ananda
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ananda B Mudar, PMP
</span><br>
<span class="quotelev1">&gt; Senior Technical Architect
</span><br>
<span class="quotelev1">&gt; Wipro Technologies
</span><br>
<span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; www.wipro.com
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;ATT00001..txt&gt;
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://www.cs.indiana.edu/~jjhursey">http://www.cs.indiana.edu/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8382.php">Scott Atchley: "[OMPI devel] 1/4/3rc1 over MX"</a>
<li><strong>Previous message:</strong> <a href="8380.php">Rolf vandeVaart: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8374.php">ananda.mudar_at_[hidden]: "[OMPI devel] Question on the members of ompi_crcp_bkmrk_pml_drain_message_ref_t and ompi_crcp_bkmrk_pml_traffic_message_ref_t"</a>
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
