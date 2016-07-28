<?
$subject_val = "[OMPI users] setsockopt() fails with EINVAL on solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 30 09:41:59 2012" -->
<!-- isoreceived="20120730134159" -->
<!-- sent="Mon, 30 Jul 2012 15:41:39 +0200" -->
<!-- isosent="20120730134139" -->
<!-- name="Daniel Junglas" -->
<!-- email="daniel.junglas_at_[hidden]" -->
<!-- subject="[OMPI users] setsockopt() fails with EINVAL on solaris" -->
<!-- id="OF8A12815A.D852EBAF-ONC1257A4B.004A1753-C1257A4B.004B4B83_at_de.ibm.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] setsockopt() fails with EINVAL on solaris<br>
<strong>From:</strong> Daniel Junglas (<em>daniel.junglas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-30 09:41:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19867.php">TERRY DONTJE: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<li><strong>Previous message:</strong> <a href="19865.php">TERRY DONTJE: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19867.php">TERRY DONTJE: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<li><strong>Reply:</strong> <a href="19867.php">TERRY DONTJE: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I compiled OpenMPI 1.6 on a 64bit Solaris ultrasparc machine.
<br>
Compilation and installation worked without a problem. However,
<br>
when trying to run an application with mpirun I always faced
<br>
this error:
<br>
<p>[hostname:14798] [[50433,0],0] rmcast:init: setsockopt() failed on 
<br>
MULTICAST_IF
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for multicast network xxx.xxx.xxx.xxx interface xxx.xxx.xxx.xxx
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: Invalid argument (22)
<br>
[hostname:14798] [[50433,0],0] ORTE_ERROR_LOG: Error in file 
<br>
../../../../../openmpi-1.6/orte/mca/rmcast/udp/rmcast_udp.c at line 825
<br>
[hostname:14798] [[50433,0],0] ORTE_ERROR_LOG: Error in file 
<br>
../../../../../openmpi-1.6/orte/mca/rmcast/udp/rmcast_udp.c at line 744
<br>
[hostname:14798] [[50433,0],0] ORTE_ERROR_LOG: Error in file 
<br>
../../../../../openmpi-1.6/orte/mca/rmcast/udp/rmcast_udp.c at line 193
<br>
[hostname:14798] [[50433,0],0] ORTE_ERROR_LOG: Error in file 
<br>
../../../../openmpi-1.6/orte/mca/rmcast/base/rmcast_base_select.c at line 
<br>
56
<br>
[hostname:14798] [[50433,0],0] ORTE_ERROR_LOG: Error in file 
<br>
../../../../../openmpi-1.6/orte/mca/ess/hnp/ess_hnp_module.c at line 233
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_rmcast_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
<p><p>After some digging I found that the following patch seems to fix the
<br>
problem (at least the application seems to run correct now):
<br>
--- a/orte/mca/rmcast/udp/rmcast_udp.c  Tue Apr  3 16:30:29 2012
<br>
+++ b/orte/mca/rmcast/udp/rmcast_udp.c  Mon Jul 30 15:12:02 2012
<br>
@@ -936,9 +936,16 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* on the xmit side, need to set the interface */
<br>
+        void const *addrptr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memset(&amp;inaddr, 0, sizeof(inaddr));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inaddr.sin_addr.s_addr = htonl(chan-&gt;interface);
<br>
+#ifdef __sun
<br>
+        addrlen = sizeof(inaddr.sin_addr);
<br>
+        addrptr = (void *)&amp;inaddr.sin_addr;
<br>
+#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;addrlen = sizeof(struct sockaddr_in);
<br>
+        addrptr = (void *)&amp;inaddr;
<br>
+#endif
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_OUTPUT_VERBOSE((2, orte_rmcast_base.rmcast_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;setup:socket:xmit interface 
<br>
%03d.%03d.%03d.%03d&quot;,
<br>
@@ -945,7 +952,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_IF_FORMAT_ADDR(chan-&gt;interface)));
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ((setsockopt(target_sd, IPPROTO_IP, IP_MULTICAST_IF, 
<br>
-                        (void *)&amp;inaddr, addrlen)) &lt; 0) {
<br>
+                        addrptr, addrlen)) &lt; 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_output(0, &quot;%s rmcast:init: setsockopt() failed on 
<br>
MULTICAST_IF\n&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;\tfor multicast network %03d.%03d.%03d.%03d 
<br>
interface %03d.%03d.%03d.%03d\n\tError: %s (%d)&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
<br>
Can anybody confirm that the patch is good/correct? In particular
<br>
that the '__sun' part is the right thing to do?
<br>
<p>Thanks,
<br>
<p>Daniel
<br>
<p>
<br><p>
<p><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19866/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19867.php">TERRY DONTJE: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<li><strong>Previous message:</strong> <a href="19865.php">TERRY DONTJE: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19867.php">TERRY DONTJE: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<li><strong>Reply:</strong> <a href="19867.php">TERRY DONTJE: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
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
