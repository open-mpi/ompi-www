<?
$subject_val = "[OMPI devel] Question on the members of ompi_crcp_bkmrk_pml_drain_message_ref_t and ompi_crcp_bkmrk_pml_traffic_message_ref_t";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 26 01:59:30 2010" -->
<!-- isoreceived="20100826055930" -->
<!-- sent="Wed, 25 Aug 2010 22:59:07 -0700" -->
<!-- isosent="20100826055907" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="[OMPI devel] Question on the members of ompi_crcp_bkmrk_pml_drain_message_ref_t and ompi_crcp_bkmrk_pml_traffic_message_ref_t" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E7081D5619_at_usa-mv-msg.wipro.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Question on the members of ompi_crcp_bkmrk_pml_drain_message_ref_t and ompi_crcp_bkmrk_pml_traffic_message_ref_t<br>
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Question%20on%20the%20members%20of%20ompi_crcp_bkmrk_pml_drain_message_ref_t%20and%20ompi_crcp_bkmrk_pml_traffic_message_ref_t"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-08-26 01:59:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8375.php">Sylvain Jeaugey: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>Previous message:</strong> <a href="8373.php">Ralf Wildenhues: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8381.php">Joshua Hursey: "Re: [OMPI devel] Question on the members of	ompi_crcp_bkmrk_pml_drain_message_ref_t and	ompi_crcp_bkmrk_pml_traffic_message_ref_t"</a>
<li><strong>Reply:</strong> <a href="8381.php">Joshua Hursey: "Re: [OMPI devel] Question on the members of	ompi_crcp_bkmrk_pml_drain_message_ref_t and	ompi_crcp_bkmrk_pml_traffic_message_ref_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh
<br>
<p>&nbsp;
<br>
<p>In the file ompi/mca/crcp/bkmrk/crcp_bkmrk_pml.h, I have a question on
<br>
the way few of the members of the following structures are defined:
<br>
<p>ompi_crcp_bkmrk_pml_drain_message_ref_t 
<br>
<p>ompi_crcp_bkmrk_pml_traffic_message_ref_t
<br>
<p>&nbsp;
<br>
<p>Under the definition of &quot;ompi_crcp_bkmrk_pml_drain_message_ref_t&quot;, based
<br>
on the comments following members are better declared as Boolean
<br>
variables however they are declared as integers. Is there any reason for
<br>
not using Boolean type?
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/** Is this message complete WRT PML semantics?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* true = message done on this side (send or receive)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* false = message still in process (sending or receiving)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int done;
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/** Is the message actively being worked on?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* true = Message is !done, and is in the progress cycle
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* false = Message is !done and is *not* in the progress cycle (
<br>
[send/recv]_init requests)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int active;
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/** Has this message been posted?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* true = message was posted (Send or recv)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* false = message was not yet posted.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*   Used when trying to figure out which messages the drain
<br>
protocol needs to post, and
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*   which message have already been posted for it.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int already_posted;
<br>
<p>&nbsp;
<br>
<p>I see that you have used bool type for similar members in
<br>
ompi_crcp_bkmrk_pml_message_content_ref_t.
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p>Ananda
<br>
<p>&nbsp;
<br>
<p>Ananda B Mudar, PMP
<br>
<p>Senior Technical Architect
<br>
<p>Wipro Technologies
<br>
<p><p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8374/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8375.php">Sylvain Jeaugey: "Re: [OMPI devel] delivering SIGUSR2 to an ompi process"</a>
<li><strong>Previous message:</strong> <a href="8373.php">Ralf Wildenhues: "Re: [OMPI devel] make install (libtool) failure on Solaris 10 (1.5rc5 and 1.4.3rc1)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8381.php">Joshua Hursey: "Re: [OMPI devel] Question on the members of	ompi_crcp_bkmrk_pml_drain_message_ref_t and	ompi_crcp_bkmrk_pml_traffic_message_ref_t"</a>
<li><strong>Reply:</strong> <a href="8381.php">Joshua Hursey: "Re: [OMPI devel] Question on the members of	ompi_crcp_bkmrk_pml_drain_message_ref_t and	ompi_crcp_bkmrk_pml_traffic_message_ref_t"</a>
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
