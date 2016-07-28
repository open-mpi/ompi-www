<?
$subject_val = "Re: [OMPI devel] Problem when using struct types at specific offsets";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 11:27:06 2013" -->
<!-- isoreceived="20130621152706" -->
<!-- sent="Fri, 21 Jun 2013 17:26:59 +0200" -->
<!-- isosent="20130621152659" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem when using struct types at specific offsets" -->
<!-- id="4802A025-2DE4-4C73-B083-9FA307F25F54_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51C46437.4000808_at_dkrz.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem when using struct types at specific offsets<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-21 11:26:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12482.php">Nathan Hjelm: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<li><strong>Previous message:</strong> <a href="12480.php">Rolf vandeVaart: "[OMPI devel] RGET issue when send is less than receive"</a>
<li><strong>In reply to:</strong> <a href="12479.php">Thomas Jahns: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thomas,
<br>
<p>I'm not aware about any other issue with the datatypes.
<br>
<p>There might an easy way to see what the issue with your application is. If you can debug your application, and know exactly which datatype has problems, then attach with gdb and call ompi_datatype_dump(type), where type is the datatype creating problems. With the resulting output it should be pretty easy to reproduce a test case and/or identify the problem.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Jun 21, 2013, at 16:33 , Thomas Jahns &lt;jahns_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; our IT service provider has applied the patch to openmpi 1.6.4 and the C
</span><br>
<span class="quotelev1">&gt; test-case I provided now works but the original code which uses a bigger number
</span><br>
<span class="quotelev1">&gt; of struct dataypes still fails.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anyone already discovered a potential problem with the fix provided in
</span><br>
<span class="quotelev1">&gt; r28319? I'm asking because developing the C test case is quite some amount of
</span><br>
<span class="quotelev1">&gt; work and is not easily reproducible with every Fortran compiler because it
</span><br>
<span class="quotelev1">&gt; depends on the stack layout.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards, Thomas
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Thomas Jahns
</span><br>
<span class="quotelev1">&gt; DKRZ GmbH, Department: Application software
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Deutsches Klimarechenzentrum
</span><br>
<span class="quotelev1">&gt; Bundesstra&#223;e 45a
</span><br>
<span class="quotelev1">&gt; D-20146 Hamburg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Phone: +49-40-460094-151
</span><br>
<span class="quotelev1">&gt; Fax: +49-40-460094-270
</span><br>
<span class="quotelev1">&gt; Email: Thomas Jahns &lt;jahns_at_[hidden]&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12482.php">Nathan Hjelm: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<li><strong>Previous message:</strong> <a href="12480.php">Rolf vandeVaart: "[OMPI devel] RGET issue when send is less than receive"</a>
<li><strong>In reply to:</strong> <a href="12479.php">Thomas Jahns: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
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
