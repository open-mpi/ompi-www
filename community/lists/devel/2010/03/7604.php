<?
$subject_val = "Re: [OMPI devel] Signals";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 16 20:54:53 2010" -->
<!-- isoreceived="20100317005453" -->
<!-- sent="Tue, 16 Mar 2010 18:54:44 -0600" -->
<!-- isosent="20100317005444" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Signals" -->
<!-- id="6451A9CE-37EB-4237-8721-0AC431CA0889_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1915A6C2-29A0-4E9B-B3FC-FDC2936DB56E_at_caos.uab.es" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Signals<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-16 20:54:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7605.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<li><strong>Previous message:</strong> <a href="7603.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<li><strong>In reply to:</strong> <a href="7603.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7605.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<li><strong>Reply:</strong> <a href="7605.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, that probably won't work. The current code isn't intended to cross jobs like that - I'm sure nobody ever tested it for that idea, and I'm pretty sure it won't support it.
<br>
<p>I don't currently know any way to do what you are trying to do. We could extend the signal code to handle it, I would think...but I'm not sure how soon that might happen.
<br>
<p><p>On Mar 16, 2010, at 6:47 PM, Leonardo Fialho wrote:
<br>
<p><span class="quotelev1">&gt; Yes... but something wrong is going on... maybe the problem is that the jobid is different than the process' jobid, I don't know.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to send a signal to other process running under a another job. The other process jump into an accept_connect to the MPI comm. So i did a code like this (I removed verification code and comments, this is just a summary for a happy execution):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_dpm.parse_port(port, &amp;hnp_uri, &amp;rml_uri, &amp;el_tag);
</span><br>
<span class="quotelev1">&gt; orte_rml_base_parse_uris(rml_uri, &amp;el_proc, NULL);
</span><br>
<span class="quotelev1">&gt; ompi_dpm.route_to_port(hnp_uri, &amp;el_proc);
</span><br>
<span class="quotelev1">&gt; orte_plm.signal_job(el_proc.jobid, SIGUSR1);
</span><br>
<span class="quotelev1">&gt; ompi_dpm.connect_accept(MPI_COMM_SELF, 0, port, true, el_comm);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; el_proc is defined as orte_process_name_t, not a pointer to this. And signal.h has been included for SIGUSR1's sake. But when the code enter in signal_job function it crashes. I'm trying to debug it just now... the crash is the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Fialho-2.local:51377] receiver: looking for: radic_eventlog[0]
</span><br>
<span class="quotelev1">&gt; [Fialho-2.local:51377] receiver: found port &lt;784793600.0;tcp://192.168.1.200:54071+784793601.0;tcp://192.168.1.200:54072:300&gt;
</span><br>
<span class="quotelev1">&gt; [Fialho-2.local:51377] receiver: HNP URI &lt;784793600.0;tcp://192.168.1.200:54071&gt;, RML URI &lt;784793601.0;tcp://192.168.1.200:54072&gt;, TAG &lt;300&gt;
</span><br>
<span class="quotelev1">&gt; [Fialho-2.local:51377] receiver: sending SIGUSR1 &lt;30&gt; to RADIC Event Logger &lt;[[11975,1],0]&gt;
</span><br>
<span class="quotelev1">&gt; [Fialho-2:51377] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [Fialho-2:51377] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [Fialho-2:51377] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [Fialho-2:51377] Failing at address: 0x0
</span><br>
<span class="quotelev1">&gt; [Fialho-2:51377] [ 0] 2   libSystem.B.dylib                   0x00007fff83a6eeaa _sigtramp + 26
</span><br>
<span class="quotelev1">&gt; [Fialho-2:51377] [ 1] 3   libSystem.B.dylib                   0x00007fff83a210b7 snprintf + 496
</span><br>
<span class="quotelev1">&gt; [Fialho-2:51377] [ 2] 4   mca_vprotocol_receiver.so           0x000000010065ba0a mca_vprotocol_receiver_send + 177
</span><br>
<span class="quotelev1">&gt; [Fialho-2:51377] [ 3] 5   libmpi.0.dylib                      0x0000000100077d44 MPI_Send + 734
</span><br>
<span class="quotelev1">&gt; [Fialho-2:51377] [ 4] 6   ping                                0x0000000100000a97 main + 431
</span><br>
<span class="quotelev1">&gt; [Fialho-2:51377] [ 5] 7   ping                                0x00000001000008e0 start + 52
</span><br>
<span class="quotelev1">&gt; [Fialho-2:51377] [ 6] 8   ???                                 0x0000000000000003 0x0 + 3
</span><br>
<span class="quotelev1">&gt; [Fialho-2:51377] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With exception to the signal_job the code works, I have tested it forcing an accept on the other process, and avoiding the signal_job. But I want to send the signal to wake-up the other side and to be able to manage multiple connect/accept.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Leonardo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 17, 2010, at 1:33 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sure! So long as you add the include, you are okay as the ORTE layer is &quot;below&quot; the OMPI one.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 16, 2010, at 6:29 PM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Ralph, the last question... it orte_plm.signal_job exposed/available to be called by a PML component? Yes, I have the orte/mca/plm/plm.h include line.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Leonardo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 16, 2010, at 11:59 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It's just the orte_process_name_t jobid field. So if you have an orte_process_name_t *pname, then it would just be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_plm.signal_job(pname-&gt;jobid, sig)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 16, 2010, at 3:23 PM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hum.... and to signal a job probably the function is orte_plm.signal_job(jobid, signal); right?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Now my dummy question is how to obtain the jobid part from an orte_proc_name_t variable? Is there any magical function in the names_fns.h?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Leonardo
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Mar 16, 2010, at 10:12 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Afraid not - you can signal a job, but not a specific process. We used to have such an API, but nobody ever used it. Easy to restore if someone has a need.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Mar 16, 2010, at 2:45 PM, Leonardo Fialho wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is there any function in Open MPI's frameworks to send a signal to other ORTE proc?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; For example, the ORTE process [[1234,1],1] want to  send a signal to process [[1234,1,4] locate in other node. I'm looking for this kind of functions but I just found functions to send signal to all procs in a node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Leonardo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7604/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7605.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<li><strong>Previous message:</strong> <a href="7603.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<li><strong>In reply to:</strong> <a href="7603.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7605.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<li><strong>Reply:</strong> <a href="7605.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
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
