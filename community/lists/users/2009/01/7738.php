<?
$subject_val = "Re: [OMPI users] Open-MPI 1.3 and environment variables";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 10:47:57 2009" -->
<!-- isoreceived="20090120154757" -->
<!-- sent="Tue, 20 Jan 2009 16:47:42 +0100" -->
<!-- isosent="20090120154742" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI 1.3 and environment variables" -->
<!-- id="9b0da5ce0901200747i5c60f803pb3f38726e3a4f73_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B9AB7E8D-7FA3-459C-A43F-12AA3FA9A471_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open-MPI 1.3 and environment variables<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 10:47:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7739.php">Ralph Castain: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
<li><strong>Previous message:</strong> <a href="7737.php">Ralph Castain: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
<li><strong>In reply to:</strong> <a href="7737.php">Ralph Castain: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7739.php">Ralph Castain: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
<li><strong>Reply:</strong> <a href="7739.php">Ralph Castain: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the clarification.
<br>
Speaking of 'printenv' - i noticed that
<br>
even though $HOSTNAME is set on all of my machines:
<br>
<p>&nbsp;aim-nano_03 ~ # echo $HOSTNAME
<br>
&nbsp;aim-nano_03
<br>
<p>it does not appear in printenv's output:
<br>
&nbsp;&nbsp;aim-nano_03 opt # printenv | grep HOST
<br>
&nbsp;&nbsp;aim-nano_03 opt #
<br>
Is there something special about $HOSTNAME and how or when it is set?
<br>
<p>Jody
<br>
<p>On Tue, Jan 20, 2009 at 3:26 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; That was never an envar for public use, but rather one that was used
</span><br>
<span class="quotelev1">&gt; internal to OMPI and therefore subject to change (which it did). There are a
</span><br>
<span class="quotelev1">&gt; number of such variables in the system - we try to indicate this by not
</span><br>
<span class="quotelev1">&gt; exposing them via ompi_info. Of course, you can independently discover them
</span><br>
<span class="quotelev1">&gt; with a printenv, but we would not recommend relying on them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The list of reliable envars is provided here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpi-environmental-variables">http://www.open-mpi.org/faq/?category=running#mpi-environmental-variables</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that this begins with 1.3 and does not apply to any prior releases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 20, 2009, at 4:43 AM, jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Under 1.2.8 i could check
</span><br>
<span class="quotelev2">&gt;&gt;  OMPI_MCA_ns_nds_vpid
</span><br>
<span class="quotelev2">&gt;&gt; to find out the process rank.
</span><br>
<span class="quotelev2">&gt;&gt; Under 1.3 that variable does not seem to exist anymore.
</span><br>
<span class="quotelev2">&gt;&gt; Is there an equivalent to hat variable in 1.3?
</span><br>
<span class="quotelev2">&gt;&gt; Have any other environment variables changed?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank You
</span><br>
<span class="quotelev2">&gt;&gt;  Jody
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7739.php">Ralph Castain: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
<li><strong>Previous message:</strong> <a href="7737.php">Ralph Castain: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
<li><strong>In reply to:</strong> <a href="7737.php">Ralph Castain: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7739.php">Ralph Castain: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
<li><strong>Reply:</strong> <a href="7739.php">Ralph Castain: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
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
