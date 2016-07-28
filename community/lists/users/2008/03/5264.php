<?
$subject_val = "Re: [OMPI users] 2 questions about Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 11:05:07 2008" -->
<!-- isoreceived="20080325150507" -->
<!-- sent="Tue, 25 Mar 2008 11:04:53 -0400" -->
<!-- isosent="20080325150453" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 2 questions about Open MPI" -->
<!-- id="AA9464CB-6CF1-4104-9B8E-E981499B635F_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="32458229.1206448462315.JavaMail.root_at_ps15" -->
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
<strong>Subject:</strong> Re: [OMPI users] 2 questions about Open MPI<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-25 11:04:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5265.php">George Bosilca: "Re: [OMPI users] communicating with the caller"</a>
<li><strong>Previous message:</strong> <a href="5263.php">slimtimmy_at_[hidden]: "[OMPI users] communicating with the caller"</a>
<li><strong>In reply to:</strong> <a href="5262.php">powernetfreak_at_[hidden]: "Re: [OMPI users] 2 questions about Open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 25, 2008, at 8:34 AM, powernetfreak_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; thanks for your help.
</span><br>
<span class="quotelev1">&gt; So Open MPI is OS dependent and actually it dont support Windows
</span><br>
<span class="quotelev1">&gt; plattforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would want to know if (Open) MPI sipports data decomposition and\ or
</span><br>
<span class="quotelev1">&gt; task level parallelism.
</span><br>
<span class="quotelev1">&gt; I think that MPI supports task level parallelism.
</span><br>
<span class="quotelev1">&gt; But i also think that OpenMPI dont support data decomposition (like
</span><br>
<span class="quotelev1">&gt; here described: <a href="http://www.netlib.org/pvm3/book/node32.html">http://www.netlib.org/pvm3/book/node32.html</a> ) &quot;out-of-
</span><br>
<span class="quotelev1">&gt; the-box&quot;.
</span><br>
<p>&quot;Out-of-the-box&quot; ? Open MPI support everything in the MPI standard,  
<br>
which include several functions for data decomposition. However, these  
<br>
functions have to be explicitly called by the application, MPI (read  
<br>
all MPI libraries) is unable to do any magic otherwise.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; King regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; peter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----Urspr&#252;ngliche Nachricht----
</span><br>
<span class="quotelev2">&gt;&gt; Von: jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Datum: 25.03.2008 13:08
</span><br>
<span class="quotelev2">&gt;&gt; An: &quot;powernetfreak_at_[hidden]&quot;&lt;powernetfreak_at_[hidden]&gt;, &quot;Open MPI
</span><br>
<span class="quotelev1">&gt; Users&quot;&lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Betreff: Re: [OMPI users] 2 questions about Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 25, 2008, at 5:09 AM, powernetfreak_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i need some information for my thesis and i am not sure if it's
</span><br>
<span class="quotelev1">&gt; right
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what i found in the internet before.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; therefore i want to ask you if the following two sentences are
</span><br>
<span class="quotelev1">&gt; right:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   - Open MPI is OS independent and it runs on windows as well as
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Windows port seems to be perpetual; it's in progress, but the v1.
</span><br>
<span class="quotelev1">&gt; 2
</span><br>
<span class="quotelev2">&gt;&gt; series does not support Windows.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   - Open MPI dont has data decomposition support itself. I just
</span><br>
<span class="quotelev1">&gt; can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; add some functions to get some kind of data decomposition support
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure what you're asking; Open MPI supports all the MPI
</span><br>
<span class="quotelev2">&gt;&gt; datatype functionality.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jetzt neu: Der Routenplaner von Tiscali
</span><br>
<span class="quotelev1">&gt; <a href="http://www.tiscali.de/trav/routenplaner.html">http://www.tiscali.de/trav/routenplaner.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5264/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5265.php">George Bosilca: "Re: [OMPI users] communicating with the caller"</a>
<li><strong>Previous message:</strong> <a href="5263.php">slimtimmy_at_[hidden]: "[OMPI users] communicating with the caller"</a>
<li><strong>In reply to:</strong> <a href="5262.php">powernetfreak_at_[hidden]: "Re: [OMPI users] 2 questions about Open MPI"</a>
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
