<?
$subject_val = "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 11 20:07:18 2008" -->
<!-- isoreceived="20080912000718" -->
<!-- sent="Thu, 11 Sep 2008 20:07:13 -0400" -->
<!-- isosent="20080912000713" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2" -->
<!-- id="48C9B2B1.804_at_neuralbs.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6F837A19-0915-45B0-83A6-F6C431CEAB7B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2<br>
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-11 20:07:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6519.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6517.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6516.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6517.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 11, 2008, at 3:27 PM, Eric Thibodeau wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, added to the information from the README, I'm thinking none of 
</span><br>
<span class="quotelev2">&gt;&gt; the 3 configure options have an impact on the said 'threaded TCP 
</span><br>
<span class="quotelev2">&gt;&gt; listener' and the MCA option you suggested should still work, is this 
</span><br>
<span class="quotelev2">&gt;&gt; correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It should default to --with-threads=posix, which you'll need for the 
</span><br>
<span class="quotelev1">&gt; threaded listener (it just means that the system supports posix 
</span><br>
<span class="quotelev1">&gt; threads).  You can either specify that explicitly or trust configure 
</span><br>
<span class="quotelev1">&gt; to get it right (you can examine the output of configure to check that 
</span><br>
<span class="quotelev1">&gt; it got it right -- but I'm sure it did).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On that matter, since we're modifying the package to correct this, 
</span><br>
<span class="quotelev2">&gt;&gt; how would I go about enabling `oob_tcp_listen_mode listen_thread` by 
</span><br>
<span class="quotelev2">&gt;&gt; default at compile time?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can't at compile time, sorry.  There's just too many MCA 
</span><br>
<span class="quotelev1">&gt; parameters for us to offer a configure parameter for each one of them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But you can set the global config file to set this MCA param value by 
</span><br>
<span class="quotelev1">&gt; default:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
</span><br>
Thanks, we're adding this as a default parameter to the openmpi package 
<br>
if threads option was selected.
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6519.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6517.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6516.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6517.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
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
