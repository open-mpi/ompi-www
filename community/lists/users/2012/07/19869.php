<?
$subject_val = "Re: [OMPI users] setsockopt() fails with EINVAL on solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 30 10:21:20 2012" -->
<!-- isoreceived="20120730142120" -->
<!-- sent="Mon, 30 Jul 2012 07:21:13 -0700" -->
<!-- isosent="20120730142113" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] setsockopt() fails with EINVAL on solaris" -->
<!-- id="AC029AA4-9206-4E37-B774-15893E2D5E2F_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-30 10:21:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19870.php">Daniel Junglas: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<li><strong>Previous message:</strong> <a href="19868.php">Jeff Squyres: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<li><strong>In reply to:</strong> <a href="19867.php">TERRY DONTJE: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19874.php">Daniel Junglas: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<li><strong>Reply:</strong> <a href="19874.php">Daniel Junglas: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: the rmcast framework shouldn't be in 1.6. Jeff and I are testing removal and should have it out of there soon.
<br>
<p>Meantime, the best solution is to &quot;--enable-mca-no-build rmcast&quot;
<br>
<p>On Jul 30, 2012, at 7:15 AM, TERRY DONTJE wrote:
<br>
<p><span class="quotelev1">&gt; Do you know what r# of 1.6 you were trying to compile?  Is this via the tarball or svn?
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I compiled OpenMPI 1.6 on a 64bit Solaris ultrasparc machine.
</span><br>
<span class="quotelev2">&gt;&gt; Compilation and installation worked without a problem. However,
</span><br>
<span class="quotelev2">&gt;&gt; when trying to run an application with mpirun I always faced
</span><br>
<span class="quotelev2">&gt;&gt; this error:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [hostname:14798] [[50433,0],0] rmcast:init: setsockopt() failed on 
</span><br>
<span class="quotelev2">&gt;&gt; MULTICAST_IF
</span><br>
<span class="quotelev2">&gt;&gt;         for multicast network xxx.xxx.xxx.xxx interface xxx.xxx.xxx.xxx
</span><br>
<span class="quotelev2">&gt;&gt;         Error: Invalid argument (22)
</span><br>
<span class="quotelev2">&gt;&gt; [hostname:14798] [[50433,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-1.6/orte/mca/rmcast/udp/rmcast_udp.c at line 825
</span><br>
<span class="quotelev2">&gt;&gt; [hostname:14798] [[50433,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-1.6/orte/mca/rmcast/udp/rmcast_udp.c at line 744
</span><br>
<span class="quotelev2">&gt;&gt; [hostname:14798] [[50433,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-1.6/orte/mca/rmcast/udp/rmcast_udp.c at line 193
</span><br>
<span class="quotelev2">&gt;&gt; [hostname:14798] [[50433,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../openmpi-1.6/orte/mca/rmcast/base/rmcast_base_select.c at line 
</span><br>
<span class="quotelev2">&gt;&gt; 56
</span><br>
<span class="quotelev2">&gt;&gt; [hostname:14798] [[50433,0],0] ORTE_ERROR_LOG: Error in file 
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../openmpi-1.6/orte/mca/ess/hnp/ess_hnp_module.c at line 233
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   orte_rmcast_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After some digging I found that the following patch seems to fix the
</span><br>
<span class="quotelev2">&gt;&gt; problem (at least the application seems to run correct now):
</span><br>
<span class="quotelev2">&gt;&gt; --- a/orte/mca/rmcast/udp/rmcast_udp.c  Tue Apr  3 16:30:29 2012
</span><br>
<span class="quotelev2">&gt;&gt; +++ b/orte/mca/rmcast/udp/rmcast_udp.c  Mon Jul 30 15:12:02 2012
</span><br>
<span class="quotelev2">&gt;&gt; @@ -936,9 +936,16 @@
</span><br>
<span class="quotelev2">&gt;&gt;          }
</span><br>
<span class="quotelev2">&gt;&gt;      } else {
</span><br>
<span class="quotelev2">&gt;&gt;          /* on the xmit side, need to set the interface */
</span><br>
<span class="quotelev2">&gt;&gt; +        void const *addrptr;
</span><br>
<span class="quotelev2">&gt;&gt;          memset(&amp;inaddr, 0, sizeof(inaddr));
</span><br>
<span class="quotelev2">&gt;&gt;          inaddr.sin_addr.s_addr = htonl(chan-&gt;interface);
</span><br>
<span class="quotelev2">&gt;&gt; +#ifdef __sun
</span><br>
<span class="quotelev2">&gt;&gt; +        addrlen = sizeof(inaddr.sin_addr);
</span><br>
<span class="quotelev2">&gt;&gt; +        addrptr = (void *)&amp;inaddr.sin_addr;
</span><br>
<span class="quotelev2">&gt;&gt; +#else
</span><br>
<span class="quotelev2">&gt;&gt;          addrlen = sizeof(struct sockaddr_in);
</span><br>
<span class="quotelev2">&gt;&gt; +        addrptr = (void *)&amp;inaddr;
</span><br>
<span class="quotelev2">&gt;&gt; +#endif
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;          OPAL_OUTPUT_VERBOSE((2, orte_rmcast_base.rmcast_output,
</span><br>
<span class="quotelev2">&gt;&gt;                               &quot;setup:socket:xmit interface 
</span><br>
<span class="quotelev2">&gt;&gt; %03d.%03d.%03d.%03d&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -945,7 +952,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;                               OPAL_IF_FORMAT_ADDR(chan-&gt;interface)));
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;          if ((setsockopt(target_sd, IPPROTO_IP, IP_MULTICAST_IF, 
</span><br>
<span class="quotelev2">&gt;&gt; -                        (void *)&amp;inaddr, addrlen)) &lt; 0) {
</span><br>
<span class="quotelev2">&gt;&gt; +                        addrptr, addrlen)) &lt; 0) {
</span><br>
<span class="quotelev2">&gt;&gt;              opal_output(0, &quot;%s rmcast:init: setsockopt() failed on 
</span><br>
<span class="quotelev2">&gt;&gt; MULTICAST_IF\n&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                          &quot;\tfor multicast network %03d.%03d.%03d.%03d 
</span><br>
<span class="quotelev2">&gt;&gt; interface %03d.%03d.%03d.%03d\n\tError: %s (%d)&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                          ORTE_NAME_PRINT(ORTE_PROC_MY_NAME),
</span><br>
<span class="quotelev2">&gt;&gt; Can anybody confirm that the patch is good/correct? In particular
</span><br>
<span class="quotelev2">&gt;&gt; that the '__sun' part is the right thing to do?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Daniel
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19869/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19870.php">Daniel Junglas: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<li><strong>Previous message:</strong> <a href="19868.php">Jeff Squyres: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<li><strong>In reply to:</strong> <a href="19867.php">TERRY DONTJE: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19874.php">Daniel Junglas: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
<li><strong>Reply:</strong> <a href="19874.php">Daniel Junglas: "Re: [OMPI users] setsockopt() fails with EINVAL on solaris"</a>
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
