<?
$subject_val = "Re: [OMPI devel] Outstanding 1.3 RTE features";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 13:27:30 2008" -->
<!-- isoreceived="20080507172730" -->
<!-- sent="Wed, 07 May 2008 11:15:32 -0600" -->
<!-- isosent="20080507171532" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Outstanding 1.3 RTE features" -->
<!-- id="C4473FD4.514B%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6CF17D62-D3FE-4779-BD38-3A076F2824AB_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Outstanding 1.3 RTE features<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-07 13:15:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3853.php">Jeff Squyres: "[OMPI devel] migrating to newer AC/AM/LT"</a>
<li><strong>Previous message:</strong> <a href="3851.php">George Bosilca: "Re: [OMPI devel] Outstanding 1.3 RTE features"</a>
<li><strong>In reply to:</strong> <a href="3851.php">George Bosilca: "Re: [OMPI devel] Outstanding 1.3 RTE features"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/7/08 11:08 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On May 7, 2008, at 10:24 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * static ports - basic infrastructure for procs and orteds to use
</span><br>
<span class="quotelev2">&gt;&gt;  static OOB/TCP ports, but we don't currently take advantage of it.
</span><br>
<span class="quotelev2">&gt;&gt;  This shouldn't require any API changes or major restructuring of
</span><br>
<span class="quotelev2">&gt;&gt;  code as everything required is already there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This feature is already in Open MPI for the last 6 months. Port
</span><br>
<span class="quotelev1">&gt; limitation was implemented for both the OOB TCP and the BTL TCP, with
</span><br>
<span class="quotelev1">&gt; and without ipv6 support. Setting the min and max to the same value,
</span><br>
<span class="quotelev1">&gt; force Open MPI (including ORTE) to use a static port.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_port_min_v4&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Starting port allowed (IPv4)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_port_range_v4&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;65535&quot;)
</span><br>
<span class="quotelev1">&gt;                            Range of allowed ports (IPv4)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_port_min_v6&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;)
</span><br>
<span class="quotelev1">&gt;                            Starting port allowed (IPv6)
</span><br>
<span class="quotelev1">&gt;                   MCA oob: parameter &quot;oob_tcp_port_range_v6&quot; (current
</span><br>
<span class="quotelev1">&gt; value: &quot;65535&quot;)
</span><br>
<span class="quotelev1">&gt;                            Range of allowed ports (IPv6)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Like I said in my note, the infrastructure is there. What is not currently
<br>
there is the logic that lets us take advantage of it to reduce socket count
<br>
and speed-up the launch. That will come, but not in time for 1.3.
<br>
<p><p><span class="quotelev2">&gt;&gt; * usage reporting - add appropriate mpirun cmd line option to
</span><br>
<span class="quotelev2">&gt;&gt;  request the orteds to report proc resource usage upon proc
</span><br>
<span class="quotelev2">&gt;&gt;  termination. Pretty trivial to do. Requested by a few users
</span><br>
<span class="quotelev2">&gt;&gt;  and a couple of tool developers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think this is the role of the runtime. Any user can write a 2
</span><br>
<span class="quotelev1">&gt; lines sh script to do this, there is no reason to integrate it deeply
</span><br>
<span class="quotelev1">&gt; inside ORTE.
</span><br>
<p>Doesn't seem like a major issue to me - I've heard arguments both ways. It's
<br>
trivial to do, simplifies life for MTT and a few others, and probably not
<br>
worth a lengthy debate.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    george.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3853.php">Jeff Squyres: "[OMPI devel] migrating to newer AC/AM/LT"</a>
<li><strong>Previous message:</strong> <a href="3851.php">George Bosilca: "Re: [OMPI devel] Outstanding 1.3 RTE features"</a>
<li><strong>In reply to:</strong> <a href="3851.php">George Bosilca: "Re: [OMPI devel] Outstanding 1.3 RTE features"</a>
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
