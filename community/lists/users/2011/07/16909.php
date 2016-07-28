<?
$subject_val = "Re: [OMPI users] How to use a wrapper for ssh?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 13 04:35:57 2011" -->
<!-- isoreceived="20110713083557" -->
<!-- sent="Wed, 13 Jul 2011 10:35:53 +0200" -->
<!-- isosent="20110713083553" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to use a wrapper for ssh?" -->
<!-- id="4E1D58E9.2050300_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0C1BAB2C-F727-4127-8A3C-090226C8466F_at_open-mpi.org" -->
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
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-13 04:35:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16910.php">Jeff Squyres: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<li><strong>Previous message:</strong> <a href="16908.php">Ralph Castain: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<li><strong>In reply to:</strong> <a href="16908.php">Ralph Castain: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16910.php">Jeff Squyres: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<li><strong>Reply:</strong> <a href="16910.php">Jeff Squyres: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<span class="quotelev2">&gt;&gt; 2. use MCA parameters described in
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=rsh#rsh-not-ssh">http://www.open-mpi.org/faq/?category=rsh#rsh-not-ssh</a>
</span><br>
<span class="quotelev2">&gt;&gt; to bend the call to my wrapper, e.g.
</span><br>
<span class="quotelev2">&gt;&gt; export OMPI_MCA_plm_rsh_agent=WrapPer
</span><br>
<span class="quotelev2">&gt;&gt; export OMPI_MCA_orte_rsh_agent=WrapPer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the oddly thing is, that the OMPI_MCA_orte_rsh_agent envvar seem not to have any effect, whereas OMPI_MCA_plm_rsh_agent works.
</span><br>
<span class="quotelev2">&gt;&gt; Why I believe so?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orte_rsh_agent doesn't exist in the 1.4 series :-)
</span><br>
<span class="quotelev1">&gt; Only plm_rsh_agent is available in 1.4. &quot;ompi_info --param orte all&quot; and &quot;ompi_info --param plm rsh&quot; will confirm that fact.
</span><br>
<p>If so, then the Wiki is not correct. Maybe someone can correct it? This 
<br>
would save some time for people like me...
<br>
<p>Best wishes
<br>
Paul Kapinos
<br>
<p><p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16909/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16910.php">Jeff Squyres: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<li><strong>Previous message:</strong> <a href="16908.php">Ralph Castain: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<li><strong>In reply to:</strong> <a href="16908.php">Ralph Castain: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16910.php">Jeff Squyres: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
<li><strong>Reply:</strong> <a href="16910.php">Jeff Squyres: "Re: [OMPI users] How to use a wrapper for ssh?"</a>
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
