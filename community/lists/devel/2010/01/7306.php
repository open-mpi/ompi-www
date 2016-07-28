<?
$subject_val = "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 17:26:51 2010" -->
<!-- isoreceived="20100111222651" -->
<!-- sent="Mon, 11 Jan 2010 17:26:47 -0500" -->
<!-- isosent="20100111222647" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again" -->
<!-- id="3DCC564C-C67E-4B17-A809-A60C8CD919BC_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EF81046B-3F85-4ED2-9F92-83D0F1EDFB61_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-11 17:26:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7307.php">Sai Sudheesh: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>Previous message:</strong> <a href="7305.php">Jeff Squyres: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<li><strong>In reply to:</strong> <a href="7305.php">Jeff Squyres: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The ft_event() function that you mentioned is part of the larger fault  
<br>
tolerance infrastructure in Open MPI. You need to make sure to enable  
<br>
it before using (if it is not enabled many of the ft_event functions  
<br>
default to NULL). Add '--with-ft=cr' to your ./configure line and that  
<br>
will enable the FT infrastructure.
<br>
<p>As Jeff mentioned you might be able to use the Checkpoint/Restart  
<br>
Coordination Protocol (CRCP) framework [located in ompi/mca/crcp] to  
<br>
halt messaging. It works as a wrapper around the PML, so you are  
<br>
operating on whole MPI messages, not fragments as in the BTLs below.  
<br>
But it might be another option to consider.
<br>
<p>-- Josh
<br>
<p>On Jan 11, 2010, at 5:08 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Additionally, I believe that the FT system already does something  
</span><br>
<span class="quotelev1">&gt; like what you describe (although perhaps not exactly the same thing)  
</span><br>
<span class="quotelev1">&gt; -- there is a phase where the FT system pauses and quiesces all BTLs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you look at that part of the code, perchance, and see if it  
</span><br>
<span class="quotelev1">&gt; meets your needs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 11, 2010, at 3:53 PM, Christoph Konersmann wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot for your help! I will give it a try.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Christoph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain schrieb:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You've got this a tad wrong, but that's okay - let me try to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; clarify a couple of things that may help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; First, you don't want to add this as a separate orted command. As  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you noted, orte has no direct way to tell the OMPI layer to do  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anything. Instead, you want to pass a message to the process that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is received in the OMPI layer. That is easy to do.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. add a message tag in ompi/mca/dpm/dpm.h - perhaps something  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like OMPI_RML_TAG_BTL_CTL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. in the btl, add a call to orte_rml.recv_nb() that identifies  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the above tag and specifies a callback function to use when such a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message arrives
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. in that callback function, toggle your &quot;paused&quot; flag - or you  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can unpack the buffer to get a flag telling you what value to set.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your choice.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now, when you want to pause the BTL, you do an  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_grpcomm.xcast() to the above message tag. ORTE will deliver  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that message to every process, which will then have its callback  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function called.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paderborn Center for Parallel Computing - PC2
</span><br>
<span class="quotelev2">&gt;&gt; University of Paderborn - Germany
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.pc2.de">http://www.pc2.de</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Christoph Konersmann &lt;c_k_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="7307.php">Sai Sudheesh: "Re: [OMPI devel] How can I achieve node fail over"</a>
<li><strong>Previous message:</strong> <a href="7305.php">Jeff Squyres: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<li><strong>In reply to:</strong> <a href="7305.php">Jeff Squyres: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
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
