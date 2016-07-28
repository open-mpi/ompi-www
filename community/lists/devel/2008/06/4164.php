<?
$subject_val = "Re: [OMPI devel] RML Send";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 10:32:26 2008" -->
<!-- isoreceived="20080619143226" -->
<!-- sent="Thu, 19 Jun 2008 16:34:56 +0200" -->
<!-- isosent="20080619143456" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RML Send" -->
<!-- id="485A6E90.5070906_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C47D8ECD.5472%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-06-19 10:34:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4165.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>Previous message:</strong> <a href="4163.php">Leonardo Fialho: "[OMPI devel] autogen error"</a>
<li><strong>In reply to:</strong> <a href="4147.php">Ralph Castain: "Re: [OMPI devel] RML Send"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4166.php">Ralph H Castain: "Re: [OMPI devel] RML Send"</a>
<li><strong>Reply:</strong> <a href="4166.php">Ralph H Castain: "Re: [OMPI devel] RML Send"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Mi mistake, I'm really using ORTE_PROC_MY_DAEMON-&gt;jobid.
<br>
<p>I have success using pack_buffer()/unpack_buffer() and OPAL_BYTE type, 
<br>
something strange occur when I was using pack()/unpack(). The value of 
<br>
num_bytes increase, example:
<br>
I tried to read num_bytes=5, and after a unpack this var have 33! I 
<br>
don't understand it...
<br>
<p>Thanks,
<br>
Leonardo Fialho
<br>
<p>Ralph Castain escribi&#243;:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/17/08 3:35 PM, &quot;Leonardo Fialho&quot; &lt;lfialho_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) Yes, I'm using ORTE_RML_TAG_DAEMON with a new &quot;command&quot; that I
</span><br>
<span class="quotelev2">&gt;&gt; defined in &quot;odls_types.h&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 2) I'm packing and unpacking variables like OPAL_INT, OPAL_SIZE, ...
</span><br>
<span class="quotelev2">&gt;&gt; 3) I'm not blocking the &quot;process_commands&quot; function with long code.
</span><br>
<span class="quotelev2">&gt;&gt; 4) To know the daemon's vpid and jobid I used the same jobid from the
</span><br>
<span class="quotelev2">&gt;&gt; app (in this solution, I can be changed) and the vpid is ordered
</span><br>
<span class="quotelev2">&gt;&gt; sequentially (0 for mpirun and 1 to N for the orted's).
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The jobid of the daemons is different from the jobid of the apps. So at the
</span><br>
<span class="quotelev1">&gt; moment, you are actually sending the message to another app!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can find the jobid of the daemons by extracting it as
</span><br>
<span class="quotelev1">&gt; ORTE_PROC_MY_DAEMON-&gt;jobid. Please note, though, that the app has no
</span><br>
<span class="quotelev1">&gt; knowledge of the contact info for that daemon, so this message will have to
</span><br>
<span class="quotelev1">&gt; route through the local daemon. Happens transparently, but just wanted to be
</span><br>
<span class="quotelev1">&gt; clear as to how this is working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; The problems is: I need to send a buffered data, and I don't know the
</span><br>
<span class="quotelev2">&gt;&gt; type of this data. I'm trying to use OPAL_NULL and OPAL_DATA_VALUE to
</span><br>
<span class="quotelev2">&gt;&gt; send it but I got no success.... :(
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I recall correctly, you were trying to archive messages that flowed
</span><br>
<span class="quotelev1">&gt; through the PML - correct? I would suggest just treating them as bytes and
</span><br>
<span class="quotelev1">&gt; packing them as an opal_byte_object_t, something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_byte_object_t bo;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bo.size = sizeof(my-data);
</span><br>
<span class="quotelev1">&gt; bo.data = *my_data;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_dss.pack(*buffer, &amp;bo, 1, OPAL_BYTE_OBJECT);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Then on the other end:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_byte_object_t *bo;
</span><br>
<span class="quotelev1">&gt; int32_t n;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_dss.unpack(*buffer, &amp;bo, &amp;n, OPAL_BYTE_OBJECT);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can then transfer the data into whatever storage you like. All this does
</span><br>
<span class="quotelev1">&gt; is pass the #bytes and the bytes as a collected unit - you could, of course,
</span><br>
<span class="quotelev1">&gt; simply pass the #bytes and bytes with independent packs if you wanted:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int32_t num_bytes;
</span><br>
<span class="quotelev1">&gt; uint8_t *my_data;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_dss.pack(*buffer, &amp;num_bytes, 1, OPAL_INT32);
</span><br>
<span class="quotelev1">&gt; opal_dss.pack(*buffer, my-data, num_bytes, OPAL_BYTE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_dss.unpack(*buffer, &amp;num_bytes, &amp;n, OPAL_INT32);
</span><br>
<span class="quotelev1">&gt; my_data = (uint8_t*)malloc(num_bytes);
</span><br>
<span class="quotelev1">&gt; opal_dss.unpack(*buffer, &amp;my_data, &amp;num_bytes, OPAL_BYTE);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Up to you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; Leonardo Fialho
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph H Castain escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not sure exactly how you are trying to do this, but the usual procedure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would be:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. call opal_dss.pack(*buffer, *data, #data, data_type) for each thing you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want to put in the buffer. So you might call this to pack a string:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_dss.pack(*buffer, &amp;string, 1, OPAL_STRING);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. once you have everything packed into the buffer, you send the buffer with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_rml.send_buffer(*dest, *buffer, dest_tag, 0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What you will need is a tag that the daemon is listening on that won't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interfere with its normal operations - i.e., what you send won't get held
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forever waiting to get serviced, and your servicing won't block us from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; responding to a ctrl-c. You can probably use ORTE_RML_TAG_DAEMON, but you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need to ensure you don't block anything.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTW: how is the app figuring out the name of the remote daemon? The proc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will have access to the daemon's vpid (assuming it knows the nodename where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the daemon is running) in the ESS, but not the jobid - I assume you are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using some method to compute the daemon jobid from the apps?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 6/17/08 12:08 PM, &quot;Leonardo Fialho&quot; &lt;lfialho_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I&#180;m using RML to send log messages from a PML to a ORTE daemon (located
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in another node). I got success sending the message header, but now I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; need to send the message data (buffer). How can I do it? The problem is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; what data type I need to use for packing/unpacking? I tried
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OPAL_DATA_VALUE but don&#180;t get success...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
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
<li><strong>Next message:</strong> <a href="4165.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>Previous message:</strong> <a href="4163.php">Leonardo Fialho: "[OMPI devel] autogen error"</a>
<li><strong>In reply to:</strong> <a href="4147.php">Ralph Castain: "Re: [OMPI devel] RML Send"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4166.php">Ralph H Castain: "Re: [OMPI devel] RML Send"</a>
<li><strong>Reply:</strong> <a href="4166.php">Ralph H Castain: "Re: [OMPI devel] RML Send"</a>
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
