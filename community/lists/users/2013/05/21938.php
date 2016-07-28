<?
$subject_val = "Re: [OMPI users] minor change request";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 21 12:10:30 2013" -->
<!-- isoreceived="20130521161030" -->
<!-- sent="Tue, 21 May 2013 16:10:25 +0000" -->
<!-- isosent="20130521161025" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] minor change request" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6311BB_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F6305DC_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-05-21 12:10:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21939.php">Tom Rosmond: "[OMPI users] MPIIO max record size"</a>
<li><strong>Previous message:</strong> <a href="21937.php">Jeff Squyres (jsquyres): "Re: [OMPI users] minor change request"</a>
<li><strong>In reply to:</strong> <a href="21937.php">Jeff Squyres (jsquyres): "Re: [OMPI users] minor change request"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We actually talked about this some more on our weekly teleconf today.  It seems like your compiler is being incorrect here: there is an explicit cast in the code from an int to a bool; it's a way for the developer to tell the compiler &quot;I know what I'm doing&quot;.  
<br>
<p>The compiler is does not seem to be correct here.  Perhaps there's a way you can have the compiler suppress this warning...?
<br>
<p><p><p>On May 21, 2013, at 9:43 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Committed in <a href="https://svn.open-mpi.org/trac/ompi/changeset/28544">https://svn.open-mpi.org/trac/ompi/changeset/28544</a>; thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 20, 2013, at 9:00 PM, Alan Sayre &lt;ansayre62_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To quiet VS compile time warnings can the following (very) minor change be made:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; c:\program files
</span><br>
<span class="quotelev2">&gt;&gt; (x86)\openmpi_v1.6-x64\include\openmpi/ompi/mpi/cxx/op_inln.h(148):
</span><br>
<span class="quotelev2">&gt;&gt; warning C4800: 'int' : forcing value to bool 'true' or 'false'
</span><br>
<span class="quotelev2">&gt;&gt; (performance warning)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; from:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; inline bool
</span><br>
<span class="quotelev2">&gt;&gt; MPI::Op::Is_commutative(void) const
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   int commute;
</span><br>
<span class="quotelev2">&gt;&gt;   (void)MPI_Op_commutative(mpi_op, &amp;commute);
</span><br>
<span class="quotelev2">&gt;&gt;   return (bool) commute;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; to:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; inline bool
</span><br>
<span class="quotelev2">&gt;&gt; MPI::Op::Is_commutative(void) const
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   int commute;
</span><br>
<span class="quotelev2">&gt;&gt;   (void)MPI_Op_commutative(mpi_op, &amp;commute);
</span><br>
<span class="quotelev2">&gt;&gt;   return (commute != 0);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Alan
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="21939.php">Tom Rosmond: "[OMPI users] MPIIO max record size"</a>
<li><strong>Previous message:</strong> <a href="21937.php">Jeff Squyres (jsquyres): "Re: [OMPI users] minor change request"</a>
<li><strong>In reply to:</strong> <a href="21937.php">Jeff Squyres (jsquyres): "Re: [OMPI users] minor change request"</a>
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
