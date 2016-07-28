<?
$subject_val = "Re: [OMPI users] Error in configuring hwloc(hardware locality) on Linux on System Z";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 05:27:21 2012" -->
<!-- isoreceived="20121213102721" -->
<!-- sent="Thu, 13 Dec 2012 11:27:15 +0100" -->
<!-- isosent="20121213102715" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error in configuring hwloc(hardware locality) on Linux on System Z" -->
<!-- id="50C9AD83.5010105_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF9C1F04E3.7448C2EE-ON65257AD3.00345137-65257AD3.0035B089_at_in.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error in configuring hwloc(hardware locality) on Linux on System Z<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-13 05:27:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20941.php">Rolf vandeVaart: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>Previous message:</strong> <a href="20939.php">Shikha Maheshwari: "[OMPI users] Error in configuring hwloc(hardware locality) on Linux on System Z"</a>
<li><strong>In reply to:</strong> <a href="20939.php">Shikha Maheshwari: "[OMPI users] Error in configuring hwloc(hardware locality) on Linux on System Z"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 13/12/2012 10:45, Shikha Maheshwari a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are trying to build 'hwloc 1.4.2' on Linux on System Z. To build hwloc
</span><br>
<p>Hello,
<br>
<p>If you are really talking about hwloc, you should contact this mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Hardware locality user list &lt;hwloc-users_at_[hidden]&gt;
<br>
(Open MPI and hwloc are different software, even if hwloc is embedded in
<br>
OMPI).
<br>
<p><span class="quotelev1">&gt; We are getting error while performing first step i.e. running
</span><br>
<span class="quotelev1">&gt; configure script.
</span><br>
<span class="quotelev1">&gt; error message is :
</span><br>
<span class="quotelev1">&gt; configure: error: No atomic primitives available for s390x-ibm-linux-gnu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we investigate configure script, we got to know that it deals with
</span><br>
<span class="quotelev1">&gt; some assembly related operations in this part. And, switch-case does
</span><br>
<span class="quotelev1">&gt; not cover Linux on System z architecture (s390/s390x), hence it throws
</span><br>
<span class="quotelev1">&gt; error and exits.
</span><br>
<p>This looks strange to me. We do not use atomics in hwloc at all. Are you
<br>
really configuring hwloc and not Open MPI ?
<br>
<p><span class="quotelev1">&gt; *Questions*: We have following questions related to this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Is 'hwloc' supported on Linux on system z?
</span><br>
<p>We don't have permanent access to such a platform but it has been tested
<br>
(and successfully used) in the past.
<br>
<p><span class="quotelev1">&gt; 2. What exactly this assembly part is used for?
</span><br>
<p>It's not used in hwloc as far as I know :/
<br>
<p><p>If you're really trying to configure/build hwloc, please use hwloc 1.6
<br>
instead (from [1]), and report the problem to hwloc-users as explained
<br>
above. Please include your config.log and configure output in the mail.
<br>
<p>Thanks!
<br>
Brice
<br>
<p>[1] <a href="http://www.open-mpi.org/software/hwloc/v1.6/">http://www.open-mpi.org/software/hwloc/v1.6/</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20940/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20941.php">Rolf vandeVaart: "Re: [OMPI users] Stream interactions in CUDA"</a>
<li><strong>Previous message:</strong> <a href="20939.php">Shikha Maheshwari: "[OMPI users] Error in configuring hwloc(hardware locality) on Linux on System Z"</a>
<li><strong>In reply to:</strong> <a href="20939.php">Shikha Maheshwari: "[OMPI users] Error in configuring hwloc(hardware locality) on Linux on System Z"</a>
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
