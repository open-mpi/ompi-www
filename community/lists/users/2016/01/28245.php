<?
$subject_val = "Re: [OMPI users] Global settings";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 09:47:30 2016" -->
<!-- isoreceived="20160111144730" -->
<!-- sent="Mon, 11 Jan 2016 14:47:28 +0000" -->
<!-- isosent="20160111144728" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Global settings" -->
<!-- id="825393CA-1326-42D3-9FCC-FB5C473D80D5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAB2ovotMqDWRg=Y1+OycYYVKbOVS4z70yE5x0W7pEDjNiwZ7Lg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Global settings<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-11 09:47:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28246.php">Bennet Fauber: "Re: [OMPI users] Global settings"</a>
<li><strong>Previous message:</strong> <a href="28244.php">Ralph Castain: "Re: [OMPI users] Global settings"</a>
<li><strong>In reply to:</strong> <a href="28243.php">Bennet Fauber: "[OMPI users] Global settings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 11, 2016, at 8:32 AM, Bennet Fauber &lt;bennet_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have an issue with binding to cores with some applications and the
</span><br>
<span class="quotelev1">&gt; default causes issues.  We would, therefore, like to set the
</span><br>
<span class="quotelev1">&gt; equivalent of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --bind-to none
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; globally.  I tried search for combinations of 'openmpi global
</span><br>
<span class="quotelev1">&gt; settings', 'site settings', and the like on the web and ended up
</span><br>
<span class="quotelev1">&gt; several times at
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/faq/?category=sysadmin#sysadmin-mca-params">https://www.open-mpi.org/faq/?category=sysadmin#sysadmin-mca-params</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That makes it look very much like MCA parameters are for network
</span><br>
<span class="quotelev1">&gt; settings; see, specifically, section 4. What are MCA Parameters? Why
</span><br>
<span class="quotelev1">&gt; would I set them?
</span><br>
<p>To add on to what Ralph said, perhaps we should update this FAQ entry a bit: setting MCA parameters applies to *any* MCA parameters -- not just the network-centric ones.
<br>
<p>I.e., any param you can set on the mpirun command line via --mca, you can also set via environment variable and/or file setting (there's one or two notable exceptions to this rule, but they're corner case / way off in the weeds kinds of parameters that can *only* be read via environment variable, because they must be read before main() starts -- you probably don't care about these).
<br>
<p>Additionally, some mpirun command line parameters (like --bind-to and friends) are simply synonyms for MCA parameters.  We did this simply because while (most?) users find --friendly-option easier to set than an MCA parameter name, we wanted to give the flexibility to sysadmins to be able to set them on a global basis (e.g., exactly the use case you are asking about).
<br>
<p><span class="quotelev1">&gt; [snip]
</span><br>
<p><span class="quotelev1">&gt; The web version of the man page is for 1.8.8, and it agrees with the
</span><br>
<span class="quotelev1">&gt; installed man page for our 1.8.7.  However, it appears that our system
</span><br>
<span class="quotelev1">&gt; man page for mpirun(1) for OpenMPI 1.8.2 has slightly different
</span><br>
<span class="quotelev1">&gt; parameters.  Specifically,
</span><br>
<p>To +1 on what Ralph said: I believe we changed our back-end process affinity system starting in the v1.7 series somewhere, and also changed the mpirun command line options (e.g., from --bycore/--bysocket to --map-to, ...and friends).  I think we forgot to update mpirun(1) by v1.8.2, but eventually updated it &lt;= v1.8.8.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28246.php">Bennet Fauber: "Re: [OMPI users] Global settings"</a>
<li><strong>Previous message:</strong> <a href="28244.php">Ralph Castain: "Re: [OMPI users] Global settings"</a>
<li><strong>In reply to:</strong> <a href="28243.php">Bennet Fauber: "[OMPI users] Global settings"</a>
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
