<?
$subject_val = "Re: [OMPI users] minor change request";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 21 09:43:46 2013" -->
<!-- isoreceived="20130521134346" -->
<!-- sent="Tue, 21 May 2013 13:43:41 +0000" -->
<!-- isosent="20130521134341" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] minor change request" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6305DC_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGzRjXZf4cF-YvvZQOgFy+i3pWxh_mnf9tgZVjEbUoHMft3nkQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] minor change request<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-21 09:43:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21938.php">Jeff Squyres (jsquyres): "Re: [OMPI users] minor change request"</a>
<li><strong>Previous message:</strong> <a href="21936.php">Alan Sayre: "[OMPI users] minor change request"</a>
<li><strong>In reply to:</strong> <a href="21936.php">Alan Sayre: "[OMPI users] minor change request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21938.php">Jeff Squyres (jsquyres): "Re: [OMPI users] minor change request"</a>
<li><strong>Reply:</strong> <a href="21938.php">Jeff Squyres (jsquyres): "Re: [OMPI users] minor change request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Committed in <a href="https://svn.open-mpi.org/trac/ompi/changeset/28544">https://svn.open-mpi.org/trac/ompi/changeset/28544</a>; thanks.
<br>
<p>On May 20, 2013, at 9:00 PM, Alan Sayre &lt;ansayre62_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; To quiet VS compile time warnings can the following (very) minor change be made:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; c:\program files
</span><br>
<span class="quotelev1">&gt; (x86)\openmpi_v1.6-x64\include\openmpi/ompi/mpi/cxx/op_inln.h(148):
</span><br>
<span class="quotelev1">&gt; warning C4800: 'int' : forcing value to bool 'true' or 'false'
</span><br>
<span class="quotelev1">&gt; (performance warning)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; inline bool
</span><br>
<span class="quotelev1">&gt; MPI::Op::Is_commutative(void) const
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int commute;
</span><br>
<span class="quotelev1">&gt;    (void)MPI_Op_commutative(mpi_op, &amp;commute);
</span><br>
<span class="quotelev1">&gt;    return (bool) commute;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; inline bool
</span><br>
<span class="quotelev1">&gt; MPI::Op::Is_commutative(void) const
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int commute;
</span><br>
<span class="quotelev1">&gt;    (void)MPI_Op_commutative(mpi_op, &amp;commute);
</span><br>
<span class="quotelev1">&gt;    return (commute != 0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alan
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21938.php">Jeff Squyres (jsquyres): "Re: [OMPI users] minor change request"</a>
<li><strong>Previous message:</strong> <a href="21936.php">Alan Sayre: "[OMPI users] minor change request"</a>
<li><strong>In reply to:</strong> <a href="21936.php">Alan Sayre: "[OMPI users] minor change request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21938.php">Jeff Squyres (jsquyres): "Re: [OMPI users] minor change request"</a>
<li><strong>Reply:</strong> <a href="21938.php">Jeff Squyres (jsquyres): "Re: [OMPI users] minor change request"</a>
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
