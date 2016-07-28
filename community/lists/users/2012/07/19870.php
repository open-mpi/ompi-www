<?
$subject_val = "Re: [OMPI users] setsockopt() fails with EINVAL on solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 30 10:25:13 2012" -->
<!-- isoreceived="20120730142513" -->
<!-- sent="Mon, 30 Jul 2012 16:24:57 +0200" -->
<!-- isosent="20120730142457" -->
<!-- name="Daniel Junglas" -->
<!-- email="daniel.junglas_at_[hidden]" -->
<!-- subject="Re: [OMPI users] setsockopt() fails with EINVAL on solaris" -->
<!-- id="OFB617473A.44EF5D32-ONC1257A4B.004F1E05-C1257A4B.004F423F_at_de.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="50169711.5090708_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] setsockopt() fails with EINVAL on solaris<br>
<strong>From:</strong> Daniel Junglas (<em>daniel.junglas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-30 10:24:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19871.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Previous message:</strong> <a href="19869.php">Ralph Castain: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<li><strong>In reply to:</strong> <a href="19867.php">TERRY DONTJE: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I built from a tarball, not svn. In the VERSION file I have
<br>
&nbsp;&nbsp;svn_r=r26429
<br>
Is that the information you asked for?
<br>
<p>Daniel
<br>
<p>users-bounces_at_[hidden] wrote on 07/30/2012 04:15:45 PM:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you know what r# of 1.6 you were trying to compile?  Is this via 
</span><br>
<span class="quotelev1">&gt; the tarball or svn?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/30/2012 9:41 AM, Daniel Junglas wrote: 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compiled OpenMPI 1.6 on a 64bit Solaris ultrasparc machine.
</span><br>
<span class="quotelev1">&gt; Compilation and installation worked without a problem. However,
</span><br>
<span class="quotelev1">&gt; when trying to run an application with mpirun I always faced
</span><br>
<span class="quotelev1">&gt; this error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [hostname:14798] [[50433,0],0] rmcast:init: setsockopt() failed on 
</span><br>
<span class="quotelev1">&gt; MULTICAST_IF
</span><br>
<span class="quotelev1">&gt;         for multicast network xxx.xxx.xxx.xxx interface xxx.xxx.xxx.xxx
</span><br>
<span class="quotelev1">&gt;         Error: Invalid argument (22)
</span><br>
<span class="quotelev1">&gt; [hostname:14798] [[50433,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6/orte/mca/rmcast/udp/rmcast_udp.c at line 825
</span><br>
<span class="quotelev1">&gt; [hostname:14798] [[50433,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6/orte/mca/rmcast/udp/rmcast_udp.c at line 744
</span><br>
<span class="quotelev1">&gt; [hostname:14798] [[50433,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6/orte/mca/rmcast/udp/rmcast_udp.c at line 193
</span><br>
<span class="quotelev1">&gt; [hostname:14798] [[50433,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.6/orte/mca/rmcast/base/rmcast_base_select.c at 
</span><br>
line 
<br>
<span class="quotelev1">&gt; 56
</span><br>
<span class="quotelev1">&gt; [hostname:14798] [[50433,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6/orte/mca/ess/hnp/ess_hnp_module.c at line 233
</span><br>
<span class="quotelev1">&gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   orte_rmcast_base_select failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After some digging I found that the following patch seems to fix the
</span><br>
<span class="quotelev1">&gt; problem (at least the application seems to run correct now):
</span><br>
<span class="quotelev1">&gt; --- a/orte/mca/rmcast/udp/rmcast_udp.c  Tue Apr  3 16:30:29 2012
</span><br>
<span class="quotelev1">&gt; +++ b/orte/mca/rmcast/udp/rmcast_udp.c  Mon Jul 30 15:12:02 2012
</span><br>
<span class="quotelev1">&gt; @@ -936,9 +936,16 @@
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;          /* on the xmit side, need to set the interface */
</span><br>
<span class="quotelev1">&gt; +        void const *addrptr;
</span><br>
<span class="quotelev1">&gt;          memset(&amp;inaddr, 0, sizeof(inaddr));
</span><br>
<span class="quotelev1">&gt;          inaddr.sin_addr.s_addr = htonl(chan-&gt;interface);
</span><br>
<span class="quotelev1">&gt; +#ifdef __sun
</span><br>
<span class="quotelev1">&gt; +        addrlen = sizeof(inaddr.sin_addr);
</span><br>
<span class="quotelev1">&gt; +        addrptr = (void *)&amp;inaddr.sin_addr;
</span><br>
<span class="quotelev1">&gt; +#else
</span><br>
<span class="quotelev1">&gt;          addrlen = sizeof(struct sockaddr_in);
</span><br>
<span class="quotelev1">&gt; +        addrptr = (void *)&amp;inaddr;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          OPAL_OUTPUT_VERBOSE((2, orte_rmcast_base.rmcast_output,
</span><br>
<span class="quotelev1">&gt;                               &quot;setup:socket:xmit interface 
</span><br>
<span class="quotelev1">&gt; %03d.%03d.%03d.%03d&quot;,
</span><br>
<span class="quotelev1">&gt; @@ -945,7 +952,7 @@
</span><br>
<span class="quotelev1">&gt;                               OPAL_IF_FORMAT_ADDR(chan-&gt;interface)));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          if ((setsockopt(target_sd, IPPROTO_IP, IP_MULTICAST_IF, 
</span><br>
<span class="quotelev1">&gt; -                        (void *)&amp;inaddr, addrlen)) &lt; 0) {
</span><br>
<span class="quotelev1">&gt; +                        addrptr, addrlen)) &lt; 0) {
</span><br>
<span class="quotelev1">&gt;              opal_output(0, &quot;%s rmcast:init: setsockopt() failed on 
</span><br>
<span class="quotelev1">&gt; MULTICAST_IF\n&quot;
</span><br>
<span class="quotelev1">&gt;                          &quot;\tfor multicast network %03d.%03d.%03d.%03d 
</span><br>
<span class="quotelev1">&gt; interface %03d.%03d.%03d.%03d\n\tError: %s (%d)&quot;,
</span><br>
<span class="quotelev1">&gt;                          ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev1">&gt; Can anybody confirm that the patch is good/correct? In particular
</span><br>
<span class="quotelev1">&gt; that the '__sun' part is the right thing to do?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Daniel
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>
<br><p>
<p><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19870/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19871.php">Pawe³ Jaromin: "Re: [OMPI users] sndlib problem by mpicc compiler"</a>
<li><strong>Previous message:</strong> <a href="19869.php">Ralph Castain: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<li><strong>In reply to:</strong> <a href="19867.php">TERRY DONTJE: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
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
