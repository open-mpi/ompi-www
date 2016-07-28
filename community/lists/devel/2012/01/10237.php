<?
$subject_val = "Re: [OMPI devel] Violating standard in MPI_Close_port";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 20 08:14:26 2012" -->
<!-- isoreceived="20120120131426" -->
<!-- sent="Fri, 20 Jan 2012 06:14:17 -0700" -->
<!-- isosent="20120120131417" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Violating standard in MPI_Close_port" -->
<!-- id="A483BA16-6534-4E07-AFF6-D0641098113D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F192593.3030305_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Violating standard in MPI_Close_port<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-20 08:14:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10238.php">Ralph Castain: "Re: [OMPI devel] Launch windows nodes from linux"</a>
<li><strong>Previous message:</strong> <a href="10236.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
<li><strong>In reply to:</strong> <a href="10235.php">Y.MATSUMOTO: "[OMPI devel] Violating standard in MPI_Close_port"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No reason for doing so comes to mind - I suspect the original author probably started out doing a &quot;free&quot;, then discovered that the overlying MPI code was passing in an array and so just converted it to a memset. Either way, it really should be the responsibility of the user's code to deal with the  memory.
<br>
<p>I'll remove it. Thanks for pointing it out!
<br>
<p>On Jan 20, 2012, at 1:28 AM, Y.MATSUMOTO wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Next is question about &quot;MPI_Close_port&quot;.
</span><br>
<span class="quotelev1">&gt; According to the MPI-2.2 standard, 
</span><br>
<span class="quotelev1">&gt; the &quot;port_name&quot; argument of
</span><br>
<span class="quotelev1">&gt; MPI_Close_port() is marked as 'IN'.
</span><br>
<span class="quotelev1">&gt; But, in Open MPI (both trunk and 1.4.x), the content of
</span><br>
<span class="quotelev1">&gt; &quot;port_name&quot; is updated in MPI_Close_port().
</span><br>
<span class="quotelev1">&gt; It seems to violate the MPI standard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following is the suspicious part.
</span><br>
<span class="quotelev1">&gt; ---ompi/mca/dpm/orte/dpm_orte.c---
</span><br>
<span class="quotelev1">&gt;    919 static int close_port(char *port_name)
</span><br>
<span class="quotelev1">&gt;    920 {
</span><br>
<span class="quotelev1">&gt;    921     /* the port name is a pointer to an array - DO NOT FREE IT! */
</span><br>
<span class="quotelev1">&gt;    922     memset(port_name, 0, MPI_MAX_PORT_NAME);
</span><br>
<span class="quotelev1">&gt;    923     return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;    924 }
</span><br>
<span class="quotelev1">&gt; ---ompi/mca/dpm/orte/dpm_orte.c---
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This memset makes &quot;port_name&quot; &quot;INOUT&quot;.
</span><br>
<span class="quotelev1">&gt; Would you tell me why call this memset?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Yuki MATSUMOTO
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10238.php">Ralph Castain: "Re: [OMPI devel] Launch windows nodes from linux"</a>
<li><strong>Previous message:</strong> <a href="10236.php">TERRY DONTJE: "Re: [OMPI devel] 1.4.5rc2 now released"</a>
<li><strong>In reply to:</strong> <a href="10235.php">Y.MATSUMOTO: "[OMPI devel] Violating standard in MPI_Close_port"</a>
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
