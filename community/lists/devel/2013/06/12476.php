<?
$subject_val = "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 07:40:48 2013" -->
<!-- isoreceived="20130621114048" -->
<!-- sent="Fri, 21 Jun 2013 13:40:21 +0200" -->
<!-- isosent="20130621114021" -->
<!-- name="Piotr Lesnicki" -->
<!-- email="piotr.lesnicki_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing" -->
<!-- id="51C43BA5.6000306_at_ext.bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F69569C_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing<br>
<strong>From:</strong> Piotr Lesnicki (<em>piotr.lesnicki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-21 07:40:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12477.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<li><strong>Previous message:</strong> <a href="12475.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file	parsing"</a>
<li><strong>In reply to:</strong> <a href="12475.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file	parsing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12477.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<li><strong>Reply:</strong> <a href="12477.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>1) you are right, an eof in the middle of a &lt;comment&gt; section must be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;handled explicitly, otherwise it ends by an unrelated error later,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;just as it currently does. By the way, here it ends with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[no-options-error] which has no corresponding message in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;'help-opal-wrapper.txt'.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;I joined the patch to correct this &lt;comment&gt; problem.
<br>
<p>2) indeed, other lex files have similar patterns to 'keyval_lex.l', so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;we should correct them also. I will take a look at them.
<br>
<p>Thanks,
<br>
<p>Piotr
<br>
<p><p>Le 21/06/2013 00:17, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; Piotr --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks for the patch.  Sorry, our lex is quite a bit rusty, and it took us quite a while to look at this.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a few questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. What happens if the file ends while in&lt;comment&gt;?  E.g., if a the last line of the file is &quot;/* Hello&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Does this same kind of fixup need to be applied to the 5 other flex files in the OMPI source tree?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 30, 2013, at 11:30 AM, Piotr Lesnicki&lt;piotr.lesnicki_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The parser of key/value configuration files (like
</span><br>
<span class="quotelev2">&gt;&gt; 'openmpi-mca-params.conf') has some small bugs:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - a parsing error occurs when there is no new line at the end of the
</span><br>
<span class="quotelev2">&gt;&gt;   file (and the error shows while reading the next conf file)
</span><br>
<span class="quotelev2">&gt;&gt; - error messages display wrong line numbers
</span><br>
<span class="quotelev2">&gt;&gt; - error messages show nothing meaninful when a new line replaces an
</span><br>
<span class="quotelev2">&gt;&gt;   expected token
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I attached a patch of the lex production rules of the keyval
</span><br>
<span class="quotelev2">&gt;&gt; parser to correct this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # steps to reproduce (all versions):
</span><br>
<span class="quotelev2">&gt;&gt; $ cp $OPAL_PREFIX/etc/openmpi-mca-params.conf .
</span><br>
<span class="quotelev2">&gt;&gt; $ (head -n -1 openmpi-mca-params.conf ; tail -n1 openmpi-mca-params.conf | tr -d '\n')&gt;  params.conf
</span><br>
<span class="quotelev2">&gt;&gt; $ export OMPI_MCA_mca_param_files=$PWD/params.conf
</span><br>
<span class="quotelev2">&gt;&gt; $ mpicc -v
</span><br>
<span class="quotelev2">&gt;&gt; [berlin73:00360] keyval parser: error 1 reading file /home_nfs/lesnickp/tmp/params.conf at line 160:
</span><br>
<span class="quotelev2">&gt;&gt;   #
</span><br>
<span class="quotelev2">&gt;&gt; [berlin73:00360] keyval parser: error 1 reading file /home_nfs/lesnickp/local/openmpi-1.6.3/share/openmpi/mpicc-wrapper-data.txt at line 1:
</span><br>
<span class="quotelev2">&gt;&gt;   # There can be multiple blocks of configuration data, chosen by
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Piotr LESNICKI
</span><br>
<span class="quotelev2">&gt;&gt; &lt;lex.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12476/lex_eof_comment.patch">lex_eof_comment.patch</a>
</ul>
<!-- attachment="lex_eof_comment.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12477.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<li><strong>Previous message:</strong> <a href="12475.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file	parsing"</a>
<li><strong>In reply to:</strong> <a href="12475.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file	parsing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12477.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<li><strong>Reply:</strong> <a href="12477.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
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
