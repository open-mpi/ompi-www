<?
$subject_val = "Re: [OMPI devel] RML Send";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 14:25:38 2008" -->
<!-- isoreceived="20080617182538" -->
<!-- sent="Tue, 17 Jun 2008 12:25:30 -0600" -->
<!-- isosent="20080617182530" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RML Send" -->
<!-- id="C47D5DBA.DE11%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4857FDB2.1010702_at_aomail.uab.es" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RML Send<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-17 14:25:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4145.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.7rc1 has been posted"</a>
<li><strong>Previous message:</strong> <a href="4143.php">Leonardo Fialho: "[OMPI devel] RML Send"</a>
<li><strong>In reply to:</strong> <a href="4143.php">Leonardo Fialho: "[OMPI devel] RML Send"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4146.php">Leonardo Fialho: "Re: [OMPI devel] RML Send"</a>
<li><strong>Reply:</strong> <a href="4146.php">Leonardo Fialho: "Re: [OMPI devel] RML Send"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure exactly how you are trying to do this, but the usual procedure
<br>
would be:
<br>
<p>1. call opal_dss.pack(*buffer, *data, #data, data_type) for each thing you
<br>
want to put in the buffer. So you might call this to pack a string:
<br>
<p>opal_dss.pack(*buffer, &amp;string, 1, OPAL_STRING);
<br>
<p>2. once you have everything packed into the buffer, you send the buffer with
<br>
<p>orte_rml.send_buffer(*dest, *buffer, dest_tag, 0);
<br>
<p>What you will need is a tag that the daemon is listening on that won't
<br>
interfere with its normal operations - i.e., what you send won't get held
<br>
forever waiting to get serviced, and your servicing won't block us from
<br>
responding to a ctrl-c. You can probably use ORTE_RML_TAG_DAEMON, but you
<br>
need to ensure you don't block anything.
<br>
<p>BTW: how is the app figuring out the name of the remote daemon? The proc
<br>
will have access to the daemon's vpid (assuming it knows the nodename where
<br>
the daemon is running) in the ESS, but not the jobid - I assume you are
<br>
using some method to compute the daemon jobid from the apps?
<br>
<p><p>On 6/17/08 12:08 PM, &quot;Leonardo Fialho&quot; &lt;lfialho_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I&#180;m using RML to send log messages from a PML to a ORTE daemon (located
</span><br>
<span class="quotelev1">&gt; in another node). I got success sending the message header, but now I
</span><br>
<span class="quotelev1">&gt; need to send the message data (buffer). How can I do it? The problem is
</span><br>
<span class="quotelev1">&gt; what data type I need to use for packing/unpacking? I tried
</span><br>
<span class="quotelev1">&gt; OPAL_DATA_VALUE but don&#180;t get success...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4145.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.7rc1 has been posted"</a>
<li><strong>Previous message:</strong> <a href="4143.php">Leonardo Fialho: "[OMPI devel] RML Send"</a>
<li><strong>In reply to:</strong> <a href="4143.php">Leonardo Fialho: "[OMPI devel] RML Send"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4146.php">Leonardo Fialho: "Re: [OMPI devel] RML Send"</a>
<li><strong>Reply:</strong> <a href="4146.php">Leonardo Fialho: "Re: [OMPI devel] RML Send"</a>
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
