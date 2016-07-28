<?
$subject_val = "[OMPI users] BLCR support not building on 1.5.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 26 14:26:42 2011" -->
<!-- isoreceived="20110526182642" -->
<!-- sent="Thu, 26 May 2011 11:26:37 -0700 (PDT)" -->
<!-- isosent="20110526182637" -->
<!-- name="Bill Johnstone" -->
<!-- email="beejstone3_at_[hidden]" -->
<!-- subject="[OMPI users] BLCR support not building on 1.5.3" -->
<!-- id="842077.39847.qm_at_web121818.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BOZO" -->
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
<strong>Subject:</strong> [OMPI users] BLCR support not building on 1.5.3<br>
<strong>From:</strong> Bill Johnstone (<em>beejstone3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-26 14:26:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16644.php">charles reid: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<li><strong>Previous message:</strong> <a href="16642.php">Eloi Gaudry: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&quot;btl_openib_receive_queues&quot; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16650.php">Joshua Hursey: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>Reply:</strong> <a href="16650.php">Joshua Hursey: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all.
<br>
<p>I'm building 1.5.3 from source on a Debian Squeeze AMD64 system, and trying to get BLCR support built-in.&#160; I've installed all the packages that I think should be relevant to BLCR support, including:
<br>
<p>+blcr-dkms
<br>
+libcr0
<br>
+libcr-dev
<br>
+blcr-util
<br>
<p>I've also installed blcr-testuite .&#160; I only run Open MPI's configure after loading the blcr modules, and the tests in blcr-testsuite pass.&#160; The relevant headers seem to be in /usr/include and the relevant libraries in /usr/lib .
<br>
<p>I've tried three different invocations of configure:
<br>
<p>1. No BLCR-related arguments.
<br>
<p>Output snippet from configure:
<br>
checking --with-blcr value... simple ok (unspecified)
<br>
checking --with-blcr-libdir value... simple ok (unspecified)
<br>
checking if MCA component crs:blcr can compile... no
<br>
<p>2. With --with-blcr=/usr only
<br>
<p>Output snippet from configure:
<br>
checking --with-blcr value... sanity check ok (/usr)
<br>
checking --with-blcr-libdir value... simple ok (unspecified)
<br>
configure: WARNING: BLCR support requested but not found.&#160; Perhaps you need to specify the location of the BLCR libraries.
<br>
configure: error: Aborting.
<br>
<p>3. With --with-blcr-libdir=/usr/lib only
<br>
<p>Output snippet from configure:
<br>
checking --with-blcr value... simple ok (unspecified)
<br>
checking --with-blcr-libdir value... sanity check ok (/usr/lib)
<br>
checking if MCA component crs:blcr can compile... no
<br>
<p><p>config.log only seems to contain the output of whatever tests were run to determine whether or not blcr support could be compiled, but I don't see any way to get details on what code and compile invocation actually failed, in order to get to the root of the problem.&#160; I'm not a configure or m4 expert, so I'm not sure how to go further in troubleshooting this.
<br>
<p>Help would be much appreciated.
<br>
<p>Thanks!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16644.php">charles reid: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<li><strong>Previous message:</strong> <a href="16642.php">Eloi Gaudry: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&quot;btl_openib_receive_queues&quot; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16650.php">Joshua Hursey: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>Reply:</strong> <a href="16650.php">Joshua Hursey: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
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
