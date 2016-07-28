<?
$subject_val = "Re: [OMPI devel] Changes: opal_output and opal_show_help";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  9 18:37:26 2008" -->
<!-- isoreceived="20080509223726" -->
<!-- sent="Fri, 9 May 2008 18:37:12 -0400" -->
<!-- isosent="20080509223712" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Changes: opal_output and opal_show_help" -->
<!-- id="1A301B6A-0260-4E84-ACF2-257C468D0D19_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DFC91EB9-4E9D-40BC-BD71-D83471857392_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Changes: opal_output and opal_show_help<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-09 18:37:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3884.php">Josh Hursey: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Previous message:</strong> <a href="3882.php">Jeff Squyres: "[OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>In reply to:</strong> <a href="3882.php">Jeff Squyres: "[OMPI devel] Changes: opal_output and opal_show_help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3886.php">Jeff Squyres: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Reply:</strong> <a href="3886.php">Jeff Squyres: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I do have some questions about this.
<br>
<p>1) If I correctly understood, we need the orte_output and  
<br>
orte_show_help in order to be able to make a difference between the  
<br>
application stdout/stderr and the MPI library ones ? Who is applying  
<br>
the filter ? The local daemon or the HNP ? How do we make sure that  
<br>
the remote outputs are not interlaced ?
<br>
<p>2) Who is really generating the error message ? In your item #2 I  
<br>
wonder how do you make the difference between what need to be printed  
<br>
once (such as the PML initialization error) and what is supposed to be  
<br>
printed multiple times (such as BTL TCP connection failure) ? If the  
<br>
HPN is managing these error messages, this will force us to always  
<br>
install all error files, otherwise this approach cannot work on an  
<br>
heterogeneous environment (such as the local installation doesn't have  
<br>
infiniband support but the remote one include it).
<br>
<p>3) What is the OMPI layer supposed to use ? opal_output ?  
<br>
orte_output ? or maybe ompi_output ?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 9, 2008, at 5:52 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Per the teleconf this week, Ralph and I worked up two new features
</span><br>
<span class="quotelev1">&gt; that we're nearly ready to put back in the trunk:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. IBM+LANL needed a way to XML-ize all output that comes out of OMPI
</span><br>
<span class="quotelev1">&gt; so that 3rd party tools can parse and use it intelligently (e.g., the
</span><br>
<span class="quotelev1">&gt; PTP debugger can now distinguish between OMPI error messages and
</span><br>
<span class="quotelev1">&gt; stderr from the MPI app).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. In order to do #1, we created separate logical channels (vs, just
</span><br>
<span class="quotelev1">&gt; throwing everything in stderr and letting IOF relay it back to the
</span><br>
<span class="quotelev1">&gt; HNP) for the following:
</span><br>
<span class="quotelev1">&gt;    - stdout/stderr from the MPI app
</span><br>
<span class="quotelev1">&gt;    - opal_show_help() messages (***)
</span><br>
<span class="quotelev1">&gt;    - opal_output*() messages (***)
</span><br>
<span class="quotelev1">&gt; As a side effect, we now filter show_help() messages and only print
</span><br>
<span class="quotelev1">&gt; them *once* at the HNP (this has been a very long-standing goal of
</span><br>
<span class="quotelev1">&gt; mine).  So if your MPI app barfs, you will no longer see the same
</span><br>
<span class="quotelev1">&gt; show_help() error message N times -- you'll see it only once, possibly
</span><br>
<span class="quotelev1">&gt; accompanied with a &quot;...and we got the same error message from N other
</span><br>
<span class="quotelev1">&gt; processes&quot; notice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (***) To make both #1 and #2 work, we had to raise the abstraction
</span><br>
<span class="quotelev1">&gt; level.  That is, there had to be job-level intelligence about the
</span><br>
<span class="quotelev1">&gt; different kinds of output.  So we have created orte_output() (and
</span><br>
<span class="quotelev1">&gt; friends) and orte_show_help().  The OPAL variants still exist, but
</span><br>
<span class="quotelev1">&gt; they *SHOULD NOT BE USED* by the MPI layer.  Specifically, the OPAL
</span><br>
<span class="quotelev1">&gt; variants are for what OPAL does best: single process stuff.  The ORTE
</span><br>
<span class="quotelev1">&gt; variants provide the job-level intelligence, such as duplicate
</span><br>
<span class="quotelev1">&gt; show_help filtering, relaying to the HNP in a different channel than
</span><br>
<span class="quotelev1">&gt; IOF, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So when this stuff hits the trunk, you'll see a ton of s/opal_output/
</span><br>
<span class="quotelev1">&gt; orte_output/g and /opal_show_help/orte_show_help/g changes throughout
</span><br>
<span class="quotelev1">&gt; the code base.  Do not be alarmed.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3883/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3884.php">Josh Hursey: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Previous message:</strong> <a href="3882.php">Jeff Squyres: "[OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>In reply to:</strong> <a href="3882.php">Jeff Squyres: "[OMPI devel] Changes: opal_output and opal_show_help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3886.php">Jeff Squyres: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Reply:</strong> <a href="3886.php">Jeff Squyres: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
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
