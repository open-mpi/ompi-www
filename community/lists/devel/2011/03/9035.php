<?
$subject_val = "Re: [OMPI devel] BTL preferred_protocol , large message";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  8 14:00:41 2011" -->
<!-- isoreceived="20110308190041" -->
<!-- sent="Tue, 8 Mar 2011 14:00:36 -0500" -->
<!-- isosent="20110308190036" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL preferred_protocol , large message" -->
<!-- id="FE75994C-AA6C-4746-887F-C22B4097D1A2_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D76637A.2020900_at_bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BTL preferred_protocol , large message<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-08 14:00:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9036.php">Eugene Loh: "[OMPI devel] multi-threaded test"</a>
<li><strong>Previous message:</strong> <a href="9034.php">Damien Guinier: "[OMPI devel] BTL preferred_protocol , large message"</a>
<li><strong>In reply to:</strong> <a href="9034.php">Damien Guinier: "[OMPI devel] BTL preferred_protocol , large message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9038.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL preferred_protocol , large message"</a>
<li><strong>Reply:</strong> <a href="9038.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL preferred_protocol , large message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 8, 2011, at 12:12 , Damien Guinier wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff
</span><br>
<p>Sorry, your email went on the devel mailing list of Open MPI.
<br>
<p><span class="quotelev1">&gt; I'm working on large message exchange optimization. My optimization consists in &quot;choosing
</span><br>
<span class="quotelev1">&gt; the best protocol for each large message&quot;.
</span><br>
<span class="quotelev1">&gt; In fact,
</span><br>
<span class="quotelev1">&gt; - for each device, the way to chose the best protocol is different.
</span><br>
<span class="quotelev1">&gt; - the faster protocol for a given device depends on that device hardware and on the message
</span><br>
<span class="quotelev1">&gt; specifications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the device/BTL itself is the best place to dynamically select the fastest protocol.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Presently, for large messages, the protocol selection is only based on device capabilities.
</span><br>
<span class="quotelev1">&gt; My optimization consists in asking the device/BTL for a &quot;preferred protocol&quot; and
</span><br>
<span class="quotelev1">&gt; then make a choice based on :
</span><br>
<span class="quotelev1">&gt;        - the device capabilities and the BTL's recommendation.
</span><br>
<p>As a BTL will not randomly change its preferred protocol, one can assume it will depend on the peer. Here is a similar approach to one you describe in your email, but without modification of the BTL interface.
<br>
<p><a href="https://fs.hlrs.de/projects/eurompi2010/TALKS/WEDNESDAY_AFTERNOON/george_bosilca_locality_and_topology_aware.pdf">https://fs.hlrs.de/projects/eurompi2010/TALKS/WEDNESDAY_AFTERNOON/george_bosilca_locality_and_topology_aware.pdf</a>
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Technical view:
</span><br>
<span class="quotelev1">&gt; The optimization is located in mca_pml_ob1_send_request_start_btl(), after the device/btl selection.
</span><br>
<span class="quotelev1">&gt; In the large message section, I call a new function :
</span><br>
<span class="quotelev1">&gt;   mca_pml_ob1_preferred_protocol() =&gt; mca_bml_base_preferred_protocol()
</span><br>
<span class="quotelev1">&gt; This one will try to launch
</span><br>
<span class="quotelev1">&gt;   btl-&gt;btl_preferred_protocol()
</span><br>
<span class="quotelev1">&gt; So, selecting a protocol before a large message in not in the critical path.
</span><br>
<span class="quotelev1">&gt; It is the BTL's responsibility to define this function to select a preferred protocol.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If this function is not defined, nothing changes in the code path
</span><br>
<span class="quotelev1">&gt; To do this optimization , I had to add an interface to the btl module structure in &quot;btl.h&quot;, this is the drawback.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have already used this feature to optimize the &quot;shared memory&quot; device/BTL. I use the &quot;preferred_protocol&quot; feature to enable/disable
</span><br>
<span class="quotelev1">&gt; KNEM according to intra/inter socket communication. This optimization increases a &quot;IMB pingping benchmark&quot; bandwidth by ~36%.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The next step is now to use the &quot;preferred protocol&quot; feature with openib ( with many IB cards)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached 2 patches:
</span><br>
<span class="quotelev1">&gt; 1) BTL_preferred.patch:
</span><br>
<span class="quotelev1">&gt;   introduces the new preferred protocol interface
</span><br>
<span class="quotelev1">&gt; 2) SM_KNEM_intra_socket.patch:
</span><br>
<span class="quotelev1">&gt;   defines the preferred protocol for the sm btl
</span><br>
<span class="quotelev1">&gt;   Note: Since the &quot;ess&quot; framework can't give us the &quot;socket locality
</span><br>
<span class="quotelev1">&gt;         information&quot;, I used hitopo that has been proposed in an RFC
</span><br>
<span class="quotelev1">&gt;         some times ago:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/devel/2010/11/8677.php">http://www.open-mpi.org/community/lists/devel/2010/11/8677.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;BTL_preferred.path&gt;&lt;SM_KNEM_intra_socket.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>&quot;I disapprove of what you say, but I will defend to the death your right to say it&quot;
<br>
&nbsp;&nbsp;-- Evelyn Beatrice Hall
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9036.php">Eugene Loh: "[OMPI devel] multi-threaded test"</a>
<li><strong>Previous message:</strong> <a href="9034.php">Damien Guinier: "[OMPI devel] BTL preferred_protocol , large message"</a>
<li><strong>In reply to:</strong> <a href="9034.php">Damien Guinier: "[OMPI devel] BTL preferred_protocol , large message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9038.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL preferred_protocol , large message"</a>
<li><strong>Reply:</strong> <a href="9038.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL preferred_protocol , large message"</a>
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
