<?
$subject_val = "Re: [OMPI users] Minor bug: invalid values for opal_signal MCA parameter cause internal error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 20 11:32:38 2013" -->
<!-- isoreceived="20130320153238" -->
<!-- sent="Wed, 20 Mar 2013 08:32:31 -0700" -->
<!-- isosent="20130320153231" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Minor bug: invalid values for opal_signal MCA parameter cause internal error" -->
<!-- id="B48A54A6-B21A-4C4C-BE3F-51476B052F70_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.03.1303181550100.21844_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Minor bug: invalid values for opal_signal MCA parameter cause internal error<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-20 11:32:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21567.php">Bruno Cramer: "[OMPI users] mpirun error output"</a>
<li><strong>Previous message:</strong> <a href="21565.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21553.php">Jeremiah Willcock: "[OMPI users] Minor bug: invalid values for opal_signal MCA parameter cause internal error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21618.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Minor bug: invalid values for opal_signal MCA	parameter cause internal error"</a>
<li><strong>Reply:</strong> <a href="21618.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Minor bug: invalid values for opal_signal MCA	parameter cause internal error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Simple to do - I added a clearer error message to the trunk and marked it for inclusion in the eventual v1.7.1 release. I'll have to let someone else do the docs as I don't fully grok the rationale behind it.
<br>
<p>Thanks
<br>
<p>On Mar 18, 2013, at 12:56 PM, Jeremiah Willcock &lt;jewillco_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; If a user gives an invalid value for the opal_signal MCA parameter, such as in the command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -mca opal_signal x /bin/ls
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the error produced by Open MPI 1.6.3 is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  opal_util_register_stackhandlers failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value -5 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which claims to be an internal error, not an invalid argument given by a user.  That parameter also appears to be poorly documented in general (mentioned in ompi_info -a and on the mailing lists), and seems like it would be an incredibly useful debugging tool when running a crashing application under a debugger.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Jeremiah Willcock
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
<li><strong>Next message:</strong> <a href="21567.php">Bruno Cramer: "[OMPI users] mpirun error output"</a>
<li><strong>Previous message:</strong> <a href="21565.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21553.php">Jeremiah Willcock: "[OMPI users] Minor bug: invalid values for opal_signal MCA parameter cause internal error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21618.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Minor bug: invalid values for opal_signal MCA	parameter cause internal error"</a>
<li><strong>Reply:</strong> <a href="21618.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Minor bug: invalid values for opal_signal MCA	parameter cause internal error"</a>
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
