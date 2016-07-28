<?
$subject_val = "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 11 21:50:21 2013" -->
<!-- isoreceived="20131112025021" -->
<!-- sent="Mon, 11 Nov 2013 21:50:21 -0500" -->
<!-- isosent="20131112025021" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug in MPI.MINLOC with Java binding" -->
<!-- id="CA+ssbKX0-AkOM9GT0wWHYvG8Sotq6LPigEo_UA0QgrehhgsowQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B8B6ECD0-EA64-42CB-9AB6-A50604AFC457_at_open-mpi.org" -->
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
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-11 21:50:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13240.php">Ralph Castain: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Previous message:</strong> <a href="13238.php">Ralph Castain: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>In reply to:</strong> <a href="13238.php">Ralph Castain: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13240.php">Ralph Castain: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Reply:</strong> <a href="13240.php">Ralph Castain: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>In the nightly snapshot that I was using (openmpi-1.9a1r28919) there were
<br>
two java files (Minloc.java and Maxloc.java) inside
<br>
$OMPI_HOME/ompi/mpi/java/java
<br>
<p>However, these are no longer available in the trunk. I think this is
<br>
because of the reason Oscar mentioned that now MINLOC and MAXLOC operations
<br>
call to native ones rather Java implementations.
<br>
<p>Thank you,
<br>
Saliya
<br>
<p><p>On Mon, Nov 11, 2013 at 7:38 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm lost - where were you making a change?  I'm unaware of Minloc.java or
</span><br>
<span class="quotelev1">&gt; Maxloc.java files in the MPI bindings, so I assume the change was being
</span><br>
<span class="quotelev1">&gt; made to the Intracomm.java file?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 11, 2013, at 12:35 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been using nightly tarball openmpi-1.9a1r28919 with Java binding and
</span><br>
<span class="quotelev1">&gt; it had a bug in its MINLOC implementation (Minloc.java). Essentially, the
</span><br>
<span class="quotelev1">&gt; following line,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; out_array [outdisp + 1] = in_array [*outdisp* + 1] ;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; should be changed to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; out_array [outdisp + 1] = in_array [*indisp* + 1] ;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The same should be done for MAXLOC (Maxloc.java) implementation as well. I
</span><br>
<span class="quotelev1">&gt; tested with the change and both MINLOC and MAXLOC worked as expected
</span><br>
<span class="quotelev1">&gt; afterwards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, these files are no longer available in the latest trunk and it
</span><br>
<span class="quotelev1">&gt; seems the API for collective operations have changed as well. Still MINLOC
</span><br>
<span class="quotelev1">&gt; (and MAXLOC) does not work as expected. I've attached a sample code to
</span><br>
<span class="quotelev1">&gt; reproduce the issue and an output from it (for MINLOC).
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
<span class="quotelev1">&gt;  &lt;Minlocbug.bzip2&gt;_______________________________________________
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
<p><p><p><pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
Cell 812-391-4914 Home 812-961-6383
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13239/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13240.php">Ralph Castain: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Previous message:</strong> <a href="13238.php">Ralph Castain: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>In reply to:</strong> <a href="13238.php">Ralph Castain: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13240.php">Ralph Castain: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
<li><strong>Reply:</strong> <a href="13240.php">Ralph Castain: "Re: [OMPI devel] Bug in MPI.MINLOC with Java binding"</a>
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
