<?
$subject_val = "Re: [OMPI devel] CM PML / OpenSHMEM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 29 13:57:42 2013" -->
<!-- isoreceived="20131029175742" -->
<!-- sent="Tue, 29 Oct 2013 10:57:34 -0700" -->
<!-- isosent="20131029175734" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] CM PML / OpenSHMEM" -->
<!-- id="6ADD7D42-5BD9-4021-B77A-9F5EB5FAC3AD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8EDEBDDE2C39D447A738659597BBB63A37DDC63E_at_MTIDAG01.mtl.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] CM PML / OpenSHMEM<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-29 13:57:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13166.php">Joshua Ladd: "Re: [OMPI devel] CM PML / OpenSHMEM"</a>
<li><strong>Previous message:</strong> <a href="13164.php">Joshua Ladd: "Re: [OMPI devel] CM PML / OpenSHMEM"</a>
<li><strong>In reply to:</strong> <a href="13164.php">Joshua Ladd: "Re: [OMPI devel] CM PML / OpenSHMEM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13166.php">Joshua Ladd: "Re: [OMPI devel] CM PML / OpenSHMEM"</a>
<li><strong>Reply:</strong> <a href="13166.php">Joshua Ladd: "Re: [OMPI devel] CM PML / OpenSHMEM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did that time get finalized? I recall the doodle, but not seeing a final decision
<br>
<p>On Oct 29, 2013, at 10:53 AM, Joshua Ladd &lt;joshual_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; These (and others) are exactly the issues we need to discuss with you guys next week. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, October 29, 2013 1:29 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] CM PML / OpenSHMEM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the issue that may have caused this was the need for a double modex if the MPI layer selected a PML that used an MTL, and then the user provided oshmem MCA params specifying they use the BTL-related SPML component. My guess is that the defaults wound up creating that situation, which then led to the clean abort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Probably just a question of correctly setting defaults in the CM scenario.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 29, 2013, at 10:02 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox -
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It looks like someone fixed the segfault when calling start_pes() when 
</span><br>
<span class="quotelev2">&gt;&gt; the CM PML is in use.  However, I'm not sure that a clean abort is 
</span><br>
<span class="quotelev2">&gt;&gt; much better.  With the proc tags code (in both the trunk and v1.7), 
</span><br>
<span class="quotelev2">&gt;&gt; there's no reason that you can't initialize both the btls and mtls.  
</span><br>
<span class="quotelev2">&gt;&gt; This may require some additional coding, but I think it should be 
</span><br>
<span class="quotelev2">&gt;&gt; doable.  I'm happy to help with advice / discuss implementation 
</span><br>
<span class="quotelev2">&gt;&gt; issues, but not supporting OpenSHMEM when the CM PML is in use is 
</span><br>
<span class="quotelev2">&gt;&gt; unacceptable and is, in my mind, a blocker for v1.7.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt; Scalable System Software Group
</span><br>
<span class="quotelev2">&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="13166.php">Joshua Ladd: "Re: [OMPI devel] CM PML / OpenSHMEM"</a>
<li><strong>Previous message:</strong> <a href="13164.php">Joshua Ladd: "Re: [OMPI devel] CM PML / OpenSHMEM"</a>
<li><strong>In reply to:</strong> <a href="13164.php">Joshua Ladd: "Re: [OMPI devel] CM PML / OpenSHMEM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13166.php">Joshua Ladd: "Re: [OMPI devel] CM PML / OpenSHMEM"</a>
<li><strong>Reply:</strong> <a href="13166.php">Joshua Ladd: "Re: [OMPI devel] CM PML / OpenSHMEM"</a>
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
