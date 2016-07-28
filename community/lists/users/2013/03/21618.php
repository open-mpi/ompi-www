<?
$subject_val = "Re: [OMPI users] Minor bug: invalid values for opal_signal MCA	parameter cause internal error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 26 17:48:06 2013" -->
<!-- isoreceived="20130326214806" -->
<!-- sent="Tue, 26 Mar 2013 21:48:01 +0000" -->
<!-- isosent="20130326214801" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Minor bug: invalid values for opal_signal MCA	parameter cause internal error" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43FC7E69_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B48A54A6-B21A-4C4C-BE3F-51476B052F70_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Minor bug: invalid values for opal_signal MCA	parameter cause internal error<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-26 17:48:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21619.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &quot;Error setting file view&quot; NPB BTIO"</a>
<li><strong>Previous message:</strong> <a href="21617.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
<li><strong>In reply to:</strong> <a href="21566.php">Ralph Castain: "Re: [OMPI users] Minor bug: invalid values for opal_signal MCA parameter cause internal error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just curious -- what docs are you referring to?  I don't see opal_signal referred to in the README, orterun.1, or the faq...
<br>
<p><p>On Mar 20, 2013, at 11:32 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Simple to do - I added a clearer error message to the trunk and marked it for inclusion in the eventual v1.7.1 release. I'll have to let someone else do the docs as I don't fully grok the rationale behind it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 18, 2013, at 12:56 PM, Jeremiah Willcock &lt;jewillco_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If a user gives an invalid value for the opal_signal MCA parameter, such as in the command:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -mca opal_signal x /bin/ls
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the error produced by Open MPI 1.6.3 is:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like opal_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; opal_util_register_stackhandlers failed
</span><br>
<span class="quotelev2">&gt;&gt; --&gt; Returned value -5 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; which claims to be an internal error, not an invalid argument given by a user.  That parameter also appears to be poorly documented in general (mentioned in ompi_info -a and on the mailing lists), and seems like it would be an incredibly useful debugging tool when running a crashing application under a debugger.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Jeremiah Willcock
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21619.php">Jeff Squyres (jsquyres): "Re: [OMPI users] &quot;Error setting file view&quot; NPB BTIO"</a>
<li><strong>Previous message:</strong> <a href="21617.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Running openmpi jobs on two system-librdmacm: couldn't read ABI version"</a>
<li><strong>In reply to:</strong> <a href="21566.php">Ralph Castain: "Re: [OMPI users] Minor bug: invalid values for opal_signal MCA parameter cause internal error"</a>
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
