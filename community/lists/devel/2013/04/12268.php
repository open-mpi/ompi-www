<?
$subject_val = "Re: [OMPI devel] Problem when using struct types at specific offsets";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  9 19:06:16 2013" -->
<!-- isoreceived="20130409230616" -->
<!-- sent="Wed, 10 Apr 2013 01:06:07 +0200" -->
<!-- isosent="20130409230607" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem when using struct types at specific offsets" -->
<!-- id="EB1B3C03-6218-4C74-88E0-AE18E38F4C7E_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5162CF47.5030407_at_dkrz.de" -->
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
<strong>Date:</strong> 2013-04-09 19:06:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12269.php">marco atzeri: "Re: [OMPI devel] Open MPI 1.7rc9 tarballs up"</a>
<li><strong>Previous message:</strong> <a href="12267.php">Thomas Jahns: "[OMPI devel] Problem when using struct types at specific offsets"</a>
<li><strong>In reply to:</strong> <a href="12267.php">Thomas Jahns: "[OMPI devel] Problem when using struct types at specific offsets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/06/12479.php">Thomas Jahns: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thomas,
<br>
<p>Thanks for the detailed bug report and the test case. I successfully identified the culprit, and the issue is now fixed (commit r28319).
<br>
<p>&nbsp;&nbsp;Regards,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p>PS: During the debugging process I sketched the datatype representation to help myself understand the issue. I attached the figure here for the delight of whoever might be interested. It contains the 4 datatypes created in main, and the two datatypes created on the second invocation of the do_test function.
<br>
<p><p><p><p>On Apr 8, 2013, at 16:08 , Thomas Jahns &lt;jahns_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a colleague of mine has investigated a difficult problem we traced to OpenMPI
</span><br>
<span class="quotelev1">&gt; giving incorrectly delivered data on some struct datatypes which use specific
</span><br>
<span class="quotelev1">&gt; offsets (on the stack in our case but the problem can be reproduced when using
</span><br>
<span class="quotelev1">&gt; specifically chosen slices of an array). Our library is used to aggregate
</span><br>
<span class="quotelev1">&gt; several MPI communications in a generic and transparent manner and therefore we
</span><br>
<span class="quotelev1">&gt; need to be able to handle any combination of properly aligned offsets and
</span><br>
<span class="quotelev1">&gt; component types.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The attached example program contains the necessary steps to reproduce the problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. create the struct types in question
</span><br>
<span class="quotelev1">&gt; 2. send/recv the data
</span><br>
<span class="quotelev1">&gt; 3. compare to reference (said comparison works on several MPICH2 versions)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code prints than any array indices/values not matching the reference.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our platform is linux x86_64 with Debian squeeze, the tested versions of OpenMPI
</span><br>
<span class="quotelev1">&gt; are the 1.4.2 version supplied with squeeze and 1.6.4 compiled ourselves. For
</span><br>
<span class="quotelev1">&gt; 1.4.2 I also did a quick test in a i386 chroot and the code fails there too. gcc
</span><br>
<span class="quotelev1">&gt; 4.6.1 was used for the x86_64 cases and gcc 4.3.5 for the i386 chroot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry if the test is not of minimal size, but we were happy once he got this
</span><br>
<span class="quotelev1">&gt; down from several 10000 lines Fortran+C and even that took more than a day once
</span><br>
<span class="quotelev1">&gt; we understood the problem was unrelated to the Fortran program it originally
</span><br>
<span class="quotelev1">&gt; occurred in.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When running the program with OpenMPI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpicc -std=gnu99 ./mpi_test.c &amp;&amp; ./a.out
</span><br>
<span class="quotelev1">&gt; first tests:
</span><br>
<span class="quotelev1">&gt; second tests:
</span><br>
<span class="quotelev1">&gt; results_2[6]     = 8
</span><br>
<span class="quotelev1">&gt; ref_results_2[6] = 12
</span><br>
<span class="quotelev1">&gt; results_2[7]     = 9
</span><br>
<span class="quotelev1">&gt; ref_results_2[7] = 13
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPICH gives the expected result:
</span><br>
<span class="quotelev1">&gt; $ /sw/squeeze-x64/mpi/mpich2-1.4.1p1-gccsys/bin/mpicc -std=gnu99 ./mpi_test.c &amp;&amp;
</span><br>
<span class="quotelev1">&gt; ./a.out
</span><br>
<span class="quotelev1">&gt; first tests:
</span><br>
<span class="quotelev1">&gt; second tests:
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
<span class="quotelev1">&gt; &lt;mpi_test.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12268/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/devel/att-12268/PastedGraphic-2.png" alt="PastedGraphic-2.png">
<!-- attachment="PastedGraphic-2.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12269.php">marco atzeri: "Re: [OMPI devel] Open MPI 1.7rc9 tarballs up"</a>
<li><strong>Previous message:</strong> <a href="12267.php">Thomas Jahns: "[OMPI devel] Problem when using struct types at specific offsets"</a>
<li><strong>In reply to:</strong> <a href="12267.php">Thomas Jahns: "[OMPI devel] Problem when using struct types at specific offsets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/06/12479.php">Thomas Jahns: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
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
