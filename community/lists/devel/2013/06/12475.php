<?
$subject_val = "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file	parsing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 20 18:17:34 2013" -->
<!-- isoreceived="20130620221734" -->
<!-- sent="Thu, 20 Jun 2013 22:17:29 +0000" -->
<!-- isosent="20130620221729" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [bug/fix] correction of a small bug in conf file	parsing" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F69569C_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51A77091.8090903_at_ext.bull.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [bug/fix] correction of a small bug in conf file	parsing<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-20 18:17:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12476.php">Piotr Lesnicki: "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<li><strong>Previous message:</strong> <a href="12474.php">George Bosilca: "Re: [OMPI devel] BTL sendi"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/05/12421.php">Piotr Lesnicki: "[OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12476.php">Piotr Lesnicki: "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<li><strong>Reply:</strong> <a href="12476.php">Piotr Lesnicki: "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Piotr --
<br>
<p>Many thanks for the patch.  Sorry, our lex is quite a bit rusty, and it took us quite a while to look at this.  :-\
<br>
<p>I have a few questions:
<br>
<p>1. What happens if the file ends while in &lt;comment&gt;?  E.g., if a the last line of the file is &quot;/* Hello&quot;.
<br>
<p>2. Does this same kind of fixup need to be applied to the 5 other flex files in the OMPI source tree?
<br>
<p><p><p>On May 30, 2013, at 11:30 AM, Piotr Lesnicki &lt;piotr.lesnicki_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The parser of key/value configuration files (like
</span><br>
<span class="quotelev1">&gt; 'openmpi-mca-params.conf') has some small bugs:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - a parsing error occurs when there is no new line at the end of the
</span><br>
<span class="quotelev1">&gt;  file (and the error shows while reading the next conf file)
</span><br>
<span class="quotelev1">&gt; - error messages display wrong line numbers
</span><br>
<span class="quotelev1">&gt; - error messages show nothing meaninful when a new line replaces an
</span><br>
<span class="quotelev1">&gt;  expected token
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I attached a patch of the lex production rules of the keyval
</span><br>
<span class="quotelev1">&gt; parser to correct this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # steps to reproduce (all versions):
</span><br>
<span class="quotelev1">&gt; $ cp $OPAL_PREFIX/etc/openmpi-mca-params.conf .
</span><br>
<span class="quotelev1">&gt; $ (head -n -1 openmpi-mca-params.conf ; tail -n1 openmpi-mca-params.conf | tr -d '\n') &gt; params.conf
</span><br>
<span class="quotelev1">&gt; $ export OMPI_MCA_mca_param_files=$PWD/params.conf
</span><br>
<span class="quotelev1">&gt; $ mpicc -v
</span><br>
<span class="quotelev1">&gt; [berlin73:00360] keyval parser: error 1 reading file /home_nfs/lesnickp/tmp/params.conf at line 160:
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt; [berlin73:00360] keyval parser: error 1 reading file /home_nfs/lesnickp/local/openmpi-1.6.3/share/openmpi/mpicc-wrapper-data.txt at line 1:
</span><br>
<span class="quotelev1">&gt;  # There can be multiple blocks of configuration data, chosen by
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Piotr LESNICKI
</span><br>
<span class="quotelev1">&gt; &lt;lex.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="12476.php">Piotr Lesnicki: "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<li><strong>Previous message:</strong> <a href="12474.php">George Bosilca: "Re: [OMPI devel] BTL sendi"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/05/12421.php">Piotr Lesnicki: "[OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12476.php">Piotr Lesnicki: "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<li><strong>Reply:</strong> <a href="12476.php">Piotr Lesnicki: "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
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
