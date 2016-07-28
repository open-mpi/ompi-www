<?
$subject_val = "Re: [OMPI users] Open-MPI 1.3 and environment variables";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 10:58:47 2009" -->
<!-- isoreceived="20090120155847" -->
<!-- sent="Tue, 20 Jan 2009 08:58:33 -0700" -->
<!-- isosent="20090120155833" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI 1.3 and environment variables" -->
<!-- id="34C20F74-A254-4073-95D5-CCB6DA05785D_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0901200747i5c60f803pb3f38726e3a4f73_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 10:58:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7740.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Previous message:</strong> <a href="7738.php">jody: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
<li><strong>In reply to:</strong> <a href="7738.php">jody: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not that I know of...I would expect it to work.
<br>
<p><p>On Jan 20, 2009, at 8:47 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the clarification.
</span><br>
<span class="quotelev1">&gt; Speaking of 'printenv' - i noticed that
</span><br>
<span class="quotelev1">&gt; even though $HOSTNAME is set on all of my machines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; aim-nano_03 ~ # echo $HOSTNAME
</span><br>
<span class="quotelev1">&gt; aim-nano_03
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it does not appear in printenv's output:
</span><br>
<span class="quotelev1">&gt;  aim-nano_03 opt # printenv | grep HOST
</span><br>
<span class="quotelev1">&gt;  aim-nano_03 opt #
</span><br>
<span class="quotelev1">&gt; Is there something special about $HOSTNAME and how or when it is set?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 20, 2009 at 3:26 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; That was never an envar for public use, but rather one that was used
</span><br>
<span class="quotelev2">&gt;&gt; internal to OMPI and therefore subject to change (which it did).  
</span><br>
<span class="quotelev2">&gt;&gt; There are a
</span><br>
<span class="quotelev2">&gt;&gt; number of such variables in the system - we try to indicate this by  
</span><br>
<span class="quotelev2">&gt;&gt; not
</span><br>
<span class="quotelev2">&gt;&gt; exposing them via ompi_info. Of course, you can independently  
</span><br>
<span class="quotelev2">&gt;&gt; discover them
</span><br>
<span class="quotelev2">&gt;&gt; with a printenv, but we would not recommend relying on them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The list of reliable envars is provided here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpi-environmental-variables">http://www.open-mpi.org/faq/?category=running#mpi-environmental-variables</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that this begins with 1.3 and does not apply to any prior  
</span><br>
<span class="quotelev2">&gt;&gt; releases.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 20, 2009, at 4:43 AM, jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Under 1.2.8 i could check
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_ns_nds_vpid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to find out the process rank.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Under 1.3 that variable does not seem to exist anymore.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there an equivalent to hat variable in 1.3?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Have any other environment variables changed?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7740.php">Olivier Marsden: "Re: [OMPI users] Problem compiling open mpi 1.3 with sunstudio12 express"</a>
<li><strong>Previous message:</strong> <a href="7738.php">jody: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
<li><strong>In reply to:</strong> <a href="7738.php">jody: "Re: [OMPI users] Open-MPI 1.3 and environment variables"</a>
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
