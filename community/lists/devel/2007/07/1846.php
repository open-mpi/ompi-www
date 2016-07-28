<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 08:07:56 2007" -->
<!-- isoreceived="20070711120756" -->
<!-- sent="Wed, 11 Jul 2007 08:09:15 -0400" -->
<!-- isosent="20070711120915" -->
<!-- name="Terry D. Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Multi-environment builds" -->
<!-- id="4694C86B.5060005_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D18A23D8-EFCD-4B29-8451-D8082608EE2F_at_cisco.com" -->
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
<strong>From:</strong> Terry D. Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-11 08:09:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1847.php">Ralph H Castain: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1845.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>In reply to:</strong> <a href="1845.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1850.php">Joshua Hursey: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1850.php">Joshua Hursey: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;On Jul 10, 2007, at 1:26 PM, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;2. It may be useful to have some high-level parameters to specify a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;specific run-time environment, since ORTE has multiple, related
</span><br>
<span class="quotelev3">&gt;&gt;&gt;frameworks (e.g., RAS and PLS).  E.g., &quot;orte_base_launcher=tm&quot;, or
</span><br>
<span class="quotelev3">&gt;&gt;&gt;somesuch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I was just writing this up in an enhancement ticket when the though  
</span><br>
<span class="quotelev1">&gt;hit me: isn't this aggregate MCA parameters?  I.e.:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;	mpirun --am tm ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Specifically, we'll need to make a &quot;tm&quot; AMCA file (and whatever other  
</span><br>
<span class="quotelev1">&gt;ones we want), but my point is: does AMCA already give us what we want?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
The above sounds like a possible solution as long as we are going to 
<br>
deliver a set of such files and not require each site to create their 
<br>
own.  Also, can one pull in multiple AMCA files for one run thus you can 
<br>
specify a tm AMCA and possibly some other AMCA file that the user may want?
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1847.php">Ralph H Castain: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Previous message:</strong> <a href="1845.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>In reply to:</strong> <a href="1845.php">Jeff Squyres: "Re: [OMPI devel] Multi-environment builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1850.php">Joshua Hursey: "Re: [OMPI devel] Multi-environment builds"</a>
<li><strong>Reply:</strong> <a href="1850.php">Joshua Hursey: "Re: [OMPI devel] Multi-environment builds"</a>
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
