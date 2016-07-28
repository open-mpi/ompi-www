<?
$subject_val = "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 19 09:24:58 2012" -->
<!-- isoreceived="20120119142458" -->
<!-- sent="Thu, 19 Jan 2012 09:24:53 -0500" -->
<!-- isosent="20120119142453" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )" -->
<!-- id="48E09292-1468-493D-8FED-EB9C7B254172_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="088B9CB56632924D9EAE7A408BB76580845AA2CD4B_at_GVW1102EXC.americas.hpqcorp.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-19 09:24:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18211.php">Jeff Squyres: "Re: [OMPI users] FW: mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
<li><strong>Previous message:</strong> <a href="18209.php">Theiner, Andre: "[OMPI users] FW: mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
<li><strong>In reply to:</strong> <a href="18199.php">Theiner, Andre: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 18, 2012, at 4:15 AM, Theiner, Andre wrote:
<br>
<p><span class="quotelev1">&gt; I also have requested the user to run the following adaption to his original
</span><br>
<span class="quotelev1">&gt; command &quot;mpriun -np 9 interFoam -parallel&quot;. I hoped to get a kind of debug output
</span><br>
<span class="quotelev1">&gt; which points me into the right way. The new command did not work and I am a bit lost.
</span><br>
<span class="quotelev1">&gt; Is the syntax wrong somehow or is there a problem in the user's PATH?
</span><br>
<span class="quotelev1">&gt; I do not understand what debugger is wanted. Does mpirun not have an internal debugger?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; testuser_at_caelde04:~/OpenFOAM/testuser-2.0.1/nozzleFlow2D&gt; mpirun -v --debug --debug-daemons -np 9 interfoam -parallel
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A suitable debugger could not be found in your PATH.
</span><br>
<span class="quotelev1">&gt; Check the values specified in the orte_base_user_debugger MCA parameter for the list of debuggers that was searched.
</span><br>
<p>The --debug option is probably not doing what you think in this case.  Here's what the man page says:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For debugging:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-debug, --debug
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invoke   the    user-level    debugger    indicated    by    the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_base_user_debugger MCA parameter.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-debugger, --debugger
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sequence  of  debuggers to search for when --debug is used (i.e.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a synonym for orte_base_user_debugger MCA parameter).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-tv, --tv
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Launch processes under the TotalView debugger.  Deprecated back-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wards compatibility flag. Synonym for --debug.
<br>
<p>Hence, the --debug flag is trying to invoke a parallel debugger.  It doesn't actually show debug-level information about what is happening in mpirun or the MPI processes.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18211.php">Jeff Squyres: "Re: [OMPI users] FW: mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
<li><strong>Previous message:</strong> <a href="18209.php">Theiner, Andre: "[OMPI users] FW: mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
<li><strong>In reply to:</strong> <a href="18199.php">Theiner, Andre: "Re: [OMPI users] mpirun hangs when used on more than 2 CPUs ( mpirun compiled without thread support )"</a>
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
