<?
$subject_val = "Re: [OMPI users] BLCR support not building on 1.5.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 27 14:51:27 2011" -->
<!-- isoreceived="20110527185127" -->
<!-- sent="Fri, 27 May 2011 14:51:20 -0400" -->
<!-- isosent="20110527185120" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLCR support not building on 1.5.3" -->
<!-- id="645B43D6-BCBD-4463-B1D6-C2AB3E08A07E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="842077.39847.qm_at_web121818.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] BLCR support not building on 1.5.3<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-27 14:51:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16651.php">Bill Johnstone: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>Previous message:</strong> <a href="16649.php">Gus Correa: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>In reply to:</strong> <a href="16643.php">Bill Johnstone: "[OMPI users] BLCR support not building on 1.5.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16651.php">Bill Johnstone: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>Reply:</strong> <a href="16651.php">Bill Johnstone: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version of BLCR are you using?
<br>
<p>What other configure options are you passing to Open MPI? Specifically the configure test will always fail if '--with-ft=cr' is not specified - by default Open MPI will only build the BLCR component if C/R FT is requested by the user.
<br>
<p>Can you send a zip'ed up config.log to the list, that might show something that the configure is missing?
<br>
<p>Thanks,
<br>
Josh
<br>
<p>On May 26, 2011, at 2:26 PM, Bill Johnstone wrote:
<br>
<p><span class="quotelev1">&gt; Hello all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm building 1.5.3 from source on a Debian Squeeze AMD64 system, and trying to get BLCR support built-in.  I've installed all the packages that I think should be relevant to BLCR support, including:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +blcr-dkms
</span><br>
<span class="quotelev1">&gt; +libcr0
</span><br>
<span class="quotelev1">&gt; +libcr-dev
</span><br>
<span class="quotelev1">&gt; +blcr-util
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've also installed blcr-testuite .  I only run Open MPI's configure after loading the blcr modules, and the tests in blcr-testsuite pass.  The relevant headers seem to be in /usr/include and the relevant libraries in /usr/lib .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've tried three different invocations of configure:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. No BLCR-related arguments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Output snippet from configure:
</span><br>
<span class="quotelev1">&gt; checking --with-blcr value... simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; checking --with-blcr-libdir value... simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; checking if MCA component crs:blcr can compile... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. With --with-blcr=/usr only
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Output snippet from configure:
</span><br>
<span class="quotelev1">&gt; checking --with-blcr value... sanity check ok (/usr)
</span><br>
<span class="quotelev1">&gt; checking --with-blcr-libdir value... simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; configure: WARNING: BLCR support requested but not found.  Perhaps you need to specify the location of the BLCR libraries.
</span><br>
<span class="quotelev1">&gt; configure: error: Aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. With --with-blcr-libdir=/usr/lib only
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Output snippet from configure:
</span><br>
<span class="quotelev1">&gt; checking --with-blcr value... simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; checking --with-blcr-libdir value... sanity check ok (/usr/lib)
</span><br>
<span class="quotelev1">&gt; checking if MCA component crs:blcr can compile... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; config.log only seems to contain the output of whatever tests were run to determine whether or not blcr support could be compiled, but I don't see any way to get details on what code and compile invocation actually failed, in order to get to the root of the problem.  I'm not a configure or m4 expert, so I'm not sure how to go further in troubleshooting this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Help would be much appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16651.php">Bill Johnstone: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>Previous message:</strong> <a href="16649.php">Gus Correa: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>In reply to:</strong> <a href="16643.php">Bill Johnstone: "[OMPI users] BLCR support not building on 1.5.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16651.php">Bill Johnstone: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>Reply:</strong> <a href="16651.php">Bill Johnstone: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
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
