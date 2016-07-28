<?
$subject_val = "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 11 22:35:59 2013" -->
<!-- isoreceived="20131112033559" -->
<!-- sent="Mon, 11 Nov 2013 19:35:18 -0800" -->
<!-- isosent="20131112033518" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug in MPI.MINLOC with Java binding" -->
<!-- id="C24F71DE-D24B-4F8B-80F2-044B719FDAA8_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CA+ssbKX0-AkOM9GT0wWHYvG8Sotq6LPigEo_UA0QgrehhgsowQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-11-11 22:35:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13241.php">Ralph Castain: "[OMPI devel] Fwd:  Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Previous message:</strong> <a href="13239.php">Saliya Ekanayake: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>In reply to:</strong> <a href="13239.php">Saliya Ekanayake: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13242.php">Oscar Vega-Gisbert: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Afraid I'll have to let them answer - I can't find the corresponding code.
<br>
<p>On Nov 11, 2013, at 6:50 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the nightly snapshot that I was using (openmpi-1.9a1r28919) there were two java files (Minloc.java and Maxloc.java) inside $OMPI_HOME/ompi/mpi/java/java 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, these are no longer available in the trunk. I think this is because of the reason Oscar mentioned that now MINLOC and MAXLOC operations call to native ones rather Java implementations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Nov 11, 2013 at 7:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I'm lost - where were you making a change?  I'm unaware of Minloc.java or Maxloc.java files in the MPI bindings, so I assume the change was being made to the Intracomm.java file?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 11, 2013, at 12:35 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've been using nightly tarball openmpi-1.9a1r28919 with Java binding and it had a bug in its MINLOC implementation (Minloc.java). Essentially, the following line,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; out_array [outdisp + 1] = in_array [outdisp + 1] ;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; should be changed to 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; out_array [outdisp + 1] = in_array [indisp + 1] ;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The same should be done for MAXLOC (Maxloc.java) implementation as well. I tested with the change and both MINLOC and MAXLOC worked as expected afterwards. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, these files are no longer available in the latest trunk and it seems the API for collective operations have changed as well. Still MINLOC (and MAXLOC) does not work as expected. I've attached a sample code to reproduce the issue and an output from it (for MINLOC). 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am running on 64bit Ubuntu 12.04.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you in advance,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake esaliya_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Minlocbug.bzip2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake esaliya_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13240/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13241.php">Ralph Castain: "[OMPI devel] Fwd:  Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Previous message:</strong> <a href="13239.php">Saliya Ekanayake: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>In reply to:</strong> <a href="13239.php">Saliya Ekanayake: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13242.php">Oscar Vega-Gisbert: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
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
