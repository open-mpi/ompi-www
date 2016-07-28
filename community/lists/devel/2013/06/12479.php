<?
$subject_val = "Re: [OMPI devel] Problem when using struct types at specific offsets";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 10:33:33 2013" -->
<!-- isoreceived="20130621143333" -->
<!-- sent="Fri, 21 Jun 2013 16:33:27 +0200" -->
<!-- isosent="20130621143327" -->
<!-- name="Thomas Jahns" -->
<!-- email="jahns_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem when using struct types at specific offsets" -->
<!-- id="51C46437.4000808_at_dkrz.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Thomas Jahns (<em>jahns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-21 10:33:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12480.php">Rolf vandeVaart: "[OMPI devel] RGET issue when send is less than receive"</a>
<li><strong>Previous message:</strong> <a href="12478.php">Piotr Lesnicki: "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/04/12267.php">Thomas Jahns: "[OMPI devel] Problem when using struct types at specific offsets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12481.php">George Bosilca: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
<li><strong>Reply:</strong> <a href="12481.php">George Bosilca: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>On 04/08/2013 04:08 PM, Thomas Jahns wrote:
<br>
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
<p>our IT service provider has applied the patch to openmpi 1.6.4 and the C
<br>
test-case I provided now works but the original code which uses a bigger number
<br>
of struct dataypes still fails.
<br>
<p>Has anyone already discovered a potential problem with the fix provided in
<br>
r28319? I'm asking because developing the C test case is quite some amount of
<br>
work and is not easily reproducible with every Fortran compiler because it
<br>
depends on the stack layout.
<br>
<p>Regards, Thomas
<br>
<pre>
-- 
Thomas Jahns
DKRZ GmbH, Department: Application software
Deutsches Klimarechenzentrum
Bundesstra&#223;e 45a
D-20146 Hamburg
Phone: +49-40-460094-151
Fax: +49-40-460094-270
Email: Thomas Jahns &lt;jahns_at_[hidden]&gt;

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12479/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12480.php">Rolf vandeVaart: "[OMPI devel] RGET issue when send is less than receive"</a>
<li><strong>Previous message:</strong> <a href="12478.php">Piotr Lesnicki: "Re: [OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/04/12267.php">Thomas Jahns: "[OMPI devel] Problem when using struct types at specific offsets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12481.php">George Bosilca: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
<li><strong>Reply:</strong> <a href="12481.php">George Bosilca: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
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
