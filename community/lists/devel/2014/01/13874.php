<?
$subject_val = "Re: [OMPI devel] trunk: typo in error message";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 09:20:04 2014" -->
<!-- isoreceived="20140123142004" -->
<!-- sent="Thu, 23 Jan 2014 14:20:03 +0000" -->
<!-- isosent="20140123142003" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk: typo in error message" -->
<!-- id="5AC80A2A-FEA0-4199-912F-887DAB9583DB_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15cK0PsUYMRrrd1X=Je4iZKAR9LxKMcOZS9xK9Semdu6g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk: typo in error message<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 09:20:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13875.php">Adrian Reber: "[OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<li><strong>Previous message:</strong> <a href="13873.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>In reply to:</strong> <a href="13871.php">Paul Hargrove: "[OMPI devel] trunk: typo in error message"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed and slated for 1.7.5; thanks.
<br>
<p>On Jan 23, 2014, at 2:33 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; As originally noted in Dec 2011 (<a href="http://www.open-mpi.org/community/lists/devel/2011/12/10169.php">http://www.open-mpi.org/community/lists/devel/2011/12/10169.php</a>) there is a 1-character typo in generate-asm.pl:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat -n generate-asm.pl | head -20
</span><br>
<span class="quotelev1">&gt;      1  #!/usr/bin/perl -w
</span><br>
<span class="quotelev1">&gt;      2  
</span><br>
<span class="quotelev1">&gt;      3  
</span><br>
<span class="quotelev1">&gt;      4  my $asmarch = shift;
</span><br>
<span class="quotelev1">&gt;      5  my $asmformat = shift;
</span><br>
<span class="quotelev1">&gt;      6  my $basedir = shift;
</span><br>
<span class="quotelev1">&gt;      7  my $output = shift;
</span><br>
<span class="quotelev1">&gt;      8  
</span><br>
<span class="quotelev1">&gt;      9  if ( ! $asmarch) { 
</span><br>
<span class="quotelev1">&gt;     10      print &quot;usage: generate-asm.pl [ASMARCH] [ASMFORMAT] [BASEDIR] [OUTPUT NAME]\n&quot;;
</span><br>
<span class="quotelev1">&gt;     11      exit(1);
</span><br>
<span class="quotelev1">&gt;     12  }
</span><br>
<span class="quotelev1">&gt;     13  
</span><br>
<span class="quotelev1">&gt;     14  open(INPUT, &quot;$basedir/$asmarch.asm&quot;) || 
</span><br>
<span class="quotelev1">&gt;     15      die &quot;Could not open $basedir/$asmarch.asm: $!\n&quot;;
</span><br>
<span class="quotelev1">&gt;     16  open(OUTPUT, &quot;&gt;$output&quot;) || die &quot;Could not open $output: $1\n&quot;;
</span><br>
<span class="quotelev1">&gt;     17  
</span><br>
<span class="quotelev1">&gt;     18  $CONFIG = &quot;default&quot;;
</span><br>
<span class="quotelev1">&gt;     19  $TEXT = &quot;&quot;;
</span><br>
<span class="quotelev1">&gt;     20  $GLOBAL = &quot;&quot;;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;$1&quot; on line 16 should actually be &quot;$!&quot;.
</span><br>
<span class="quotelev1">&gt; The perl variable &quot;$1&quot; is the result of a prior pattern match, of which there ARE NONE.
</span><br>
<span class="quotelev1">&gt; The perl variable &quot;$!&quot;, however, is the equivalent of &quot;strerror(errno)&quot; in C.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This typo is still present in today's trunk.
</span><br>
<span class="quotelev1">&gt; It is, of course, entirely harmless.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="13875.php">Adrian Reber: "[OMPI devel] [PATCH] make orte-checkpoint communicate with orterun again"</a>
<li><strong>Previous message:</strong> <a href="13873.php">Ralph Castain: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>In reply to:</strong> <a href="13871.php">Paul Hargrove: "[OMPI devel] trunk: typo in error message"</a>
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
