<?
$subject_val = "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 11 19:39:23 2013" -->
<!-- isoreceived="20131112003923" -->
<!-- sent="Mon, 11 Nov 2013 16:38:43 -0800" -->
<!-- isosent="20131112003843" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug in MPI.MINLOC with Java binding" -->
<!-- id="B8B6ECD0-EA64-42CB-9AB6-A50604AFC457_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+ssbKVwDDR9iytmLdK8JBEERU9=1XBzXAHrSwgFXeuHCt4ZPA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug in MPI.MINLOC with Java binding<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-11 19:38:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13239.php">Saliya Ekanayake: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Previous message:</strong> <a href="13237.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>In reply to:</strong> <a href="13236.php">Saliya Ekanayake: "[OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13239.php">Saliya Ekanayake: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Reply:</strong> <a href="13239.php">Saliya Ekanayake: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm lost - where were you making a change?  I'm unaware of Minloc.java or Maxloc.java files in the MPI bindings, so I assume the change was being made to the Intracomm.java file?
<br>
<p><p>On Nov 11, 2013, at 12:35 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been using nightly tarball openmpi-1.9a1r28919 with Java binding and it had a bug in its MINLOC implementation (Minloc.java). Essentially, the following line,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; out_array [outdisp + 1] = in_array [outdisp + 1] ;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; should be changed to 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; out_array [outdisp + 1] = in_array [indisp + 1] ;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The same should be done for MAXLOC (Maxloc.java) implementation as well. I tested with the change and both MINLOC and MAXLOC worked as expected afterwards. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, these files are no longer available in the latest trunk and it seems the API for collective operations have changed as well. Still MINLOC (and MAXLOC) does not work as expected. I've attached a sample code to reproduce the issue and an output from it (for MINLOC). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running on 64bit Ubuntu 12.04.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you in advance,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt; &lt;Minlocbug.bzip2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13238/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13239.php">Saliya Ekanayake: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Previous message:</strong> <a href="13237.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>In reply to:</strong> <a href="13236.php">Saliya Ekanayake: "[OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13239.php">Saliya Ekanayake: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Reply:</strong> <a href="13239.php">Saliya Ekanayake: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
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
