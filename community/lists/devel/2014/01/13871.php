<?
$subject_val = "[OMPI devel] trunk: typo in error message";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 02:33:26 2014" -->
<!-- isoreceived="20140123073326" -->
<!-- sent="Wed, 22 Jan 2014 23:33:25 -0800" -->
<!-- isosent="20140123073325" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] trunk: typo in error message" -->
<!-- id="CAAvDA15cK0PsUYMRrrd1X=Je4iZKAR9LxKMcOZS9xK9Semdu6g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] trunk: typo in error message<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 02:33:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13872.php">Christoph Niethammer: "[OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?"</a>
<li><strong>Previous message:</strong> <a href="13870.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 status update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13874.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk: typo in error message"</a>
<li><strong>Reply:</strong> <a href="13874.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk: typo in error message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As originally noted in Dec 2011 (
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2011/12/10169.php">http://www.open-mpi.org/community/lists/devel/2011/12/10169.php</a>) there is a
<br>
1-character typo in generate-asm.pl:
<br>
<p>$ cat -n generate-asm.pl | head -20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1  #!/usr/bin/perl -w
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4  my $asmarch = shift;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5  my $asmformat = shift;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6  my $basedir = shift;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7  my $output = shift;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9  if ( ! $asmarch) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;10      print &quot;usage: generate-asm.pl [ASMARCH] [ASMFORMAT] [BASEDIR]
<br>
[OUTPUT NAME]\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;11      exit(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;12  }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;14  open(INPUT, &quot;$basedir/$asmarch.asm&quot;) ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;15      die &quot;Could not open $basedir/$asmarch.asm: $!\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;16  open(OUTPUT, &quot;&gt;$output&quot;) || die &quot;Could not open $output: $1\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;18  $CONFIG = &quot;default&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;19  $TEXT = &quot;&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;20  $GLOBAL = &quot;&quot;;
<br>
<p>The &quot;$1&quot; on line 16 should actually be &quot;$!&quot;.
<br>
The perl variable &quot;$1&quot; is the result of a prior pattern match, of which
<br>
there ARE NONE.
<br>
The perl variable &quot;$!&quot;, however, is the equivalent of &quot;strerror(errno)&quot; in
<br>
C.
<br>
<p>This typo is still present in today's trunk.
<br>
It is, of course, entirely harmless.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13871/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13872.php">Christoph Niethammer: "[OMPI devel] mca_bml_r2_del_btl incorrect memory size reallocation?"</a>
<li><strong>Previous message:</strong> <a href="13870.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4 status update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13874.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk: typo in error message"</a>
<li><strong>Reply:</strong> <a href="13874.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk: typo in error message"</a>
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
