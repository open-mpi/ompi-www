<?
$subject_val = "Re: [OMPI devel] RML Send";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 17:33:32 2008" -->
<!-- isoreceived="20080617213332" -->
<!-- sent="Tue, 17 Jun 2008 23:35:58 +0200" -->
<!-- isosent="20080617213558" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RML Send" -->
<!-- id="48582E3E.2050400_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C47D5DBA.DE11%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-17 17:35:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4147.php">Ralph Castain: "Re: [OMPI devel] RML Send"</a>
<li><strong>Previous message:</strong> <a href="4145.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.7rc1 has been posted"</a>
<li><strong>In reply to:</strong> <a href="4144.php">Ralph H Castain: "Re: [OMPI devel] RML Send"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4147.php">Ralph Castain: "Re: [OMPI devel] RML Send"</a>
<li><strong>Reply:</strong> <a href="4147.php">Ralph Castain: "Re: [OMPI devel] RML Send"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>1) Yes, I'm using ORTE_RML_TAG_DAEMON with a new &quot;command&quot; that I 
<br>
defined in &quot;odls_types.h&quot;.
<br>
2) I'm packing and unpacking variables like OPAL_INT, OPAL_SIZE, ...
<br>
3) I'm not blocking the &quot;process_commands&quot; function with long code.
<br>
4) To know the daemon's vpid and jobid I used the same jobid from the 
<br>
app (in this solution, I can be changed) and the vpid is ordered 
<br>
sequentially (0 for mpirun and 1 to N for the orted's).
<br>
<p>The problems is: I need to send a buffered data, and I don't know the 
<br>
type of this data. I'm trying to use OPAL_NULL and OPAL_DATA_VALUE to 
<br>
send it but I got no success.... :(
<br>
<p>Thanks in advance,
<br>
Leonardo Fialho
<br>
<p><p>Ralph H Castain escribi&#243;:
<br>
<span class="quotelev1">&gt; I'm not sure exactly how you are trying to do this, but the usual procedure
</span><br>
<span class="quotelev1">&gt; would be:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. call opal_dss.pack(*buffer, *data, #data, data_type) for each thing you
</span><br>
<span class="quotelev1">&gt; want to put in the buffer. So you might call this to pack a string:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_dss.pack(*buffer, &amp;string, 1, OPAL_STRING);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. once you have everything packed into the buffer, you send the buffer with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte_rml.send_buffer(*dest, *buffer, dest_tag, 0);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What you will need is a tag that the daemon is listening on that won't
</span><br>
<span class="quotelev1">&gt; interfere with its normal operations - i.e., what you send won't get held
</span><br>
<span class="quotelev1">&gt; forever waiting to get serviced, and your servicing won't block us from
</span><br>
<span class="quotelev1">&gt; responding to a ctrl-c. You can probably use ORTE_RML_TAG_DAEMON, but you
</span><br>
<span class="quotelev1">&gt; need to ensure you don't block anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW: how is the app figuring out the name of the remote daemon? The proc
</span><br>
<span class="quotelev1">&gt; will have access to the daemon's vpid (assuming it knows the nodename where
</span><br>
<span class="quotelev1">&gt; the daemon is running) in the ESS, but not the jobid - I assume you are
</span><br>
<span class="quotelev1">&gt; using some method to compute the daemon jobid from the apps?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/17/08 12:08 PM, &quot;Leonardo Fialho&quot; &lt;lfialho_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#180;m using RML to send log messages from a PML to a ORTE daemon (located
</span><br>
<span class="quotelev2">&gt;&gt; in another node). I got success sending the message header, but now I
</span><br>
<span class="quotelev2">&gt;&gt; need to send the message data (buffer). How can I do it? The problem is
</span><br>
<span class="quotelev2">&gt;&gt; what data type I need to use for packing/unpacking? I tried
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_DATA_VALUE but don&#180;t get success...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Leonardo Fialho
Computer Architecture and Operating Systems Department - CAOS
Universidad Autonoma de Barcelona - UAB
ETSE, Edifcio Q, QC/3088
<a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
Phone: +34-93-581-2888
Fax: +34-93-581-2478
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4147.php">Ralph Castain: "Re: [OMPI devel] RML Send"</a>
<li><strong>Previous message:</strong> <a href="4145.php">Tim Mattox: "[OMPI devel] Open MPI v1.2.7rc1 has been posted"</a>
<li><strong>In reply to:</strong> <a href="4144.php">Ralph H Castain: "Re: [OMPI devel] RML Send"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4147.php">Ralph Castain: "Re: [OMPI devel] RML Send"</a>
<li><strong>Reply:</strong> <a href="4147.php">Ralph Castain: "Re: [OMPI devel] RML Send"</a>
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
