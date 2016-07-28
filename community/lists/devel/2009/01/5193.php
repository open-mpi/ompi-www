<?
$subject_val = "Re: [OMPI devel] crcpw verbosity";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 13:13:35 2009" -->
<!-- isoreceived="20090114181335" -->
<!-- sent="Wed, 14 Jan 2009 13:13:33 -0500" -->
<!-- isosent="20090114181333" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] crcpw verbosity" -->
<!-- id="086945EA-C6B3-4ED7-AA74-CA539D0D83D2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4226a8f0901140954n1f266309y90c729b9abc3ed58_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] crcpw verbosity<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-14 13:13:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5194.php">Brad Benton: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Previous message:</strong> <a href="5192.php">Eugene Loh: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>In reply to:</strong> <a href="5185.php">Caciano Machado: "[OMPI devel] crcpw verbosity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The crcpw component is in the PML framework. The following should be  
<br>
the MCA parameter you are looking for:
<br>
pml_crcpw_verbose=20
<br>
<p>You can use the 'ompi_info' command to find out more information about  
<br>
MCA parameters available. For example to find this one you can use the  
<br>
following:
<br>
&nbsp;&nbsp;&nbsp;ompi_info --param pml crcpw
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Jan 14, 2009, at 12:54 PM, Caciano Machado wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What variable should I set to increase the verbosity of crcpw  
</span><br>
<span class="quotelev1">&gt; component?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried &quot;ompi_crcpw_verbose=20&quot; and &quot;crcpw_base_verbose=20&quot;. How
</span><br>
<span class="quotelev1">&gt; can I figure out the name of the variable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Caciano
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
<li><strong>Next message:</strong> <a href="5194.php">Brad Benton: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Previous message:</strong> <a href="5192.php">Eugene Loh: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>In reply to:</strong> <a href="5185.php">Caciano Machado: "[OMPI devel] crcpw verbosity"</a>
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
