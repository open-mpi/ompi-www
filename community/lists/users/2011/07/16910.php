<?
$subject_val = "Re: [OMPI users] How to use a wrapper for ssh?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 13 08:13:58 2011" -->
<!-- isoreceived="20110713121358" -->
<!-- sent="Wed, 13 Jul 2011 08:13:49 -0400" -->
<!-- isosent="20110713121349" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to use a wrapper for ssh?" -->
<!-- id="5751DAFC-A7A3-4558-A6AF-F5FC925012FB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E1D58E9.2050300_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to use a wrapper for ssh?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-13 08:13:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16911.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16909.php">Paul Kapinos: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<li><strong>In reply to:</strong> <a href="16909.php">Paul Kapinos: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I guess it looks like <a href="http://www.open-mpi.org/faq/?category=rsh#rsh-not-ssh">http://www.open-mpi.org/faq/?category=rsh#rsh-not-ssh</a> is a little out of date.
<br>
<p>Thanks for the heads-up...
<br>
<p><p><p>On Jul 13, 2011, at 4:35 AM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. use MCA parameters described in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=rsh#rsh-not-ssh">http://www.open-mpi.org/faq/?category=rsh#rsh-not-ssh</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to bend the call to my wrapper, e.g.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export OMPI_MCA_plm_rsh_agent=WrapPer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export OMPI_MCA_orte_rsh_agent=WrapPer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the oddly thing is, that the OMPI_MCA_orte_rsh_agent envvar seem not to have any effect, whereas OMPI_MCA_plm_rsh_agent works.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Why I believe so?
</span><br>
<span class="quotelev2">&gt;&gt; orte_rsh_agent doesn't exist in the 1.4 series :-)
</span><br>
<span class="quotelev2">&gt;&gt; Only plm_rsh_agent is available in 1.4. &quot;ompi_info --param orte all&quot; and &quot;ompi_info --param plm rsh&quot; will confirm that fact.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, then the Wiki is not correct. Maybe someone can correct it? This would save some time for people like me...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best wishes
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16911.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16909.php">Paul Kapinos: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<li><strong>In reply to:</strong> <a href="16909.php">Paul Kapinos: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
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
