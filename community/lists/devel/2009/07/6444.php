<?
$subject_val = "Re: [OMPI devel] selectively bind MPI to one HCA out of available ones";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 16 04:21:19 2009" -->
<!-- isoreceived="20090716082119" -->
<!-- sent="Thu, 16 Jul 2009 13:53:49 +0530" -->
<!-- isosent="20090716082349" -->
<!-- name="neeraj_at_[hidden]" -->
<!-- email="neeraj_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] selectively bind MPI to one HCA out of available ones" -->
<!-- id="OF04DCF196.B0A7C7D6-ON652575F5.002E1569-652575F5.002DE243_at_crlindia.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A5EE1F6.4010103_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] selectively bind MPI to one HCA out of available ones<br>
<strong>From:</strong> <a href="mailto:neeraj_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20selectively%20bind%20MPI%20to%20one%20HCA%20out%20of%20available%20ones"><em>neeraj_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-07-16 04:23:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6445.php">Prasadcse Perera: "[OMPI devel] Question on MPI_Info"</a>
<li><strong>Previous message:</strong> <a href="6443.php">Pavel Shamis (Pasha): "Re: [OMPI devel] selectively bind MPI to one HCA out of available ones"</a>
<li><strong>In reply to:</strong> <a href="6443.php">Pavel Shamis (Pasha): "Re: [OMPI devel] selectively bind MPI to one HCA out of available ones"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot Pasha,
<br>
You saved lot of my time.
<br>
Thanks
<br>
<p>Regards
<br>
<p>Neeraj Chourasia (MTS)
<br>
Computational Research Laboratories Ltd.
<br>
(A wholly Owned Subsidiary of TATA SONS Ltd)
<br>
B-101, ICC Trade Towers, Senapati Bapat Road
<br>
Pune 411016 (Mah) INDIA
<br>
(O) +91-20-6620 9863  (Fax) +91-20-6620 9862
<br>
M: +91.9225520634
<br>
<p><p><p><p>&quot;Pavel Shamis (Pasha)&quot; &lt;pashash_at_[hidden]&gt; 
<br>
Sent by: devel-bounces_at_[hidden]
<br>
07/16/2009 01:50 PM
<br>
Please respond to
<br>
pasha_at_[hidden]; Please respond to
<br>
Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
<p><p>To
<br>
Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
cc
<br>
Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject
<br>
Re: [OMPI devel] selectively bind MPI to one HCA out of available ones
<br>
<p><p><p><p><p><p>Hi,
<br>
You can select ib device used with openib btl by using follow parametres:
<br>
&nbsp;MCA btl: parameter &quot;btl_openib_if_include&quot; (current value: &lt;none&gt;, data 
<br>
source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comma-delimited list of devices/ports to be 
<br>
used (e.g. &quot;mthca0,mthca1:2&quot;; empty value means to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use all ports found).  Mutually exclusive with 
<br>
btl_openib_if_exclude.
<br>
&nbsp;MCA btl: parameter &quot;btl_openib_if_exclude&quot; (current value: &lt;none&gt;, data 
<br>
source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comma-delimited list of device/ports to be 
<br>
excluded (empty value means to not exclude any
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ports).  Mutually exclusive with 
<br>
btl_openib_if_include.
<br>
<p>For example, if you want to use first port on mthc0 you command line 
<br>
will look like:
<br>
<p>mpirun -np............. --mca btl_openib_if_include mthca0:1 ....
<br>
<p>Pasha
<br>
<p>neeraj_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I have a cluster where both HCA's of blade are active, but 
</span><br>
<span class="quotelev1">&gt; connected to different subnet.
</span><br>
<span class="quotelev1">&gt;         Is there an option in MPI to select one HCA out of available 
</span><br>
<span class="quotelev1">&gt; one's? I know it can be done by making changes in openmpi code, but i 
</span><br>
<span class="quotelev1">&gt; need clean interface like option during mpi launch time to select 
</span><br>
<span class="quotelev1">&gt; mthca0 or mthca1?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Any help is appreciated. Btw i just checked Mvapich and 
</span><br>
<span class="quotelev1">&gt; feature is there inside.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Neeraj Chourasia (MTS)
</span><br>
<span class="quotelev1">&gt; Computational Research Laboratories Ltd.
</span><br>
<span class="quotelev1">&gt; (A wholly Owned Subsidiary of TATA SONS Ltd)
</span><br>
<span class="quotelev1">&gt; B-101, ICC Trade Towers, Senapati Bapat Road
</span><br>
<span class="quotelev1">&gt; Pune 411016 (Mah) INDIA
</span><br>
<span class="quotelev1">&gt; (O) +91-20-6620 9863  (Fax) +91-20-6620 9862
</span><br>
<span class="quotelev1">&gt; M: +91.9225520634
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =====-----=====-----===== Notice: The information contained in this 
</span><br>
<span class="quotelev1">&gt; e-mail message and/or attachments to it may contain confidential or 
</span><br>
<span class="quotelev1">&gt; privileged information. If you are not the intended recipient, any 
</span><br>
<span class="quotelev1">&gt; dissemination, use, review, distribution, printing or copying of the 
</span><br>
<span class="quotelev1">&gt; information contained in this e-mail message and/or attachments to it 
</span><br>
<span class="quotelev1">&gt; are strictly prohibited. If you have received this communication in 
</span><br>
<span class="quotelev1">&gt; error, please notify us by reply e-mail or telephone and immediately 
</span><br>
<span class="quotelev1">&gt; and permanently delete the message and any attachments. Internet 
</span><br>
<span class="quotelev1">&gt; communications cannot be guaranteed to be timely, secure, error or 
</span><br>
<span class="quotelev1">&gt; virus-free. The sender does not accept liability for any errors or 
</span><br>
<span class="quotelev1">&gt; omissions.Thank you =====-----=====-----=====
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p>=====-----=====-----=====
<br>
<p><p><p>Notice: The information contained in this e-mail
<br>
message and/or attachments to it may contain 
<br>
confidential or privileged information. If you are 
<br>
not the intended recipient, any dissemination, use, 
<br>
review, distribution, printing or copying of the 
<br>
information contained in this e-mail message 
<br>
and/or attachments to it are strictly prohibited. If 
<br>
you have received this communication in error, 
<br>
please notify us by reply e-mail or telephone and 
<br>
immediately and permanently delete the message 
<br>
and any attachments. 
<br>
<p>Internet communications cannot be guaranteed to be timely,
<br>
secure, error or virus-free. The sender does not accept liability
<br>
for any errors or omissions.Thank you
<br>
<p>=====-----=====-----=====
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6444/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6445.php">Prasadcse Perera: "[OMPI devel] Question on MPI_Info"</a>
<li><strong>Previous message:</strong> <a href="6443.php">Pavel Shamis (Pasha): "Re: [OMPI devel] selectively bind MPI to one HCA out of available ones"</a>
<li><strong>In reply to:</strong> <a href="6443.php">Pavel Shamis (Pasha): "Re: [OMPI devel] selectively bind MPI to one HCA out of available ones"</a>
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
