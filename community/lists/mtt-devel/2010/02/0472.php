<?
$subject_val = "Re: [MTT devel] MTToGDS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 08:42:07 2010" -->
<!-- isoreceived="20100210134207" -->
<!-- sent="Wed, 10 Feb 2010 16:39:13 +0300" -->
<!-- isosent="20100210133913" -->
<!-- name="Igor Ivanov" -->
<!-- email="igor.ivanov_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTToGDS" -->
<!-- id="4B72B701.90609_at_argus-cv.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="18FF7395-DAF5-4639-9B0E-DFDA8D017326_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTToGDS<br>
<strong>From:</strong> Igor Ivanov (<em>igor.ivanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-10 08:39:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0473.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0471.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="0471.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0466.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
<font size="-1"><font face="Arial">Yes, it is more friendly way.</font></font><br>
<br>
Jeff Squyres wrote:
<blockquote cite="mid:18FF7395-DAF5-4639-9B0E-DFDA8D017326@cisco.com"
 type="cite">
  <pre wrap="">On Feb 10, 2010, at 4:18 AM, Igor Ivanov wrote:

  </pre>
  <blockquote type="cite">
    <pre wrap="">I believe that it is just a warning and you can use mtt w/o analyzer that allow get additional info from output.
    </pre>
  </blockquote>
  <pre wrap=""><!---->
True, it's just a warning.  But it's (very) big and ugly.  :-)  Makes it quite difficult to read --verbose output and see if anything actually went wrong.

Is this patch correct?  It checks to see if there is no analyze_module, and if so, just returns the form.


Index: lib/MTT/Reporter/MTTGDS.pm
===================================================================
--- lib/MTT/Reporter/MTTGDS.pm  (revision 1346)
+++ lib/MTT/Reporter/MTTGDS.pm  (working copy)
@@ -576,6 +576,11 @@
 
     my $ini    = $MTT::Globals::Internals-&gt;{ini};
     my $module = $ini-&gt;val( "Test run: " . $section, "analyze_module" );
+
+    # If there's no analyze module, then just return
+    return $form
+        if (!$module);
+
     $module = "MTT::Test::Analyze::Performance::$module";
     my $method = "PreReport";
     my @args   = ( $phase, $section, $report );


  </pre>
</blockquote>
<BR>
<BR>
__________ Information from ESET NOD32 Antivirus, version of virus signature database 4854 (20100210) __________<BR>
<BR>
The message was checked by ESET NOD32 Antivirus.<BR>
<BR>
<A HREF="http://www.esetnod32.ru">http://www.esetnod32.ru</A><BR>


</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0473.php">Igor Ivanov: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0471.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="0471.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0466.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
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
